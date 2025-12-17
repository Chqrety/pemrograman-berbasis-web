-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2025 at 04:31 PM
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
(8, 'Panduan Belajar Python untuk Pemula', 'Python adalah bahasa pemrograman yang ramah pemula. Mulailah dengan instalasi dan sintaks dasar.', 'python.jpeg', '2023-10-01', 'dev_budi'),
(9, 'Resep Nasi Goreng Spesial Restoran', 'Rahasia membuat nasi goreng enak ada pada bumbu baceman bawang putih dan kecap yang pas.', 'nasgor.jpeg', '2023-10-02', 'chef_sari'),
(10, '5 Destinasi Wisata Tersembunyi di Bali', 'Jauh dari keramaian Kuta, tempat-tempat ini menawarkan ketenangan dan pemandangan alam yang asri.', 'bali.jpeg', '2023-10-05', 'travel_addict'),
(11, 'Tips Menjaga Kesehatan Mata di Depan Komputer', 'Gunakan teknik 20-20-20 untuk mencegah mata lelah saat bekerja seharian di depan layar.', 'mata.jpeg', '2023-10-07', 'dr_mata'),
(12, 'Review Smartphone Flagship Terbaru 2024', 'Ulasan lengkap mengenai performa kamera, baterai, dan chipset dari ponsel keluaran terbaru.', 'hp.jpeg', '2023-10-10', 'gadget_in'),
(13, 'Cara Merawat Tanaman Hias Indoor', 'Tanaman monstera dan lidah mertua butuh pencahayaan yang cukup namun tidak langsung.', 'tanaman.jpeg', '2023-10-12', 'plant_mom'),
(14, 'Sejarah Singkat Kemerdekaan Indonesia', 'Mengenang perjuangan para pahlawan dalam meraih kemerdekaan pada tahun 1945.', 'sejarah.jpeg', '2023-10-15', 'guru_sejarah');

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
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
