<?php
require_once"../config.php";

mysqli_query($koneksi, "DELETE FROM rekammedis WHERE id_rm = '$_GET[id]'") or die(mysqli_error($koneksi));
echo "<script>alert('Data berhasil dihapus'); window.location='data.php';</script>";