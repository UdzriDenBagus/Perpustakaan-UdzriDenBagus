<?php
include 'koneksi.php';
$id = $_POST['id'];
$ISBN = $_POST['ISBN'];
$Judul = $_POST['Judul'];
$Pengarang = $_POST['Pengarang'];
$Penerbit = $_POST['Penerbit'];
$Tahun = $_POST['Tahun'];
$Genre = $_POST['Genre'];

mysqli_query($koneksi,"INSERT INTO buku VALUES('$ISBN','$Judul','$Pengarang','$Penerbit','$Tahun','$Genre')");

header("location:buku.php?pesan=input")
?>