<?php

require '../../koneksi/koneksi.php';

$id 		  = $_POST['id_solusi'];
$kode         = $_POST['kode'];
$id_kelompok  = $_POST['id_kelompok'];
$keterangan   = $_POST['keterangan'];


$query = mysqli_query($koneksi, "INSERT INTO solusi values('$id','$kode','$id_kelompok','$keterangan')");

if ($query)
{
	echo "<script>
			alert('Simpan Data berhasil');
			window.location='../index.php?page=solusi'
		  </script>";
} else {
	echo "<script>
			alert('Simpan Data gagal');
			window.location='../index.php?page=tambah_solusi'
		  </script>";
}