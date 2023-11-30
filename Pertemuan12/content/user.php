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
$hasil = $koneksi->query("select * from tb_user");

?>

<!-- Tampilkan ke perulangan -->

<div class="row card">
    <div class="col-xl-12">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Foto</th>
            </tr>
            <?php $i =1; foreach ($hasil as $ris) : ?>

                <tr>
                
                    <td><?= $i++; ?></td>
                    <td><?php echo $ris['username']  ?></td>
                    <td><?php echo $ris['password']  ?></td>
                    <td><?php echo $ris['level']  ?></td>
                    <td><img src="../assets/images/images_user/<?php echo $ris['foto']  ?>"width ="100"></td>
                </tr>

                <?php endforeach ?>
        </table>
    </div>
</div>
<?php
require_once('footer.php');

?>