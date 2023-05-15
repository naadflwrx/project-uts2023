<?php
require_once 'koneksi.php';

if (isset($_GET['idedit'])) {
  $_id = $_GET['idedit'];
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $st = $conn->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
}
?>

<h3 class="text-center">Tambah Pelanggan</h3>
<?php if (isset($_GET['idedit'])): ?>
<form method="POST" action="proses_pelanggan.php?idedit=<?= $_GET['idedit'] ?>">
  <?php else: ?>
  <form method="POST" action="proses_pelanggan.php">
    <?php endif ?>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
      <div class="col-7">
        <div class="input-group">
          <input id="nama" name="nama" type="text" class="form-control"
            value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
      <div class="col-7">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki">
          <label class="form-check-label" for="jk">
            Laki-laki
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
          <label class="form-check-label" for="jk">
            Perempuan
          </label>
          </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="no_telepon" class="col-4 col-form-label">Alamat</label>
      <div class="col-7">
        <div class="input-group">
          <input id="alamat" name="alamat" value="<?= isset($row['alamat']) ? $row['alamat'] : '' ?>" type="text"
            class="form-control">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="no_telepon" class="col-4 col-form-label">No Telepon</label>
      <div class="col-7">
        <div class="input-group">
          <input id="no_telepon" name="no_telepon" value="<?= isset($row['no_telepon']) ? $row['no_telepon'] : '' ?>" type="text"
            class="form-control">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label>
      <div class="col-7">
        <div class="input-group">
          <input id="jumlah_beli" name="jumlah_beli" value="<?= isset($row['jumlah_beli']) ? $row['jumlah_beli'] : '' ?>" type="text"
            class="form-control">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="produk" class="col-4 col-form-label">Jenis Produk</label>
      <div class="col-7">
        <?php
        $sqljenis = "SELECT * FROM produk";
        $rsjenis = $conn->query($sqljenis);
        ?>
        <select id="jenis" name="jenis" class="custom-select">
          <?php if (isset($_GET['idedit'])): ?>
          <?php foreach ($rsjenis as $rowjenis): ?>
          <option value="<?= $rowjenis['id'] ?>"
            <?php echo $rowjenis['id'] == $row['produk_id'] ? "selected" : "" ?>>
            <?= $rowjenis['nama'] ?></option>
          <?php endforeach ?>

          <?php else: ?>
          <?php foreach ($rsjenis as $rowjenis): ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
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