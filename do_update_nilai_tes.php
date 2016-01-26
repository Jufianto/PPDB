<?php
include "koneksi.php";
$no = $_POST['no'];
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
$query=mysql_query("update ntes set ntes_ing='$ntes_ing', ntes_mtk='$ntes_mtk', nipa1='$nipa1',nipa2='$nipa2',nipa3='$nipa3',nipa4='$nipa4',
nipa5='$nipa5',ning1='$ning1',ning2='$ning2',ning3='$ning3',ning4='$ning4',ning5='$ning5',
nindo1='$nindo1',nindo2='$nindo2',nindo3='$nindo3',nindo4='$nindo4',nindo5='$nindo5',
nmtk1='$nmtk1',nmtk2='$nmtk2',nmtk3='$nmtk3',nmtk4='$nmtk4',nmtk5='$nmtk5',rata='$rata' where no='$no'");
if($query){
echo "Berhasil update data ke database ";
?>
<a href="tabel_nilai.php?no=<?php echo $no ?>"><br>Lihat data di Tabel</a>
<meta http-equiv="refresh" content="0 ;URL=tabel_nilai.php?no=<?php echo $no ?>"><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>