<?php 
    include '../../config.php';
    require '../assets/comp/vendor/autoload.php';
 
    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if (isset($_POST['tambah_obat'])) {
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_obat']));
        $harga = trim(mysqli_real_escape_string($koneksi, $_POST['harga_obat']));
        $ket = trim(mysqli_real_escape_string($koneksi, $_POST['ket_obat']));
        mysqli_query($koneksi, "INSERT INTO obat (id_obat, nama_obat, harga_obat, ket_obat) VALUES ('$uuid', '$nama', '$harga', '$ket')") or die (mysqli_error($koneksi));
        echo "<script>window.location='data_obat.php';</script>";
    }elseif (isset($_POST['edit_obat'])) {
        $id = $_POST['id'];
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_obat']));
        $harga = trim(mysqli_real_escape_string($koneksi, $_POST['harga_obat']));
        $ket = trim(mysqli_real_escape_string($koneksi, $_POST['ket_obat']));
        mysqli_query($koneksi, "UPDATE obat SET nama_obat = '$nama', harga_obat ='$harga', ket_obat ='$ket' WHERE id_obat = '$id'") or die (mysqli_error($koneksi));
        echo "<script>window.location='data_obat.php';</script>";
    }
?>
