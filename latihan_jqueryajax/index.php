<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Alfi's Dialy Jurnal</title>
  <link rel="icon" href="img/logo.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

  <style>
    .card-body {
      padding-left: 1.25rem;
      padding-right: 1.25rem;

      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
    }

    .card-body .d-flex {
      padding-top: 1rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid #f0f0f0;
    }

    .card-body .d-flex:last-child {
      border-bottom: none;
    }

    .card-header {
      background-color: #f8f9fa;
    }

    .card-profil {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-profil:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .tabel-profil .bi {
      color: #0d6efd;
      width: 24px;
      margin-right: 4px;
      text-align: center;
    }

    footer a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!-- nav begin -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Alfi's Dialy Jurnal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
          <li class="nav-item">
            <button id="btn-light" class="btn btn-light me-2" type="button" title="Light theme">
              <i class="bi bi-sun-fill"></i>
            </button>
          </li>
          <li class="nav-item">
            <button id="btn-dark" class="btn btn-dark" type="button" title="Dark theme">
              <i class="bi bi-moon-fill text-white"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->

  <!-- hero begin -->
  <section id="hero" class="text-center p-5 bg-info-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="img/banner.jpg" alt="img-fluid" width="300" />
        <div>
          <h1 class="fw-bold display-4">Catat Aktivitas, Simpan Kenangan, Setiap Hari</h1>
          <h4 class="lead display-6">Jurnal harian digital untuk merekam semua kegiatan dan momen pentingmu</h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>
  <!-- hero end -->

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"] ?>" class="card-img-top" style="height: 200px; object-fit: cover;"
                alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- article end -->

  <!-- gallery begin -->
  <section id="gallery" class="text-center p-5 bg-info-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel_1.png" class="d-block w-100" alt="carousel 1" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel_2.png" class="d-block w-100" alt="carousel 2" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel_3.png" class="d-block w-100" alt="carousel 3" />
          </div>
          < class="carousel-item">
            <img src="img/carousel_4.png" class="d-block w-100" alt="carousel 4" />
          </>
          <div class="carousel-item">
            <img src="img/carousel_5.png" class="d-block w-100" alt="carousel 5" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- gallery end -->

  <!-- schedule begin -->
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- card 1 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-primary">
            <div class="card-header bg-primary-subtle fw-bold">Senin</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Kriptografi</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">09.30-12.00</p>
                  <p class="card-text mb-0 small fw-bold">H.5.14</p>
                </div>
              </div>
              <!-- matkul 2 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Pendidikan Kewarganegaraan</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">16.20-18.00</p>
                  <p class="card-text mb-0 small fw-bold">Kulino</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card 2 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-success">
            <div class="card-header bg-success-subtle fw-bold">Selasa</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Sistem Operasi</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">07.00-09.30</p>
                  <p class="card-text mb-0 small fw-bold">H.5.7</p>
                </div>
              </div>
              <!-- matkul 2 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Logika Informatika</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">12.30-15.00</p>
                  <p class="card-text mb-0 small fw-bold">H.5.4</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card 3 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-warning">
            <div class="card-header bg-warning-subtle fw-bold">Rabu</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Probabilitas dan Statistik</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">07.00-09.30</p>
                  <p class="card-text mb-0 small fw-bold">H.4.4</p>
                </div>
              </div>
              <!-- matkul 2 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Pemrograman Berbasis Web</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">10.20-12.00</p>
                  <p class="card-text mb-0 small fw-bold">D.2.J</p>
                </div>
              </div>
              <!-- matkul 3 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Basis Data</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">14.10-15.50</p>
                  <p class="card-text mb-0 small fw-bold">D.2.K</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card 4 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-info">
            <div class="card-header bg-info-subtle fw-bold">Kamis</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Rekayasa Perangkat Lunak</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">07.00-09.30</p>
                  <p class="card-text mb-0 small fw-bold">H.4.11</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card 5 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-danger">
            <div class="card-header bg-danger-subtle fw-bold">Jum'at</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0 text-start">Basis Data</h6>
                <div class="text-end">
                  <p class="card-text mb-0 small">16.20-18.00</p>
                  <p class="card-text mb-0 small fw-bold">H.5.1</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card 6 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-dark">
            <div class="card-header bg-dark-subtle fw-bold">Sabtu</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-center">
                <p class="fw-semibold fs-4">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>

        <!-- card 7 -->
        <div class="col">
          <div class="card shadow rounded-3 h-100 border-secondary">
            <div class="card-header bg-secondary-subtle fw-bold">Minggu</div>
            <div class="card-body">
              <!-- matkul 1 -->
              <div class="d-flex justify-content-center">
                <p class="fw-semibold fs-4">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- schedule end -->

  <!-- profile begin-->
  <section id="profile" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Profil Mahasiswa</h2>

      <div class="card shadow-sm col-lg-10 mx-auto card-profil">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-4 d-flex border-0 justify-content-center align-items-center mb-3 mb-md-0">
              <img src="img/profil.png" alt="Foto Profil Husnul" class="img-fluid rounded-circle shadow"
                style="width: 150px; height: 150px; object-fit: cover" />
            </div>

            <div class="col-12 col-md-8 p-3">
              <h4 class="text-center text-md-start">Husnul Fikri Averus</h4>
              <p class="text-muted text-center text-md-start">Mahasiswa Teknik Informatika</p>

              <hr />

              <table class="table table-borderless w-auto mx-auto mx-md-0 tabel-profil">
                <tbody>
                  <tr>
                    <td class="fw-bold py-1"><i class="bi bi-person-badge"></i> NIM</td>
                    <td class="py-1">: A11.2024.15776</td>
                  </tr>
                  <tr>
                    <td class="fw-bold py-1"><i class="bi bi-mortarboard"></i> Program Studi</td>
                    <td class="py-1">: Teknik Informatika</td>
                  </tr>
                  <tr>
                    <td class="fw-bold py-1"><i class="bi bi-envelope"></i> Email</td>
                    <td class="py-1">: 111202415776@mhs.dinus.ac.id</td>
                  </tr>
                  <tr>
                    <td class="fw-bold py-1"><i class="bi bi-telephone"></i> Telepon</td>
                    <td class="py-1">: +62 812 8765 7890</td>
                  </tr>
                  <tr>
                    <td class="fw-bold py-1"><i class="bi bi-geo-alt"></i> Alamat</td>
                    <td class="py-1">: Jl. Hassanudin 1982, Semarang</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- profile end-->

  <!-- footer begin -->
  <footer class="text-center p-5">
    <div>
      <a href="https://www.instagram.com/fikri.averus/">
        <i class="bi bi-instagram h2 p-2 text-dark"></i>
      </a>
      <a href="https://x.com/chqrety">
        <i class="bi bi-twitter h2 p-2 text-dark"></i>
      </a>
      <a href="https://wa.me/+6281912345678">
        <i class="bi bi-whatsapp h2 p-2 text-dark"></i>
      </a>
    </div>
    <div>Husnul Fikri Averus &copy;2025</div>
  </footer>
  <!-- footer end -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <script>
    // Script Tanggal dan Jam
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
      var waktu = new Date();
      var bulan = waktu.getMonth() + 1;

      setTimeout("tampilWaktu()", 1000);
      document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
      document.getElementById("jam").innerHTML =
        waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
    }

    // Theme toggle (light / dark)
    function setupThemeToggle() {
      const btnLight = document.getElementById("btn-light");
      const btnDark = document.getElementById("btn-dark");
      const THEME_KEY = "preferredTheme";

      function setTheme(theme) {
        document.documentElement.setAttribute("data-bs-theme", theme);
        try {
          localStorage.setItem(THEME_KEY, theme);
        } catch (e) { }
      }

      try {
        const stored = localStorage.getItem(THEME_KEY);
        if (stored) {
          setTheme(stored);
        } else {
          const prefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
          setTheme(prefersDark ? "dark" : "light");
        }
      } catch (e) {
        const prefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
        document.documentElement.setAttribute("data-bs-theme", prefersDark ? "dark" : "light");
      }

      btnLight?.addEventListener("click", () => setTheme("light"));
      btnDark?.addEventListener("click", () => setTheme("dark"));
    }

    setupThemeToggle();
  </script>
</body>

</html>