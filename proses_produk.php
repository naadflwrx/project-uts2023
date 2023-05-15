<?php
require_once 'koneksi.php';
?>

<?php
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_harga = $_POST['harga_jual'];
$_stok = $_POST['stok'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_kode; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_harga; // 3
$ar_data[] = $_stok;
$ar_data[] = $_jenis; // ? 7

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO produk (kode,nama,harga_jual,stok,jenis_produk_id) VALUES (?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_GET['idedit']; // ? 8
   $sql = "UPDATE produk SET kode=?,nama=?,harga_jual=?,
    stok=?,jenis_produk_id=? WHERE id=?";
}
if (isset($sql)) {
   $st = $conn->prepare($sql);
   $st->execute($ar_data);
}

header('location:index.php?hal=home');
?>