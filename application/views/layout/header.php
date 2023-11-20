<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="<?= base_url('assets/') ?>https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
        rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">BPF 22 TI D</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-e>
                    <span class="mr-2 d-none d-lg-infinte text-gray-600-small">
                        <?= $user['name']; ?>
                    </span>
                    <img class="img-profile rounded-circle"
                        src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>">
                </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">MENU</div>
                        <a class="nav-link" href="<?php echo base_url('Mahasiswa') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                            Mahasiswa
                        </a>
                        <a class="nav-link" href="<?php echo base_url('Prodi') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                            Program Studi
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Farhan Indriansyah Putra
                </div>
            </nav>
        </div>

        <?php
        if ($user['role'] == 'Admin') { ?>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">

                                <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">MENU</div>
                                <a class="nav-link" href="<?php echo base_url('Mahasiswa') ?>">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                                    Mahasiswa
                                </a>
                                <a class="nav-link" href="<?php echo base_url('Prodi') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                    Program Studi
                                </a>

                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Farhan Indriansyah Putra
                        </div>
                    </nav>
                </div>

            <?php } else {
            ?>
                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu">
                                <div class="nav">

                                    <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Dashboard
                                    </a>
                                    <div class="sb-sidenav-menu-heading">MENU</div>
                                    <a class="nav-link" href="<?php echo base_url('Profil/') ?>">
                                        <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                                        Profile
                                    </a>
                                    <a class="nav-link" href="<?php echo base_url('Auth/logout') ?>">
                                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                        Logout
                                    </a>

                                </div>
                            </div>
                            <div class="sb-sidenav-footer">
                                <div class="small">Logged in as:</div>
                                Farhan Indriansyah Putra
                            </div>
                        </nav>
                    </div>
                    <?php
        } ?>
                <script>
                    $(document).ready(function () {
                        $("#sidebarToggle").click(function () {
                            $("body").toggleClass("sb-sidenav-toggled");
                        });
                    });
                </script>