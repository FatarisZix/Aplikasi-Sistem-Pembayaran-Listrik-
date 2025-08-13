# Aplikasi-Sistem-Pembayaran-Listrik-
Proyek ini merupakan aplikasi Sistem Pembayaran Listrik yang dibangun menggunakan bahasa pemrograman PHP dengan framework Laravel.
Aplikasi ini dirancang untuk mengelola dan memproses data kelistrikan, termasuk pencatatan, pengelolaan, dan pelaporan sesuai kebutuhan pengguna.

Catatan: Folder vendor tidak disertakan di repository untuk mengurangi ukuran file. Semua dependensi Laravel harus di-install ulang menggunakan Composer di lingkungan pengembangan Anda.

Persyaratan Sistem
• PHP versi 8.x atau lebih baru
• Composer
• MySQL/MariaDB (atau database lain yang kompatibel)
• Web server seperti Apache atau Nginx
• Laravel versi minimal 10.x (disesuaikan dengan proyek)

Untuk Login Sebagai Admin
admin@admin.com
admin123

Langkah Instalasi
• Clone repository
git clone https://github.com/username/nama-repo.git

• Masuk ke folder proyek
cd nama-repo

• Install dependensi Laravel
composer install

• Salin file .env dari template
cp .env.example .env

• Atur konfigurasi sesuai kebutuhan, minimal bagian koneksi database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

• Generate application key
php artisan key:generate

• Migrasi database
php artisan migrate

• Jika tersedia data awal:
php artisan migrate --seed

• Jalankan server pengembangan
php artisan serve

Catatan Tambahan
• Pastikan ekstensi PHP yang dibutuhkan Laravel sudah aktif di server lokal Anda.
• File tambahan seperti gambar atau dataset dapat disimpan di folder:
    •public/ → untuk file statis yang diakses langsung oleh browser.
    •storage/ → untuk file yang bersifat internal aplikasi.
• Folder vendor akan otomatis terbuat setelah menjalankan composer install.
