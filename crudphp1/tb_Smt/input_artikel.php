<?php
include 'koneksi.php';

$kode_semester  = $_POST['kode_semester'];
$semester = $_POST['semester'];
$status   = $_POST['status'];

$sql = "INSERT INTO tabel_semester (kode_semester, semester, status) VALUES ('$kode_semester', '$semester', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
