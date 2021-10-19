<div class="w3-sidebar w3-bar-block w3-card w3-animate-left text-white" style="display:none" id="mySidebar">
    <div class="bungkus">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <hr>
        <a href="<?= base_url('admin/dashboard'); ?>" class="w3-bar-item w3-button">
            <i class="far fa-chart-bar"></i><span class="nav-text ms-2">Dashboard</span>
        </a>
        <a href="<?= base_url('admin/barang'); ?>" class="w3-bar-item w3-button">
            <i class="fas fa-box"></i><span class="nav-text ms-2">Barang</span>
        </a>
        <a href="<?= base_url('admin/pemesanan'); ?>" class="w3-bar-item w3-button">
            <i class="fas fa-shopping-cart"></i><span class="nav-text ms-2">Pemesanan</span>
        </a>
        <a href="<?= base_url('admin/laporan'); ?>" class="w3-bar-item w3-button">
            <i class="far fa-clipboard ms-1"></i><span class="nav-text ms-2">Laporan</span>
        </a>
        <hr>
        <a href="<?= base_url('customer/home'); ?>" class="w3-bar-item w3-button">
            <i class="fas fa-sign-out-alt"></i><span class="nav-text ms-2">Logout</span>
        </a>
    </div>
</div>