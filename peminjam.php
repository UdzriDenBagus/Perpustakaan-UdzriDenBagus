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
    <h1>Tabel Peminjam</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID PEMINJAM</th>
                <th>ID ANGGOTA</th>
                <th>ISBN</th>
                <th>TANGGAL PEMINJAM</th>
                <th>TANGGAL KEMBALI</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $koneksi = mysqli_connect(hostname:"localhost",username:"root", password:"",database:"perpus_udzri");
            $data =mysqli_query(mysql: $koneksi, query: "SELECT * FROM peminjam");
            while($tampil= mysqli_fetch_array(result: $data)){
                ?>
                <tr>
                    <td><?=$tampil['ID_Peminjam'] ?></td>
                    <td><?=$tampil['ID_Anggota'] ?></td>
                    <td><?=$tampil['ISBN'] ?></td>
                    <td><?=$tampil['Tanggal_Peminjam'] ?></td>
                    <td><?=$tampil['Tanggal_Kembali'] ?></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="peminjam_edit.php?id=<?php echo $tampil['ID_Peminjam']; ?>">Edit</a></td>
                    <td class="td_edit_buku"><a class="a_edit_buku" href="peminjam_hapus.php?id=<?php echo $tampil['ID_Peminjam']; ?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class="btn_tambah_u">
        <a href="peminjam_tambah.php" class="btn_tambah">Tambah peminjam</a>
    </div>
</body>
</html>