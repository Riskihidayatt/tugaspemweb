<?php

$datanilai = [
    [
        "nama" => "Riana",
        "kelas" => "B",
        "pemweb" => 90,
        "rbjk" => 80,
    ],
    [
        "nama" => "Riski",
        "kelas" => "D",
        "pemweb" => 100,
        "rbjk" => 90,
    ],
    [
        "nama" => "Agas",
        "kelas" => "A",
        "pemweb" => 80,
        "rbjk" => 88,
    ],
    [
        "nama" => "Fathin",
        "kelas" => "C",
        "pemweb" => 99,
        "rbjk" => 87,
    ],
    [
        "nama" => "Adnan",
        "kelas" => "B",
        "pemweb" => 89,
        "rbjk" => 90,
    ],
    [
        "nama" => "Anggi",
        "kelas" => "A",
        "pemweb" => 95,
        "rbjk" => 88,
    ],
    [
        "nama" => "Dwi",
        "kelas" => "B",
        "pemweb" => 95,
        "rbjk" => 88,
    ],
    [
        "nama" => "Alya",
        "kelas" => "C",
        "pemweb" => 78,
        "rbjk" => 87,
    ],
    [
        "nama" => "Gita",
        "kelas" => "B",
        "pemweb" => 89,
        "rbjk" => 100,
    ],
    [
        "nama" => "Mutiara",
        "kelas" => "C",
        "pemweb" => 80,
        "rbjk" => 100,
    ]
];

//menampilkan data mentah array
//var_dump($datanilai);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Prodi MI 2022</title>
</head>

<body>
    <h1 align="center">Data Nilai Prodi MI 2022</h1>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai Pemweb</th>
            <th>Nilai RBJK</th>
        </tr>
        <!--Buka perulangan -->
        <?php $i = 1;
        foreach ($datanilai as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["kelas"] ?></td>
                <td><?php echo $row["pemweb"] ?></td>
                <td><?php echo $row["rbjk"] ?></td>
            </tr>
            <!--Tutup perulangan -->
        <?php endforeach; ?>
    </table>

</body>

</html>