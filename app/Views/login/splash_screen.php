<?= $this->extend('login_layout/template'); ?>
<?= $this->section('content'); ?>
<?php $url = base_url('Login');
header("refresh:1; url=$url"); ?>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-12">
            <div class="text-center" style="margin-top: 300px;">
                <img src="<?= base_url('public/dist/images/splash.gif') ?>" class="display-3">
                <h5 style="color: #ffffff;">Si Kucing App</h5>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>