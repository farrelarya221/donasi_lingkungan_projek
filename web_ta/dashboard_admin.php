<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - GreenHope</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    header {
      background-color: #4CAF50;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    .logout a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
    }

    .logout a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 800px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      margin-top: 0;
      color: #333;
    }

    p {
      color: #555;
    }

    .btn {
      display: inline-block;
      margin: 10px 10px 10px 0;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #388e3c;
    }

    .link-group {
      margin-top: 20px;
    }

    .link-group a {
      display: inline-block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<header>
  <h1>Dashboard Admin</h1>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</header>

<div class="container">
  <a href="beranda.php" class="btn">Lihat Beranda</a>

  <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['admin']) ?>!</h2>
  <p>Silakan pilih menu di bawah untuk mengelola konten situs.</p>

  <div class="link-group">
    <a href="tambah_program.php" class="btn">Tambah Program</a>
    <a href="admin_program.php" class="btn">Kelola Program</a>
    <a href="data.php" class="btn">Kelola Donasi</a>
  </div>
</div>

</body>
</html>
