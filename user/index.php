<?php
require '../koneksi/koneksi.php';
  session_start();

  if ($_SESSION['role'] == "") {
    echo "<script>
            alert('Maaf anda belum login');
            window.location='../login.php'
          </script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dejaka Team</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-white sidebar sidebar-dark" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand bg-white d-flex align-items-center justify-content-center" href="index.php?page=dashboard">
        <div class="sidebar-brand-icon">
           <img src="../assets/img/dejaka.png" alt="homepage" class="light-logo mr-3" style="width: 150px;" />
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0 bg-success mb-1">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active mt-1">
        <a class="nav-link bg-success" href="index.php?page=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active mt-1">
        <a class="nav-link bg-success" href="index.php?page=informasi">
          <i class="fas fa-info"></i>
          <span>Informasi</span></a>
      </li>
      <li class="nav-item active mt-1">
        <a class="nav-link bg-success" href="index.php?page=prediksi">
          <i class="fas fa-stethoscope"></i>
          <span>Konsultasi</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      
      <hr class="sidebar-divider d-none d-md-block bg-success mt-1">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-right mr-2 d-none d-md-inline">
        <button class="rounded-circle border-0 bg-success text-white" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item">
              <a href="../logout.php" class="btn btn-sm btn-success"><i class="fas fa-user mr-1"></i>Logout</a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php 
        error_reporting(0);
          switch ($_GET['page']) {
            case 'dashboard':
              include 'dashboard.php';
              break;

            case 'hasil':
              include 'hasil.php';
              break;

            case 'informasi':
              include 'prediksi-pasien/informasi.php';
              break;

            case 'prediksi':
              include 'prediksi-pasien/prediksi.php';
              break;

            case 'hasil_periksa':
              include 'prediksi-pasien/hasil_prediksi.php';
              break;
            
            default:
              include 'dashboard.php';
              break;
          }
        ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-success">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span class="text-white">Copyright &copy; DeJaKa Team 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/chart-area-demo.js"></script>
  <script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
