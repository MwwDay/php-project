<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Parkir</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Aplikasi Parkir</h1>

    <?php
    // Simulasi data parkir
    $parkir = array(
        array('nomor' => 'A1', 'jenis' => 'Mobil', 'waktu' => '2023-07-05 08:30:00'),
        array('nomor' => 'B2', 'jenis' => 'Motor', 'waktu' => '2023-07-05 09:15:00'),
        array('nomor' => 'C3', 'jenis' => 'Mobil', 'waktu' => '2023-07-05 10:00:00')
    );
    ?>

    <h2>Data Parkir</h2>
    <table>
        <tr>
            <th>Nomor Kendaraan</th>
            <th>Jenis Kendaraan</th>
            <th>NoPol</th>
            <th>Alamat Blok/NO </th>
            <th>Waktu Masuk</th>
        </tr>
        <?php foreach ($parkir as $data): ?>
        <tr>
            <td><?php echo $data['nomor']; ?></td>
            <td><?php echo $data['jenis']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Form Parkir</h2>
    <form action="proses_parkir.php" method="post">
        <label for="nomor">Nomor Kendaraan:</label>
        <input type="text" id="nomor" name="nomor" required><br><br>
        
        <label for="jenis">Jenis Kendaraan:</label>
        <select id="jenis" name="jenis" required>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
        </select><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
