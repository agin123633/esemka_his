<?php
//koneksi database
include '../../config.php';

    $chk = $_POST['checked'];
    if (!isset($chk)) {
        echo "<script>alert('Tidak ada data yang dipilih!'); window.location='data_dokter.php'; </script>";
    } else {
        foreach ($chk as $id) {
            $sql = mysqli_query($koneksi, "DELETE FROM dokter WHERE id_dokter = '$id'") or die (mysqli_error($koneksi));
        }
        if($sql){
            echo "<script>alert('".count($chk)." data berhasil dihapus'); window.location='data_dokter.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data, coba lagi'); </script>";
        }
    }
?> 