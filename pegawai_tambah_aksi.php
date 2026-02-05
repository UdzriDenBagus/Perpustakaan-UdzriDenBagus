<?php
include 'koneksi.php';

$NIP    = $_POST['NIP'];
$Nama   = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi,
    "INSERT INTO pegawai VALUES(
        '$NIP',
        '$Nama',
        '$Alamat',
        '$Gender'
    )"
);

header("location:pegawai.php?pesan=input");
?>
