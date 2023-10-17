<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'sans-serif';
            text-align: left;
            position: absolute;
            top: 50%;
            left: 50%;
            border: 3px white solid;
            transform: translate(-50%, -50%);
            padding: 40px;
            border-radius: 20px;
            background-color: whitesmoke;
            color: blue;
            background-image: url('p.jpg');
            font-size: PX;
        }

        .kuy {
            color: black;
        }

        .kuy {
            background-color: white;
            font-family: Gill Sans MT;
        }

        .kuy:hover {
            background-color: white;
            transition: .1s ease-in-out;
            transition-delay: .1s;
            border-radius: 10px;
            color: red;
        }
    </style>
</head>

<body>

    <h1 class="kuy">HALAMAN FILM</h1>

    <table align="left" width="60%" cellspacing="5" cellpadding="6">
        <tr>
            <td><label for="film">Judul Film</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['film']) ? $_POST['film'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['genre']) ? $_POST['genre'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="durasi">Durasi</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['durasi']) ? $_POST['durasi'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="aktor">Pemeran Utama</label></td>
            <td>: </td>
            <td>
                <?php
                if (isset($_POST['aktor']) && is_array($_POST['aktor'])) {
                    foreach ($_POST['aktor'] as $aktorpilih) {
                        echo $aktorpilih . "<br>";
                    }
                } else {
                    echo "Tidak ada aktor terpilih.";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label for="jamtayang">Jam Tayang</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['jamtayang']) ? $_POST['jamtayang'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="tahunterbit">Tahun Terbit</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['tahunterbit']) ? $_POST['tahunterbit'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="tanggalterbit">Tanggal Terbit</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['tanggalterbit']) ? $_POST['tanggalterbit'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="sutradara">Sutradara</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['sutradara']) ? $_POST['sutradara'] : ''; ?></td>
        </tr>
        <tr>
            <td><label for="for">Untuk</label></td>
            <td>: </td>
            <td><?php echo isset($_POST['for']) ? $_POST['for'] : ''; ?></td>
        </tr>
        <tr align="left">
            <td colspan="3">
                <br> <br><button class="kuy" onclick="history.go(-1); return false;">KEMBALI</button>
            </td>
        </tr>
    </table>

</body>

</html>