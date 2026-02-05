<?php
include 'koneksi.php';

$ID_Peminjam       = $_POST['ID_Peminjam'];
$ID_Anggota        = $_POST['ID_Anggota'];
$ISBN              = $_POST['ISBN'];
$Tanggal_Peminjam  = $_POST['Tanggal_Peminjam'];
$Tanggal_Kembali   = $_POST['Tanggal_Kembali'];

mysqli_query($koneksi,
    "UPDATE peminjam SET
        ID_Anggota='$ID_Anggota',
        ISBN='$ISBN',
        Tanggal_Peminjam='$Tanggal_Peminjam',
        Tanggal_Kembali='$Tanggal_Kembali'
     WHERE ID_Peminjam='$ID_Peminjam'"
);

header("location:peminjam.php?pesan=update");
?>
