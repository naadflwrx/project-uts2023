<?php

// konfigurasi database
$host = "localhost";
$dbname = "ecommerce";
$username = "root";
$password = "";

    // buat koneksi PDO, menggunakan try catch
    try {
    // buat objek koneksi yang di dalamnya berupa 
    // variable host, dbname, username dan password
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h1>koneksi database berhasil</h1>";
    } catch (PDOException $e) {
    echo "database tidak terhubung: " .$e->getMessage();
    }

$dsn = "mysql:host=$host;dbname=$dbname";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

?>