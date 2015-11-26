<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$verifikator=$_COOKIE['User'];
$valid = "update tabel_bdaps set approval = '1', verifikator='$verifikator' where kode = '$kode'";
$query = mysqli_query($koneksi,$valid);

$query1 = "select*from tabel_bdaps where kode = '$kode'";
$result = mysqli_query($koneksi,$query1);
$row = mysqli_fetch_array($result);
$kodek = $row['kode'];
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
    <li class="active"><a href="#">Verifikasi</a></li>
	<li><a href="input.php">Input Data Anak</a></li>
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
      <div class="panel-body">Berhasil verifikasi data! <a href="profil.php?kode=<?php echo $kodek ?>">Lihat data</a></div>
     </div>
	<?php } else { ?>
	 <div class="panel panel-danger">
      <div class="panel-heading">Gagal!</div>
      <div class="panel-body">Gagal verifikasi data! <a href="input.php">Kembali</a></div>
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
