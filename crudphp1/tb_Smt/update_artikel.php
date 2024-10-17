<?php
include 'koneksi.php';

$kode_semester = $_POST['kode_semester'];
$semester = $_POST['semester'];
$status   = $_POST['status'];

$sql = "UPDATE tabel_semester SET kode_semester='$kode_semester', semester='$semester', status='$status' WHERE kode_semester='$kode_semester'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Data gagal diupdate";
}

mysqli_close($conn);
?>
