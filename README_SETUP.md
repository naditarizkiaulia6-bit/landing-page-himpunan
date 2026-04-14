# 🎓 HMIT Landing Page - Project Laravel

Landing page profesional untuk Himpunan Mahasiswa Informatika (HMIT) yang dibangun dengan Laravel 13 dan Vite.

## 📋 Daftar Isi
- [Fitur](#fitur)
- [Prasyarat](#prasyarat)
- [Instalasi](#instalasi)
- [Panduan Laragon](#panduan-laragon)
- [Struktur Project](#struktur-project)
- [Troubleshooting](#troubleshooting)

---

## ✨ Fitur

✅ **Responsive Design** - Bekerja sempurna di semua ukuran layar
✅ **Modern UI/UX** - Desain profesional dengan animasi smooth
✅ **Sections Lengkap:**
   - Hero Section dengan CTA buttons
   - About Section dengan statistik
   - Programs Section (6 program unggulan)
   - Events Section (acara mendatang)
   - Contact Section dengan form
   - Footer dengan social media links

✅ **Interaktif:**
   - Mobile menu hamburger
   - Smooth scrolling
   - Animasi cards
   - Counter animation untuk statistik
   - Form validation

✅ **Performance:**
   - Optimized dengan Vite
   - CSS modern dengan variables
   - JavaScript vanilla (no jQuery)
   - Font Awesome icons

---

## 📦 Prasyarat

Sebelum memulai, pastikan sudah terinstall:

- **Laragon** (https://laragon.org/) - Recommended
- **PHP 8.2+** (included di Laragon)
- **Composer** (included di Laragon)
- **Node.js 18+** (included di Laragon)
- **npm** (included dengan Node.js)

---

## 🚀 Instalasi Cepat

### 1. Clone atau Copy Project

```bash
# Jika menggunakan git
git clone <repository-url> hmit-landing
cd hmit-landing

# Atau copy folder project ke C:\laragon\www\hmit-landing
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### 3. Setup Environment

```bash
# Copy .env.example ke .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Jalankan Development Server

**Terminal 1 - Laravel Server:**
```bash
php artisan serve
```

**Terminal 2 - Vite Dev Server:**
```bash
npm run dev
```

### 5. Akses Website

Buka browser dan akses:
```
http://localhost:8000
```

---

## 🎯 Panduan Laragon Lengkap

### **Langkah 1: Setup Folder Project**

1. Buka File Explorer
2. Navigasi ke `C:\laragon\www`
3. Pastikan folder `hmit-landing` ada di sini
4. Struktur folder harus seperti ini:
   ```
   C:\laragon\www\hmit-landing\
   ├── app/
   ├── bootstrap/
   ├── config/
   ├── database/
   ├── public/
   ├── resources/
   ├── routes/
   ├── storage/
   ├── vendor/
   ├── .env
   ├── artisan
   └── composer.json
   ```

### **Langkah 2: Buka Laragon**

1. Klik dua kali **Laragon** di desktop
2. Tunggu hingga status menunjukkan **"Running"**
3. Pastikan Apache dan MySQL sudah hijau

### **Langkah 3: Buka Terminal Laragon**

1. Di Laragon, klik tombol **"Terminal"** atau **"Cmder"**
2. Terminal akan terbuka di folder `C:\laragon\www`

### **Langkah 4: Navigate ke Project**

```bash
cd hmit-landing
```

### **Langkah 5: Install Dependencies**

```bash
# Install PHP packages
composer install

# Install JavaScript packages
npm install
```

**Tunggu hingga selesai** (bisa 5-10 menit tergantung koneksi internet)

### **Langkah 6: Generate Key**

```bash
php artisan key:generate
```

Output akan menunjukkan:
```
Application key set successfully.
```

### **Langkah 7: Jalankan Servers**

**Buka 2 Terminal Baru:**

**Terminal 1:**
```bash
cd C:\laragon\www\hmit-landing
php artisan serve
```

Output:
```
Laravel development server started: http://127.0.0.1:8000
```

**Terminal 2:**
```bash
cd C:\laragon\www\hmit-landing
npm run dev
```

Output:
```
VITE v... ready in ... ms
➜  Local:   http://localhost:5173/
```

### **Langkah 8: Akses Website**

Buka browser dan ketik:
```
http://localhost:8000
```

**Selesai! Website sudah berjalan!** 🎉

---

## 📁 Struktur Project

```
hmit-landing/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── LandingController.php      # Controller utama
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/                                 # Konfigurasi Laravel
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
│   ├── index.php                          # Entry point
│   ├── favicon.ico
│   └── robots.txt
├── resources/
│   ├── css/
│   │   └── app.css                        # Styling utama
│   ├── js/
│   │   └── app.js                         # JavaScript interaktif
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php              # Layout utama
│       └── landing/
│           └── index.blade.php            # Halaman landing
├── routes/
│   ├── web.php                            # Web routes
│   └── console.php
├── storage/                                # File storage
├── tests/
├── vendor/                                 # PHP dependencies
├── .env                                    # Environment variables
├── .env.example                            # Template .env
├── artisan                                 # Laravel CLI
├── composer.json                           # PHP dependencies
├── composer.lock
├── package.json                            # JavaScript dependencies
├── package-lock.json
├── vite.config.js                          # Vite configuration
├── phpunit.xml
└── README.md
```

---

## 🔧 Perintah Penting

| Perintah | Fungsi |
|----------|--------|
| `php artisan serve` | Jalankan Laravel dev server |
| `npm run dev` | Jalankan Vite dev server |
| `npm run build` | Build assets untuk production |
| `php artisan migrate` | Jalankan database migrations |
| `php artisan tinker` | Interactive shell |
| `composer update` | Update PHP packages |
| `npm update` | Update JavaScript packages |
| `php artisan cache:clear` | Clear application cache |
| `php artisan view:clear` | Clear view cache |

---

## 🎨 Customization

### Mengubah Warna

Edit file `resources/css/app.css` dan ubah CSS variables:

```css
:root {
    --primary-color: #6366f1;      /* Warna utama */
    --secondary-color: #8b5cf6;    /* Warna sekunder */
    --accent-color: #ec4899;       /* Warna accent */
    --dark-bg: #0f172a;            /* Background gelap */
    --light-bg: #f8fafc;           /* Background terang */
    --text-dark: #1e293b;          /* Teks gelap */
    --text-light: #64748b;         /* Teks terang */
}
```

### Mengubah Konten

Edit file `resources/views/landing/index.blade.php` untuk mengubah:
- Judul dan subtitle
- Deskripsi program
- Acara mendatang
- Informasi kontak

### Menambah Halaman Baru

1. Buat view baru di `resources/views/landing/`
2. Buat method di `app/Http/Controllers/LandingController.php`
3. Tambahkan route di `routes/web.php`

---

## 🐛 Troubleshooting

### **Error: "Port 8000 already in use"**

```bash
# Gunakan port berbeda
php artisan serve --port=8001
```

### **Error: "npm command not found"**

- Pastikan Node.js sudah terinstall
- Restart Laragon
- Gunakan Terminal Laragon (Cmder)

### **Error: "Composer not found"**

- Gunakan Terminal Laragon (Cmder)
- Atau install Composer secara terpisah

### **Assets tidak ter-load (CSS/JS tidak muncul)**

1. Pastikan Vite dev server sudah berjalan (`npm run dev`)
2. Clear browser cache (Ctrl + Shift + Delete)
3. Refresh halaman (Ctrl + F5)
4. Cek console browser untuk error

### **Database connection error**

1. Pastikan MySQL sudah running di Laragon
2. Cek konfigurasi di file `.env`
3. Pastikan database sudah dibuat

### **Halaman blank atau error 500**

1. Cek file `storage/logs/laravel.log`
2. Pastikan `.env` file sudah dikonfigurasi
3. Jalankan `php artisan key:generate`
4. Jalankan `php artisan cache:clear`

---

## 📦 Build untuk Production

Ketika siap untuk production:

```bash
# Build assets
npm run build

# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 📞 Kontak

- **Email:** hmit@universitas.ac.id
- **Telepon:** +62 812-3456-7890
- **Lokasi:** Gedung Informatika, Kampus Utama

---

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik.

---

## ✅ Checklist Setup

- [ ] Laragon sudah terinstall dan running
- [ ] Project folder ada di `C:\laragon\www\hmit-landing`
- [ ] `composer install` selesai
- [ ] `npm install` selesai
- [ ] `php artisan key:generate` sudah dijalankan
- [ ] Laravel server berjalan di port 8000
- [ ] Vite dev server berjalan di port 5173
- [ ] Bisa akses `http://localhost:8000`
- [ ] CSS dan JavaScript sudah ter-load
- [ ] Semua sections terlihat dengan baik

---

**Selamat mengembangkan! Happy Coding! 🚀**
