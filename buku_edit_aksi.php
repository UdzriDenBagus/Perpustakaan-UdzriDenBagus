<?php
    include 'koneksi.php';
    $ISBN = $_POST['id'];
    $Judul = $_POST['Judul'];
    $Pengarang = $_POST['Pengarang'];
    $Penerbit = $_POST['Penerbit'];
    $Tahun = $_POST['Tahun'];
    $Genre = $_POST['Genre'];

    mysqli_query($koneksi, "UPDATE buku SET Judul='$Judul', Pengarang='$Pengarang', Penerbit='$Penerbit', Tahun='$Tahun', Genre='$Genre' WHERE ISBN='$ISBN'");

    header("location:buku.php?pesan=update");
    ?>