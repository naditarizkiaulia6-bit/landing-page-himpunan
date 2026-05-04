@extends('layouts.app')

@section('title', 'Dashboard Anggota - HMIT')

@section('content')
    <section class="dashboard-section">
        <div class="container">
            <!-- Header -->
            <div class="dashboard-header">
                <div class="header-content">
                    <h1>Dashboard Anggota</h1>
                    <p>Selamat datang, <strong>{{ $anggota->nama }}</strong></p>
                </div>
                <div class="header-actions">
                    <a href="{{ route('anggota.edit-profile') }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit Profil
                    </a>
                    <a href="{{ route('logout.anggota') }}" class="btn btn-secondary">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Profile Card -->
            <div class="profile-card">
                <div class="profile-header">
                    <div class="profile-avatar">
                        @if ($anggota->foto_profil)
                            <img src="{{ asset($anggota->foto_profil) }}" alt="{{ $anggota->nama }}">
                        @else
                            <div class="avatar-placeholder">
                                <i class="fas fa-user"></i>
                            </div>
                        @endif
                    </div>
                    <div class="profile-info">
                        <h2>{{ $anggota->nama }}</h2>
                        <p class="profile-email">{{ $anggota->email }}</p>
                        <span class="status-badge status-{{ $anggota->status }}">
                            {{ ucfirst($anggota->status) }}
                        </span>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="detail-row">
                        <div class="detail-item">
                            <label>NIM</label>
                            <p>{{ $anggota->nim ?? '-' }}</p>
                        </div>
                        <div class="detail-item">
                            <label>No. Telepon</label>
                            <p>{{ $anggota->no_telepon ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="detail-row">
                        <div class="detail-item">
                            <label>Jurusan</label>
                            <p>{{ $anggota->jurusan ?? '-' }}</p>
                        </div>
                        <div class="detail-item">
                            <label>Tahun Masuk</label>
                            <p>{{ $anggota->tahun_masuk ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="detail-row">
                        <div class="detail-item full-width">
                            <label>Alamat</label>
                            <p>{{ $anggota->alamat ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <h3>Edit Profil</h3>
                    <p>Perbarui informasi profil Anda</p>
                    <a href="{{ route('anggota.edit-profile') }}" class="btn btn-small">Buka</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3>Ubah Password</h3>
                    <p>Perbarui password akun Anda</p>
                    <a href="{{ route('anggota.edit-profile') }}#password" class="btn btn-small">Buka</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Kembali ke Beranda</h3>
                    <p>Kembali ke halaman utama HMIT</p>
                    <a href="{{ route('home') }}" class="btn btn-small">Buka</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .dashboard-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin: 0;
        }

        .dashboard-header p {
            color: var(--text-light);
            margin: 5px 0 0;
        }

        .header-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .alert {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            align-items: flex-start;
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

        .profile-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }

        .profile-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
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
            font-size: 3rem;
            color: var(--primary-color);
        }

        .profile-info h2 {
            margin: 0 0 10px;
            font-size: 1.8rem;
        }

        .profile-email {
            margin: 0 0 15px;
            opacity: 0.9;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.2);
        }

        .status-aktif {
            background: rgba(16, 185, 129, 0.3);
            color: #10b981;
        }

        .status-nonaktif {
            background: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .profile-details {
            padding: 40px;
        }

        .detail-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .detail-row:last-child {
            margin-bottom: 0;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .detail-item.full-width {
            grid-column: 1 / -1;
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

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .action-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
        }

        .action-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.15);
        }

        .action-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .action-card h3 {
            font-size: 1.3rem;
            margin: 0 0 10px;
            color: var(--text-dark);
        }

        .action-card p {
            color: var(--text-light);
            margin: 0 0 20px;
            font-size: 0.95rem;
        }

        .btn-small {
            padding: 8px 20px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .detail-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection
