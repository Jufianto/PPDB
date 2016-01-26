<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Orang Tua</title>
</head>
<?php
	include "koneksi.php";
	$no=$_GET['no'];
	$query=mysql_query("select * from daftar where no='$no'");
	?>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
      <li><a href="data.php?no=<?php echo $no ?>">Back</a>
	  <li><a href="update_siswa.php?no=<?php echo $no;?>">Update Biodata</a></li>
	  <li><a href="print.php?no=<?php echo $no;?>">Print Data</a></li>
	  <li><a href="logout_siswa.php">Logout</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
<?php include "koneksi.php";
	$no=$_GET['no'];
	$query=mysql_query("select * from daftar where no='$no'");
    $row=mysql_fetch_array($query);
    if(isset($_COOKIE["peserta"])) {?> 
<form action="do_ortu.php" method="post">
<table width="377" border="0">
<tr>
    <td width="210"><input type="hidden" name="no" value="<?php echo $row['no'];?>"></td>
  </tr>
<tr>
    <td width="115">Nama Siswa</td>
    <td width="30">:</td>
    <td width="210"><input type="hidden" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>"><?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td width="115">NISN</td>
    <td width="30">:</td>
    <td width="210"><input type="hidden" name="nama_lengkap" value="<?php echo $row['nisn'];?>"><?php echo $row['nisn'];?></td>
  </tr>
  <tr>
    <td colspan="3">Ayah </td>
    </tr>
  <tr>
    <td width="115">Nama </td>
    <td width="30">:</td>
    <td width="210"><input type="text" name="nama_a" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat_a" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><input type="text" name="pekerjaan_a" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>No Telepon</td>
    <td>:</td>
    <td><input type="text" name="telp_a" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td colspan="3">Ibu</td>
    </tr>
  <tr>
    <td>Nama </td>
    <td>:</td>
    <td><input type="text" name="nama_i" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat_i" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>Pekerjaan </td>
    <td>:</td>
    <td><input type="text" name="pekerjaan_i" maxlength="25" size="35"></td>
  </tr>
  <tr>
    <td>No Telepon</td>
    <td>:</td>
    <td><input type="text" name="telp_i" maxlength="25" size="35"></td>
  </tr>
  <tr>
  <td></td><td></td><td><input type="submit" name="submit" /><input type="reset" name="reset" /></td></tr>
</table>


</form>
<?php } else {header("location:login_peserta.php"); }?>
   
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

</body>
</html>
