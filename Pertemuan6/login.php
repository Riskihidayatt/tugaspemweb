<?php
session_start();

$username = 'admin';
$password = 'admin123';

// Cek apakah user sudah login sebelumnya menggunakan cookie
if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
}

// Cek apakah pengguna sudah login, jika ya, pindah ke dashboard.php
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}

// Apakah username dan password yang diinput dari form tidak kosong
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // Apakah username dan password yang diinput sesuai dengan yang diinginkan
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // Set session untuk pengguna yang berhasil login
        $_SESSION['id_user'] = 22753070;
        $_SESSION['name_user'] = 'Riski Hidayat';
        $_SESSION['login'] = true;

        // Cek apakah remember me di-check, jika ya, buat cookie
        if (isset($_POST['remember'])) {
            setcookie('login', 'true', time() + 60, "/");
        }

        // Redirect ke dashboard setelah login berhasil
        header("Location: dashboard.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('images/LG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: orange;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 align="center">Halaman Login</h1>
        <form action="" method="POST">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div>
                        <label for="remember">
                            <input type="checkbox" id="remember" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
