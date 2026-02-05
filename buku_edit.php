<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
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
    <section class="b_buku_edit">
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($koneksi,"SELECT * FROM buku WHERE ISBN='$id'");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <form class="form_buku_edit" action="buku_edit_aksi.php" method="post">
            <table class="table_buku_edit">
                <tr class="tr_buku_edit">
                     <td class="td_buku_edit">Judul</td>
                        <td class="td_buku_edit">
                        <input type="hidden" name="id" value="<?php echo $data['ISBN'] ?>">
                        <input type="text" name="Judul" value="<?php echo $data['Judul'] ?>">
                    </td>
                </tr>
                <tr class="tr_buku_edit">
                    <td class="td_buku_edit">Pengarang</td>
                    <td class="td_buku_edit"><input type="text" name="Pengarang" value="<?php echo $data['Pengarang'] ?>"></td>
                </tr>
                <tr class="tr_buku_edit">
                    <td class="td_buku_edit">Penerbit</td>
                    <td class="td_buku_edit"><input type="text" name="Penerbit" value="<?php echo $data['Penerbit'] ?>"></td>
                </tr>
                <tr class="tr_buku_edit">
                    <td class="td_buku_edit">Tahun</td>
                    <td class="td_buku_edit"><input type="text" name="Tahun" value="<?php echo $data['Tahun'] ?>"></td>
                </tr>
                <tr class="tr_buku_edit">
                    <td class="td_buku_edit">Genre</td>
                    <td class="td_buku_edit"><input type="text" name="Genre" value="<?php echo $data['Genre'] ?>"></td>
                </tr>
                    <tr class="tr_buku_edit">
                    <td class="td_buku_edit"><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </section>   
</body>
</html>