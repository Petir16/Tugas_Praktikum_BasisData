<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gudang_vokasi";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// echo "Koneksi berhasil";

// $conn->close();
?>
