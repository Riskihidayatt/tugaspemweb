<?php
//bulan
$Bulan1 = 'Januari';
$Bulan2 = 'Februari';
$Bulan3 = 'Maret';
//total Penjulan
$totalpenjualan1 = 100000;
$totalpenjualan2 = 120000;
$totalpenjualan3 = 150000;
//biaya penjualan
$BiayaOperasional = 40000;
$BiayaOperasiona2 = 45000;
$BiayaOperasiona3 = 50000;
//Laba bersih
$Lababersih1 = $totalpenjualan1 - $BiayaOperasional;
$Lababersih2 = $totalpenjualan2 - $BiayaOperasiona2;
$Lababersih3 = $totalpenjualan3 - $BiayaOperasiona3;
//Hasil dalam setahun
$tjualtahun = $totalpenjualan1 + $totalpenjualan2 + $totalpenjualan3;
$tBo = $BiayaOperasional + $BiayaOperasiona2 + $BiayaOperasiona3;
$tlaba = $Lababersih1 + $Lababersih2 + $Lababersih3;

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>

<body>
    <h1>Data Penjualan</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Total Penjualan</th>
            <th>Biaya Oprasional</th>
            <th>Laba Bersih</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $Bulan1 ?></td>
            <td><?php echo $totalpenjualan1; ?></td>
            <td><?php echo $BiayaOperasional; ?></td>
            <td><?php echo $Lababersih1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $Bulan2 ?></td>
            <td><?php echo $totalpenjualan2; ?></td>
            <td><?php echo $BiayaOperasiona2; ?></td>
            <td><?php echo $Lababersih2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $Bulan3 ?></td>
            <td><?php echo $totalpenjualan3; ?></td>
            <td><?php echo $BiayaOperasiona3; ?></td>
            <td><?php echo $Lababersih3; ?></td>
        </tr>
        <tr>
            <td colspan="2">Total Tahunan</td>
            <td>Rp.<?php echo $tjualtahun; ?></td>
            <td>Rp.<?php echo $tBo; ?></td>
            <td>Rp.<?php echo $tlaba; ?></td>
        </tr>
    </table>
</body>

</html>