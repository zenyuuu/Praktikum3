-- Opsional: tabel dibuat otomatis oleh config.php. Pakai file ini jika ingin membuat manual di MySQL.
CREATE TABLE IF NOT EXISTS catatan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(150) NOT NULL,
  mata_kuliah VARCHAR(100) NOT NULL,
  isi TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8mb4;
