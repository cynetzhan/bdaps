<?php
include 'koneksi.php';	
include 'function.php';
if(isset($_COOKIE['User'])){
		header('Location:lihat_data.php');
	} else {
		$cek=false;
	}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf8">
  <title>Halaman Login - BDAPS</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
 </head>
<body>
 <div class="container">
  <div class="row">
   <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Halaman Login Relawan</h3>
      <span>Bantu Data Anak Putus Sekolah</span>
     </div>
     <div class="panel-body">
     <!--login gagal-->
     <?php
       if(!empty($_POST)){
		$username = $_POST['username'];
		$password = md5($_POST['password']); 
		$sql = "select * from login where username='".$username."' and password='".$password."'";
		$query = mysqli_query($koneksi,$sql) or die (mysqli_error());

	   if($query){
        $row = mysqli_num_rows($query);
        if($row > 0){
            setcookie("User", $username, time() + 86400);
            header('Location: lihat_data.php');
        }else{
	 ?>
	 <div class="alert alert-danger">
		  Nama Pengguna atau Password yang anda masukkan salah.
	 </div>
	 <?php 
        }
       }
      }
     ?>
      
	 <!--/login gagal-->
	 <form role="form" action="login.php" method="post" name="login">
		 <fieldset>
			 <div class="form-group">
				 <input class="form-control" placeholder="Nama Pengguna" name="username" type="text" autofocus>
				 </div>
				 <div class="form-group">
					 <input class="form-control" placeholder="Kata Kunci" name="password" type="password" value="">
					 </div>
					 <div class="checkbox">
						 <label>
							 <input name="remember" type="checkbox" value="Remember Me">Remember Me
							 </label>
							 </div>
							 
					<input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Masuk">
		</fieldset>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
