# latihan_php_crud

## Deskripsi

`latihan_php_crud` adalah aplikasi web sederhana berbasis PHP & MySQL yang mengimplementasikan fitur CRUD (Create, Read, Update, Delete) untuk manajemen artikel, dilengkapi autentikasi (login/logout), dashboard admin, dan upload foto. Proyek ini cocok untuk latihan dasar pengembangan web dinamis.

## Fitur Utama

- **Autentikasi**: Login dan logout user, validasi akses admin.
- **Dashboard**: Tampilan dashboard setelah login.
- **Manajemen Artikel**: CRUD artikel (tambah, edit, hapus, lihat).
- **Upload Foto**: Upload gambar ke server (tersimpan di folder `img/`).
- **Koneksi Database**: Setting koneksi di `koneksi.php`.
- **File SQL**: `webdailyjournal.sql` untuk struktur & data awal database.

## Struktur Folder & File Penting

```
latihan_php_crud/
├── admin.php            # Halaman admin utama
├── article.php          # Manajemen artikel (CRUD)
├── dashboard.php        # Dashboard setelah login
├── index.php            # Halaman utama/login
├── koneksi.php          # Koneksi ke database
├── login.php            # Proses login
├── login_capstone.php   # Alternatif login
├── logout.php           # Logout user
├── upload_foto.php      # Upload foto ke server
├── img/                 # Folder penyimpanan gambar
├── webdailyjournal.sql  # File SQL database
└── README.md            # Dokumentasi proyek
```

## Cara Instalasi & Menjalankan

1. **Import Database**: Import file `webdailyjournal.sql` ke MySQL (bisa via phpMyAdmin).
2. **Konfigurasi Koneksi**: Edit `koneksi.php` sesuai pengaturan database lokal Anda (user, password, dbname).
3. **Pastikan Folder img/**: Folder `img/` harus ada dan memiliki izin tulis agar upload foto berhasil.
4. **Jalankan Server**: Gunakan XAMPP/LAMP/MAMP, akses `index.php` via browser.

## Penggunaan

- Login menggunakan akun yang sudah terdaftar (atau tambahkan user via database).
- Setelah login, akses dashboard dan fitur CRUD artikel.
- Upload gambar pada form yang tersedia.

## Troubleshooting

- **Gagal upload gambar**: Pastikan folder `img/` writable.
- **Tidak bisa login**: Cek data user di database.
- **Koneksi gagal**: Pastikan setting di `koneksi.php` benar dan MySQL aktif.

## Catatan

- Proyek ini untuk latihan/demonstrasi, bukan untuk produksi.
- Koneksi Bootstrap & Icons via CDN, pastikan ada internet.
