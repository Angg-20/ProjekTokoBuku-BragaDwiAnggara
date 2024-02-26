<?php 

    include "../koneksi_database.php";

    $sql = "DELETE FROM penjualan WHERE id_penjualan =".$_GET['id'];
    $db->query($sql);

    header('location:TabelPenjualan.php');
?>