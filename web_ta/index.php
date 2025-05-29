<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Login GreenHope</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background: url("shiin.jpg") no-repeat center;
        background-size: cover;
      }

      .login-container {
        display: flex;
        max-width: 800px;
        width: 90%;
        margin: 0 auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        position: relative;
        z-index: 2;
        border-radius: 15px;
        overflow: hidden;
      }

      .login-sidebar {
        background-color: #a3c799;
        width: 300px;
        padding: 30px;
        flex-shrink: 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .login-content {
        flex-grow: 1;
        background-color: white;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      h2 {
        font-size: 32px;
        margin-bottom: 15px;
        color: white;
        font-weight: bold;
        text-align: center;
      }

      .logo-img {
        width: 100px;
        height: auto;
        margin-top: 10px;
        margin-bottom: 15px;
      }

      .logo-text {
        font-size: 28px;
        color: #ffffff;
        font-weight: bold;
        margin-top: 10px;
      }

      .form-group {
        margin-bottom: 20px;
        width: 100%;
        position: relative;
      }

      .form-control {
        width: 100%;
        padding: 12px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 3px;
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: normal;
        color: #333;
      }

      .login-btn {
        width: 100%;
        padding: 12px;
        background-color: #4caf50;
        border: none;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border-radius: 3px;
        transition: background-color 0.3s;
      }

      .login-btn:hover {
        background-color: #388e3c;
      }

      .form-flex {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        width: 100%;
      }

      .remember-me {
        display: flex;
        align-items: center;
      }

      .remember-me label {
        margin: 0;
        margin-left: 5px;
      }

      .divider {
        display: flex;
        align-items: center;
        width: 100%;
        margin: 20px 0;
      }

      .divider::before,
      .divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #ddd;
      }

      .divider span {
        padding: 0 10px;
        color: #666;
      }

      .create-account {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: white;
        border: 1px solid #4caf50;
        color: #4caf50;
        text-align: center;
        text-decoration: none;
        border-radius: 3px;
        font-weight: bold;
      }

      a {
        color: #333;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }

      .eye-icon {
        position: absolute;
        top: 42px;
        right: 15px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        display: none;
      }

      @media (max-width: 768px) {
        .login-container {
          flex-direction: column;
          width: 95%;
        }

        .login-sidebar {
          width: auto;
        }
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <div class="login-sidebar">
        <h2>Login</h2>
        <img src="green.jpg" alt="GreenHope Logo" class="logo-img" />
        <div class="logo-text"></div>
      </div>

      <div class="login-content">
        <form action="cek_login.php" method="post" style="width: 100%">
          <div class="form-group">
            <label for="username">
              Username / Email <span style="color: red">*</span>
            </label>
            <input
              type="text"
              id="username"
              name="username"
              class="form-control"
              required
            />
          </div>

          <div class="form-group">
            <label for="password">
              Password <span style="color: red">*</span>
            </label>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              required
            />

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

          <div class="form-flex">
            <div class="remember-me">
              <input type="checkbox" id="remember" name="remember" />
              <label for="remember">ingat ini</label>
            </div>
            <div></div>
          </div>

          <button type="submit" class="login-btn">Log in</button>

          <div class="divider">
            <span>or</span>
          </div>

          <a href="registrasi.php" class="create-account">buat akun baru</a>
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
