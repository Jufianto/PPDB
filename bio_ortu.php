<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#tabel{
border-collapse:collapse;
font-family:"Palatino Linotype","tahoma";
	font-size:16px;
text-align:center;
}
a:link{color:black; text-decoration:none;}
a:visited{color:black; text-decoration:none;}
a:hover {text-decoration:underline;}
</style>
<script type="text/javascript">
window.print()
</script>
</head>
<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("SELECT * FROM daftar where no='$no' ");
$query1=mysql_query("SELECT * FROM orangtua where no='$no' ");
$row=mysql_fetch_array($query);
$isi=mysql_fetch_array($query1);
?>
<body>
<a href="print.php?no=<?php echo $no; ?>">
<table width="200" border="1" align="center" id="tabel">
  <tr>
    <td colspan="4"><center><img src="image/hdr-report.png"></center></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">Data Siswa</div></td>
  </tr>
  <tr>
    <td colspan="2">ID Pendaftaran</td>
    <td colspan="2"><?php echo 'RSBI13'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td colspan="2">Nama Lengkap</td>
    <td colspan="2"><?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td colspan="2">NISN</td>
    <td colspan="2"><?php echo $row['nisn'];?></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">Data Orang Tua</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Ayah</div></td>
    <td colspan="2"><div align="center">Ibu</div></td>
  </tr>
  <tr>
    <td width="357">Nama</td>
    <td width="357"><?php echo $isi['nama_a'];?></td>
    <td width="357">Nama</td>
    <td width="357"><?php echo $isi['nama_i'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $isi['alamat_a'];?></td>
    <td>Alamat</td>
    <td><?php echo $isi['alamat_i'];?></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td><?php echo $isi['pekerjaan_a'];?></td>
    <td>Pekerjaan</td>
    <td><?php echo $isi['pekerjaan_i'];?></td>
  </tr>
  <tr>
    <td>No Telpon</td>
    <td><?php echo $isi['telp_a'];?></td>
    <td>No Telpon</td>
    <td><?php echo $isi['telp_i'];?></td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="200" align="center">
  <tr>
    <td><div align="center">Peserta,</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $row['nama_lengkap'];?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="733" align="center">
  <tr>
    <td colspan="2"><div align="center">Mengetahui,</div></td>
    <td width="136" rowspan="6">&nbsp;</td>
    <td width="193"></td>
  </tr>
  <tr>
    <td width="187"><div align="center">Ayah</div></td>
    <td width="197"><div align="center">Ibu</div></td>
    <td><div align="center">Panitia,</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $isi['nama_a'];?></div></td>
    <td><div align="center"><?php echo $isi['nama_i'];?></div></td>
    <td>..............................................</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
