<?php
include 'koneksi.php';

$id   = $_GET['id'];
$sql  = "DELETE FROM tabel_jadwal WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: tampil_artikel.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
