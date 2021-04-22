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
            // jika remenber me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 *24);
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

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil userame berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
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
            <div class="col">
                <div class="card border-primary bg-light">
                    <div class="bg-light">
                        <img class="img-fluid m-2" style="width: 300px; height:300px;" src="../assets/admin2.png">
                    </div>
                    <div class="card-content text-primary">
                        <form action="" method="post">
                            <?php if (isset($error)) : ?> 
                                <p style="color: red; font-style: italic;">Username atau Password salah</p>
                            <?php endif; ?>
                            <table>
                                <tr>
                                    <td><label for="username">Username</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <td><label for="password">Password</label></td>
                                    <td>:</td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                            </table>
                            <div class="remember">
                                <input type="checkbox" name="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            <div>
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