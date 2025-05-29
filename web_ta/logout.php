<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keluar dari Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            text-align: center;
            padding: 80px;
        }

        .logout-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #4CAF50;
        }

        .btn-home {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>

<div class="logout-box">
    <h2>Anda telah logout</h2>
    <p>Terima kasih telah menggunakan GreenHope.</p>
    <a href="index.php" class="btn-home">Kembali ke Halaman Utama</a>
</div>

</body>
</html>
