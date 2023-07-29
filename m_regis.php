<?php 

require 'koneksi/koneksi.php';

	$id 		= $_POST['id'];
	$nama 		= $_POST['nama'];
	$password 	= $_POST['password'];
	$role 		= $_POST['role'];
	$jk 		= $_POST['jenis_k'];
	$alamat 	= $_POST['alamat'];
	$no			= $_POST['no_telp'];
	
	

	if (strlen($password) <= 6) {
		
		$query = mysqli_query($koneksi, "INSERT INTO user values('$id', '$nama','$password','$role','$jk', '$alamat', '$no')");

		if($query) {
			header('location:login.php');
		} else {
			echo "<script>
					alert('Pendaftaran gagal, Silahkan coba lagi');
					window.location='registrasi.php'
				  </script>";
		}
	}
	 else {

		echo "<script>
			   alert('Password Harus 6 Karakter, Silahkan coba lagi');
			   window.location='registrasi.php'
			  </script>";
	}
	
		

?>