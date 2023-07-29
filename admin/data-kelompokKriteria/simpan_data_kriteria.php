<?php

require '../../koneksi/koneksi.php';

$id 		= $_POST['id_kelompok'];
$nama 		= $_POST['nama'];
$gambar		= $_FILES['gambar']['name'];
$source 	= $_FILES['gambar']['tmp_name'];
$folder 	= '../../assets/img/';

		move_uploaded_file($source, $folder.$gambar);

		$query = mysqli_query($koneksi, "INSERT INTO kelompok_kriteria values('$id','$nama','$gambar')");

		if ($query)
		{
			echo "<script>
					alert('Simpan Data berhasil');
					window.location='../index.php?page=dataKeGejala'
				  </script>";
		} else {
			echo "<script>
					alert('Simpan Data gagal');
					window.location='../index.php?page=tambah_KelompokKriteria'
				  </script>";
		}
