<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Lawang Kota - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css" />
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul style="background-color:#23222f;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-door-open"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lawang Kota<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="far fa-star"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['nama_pengguna']; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h3 align="center" style="width: max-content;">
                        Penyampaian Laporan SKPD <br> Pemerintah Kota Banjarmasin

                    </h3>


                </div>
                <br>

                <section class="content">
                    <div style="margin:  0px 10px 0px 10px;">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Upload P3DN</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-upload"></i>
                                    </div>
                                    <a href="https://drive.google.com/drive/folders/1KSN5tcGW4i1bp-0kmUFju1DeriU8T5Qi?usp=drive_link"
                                        Target='_blank' class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Data LRA SIPD</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-upload"></i>
                                    </div>
                                    <a href="uploadlra.php" class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Monitoring LRA SKPD</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-search"></i>
                                    </div>
                                    <a href="monitoring.php" class="small-box-footer ">
                                        <i class="fa fa-arrow-circle-right" style="color: white;"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Aplikasi Lawang Kota</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-map"></i>
                                    </div>
                                    <a href="/ubah-link-nya" class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <br>

                <section class="content">
                    <div style="margin:  0px 10px 0px 10px;">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Kertas Kerja</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-upload"></i>
                                    </div>
                                    <a href="https://drive.google.com/drive/folders/1TluU8IsRdu6yR7YA04zvXEg7U6CgqCSr?usp=drive_link"
                                        Target='_blank' class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Saldo Kas Bendahara</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-upload"></i>
                                    </div>
                                    <a href="https://docs.google.com/spreadsheets/d/1OmF_FQMhiN2QnAwJMp5Tm6DmZIA9bhQiuXWSfJz4gNY/edit?usp=sharing"
                                        Target='_blank' class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-secondary">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Neraca Konsolidasi</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-upload"></i>
                                    </div>
                                    <a href="https://docs.google.com/spreadsheets/d/1n1ojCkUs3_Rg-bwOIKTA5ySTwD815pC_5ZM0kxRmbpQ/edit?usp=sharing"
                                        Target='_blank' class="small-box-footer ">
                                        <i class="fa fa-arrow-circle-right" style="color: white;"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">

                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <font color="white">
                                            <p>Informasi Laporan</p>
                                        </font>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-map"></i>
                                    </div>
                                    <a href="/ubah-link-nya" class="small-box-footer">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar Dari Aplikasi?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Pilih "Keluar" di bawah jika Anda ingin mengakhiri sesi Anda saat ini.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                    Batal
                                </button>
                                <a class="btn btn-primary" href="logout.php">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- jQuery UI 1.11.4 -->

                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>
                <script src="dist/js/adminlte.js"></script>

                <!-- Page level plugins -->
                <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

                <!-- Page level custom scripts -->
                <!-- <script src="js/demo/chart-area-demo.js"></script> -->
                <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
                <script src="vendor/fontawesome-free/js/all.min.js"></script>
                <!-- Footer, biar kebawah footer nya-->

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Lawang Kota</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

</body>

</html>