@extends('layouts.app')

@section('title', 'HMIT - Himpunan Mahasiswa Informatika')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Himpunan Mahasiswa Informatika</h1>
            <p class="hero-subtitle">Bersama membangun komunitas teknologi yang inovatif dan inspiratif</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary">Bergabung Sekarang</a>
                <a href="{{ route('about') }}" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="hero-background">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Tentang HMIT</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Siapa Kami?</h3>
                    <p>HMIT adalah organisasi mahasiswa yang berdedikasi untuk mengembangkan potensi akademik dan profesional di bidang informatika. Kami menyediakan platform bagi mahasiswa untuk belajar, berkolaborasi, dan tumbuh bersama dalam ekosistem teknologi yang dinamis.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <h4>500+</h4>
                            <p>Anggota Aktif</p>
                        </div>
                        <div class="stat">
                            <h4>50+</h4>
                            <p>Acara Tahunan</p>
                        </div>
                        <div class="stat">
                            <h4>100%</h4>
                            <p>Dedikasi</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="programs">
        <div class="container">
            <h2 class="section-title">Program Unggulan</h2>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Workshop & Seminar</h3>
                    <p>Pelatihan intensif tentang teknologi terkini dan skill yang relevan dengan industri</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Kompetisi</h3>
                    <p>Ajang kompetisi programming, design, dan inovasi untuk mengasah kemampuan</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Networking</h3>
                    <p>Kesempatan bertemu dengan profesional dan alumni sukses di bidang teknologi</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Study Group</h3>
                    <p>Kelompok belajar kolaboratif untuk memahami materi perkuliahan dengan lebih baik</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Mentoring</h3>
                    <p>Program bimbingan dari senior dan profesional untuk pengembangan karir</p>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Community Service</h3>
                    <p>Kontribusi nyata kepada masyarakat melalui teknologi dan inovasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events">
        <div class="container">
            <h2 class="section-title">Acara Mendatang</h2>
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">Apr</span>
                    </div>
                    <div class="event-content">
                        <h3>Web Development Workshop</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Ruang Lab Informatika</p>
                        <p class="event-desc">Belajar membuat website modern dengan Laravel dan Vue.js</p>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">22</span>
                        <span class="month">Apr</span>
                    </div>
                    <div class="event-content">
                        <h3>Coding Competition</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Auditorium Kampus</p>
                        <p class="event-desc">Kompetisi programming dengan hadiah menarik</p>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">29</span>
                        <span class="month">Apr</span>
                    </div>
                    <div class="event-content">
                        <h3>Tech Talk: AI & Machine Learning</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Ruang Seminar</p>
                        <p class="event-desc">Diskusi mendalam tentang perkembangan AI terkini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>hmit@universitas.ac.id</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telepon</h4>
                            <p>+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Lokasi</h4>
                            <p>Gedung Informatika, Kampus Utama</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" method="POST">
                        @csrf
                        <input type="text" placeholder="Nama Anda" required>
                        <input type="email" placeholder="Email Anda" required>
                        <textarea placeholder="Pesan Anda" rows="5" required></textarea>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
