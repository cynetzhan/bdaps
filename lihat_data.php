<?php
include 'koneksi.php';
include 'function.php';
if(!isset($_COOKIE['User'])){
		header('Location:login.php');
	} 
$query = "select * from tabel_bdaps where approval=0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/dataTables.responsive.css">
 <link rel="stylesheet" href="css/dataTables.bootstrap.css">
 <link rel="stylesheet" href="css/jquery.dataTables.css">
 <!--link rel="stylesheet" href="css/base.css"-->
 <title>Halaman Utama</title>
</head>
<body>
<div class="container-fluid">
 <div class="page-header">
   <h1>Bantu Data Anak Putus Sekolah</h1>
   <p>Halaman Lihat Data</p><!--nama halaman-->
   
  </div>
  <div class="row">
   <div class="col-sm-2">
   <!--sidebar-->
   <ul class="nav nav-pills nav-stacked">
   <li><a href="index.php">Home</a></li>
    <li><a href="lihatdata.php">Lihat Data Terverifikasi</a></li>
    <li class="active"><a href="lihat_data.php">Lihat Data Belum di Verifikasi</a></li>
	<li><a href="input.php">Input Data Anak</a></li>
	<li><a href="statistik.php">Statistik</a></li>
   </ul>
   </div>
   
   <div class="col-sm-10">
    <!--content-->
	<table class="table table-hover" id="dataAnak" >
	 <thead>
	 <tr>
	  <th>Nama</th>
	  <th>Umur</th>
	  <th>Jenis Kelamin</th>
	  <th>Pendidikan Terakhir</th>
	 </tr>
	 </thead>
	 <tbody>
		<?php
		$result = mysqli_query($koneksi, $query);
		while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><a href="profil.php?kode=<?php echo $row['kode'];?>"><?php echo $row['nama'];?></a></td>
			<td><?php echo $row['umur'];?></td>
			<td><?php echo $row['jenis_kelamin'];?></td>
			<td><?php echo $row['pend_terakhir'];?></td>
		</tr>
		<?php } ?>
	 </tbody>
	</table>
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataAnak').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>
