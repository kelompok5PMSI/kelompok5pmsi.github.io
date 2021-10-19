<?= $this->extend('page_admin/layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content mx-5">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h4>Daftar Barang</h4>
            </div>
        </div>
        <div class="row" style="border: 1px solid lightgray; border-radius: 5px;">
            <div class="col-lg-4 my-3 d-flex justify-content-center">
                <div class="card barang-admin" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_cup.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Cup</h5>
                        <p class="card-text">Harga per Kg Rp20.000</p>
                        <p>Stok : 5 Kg</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Edit Barang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3 d-flex justify-content-center">
                <div class="card barang-admin" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_straw.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Straw</h5>
                        <p class="card-text">Harga per Kg Rp30.000</p>
                        <p>Stok : 9 Kg</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Edit Barang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3 d-flex justify-content-center">
                <div class="card barang-admin" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_tray.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Tray</h5>
                        <p class="card-text">Harga per Kg Rp40.000</p>
                        <p>Stok : 7 Kg</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Edit Barang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>