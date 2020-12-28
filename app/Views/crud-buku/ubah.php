<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Data Buku</h2>
            <hr>
            <?= csrf_field(); ?>
            <form action="<?= base_url('buku/update') ?>" method="POST">
                <?php

                if ($buku->id == TRUE) {
                    echo "<input type=text name=id value='{$buku->id}' style='display:none'>";
                }

                ?>
                <div class="form-group">
                    <label for="id_buku">ID Buku</label>
                    <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="ID Buku" value="<?= $buku->id_buku ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?= $buku->judul ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_isbn">No ISBN</label>
                        <input type="text" class="form-control" name="no_isbn" id="no_isbn" placeholder="No ISBN" value="<?= $buku->no_isbn ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?= $buku->penulis ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" value="<?= $buku->penerbit ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?= $buku->tahun ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?= $buku->stok ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="harga_pokok">Harga Pokok</label>
                        <div class="input-group-append">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" name="harga_pokok" id="harga_pokok" placeholder="Harga Pokok" value="<?= $buku->harga_pokok ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="harga_jual">Harga Jual</label>
                        <div class="input-group-append">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual" value="<?= $buku->harga_jual ?>">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ppn">PPN</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="ppn" id="ppn" placeholder="PPN" value="<?= $buku->ppn ?>">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="diskon">Diskon</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="diskon" id="diskon" placeholder="Diskon" value="<?= $buku->diskon ?>">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info mb-5" name="submit">Ubah Data Buku</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>