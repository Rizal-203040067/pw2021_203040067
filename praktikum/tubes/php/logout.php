<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
*/
?>

<?php
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>