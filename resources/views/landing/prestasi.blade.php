@extends('layouts.app')

@section('title', 'Prestasi HMIT - Himpunan Mahasiswa Informatika')

@section('content')
    <!-- Hero Section -->
    <section class="prestasi-hero">
        <div class="container">
            <div class="prestasi-hero-content">
                <h1 class="prestasi-hero-title">Prestasi HMIT</h1>
                <p class="prestasi-hero-subtitle">Pencapaian dan karya nyata dari anggota HMIT yang luar biasa</p>
            </div>
        </div>
    </section>

    <!-- Prestasi Gallery Section -->
    <section class="prestasi-gallery">
        <div class="container">
            <h2 class="section-title">Galeri Prestasi Kami</h2>
            <div class="prestasi-grid">
                <!-- Prestasi 1 -->
                <div class="prestasi-card" data-category="kompetisi">
                    <div class="prestasi-image">
                        <img src="/foto/desain.jpeg" alt="Juara UI/UX Desain">
                        <div class="prestasi-overlay">
                        </div>
                        <span class="prestasi-badge">Kompetisi UI/UX</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara 1 Desain UI/UX</h3>
                        <p class="prestasi-description">Tim HMIT berhasil meraih juara 1 dalam kompetisi desain ui/ux.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Mei 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Universitas Teknologi Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 2 -->
                <div class="prestasi-card" data-category="penghargaan">
                    <div class="prestasi-image">
                        <img src="/foto/karya_ilmiah.jpeg" alt="Penghargaan">
                        <div class="prestasi-overlay">
                        </div>
                        <span class="prestasi-badge">Kompetisi Karya Ilmiah</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara 1 Karya Ilmiah</h3>
                        <p class="prestasi-description">Berhasil meraih juara 1 pada ajang kompetisi diesnatalis Fakultas Ekonomi Bisnis</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Mei 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kampus</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 3 -->
                <div class="prestasi-card" data-category="proyek">
                    <div class="prestasi-image">
                        <img src="/foto/website_siber.jpeg" alt="Website Siber">
                        <div class="prestasi-overlay">
                        </div>
                        <span class="prestasi-badge">Proyek Magang</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Website Siber</h3>
                        <p class="prestasi-description">Pengembangan sistem informasi pelaporan dan edukasi kejahatan siber berbasis web untuk polres sumbawa.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Februari 2026</span>
                            <span><i class="fas fa-map-marker-alt"></i> Polres Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 4 -->
                <div class="prestasi-card" data-category="magang">
                    <div class="prestasi-image">
                        <img src="/foto/web_peminjaman.jpeg" alt="magang">
                        <div class="prestasi-overlay">
                            
                        </div>
                        <span class="prestasi-badge">Proyek Magang</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Website Peminjaman Berkas</h3>
                        <p class="prestasi-description">Meciptakan Digitalisasi arsip, website peminjaman berkas di kantor pertanahan sumbawa.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Februari 2026</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kantor Pertanahan Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 5 -->
                <div class="prestasi-card" data-category="kompetisi">
                    <div class="prestasi-image">
                        <img src="/foto/juara_3_lida.jpeg" alt="Juara Lida">
                        <div class="prestasi-overlay">
                           
                        </div>
                        <span class="prestasi-badge">Kompetisi</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara 3 Lomba Inovasi Daerah</h3>
                        <p class="prestasi-description">Berhasil meraih juara 3 pada lomba inovasi daerah dengan karya "Sistem Pendeteksi Hewan Perusak Lahan Pertanian Berbasis ESP32-CAM".</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Desember 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kantor Bupati Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 6 -->
                <div class="prestasi-card" data-category="penghargaan">
                    <div class="prestasi-image">
                        <img src="/foto/harapan_1_Lida.jpeg" alt="Penghargaan Inovasi">
                        <div class="prestasi-overlay">
                            
                        </div>
                        <span class="prestasi-badge">Kompetisi</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara harapan 1 LIDA</h3>
                        <p class="prestasi-description">Berhasil Meraih Harapan 1 pada lomba inovasi daerah dengan karya "Proyek inovatif dalam bidang perangkat desa".</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Desember 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 7 -->
                <div class="prestasi-card" data-category="proyek">
                    <div class="prestasi-image">
                        <img src="/foto/dashboard.jpeg" alt="Platform E-Learning">
                        <div class="prestasi-overlay">
                            
                        </div>
                        <span class="prestasi-badge">Proyek Magang</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Prototype Berbasis AI</h3>
                        <p class="prestasi-description">Menciptakan Prototype Dashboard Berbasis AI Garapan untuk Pemkab Sumbawa.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Maret 2026</span>
                            <span><i class="fas fa-users"></i> Pemkab Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 8 -->
                <div class="prestasi-card" data-category="acara">
                    <div class="prestasi-image">
                        <img src="/foto/harapan_2_lida.jpeg" alt="Workshop Series 2024">
                        <div class="prestasi-overlay">
                        </div>
                        <span class="prestasi-badge">Kompetisi</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara Harapan 3 LIDA</h3>
                        <p class="prestasi-description">Berhasil meraih harapan 2 pada lomba inovasi daerah dengan hasil karya "Sistem Cerdas Untuk Deteksi Dini Penyakit Pada Daun Jagung".</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i>Sumbawa</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 9 -->
                <div class="prestasi-card" data-category="kompetisi">
                    <div class="prestasi-image">
                        <img src="/foto/porkab.jpeg" alt="Hackathon Winner">
                        <div class="prestasi-overlay">
                        </div>
                        <span class="prestasi-badge">Kompetisi</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Juara 3 IPSI Lombok Timur Championship</h3>
                        <p class="prestasi-description">Anggota HMIT berhasil meraih jauara 3 dalam ajang championship IPSI Lombok Timur sebagai penembus podium perantauan.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> januari 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Lombok Timur</span>
                        </div>
                    </div>
                </div>

                <!-- Prestasi 10 -->
                <div class="prestasi-card" data-category="penghargaan">
                    <div class="prestasi-image">
                        <img src="/foto/pilamapres.jpeg" alt="Best Community Service">
                        <div class="prestasi-overlay">
                    
                        </div>
                        <span class="prestasi-badge">Penghargaan</span>
                    </div>
                    <div class="prestasi-content">
                        <h3 class="prestasi-title">Penghargaan Juara 2 Pilmapres</h3>
                        <p class="prestasi-description">Penghargaan atas mahasiswa pilihan berprestasi fakultas Rekayasa Sistem.</p>
                        <div class="prestasi-meta">
                            <span><i class="fas fa-calendar-alt"></i> Mei 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kampus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="prestasi-stats">
        <div class="container">
            <h2 class="section-title">Statistik Prestasi</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Penghargaan</div>
                    <p class="stat-description">Penghargaan yang telah diraih</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Proyek Sukses</div>
                    <p class="stat-description">Proyek yang telah dikembangkan</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Peserta Terlibat</div>
                    <p class="stat-description">Peserta dalam berbagai acara</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Kepuasan</div>
                    <p class="stat-description">Tingkat kepuasan peserta</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Categories Section -->
    <section class="prestasi-categories">
        <div class="container">
            <h2 class="section-title">Kategori Prestasi</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Kompetisi</h3>
                    <p>Prestasi dalam berbagai kompetisi tingkat lokal, regional, dan nasional</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Penghargaan</h3>
                    <p>Penghargaan dan pengakuan dari institusi dan industri</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Proyek</h3>
                    <p>Proyek-proyek inovatif yang memberikan dampak nyata</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="prestasi-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Jadilah Bagian dari Prestasi Kami</h2>
                <p>Bergabunglah dengan HMIT dan raih prestasi bersama komunitas yang luar biasa</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                    <a href="#programs" class="btn btn-secondary">Lihat Program</a>
                </div>
            </div>
        </div>
    </section>
@endsection
