<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM admin WHERE Username='$user' AND password='$pass'");
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['admin'] = $user;
        header("Location: dashboard_admin.php");
        exit;
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f5e9;
            padding: 40px;
            text-align: center;
        }
        form {
            background: #ffffff;
            padding: 30px;
            margin: auto;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
            position: relative;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .password-wrapper {
            position: relative;
        }
        .toggle-eye {
            position: absolute;
            right: 35px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        svg {
            width: 20px;
            height: 20px;
            display: none;
        }
    </style>
</head>
<body>

<h2>Login Admin</h2>

<form method="post" action="">
    <?php if (isset($error)) { echo "<div class='error'>$error</div>"; } ?>
    <input type="text" name="username" placeholder="Username" required><br>

    <div class="password-wrapper">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <svg id="togglePassword" class="toggle-eye" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="black" viewBox="0 0 24 24" stroke-width="2">
            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>
    </div>

    <button type="submit">Login</button>
</form>

<script>
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    passwordInput.addEventListener("input", () => {
        togglePassword.style.display = passwordInput.value ? "block" : "none";
    });

    togglePassword.addEventListener("click", () => {
        const type = passwordInput.type === "password" ? "text" : "password";
        passwordInput.type = type;
    });

    togglePassword.style.display = passwordInput.value ? "block" : "none";
</script>

</body>
</html>
