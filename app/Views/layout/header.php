<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                <a href="<?= base_url('Home') ?>" class="horizontal-logo text-left">
                    <img src="<?= base_url('public/dist/images/cat.png') ?>" style="width: 30px;">
                    <span class="h6 font-weight-bold align-self-center mb-0 ml-auto">Si Kucing</span>
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

        </nav>
    </div>
</div>
<?php $id_user = session()->get('id_user') ?>
<div class="sidebar">
    <div class="site-width">
        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>
                <ul>
                    <li class=""><a href="<?= base_url('Home') ?>"><i class="icon-home"></i> Dashboard</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><i class="icon-organization mr-1"></i> Data</a>
                <ul>
                    <li><a href="<?= base_url('MyData') ?>"><i class="icon-user"></i> Data Kamu</a></li>
                    <li><a href="<?= base_url('MyCat' . '/' . $id_user) ?>"><i class="icon-list"></i> Data Kucing Kamu</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><i class="icon-logout mr-1"></i> Logout</a>
                <ul>
                    <li>
                        <a href="<?= base_url('Logout') ?>" class="text-danger">
                            <i class="icon-logout"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END: Menu-->
    </div>
</div>
<!-- End - Sidebar Menu -->