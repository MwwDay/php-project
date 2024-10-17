<?php
include "koneksi.php";

$id   = $_GET['id'];
$sql  = "SELECT * FROM tabel_jadwal WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jadwal</title>
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
        <h1>Form Jadwal</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <table>
                <tr>
                    <td><label for="kode_matakuliah">Kode Mata Kuliah</label></td>
                    <td>:</td>
                    <td>
                        <select name="kode_matakuliah" id="kode_matakuliah" class="form-select" required>
                            <?php
                            $sqlMatakuliah = "SELECT kode_matakuliah, nama_matakuliah FROM tabel_matakuliah";
                            $resultMatakuliah = mysqli_query($conn, $sqlMatakuliah);

                            while ($row_matakuliah = mysqli_fetch_assoc($resultMatakuliah)) {
                                $selected = ($row_matakuliah['kode_matakuliah'] == $row['kode_matakuliah']) ? "selected" : "";
                                ?>
                                <option value="<?php echo $row_matakuliah['kode_matakuliah']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row_matakuliah['nama_matakuliah']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="kode_dosen">Kode Dosen</label></td>
                    <td>:</td>
                    <td>
                        <select name="kode_dosen" id="kode_dosen" class="form-select" required>
                            <?php
                            $sqlDosen = "SELECT kode_dosen, nama_dosen FROM tabel_dosen";
                            $resultDosen = mysqli_query($conn, $sqlDosen);

                            while ($row_dosen = mysqli_fetch_assoc($resultDosen)) {
                                $selected = ($row_dosen['kode_dosen'] == $row['kode_dosen']) ? "selected" : "";
                                ?>
                                <option value="<?php echo $row_dosen['kode_dosen']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row_dosen['nama_dosen']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="hari">Hari</label></td>
                    <td>:</td>
                    <td><input type="text" name="hari" id="hari" class="form-control" value="<?php echo $row['hari']; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="jam">Jam</label></td>
                    <td>:</td>
                    <td><input type="text" name="jam" id="jam" class="form-control" value="<?php echo $row['jam']; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="button-container">
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
