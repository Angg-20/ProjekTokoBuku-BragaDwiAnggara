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

                    <form action="Buku.php" method="post">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="noisbn" class="form-label">noisbn</label>
                            <input type="number" class="form-control" id="noisbn" name="noisbn" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="hargaPokok" class="form-label">hargaPokok</label>
                            <input type="number" class="form-control" id="hargaPokok" name="hargaPokok" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="hargaJual" class="form-label">hargaJual</label>
                            <input type="number" class="form-control" id="hargaJual" name="hargaJual" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="ppn" class="form-label">ppn</label>
                            <input type="number" class="form-control" id="ppn" name="ppn" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">diskon</label>
                            <input type="number" class="form-control" id="diskon" name="diskon" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>