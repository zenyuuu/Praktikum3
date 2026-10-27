<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info — Praktikum Cloud</title>
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
                <li><a href="about.php">Tentang</a></li>
                <li><a href="info.php" class="active">Server Info</a></li>
            </ul>
        </div>
    </nav>

    <main class="page">
        <div class="container">
            <h1 class="page-title">Server & Environment Info</h1>
            <p class="page-lead">Informasi runtime yang sedang berjalan di server ini (lokal atau Azure).</p>

            <div class="info-grid">
                <div class="info-card">
                    <span class="info-label">PHP Version</span>
                    <span class="info-value"><?= htmlspecialchars(PHP_VERSION) ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Operating System</span>
                    <span class="info-value"><?= htmlspecialchars(PHP_OS) ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Server Software</span>
                    <span class="info-value"><?= htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Document Root</span>
                    <span class="info-value small"><?= htmlspecialchars($_SERVER['DOCUMENT_ROOT'] ?? 'N/A') ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Server Name</span>
                    <span class="info-value"><?= htmlspecialchars($_SERVER['SERVER_NAME'] ?? 'N/A') ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Request Method</span>
                    <span class="info-value"><?= htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? 'N/A') ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Protocol</span>
                    <span class="info-value"><?= htmlspecialchars($_SERVER['SERVER_PROTOCOL'] ?? 'N/A') ?></span>
                </div>
                <div class="info-card">
                    <span class="info-label">Current Time (UTC)</span>
                    <span class="info-value"><?= gmdate('Y-m-d H:i:s') ?> UTC</span>
                </div>
            </div>

            <?php
            // Deteksi apakah berjalan di Azure
            $isAzure = !empty(getenv('WEBSITE_SITE_NAME')) || !empty(getenv('WEBSITE_HOSTNAME'));
            ?>
            <div class="content-card <?= $isAzure ? 'azure-yes' : 'azure-no' ?>">
                <h2><?= $isAzure ? '✅ Berjalan di Azure App Service' : '💻 Berjalan di lingkungan lokal' ?></h2>
                <?php if ($isAzure): ?>
                    <ul class="list">
                        <li><strong>Site Name:</strong> <?= htmlspecialchars(getenv('WEBSITE_SITE_NAME') ?: 'N/A') ?></li>
                        <li><strong>Hostname:</strong> <?= htmlspecialchars(getenv('WEBSITE_HOSTNAME') ?: 'N/A') ?></li>
                        <li><strong>Resource Group:</strong> <?= htmlspecialchars(getenv('WEBSITE_RESOURCE_GROUP') ?: 'N/A') ?></li>
                        <li><strong>Instance ID:</strong> <?= htmlspecialchars(getenv('WEBSITE_INSTANCE_ID') ?: 'N/A') ?></li>
                    </ul>
                <?php else: ?>
                    <p>Setelah di-deploy ke Azure, halaman ini akan menampilkan nama site, hostname, dan resource group secara otomatis.</p>
                <?php endif; ?>
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
