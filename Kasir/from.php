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

                    <form action="Kasir.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">status</label>
                            <input type="text" class="form-control" id="status" name="status" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" id="password" name="password" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="akses" class="form-label">akses</label>
                            <input type="text" class="form-control" id="akses" name="akses" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>