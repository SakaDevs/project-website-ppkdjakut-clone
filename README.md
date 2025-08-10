# CodeIgniter 4 — Starter (Enhanced)

> **Ringkasan:** Starter aplikasi CodeIgniter 4 yang telah dikembangkan dan dikustomisasi — clone dari situs PPKD Jakarta Utara dengan fitur tambahan seperti middleware terstruktur, sistem login & multi-role, CRUD lengkap, animasi UI lebih halus, dan lainnya.

---

## ✨ Fitur Utama

* **Otentikasi & Otorisasi**

  * Sistem login terpusat dengan multi-role (Admin, Operator, User, dll.)
  * Middleware Role-Based Access Control (RBAC)
* **CRUD & REST API**

  * Generator controller, model, view, dan validasi
  * Endpoint JSON untuk integrasi frontend
* **UX/UI**

  * Animasi transisi halus (CSS/JS)
  * Komponen tabel, form, dan modal reusable
* **Keamanan & Performa**

  * CSRF protection, input sanitization
  * Rate limiting middleware opsional
* **Pengembangan**

  * Migration & Seeder otomatis
  * Task script untuk composer/npm
  * Contoh GitHub Actions (lint, test)

---

## 📂 Struktur Proyek

```
/ (root)
├─ app/                 # Controllers, Models, Views, Filters
├─ public/              # Document root (index.php di sini)
├─ writable/
├─ tests/
├─ vendor/
├─ .env
├─ composer.json
└─ README.md
```

> **Penting:** Konfigurasi web server agar `public/` menjadi document root.

---

## 🚀 Instalasi

```bash
git clone <repo-url>
cd <repo-folder>
composer install
npm install # jika ada asset frontend
cp env .env # lalu sesuaikan baseURL & database
php spark migrate
php spark db:seed UserSeeder
php spark serve --host=0.0.0.0 --port=8080
```

---

## 📦 Deployment

* Point virtual host ke `public/`
* PHP >= 8.1 + ekstensi `intl`, `mbstring`, `json`, `mysqlnd`
* Jangan commit `.env`
* Jalankan `php spark migrate --all` di server

**Contoh konfigurasi Nginx:**

```nginx
server {
    listen 80;
    server_name contoh.domain.id;
    root /path/to/project/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

---

## 🔐 Middleware & RBAC

```php
$routes->group('admin', ['filter' => 'role:admin,superadmin'], function($routes) {
    $routes->get('dashboard', 'Admin\\Dashboard::index');
});
```

---

## 🧪 Testing

```bash
composer test
```

---

## 🐳 Docker (opsional)

```yaml
version: '3.8'
services:
  app:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./:/var/www/html
  db:
    image: mysql:8
    environment:
      MYSQL_DATABASE: ci4
      MYSQL_ROOT_PASSWORD: secret
```

---

## ✅ Checklist Release

* [ ] Migration & seeder dibuat
* [ ] `.env` tidak ikut ter-commit
* [ ] Test & linter lolos
* [ ] Backup database sebelum migrasi

---

## 📄 Lisensi & Credits

Berdasarkan CodeIgniter 4 — dokumentasi resmi: [https://codeigniter.com](https://codeigniter.com)
