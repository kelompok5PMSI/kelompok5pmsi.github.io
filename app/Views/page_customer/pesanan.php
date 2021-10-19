<?= $this->extend('page_customer/layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h4>Daftar Transaksi</h4>
            </div>
        </div>

        <div class="row kotak-luar">
            <div class="col-lg">
                <div class="row my-3 mx-1 kotak-dalem">
                    <div class="col">
                        <div class="judul-transaksi my-2">
                            <p class="d-inline">15 Okt 2021 | INV/20210920/AA/123 | </p>
                            <div class="badge d-inline">Dipesan</div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url(); ?>/images/plastic_cup.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Plastic Cup</h5>
                                        <p class="card-text">1 Kg x Rp30.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Bayar</button>
                            <button class="btn btn-primary">Lihat Detail Transaksi</button>
                            <button class="btn btn-danger">Batalkan Pesanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>