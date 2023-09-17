-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 05:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(10) NOT NULL,
  `hari_jadwal` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(10) NOT NULL,
  `level_satu` varchar(50) NOT NULL,
  `level_dua` varchar(50) NOT NULL,
  `level_tiga` varchar(50) NOT NULL,
  `level_empat` varchar(50) NOT NULL,
  `psikologi_satu` varchar(50) NOT NULL,
  `psikologi_dua` varchar(50) NOT NULL,
  `psikologi_tiga` varchar(50) NOT NULL,
  `psikologi_empat` varchar(50) NOT NULL,
  `psikologi_lima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `id` int(10) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `telp_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `telp_ibu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(10) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `email_petugas` varchar(50) NOT NULL,
  `tempatlahir_petugas` varchar(50) NOT NULL,
  `tgllahir_petugas` date NOT NULL,
  `jk_petugas` varchar(50) NOT NULL,
  `agama_petugas` varchar(50) NOT NULL,
  `alamat_petugas` text NOT NULL,
  `telp_petugas` varchar(15) NOT NULL,
  `status_petugas` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(10) NOT NULL,
  `username_siswa` varchar(50) NOT NULL,
  `nim_siswa` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tempatlahir_siswa` varchar(50) NOT NULL,
  `tgllahir_siswa` date NOT NULL,
  `jk_siswa` varchar(20) NOT NULL,
  `agama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `status_siswa` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `username_siswa`, `nim_siswa`, `nama_siswa`, `tempatlahir_siswa`, `tgllahir_siswa`, `jk_siswa`, `agama_siswa`, `alamat_siswa`, `status_siswa`, `password`) VALUES
(3, 'imam', 'S001', 'Imam Nahrawi', 'Pandeglang', '2023-09-06', 'Laki-laki', 'Hindu', 'Kopo', 'Aktif', '$2y$10$MOkaD13njRy/5Lr4DnL7ZOo/JC0OovlKfVR9427qEMt'),
(4, 'galih', 'S002', 'Galih Bonge', 'Pandeglang', '2023-09-05', 'Perempuan', 'Hindu', 'Jepara', 'Aktif', '$2y$10$Z.PRFNsfOqFPNUaGbo2OMuxNyU8I/E1b1lil1pV.bID'),
(5, 'tenten10', 'S003', 'Tenten', 'Banten', '2023-09-06', 'Laki-laki', 'Hindu', 'Kopo', 'Aktif', '$2y$10$RiAwIm4hsuXJIuawz/DCsev0C4Vka4qIw0cii6AEvap'),
(6, 'bambangganteng', 'S004', 'Bambang', 'Bandung', '2023-09-06', 'Laki-laki', 'Islam', 'Bandung', 'Aktif', '$2y$10$o57QpPXMZ7djFmP..UQebOoAlm2DluQqQxKoYfxfwJd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
