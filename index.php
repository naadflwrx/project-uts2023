<?php
include_once 'koneksi.php';

include_once 'models/Produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Jenis.php';

include_once 'navbar.php';
include_once 'header.php';

// Lakukan request halaman di menu URL dengan membuka terlebih
// dahulu file index.php
$hal = $_REQUEST['hal'];
// jika ada request dari url browser berupa HAL 
// tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal . '.php';
    // include_once 'produk.php;
}else{
// jika tidak ada request HAL dari url browser 
// tampilkan halaman home
include_once 'home.php';
}

include_once 'footer.php';
?>