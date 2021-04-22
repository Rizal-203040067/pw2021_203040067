<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 6 Session, Cookie, Encryption
*/
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>