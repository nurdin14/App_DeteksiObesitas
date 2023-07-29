<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id_kriteria'];
$id_kelompok  = $_POST['id_kelompok'];
$kode 		  = $_POST['kode'];
$keterangan   = $_POST['keterangan'];
$cf_rule   	  = $_POST['cf_rule'];
$cf_user      = $_POST['cf_user'];


$query = mysqli_query($koneksi, "INSERT INTO kriteria values('$id','$id_kelompok','$kode','$keterangan', '$cf_rule','$cf_user')");

if ($query)
{
	echo "<script>
			alert('Simpan Data berhasil');
			window.location='../index.php?page=dataKriteria'
		  </script>";
} else {
	echo "<script>
			alert('Simpan Data gagal');
			window.location='../index.php?page=tambah_kriteria'
		  </script>";
}