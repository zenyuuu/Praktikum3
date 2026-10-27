<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang — Praktikum Cloud</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-inner">
            <a href="index.php" class="logo">Cloud<span>Praktikum</span></a>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php" class="active">Tentang</a></li>
                <li><a href="info.php">Server Info</a></li>
            </ul>
        </div>
    </nav>

    <main class="page">
        <div class="container">
            <h1 class="page-title">Tentang Project</h1>
            <p class="page-lead">
                Landing page PHP native untuk modul <strong>Deploy web app melalui Azure</strong>.
            </p>

            <div class="content-card">
                <h2>Tujuan</h2>
                <ul class="list">
                    <li>Membuat App Service Plan & Web App di Microsoft Azure</li>
                    <li>Menghubungkan Web App ke repository GitHub (CI/CD otomatis)</li>
                    <li>Deploy langsung dari VS Code (opsional)</li>
                    <li>Memahami perbedaan IaaS (VM) vs SaaS (App Service)</li>
                </ul>
            </div>

            <div class="content-card">
                <h2>Struktur Folder</h2>
                <pre class="code-block">php-landing-azure/
├── index.php          ← halaman utama (wajib di root)
├── about.php
├── info.php
├── assets/
│   └── style.css
└── README.md</pre>
            </div>

            <div class="content-card">
                <h2>Cara Deploy (ringkas)</h2>
                <ol class="list numbered">
                    <li>Push project ini ke GitHub (boleh private)</li>
                    <li>Buat Web App di Azure (Runtime: PHP 8.x, Linux)</li>
                    <li>Deployment Center → Source: GitHub → pilih repo & branch</li>
                    <li>Save → tunggu status Success</li>
                    <li>Buka URL <code>https://nama-app.azurewebsites.net</code></li>
                </ol>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <p>Modul Praktikum Komputasi Awan · Semester Ganjil 2026–2027</p>
        </div>
    </footer>
</body>
</html>
