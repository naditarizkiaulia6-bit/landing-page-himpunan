@extends('layouts.app')

@section('title', 'Program Kerja - HMIT')

@section('content')
    <!-- Hero Section -->
    <section class="programs-hero">
        <div class="container">
            <div class="programs-hero-content">
                <h1 class="programs-hero-title">Program Unggulan HMIT</h1>
                <p class="programs-hero-subtitle">Berbagai program berkualitas untuk mengembangkan skill dan potensi Anda</p>
            </div>
        </div>
    </section>

    <!-- Programs Overview Section -->
    <section class="programs-overview">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih Program HMIT?</h2>
            <div class="overview-grid">
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Berkualitas Tinggi</h3>
                    <p>Program dirancang oleh praktisi dan akademisi berpengalaman di industri teknologi</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Komunitas Supportif</h3>
                    <p>Belajar bersama dengan ratusan mahasiswa yang memiliki passion yang sama</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Sertifikat</h3>
                    <p>Dapatkan sertifikat setelah menyelesaikan program</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Peluang Berkembang</h3>
                    <p>Akses ke peluang berkembang untuk terjun ke dunia magang dan kerja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Programs Section -->
    <section class="programs-main">
        <div class="container">
            <h2 class="section-title">Program Kerja Kami</h2>
            <div class="programs-grid-10">
                <!-- Program 1: Workshop & Training -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/upgrading.jpeg" alt="Workshop & Training">
                        <div class="program-overlay">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Upgrading Pengurus</h3>
                        <p>kegiatan pelatihan, pembekalan, dan penguatan kekompakan untuk meningkatkan kapasitas, kompetensi, dan komitmen pengurus.</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 50+ Peserta</span>
                            <span><i class="fas fa-calendar"></i> Mei </span>
                        </div>
                    </div>
                </div>

                <!-- Program 2: Kompetisi & Challenge -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/call_center.jpeg" alt="Kompetisi & Challenge">
                        <div class="program-overlay">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>HMIT Call Center</h3>
                        <p>mengelola panggilan telepon pelanggan masuk dan keluar dengan dukungan infrastruktur dan perangkat telekomunikasis</p>
                        <div class="program-meta">
                            <span><i class="fas fa-calendar"></i> 24 jam</span>
                        </div>
                    </div>
                </div>

                <!-- Program 3: Mentoring Program -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/bengkel_it.jpeg" alt="Mentoring Program">
                        <div class="program-overlay">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Bengkel IT</h3>
                        <p>Penyedia layanan teknis untuk perbaikan, perawatan, dan solusi teknologi informasi</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 100+ Pelanggan</span>
                            <span><i class="fas fa-calendar"></i> 20+ Pelayanan</span>
                        </div>
                    </div>
                </div>

                <!-- Program 4: Kelas PWTI -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/kelas_pwti.jpeg" alt="Kelas PWTI">
                        <div class="program-overlay">
                            <i class="fas fa-book"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Kelas PWTI</h3>
                        <p>Kelompok belajar kolaboratif untuk memahami materi dengan lebih mendalam</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 90+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> 30+ Study Group</span>
                        </div>
                    </div>
                </div>

                <!-- Program 5: Networking Event -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/aspirasi.jpeg" alt="Networking Event">
                        <div class="program-overlay">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Aspirasi</h3>
                        <p>Pusat penyampaian saran, pendapat, atau masukan untuk perbaikan.</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 25+ Aspirasi</span>
                            <span><i class="fas fa-calendar"></i> 5+ aspirasi/bulan</span>
                        </div>
                    </div>
                </div>

                <!-- Program 6: Community Service -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/desa_digital.jpeg" alt="Community Service">
                        <div class="program-overlay">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Desa Digital</h3>
                        <p>Kontribusi nyata kepada masyarakat melalui teknologi dan inovasi sosial</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 60+ Volunteer</span>
                            <span><i class="fas fa-calendar"></i> 5+ Project</span>
                        </div>
                    </div>
                </div>

                <!-- Program 7: Seminar & Talks -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/guest_lecture.jpeg" alt="Seminar & Talks">
                        <div class="program-overlay">
                            <i class="fas fa-microphone"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Guest Lecture</h3>
                        <p>Kuliah Umum sebagai sesi berbagi pengetahuan dari praktisi dan thought leader industri teknologi</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 150+ Peserta</span>
                            <span><i class="fas fa-calendar"></i> Seminar</span>
                        </div>
                    </div>
                </div>

                <!-- Program 8: Project Development -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/bootcamp.jpeg" alt="Project Development">
                        <div class="program-overlay">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>IT Bootcamp</h3>
                        <p>Ajang Kompetisi & Pengembangan proyek nyata dengan mentoring dan dukungan penuh dari tim</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 50+ Peserta</span>
                            <span><i class="fas fa-calendar"></i> 15+ Project</span>
                        </div>
                    </div>
                </div>

                <!-- Program 9: Career Development -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/kaderisasi.jpeg" alt="Career Development">
                        <div class="program-overlay">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Kaderisasi</h3>
                        <p>Program Pembentukan Karakter Membentuk kepribadian yang tangguh, bertanggung jawab, dan memiliki kemampuan berkomunikasi yang baik</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 100+ mahasiswa</span>
                            <span><i class="fas fa-calendar"></i> mahasiswa baru</span>
                        </div>
                    </div>
                </div>

                <!-- Program 10: Innovation Lab -->
                <div class="program-card-with-image">
                    <div class="program-image">
                        <img src="/foto/iac.jpeg" alt="Innovation Lab">
                        <div class="program-overlay">
                            <i class="fas fa-flask"></i>
                        </div>
                    </div>
                    <div class="program-info">
                        <h3>Informatic Art Club</h3>
                        <p>Ruang untuk mengembangkan skill seni dan hobi mahasiswa</p>
                        <div class="program-meta">
                            <span><i class="fas fa-users"></i> 35+ anggota</span>
                            <span><i class="fas fa-calendar"></i>15+ </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Timeline Section -->
    <section class="programs-timeline">
        <div class="container">
            <h2 class="section-title">Roadmap Program Tahunan</h2>
            <div class="timeline-container">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Januari - Februari</h3>
                        <p><strong>Recruitment & Onboarding</strong></p>
                        <p>Penerimaan anggota baru dan program orientasi</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Maret - April</h3>
                        <p><strong>Workshop Series</strong></p>
                        <p>Serangkaian workshop tentang teknologi terkini</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Mei - Juni</h3>
                        <p><strong>Kompetisi & Challenge</strong></p>
                        <p>Ajang kompetisi programming dan design</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>Juli - Agustus</h3>
                        <p><strong>Mentoring Program</strong></p>
                        <p>Program mentoring intensif untuk pengembangan karir</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>September - Oktober</h3>
                        <p><strong>Networking Event</strong></p>
                        <p>Pertemuan dengan profesional dan alumni sukses</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>November - Desember</h3>
                        <p><strong>Community Service & Celebration</strong></p>
                        <p>Program sosial dan perayaan akhir tahun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="programs-success">
        <div class="container">
            <h2 class="section-title">Kisah Sukses Alumni</h2>
            <div class="success-grid">
                <div class="success-card">
                    <div class="success-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Budi Santoso</h3>
                    <p class="success-role">Software Engineer at Google</p>
                    <p class="success-story">"Program HMIT membantu saya mengembangkan skill dan networking yang sangat berharga untuk karir saya di tech industry."</p>
                    <div class="success-meta">
                        <span><i class="fas fa-star"></i> Workshop</span>
                        <span><i class="fas fa-star"></i> Mentoring</span>
                    </div>
                </div>

                <div class="success-card">
                    <div class="success-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Siti Nurhaliza</h3>
                    <p class="success-role">Product Manager at Tokopedia</p>
                    <p class="success-story">"Melalui kompetisi HMIT, saya bisa showcase portfolio saya dan akhirnya mendapat kesempatan interview di Tokopedia."</p>
                    <div class="success-meta">
                        <span><i class="fas fa-star"></i> Kompetisi</span>
                        <span><i class="fas fa-star"></i> Networking</span>
                    </div>
                </div>

                <div class="success-card">
                    <div class="success-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Ahmad Wijaya</h3>
                    <p class="success-role">Founder of TechStartup</p>
                    <p class="success-story">"Komunitas HMIT memberikan support dan resources yang saya butuhkan untuk memulai startup saya sendiri."</p>
                    <div class="success-meta">
                        <span><i class="fas fa-star"></i> Study Group</span>
                        <span><i class="fas fa-star"></i> Community</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="programs-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Mengembangkan Skill Anda?</h2>
                <p>Bergabunglah dengan ribuan mahasiswa yang telah merasakan manfaat program HMIT</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Daftar Sekarang</a>
                    <a href="#about" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>
@endsection
