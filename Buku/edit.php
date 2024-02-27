<?php 

  session_start();


  // print_r($_SESSION);

    if(!isset($_SESSION['user'])){
      header ("location:../login.php");
    }

?>

<?php

include "../koneksi_database.php";

$sql = 'SELECT * FROM buku WHERE id_buku =' . $_GET['id'];
$hasil = $db->query($sql);

$h = ($hasil->fetch_assoc());

if (isset($_POST['judul'])) {

    $sql = 'UPDATE buku SET 
        judul = "'.$_POST['judul'].'",
        noisbn = "'.$_POST['noisbn'].'",
        penulis = "'.$_POST['penulis'].'",
        penerbit = "'.$_POST['penerbit'].'",
        tahun = "'. $_POST['tahun'].'",
        stok = "'.$_POST['stok'].'",
        harga_pokok = "'.$_POST['hargaPokok'].'",
        harga_jual = "'.$_POST['hargaJual'].'",
        ppn = "'.$_POST['ppn'].'",
        diskon = "'.$_POST['diskon'].'"
        WHERE id_buku ='.$_GET['id'];

    $db->query($sql);

    header('location:TabelBuku.php');
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
                    <h4 class="mt-3 mb-3">Buku</h4>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" value="<?= $h['judul']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="noisbn" class="form-label">noisbn</label>
                            <input type="number" class="form-control" id="noisbn" name="noisbn" autocomplete="off" value="<?= $h['noisbn']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" autocomplete="off" value="<?= $h['penulis']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" autocomplete="off" value="<?= $h['penerbit']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" autocomplete="off" value="<?= $h['tahun']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" autocomplete="off" value="<?= $h['stok']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="hargaPokok" class="form-label">hargaPokok</label>
                            <input type="number" class="form-control" id="hargaPokok" name="hargaPokok" autocomplete="off" value="<?= $h['harga_pokok']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="hargaJual" class="form-label">hargaJual</label>
                            <input type="number" class="form-control" id="hargaJual" name="hargaJual" autocomplete="off" value="<?= $h['harga_jual']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ppn" class="form-label">ppn</label>
                            <input type="number" class="form-control" id="ppn" name="ppn" autocomplete="off" value="<?= $h['ppn']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">diskon</label>
                            <input type="number" class="form-control" id="diskon" name="diskon" autocomplete="off" value="<?= $h['diskon']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>