<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- <meta http-equiv="refresh" content="10; url=" <?php echo $_SERVER['PHP_SELF']; ?>"> -->
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Dashboard</h4>
                        <p>Hai <?= session()->get('fullname') ?></p>
                        <p>Selamat Datang di Aplikasi Si Kucing </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Lihat Makan Kucing Kamu</h6>
                    </div>
                    <div id="div_refresh">
                        <div class="card-content">
                            <div class="card-body p-4 text-center">
                                <div class="my-auto">
                                    <img class="card-img-center rounded-0" src="<?= base_url('public/dist/images/cat (1).png') ?>">
                                </div>
                                <div class="content my-3">
                                    <a href="<?= base_url('OpenCamera') ?>">
                                        <button type="button" class="btn btn-primary">Lihat</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $id_user = session()->get('id_user') ?>
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Kasih Makan Sekarang</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-4 text-center">
                            <div class="my-auto">
                                <img class="card-img-center rounded-0" src="<?= base_url('public/dist/images/pet-bowl.png') ?>">
                            </div>
                            <div class="content my-3">
                                <a href="<?= base_url('MyCat' . '/' . $id_user) ?>">
                                    <button type="button" class="btn btn-success">Kasih Makan Sekarang</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </div>
</main>
<?= $this->endSection(); ?>