@extends('layouts.app')

@section('title', 'Login - HMIT')

@section('content')
    <section class="login-section">
        <div class="login-container">
            <!-- Left Side - Branding -->
            <div class="login-branding">
                <div class="branding-content">
                    <div class="logo-large">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h1>HMIT</h1>
                    <p>Himpunan Mahasiswa Informatika</p>
                    <div class="branding-text">
                        <p>Selamat Datang di Halaman Login Kabinet Cipta Kara</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Forms -->
            <div class="login-forms">
                <!-- Tab Navigation -->
                <div class="login-tabs">
                    <button class="tab-btn active" data-tab="anggota">
                        <i class="fas fa-user"></i>
                        <span>Anggota</span>
                    </button>
                    <button class="tab-btn" data-tab="admin">
                        <i class="fas fa-shield-alt"></i>
                        <span>Admin</span>
                    </button>
                </div>

                <!-- Anggota Login Form -->
                <div class="tab-content active" id="anggota-tab">
                    <div class="form-header">
                        <h2>Login Anggota</h2>
                        <p>Masuk dengan akun anggota HMIT Anda</p>
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

                    <form action="{{ route('login.anggota') }}" method="POST" class="login-form">
                        @csrf

                        <div class="form-group">
                            <label for="anggota-email">Email</label>
                            <div class="input-wrapper">
                                <i class="fas fa-envelope"></i>
                                <input 
                                    type="email" 
                                    id="anggota-email" 
                                    name="email" 
                                    placeholder="Masukkan email Anda"
                                    value="{{ old('email') }}"
                                    required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="anggota-password">Password</label>
                            <div class="input-wrapper">
                                <i class="fas fa-lock"></i>
                                <input 
                                    type="password" 
                                    id="anggota-password" 
                                    name="password" 
                                    placeholder="Masukkan password Anda"
                                    required
                                >
                                <button type="button" class="toggle-password" onclick="togglePassword('anggota-password')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-remember">
                            <label>
                                <input type="checkbox" name="remember">
                                <span>Ingat saya</span>
                            </label>
                        </div>

                        <button type="submit" class="btn-login">
                            <i class="fas fa-sign-in-alt"></i>
                            Login Sebagai Anggota
                        </button>
                    </form>

                    <div class="form-footer">
                        <p>Belum punya akun? <a href="{{ route('home') }}">Daftar di sini</a></p>
                    </div>
                </div>

                <!-- Admin Login Form -->
                <div class="tab-content" id="admin-tab">
                    <div class="form-header">
                        <h2>Login Admin</h2>
                        <p>Masuk dengan akun admin HMIT Anda</p>
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

                    <form action="{{ route('login.admin') }}" method="POST" class="login-form">
                        @csrf

                        <div class="form-group">
                            <label for="admin-email">Email</label>
                            <div class="input-wrapper">
                                <i class="fas fa-envelope"></i>
                                <input 
                                    type="email" 
                                    id="admin-email" 
                                    name="email" 
                                    placeholder="Masukkan email admin"
                                    value="{{ old('email') }}"
                                    required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="admin-password">Password</label>
                            <div class="input-wrapper">
                                <i class="fas fa-lock"></i>
                                <input 
                                    type="password" 
                                    id="admin-password" 
                                    name="password" 
                                    placeholder="Masukkan password admin"
                                    required
                                >
                                <button type="button" class="toggle-password" onclick="togglePassword('admin-password')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-remember">
                            <label>
                                <input type="checkbox" name="remember">
                                <span>Ingat saya</span>
                            </label>
                        </div>

                        <button type="submit" class="btn-login btn-admin">
                            <i class="fas fa-sign-in-alt"></i>
                            Login Sebagai Admin
                        </button>
                    </form>

                    <div class="form-footer">
                        <p>Hubungi super admin untuk membuat akun admin baru</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Tab switching
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const tabName = this.getAttribute('data-tab');
                
                // Remove active class from all tabs and contents
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab and corresponding content
                this.classList.add('active');
                document.getElementById(tabName + '-tab').classList.add('active');
            });
        });

        // Toggle password visibility
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
