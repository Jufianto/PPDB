<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Pendaftar</title>
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
	<?php
	include "koneksi.php";
	$query=mysql_query("select * from daftar");
	?>
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="index.php">Home</a></li>
	  <li><a href="login_peserta.php">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
	  <li><a href="daftar.php">Register</a></li>
      <li><a href="tabel_urut.php">Lihat Ranking</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
	<br>
	Cari Berdasarkan Nama Dan NISN
   <form method="GET" action="pencarian.php">
   <input type="text" name="cari">
   <input type="submit" name="submit" value="cari">

<p align=center>Data Siswa</p>
<table border="1" align="center" id="tabel">
<tr>
<th bgcolor="green" >No</th>
<th bgcolor="green">Nama Lengkap</th>
<th bgcolor="green">NISN</th>
<th bgcolor="green">Asal Sekolah</th>
<th bgcolor="green">Program Keahlian</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['nisn'];?></td>
<td><?php echo $row['sekolah_asal'];?></td>
<td><?php echo $row['prodi'];?></td>
</tr>
<?php
}
?>

</table><br />
   
 
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
