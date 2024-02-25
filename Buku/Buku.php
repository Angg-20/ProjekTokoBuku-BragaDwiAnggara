<?php 

    include "../koneksi_database.php";

    $data = "INSERT INTO Buku(judul,noisbn,penulis,penerbit,tahun,stok,harga_pokok,harga_jual,ppn,diskon)VALUES (
        '".$_POST['judul']."',
        '".$_POST['noisbn']."',
        '".$_POST['penulis']."',
        '".$_POST['penerbit']."',
        '".$_POST['tahun']."',
        '".$_POST['stok']."',
        '".$_POST['hargaPokok']."',
        '".$_POST['hargaJual']."',
        '".$_POST['ppn']."',
        '".$_POST['diskon']."'
    )";

    $db->query($data);
?>