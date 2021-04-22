<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Modul 6 Session, Cookie, Encryption
*/
?>

<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
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
                            <?php if (isset($error)) : ?> 
                                <p style="color: red; font-style: italic;">Username atau Password salah</p>
                            <?php endif; ?>
                            <div class="pt-3">
                                <p><label for="username">Username : <input type="text" name="username"></label></p>
                            </div>
                            <div>
                                <td><label for="password">Password : <input type="password" name="password"></label></td>
                            </div>
                            <div class="remember pt-2">
                                <input type="checkbox" name="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-2">Login</button>
                            <div class="pt-2">
                                <p>Belum punya akun ? Registrasi <a href="register.php">Disini</a></p>
                            </div>
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