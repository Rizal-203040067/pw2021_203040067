<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
*/
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
              </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login | Admin</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">\

</head>

<body class="color-primary">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <div style="width: 40%;" class="card color-secondary text-center mx-auto pt-3 mt-4">
        <div class="color-secondary">
            <img class="img-fluid m-2" src="../assets/admin.png">
        </div>
        <div class="card-content text-primary">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input style="width: 50%;" name="username" type="text" class="form-control mx-auto" id="username" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Never share your Username and Password with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input style="width: 50%;" name="password" type="password" class="form-control mx-auto" id="password">
                </div>
                <button type="submit" name="register" class="btn btn-primary mt-2">Register</button>
            </form>
        </div>
        <div class="card-action pt-4 pb-3">
            <a href="../index.php"><button type="submit" class="btn btn-primary">Back</button></a>
        </div>
    </div>


</body>

</html>