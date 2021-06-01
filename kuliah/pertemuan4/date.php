<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 4 - 4 Maret 2021
Mempelajari mengenai Penganggalan (Date) dan waktu (Time) pada PHP
*/
?>
<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,10,3,2001));


// strtotime
echo date("l", strtotime("3 october 2001"));
?>