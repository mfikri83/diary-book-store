<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Penjualan</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan Pencarian..." name="keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" name="submit"><img src="https://img.icons8.com/material-outlined/20/ffffff/search--v2.png" /></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>Judul</th>
                            <th>Penulis | Penerbit</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_buku'] ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td><?= $row['penulis'] ?> | <?= $row['penerbit'] ?></td>
                                <td><?= $row['tahun'] ?></td>
                                <td>Rp<?= $row['harga_jual'] ?></td>
                                <td><?= $row['stok'] ?></td>
                                <td><a class="btn btn-lg-3 btn-success" href="/penjualan/prosesBeli/<?= $row['id_buku']; ?>"><img src="https://img.icons8.com/material-rounded/18/ffffff/shopping-cart.png" /></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>