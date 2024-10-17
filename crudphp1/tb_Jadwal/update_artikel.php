<?php
include 'koneksi.php';

$id      = $_POST['id'];
$kode_matakuliah   = $_POST['kode_matakuliah'];
$kode_dosen = $_POST['kode_dosen'];
$hari   = $_POST['hari'];
$jam = $_POST['jam'];

$sql = "UPDATE tabel_jadwal SET id = '$id', kode_matakuliah='$kode_matakuliah', kode_dosen='$kode_dosen', hari='$hari', jam='$jam' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
