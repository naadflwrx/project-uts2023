<?php
$id = $_REQUEST['iddetail'];
$model = new Pelanggan();
$pelanggan = $model->ambildata($id);
?>

<!-- Main Content -->
<div class="content-wrapper">
    <h1 class="text-center">Detail Pelanggan</h1>
    <section class="content px-5 px-lg-6 mt-6">
        <div class="row">
            <ul>
                <li>Nama :
                    <?= $pelanggan['nama'] ?>
                </li>
                <li>Jenis Kelamin :
                    <?= $pelanggan['jenis_kelamin'] ?>
                </li>
                <li>Alamat : 
                    <?= $pelanggan['alamat'] ?>
                </li>
                <li>No Telepon :
                    <?= $pelanggan['no_telepon'] ?>
                </li>
                <li>Jumlah Beli :
                    <?= $pelanggan['jumlah_beli'] ?>
                </li>
                <li>Produk :
                    <?= $pelanggan['pembeli'] ?>
                </li>
                
            </ul>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <a class="btn btn-outline-dark mt-auto" href="index.php?hal=home">
                    <i class="fa-solid fa-backward fa-fade" style="color: #005eff"></i>
                </a>
            </div>
        </div>
    </section>
</div>