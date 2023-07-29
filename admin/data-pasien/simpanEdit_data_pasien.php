<?php

require '../../koneksi/koneksi.php';

$id 		= $_POST['id'];
$nama 		= $_POST['nama'];
$password 	= $_POST['password'];
$role 		= $_POST['role'];
$jenis_k 	= $_POST['jenis_k'];
$alamat 	= $_POST['alamat'];
$no_telp 	= $_POST['no_telp'];

$query = mysqli_query($koneksi, "UPDATE user SET id = '$id', nama = '$nama', password = '$password', role = '$role', jenis_k = '$jenis_k', alamat = '$alamat', no_telp = '$no_telp' WHERE id='$id'");

if ($query)
{
	echo "<script>
			alert('Ubah Data berhasil');
			window.location='../index.php?page=pasien'
		  </script>";
} else {
	echo "<script>
			alert('Ubah Data gagal');
			window.location='../index.php?page=pasien'
		  </script>";
}