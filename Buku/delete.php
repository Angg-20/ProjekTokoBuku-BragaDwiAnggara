<?php 

    include "../koneksi_database.php";

    $sql = "DELETE FROM buku WHERE id_buku =".$_GET['id'];
    $db->query($sql);

    header('location:TabelBuku.php');
?>