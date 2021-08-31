
<?php
  // Load file config.php
  include "../config.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data pasien berdasarkan ID yang dikirim
  $sql = mysqli_query($koneksi,"SELECT * FROM pasien");
  // Ambil Data yang Dikirim dari Form
$tgl_daftar = $_POST['tgl_daftar'];
$nama_dokter = $_POST['nama_dokter'];
$nama_poli = $_POST['nama_poli'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];
// Proses ubah data ke Database
mysqli_query($koneksi,"update pasien set tgl_daftar='$tgl_daftar', nama_dokter='$nama_dokter', nama_poli='$nama_poli',nama_pasien='$nama_pasien', tgl_lahir='$tgl_lahir', jk='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', status='$status' where id_pasien='$id'") or die( mysqli_error($koneksi) );
if($sql = mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: pendaftaran.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>