# Aplikasi Sistem Manajemen Blog (CMS & Portal Publik)

Aplikasi ini dibangun untuk memenuhi Tugas Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web. 

## 👨‍💻 Identitas Mahasiswa
- **Nama Lengkap:** Mohammad Zaky Abdur Rosyid
- **NIM:** [Masukkan NIM Kamu Di Sini]
- **Program Studi:** Teknik Informatika
- **Mata Kuliah:** Pemrograman Web

## 📝 Deskripsi Singkat Aplikasi
Proyek ini adalah sebuah Sistem Manajemen Blog (CMS) dan Portal Berita Publik yang dibangun menggunakan *framework* Laravel (PHP) dengan mengimplementasikan pola arsitektur MVC (Model-View-Controller). 

Aplikasi ini memiliki dua antarmuka utama:
1. **Halaman Administrator (CMS):** Area *backend* yang dilindungi oleh sistem autentikasi (*login/logout*). Memungkinkan admin/penulis untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data Penulis, Kategori Artikel, dan Artikel.
2. **Halaman Pengunjung (Publik):** Area *frontend* yang dapat diakses publik tanpa *login*. Menampilkan daftar artikel terbaru, fitur penyaringan (*filter*) artikel berdasarkan kategori, dan halaman detail artikel lengkap beserta daftar artikel terkait. Tampilan antarmuka dibangun secara responsif dan elegan menggunakan Bootstrap.

## 🚀 Langkah-langkah Menjalankan Aplikasi Secara Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda (menggunakan XAMPP/Laragon):

1. **Clone Repositori**
   Buka terminal/CMD, lalu jalankan perintah berikut:
   ```bash
   git clone [https://github.com/OCHIDEZ/aplikasi-blog--240605110006-.git](https://github.com/OCHIDEZ/aplikasi-blog--240605110006-.git)
2. **Masuk ke Direktori Proyek**

Bash
cd aplikasi-blog--240605110006-
Install Dependensi Composer & NPM

Bash
composer install
npm install
npm run build
Konfigurasi Environment (.env)
Salin file .env.example menjadi .env:

Bash
cp .env.example .env
Buka file .env dan sesuaikan konfigurasi database-nya.

Generate Application Key

Bash
php artisan key:generate
Tautkan Storage (Storage Link)
Langkah ini wajib dilakukan agar gambar artikel dan foto profil penulis dapat ditampilkan:

Bash
php artisan storage:link
Migrasi Database
Pastikan Anda sudah membuat database kosong bernama db_blog, lalu jalankan:

Bash
php artisan migrate
Jalankan Local Development Server

Bash
php artisan serve
Buka browser dan akses aplikasi melalui http://127.0.0.1:8000.

🎥 Tautan Video Demonstrasi
Video demonstrasi yang menampilkan fitur CMS (CRUD) dan Halaman Pengunjung secara lengkap dapat diakses melalui tautan YouTube berikut:

👉 [MASUKKAN TAUTAN VIDEO YOUTUBE KAMU DI SINI]

Dibuat dengan ❤️ menggunakan Laravel & Bootstrap.
