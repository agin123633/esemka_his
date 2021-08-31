<?php
$koneksi=mysqli_connect("localhost","root","","esemka_his");
if (mysqli_connect_errno()) {
    echo "gagal koneksi".mysqli_connect_errno();
}
?>