<?php

require '../koneksi/koneksi.php';
$id_kriteria    = $_GET['id_kriteria'];
$query = mysqli_query($koneksi, "SELECT * FROM kriteria where id_kriteria = '$id_kriteria'");
$data  = mysqli_fetch_assoc($query);

?> 