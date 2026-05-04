# HMIT Landing Page & Authentication System - Development Guide

## 📋 Table of Contents
1. [Project Overview](#project-overview)
2. [Technology Stack](#technology-stack)
3. [Project Structure](#project-structure)
4. [Setup & Installation](#setup--installation)
5. [Database](#database)
6. [Authentication System](#authentication-system)
7. [File Structure & Components](#file-structure--components)
8. [Styling & Theme](#styling--theme)
9. [API Routes](#api-routes)
10. [Development Workflow](#development-workflow)
11. [Troubleshooting](#troubleshooting)

---

## 🎯 Project Overview

HMIT (Himpunan Mahasiswa Informatika) Landing Page & Authentication System adalah aplikasi web yang menyediakan:

- **Landing Page**: Halaman utama dengan informasi organisasi, program, prestasi, dan kontak
- **Authentication System**: Sistem login dengan dua tipe pengguna (Anggota & Admin)
- **Member Dashboard**: Dashboard untuk anggota dengan profil management
- **Admin Dashboard**: Dashboard admin untuk CRUD data anggota
- **Responsive Design**: Desain responsif untuk semua ukuran layar
- **Navy & Gold Theme**: Tema profesional dengan warna Navy (#0a1628) dan Gold (#c9a84c)

---

## 🛠 Technology Stack

### Backend
- **Framework**: Laravel 13.4.0
- **PHP**: 8.2+
- **Database**: SQLite (development) / MySQL (production)
- **Authentication**: Custom Cookie-based (Anggota) & Session-based (Admin)

### Frontend
- **HTML5**: Semantic markup
- **CSS3**: Custom styling dengan CSS variables
- **JavaScript**: Vanilla JS untuk interaktivitas
- **Font Awesome**: Icon library (v6.4.0)
- **Bootstrap**: Utility classes (v5.3.0)
- **Google Fonts**: Poppins & Playfair Display

### Tools
- **Composer**: PHP dependency manager
- **NPM**: Node package manager
- **Vite**: Build tool untuk assets
- **Artisan**: Laravel CLI

---

## 📁 Project Structure

```
hmit-landing/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AuthController.php          # Authentication logic
│   │       ├── AnggotaController.php       # Member management
│   │       ├── AdminController.php         # Admin operations
│   │       ├── LandingController.php       # Landing pages
│   │       ├── PendaftaranController.php   # Registration
│   │       └── AspirasiController.php      # Aspirations
│   ├── Models/
│   │   ├── User.php                        # Default user model
│   │   ├── Anggota.php                     # Member model
│   │   ├── Admin.php                       # Admin model
│   │   ├── Pendaftaran.php                 # Registration model
│   │   └── Aspirasi.php                    # Aspiration model
│   └── Providers/
│       └── AppServiceProvider.php
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2026_04_28_105144_create_pendaftarans_table.php
│   │   ├── 2026_04_29_011044_create_aspirasis_table.php
│   │   ├── 2026_05_04_000000_create_anggotas_table.php
│   │   └── 2026_05_04_000001_create_admins_table.php
│   ├── factories/
│   │   └── UserFactory.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   ├── css/
│   │   └── app.css                         # Main stylesheet
│   ├── js/
│   │   ├── app.js                          # Main JS
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Main layout
│       ├── auth/
│       │   └── login.blade.php             # Login page
│       ├── landing/
│       │   ├── index.blade.php             # Home page
│       │   ├── about.blade.php             # About page
│       │   ├── programs.blade.php          # Programs page
│       │   ├── prestasi.blade.php          # Achievements page
│       │   ├── contact.blade.php           # Contact page
│       │   ├── daftar.blade.php            # Registration page
│       │   └── aspirasi.blade.php          # Aspirations page
│       ├── anggota/
│       │   ├── dashboard.blade.php         # Member dashboard
│       │   └── edit-profile.blade.php      # Profile edit
│       └── admin/
│           ├── dashboard.blade.php         # Admin dashboard
│           ├── list-anggota.blade.php      # Members list
│           ├── create-anggota.blade.php    # Create member
│           ├── edit-anggota.blade.php      # Edit member
│           └── profile.blade.php           # Admin profile
├── public/
│   ├── css/
│   │   └── app.css                         # Compiled CSS
│   ├── js/
│   │   └── app.js                          # Compiled JS
│   ├── foto/                               # Images directory
│   └── uploads/                            # User uploads
├── routes/
│   └── web.php                             # Web routes
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   └── ...
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── bootstrap/
│   ├── app.php
│   ├── cache/
│   └── providers.php
├── composer.json
├── package.json
├── vite.config.js
├── phpunit.xml
├── artisan
└── .env
```

---

## 🚀 Setup & Installation

### Prerequisites
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js & NPM
- SQLite atau MySQL

### Installation Steps

1. **Clone Repository**
```bash
git clone <repository-url>
cd hmit-landing
```

2. **Install PHP Dependencies**
```bash
composer install
```

3. **Install Node Dependencies**
```bash
npm install
```

4. **Setup Environment**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure Database**
Edit `.env` file:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

6. **Run Migrations**
```bash
php artisan migrate
```

7. **Build Assets**
```bash
npm run build
```

8. **Start Development Server**
```bash
php artisan serve
```

Akses aplikasi di `http://localhost:8000`

---

## 🗄 Database

### Tables

#### `anggotas` (Members)
```sql
- id (Primary Key)
- nama (string)
- email (string, unique)
- password (string, hashed)
- nim (string, unique)
- no_telepon (string, nullable)
- alamat (string, nullable)
- jurusan (string, nullable)
- tahun_masuk (string, nullable)
- foto_profil (string, nullable)
- status (enum: aktif, nonaktif)
- timestamps
```

#### `admins` (Administrators)
```sql
- id (Primary Key)
- nama (string)
- email (string, unique)
- password (string, hashed)
- no_telepon (string, nullable)
- foto_profil (string, nullable)
- role (enum: super_admin, admin)
- status (enum: aktif, nonaktif)
- timestamps
```

#### `pendaftarans` (Registrations)
```sql
- id (Primary Key)
- nama (string)
- email (string)
- nim (string)
- no_whatsapp (string)
- departemen_utama (string)
- departemen_cadangan (string)
- timestamps
```

#### `aspirasis` (Aspirations)
```sql
- id (Primary Key)
- nama (string, nullable)
- email (string, nullable)
- kategori (string)
- isi_aspirasi (text)
- timestamps
```

---

## 🔐 Authentication System

### Anggota (Member) - Cookie-based

**Login Flow:**
1. User mengakses `/login`
2. Pilih tab "Anggota"
3. Masukkan email & password
4. System validasi di `AuthController::loginAnggota()`
5. Jika valid, buat cookie `anggota_id` (valid 7 hari)
6. Redirect ke `/anggota/dashboard`

**Cookie Details:**
- Name: `anggota_id`
- Duration: 7 days (60 * 24 * 7 minutes)
- HttpOnly: true (tidak bisa diakses via JavaScript)
- Secure: false (development)

**Protected Routes:**
```php
/anggota/dashboard
/anggota/edit-profile
/anggota/update-profile
/anggota/change-password
```

### Admin - Session-based

**Login Flow:**
1. User mengakses `/login`
2. Pilih tab "Admin"
3. Masukkan email & password
4. System validasi di `AuthController::loginAdmin()`
5. Jika valid, simpan session:
   - `admin_id`
   - `admin_name`
   - `admin_email`
   - `admin_role`
6. Redirect ke `/admin/dashboard`

**Protected Routes:**
```php
/admin/dashboard
/admin/list-anggota
/admin/create-anggota
/admin/store-anggota
/admin/edit-anggota/{id}
/admin/update-anggota/{id}
/admin/delete-anggota/{id}
/admin/profile
/admin/update-profile
```

### Password Hashing
- Algorithm: bcrypt
- Implemented via Laravel's `Hash::make()` & `Hash::check()`

---

## 📄 File Structure & Components

### Controllers

#### AuthController.php
```php
- showLogin()              // Display login page
- loginAnggota()           // Handle member login
- loginAdmin()             // Handle admin login
- logoutAnggota()          // Logout member
- logoutAdmin()            // Logout admin
```

#### AnggotaController.php
```php
- checkAuth()              // Verify member is logged in
- dashboard()              // Show member dashboard
- editProfile()            // Show profile edit form
- updateProfile()          // Update member profile
- changePassword()         // Change member password
```

#### AdminController.php
```php
- checkAuth()              // Verify admin is logged in
- dashboard()              // Show admin dashboard
- listAnggota()            // List all members
- createAnggota()          // Show create member form
- storeAnggota()           // Store new member
- editAnggota()            // Show edit member form
- updateAnggota()          // Update member
- deleteAnggota()          // Delete member
- profile()                // Show admin profile
- updateProfile()          // Update admin profile
```

#### LandingController.php
```php
- index()                  // Home page
- about()                  // About page
- programs()               // Programs page
- prestasi()               // Achievements page
- contact()                // Contact page
- daftar()                 // Registration page
```

### Models

#### Anggota.php
```php
- fillable: [nama, email, password, nim, no_telepon, alamat, jurusan, tahun_masuk, foto_profil, status]
- hidden: [password]
- casts: [password => hashed]
```

#### Admin.php
```php
- fillable: [nama, email, password, no_telepon, foto_profil, role, status]
- hidden: [password]
- casts: [password => hashed]
```

---

## 🎨 Styling & Theme

### Color Scheme (Navy & Gold)

```css
:root {
    --primary-color: #c9a84c;        /* Gold */
    --secondary-color: #e2c97e;      /* Light Gold */
    --dark-bg: #0a1628;              /* Navy Dark */
    --light-bg: #0a1628;             /* Navy Light */
    --text-dark: #ffffff;            /* White */
    --text-light: #8da4c8;           /* Light Blue */
    --border-color: rgba(201, 168, 76, 0.2);
    --transition: all 0.3s ease;
}
```

### CSS Structure

**Main Stylesheet:** `resources/css/app.css`
- Navigation styling
- Hero section
- Form styling
- Button styling
- Responsive design
- Login page styling
- Dashboard styling

**Compiled CSS:** `public/css/app.css`
- Production-ready CSS
- Minified version

### Responsive Breakpoints

```css
Mobile: < 768px
Tablet: 768px - 1024px
Desktop: > 1024px
```

### Key CSS Classes

```css
.navbar              /* Navigation bar */
.nav-link            /* Navigation links */
.nav-login           /* Login button */
.hero                /* Hero section */
.container           /* Main container */
.btn-primary         /* Primary button */
.btn-secondary       /* Secondary button */
.form-modern         /* Modern form input */
.input-wrapper       /* Input with icon */
.glass-container     /* Glass effect container */
.dashboard-section   /* Dashboard section */
```

---

## 🛣 API Routes

### Public Routes

```
GET  /                          # Home page
GET  /about                     # About page
GET  /programs                  # Programs page
GET  /prestasi                  # Achievements page
GET  /contact                   # Contact page
GET  /daftar                    # Registration page
GET  /aspirasi                  # Aspirations page
POST /daftar                    # Submit registration
POST /aspirasi                  # Submit aspiration
```

### Authentication Routes

```
GET  /login                     # Login page
POST /login/anggota             # Member login
POST /login/admin               # Admin login
GET  /logout/anggota            # Member logout
GET  /logout/admin              # Admin logout
```

### Member Routes (Protected)

```
GET  /anggota/dashboard         # Member dashboard
GET  /anggota/edit-profile      # Edit profile form
POST /anggota/update-profile    # Update profile
POST /anggota/change-password   # Change password
```

### Admin Routes (Protected)

```
GET  /admin/dashboard           # Admin dashboard
GET  /admin/list-anggota        # Members list
GET  /admin/create-anggota      # Create member form
POST /admin/store-anggota       # Store new member
GET  /admin/edit-anggota/{id}   # Edit member form
POST /admin/update-anggota/{id} # Update member
GET  /admin/delete-anggota/{id} # Delete member
GET  /admin/profile             # Admin profile
POST /admin/update-profile      # Update admin profile
```

---

## 💻 Development Workflow

### Running Development Server

```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Watch CSS/JS changes
npm run dev
```

### Building for Production

```bash
# Build assets
npm run build

# Optimize for production
php artisan optimize
php artisan config:cache
php artisan route:cache
```

### Database Operations

```bash
# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Reset database
php artisan migrate:reset

# Refresh database
php artisan migrate:refresh

# Seed database
php artisan db:seed
```

### Useful Artisan Commands

```bash
# Create new controller
php artisan make:controller ControllerName

# Create new model
php artisan make:model ModelName

# Create new migration
php artisan make:migration create_table_name

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check routes
php artisan route:list

# Tinker (interactive shell)
php artisan tinker
```

---

## 🐛 Troubleshooting

### Common Issues

#### 1. Login tidak berfungsi
**Solusi:**
- Pastikan database sudah di-migrate: `php artisan migrate`
- Cek `.env` file konfigurasi database
- Pastikan ada data di tabel `anggotas` atau `admins`

#### 2. CSS tidak berubah
**Solusi:**
- Clear browser cache (Ctrl+Shift+Delete)
- Rebuild assets: `npm run build`
- Clear Laravel cache: `php artisan cache:clear`

#### 3. Input field text tidak terlihat
**Solusi:**
- Pastikan CSS sudah ter-update dengan `color: #000000` pada `.input-wrapper input`
- Clear cache dan refresh browser

#### 4. Session/Cookie tidak tersimpan
**Solusi:**
- Cek `.env` SESSION_DRIVER (default: file)
- Pastikan folder `storage/framework/sessions` writable
- Cek cookie settings di browser

#### 5. File upload tidak berfungsi
**Solusi:**
- Pastikan folder `public/uploads/profil` ada dan writable
- Cek `php.ini` upload_max_filesize
- Cek permission folder

#### 6. Database error
**Solusi:**
- Pastikan SQLite file ada: `database/database.sqlite`
- Cek permission file database
- Jalankan: `php artisan migrate:refresh`

### Debug Mode

Aktifkan debug mode di `.env`:
```env
APP_DEBUG=true
```

Lihat error details di `storage/logs/laravel.log`

---

## 📝 Notes

### Security Considerations
- Semua password di-hash dengan bcrypt
- Cookie HttpOnly untuk mencegah XSS
- CSRF protection via `@csrf` di form
- Input validation di controller
- Status check untuk user aktif/nonaktif

### Performance Tips
- Gunakan `npm run build` untuk production
- Enable query caching di database
- Optimize images di folder `public/foto`
- Use CDN untuk static assets

### Future Enhancements
- Email verification untuk registration
- Two-factor authentication
- Role-based access control (RBAC)
- API endpoints untuk mobile app
- Real-time notifications
- Advanced search & filtering

---

## 📞 Support

Untuk pertanyaan atau masalah, hubungi tim development HMIT.

---

**Last Updated:** May 4, 2026
**Version:** 1.0.0
**Status:** Production Ready
