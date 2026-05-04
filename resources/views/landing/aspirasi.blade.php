@extends('layouts.app')

@section('title', 'Aspirasi Mahasiswa - HMIT')

@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #c9a84c;
        --secondary-color: #e2c97e;
        --dark-bg: #0a1628;
        --light-bg: #0a1628;
        --text-dark: #ffffff;
        --text-light: #8da4c8;
        --border-color: rgba(201, 168, 76, 0.2);
        --transition: all 0.3s ease;
    }

    /* GAYA UNTUK Halaman Aspirasi */
    #aspirasi-page {
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background: linear-gradient(135deg, var(--dark-bg) 0%, #0f2044 60%, #0c1e3d 100%);
        padding: 80px 20px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    /* Floating shapes background */
    #aspirasi-page::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 80% 60% at 70% 40%, rgba(201, 168, 76, 0.08) 0%, transparent 70%);
        pointer-events: none;
    }

    /* KONTEN UTAMA DENGAN EFEK KACA */
    .glass-container {
        max-width: 650px;
        width: 100%;
        background: rgba(15, 32, 68, 0.6);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 20px;
        padding: 50px 40px;
        box-shadow: 0 15px 50px rgba(201, 168, 76, 0.15);
        border: 1px solid rgba(201, 168, 76, 0.25);
        text-align: center;
        position: relative;
        z-index: 2;
    }

    /* TYPOGRAPHY */
    .glass-title {
        font-weight: 700;
        font-size: 2.5rem;
        letter-spacing: -0.5px;
        margin-bottom: 10px;
        color: var(--primary-color);
        font-family: 'Playfair Display', serif;
    }

    .glass-subtitle {
        color: var(--text-light);
        font-size: 1.05rem;
        margin-bottom: 40px;
        line-height: 1.6;
        font-style: italic;
    }

    /* FORM STYLING */
    .form-aspirasi {
        text-align: left;
    }

    /* Menghilangkan label standar */
    .form-aspirasi .form-label {
        display: none;
    }

    .input-group-modern {
        position: relative;
        margin-bottom: 20px;
    }

    /* Ikon di dalam input */
    .input-group-modern .input-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
        font-size: 1.1rem;
        pointer-events: none;
        transition: var(--transition);
    }

    /* Input Fields */
    .form-modern {
        width: 100%;
        border-radius: 12px;
        padding: 14px 20px 14px 50px;
        border: 1px solid rgba(201, 168, 76, 0.3);
        background: rgba(255, 255, 255, 0.08);
        font-size: 1rem;
        color: var(--text-dark);
        transition: var(--transition);
        box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.2);
        font-family: 'Poppins', sans-serif;
    }

    /* Placeholder Styling */
    .form-modern::placeholder {
        color: rgba(141, 164, 200, 0.6);
        opacity: 1;
    }

    /* Input Focus State */
    .form-modern:focus {
        background: rgba(255, 255, 255, 0.12);
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(201, 168, 76, 0.15), inset 0 2px 8px rgba(0, 0, 0, 0.2);
        outline: none;
    }

    .form-modern:focus ~ .input-icon {
        color: var(--primary-color);
    }

    /* Kategori Select styling khusus */
    .form-select.form-modern {
        appearance: none;
        -webkit-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="%23c9a84c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 18px;
        padding-right: 45px;
    }

    /* Textarea styling khusus */
    textarea.form-modern {
        border-radius: 12px;
        padding: 14px 20px;
        resize: vertical;
        margin-bottom: 30px;
        font-family: 'Poppins', sans-serif;
    }

    /* BUTTON */
    .btn-submit-glass {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--dark-bg);
        border: none;
        border-radius: 12px;
        padding: 14px 40px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 8px 25px rgba(201, 168, 76, 0.25);
        display: inline-block;
        width: 100%;
        margin-top: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .btn-submit-glass:hover {
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        box-shadow: 0 12px 35px rgba(201, 168, 76, 0.35);
        transform: translateY(-3px);
    }

    .btn-submit-glass:active {
        transform: scale(0.98);
    }

    /* ALERT SUCCESS */
    .alert-glass {
        background: rgba(16, 185, 129, 0.15);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #10b981;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 25px;
        text-align: left;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .glass-container {
            padding: 35px 25px;
            border-radius: 15px;
        }
        .glass-title {
            font-size: 2rem;
        }
        .glass-subtitle {
            font-size: 0.95rem;
        }
        #aspirasi-page {
            padding: 60px 15px;
        }
    }
</style>

<!-- Pembungkus halaman aspirasi agar gaya flex tidak mempengaruhi body/navbar/footer -->
<div id="aspirasi-page">
    <div class="glass-container">
        <h1 class="glass-title">Suara Mahasiswa</h1>
        <p class="glass-subtitle">Sampaikan ide, kritik, atau saran Anda untuk HMIT yang lebih baik.</p>

        @if(session('success'))
            <div class="alert alert-glass d-flex align-items-center" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form method="POST" action="/aspirasi" class="form-aspirasi">
            @csrf

            <!-- Nama (Input + Ikon + Kapsul) -->
            <div class="input-group-modern">
                <input type="text" name="nama" class="form-control form-modern" placeholder="Nama Lengkap (Opsional)">
                <i class="fas fa-user input-icon"></i>
            </div>

            <!-- Email (Input + Ikon + Kapsul) -->
            <div class="input-group-modern">
                <input type="email" name="email" class="form-control form-modern" placeholder="Email Aktif (Opsional)">
                <i class="fas fa-envelope input-icon"></i>
            </div>

            <!-- Kategori (Select + Ikon + Kapsul) -->
            <div class="input-group-modern">
                <select name="kategori" class="form-select form-modern" required>
                    <option value="" disabled selected>Pilih Kategori Aspirasi</option>
                    <option>Organisasi & Internal</option>
                    <option>Fasilitas & Akademik</option>
                    <option>Minat & Bakat (Kegiatan)</option>
                    <option>Lain-lain</option>
                </select>
                <i class="fas fa-tag input-icon"></i>
            </div>

            <!-- Isi Aspirasi (Textarea) -->
            <div class="input-group-modern">
                <textarea name="isi_aspirasi" rows="6" class="form-control form-modern" placeholder="Ceritakan detail aspirasi, saran, atau kritik Anda secara jelas..." required></textarea>
            </div>

            <!-- BUTTON (Kapsul) -->
            <div class="text-center">
                <button type="submit" class="btn btn-submit-glass">
                    Kirim Aspirasi <i class="fas fa-paper-plane ms-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection