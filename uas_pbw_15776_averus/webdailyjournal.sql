-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2026 at 09:32 PM
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
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(8, 'Panduan Belajar Python untuk Pemula', 'Python adalah bahasa pemrograman yang ramah pemula. Mulailah dengan instalasi dan sintaks dasar.', '20260111030732.jpeg', '2026-01-11', 'udin'),
(9, 'Resep Nasi Goreng Spesial Restoran', 'Rahasia membuat nasi goreng enak ada pada bumbu baceman bawang putih dan kecap yang pas.', '20260111030558.jpeg', '2026-01-11', 'asep'),
(10, '5 Destinasi Wisata Tersembunyi di Bali', 'Jauh dari keramaian Kuta, tempat-tempat ini menawarkan ketenangan dan pemandangan alam yang asri.', '20260111030545.jpeg', '2026-01-11', 'siti'),
(11, 'Tips Menjaga Kesehatan Mata di Depan Komputer', 'Gunakan teknik 20-20-20 untuk mencegah mata lelah saat bekerja seharian di depan layar.', '20260111030530.jpeg', '2026-01-11', 'cindy'),
(12, 'Review Smartphone Flagship Terbaru 2024', 'Ulasan lengkap mengenai performa kamera, baterai, dan chipset dari ponsel keluaran terbaru.', '20260111030507.jpeg', '2026-01-11', 'bambang'),
(13, 'Cara Merawat Tanaman Hias Indoor', 'Tanaman monstera dan lidah mertua butuh pencahayaan yang cukup namun tidak langsung.', '20260111030455.jpeg', '2026-01-11', 'admin'),
(14, 'Sejarah Singkat Kemerdekaan Indonesia', 'Mengenang perjuangan para pahlawan dalam meraih kemerdekaan pada tahun 1945.', '20260111030433.jpeg', '2026-01-11', 'ani');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `tanggal`, `gambar`, `deskripsi`) VALUES
(1, '2026-01-11 03:25:16', '20260111032516.png', 'Semburat cahaya matahari terbit yang perlahan muncul di balik bukit, menghangatkan jiwa dan memberi harapan baru'),
(3, '2026-01-11 03:26:13', '20260111032613.png', 'Suasana senja di pinggir danau dengan air tenang yang syahdu.'),
(4, '2026-01-11 03:16:22', '20260111031622.png', 'Jembatan gantung modern yang menghubungkan dua tebing dengan arsitektur memukau.'),
(5, '2026-01-11 03:16:02', '20260111031602.png', 'Danau alami dengan air jernih yang memantulkan bayangan pegunungan di sekitarnya.'),
(6, '2026-01-11 03:08:55', '20260111030855.jpeg', 'Keindahan Pura Ulun Danu Beratan di Bali yang menjadi ikon pariwisata Indonesia.'),
(7, '2026-01-11 03:14:48', '20260111031448.jpg', 'Hijau dan asrinya tanaman hias yang memberikan kesegaran mata dan ketenangan pikiran.'),
(8, '2026-01-11 03:14:40', '20260111031440.jpg', 'Pemandangan matahari terbenam yang memukau, melukis langit dengan warna jingga keemasan.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20260111024237.jpg'),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20260111024224.jpg'),
(3, 'ani', 'e10adc3949ba59abbe56e057f20f883e', '20260111025511.jpg'),
(4, 'asep', 'e10adc3949ba59abbe56e057f20f883e', '20260111025534.jpg'),
(5, 'siti', 'e10adc3949ba59abbe56e057f20f883e', '20260111025558.jpg'),
(6, 'cindy', 'e10adc3949ba59abbe56e057f20f883e', '20260111025639.jpg'),
(7, 'bambang', 'e10adc3949ba59abbe56e057f20f883e', '20260111025702.jpg'),
(8, 'udin', 'e10adc3949ba59abbe56e057f20f883e', '20260111025731.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
