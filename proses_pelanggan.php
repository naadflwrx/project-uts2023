<?php
require_once 'koneksi.php';
?>

<?php
$_nama = $_POST['nama'];
$_jk = $_POST['jk'];
$_alamat = $_POST['alamat'];
$_notel = $_POST['no_telepon'];
$_jumlah = $_POST['jumlah_beli'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1
$ar_data[] = $_jk; // ? 2
$ar_data[] = $_alamat; // 3
$ar_data[] = $_notel;
$ar_data[] = $_jumlah;
$ar_data[] = $_jenis; // ? 7

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pelanggan (nama,jenis_kelamin,alamat,no_telepon,jumlah_beli,produk_id) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_GET['idedit']; // ? 8
   $sql = "UPDATE pelanggan SET nama=?,jenis_kelamin=?,alamat=?,no_telepon=?,jumlah_beli=?,produk_id=? WHERE id=?";
}
if (isset($sql)) {
   $st = $conn->prepare($sql);
   $st->execute($ar_data);
}

header('location:index.php?hal=pelanggan');
?>