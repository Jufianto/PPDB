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
      <li><a href="login_peserta.php">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
	  <li><a href="daftar.php">Register</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
<?php
if(isset($_COOKIE["ceklogin"])) {
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from ntes where no='$no'");
$query1=mysql_query("select * from daftar where no='$no'");
$count = mysql_num_rows($query);
if($count==1){ ?>
<meta http-equiv="refresh" content="0 ;URL=tabel_nilai.php">
<?php } else {
while($row=mysql_fetch_array($query1)){
?>
<H1><p align="center">PPDB Online SMK N 2 Pekanbaru</H1></p>
<hr />
<form action="do_input_nilai.php?no=<? echo $no;?>" method="post">
<table border="0" align="center">
<tr><td colspan="5" align="center">Form Nilai Tes Siswa</tr>
<tr>
<td align="center">No</td>
<td colspan="3">
<input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no'];?>"><?php echo $row['no'];?></td>
</tr>
<tr>
<td align="center">Nama Siswa</td>
<td colspan="3">
<input type="hidden" name="namalp" maxlength="15" size="35" value="<?php echo $row['nama_lengkap'];?>"><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<td>Nilai Tes Bahasa Inggris</td>
  <td><input type="text" name="ntes_ing" maxlength="15" size="5"></td>
  <td>Nilai Tes Matematika</td>
  <td><input type="text" name="ntes_mtk" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai IPA Semester 1</td>
  <td><input type="text" name="nipa1" maxlength="15" size="5"></td>
<td>Nilai Matematika Semester 1</td>
  <td><input type="text" name="nmtk1" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai IPA Semester 2</td>
  <td><input type="text" name="nipa2" maxlength="15" size="5"></td>
<td>Nilai Matematika Semester 2</td>
  <td><input type="text" name="nmtk2" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai IPA Semester 3</td>
  <td><input type="text" name="nipa3" maxlength="15" size="5"></td>
  <td>Nilai Matematika Semester 3</td>
  <td><input type="text" name="nmtk3" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai IPA Semester 4</td>
  <td><input type="text" name="nipa4" maxlength="15" size="5"></td>
  <td>Nilai Matematika Semester 4</td>
  <td><input type="text" name="nmtk4" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai IPA Semester 5</td>
  <td><input type="text" name="nipa5" maxlength="15" size="5"></td>
  <td>Nilai Matematika Semester 5</td>
  <td><input type="text" name="nmtk5" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 1</td>
  <td><input type="text" name="ning1" maxlength="15" size="5"></td>
  <td>Nilai Bahasa Indonesia Semester 1</td>
  <td><input type="text" name="nindo1" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 2</td>
  <td><input type="text" name="ning2" maxlength="15" size="5"></td>
  <td>Nilai Bahasa Indonesia Semester 2</td>
  <td><input type="text" name="nindo2" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 3</td>
  <td><input type="text" name="ning3" maxlength="15" size="5"></td>
  <td>Nilai Bahasa Indonesia Semester 3</td>
  <td><input type="text" name="nindo3" maxlength="15" size="5"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 4</td>
  <td><input type="text" name="ning4" maxlength="15" size="5"></td>
  <td>Nilai Bahasa Indonesia Semester 4</td>
  <td><input type="text" name="nindo4" maxlength="15" size="5"></td>
</tr>
</tr>
<td>Nilai Bahasa Inggris Semester 5</td>
  <td><input type="text" name="ning5" maxlength="15" size="5"></td>
  <td>Nilai Bahasa Indonesia Semester 5</td>
  <td><input type="text" name="nindo5" maxlength="15" size="5"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
<?php
} }
?>
<?php } else { header("location:login.php");} ?>
   
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
