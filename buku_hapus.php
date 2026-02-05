<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM buku WHERE ISBN='$id'");

    header("location:buku.php?pesan=hapus");
    ?>