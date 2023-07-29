<!DOCTYPE html>
<html>
<head>
	<title>Halaman Lupa Password</title>
	<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css">
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action="" method="POST">
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
						<h2 class="text-secondary text-center">Form Lupa Password</h2>
						<div class="form-group mt-4">
							<input type="text" name="nama" class="form-control form-user" placeholder="Masukan Username...">
						</div>
						 <button type="submit" name="cek" class=" btn btn-success btn-user btn-block mt-2">
						 	Cek
						 </button>

						 <?php  

						 	require 'koneksi/koneksi.php';	
						 	if (isset($_POST['cek'])) {
						 		
						 		$user = $_POST['nama'];

						 		$tampil = mysqli_query($koneksi, "SELECT password FROM user where nama = '$user'");
						 		$data = mysqli_fetch_assoc($tampil);  ?>

						 <table class="table table-bordered mt-5">
						 	<thead class="bg-dark">
						 		<tr>
						 			<th class="text-white" colspan="1">Password Anda</th>
						 		</tr>
						 	</thead>
						 	<tbody>
						 		<tr>
						 			<td><?= $data['password'];?> <a href="login.php" class="btn btn-sm btn-info ml-3">Login</a></td>
						 		</tr>
						 	</tbody>
						 </table>
						 <?php } ?>

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