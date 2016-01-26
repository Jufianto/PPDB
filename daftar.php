<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pendaftaran Siswa</title>
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
   <?php include "koneksi.php";
$query1=mysql_query("select * from daftar order by no desc limit 1");
$row=mysql_fetch_array($query1);?>
<form action="do_daftar.php?no=<?php echo $row['no']+1;?>" method="post">
<input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no']+1;?>">
<table align="center">
<tr><td colspan="2" align="center">Form Pendaftaran</tr>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama_lengkap" maxlength="30" size="25"></td>
</tr>
<tr>
<td>NISN</td>
  <td><input type="text" name="nisn" maxlength="10" size="25"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat" maxlength="250" size="25"></td>
</tr>
<tr>
<td>No Telepon / HP</td>
  <td><input type="text" name="no_telp" maxlength="12" size="25"></td>
</tr>
<!--<tr>
<td>Asal Sekolah</td>
  <td><input type="text" name="sekolah_asal" maxlength="20" size="25"></td>
</tr>-->
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
<td></td>
<td><input type="submit" name="submit" value="Daftar">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>

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
