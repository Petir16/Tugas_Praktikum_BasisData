<?php
include "koneksi.php";

$ids = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];

$cekduplicate = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM data_barang WHERE id='$ids'"));

if($cekduplicate > 0)
{
    echo '<script language="javascript">
    alert ("[ERROR] Data sudah ada!");
    window.location="gudang_vokasi.php";
    </script>';
    exit();
}

// Menyimpan data ke database
$sql = "INSERT INTO data_barang (id, nama_barang, jumlah) VALUES ('$ids', '$nama_barang', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil ditambahkan!");
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
