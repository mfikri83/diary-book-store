<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Data Pasok</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url('pasok/update') ?>" method="POST">
                    <?php

                    if ($pasok->id == TRUE) {
                        echo "<input type=text name=id value='{$pasok->id}' style='display:none'>";
                    }

                    ?>
                    <div class="form-group row">
                        <label for="id_pasok" class="col-4 col-form-label">ID Pasok</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_pasok" id="id_pasok" placeholder="ID Pasok" value="<?= $pasok->id_pasok ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_distributor" class="col-4 col-form-label">ID Distributor</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_distributor" readonly id="id_distributor" placeholder="ID Distributor" value="<?= $pasok->id_distributor ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_buku" class="col-4 col-form-label">ID Buku</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_buku" readonly id="id_buku" placeholder="ID Buku" value="<?= $pasok->id_buku ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Buku" value="<?= $pasok->jumlah ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?= $pasok->tanggal ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Ubah Data Pasok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>