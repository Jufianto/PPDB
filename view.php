<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from daftar where no='$no'");
?>
<table border="1" align="center">
<tr><th colspan="4">
Peserta Tes PPDB SBI SMKN 2 Pekanbaru
</th>
</tr>
<tr>
<th>No</th>
<th>ID Pendaftaran</th>
<th>Nama Lengkap</th>
<th>NISN</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['no'];?></td>
<td><?php echo 'RSBI13'; echo $row['no'];?></td> 
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['nisn'];?></td>
</tr>
</table>
<?php
}
?>
<p align="center"><a href="#" onclick="window.print();return false">Print</a></p>
<p align="center"><a href="index.php">Kembali ke Homepage</a> atau <a href="data.php">Kembali ke Data Siswa</a>