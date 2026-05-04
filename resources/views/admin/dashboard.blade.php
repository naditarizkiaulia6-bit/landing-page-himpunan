@extends('layouts.app')

@section('title', 'Dashboard Admin - HMIT')

@section('content')
    <section class="admin-dashboard-section">
        <div class="container">
            <!-- Header -->
            <div class="admin-header">
                <div class="header-content">
                    <h1>Dashboard Admin</h1>
                    <p>Selamat datang, <strong>{{ $admin->nama }}</strong></p>
                </div>
                <div class="header-actions">
                    <a href="{{ route('admin.create-anggota') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Tambah Anggota
                    </a>
                    <a href="{{ route('admin.profile') }}" class="btn btn-secondary">
                        <i class="fas fa-user-cog"></i> Profil
                    </a>
                    <a href="{{ route('logout.admin') }}" class="btn btn-danger">
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

            <!-- Statistics -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Total Anggota</h3>
                        <p class="stat-number">{{ $totalAnggota }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Anggota Aktif</h3>
                        <p class="stat-number">{{ $anggotaAktif }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Anggota Nonaktif</h3>
                        <p class="stat-number">{{ $anggotaNonaktif }}</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <h3>Kelola Anggota</h3>
                    <p>Lihat, edit, dan hapus data anggota</p>
                    <a href="{{ route('admin.list-anggota') }}" class="btn btn-small">Buka</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3>Tambah Anggota</h3>
                    <p>Tambahkan anggota baru ke sistem</p>
                    <a href="{{ route('admin.create-anggota') }}" class="btn btn-small">Buka</a>
                </div>

                <div class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Profil Admin</h3>
                    <p>Kelola profil dan pengaturan admin</p>
                    <a href="{{ route('admin.profile') }}" class="btn btn-small">Buka</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .admin-dashboard-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .admin-header h1 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin: 0;
        }

        .admin-header p {
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

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            gap: 20px;
            align-items: center;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            flex-shrink: 0;
        }

        .stat-content h3 {
            font-size: 0.95rem;
            color: var(--text-light);
            margin: 0 0 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
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

        .btn-danger {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
        }

        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(239, 68, 68, 0.3);
        }

        @media (max-width: 768px) {
            .admin-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-actions {
                width: 100%;
                flex-direction: column;
            }

            .header-actions .btn {
                width: 100%;
            }
        }
    </style>
@endsection
