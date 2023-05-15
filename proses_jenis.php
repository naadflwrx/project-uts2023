<?php
require_once 'koneksi.php';
?>

<?php
$_nama = $_POST['nama'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO jenis_produk (nama_jenis) VALUES (?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_GET['idedit']; // ? 8
   $sql = "UPDATE jenis SET nama_jenis=? WHERE id=?";
}
if (isset($sql)) {
   $st = $conn->prepare($sql);
   $st->execute($ar_data);
}

header('location:index.php?hal=jenis_produk');
?>