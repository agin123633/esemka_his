<?php 
    include '../../config.php';
    require '../assets/comp/vendor/autoload.php';
 
    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$tgl = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_periksa']));
	$poli = trim(mysqli_real_escape_string($koneksi, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($koneksi, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($koneksi, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($koneksi, $_POST['dokter']));
	$diagnosa = trim(mysqli_real_escape_string($koneksi, $_POST['diagnosa']));

	// insert ke rekammedis
	mysqli_query($koneksi, "INSERT INTO rekammedis (id_rm, id_pasien, keluhan, id_dokter, diagnosa, id_poli, tgl_periksa) VALUES ('$uuid', '$pasien', '$keluhan', '$dokter',  '$diagnosa', '$poli', '$tgl' )") or die(mysqli_error($koneksi));

	// mendeklarasikan obat
	$obat = $_POST['obat'];
	foreach ($obat as $ob){
		mysqli_query($koneksi, "INSERT INTO rm_obat (id_rm, id_obat) VALUES ('$uuid', '$ob')") or die(mysqli_error($koneksi));
	}

	echo "<script>alert('Data berhasil ditambahkan'); window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){

	$id = $_POST['id'];
	$tgl = trim(mysqli_real_escape_string($koneksi, $_POST['tgl']));
	$poli = trim(mysqli_real_escape_string($koneksi, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($koneksi, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($koneksi, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($koneksi, $_POST['dokter']));
	$diagnosa = trim(mysqli_real_escape_string($koneksi, $_POST['diagnosa']));

	//update ke tabel rekammedis
	mysqli_query($koneksi, "UPDATE rekammedis SET tgl_periksa = '$tgl', id_poli = '$poli', id_pasien = '$pasien', keluhan = '$keluhan', id_dokter = '$dokter', diagnosa = '$diagnosa' WHERE id_rm = '$id'") or die(mysqli_error($koneksi));

	// mendeklarasikan obat
	$obat = $_POST['obat'];
	mysqli_query($koneksi, "DELETE FROM tb_rm_obat WHERE id_rm = '$id'") or die(mysqli_error($koneksi));
	foreach($obat as $obat){
		mysqli_query($koneksi, "INSERT INTO tb_rm_obat VALUES('', '$id', '$obat')") or die(mysqli_error($koneksi));
	}
	echo "<script>alert('Data berhasil diubah'); window.location='data.php';</script>";
}