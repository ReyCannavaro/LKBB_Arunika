# 🏆 Website LKBB Arunika

![Banner Proyek](public/images/logo-arunika.png)

Selamat datang di repositori resmi untuk website **Lomba Keterampilan Baris-Berbaris (LKBB) Arunika**. Proyek ini adalah sebuah platform web untuk pendaftaran, manajemen, dan informasi seputar event LKBB Arunika. Dibangun dengan fokus pada desain yang modern, user-friendly, dan performa tinggi.

## 🌟 Fitur Unggulan

* **Tampilan Beranda yang Imersif:** Desain *hero section* yang menarik dengan latar belakang gambar dan teks yang mudah dibaca.
* **Pendaftaran Online:** Sistem pendaftaran tim yang efisien dan terstruktur.
* **Notifikasi Modern:** Penggunaan *pop-up* JavaScript yang halus untuk notifikasi penting.
* **Desain Responsif:** Tampilan yang optimal di berbagai perangkat, dari desktop hingga mobile.
* **Informasi Terstruktur:** Halaman terpisah untuk "Tentang Kami", profil dewan juri, dan ajakan bertindak (CTA).

## 🚀 Teknologi yang Digunakan

Proyek ini dikembangkan menggunakan tumpukan teknologi modern untuk memastikan skalabilitas dan kemudahan pengembangan:

* **Framework:** ⚛️ [Laravel](https://laravel.com/)
* **Styling:** 🎨 [Tailwind CSS](https://tailwindcss.com/)
* **Bahasa Pemrograman:** 🐘 PHP
* **Database:** 🐬 MySQL

## 🛠️ Cara Instalasi dan Menjalankan Proyek

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan proyek di lingkungan lokal Anda.

### Prasyarat

Pastikan Anda sudah menginstal:
* PHP (versi 8.1 atau lebih tinggi)
* Composer
* Node.js & npm
* MySQL atau database lain yang kompatibel

### Langkah-langkah

1.  **Clone repositori:**
    ```bash
    git clone [https://github.com/nama-pengguna-anda/nama-repositori-anda.git](https://github.com/nama-pengguna-anda/nama-repositori-anda.git)
    cd nama-repositori-anda
    ```

2.  **Instal dependensi Composer:**
    ```bash
    composer install
    ```

3.  **Instal dependensi Node.js:**
    ```bash
    npm install
    ```

4.  **Konfigurasi file `.env`:**
    * Salin file `.env.example` menjadi `.env`.
    * Sesuaikan konfigurasi database (`DB_*`) dan `APP_URL`.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Jalankan migrasi database:**
    ```bash
    php artisan migrate
    ```

6.  **Jalankan server pengembangan Laravel & Tailwind CSS:**
    * Di satu terminal, jalankan server Laravel:
    ```bash
    php artisan serve
    ```
    * Di terminal lain, jalankan build dan watch Tailwind CSS:
    ```bash
    npm run dev
    ```

7.  **Selesai!**
    Buka `http://localhost:8000` di browser Anda untuk melihat proyek berjalan.

## 🤝 Kontribusi

Kami menerima kontribusi dalam bentuk apapun! Jika Anda menemukan bug atau memiliki ide fitur baru, silakan hubungi kami di sosial media tertera!.

---
