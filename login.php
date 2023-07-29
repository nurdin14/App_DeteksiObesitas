<?php
	session_start();
	error_reporting(0);
	if ($_SESSION['role'] == "Admin") {
		echo "<script>
				alert('Maaf anda belum mengakses halaman LOGOUT!');
				window.location='admin/index.php'
			  </script>";
	} else if ($_SESSION['role'] == "Pasien") {
		echo "<script>
				alert('Maaf anda belum mengakses halaman LOGOUT!');
				window.location='user/index.php'
			  </script>";
	} else if ($_SESSION['role'] == "Pegawai") {
		echo "<script>
				alert('Maaf anda belum mengakses halaman LOGOUT!');
				window.location='pegawai/index.php'
			  </script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css">
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action="m_login.php" method="POST">
	<div class="container">
		<div class="card  border-0 shadow-lg mt-5 login">
			<div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<div class="card border-0">
							<img src="assets/img/dejaka.png" style="width: 380px;" class="gambar">
						</div>
					</div>
					<div class="col-md-6" style="margin-top: 5%;">
						<h2 class="text-secondary text-center">Form Login!</h2>
						<div class="form-group mt-4">
							<input type="text" name="nama" class="form-control form-user" placeholder="Masukan Username..." autocomplete="off">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control form-user" placeholder="Masukan Password...">
						</div>
						 <button type="submit" name="login" class=" uku btn btn-success btn-user btn-block mt-2">
						 	Login
						 </button>
						 <hr class="text-secondary border-4 mt-2">
						 <a href="registrasi.php">Belum punya akun?</a> | <a href="lupa_password.php">Lupa password</a>
					</div>
				</div>
			</div>
		</div>
	</div>
  </form>

 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="assets/js/sb-admin-2.min.js"></script>
 <script src="assets/vendor/chart.js/Chart.min.js"></script>
 <script src="assets/js/demo/chart-area-demo.js"></script>
 <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>
</html>