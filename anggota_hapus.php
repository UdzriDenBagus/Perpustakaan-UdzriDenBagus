<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM anggota WHERE ID_Anggota='$id'");

    header("location:anggota.php?pesan=hapus");
    ?>