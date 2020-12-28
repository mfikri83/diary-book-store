<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?php

if (empty($penjualan)) {
    $idPenjualan = "";
    $idBuku = "";
    $idKasir = "";
    $jumlah = "";
    $total = "";
    $tanggal = "";
} else {
    $idPenjualan = $penjualan->id_penjualan;
    $idBuku = $penjualan->id_buku;
    $idKasir = $penjualan->id_kasir;
    $jumlah = $penjualan->jumlah;
    $total = $penjualan->total;
    $tanggal = $penjualan->tanggal;
}

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Beli Buku</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url('penjualan/beli') ?>" method="POST">
                    <div class="form-group row">
                        <label for="id_penjualan" class="col-4 col-form-label">ID Penjualan</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_penjualan" id="id_penjualan" placeholder="ID Penjualan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_buku" class="col-4 col-form-label">ID Buku</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_buku" id="id_buku" readonly placeholder="ID Buku" value="<?= $idBuku ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kasir" class="col-4 col-form-label">ID Kasir</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_kasir" id="id_kasir" readonly placeholder="ID Kasir" value="<?= $idKasir ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Buku">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-4 col-form-label">Harga Satuan</label>
                        <div class="col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" name="total" id="total" placeholder="Harga" readonly value="<?= $total ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Beli</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>