<?php
include 'koneksi.php';

$username = $_POST['Username'];
$password = $_POST['password'];

$sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

$success = mysqli_query($konek, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Registrasi</title>
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

    a.login-link {
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

    a.login-link:hover {
      background-color: #388e3c;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <?php if ($success): ?>
    <h1>Registrasi Berhasil!</h1>
    <p>Akun Anda telah berhasil didaftarkan.</p>
    <a class="login-link" href="index.php">Login di sini</a>
  <?php else: ?>
    <h1 class="error">Registrasi Gagal!</h1>
    <p>Terjadi kesalahan saat registrasi:<br><?= mysqli_error($konek); ?></p>
  <?php endif; ?>
</div>

</body>
</html>

<?php
mysqli_close($konek);
?>
