<?php

require '../../koneksi/koneksi.php';

$id_kriteria = $_GET['id_kriteria'];
$query = mysqli_query($koneksi, "DELETE FROM kriteria where id_kriteria = '$id_kriteria'");
if ($query)
{
	echo "<script>
			alert('Hapus Data berhasil');
			window.location='../index.php?page=dataKriteria'
		  </script>";
} else {
	echo "<script>
			alert('Hapus Data gagal');
			window.location='../index.php?page=dataKriteria'
		  </script>";
}