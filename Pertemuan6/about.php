<?php
session_start();

if(!isset($_SESSION['login'])){
    header("location : login.php");
    exit;
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About FilmID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: white;
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
            line-height: 1.6;
            padding: 20px;
            background-image: url('images/ab.jpg');
            background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }

        h6 {
            color: red;
        }

        b {
            color: red;
        }

        .value {
            margin-left: 20px;
            display: block;
            margin-bottom: 15px;
        }

        .value b {
            color: red;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FilmID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="film.php">Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="genre.php">Genre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="confirmLogout('Yakin mau keluar')">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <h1>About FilmID</h1>
        <div class="value">
            <h6>Visi dan Misi FilmID :</h6>
            Kami berkomitmen untuk menjadi destinasi utama para pecinta film, menyajikan beragam koleksi film dari seluruh
            dunia.Visi kami adalah menghadirkan pengalaman menonton yang mendalam, mendidik, dan menghibur,
            serta memungkinkan pengguna untuk menemukan film-film yang menginspirasi dan memberikan perspektif baru.
        </div>

        <div class="value">
            <h6>Sejarah FilmID :</h6>
            Kami memulai perjalanan kami dengan satu tujuan sederhana, menyajikan pengalaman menonton film yang lebih baik.
            Seiring berjalannya waktu, kami terus berkembang dan berinovasi untuk memenuhi kebutuhan pengguna kami.
            Perjalanan kami penuh dengan tantangan dan prestasi, dan kami sangat
            berterima kasih kepada komunitas FilmID yang telah mendukung kami sepanjang perjalanan ini.
        </div>

        <div class="value">
            <h6>Nilai Inti FilmID :</h6>
            <b>1. Kemajuan </b> <br>
            Kami berusaha untuk terus berinovasi dan meningkatkan layanan kami
            demi memberikan pengalaman terbaik kepada pengguna. <br>

            <b>2. Kepuasan Pengguna </b> <br>
            Kepuasan dan kebutuhan pengguna adalah prioritas utama kami.
            Kami mendengarkan dan mengambil tindakan berdasarkan umpan balik dan saran dari pengguna. <br>

            <b>3. Keragaman </b> <br>
            Kami merayakan keragaman dalam dunia film dengan menyediakan berbagai genre, budaya, dan
            cerita,
            sehingga setiap orang dapat menemukan film yang sesuai dengan preferensi mereka.
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function confirmLogout() {
            var confirmation = confirm('Are you sure you want to log out?');

            if (confirmation) {
                // Perform logout action, e.g., redirect to logout.php
                window.location.href = 'logout.php';
            }
        }
    </script>
</body>

</html>