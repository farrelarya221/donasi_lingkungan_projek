<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHope - Peduli Lingkungan</title>
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
        
        .nav-links li {
            position: relative;
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
        
        .active-lang {
            color: #4CAF50 !important;
            font-weight: bold;
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
        
        .btn-outline {
            border: 1px solid #4CAF50;
            color: #4CAF50;
            background-color: transparent;
        }
        
        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }
        
        .btn-outline:hover {
            background-color: rgba(76, 175, 80, 0.1);
        }
        
        .btn-primary:hover {
            background-color: #3e8e41;
        }
        
        .hero {
            height: 80vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1586348943529-beaae6c28db9');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 5%;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .programs {
            padding: 60px 5%;
            text-align: center;
        }
        
        .section-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #4CAF50;
        }
        
        .program-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .program-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
        }
        
        .program-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .program-content {
            padding: 20px;
        }
        
        .program-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .program-desc {
            color: #666;
            margin-bottom: 20px;
        }
        
        .impact {
            background-color: #f9f9f9;
            padding: 60px 5%;
            text-align: center;
        }
        
        .impact-stats {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 30px;
        }
        
        .stat-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 200px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: #666;
            font-size: 1rem;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 40px 5%;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .footer-logo {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .footer-logo img {
            height: 40px;
            margin-right: 10px;
        }
        
        .footer-col h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
        }
        
        .footer-col h3::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #4CAF50;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #4CAF50;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        @media (max-width: 768px) {
            .nav-logo-text {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .program-cards {
                grid-template-columns: 1fr;
            }
            
            .impact-stats {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    
    <nav class="navbar">
        <div class="nav-logo">
            <img src="green.jpg" alt="GreenHope Logo">
            <div class="nav-logo-text">GreenHope</div>
        </div>
        
        <ul class="nav-links">
            <li><a href="home.php" class="active" aria-current="page">BERANDA</a></li>
            <li><a href="tentangkami.php" class="active" aria-current="page">TENTANG KAMI</a></li>
        </ul>

        <div class="cta-buttons">
            <a href="form_donasi.php" class="btn btn-primary">DONASI</a>
            <a href="dashboard_admin.php" class="btn btn-primary">ADMIN</a>
        </div>
    </nav>
    
    <section class="hero">
        <h1>Program Donasi Lingkungan</h1>
        <p>Hijaukan dunia dengan kebaikan. Tanam harapan, rawat bumi, mulai dari donasimu hari ini.</p>
        <a href="form_donasi.php" class="btn btn-primary">DONASI SEKARANG</a>
    </section>
    
    <section class="programs">
        <h2 class="section-title">Program Kami</h2>
        <p>GreenHope menjalankan berbagai program konservasi untuk melindungi keanekaragaman hayati dan ekosistem di Indonesia.</p>
        
        <div class="program-cards">
            <?php
            // Ambil data program terbaru dari database
            include 'koneksi.php'; // Pastikan koneksi database sudah ada
            $programs = mysqli_query($konek, "SELECT * FROM program");
            while ($row = mysqli_fetch_assoc($programs)) :
            ?>
            <div class="program-card">
                <div class="program-image" style="background-image: url('<?= $row['gambar'] ?>');"></div>
                <div class="program-content">
                    <h3 class="program-title"><?= $row['judul'] ?></h3>
                    <p class="program-desc"><?= $row['deskripsi'] ?></p>
                    <?php if ($row['judul'] == 'Reboisasi Hutan'): ?>
                        <a href="reboisasi_hutan.php" class="btn btn-outline">Selengkapnya</a>
                    <?php elseif ($row['judul'] == 'Konservasi Pesisir'): ?>
                        <a href="konpesisir.php" class="btn btn-outline">Selengkapnya</a>
                    <?php elseif ($row['judul'] == 'Edukasi Lingkungan'): ?>
                        <a href="eduling.php" class="btn btn-outline">Selengkapnya</a>
                    <?php elseif ($row['judul'] == 'Pemulihan Habitat'): ?>
                        <a href="pemulihan_habitat.php" class="btn btn-outline">Selengkapnya</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
       
    </section>
    
    <section class="impact">
        <h2 class="section-title">Dampak Kami</h2>
        <p>Bersama dengan dukungan Anda, kami telah mencapai hasil yang signifikan dalam upaya pelestarian lingkungan.</p>
        
        <div class="impact-stats">
            <div class="stat-box">
                <div class="stat-number">10,000+</div>
                <div class="stat-label">Pohon Ditanam</div>
            </div>
            
            <div class="stat-box">
                <div class="stat-number">5,000+</div>
                <div class="stat-label">Relawan Aktif</div>
            </div>
            
            <div class="stat-box">
                <div class="stat-number">20+</div>
                <div class="stat-label">Provinsi Terjangkau</div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="green.jpg" alt="greenhope">
                    <div>GreenHope</div>
                </div>
                <p>Berkomitmen untuk melestarikan alam dan lingkungan Indonesia demi masa depan yang lebih baik.</p>
            </div>
            
            <div class="footer-col">
                <h3>Program</h3>
                <ul class="footer-links">
                    <li><a href="reboisasi_hutan.php">Reboisasi Hutan</a></li>
                    <li><a href="konpesisir.php">Konservasi Pesisir</a></li>
                    <li><a href="eduling.php">Edukasi Lingkungan</a></li>
                    <li><a href="pemulihan_habitat.php">Pemulihan Habitat</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Tentang Kami</h3>
                <ul class="footer-links">
                    <li><a href="tentangkami.php">Tim Kami</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Hubungi Kami</h3>
                <ul class="footer-links">
                    <li>Email: info@greenhope.gmail.com</li>
                    <li>Telepon: +62 897-6871-565</li>
                    <li>Alamat: Jalan Hijau No. 123, Yogyakarta</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 GreenHope. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
