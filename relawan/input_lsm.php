<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!--link rel="stylesheet" href="css/base.css"-->
 <title>Input Data Anak - Bantu Data Anak Putus Sekolah</title>
</head>
<body>
<div class="container-fluid">
 <div class="page-header">
   <h1>Bantu Data Anak Putus Sekolah</h1>
   <p>Input Data Anak</p><!--nama halaman-->
   
  </div>
  <div class="row">
   <div class="col-sm-2">
   <!--sidebar-->
   <ul class="nav nav-pills nav-stacked">
   <li><a href="index.php">Home</a></li>
    <li><a href="lihatdata.php">Lihat Data Terverifikasi</a></li>
    <li><a href="lihat_data.php">Lihat Data Belum di Verifikasi</a></li>
	<li class="active"><a href="input.php">Input Data Anak</a></li>
	<li><a href="statistik.php">Statistik</a></li>
   </ul>
   </div>
   
   <div class="col-sm-10">
    <!--content-->
	<div class="row">
	<div class="col-sm-3">
		<form enctype="multipart/form-data" method="post" action="proses_input_lsm.php" role="form">
		  <div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" size="25">
		  </div>
		  <div class="form-group">
			<label for="nama">Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		  </div>
		  <div class="form-group">
			<label for="nama">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl_lahir" size="25">
		  </div>
		  <div class="form-group">
			<label for="nama">Komunitas / LSM yang diikuti</label>
			<input type="text" class="form-control" name="lsm" size="25">
		  </div>
		  <div class="form-group">
			<label for="nama">File Scan KTP</label>
			<input type="file" name="foto" class="form-control">
		  </div>
		  <div class="form-group">
		  <input type="submit" name="submit" value="Tambahkan Data" class="btn btn-md btn-success">
		  </div>
		  </form>
	</div>
	<div class="col-sm-5">
	</div>
	</div>
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>