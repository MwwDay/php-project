<?php
include "koneksi.php";

$id   = $_GET['id'];
$sql  = "SELECT * FROM tabel_krs WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form KRS</title>
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
        <h1>Form KRS</h1>
        <form name="article" method="POST" action="update_artikel.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <table>
                <tr>
                    <td width='18%'>NIM</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <select name="nim" class="form-select" required>
                            <?php
                            $sqlMahasiswa = "SELECT nim FROM tabel_mahasiswa";
                            $resultMahasiswa = mysqli_query($conn, $sqlMahasiswa);

                            while ($row_mahasiswa = mysqli_fetch_assoc($resultMahasiswa)) {
                                $selected = ($row_mahasiswa['nim'] == $row['nim']) ? "selected" : "";
                                ?>
                                <option value="<?php echo $row_mahasiswa['nim']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row_mahasiswa['nim']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width='18%'>ID Jadwal</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <select name="id_jadwal" class="form-select" required>
                            <?php
                            $sqlJadwal = "SELECT id FROM tabel_jadwal";
                            $resultJadwal = mysqli_query($conn, $sqlJadwal);

                            while ($row_jadwal = mysqli_fetch_assoc($resultJadwal)) {
                                $selected = ($row_jadwal['id'] == $row['id_jadwal']) ? "selected" : "";
                                ?>
                                <option value="<?php echo $row_jadwal['id']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row_jadwal['id']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width='18%'>Kode Semester</td>
                    <td width='2%'>:</td>
                    <td width='80%'>
                        <select name="kode_semester" class="form-select" required>
                            <?php
                            $sqlSemester = "SELECT kode_semester FROM tabel_semester";
                            $resultSemester = mysqli_query($conn, $sqlSemester);

                            while ($row_semester = mysqli_fetch_assoc($resultSemester)) {
                                $selected = ($row_semester['kode_semester'] == $row['kode_semester']) ? "selected" : "";
                                ?>
                                <option value="<?php echo $row_semester['kode_semester']; ?>" <?php echo $selected; ?>>
                                    <?php echo $row_semester['kode_semester']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
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
