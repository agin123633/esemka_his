<?php
//koneksi database
include '../../config.php';

    $chk = $_POST['checked'];
    if (!isset($chk)) {
        echo "<script>alert('Tidak ada data yang dipilih!'); window.location='data_poli.php'; </script>";
    } else {
        foreach ($chk as $id) {
            $sql = mysqli_query($koneksi, "DELETE FROM poli WHERE id_poli = '$id'") or die (mysqli_error($koneksi));
        }
        if($sql){
            echo "<script>alert('".count($chk)." data berhasil dihapus'); window.location='data_poli.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data, coba lagi'); </script>";
        }
    }
?>