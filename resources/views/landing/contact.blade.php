@extends('layouts.app')

@section('title', 'Hubungi Kami - HMIT')

@section('content')
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1 class="contact-hero-title">Hubungi Kami</h1>
                <p class="contact-hero-subtitle">Kami siap membantu menjawab pertanyaan Anda</p>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-info-grid">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Lokasi</h3>
                    <p>Fakultas Rekayasa Sistem</p>
                    <p>Universitas Teknologi Sumbawa</p>
                    <p>Sumbawa, NTB</p>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon</h3>
                    <p>+62 812-3456-7890</p>
                    <p>+62 812-9876-5432</p>
                    <p>Senin - Jumat, 09:00 - 17:00</p>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>hmit.uts@gmail.com</p>
                    <p>contacthmit.uts@gmail.com</p>
                    <p>Respon dalam 24 jam</p>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Jam Operasional</h3>
                    <p>Senin - Jumat: 09:00 - 17:00</p>
                    <p>Sabtu: 10:00 - 14:00</p>
                    <p>Minggu: Tutup</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="contact-form-header">
                    <h2>Kirim Pesan Kepada Kami</h2>
                    <p>Isi form di bawah ini dan kami akan segera menghubungi Anda</p>
                </div>

                <form class="contact-form" method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <select id="subject" name="subject" required>
                            <option value="">Pilih subjek</option>
                            <option value="general">Pertanyaan Umum</option>
                            <option value="membership">Keanggotaan</option>
                            <option value="event">Acara & Event</option>
                            <option value="program">Program</option>
                            <option value="partnership">Kerjasama</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="6" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="contact-social">
        <div class="container">
            <h2 class="section-title">Ikuti Kami di Media Sosial</h2>
            <div class="social-links-grid">
                <a href="#" class="social-link-card">
                    <i class="fab fa-facebook-f"></i>
                    <h3>Facebook</h3>
                    <p>@HMIT_Uts</p>
                </a>
                <a href="#" class="social-link-card">
                    <i class="fab fa-instagram"></i>
                    <h3>Instagram</h3>
                    <p>@hmit.uts</p>
                </a>
                <a href="#" class="social-link-card">
                    <i class="fab fa-youtube"></i>
                    <h3>YouTube</h3>
                    <p>HMIT UTS</p>
                </a>
                <a href="#" class="social-link-card">
                    <i class="fab fa-whatsapp"></i>
                    <h3>WhatsApp</h3>
                    <p>+62 812-3456-7890</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="contact-map">
        <div class="container">
            <h2 class="section-title">Lokasi Kami</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8234567890123!2d106.8234567890123!3d-6.1234567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1234567890%3A0x1234567890abcdef!2sGedung%20Informatika!5e0!3m2!1sid!2sid!4v1234567890123" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Masih Ada Pertanyaan?</h2>
                <p>Jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda 24/7</p>
                <a href="#contact-form" class="btn btn-primary">Kirim Pesan Sekarang</a>
            </div>
        </div>
    </section>
@endsection
