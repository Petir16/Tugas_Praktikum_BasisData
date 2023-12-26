<?php
include "koneksi.php";

$ids = $_POST['id'];
$nama_barang = $_POST['nama_barang_baru'];
$jumlah = $_POST['jumlah_baru'];

// Menyimpan data ke database
$sql = "UPDATE data_barang SET nama_barang='$nama_barang', jumlah='$jumlah' WHERE id=$ids";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil diubah!");
    window.location="gudang_vokasi.php";
    </script>';
    exit();
} else {
    echo 
    '<script language="javascript">
    alert ("[ERROR] Error SQL Query!");
    window.location="gudang_vokasi.php";
    </script>';
    exit();
}

$conn->close();
?>
