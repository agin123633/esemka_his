<?php
//koneksi database
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from dokter where id_dokter='$id'")or die(mysqli_error($koneksi));

header("location:dokter.php?pe");

?>