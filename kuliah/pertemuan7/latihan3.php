<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 7 - 25 Maret 2021
Mempelajari mengenai Get & POST pada PHP
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
	<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>