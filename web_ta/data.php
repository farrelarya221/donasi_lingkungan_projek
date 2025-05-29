<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Admin Panel - GreenHope</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #e8f5e9);
            margin: 0;
            padding: 0;
        }

        .header {
            background: #4CAF50;
            color: white;
            padding: 18px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-buttons a {
            background: white;
            color: #4CAF50;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }

        .nav-buttons a:hover {
            background: #f8f8f8;
        }

        .dashboard-btn {
            color: #2196F3;
        }

        .container {
            padding: 40px;
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            color: #2e7d32;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px 18px;
            border: 1px solid #e0e0e0;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .btn-edit, .btn-hapus {
            text-decoration: none;
            padding: 6px 14px;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-edit {
            background: #ff9800;
            color: white;
        }

        .btn-hapus {
            background: #f44336;
            color: white;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 20px;
            }

            table, th, td {
                font-size: 14px;
            }

            .btn-edit, .btn-hapus {
                padding: 5px 10px;
                font-size: 13px;
            }

            .nav-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div>Admin Panel - Selamat datang, <?= htmlspecialchars($_SESSION['admin']) ?>!</div>
    <div class="nav-buttons">
        <a href="dashboard_admin.php" class="dashboard-btn">Dashboard</a>
        <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </div>
</div>

<div class="container">
    <h2>Data Donasi</h2>

    <?php
    include "koneksi.php";
    $result = mysqli_query($konek, "SELECT * FROM donatur");
    $no = 1;
    ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Donatur</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jumlah Donasi</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['nama_depan'] . ' ' . $row['nama_belakang']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['telepon']) ?></td>
                <td>Rp<?= number_format($row['jumlah_donasi'], 0, ',', '.') ?></td>
                <td><?= htmlspecialchars($row['pesan']) ?></td>
                <td>
                    <a href="edit_donasi.php?id=<?= urlencode($row['id']) ?>" class="btn-edit">Edit</a>
                    <a href="hapus_donasi.php?id=<?= urlencode($row['id']) ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus donasi ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
