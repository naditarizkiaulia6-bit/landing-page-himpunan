# ⚡ Quick Start - Login Test Accounts

## 🚀 Langkah Cepat untuk Login

### 1️⃣ Jalankan Seeder (Jika Belum)
```bash
php artisan db:seed
```

### 2️⃣ Akses Login Page
Buka browser dan pergi ke:
```
http://localhost:8000/login
```

---

## 👤 Login sebagai ANGGOTA

### Pilih Tab "Anggota"

**Gunakan salah satu akun berikut:**

| Email | Password | Nama |
|-------|----------|------|
| `budi@hmit.com` | `password123` | Budi Santoso |
| `siti@hmit.com` | `password123` | Siti Nurhaliza |
| `ahmad@hmit.com` | `password123` | Ahmad Wijaya |

**Hasil:** Akan diarahkan ke `/anggota/dashboard`

---

## 👨‍💼 Login sebagai ADMIN

### Pilih Tab "Admin"

**Gunakan salah satu akun berikut:**

| Email | Password | Role |
|-------|----------|------|
| `admin@hmit.com` | `admin123` | Admin |
| `superadmin@hmit.com` | `superadmin123` | Super Admin |

**Hasil:** Akan diarahkan ke `/admin/dashboard`

---

## 📋 Checklist

- [ ] Database sudah di-migrate: `php artisan migrate`
- [ ] Seeder sudah dijalankan: `php artisan db:seed`
- [ ] Server Laravel berjalan: `php artisan serve`
- [ ] Browser buka: `http://localhost:8000/login`
- [ ] Pilih tab Anggota atau Admin
- [ ] Masukkan email dan password dari tabel di atas
- [ ] Klik tombol Login
- [ ] Berhasil! 🎉

---

## 🔗 Useful Links

- **Home**: http://localhost:8000
- **Login**: http://localhost:8000/login
- **Anggota Dashboard**: http://localhost:8000/anggota/dashboard
- **Admin Dashboard**: http://localhost:8000/admin/dashboard
- **Registration**: http://localhost:8000/daftar
- **Aspirations**: http://localhost:8000/aspirasi

---

## ❌ Jika Masih Tidak Bisa Login

### Cek Database
```bash
# Lihat semua anggota
php artisan tinker
>>> App\Models\Anggota::all()

# Lihat semua admin
>>> App\Models\Admin::all()
```

### Reset Database & Seed Ulang
```bash
# Reset database
php artisan migrate:refresh

# Jalankan seeder
php artisan db:seed
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## 📞 Bantuan Lebih Lanjut

Lihat file lengkap:
- `LOGIN_GUIDE.md` - Panduan login detail
- `README_DEVELOPMENT.md` - Dokumentasi development
- `LOGIN_SYSTEM_README.md` - Dokumentasi sistem login

---

**Status**: ✅ Ready to Test
**Last Updated**: May 4, 2026
