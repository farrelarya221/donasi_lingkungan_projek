<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Registrasi GreenHope</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-image: url("bg.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-container {
      display: flex;
      max-width: 800px;
      width: 90%;
      background-color: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .register-sidebar {
      width: 300px;
      padding: 30px;
      background-color: #a3c799;
      text-align: center;
    }

    .register-sidebar img {
      width: 120px;
      margin-top: 30px;
    }

    .register-sidebar h2 {
      margin-top: 20px;
      color: #2e7d32;
    }

    .register-form {
      flex-grow: 1;
      padding: 40px;
      background-color: #ffffff;
      position: relative;
    }

    .register-form h2 {
      margin-bottom: 20px;
      color: #2e7d32;
    }

    .register-form input {
      width: 100%;
      padding: 10px;
      margin: 8px 0 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .register-form .form-group {
      position: relative;
    }

    .eye-icon {
      position: absolute;
      top: 12px;
      right: 10px;
      width: 20px;
      height: 20px;
      cursor: pointer;
      display: none;
    }

    .register-form button {
      width: 100%;
      padding: 10px;
      background-color: #2e7d32;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .register-form button:hover {
      background-color: #256c28;
    }

    .register-form a {
      display: block;
      margin-top: 10px;
      text-align: center;
      color: #2e7d32;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <div class="register-sidebar">
      <h2>GreenHope</h2>
      <img src="green.jpg" alt="Logo GreenHope">
    </div>

    <div class="register-form">
      <h2>Registrasi Akun</h2>
      <form action="proses_regis.php" method="POST">
        <input type="text" name="Username" placeholder="Username / Email" required>

        <div class="form-group">
          <input type="password" id="password" name="password" placeholder="Password" required>
          <svg
            id="togglePassword"
            class="eye-icon"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#000"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
            <circle cx="12" cy="12" r="3" />
          </svg>
        </div>

        <button type="submit">Daftar</button>
      </form>
    </div>
  </div>

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
