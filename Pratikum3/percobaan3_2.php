<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONDISI</title>
</head>

<body>
    <form action="" method="get">
        Masukan Angka: <input type="text" name="nilai" size="2">
        <p>
            <input type="submit" value="Proses">
        </p>
    </form>

    <?php
    echo "<br>";
    echo "--------------------------<br>";

    if (isset($_GET['nilai'])) {
        $nilai = $_GET['nilai'];

        echo "Angka yang anda masukan adalah: $nilai <br>";
        if ($nilai > 50) {
            echo  "dan angka tersebut lebih besar dari 50 <br>";
        }
    }
    ?>
</body>

</html>