<?php
// Koneksi database. Jika DB_HOST di-set (Azure Database for MySQL) -> MySQL.
// Jika tidak, otomatis memakai SQLite (file) sehingga aplikasi langsung jalan.
function db(): PDO
{
    static $pdo = null;
    if ($pdo) {
        return $pdo;
    }
    $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $host = getenv('DB_HOST');
    if ($host) {
        $name = getenv('DB_NAME') ?: 'catatan';
        $port = getenv('DB_PORT') ?: '3306';
        $opts[PDO::MYSQL_ATTR_SSL_CA] = '/etc/ssl/certs/ca-certificates.crt';
        $opts[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
        $pdo = new PDO(
            "mysql:host=$host;port=$port;dbname=$name;charset=utf8mb4",
            getenv('DB_USER') ?: 'root',
            getenv('DB_PASS') ?: '',
            $opts
        );
        $pdo->exec('CREATE TABLE IF NOT EXISTS catatan (
            id INT AUTO_INCREMENT PRIMARY KEY,
            judul VARCHAR(150) NOT NULL,
            mata_kuliah VARCHAR(100) NOT NULL,
            isi TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) CHARACTER SET utf8mb4');
    } else {
        // /home persisten di Azure App Service Linux; lokal pakai folder ./data
        $dir = (is_dir('/home') && is_writable('/home')) ? '/home/data' : __DIR__ . '/data';
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }
        $pdo = new PDO('sqlite:' . $dir . '/catatan.db', null, null, $opts);
        $pdo->exec('CREATE TABLE IF NOT EXISTS catatan (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            judul TEXT NOT NULL,
            mata_kuliah TEXT NOT NULL,
            isi TEXT NOT NULL,
            created_at TEXT DEFAULT CURRENT_TIMESTAMP
        )');
    }
    return $pdo;
}

function e($v): string
{
    return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
}

function validate(array $in): array
{
    $data = [
        'judul' => trim($in['judul'] ?? ''),
        'mata_kuliah' => trim($in['mata_kuliah'] ?? ''),
        'isi' => trim($in['isi'] ?? ''),
    ];
    $errors = [];
    if ($data['judul'] === '' || mb_strlen($data['judul']) > 150) {
        $errors[] = 'Judul wajib diisi (maks. 150 karakter).';
    }
    if ($data['mata_kuliah'] === '' || mb_strlen($data['mata_kuliah']) > 100) {
        $errors[] = 'Mata kuliah wajib diisi (maks. 100 karakter).';
    }
    if ($data['isi'] === '') {
        $errors[] = 'Isi catatan wajib diisi.';
    }
    return [$data, $errors];
}
