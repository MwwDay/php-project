<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'crudkampus';

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>