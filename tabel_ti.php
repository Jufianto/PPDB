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
	  <li><a href="tabel_urut.php">Lihat Ranking</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
<?php
include "koneksi.php";
//$no=$_GET['no'];
$query=mysql_query("select * from ntes order by rata desc limit 10");
if(isset($_GET['prodi'])) {
$prodi=$_GET['prodi'];
$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata");
?>
<a href="tabel_urut_ti.php?prodi=<? echo $prod;?>">TI</a>
<?}
//$data=mysql_fetch_array($query);
//$no=$data['no'];
$jumlah=mysql_num_rows($query);
echo "Jumlah Data : ".$jumlah;
?>
<p align=center>Data Siswa</p>
<table border="1" align="center" id="tabel">
<tr>
<th align="center">ID Pendaftaran</th>
<th align="center">Nama Siswa</th>
<th align="center">Tes Inggris</th>
<th align="center">Tes Matematika</th>
<th align="center">Rata - Rata</th>
<th align="center">Jurusan</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
$nop = $row['no'];
$query1=mysql_query("select * from daftar where no='$nop'");
//if(isset($_GET['prodi'])) {
//$prodi=$_GET['prodi']; 
//$query1=mysql_query("select * from daftar where no='$nop' and prodi='$prodi'");}
$isi=mysql_fetch_array($query1);

?>
<tr>
<td><?php echo 'RSBI13'; echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['ntes_ing'];?></td>
<td><?php echo $row['ntes_mtk'];?></td>
<td><?php echo $row['rata'];?></td>
<td><?php echo $isi['prodi'];?></td>
</tr>
<?php } ?>
</table>
<?php
//$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata");
//$row=mysql_fetch_array($query);
//$nop = $row['no'];
//$query1=mysql_query("select * from daftar where no='$nop'");
//$prod = $row['prodi'];?>
<p align="center"><a href="index.php">Back</a>
<!--<a href="tabel_urut_ti.php?prodi=<? //echo $prod;?>">TI</a>-->
   
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
