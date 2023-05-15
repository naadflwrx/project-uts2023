<?php
$id = $_REQUEST['iddetail'];
$model = new Produk();
$produk = $model->ambildata($id);
?>

<!-- Main Content -->
<div class="content-wrapper">
    <h1 class="text-center">Detail Produk</h1>
    <section class="content px-5 px-lg-6 mt-6">
        <div class="row">
            <ul>
                <li>Kode :
                    <?= $produk['kode'] ?>
                </li>
                <li>Nama Produk :
                    <?= $produk['nama'] ?>
                </li>
                <li>Harga Jual : Rp.
                    <?= number_format($produk['harga_jual']) ?>
                </li>
                <li>Stok :
                    <?= $produk['stok'] ?>
                </li>
                <li>Jenis Produk :
                    <?= $produk['namajenisproduk'] ?>
                </li>
            </ul>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <a class="btn btn-outline-dark mt-auto" href="index.php?hal=home">
                    <i class="fa-solid fa-backward fa-fade" style="color: #000000"></i>
                </a>
            </div>
        </div>
    </section>
</div>