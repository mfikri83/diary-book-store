<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Buku Baru</h2>
            <hr>
            <?= csrf_field(); ?>
            <form action="<?= base_url('buku/simpan') ?>" method="POST">
                <div class="form-group">
                    <label for="id_buku">ID Buku</label>
                    <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="ID Buku">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_isbn">No ISBN</label>
                        <input type="text" class="form-control" name="no_isbn" id="no_isbn" placeholder="No ISBN">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="harga_pokok">Harga Pokok</label>
                        <div class="input-group-append">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" name="harga_pokok" id="harga_pokok" placeholder="Harga Pokok">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="harga_jual">Harga Jual</label>
                        <div class="input-group-append">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ppn">PPN</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="ppn" id="ppn" placeholder="PPN">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="diskon">Diskon</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="diskon" id="diskon" placeholder="Diskon">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info mb-5" name="submit">Tambah Buku Baru</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>