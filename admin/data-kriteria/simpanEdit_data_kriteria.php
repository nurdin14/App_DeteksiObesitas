<?php

require '../../koneksi/koneksi.php';

$id_kriteria  = $_POST['id_kriteria'];
$id_kelompok  = $_POST['id_kelompok'];
$kode 		  = $_POST['kode'];
$keterangan   = $_POST['keterangan'];
$cf_rule   	  = $_POST['cf_rule'];
$cf_user      = $_POST['cf_user'];

$query = mysqli_query($koneksi, "UPDATE kriteria SET id_kriteria = '$id_kriteria', id_kelompok = '$id_kelompok', kode = '$kode', keterangan = '$keterangan', cf_rule = '$cf_rule', cf_user = '$cf_user' WHERE id_kriteria='$id_kriteria'");

if ($query)
{
	echo "<script>
			alert('Ubah Data berhasil');
			window.location='../index.php?page=dataKriteria'
		  </script>";
} else {
	echo "<script>
			alert('Ubah Data gagal');
			window.location='../index.php?page=dataKriteria'
		  </script>";
}