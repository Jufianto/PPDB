<?php
include "koneksi.php";
$no = $_GET['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
$passw = md5($nisn);
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$sekolah_asal=$_POST['sekolah_asal'];
$prodi=$_POST['prodi'];
$query=mysql_query("insert into daftar (no,nama_lengkap,nisn,alamat,no_telp,sekolah_asal,passw,prodi)
 value ('$no','$nama_lengkap','$nisn','$alamat','$no_telp','$sekolah_asal','$passw','$prodi')");

if ($query) { ?>
<p align="center">Anda sudah terdaftar, anda akan dialihkan ke halaman input dalam 2 detik atau pergi 
<meta http-equiv="refresh" content="0 ;URL=input.php?no=<?php echo $no;?>">
<br /><a href="input.php?no=<?php echo $no; ?>">kesini</a></p>
<?php } else {
echo "Gagal input data";?><br><?php
echo mysql_error();
} ?>
