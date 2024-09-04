  <?php
session_start();
include 'koneksi.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Brida Absensi</title>
    <link rel="stylesheet" href="css/home/styles.css">
    <link href="https://fonts.googleapis.com/css2?family'sy=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <img src="img/brida.png" alt="BRIDA Logo">
            <ul class="nav-links">
                <li><a href="login.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="title">
                <h1>Selamat Datang di Brida Absensi</h1>
                <p>Sistem Absensi Mahasiswa Magang Badan Riset dan Inovasi Daerah Kota Semarang</p>
                <div class="button-group">
                    <a href="karyawan/login_karyawan.php" class="button karyawan-btn">Login</a>
                </div>
            </div>
            <div>
                <img class="img" src="img/image.png" alt="Illustration">
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-section">
                <h4>Kontak Kami</h4>
                <ul class="contact-info">
                    <li><strong>Email:</strong> brida@semarangkota.go.id</li>
                    <li><strong>Telepon:</strong> (024) 3584037</li>
                    <li><strong>Alamat:</strong> Gedung Pandanaran Lantai 1 Jl. Pemuda No.175, Sekayu, Kec. Semarang Tengah, <br>Kota Semarang, Jawa Tengah 50132</li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Ikuti Kami</h4>
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Brida Absensi. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>
