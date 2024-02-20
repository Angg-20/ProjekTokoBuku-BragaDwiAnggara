<?php

include "../koneksi_database.php";

$data = "INSERT INTO pasok(id_pasok, id_distributor, id_buku, jumlah, tanggal) VALUES (
        '" . $_POST['pasok'] . "',
        '" . $_POST['id_distributor'] . "',
        '" . $_POST['id_buku'] . "',
        '" . $_POST['jumlah'] . "',
        '" . $_POST['tanggal'] . "'
    )";

$db->query($data);
