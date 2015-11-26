<?php
include 'koneksi.php';
include 'function.php';
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl_lahir=$_POST['tgl_lahir'];
$lsm=$_POST['lsm'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$tipe_file   = $_FILES['foto']['type'];
	$nama_file   = $_FILES['foto']['name'];
	$direktori   = "images/$nama_file";

	move_uploaded_file($lokasi_file,$direktori);
	$insert = "insert into tabel_lsm values('','$nama','$alamat','$tgl_lahir','$lsm','$foto')";
	$query = mysqli_query($koneksi,$insert);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!--link rel="stylesheet" href="css/base.css"-->
 <title>Halaman Utama</title>
</head>
<body>
<div class="container-fluid">
 <div class="page-header">
   <h1>Bantu Data Anak Putus Sekolah</h1>
   <p>Halaman Verifikasi</p><!--nama halaman-->
   
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
	<div class="panel-group">
	<?php
	if($query){ ?>
	 <div class="panel panel-success">
      <div class="panel-heading">Sukses!</div>
      <div class="panel-body">Berhasil menambahkan data! <a href="input.php">Lihat data</a></div>
     </div>
	<?php } else { ?>
	 <div class="panel panel-danger">
      <div class="panel-heading">Gagal!</div>
      <div class="panel-body">Gagal menambahkan data! <a href="input.php">Kembali</a></div>
     </div>
	<?php } ?>
	</div>
	
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>