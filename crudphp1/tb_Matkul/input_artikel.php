<?php
include 'koneksi.php';

$kode_matakuliah  = $_POST['kode_matakuliah'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks   = $_POST['sks'];

$sql = "INSERT INTO tabel_matakuliah (kode_matakuliah, nama_matakuliah, sks) VALUES ('$kode_matakuliah', '$nama_matakuliah', '$sks')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
