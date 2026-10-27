<?php
require __DIR__ . '/config.php';

$q = trim($_GET['q'] ?? '');
$sql = 'SELECT * FROM catatan';
$params = [];
if ($q !== '') {
    $sql .= ' WHERE judul LIKE ? OR mata_kuliah LIKE ?';
    $params = ["%$q%", "%$q%"];
}
$sql .= ' ORDER BY id DESC';
$st = db()->prepare($sql);
$st->execute($params);
$rows = $st->fetchAll();

$pesan = [
    'created' => 'Catatan berhasil ditambahkan.',
    'updated' => 'Catatan berhasil diperbarui.',
    'deleted' => 'Catatan berhasil dihapus.',
];
$msg = $pesan[$_GET['msg'] ?? ''] ?? null;

$title = 'Catatan Kuliah';
include __DIR__ . '/header.php';
?>
<?php if ($msg): ?><div class="ok"><?= e($msg) ?></div><?php endif; ?>

<form class="bar" method="get">
  <input name="q" placeholder="Cari judul / mata kuliah..." value="<?= e($q) ?>">
  <button class="btn gray" type="submit">Cari</button>
  <a class="btn" href="create.php">+ Tambah Catatan</a>
</form>

<?php if (!$rows): ?>
  <div class="card">Belum ada catatan.</div>
<?php endif; ?>

<?php foreach ($rows as $r): ?>
  <div class="card">
    <div class="row">
      <div>
        <strong><?= e($r['judul']) ?></strong>
        <span class="tag"><?= e($r['mata_kuliah']) ?></span>
        <div class="meta"><?= e($r['created_at']) ?></div>
      </div>
      <div class="actions">
        <a class="btn sm" href="edit.php?id=<?= (int) $r['id'] ?>">Edit</a>
        <form class="inline" method="post" action="delete.php" onsubmit="return confirm('Hapus catatan ini?')">
          <input type="hidden" name="id" value="<?= (int) $r['id'] ?>">
          <button class="btn red sm" type="submit">Hapus</button>
        </form>
      </div>
    </div>
    <p><?= nl2br(e($r['isi'])) ?></p>
  </div>
<?php endforeach; ?>

<?php include __DIR__ . '/footer.php'; ?>
