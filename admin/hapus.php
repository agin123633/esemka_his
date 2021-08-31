<?php 

include '../config.php';

$id = $_GET["id"];

mysqli_query($koneksi,"DELETE FROM pasien WHERE id_pasien='$id'")or die(mysqli_error($koneksi));

header("location:pendaftaran.php?pesan=hapus");//error

?>