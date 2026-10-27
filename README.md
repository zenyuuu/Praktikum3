# Praktikum Cloud — PHP Landing Page

Project PHP native sederhana (tanpa database) untuk modul **Deploy web app melalui Azure**.

## Struktur

```
php-landing-azure/
├── index.php       # Halaman utama
├── about.php       # Tentang project & cara deploy
├── info.php        # Info PHP & deteksi Azure
├── assets/
│   └── style.css
└── README.md
```

## Cara pakai

### 1. Upload ke GitHub
1. Buat repository baru (boleh **private**).
2. Upload semua file di folder ini ke root repository.
3. Pastikan `index.php` ada di **root** (bukan di dalam subfolder).

### 2. Deploy ke Azure (Deployment Center)
1. Buat **App Service Plan** (Linux, Free F1) + **Web App** (PHP 8.x).
2. Buka Web App → **Deployment Center**.
3. Source: **GitHub** → authorize → pilih organization, repository, branch.
4. Save → tunggu status **Success**.
5. Buka URL `https://<nama-app>.azurewebsites.net`.

### 3. Deploy dari VS Code (opsional)
1. Install extension **Azure App Service**.
2. Login dengan akun Azure for Students.
3. Klik kanan Web App → **Deploy to Web App...** → pilih folder project ini.

## Catatan modul
- Nama Web App: format `web-praktikum-(nama)`
- Runtime: PHP 8.x, OS Linux
- Region: pilih yang diizinkan subscription (mis. Southeast Asia jika Indonesia Central ditolak)
