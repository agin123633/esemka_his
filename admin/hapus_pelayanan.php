<?php
//koneksi database
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from pelayanan where id_pelayanan ='$id'")or die(mysqli_error($koneksi));

header("location:index.php?pe");

?>