# 🍞 Bakerins — Bakery & Dessert Web Application

Bakerins adalah aplikasi web berbasis **Laravel** yang menampilkan dan mengelola produk toko roti & dessert (es dan bolu) secara online dengan konsep **UMKM rumahan**.  

---

## 🌟 Preview Aplikasi (Landing Page)

- Hero Section: “Manis, Segar, dan Lembut — Es & Bolu Favoritmu”
- Highlight Keunggulan:
  - ✅ Fresh Setiap Hari  
  - ✅ Produksi Rumahan  
  - ✅ Tanpa Pengawet  
- Produk Unggulan
- Navigasi: Home, Produk, Login, Belanja

---

## ✨ Fitur Utama

- ✅ Landing Page Produk UMKM
- ✅ CRUD Produk (Create, Read, Update, Delete)
- ✅ Upload Gambar Produk
- ✅ Admin Panel dengan **Filament**
- ✅ Autentikasi Login Admin
- ✅ Manajemen Produk Unggulan
- ✅ Database MySQL
- ✅ UI Responsif (Desktop & Mobile)

---

## 🧑‍💻 Role Pengguna

| Role   | Hak Akses |
|--------|-----------|
| Admin  | Kelola produk, upload gambar, edit & hapus |
| User   | Melihat produk & landing page |

---

## 🛠️ Teknologi yang Digunakan

- **Laravel**
- **PHP 8+**
- **MySQL**
- **Blade Template**
- **Tailwind CSS**
- **Filament Admin**
- **Vite**

---

## ⚙️ Cara Instalasi Project

### 1️⃣ Clone Repository

```bash
git clone https://github.com/rifqyfakhryzain/bakerins-app.git
cd bakerins-app

```

### 2️⃣ Install Dependency
```bash
composer install
npm install
npm run dev
```

### 3️⃣ Copy File Environment
```bash
cp .env.example .env
```

### 4️⃣ Generate App Key/
```bash
php artisan key:generate
```

### 5️⃣ Konfigurasi Database
Edit file .env
```bash
DB_DATABASE=bakerins
DB_USERNAME=root
DB_PASSWORD=
```

### 6️⃣ Migrasi Database
```bash
php artisan migrate
```

### 7️⃣ Jalankan Server
```bash
php artisan serve
```

### Akses aplikasi:
```bash
http://127.0.0.1:8000
```