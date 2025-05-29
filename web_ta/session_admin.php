<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard_admin.php");
    exit;
} else {
    header("Location: admin.php");
    exit;
}
?>
