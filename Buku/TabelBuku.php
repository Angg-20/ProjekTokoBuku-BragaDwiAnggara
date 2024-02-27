<?php 

  session_start();


  // print_r($_SESSION);

    if(!isset($_SESSION['user'])){
      header ("location:../login.php");
    }

?>




<?php

include "../koneksi_database.php";

$tampilan = 'select * from buku';

$hasil = $db->query($tampilan);

?>


<?php include "../layout/header.php" ?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Menu -->
        <?php include "../layout/sidebar.php" ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            <?php include "../layout/navbar.php" ?>
            <!-- / Navbar -->

            <div class="container">
            
            <a href="from.php" class="btn btn-primary mt-3">Tambah Data</a>

                <!-- awal table -->

                <table class="table mt-5 mb-5 text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">No ISBN</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Action</th>
                            <!-- <th scope="col" class="text-center">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($hasil as $dis) { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dis['id_buku']; ?></td>
                                <td><?= $dis['judul']; ?></td>
                                <td><?= $dis['noisbn']; ?></td>
                                <td><?= $dis['stok']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $dis['id_buku']; ?>" class="btn btn-primary" style="width: 90px;">Edit</a>
                                    <a href="delete.php?id=<?= $dis['id_buku']; ?>" class="btn btn-danger" style="width: 90px;">hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php  }  ?>
                    </tbody>
                </table>

                <!-- akhir table -->

            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>