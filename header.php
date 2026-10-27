<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title ?? 'Catatan Kuliah') ?></title>
<style>
  *{box-sizing:border-box}
  body{margin:0;font-family:system-ui,Segoe UI,Arial,sans-serif;background:#f3f4f6;color:#1f2937}
  .wrap{max-width:860px;margin:0 auto;padding:24px 16px}
  h1{margin:0 0 4px} .sub{color:#6b7280;margin:0 0 20px}
  .card{background:#fff;border-radius:10px;padding:18px;box-shadow:0 1px 3px rgba(0,0,0,.08);margin-bottom:14px}
  .bar{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:16px}
  input,textarea{width:100%;padding:10px;border:1px solid #d1d5db;border-radius:6px;font:inherit}
  .bar input{flex:1;min-width:180px;width:auto}
  label{display:block;margin:12px 0 4px;font-weight:600}
  .btn{display:inline-block;padding:9px 16px;border:0;border-radius:6px;background:#2563eb;color:#fff;text-decoration:none;cursor:pointer;font:inherit}
  .btn.gray{background:#6b7280}.btn.red{background:#dc2626}.btn.sm{padding:6px 12px;font-size:.9rem}
  .tag{display:inline-block;background:#dbeafe;color:#1d4ed8;border-radius:99px;padding:2px 10px;font-size:.8rem}
  .meta{color:#6b7280;font-size:.85rem}
  .ok{background:#dcfce7;color:#166534;padding:10px 14px;border-radius:6px;margin-bottom:14px}
  .err{background:#fee2e2;color:#991b1b;padding:10px 14px;border-radius:6px;margin-bottom:14px}
  .row{display:flex;justify-content:space-between;align-items:flex-start;gap:12px}
  .actions{display:flex;gap:6px} form.inline{display:inline}
  footer{color:#9ca3af;font-size:.8rem;text-align:center;margin-top:24px}
</style>
</head>
<body>
<div class="wrap">
<h1>📚 Catatan Kuliah</h1>
<p class="sub">Praktikum Komputasi Awan – Aldi (102062400104)</p>
