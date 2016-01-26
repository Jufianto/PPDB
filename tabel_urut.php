<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rangking Siswa</title>
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
	  <li><a href="tabel_urut.php">Lihat Ranking</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
	Silahkan Pilih Menurut Jurusan Anda</br>
<form method="POST" action="">
<select name="jurusan">
  <option>Teknik Kimia</option>
  <option>Teknik Informatika</option>
  <option>Teknik Otomotif</option>
  <option>Teknik Listrik</option>
  <option>Teknik Elektronika</option>
  <option>Teknik Bangunan</option>
  </select>
 <input type="submit" name="cari">
 </form>
 <br />
   
<?php
include "koneksi.php";
//$no=$_GET['no'];
//$query1=mysql_query("select * from ntes order by rata desc limit 10");
if(isset($_POST['cari'])) {
$prodi=$_POST['jurusan'];
header("location:tabel_urut.php?prodi=$prodi");
}

if(isset($_GET['prodi'])) {
$prodi=$_GET['prodi'];
$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata desc limit 2");
?>
<?php
//$data=mysql_fetch_array($query);
//$no=$data['no'];
?>
<br /><br />

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
<a href="printlulus.php?prodi=<?php echo $prodi;?>">Print</a>
<?php
//$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata");
//$row=mysql_fetch_array($query);
//$nop = $row['no'];
//$query1=mysql_query("select * from daftar where no='$nop'");
//$prod = $row['prodi'];?>
<br/>

*JIka Nama Anda Masuk Maka anda Sudah Lulus Dari SMKN2 Pekanbaru<br/>
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
