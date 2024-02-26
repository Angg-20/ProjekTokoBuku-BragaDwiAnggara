<?php

include "../koneksi_database.php";

$sql = 'SELECT * FROM kasir WHERE id_kasir ='.$_GET['id'];
$hasil = $db->query($sql);

$h = ($hasil->fetch_assoc());

if (isset($_POST['nama'])) {

    $sql = 'UPDATE kasir SET 
        nama = "'.$_POST['nama'].'",
        alamat = "'.$_POST['alamat'].'",
        telepon = "'.$_POST['telepon'].'",
        username = "'.$_POST['username'].'",
        password = "'.$_POST['password'].'"
        WHERE id_kasir ='.$_GET['id'];

    $db->query($sql);

    header('location:TabelKasir.php');
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
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= $h['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" value="<?= $h['alamat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" autocomplete="off" value="<?= $h['telepon']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off" value="<?= $h['username']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" id="password" name="password" autocomplete="off" value="<?= $h['password']; ?>"> 
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