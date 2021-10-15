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
                        <p>Welcome to admin panel monitoring system smart dustbin</p>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Sampah Organik</h6>
                    </div>
                    <div id="div_refresh">
                        <div class="card-content">
                            <div class="card-body p-4 text-center">
                                <div class="my-auto">
                                    <img class="card-img-center rounded-0" src="<?= base_url('public/dist/images/recycling-bin-green.png') ?>">
                                </div>
                                <div class="content my-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Sampah non Organik</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-4 text-center">
                            <div class="my-auto">
                                <img class="card-img-center rounded-0" src="<?= base_url('public/dist/images/recycling-bin-yellow.png') ?>">
                            </div>
                            <div class="content my-3">
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