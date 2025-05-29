<?php
$host = "localhost";
$user = "root";           
$pass = "";               
$db   = "donasi";        

$konek = new mysqli($host, $user, $pass, $db);

if ($konek->connect_error) {
    die("Koneksi gagal: " . $konek->connect_error);
}
?>
