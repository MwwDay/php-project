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
<h1>Form Semester</h1>
<form action="input_artikel.php" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>Kode Semester</td>
            <td>:</td>
            <td><input type="text" name="kode_semester" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td width="18%">Semester</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="semester" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td width="18%">Status</td>
            <td width="2%">:</td>
            <td width="80%">
                <select name="status">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </td>
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

