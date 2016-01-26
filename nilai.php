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
   <br><br>
 <br><?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from nilai where no='$no'");
?>
<?php
while($row=mysql_fetch_array($query)){
?>
<table align="center" id="tabel">
<tr><th colspan="10">
Peserta Tes PPDB SBI SMKN 2 Pekanbaru
</th>
</tr>
<tr>
<th>No</th><td><?php echo $row['no'];?></td>
</tr>
<tr>
<th>ID Pendaftaran</th><td><?php echo 'RSBI13'; echo $row['no'];?></td> 
</tr>
<tr>
<th>Nama Lengkap</th><td><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<th>NISN</th><td><?php echo $row['nisn'];?></td>
</tr>
<tr>
<th>Nilai Semester 1</th><td><?php echo $row['n1'];?></td>
</tr>
<tr>
<th>Nilai Semester 2</th><td><?php echo $row['n2'];?></td>
</tr>
<tr>
<th>Nilai Semester 3</th><td><?php echo $row['n3'];?></td>
</tr>
<tr>
<th>Nilai Semester 4</th><td><?php echo $row['n4'];?></td>
</tr>
<tr>
<th>Nilai Semester 5</th><td><?php echo $row['n5'];?></td>
</tr>
<tr>
<th>Aksi</th><td><a href="update_nilai.php?no=<?php echo $row['no']; ?>">Update</a></td>
</tr>
<?php
}
?>
</table>
<!--<p align="center"><a href="#" onclick="window.print();return false">Print</a></p>-->
<p align="center"><a href="tabel2.php">Back</a>
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
