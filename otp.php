<?php
			$generator = 1357902468;
			$result = "";
			$jumlah = 4;

			for ($i=1; $i <=$jumlah ; $i++) { 
				$result .= substr($generator, (rand()%(strlen($generator))), 1); 
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman OTP</title>
	<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css">
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
  <form action="" method="POST">
	<div class="container-fluid">
		<div class="card bg-white kotak-otp">
			<h5 class="card-header bg-white">Enter OTP</h5>
			<div class="card-body">
				<h6 style="color: green;" align="center">Silahkan masukan kode otp dengan benar</h6>
				<h4 class="tex-black" align="center"><?= $result; ?></h4>
				<input type="hidden" name="generator" class="form-control" value="<?= $result ?>">
				<div class="form-group">
					<input type="text" name="otp" class="form-control" autocomplete="off">
				</div>
				<button type="submit" name="kirim" class="btn btn-primary" style="margin-left: 40%;">Lanjut!</button>
			</div>
		</div>
	</div>
  </form>
  	<?php

		if (isset($_POST['kirim'])) {
		 	
		 	session_start();

		 	$otp = $_POST['otp'];
		 	$generator = $_POST['generator'];
		 	if($otp == $generator) {
		 			if ($_SESSION['role'] == "Admin") {
						echo "<script>
								alert('OTP anda valid!');
								window.location='admin/index.php?page=dashboard'
							  </script>";
					} else if ($_SESSION['role'] == "Pasien") {
						echo "<script>
								alert('OTP anda valid!');
								window.location='user/index.php?page=dashboard'
							  </script>";
					} else if ($_SESSION['role'] == "Pegawai") {
						echo "<script>
								alert('OTP anda valid!');
								window.location='pegawai/index.php?page=dashboard'
							  </script>";
					}
		 	} else {
		 		echo "<script>alert('Maaf Otp anda tidak valid!');
		 			  window.location='otp.php'</script>";
		 	}
		 }

	?>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>