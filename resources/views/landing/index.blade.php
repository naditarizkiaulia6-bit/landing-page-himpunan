@extends('layouts.app')

@section('title', 'HMIT - Himpunan Mahasiswa Informatika')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
:root {
    --navy: #0a1628;
    --navy-mid: #0f2044;
    --navy-light: #162a55;
    --gold: #c9a84c;
    --gold-light: #e2c97e;
    --gold-pale: #f5e9c8;
    --text-muted: #8da4c8;
}

body {
    background: var(--navy);
    font-family: 'DM Sans', sans-serif;
    color: #fff;
}

/* ── HERO ── */
.hero {
    min-height: 100vh;
    background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 60%, #0c1e3d 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    padding: 2rem;
}
.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 70% 40%, rgba(201,168,76,.12) 0%, transparent 70%);
}

.hero-content {
    position: relative;
    text-align: center;
    max-width: 760px;
    z-index: 2;
}
.hero-content::before {
    content: 'HMIT';
    position: absolute;
    font-family: 'Playfair Display', serif;
    font-size: clamp(6rem, 18vw, 16rem);
    font-weight: 700;
    color: rgba(201,168,76,.04);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    white-space: nowrap;
    pointer-events: none;
    z-index: -1;
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.6rem);
    line-height: 1.2;
    color: #fff;
    margin-bottom: 1rem;
}
.hero-subtitle {
    font-size: 1.05rem;
    color: var(--text-muted);
    font-style: italic;
    margin-bottom: 2.5rem;
    letter-spacing: .03em;
}

/* floating shapes tetap pakai class lama kamu */
.hero-background { position: absolute; inset: 0; pointer-events: none; }
.floating-shape { position: absolute; border-radius: 50%; }
.shape-1 { width: 340px; height: 340px; background: radial-gradient(circle, rgba(201,168,76,.18), transparent 70%); top: -60px; right: -60px; opacity: .35; }
.shape-2 { width: 220px; height: 220px; background: radial-gradient(circle, rgba(22,42,85,.9), transparent 70%); bottom: 80px; left: 40px; opacity: .35; }
.shape-3 { width: 160px; height: 160px; background: radial-gradient(circle, rgba(201,168,76,.12), transparent 70%); bottom: 30%; right: 15%; opacity: .35; }

.hero-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }

/* ── BUTTONS ── */
.btn-primary {
    background: var(--gold) !important;
    color: var(--navy) !important;
    border: none !important;
    border-radius: 4px !important;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    transition: all .25s ease;
}
.btn-primary:hover { background: var(--gold-light) !important; transform: translateY(-2px); color: var(--navy) !important; }

.btn-secondary {
    background: transparent !important;
    color: #fff !important;
    border: 1px solid rgba(255,255,255,.3) !important;
    border-radius: 4px !important;
}
.btn-secondary:hover { border-color: var(--gold) !important; color: var(--gold) !important; }

/* ── SECTION TITLES ── */
.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    color: #fff;
}

/* ── GOLD DIVIDER ── */
.gold-divider {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin: 0 auto 2.5rem;
    max-width: 220px;
}
.gold-divider::before,
.gold-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--gold);
    opacity: .4;
}
.gold-diamond {
    width: 8px;
    height: 8px;
    background: var(--gold);
    transform: rotate(45deg);
}

/* ── MENU SECTION ── */
.main-menu {
    padding: 5rem 0;
    background: var(--navy-mid);
}
.section-subtitle {
    color: var(--text-muted);
    text-align: center;
    font-size: .95rem;
    margin-bottom: 2rem;
}
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}
.menu-card {
    background: var(--navy-light);
    border: 1px solid rgba(201,168,76,.18);
    border-radius: 8px;
    padding: 2rem 1.5rem;
    position: relative;
    overflow: hidden;
    transition: all .3s ease;
}
.menu-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
    opacity: 0;
    transition: .3s;
}
.menu-card:hover { border-color: rgba(201,168,76,.5); transform: translateY(-4px); }
.menu-card:hover::before { opacity: 1; }

.menu-icon {
    width: 52px;
    height: 52px;
    border-radius: 8px;
    background: rgba(201,168,76,.12);
    border: 1px solid rgba(201,168,76,.3);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.2rem;
    font-size: 1.2rem;
    color: var(--gold);
}
.menu-card h3 { font-size: 1.05rem; font-weight: 500; color: #fff; margin-bottom: .5rem; }
.menu-card p { font-size: .875rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.2rem; }

.menu-link {
    font-size: .8rem;
    color: var(--gold);
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    font-weight: 500;
    letter-spacing: .05em;
    text-transform: uppercase;
}
.menu-link::after { content: '→'; transition: .2s; }
.menu-link:hover::after { transform: translateX(4px); }

/* ── ABOUT PREVIEW ── */
.about {
    padding: 5rem 0;
    background: var(--navy) !important;
    position: relative;
}
.about::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 50% at 30% 50%, rgba(201,168,76,.06), transparent 70%);
    pointer-events: none;
}
.about p { color: var(--text-muted); line-height: 1.8; }
.about strong { color: var(--gold-light); }

.year-badge {
    display: inline-block;
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--gold);
    border: 2px solid rgba(201,168,76,.3);
    border-radius: 8px;
    padding: .3rem 1.2rem;
    margin-bottom: 1.5rem;
    background: rgba(201,168,76,.06);
}

/* ── PROGRAMS PREVIEW ── */
.programs {
    padding: 5rem 0;
    background: var(--navy-mid) !important;
}
.prog-tags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: .6rem;
    margin-bottom: 1.5rem;
}
.prog-tag {
    padding: .35rem .9rem;
    border-radius: 50px;
    font-size: .8rem;
    border: 1px solid rgba(201,168,76,.3);
    color: var(--gold-pale);
    background: rgba(201,168,76,.06);
}

/* ── LOGIN SECTION ── */
.login-section {
    padding: 5rem 0;
    background: var(--navy) !important;
    position: relative;
}
.login-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 50% at 70% 50%, rgba(201,168,76,.06), transparent 70%);
    pointer-events: none;
}

.login-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 2.5rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.login-option-card {
    background: var(--navy-light);
    border: 1px solid rgba(201,168,76,.2);
    border-radius: 12px;
    padding: 2.5rem 2rem;
    position: relative;
    overflow: hidden;
    transition: all .3s ease;
}
.login-option-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
    opacity: 0;
    transition: .3s;
}
.login-option-card:hover {
    border-color: rgba(201,168,76,.5);
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(201,168,76,.15);
}
.login-option-card:hover::before {
    opacity: 1;
}

.login-option-icon {
    width: 70px;
    height: 70px;
    border-radius: 12px;
    background: rgba(201,168,76,.15);
    border: 2px solid rgba(201,168,76,.3);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.8rem;
    color: var(--gold);
}

.login-option-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: .8rem;
}

.login-option-card p {
    color: var(--text-muted);
    font-size: .95rem;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.login-option-card .btn {
    width: 100%;
    padding: .75rem 1.5rem;
    font-size: .9rem;
}

</style>
@endpush

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Kabinet Ciptakara — Himpunan Mahasiswa <span style="color:var(--gold)">Informatika</span></h1>
        <p class="hero-subtitle">Dari Inisiatif Menjadi Dampak</p>

        <div class="hero-buttons">
            <a href="/programs" class="btn btn-primary">Jelajahi Program</a>
            <a href="/about" class="btn btn-secondary">Tentang Kami</a>
        </div>
    </div>

    <div class="hero-background">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
</section>

<!-- MENU UTAMA -->
<section class="main-menu py-5">
    <div class="container">
        <h2 class="section-title text-center mb-2">Jelajahi HMIT</h2>
        <p class="section-subtitle">Temukan semua yang HMIT tawarkan untuk mahasiswa informatika</p>
        <div class="gold-divider"><div class="gold-diamond"></div></div>

        <div class="menu-grid">
            <div class="menu-card menu-card-1">
                <div class="menu-icon"><i class="fas fa-calendar-alt"></i></div>
                <h3>Program & Kegiatan</h3>
                <p>Berbagai program unggulan dan kegiatan menarik setiap tahunnya</p>
                <a href="/programs" class="menu-link">Lihat Selengkapnya</a>
            </div>

            <div class="menu-card menu-card-2">
                <div class="menu-icon"><i class="fas fa-users"></i></div>
                <h3>Tentang Organisasi</h3>
                <p>Visi, misi, sejarah, dan pencapaian HMIT</p>
                <a href="/about" class="menu-link">Pelajari Lebih Lanjut</a>
            </div>

            <div class="menu-card menu-card-3">
                <div class="menu-icon"><i class="fas fa-user-plus"></i></div>
                <h3>Pendaftaran</h3>
                <p>Bergabunglah bersama kami menjadi bagian dari HMIT</p>
                <a href="/daftar" class="menu-link">Daftar Sekarang</a>
            </div>

            <div class="menu-card menu-card-4">
                <div class="menu-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>Aspirasi Mahasiswa</h3>
                <p>Sampaikan kritik, saran, dan ide untuk kemajuan organisasi</p>
                <a href="/aspirasi" class="menu-link">Kirim Aspirasi</a>
            </div>
        </div>
    </div>
</section>

<!-- PREVIEW ABOUT -->
<section class="about py-5">
    <div class="container text-center">
        <h2 class="section-title">Tentang HMIT</h2>
        <div class="gold-divider"><div class="gold-diamond"></div></div>

        <div class="year-badge">2017</div>

        <p class="mt-3">
            Himpunan Mahasiswa Informatika berdiri sejak <strong>2017</strong>
            sebagai wadah pengembangan potensi mahasiswa di bidang teknologi.
        </p>

        <a href="/about" class="btn btn-primary mt-3">Baca Selengkapnya</a>
    </div>
</section>

<!-- PREVIEW PROGRAM -->
<section class="programs py-5">
    <div class="container text-center">
        <h2 class="section-title">Program Unggulan</h2>
        <div class="gold-divider"><div class="gold-diamond"></div></div>

        <div class="prog-tags">
            <span class="prog-tag"><i class="fas fa-laptop-code" style="margin-right:.4rem"></i>Workshop</span>
            <span class="prog-tag"><i class="fas fa-trophy" style="margin-right:.4rem"></i>Kompetisi</span>
            <span class="prog-tag"><i class="fas fa-chalkboard-teacher" style="margin-right:.4rem"></i>Mentoring</span>
            <span class="prog-tag"><i class="fas fa-microchip" style="margin-right:.4rem"></i>Teknologi</span>
        </div>

        <p class="mt-3" style="color:var(--text-muted)">
            Workshop, kompetisi, mentoring, dan berbagai kegiatan teknologi lainnya.
        </p>

        <a href="/programs" class="btn btn-primary mt-3">Lihat Program</a>
    </div>
</section>

<!-- LOGIN SECTION -->
<section class="login-section py-5">
    <div class="container text-center">
        <h2 class="section-title">Akses Member Area</h2>
        <div class="gold-divider"><div class="gold-diamond"></div></div>

        <p class="mt-3" style="color:var(--text-muted); margin-bottom: 2.5rem;">
            Masuk ke akun Anda untuk mengakses dashboard dan mengelola profil
        </p>

        <div class="login-options">
            <div class="login-option-card">
                <div class="login-option-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Login Anggota</h3>
                <p>Akses dashboard anggota dan kelola profil Anda</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login Sebagai Anggota</a>
            </div>

            <div class="login-option-card">
                <div class="login-option-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Login Admin</h3>
                <p>Kelola data anggota dan administrasi HMIT</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login Sebagai Admin</a>
            </div>
        </div>

        <p class="mt-4" style="color:var(--text-muted); font-size: 0.9rem;">
            Belum punya akun? <a href="/daftar" style="color: var(--gold); text-decoration: none; font-weight: 500;">Daftar di sini</a>
        </p>
    </div>
</section>

@endsection