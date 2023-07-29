<?php 
require 'login.php';
require 'koneksi/koneksi.php';
session_start();

			$username = $_POST['nama'];
			$password = $_POST['password'];

			if (strlen($password) <= 6 ) {
				$query = mysqli_query($koneksi, "SELECT * FROM user where nama = '$username' and password = '$password' ");
				$cek = mysqli_num_rows($query);

				if($cek > 0) {

					$data = mysqli_fetch_assoc($query);

					if($data['role'] == "Admin") {

						$_SESSION['nama'] = $username;
						$_SESSION['role']	  = "Admin";
						header('location:otp.php');
					} else if($data['role'] == "Pegawai") {

						$_SESSION['nama'] = $username;
						$_SESSION['role']	  = "Pegawai";
						header('location:otp.php');
					} else if($data['role'] == "Pasien") {

						$_SESSION['nama'] = $username;
						$_SESSION['role']	  = "Pasien";
						header('location:otp.php');
					} else {
						"<script>
						   alert('Maaf Username dan Password tidak terdaftar silahkan login lagi'
						  </script>";
					}
				}
			} else {
				echo "<script>
					   alert('Password Harus 6 Karakter, Silahkan coba lagi');
					   window.location='login.php'
					  </script>";
			}
?>