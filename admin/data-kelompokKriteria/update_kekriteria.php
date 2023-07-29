<?php

require '../koneksi/koneksi.php';
$id    = $_GET['id_kelompok'];
$query = mysqli_query($koneksi, "SELECT * FROM kelompok_kriteria where id_kelompok = '$id'");
$data  = mysqli_fetch_assoc($query);

?> 