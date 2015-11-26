<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$query = "select*from tabel_bdaps where kode = '$kode'";
$result = mysqli_query($koneksi,$query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!--link rel="stylesheet" href="css/base.css"-->
 <style>.placeholder-img{border:2px solid #a0a0a0; max-width:100%; height:350px;}</style>
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
    <li class="active"><a href="lihatdata.php">Lihat Data Terverifikasi</a></li>
    <li><a href="lihat_data.php">Lihat Data Belum di Verifikasi</a></li>
	<li><a href="input.php">Input Data Anak</a></li>
	<li><a href="statistik.php">Statistik</a></li>
   </ul>
   </div>
   
   <div class="col-sm-10">
    <!--content-->
	<div class="row">
	 <div class="col-sm-3">
	 <?php if($row['foto']!=null){
	 ?>
	 <img src="images/<?php echo $row['foto'];?>" class="img-responsive">
	 <?php } else {
	 ?>
		<div class="placeholder-img">Tidak ada foto</div>
	<?php } ?>
	 </div>
	 <div class="col-sm-9">
	  <table class="table table-striped">
	  <tr>
	   <td>Nama</td>
	   <td><?php echo $row['nama'];?></td>
	  </tr>
	  <tr>
	   <td>Jenis Kelamin</td>
	   <td><?php echo $row['jenis_kelamin'];?></td>
	  </tr>
	  <tr>
	   <td>Domisli</td>
	   <td><?php echo $row['domisli'];?></td>
	  </tr>
	  <tr>
	   <td>Kelurahan</td>
	   <td><?php echo $row['kelurahan'];?></td>
	  </tr>
	  <tr>
	   <td>Umur</td>
	   <td><?php echo $row['umur'];?></td>
	  </tr>
	  <tr>
	   <td>Pendidikan Terakhir</td>
	   <td><?php echo $row['pend_terakhir'];?></td>
	  </tr>
	  <?php
	  if(isset($_COOKIE['User'])){
		  ?> 
	  <tr>
	   <td colspan="2">
	   <a href="update.php?kode=<?php echo $row['kode']; ?>" class="btn btn-md btn-primary">Update</a>&nbsp;
	   <?php
	   if($row['approval'] == 0){
		?>
		<a href="approve.php?kode=<?php echo $row['kode']; ?>" class="btn btn-md btn-primary">Verifikasi</a>
	   <?php } else { ?>
			<button type="button" class="btn btn-primary disabled">Sudah diverifikasi oleh <?php echo $row['verifikator']; ?></button>
      <?php if($row['bersekolah']==0) { ?>
      <a href="tindaklanjut.php?kode=<?php echo $row['kode']; ?>" class="btn btn-md btn-primary">Sudah Bersekolah</a>
      <?php } else { ?>
      <button type="button" class="btn btn-primary disabled">Sudah bersekolah</button>
      <?php } ?>
	   <?php } 
	  }
	   ?>
	   </td>
	  </tr>
	  </table>
	 </div>
	</div>
	
	<!--placeholder info anak-->
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
