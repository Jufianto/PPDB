<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CekFisik</title>
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
$row=mysql_fetch_array($query);
?>
<body>
<a href="print.php?no=<? echo $no; ?>">
<table width="700" border="1" align="center" id="tabel">
  <tr>
    <td colspan="2" align="center"><center><img src="image/hdr-report.png"></center></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Data Siswa</b></td>
  </tr>
  <tr>
    <td width="359">ID Pendaftaran</td>
    <td width="355"> <?php echo 'RSBI13'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td>Nama Siswa</td>
    <td> <?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td>NISN</td>
    <td> <?php echo $row['nisn'];?></td>
  </tr>
</table><br /><br />
<table width="755" align="center">
  <tr>
    <td width="511"><div align="center">Pertanyaan</div></td>
    <td width="228"><div align="center">Validasi</div></td>
    </tr>
  <tr>
    <td height="75" colspan="2"><center>
        <img src="image/sylprjpn.jpg" height="233"/>
        <br />*khusus pertanyaan No 1 diisi disekolah
    </center></td>
    </tr>
  <tr>
    <td height="51">1. Apakah anda dapat membaca angka diatas?</td>
    <td><div align="center">
      <textarea name=komentar cols=5 rows=2></textarea>
    </div></td>
    </tr>
  <tr>
    <td height="53">2. Apakah Anda Pernah / Mempunyai Tato?</td>
    <td><div align="center">
      <textarea name=komentar cols=5 rows=2></textarea>
    </div></td>
    </tr>
  <tr>
    <td height="47">3. Apakah Anda Pernah / Mempunyai Tindik?</td>
    <td><div align="center">
      <textarea name=komentar cols=5 rows=2></textarea>
    </div></td>
    </tr>
</table>
<br /><br />
<table width="735" align="center">
  <tr>
    <td width="300"><div align="center">Peserta,</div></td>
    <td width="119" rowspan="3"><div align="center"></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div></td>
    <td width="300"><div align="center">Panitia cek fisik,</div></td>
  </tr>
  <tr>
    <td height="59"><div align="center"></div>      <div align="center"></div></td>
    <td><div align="center"></div>      <div align="center"></div></td>
  </tr>
  
  <tr>
    <td><div align="center"><? echo $row['nama_lengkap'];?></div></td>
    <td><div align="left">...........................................................................</div></td>
  </tr>
</table>
</a>


</form>
</body>
</html>
