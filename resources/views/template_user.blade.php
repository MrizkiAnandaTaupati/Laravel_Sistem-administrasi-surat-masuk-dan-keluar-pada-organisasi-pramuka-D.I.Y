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

<body>
    <nav class="navbar navbar-expand-xl navbar-dark" style="background-color: #0B2447;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://pramukadiy.or.id/assets/uploads/2022/11/web-pramukadiy-05.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark"
                aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div id="layoutSidenav_content">
        <main>

            <!-- area kosong -->
            @yield('konten')

        </main>
        <footer class="p-4 mt-auto" style="background-color: #0B2447;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="p-3">
                            <img src="https://pramukadiy.or.id/assets/uploads/2020/12/footer-kwardadiy.png"
                                style="width: 200px;">
                        </div>
                    </div>
                    <div class="col-md-9 col-12">
                        <ul class="p-3 list-unstyled text-white">
                            <li>
                                <h5 class="fw-bold">Sekretariat</h5>
                            </li>
                            <li>
                                <p>Kompleks Bumi Perkemahan Taman Tunas Wiguna <br>
                                    Babarsari, Caturtunggal, Depok, Sleman <br>
                                    Daerah Istimewa Yogyakarta 55281</p>
                            </li>
                            <li>Phone : 0274 485753</li>
                            <li>Email : kwarda_diy@yahoo.com;</li>
                            <li>Email : pusbangjusinfo@pramukadiy.or.id</li>
                            <br>
                            <li>Website : Klik <a class="text-warning" href="https://pramukadiy.or.id/" style="text-decoration: none;">Disini</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="text-white">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-white">
                    <p class="text-center">Copyright &copy; KWARDA DIY</p>
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
        $(document).ready(function () {
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