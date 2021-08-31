<?php 
    include '../../config.php';
    require '../assets/comp/vendor/autoload.php';
 
    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if (isset($_POST['tambah_dokter'])) {
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_dokter']));
        $spesialis = trim(mysqli_real_escape_string($koneksi, $_POST['spesialis']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['no_telp']));
        mysqli_query($koneksi, "INSERT INTO dokter (id_dokter, nama_dokter, spesialis, alamat, no_telp) VALUES ('$uuid', '$nama', '$spesialis', '$alamat', '$telp')") or die (mysqli_error($koneksi));
        echo "<script>window.location='data_dokter.php';</script>";
    }elseif (isset($_POST['edit_dokter'])) {
        $id = $_POST['id'];
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_dokter']));
        $spesialis = trim(mysqli_real_escape_string($koneksi, $_POST['spesialis']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $telp = trim(mysqli_real_escape_string($koneksi, $_POST['no_telp']));
        mysqli_query($koneksi, "UPDATE dokter SET nama_dokter = '$nama', spesialis ='$spesialis', alamat ='$alamat', no_telp = '$telp' WHERE id_dokter = '$id'") or die (mysqli_error($koneksi));
        echo "<script>window.location='data_dokter.php';</script>";
    }
?>
