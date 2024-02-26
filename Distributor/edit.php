<?php

include "../koneksi_database.php";

$sql = 'SELECT * FROM distributor WHERE id_distributor ='.$_GET['id'];
$hasil = $db->query($sql);

$h = ($hasil->fetch_assoc());

if (isset($_POST['namadistributor'])) {

    $sql = 'UPDATE distributor SET 
        nama_distributor = "'.$_POST['namadistributor'].'",
        alamat = "'.$_POST['alamat'].'",
        telepon = "'.$_POST['telepon'].'"
        WHERE id_distributor ='.$_GET['id'];

    $db->query($sql);

    header('location:TabelDistributor.php');
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
                            <label for="namadistributor" class="form-label">Nama Distributor</label>
                            <input type="text" class="form-control" id="namadistributor" name="namadistributor" autocomplete="off" value="<?= $h['nama_distributor']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" value="<?= $h['alamat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" autocomplete="off" value="<?= $h['telepon']; ?>">
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