<?php
require_once('header.php');

?>
<!-- Koneksi ke Database -->
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_film";

$koneksi = new mysqli($hostname,$username,$password,$database);

?>

<!-- Query database -->
<?php
$hasil = $koneksi->query("select * from tb_film");

?>

<!-- Tampilkan ke perulangan -->

<div class="row card">
    <div class="col-xl-12">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Sutradara</th>
                <th>Cover</th>
            </tr>
            <?php $i =1; foreach ($hasil as $ris) : ?>

                <tr>
                
                    <td><?= $i++; ?></td>
                    <td><?php echo $ris['judul']  ?></td>
                    <td><?php echo $ris['genre']  ?></td>
                    <td><?php echo $ris['durasi']  ?></td>
                    <td><?php echo $ris['sutradara']  ?></td>
                    <td><img src="../assets/images/images_film/<?php echo $ris['cover']  ?>"width ="100"></td>
                </tr>

                <?php endforeach ?>
        </table>
    </div>
</div>
<?php
require_once('footer.php');

?>