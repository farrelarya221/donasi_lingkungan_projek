<?php
include "koneksi.php";

$nama_depan     = $_POST['Nama_depan'];
$nama_belakang  = $_POST['Nama_belakang'];
$email          = $_POST['Email'];
$telepon        = $_POST['nomer'];
$jumlah_donasi  = (int) $_POST['Nominal'];
$pesan          = $_POST['pesan'];

$query = mysqli_query($konek, "
    INSERT INTO donatur (nama_depan, nama_belakang, email, telepon, jumlah_donasi, pesan)
    VALUES ('$nama_depan', '$nama_belakang', '$email', '$telepon', '$jumlah_donasi', '$pesan')
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Terima Kasih</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 100px auto;
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    h1 {
      color: #2e7d32;
    }

    p {
      font-size: 1.1rem;
      color: #555;
      margin-top: 20px;
      line-height: 1.6;
    }

    a.logout-link {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    a.logout-link:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>

<div class="container">
  <?php if ($query): ?>
    <h1>Terima Kasih!</h1>
    <p>
      Donasi Anda sebesar <strong>Rp<?= number_format($jumlah_donasi, 0, ',', '.') ?></strong> telah tercatat.<br>
      Terima kasih telah menjadi bagian dari perubahan positif untuk lingkungan.
    </p>
    <a class="logout-link" href="home.php">Kembali ke Beranda</a>
  <?php else: ?>
    <h1>Gagal!</h1>
    <p>Proses input gagal. Silakan coba lagi nanti.</p>
  <?php endif; ?>
</div>

</body>
</html>
