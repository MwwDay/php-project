<?php
include 'koneksi.php';

$kode_matakuliah  = $_GET['id'];
$sql  = "DELETE FROM tabel_matakuliah WHERE kode_matakuliah='$kode_matakuliah'";

if (mysqli_query($conn, $sql)) {
    header('Location: tampil_artikel.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
