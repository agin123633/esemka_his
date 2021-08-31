<?php
// koneksi database
include '../config.php';

// menangkap data yang di kirim dari form
$tgl_pelayanan = $_POST['tgl_pelayanan'];
$id_dokter = $_POST['id_dokter'];
$nama_pasien = $_POST['nama_pasien'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];
$suhu = $_POST['suhu'];
$penyakit = $_POST['penyakit'];
$tindakan = $_POST['tindakan'];
$status = $_POST['status'];
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pelayanan values('','$tgl_pelayanan','$id_dokter','$nama_pasien','$tinggi_badan','$berat_badan','$suhu','$penyakit','$tindakan','$status')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
