# 📖 Setup Instructions - Panduan Lengkap Setup

## 🎯 Tujuan
Panduan ini akan membantu Anda setup HMIT project dan membuat test accounts untuk login.

---

## ✅ Prerequisites

Pastikan Anda sudah memiliki:
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js & NPM
- Git
- Text Editor (VS Code, Sublime, dll)

---

## 📥 Step 1: Clone & Setup Project

### 1.1 Clone Repository
```bash
git clone <repository-url>
cd hmit-landing
```

### 1.2 Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 1.3 Setup Environment
```bash
# Copy .env file
cp .env.example .env

# Generate app key
php artisan key:generate
```

---

## 🗄️ Step 2: Database Setup

### 2.1 Configure Database
Edit file `.env`:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 2.2 Run Migrations
```bash
php artisan migrate
```

**Output yang diharapkan:**
```
INFO  Running migrations.
  2024_01_01_000000_create_users_table ..................... 0.05s DONE
  2024_01_01_000001_create_cache_table ..................... 0.02s DONE
  2024_01_01_000002_create_jobs_table ...................... 0.03s DONE
  2026_04_28_105144_create_pendaftarans_table .............. 0.02s DONE
  2026_04_29_011044_create_aspirasis_table ................. 0.02s DONE
  2026_05_04_000000_create_anggotas_table .................. 0.02s DONE
  2026_05_04_000001_create_admins_table .................... 0.02s DONE
```

### 2.3 Seed Database dengan Test Accounts
```bash
php artisan db:seed
```

**Output yang diharapkan:**
```
INFO  Seeding database.
```

---

## 🎨 Step 3: Build Assets

### 3.1 Build CSS & JS
```bash
npm run build
```

### 3.2 (Optional) Development Mode
Jika ingin auto-rebuild saat ada perubahan:
```bash
npm run dev
```

---

## 🚀 Step 4: Start Server

### 4.1 Jalankan Laravel Server
```bash
php artisan serve
```

**Output yang diharapkan:**
```
INFO  Server running on [http://127.0.0.1:8000].

Press Ctrl+C to quit.
```

### 4.2 Akses Aplikasi
Buka browser dan pergi ke:
```
http://localhost:8000
```

---

## 🔐 Step 5: Login dengan Test Accounts

### 5.1 Akses Login Page
Klik tombol **"Login"** di navigation bar atau pergi ke:
```
http://localhost:8000/login
```

### 5.2 Login sebagai Anggota

**Tab: Anggota**

Gunakan salah satu akun:
```
Email: budi@hmit.com
Password: password123
```

Atau:
```
Email: siti@hmit.com
Password: password123
```

Atau:
```
Email: ahmad@hmit.com
Password: password123
```

**Hasil:** Akan diarahkan ke `/anggota/dashboard`

### 5.3 Login sebagai Admin

**Tab: Admin**

Gunakan salah satu akun:
```
Email: admin@hmit.com
Password: admin123
```

Atau:
```
Email: superadmin@hmit.com
Password: superadmin123
```

**Hasil:** Akan diarahkan ke `/admin/dashboard`

---

## 📊 Verifikasi Setup

### Checklist:
- [ ] Semua dependencies terinstall
- [ ] `.env` file sudah dikonfigurasi
- [ ] Database sudah di-migrate
- [ ] Seeder sudah dijalankan
- [ ] Assets sudah di-build
- [ ] Server Laravel berjalan
- [ ] Bisa akses http://localhost:8000
- [ ] Bisa login sebagai Anggota
- [ ] Bisa login sebagai Admin

---

## 🛠️ Useful Commands

### Development
```bash
# Start server
php artisan serve

# Watch CSS/JS changes
npm run dev

# Build assets
npm run build
```

### Database
```bash
# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Reset database
php artisan migrate:reset

# Refresh database (reset + migrate)
php artisan migrate:refresh

# Seed database
php artisan db:seed

# Refresh + Seed
php artisan migrate:refresh --seed
```

### Cache
```bash
# Clear all cache
php artisan cache:clear

# Clear config cache
php artisan config:clear

# Clear route cache
php artisan route:cache

# Clear view cache
php artisan view:clear
```

### Debugging
```bash
# Interactive shell
php artisan tinker

# Check routes
php artisan route:list

# Check migrations status
php artisan migrate:status
```

---

## 🐛 Troubleshooting

### Error: "No application encryption key has been specified"
**Solusi:**
```bash
php artisan key:generate
```

### Error: "SQLSTATE[HY000]: General error: 1 no such table"
**Solusi:**
```bash
php artisan migrate
php artisan db:seed
```

### Error: "Class 'App\Models\Anggota' not found"
**Solusi:**
```bash
composer dump-autoload
```

### Login tidak berfungsi
**Solusi:**
```bash
# Cek database
php artisan tinker
>>> App\Models\Anggota::all()
>>> App\Models\Admin::all()

# Jika kosong, jalankan seeder
>>> exit
php artisan db:seed
```

### CSS/JS tidak berubah
**Solusi:**
```bash
# Clear cache
php artisan cache:clear

# Rebuild assets
npm run build

# Clear browser cache (Ctrl+Shift+Delete)
```

---

## 📁 Project Structure

```
hmit-landing/
├── app/                    # Application code
├── database/               # Migrations & seeders
├── resources/              # Views & assets
├── routes/                 # Route definitions
├── public/                 # Public assets
├── storage/                # Logs & cache
├── config/                 # Configuration files
├── .env                    # Environment variables
├── composer.json           # PHP dependencies
├── package.json            # Node dependencies
└── artisan                 # Laravel CLI
```

---

## 🔗 Important URLs

| URL | Purpose |
|-----|---------|
| http://localhost:8000 | Home page |
| http://localhost:8000/login | Login page |
| http://localhost:8000/about | About page |
| http://localhost:8000/programs | Programs page |
| http://localhost:8000/prestasi | Achievements page |
| http://localhost:8000/contact | Contact page |
| http://localhost:8000/daftar | Registration page |
| http://localhost:8000/aspirasi | Aspirations page |
| http://localhost:8000/anggota/dashboard | Member dashboard |
| http://localhost:8000/admin/dashboard | Admin dashboard |

---

## 📚 Documentation Files

- **QUICK_START.md** - Quick reference untuk login
- **LOGIN_GUIDE.md** - Panduan login detail
- **README_DEVELOPMENT.md** - Development documentation
- **LOGIN_SYSTEM_README.md** - Login system documentation
- **SETUP_INSTRUCTIONS.md** - File ini

---

## ✨ Next Steps

Setelah setup berhasil:

1. **Explore Landing Pages**
   - Lihat home page
   - Cek about, programs, prestasi, contact pages

2. **Test Member Features**
   - Login sebagai anggota
   - Edit profil
   - Ubah password

3. **Test Admin Features**
   - Login sebagai admin
   - Lihat list anggota
   - Tambah anggota baru
   - Edit anggota
   - Hapus anggota

4. **Test Other Features**
   - Daftar anggota baru
   - Kirim aspirasi
   - Lihat statistik

---

## 📞 Support

Jika mengalami masalah:

1. Cek file dokumentasi
2. Lihat error message
3. Cek file log: `storage/logs/laravel.log`
4. Hubungi tim development

---

**Status**: ✅ Ready to Deploy
**Last Updated**: May 4, 2026
**Version**: 1.0.0
