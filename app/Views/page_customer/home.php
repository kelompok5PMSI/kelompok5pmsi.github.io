<?= $this->extend('page_customer/layout/template'); ?>

<?= $this->section('jumbotron'); ?>
<section class="jumbotron">
    <div class="row">
        <div class="col">
            <img class="bg-jumbotron img-fluid" src="<?= base_url(); ?>/images/jumbotron1.jpg" alt="">
        </div>
    </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_cup.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Cup</h5>
                        <p class="card-text">Harga per Kg Rp20.000</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_straw.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Straw</h5>
                        <p class="card-text">Harga per Kg Rp30.000</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url(); ?>/images/plastic_tray.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Tray</h5>
                        <p class="card-text">Harga per Kg Rp40.000</p>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url(); ?>/customer/pesan" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>