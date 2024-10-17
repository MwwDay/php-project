<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Mahasiswa</h1>
<form action="input_artikel.php" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td width="18%">Nama Mahasiswa</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="nama_mahasiswa" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td width="18%">Jenis Kelamin</td>
            <td width="2%">:</td>
            <td width="80%">
                <select name="jenis_kelamin">
                    <option value="P">P</option>
                    <option value="L">L</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="8" cols="45"></textarea></td>
        </tr>
        <tr>
            <td width="18%">Jurusan</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="jurusan" size="30" class="masukan"></td>
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
                <input type="submit" name="Submit" value="Add" class="tombol">
                <input type="reset" name="batal" value="Reset" class="tombol">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

