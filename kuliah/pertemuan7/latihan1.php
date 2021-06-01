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
// Variabel Scope / lingkup variabel
// $x = 10;

// function tampilx() {
// 	global $x;
// 	echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Rizal Baihaqi";
// $_GET["nrp"] = "203040067";
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Rizal Baihaqi",
        "nrp" => "203040067",
        "email" => "rizalb@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g1.jpg"
    ],
    [
        "nama" => "Aliando Syarif",
        "nrp" => "203040344",
        "email" => "aliandos@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul></ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>		
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>