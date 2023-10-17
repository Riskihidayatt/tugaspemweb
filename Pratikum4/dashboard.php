<?php

$username = 'admin';
$password = 'admin123';
if ($_POST['username'] and $_POST['password'])

    if ($_POST['username'] == $username and $_POST['password'] == $password) {

        //akan menampilkan pesan selamat datang di dashboard
        echo "<h1> Selamat Datang di Dashboard</h1>";
    } else {
        //akan dikembalikan ke login
        header("location:login.php");
    }
else {
    header("location:login.php");
}
