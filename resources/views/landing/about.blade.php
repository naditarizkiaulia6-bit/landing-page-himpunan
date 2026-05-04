@extends('layouts.app')

@section('title', 'Tentang HMIT - Himpunan Mahasiswa Informatika')

@section('content')
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <h1 class="about-hero-title">Tentang HMIT</h1>
                <p class="about-hero-subtitle">"Dari Inisiatif Menjadi Dampak"</p>
            </div>
        </div>
    </section>

    <!-- Who is HMIT Section -->
    <section class="about-who">
        <div class="container">
            <h2 class="section-title">Siapa Itu HMIT?</h2>
            <div class="who-content">
                <p class="who-intro">
                    Himpunan Mahasiswa Informatika (HMIT) adalah organisasi mahasiswa yang berdedikasi untuk menjadi wadah aspirasi dan pengembangan skill di bidang teknologi informasi. Kami percaya bahwa setiap mahasiswa memiliki potensi luar biasa yang perlu dikembangkan melalui pembelajaran berkelanjutan, kolaborasi, dan pengalaman praktis.
                </p>
                <p class="who-narrative">
                    Sebagai wadah aspirasi mahasiswa informatika, HMIT berkomitmen untuk menciptakan ekosistem yang mendukung pertumbuhan profesional dan personal. Kami menyediakan berbagai program, workshop, dan kesempatan networking yang dirancang untuk meningkatkan kemampuan teknis dan soft skills anggota kami. Melalui inisiatif-inisiatif inovatif, kami berusaha membawa dampak positif tidak hanya bagi anggota, tetapi juga bagi masyarakat luas.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="about-vision-mission">
        <div class="container">
            <h2 class="section-title">Visi & Misi</h2>
            <div class="vision-mission-grid">
                <div class="vision-mission-card vision-card">
                    <div class="vm-header">
                        <div class="vm-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Visi</h3>
                    </div>
                    <div class="vm-content">
                        <p>Menjadi Himpunan Mahasiswa Informatika yang progresif, kolaboratif, dan berdampak melalui inisiatif-inisiatif inovatif yang relevan dengan perkembangan teknologi dan kebutuhan mahasiswa.</p>
                    </div>
                </div>

                <div class="vision-mission-card mission-card">
                    <div class="vm-header">
                        <div class="vm-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Misi</h3>
                    </div>
                    <div class="vm-content">
                        <ul class="mission-list">
                            <li>Mendorong budaya inisiatif mahasiswa dalam pengembangan akademik, minat bakat, dan karya teknologi</li>
                            <li>Menghadirkan program kerja yang inovatif dan relevan guna meningkatkan kolaborasi antar anggota himpunan</li>
                            <li>Menciptakan lingkungan kerja yang solid, harmonis dan inklusif dengan tetap mengedepankan professionalisme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="about-values">
        <div class="container">
            <h2 class="section-title">Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Inovasi</h3>
                    <p>Kami percaya bahwa inovasi adalah kunci untuk menciptakan solusi yang bermakna dan berdampak positif bagi masyarakat.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Kolaborasi</h3>
                    <p>Bersama-sama kita lebih kuat. Kami membangun ekosistem kolaboratif yang mendukung pertumbuhan setiap anggota.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Pertumbuhan</h3>
                    <p>Setiap anggota memiliki potensi untuk berkembang. Kami menyediakan platform dan kesempatan untuk tumbuh bersama.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Structure Section -->
    <section class="about-structure">
        <div class="container">
            <h2 class="section-title">Struktur Organisasi</h2>
            
            <!-- Hierarchical Org Chart -->
            <div class="org-chart">
                <!-- Level 1: Ketua Umum -->
                <div class="org-level level-1">
                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Ahsanul Ikram</h4>
                            <p class="member-role">KETUA UMUM</p>
                        </div>
                    </div>
                </div>

                <!-- Connector Line -->
                <div class="org-connector connector-1"></div>

                <!-- Level 2: Wakil Ketua -->
                <div class="org-level level-2">
                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Bima Saputra Siregar</h4>
                            <p class="member-role">WAKIL KETUA</p>
                        </div>
                    </div>
                </div>

                <!-- Connector Line -->
                <div class="org-connector connector-2"></div>

                <!-- Level 3: Sekretaris, Bendahara -->
                <div class="org-level level-3">
                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Khaera Mir'ah Andina</h4>
                            <p class="member-role">SEKRETARIS 1</p>
                        </div>
                    </div>

                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Teguh Bagus Safutra</h4>
                            <p class="member-role">SEKRETARIS 2</p>
                        </div>
                    </div>

                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Reza Dhia Qalbuana</h4>
                            <p class="member-role">BENDAHARA 1</p>
                        </div>
                    </div>

                    <div class="org-member">
                        <div class="member-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Dinda Oktavia Pratiwi</h4>
                            <p class="member-role">BENDAHARA 2</p>
                        </div>
                    </div>
                </div>

                <!-- Connector Line -->
                <div class="org-connector connector-3"></div>

                <!-- Level 4: Departments -->
                <div class="org-level level-4">
                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Ekonomi Kreatif</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>

                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Pengembangan Wawasan Teknologi Informasi</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>

                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Sosial Masyarakat</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>

                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Pengembangan Sumber Daya Mahasiswa</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>

                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Media</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>

                    <div class="org-member department-member">
                        <div class="member-avatar dept-avatar">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">Kesenian & Olahraga</h4>
                            <p class="member-role">DEPARTEMEN</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Label -->
                <div class="org-bottom-label">Anggota Organisasi</div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Bergabunglah dengan HMIT</h2>
                <p>Jadilah bagian dari komunitas mahasiswa informatika yang dinamis, inovatif, dan berdedikasi</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                    <a href="#programs" class="btn btn-secondary">Lihat Program</a>
                </div>
            </div>
        </div>
    </section>
@endsection
