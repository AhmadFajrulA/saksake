-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakats`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('123', 'Fajar Fikri', 'fajar', '1234', '086546'),
('1234', 'juan', 'juan77', 'boy', '086536'),
('12345', 'Fadhil', 'fadhil adea', '9090', '0822'),
('454545', 'Fadly Ihsan', 'fadly', 'fadly', '081632745');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(15) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','batal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2024-12-16', '12345', 'Ad banjir', 'banjir.jpg', 'selesai'),
(6, '2024-12-19', '123', 'tes', 'gambar mobil sport terbaru 2015.jpg', 'selesai'),
(7, '2024-12-23', '1234', 'Laporan Boss', 'Planet9_Wallpaper_5000x2813.jpg', 'batal'),
(8, '2024-12-24', '1234', 'kedua geng', 'Acer_Wallpaper_03_5000x2814.jpg', 'batal'),
(9, '2024-12-24', '1234', 'ketiga geng', 'Acer_Wallpaper_01_5000x2814.jpg', 'batal'),
(10, '2024-12-23', '1234', 'tar', 'avatar.jpg', 'batal'),
(11, '2024-12-25', '1234', 'mamah', 'c49b1fd0-0a0e-471d-9110-0647ea3ab666.jpeg', 'batal'),
(12, '2024-12-25', '1234', 'age', 'AGE.png', 'batal'),
(13, '2024-12-25', '1234', 'hhkjhj', '2.3.png', 'batal'),
(14, '2024-12-23', '1234', 'kjkhkhg', '2.png', 'batal'),
(15, '2024-12-25', '1234', 'kljhg', '11.png', 'batal'),
(16, '2024-12-25', '1234', 'fbfjhagf', '64[17].png', 'batal'),
(17, '2024-12-25', '1234', 'kdjklfehg', '64[5].png', 'batal'),
(18, '2024-12-26', '1234', 'aaaaa', '2.3.png', 'selesai'),
(19, '2024-12-24', '1234', 'ngajar geng', 'FOTO NGAJAR.png', 'selesai'),
(20, '2024-12-24', '1234', 'gk jelas', 'Screenshot 2024-06-07 101405.png', 'batal'),
(21, '2024-12-24', '1234', '2', '2.png', 'batal'),
(22, '2024-12-24', '1234', '2 gauys', '64[22].png', 'selesai'),
(23, '2024-12-19', '1234', 'wda', '2.2.png', 'batal'),
(24, '2024-12-18', '1234', 'e', '1.2.png', 'batal'),
(25, '2024-12-24', '1234', 'jadi', '64[5].png', 'selesai'),
(26, '2024-12-25', '1234', 'lpu', '64[11].png', 'batal');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin 1', 'admin', 'admin', '08234567', 'admin'),
(2, 'petugas 1', 'petugas', 'petugas', '0812345678', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2024-12-22', 'Oke gan', 1),
(9, 14, '2024-12-22', '', 1),
(10, 15, '2024-12-22', 'kjhgjhgg', 1),
(11, 16, '2024-12-22', '', 1),
(12, 17, '2024-12-22', 'jkfdsjghjsdghk', 1),
(13, 18, '2024-12-22', 'asasasas', 1),
(14, 19, '2024-12-23', 'salut', 1),
(15, 20, '2024-12-23', '', 1),
(17, 22, '2024-12-23', 'josssss', 1),
(18, 23, '2024-12-23', '', 1),
(19, 24, '2024-12-23', 'gagal lagi', 1),
(20, 25, '2024-12-23', 'hasil yang bagus', 1),
(21, 26, '2024-12-23', 'gk ada hasil', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
