# Company Profile of GSA
Website company profile ini menyajikan informasi lengkap mengenai perusahaan PT Gudang Solusi Acommerce yang dirancang untuk memberikan kesan profesional dan kredibel, serta mempermudah pengunjung untuk mengenal perusahaan secara lebih mendalam.

## Spesifikasi Teknologi
Proyek ini dikembangkan menggunakan teknologi berikut :

1. Frontend
- HTML5 : Struktur halaman dan elemen web semantik.
- CSS3 : Styling dan animasi halaman web.
- Bootstrap 5 : Framework untuk membuat desain responsif dan konsisten.
- JavaScript (ES6): Interaktivitas, validasi form, dan komunikasi API.

2. Backend
- PHP : Versi 8.1.25 digunakan untuk pengembangan backend. Versi ini mendukung performa lebih cepat dan fitur modern.
- Laravel : Framework versi 9 untuk pengelolaan aplikasi berbasis arsitektur MVC.

3. Database
- MySQL : Versi 8.0 digunakan sebagai database utama. Versi ini menawarkan performa tinggi, fitur JSON indexing, dan keamanan data yang lebih baik.

4. Version Control dan CI/CD
- Git : Kontrol versi untuk mengelola perubahan kode dan kolaborasi tim.

5. Deployment
Nginx : Server web untuk melayani aplikasi dengan performa tinggi.
Ubuntu : Versi 22.04 LTS untuk sistem operasi server.
SSL dengan Let’s Encrypt: Digunakan untuk memastikan koneksi aman dengan HTTPS.


Panduan Instalasi dan Pengaturan Proyek
1. Persyaratan Sistem
Sebelum memulai, pastikan perangkat Anda memiliki persyaratan berikut :
- PHP : Versi 8.1.25 atau lebih baru.
- Composer : Untuk mengelola dependensi PHP.
- Node.js dan NPM : Untuk mengelola dependensi frontend.
- MySQL : Versi 8.0 atau lebih baru.
- Git : Untuk cloning repository dan kontrol versi.

2. Instalasi Proyek
Langkah 1 : Clone Repository
Clone proyek dari GitHub :

bash
Copy code
git clone https://github.com/username/company-profile.git  
cd company-profile  
Langkah 2: Install Dependensi Backend
Gunakan Composer untuk menginstal dependensi PHP:

bash
Copy code
composer install  
Langkah 3: Install Dependensi Frontend
Gunakan NPM untuk menginstal paket frontend:

bash
Copy code
npm install  
npm run dev  
Langkah 4: Konfigurasi File .env
Salin file .env.example menjadi .env:

bash
Copy code
cp .env.example .env  
