<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($konek, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($konek, $_POST['deskripsi']);
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $upload_dir = "uploads/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $target_path = $upload_dir . basename($gambar);

    if (move_uploaded_file($tmp_name, $target_path)) {
        $query = "INSERT INTO program (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$target_path')";
        if (mysqli_query($konek, $query)) {
            header("Location: admin_program.php");
            exit;
        } else {
            echo "Gagal menambahkan program ke database.";
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Program</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #e8f5e9);
            margin: 0;
            padding: 0;
        }
        .top-bar {
            background: #4CAF50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .top-bar a {
            background: white;
            color: #4CAF50;
            padding: 6px 14px;
            margin-left: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .top-bar a:hover {
            background: #f1f1f1;
        }
        .form-container {
            max-width: 600px;
            background: white;
            margin: 40px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2e7d32;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #2e7d32;
        }
        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            background: #43a047;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: 100%;
            transition: 0.3s;
        }
        button:hover {
            background: #2e7d32;
        }
    </style>
</head>
<body>

<div class="top-bar">
    <a href="dashboard_admin.php">Kembali ke Dashboard</a>
    <a href="logout.php">Logout</a>
</div>

<div class="form-container">
    <h2>Tambah Program Baru</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="judul">Judul Program:</label>
        <input type="text" name="judul" id="judul" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>

        <label for="gambar">Upload Gambar:</label>
        <input type="file" name="gambar" id="gambar" accept="image/*" required>

        <button type="submit">Tambah Program</button>
    </form>
</div>

</body>
</html>
