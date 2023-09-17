-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2023 pada 17.25
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_admin`, `username_admin`, `email_admin`, `password`, `role`) VALUES
(1, 'alvika', 'alvika', 'alvika@gmail.com', '2f06a87d2b049973067695328b013230', 'admin'),
(2, 'tedi', 'tedi', 'tedi@gmail.com', 'cc1e1887fb2c20cccc72a729c73fb73b', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(10) NOT NULL,
  `hari_jadwal` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
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
-- Struktur dari tabel `tb_ortu`
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
-- Struktur dari tabel `tb_petugas`
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
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `nip`, `nama_petugas`, `email_petugas`, `tempatlahir_petugas`, `tgllahir_petugas`, `jk_petugas`, `agama_petugas`, `alamat_petugas`, `telp_petugas`, `status_petugas`, `password`, `role`) VALUES
(16, '123', 'asd', 'alvikaajiandrianty@gmail.com', 'asd', '2023-08-28', 'Laki-laki', 'Hindu', 'Kp. Cikupa no 101, rt 03 rw 08, Desa Bojong Manggu\r\nPameungpeuk', '08979382175', 'Aktif', '202cb962ac59075b964b07152d234b70', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
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
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `username_siswa`, `nim_siswa`, `nama_siswa`, `tempatlahir_siswa`, `tgllahir_siswa`, `jk_siswa`, `agama_siswa`, `alamat_siswa`, `status_siswa`, `password`, `role`, `id_petugas`) VALUES
(11, 'alvika', '0091', 'Alvika Sumanto', 'Bandung', '2023-09-17', 'Laki-laki', 'Islam', 'asd', 'Aktif', 'c3b86052d1fc94bd11c279a17f3f25e1', 'siswa', 16);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
