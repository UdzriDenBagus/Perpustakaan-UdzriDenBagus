<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjam</title>
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
        <li class="logout-li"><a class="logout-a" href="index.php">Logout</a></li>
    </ul>
</nav>

<section class="b_buku_edit">
<?php
include "koneksi.php";
$id = $_GET['id'];

$query_mysql = mysqli_query(
    $koneksi,
    "SELECT * FROM peminjam WHERE ID_Peminjam='$id'"
) or die(mysqli_error($koneksi));

while($data = mysqli_fetch_array($query_mysql)){
?>
    <form class="form_buku_edit" action="peminjam_edit_aksi.php" method="post">
        <table class="table_buku_edit">

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">ID Anggota</td>
                <td class="td_buku_edit">
                    <input type="hidden" name="ID_Peminjam" value="<?php echo $data['ID_Peminjam']; ?>">
                    <input type="text" name="ID_Anggota" value="<?php echo $data['ID_Anggota']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">ISBN</td>
                <td class="td_buku_edit">
                    <input type="text" name="ISBN" value="<?php echo $data['ISBN']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">Tanggal Pinjam</td>
                <td class="td_buku_edit">
                    <input type="date" name="Tanggal_Peminjam" value="<?php echo $data['Tanggal_Peminjam']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">Tanggal Kembali</td>
                <td class="td_buku_edit">
                    <input type="date" name="Tanggal_Kembali" value="<?php echo $data['Tanggal_Kembali']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">
                    <input type="submit" value="Simpan">
                </td>
            </tr>

        </table>
    </form>
<?php } ?>
</section>

</body>
</html>
