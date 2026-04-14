# 📚 Panduan Menjalankan Project HMIT Landing Page dengan Laragon

## 📋 Prasyarat
Sebelum memulai, pastikan Anda sudah menginstall:
- **Laragon** (https://laragon.org/)
- **Composer** (biasanya sudah included di Laragon)
- **Node.js & npm** (biasanya sudah included di Laragon)

---

## 🚀 Langkah-Langkah Membuka Project di Laragon

### **Langkah 1: Letakkan Project di Folder www Laragon**

1. Buka File Explorer
2. Navigasi ke folder instalasi Laragon (biasanya di `C:\laragon`)
3. Buka folder `www`
4. Pastikan folder project `hmit-landing` sudah ada di sini
   - Jika belum, copy folder `hmit-landing` ke `C:\laragon\www\`

**Struktur folder yang benar:**
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
├── composer.json
└── ... (file lainnya)
```

---

### **Langkah 2: Buka Laragon**

1. Klik dua kali aplikasi **Laragon** di desktop atau Start Menu
2. Laragon akan membuka dengan interface utamanya
3. Pastikan status menunjukkan **"Running"** (biasanya tombol Start berwarna hijau)

---

### **Langkah 3: Konfigurasi Database (Opsional)**

Jika Anda ingin menggunakan database:

1. Di Laragon, klik tombol **"Database"** atau buka **phpMyAdmin**
2. Buat database baru dengan nama `hmit_landing`
3. Update file `.env` di project:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hmit_landing
   DB_USERNAME=root
   DB_PASSWORD=
   ```

---

### **Langkah 4: Setup Project Laravel**

Buka **Terminal/Command Prompt** dan jalankan perintah berikut:

#### **Opsi A: Menggunakan Terminal Laragon (Recommended)**

1. Di Laragon, klik **"Terminal"** atau **"Cmder"**
2. Terminal akan terbuka di folder `C:\laragon\www`
3. Navigasi ke project:
   ```bash
   cd hmit-landing
   ```

#### **Opsi B: Menggunakan Command Prompt Biasa**

1. Buka Command Prompt (Win + R, ketik `cmd`, Enter)
2. Navigasi ke folder project:
   ```bash
   cd C:\laragon\www\hmit-landing
   ```

---

### **Langkah 5: Install Dependencies**

Di terminal, jalankan perintah berikut:

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

**Tunggu hingga proses selesai** (bisa memakan waktu beberapa menit)

---

### **Langkah 6: Generate Application Key**

```bash
php artisan key:generate
```

Perintah ini akan membuat key unik untuk aplikasi Anda di file `.env`

---

### **Langkah 7: Jalankan Development Server**

Buka **2 terminal** terpisah:

**Terminal 1 - Jalankan Laravel Server:**
```bash
php artisan serve
```

Output akan menunjukkan:
```
Laravel development server started: http://127.0.0.1:8000
```

**Terminal 2 - Jalankan Vite Dev Server:**
```bash
npm run dev
```

Output akan menunjukkan:
```
VITE v... ready in ... ms

➜  Local:   http://localhost:5173/
```

---

### **Langkah 8: Akses Website**

Buka browser Anda dan akses:

```
http://localhost:8000
```

atau

```
http://127.0.0.1:8000
```

**Selamat! Landing page HMIT sudah berjalan!** 🎉

---

## 🔗 Akses Virtual Host (Opsional)

Jika ingin mengakses dengan nama domain lokal:

1. Di Laragon, klik **"Menu"** → **"Preferences"**
2. Pastikan **"Auto Virtual Hosts"** diaktifkan
3. Buka file `C:\Windows\System32\drivers\etc\hosts` dengan Notepad (Run as Administrator)
4. Tambahkan baris:
   ```
   127.0.0.1   hmit-landing.local
   ```
5. Simpan file
6. Akses di browser: `http://hmit-landing.local:8000`

---

## 📝 Struktur Project

```
hmit-landing/
├── app/
│   └── Http/
│       └── Controllers/
│           └── LandingController.php
├── resources/
│   ├── css/
│   │   └── app.css (Styling utama)
│   ├── js/
│   │   └── app.js (JavaScript interaktif)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php (Layout utama)
│       └── landing/
│           └── index.blade.php (Halaman utama)
├── routes/
│   └── web.php (Routing)
├── public/
│   └── index.php (Entry point)
├── .env (Konfigurasi environment)
├── vite.config.js (Konfigurasi Vite)
└── package.json (Dependencies JavaScript)
```

---

## 🛠️ Perintah Penting

| Perintah | Fungsi |
|----------|--------|
| `php artisan serve` | Jalankan Laravel development server |
| `npm run dev` | Jalankan Vite development server |
| `npm run build` | Build assets untuk production |
| `php artisan migrate` | Jalankan database migrations |
| `php artisan tinker` | Buka Laravel interactive shell |
| `composer update` | Update PHP dependencies |
| `npm update` | Update JavaScript dependencies |

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
- Pastikan Laragon sudah terinstall dengan benar
- Gunakan Terminal Laragon (Cmder)

### **Assets tidak ter-load (CSS/JS tidak muncul)**
- Pastikan Vite dev server sudah berjalan (`npm run dev`)
- Clear browser cache (Ctrl + Shift + Delete)
- Refresh halaman (Ctrl + F5)

### **Database connection error**
- Pastikan MySQL sudah running di Laragon
- Cek konfigurasi `.env` file
- Pastikan database sudah dibuat

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

## 📞 Kontak & Support

Jika ada pertanyaan atau masalah:
- Email: hmit@universitas.ac.id
- Telepon: +62 812-3456-7890

---

## ✅ Checklist Setup

- [ ] Laragon sudah terinstall dan running
- [ ] Project folder ada di `C:\laragon\www\hmit-landing`
- [ ] Composer install selesai
- [ ] npm install selesai
- [ ] Application key sudah generate
- [ ] Laravel server berjalan di port 8000
- [ ] Vite dev server berjalan di port 5173
- [ ] Bisa akses `http://localhost:8000`
- [ ] CSS dan JavaScript sudah ter-load dengan baik

---

**Selamat mengembangkan! Happy Coding! 🚀**
