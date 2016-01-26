<?php
include "koneksi.php";
$no = $_POST['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$sekolah_asal=$_POST['sekolah_asal'];
$prodi=$_POST['prodi'];
$query=mysql_query("update daftar set nama_lengkap='$nama_lengkap', nisn='$nisn', 
alamat='$alamat', no_telp='$no_telp', sekolah_asal='$sekolah_asal',prodi='$prodi' where no='$no'");
$query1=mysql_query("update nilai set nama_lengkap='$nama_lengkap', nisn='$nisn' where no='$no'");
$query2=mysql_query("update ntes set nama_lengkap='$nama_lengkap' where no='$no'");
if($query and $query1 and $query2){
echo "Berhasil update data ke database ";
?>
<a href="tabel2.php"><br>Lihat data di Tabel</a>
<meta http-equiv="refresh" content="0 ;URL=tabel2.php"><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>