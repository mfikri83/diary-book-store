<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookDiary - Toko Buku Dunia</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body class="h-100">
    
    <?= $this->include('template/navbar') ?>

    <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
        <section>
            <?= $this->renderSection('content') ?>
        </section>
    </div>

    <?= $this->include('template/footer') ?>

    <!-- Jquery dan Bootstrap JS  -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>