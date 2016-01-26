<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data Siswa</title>
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
 if(isset($_COOKIE["peserta"])) { 
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from daftar where no='$no'");
?>
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="index.php">Home</a></li>
	  <li><a href="data.php?no=<? echo $no;?>">Back</a></li>
	  <li><a href="lihat_biodata.php?no=<? echo $no;?>">Lihat Biodata</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">

<form action="do_update_siswa.php" method="post">
<table align="center">
<input type="hidden" name="no" value="<?php echo $no;?>">
<?php
while($row=mysql_fetch_array($query)){
?>
<tr><td colspan="2" align="center">Form Data Siswa</tr>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama_lengkap" maxlength="30" size="35" value="<?php echo $row['nama_lengkap'];?>"></td>
</tr>
<tr>
<td>NISN</td>
  <td><input type="text" name="nisn" maxlength="10" size="35" value="<?php echo $row['nisn'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat" maxlength="250" size="35" value="<?php echo $row['alamat'];?>"></td>
</tr>
<tr>
<td>No Telepon / HP</td>
  <td><input type="text" name="no_telp" maxlength="12" size="35" value="<?php echo $row['no_telp'];?>"></td>
</tr>
<tr>
<td>Asal Sekolah</td>
  <td><select name="sekolah_asal">
  <option>SMPN 1 Pekanbaru
  <option>SMPN 4 Pekanbaru
  <option>SMPN 5 Pekanbaru
  <option>SMPN 8 Pekanbaru
  <option>SMPN 10 Pekanbaru
  <option>SMPN 13 Pekanbaru
  
  </select>
  </td>
</tr>
<tr>
<td>Program Keahlian</td>
  <td><select name="prodi">
  <option>Teknik Informatika
  <option>Teknik Kimia
  <option>Teknik Listrik
  <option>Teknik Bangunan
  <option>Teknik Elektronika
  <option>Teknik Otomotif
  </select>
  </td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Update">&nbsp;</td>
</tr>
</table>
</form>
<?php 
}
?>
<?php } else {header("location:login_peserta.php"); }?> 

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
