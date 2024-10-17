<?php
include 'koneksi.php';

$kode_dosen = $_POST['kode_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat   = $_POST['alamat'];
$telepon = $_POST['telepon'];

$sql = "UPDATE tabel_dosen SET kode_dosen='$kode_dosen', nama_dosen='$nama_dosen', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telepon='$telepon' WHERE kode_dosen='$kode_dosen'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
