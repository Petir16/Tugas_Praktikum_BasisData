<?php
include "koneksi.php";

$ids = $_POST['id'];

$sql = "DELETE FROM data_barang WHERE id=$ids";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil dihapus!");
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
