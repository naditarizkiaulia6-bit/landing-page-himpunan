# ⚡ Quick Start Guide - HMIT Landing Page

## 🎯 Mulai dalam 5 Menit!

### **Prasyarat:**
- ✅ Laragon sudah terinstall
- ✅ Project folder di `C:\laragon\www\hmit-landing`

---

## 📋 Langkah-Langkah

### **1️⃣ Buka Laragon**
```
Klik 2x Laragon di desktop → Tunggu sampai "Running"
```

### **2️⃣ Buka Terminal**
```
Di Laragon → Klik "Terminal" atau "Cmder"
```

### **3️⃣ Navigate ke Project**
```bash
cd hmit-landing
```

### **4️⃣ Install Dependencies (Jalankan 1x saja)**
```bash
composer install
npm install
```
⏳ Tunggu 5-10 menit...

### **5️⃣ Generate Key (Jalankan 1x saja)**
```bash
php artisan key:generate
```

### **6️⃣ Jalankan Servers**

**Buka Terminal Baru #1:**
```bash
cd C:\laragon\www\hmit-landing
php artisan serve
```

**Buka Terminal Baru #2:**
```bash
cd C:\laragon\www\hmit-landing
npm run dev
```

### **7️⃣ Buka Browser**
```
http://localhost:8000
```

---

## ✅ Selesai!

Website sudah berjalan! 🎉

---

## 🔄 Menjalankan Ulang (Setelah Restart)

Cukup jalankan langkah **6️⃣** saja:

**Terminal 1:**
```bash
cd C:\laragon\www\hmit-landing
php artisan serve
```

**Terminal 2:**
```bash
cd C:\laragon\www\hmit-landing
npm run dev
```

---

## 🛑 Menghentikan Server

- **Laravel Server:** Tekan `Ctrl + C` di Terminal 1
- **Vite Server:** Tekan `Ctrl + C` di Terminal 2

---

## 📝 Mengubah Konten

### **Mengubah Teks:**
Edit file: `resources/views/landing/index.blade.php`

### **Mengubah Warna:**
Edit file: `resources/css/app.css` (bagian `:root`)

### **Mengubah Styling:**
Edit file: `resources/css/app.css`

### **Mengubah Interaktivitas:**
Edit file: `resources/js/app.js`

---

## 🐛 Masalah Umum

| Masalah | Solusi |
|---------|--------|
| Port 8000 sudah dipakai | `php artisan serve --port=8001` |
| npm command not found | Gunakan Terminal Laragon (Cmder) |
| CSS/JS tidak muncul | Pastikan `npm run dev` berjalan |
| Halaman blank | Cek `storage/logs/laravel.log` |

---

## 📚 Dokumentasi Lengkap

- **Setup Lengkap:** Baca `PANDUAN_LARAGON.md`
- **Fitur & Struktur:** Baca `FITUR_DAN_STRUKTUR.md`
- **Setup Detail:** Baca `README_SETUP.md`

---

**Happy Coding! 🚀**
