<?php
include 'koneksi.php';

//$id = $_POST['id'];
$kode_matakuliah   = $_POST['kode_matakuliah'];
$kode_dosen = $_POST['kode_dosen'];
$hari   = $_POST['hari'];
$jam = $_POST['jam'];

$sql = "INSERT INTO tabel_jadwal (kode_matakuliah, kode_dosen, hari, jam) 
        VALUES ('$kode_matakuliah', '$kode_dosen', '$hari', '$jam')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 align='center'>Proses penambahan data berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\" align='center'>List</a>";
} else {
    echo "<h2 align='center'>Proses penambahan data tidak berhasil</h2>";
    echo "<a href=\"form_artikel.php\" align='center'>Kembali</a>";
}

mysqli_close($conn);
?>
