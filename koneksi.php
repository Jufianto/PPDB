<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "ppdb";
$koneksi = mysql_connect($host,$user,$pass);
mysql_select_db($database,$koneksi);
?>