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

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

// cek apakah tombol sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan');
            document.location.href = 'latihan3.php'
          </script>";
  } else {
    echo "Data Gagal ditambahkan";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>

  <h3>Tambah Data Mahasiswa</h3>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>

      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>

      <li>
        <label>
          E-mail :
          <input type="text" name="email" required>
        </label>
      </li>

      <li>
        <label>
          Jurusan
          <input type="text" name="jurusan" required>
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>