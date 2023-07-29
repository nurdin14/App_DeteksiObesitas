<?php

require '../koneksi/koneksi.php';
$id    = $_GET['id_solusi'];
$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '$id'");
$data  = mysqli_fetch_assoc($query);

?> 