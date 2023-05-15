<?php
require_once 'koneksi.php';

if (isset($_GET['idedit'])) {
  $_id = $_GET['idedit'];
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $conn->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
}
?>

<h3 class="text-center">Upload Produk</h3>
<?php if (isset($_GET['idedit'])): ?>
<form method="POST" action="proses_produk.php?idedit=<?= $_GET['idedit'] ?>">
  <?php else: ?>
  <form method="POST" action="proses_produk.php">
    <?php endif ?>
    <div class="form-group row">
      <label for="kode" class="col-4 col-form-label">Kode</label>
      <div class="col-7">
        <div class="input-group">
          <input id="kode" name="kode" type="text" class="form-control"
            value="<?= isset($row['kode']) ? $row['kode'] : '' ?>">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Produk</label>
      <div class="col-7">
        <div class="input-group">
          <input id="nama" name="nama" type="text" class="form-control"
            value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
      <div class="col-7">
        <div class="input-group">
          <input id="harga_jual" name="harga_jual" value="<?= isset($row['harga_jual']) ? $row['harga_jual'] : '' ?>"
            type="text" class="form-control">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="stok" class="col-4 col-form-label">Stok</label>
      <div class="col-7">
        <div class="input-group">
          <input id="stok" name="stok" value="<?= isset($row['stok']) ? $row['stok'] : '' ?>" type="text"
            class="form-control">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
      <div class="col-7">
        <?php
        $sqljenis = "SELECT * FROM jenis_produk";
        $rsjenis = $conn->query($sqljenis);
        ?>
        <select id="jenis" name="jenis" class="custom-select">
          <?php if (isset($_GET['idedit'])): ?>
          <?php foreach ($rsjenis as $rowjenis): ?>
          <option value="<?= $rowjenis['id'] ?>"
            <?php echo $rowjenis['id'] == $row['jenis_produk_id'] ? "selected" : "" ?>>
            <?= $rowjenis['nama_jenis'] ?></option>
          <?php endforeach ?>

          <?php else: ?>
          <?php foreach ($rsjenis as $rowjenis): ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama_jenis'] ?></option>
          <?php endforeach ?>
          <?php endif ?>
        </select>
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