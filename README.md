# Company Profile of GSA
Website company profile ini menyajikan informasi lengkap mengenai perusahaan PT Gudang Solusi Acommerce yang dirancang untuk memberikan kesan profesional dan kredibel, serta mempermudah pengunjung untuk mengenal perusahaan secara lebih mendalam.

---

## Spesifikasi Teknologi
Proyek ini dikembangkan menggunakan teknologi berikut :

### 1. **Frontend**
- **HTML5** : Digunakan untuk struktur halaman dan elemen web semantik.
- **CSS3** : Digunakan untuk styling dan animasi halaman web.
- **Bootstrap 5** : Framework untuk membuat desain yang responsif dan konsisten.
- **JavaScript (ES6)** : Membantu menambahkan interaktivitas, validasi form, dan komunikasi API.

### 2. **Backend**
- **PHP** : Menggunakan versi 8.1.25 untuk pengembangan backend, mendukung performa lebih cepat dan fitur modern.
- **Laravel** : Framework versi 10.48.22 untuk mempermudah pengelolaan aplikasi berbasis arsitektur MVC.

### 3. **Database**
- **MySQL** : Menggunakan versi 8.0.32 sebagai database utama, yang menawarkan performa tinggi, fitur JSON indexing, dan keamanan data yang lebih baik.

### 4. **Version Control dan CI/CD**
- **Git** : Digunakan untuk kontrol versi dan mengelola perubahan kode, serta kolaborasi tim.

---

## Panduan Instalasi dan Pengaturan Proyek

### 1. **Persyaratan Sistem**
Sebelum memulai, pastikan perangkat Anda memiliki spesifikasi berikut:
- **PHP** : Versi 8.1.25 atau lebih baru.
- **Composer** : Untuk mengelola dependensi PHP.
- **Node.js** dan **NPM** : Untuk mengelola dependensi frontend.
- **MySQL** : Versi 8.0 atau lebih baru.
- **Git** : Untuk cloning repository dan kontrol versi.

---

### 2. **Langkah Instalasi Proyek**

#### **Langkah 1 : Clone Repository**
Clone proyek dari GitHub menggunakan perintah berikut :
```bash
git clone https://github.com/putriitr/Compro_AGS.git
cd Compro_AGS
```

#### **Langkah 2 : Install Dependensi Backend**
Gunakan Composer untuk menginstal dependensi PHP :
```bash
composer install
```

#### **Langkah 3 : Install Dependensi Frontend**
Gunakan NPM untuk menginstal paket frontend :
```bash
npm install
npm run dev
```

#### **Langkah 4 : Konfigurasi File .env**
Salin file .env.example menjadi .env :
```bash
cp .env.example .env
```

Edit file .env untuk menyesuaikan konfigurasi berikut :
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xqPeNrxsJaW7kBIVQ/cN0wG8A7MoV+uCWI1kM2V7/PU=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=compro-gsa
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

#### **Langkah 5 : Migrasi Database**
Jalankan perintah berikut untuk membuat tabel di database :
```bash
php artisan migrate --seed
```

#### **Langkah 6: Jalankan Server Lokal**
Gunakan perintah berikut untuk memulai server lokal :
```bash
php artisan serve
```
Atau buka aplikasi di browser melalui URL: http://localhost:8000
