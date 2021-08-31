<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran | esemka-his</title>
  	<link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

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
					<a href="../index.php"><h3>Esemka-His</h3>
					<strong>EH</strong>
					</a>
				</div>
				<ul class="list-unstyled components">
					<li>
						<a href="../index.php">
							<i class="fas fa-home"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="../pasien/data_pasien.php">
							<i class="fas fa-american-sign-language-interpreting"></i>
							Data Pasien
						</a>
					</li>
					<li>
						<a href="../dokter/data_dokter.php">
							<i class="fas fa-diagnoses"></i>
							Data Dokter
						</a>
					</li>
					<li>
						<a href="../poliklinik/data_poli.php">
							<i class="fas fa-briefcase"></i>
							Data PoliKlinik
						</a>
					</li>
					<li>
						<a href="../obat/data_obat.php">
							<i class="fas fa-briefcase"></i>
							Data Obat
						</a>
					</li>
					<li>
						<a href="../pelayanan.php">
							<i class="fas fa-briefcase"></i>
							Rekam Medis
						</a>
					</li>
					<li>
						<a href="../logout.php">
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

				<marquee>Selamat Datang Di Halaman Utama Aplikasi Rumah Sakit Sederhana Esemka-His Berbasis Web</marquee>
					
				
				</div>
			</nav>

			<div id="page-wrapper" >
				<div style="padding: 15px 20px;background-color: #fbf9f9; min-height: 725px; margin-right: 15px; margin-left: 5px; margin-bottom: 0px;" >
					<div id="page-inner">
						<div class="box">
							<h1>Rekam Medis</h1>
							<h4>
								<small>Tambah Data Rekam Medis</small>
								<div class="pull-right">
									<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
								</div>
							</h4>
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3">
									<form action="proses.php" method="post">
										<div class="form-group">
											<label for="tgl_periksa">Tanggal Periksa</label>
											<input type="date" name="tgl_periksa" id="tgl_periksa" class="form-control" value="<?= date('Y-m-d') ?>" required="" autofocus="">
										</div>
										<div class="form-group">
											<label for="poli">Poli</label>
											<select name="poli" id="poli" class="form-control" required="">
												<option value="">- Pilih -</option>
												<?php
												include '../../config.php';
												$sql_poli = mysqli_query ($koneksi, "SELECT * FROM poli ORDER BY nama_poli ASC") or die (mysqli_error($koneksi));
												while($data_poli = mysqli_fetch_array($sql_poli)){
													echo '<option value="'.$data_poli['id_poli'].'">'.$data_poli['nama_poli'].'</option>';
												} ?>
											</select>
										</div>
										<div class="form-group">
											<label for="pasien">Nama Pasien</label>
											<select name="pasien" id="pasien" class="form-control" required="">
												<option value="">- Pilih -</option>
												<?php
												$sql_pasien = mysqli_query($koneksi, "SELECT * FROM pasien") or die(mysqli_error($koneksi));
												while($data_pasien = mysqli_fetch_array($sql_pasien)){
													echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
												} ?>
											</select>
										</div>
										<div class="form-group">
											<label for="keluhan">Keluhan</label>
											<textarea name="keluhan" id="keluhan" class="form-control" required=""></textarea>
										</div>
										<div class="form-group">
											<label for="dokter">Nama Dokter</label>
											<select name="dokter" id="dokter" class="form-control" required="">
												<option value="">- Pilih -</option>
												<?php
												$sql_dokter = mysqli_query($koneksi, "SELECT * FROM dokter") or die(mysqli_error($koneksi));
												while($data_dokter = mysqli_fetch_array($sql_dokter)){
													echo '<option value="'.$data_dokter['id_dokter'].'">'.$data_dokter['nama_dokter'].'</option>';
												} ?>
											</select>
										</div>
										<div class="form-group">
											<label for="diagnosa">Diagnosa</label>
											<textarea name="diagnosa" id="diagnosa" class="form-control" required="" rows="4"></textarea>
										</div>
										<div class="form-group">
											<label for="obat">Obat</label>
											<select multiple="" size="7" name="obat[]" id="obat" class="form-control" required="">
												<?php
												$sql_obat = mysqli_query($koneksi, "SELECT * FROM obat") or die(mysqli_error($koneksi));
												while($data_obat = mysqli_fetch_array($sql_obat)){
													echo '<option value="'.$data_obat['id_obat'].'">'.$data_obat['nama_obat'].'</option>';
												} ?>
											</select>
										</div>
										<div class="form-group">
											<input type="reset" name="reset" value="Reset" class="btn btn-default">
											<input type="submit" name="add" value="Simpan" class="btn btn-success">
										</div>
									</form>
									<script>
										CKEDITOR.replace( 'keluhan' );
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2ta4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#rekammedis').DataTable();
    } );
    </script>                                     
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

	<script>
		$(document).ready(function(){
			$('#rekammedis').DataTable({
				columnDefs: [{
					"searchable": false,
					"orderable": false,
					"targets": 8
				}],
				"order": [0, "asc"]
			})
		});
	</script>

</body>
</html>