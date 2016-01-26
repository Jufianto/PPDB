<?php
include "koneksi.php";
$no=$_POST['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$butawarna=$_POST['butawarna'];
$tato=$_POST['tato'];
$tindik=$_POST['tindik'];
$query=mysql_query("insert into jawaban values ('$no','$nama_lengkap','$butawarna','$tato','$tindik')");
if ($query) {
echo 'Data Berhasil disimpan';?>
<meta http-equiv="refresh" content="0 ;URL=data.php?no=<?php echo $no;?>">
<?php } else {
echo 'Data Tidak Berhasil disimpan';?>
<meta http-equiv="refresh" content="2 ;URL=cek.php?no=<?php echo $no;?>">
<?php } ?>