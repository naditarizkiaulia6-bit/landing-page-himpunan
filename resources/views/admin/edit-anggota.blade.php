@extends('layouts.app')

@section('title', 'Edit Anggota - HMIT')

@section('content')
    <section class="admin-form-section">
        <div class="container">
            <div class="form-header">
                <h1>Edit Anggota</h1>
                <a href="{{ route('admin.list-anggota') }}" class="btn btn-secondary">
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

            <div class="form-card">
                <form action="{{ route('admin.update-anggota', $anggota->id) }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap *</label>
                            <input 
                                type="text" 
                                id="nama" 
                                name="nama" 
                                value="{{ old('nama', $anggota->nama) }}"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email', $anggota->email) }}"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nim">NIM *</label>
                            <input 
                                type="text" 
                                id="nim" 
                                name="nim" 
                                value="{{ old('nim', $anggota->nim) }}"
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
                    </div>

                    <div class="form-row">
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
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea 
                            id="alamat" 
                            name="alamat" 
                            rows="4"
                        >{{ old('alamat', $anggota->alamat) }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="status">Status *</label>
                            <select id="status" name="status" required>
                                <option value="aktif" {{ old('status', $anggota->status) === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ old('status', $anggota->status) === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                        <a href="{{ route('admin.list-anggota') }}" class="btn btn-secondary btn-large">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <style>
        .admin-form-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-header h1 {
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

        .alert i {
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            max-width: 700px;
            margin: 0 auto;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .btn-large {
            flex: 1;
            padding: 12px 30px;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .form-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-card {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn-large {
                width: 100%;
            }
        }
    </style>
@endsection
