<?php
require __DIR__ . '/config.php';

$data = ['judul' => '', 'mata_kuliah' => '', 'isi' => ''];
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$data, $errors] = validate($_POST);
    if (!$errors) {
        db()->prepare('INSERT INTO catatan (judul, mata_kuliah, isi) VALUES (?, ?, ?)')
            ->execute([$data['judul'], $data['mata_kuliah'], $data['isi']]);
        header('Location: index.php?msg=created');
        exit;
    }
}
$title = 'Tambah Catatan';
$label = 'Simpan';
include __DIR__ . '/header.php';
echo '<h2>Tambah Catatan</h2>';
include __DIR__ . '/form.php';
include __DIR__ . '/footer.php';
