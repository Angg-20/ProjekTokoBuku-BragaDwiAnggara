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

                    <form action="Distributor.php" method="post">
                        <div class="mb-3">
                            <label for="namadistributor" class="form-label">Nama Distributor</label>
                            <input type="text" class="form-control" id="namadistributor" name="namadistributor" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>
