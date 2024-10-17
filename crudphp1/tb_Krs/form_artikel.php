<?php
include 'koneksi.php';

// Mendapatkan data matahasiswa
$sqlMahasiswa = "SELECT nim FROM tabel_mahasiswa";
$resultMahasiswa = mysqli_query($conn, $sqlMahasiswa);

// Mendapatkan data jadwal
$sqlJadwal = "SELECT id FROM tabel_jadwal";
$resultJadwal = mysqli_query($conn, $sqlJadwal);

// Mendapatkan data semester
$sqlSemester = "SELECT kode_semester FROM tabel_semester";
$resultSemester = mysqli_query($conn, $sqlSemester);

echo "
<h1>Form KRS</h1>
<form action='input_artikel.php' method='POST'>
    <table width='100%' border='0' cellspacing=0' cellpadding='0'>
        <tr>
            <td width='18%'>NIM</td>
            <td width='2%'>:</td>
            <td width='80%'>
                <select name='nim'>
                    <option value=''>Pilih NIM</option>";

mysqli_data_seek($resultMahasiswa, 0);

while ($row = mysqli_fetch_assoc($resultMahasiswa)) {
    echo "<option value='".$row['nim']."'>".$row['nim']."</option>";
}

echo "</select>
            </td>
        </tr>
        <tr>
            <td width='18%'>ID Jadwal</td>
            <td width='2%'>:</td>
            <td width='80%'>
                <select name='id_jadwal'>
                    <option value=''>Pilih ID Jadwal</option>";

while ($row = mysqli_fetch_assoc($resultJadwal)) {
    echo "<option value='".$row['id']."'>".$row['id']."</option>";
}

echo "</select>
            </td>
        </tr>
        <tr>
            <td width='18%'>Kode Semester</td>
            <td width='2%'>:</td>
            <td width='80%'>
                <select name='kode_semester'>
                    <option value=''>Pilih Kode Semester</option>";

while ($row = mysqli_fetch_assoc($resultSemester)) {
    echo "<option value='".$row['kode_semester']."'>".$row['kode_semester']."</option>";
}

echo "</select>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type='submit' name='Submit' value='Add' class='tombol'>
                <input type='reset' name='batal' value='Reset' class='tombol'>
            </td>
        </tr>
    </table>
</form>";

mysqli_close($conn);
?>
