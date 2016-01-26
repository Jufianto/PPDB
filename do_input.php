<?php
include "koneksi.php";
$no=$_POST['no'];
$nama_lengkap=$_POST['nama'];
$nisn=$_POST['nisn'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];
if (($n1<75) or ($n2<75) or ($n3<75) or ($n4<75) or ($n5<75) or ($r1>10) or ($r2>10) or ($r3>10) or ($r4>10) or ($r5>10)) { 
?>
<meta http-equiv="refresh" content="0 ;URL=input.php?no=<?php echo $no;?>">
<script>
alert ('Nilai yang anda masukkan tidak cukup')
</script>";
<?php } else { 
$query=mysql_query("insert into nilai values('$no','$nama_lengkap','$nisn','$n1','$n2','$n3','$n4','$n5','$r1','$r2','$r3','$r4','$r5')");
if ($query) {?>
<meta http-equiv="refresh" content="0 ;URL=splash.php?no=<?php echo $no;?>">
<?php echo "berhasil";?><br>
<a href="cek.php?no=<?php echo $no;?>">Lihat data</a><?php }else{
echo "tidak berhasil";}
 } ?>