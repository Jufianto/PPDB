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
$query=mysql_query("SELECT * FROM daftar inner join nilai where daftar.no=nilai.no");
$row=mysql_fetch_array($query);
?>
<body>
<br /><br /><br />
<a href="print.php?no=<?php echo $no; ?>">
<table width="200" border="1" align="center" id="tabel">
  <tr>
    <td colspan="2"><center><img src="image/hdr-report.png"></center></td>
  </tr>
  <tr>
    <td colspan="2" align="center">Biodata Peserta</td>
  </tr>
  <tr>
    <td width="359">ID Pendaftaran</td>
    <td width="355"><?php echo 'RSBI13'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td>Nama Peserta</td>
    <td><?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td>NISN</td>
    <td><?php echo $row['nisn'];?></td>
  </tr>
  <tr>
    <td>Sekolah Asal</td>
    <td><?php echo $row['sekolah_asal'];?></td>
  </tr>
  <tr>
    <td>Program Keahlian</td>
    <td><?php echo $row['prodi'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $row['alamat'];?></td>
  </tr>
  <tr>
    <td>No Telepon/Handphone</td>
    <td><?php echo $row['no_telp'];?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">Nilai Semester</td>
  </tr>
  <tr>
    <td>Nilai Semester 1</td>
    <td><?php echo $row['n1'];?></td>
  </tr>
  <tr>
    <td>Nilai Semester 2</td>
    <td><?php echo $row['n2'];?></td>
  </tr>
  <tr>
    <td>Nilai Semester 3</td>
    <td><?php echo $row['n3'];?></td>
  </tr>
  <tr>
    <td>Nilai Semester 4</td>
    <td><?php echo $row['n4'];?></td>
  </tr>
  <tr>
    <td>Nilai Semester 5</td>
    <td><?php echo $row['n5'];?></td>
  </tr>
</table>
<br /><br /><br />
<table width="603" border="0" align="center">
  <tr>
    <td width="211" align="center">Peserta,</td>
    <td width="167" rowspan="3">&nbsp;</td>
    <td width="211" align="center">Panitia,</td>
  </tr>
  <tr>
    <td height="67">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td align="center"><?php echo $row['nama_lengkap'];?></td>
    <td>....................................................</td>
  </tr>
</table>
</a>
</body>
</html>
