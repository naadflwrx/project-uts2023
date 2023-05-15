<?php
$model = new Jenis();
$data_produk = $model->tampil();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <h1 class="m-0 text-center">Jenis Produk</h1>
    <br>
    <section class="content px-5 px-lg-6 mt-6">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- cetak data array Produk -->
                        <?php
                        $no = 1;
                        foreach ($data_produk as $value) {
                            ?>
                            <tr>
                                <td>
                                    <?= $no ?>
                                </td>
                                <td>
                                    <?php echo $value['nama_jenis'] ?>
                                </td>
                                <td>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto"
                                                onclick="return confirm('Anda yakin ingin menghapus?')"
                                                href="hapus_jenis.php?iddel=<?= $value['id'] ?>">
                                                <i class="fa-solid fa-trash-can" style="color: #f00;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>