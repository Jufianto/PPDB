<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Lihat Peserta</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
   
   <?php
include "koneksi.php";
$id=$_POST['username'];
sscanf($id,"RSBI13%s",$username);
//$username = $_POST['username'];
$passw = $_POST['passw'];
$result = mysql_query("SELECT * FROM daftar WHERE no = '$username' and passw = '$passw'");
$count = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if($count==1){
$sesilog = "peserta";
		setcookie("peserta",$sesilog,time() + 3600);
		setcookie("user1",$username,time() + 3600); ?>
<p align="center">
<br><br><br><br><br><br><br><br><br><br><br>
<?php
echo "Welcome  ". $row['nama_lengkap'];?><br />
<meta http-equiv="refresh" content="2 ;URL=data.php?no=<?php echo $username; ?>">
<a href="data.php?no=<?php echo $username; ?>">Lihat data</a>
<?php
} else { 
header ("location:salah.php");?>

<!--<p align="center">Login Gagal, <a href="login_peserta.php">Login kembali</a> atau <a href="index.php">kembali ke Homepage</a>-->
<?php }
?>
   
   
    </div>
    <!--akhir Content-->
    <!--Footer-->
    <div id="footer">
    Sistem PPDB ONLINE SMK Negeri 2 Pekabaru<br />
    All Reserved By <a href="login.php">Admin</a>
    </div>
    <!--akhir Footer-->
</div>
</center>
</body>
</html>
