<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cafe Smart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/home'); ?>">Home</a>
                </li>
                <?php if ($this->session->userdata('role_id') == '1') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan Transaksi</a>
                    </li>
                <?php endif; ?>

                <?php if ($this->session->userdata('role_id') == '2') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log User</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('role_id') == '3') : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('menu/food'); ?>">Makanan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('menu/drink'); ?>">Minuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log User</a>
                    </li>
                <?php endif; ?>


                <!-- <?php if ($this->session->userdata('role_id') == '3') : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data Master</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('kelas'); ?>">Kelas</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('spp'); ?>">SPP</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('siswa'); ?>">Siswa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('petugas/daftarPetugas'); ?>">Petugas</a></li>
                        </ul>
                    </li>
                <?php endif; ?> -->
            </ul>
        </div>
        <div class="float-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fas fa-user"></i>&nbsp;Profile</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>