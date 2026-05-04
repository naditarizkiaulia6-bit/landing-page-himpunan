@extends('layouts.app')

@section('title', 'Profil Admin - HMIT')

@section('content')
    <section class="admin-profile-section">
        <div class="container">
            <div class="profile-header">
                <h1>Profil Admin</h1>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
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

            <div class="profile-container">
                <!-- Profile Info Card -->
                <div class="profile-card">
                    <div class="profile-header-card">
                        <div class="profile-avatar">
                            @if ($admin->foto_profil)
                                <img src="{{ asset($admin->foto_profil) }}" alt="{{ $admin->nama }}">
                            @else
                                <div class="avatar-placeholder">
                                    <i class="fas fa-user"></i>
                                </div>
                            @endif
                        </div>
                        <div class="profile-info">
                            <h2>{{ $admin->nama }}</h2>
                            <p class="profile-email">{{ $admin->email }}</p>
                            <span class="role-badge">{{ ucfirst(str_replace('_', ' ', $admin->role)) }}</span>
                        </div>
                    </div>

                    <div class="profile-details">
                        <div class="detail-item">
                            <label>Email</label>
                            <p>{{ $admin->email }}</p>
                        </div>
                        <div class="detail-item">
                            <label>No. Telepon</label>
                            <p>{{ $admin->no_telepon ?? '-' }}</p>
                        </div>
                        <div class="detail-item">
                            <label>Role</label>
                            <p>{{ ucfirst(str_replace('_', ' ', $admin->role)) }}</p>
                        </div>
                        <div class="detail-item">
                            <label>Status</label>
                            <p>
                                <span class="status-badge status-{{ $admin->status }}">
                                    {{ ucfirst($admin->status) }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Form -->
                <div class="form-card">
                    <h2>Edit Profil</h2>
                    <form action="{{ route('admin.update-profile') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input 
                                type="text" 
                                id="nama" 
                                name="nama" 
                                value="{{ old('nama', $admin->nama) }}"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="no_telepon">No. Telepon</label>
                            <input 
                                type="text" 
                                id="no_telepon" 
                                name="no_telepon" 
                                value="{{ old('no_telepon', $admin->no_telepon) }}"
                            >
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .admin-profile-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .profile-header h1 {
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

        .profile-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .profile-card,
        .form-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .profile-header-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 30px;
            border-radius: 12px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            background: white;
            flex-shrink: 0;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--primary-color);
        }

        .profile-info h2 {
            margin: 0 0 8px;
            font-size: 1.5rem;
        }

        .profile-email {
            margin: 0 0 12px;
            opacity: 0.9;
        }

        .role-badge {
            display: inline-block;
            padding: 6px 12px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .profile-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .detail-item label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .detail-item p {
            font-size: 1rem;
            color: var(--text-dark);
            margin: 0;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-aktif {
            background: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }

        .status-nonaktif {
            background: rgba(239, 68, 68, 0.2);
            color: #ef4444;
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

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .btn-large {
            width: 100%;
            padding: 12px 30px;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-container {
                grid-template-columns: 1fr;
            }

            .profile-header-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }
    </style>
@endsection
