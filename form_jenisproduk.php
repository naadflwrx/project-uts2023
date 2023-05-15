<?php
require_once 'koneksi.php';

if (isset($_GET['idedit'])) {
  $_id = $_GET['idedit'];
  $sql = "SELECT * FROM jenis_produk WHERE id=?";
  $st = $conn->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
}
?>

<h3 class="text-center">Tambah Jenis Produk</h3>
<?php if (isset($_GET['idedit'])): ?>
<form method="POST" action="proses_jenis.php?idedit=<?= $_GET['idedit'] ?>">
<?php else: ?>
    <form method="POST" action="proses_jenis.php">
    <?php endif ?>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Jenis Produk</label>
      <div class="col-7">
        <div class="input-group">
          <input id="nama" name="nama" type="text" class="form-control"
            value="<?= isset($row['nama_jenis']) ? $row['nama_jenis'] : '' ?>">
        </div>
      </div>
    </div>
    <br>

    <div class="form-group row">
      <div class="offset-4 col-7">
        <?php
        if (isset($_GET['idedit'])) { ?>
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        <?php } else { ?>
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        <?php } ?>
      </div>
    </div>
    <br>
  </form>