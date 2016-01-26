<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Peserta</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#0066FF">
<center>
<div id="site">
<!--Awal Header-->
	<div id="header">
	  <img src="image/header_ppdb.jpg"/>
	</div>
    <!--Akhir Header-->
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="#">Home</a></li>
      <li><a href="login_peserta.php">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
	  <li><a href="daftar.php">Register</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if($count){
$sesilog = "login";
		setcookie("ceklogin",$sesilog,time() + 3600);
		setcookie("user",$usernama,time() + 3600); ?>
<p align="center">
<?php
//echo "Welcome $username";
header('location:tabel2.php');
?><br />

<meta http-equiv="refresh" content="0" ;URL=tabel2.php">
//<a href="tabel2.php">Lihat data</a>
<?php
} else { ?>
<p align="center">Login Gagal, <a href="login.php">Login kembali</a> atau <a href="index.php">kembali ke Homepage</a>
<?php }
?>
   
    </div>
    <!--akhir Content-->
    <!--Footer-->
    <div id="footer">
    Sistem PPDB ONLINE SMK Negeri 2 Pekabaru<br>
    All Reserved By <a href="login.php">Admin</a>
    </div>
    <!--akhir Footer-->
</div>
</center>
</body>
</html>
