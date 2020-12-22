<!---Navbar--->
<?php
$session = session();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Foods</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if ($session->get('isLoggedIn')) : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= site_url('home/index'); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Barang
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= site_url('barang/index'); ?>">List Barang</a></li>
                            <li> <a class="dropdown-item" href="<?= site_url('barang/create'); ?>">Tambah Barang</a></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if ($session->get('isLoggedIn')) : ?>
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/login') ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/register') ?>">Register</a>
                        </li>

                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>