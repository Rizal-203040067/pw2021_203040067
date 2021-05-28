<?php
/*
Rizal Baihaqi
203040067
Shift Jum'at 10.00 - 11.00
Tugas Besar
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

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <body class="color-primary">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


        <div style="width: 40%;" class="card color-secondary text-center mx-auto pt-3 mt-4">
            <div class="color-secondary">
                <img class="img-fluid color-secondary m-2 " src="../assets/admin.png">
            </div>
            <div class="card-content text-primary">
                <form action="" method="post">
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">Username atau Password salah</p>
                    <?php endif; ?>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input style="width: 50%;" name="username" type="text" class="form-control mx-auto" id="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Never share your Username and Password with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input style="width: 50%;" name="password" type="password" class="form-control mx-auto" id="password">
                        </div>
                        <div class="mb-3">
                            <input name="remember" type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="pt-2">
                        <p>Don't have an account ? Register <a href="register.php">Here</a></p>
                    </div>
                </form>
            </div>
            <div class="card-action pb-3">
                <a href="../index.php"><button type="submit" class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </body>

</html>