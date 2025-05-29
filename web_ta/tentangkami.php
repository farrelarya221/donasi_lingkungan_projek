<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> TIM KAMI - GreenHope</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color: #333;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 10px 5%;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-logo {
      display: flex;
      align-items: center;
    }

    .nav-logo img {
      height: 50px;
      margin-right: 10px;
    }

    .nav-logo-text {
      font-size: 22px;
      font-weight: bold;
      color: #4CAF50;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    .nav-links a {
      color: #333;
      text-decoration: none;
      font-weight: bold;
      padding: 10px 15px;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #4CAF50;
    }

    .cta-buttons {
      display: flex;
      gap: 10px;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      transition: background-color 0.3s;
    }

    .btn-primary {
      background-color: #4CAF50;
      color: white;
    }

    .btn-primary:hover {
      background-color: #3e8e41;
    }

    .program-section {
      padding: 40px 5%;
      background-color: #f4fdf4;
    }

    .program-section h1 {
      font-size: 2.5rem;
      color: #2e7d32;
      margin-bottom: 30px;
      text-align: center;
    }

    .team-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
      justify-content: center;
      max-width: 1000px;
      margin: 0 auto;
    }

    .team-image {
      flex: 1 1 40%;
      max-width: 400px;
    }

    .team-image img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .team-text {
      flex: 1 1 50%;
      font-size: 1.1rem;
      line-height: 1.6;
      color: #444;
      text-align: justify;
    }

    .program-section ul {
      list-style-type: none;
      padding: 0;
      margin-top: 20px;
    }

    .program-section ul li {
      display: flex;
      margin-bottom: 10px;
      font-size: 1.1rem;
      color: #444;
    }

    .program-section ul li strong {
      display: inline-block;
      width: 160px; 
      font-weight: bold;
      color: #2e7d32;
    }

    @media (max-width: 768px) {
      .team-container {
        flex-direction: column;
      }

      .team-image,
      .team-text {
        flex: 1 1 100%;
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="nav-logo">
      <img src="green.jpg" alt="GreenHope Logo" />
      <div class="nav-logo-text">GreenHope</div>
    </div>
    <ul class="nav-links">
      <li><a href="home.php">BERANDA</a></li>
      <li><a href="tentangkami.php">TENTANG KAMI</a></li>
    </ul>
    <div class="cta-buttons">
      <a href="form_donasi.php" class="btn btn-primary">DONASI</a>
      <a href="admin.php" class="btn btn-primary">ADMIN</a>
    </div>
  </nav>

  <section class="program-section">
    <h1>TIM KAMI</h1>
    <div class="team-container">
      <div class="team-image">
        <img src="fotbar.jpg" alt="Tentang Kami" />
      </div>
      <div class="team-text">
        <p>
          GreenHope adalah komunitas yang terdiri dari individu-individu berdedikasi untuk menciptakan masa depan yang lebih hijau. Tim kami terdiri dari profesional lingkungan, relawan yang berkomitmen terhadap keberlanjutan dan inovasi hijau.
        </p>
        <ul>
          <li><strong>Direktur:</strong>Muhammad Farrel Arya Anindya</li>
          <li><strong>NIM:</strong>124240196</li> <br>
          <li><strong>Wakil Direktur:</strong> Afwan Ayashin</li>
          <li><strong>NIM:</strong>124240193</li> 
        </ul>
      </div>
    </div>
  </section>

</body>
</html>
