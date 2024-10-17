<?php
include 'koneksi.php';

echo "
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .button-container {
        margin-top: 10px;
    }
    .button-container .button-wrapper {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .button-container .button-wrapper button {
        margin-right: 10px;
    }
    .button-container a {
        display: inline-block;
        margin-right: 10px;
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }
    .button-container a.edit-button {
        background-color: yellow;
        display: inline-block;
        padding: 6px 12px;
        border: none;
        text-align: center;
        color: black;
        cursor: pointer;
    }
    .button-container a.delete-button {
        background-color: yellow;
        display: inline-block;
        padding: 6px 12px;
        border: none;
        text-align: center;
        color: black;
        cursor: pointer;
    }
    .button-container a:hover {
        background-color: #45a049;
    }
    .search-form {
        margin-bottom: 10px;
    }
    .search-form input[type='text'] {
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .search-form input[type='submit'] {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
";

echo "<div class='search-form'>
    <form action='cari.php' method='POST'>
        <input type='text' name='search' placeholder='Cari Kode Semester...'>
        <input type='submit' value='Cari'>
    </form>
</div>";

$sql    = "SELECT * FROM tabel_semester";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th bgcolor='yellow'>Kode Semester</th>
                <th bgcolor='yellow'>Semester</th>
                <th bgcolor='yellow'>Status</th>
                <th bgcolor='yellow'>Aksi</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['kode_semester']."</td>
                <td>".$row['semester']."</td>
                <td>".$row['status']."</td>
                <td>
                    <div class='button-container'>
                        <div class='button-wrapper'>
                            <a class='edit-button' href='edit_artikel.php?id=".$row['kode_semester']."'>Edit</a>
                            <a class='delete-button' href='delete_artikel.php?id=".$row['kode_semester']."'>Hapus</a>
                        </div>
                    </div>
                </td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada Info.";
}

mysqli_close($conn);
?>

<div class="button-container">
    <a href="form_artikel.php">Tambah</a>
    <a href="../home.php">Kembali</a>
</div>
