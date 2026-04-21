@extends('layouts.app')

@section('title', 'Acara & Event - HMIT')

@section('content')
    <!-- Hero Section -->
    <section class="events-hero">
        <div class="container">
            <div class="events-hero-content">
                <h1 class="events-hero-title">Acara & Event HMIT</h1>
                <p class="events-hero-subtitle">Bergabunglah dengan kami dalam berbagai acara menarik dan penuh pembelajaran</p>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="events-filter-section">
        <div class="container">
            <div class="filter-wrapper">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua Acara</button>
                    <button class="filter-btn" data-filter="workshop">Workshop</button>
                    <button class="filter-btn" data-filter="seminar">Seminar</button>
                    <button class="filter-btn" data-filter="kompetisi">Kompetisi</button>
                    <button class="filter-btn" data-filter="networking">Networking</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="events-upcoming">
        <div class="container">
            <h2 class="section-title">Acara Mendatang</h2>
            <div class="events-grid">
                <!-- Event 1 -->
                <div class="event-card" data-category="workshop">
                    <div class="event-image">
                        <div class="event-image-placeholder">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <span class="event-badge">Workshop</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>15 April 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>14:00 - 17:00</span>
                        </div>
                        <h3 class="event-title">Web Development dengan Laravel & Vue.js</h3>
                        <p class="event-description">Pelajari cara membuat website modern menggunakan framework Laravel dan Vue.js. Cocok untuk pemula hingga intermediate.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Lab Informatika</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>50 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card" data-category="kompetisi">
                    <div class="event-image">
                        <div class="event-image-placeholder" style="background: linear-gradient(135deg, #ec4899, #f43f5e);">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <span class="event-badge" style="background: #ec4899;">Kompetisi</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>22 April 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>09:00 - 15:00</span>
                        </div>
                        <h3 class="event-title">Coding Competition 2024</h3>
                        <p class="event-description">Kompetisi programming dengan hadiah menarik. Uji kemampuan coding Anda dan menangkan berbagai hadiah eksklusif.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Auditorium Kampus</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>100 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card" data-category="seminar">
                    <div class="event-image">
                        <div class="event-image-placeholder" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                            <i class="fas fa-brain"></i>
                        </div>
                        <span class="event-badge" style="background: #8b5cf6;">Seminar</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>29 April 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>13:00 - 16:00</span>
                        </div>
                        <h3 class="event-title">Tech Talk: AI & Machine Learning</h3>
                        <p class="event-description">Diskusi mendalam tentang perkembangan AI dan Machine Learning terkini. Pembicara dari industri tech terkemuka.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Seminar</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>75 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event 4 -->
                <div class="event-card" data-category="networking">
                    <div class="event-image">
                        <div class="event-image-placeholder" style="background: linear-gradient(135deg, #06b6d4, #0891b2);">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="event-badge" style="background: #06b6d4;">Networking</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 Mei 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>16:00 - 18:00</span>
                        </div>
                        <h3 class="event-title">Networking Session dengan Alumni & Profesional</h3>
                        <p class="event-description">Kesempatan bertemu dengan alumni sukses dan profesional di bidang teknologi. Sharing pengalaman dan peluang karir.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Pertemuan</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>60 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event 5 -->
                <div class="event-card" data-category="workshop">
                    <div class="event-image">
                        <div class="event-image-placeholder" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <span class="event-badge" style="background: #10b981;">Workshop</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>12 Mei 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>14:00 - 17:00</span>
                        </div>
                        <h3 class="event-title">Mobile App Development dengan React Native</h3>
                        <p class="event-description">Belajar membuat aplikasi mobile cross-platform menggunakan React Native. Dari konsep hingga deployment.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Lab Informatika</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>40 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Event 6 -->
                <div class="event-card" data-category="seminar">
                    <div class="event-image">
                        <div class="event-image-placeholder" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                            <i class="fas fa-database"></i>
                        </div>
                        <span class="event-badge" style="background: #f59e0b;">Seminar</span>
                        <span class="event-status">Mendatang</span>
                    </div>
                    <div class="event-content">
                        <div class="event-date-time">
                            <i class="fas fa-calendar-alt"></i>
                            <span>19 Mei 2024</span>
                            <i class="fas fa-clock"></i>
                            <span>13:00 - 15:00</span>
                        </div>
                        <h3 class="event-title">Cloud Computing & DevOps Best Practices</h3>
                        <p class="event-description">Pelajari best practices dalam cloud computing dan DevOps. Studi kasus dari perusahaan-perusahaan besar.</p>
                        <div class="event-meta">
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Seminar</span>
                            </div>
                            <div class="event-capacity">
                                <i class="fas fa-users"></i>
                                <span>80 Peserta</span>
                            </div>
                        </div>
                        <button class="btn btn-primary event-btn">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Events Section -->
    <section class="events-past">
        <div class="container">
            <h2 class="section-title">Acara Sebelumnya</h2>
            <div class="past-events-list">
                <div class="past-event-item">
                    <div class="past-event-date">
                        <span class="month">Mar</span>
                        <span class="day">28</span>
                    </div>
                    <div class="past-event-info">
                        <h3>Introduction to Git & GitHub</h3>
                        <p>Workshop tentang version control dan kolaborasi menggunakan Git dan GitHub</p>
                        <div class="past-event-meta">
                            <span><i class="fas fa-users"></i> 45 Peserta</span>
                            <span><i class="fas fa-check-circle"></i> Selesai</span>
                        </div>
                    </div>
                </div>

                <div class="past-event-item">
                    <div class="past-event-date">
                        <span class="month">Mar</span>
                        <span class="day">21</span>
                    </div>
                    <div class="past-event-info">
                        <h3>UI/UX Design Workshop</h3>
                        <p>Belajar prinsip-prinsip desain UI/UX dan tools desain modern</p>
                        <div class="past-event-meta">
                            <span><i class="fas fa-users"></i> 38 Peserta</span>
                            <span><i class="fas fa-check-circle"></i> Selesai</span>
                        </div>
                    </div>
                </div>

                <div class="past-event-item">
                    <div class="past-event-date">
                        <span class="month">Mar</span>
                        <span class="day">14</span>
                    </div>
                    <div class="past-event-info">
                        <h3>Cybersecurity Awareness Seminar</h3>
                        <p>Seminar tentang keamanan cyber dan best practices dalam melindungi data</p>
                        <div class="past-event-meta">
                            <span><i class="fas fa-users"></i> 62 Peserta</span>
                            <span><i class="fas fa-check-circle"></i> Selesai</span>
                        </div>
                    </div>
                </div>

                <div class="past-event-item">
                    <div class="past-event-date">
                        <span class="month">Mar</span>
                        <span class="day">7</span>
                    </div>
                    <div class="past-event-info">
                        <h3>Python for Data Science</h3>
                        <p>Workshop intensif tentang Python dan aplikasinya dalam data science</p>
                        <div class="past-event-meta">
                            <span><i class="fas fa-users"></i> 55 Peserta</span>
                            <span><i class="fas fa-check-circle"></i> Selesai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Categories Section -->
    <section class="events-categories">
        <div class="container">
            <h2 class="section-title">Jenis-Jenis Acara</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Workshop</h3>
                    <p>Pelatihan praktis dan hands-on tentang teknologi dan skill terkini</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
                    <h3>Seminar</h3>
                    <p>Diskusi dan presentasi dari para ahli di bidang teknologi</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Kompetisi</h3>
                    <p>Ajang kompetisi untuk menguji kemampuan dan memenangkan hadiah</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Networking</h3>
                    <p>Kesempatan bertemu dengan profesional dan membangun koneksi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="events-newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Jangan Lewatkan Acara Kami</h2>
                <p>Daftarkan email Anda untuk mendapatkan notifikasi tentang acara-acara terbaru HMIT</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Masukkan email Anda" required>
                    <button type="submit" class="btn btn-primary">Berlangganan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
