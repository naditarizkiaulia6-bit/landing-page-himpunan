@extends('layouts.app')

@section('title', 'Edit Profil - HMIT')

@section('content')
    <section class="edit-profile-section">
        <div class="container">
            <div class="edit-profile-header">
                <h1>Edit Profil</h1>
                <a href="{{ route('anggota.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>

            @if ($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="edit-profile-container">
                <!-- Profile Form -->
                <div class="form-card">
                    <h2>Informasi Profil</h2>
                    <form action="{{ route('anggota.update-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input 
                                type="text" 
                                id="nama" 
                                name="nama" 
                                value="{{ old('nama', $anggota->nama) }}"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="no_telepon">No. Telepon</label>
                            <input 
                                type="text" 
                                id="no_telepon" 
                                name="no_telepon" 
                                value="{{ old('no_telepon', $anggota->no_telepon) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input 
                                type="text" 
                                id="jurusan" 
                                name="jurusan" 
                                value="{{ old('jurusan', $anggota->jurusan) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input 
                                type="text" 
                                id="tahun_masuk" 
                                name="tahun_masuk" 
                                value="{{ old('tahun_masuk', $anggota->tahun_masuk) }}"
                                placeholder="Contoh: 2023"
                            >
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea 
                                id="alamat" 
                                name="alamat" 
                                rows="4"
                            >{{ old('alamat', $anggota->alamat) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="foto_profil">Foto Profil</label>
                            <div class="file-input-wrapper">
                                @if ($anggota->foto_profil)
                                    <div class="current-photo">
                                        <img src="{{ asset($anggota->foto_profil) }}" alt="Foto Profil">
                                        <p>Foto saat ini</p>
                                    </div>
                                @endif
                                <input 
                                    type="file" 
                                    id="foto_profil" 
                                    name="foto_profil" 
                                    accept="image/*"
                                >
                                <label for="foto_profil" class="file-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span>Pilih foto atau drag & drop</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </form>
                </div>

                <!-- Change Password Form -->
                <div class="form-card" id="password">
                    <h2>Ubah Password</h2>
                    <form action="{{ route('anggota.change-password') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <div class="input-wrapper">
                                <input 
                                    type="password" 
                                    id="password_lama" 
                                    name="password_lama" 
                                    required
                                >
                                <button type="button" class="toggle-password" onclick="togglePassword('password_lama')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <div class="input-wrapper">
                                <input 
                                    type="password" 
                                    id="password_baru" 
                                    name="password_baru" 
                                    required
                                >
                                <button type="button" class="toggle-password" onclick="togglePassword('password_baru')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_baru_confirmation">Konfirmasi Password Baru</label>
                            <div class="input-wrapper">
                                <input 
                                    type="password" 
                                    id="password_baru_confirmation" 
                                    name="password_baru_confirmation" 
                                    required
                                >
                                <button type="button" class="toggle-password" onclick="togglePassword('password_baru_confirmation')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-key"></i> Ubah Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .edit-profile-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .edit-profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .edit-profile-header h1 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin: 0;
        }

        .alert {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border-left: 4px solid #ef4444;
            color: #ef4444;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border-left: 4px solid #10b981;
            color: #10b981;
        }

        .alert i {
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .edit-profile-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
        }

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .form-card h2 {
            font-size: 1.5rem;
            margin: 0 0 30px;
            color: var(--text-dark);
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper input {
            width: 100%;
            padding-right: 40px;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            font-size: 1.1rem;
            transition: var(--transition);
        }

        .toggle-password:hover {
            color: var(--primary-color);
        }

        .file-input-wrapper {
            position: relative;
        }

        .current-photo {
            margin-bottom: 20px;
            text-align: center;
        }

        .current-photo img {
            max-width: 150px;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid var(--border-color);
        }

        .current-photo p {
            margin: 10px 0 0;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        #foto_profil {
            display: none;
        }

        .file-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            border: 2px dashed var(--border-color);
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            background: rgba(99, 102, 241, 0.02);
        }

        .file-label:hover {
            border-color: var(--primary-color);
            background: rgba(99, 102, 241, 0.05);
        }

        .file-label i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .file-label span {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .btn-large {
            width: 100%;
            padding: 12px 30px;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .edit-profile-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .edit-profile-container {
                grid-template-columns: 1fr;
            }

            .form-card {
                padding: 25px;
            }
        }
    </style>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const btn = event.target.closest('.toggle-password');
            
            if (input.type === 'password') {
                input.type = 'text';
                btn.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                input.type = 'password';
                btn.innerHTML = '<i class="fas fa-eye"></i>';
            }
        }
    </script>
@endsection
