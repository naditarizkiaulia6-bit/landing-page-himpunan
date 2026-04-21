@extends('layouts.app')

@section('title', 'Program Unggulan - HMIT')

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
                    <p>Belajar bersama dengan ribuan mahasiswa yang memiliki passion yang sama</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Sertifikat Resmi</h3>
                    <p>Dapatkan sertifikat yang diakui industri setelah menyelesaikan program</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Peluang Karir</h3>
                    <p>Akses ke peluang magang dan pekerjaan dari perusahaan-perusahaan terkemuka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Programs Section -->
    <section class="programs-main">
        <div class="container">
            <h2 class="section-title">Program Unggulan Kami</h2>
            <div class="programs-grid">
                <!-- Program 1: Workshop -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Workshop & Training</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Pelatihan intensif tentang teknologi terkini dengan instruktur berpengalaman</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Hands-on learning</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Project-based</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Sertifikat</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Mentoring</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Workshop</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">2000+</span>
                                <span class="stat-label">Peserta</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Lihat Workshop</button>
                </div>

                <!-- Program 2: Kompetisi -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3>Kompetisi & Challenge</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Ajang kompetisi untuk menguji kemampuan dan memenangkan hadiah menarik</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Hadiah menarik</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Networking</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Portfolio builder</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Recognition</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Kompetisi</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Peserta</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Lihat Kompetisi</button>
                </div>

                <!-- Program 3: Mentoring -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Mentoring Program</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Bimbingan personal dari mentor berpengalaman untuk pengembangan karir Anda</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>1-on-1 mentoring</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Career guidance</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Skill development</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Job placement</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Mentor</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">300+</span>
                                <span class="stat-label">Mentee</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Daftar Mentoring</button>
                </div>

                <!-- Program 4: Study Group -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Study Group</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Kelompok belajar kolaboratif untuk memahami materi dengan lebih mendalam</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Peer learning</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Discussion forum</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Resource sharing</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Flexible schedule</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">30+</span>
                                <span class="stat-label">Study Group</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">800+</span>
                                <span class="stat-label">Anggota</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Bergabung Study Group</button>
                </div>

                <!-- Program 5: Networking -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Networking Event</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Kesempatan bertemu dengan profesional, alumni, dan investor di industri tech</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Industry leaders</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Alumni network</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Job opportunities</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Collaboration</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">20+</span>
                                <span class="stat-label">Event/Tahun</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Peserta</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Lihat Event</button>
                </div>

                <!-- Program 6: Community Service -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Community Service</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-description">Kontribusi nyata kepada masyarakat melalui teknologi dan inovasi sosial</p>
                        <div class="program-features">
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Social impact</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Tech for good</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Volunteer work</span>
                            </div>
                            <div class="feature">
                                <i class="fas fa-check"></i>
                                <span>Experience</span>
                            </div>
                        </div>
                        <div class="program-stats">
                            <div class="stat">
                                <span class="stat-number">10+</span>
                                <span class="stat-label">Project</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">200+</span>
                                <span class="stat-label">Volunteer</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary program-btn">Ikut Berkontribusi</button>
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

    <!-- FAQ Section -->
    <section class="programs-faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apakah program HMIT gratis?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, sebagian besar program HMIT gratis untuk anggota. Beberapa workshop premium mungkin memiliki biaya nominal untuk cover biaya operasional.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Siapa saja yang bisa bergabung?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Semua mahasiswa dari universitas kami yang tertarik dengan teknologi dan informatika bisa bergabung dengan HMIT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana cara mendaftar?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Anda bisa mendaftar melalui website kami atau datang langsung ke kantor HMIT. Proses pendaftaran sangat mudah dan cepat.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apakah ada komitmen waktu?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tidak ada komitmen waktu yang ketat. Anda bisa mengikuti program sesuai dengan jadwal dan ketersediaan Anda.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apakah ada sertifikat?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, setiap peserta yang menyelesaikan program akan mendapatkan sertifikat resmi dari HMIT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana dengan peluang karir?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>HMIT memiliki partnership dengan berbagai perusahaan tech untuk memberikan peluang magang dan pekerjaan kepada anggota.</p>
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
