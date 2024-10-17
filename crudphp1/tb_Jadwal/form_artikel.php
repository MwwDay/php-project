<?php
include 'koneksi.php';

// Mendapatkan data matakuliah
$sqlMatakuliah = "SELECT kode_matakuliah, nama_matakuliah FROM tabel_matakuliah";
$resultMatakuliah = mysqli_query($conn, $sqlMatakuliah);

// Mendapatkan data dosen
$sqlDosen = "SELECT kode_dosen, nama_dosen FROM tabel_dosen";
$resultDosen = mysqli_query($conn, $sqlDosen);

echo "
<h1>Form Jadwal</h1>
<form action='input_artikel.php' method='POST'>
    <table width='100%' border='0' cellspacing=0' cellpadding='0'>
        <tr>
            <td width='18%'>Kode Mata Kuliah</td>
            <td width='2%'>:</td>
            <td width='80%'>
                <select name='kode_matakuliah'>
                    <option value=''>Pilih Kode Mata Kuliah</option>";

mysqli_data_seek($resultMatakuliah, 0);

while ($row = mysqli_fetch_assoc($resultMatakuliah)) {
    echo "<option value='".$row['kode_matakuliah']."'>".$row['nama_matakuliah']."</option>";
}

echo "</select>
            </td>
        </tr>
        <tr>
            <td width='18%'>Kode Dosen</td>
            <td width='2%'>:</td>
            <td width='80%'>
                <select name='kode_dosen'>
                    <option value=''>Pilih Kode Dosen</option>";

while ($row = mysqli_fetch_assoc($resultDosen)) {
    echo "<option value='".$row['kode_dosen']."'>".$row['nama_dosen']."</option>";
}

echo "</select>
            </td>
        </tr>
        <tr>
            <td width='18%'>Hari</td>
            <td width='2%'>:</td>
            <td width='80%'><input type='text' name='hari' size='30' class='masukan'></td>
        </tr>
        <tr>
            <td width='18%'>Jam</td>
            <td width='2%'>:</td>
            <td width='80%'><input type='text' name='jam' size='30' class='masukan'></td>
        </tr>
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
