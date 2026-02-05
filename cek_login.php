<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = "SELECT * FROM users 
          WHERE Username = '$username' 
          AND Password = '$password'";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {

    $user = mysqli_fetch_assoc($result);
    $_SESSION['logged_in'] = true;
    $_SESSION['ID_User'] = $user['ID_User'];
    $_SESSION['Username'] = $user['Username'];
    $_SESSION['Level'] = $user['Level'];

    // redirect berdasarkan level
    if ($user['Level'] == 'Admin') {
        header("Location: beranda.php");
    } elseif ($user['Level'] == 'Pegawai') {
        header("Location: pegawai.php");
    } else {
        header("Location: anggota.php");
    }
    exit;

} else {
    echo "<script>alert('Username atau Password salah!'); window.location='index.php';</script>"; 
      exit;
}