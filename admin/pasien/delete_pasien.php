<?php
//koneksi database
include 'konek.php';

$id_pasien = $_GET['id_pasien'];

mysqli_query($koneksi, "DELETE FROM pasien WHERE id_pasien='$id_pasien'")or die(mysqli_error($koneksi));

header("location:data_pasien.php?pe");

?> 