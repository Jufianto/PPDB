<?php
include "koneksi.php";
$no = $_POST['no'];
$nama=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$query=mysql_query("update nilai set n1='$n1', n2='$n2', n3='$n3',n3='$n4',n5='$n5' where no='$no'");
if($query){
echo "Berhasil update data ke database ";
?>
<a href="tabel2.php"><br>Lihat data di Tabel</a>
<meta http-equiv="refresh" content="0 ;URL=nilai.php?no=<?php echo $no ?>"><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>