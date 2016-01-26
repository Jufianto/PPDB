<?php
setcookie("peserta","",time() - 3600);
setcookie("user1","",time() - 3600); 
header("location:index.php");
?>
<!--<meta http-equiv="refresh" content="0 ;URL=index.php">-->