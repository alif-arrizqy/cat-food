<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>Login - Cat Food</title>
    <link rel="shortcut icon" href="<?= base_url('') ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSS -->
    <?= $this->include('layout/css') ?>

</head>

<body id="main-container" class="default">
    <div class="container">
        <!-- Content -->
    <?= $this->renderSection('content'); ?>
    </div>
    <!-- JS -->
    <?= $this->include('layout/js') ?>
</body>