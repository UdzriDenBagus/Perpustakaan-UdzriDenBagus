<?php
include 'koneksi.php';

$ID_Anggota = $_POST['ID_Anggota'];
$Nama       = $_POST['Nama'];
$Nis        = $_POST['Nis'];
$Alamat     = $_POST['Alamat'];
$Nomor_HP   = $_POST['Nomor_HP'];

mysqli_query($koneksi,
    "INSERT INTO anggota VALUES(
        '$ID_Anggota',
        '$Nama',
        '$Nis',
        '$Alamat',
        '$Nomor_HP'
    )"
);

header("location:anggota.php?pesan=input");
?>
