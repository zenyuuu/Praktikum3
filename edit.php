<?php
require __DIR__ . '/config.php';

$id = (int) ($_GET['id'] ?? 0);
$st = db()->prepare('SELECT * FROM catatan WHERE id = ?');
$st->execute([$id]);
$data = $st->fetch();
if (!$data) {
    http_response_code(404);
    exit('Catatan tidak ditemukan. <a href="index.php">Kembali</a>');
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$data, $errors] = validate($_POST);
    if (!$errors) {
        db()->prepare('UPDATE catatan SET judul = ?, mata_kuliah = ?, isi = ? WHERE id = ?')
            ->execute([$data['judul'], $data['mata_kuliah'], $data['isi'], $id]);
        header('Location: index.php?msg=updated');
        exit;
    }
}
$title = 'Edit Catatan';
$label = 'Perbarui';
include __DIR__ . '/header.php';
echo '<h2>Edit Catatan</h2>';
include __DIR__ . '/form.php';
include __DIR__ . '/footer.php';
