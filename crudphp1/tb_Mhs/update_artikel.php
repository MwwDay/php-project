<?php
include 'koneksi.php';

$nim     = $_POST['nim'];
$nama_mahasiswa   = $_POST['nama_mahasiswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat   = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE tabel_mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', jurusan='$jurusan' WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
