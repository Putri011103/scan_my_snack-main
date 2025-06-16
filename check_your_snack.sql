-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 04:51 PM
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
-- Database: `check_your_snack`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama_snack` varchar(100) NOT NULL,
  `kadar_gula` float NOT NULL,
  `lemak_total` float NOT NULL,
  `kalori` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama_snack`, `kadar_gula`, `lemak_total`, `kalori`, `hasil`) VALUES
(1, 'Keripik Kentang', 2.5, 10, 150, 'Aman dikonsumsi dalam batas wajar'),
(2, 'Cokelat Batang', 20, 15, 250, 'Kandungan gula dan lemak tinggi, konsumsi terbatas'),
(3, 'Granola Bar', 8, 5, 180, 'Cocok untuk snack sehat, tapi tetap perhatikan porsi'),
(4, 'Permen Karet', 5, 0, 40, 'Rendah kalori, konsumsi aman'),
(5, 'Biskuit Gandum', 6, 7, 120, 'Cukup seimbang, cocok untuk camilan harian');

-- --------------------------------------------------------

--
-- Table structure for table `snack`
--

CREATE TABLE `snack` (
  `id` int(11) NOT NULL,
  `nama_snack` varchar(100) NOT NULL,
  `kadar_gula` float NOT NULL,
  `lemak_total` float NOT NULL,
  `kalori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snack`
--

INSERT INTO `snack` (`id`, `nama_snack`, `kadar_gula`, `lemak_total`, `kalori`) VALUES
(1, 'Keripik Kentang', 2.5, 10, 150),
(2, 'Cokelat Batang', 20, 15, 250),
(3, 'Granola Bar', 8, 5, 180),
(4, 'Permen Karet', 5, 0, 40),
(5, 'Biskuit Gandum', 6, 7, 120);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sugar` float NOT NULL,
  `fat` float NOT NULL,
  `calories` float NOT NULL,
  `evaluation` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `name`, `sugar`, `fat`, `calories`, `evaluation`, `created_at`) VALUES
(1, 'Keripik Kentang', 15, 10, 180, 'Tidak Sehat', '2025-06-12 02:28:55'),
(2, 'Popcorn Tawar', 1, 2, 50, 'Sehat', '2025-06-12 02:28:55'),
(3, 'Biskuit Cokelat', 12, 8, 150, 'Tidak Sehat', '2025-06-12 02:28:55'),
(4, 'Buah Kering', 5, 0.5, 90, 'Sehat', '2025-06-12 02:28:55'),
(5, 'Keripik Singkong', 8, 5, 120, 'Cukup Sehat', '2025-06-12 02:28:55'),
(6, 'Brownies', 20, 15, 250, 'Tidak Sehat', '2025-06-12 02:28:55'),
(7, 'Yogurt Rendah Lemak', 4, 2.5, 80, 'Sehat', '2025-06-12 02:28:55'),
(8, 'Camilan Kacang', 3, 10, 160, 'Cukup Sehat', '2025-06-12 02:28:55'),
(9, 'Donat Gula', 22, 12, 300, 'Tidak Sehat', '2025-06-12 02:28:55'),
(11, 'Keripik Kentang Goreng', 15, 10, 180, 'Cukup Sehat', '2025-06-13 02:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Andi Nugraha', 'andi@example.com', 'password123'),
(2, 'Budi Santoso', 'budi@example.com', 'budi456'),
(3, 'Citra Ayu', 'citra@example.com', 'citra789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snack`
--
ALTER TABLE `snack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
