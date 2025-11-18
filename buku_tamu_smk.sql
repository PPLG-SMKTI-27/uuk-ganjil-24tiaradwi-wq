-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2025 at 07:44 AM
-- Server version: 8.0.43
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int NOT NULL,
  `nama_tamu` varchar(100) DEFAULT NULL,
  `asal_instansi` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `jenis_tamu` varchar(50) DEFAULT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `tujuan_kunjungan` text,
  `bertemu_dengan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama_tamu`, `asal_instansi`, `no_telepon`, `jenis_tamu`, `tanggal_kunjungan`, `tujuan_kunjungan`, `bertemu_dengan`, `created_at`) VALUES
(1, 'tiara', 'muak', '0855522266633', 'Orang Tua Siswa', '2025-11-14', 'terserahku ', 'anakkuuu', '2025-11-18 06:35:45'),
(2, 'kia beleng', 'hutan', '0000000000', 'Orang Tua Siswa', '2025-11-12', 'gueuueuuuiyeuiyqi', 'ayangnya', '2025-11-18 06:36:59'),
(3, 'wewe', 'bumi', '225336263232', 'Umum', '2025-11-18', 'makan', 'rendang', '2025-11-18 06:37:33'),
(4, 'fatur', 'umkt', '222336666', 'Mahasiswa', '2025-11-28', 'bimbingan', 'serahhhhhhhhhh', '2025-11-18 06:41:23'),
(5, 'kia', 'smk15', '66666662212', 'Orang Tua Siswa', '2025-11-15', 'gctftfygfygf', 'tdrddttttdtttyft6rty', '2025-11-18 06:42:41'),
(8, 'dnhh', 'hhhh', '255555', 'Orang Tua Siswa', '2026-01-18', 'yyyyeyeyey', 'eyyeeye', '2025-11-18 07:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `role` enum('admin','staff') DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `role`) VALUES
(1, 'admin', 'admin123', 'Administrator', 'admin'),
(2, 'staff', 'staff123', 'Staff TU', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
