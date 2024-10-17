<?php
include 'koneksi.php';

$kode_semester  = $_GET['id'];
$sql  = "DELETE FROM tabel_semester WHERE kode_semester='$kode_semester'";

if (mysqli_query($conn, $sql)) {
    header('Location: tampil_artikel.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
