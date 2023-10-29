<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/dasboard_rplb_22.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-home'></i>
            <span class="logo_name">Dashboard</span>
        </div>
        <ul class="nav-links">
            <li class="list">
                <a href="#" class="nav-link">
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
                    <a href="http://localhost/bew_xirplb_1920_22_Paris/controllers/c_siswa.php?aksi=logout" class="nav-link">
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
                <span class="admin_name">Add </span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">999</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">1 Bulan Kebelakang</span>
                        </div>
                    </div>
                    <i class="bx bx-cart-alt cart"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Jual</div>
                        <div class="number">9.999</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">1 Bulan Kebelakang</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-add cart two"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Penghasilan</div>
                        <div class="number">999</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">1 Bulan Kebelakang</span>
                        </div>
                    </div>
                    <i class="bx bx-cart cart three"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Kerugian</div>
                        <div class="number">9.999</div>
                        <div class="indicator">
                            <i class="bx bx-down-arrow-alt down"></i>
                            <span class="text">1 Bulan Kebelakang</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-download cart four"></i>
                </div>

                <div class="chart">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="assets/js/dasboard_rplb_2122.js"></script>
</body>

</html>