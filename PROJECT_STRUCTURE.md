# 📁 Struktur Project HMIT Landing Page

## 🌳 Struktur Folder Lengkap

```
hmit-landing/
│
├── 📂 app/                          # Aplikasi Laravel
│   ├── 📂 Http/
│   │   ├── 📂 Controllers/
│   │   │   └── LandingController.php    # Controller utama
│   │   ├── 📂 Middleware/
│   │   └── 📂 Requests/
│   ├── 📂 Models/                   # Database models
│   ├── 📂 Providers/                # Service providers
│   └── 📂 Exceptions/
│
├── 📂 bootstrap/                    # Bootstrap Laravel
│   ├── 📂 cache/
│   ├── app.php
│   └── providers.php
│
├── 📂 config/                       # Konfigurasi aplikasi
│   ├── app.php                      # Konfigurasi app
│   ├── database.php                 # Konfigurasi database
│   ├── cache.php
│   ├── mail.php
│   ├── session.php
│   └── ... (file konfigurasi lainnya)
│
├── 📂 database/                     # Database
│   ├── 📂 migrations/               # Database migrations
│   ├── 📂 seeders/                  # Database seeders
│   ├── 📂 factories/                # Model factories
│   └── .gitignore
│
├── 📂 public/                       # Public folder (akses web)
│   ├── index.php                    # Entry point aplikasi
│   ├── favicon.ico
│   ├── robots.txt
│   ├── .htaccess
│   └── 📂 build/                    # Build assets (production)
│       ├── assets/
│       └── manifest.json
│
├── 📂 resources/                    # Resources (views, CSS, JS)
│   ├── 📂 css/
│   │   └── app.css                  # ⭐ Styling utama
│   ├── 📂 js/
│   │   └── app.js                   # ⭐ JavaScript interaktif
│   └── 📂 views/
│       ├── 📂 layouts/
│       │   └── app.blade.php        # ⭐ Layout utama
│       └── 📂 landing/
│           └── index.blade.php      # ⭐ Halaman landing
│
├── 📂 routes/                       # Routes
│   ├── web.php                      # ⭐ Web routes
│   ├── api.php
│   └── console.php
│
├── 📂 storage/                      # Storage
│   ├── 📂 app/
│   ├── 📂 framework/
│   │   ├── 📂 cache/
│   │   ├── 📂 sessions/
│   │   └── 📂 views/
│   └── 📂 logs/
│       └── laravel.log              # Log file
│
├── 📂 tests/                        # Unit & Feature tests
│   ├── 📂 Feature/
│   ├── 📂 Unit/
│   └── TestCase.php
│
├── 📂 vendor/                       # PHP dependencies (auto-generated)
│   ├── 📂 laravel/
│   ├── 📂 symfony/
│   └── ... (packages lainnya)
│
├── 📂 node_modules/                 # JavaScript dependencies (auto-generated)
│   └── ... (packages lainnya)
│
├── 📄 .env                          # Environment variables (local)
├── 📄 .env.example                  # Template .env
├── 📄 .gitignore                    # Git ignore rules
├── 📄 .editorconfig                 # Editor config
├── 📄 artisan                       # Laravel CLI
├── 📄 composer.json                 # PHP dependencies
├── 📄 composer.lock                 # Composer lock file
├── 📄 package.json                  # JavaScript dependencies
├── 📄 package-lock.json             # npm lock file
├── 📄 vite.config.js                # Vite configuration
├── 📄 phpunit.xml                   # PHPUnit config
├── 📄 README.md                     # Default README
│
├── 📄 PANDUAN_LARAGON.md            # ⭐ Panduan setup Laragon
├── 📄 README_SETUP.md               # ⭐ Setup lengkap
├── 📄 QUICK_START.md                # ⭐ Quick start
├── 📄 FITUR_DAN_STRUKTUR.md         # ⭐ Fitur & struktur
├── 📄 TROUBLESHOOTING.md            # ⭐ Troubleshooting
└── 📄 PROJECT_STRUCTURE.md          # ⭐ File ini
```

---

## 📝 File-File Penting

### **⭐ File yang Sering Diubah**

| File | Fungsi | Lokasi |
|------|--------|--------|
| `index.blade.php` | Konten halaman | `resources/views/landing/` |
| `app.css` | Styling | `resources/css/` |
| `app.js` | Interaktivitas | `resources/js/` |
| `web.php` | Routes | `routes/` |
| `LandingController.php` | Logic | `app/Http/Controllers/` |
| `.env` | Konfigurasi | Root folder |

### **⚙️ File Konfigurasi**

| File | Fungsi |
|------|--------|
| `.env` | Environment variables |
| `vite.config.js` | Vite configuration |
| `composer.json` | PHP dependencies |
| `package.json` | JavaScript dependencies |
| `config/app.php` | App configuration |
| `config/database.php` | Database configuration |

### **📚 File Dokumentasi**

| File | Isi |
|------|-----|
| `PANDUAN_LARAGON.md` | Panduan lengkap setup Laragon |
| `README_SETUP.md` | Setup detail & customization |
| `QUICK_START.md` | Quick start 5 menit |
| `FITUR_DAN_STRUKTUR.md` | Fitur & cara customize |
| `TROUBLESHOOTING.md` | Troubleshooting guide |
| `PROJECT_STRUCTURE.md` | File ini |

---

## 🔄 Flow Aplikasi

```
User Request
    ↓
public/index.php (Entry point)
    ↓
routes/web.php (Routing)
    ↓
app/Http/Controllers/LandingController.php (Logic)
    ↓
resources/views/landing/index.blade.php (View)
    ↓
resources/css/app.css (Styling)
resources/js/app.js (Interaktivitas)
    ↓
Browser (Render HTML)
```

---

## 📊 Dependency Tree

### **PHP Dependencies (Composer)**
```
laravel/framework (v13.4.0)
├── symfony/console
├── symfony/http-foundation
├── symfony/http-kernel
├── symfony/routing
└── ... (dependencies lainnya)

laravel/tinker
laravel/pail
laravel/pint
```

### **JavaScript Dependencies (npm)**
```
vite (v8.0.0)
laravel-vite-plugin (v3.0.0)
tailwindcss (v4.0.0)
@tailwindcss/vite (v4.0.0)
axios (v1.14.0)
```

---

## 🎯 Alur Pengembangan

### **1. Menambah Halaman Baru**

```
1. Buat view: resources/views/landing/new-page.blade.php
2. Buat method di: app/Http/Controllers/LandingController.php
3. Tambah route di: routes/web.php
4. Link dari navbar
```

### **2. Mengubah Styling**

```
1. Edit: resources/css/app.css
2. Vite akan auto-reload
3. Refresh browser
```

### **3. Menambah Interaktivitas**

```
1. Edit: resources/js/app.js
2. Vite akan auto-reload
3. Refresh browser
```

### **4. Menambah Database**

```
1. Buat migration: php artisan make:migration
2. Edit migration file
3. Jalankan: php artisan migrate
4. Buat model: php artisan make:model
```

---

## 🔐 File Permissions

Folder yang harus writable:

```
storage/          (755 atau 777)
bootstrap/cache/  (755 atau 777)
```

Di Windows, biasanya tidak perlu diatur. Tapi jika ada error, cek permissions.

---

## 🚀 Build Process

### **Development**
```
npm run dev
    ↓
Vite dev server (port 5173)
    ↓
Hot Module Replacement (HMR)
    ↓
Auto-reload browser
```

### **Production**
```
npm run build
    ↓
Vite build
    ↓
Minify & optimize
    ↓
public/build/ (output)
```

---

## 📦 Versioning

### **Semantic Versioning**

```
MAJOR.MINOR.PATCH
1.0.0

MAJOR: Breaking changes
MINOR: New features
PATCH: Bug fixes
```

### **Current Version**
- Laravel: v13.4.0
- Vite: v8.0.0
- Node: 18+
- PHP: 8.2+

---

## 🔗 File Relationships

```
web.php
├── Routes to LandingController
│
LandingController.php
├── Returns views
│
app.blade.php (Layout)
├── Includes CSS: app.css
├── Includes JS: app.js
└── Yields content
    │
    index.blade.php (Content)
    ├── Uses Blade syntax
    ├── Styled by app.css
    └── Interactive with app.js
```

---

## 📋 Checklist File Setup

- [ ] `.env` sudah dikonfigurasi
- [ ] `composer.json` sudah ada
- [ ] `package.json` sudah ada
- [ ] `vite.config.js` sudah ada
- [ ] `routes/web.php` sudah ada
- [ ] `LandingController.php` sudah ada
- [ ] `app.blade.php` sudah ada
- [ ] `index.blade.php` sudah ada
- [ ] `app.css` sudah ada
- [ ] `app.js` sudah ada
- [ ] `storage/` folder writable
- [ ] `bootstrap/cache/` folder writable

---

## 🎓 Tips Organisasi

### **Naming Convention**

- **Controllers:** `PascalCase` + `Controller` (e.g., `LandingController`)
- **Models:** `PascalCase` (e.g., `User`, `Post`)
- **Views:** `kebab-case` (e.g., `landing.index`)
- **CSS Classes:** `kebab-case` (e.g., `.hero-section`)
- **JavaScript Functions:** `camelCase` (e.g., `handleClick()`)
- **Database Tables:** `snake_case` plural (e.g., `users`, `blog_posts`)

### **Folder Organization**

```
resources/
├── css/
│   ├── app.css              # Main styles
│   ├── components.css       # Component styles
│   └── utilities.css        # Utility styles
├── js/
│   ├── app.js               # Main JS
│   ├── components/          # Component JS
│   └── utils/               # Utility functions
└── views/
    ├── layouts/             # Layout templates
    ├── landing/             # Landing pages
    ├── components/          # Reusable components
    └── errors/              # Error pages
```

---

## 🔄 Git Ignore

File yang di-ignore (tidak di-commit):

```
/vendor/
/node_modules/
/.env
/.env.local
/storage/logs/
/storage/framework/
/bootstrap/cache/
/public/build/
```

---

**Terakhir diupdate: April 2024**
