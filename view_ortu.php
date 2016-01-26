<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Orang Tua</title>
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
	$no=$_GET['no'];
	$query=mysql_query("select * from daftar where no='$no'");
	?>
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="index.php">Home</a></li>
      <?php $query1=mysql_query("select * from orangtua where no='$no'");
		$count = mysql_num_rows($query1);
		if($count==0){ ?>
		<a href="ortu.php?no=<?php echo $no ?>">Data Orang Tua</a>
		<?php } else { ?>
		<a href="view_ortu.php?no=<?php echo $no ?>">Data Orang Tua</a>
		<?php } ?>
	  <li><a href="update_siswa.php?no=<? echo $no;?>">Update Biodata</a></li>
      <li><a href="print.php?no=<? echo $no;?>">Print Data</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
<?php
include "koneksi.php";
$no=$_GET['no'];
$query1=mysql_query("select * from orangtua where no='$no'");
$isi=mysql_fetch_array($query1);
?>
<body>
<p align=center>Data Orang Tua</p>
<table border="0" align="center">
<tr>
<td colspan="3"><div align="left"><u>Ayah</u></div>  <div align="center"></div></td>
<td colspan="3"><div align="left"><u>Ibu</u></div></td>
</tr>
<tr>
<td width="100">Nama</td>
<td width="10">:</td>
<td width="190"><?php echo $isi['nama_a'];?></td>
<td width="100">Nama</td>
<td width="8">:</td>
<td width="192"><?php echo $isi['nama_i'];?></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $isi['alamat_a'];?></td>
<td>Alamat</td>
<td>:</td>
<td><?php echo $isi['alamat_i'];?></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $isi['pekerjaan_a'];?></td>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $isi['pekerjaan_i'];?></td>
</tr>
<tr>
<td>No Telpon</td>
<td>:</td>
<td><?php echo $isi['telp_a'];?></td>
<td>No Telpon</td>
<td>:</td>
<td><?php echo $isi['telp_i'];?></td>
</tr>
</table>
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
