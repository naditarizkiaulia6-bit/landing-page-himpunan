<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HMIT - Himpunan Mahasiswa Informatika')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span>HMIT</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">Tentang</a></li>
                    <li><a href="{{ route('programs') }}" class="nav-link">Program</a></li>
                    <li><a href="{{ route('prestasi') }}" class="nav-link">Prestasi</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="/daftar">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/aspirasi">Aspirasi</a></li>
                    <li class="nav-item"><a class="nav-link nav-login" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>HMIT</h4>
                    <p>Membangun masa depan teknologi bersama</p>
                </div>
                <div class="footer-section">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang</a></li>
                        <li><a href="{{ route('programs') }}">Program</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Ikuti Kami</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 HMIT. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
