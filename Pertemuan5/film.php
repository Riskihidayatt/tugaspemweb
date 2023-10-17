<?php
$film = [
    [
        "nama" => "spiderman no way home",
        "genre" => ["Action", ",", "Adventure"],
        "durasi" => "2 jam 30 menit",
        "aktor" => "tom holland",
        "sutradara" => "jon watts",
        "jam_tayang" => "19.30",
        "negara" => "Amerika Serikat",
        "gambar" => "spd.jpeg",
    ],
    [
        "nama" => "Transformers: Rise of the Beasts",
        "genre" => ["Action", ",", "Adventure"],
        "durasi" => "2 jam 10 menit",
        "aktor" => "Anthony Ramos",
        "sutradara" => "Anthony Leonardi",
        "jam_tayang" => "21.00",
        "negara" => "Amerika Serikat",
        "gambar" => "ai.png",
    ],
    [
        "nama" => "HEADSHOT",
        "genre" => ["Action", ",", "Adventure"],
        "durasi" => "2 jam 30 menit",
        "aktor" => "iko uwais",
        "sutradara" => "Timo Tjahjanto",
        "jam_tayang" => "19.30",
        "negara" => "Indonesia",
        "gambar" => "head.jpeg",
    ],
    [
        "nama" => "5cm",
        "genre" => ["Romance", ",", "Adventure"],
        "durasi" => "1 jam 30 menit",
        "aktor" => "Saykoji",
        "sutradara" => "Rizal Mantovani",
        "jam_tayang" => "18.40",
        "negara" => "Indonesia",
        "gambar" => "5cm.jpg",
    ],
    [
        "nama" => "AADC",
        "genre" => ["Adventure", ",", "Romance"],
        "durasi" => "1 jam 50 menit",
        "aktor" => "DIAN SATROWARDOYO",
        "sutradara" => "Rudi Soedjarwo",
        "jam_tayang" => "21.00",
        "negara" => "Indonesia",
        "gambar" => "aadc.jpeg",
    ],
    [
        "nama" => "dua garis biru",
        "genre" => ["Romance", ",", "Adventure"],
        "durasi" => "2 jam 10 menit",
        "aktor" => "Adhisty Zara",
        "sutradara" => "Gina S. Noer",
        "jam_tayang" => "15.00",
        "negara" => "Indonesia",
        "gambar" => "garis biru.jpg",
    ],
    [
        "nama" => "Bangku Kosong: Ujian Terakhir",
        "genre" => ["Horor", ",", "Crime"],
        "durasi" => "1 jam 30 menit",
        "aktor" => "Karina Suwandi",
        "sutradara" => "Lakonde",
        "jam_tayang" => "14.20",
        "negara" => "Indonesia",
        "gambar" => "g.jpg",
    ],
    [
        "nama" => "Gangnam Zombie",
        "genre" => ["Horor", ",", "Thriller"],
        "durasi" => "1 jam 30 menit",
        "aktor" => "Ji Il Joo",
        "sutradara" => "Lee Soo Sung",
        "jam_tayang" => "18.40",
        "negara" => "Korea Selatan",
        "gambar" => "h.jpg",
    ],
    [
        "nama" => "HANGOOUT",
        "genre" => ["Action", ",", "Adventure"],
        "durasi" => "2 jam 10 menit",
        "aktor" => "RADITYA DIKA",
        "sutradara" => "Raditya dika",
        "jam_tayang" => "12.00",
        "negara" => "Indonesia",
        "gambar" => "Han.jpg",
    ],
    [
        "nama" => "Toy Story",
        "genre" => ["Romance", ",", "Adventure"],
        "durasi" => "1 jam 50 menit",
        "aktor" => "Woody",
        "sutradara" => "Josh Cooley",
        "jam_tayang" => "13.30",
        "negara" => "Amerika Serikat",
        "gambar" => "toy.jpg",
    ],
    [
        "nama" => "Avatar: The Way of Water ",
        "genre" => ["Sci-Fi", ",", "Action"],
        "durasi" => "3 jam",
        "aktor" => "Sam Worthington",
        "sutradara" => "James Cameron",
        "jam_tayang" => "18.40",
        "negara" => "Amerika Serikat",
        "gambar" => "av.jpg",
    ],
    [
        "nama" => "Shang-Chi",
        "genre" => ["Romance", ",", "Adventure"],
        "durasi" => "2 jam 10 menit",
        "aktor" => "Simu Liu",
        "sutradara" => "James Allan",
        "jam_tayang" => "20.00",
        "negara" => "Amerika Serikat",
        "gambar" => "sa.jpg",
    ],
    [
        "nama" => "Waktu Magrib",
        "genre" => ["Horor", ",", "Crime"],
        "durasi" => "1 jam 50 menit",
        "aktor" => "Aulia Sarah",
        "sutradara" => "Sidharta Tata",
        "jam_tayang" => "21.00",
        "negara" => "Indonesia",
        "gambar" => "WM.jpeg",
    ],
    [
        "nama" => "Ant-Man and the wasp: Quantumania",
        "genre" => ["Action", ",", "Adventure"],
        "durasi" => "2 jam 10 menit",
        "aktor" => "Paul Rudd",
        "sutradara" => "Peyton Reed",
        "jam_tayang" => "17.00",
        "negara" => "Amerika Serikat",
        "gambar" => "ant.jpg",
    ],
    [
        "nama" => "Cek Toko Sebelah",
        "genre" => ["Family", ",", "Comedy"],
        "durasi" => "2 jam",
        "aktor" => "Ernest Prakasa",
        "sutradara" => "Ernest Prakasa",
        "jam_tayang" => "12.40",
        "negara" => "Indonesia",
        "gambar" => "ckt.jpg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Film</title>
    <style>
        body {
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        table {
            background-color: rgba(255, 255, 255, 0.8);
            width: 90%;
            border-collapse: collapse;
        }

        h1 {
            color: #ffffff;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            transition: transform 0.3s;
            max-width: 100%;
            height: auto;
        }

        img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <h1 align="center">Halaman Film</h1>
    <table align="center" border="1" cellpadding="8" cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>Durasi</th>
            <th>Aktor</th>
            <th>Sutradara</th>
            <th>Jam Tayang</th>
            <th>Negara</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1;
        foreach ($film as $row) : ?>
            <tr align="center" style="background-color: <?php echo in_array('Horor', $row['genre']) ? 'salmon' : (in_array('Romance', $row['genre']) ? 'Lavender' : 'lightblue'); ?>">
                <td><?= $i++; ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= implode($row["genre"]) ?></td>
                <td><?= $row["durasi"] ?></td>
                <td><?= $row["aktor"] ?></td>
                <td><?= $row["sutradara"] ?></td>
                <td><?= $row["jam_tayang"] ?></td>
                <td><?= $row["negara"] ?></td>
                <td>
                    <img src="images/<?= $row["gambar"] ?>" width="100">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>