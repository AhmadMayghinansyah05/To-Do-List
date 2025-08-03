✅ To-Do List App (Laravel 11)
Aplikasi To-Do List ini dibuat menggunakan Laravel 11, dilengkapi dengan fitur autentikasi (Login, Register, Forgot Password, Reset Password, Email Verification, Confirm Password), serta CRUD Task Management.
Desain dibuat simpel menggunakan Bootstrap 5.

🚀 Fitur Utama
✅ Autentikasi lengkap (Login, Register, Logout, Lupa Password, Reset Password, Konfirmasi Password, Verifikasi Email)

✅ Manajemen Tugas (Create, Read, Update, Delete)

✅ Proteksi CSRF dan Middleware auth untuk keamanan

✅ UI menggunakan Bootstrap 5 dengan desain clean pastel

✅ Redirect otomatis ke halaman tugas setelah login

🛠 Teknologi yang Digunakan
Laravel 11

PHP 8.2+

Bootstrap 5

MySQL / MariaDB (untuk database)

📦 Instalasi Project
Clone repository:

bash
Copy
Edit
git clone https://github.com/AhmadMayghinansyah05/todolist-laravel.git
cd todolist-laravel
Install dependencies:

bash
Copy
Edit
composer install
npm install && npm run dev
Copy file .env.example menjadi .env:

bash
Copy
Edit
cp .env.example .env
Generate key Laravel:

bash
Copy
Edit
php artisan key:generate
Atur koneksi database di file .env, lalu migrasikan tabel:

bash
Copy
Edit
php artisan migrate
(Opsional) Jika menggunakan SESSION_DRIVER=database, buat tabel session:

bash
Copy
Edit
php artisan session:table
php artisan migrate
Jalankan server:

bash
Copy
Edit
php artisan serve
Akses di browser:

arduino
Copy
Edit
http://localhost:8000


🧑‍💻 Cara Penggunaan
Register akun baru.

Login menggunakan akun yang sudah dibuat.

Tambahkan tugas baru, edit, atau hapus sesuai kebutuhan.

Logout jika selesai.

🤝 Kontribusi
Pull request sangat diterima! Silakan fork repository ini dan buat branch baru untuk fitur/bugfix Anda.
