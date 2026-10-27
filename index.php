<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Cloud — Landing Page</title>
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
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="about.php">Tentang</a></li>
                <li><a href="info.php">Server Info</a></li>
                <li><a href="#fitur" class="btn-nav">Fitur</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="container hero-content">
            <p class="badge">Azure App Service · PHP Native</p>
            <h1>Deploy Website PHP<br>ke <span class="gradient">Azure Cloud</span></h1>
            <p class="subtitle">
                Project sederhana untuk modul praktikum Komputasi Awan.
                Tanpa database, siap di-deploy lewat GitHub atau VS Code.
            </p>
            <div class="hero-actions">
                <a href="info.php" class="btn btn-primary">Lihat Info Server</a>
                <a href="about.php" class="btn btn-outline">Tentang Project</a>
            </div>
        </div>
        <div class="hero-glow"></div>
    </header>

    <section id="fitur" class="features">
        <div class="container">
            <h2 class="section-title">Fitur Project</h2>
            <p class="section-desc">Semua yang dibutuhkan untuk lulus modul deploy Azure App Service.</p>
            <div class="feature-grid">
                <div class="card">
                    <div class="card-icon">☁️</div>
                    <h3>Azure Ready</h3>
                    <p>Struktur folder root-level <code>index.php</code>, cocok untuk App Service Linux + PHP 8.x.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🚀</div>
                    <h3>CI/CD Friendly</h3>
                    <p>Bisa dihubungkan ke GitHub Actions lewat Deployment Center atau deploy langsung dari VS Code.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📱</div>
                    <h3>Responsive UI</h3>
                    <p>Tampilan modern, mobile-friendly, pakai pure CSS tanpa framework berat.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🔧</div>
                    <h3>Server Info</h3>
                    <p>Halaman info menampilkan versi PHP, OS, dan environment Azure secara dinamis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta-box">
            <h2>Siap di-deploy</h2>
            <p>Push ke GitHub → hubungkan di Deployment Center → website live di <code>*.azurewebsites.net</code></p>
            <a href="info.php" class="btn btn-primary">Cek Environment</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-inner">
            <p>Modul Praktikum Komputasi Awan · Semester Ganjil 2026–2027</p>
            <p class="muted">PHP <?= PHP_VERSION ?> · <?= PHP_OS ?></p>
        </div>
    </footer>
</body>
</html>
