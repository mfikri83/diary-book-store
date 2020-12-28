<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Buku</h2>
            <hr>
            <table class="table">
                <tr>
                    <th>ID Buku</th>
                    <td>: <?= $buku->id_buku ?></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>: <?= $buku->judul ?></td>
                </tr>
                <tr>
                    <th>No ISBN</th>
                    <td>: <?= $buku->no_isbn ?></td>
                </tr>
                <tr>
                    <th>Penulis / Penerbit</th>
                    <td>: <?= $buku->penulis ?> / <?= $buku->penerbit ?></td>
                </tr>
                <tr>
                    <th>Tahun</th>
                    <td>: <?= $buku->tahun ?></td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>: <?= $buku->stok ?></td>
                </tr>
                <tr>
                    <th>Harga Pokok</th>
                    <td>: Rp<?= $buku->harga_pokok ?></td>
                </tr>
                <tr>
                    <th>Harga Jual</th>
                    <td>: Rp<?= $buku->harga_jual ?></td>
                </tr>
                <tr>
                    <th>PPN</th>
                    <td>: <?= $buku->ppn ?>%</td>
                </tr>
                <tr>
                    <th>Diskon</th>
                    <td>: <?= $buku->diskon ?>%</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>