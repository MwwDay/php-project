<?php
include 'koneksi.php';

$kode_dosen  = $_GET['id'];
$sql  = "SELECT * FROM tabel_dosen WHERE kode_dosen = '$kode_dosen'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
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

        tr {
            transition: background-color 0.3s ease;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        input[type="text"],
        select,
        textarea {
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

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .button-container a:hover {
            background-color: #218838;
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Dosen</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['kode_dosen']; ?>">
            <table>
                <tr>
                    <td><label for="kode_dosen">Kode Dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="kode_dosen" id="kode_dosen" class="form-control" value="<?php echo $row['kode_dosen']; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="nama_dosen">Nama Dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama_dosen" id="nama_dosen" class="form-control" value="<?php echo $row['nama_dosen']; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                            <option value="P" <?php if ($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                            <option value="L" <?php if ($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td><textarea name="alamat" id="alamat" class="form-control" rows="3" required><?php echo $row['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td><label for="telepon">Nomor Telepon</label></td>
                    <td>:</td>
                    <td><input type="text" name="telepon" id="telepon" class="form-control" value="<?php echo $row['telepon']; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="button-container">
                        <button type="submit" class="btn btn-custom">Update</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
