<?php
/*
Rizal Baihaqi
203040067
https://github.com/Rizal-203040067/pw2021_203040067.git
Pertemuan 6 - 18 Maret 2021
Mempelajari mengenai  Array Associative pada PHP
*/
?>
<?php 
// $mahasiswa = [
//     ["Sandhika Galih", "043040023", "sandhikagalih8@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001", "doddy@gmail.com", "Teknik Industri"]
// ];

// ARRAY Associative
// definisisnya sama spt ARRAY Numerik, kecuali
//pada ARRAY Associative key-nya adalah String yang kita buat sendiri
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
// echo $mahasiswa[1]["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>