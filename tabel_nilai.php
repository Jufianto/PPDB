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
$query=mysql_query("select * from ntes where no='$no'");
$jumlah=mysql_num_rows($query);
//$ntes_ing=$_POST['ntes_ing'];
//$ntes_ing=$_POST['ntes_mtk'];
//$un=$_POST['un'];
//$rata=($ntes_ing + $ntes_mtk + $un)/3;
echo "Jumlah Data : ".$jumlah;
?>
<p align=center>Data Siswa</p>
<table border="1" align="center">
<tr>
<th>No</th>
<th>ID Pendaftaran</th>
<th>Nama Lengkap</th>
<!--<th>Nilai Tes Bahasa Inggris</th>
<th>Nilai Tes Matematika</th>
<th>Nilai IPA Semester 1</th><th>Nilai Bahasa Inggris Semester 1</th>
<th>Nilai IPA Semester 2</th><th>Nilai Bahasa Inggris Semester 2</th>
<th>Nilai IPA Semester 3</th><th>Nilai Bahasa Inggris Semester 3</th>
<th>Nilai IPA Semester 4</th><th>Nilai Bahasa Inggris Semester 4</th>
<th>Nilai IPA Semester 5</th><th>Nilai Bahasa Inggris Semester 5</th>
<th>Nilai Bahasa Indonesia Semester 1</th><th>Nilai MTK Semester 1</th>
<th>Nilai Bahasa Indonesia Semester 2</th><th>Nilai MTK Semester 2</th>
<th>Nilai Bahasa Indonesia Semester 3</th><th>Nilai MTK Semester 3</th>
<th>Nilai Bahasa Indonesia Semester 4</th><th>Nilai MTK Semester 4</th>
<th>Nilai Bahasa Indonesia Semester 5</th><th>Nilai MTK Semester 5</th>-->
<th>Rata - Rata</th>
<th>Aksi</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td align="center"><?php echo $row['no'];?></td>
<td><?php echo 'RSBI13'; echo $row['no'];?></td> 
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['rata'];?></td>
<td>
<a href="update_nilai_tes.php?no=<?php echo $row['no']; ?>">Update</a>
</td>
<!--<td align="center">
</td>-->
<?php
}
?>

</table><br />
<p align="center"><a href="tabel2.php">back</a>
   
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
