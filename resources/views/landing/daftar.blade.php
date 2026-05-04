@extends('layouts.app')

@section('title', 'Pendaftaran HMIT - Himpunan Mahasiswa Informatika')

@section('content')
    <section class="daftar-section">
        <div class="daftar-background">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>

        <div class="container">
            <div class="daftar-header">
                <h1 class="daftar-title">Bergabung Bersama HMIT</h1>
                <p class="daftar-subtitle">Jadilah bagian dari komunitas mahasiswa informatika yang dinamis dan inovatif</p>
            </div>

            <div class="daftar-container">
                <!-- Left Side - Info -->
                <div class="daftar-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Bergabunglah dengan Kami</h3>
                        <p>Dapatkan akses ke berbagai program, workshop, dan kesempatan networking yang luar biasa</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Komunitas Solid</h3>
                        <p>Bersama dengan ribuan mahasiswa yang memiliki passion yang sama di bidang teknologi</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Kembangkan Potensi</h3>
                        <p>Tingkatkan skill, networking, dan pengalaman Anda bersama HMIT</p>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="daftar-form-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <div>
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="daftar-card">
                        <div class="form-header">
                            <h2>Form Pendaftaran</h2>
                            <p>Isi data diri Anda dengan lengkap dan benar</p>
                        </div>

                        <form method="POST" action="/daftar" class="daftar-form">
                            @csrf

                            <!-- Nama -->
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-user"></i>
                                    <input 
                                        type="text" 
                                        id="nama" 
                                        name="nama" 
                                        class="form-control" 
                                        placeholder="Masukkan nama lengkap Anda"
                                        value="{{ old('nama') }}"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        class="form-control" 
                                        placeholder="Masukkan email Anda"
                                        value="{{ old('email') }}"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- NIM -->
                            <div class="form-group">
                                <label for="nim">NIM (Nomor Induk Mahasiswa)</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-id-card"></i>
                                    <input 
                                        type="text" 
                                        id="nim" 
                                        name="nim" 
                                        class="form-control" 
                                        placeholder="Masukkan NIM Anda"
                                        value="{{ old('nim') }}"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="form-group">
                                <label for="no_whatsapp">No WhatsApp</label>
                                <div class="input-wrapper">
                                    <i class="fab fa-whatsapp"></i>
                                    <input 
                                        type="text" 
                                        id="no_whatsapp" 
                                        name="no_whatsapp" 
                                        class="form-control" 
                                        placeholder="Masukkan nomor WhatsApp Anda"
                                        value="{{ old('no_whatsapp') }}"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Departemen -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="departemen_pilihan_pertama">Departemen Utama</label>
                                    <div class="select-wrapper">
                                        <i class="fas fa-building"></i>
                                        <select 
                                            id="departemen_pilihan_pertama" 
                                            name="departemen_pilihan_pertama" 
                                            class="form-control"
                                            required
                                        >
                                            <option value="">Pilih Departemen Utama</option>
                                            <option value="psdm" {{ old('departemen_pilihan_pertama') === 'psdm' ? 'selected' : '' }}>PSDM</option>
                                            <option value="pwti" {{ old('departemen_pilihan_pertama') === 'pwti' ? 'selected' : '' }}>PWTI</option>
                                            <option value="media" {{ old('departemen_pilihan_pertama') === 'media' ? 'selected' : '' }}>MEDIA</option>
                                            <option value="kesra" {{ old('departemen_pilihan_pertama') === 'kesra' ? 'selected' : '' }}>KESRA</option>
                                            <option value="sosmas" {{ old('departemen_pilihan_pertama') === 'sosmas' ? 'selected' : '' }}>SOSMAS</option>
                                            <option value="ekraf" {{ old('departemen_pilihan_pertama') === 'ekraf' ? 'selected' : '' }}>EKRAF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="departemen_pilihan_kedua">Departemen Cadangan</label>
                                    <div class="select-wrapper">
                                        <i class="fas fa-building"></i>
                                        <select 
                                            id="departemen_pilihan_kedua" 
                                            name="departemen_pilihan_kedua" 
                                            class="form-control"
                                            required
                                        >
                                            <option value="">Pilih Departemen Cadangan</option>
                                            <option value="psdm" {{ old('departemen_pilihan_kedua') === 'psdm' ? 'selected' : '' }}>PSDM</option>
                                            <option value="pwti" {{ old('departemen_pilihan_kedua') === 'pwti' ? 'selected' : '' }}>PWTI</option>
                                            <option value="media" {{ old('departemen_pilihan_kedua') === 'media' ? 'selected' : '' }}>MEDIA</option>
                                            <option value="kesra" {{ old('departemen_pilihan_kedua') === 'kesra' ? 'selected' : '' }}>KESRA</option>
                                            <option value="sosmas" {{ old('departemen_pilihan_kedua') === 'sosmas' ? 'selected' : '' }}>SOSMAS</option>
                                            <option value="ekraf" {{ old('departemen_pilihan_kedua') === 'ekraf' ? 'selected' : '' }}>EKRAF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-paper-plane"></i>
                                Daftar Sekarang
                            </button>

                            <!-- Login Link -->
                            <p class="form-footer">
                                Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --navy: #0a1628;
            --navy-mid: #0f2044;
            --navy-light: #162a55;
            --gold: #c9a84c;
            --gold-light: #e2c97e;
            --text-muted: #8da4c8;
        }

        .daftar-section {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 50%, var(--navy-light) 100%);
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }

        .daftar-background {
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            background: var(--gold);
            top: -100px;
            right: -100px;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            background: var(--gold);
            bottom: 100px;
            left: -50px;
        }

        .shape-3 {
            width: 250px;
            height: 250px;
            background: var(--gold);
            top: 50%;
            right: 10%;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 1200px;
        }

        .daftar-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .daftar-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .daftar-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        .daftar-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .daftar-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .info-card {
            background: rgba(22, 42, 85, 0.5);
            border: 1px solid rgba(201, 168, 76, 0.2);
            border-radius: 12px;
            padding: 25px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            border-color: rgba(201, 168, 76, 0.5);
            background: rgba(22, 42, 85, 0.7);
            transform: translateX(10px);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .info-card h3 {
            font-size: 1.2rem;
            color: #ffffff;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .info-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .daftar-form-wrapper {
            display: flex;
            flex-direction: column;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border-left: 4px solid #10b981;
            color: #10b981;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border-left: 4px solid #ef4444;
            color: #ef4444;
        }

        .alert i {
            font-size: 1.2rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .alert p {
            margin: 0;
            font-size: 0.9rem;
        }

        .daftar-card {
            background: rgba(22, 42, 85, 0.8);
            border: 1px solid rgba(201, 168, 76, 0.3);
            border-radius: 15px;
            padding: 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .form-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .daftar-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: #ffffff;
            font-size: 0.95rem;
        }

        .input-wrapper,
        .select-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i,
        .select-wrapper i {
            position: absolute;
            left: 15px;
            color: var(--gold);
            font-size: 1.1rem;
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(201, 168, 76, 0.2);
            border-radius: 8px;
            color: #ffffff;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .form-control:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201, 168, 76, 0.1);
        }

        .form-control option {
            background: var(--navy-mid);
            color: #ffffff;
        }

        .btn-submit {
            padding: 14px 30px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy);
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(201, 168, 76, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .form-footer {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 15px;
        }

        .form-footer a {
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .form-footer a:hover {
            color: var(--gold-light);
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .daftar-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .daftar-info {
                order: 2;
            }

            .daftar-form-wrapper {
                order: 1;
            }
        }

        @media (max-width: 768px) {
            .daftar-section {
                padding: 60px 20px;
            }

            .daftar-title {
                font-size: 2rem;
            }

            .daftar-card {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }

            .info-card {
                padding: 20px;
            }

            .shape-1,
            .shape-2,
            .shape-3 {
                opacity: 0.05;
            }
        }

        @media (max-width: 480px) {
            .daftar-section {
                padding: 40px 15px;
            }

            .daftar-title {
                font-size: 1.5rem;
            }

            .daftar-subtitle {
                font-size: 0.95rem;
            }

            .daftar-card {
                padding: 20px;
            }

            .form-header h2 {
                font-size: 1.3rem;
            }

            .form-control {
                padding: 10px 12px 10px 40px;
                font-size: 16px;
            }

            .input-wrapper i,
            .select-wrapper i {
                left: 12px;
                font-size: 1rem;
            }

            .btn-submit {
                padding: 12px 20px;
                font-size: 0.95rem;
            }

            .btn-submit i {
                display: none;
            }
        }
    </style>
@endsection
