# latihan_php1

## Deskripsi

`latihan_php1` adalah landing page statis untuk latihan Bootstrap 5. Proyek ini menampilkan struktur website modern dengan navigasi, hero, galeri artikel, galeri foto, dan footer, serta fitur theme toggle (light/dark) yang responsif.

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
latihan_php1/
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

1. Pastikan struktur file dan gambar sudah sesuai di folder `img/`.
2. Buka `index.html` di browser.
3. Theme dapat diubah lewat ikon matahari/bulan di navbar kanan atas.
4. Koneksi internet diperlukan untuk CDN Bootstrap & Icons.

## Troubleshooting

- **Gambar tidak tampil**: Pastikan semua file gambar ada di folder `img/`.
- **Theme tidak berubah**: Pastikan browser mendukung localStorage dan JavaScript aktif.

## Catatan

- Proyek ini hanya untuk latihan dan demonstrasi penggunaan Bootstrap 5.
