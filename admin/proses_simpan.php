<?php
// Load file koneksi.php
include "../config.php";
// Ambil Data yang Dikirim dari Form
$tanggal_daftar = $_POST['tgl_daftar'];
$nama_dokter = $_POST['nama_dokter'];
$nama_poli = $_POST['nama_poli'];
$nama_pasien = $_POST['nama_pasien'];
$tanggal_lahir= $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];
// Proses simpan ke Database
$sql = mysqli_query($koneksi,"INSERT INTO `pasien` (`id_pasien`, `tgl_daftar`, `nama_dokter`,`nama_poli`,`nama_pasien`, `tgl_lahir`, `jk`, `alamat`, `no_hp`, `status`) VALUES (NULL, '$tanggal_daftar', '$nama_dokter','$nama_poli', '$nama_pasien','$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$status')");
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: pendaftaran.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}
?>