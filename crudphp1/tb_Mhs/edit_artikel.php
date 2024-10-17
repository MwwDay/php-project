<?php
include 'koneksi.php';

$nim = $_GET['id'];
$sql = "SELECT * FROM tabel_mahasiswa WHERE nim = '$nim'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 8px;
            transition: border-color 0.3s;
            width: 100%; /* Full width for input */
        }

        input[type="text"]:focus,
        select:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .tombol {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .tombol:hover {
            background-color: #0056b3;
        }

        .tombol-cancel {
            background-color: #dc3545; /* Warna tombol Cancel */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .tombol-cancel:hover {
            background-color: #c82333; /* Warna hover tombol Cancel */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Mahasiswa</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['nim']; ?>">
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" class="masukan" value="<?php echo $row['nim']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_mahasiswa" class="masukan" value="<?php echo $row['nama_mahasiswa']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_kelamin" class="masukan" required>
                            <option value="P" <?php if ($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                            <option value="L" <?php if ($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" class="masukan" rows="3" required><?php echo $row['alamat']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="jurusan" class="masukan" value="<?php echo $row['jurusan']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="button-container">
                        <input type="submit" name="masuk" value="Update" class="tombol">
                        <input type="reset" name="hapus" value="Cancel" class="tombol-cancel">
                    </td>
                </tr>
            </table>
        </form>
        <div class="button-container">
            <a href="tampil_artikel.php" class="tombol">Kembali</a>
        </div>
    </div>
</body>
</html>
