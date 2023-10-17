<?php

//array numerik
$angka = [12, 45, 89];
//echo $angka[2];

$data = ["Riski Hidayat", 10, "Purbolinggo", true, false];
//echo $data[2];

//arayy asosiatif
$datadiri = [
    [
        "nama" => "Riski",
        "usia" => 20,
        "hobi" => [
            "Belajar",
            "ngoding",
            "main game"
        ],
    ],
    [
        "nama" => "adnan",
        "usia" => 21,
        "hobi" => [
            "Belajar dengan Riski",
            "ngosing dengan Riski",
            "main game dengan riski"
        ],
    ],
    [
        "nama" => "agas",
        "usia" => 22,
        "hobi" => "Belajar dengan adnan"
    ]
];

//echo $datadiri[1]["hobi"];
//echo $datadiri[2]["nama"];
echo $datadiri[0]["hobi"][2];
