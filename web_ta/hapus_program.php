<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($konek, "DELETE FROM program WHERE id=$id");
    header("Location: admin_program.php");
    exit;
} else {
    echo "ID program tidak ditemukan.";
}
?>
