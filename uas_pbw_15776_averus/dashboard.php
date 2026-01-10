<?php
//query untuk mengambil data article
$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data article
$jumlah_article = $hasil1->num_rows;

//query untuk mengambil data gallery
$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
$hasil2 = $conn->query($sql2);

//menghitung jumlah baris data gallery
$jumlah_gallery = $hasil2->num_rows;

//query untuk mengambil data user
$sql3 = "SELECT * FROM user ORDER BY id DESC";
$hasil3 = $conn->query($sql3);

//menghitung jumlah baris data user
$jumlah_user = $hasil3->num_rows;
?>
<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center pt-4">
  <div class="col">
    <div class="card border border-info-subtle mb-3 shadow rounded-3 h-100">
      <div class="card-body d-flex align-items-center justify-content-between">
        <div class="p-3">
          <h5 class="card-title text-secondary"><i class="bi bi-newspaper text-info display-6"></i></h5>
          <p class="card-text text-secondary">Article</p>
        </div>
        <div class="p-3">
          <span class="badge rounded-pill text-bg-info text-white fs-2"><?php echo $jumlah_article; ?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card border border-info-subtle mb-3 shadow rounded-3 h-100">
      <div class="card-body d-flex align-items-center justify-content-between">
        <div class="p-3">
          <h5 class="card-title text-secondary"><i class="bi bi-camera text-info display-6"></i></h5>
          <p class="card-text text-secondary">Gallery</p>
        </div>
        <div class="p-3">
          <span class="badge rounded-pill text-bg-info text-white fs-2"><?php echo $jumlah_gallery; ?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card border border-info-subtle mb-3 shadow rounded-3 h-100">
      <div class="card-body d-flex align-items-center justify-content-between">
        <div class="p-3">
          <h5 class="card-title text-secondary"><i class="bi bi-people text-info display-6"></i></h5>
          <p class="card-text text-secondary">User</p>
        </div>
        <div class="p-3">
          <span class="badge rounded-pill text-bg-info text-white fs-2"><?php echo $jumlah_user; ?></span>
        </div>
      </div>
    </div>
  </div>
</div>