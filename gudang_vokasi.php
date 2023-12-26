<?php
include "koneksi.php";
$sql = "SELECT * FROM data_barang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Sistem Informasi Gudang Unikama</title>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/Logo_Unikama.png" alt="Logo Unikama">
        <h1>Sistem Informasi Gudang Unikama</h1>
    </div>

    <div class="container">
        <h2>Daftar Barang di Gudang</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            echo
            '<tr>'.
                '<td>'.$row["id"].'</td>'.
                '<td>'.$row["nama_barang"].'</td>'.
                '<td>'.$row["jumlah"].'</td>'.
            '</tr>';
            }
            ?>
        </table>

        <h2>Tambah Barang</h2>
        <form action="tambah_post.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id"><br><br>
            <label for="name">Nama Barang:</label>
            <input type="text" id="name" name="nama_barang"><br><br>
            <label for="quantity">Jumlah:</label>
            <input type="number" id="quantity" name="jumlah"><br><br>
            <input type="submit" value="Tambah">
        </form>

        <h2>Update Jumlah Barang</h2>
        <form action="ubah_post.php" method="POST">
            <label for="update-id">ID Barang:</label>
            <input type="text" id="id" name="id"><br><br>
            <label for="update-id">Nama Barang:</label>
            <input type="text" id="nama_barang_baru" name="nama_barang_baru"><br><br>
            <label for="new-quantity">Jumlah Baru:</label>
            <input type="number" id="jumlah_baru" name="jumlah_baru"><br><br>
            <input type="submit" value="Update">
        </form>

        <h2>Hapus Barang</h2>
        <form action="hapus_post.php" method="POST">
            <label for="delete-id">ID Barang:</label>
            <input type="text" id="id" name="id"><br><br>
            <input type="submit" value="Hapus">
        </form>
    </div>
</body>