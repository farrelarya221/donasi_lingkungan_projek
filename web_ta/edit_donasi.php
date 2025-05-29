<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET['id'])) {
    echo "ID donatur tidak ditemukan.";
    exit();
}

$id = intval($_GET['id']);
$query = mysqli_query($konek, "SELECT * FROM donatur WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_depan     = $_POST['nama_depan'];
    $nama_belakang  = $_POST['nama_belakang'];
    $email          = $_POST['email'];
    $telepon        = $_POST['telepon'];
    $jumlah_donasi  = $_POST['jumlah_donasi'];
    $pesan          = $_POST['pesan'];

    $update = mysqli_query($konek, "UPDATE donatur SET 
        nama_depan = '$nama_depan',
        nama_belakang = '$nama_belakang',
        email = '$email',
        telepon = '$telepon',
        jumlah_donasi = '$jumlah_donasi',
        pesan = '$pesan'
        WHERE id = $id
    ");

    if ($update) {
        header("Location: dashboard_admin.php");
        exit();
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Donatur</title>
    <style>
        body {
            background: #f0fdf4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2e7d32;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #388e3c;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Donatur</h2>
        <form method="POST">
            <label>Nama Depan</label>
            <input type="text" name="nama_depan" value="<?= $data['nama_depan'] ?>" required>

            <label>Nama Belakang</label>
            <input type="text" name="nama_belakang" value="<?= $data['nama_belakang'] ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?= $data['email'] ?>" required>

            <label>Telepon</label>
            <input type="text" name="telepon" value="<?= $data['telepon'] ?>" required>

            <label>Jumlah Donasi</label>
            <input type="number" name="jumlah_donasi" value="<?= $data['jumlah_donasi'] ?>" required>

            <label>Pesan</label>
            <textarea name="pesan"><?= $data['pesan'] ?></textarea>

            <button type="submit">Simpan Perubahan</button>
        </form>
        <a href="dashboard_admin.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>
