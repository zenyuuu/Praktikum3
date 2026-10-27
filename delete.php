<?php
require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    db()->prepare('DELETE FROM catatan WHERE id = ?')->execute([(int) ($_POST['id'] ?? 0)]);
}
header('Location: index.php?msg=deleted');
exit;
