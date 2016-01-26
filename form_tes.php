<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Biodata</title>
</head>
<script type="text/javascript">
window.print()
</script>
<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("SELECT * FROM daftar where no='$no'");
$row=mysql_fetch_array($query);
?>
<body>
<br /><br /><br />
<a href="print.php?no=<? echo $no; ?>">
<table width="200" border="1" align="center" id="tabel">
  <tr>
    <td colspan="2"><center><img src="image/hdr-report.png"></center></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Data Siswa</div></td>
  </tr>
  <tr>
    <td width="356">Id Pendaftaran</td>
    <td width="362"><? echo 'RSBI13'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td>Nama Siswa</td>
    <td><? echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td>NISN</td>
    <td><? echo $row['nisn'];?></td>
  </tr>
</table>
</a>
<p>&nbsp;</p>
<table width="664" align="center">
  <tr>
    <td width="605" height="72">1. Cek Fisik</td>
    <td width="47"><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
  
  <tr>
    <td height="71">2. Tes Bahasa Inggris</td>
    <td><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
  
  <tr>
    <td height="65">3. Tes Matematika</td>
    <td><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="732" align="center">
  <tr>
    <td width="245"><div align="center">Peserta,</div></td>
    <td width="223"><div align="center"></div></td>
    <td width="248"><div align="center">Panitia,</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248"><div align="center">.............................................................</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
