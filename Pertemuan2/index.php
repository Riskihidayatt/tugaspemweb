<?php
include 'Variable.php';
//Gunakan variable yang didefinisikan di variable.php
echo "Nama:" . $nama . "<br>";
echo "Umur:" . $umur . "<br>";

//Gunakan operator pada variable
$umurSetahunLalu = $umur - 1;
echo "Umur satu tahun lalu:" . $umurSetahunLalu . "tahun<br>";

$umurTahunDepan = $umur + 1;
echo "Umur tahun depan :" . $umurTahunDepan . "tahun<br>";
