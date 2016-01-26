<?php
include "koneksi.php";
$no=$_GET['no'];
$nama_lengkap=$_POST['namalp'];
$ntes_ing=$_POST['ntes_ing'];
$ntes_mtk=$_POST['ntes_mtk'];
$nipa1=$_POST['nipa1'];$nipa2=$_POST['nipa2'];$nipa3=$_POST['nipa3'];$nipa4=$_POST['nipa4'];$nipa5=$_POST['nipa5'];
$ning1=$_POST['ning1'];$ning2=$_POST['ning2'];$ning3=$_POST['ning3'];$ning4=$_POST['ning4'];$ning5=$_POST['ning5'];
$nindo1=$_POST['nindo1'];$nindo2=$_POST['nindo2'];$nindo3=$_POST['nindo3'];$nindo4=$_POST['nindo4'];$nindo5=$_POST['nindo5'];
$nmtk1=$_POST['nmtk1'];$nmtk2=$_POST['nmtk2'];$nmtk3=$_POST['nmtk3'];$nmtk4=$_POST['nmtk4'];$nmtk5=$_POST['nmtk5'];
$ipa=($nipa1 + $nipa2 + $nipa3 + $nipa4 + $nipa5)/5;
$ing=($ning1 + $ning2 + $ning3 + $ning4 + $ning5)/5;
$indo=($nindo1 + $nindo2 + $nindo3 + $nindo4 + $nindo5)/5;
$mtk=($nmtk1 + $nmtk2 + $nmtk3 + $nmtk4 + $nmtk5)/5;
$tot=(($ipa+$ing+$indo+$mtk)/4)*0.6;
$tot2=(($ntes_ing+$ntes_mtk)/2)*0.4;
$rata=($tot+$tot2);
$query=mysql_query("insert into ntes (no,nama_lengkap,ntes_ing,ntes_mtk,nipa1,nipa2,nipa3,nipa4,nipa5,
ning1,ning2,ning3,ning4,ning5,nindo1,nindo2,nindo3,nindo4,nindo5,nmtk1,nmtk2,nmtk3,nmtk4,nmtk5,rata)
values ('$no','$nama_lengkap','$ntes_ing','$ntes_mtk','$nipa1','$nipa2','$nipa3','$nipa4','$nipa5',
'$ning1','$ning2','$ning3','$ning4','$ning5','$nindo1','$nindo2','$nindo3','$nindo4','$nindo5','$nmtk1','$nmtk2','$nmtk3','$nmtk4','$nmtk5',
'$rata')");
if ($query) {
echo "berhasil";?><br>
<meta http-equiv="refresh" content="0 ;URL=tabel_nilai.php?no=<?php echo $no?>">
<a href="tabel_nilai.php">Lihat data</a><?php }else{
echo "tidak berhasil";}
?>