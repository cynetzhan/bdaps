<?php
include 'koneksi.php';
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/base.css">
 <title>Statistik - Bantu Data Anak Putus Sekolah</title>
</head>
<body>
<div class="container-fluid">
 <div class="page-header">
   <h1>Bantu Data Anak Putus Sekolah</h1>
   <p>Statistik</p><!--nama halaman-->
   
  </div>
  <div class="row">
   <div class="col-sm-2">
   <!--sidebar-->
   <ul class="nav nav-pills nav-stacked">
   <li><a href="index.php">Home</a></li>
	<li><a href="lihatdata.php">Lihat Data Terverifikasi</a></li>
    <li><a href="lihat_data.php">Lihat Data Belum di Verifikasi</a></li>
	<li><a href="input.php">Input Data Anak</a></li>
	<li class="active"><a href="statistik.php">Statistik</a></li>
   </ul>
   </div>
   
   <div class="col-sm-10 isi-stat">
    <!--content-->
	<h2>Jumlah Anak Putus Sekolah di Kecamatan Sukajadi</h2>
	<div class="row">
	<div class="col-sm-6">
	<div class="batas-statistik">
	<canvas id="datatingkat" height="283px" width="378px" style="width: 378px; height: 283px;"></canvas>
	</div>
   </div>
   <div class="col-sm-6">
	<div class="keterangan-statistik">
	<span>
	Total Anak Putus/Tidak Sekolah di Kecamatan Sukajadi: <strong><?php echo hitungAnakTotal(); ?> anak</strong><br>
	Total Anak yang Belum di Konfirmasi: <strong><?php echo hitungAnakTotalnoAcc(); ?> anak</strong><br>
        Total Anak yang Sudah Bersekolah : <strong><?php echo hitungAnakTotalSch(); ?> anak</strong><br><br>
	<strong>Keterangan</strong><br>
	<span class="glyphicon glyphicon-user blmsk"></span>&nbsp;Belum Sekolah<br>
	<span class="glyphicon glyphicon-user sd"></span>&nbsp;Sekolah Dasar<br>
	<span class="glyphicon glyphicon-user smp"></span>&nbsp;Sekolah Menengah Pertama<br>
	<span class="glyphicon glyphicon-user sma"></span>&nbsp;Sekolah Menengah Atas<br>
	</span>
	</div>
   </div>
   </div>
   
   <h2>Alasan Putus Sekolah</h2>
   <div class="row">
	<div class="col-sm-6">
	<div class="batas-statistik">
	<canvas id="datafaktor" height="283px" width="378px" style="width: 378px; height: 283px;"></canvas>
	</div>
   </div>
   <div class="col-sm-6">
	   <div class="keterangan-statistik">
		<strong>Berdasarkan Alasan</strong><br>
		Faktor Ekonomi: <strong><?php echo hitungAnakAlasan("Faktor Ekonomi"); ?> anak</strong><br>
		Kurang Perhatian Ortu: <strong><?php echo hitungAnakAlasan("Kurang Perhatian Orang Tua"); ?> anak</strong><br>
		Dikeluarkan: <strong><?php echo hitungAnakAlasan("Dikeluarkan"); ?> anak</strong><br>
		Dipaksa Bekerja: <strong><?php echo hitungAnakAlasan("Dipaksa Bekerja"); ?> anak</strong><br>
		Lain-lain: <strong><?php echo hitungAnakAlasan("Lain lain"); ?> anak</strong><br>
	   </div>
   </div>
   </div>
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script>
	var barChartData = {
		labels : ["Sukajadi","Pulau Karam","Kedungsari","Kampung Tengah","Kampung Melayu","Jadirejo","Harjosari"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [<?php echo hitungAnakTingkat("Belum Sekolah","Sukajadi").",".hitungAnakTingkat("Belum Sekolah","Pulau Karam").",".hitungAnakTingkat("Belum Sekolah","Kedungsari").",".hitungAnakTingkat("Belum Sekolah","Kampung Tengah").",".hitungAnakTingkat("Belum Sekolah","Kampung Melayu").",".hitungAnakTingkat("Belum Sekolah","Jadirejo").",".hitungAnakTingkat("Belum Sekolah","Harjosari").","; ?>]
			},
			{
				fillColor : "#78cc6d",
				strokeColor : "#44c733",
				highlightFill: "#5fd250",
				highlightStroke: "#44c733",
				data : [<?php echo hitungAnakTingkat("SD","Sukajadi").",".hitungAnakTingkat("SD","Pulau Karam").",".hitungAnakTingkat("SD","Kedungsari").",".hitungAnakTingkat("SD","Kampung Tengah").",".hitungAnakTingkat("SD","Kampung Melayu").",".hitungAnakTingkat("SD","Jadirejo").",".hitungAnakTingkat("SD","Harjosari").","; ?>]
			},
			{
				fillColor : "#d3e534",
				strokeColor : "#e0d159",
				highlightFill: "#c9de1c",
				highlightStroke: "#e0d159",
				data : [<?php echo hitungAnakTingkat("SMP","Sukajadi").",".hitungAnakTingkat("SMP","Pulau Karam").",".hitungAnakTingkat("SMP","Kedungsari").",".hitungAnakTingkat("SMP","Kampung Tengah").",".hitungAnakTingkat("SMP","Kampung Melayu").",".hitungAnakTingkat("SMP","Jadirejo").",".hitungAnakTingkat("SMP","Harjosari").","; ?>]
			},
			{
				fillColor : "#ed2f2f",
				strokeColor : "#cb1a1a",
				highlightFill: "#eb5050",
				highlightStroke: "#ef3737",
				data : [<?php echo hitungAnakTingkat("SMA","Sukajadi").",".hitungAnakTingkat("SMA","Pulau Karam").",".hitungAnakTingkat("SMA","Kedungsari").",".hitungAnakTingkat("SMA","Kampung Tengah").",".hitungAnakTingkat("SMA","Kampung Melayu").",".hitungAnakTingkat("SMA","Jadirejo").",".hitungAnakTingkat("SMA","Harjosari").","; ?>]
			}
		]

	}
	var pieData = [
				{
					value: <?php echo hitungAnakAlasan("Faktor Ekonomi"); ?>,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Faktor Ekonomi"
				},
				{
					value: <?php echo hitungAnakAlasan("Dipaksa Bekerja"); ?>,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Dipaksa Bekerja"
				},
				{
					value: <?php echo hitungAnakAlasan("Dikeluarkan Sekolah"); ?>,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Dikeluarkan Sekolah"
				},
				{
					value: <?php echo hitungAnakAlasan("Kurang Perhatian Orang Tua"); ?>,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Kurang Perhatian Orang Tua"
				},
				{
					value: <?php echo hitungAnakAlasan("Lain Lain"); ?>,
					color: "#4D5360",
					highlight: "#616774",
					label: "Lain-lain"
				}

			];

	window.onload = function(){
		var ctx1 = document.getElementById("datatingkat").getContext("2d");
		var ctx2 = document.getElementById("datafaktor").getContext("2d");
		window.myBar = new Chart(ctx1).Bar(barChartData,{responsive:true });
		window.myPie = new Chart(ctx2).Pie(pieData,{responsive:true });
	}

	
</script>
</body>
</html>
