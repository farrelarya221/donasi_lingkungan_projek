<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Reboisasi Hutan - GreenHope</title>
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
      margin-bottom: 20px;
      text-align: center;
    }
    .program-section p {
      font-size: 1.1rem;
      line-height: 1.6;
      color: #444;
      text-align: justify;
      max-width: 900px;
      margin: 0 auto 30px auto;
    }
    .program-section img {
      display: block;
      max-width: 60%;
      height: auto;
      margin: 20px auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .program-section ul {
      max-width: 900px;
      margin: 0 auto 30px auto;
      padding-left: 0;
      list-style-type: none;
    }
    .program-section ul li {
      display: flex;
      margin-bottom: 8px;
      font-size: 1.1rem;
      color: #444;
      text-align: left;
    }
    .program-section ul li strong {
      display: inline-block;
      width: 160px; 
      font-weight: bold;
      color: #2e7d32;
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
    <h1>Reboisasi Hutan</h1>
    <img src="rebotan.png" alt="Reboisasi">

    <p>
      <br>
      Tema Program: "Jejak Hijau, Warisan Kita"
      <br>
      <br>
      Hutan adalah warisan paling berharga yang kita terima dari generasi sebelumnya—dan tanggung jawab terbesar yang harus kita teruskan ke generasi berikutnya. Melalui program "Jejak Hijau, Warisan Kita", kami mengajak Anda untuk bersama-sama memulihkan hutan-hutan yang telah rusak dan membangun kembali ekosistem yang sehat dan lestari.
Reboisasi bukan sekadar menanam pohon. Ini adalah upaya menyeluruh untuk menghidupkan kembali kehidupan: udara yang bersih, tanah yang subur, sungai yang mengalir jernih, dan rumah yang aman bagi jutaan makhluk hidup.
    </p>
    <main>
        <p>
         Tujuan Program <br>
          - menanam kembali pohon di area hutan yang rusak di Kalimantan, Sumatera, dan Papua.  <br>
          - Menjaga dan mengembalikan keanekaragaman hayati lokal <br>
          - Meningkatkan kesadaran dan keterlibatan masyarakat dalam konservasi <br>
          - Menanamkan nilai keberlanjutan sebagai bagian dari warisan budaya <br>

        </p>
        <ul>
             <li><strong>Target:</strong> Rp250.000.000</li>
            <li><strong>Donasi Minimum:</strong> Rp25.000</li>
            <li><strong>Periode:</strong> 1 Juni - 31 Agustus 2025</li>
        </ul>
    </main>
  </section>

</body>
</html>
