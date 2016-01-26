<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("delete from daftar where no='$no'");
if($query){ echo "berhasil hapus data";
?><meta http-equiv="refresh" content="0 ;URL=tabel2.php">
<a href="tabel2.php">Kembali ke Table</a>
<?php
}else{
echo "gagal hapus data";
}
?>