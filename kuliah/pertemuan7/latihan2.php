<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 7 - 25 Maret 2021
Mempelajari mengenai Get & POST pada PHP
*/
?>
<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) ||
	 !isset($_GET["nrp"]) ||
	 !isset($_GET["email"]) || 
	 !isset($_GET["jurusan"]) || 
	 !isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>

<ul>
	<li><image src="image/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nrp"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php">kembali ke daftar mahasiswa</a>

</body>
</html>