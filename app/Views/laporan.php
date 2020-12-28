<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Laporan</h2>
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
            <a href="<?= base_url('laporan/print') ?>" class="btn btn-success"><img src="https://img.icons8.com/ios-filled/20/ffffff/print.png" /> Print</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID Penjualan</th>
                            <th>ID Buku</th>
                            <th>ID Kasir</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalJumlah = 0; ?>
                        <?php $totalHarga = 0; ?>
                        <?php foreach ($penjualan as $row) : ?>
                            <tr>
                                <td><?= $row['id_penjualan'] ?></td>
                                <td><?= $row['id_buku'] ?></td>
                                <td><?= $row['id_kasir'] ?></td>
                                <td><?= $row['jumlah'] ?> Buku</td>
                                <td>Rp<?= $row['total'] * $row['jumlah'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <?php $totalJumlah += $row['jumlah'] ?>
                                <?php $totalHarga += $row['total'] * $row['jumlah']; ?>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="3">TOTAL</td>
                            <td><?= $totalJumlah ?> Buku Terjual</td>
                            <td colspan="2">Rp<?= $totalHarga ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>