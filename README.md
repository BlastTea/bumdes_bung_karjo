# Management Pariwisata BUMDes Sumberejo

Selamat datang di repository Management Pariwisata BUMDes Sumberejo. Proyek ini adalah sebuah aplikasi web untuk mengelola informasi dan layanan pariwisata yang ditawarkan oleh BUMDes Sumberejo. Aplikasi ini dibangun menggunakan framework Laravel untuk backend dan Tailwind CSS dengan DaisyUI untuk frontend.

## Daftar Isi

- [Prasyarat](#prasyarat)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
  - [.env](#env)
  - [.env.development](#envdevelopment)
  - [.env.production](#envproduction)
- [Menjalankan Aplikasi](#menjalankan-aplikasi)
- [Struktur Proyek](#struktur-proyek)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## Prasyarat

Pastikan Anda sudah menginstal prasyarat berikut:
- PHP >= 8.0
- Composer
- Node.js & npm
- Git

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal proyek ini di mesin lokal Anda:

1. Clone repository:
    ```bash
    git clone https://github.com/BlastTea/bumdes_bung_karjo.git
    cd bumdes_bung_karjo
    ```

2. Instal dependensi PHP:
    ```bash
    composer install
    ```

3. Instal dependensi JavaScript:
    ```bash
    npm install
    ```

4. Buat file konfigurasi lingkungan:
    ```bash
    cp .env.example .env
    ```

5. Buat kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

## Konfigurasi

### .env

File `.env` adalah file konfigurasi utama untuk aplikasi ini. Di sini Anda akan mengatur variabel lingkungan yang diperlukan oleh aplikasi. Contoh variabel yang perlu diatur:

```dotenv
APP_NAME=Management Pariwisata BUMDes Sumberejo
APP_ENV=local
APP_KEY=base64:generated_key_here
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Tailwind/DaisyUI settings
MIX_TAILWIND_MODE=jit
```

## .env.development
File .env.development digunakan untuk konfigurasi saat pengembangan. Ini memungkinkan Anda untuk menyimpan pengaturan yang berbeda dari lingkungan produksi, seperti:

```dotenv development
APP_ENV=development
APP_DEBUG=true

# Development-specific settings
DB_DATABASE=your_dev_database
DB_USERNAME=your_dev_username
DB_PASSWORD=your_dev_password
```

### .env.production
File .env.production digunakan untuk konfigurasi saat produksi. Di sini Anda akan menyimpan pengaturan yang lebih aman dan optimal untuk aplikasi yang berjalan di lingkungan produksi:

```dotenv production
APP_ENV=production
APP_DEBUG=false

# Production-specific settings
DB_DATABASE=your_prod_database
DB_USERNAME=your_prod_username
DB_PASSWORD=your_prod_password
```

# Menjalankan Aplikasi
### Setelah melakukan konfigurasi, Anda bisa menjalankan aplikasi dengan perintah berikut:

1. Menjalankan server pengembangan Laravel:
```
php artisan serve
```
2. Menjalankan proses build untuk aset front-end:
```
npm run dev
```

# DONE
## Thx for Attention


