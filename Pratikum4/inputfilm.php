<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input film</title>
    <style>
        body {
            font-family: 'sans-serif';
            text-align: left;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px white solid;
            background-color: whitesmoke;
            color: black;
            padding: 30px;
            border-radius: 10px;
            background-image: url('p.jpg');
        }

        .bio {
            text-align: center;
            font-family: 'Gill Sans MT';
            color: #e31b59;
        }

        .bio {
            background-color: blueviolet;
            color: white;
        }
    </style>
</head>

<body>
    <h1 class="bio">BIOSKOPIN AJA</h1>
    <form action="halamanfilm.php" method="POST">
        <table align="center" cellspacing="5" cellpadding="5">
            <tr align="left">
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="film" minlength="3" required></td>
            </tr>
            <tr align="left">
                <td>Genre</td>
                <td>:</td>
                <td>
                    <select name="genre" required>
                        <option value="romance">romance</option>
                        <option value="comedy">comedy</option>
                        <option value="action">action</option>
                        <option value="horor">horor</option>
                    </select>
                </td>
            </tr>
            <tr align="left">
                <td>Durasi</td>
                <td>:</td>
                <td><input type="time" name="durasi" required></td>
            </tr>
            <tr align="left">
                <td>Aktor</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="aktor[]" value="Abu nawas">Abu nawas</input>
                    <input type="checkbox" name="aktor[]" value="Riski bryen">Riski bryen</input><br>
                    <input type="checkbox" name="aktor[]" value="joko anwar">joko anwar</input>
                    <input type="checkbox" name="aktor[]" value="slamet anwar">slamet anwar</input><br>
                    <input type="checkbox" name="aktor[]" value="Raihan gerald">Raihan gerald</input><br>
                </td>
            </tr>
            <tr align="left">
                <td>Jam tayang</td>
                <td>:</td>
                <td><input type="time" name="jamtayang" required></td>
            </tr>
            <tr align="left">
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="number" name="tahunterbit" required></td>
            </tr>
            <tr align="left">
                <td>Sutradara</td>
                <td>:</td>
                <td><input type="text" name="sutradara" minlength="3" required></td>
            </tr>
            <tr align="left">
                <td>Tanggal Terbit</td>
                <td>:</td>
                <td><input type="date" name="tanggalterbit" required></td>
            </tr>
            <tr align="left">
                <td>For</td>
                <td>:</td>
                <td>
                    <input type="radio" name="for" value="dewasa" required>dewasa
                    <input type="radio" name="for" value="semuaumur" required>semua umur
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <button type="submit" class="bio">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>