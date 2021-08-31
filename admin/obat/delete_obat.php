<?php
//koneksi database
include '../../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from obat where id_obat='$id'")or die(mysqli_error($koneksi));

header("location:data_obat.php?pe");

?> 