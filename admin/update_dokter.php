
<?php
// Load file config.php
include "../config.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
// Proses ubah data ke Database
mysqli_query($koneksi,"update dokter set nama_dokter='$nama_dokter', spesialis='$spesialis',alamat='$alamat', no_telp='$no_telp' where id_dokter='$id'") or die( mysqli_error($koneksi) );
if($data = mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: dokter.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='edit_dokter.php'>Kembali Ke Form</a>";
}
?>

