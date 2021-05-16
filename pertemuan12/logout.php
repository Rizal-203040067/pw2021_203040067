<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 12 - 16 Mei 2021
Mempelajari mengenai Login dan Registrasi
*/
?>

<?php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>