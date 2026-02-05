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

    <h1>Tabel Pegawai</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $koneksi = mysqli_connect(hostname:"localhost",username:"root", password:"",database:"perpus_udzri");
            $data =mysqli_query(mysql: $koneksi, query: "SELECT * FROM pegawai");
            while($tampil= mysqli_fetch_array(result: $data)){
                ?>
                <tr>
                    <td><?=$tampil['NIP'] ?></td>
                    <td><?=$tampil['Nama'] ?></td>
                    <td><?=$tampil['Alamat'] ?></td>
                    <td><?=$tampil['Gender'] ?></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="pegawai_edit.php?id=<?php echo $tampil['NIP']; ?>">Edit</a></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="pegawai_hapus.php?id=<?php echo $tampil['NIP']; ?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class="btn_tambah_u">
        <a href="pegawai_tambah.php" class="btn_tambah">Tambah Pegawai</a>
    </div>
</body>
</html>