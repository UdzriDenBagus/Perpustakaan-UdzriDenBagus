<?php
include 'koneksi.php';

$data_anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
$data_buku    = mysqli_query($koneksi, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Peminjam</title>
</head>
<body class="tambah_utama">

<nav class="navbar">
    <div class="logo">Perpus Udzri</div>
    <ul class="nav-links">
        <li><a href="beranda.php">Beranda</a></li>
        <li><a href="pegawai.php">Pegawai</a></li>
        <li><a href="buku.php">Buku</a></li>
        <li><a href="anggota.php">Anggota</a></li>
        <li><a href="peminjam.php">Peminjaman</a></li>
        <li class="logout-li"><a class="logout-a" href="index.html">Logout</a></li>
    </ul>
</nav>

<section class="tambah_buku">
<form action="peminjam_tambah_aksi.php" method="post">

    <!-- ID PEMINJAM -->
    <div class="masukkan">
        <label class="label_tambah">Tambah ID Peminjam</label><br>
        <input type="text" name="ID_Peminjam" class="i_t_b" required>
    </div>

    <!-- ID ANGGOTA -->
    <div class="masukkan">
        <label class="label_tambah">Tambah ID Anggota</label><br>
        <select name="ID_Anggota" class="i_t_b" required>
            <option value="">-- Pilih Anggota --</option>
            <?php while($a = mysqli_fetch_assoc($data_anggota)) { ?>
                <option value="<?= $a['ID_Anggota']; ?>">
                    <?= $a['ID_Anggota']; ?> - <?= $a['Nama']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- ISBN -->
    <div class="masukkan">
        <label class="label_tambah">Tambah ISBN</label><br>
        <select name="ISBN" class="i_t_b" required>
            <option value="">-- Pilih Buku --</option>
            <?php while($b = mysqli_fetch_assoc($data_buku)) { ?>
                <option value="<?= $b['ISBN']; ?>">
                    <?= $b['ISBN']; ?> - <?= $b['Judul']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <!-- TANGGAL -->
    <div class="masukkan">
        <label class="label_tambah">Tanggal Peminjam</label><br>
        <input type="date" name="Tanggal_Peminjam" class="i_t_b" required>
    </div>

    <div class="masukkan">
        <label class="label_tambah">Tanggal Kembali</label><br>
        <input type="date" name="Tanggal_Kembali" class="i_t_b" required>
    </div>

    <br>
    <button type="submit" class="b_buku_tmbh">Tambah Peminjam</button>

</form>
</section>

</body>
</html>
