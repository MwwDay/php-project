<?php
include 'koneksi.php';

echo "
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

    td a {
        text-decoration: none;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        font-size: 0.9rem;
    }

    td a.edit {
        background-color: #ffc107;
    }

    td a.edit:hover {
        background-color: #e0a800;
    }

    td a.delete {
        background-color: #dc3545;
    }

    td a.delete:hover {
        background-color: #c82333;
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
</style>";

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql    = "SELECT * FROM tabel_mahasiswa WHERE nama_mahasiswa LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['nim']."</td>
                    <td>".$row['nama_mahasiswa']."</td>
                    <td>".$row['jenis_kelamin']."</td>
                    <td>".$row['alamat']."</td>
                    <td>".$row['jurusan']."</td>
                    <td>
                        <a href='edit_artikel.php?id=".$row['nim']."' class='edit'>Edit</a>
                        <a href='delete_artikel.php?id=".$row['nim']."' class='delete'>Hapus</a>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
}

mysqli_close($conn);
?>

<div class="button-container">
    <a href='tampil_artikel.php'>Kembali</a>
</div>
