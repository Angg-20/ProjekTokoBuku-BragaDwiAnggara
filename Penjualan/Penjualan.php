<?php

include "../koneksi_database.php";

$data = "INSERT INTO penjualan(id_buku,id_kasir,jumlah,total,tanggal)VALUES (
        '" . $_POST['idBuku'] . "',
        '" . $_POST['idKasir'] . "',
        '" . $_POST['jumlah'] . "',
        '" . $_POST['total'] . "',
        '" . $_POST['tanggal'] . "'
    )";

$db->query($data);

header('location:TabelPenjualan.php');