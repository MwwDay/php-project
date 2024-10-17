<?php
include 'koneksi.php';

$kode_dosen = $_GET['id'];
$sql = "DELETE FROM tabel_dosen WHERE kode_dosen='$kode_dosen'";

if (mysqli_query($conn, $sql)) {
    header('Location: tampil_artikel.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>