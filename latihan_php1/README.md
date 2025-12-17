# Alfi's Dialy Jurnal - Latihan Bootstrap 5

Ini adalah proyek halaman web statis (landing page) yang dibuat sebagai latihan untuk menerapkan berbagai komponen dari framework **Bootstrap 5**. Halaman ini memuat beberapa bagian standar sebuah website, termasuk navigasi, hero, galeri artikel, dan footer.

Proyek ini sepenuhnya bergantung pada Bootstrap untuk layout dan styling, dengan hanya beberapa baris CSS kustom _inline_ untuk penyesuaian kecil.

## Struktur Halaman

Halaman ini dibagi menjadi beberapa bagian utama:

1.  **Navbar (`<nav>`):**

    - Sebuah _sticky navbar_ (`sticky-top`) yang responsif.
    - Menggunakan _toggler_ untuk tampilan seluler.
    - Memuat link navigasi ke "Home", "Article", dan "Gallery".

2.  **Hero Section (`<section id="hero">`):**

    - Bagian pembuka dengan _tagline_ dan sebuah gambar banner.
    - Menggunakan `d-sm-flex` dan `flex-sm-row-reverse` untuk layout yang responsif (gambar di kanan pada layar besar, di atas pada layar kecil).

3.  **Article Section (`<section id="article">`):**

    - Menampilkan daftar artikel menggunakan komponen **Card** Bootstrap.
    - Layout diatur dalam grid yang responsif (`row-cols-1 row-cols-md-3`), menampilkan 1 kartu per baris di seluler dan 3 kartu per baris di desktop.

4.  **Gallery Section (`<section id="gallery">`):**

    - Menampilkan galeri foto menggunakan komponen **Carousel** (slider) Bootstrap.
    - Memuat 5 gambar dengan kontrol navigasi (sebelumnya/selanjutnya).

5.  **Footer (`<footer>`):**

    - Bagian penutup yang berisi tautan media sosial.
    - Menggunakan **Bootstrap Icons** untuk menampilkan ikon Instagram, Twitter, dan WhatsApp.
    - Menampilkan teks _copyright_ "Husnul Fikri Averus ©2025".

6.  **Theme Toggle (Light / Dark):**

    - Navbar kini memuat dua tombol ikon (matahari dan bulan) yang memungkinkan pengguna beralih antara tema terang dan gelap.
    - Peralihan tema diimplementasikan dengan mengatur atribut `data-bs-theme` pada elemen `<html>` (memanfaatkan fitur Bootstrap 5.3) dan disimpan ke `localStorage` sehingga pilihan pengguna dipertahankan setelah memuat ulang halaman.

## Teknologi & Dependensi

Proyek ini menggunakan dependensi eksternal yang diambil melalui CDN (Content Delivery Network):

- **HTML5**
- **[Bootstrap 5.3.8](https://getbootstrap.com/) (CSS & JS):** Framework utama untuk styling, layout, dan komponen interaktif (seperti navbar dan carousel).
- **[Bootstrap Icons 1.13.1](https://icons.getbootstrap.com/):** Digunakan untuk ikon media sosial di footer.
- **JavaScript (vanilla):** digunakan untuk menambahkan fungsionalitas tanggal/jam dan fitur Theme Toggle (penyimpanan preferensi ke localStorage).

## Struktur File yang Diharapkan

Agar proyek ini berjalan dengan benar (terutama agar gambar tampil), struktur folder lokal Anda harus terlihat seperti ini:

```.
└── img/
    ├── logo.png
    ├── banner.jpg
    ├── workspace.png
    ├── mahasiswa.png
    ├── foodcourt.png
    ├── pojokbaca.png
    ├── lapangan.png
    ├── carousel_1.png
    ├── carousel_2.png
    ├── carousel_3.png
    ├── carousel_4.png
    └── carousel_5.png
├── index.html
```

## Cara Menjalankan

1.  Simpan kode di atas sebagai `index.html`.
2.  Buat sebuah folder bernama `img` di lokasi yang sama dengan `index.html`.
3.  Tempatkan semua file gambar yang diperlukan (seperti `logo.png`, `banner.jpg`, dll.) di dalam folder `img` tersebut.
4.  Buka file `index.html` di browser web apa saja.
5.  Setelah halaman terbuka, Anda dapat mengubah tema halaman melalui dua ikon di pojok sebelah kanan navbar:

    - Klik ikon matahari untuk memilih tema terang (light).
    - Klik ikon bulan untuk memilih tema gelap (dark).
    - Pilihan tema akan disimpan di `localStorage` sehingga setelah reload halaman, tema yang dipilih tetap dipakai.

6.  Pastikan Anda memiliki **koneksi internet** agar Bootstrap CSS, JS, dan Icons dapat dimuat dari CDN.
