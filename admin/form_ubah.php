<html>
  <head>
    <title>Aplikasi Rumah Sakit</title>
    <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      <!--link bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!--/link bootstrap-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  </head>
  <body>		
    <div class="wrapper">
      <nav id="sidebar">
        <div class="sidebar-header">
          <a href="index.php"><h3>Esemka-His</h3>
          <strong>EH</strong>
          </a>
        </div>
        <ul class="list-unstyled components">
					<li>
						<a href="index.php">
							<i class="fas fa-home"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="pendaftaran.php">
							<i class="fas fa-american-sign-language-interpreting"></i>
							Data Pasien
						</a>
					</li>
					
					<li>
						<a href="dokter/data_dokter.php">
							<i class="fas fa-briefcase"></i>
							Data Dokter
						</a>
					</li>
					<li>
						<a href="poliklinik/data_poli.php">
							<i class="fas fa-briefcase"></i>
							Data PoliKlinik
						</a>
					</li>
					<li>
						<a href="obat/data_obat.php">
							<i class="fas fa-briefcase"></i>
							Data Obat
						</a>
					</li>
					<li>
						<a href="pelayanan.php">
							<i class="fas fa-diagnoses"></i>
							Rekam Medis
						</a>
					</li>
					<li>
						<a href="logout.php">
							<i class="fas fa-sign-out-alt"></i>
							<font color="red">Logout</font><br>
						</a>
					</li>
				</ul>
        <button type="button" id="sidebarCollapse" class="btn btn-default">
            <i class="fas fa-angle-double-right"></i>
        </button>
      </nav>	

        <div id="content">
          <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">

                <marquee>Selamat Datang Di Halaman Pendaftaran Aplikasi Rumah Sakit Sederhana Esemka-His Berbasis Web</marquee>

              </div>
          </nav>
          <div class="page-wrapper" >
          <div style="padding: 15px 20px;background-color: #fbf9f9; min-height: 500px; margin-right: 15px; margin-left: 5px; margin-bottom: 0px;" >
              <div id="page-inner">
              

                          <!-- Form Elements -->
                        <div class="panel panel-success">
                          <div class="panel-heading">Ubah Data Pasien </div>
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <?php
                                    // Load file config.php
                                    include "../config.php";
                                    // Ambil data ID yang dikirim oleh index.php melalui URL
                                    $id = $_GET['id'];
                                    // Query untuk menampilkan data pasien berdasarkan ID yang dikirim
                                    $sql = mysqli_query  ($koneksi,"SELECT * FROM pasien WHERE id_pasien='$id'");
                                    $data = mysqli_fetch_array($sql)
                                  ?>
                                  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
                                      <div class="form-group">
                                          <label>Tanggal Daftar</label>
                                          <input class="form-control" type="text" name="tgl_daftar" value="<?php echo $data['tgl_daftar']; ?>"readonly>
                                      </div>
                                      <div class="form-group">
                                          <label>Nama Dokter</label>
                                          <input class="form-control" type="text" name="nama_dokter" value="<?php echo $data['nama_dokter']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Nama Poli</label>
                                          <input class="form-control" type="text" name="nama_poli" value="<?php echo $data['nama_poli']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Nama Pasien</label>
                                          <input class="form-control" type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Tanggal Lahir</label>
                                          <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
                                      </div>
                                      <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                          <select name="jk" id="jk" class="form-control">
                                            <option value="Laki-laki">Laki-laki</option>  
                                            <option value="Perempuan">Perempuan</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>No HP</label>
                                          <input class="form-control" type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Status</label>
                                          <select name="status" id="status" class="form-control">
                                            <option value="Daftar">Daftar</option>  
                                            <option value="Pulang">Pulang</option>
                                          </select>
                                      </div>
                                      <div align="right" >
                                      <input type="submit" name="Ubah" id="simpan" value="Simpan" class="btn btn-success" />
                                      <a href="pendaftaran.php"><input type="button" value="Batal" class="btn btn-danger"></a></td>

                                      </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                        </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>

