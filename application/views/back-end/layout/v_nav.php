<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="<?= base_url('admin')?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dasboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('pendidikan')?>" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                    Pendidikan
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('medsos')?>" class="nav-link">
                <i class="nav-icon fa fa-globe"></i>
                <p>
                    Media Sosial
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('skill')?>" class="nav-link">
                <i class="nav-icon fa fa-star"></i>
                <p>
                    Skill
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('pengalaman')?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                    Pengalaman
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('blog')?>" class="nav-link">
                <i class="nav-icon fa fa-newspaper"></i>
                <p>
                    Blog
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('admin/setting')?>" class="nav-link">
                <i class="nav-icon fa fa-cog"></i>
                <p>
                    Setting
                </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="<?= base_url('auth/logout')?>" class="nav-link">
                <i class="nav-icon fa fa-sign"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $tittle ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $tittle ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">