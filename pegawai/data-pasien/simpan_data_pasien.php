<?php

require '../../koneksi/koneksi.php';

$id 		= $_POST['id'];
$nama 		= $_POST['nama'];
$password 	= $_POST['password'];
$role 		= $_POST['role'];
$jenis_k 	= $_POST['jenis_k'];
$alamat 	= $_POST['alamat'];
$no_telp 	= $_POST['no_telp'];

$query = mysqli_query($koneksi, "INSERT INTO user values('$id','$nama','$password','$role','$jenis_k','$alamat','$no_telp')");

if ($query)
{
	echo "<script>
			alert('Simpan Data berhasil');
			window.location='../index.php?page=pasien'
		  </script>";
} else {
	echo "<script>
			alert('Simpan Data gagal');
			window.location='../index.php?page=tambah_pasien'
		  </script>";
}