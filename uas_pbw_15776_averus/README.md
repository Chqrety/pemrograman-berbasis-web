# Web Daily Journal 🚀✨

Hai, selamat datang di **Web Daily Journal**!
Aplikasi web CRUD artikel, galeri, dan user berbasis PHP & MySQL dengan AJAX (jQuery) dan Bootstrap 5.
Cocok buat kamu yang pengen catat momen harian, upload foto kece, dan kelola user/admin dengan gampang! 😎📸

🌐 **[Cek Demo di sini!](https://alfidailyjournal.free.nf/)**

---

## 🔥 Fitur Utama

- Tampil, tambah, edit, hapus artikel secara dinamis tanpa reload halaman (AJAX) ⚡
- Upload gambar artikel & galeri, biar makin estetik! 🖼️
- Manajemen galeri foto, simpan semua kenanganmu 📷
- Manajemen user/admin, biar makin aman & terkontrol 👤
- Login/logout admin, privasi tetap terjaga 🔒
- Dashboard admin kece, semua data di satu tempat 📊
- Validasi & notifikasi berbasis JavaScript, anti typo! 🛡️
- Tampilan responsif dengan Bootstrap 5, nyaman di HP & laptop 📱💻

---

## 🗂️ Struktur Direktori

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

---

## 🚀 Cara Menjalankan

1. Import file `webdailyjournal.sql` ke database MySQL kamu.
2. Edit `koneksi.php` biar sesuai sama konfigurasi database lokal kamu.
3. Jalankan server lokal (XAMPP/LAMP/MAMP) dan akses `index.php` lewat browser favoritmu.
4. Login pakai akun yang udah ada di database.
5. Kelola artikel, galeri, dan user lewat menu admin. Gampang banget kan? 😉

---

## 📝 Catatan

- Pastikan koneksi internet aktif buat CDN Bootstrap, Icons, dan jQuery.
- Semua fitur CRUD jalan tanpa reload halaman berkat AJAX. No drama, no reload! 🔄
- Buat latihan/pengembangan aja ya, belum siap buat produksi serius.
- Punya ide atau saran? Fork aja, pull request welcome! 🤝

---

Selamat mencoba & semoga harimu makin produktif! 🌈✨
