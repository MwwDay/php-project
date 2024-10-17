<?php
include 'koneksi.php';

$kode_matakuliah = $_GET['id'];
$sql = "SELECT * FROM tabel_matakuliah WHERE kode_matakuliah = '$kode_matakuliah'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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

        input[type="text"] {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 8px;
            transition: border-color 0.3s;
            width: 100%; /* Full width for input */
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745; /* Warna tombol kembali */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .button-container a:hover {
            background-color: #218838; /* Warna hover tombol kembali */
        }

        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-cancel {
            background-color: #dc3545; /* Warna tombol Cancel */
            border-color: #dc3545; /* Warna border tombol Cancel */
            color: white;
        }

        .btn-cancel:hover {
            background-color: #c82333; /* Warna hover tombol Cancel */
            border-color: #c82333; /* Warna border hover tombol Cancel */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Mata Kuliah</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['kode_matakuliah']; ?>">
            <table>
                <tr>
                    <td width='18%'>Kode Mata Kuliah</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <input type="text" name="kode_matakuliah" class="form-control" value="<?php echo $row['kode_matakuliah']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td width='18%'>Nama Mata Kuliah</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $row['nama_matakuliah']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td width='18%'>SKS</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <input type="text" name="sks" class="form-control" value="<?php echo $row['sks']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="button-container">
                        <button type="submit" class="btn btn-custom">Update</button>
                        <button type="reset" class="btn btn-cancel">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
        <div class="button-container">
            <a href="tampil_artikel.php">Kembali</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
