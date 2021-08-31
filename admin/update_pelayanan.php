
<?php
// Load file config.php
include "../config.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$tgl_pelayanan = $_POST['tgl_pelayanan'];
$id_dokter = $_POST['id_dokter'];
$nama_pasien = $_POST['nama_pasien'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];
$suhu = $_POST['suhu'];
$penyakit = $_POST['penyakit'];
$tindakan = $_POST['tindakan'];
$status = $_POST['status'];

// Proses ubah data ke Database
mysqli_query($koneksi,"update pelayanan set tgl_pelayanan=$tgl_pelayanan, id_dokter='$id_dokter', nama_pasien='$nama_pasien', tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', suhu='$suhu', penyakit='$penyakit', tindakan='$tindakan', status='$status'  where id_pelayanan='$id'") or die( mysqli_error($koneksi) );
if($data = mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: pelayanan.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='edit_pelayanan.php'>Kembali Ke Form</a>";
}
?>

