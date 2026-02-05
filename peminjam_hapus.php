<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM peminjam WHERE ID_Peminjam='$id'");

header("location:peminjam.php?pesan=hapus");
?>
