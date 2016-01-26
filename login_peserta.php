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
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
	  <li><a href="daftar.php">Register</a></li>
	  <li><a href="tabel_urut.php">Lihat Ranking</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   <?php if(isset($_COOKIE["peserta"])) { 
   $username=$_COOKIE["user1"];
header("location:data.php?no=$username");
} else { ?>
   <H1><p align="center">Login Peserta</H1></p>
<hr />
<form action="do_login_peserta.php" method="post"><br><br><br><br>
<table width="2" align="center" id="tabel">
<tr>
<td width="96">Username</td>
<td width="176"><input type="text" name="username" maxlength="15" size="25"></td>
</tr>
<tr></tr>
<tr>
<td>Password</td>
  <td><input type="password" name="passw" maxlength="7" size="25"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="login" value="Login">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
   
   
   <?php } ?>
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
