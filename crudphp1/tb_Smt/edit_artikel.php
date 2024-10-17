<?php
include 'koneksi.php';

$kode_semester = $_GET['id'];
$sql = "SELECT * FROM tabel_semester WHERE kode_semester = '$kode_semester'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Semester</title>
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
        select {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 8px;
            transition: border-color 0.3s;
            width: 100%; /* Full width for input */
        }

        input[type="text"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .tombol,
        .tombol-cancel {
            background-color: #007bff; /* Warna default untuk tombol Update */
            border: none;
            color: white;
            padding: 10px 20px; /* Konsisten padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            width: 120px; /* Ukuran tombol konsisten */
        }

        .tombol:hover {
            background-color: #0056b3;
        }

        .tombol-cancel {
            background-color: #dc3545; /* Warna tombol Cancel */
        }

        .tombol-cancel:hover {
            background-color: #c82333; /* Warna hover tombol Cancel */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Semester</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['kode_semester']; ?>">
            <table>
                <tr>
                    <td>Kode Semester</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode_semester" class="masukan" value="<?php echo $row['kode_semester']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="semester" class="masukan" value="<?php echo $row['semester']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" class="masukan" required>
                            <option value="0" <?php if ($row['status'] == '0') echo 'selected'; ?>>0</option>
                            <option value="1" <?php if ($row['status'] == '1') echo 'selected'; ?>>1</option>
                        </select>
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
