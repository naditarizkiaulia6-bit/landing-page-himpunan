@extends('layouts.app')

@section('title', 'Kelola Anggota - HMIT')

@section('content')
    <section class="admin-list-section">
        <div class="container">
            <!-- Header -->
            <div class="list-header">
                <div class="header-content">
                    <h1>Kelola Anggota</h1>
                    <p>Daftar semua anggota HMIT</p>
                </div>
                <div class="header-actions">
                    <a href="{{ route('admin.create-anggota') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Tambah Anggota
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Table -->
            <div class="table-card">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($anggotas as $index => $anggota)
                            <tr>
                                <td>{{ ($anggotas->currentPage() - 1) * $anggotas->perPage() + $index + 1 }}</td>
                                <td>
                                    <div class="member-info">
                                        <div class="member-avatar">
                                            @if ($anggota->foto_profil)
                                                <img src="{{ asset($anggota->foto_profil) }}" alt="{{ $anggota->nama }}">
                                            @else
                                                <div class="avatar-placeholder">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <span>{{ $anggota->nama }}</span>
                                    </div>
                                </td>
                                <td>{{ $anggota->email }}</td>
                                <td>{{ $anggota->nim }}</td>
                                <td>{{ $anggota->jurusan ?? '-' }}</td>
                                <td>
                                    <span class="status-badge status-{{ $anggota->status }}">
                                        {{ ucfirst($anggota->status) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.edit-anggota', $anggota->id) }}" class="btn-icon btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.delete-anggota', $anggota->id) }}" class="btn-icon btn-delete" onclick="return confirm('Yakin ingin menghapus?')" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    <p>Tidak ada data anggota</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if ($anggotas->hasPages())
                <div class="pagination-wrapper">
                    {{ $anggotas->links() }}
                </div>
            @endif
        </div>
    </section>

    <style>
        .admin-list-section {
            padding: 80px 20px;
            background: var(--light-bg);
            min-height: 100vh;
        }

        .list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .list-header h1 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin: 0;
        }

        .list-header p {
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

        .table-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table thead {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .data-table th {
            padding: 20px;
            text-align: left;
            font-weight: 600;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .data-table td {
            padding: 20px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-dark);
        }

        .data-table tbody tr:hover {
            background: rgba(99, 102, 241, 0.02);
        }

        .member-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .member-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            background: var(--border-color);
            flex-shrink: 0;
        }

        .member-avatar img {
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
            color: var(--primary-color);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
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

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .btn-edit {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
        }

        .btn-edit:hover {
            background: rgba(59, 130, 246, 0.2);
        }

        .btn-delete {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .btn-delete:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        .text-center {
            text-align: center;
            color: var(--text-light);
        }

        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .list-header {
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

            .data-table {
                font-size: 0.9rem;
            }

            .data-table th,
            .data-table td {
                padding: 12px;
            }

            .member-info {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
@endsection
