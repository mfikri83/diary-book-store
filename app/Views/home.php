<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col my-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/slides-1.jpg" alt="First slide" width="50px" height="525px">
                        <div class="carousel-caption d-none d-md-block bg-warning border border-secondary">
                            <h4 class="text-dark">Selamat Datang di BookDiary</h4>
                            <p class="text-dark"><i>Read, Relax, dan Enjoy</i></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slides-2.jpg" alt="Second slide" width="50px" height="525px">
                        <div class="carousel-caption d-none d-md-block bg-warning border border-secondary">
                            <h4 class="text-dark">Selamat Datang di BookDiary</h4>
                            <p class="text-dark"><i>Read, Relax, dan Enjoy</i></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/slides-3.jpg" alt="Third slide" width="50px" height="525px">
                        <div class="carousel-caption d-none d-md-block bg-warning border border-secondary">
                            <h4 class="text-dark">Selamat Datang di BookDiary</h4>
                            <p class="text-dark"><i>Read, Relax, dan Enjoy</i></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-light">
                <div class="card-body"><img src="https://img.icons8.com/pastel-glyph/35/000000/best-sales--v1.png" /><b>Best Seller</b>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-1.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Pmerograman Web Untuk Pemula</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Rohi Abdullah</i></li>
                    <li class="list-group-item"><i>Rp74800</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block">
                            <img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-2.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Prakarya dan Kewiraushaan</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Desta Wirnas</i></li>
                    <li class="list-group-item"><i>Rp74800</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-4.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Bahasa Indonesia SMA/SMK Kelas XII</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Maman Suryaman</i></li>
                    <li class="list-group-item"><i>Rp25000</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-5.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Aplikasi Android dengan Android Studio</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Yudha Yudhanto & Ardhi Wijayanto</i></li>
                    <li class="list-group-item"><i>Rp48800</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-6.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Dignitate</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Hana Margaretha</i></li>
                    <li class="list-group-item"><i>Rp89000</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3" style="width: 18rem;">
                <img class="card-img-top" src="/images/buku-3.jpg" alt="Card image cap" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Komet Minor</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Tere Liye</i></li>
                    <li class="list-group-item"><i>Rp105000</i></li>
                </ul>
                <div class="card-body">
                    <div class="col text-center">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-success btn-lg btn-block"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /> Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>