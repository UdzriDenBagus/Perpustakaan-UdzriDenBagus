<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- 🔹 NAVBAR -->
    <nav class="navbar">
        <div class="logo">Perpus Udzri</div>
        <ul class="nav-links">
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="pegawai.php">Pegawai</a></li>
            <li><a href="buku.php">Buku</a></li>
            <li><a href="anggota.php">Anggota</a></li>
            <li><a href="peminjam.php">Peminjaman</a></li>
            <li class="logout-li"><a class="logout-a" href="index.php">Logout</a></li>
        </ul>
    </nav>
    <!-- 🔹 AKHIR NAVBAR -->
    <h1>Tabel Anggota</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID ANGGOTA</th>
                <th>NAMA</th>
                <th>NIS</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $koneksi = mysqli_connect(hostname:"localhost",username:"root", password:"",database:"perpus_udzri");
            $data =mysqli_query(mysql: $koneksi, query: "SELECT * FROM anggota");
            while($tampil= mysqli_fetch_array(result: $data)){
                ?>
                <tr>
                    <td><?=$tampil['ID_Anggota'] ?></td>
                    <td><?=$tampil['Nama'] ?></td>
                    <td><?=$tampil['Nis'] ?></td>
                    <td><?=$tampil['Alamat'] ?></td>
                    <td><?=$tampil['Nomor_HP'] ?></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="anggota_edit.php?id=<?php echo $tampil['ID_Anggota']; ?>">Edit</a></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="anggota_hapus.php?id=<?php echo $tampil['ID_Anggota']; ?>">hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class="btn_tambah_u">
        <a href="anggota_tambah.php" class="btn_tambah">Tambah Anggota</a>
    </div>
</body>
</html>