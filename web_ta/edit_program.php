<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET['id'])) {
    die("ID program tidak ditemukan.");
}

$id = $_GET['id'];
$query = mysqli_query($konek, "SELECT * FROM program WHERE id = '$id'");
if (!$query || mysqli_num_rows($query) == 0) {
    die("Data program tidak ditemukan.");
}

$data = mysqli_fetch_assoc($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $data['gambar']; 

    if ($_FILES['gambar']['name']) {
        $namaFile = $_FILES['gambar']['name'];
        $tmpFile = $_FILES['gambar']['tmp_name'];
        $folderTujuan = "gambar/" . $namaFile;

        if (move_uploaded_file($tmpFile, $folderTujuan)) {
            $gambar = $folderTujuan;
        }
    }

    $update = mysqli_query($konek, "UPDATE program SET 
        judul = '$judul',
        deskripsi = '$deskripsi',
        gambar = '$gambar'
        WHERE id = '$id'");

    if ($update) {
        header("Location: dashboard_admin.php");
        exit();
    } else {
        echo "<div class='notif error'>Gagal memperbarui data.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Program</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 30px;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #388e3c;
        }

        .gambar-preview {
            margin-top: 15px;
        }

        .gambar-preview img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .notif.error {
            max-width: 600px;
            margin: 10px auto;
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Edit Program</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Judul Program:</label>
    <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required>

    <label>Deskripsi:</label>
    <textarea name="deskripsi" rows="5" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>

    <label>Gambar Saat Ini:</label>
    <div class="gambar-preview">
        <?php if (!empty($data['gambar'])): ?>
            <img src="<?= $data['gambar'] ?>" alt="Gambar Program">
        <?php else: ?>
            <p>Tidak ada gambar.</p>
        <?php endif; ?>
    </div>

    <label>Ganti Gambar (opsional):</label>
    <input type="file" name="gambar" accept="image/*">

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
