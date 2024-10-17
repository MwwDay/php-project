<?php
include 'koneksi.php';

$nim     = $_POST['nim'];
$nama_mahasiswa   = $_POST['nama_mahasiswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat   = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO tabel_mahasiswa (nim, nama_mahasiswa, jenis_kelamin, alamat, jurusan) VALUES ('$nim', '$nama_mahasiswa', '$jenis_kelamin', '$alamat', '$jurusan')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
