<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css">
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action="m_regis.php" method="POST">
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
						<h2 class="text-secondary text-center">Form Pendaftran</h2>
						<div class="form-group mt-4">
							<input type="hidden" name="id">
							<input type="text" name="nama" class="form-control form-user" placeholder="Masukan Nama...">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control form-user" placeholder="Masukan Password...">
						</div>
						<div class="form-group">
							<select name="role" class="form-control">
								<option>Bagi Pasien Silahkan Pilih Pasien!</option>
								<option value="Admin">Admin</option>
								<option value="Pasien">Pasien</option>
								<option value="Pegawai">Pegawai</option>
							</select>
						</div>
						<div class="form-group">
							<select name="jenis_k" class="form-control">
								<option>Pilih Jenis Kelamin</option>
								<option value="L">L</option>
								<option value="P">P</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="alamat" class="form-control form-user" placeholder="Masukan Alamat...">
						</div>
						<div class="form-group">
							<input type="text" name="no_telp" class="form-control form-user" placeholder="XXXX-XXXX-...">
						</div>
						
						
						 <button type="submit" name="daftar" class=" uku btn btn-success btn-user btn-block mt-2">Daftar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
  </form>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>
</html>