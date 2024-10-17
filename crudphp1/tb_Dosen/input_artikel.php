<?php
include 'koneksi.php';

$kode_dosen = $_POST['kode_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat   = $_POST['alamat'];
$telepon = $_POST['telepon'];

$sql = "INSERT INTO tabel_dosen (kode_dosen, nama_dosen, jenis_kelamin, alamat, telepon) VALUES ('$kode_dosen', '$nama_dosen', '$jenis_kelamin', '$alamat', '$telepon')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
