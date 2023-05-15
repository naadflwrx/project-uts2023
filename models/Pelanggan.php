<?php
class Pelanggan
{
    private $koneksi;
    // akses properti yg bersifat private menggunakan $this
    public function __construct()
    // function yg pertama kali dijalankan
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil()
    {
        // cetak seluruh data produk menggunakan query select
        $sql = "SELECT p.*, pr.nama as pembeli
        FROM pelanggan p INNER JOIN produk pr ON pr.id = p.produk_id
        ORDER BY p.id DESC";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan
        $ps->execute();
        // siapkan data sql yg sudah di eksekusi dengan method fetchAll
        $show = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $show;
    }

    public function ambildata($id)
    {
        $sql = "SELECT p.*, pr.nama as pembeli
        from pelanggan p inner join produk pr on pr.id = p.produk_id
        where p.id=? order by p.id ";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan
        $ps->execute([$id]);
        // siapkan data sql yg sudah di eksekusi dengan method fetchAll
        $show = $ps->fetch();
        // kembalikan data produk yang dalam bentuk array
        return $show;
    }
}

?>