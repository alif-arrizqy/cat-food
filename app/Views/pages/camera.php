<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
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
            <div class="col-md-12 col-lg-12 mt-6">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Lihat Makan Kucing Kamu</h6>
                    </div>
                    <div id="div_refresh">
                        <div class="card-content">
                            <div class="card-body p-4 text-center">
                                <div class="my-auto">
                                    <iframe width="100%" height="400" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                                </div>
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