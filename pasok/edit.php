<?php

include "../koneksi_database.php";

$sql = 'SELECT * FROM pasok WHERE id_pasok ='.$_GET['id'];
$hasil = $db->query($sql);

$h = ($hasil->fetch_assoc());

if (isset($_POST['jumlah'])) {

    $sql = 'UPDATE pasok SET 
        jumlah = "'.$_POST['jumlah'].'",
        tanggal = "'.$_POST['tanggal'].'"
        WHERE id_pasok ='.$_GET['id'];

    $db->query($sql);

    header('location:TabelPasok.php');
}
?>

<?php 

    include "../layout/header.php";

?>

<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

      <?php 

      include "../layout/sidebar.php";  
      
      ?>

          <div class="layout-page">

            <?php include "../layout/navbar.php"; ?>

            <div class="container">

                <div class="card p-5 mt-5">
                    <h4 class="mt-3 mb-3">Distributor</h4>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off" value="<?= $h['jumlah']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="Date" class="form-control" id="tanggal" name="tanggal" value="<?= $h['tanggal']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>


<?php include "../layout/footer.php" ?>