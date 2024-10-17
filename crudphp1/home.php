<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tritya Ishana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    #header {
      background-color: #007bff;
      text-align: center;
      padding: 30px;
      color: white;
    }

    #header h1 {
      margin: 0;
      font-size: 2.5rem;
      letter-spacing: 1.5px;
    }

    #menu {
      background-color: #0056b3;
      padding: 10px 0;
    }

    #menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    #menu ul li {
      margin-right: 20px;
    }

    #menu ul li a {
      color: white;
      text-decoration: none;
      font-size: 1.2rem;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    #menu ul li a:hover {
      background-color: #004089;
    }

    .menu-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 30px;
    }

    .menu-box {
      width: 250px;
      height: 250px;
      background-color: white;
      border: 1px solid #ccc;
      text-align: center;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .menu-icon {
      font-size: 60px;
      color: #007bff;
      margin-bottom: 15px;
    }

    .menu-box h2 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #333;
    }

    .menu-box p {
      font-size: 1rem;
      color: #666;
    }

    .menu-box a {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-box a:hover {
      background-color: #0056b3;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #content {
      padding: 20px;
      text-align: center;
    }

    #footer {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    @media (max-width: 768px) {
      .menu-box {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div id="header">
    <h1>Informasi Perkuliahan</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <div id="content">
    <div id="article_1">
      <h1>Selamat Datang</h1>
      <h2>Ini adalah menu database kampus. Di sini, Anda dapat mengisi data sesuai dengan pilihan yang tersedia.</h2>
      <p>Harap perhatikan data yang bersifat sensitif!</p>
    </div>
  </div>

  <div class="menu-container">
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu Dosen</h2>
      <p>Menampilkan informasi mengenai Dosen</p>
      <a href="tb_Dosen/tampil_artikel.php">Lihat</a>
    </div>
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu Mahasiswa</h2>
      <p>Menampilkan informasi mengenai Mahasiswa</p>
      <a href="tb_Mhs/tampil_artikel.php">Lihat</a>
    </div>
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu MataKuliah</h2>
      <p>Menampilkan informasi mengenai MataKuliah</p>
      <a href="tb_Matkul/tampil_artikel.php">Lihat</a>
    </div>
  </div>

  <div class="menu-container">
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu Semester</h2>
      <p>Menampilkan informasi mengenai Semester</p>
      <a href="tb_Smt/tampil_artikel.php">Lihat</a>
    </div>
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu Jadwal</h2>
      <p>Menampilkan informasi mengenai Jadwal</p>
      <a href="tb_Jadwal/tampil_artikel.php">Lihat</a>
    </div>
    <div class="menu-box">
      <i class="fas fa-user-graduate menu-icon"></i>
      <h2>Menu KRS</h2>
      <p>Menampilkan informasi mengenai KRS</p>
      <a href="tb_Krs/tampil_artikel.php">Lihat</a>
    </div>
  </div>

  <div id="footer">
    <p>Copyright HariHeruHendri 2024</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
