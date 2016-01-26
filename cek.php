<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("SELECT * FROM daftar where no='$no'");
$row=mysql_fetch_array($query);
?>
<body>
<form name="cek" action="do_cek.php" method="post">
<table width="1202" border="1" align="center">
  <tr>
    <td colspan="3"><div align="center">Data Siswa</div></td>
    </tr>
  <tr>
    <td>No</td>
    <td></td>
    <td><input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no'];?>"><?php echo $row['no'];?></td>
  <tr>
    <td width="572">ID Pendaftaran</td>
    <td width="21">&nbsp;</td>
    <td width="587"><?php echo 'RSBI13'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td>&nbsp;</td>
    <td><input type="hidden" name="nama_lengkap" maxlength="15" size="35" value="<?php echo $row['nama_lengkap'];?>">
	<?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td>NISN</td>
    <td>&nbsp;</td>
    <td><input type="hidden" name="nisn" maxlength="15" size="35" value="<?php echo $row['nisn'];?>" />
        <?php echo $row['nisn'];?></td>
  </tr>
  <tr>
    <td><div align="center">Pertanyaan</div></td>
    <td>&nbsp;</td>
    <td><div align="center">Jawaban</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>1. Apakah anda dapat membaca angka diatas?</td>
    <td>&nbsp;</td>
    <td><div align="center">
      <input type="radio" name="butawarna" value="Benar" />
      Benar
      </input>
          <input type="radio" name="butawarna" value="Tidak" />
      Tidak
      </input>
    </div></td>
  </tr>
  <tr>
    <td>2. Apakah Anda Pernah / Mempunyai Tato?</td>
    <td>&nbsp;</td>
    <td><div align="center">
      <input type="radio" name="tato" value="Benar" />
      Benar
      </input>
          <input type="radio" name="tato" value="Tidak" />
      Tidak
      </input>
    </div></td>
  </tr>
  <tr>
    <td>3. Apakah Anda Pernah / Mempunyai Tindik?</td>
    <td>&nbsp;</td>
    <td><div align="center">
        <input type="radio" name="tindik" value="Benar" />
      Benar
      </input>
      <input type="radio" name="tindik" value="Tidak" />
      Tidak
      </input>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
    <input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" name="reset" value="Reset"></div></td>
    </tr>
</table>
</form>
</body>
</html>
