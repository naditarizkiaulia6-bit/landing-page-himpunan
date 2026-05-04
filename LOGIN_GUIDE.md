# 🔐 HMIT Login Guide

## Panduan Login untuk Anggota dan Admin

Setelah menjalankan seeder, Anda dapat login dengan akun test yang telah dibuat. Berikut adalah panduan lengkapnya.

---

## 📝 Test Accounts

### Akun Anggota (Member)

#### Akun 1
- **Nama**: Budi Santoso
- **Email**: `budi@hmit.com`
- **Password**: `password123`
- **NIM**: 2023001
- **Status**: Aktif

#### Akun 2
- **Nama**: Siti Nurhaliza
- **Email**: `siti@hmit.com`
- **Password**: `password123`
- **NIM**: 2023002
- **Status**: Aktif

#### Akun 3
- **Nama**: Ahmad Wijaya
- **Email**: `ahmad@hmit.com`
- **Password**: `password123`
- **NIM**: 2023003
- **Status**: Aktif

### Akun Admin

#### Admin Regular
- **Nama**: Admin HMIT
- **Email**: `admin@hmit.com`
- **Password**: `admin123`
- **Role**: Admin
- **Status**: Aktif

#### Super Admin
- **Nama**: Super Admin HMIT
- **Email**: `superadmin@hmit.com`
- **Password**: `superadmin123`
- **Role**: Super Admin
- **Status**: Aktif

---

## 🚀 Cara Login

### Step 1: Akses Halaman Login
1. Buka aplikasi di `http://localhost:8000`
2. Klik tombol **"Login"** di navigation bar (pojok kanan atas)
3. Atau akses langsung ke `http://localhost:8000/login`

### Step 2: Pilih Tipe Pengguna

#### Untuk Login sebagai Anggota:
1. Klik tab **"Anggota"** (ikon user)
2. Masukkan email: `budi@hmit.com` (atau email anggota lainnya)
3. Masukkan password: `password123`
4. Klik tombol **"Login Sebagai Anggota"**

#### Untuk Login sebagai Admin:
1. Klik tab **"Admin"** (ikon shield)
2. Masukkan email: `admin@hmit.com`
3. Masukkan password: `admin123`
4. Klik tombol **"Login Sebagai Admin"**

### Step 3: Verifikasi Login

**Jika login berhasil:**
- Anggota akan diarahkan ke `/anggota/dashboard`
- Admin akan diarahkan ke `/admin/dashboard`

**Jika login gagal:**
- Akan muncul pesan error
- Periksa kembali email dan password
- Pastikan akun status "aktif"

---

## 📊 Dashboard Anggota

Setelah login sebagai anggota, Anda dapat:

### Fitur yang Tersedia:
1. **Lihat Profil** - Informasi lengkap anggota
2. **Edit Profil** - Update data pribadi
3. **Ubah Password** - Ganti password akun
4. **Logout** - Keluar dari akun

### Menu di Dashboard:
- **Edit Profil** - Tombol untuk edit profil
- **Ubah Password** - Link untuk ubah password
- **Kembali ke Beranda** - Link ke halaman utama

---

## 👨‍💼 Dashboard Admin

Setelah login sebagai admin, Anda dapat:

### Fitur yang Tersedia:
1. **Kelola Anggota** - Lihat, edit, dan hapus data anggota
2. **Tambah Anggota** - Tambahkan anggota baru
3. **Lihat Statistik** - Total anggota, aktif, nonaktif
4. **Profil Admin** - Kelola profil admin
5. **Logout** - Keluar dari akun

### Menu di Dashboard:
- **Tambah Anggota** - Tombol untuk tambah anggota baru
- **Profil** - Tombol untuk lihat/edit profil admin
- **Logout** - Tombol untuk logout

### Operasi CRUD Anggota:
- **List Anggota** - Lihat semua anggota dengan pagination
- **Create** - Tambah anggota baru
- **Read** - Lihat detail anggota
- **Update** - Edit data anggota
- **Delete** - Hapus anggota

---

## 🔄 Siklus Autentikasi

### Anggota (Cookie-based)
```
1. User login dengan email & password
2. System validasi di database
3. Jika valid, buat cookie "anggota_id" (valid 7 hari)
4. User diarahkan ke dashboard
5. Cookie otomatis dikirim setiap request
6. User dapat logout kapan saja
```

### Admin (Session-based)
```
1. User login dengan email & password
2. System validasi di database
3. Jika valid, simpan session (admin_id, admin_name, dll)
4. User diarahkan ke dashboard
5. Session disimpan di server
6. User dapat logout kapan saja
```

---

## ⚠️ Troubleshooting

### Login Gagal - Email atau Password Salah
**Solusi:**
- Pastikan email dan password benar
- Gunakan akun test yang sudah disediakan
- Cek apakah ada typo

### Login Gagal - Akun Tidak Aktif
**Solusi:**
- Pastikan status akun "aktif"
- Hubungi admin untuk mengaktifkan akun
- Cek di database: `SELECT * FROM anggotas WHERE email='...'`

### Cookie/Session Tidak Tersimpan
**Solusi:**
- Clear browser cache
- Cek browser settings untuk cookies
- Pastikan JavaScript enabled
- Cek `.env` SESSION_DRIVER

### Tidak Bisa Akses Dashboard
**Solusi:**
- Pastikan sudah login terlebih dahulu
- Cek apakah cookie/session masih valid
- Logout dan login kembali
- Clear browser cache

### Lupa Password
**Solusi:**
- Gunakan akun test yang sudah disediakan
- Untuk production, implementasikan "Forgot Password" feature
- Hubungi admin untuk reset password

---

## 🔐 Security Notes

### Password Hashing
- Semua password di-hash dengan bcrypt
- Password tidak pernah disimpan dalam plain text
- Gunakan password yang kuat untuk production

### Cookie Security
- Cookie HttpOnly (tidak bisa diakses via JavaScript)
- Cookie valid 7 hari untuk anggota
- Session disimpan di server untuk admin

### Best Practices
- Jangan share akun dengan orang lain
- Logout setelah selesai menggunakan
- Gunakan password yang berbeda untuk setiap akun
- Aktifkan 2FA jika tersedia (future feature)

---

## 📱 Testing di Mobile

### Cara Testing di Mobile:
1. Pastikan mobile dan komputer di network yang sama
2. Cari IP address komputer: `ipconfig` (Windows) atau `ifconfig` (Mac/Linux)
3. Akses dari mobile: `http://<IP_ADDRESS>:8000`
4. Login dengan akun test

---

## 🔄 Membuat Akun Baru

### Via Admin Dashboard:
1. Login sebagai admin
2. Klik "Tambah Anggota"
3. Isi form dengan data anggota
4. Klik "Simpan"

### Via Registration Page:
1. Akses `/daftar`
2. Isi form pendaftaran
3. Data akan disimpan di tabel `pendaftarans`
4. Admin dapat approve dan membuat akun

---

## 📞 Support

Jika mengalami masalah login, silakan:
1. Cek dokumentasi ini
2. Lihat error message yang ditampilkan
3. Cek file log: `storage/logs/laravel.log`
4. Hubungi tim development

---

**Last Updated:** May 4, 2026
**Version:** 1.0.0
