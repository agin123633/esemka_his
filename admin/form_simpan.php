<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Rumah Sakit</title>
</head>
<body>
  <h1>Tambah Data Pasien</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>No</td>
        <td><input type="text" name="no"></td>
      </tr>
      <td>Tanggal Daftar</td>
        <td><input type="date" name="tgl_daftar"></td>
      <tr>
      <tr>
        <td>Nama Dokter</td>
        <td><input type="text" name="nama_dokter"></td>
      </tr>
      <tr>
        <td>Nama Poli</td>
        <td><input type="text" name="nama_poli"></td>
      </tr>
        <td>Nama Pasien</td>
        <td><input type="text" name="nama_pasien"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tgl_lahir"></td>
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
    <input type="submit" value="Simpan">
    <a href="pendaftaran.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>