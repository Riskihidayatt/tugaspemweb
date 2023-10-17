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
<html>

<head>
    <title>Film Genre Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
    body {
        background-image: url('images/bg1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: whitesmoke;
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    h1,
    li {
        color: white;
        /* Mengubah warna teks pada elemen h1 dan li menjadi putih */
    }

    table {
        background-color: navy;
        width: 90%;
        border-collapse: collapse;
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
    <h1>Pilih Genre Film:</h1>
    <ul>
        <?php
        // Deklarasi array genre
        $genres = ["Action", "Horor", "Adventure", "Sci-Fi", "Family"];

        // Tampilkan genre sebagai pilihan
        foreach ($genres as $genre) {
            echo '<li><a href="?genre=' . urlencode($genre) . '">' . $genre . '</a></li>';
        }
        ?>
    </ul>

    <?php
    // Data film
    $films =  [
        [
            "nama" => "spiderman no way home",
            "genre" => "Action",
            "durasi" => "2 jam 30 menit",
            "aktor" => "tom holland",
            "sutradara" => "jon watts",
            "jam_tayang" => "19.30",
            "negara" => "Amerika Serikat",
            "gambar" => "spd.jpeg",
        ],
        [
            "nama" => "Transformers: Rise of the Beasts",
            "genre" => "Adventure",
            "durasi" => "2 jam 10 menit",
            "aktor" => "Anthony Ramos",
            "sutradara" => "Anthony Leonardi",
            "jam_tayang" => "21.00",
            "negara" => "Amerika Serikat",
            "gambar" => "ai.png",
        ],
        [
            "nama" => "HEADSHOT",
            "genre" => "Action",
            "durasi" => "2 jam 30 menit",
            "aktor" => "iko uwais",
            "sutradara" => "Timo Tjahjanto",
            "jam_tayang" => "19.30",
            "negara" => "Indonesia",
            "gambar" => "head.jpeg",
        ],
        [
            "nama" => "5cm",
            "genre" => "Adventure",
            "durasi" => "1 jam 30 menit",
            "aktor" => "Saykoji",
            "sutradara" => "Rizal Mantovani",
            "jam_tayang" => "18.40",
            "negara" => "Indonesia",
            "gambar" => "5cm.jpg",
        ],
        [
            "nama" => "AADC",
            "genre" => "Romance",
            "durasi" => "1 jam 50 menit",
            "aktor" => "DIAN SATROWARDOYO",
            "sutradara" => "Rudi Soedjarwo",
            "jam_tayang" => "21.00",
            "negara" => "Indonesia",
            "gambar" => "aadc.jpeg",
        ],
        [
            "nama" => "dua garis biru",
            "genre" => "Romance",
            "durasi" => "2 jam 10 menit",
            "aktor" => "Adhisty Zara",
            "sutradara" => "Gina S. Noer",
            "jam_tayang" => "15.00",
            "negara" => "Indonesia",
            "gambar" => "garis biru.jpg",
        ],
        [
            "nama" => "Bangku Kosong: Ujian Terakhir",
            "genre" => "Horor",
            "durasi" => "1 jam 30 menit",
            "aktor" => "Karina Suwandi",
            "sutradara" => "Lakonde",
            "jam_tayang" => "14.20",
            "negara" => "Indonesia",
            "gambar" => "g.jpg",
        ],
        [
            "nama" => "Gangnam Zombie",
            "genre" => "Horor",
            "durasi" => "1 jam 30 menit",
            "aktor" => "Ji Il Joo",
            "sutradara" => "Lee Soo Sung",
            "jam_tayang" => "18.40",
            "negara" => "Korea Selatan",
            "gambar" => "h.jpg",
        ],
        [
            "nama" => "HANGOOUT",
            "genre" => "Adventure",
            "durasi" => "2 jam 10 menit",
            "aktor" => "RADITYA DIKA",
            "sutradara" => "Raditya dika",
            "jam_tayang" => "12.00",
            "negara" => "Indonesia",
            "gambar" => "Han.jpg",
        ],
        [
            "nama" => "Toy Story",
            "genre" => "Adventure",
            "durasi" => "1 jam 50 menit",
            "aktor" => "Woody",
            "sutradara" => "Josh Cooley",
            "jam_tayang" => "13.30",
            "negara" => "Amerika Serikat",
            "gambar" => "toy.jpg",
        ],
        [
            "nama" => "Avatar: The Way of Water ",
            "genre" => "Sci-Fi",
            "durasi" => "3 jam",
            "aktor" => "Sam Worthington",
            "sutradara" => "James Cameron",
            "jam_tayang" => "18.40",
            "negara" => "Amerika Serikat",
            "gambar" => "av.jpg",
        ],
        [
            "nama" => "Shang-Chi",
            "genre" => "Adventure",
            "durasi" => "2 jam 10 menit",
            "aktor" => "Simu Liu",
            "sutradara" => "James Allan",
            "jam_tayang" => "20.00",
            "negara" => "Amerika Serikat",
            "gambar" => "sa.jpg",
        ],
        [
            "nama" => "Waktu Magrib",
            "genre" => "Horor",
            "durasi" => "1 jam 50 menit",
            "aktor" => "Aulia Sarah",
            "sutradara" => "Sidharta Tata",
            "jam_tayang" => "21.00",
            "negara" => "Indonesia",
            "gambar" => "WM.jpeg",
        ],
        [
            "nama" => "Ant-Man and the wasp: Quantumania",
            "genre" => "Action",
            "durasi" => "2 jam 10 menit",
            "aktor" => "Paul Rudd",
            "sutradara" => "Peyton Reed",
            "jam_tayang" => "17.00",
            "negara" => "Amerika Serikat",
            "gambar" => "ant.jpg",
        ],
        [
            "nama" => "Cek Toko Sebelah",
            "genre" => "Family",
            "durasi" => "2 jam",
            "aktor" => "Ernest Prakasa",
            "sutradara" => "Ernest Prakasa",
            "jam_tayang" => "12.40",
            "negara" => "Indonesia",
            "gambar" => "ckt.jpg",
        ],
    ];

    // Fungsi untuk menampilkan film berdasarkan genre
    function tampilkanFilmBerdasarkanGenre($films, $genre)
    {
        echo '<h2 align ="center">Film dengan Genre ' . $genre . ':</h2>';
        echo '<table class="table table-bordered">
                <tr>
                    <th>Nama Film</th>
                    <th>Durasi</th>
                    <th>Aktor</th>
                    <th>Sutradara</th>
                    <th>Jam Tayang</th>
                    <th>Negara</th>
                    <th>Gambar</th>
                </tr>';

        foreach ($films as $film) {
            if ($genre === $film['genre']) {
                echo '<tr>
                        <td>' . $film['nama'] . '</td>
                        <td>' . $film['durasi'] . '</td>
                        <td>' . $film['aktor'] . '</td>
                        <td>' . $film['sutradara'] . '</td>
                        <td>' . $film['jam_tayang'] . '</td>
                        <td>' . $film['negara'] . '</td>
                        <td><img src="images/' . $film["gambar"] . '" alt="Poster" width="100px"></td>
                    </tr>';
            }
        }

        echo '</table>';
    }

    // Ambil genre yang dipilih
    if (isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        tampilkanFilmBerdasarkanGenre($films, $genre);
    }
    ?>


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