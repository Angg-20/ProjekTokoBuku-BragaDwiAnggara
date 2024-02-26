<?php

include "../koneksi_database.php";

$tampilan = 'select * from kasir';

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
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">status</th>
                            <th scope="col">username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($hasil as $dis) { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dis['nama']; ?></td>
                                <td><?= $dis['alamat']; ?></td>
                                <td><?= $dis['telepon']; ?></td>
                                <td><?= $dis['status']; ?></td>
                                <td><?= $dis['username']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $dis['id_kasir']; ?>" class="btn btn-primary" style="width: 90px;">Edit</a>
                                    <a href="delete.php?id=<?= $dis['id_kasir']; ?>" class="btn btn-danger" style="width: 90px;">Hapus</a>
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