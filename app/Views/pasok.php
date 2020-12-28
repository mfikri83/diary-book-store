<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data Pasok</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url('pasok/tambah') ?>" class="btn btn-primary"><img src="https://img.icons8.com/ios-filled/20/ffffff/plus-2-math.png" /> Tambah Pasok</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pasok</th>
                            <th>ID Distributor</th>
                            <th>ID Buku</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pasok as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_pasok'] ?></td>
                                <td>
                                    <a href="<?= base_url('distributor') ?>">
                                        <?= $row['id_distributor'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('penjualan') ?>">
                                        <?= $row['id_buku'] ?>
                                    </a></td>
                                <td><?= $row['jumlah'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td class="text-center"><a class="btn btn-lg-3 btn-warning" href="/pasok/ubah/<?= $row['id_pasok']; ?>">Ubah</a></td>
                                <td class="text-center"><a class="btn btn-lg-3 btn-danger" href="/pasok/hapus/<?= $row['id_pasok']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>