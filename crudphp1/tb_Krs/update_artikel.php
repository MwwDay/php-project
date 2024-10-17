<?php
include 'koneksi.php';

$id   = $_POST['id'];
$nim  = $_POST['nim'];
$id_jadwal = $_POST['id_jadwal'];
$kode_semester   = $_POST['kode_semester'];

$sql = "UPDATE tabel_krs SET nim='$nim', id_jadwal='$id_jadwal', kode_semester='$kode_semester' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
