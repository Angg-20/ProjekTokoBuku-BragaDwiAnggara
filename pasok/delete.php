<?php 

    include "../koneksi_database.php";

    $sql = "DELETE FROM pasok WHERE id_pasok =".$_GET['id'];
    $db->query($sql);

    header('location:TabelPasok.php');
?>