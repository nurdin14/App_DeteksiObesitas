<?php

require '../../koneksi/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM user where id = '$id'");
if ($query)
{
	echo "<script>
			alert('Hapus Data berhasil');
			window.location='../index.php?page=pegawai'
		  </script>";
} else {
	echo "<script>
			alert('Hapus Data gagal');
			window.location='../index.php?page=pegawai'
		  </script>";
}