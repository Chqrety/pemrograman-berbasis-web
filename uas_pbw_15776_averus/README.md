# Web Daily Journal

Aplikasi web CRUD artikel, galeri, dan user berbasis PHP & MySQL dengan AJAX (jQuery) dan Bootstrap 5.

## Fitur Utama

- Tampil, tambah, edit, hapus artikel secara dinamis tanpa reload halaman (AJAX)
- Upload gambar artikel dan galeri
- Manajemen galeri foto
- Manajemen user/admin
- Login/logout admin
- Dashboard admin
- Validasi dan notifikasi berbasis JavaScript
- Tampilan responsif dengan Bootstrap 5

## Struktur Direktori

```
admin.php           # Halaman admin utama (routing dashboard, artikel, galeri, user)
article.php         # Halaman manajemen artikel (AJAX)
article_data.php    # Data artikel (diload via AJAX)
gallery.php         # Halaman manajemen galeri (AJAX)
gallery_data.php    # Data galeri (diload via AJAX)
user.php            # Halaman manajemen user (AJAX)
user_data.php       # Data user (diload via AJAX)
dashboard.php       # Halaman dashboard admin
index.php           # Halaman landing/login
koneksi.php         # Koneksi database MySQL
login.php           # Form login
login_capstone.php  # (opsional) login tambahan/capstone
logout.php          # Logout user
upload_foto.php     # Fungsi upload gambar
webdailyjournal.sql # File SQL struktur & data contoh
img/                # Folder upload gambar artikel & galeri
```

## Cara Menjalankan

1. Import file `webdailyjournal.sql` ke database MySQL Anda.
2. Edit `koneksi.php` agar sesuai dengan konfigurasi database lokal Anda.
3. Jalankan server lokal (XAMPP/LAMP/MAMP) dan akses `index.php` melalui browser.
4. Login menggunakan akun yang tersedia di database.
5. Kelola artikel, galeri, dan user melalui menu admin.

## Catatan

- Pastikan koneksi internet aktif untuk CDN Bootstrap, Icons, dan jQuery.
- Semua fitur CRUD berjalan tanpa reload halaman berkat AJAX.
- Untuk pengembangan/latihan, bukan untuk produksi.
