<?php
include "koneksi.php";

$id     = $_POST['ID_Anggota'];
$nama   = $_POST['Nama'];
$nis    = $_POST['Nis'];
$alamat = $_POST['Alamat'];
$nomor  = $_POST['Nomor_HP'];

mysqli_query($koneksi,
    "UPDATE anggota SET
        Nama='$nama',
        Nis='$nis',
        Alamat='$alamat',
        Nomor_HP='$nomor'
     WHERE ID_Anggota='$id'"
);

header("location:anggota.php");
?>
