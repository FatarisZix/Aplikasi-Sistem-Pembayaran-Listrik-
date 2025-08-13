# Aplikasi-Sistem-Pembayaran-Listrik-
Proyek ini merupakan aplikasi Sistem Listrik yang dibangun menggunakan bahasa pemrograman PHP dengan framework Laravel.
Aplikasi ini dirancang untuk mengelola dan memproses data yang berkaitan dengan sistem kelistrikan, termasuk pencatatan, pengelolaan, dan pelaporan data sesuai kebutuhan pengguna.

Repository ini tidak menyertakan folder vendor demi mengurangi ukuran file, sehingga dependensi Laravel dan pustaka lainnya harus di-install ulang di lingkungan pengembangan Anda.

Persyaratan Sistem
PHP versi 8.x atau lebih baru

Composer

MySQL/MariaDB (atau database lain yang kompatibel)

Web server seperti Apache atau Nginx

Langkah Instalasi
Clone repository ini ke lokal Anda:

bash
Copy
Edit
git clone https://github.com/username/nama-repo.git
Masuk ke folder proyek:

bash
Copy
Edit
cd nama-repo
Install semua dependensi Laravel menggunakan Composer:

bash
Copy
Edit
composer install
Salin file .env.example menjadi .env dan atur konfigurasi sesuai kebutuhan, termasuk koneksi database.

Jalankan perintah berikut untuk membuat application key:

bash
Copy
Edit
php artisan key:generate
Lakukan migrasi database:

bash
Copy
Edit
php artisan migrate
Jalankan server pengembangan Laravel:

bash
Copy
Edit
php artisan serve
Catatan
Pastikan ekstensi PHP yang dibutuhkan Laravel sudah aktif di server lokal Anda.

Jika ada file tambahan seperti gambar atau dataset, simpan di folder yang sesuai (public/ atau storage/).

Folder vendor akan otomatis terbuat setelah menjalankan composer install.
