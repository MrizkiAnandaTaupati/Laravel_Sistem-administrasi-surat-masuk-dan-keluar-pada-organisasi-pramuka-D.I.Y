<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrasi Kwartir Daerah Gerakan Pramuka DIY</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo url('css/styles.css') ?>">
    <!-- masukan icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color:#0B2447">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Bidang & Badan</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark shadow" style="background-color:#0B2447" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="text-center pt-3">
                            <i class="bi bi-person-circle display-4"></i>
                        </div>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?php echo url('userunit/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?php echo url('userunit/profil') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="<?php echo url("userunit/surat_masuk"); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-envelope-fill"></i></div>
                            Surat Masuk
                        </a>
                        <a class="nav-link" href="<?php echo url("userunit/surat_keluar"); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-envelope-paper-fill"></i></div>
                            Surat Keluar
                        </a>
                        <a class="nav-link" href="<?php echo url("userunit/notulen"); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-journal-text"></i></div>
                            Notulensi Rapat
                        </a>
                        <a class="nav-link" href="<?php echo url("userunit/ringkasan_kegiatan"); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-journal-text"></i></div>
                            Ringkasan Kegiatan
                        </a>
                        <a class="nav-link" onclick="return confirm('Anda Yakin ?')" href="<?php echo url('userunit/logout') ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-right"></i></div>
                            Log Out
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                <!-- area kosong -->
                @yield('konten')

            </main>
            <footer class="pt-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            <p class="text-center">Copyright &copy; KWARDA DIY</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <script src="<?php echo url('admin') ?>"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tables').DataTable();
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('js/scripts.js') ?>"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>