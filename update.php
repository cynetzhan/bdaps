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
		<form enctype="multipart/form-data" method="post" action="proses_update.php" role="form">
		<input type="text" name="kode" value="<?php echo $row['kode'];?>" hidden>
		  <div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" name="nama" size="25" value="<?php echo $row['nama'];?>">
		  </div>
		  <div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label><br>
			<?php
			if($row['jenis_kelamin'] == 'Laki Laki'){
			?>	
				<input type="radio" name="jenis_kelamin" value="Laki Laki" checked>Laki-Laki<br>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
			<?php
			} else {
			?>
				<input type="radio" name="jenis_kelamin" value="Laki Laki">Laki-Laki<br>
				<input type="radio" name="jenis_kelamin" value="Perempuan" checked>Perempuan
			<?php
			}
			?>
		  </div>
		  <div class="form-group">
			<label for="nama">Kelurahan</label>
			<select name="kelurahan" class="form-control">
			<option><?php echo $row['kelurahan'];?></option>
			<option value="Sukajadi">Sukajadi</option>
			<option value="Harjosari">Harjosari</option>
			<option value="Kedungsari">Kedungsari</option>
			<option value="Kampung Melayu">Kampung Melayu</option>
			<option value="Jadirejo">Jadirejo</option>
			<option value="Pulau Karam">Pulau Karam</option>
			<option value="Kampung Tengah">Kampung Tengah</option>
		</select>
		  </div>
		  <div class="form-group">
			<label for="nama">Domisli</label>
			<input type="text" name="domisli" size="35" class="form-control" value="<?php echo $row['domisli'];?>">
		  </div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="nama">Umur</label>
			<input type="text" name="umur" size="2" class="form-control" value="<?php echo $row['umur'];?>">
		 </div>
		<div class="form-group">
			<label for="nama">Pendidikan Terakhir</label>
			<select name="pend_terakhir" class="form-control">
			<option><?php echo $row['pend_terakhir'];?></option>
			<option value="Belum Sekolah">Belum Sekolah</option>
			<option value="SD">SD</option>
			<option value="SMP">SMP</option>
			<option value="SMA">SMA</option>
		</select>
		  </div>
		  <div class="form-group">
			<label for="nama">Faktor Penyebab Putus Sekolah</label>
			<select name="faktor_putus" class="form-control">
			<option><?php echo $row['faktor_putus'];?></option>
			<option value="Faktor Ekonomi">Faktor Ekonomi</option>
			<option value="Kurang Perhatian Orang Tua">Kurang Perhatian Orang Tua</option>
			<option value="Dikeluarkan">Dikeluarkan</option>
			<option value="Dipaksa Bekerja">Dipaksa Bekerja</option>
			<option value="Lain Lain">Lain Lain</option>
		</select>
		  </div>
		  <div class="form-group">
			<label for="nama">Foto</label>
			<input type="file" name="foto" class="form-control" value="<?php echo $row['foto'];?>">
		  </div>
		  <div class="form-group">
		  <input type="submit" name="Update" value="Perbarui Data" class="btn btn-md btn-success">
		  <a href="profil.php?kode=<?php echo $row['kode'];?>" class="btn btn-md btn-primary">Kembali</a>
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