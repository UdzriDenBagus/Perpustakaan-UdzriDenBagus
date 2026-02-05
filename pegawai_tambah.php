<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Pegawai</title>
</head>
<body class="tambah_utama">

<!-- 🔹 NAVBAR -->
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
<!-- 🔹 AKHIR NAVBAR -->

<section class="tambah_buku">
<form action="pegawai_tambah_aksi.php" method="post">

    <div class="masukkan">
        <label class="label_tambah">Tambah NIP</label><br>
        <input type="text" name="NIP" class="i_t_b" required>
    </div>

    <div class="masukkan">
        <label class="label_tambah">Tambah Nama</label><br>
        <input type="text" name="Nama" class="i_t_b" required>
    </div>

    <div class="masukkan">
        <label class="label_tambah">Tambah Alamat</label><br>
        <input type="text" name="Alamat" class="i_t_b" required>
    </div>

    <div class="masukkan">
        <label class="label_tambah">Tambah Gender</label><br>
        <select name="Gender" class="i_t_b" required>
            <option value="">-- Pilih Gender --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <br>
    <button type="submit" class="b_buku_tmbh">Tambah Pegawai</button>

</form>
</section>

</body>
</html>