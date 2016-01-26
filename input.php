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
$no=$_GET['no'];
$query=mysql_query("select * from daftar where no='$no'");
//$query1=mysql_query("select * from nilai where no='$no'");

while($row=mysql_fetch_array($query)){
?>
<H1><p align="center">PPDB Online SMK N 2 Pekanbaru</H1></p>
<hr />
<form action="do_input.php?no=<?php echo $no;?>" method="post">
<table align="center">
<tr><td colspan="2" align="center">Form Nilai Siswa</tr>
<tr>
<td align="center">No</td>
<td><input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no'];?>"><?php echo $row['no'];?></td>
</tr>
<tr>
<td align="center">Nama Siswa</td>
<td><input type="hidden" name="nama" maxlength="15" size="35" value="<?php echo $row['nama_lengkap'];?>"><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<td align="center">NISN</td>
<td><input type="hidden" name="nisn" maxlength="15" size="35" value="<?php echo $row['nisn'];?>"><?php echo $row['nisn'];?></td>
</tr>
<tr>
<td>Nilai Semester 1</td>
  <td><input type="text" name="n1" maxlength="15" size="35"></td>
  <td>Ranking Semester 1</td>
  <td><input type="text" name="r1" maxlength="15" size="5"></td>
</tr>
<tr>
<tr>
<td>Nilai Semester 2</td>
  <td><input type="text" name="n2" maxlength="15" size="35"></td>
  <td>Ranking Semester 2</td>
  <td><input type="text" name="r2" maxlength="15" size="5"></td>
</tr>
<tr>
<tr>
<td>Nilai Semester 3</td>
  <td><input type="text" name="n3" maxlength="15" size="35"></td>
  <td>Ranking Semester 3</td>
  <td><input type="text" name="r3" maxlength="15" size="5"></td>
</tr>
<tr>
<tr>
<td>Nilai Semester 4</td>
  <td><input type="text" name="n4" maxlength="15" size="35"></td>
  <td>Ranking Semester 4</td>
  <td><input type="text" name="r4" maxlength="15" size="5"></td>
</tr>
<tr>
<tr>
<td>Nilai Semester 5</td>
  <td><input type="text" name="n5" maxlength="15" size="35"></td>
  <td>Ranking Semester 5</td>
  <td><input type="text" name="r5" maxlength="15" size="5"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
<?php
}
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
