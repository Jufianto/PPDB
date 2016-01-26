<?php if(isset($_COOKIE["ceklogin"])) { ?>
<meta http-equiv="refresh" content="0 ;URL=tabel2.php">
<?php } else { ?>
<html>
<body background="new/1.jpg">
<H1><p align="center">PPDB Online SMK N 2 Pekanbaru</H1></p>
<hr />
<p align="center"><br>
Selamat Datang, silahkan Login melalui <a href="login.php"> Admin</a> atau <a href="login_peserta.php">Siswa</a>
<br><br>Daftar <a href="daftar.php">disini</a> atau lihat <a href="data.php">data siswa</a>
<br>
<br>
<a href="tabel_urut.php">Lihat Rangking Siswa</a>
<?php}?>