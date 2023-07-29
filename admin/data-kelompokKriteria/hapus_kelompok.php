<?php

require '../../koneksi/koneksi.php';

$id = $_GET['id_kelompok'];
$query = mysqli_query($koneksi, "DELETE FROM kelompok_kriteria where id_kelompok = '$id'");
if ($query)
{
	echo "<script>
			alert('Hapus Data berhasil');
			window.location='../index.php?page=dataKeGejala'
		  </script>";
} else {
	echo "<script>
			alert('Hapus Data gagal');
			window.location='../index.php?page=dataKeGejala'
		  </script>";
}