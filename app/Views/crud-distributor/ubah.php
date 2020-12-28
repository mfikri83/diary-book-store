<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Distributor</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url('distributor/update') ?>" method="POST">
                    <?php

                    if ($distributor->id == TRUE) {
                        echo "<input type=text name=id value='{$distributor->id}' style='display:none'>";
                    }

                    ?>
                    <div class="form-group row">
                        <label for="id_distributor" class="col-4 col-form-label">ID Distributor</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_distributor" id="id_distributor" placeholder="ID Distributor" value="<?= $distributor->id_distributor ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_distributor" class="col-4 col-form-label">Nama Distributor</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nama_distributor" id="nama_distributor" placeholder="Nama Distributor" value="<?= $distributor->nama_distributor ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $distributor->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-4 col-form-label">Telepon</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?= $distributor->telepon ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Ubah Data Distributor</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>