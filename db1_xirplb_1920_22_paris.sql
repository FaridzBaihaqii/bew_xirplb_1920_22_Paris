-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 11:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1_xirplb_1920_22_paris`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `nisn` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_kelas`, `nisn`) VALUES
(90, 92, '90'),
(111, 10, '1111'),
(121, 121, '111');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(10) NOT NULL,
  `nisn` char(10) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `status` enum('M','TM') DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `nisn`, `tanggal`, `status`, `keterangan`) VALUES
(1, 'djsaa', '2022-12-04 11:52:00', 'TM', 'sds'),
(23, '11', '2022-12-09 17:12:00', 'M', 'da'),
(98, '81', '2022-12-09 17:15:00', 'M', '89'),
(99, '99', '2022-12-09 17:14:00', 'M', 'wokad'),
(101, '002563', '2023-01-01 10:25:44', 'M', 'Kehadiran Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(2) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_tahun_ajaran`) VALUES
(1, 'nama', 2080),
(2, 'namw', 2030);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenkel` enum('L','P') DEFAULT NULL,
  `alamat` text DEFAULT 'JAKARTA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `agama`, `jenkel`, `alamat`) VALUES
('0051578402', 'Kesya Afiana', 'ISLAM', 'P', 'Jl.Bintara 9 RT.06 RW.03 Bekasi Barat, Kota Bekasi'),
('0052279973', 'Taufik NurFauziii', 'ISLAM', 'L', 'Jl. Komplek BRI NO. 4 RT 05 RW 02, Bekasi Barat'),
('0052573391', 'Alfi Syahrin Bimalikizzamannnnn', 'ISLAM', 'L', 'Jl. Pekanbaru RT05, RW05 Kel Jakamulya Kec Bekasi Selatan'),
('0052978525', 'Muhammad Rafly Rahyco', 'ISLAM', 'L', 'Jl.Bintara JAYA RAYA TT 1 RW 4 Bekasi Barat'),
('0052987012', 'Rafian Fikri Huwaidi', 'ISLAM', 'L', 'Jl.manggis Rt 03 Rw10 Bekasi Utara'),
('0054900927', 'Amanda Alfindy', 'ISLAM', 'P', 'jalan Lapangan'),
('0059488973', 'Muhammad ramza rizky', 'ISLAM', 'L', 'JL.kranji dalam 3 rw 3 duta kranji, Bekasi Barat'),
('0061629374', 'Rini Yanti', 'ISLAM', 'P', 'Jl.Swadaya No 131 RT08 RW02, Bekasi Barat'),
('0061689476', 'Mu\'ammar Syauqi Arrasya', 'Islam', 'L', 'Jl.Melati 8 RT 06 RW 05 Margamulya, Bekasi Utara'),
('0061999916', 'Gilang Rahma Hardiansyah', 'ISLAM', 'L', 'Jln.Gunung Krakatau IV Blok B No.29 Rt 07 Rw 12 Kelurahan Harapan Jaya Kecamatan Bekasi Utara'),
('0062302153', 'Radityo Thurayya Putra', 'ISLAM', 'L', 'Jl. sel 5 Rt 01 Rw 18 Jatimekar, Bekasi'),
('0062680585', 'Dwiki Iqbal Khadafi', 'ISLAM', 'L', 'Jl. Nayar no 2 Rt1, Rw11 Kelurahan Kranji Kecamatan Bekasi Barat'),
('0063619926', 'Abdi Malika ', 'ISLAM', 'L', 'Jl.Bintara 8 no 27c Rt5, Rw3 Kelurahan Bintara Kecamatan Bekasi Barat'),
('0063719914', 'Subkhan Ravi Ramadhan', 'ISLAM', 'L', 'Jl.Mujair Raya No. 164 RT04 RW04, Bekasi Selatan'),
('0063770812', 'Nifa Andriyani', 'ISLAM', 'P', 'Jl.Beringin 7 Rt 06 Rw 04 Bekasi Barat'),
('0064011923', 'Muhammad Daffa Raihanda Dewandaru', 'ISLAM', 'L', 'Jl.Taman Harapan Baru Blok C6 no. 3 Kelurahan Pejuang'),
('0064628997', 'Muhammad Daffa Singawinata', 'ISLAM', 'L', 'Jl. Panahan rt 13 rw 05 no. 02 02 Komplek Poncol Baru'),
('0064797965', 'Farell Andreano', 'ISLAM', 'L', 'Jl. Ir. H. Juanda Gg. Pengairan rt. 03 tw 07 Bekasi Timur'),
('0065429069', 'Harry Siloam Sidabalok', 'PROTESTAN', 'L', 'Jl. Bima Citra 11 No 22 Rt 1 Rw 10 Kecamatan Tambun Selatan'),
('0065591417', 'Danish Shidqi Hidayat', 'ISLAM', 'L', 'Griya Bintara Indah Blok G4 No 14'),
('0065746172', 'Agnia Rizki Fadilla', 'ISLAM', 'P', 'Jl. Sabilillah rt 05/03 no 84, Medan Satria, Bekasi Barat'),
('0065961878', 'Saskia Azzahra Setyoningrum', 'ISLAM', 'P', 'Jl.Nurul iman 8 No 07 RT06 RW01, Bekasi Barat'),
('0066421933', 'Muhammad Faridz Baihaqi', 'ISLAM', 'L', 'Jl.Bintara 4 rt 02 rw 01 no 13 bintara'),
('0067305824', 'Ranchel Al Banna', 'ISLAM', 'L', 'Jl.Fajar Pratama No 17 RT 05 RW20, Bekasi Barat'),
('0067660886', 'Gahtan Fadholi Imam', 'ISLAM', 'L', 'Jl. Swadaya RT.06 RW.01 Bekasi Barat'),
('0068234203', 'Nur Rani', 'ISLAM', 'P', 'JL.Nurul Iman Rt 05 Rw 01 jakasampurna Bekasi Barat'),
('0068845533', 'Motiq Morenta Yakani', 'ISLAM', 'P', 'Jl. Sarbini no. 19 Kelurahan Jakasampurna'),
('0069208149', 'Hesa Raya Untara', 'ISLAM', 'L', 'Jl. Mawar 5 RT.03 RW.02 N0.143 Jakasampurna, Bekasi Barat, Kota Bekasi'),
('0069322127', 'Fathia Zahrah', 'ISLAM', 'P', 'Jln. Gg. Haji alam 3 Rt.05 Rw.15 Bekasi Barat'),
('0069376689', 'Nia Salsabila', 'ISLAM', 'P', 'Jl.Bintara 8 Rt 04 Rw 03 Bekasi Barat'),
('0069689334', 'Niki Tirto Kencono', 'ISLAM', 'L', 'Jl.Kumpinidan Rt 04 Rw 01Bekasi Barat'),
('0071185482', 'Adhinda Zahra Dinanti', 'ISLAM', 'P', 'Jl.Assyafiiyah rt 03 rw 01 no.126, jakasampurna, Bekasi Barat'),
('04051659', 'AGUS WIBOWO', 'ISLAM', 'L', 'Jl. Kaliabang no 9 Rt3, Rw 2 Kelurahan Kaliabang kecamatan Bekasi Utara'),
('212210230', 'Maula Risma Aprilia', 'ISLAM', 'P', 'Jl.Belida Raya No.44 RT 02 RW 10 Perumnas 2, Bekasi Selatan'),
('3057973202', 'Erlia Ananda Putri', 'ISLAM', 'P', 'jl.Makam Rt003/011 Kelurahan Kranji KecamatanBekasi Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2326;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
