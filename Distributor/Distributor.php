<?php 

    include "../koneksi_database.php";

    $data = "INSERT INTO distributor(nama_distributor,alamat,telepon)VALUES (
        '".$_POST['namadistributor']."',
        '".$_POST['alamat']."',
        '".$_POST['telepon']."'
    )";

    $db->query($data);

    header('location:TabelDistributor.php');
?>