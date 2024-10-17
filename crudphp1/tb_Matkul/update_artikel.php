<?php
include 'koneksi.php';

$kode_matakuliah = $_POST['kode_matakuliah'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks   = $_POST['sks'];

$sql = "UPDATE tabel_matakuliah SET kode_matakuliah='$kode_matakuliah', nama_matakuliah='$nama_matakuliah', sks='$sks' WHERE kode_matakuliah='$kode_matakuliah'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
