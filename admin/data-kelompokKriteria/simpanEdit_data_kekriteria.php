<?php

require '../../koneksi/koneksi.php';

$id_kelompok  = $_POST['id_kelompok'];
$nama 		  = $_POST['nama'];
$gambar       = $_FILES['gambar']['name'];
$source		  = $_FILES['gambar']['tmp_name'];
$folder 	  = '../../assets/img/';

if ($gambar !='') {
	
	move_uploaded_file($source, $folder.$gambar);
	$query = mysqli_query($koneksi, "UPDATE kelompok_kriteria SET id_kelompok = '$id_kelompok', nama = '$nama', gambar = '$gambar' WHERE id_kelompok='$id_kelompok'");

		if ($query)
		{
			echo "<script>
					alert('Ubah Data berhasil');
					window.location='../index.php?page=dataKeGejala'
				  </script>";
		} else {
			echo "<script>
					alert('Ubah Data gagal');
					window.location='../index.php?page=dataKeGejala'
				  </script>";
		}
} else {

	$query = mysqli_query($koneksi, "UPDATE kelompok_kriteria SET id_kelompok = '$id_kelompok', nama = '$nama' WHERE id_kelompok='$id_kelompok'");

		if ($query)
		{
			echo "<script>
					alert('Ubah Data berhasil');
					window.location='../index.php?page=dataKeGejala'
				  </script>";
		} else {
			echo "<script>
					alert('Ubah Data gagal');
					window.location='../index.php?page=dataKeGejala'
				  </script>";
		}
}

