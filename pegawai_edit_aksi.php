<?php
include 'koneksi.php';

$NIP    = $_POST['id'];
$Nama   = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Gender = $_POST['Gender'];

mysqli_query(
    $koneksi,
    "UPDATE pegawai SET 
        Nama='$Nama',
        Alamat='$Alamat',
        Gender='$Gender'
     WHERE NIP='$NIP'"
);

header("location:pegawai.php?pesan=update");
?>
