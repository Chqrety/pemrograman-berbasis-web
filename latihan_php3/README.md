# Alfi's Daily Journal - Latihan Bootstrap 5 & PHP

Proyek landing page ini dibuat untuk latihan penerapan komponen **Bootstrap 5** dan **PHP**. Halaman memuat navigasi, hero, galeri artikel dinamis dari database, galeri foto, dan footer, serta fitur theme toggle (light/dark). Semua layout dan styling mengandalkan Bootstrap, dengan sedikit CSS _inline_ untuk penyesuaian, termasuk tampilan gambar artikel rasio **3:4** (image cover) seperti Tailwind namun menggunakan Bootstrap 5.

## Fitur Utama

- **Navbar responsif** dengan theme toggle (Light/Dark) dan sticky-top.
- **Hero section** dengan tagline dan gambar banner.
- **Daftar artikel dinamis**: Data artikel diambil dari database MySQL menggunakan PHP, ditampilkan dalam grid Bootstrap Card.
- **Gambar artikel rasio 3:4**: Gambar artikel otomatis tampil proporsional (cover) dengan rasio 3:4 menggunakan Bootstrap 5 (`ratio-3x4` dan `object-fit: cover`).
- **Galeri foto** dengan Bootstrap Carousel (5 gambar).
- **Footer** dengan ikon media sosial (Bootstrap Icons).
- **Theme toggle**: Pilihan tema terang/gelap disimpan di localStorage.

## Teknologi & Dependensi

- **HTML5**
- **PHP** (untuk dynamic content & koneksi database)
- **MySQL** (tabel `article` untuk data artikel)
- **[Bootstrap 5.3.8](https://getbootstrap.com/) (CDN)**
- **[Bootstrap Icons 1.13.1](https://icons.getbootstrap.com/) (CDN)**
- **JavaScript (vanilla)** untuk theme toggle & jam/tanggal.

## Struktur Folder & File

```
.
├── img/
│   ├── logo.png
│   ├── banner.jpg
│   ├── workspace.png
│   ├── mahasiswa.png
│   ├── foodcourt.png
│   ├── pojokbaca.png
│   ├── lapangan.png
│   ├── carousel_1.png
│   ├── carousel_2.png
│   ├── carousel_3.png
│   ├── carousel_4.png
│   └── carousel_5.png
├── index.php
├── koneksi.php
├── article.php
├── dashboard.php
├── login.php
├── login_capstone.php
├── logout.php
├── README.md
```

## Cara Menjalankan

- Pastikan struktur file seperti di atas.
- Pastikan sudah ada database MySQL dengan tabel `article` dan gambar-gambar pada folder `img/`.
- Jalankan server lokal (misal XAMPP) dan buka `index.php` di browser.
- Theme dapat diubah lewat ikon matahari/bulan di navbar kanan atas.
- Koneksi internet diperlukan untuk CDN Bootstrap & Icons.

---

**Catatan:**

- Semua gambar harus ada di folder `img/`.
- Tabel `article` di database harus berisi kolom: `judul`, `isi`, `gambar`, `tanggal`.
- Pilihan tema akan tetap tersimpan setelah reload halaman.
- Gambar artikel otomatis crop rasio 3:4 (cover) dengan Bootstrap 5.
- Proyek ini hanya untuk latihan dan demonstrasi penggunaan Bootstrap 5 & PHP.
