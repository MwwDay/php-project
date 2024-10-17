<?php
include 'koneksi.php';

$nim  = $_GET['id'];
$sql  = "DELETE FROM tabel_mahasiswa WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    header('Location: tampil_artikel.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
