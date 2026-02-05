<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
        <form action="buku_tambah_aksi.php" method="post">
            <div class="masukkan">
                <label class="label_tambah" for="ISBN"> Tambah ISBN </label>
                <br>
                <input class="i_t_b" type="text" name="ISBN" id="ISBN">
                <br>
            </div>
            <div class="masukkan">
                <label class="label_tambah" for="Judul"> Tambah Judul </label>
                <br>
                <input class="i_t_b" type="text" name="Judul" id="Judul">
                <br>
            </div>
            <div class="masukkan">
                <label class="label_tambah" for="Pengarang"> Tambah Pengarang </label>
                <br>
                <input class="i_t_b" type="text" name="Pengarang" id="Pengarang">
                <br>
            </div>
            <div class="masukkan">
                <label class="label_tambah" for="Penerbit"> Tambah Penerbit </label>
                <br>
                <input class="i_t_b" type="text" name="Penerbit" id="Penerbit">
                <br>
            </div>
            <div class="masukkan">
                <label class="label_tambah" for="Tahun"> Tambah Tahun </label>
                <br>
                <input class="i_t_b" type="text" name="Tahun" id="Tahun">
                <br>
            </div>
            <div class="masukkan">
                <label class="label_tambah" for="Genre"> Tambah Genre </label>
                <br>
                <input class="i_t_b" type="text" name="Genre" id="Genre">
                <br>
            </div>
            <br>
            <button type="submit" class="b_buku_tmbh">Tambah Buku</button>
        </form>
     </section>
    
</body>
</html>