<?php
session_start();
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($konek, "select * from login where 
    username='$username' and password='$password'")
    or die(mysqli_error($konek));

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}else{
    header("location:index.php?pesan=gagal");
}