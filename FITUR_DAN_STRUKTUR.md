# 🎨 Fitur dan Struktur Landing Page HMIT

## 📑 Daftar Fitur

### 1. **Navigation Bar (Sticky)**
- Logo HMIT dengan icon
- Menu navigasi responsif
- Hamburger menu untuk mobile
- Smooth scroll ke section
- Active link highlighting

### 2. **Hero Section**
- Gradient background (Indigo → Purple)
- Judul besar dan subtitle
- 2 CTA buttons (Bergabung & Pelajari Lebih Lanjut)
- Floating shapes animation
- Responsive typography

### 3. **About Section**
- Deskripsi organisasi
- 3 statistik dengan counter animation:
  - 500+ Anggota Aktif
  - 50+ Acara Tahunan
  - 100% Dedikasi
- Placeholder image dengan gradient

### 4. **Programs Section**
- 6 program unggulan dalam grid layout:
  1. Workshop & Seminar
  2. Kompetisi
  3. Networking
  4. Study Group
  5. Mentoring
  6. Community Service
- Card hover animation
- Icon untuk setiap program

### 5. **Events Section**
- 3 acara mendatang
- Event card dengan tanggal
- Lokasi dan deskripsi acara
- Responsive layout

### 6. **Contact Section**
- Informasi kontak (Email, Telepon, Lokasi)
- Contact form dengan validasi
- CSRF protection (Laravel)
- Responsive 2-column layout

### 7. **Footer**
- Company info
- Quick links
- Social media links
- Copyright notice

---

## 🗂️ Struktur File

### **Controllers**
```
app/Http/Controllers/LandingController.php
├── index()      → Halaman utama
├── about()      → Halaman tentang
├── programs()   → Halaman program
├── events()     → Halaman acara
└── contact()    → Halaman kontak
```

### **Views**
```
resources/views/
├── layouts/
│   └── app.blade.php          # Layout utama
└── landing/
    └── index.blade.php        # Halaman landing
```

### **Styling**
```
resources/css/
└── app.css                    # Semua styling
    ├── CSS Variables
    ├── Navigation
    ├── Hero Section
    ├── About Section
    ├── Programs Section
    ├── Events Section
    ├── Contact Section
    ├── Footer
    └── Responsive Design
```

### **JavaScript**
```
resources/js/
└── app.js                     # Semua interaktivitas
    ├── Mobile Menu Toggle
    ├── Smooth Scrolling
    ├── Form Validation
    ├── Intersection Observer
    ├── Counter Animation
    └── Active Link Highlighting
```

### **Routes**
```
routes/web.php
├── GET /              → Landing page
├── GET /about         → About page
├── GET /programs      → Programs page
├── GET /events        → Events page
└── GET /contact       → Contact page
```

---

## 🎯 CSS Variables

Semua warna dan styling dapat dikustomisasi melalui CSS variables:

```css
:root {
    --primary-color: #6366f1;      /* Warna utama (Indigo) */
    --secondary-color: #8b5cf6;    /* Warna sekunder (Purple) */
    --accent-color: #ec4899;       /* Warna accent (Pink) */
    --dark-bg: #0f172a;            /* Background gelap */
    --light-bg: #f8fafc;           /* Background terang */
    --text-dark: #1e293b;          /* Teks gelap */
    --text-light: #64748b;         /* Teks terang */
    --border-color: #e2e8f0;       /* Warna border */
    --transition: all 0.3s ease;   /* Durasi transisi */
}
```

---

## 🎬 Animasi

### **Floating Shapes**
- 3 shape yang bergerak naik-turun
- Durasi: 6-8 detik
- Opacity: 0.1 (subtle)

### **Slide In Animation**
- Hero title: slide down
- Hero subtitle: slide up
- Durasi: 0.8s

### **Card Hover**
- Program cards: translateY(-10px)
- Event cards: translateY(-5px)
- Box shadow increase

### **Counter Animation**
- Statistik di-animate dari 0 ke target
- Durasi: 2 detik
- Trigger: saat section visible

### **Intersection Observer**
- Cards fade in saat scroll
- Smooth opacity dan transform
- Threshold: 0.1

---

## 📱 Responsive Breakpoints

### **Desktop (> 768px)**
- Full navigation menu
- 2-column layouts
- Full-size typography

### **Tablet (768px)**
- Hamburger menu
- 1-column layouts
- Adjusted typography

### **Mobile (< 480px)**
- Smaller fonts
- Single column
- Optimized spacing

---

## 🔧 Customization Guide

### **Mengubah Warna Tema**

Edit `resources/css/app.css`:

```css
:root {
    --primary-color: #YOUR_COLOR;
    --secondary-color: #YOUR_COLOR;
    --accent-color: #YOUR_COLOR;
}
```

### **Mengubah Font**

Edit `resources/css/app.css`:

```css
@import url('https://fonts.googleapis.com/css2?family=YOUR_FONT:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'YOUR_FONT', sans-serif;
}
```

### **Menambah Program Baru**

Edit `resources/views/landing/index.blade.php`:

```html
<div class="program-card">
    <div class="program-icon">
        <i class="fas fa-YOUR_ICON"></i>
    </div>
    <h3>Program Name</h3>
    <p>Program description</p>
</div>
```

### **Menambah Event Baru**

Edit `resources/views/landing/index.blade.php`:

```html
<div class="event-card">
    <div class="event-date">
        <span class="day">DD</span>
        <span class="month">MMM</span>
    </div>
    <div class="event-content">
        <h3>Event Title</h3>
        <p><i class="fas fa-map-marker-alt"></i> Location</p>
        <p class="event-desc">Description</p>
    </div>
</div>
```

---

## 🚀 Performance Tips

1. **Lazy Loading Images**
   - Gunakan `loading="lazy"` attribute
   - Atau implement dengan Intersection Observer

2. **Optimize CSS**
   - Minify CSS untuk production
   - Gunakan `npm run build`

3. **Optimize JavaScript**
   - Minify JS untuk production
   - Remove console.log di production

4. **Caching**
   - Enable browser caching
   - Use Laravel caching

5. **CDN**
   - Gunakan CDN untuk Font Awesome
   - Gunakan CDN untuk Google Fonts

---

## 📊 SEO Optimization

### **Meta Tags**
```html
<meta name="description" content="...">
<meta name="keywords" content="...">
<meta name="author" content="HMIT">
<meta property="og:title" content="...">
<meta property="og:description" content="...">
```

### **Structured Data**
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "HMIT",
  "url": "https://hmit.ac.id",
  "logo": "https://hmit.ac.id/logo.png"
}
</script>
```

---

## 🔐 Security Features

1. **CSRF Protection**
   - Laravel CSRF token di form
   - `@csrf` directive di Blade

2. **Input Validation**
   - Client-side validation
   - Server-side validation (dapat ditambahkan)

3. **XSS Protection**
   - Blade escaping
   - Content Security Policy

---

## 📈 Analytics Integration

Untuk menambahkan Google Analytics:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_ID');
</script>
```

---

## 🎓 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Templating](https://laravel.com/docs/blade)
- [Vite Documentation](https://vitejs.dev/)
- [CSS Variables](https://developer.mozilla.org/en-US/docs/Web/CSS/--*)
- [Intersection Observer API](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API)

---

## 📝 Changelog

### Version 1.0.0 (Initial Release)
- ✅ Landing page dengan 7 sections
- ✅ Responsive design
- ✅ Smooth animations
- ✅ Contact form
- ✅ Mobile menu
- ✅ Counter animation
- ✅ Social media links

---

**Terakhir diupdate: April 2024**
