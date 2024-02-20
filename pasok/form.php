<?php 
    include "layout/header.php";
?>

<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

      <?php 
      
      include "layout/sidebar.php";  
      
      ?>

          <div class="layout-page">

            <?php include "layout/navbar.php"; ?>

            <div class="container">

                <div class="card p-5 mt-5">
                    <h4 class="mt-3 mb-3 text-center">Pasok</h4>

                    <form action="pasok.php" method="post">
                        <div class="mb-3">
                            <label for="Pasok" class="form-label">ID Pasok</label>
                            <input type="text" class="form-control" id="Pasok" name="pasok" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="id_distributor" class="form-label">ID Distributor</label>
                            <input type="text" class="form-control" id="id_distributor" name="id_distributor" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="id_buku" class="form-label">ID Buku</label>
                            <input type="text" class="form-control" id="id_buku" name="id_buku" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="Date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layout/footer.php" ?>
