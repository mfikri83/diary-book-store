<nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-warning">
    <a class="navbar-brand text-dark" href="/"><img src="https://img.icons8.com/ios-filled/40/000000/small-business.png" /> BOOKDIARY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse" id="sidebar">
        <ul class="navbar-nav d-sm-none">
            <li class="nav-item">
                <a class="nav-link text-white" href="/"><img src="https://img.icons8.com/material/20/ffffff/dashboard-layout.png" /> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('buku') ?>"><img src="https://img.icons8.com/ios-filled/20/ffffff/book.png"> Daftar Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('distributor') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/group.png"> Data Distributor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('pasok') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/truck.png"> Data Pasok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('penjualan') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/sell.png"> Data Penjualan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= base_url('laporan') ?>"><img src="https://img.icons8.com/ios-filled/20/ffffff/business-report.png"> Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/logout"><img src="https://img.icons8.com/ios-filled/20/ffffff/exit.png"> Keluar</a>
            </li>
        </ul>
    </nav>
</nav>

<div class="container-fluid h-100">
    <div class="row h-100">
        <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="/"><img src="https://img.icons8.com/material/20/ffffff/dashboard-layout.png" /> Dashboard</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('buku') ?>"><img src="https://img.icons8.com/ios-filled/20/ffffff/book.png"> Daftar Buku</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('distributor') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/group.png"> Data Distributor</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('pasok') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/truck.png"> Data Pasok</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('penjualan') ?>"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/sell.png"> Penjualan</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('laporan') ?>"><img src="https://img.icons8.com/ios-filled/20/ffffff/business-report.png"> Laporan</a>
                </li>
                <li class="list-group-item bg-dark">
                    <a class="nav-link text-white" href="<?= base_url('/logout') ?>"><img src="https://img.icons8.com/ios-filled/20/ffffff/exit.png"> Keluar</a>
                </li>
            </ul>
        </nav>
    </div>
</div>