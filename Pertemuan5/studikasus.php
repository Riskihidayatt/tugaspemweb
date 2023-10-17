<?php
$produk = [
    ["id" => 1, "nama" => "Router", "harga" => 10000000],
    ["id" => 2, "nama" => "HUB", "harga" => 500000],
    ["id" => 3, "nama" => "Switch", "harga" => 3000000],
    ["id" => 4, "nama" => "Konektor Lan", "harga" => 500000],
    ["id" => 5, "nama" => "Kabel FO", "harga" => 3000000],
];

// Menghitung jumlah produk yang terdapat pada array
$jumlah_produk = count($produk);

// menambahkan elemen ke dalam array
array_push($produk, ["id" => 6, "nama" => "ONT", "harga" => 200000]);

// menghapus data id ke 3
foreach ($produk as $hapus => $item) {
    if ($item['id'] === 3) {
        unset($produk[$hapus]);
    }
}

// index array setelah dihapus
$produk = array_values($produk);

// mengurutkan produk dari harga termurah ke termahal
usort($produk, function ($murah, $mahal) {
    return $murah['harga'] - $mahal['harga'];
});

// Melihat produk yang memiliki harga di atas 1 juta
$produk_mahal = array_filter($produk, function ($item) {
    return $item['harga'] > 1000000;
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi Array PHP</title>
</head>
<body>
    <h1>Data Produk</h1>
    <p>Jumlah produk: <?= $jumlah_produk ?></p>

    <h2>Daftar Produk</h2>
    <ul>
        <?php foreach ($produk as $item) : ?>
            <li><?= $item['nama'] ?> - Harga : <?= number_format($item['harga'], 0, ',', '.') ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Produk Mahal (Harga di atas 1 juta)</h2>
    <ul>
        <?php foreach ($produk_mahal as $item) : ?>
            <li><?= $item['nama'] ?> - Harga : <?= number_format($item['harga'], 0, ',', '.') ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
