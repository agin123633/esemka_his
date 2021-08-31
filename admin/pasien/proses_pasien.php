<?php 
    include 'konek.php';
    require '../assets/comp/vendor/autoload.php';
    require '../assets/vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Csv;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if (isset($_POST['tambah_pasien'])) {
        $uuid = Uuid::uuid4()->toString();
        $daftar = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_daftar']));
        $identitas = trim(mysqli_real_escape_string($koneksi, $_POST['no_identitas']));
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_pasien']));
        $lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jk = trim(mysqli_real_escape_string($koneksi, $_POST['jk']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $no_hp = trim(mysqli_real_escape_string($koneksi, $_POST['no_hp']));
        $status = trim(mysqli_real_escape_string($koneksi, $_POST['status']));
        $sql_cek_identitas = mysqli_query($koneksi, "SELECT * FROM pasien WHERE no_identitas = '$identitas'") or die (mysqli_error($koneksi));
        if (mysqli_num_rows($sql_cek_identitas) > 0) {
            echo "<script>alert('Nomor Identitas sudah pernah diinput!');window.location='data_pasien.php';</script>";
        }else {
            mysqli_query($koneksi, "INSERT INTO pasien (id_pasien, tgl_daftar, no_identitas, nama_pasien, tgl_lahir, jk, alamat, no_hp, status) VALUES ('$uuid', '$daftar', '$identitas', '$nama', '$lahir', '$jk', '$alamat', '$no_hp', '$status')") or die (mysqli_error($koneksi));
            echo "<script>window.location='data_pasien.php';</script>";
        }
    }elseif (isset($_POST['edit_pasien'])) {
        $id_pasien=$_POST['id_pasien' ];
        $daftar = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_daftar']));
        $identitas = trim(mysqli_real_escape_string($koneksi, $_POST['no_identitas']));
        $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama_pasien']));
        $lahir = trim(mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']));
        $jk = trim(mysqli_real_escape_string($koneksi, $_POST['jk']));
        $alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
        $no_hp = trim(mysqli_real_escape_string($koneksi, $_POST['no_hp']));
        $status = trim(mysqli_real_escape_string($koneksi, $_POST['status']));
        $sql_cek_identitas = mysqli_query($koneksi, "SELECT * FROM pasien WHERE no_identitas = '$identitas' AND id_pasien != '$id'") or die (mysqli_error($koneksi));
        if (mysqli_num_rows($sql_cek_identitas) > 0) {
            echo "<script>alert('Nomor Identitas sudah pernah diinput!');window.location='edit_pasien.php?id=$id';</script>";
        }else {
            mysqli_query($koneksi, "UPDATE pasien SET no_identitas = '$identitas', tgl_daftar = '$daftar', nama_pasien = '$nama', tgl_lahir = '$lahir', jk = '$jk' , alamat = '$alamat' , no_hp = '$no_hp', status = '$status' WHERE id_pasien = '$id'") or die (mysqli_error($koneksi));
            echo "<script>alert('Data berhasil ditambahkan');window.location='data_pasien.php';</script>";
        }

    }elseif (isset($_POST['import'])) {
        $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        
        if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
        
        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);
    
        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
    
        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
        
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        for($i = 0;$i < count($sheetData);$i++)
        {
            $no_identitas = $sheetData[$i]['1'];
            $nama_pasien = $sheetData[$i]['2'];
            $jk = $sheetData[$i]['3'];
            $alamat = $sheetData[$i]['4'];
            $no_hp = $sheetData[$i]['5'];
            mysqli_query($koneksi,"insert into pasien (id_pasien,nama_pasien,jk,alamat,no_hp) values ('','$no_identitas','$nama_pasiens','$jk','$alamat','$no_hp')");
        }
        header("Location: data_pasien.php"); 
    }
}
?>