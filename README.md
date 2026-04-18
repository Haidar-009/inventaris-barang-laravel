# 📦 Inventory Management System - Laravel

Sistem manajemen inventaris barang yang dirancang khusus untuk efisiensi pencatatan stok, pengelolaan kategori, dan pemantauan aset secara _real-time_. Proyek ini dibangun sebagai implementasi nyata dari pembelajaran **Rekayasa Perangkat Lunak (RPL)** di SMK.

## 🚀 Fitur Utama

- **Manajemen Barang (CRUD):** Tambah, edit, dan hapus barang dengan alur yang mudah.
- **Smart Alert Stock:** Sistem otomatis yang memberikan notifikasi visual jika stok barang menipis (< 5 item).
- **Modern UI:** Tampilan yang bersih, elegan, dan _mobile-friendly_ menggunakan **Tailwind CSS**.
- **Secure Auth:** Dilengkapi sistem autentikasi (Login/Register) untuk menjaga keamanan data inventaris.

## 🛠️ Tech Stack

- **Framework:** [Laravel 10](https://laravel.com/)
- **Frontend:** [Tailwind CSS](https://tailwindcss.com/) & [Blade Templating](https://laravel.com/docs/10.x/blade)
- **Database:** MySQL
- **Development Environment:** [Laragon](https://laragon.org/)
- **Version Control:** Git & GitHub

## 👨‍💻 Developed By

**Haidar** – _SMK Student | RPL Major_
_Passionately building software solutions._

---

## 🛠️ Cara Menjalankan Project

Jika kamu ingin menjalankan atau mengembangkan proyek ini di komputermu:

1.  **Clone Repository:**

    ```bash
    git clone [https://github.com/Haidar-009/inventaris-barang-laravel.git](https://github.com/Haidar-009/inventaris-barang-laravel.git)
    ```

2.  **Masuk ke Folder:**

    ```bash
    cd inventaris-barang-laravel
    ```

3.  **Install Dependencies:**

    ```bash
    composer install
    npm install
    npm run dev
    ```

4.  **Masuk ke Folder:**
    Copy file .env.example ke .env dan sesuaikan database kamu:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Migrate Database**

    ```bash
    php artisan migrate
    ```

6.  **Start Development Server**

    ```bash
    php artisan serve
    ```
