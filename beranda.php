<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>beranda</title>
</head>
<body>

    <!-- 🔹 NAVBAR -->
    <nav class="navbar">
        <div class="logo">Perpus Udzri</div>
        <ul class="nav-links">
            <li><a href="beranda.php" class="active">Beranda</a></li>
            <li><a href="pegawai.php">Pegawai</a></li>
            <li><a href="buku.php">Buku</a></li>
            <li><a href="anggota.php">Anggota</a></li>
            <li><a href="peminjam.php">Peminjaman</a></li>
            <li class="logout-li"><a class="logout-a" href="index.php">Logout</a></li>
        </ul>
    </nav>
    <!-- 🔹 AKHIR NAVBAR -->

    <!-- 🔹 ISI DASHBOARD -->
    <div class="dashboard-container">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Halo Admin 👋, ini adalah tampilan utama sistem <b>Perpustakaan Udzri</b>.</p>

        <div class="cards">
            <div class="card">
                <h3>Data Pegawai</h3>
                <p>Kelola informasi pegawai perpustakaan.</p>
                <a href="pegawai.php" class="btn">Lihat Data</a>
            </div>
            <div class="card">
                <h3>Data Buku</h3>
                <p>Lihat dan atur koleksi buku perpustakaan.</p>
                <a href="buku.php" class="btn">Lihat Data</a>
            </div>
            <div class="card">
                <h3>Data Anggota</h3>
                <p>Kelola data anggota yang terdaftar.</p>
                <a href="anggota.php" class="btn">Lihat Data</a>
            </div>
            <div class="card">
                <h3>Data Peminjaman</h3>
                <p>Kelola data Peminjam yang terdaftar.</p>
                <a href="peminjam.php" class="btn">Lihat Data</a>
            </div>
        </div>
    </div>

</body>
</html>
