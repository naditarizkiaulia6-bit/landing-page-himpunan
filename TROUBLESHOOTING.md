# 🔧 Troubleshooting Guide

Panduan lengkap untuk mengatasi masalah yang mungkin terjadi.

---

## 🚨 Masalah Umum & Solusi

### **1. Port 8000 Sudah Dipakai**

**Error:**
```
Address already in use
```

**Solusi:**
```bash
# Gunakan port berbeda
php artisan serve --port=8001

# Atau cari proses yang menggunakan port 8000
netstat -ano | findstr :8000

# Kill process (ganti PID dengan nomor yang muncul)
taskkill /PID <PID> /F
```

---

### **2. npm Command Not Found**

**Error:**
```
'npm' is not recognized as an internal or external command
```

**Solusi:**
- Gunakan **Terminal Laragon (Cmder)** bukan Command Prompt biasa
- Atau install Node.js secara terpisah dari https://nodejs.org/

**Cek instalasi:**
```bash
node --version
npm --version
```

---

### **3. Composer Command Not Found**

**Error:**
```
'composer' is not recognized as an internal or external command
```

**Solusi:**
- Gunakan **Terminal Laragon (Cmder)**
- Atau install Composer dari https://getcomposer.org/

**Cek instalasi:**
```bash
composer --version
```

---

### **4. CSS dan JavaScript Tidak Muncul**

**Gejala:**
- Halaman terlihat plain tanpa styling
- Animasi tidak bekerja

**Solusi:**

1. **Pastikan Vite dev server berjalan:**
   ```bash
   npm run dev
   ```
   Harus muncul output:
   ```
   VITE v... ready in ... ms
   ➜  Local:   http://localhost:5173/
   ```

2. **Clear browser cache:**
   - Tekan `Ctrl + Shift + Delete`
   - Pilih "All time"
   - Hapus semua

3. **Refresh halaman:**
   - Tekan `Ctrl + F5` (hard refresh)

4. **Cek browser console:**
   - Tekan `F12`
   - Lihat tab "Console" untuk error

5. **Restart Vite server:**
   - Tekan `Ctrl + C` di terminal Vite
   - Jalankan `npm run dev` lagi

---

### **5. Halaman Blank atau Error 500**

**Gejala:**
- Halaman kosong atau error message

**Solusi:**

1. **Cek Laravel log:**
   ```bash
   # Lihat file log terbaru
   type storage/logs/laravel.log
   ```

2. **Generate key jika belum:**
   ```bash
   php artisan key:generate
   ```

3. **Clear cache:**
   ```bash
   php artisan cache:clear
   php artisan view:clear
   php artisan config:clear
   ```

4. **Restart Laravel server:**
   - Tekan `Ctrl + C`
   - Jalankan `php artisan serve` lagi

---

### **6. Database Connection Error**

**Error:**
```
SQLSTATE[HY000] [2002] No such file or directory
```

**Solusi:**

1. **Pastikan MySQL running di Laragon:**
   - Buka Laragon
   - Pastikan MySQL icon hijau

2. **Cek konfigurasi .env:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hmit_landing
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Buat database:**
   - Buka phpMyAdmin di Laragon
   - Buat database `hmit_landing`

4. **Jalankan migrations:**
   ```bash
   php artisan migrate
   ```

---

### **7. Composer Install Gagal**

**Error:**
```
Failed to download ... from dist
```

**Solusi:**

1. **Clear composer cache:**
   ```bash
   composer clear-cache
   ```

2. **Update composer:**
   ```bash
   composer self-update
   ```

3. **Install ulang:**
   ```bash
   composer install
   ```

4. **Jika masih gagal, gunakan source:**
   ```bash
   composer install --prefer-source
   ```

---

### **8. npm Install Gagal**

**Error:**
```
npm ERR! code ERESOLVE
npm ERR! ERESOLVE unable to resolve dependency tree
```

**Solusi:**

1. **Clear npm cache:**
   ```bash
   npm cache clean --force
   ```

2. **Delete node_modules dan package-lock.json:**
   ```bash
   rmdir /s /q node_modules
   del package-lock.json
   ```

3. **Install ulang:**
   ```bash
   npm install
   ```

4. **Jika masih gagal:**
   ```bash
   npm install --legacy-peer-deps
   ```

---

### **9. Form Tidak Bisa Dikirim**

**Gejala:**
- Klik tombol "Kirim Pesan" tidak ada reaksi

**Solusi:**

1. **Cek browser console (F12):**
   - Lihat error message

2. **Pastikan CSRF token ada:**
   - Di form harus ada `@csrf`

3. **Cek JavaScript:**
   - Pastikan `npm run dev` berjalan
   - Refresh halaman

---

### **10. Animasi Tidak Bekerja**

**Gejala:**
- Cards tidak bergerak saat hover
- Counter tidak berjalan

**Solusi:**

1. **Pastikan CSS ter-load:**
   - Buka DevTools (F12)
   - Tab "Elements"
   - Cari `<style>` tag

2. **Pastikan JavaScript ter-load:**
   - Tab "Console"
   - Tidak ada error

3. **Restart Vite:**
   ```bash
   npm run dev
   ```

---

## 🔍 Debugging Tips

### **1. Cek Laravel Log**
```bash
# Lihat log real-time
tail -f storage/logs/laravel.log

# Atau di Windows
type storage/logs/laravel.log
```

### **2. Gunakan Laravel Tinker**
```bash
php artisan tinker

# Di dalam tinker
>>> Route::getRoutes()
>>> config('app.debug')
```

### **3. Cek Network Tab**
- Buka DevTools (F12)
- Tab "Network"
- Refresh halaman
- Lihat request yang gagal (status 404, 500, dll)

### **4. Cek Console Tab**
- Buka DevTools (F12)
- Tab "Console"
- Lihat error messages

### **5. Cek Elements Tab**
- Buka DevTools (F12)
- Tab "Elements"
- Inspect element untuk melihat styling

---

## 📋 Checklist Debugging

Ketika ada masalah, cek:

- [ ] Laragon sudah running (Apache & MySQL hijau)
- [ ] Laravel server berjalan (`php artisan serve`)
- [ ] Vite dev server berjalan (`npm run dev`)
- [ ] Browser cache sudah dihapus
- [ ] Halaman sudah di-refresh (Ctrl + F5)
- [ ] Console browser tidak ada error
- [ ] File `.env` sudah dikonfigurasi
- [ ] Application key sudah generate
- [ ] Folder `storage` writable
- [ ] Folder `bootstrap/cache` writable

---

## 🆘 Jika Masih Tidak Bisa

### **Langkah Nuclear Option:**

1. **Hapus semua cache:**
   ```bash
   php artisan cache:clear
   php artisan view:clear
   php artisan config:clear
   php artisan route:clear
   ```

2. **Hapus node_modules dan reinstall:**
   ```bash
   rmdir /s /q node_modules
   del package-lock.json
   npm install
   ```

3. **Restart semua:**
   - Tutup semua terminal
   - Restart Laragon
   - Buka terminal baru
   - Jalankan `php artisan serve`
   - Jalankan `npm run dev`

4. **Jika masih tidak bisa:**
   - Cek file `storage/logs/laravel.log`
   - Cari error message spesifik
   - Google error message tersebut

---

## 📞 Minta Bantuan

Jika masih tidak bisa, siapkan informasi berikut:

1. **Error message lengkap** (copy-paste dari console/log)
2. **Screenshot** dari error
3. **Output dari:**
   ```bash
   php --version
   composer --version
   node --version
   npm --version
   ```
4. **Langkah-langkah** yang sudah dicoba

---

## 🔗 Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Vite Documentation](https://vitejs.dev/)
- [Node.js Documentation](https://nodejs.org/docs/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [Laragon Documentation](https://laragon.org/docs/)

---

**Semoga masalah Anda terselesaikan! 🎉**
