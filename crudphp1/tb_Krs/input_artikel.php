<?php
include 'koneksi.php';

//$id = $_POST['id'];
$nim  = $_POST['nim'];
$id_jadwal = $_POST['id_jadwal'];
$kode_semester   = $_POST['kode_semester'];

$sql = "INSERT INTO tabel_krs (nim, id_jadwal, kode_semester) VALUES ('$nim', '$id_jadwal' ,'$kode_semester')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
