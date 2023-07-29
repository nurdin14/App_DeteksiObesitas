<?php

require '../../koneksi/koneksi.php';

$id = $_GET['id_solusi'];
$query = mysqli_query($koneksi, "DELETE FROM solusi where id_solusi = '$id'");
if ($query)
{
	echo "<script>
			alert('Hapus Data berhasil');
			window.location='../index.php?page=solusi'
		  </script>";
} else {
	echo "<script>
			alert('Hapus Data gagal');
			window.location='../index.php?page=solusi'
		  </script>";
}