<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Data Pasok</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url('pasok/simpan') ?>" method="POST">
                    <div class="form-group row">
                        <label for="id_pasok" class="col-4 col-form-label">ID Pasok</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_pasok" id="id_pasok" placeholder="ID Pasok">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_distributor" class="col-4 col-form-label">ID Distributor</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_distributor" id="id_distributor" placeholder="ID Distributor">
                            <a href="<?= base_url('distributor') ?>">Lihat ID Distributor</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_buku" class="col-4 col-form-label">ID Buku</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="ID Buku">
                            <a href="<?= base_url('penjualan') ?>">Lihat ID Buku</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Buku">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Tambah Data Pasok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>