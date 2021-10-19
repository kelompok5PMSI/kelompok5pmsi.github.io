<?= $this->extend('page_admin/layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container mx-5 my-5">
        <div class="row mb-5">
            <div class="col-lg-4 card-1">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/images/barang.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Barang</h5>
                                <p class="card-text">4 Produk</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-2">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/images/pemesanan.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pemesanan</h5>
                                <p class="card-text">9 Buah</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 card-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/images/pelanggan.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pelanggan</h5>
                                <p class="card-text">6 Orang</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="background-color: white;">
            <div class="col-lg-3 p-4">
                <div class="row">
                    <h4>Identitas Login</h4>
                </div>
                <div class="row">
                    <p>Nama</p>
                    <p>Alamat Email</p>
                    <p>No. Handphone</p>
                </div>
            </div>

            <div class="col-lg-3 p-4">
                <div class="row">
                    <h4>&nbsp;</h4>
                </div>
                <div class="row">
                    <p>: Admin</p>
                    <p>: admin123@admin.com</p>
                    <p>: 021897976868</p>
                </div>
            </div>

            <div class="col-lg-3 p-4"></div>
            <div class="col-lg-3 p-4"></div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>