<?= $this->extend('page_customer/layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container pesan">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="mb-4">Checkout</h4>
                <h5>Alamat Pengiriman</h5>
                <hr>
                <h5>Alda Wahyufebrian</h5>
                <p>081234567890</p>
                <p>Jl. Duren Raya No.7, London.</p>
                <button class="btn btn-primary">Ganti Alamat</button>
                <hr>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/images/plastic_cup.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Plastic Cup</h5>
                                <p class="card-text">Harga per Kg Rp30.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jumlah_pesan">
                    <form method="POST" action="">
                        <div>
                            <button class="btn btn-danger" type="button" id="tombol_kurang" onclick="kurang_jumlah()"><i class="fas fa-minus-circle"></i></button>

                            <input class="jumlah" type="number" name="jumlah_pesan" id="jumlah_pesan" min="1" max="15" value="1">

                            <button class="btn btn-success" type="button" onclick="tambah_jumlah()"><i class="fas fa-plus-circle"></i></button>
                        </div>
                        <hr>
                        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</button>
                    </form>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Pesanan kamu berhasil diproses!, untuk membayar atau membatalkan silahkan lihat di menu pesanan.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>