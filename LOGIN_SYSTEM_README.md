# Sistem Login HMIT - Dokumentasi

## 📋 Ringkasan

Sistem login HMIT telah berhasil dikembangkan dengan dua jenis pengguna:

### 1. **Anggota Himpunan** (Cookie-based Authentication)
- Login menggunakan email dan password
- Cookie berlaku selama 7 hari
- Dapat melakukan update profil
- Dapat mengubah password

### 2. **Admin Himpunan** (Session-based Authentication)
- Login menggunakan email dan password
- Session disimpan di server
- Dapat melakukan CRUD (Create, Read, Update, Delete) data anggota
- Dapat mengelola profil admin

---

## 🗂️ Struktur File yang Dibuat

### Database Migrations
```
database/migrations/
├── 2026_05_04_000000_create_anggotas_table.php
└── 2026_05_04_000001_create_admins_table.php
```

### Models
```
app/Models/
├── Anggota.php
└── Admin.php
```

### Controllers
```
app/Http/Controllers/
├── AuthController.php      # Menangani login/logout
├── AnggotaController.php   # Dashboard & profil anggota
└── AdminController.php     # Dashboard & CRUD anggota
```

### Views
```
resources/views/
├── auth/
│   └── login.blade.php                    # Halaman login (2 tab)
├── anggota/
│   ├── dashboard.blade.php                # Dashboard anggota
│   └── edit-profile.blade.php             # Edit profil & ubah password
└── admin/
    ├── dashboard.blade.php                # Dashboard admin
    ├── list-anggota.blade.php             # Daftar anggota
    ├── create-anggota.blade.php           # Tambah anggota
    ├── edit-anggota.blade.php             # Edit anggota
    └── profile.blade.php                  # Profil admin
```

### Routes
```
routes/web.php
- GET  /login                              # Halaman login
- POST /login/anggota                      # Login anggota (cookie)
- POST /login/admin                        # Login admin (session)
- GET  /logout/anggota                     # Logout anggota
- GET  /logout/admin                       # Logout admin

Anggota Routes (Cookie-based):
- GET  /anggota/dashboard                  # Dashboard anggota
- GET  /anggota/edit-profile               # Form edit profil
- POST /anggota/update-profile             # Update profil
- POST /anggota/change-password            # Ubah password

Admin Routes (Session-based):
- GET  /admin/dashboard                    # Dashboard admin
- GET  /admin/list-anggota                 # Daftar anggota
- GET  /admin/create-anggota               # Form tambah anggota
- POST /admin/store-anggota                # Simpan anggota baru
- GET  /admin/edit-anggota/{id}            # Form edit anggota
- POST /admin/update-anggota/{id}          # Update anggota
- GET  /admin/delete-anggota/{id}          # Hapus anggota
- GET  /admin/profile                      # Profil admin
- POST /admin/update-profile               # Update profil admin
```

---

## 🔐 Fitur Keamanan

### Anggota (Cookie-based)
- ✅ Password di-hash menggunakan bcrypt
- ✅ Cookie httpOnly untuk mencegah XSS
- ✅ Cookie berlaku 7 hari
- ✅ Validasi email dan password
- ✅ Pengecekan status akun (aktif/nonaktif)

### Admin (Session-based)
- ✅ Password di-hash menggunakan bcrypt
- ✅ Session disimpan di server
- ✅ Validasi email dan password
- ✅ Pengecekan status akun (aktif/nonaktif)
- ✅ Role-based access (super_admin, admin)

---

## 📊 Database Schema

### Tabel `anggotas`
```sql
- id (Primary Key)
- nama (string)
- email (unique)
- password (hashed)
- nim (unique)
- no_telepon (nullable)
- alamat (nullable)
- jurusan (nullable)
- tahun_masuk (nullable)
- foto_profil (nullable)
- status (aktif/nonaktif)
- timestamps
```

### Tabel `admins`
```sql
- id (Primary Key)
- nama (string)
- email (unique)
- password (hashed)
- no_telepon (nullable)
- foto_profil (nullable)
- role (super_admin/admin)
- status (aktif/nonaktif)
- timestamps
```

---

## 🚀 Cara Menggunakan

### 1. Login Anggota
```
URL: /login
Tab: Anggota
Email: [email anggota]
Password: [password anggota]
```

**Fitur yang tersedia:**
- Dashboard dengan informasi profil
- Edit profil (nama, telepon, alamat, jurusan, tahun masuk, foto)
- Ubah password
- Logout

### 2. Login Admin
```
URL: /login
Tab: Admin
Email: [email admin]
Password: [password admin]
```

**Fitur yang tersedia:**
- Dashboard dengan statistik anggota
- Lihat daftar semua anggota (dengan pagination)
- Tambah anggota baru
- Edit data anggota
- Hapus anggota
- Kelola profil admin
- Logout

---

## 🔧 Cara Membuat Data Test

### Membuat Admin (via Tinker)
```bash
php artisan tinker

# Buat admin
$admin = new App\Models\Admin();
$admin->nama = 'Admin HMIT';
$admin->email = 'admin@hmit.com';
$admin->password = Hash::make('password123');
$admin->no_telepon = '081234567890';
$admin->role = 'super_admin';
$admin->status = 'aktif';
$admin->save();
```

### Membuat Anggota (via Tinker)
```bash
php artisan tinker

# Buat anggota
$anggota = new App\Models\Anggota();
$anggota->nama = 'Budi Santoso';
$anggota->email = 'budi@hmit.com';
$anggota->password = Hash::make('password123');
$anggota->nim = '2023001';
$anggota->no_telepon = '081234567890';
$anggota->jurusan = 'Informatika';
$anggota->tahun_masuk = '2023';
$anggota->alamat = 'Jl. Merdeka No. 123';
$anggota->status = 'aktif';
$anggota->save();
```

---

## 🎨 UI/UX Features

### Login Page
- ✅ Two-tab interface (Anggota & Admin)
- ✅ Branding section dengan logo HMIT
- ✅ Password visibility toggle
- ✅ Remember me checkbox
- ✅ Error messages
- ✅ Responsive design (mobile-friendly)

### Dashboard Anggota
- ✅ Profile card dengan foto
- ✅ Quick actions
- ✅ Edit profil form
- ✅ Change password form
- ✅ Status badge (aktif/nonaktif)

### Dashboard Admin
- ✅ Statistics cards (total, aktif, nonaktif)
- ✅ Quick actions
- ✅ Member list dengan pagination
- ✅ CRUD operations
- ✅ Search & filter capabilities

---

## 📱 Responsive Design

Semua halaman telah dioptimalkan untuk:
- ✅ Desktop (1920px+)
- ✅ Tablet (768px - 1024px)
- ✅ Mobile (320px - 767px)

---

## 🔄 Authentication Flow

### Anggota (Cookie-based)
```
1. User mengakses /login
2. Pilih tab "Anggota"
3. Masukkan email & password
4. POST ke /login/anggota
5. Validasi email & password
6. Jika valid, buat cookie 'anggota_id' (7 hari)
7. Redirect ke /anggota/dashboard
8. Cookie digunakan untuk verifikasi di setiap request
```

### Admin (Session-based)
```
1. User mengakses /login
2. Pilih tab "Admin"
3. Masukkan email & password
4. POST ke /login/admin
5. Validasi email & password
6. Jika valid, simpan data di session
7. Redirect ke /admin/dashboard
8. Session digunakan untuk verifikasi di setiap request
```

---

## ⚠️ Catatan Penting

1. **Folder Upload**: Pastikan folder `public/uploads/profil` sudah ada
   ```bash
   mkdir -p public/uploads/profil
   chmod 755 public/uploads/profil
   ```

2. **Environment Variables**: Pastikan `.env` sudah dikonfigurasi dengan benar

3. **Session Configuration**: Session disimpan di `storage/framework/sessions`

4. **Cookie Configuration**: Cookie httpOnly untuk keamanan maksimal

5. **Password Hashing**: Semua password di-hash menggunakan bcrypt

---

## 🎯 Fitur yang Dapat Dikembangkan

- [ ] Two-factor authentication (2FA)
- [ ] Email verification
- [ ] Password reset via email
- [ ] Role-based access control (RBAC)
- [ ] Activity logging
- [ ] Member statistics & reports
- [ ] Bulk import/export anggota
- [ ] Advanced search & filtering
- [ ] Member groups/divisions
- [ ] Attendance tracking

---

## 📞 Support

Untuk pertanyaan atau masalah, silakan hubungi tim development HMIT.

---

**Dibuat dengan ❤️ untuk HMIT**
