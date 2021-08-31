 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pelayanan | esemka-his</title>
	<link rel="stylesheet" href="assets/css/style.css">
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

				<marquee>Selamat Datang Di Halaman Pelayanan Aplikasi Rumah Sakit Sederhana Esemka-His Berbasis Web</marquee>

				</div>
			</nav>
			<div id="page-wrapper" >
			<div style="padding: 15px 20px;background-color: #fbf9f9; min-height: 500px; margin-right: 15px; margin-left: 5px; margin-bottom: 0px;" >
            <div id="page-inner">
	<div class="row" >
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
			Antrian Pendaftaran   </div>
            <div class="panel-body"><!--Panel Form pencarian -->
				<div class="panel-body" >
				<form class="form-inline" >
					<div class="form-group">
					<select class="form-control" id="Kolom" name="Kolom" required="">
						<?php
						$kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
						?>
						<option value="nama_pasien" <?php if ($kolom=="nama_pasien") echo "selected"; ?>>Nama Pasien</option>
						<option value="nama_dokter" <?php if ($kolom=="nama_dokter") echo "selected";?>>Nama Dokter</option>
					</select>
					</div>
					<div class="form-group">
					<input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Cari</button>
					<a href="pelayanan.php" class="btn btn-danger">Reset</a>
							<button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success"><i class="fas fa-diagnoses"></i> Layani</button>
				</form>	
				</div>
 			<!--/Panel Form pencarian -->
</br>


					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Tgl Pelayanan</th>
								<th>Nama Dokter</th>
								<th>Nama Pasien</th>
								<th>Status</th>
								<th colspan="2">Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php
						include '../config.php';
						$query = mysqli_query($koneksi, "SELECT * FROM pelayanan INNER JOIN pasien ON pelayanan.id_pasien= pasien.id_pasien INNER JOIN dokter ON pelayanan.id_dokter = dokter.id_dokter");
						foreach ($query as $data) :
							?>
								<tr>
									<td><?php echo $data["tgl_pelayanan"]; ?></td>
									<td><?php echo $data["id_dokter"]; ?></td>
									<td><?php echo $data["nama_pasien"]; ?></td>
									<td><?php echo $data["status"]; ?></td>
									<td><a href="edit_pelayanan.php?id=<?php echo $d['id_pelayanan']; ?>" class="btn btn-warning" ><i class="fas fa-edit"></i> Ubah</a></td>
									<td><a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus_pelayanan.php?id=<?php echo $d['id_pelayanan']; ?>" class="btn btn-danger" ><i class="fas fa-trash-alt"></i> Hapus</a>
								</tr>
								<?php endforeach; ?>
							</tbody>
                            </div></div></div>
                        </div>
					</div>
				</div>
			</div>
</table>
	</ul>

		<!--script-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>



<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    
    <button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Layani Pasien</h4>
   </div>
   <div class="modal-body">
    <form method="post" action="tambah_pelayanan_aksi.php">
	 <label>Tanggal Pelayanan</label>
     <input type="date" name="tgl_pelayanan" id="tgl_pelayanan" class="form-control"  />
     <label>Nama Dokter</label>
     <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" value="<?php echo $d['nama_dokter']; ?>" />
     <label>Nama Pasien</label>
     <input type="text" name="nama_pasien" id="nama_pasien" class="form-control"/>
	 <label>Tinggi Badan</label>
     <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control" />
     <label>Berat Badan</label>
     <input type="number" name="berat_badan" id="berat_badan" class="form-control"/>
	 <label>Suhu</label>
     <input type="number" name="suhu" id="suhu" class="form-control" />
     <label>Penyakit</label>
     <input type="text" name="penyakit" id="penyakit" class="form-control"/>
	 <label>Tindakan</label>
     <input type="text" name="tindakan" id="tindakan" class="form-control" />
     <label>Status</label>
	 <select name="status" id="status" class="form-control">
      <option value="Daftar">Daftar</option>  
      <option value="Pulang">Pulang</option>
     </select>
	 </br>
     <input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success" />
	 <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
    </form>
   </div>
  </div>
 </div>
</div>

</div>