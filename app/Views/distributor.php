<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data Distributor</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url('distributor/tambah') ?>" class="btn btn-primary"><img src="https://img.icons8.com/ios-filled/20/ffffff/plus-2-math.png" /> Tambah Distributor</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Distributor</th>
                            <th>Nama Distributor</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($distributor as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_distributor'] ?></td>
                                <td><?= $row['nama_distributor'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['telepon'] ?></td>
                                <td class="text-center"><a class="btn btn-lg-3 btn-warning" href="/distributor/ubah/<?= $row['id_distributor']; ?>">Ubah</a></td>
                                <td class="text-center"><a class="btn btn-lg-3 btn-danger" href="/distributor/hapus/<?= $row['id_distributor']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>