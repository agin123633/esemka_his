<?php 
 
include_once "conn.php";

$koneksi = mysqli_connect($koneksi['host'], $koneksi['user'], $koneksi['pass'], $koneksi['db']);

if (mysqli_connect_error()) {
   echo("Koneksi Gagal : ".mysqli_connect_error());
}
?>