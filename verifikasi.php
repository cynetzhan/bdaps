<?php
include 'koneksi.php';
$query = "select*from tabel_bdaps";
if(count($_COOKIE['User']) > 0 ) {
?>
<html>
<head>
<title>BDAPS</title>
</head>
<body>
<table border="1" align="center">
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Jenis Kelamin</td>
	<td>Umur</td>
	<td>Pendidikan Terakhir</td>
	<td>Approval</td>
</tr>
<?php
$result = mysqli_query($koneksi, $query);
while($row = mysqli_fetch_array($result)){
?>
<tr>
	<td><?php echo $row['kode'];?></td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['jenis_kelamin'];?></td>
	<td><?php echo $row['umur'];?></td>
	<td><?php echo $row['pend_terakhir'];?></td>
	<td><input type="checkbox" name="approval" value="1"></td>
</tr>
<tr>
	<td><a href="logout.php"><input type="submit" value="Logout"></a></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>