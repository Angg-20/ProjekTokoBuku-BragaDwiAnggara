<?php 

    include "../koneksi_database.php";

    $sql = "DELETE FROM kasir WHERE id_kasir =".$_GET['id'];
    $db->query($sql);

    header('location:TabelKasir.php');
?>