<!DOCTYPE html>
<html>

<head>
    <title>Penghitung Huruf Mutu</title>
</head>

<body>
    <h1>Penghitung Huruf Mutu</h1>
    <form action="" method="post">
        Masukkan total nilai: <input type="text" name="nilai"><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['nilai'])) {
        $nilai = intval($_POST['nilai']);
        $huruf_mutu = '';

        if ($nilai >= 0 && $nilai <= 40) {
            $huruf_mutu = 'E';
        } elseif ($nilai >= 41 && $nilai <= 50) {
            $huruf_mutu = 'D';
        } elseif ($nilai >= 51 && $nilai <= 60) {
            $huruf_mutu = 'C';
        } elseif ($nilai >= 61 && $nilai <= 70) {
            $huruf_mutu = 'B';
        } elseif ($nilai >= 71 && $nilai <= 100) {
            $huruf_mutu = 'A';
        } else {
            echo 'Nilai tidak valid.';
        }

        echo "Huruf mutu untuk nilai $nilai adalah: $huruf_mutu";
    }
    ?>
</body>

</html>