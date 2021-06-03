<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 13- 1 Juni 2021
Mempelajari mengenai AJAX live Search dan Upload Gambar
*/
?>
<?php

session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';
// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil Id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil dihapus');
            document.location.href = 'index.php'
          </script>";
} else {
  echo "Data Gagal dihapus";
}
?>