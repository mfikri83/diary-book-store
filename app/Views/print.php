<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 text-center">LAPORAN PENJUALAN BUKU BOOKDIARY</h2>
                <h4 class="text-center">TAHUN 2020</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
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
                <a href="<?= base_url('/laporan') ?>" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>