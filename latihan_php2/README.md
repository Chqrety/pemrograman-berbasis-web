# Alfi's Daily Journal - Latihan Bootstrap 5

Proyek landing page statis ini dibuat untuk latihan penerapan komponen **Bootstrap 5**. Halaman memuat navigasi, hero, galeri artikel, galeri foto, dan footer, serta fitur theme toggle (light/dark). Semua layout dan styling mengandalkan Bootstrap, hanya sedikit CSS _inline_ untuk penyesuaian.

## Fitur Utama

- **Navbar responsif** dengan theme toggle (Light/Dark) dan sticky-top.
- **Hero section** dengan tagline dan gambar banner.
- **Daftar artikel** menggunakan Bootstrap Card dalam grid responsif.
- **Galeri foto** dengan Bootstrap Carousel (5 gambar).
- **Footer** dengan ikon media sosial (Bootstrap Icons).
- **Theme toggle**: Pilihan tema terang/gelap disimpan di localStorage.

## Teknologi & Dependensi

- **HTML5**
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
├── index.html
├── README.md
```

## Cara Menjalankan

- Pastikan struktur file seperti di atas.
- Buka `index.html` di browser.
- Theme dapat diubah lewat ikon matahari/bulan di navbar kanan atas.
- Koneksi internet diperlukan untuk CDN Bootstrap & Icons.

---

**Catatan:**

- Semua gambar harus ada di folder `img/`.
- Pilihan tema akan tetap tersimpan setelah reload halaman.
- Proyek ini hanya untuk latihan dan demonstrasi penggunaan Bootstrap 5.
