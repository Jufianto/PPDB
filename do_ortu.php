<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><?php
include "koneksi.php";
$no = $_POST['no'];
$nama_a=$_POST['nama_a'];
$alamat_a=$_POST['alamat_a'];
$pekerjaan_a=$_POST['pekerjaan_a'];
$nama_i=$_POST['nama_i'];
$alamat_i=$_POST['alamat_i'];
$pekerjaan_i=$_POST['pekerjaan_i'];
$telp_a=$_POST['telp_a'];
$telp_i=$_POST['telp_i'];
$query=mysql_query("insert into orangtua values('$no','$nama_a','$alamat_a','$pekerjaan_a','$nama_i',
'$alamat_i','$pekerjaan_i','$telp_a','$telp_i')");
if ($query) {
echo 'Data Berhasil disimpan';?>
<meta http-equiv="refresh" content="0 ;URL=data.php?no=<?php echo $no;?>">
<?php } else {
echo 'Data Tidak Berhasil disimpan';?><br />
HARAP MENGISI KEMBALI
<meta http-equiv="refresh" content="10 ;URL=ortu.php?no=<?php echo $no;?>">
<?php } ?>
</body>
</html>
