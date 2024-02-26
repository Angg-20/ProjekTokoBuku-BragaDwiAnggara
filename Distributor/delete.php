<?php 

    include "../koneksi_database.php";

    $sql = "DELETE FROM distributor WHERE id_distributor =".$_GET['id'];
    $db->query($sql);

    header('location:TabelDistributor.php');
?>