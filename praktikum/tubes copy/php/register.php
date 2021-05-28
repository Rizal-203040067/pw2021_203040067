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
</head>

<body>

    <body class="bg-dark">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <div class="w-100">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <div class="card border-primary bg-light text-center">
                        <div class="bg-light">
                            <img class="img-fluid m-2" style="width: 300px; height:300px;" src="../assets/admin.png">
                        </div>
                        <div class="card-content text-primary">
                            <form action="" method="post">
                                <div class="pt-3">
                                    <p><label for="username">Username : <input type="text" name="username"></label></p>
                                </div>
                                <div>
                                    <p><label for="password">Password : <input type="password" name="password"></label></p>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary mt-2">Register</button>
                            </form>
                        </div>
                        <div class="card-action">
                            <a href="../index.php" class="text-primary btn">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>


    </body>

</html>