<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
}
$programs = mysqli_query($konek, "SELECT * FROM program");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Program</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #e8f5e9);
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background: #4CAF50;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar a {
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-weight: bold;
            margin-left: 10px;
        }

        .add-btn {
            background: white;
            color: #4CAF50;
        }

        .dashboard-btn {
            background: white;
            color: #2196F3;
        }

        .logout-btn {
            background: white;
            color: #f44336;
        }

        h2 {
            text-align: center;
            margin: 30px 0 10px;
            color: #2e7d32;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        img {
            width: 100px;
            height: auto;
            object-fit: cover;
        }

        td a.edit {
            color: #2196F3;
            font-weight: bold;
            margin-right: 8px;
        }

        td a.hapus {
            color: #f44336;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            table, th, td {
                font-size: 14px;
            }
            img {
                width: 70px;
            }
        }
    </style>
</head>
<body>

<div class="top-bar">
    <a href="tambah_program.php" class="add-btn">+ Tambah Program</a>
    <div>
        <a href="dashboard_admin.php" class="dashboard-btn">Dashboard</a>
        <a href="logout.php" class="logout-btn" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </div>
</div>

<h2>Manajemen Program</h2>

<table>
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($programs)) { ?>
    <tr>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['deskripsi'] ?></td>
        <td><img src="<?= $row['gambar'] ?>" alt="<?= $row['judul'] ?>"></td>
        <td>
            <a href="edit_program.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
            <a href="hapus_program.php?id=<?= $row['id'] ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus program ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
