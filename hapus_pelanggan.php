<?php 
require_once 'koneksi.php';

$_iddel=$_GET['iddel'];

$sql="DELETE FROM pelanggan WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_iddel]);

header('location:index.php?hal=pelanggan');
?>