<?php
include 'konek.php';
$id_pasien = $_POST['id_pasien'];
if (isset($_POST['Simpan'])) {
  $tgl_daftar = $_POST['tgl_daftar'];
  $nama_pasien = $_POST['nama_pasien'];
  $alamat = $_POST['alamat'];
  $status = $_POST['status'];

  $ubah = mysqli_query($koneksi, "UPDATE pasien SET tgl_daftar='$tgl_daftar',
    nama_pasien='$nama_pasien',
    alamat='$alamat',
    status='$status'
    WHERE id_pasien='$id_pasien'"
  );
  if ($ubah) {
    echo "alert('Data berhasil diubah');";
    header("location:index.html");
  }else{
    echo "<script>alert('Data Gagal Di ubah') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
  }
}?>