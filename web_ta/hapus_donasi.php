<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET['id'])) {
    echo "ID donatur tidak ditemukan.";
    exit();
}

$id = intval($_GET['id']); 

$cek = mysqli_query($konek, "SELECT * FROM donatur WHERE id = $id");
if (mysqli_num_rows($cek) === 0) {
    echo "Data tidak ditemukan.";
    exit();
}

$hapus = mysqli_query($konek, "DELETE FROM donatur WHERE id = $id");

if ($hapus) {
    header("Location: dashboard_admin.php"); 
    exit();
} else {
    echo "Gagal menghapus data.";
}
?>
