<!DOCTYPE html>
<html>
<!--Riski Hidayat_22753070-->

<head>
    <title>Kondisi (IF-ELSE)</title>
</head>

<body>
    <form action="" method="get">
        Masukkan Angka: <input type="text" name="nilai" size="2">
        <p>
            <input type="submit" value="Proses">
        </p>
    </form>
    <hr>
    <?php
    echo "<br>";
    echo "----------------------------------------------------<br>";
    if (isset($_GET['nilai'])) {
        $nilai = $_GET['nilai'];
        echo "Angka yang anda masukkan adalah: $nilai<br>";
        if ($nilai > 50) {
            echo "dan Angka tersebut lebih besar dari 50 <br>";
        } else {
            echo "dan Angka tersebut lebih kecil dari atau sama dengan 50 <br>";
        }
    }
    ?>
</body>

</html>