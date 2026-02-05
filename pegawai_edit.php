<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit Pegawai</title>
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
$query_mysql = mysqli_query($koneksi,
    "SELECT * FROM pegawai WHERE NIP='$id'"
);

while($data = mysqli_fetch_array($query_mysql)){
?>
    <form class="form_buku_edit" action="pegawai_edit_aksi.php" method="post">
        <table class="table_buku_edit">

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">Nama</td>
                <td class="td_buku_edit">
                    <input type="hidden" name="id" value="<?php echo $data['NIP']; ?>">
                    <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">Alamat</td>
                <td class="td_buku_edit">
                    <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>">
                </td>
            </tr>

            <tr class="tr_buku_edit">
                <td class="td_buku_edit">Gender</td>
                <td class="td_buku_edit">
                    <select name="Gender">
                        <option value="Laki-laki" <?php if($data['Gender']=='Laki-laki') echo 'selected'; ?>>
                            Laki-laki
                        </option>
                        <option value="Perempuan" <?php if($data['Gender']=='Perempuan') echo 'selected'; ?>>
                            Perempuan
                        </option>
                    </select>
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
