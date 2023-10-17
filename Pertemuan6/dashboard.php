<?php

session_start();

if(!isset($_SESSION['login'])){
    header("location : login.php");
    exit;
};

// if (empty($_SESSION['id_user'])) {
//     header("location:login.php");
// };

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('images/bgds.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: whitesmoke;
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    h6 {
        color: #FF5733;
        margin-top: 20px;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
    }

    .feature {
        margin-top: 10px;
    }

    .feature-item {
        margin-bottom: 10px;
    }

    .feature-item h6 {
        margin: 5px 0;
    }
</style>

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
    <h1>Selamat Datang <?php echo $_SESSION['name_user'] ?></h1>

    <p>FilmID adalah sebuah platform penyedia konten film yang menyajikan berbagai macam film dengan berbagai genre,
        mulai dari aksi, petualangan, horor, fiksi ilmiah, hingga film keluarga. FilmID menawarkan pengalaman menonton
        yang memikat dan menghibur bagi para pengguna dengan koleksi film yang terus diperbarui dan berkualitas.</p>

    <div class="feature">
        <h6>Fitur Utama FilmID:</h6>
        <div class="feature-item">
            <h6>1. Koleksi Film Beragam:</h6>
            <p>FilmID menyediakan beragam koleksi film dari seluruh dunia dengan berbagai genre dan tahun rilis.</p>
        </div>
        <div class="feature-item">
            <h6>2. Pencarian Mudah:</h6>
            <p>Pengguna dapat dengan mudah mencari film favorit mereka berdasarkan judul, genre, tahun rilis, atau bahkan
                aktor dan sutradara.</p>
        </div>
        <div class="feature-item">
            <h6>3. Pilihan Genre:</h6>
            <p>FilmID menyajikan pilihan genre yang luas seperti aksi, petualangan, horor, fiksi ilmiah, keluarga, dan
                banyak lagi untuk memenuhi selera beragam pengguna.</p>
        </div>
        <div class="feature-item">
            <h6>4. Detail Film:</h6>
            <p>Setiap film memiliki halaman detail yang memberikan informasi lengkap termasuk judul, genre, durasi, aktor,
                sutradara, negara produksi, dan ulasan pengguna.</p>
        </div>
        <div class="feature-item">
            <h6>5. Rating dan Ulasan Pengguna:</h6>
            <p>Pengguna dapat memberikan rating dan ulasan untuk setiap film setelah menontonnya, memberikan pandangan
                pribadi mereka kepada komunitas FilmID.</p>
        </div>
        <div class="feature-item">
            <h6>6. Pemutaran Streaming:</h6>
            <p>FilmID menyediakan layanan streaming untuk menonton film secara langsung di platform, memungkinkan
                pengguna untuk menikmati film tanpa harus meninggalkan situs.</p>
        </div>
        <div class="feature-item">
            <h6>7. Notifikasi Film Terbaru:</h6>
            <p>Pengguna dapat berlangganan notifikasi untuk mendapatkan pembaruan tentang film-film terbaru,
                penambahan genre baru, atau informasi terkait platform.</p>
        </div>
        <div class="feature-item">
            <h6>8. Tampilan Responsif:</h6>
            <p>Desain responsif memastikan pengalaman pengguna yang baik di berbagai perangkat, termasuk komputer,
                tablet, dan ponsel pintar.</p>
        </div>
    </div>

    <p>FilmID bertujuan untuk memberikan pengalaman menonton film yang memuaskan dan memikat bagi para penggemar film,
        dengan menyajikan konten yang bervariasi dan kualitas tinggi. Dengan fitur-fitur yang memudahkan pengguna dalam
        menemukan dan menonton film favorit, FilmID menjadi destinasi utama untuk pengalaman sinematik yang tak
        terlupakan.</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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