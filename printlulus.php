<html>
<script type="text/javascript">
window.print()
</script> 
<?php
include "koneksi.php";
//$no=$_GET['no'];
$query=mysql_query("select * from ntes order by rata desc limit 10");
if(isset($_POST['cari'])) {
$prodi=$_POST['jurusan'];
header("location:tabel_urut.php?prodi=$prodi");
}

//if(isset($_GET['prodi'])) {
$prodi=$_GET['prodi'];
$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata desc limit 2");
?>
<?php
//$data=mysql_fetch_array($query);
//$no=$data['no'];
?>
<br /><br />
<center>
<img src="image/hdr-report.png" align="center"></center>
<p align=center>Rekapitulasi Data Siswa Yang Diterima Di SMKN 2 Pekanbaru</p>
<a href="tabel_urut.php">
<table border="1" align="center" id="tabel">
<tr>
<th align="center">ID Pendaftaran</th>
<th align="center">Nama Siswa</th>
<th align="center">Tes Inggris</th>
<th align="center">Tes Matematika</th>
<th align="center">Rata - Rata</th>
<th align="center">Jurusan</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
$nop = $row['no'];
$query1=mysql_query("select * from daftar where no='$nop'");
//if(isset($_GET['prodi'])) {
//$prodi=$_GET['prodi']; 
//$query1=mysql_query("select * from daftar where no='$nop' and prodi='$prodi'");}
$isi=mysql_fetch_array($query1);

?>
<tr>
<td><?php echo 'RSBI13'; echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td align="center"><?php echo $row['ntes_ing'];?></td>
<td align="center"><?php echo $row['ntes_mtk'];?></td>
<td align="center"><?php echo $row['rata'];?></td>
<td><?php echo $isi['prodi'];?></td>
</tr>
<?php //} ?>

<?php
//$query=mysql_query("SELECT * FROM daftar inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata");
//$row=mysql_fetch_array($query);
//$nop = $row['no'];
//$query1=mysql_query("select * from daftar where no='$nop'");
//$prod = $row['prodi'];?>

<?php } ?></table></a>
</html>