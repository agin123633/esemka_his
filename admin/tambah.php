<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran | esemka-his</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<button> <a href="pendaftaran.php">Lihat Semua Data</a> </button>
  <br/>
	<br/>
	<h3>Daftar Pasien</h3>
  <br/>
	<form method="post" action="proses_simpan.php">
		<?php
			include '../config.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM pasien WHERE id_pasien='$id'");
			$d = mysqli_fetch_array($data)
		?>		
		<table>
    <tr>
      <td>Tanggal Daftar</td>
        <td><input type="date" name="tgl_daftar"></td>
    </tr>
      <tr>
			<tr>	
      <tr>			
        <td>Nama Dokter</td>
        <td><input type="text" name="nama_dokter"></td>
      </tr>
      <tr>
        <td>Nama Poli</td>
        <td><input type="text" name="nama_poli"></td>
          <?php
          $sql = $koneksi->query("SELECT * FROM dokter order by id_dokter");

              while ($data=$sql->fetch_assoc())  
          ?>
			
				</td>
        </tr>
			</tr>
			</tr>	
      <tr>
      
        <td>Nama Pasien</td>
        <td><input type="text" name="nama_pasien"></td>
      </tr>
      <tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tgl_lahir"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="jk"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
      </tr>
      <tr>
        <td>No Hp</td>
        <td><textarea name="no_hp"></textarea></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><textarea name="status"></textarea></td>
      </tr>
    </table>
    <hr>
    <br/>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
			</tr>				
		</table>
	</form>
</body>
</html>