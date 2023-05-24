<!DOCTYPE html>
<html>

<head>
  <title>List Data</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.41/vue.cjs.js" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/dasboard_rplb_22.css" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-home'></i>
      <span class="logo_name">Dashboard</span>
    </div>
    <ul class="nav-links">
      <li class="list">
        <a href="<?= URL ?>dashboard" class="nav-link">
          <i class="bx bx-user" id="btn"></i>
          <span class="link">Utama</span>
        </a>
      </li>
      <ul class="nav-links">
        <li class="list">
          <a href="http://localhost/bew_xirplb_1920_22_Paris/controllers/c_siswa.php?aksi=list" class="nav-link">
            <i class="bx bx-bar-chart-alt-2 icon" id="btn"></i>
            <span class="link">Siswa</span>
          </a>
        </li>
        <li class="list">
          <a href="http://localhost/bew_xirplb_1920_22_Paris/controllers/c_kelas.php?aksi=list" class="nav-link">
            <i class="bx bx-folder-open icon" id="btn"></i>
            <span class="link">Kelas</span>
          </a>
        </li>
        <li class="list">
          <a href="http://localhost/bew_xirplb_1920_22_Paris/controllers/c_anggota.php?aksi=list" class="nav-link">
            <i class="bx bx-wallet icon" id="btn"></i>
            <span class="link">Anggota</span>
          </a>
        </li>
        <li class="list">
          <a href="http://localhost/bew_xirplb_1920_22_Paris/controllers/c_absensi.php?aksi=list" class="nav-link">
            <i class="bx bx-bar-chart-alt-2 icon" id="btn"></i>
            <span class="link">Absensi</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class="bx bx-cog icon" id="btn"></i>
            <span class="link">Pengaturan</span>
          </a>
        </li>
        <li class="list">
          <a href="<?= URL ?>logout" class="nav-link">
            <i class="bx bx-log-out icon" id="btn"></i>
            <span class="link">Keluar</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Muhammad Faridz Baihaqi</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Pencarian..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Beli Sekarang</span>
        <i class="bx bx-chevron-down"></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes-list">
        <div class="box-list">
          <div class="right-side">
            <div class="table">
              <div class="table_header">
                <p>Detail Data</p>
                <div>
                  <input placeholder="Pencarian" />
                  <a href="<?= URL ?>tambah" <button class="tambah">+ Tambah</button></a>
                </div>
              </div>
              <div class="table_selection">

                <p>Id_Anggota</p>
                <h3><?= $data["id_anggota"] ?></h3>

                <p>Id_kelas</p>
                <h3><?= $data["id_kelas"] ?></h3>

                <p>Nisn</p>
                <h3><?= $data["nisn"] ?></h3>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../assets/js/dasboard_rplb_2122.js"></script>
  <script src="https://kit.fontawesome.com/5f2550bfa1.js" crossorigin="anonymous"></script>
</body>

</html>