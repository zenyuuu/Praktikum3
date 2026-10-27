<?php /* partial: butuh $data, $errors, $label */ ?>
<?php foreach ($errors as $er): ?><div class="err"><?= e($er) ?></div><?php endforeach; ?>
<div class="card">
  <form method="post">
    <label for="judul">Judul</label>
    <input id="judul" name="judul" maxlength="150" value="<?= e($data['judul']) ?>" required>
    <label for="mk">Mata Kuliah</label>
    <input id="mk" name="mata_kuliah" maxlength="100" value="<?= e($data['mata_kuliah']) ?>" required>
    <label for="isi">Isi Catatan</label>
    <textarea id="isi" name="isi" rows="6" required><?= e($data['isi']) ?></textarea>
    <p><button class="btn" type="submit"><?= e($label) ?></button>
       <a class="btn gray" href="index.php">Batal</a></p>
  </form>
</div>
