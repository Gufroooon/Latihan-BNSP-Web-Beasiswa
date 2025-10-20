<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Beasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e8ba3 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #1e3c72;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            padding: 8px;
            border-radius: 10px;
            color: white;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-menu a {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
        }

        .nav-menu a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #1e3c72;
            transition: width 0.3s;
        }

        .nav-menu a:hover:after {
            width: 100%;
        }

        .hero-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            padding: 150px 80px 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-content {
            animation: fadeInLeft 1s ease-out;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 25px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .hero-title {
            font-size: 56px;
            font-weight: 900;
            color: white;
            line-height: 1.2;
            margin-bottom: 30px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-title .highlight {
            background: linear-gradient(45deg, #ffffff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            color: rgba(255, 255, 255, 0.95);
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .program-list {
            list-style: none;
            margin-bottom: 40px;
        }

        .program-list li {
            color: white;
            font-size: 16px;
            padding: 12px 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .program-list li i {
            background: white;
            color: #1e3c72;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: white;
            color: #1e3c72;
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 255, 255, 0.4);
            background: #f5f5f5;
        }

        .hero-visual {
            position: relative;
            animation: fadeInRight 1s ease-out;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .visual-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .visual-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
            cursor: pointer;
        }

        .visual-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.25);
        }

        .visual-card i {
            font-size: 48px;
            color: white;
            margin-bottom: 20px;
            display: block;
        }

        .visual-card h3 {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .visual-card p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            line-height: 1.6;
        }

        .stats-bar {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px 80px;
            margin: 0 80px 80px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 900;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #2a5298;
            font-size: 16px;
            font-weight: 600;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            transition: all 0.3s;
            z-index: 999;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .whatsapp-float:hover {
            transform: scale(1.15);
            box-shadow: 0 12px 35px rgba(37, 211, 102, 0.6);
        }

        @media (max-width: 968px) {
            .navbar {
                padding: 20px 40px;
            }

            .nav-menu {
                display: none;
            }

            .hero-section {
                grid-template-columns: 1fr;
                padding: 120px 40px 60px;
                gap: 40px;
            }

            .hero-title {
                font-size: 40px;
            }

            .stats-bar {
                grid-template-columns: 1fr;
                margin: 0 40px 60px;
                padding: 30px;
                gap: 30px;
            }

            .visual-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>BeasiswaPro</span>
        </div>
        <ul class="nav-menu">
            <li><a href="{{ route('jenis_beasiswa.index') }}">Pilihan Beasiswa</a></li>
            <li><a href="{{ route('beasiswa.create') }}">Daftar</a></li>
            <li><a href="{{ route('beasiswa.index') }}">Hasil</a></li>
        </ul>
    </nav>

    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">✨ TELAH DIPERCAYA OLEH 2000+ ORANG TUA & SISWA</div>
            <h1 class="hero-title">
                Wujudkan Impianmu dengan <span class="highlight">Beasiswa Terbaik</span>
            </h1>
            <p class="hero-description">
                Sistem pendaftaran beasiswa kampus yang mudah, cepat, dan terpercaya. 
                Raih kesempatan mendapatkan beasiswa untuk masa depan yang lebih cerah.
            </p>
            <ul class="program-list">
                <li>
                    <i class="fas fa-check"></i>
                    <span><strong>Teknik Komputer dan Jaringan</strong> - Program unggulan dengan sertifikasi internasional</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span><strong>Desain Komunikasi Visual</strong> - Kembangkan kreativitasmu dengan portofolio profesional</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span><strong>Rekayasa Perangkat Lunak</strong> - Jadi developer handal yang dibutuhkan industri</span>
                </li>
            </ul>
            <div class="hero-buttons">
                <a href="#pilihan" class="btn-primary">
                    Lihat Jenis Beasiswa
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="visual-grid">
                <div class="visual-card">
                    <i class="fas fa-trophy"></i>
                    <h3>Program Profesional</h3>
                    <p>Berbasis kompetensi industri dengan portofolio level profesional</p>
                </div>
                <div class="visual-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Tersertifikasi</h3>
                    <p>Dapatkan sertifikasi resmi dan diakui dunia kerja</p>
                </div>
                <div class="visual-card">
                    <i class="fas fa-users"></i>
                    <h3>Kuliah Terarah</h3>
                    <p>Bimbingan intensif untuk melanjutkan ke perguruan tinggi</p>
                </div>
                <div class="visual-card">
                    <i class="fas fa-book"></i>
                    <h3>Metode Terbaik</h3>
                    <p>Pembelajaran dengan metode 7 Sunnah Rasul yang terbukti efektif</p>
                </div>
            </div>
        </div>
    </section>

    <div class="stats-bar">
        <div class="stat-item">
            <div class="stat-number">2000+</div>
            <div class="stat-label">Siswa Dipercaya</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">3</div>
            <div class="stat-label">Jurusan Unggulan</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">100%</div>
            <div class="stat-label">Tersertifikasi</div>
        </div>
    </div>

    <div class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </div>
</body>
</html>