<?php 

    include "../koneksi_database.php";

    $data = "INSERT INTO distributor(id_distributor,nama_distributor,alamat,telepon)VALUES (
        '".$_POST['distributor']."',
        '".$_POST['namadistributor']."',
        '".$_POST['alamat']."',
        '".$_POST['telepon']."'
    )";

    $db->query($data);
?>