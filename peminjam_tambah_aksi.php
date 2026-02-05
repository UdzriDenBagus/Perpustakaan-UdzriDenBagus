<?php
include 'koneksi.php';

$ID_Peminjam      = $_POST['ID_Peminjam'];
$ID_Anggota       = $_POST['ID_Anggota'];
$ISBN             = $_POST['ISBN'];
$Tanggal_Peminjam = $_POST['Tanggal_Peminjam'];
$Tanggal_Kembali  = $_POST['Tanggal_Kembali'];

mysqli_query($koneksi,
    "INSERT INTO peminjam VALUES(
        '$ID_Peminjam',
        '$ID_Anggota',
        '$ISBN',
        '$Tanggal_Peminjam',
        '$Tanggal_Kembali'
    )"
);

header("location:peminjam.php?pesan=input");
?>
