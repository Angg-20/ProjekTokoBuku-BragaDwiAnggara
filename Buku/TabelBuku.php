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

                <!-- awal table -->

                <table class="table mt-5 mb-5">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
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
                                <td><?= $dis['penulis']; ?></td>
                                <td><?= $dis['penerbit']; ?></td>
                                <td><?= $dis['tahun']; ?></td>
                                <td><?= $dis['stok']; ?></td>
                                <td><?= $dis['harga_pokok']; ?></td>
                                <td><?= $dis['harga_jual']; ?></td>
                                <td><?= $dis['ppn']; ?></td>
                                <td><?= $dis['diskon']; ?></td>
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