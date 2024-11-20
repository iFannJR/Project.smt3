<?php
// Konfigurasi koneksi database
$host = 'localhost';      // Alamat host database
$user = 'root';           // Username database
$password = 'root';           // Password database
$dbname = 'galon_super'; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur charset agar mendukung UTF-8
$conn->set_charset("utf8");
?>
