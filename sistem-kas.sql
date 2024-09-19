-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2024 at 02:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nominal` decimal(65,0) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `keterangan`, `nominal`, `status`, `tanggal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(38, 'Salary', 2000000, '1', '2024-09-01', '2024-09-10 12:17:32', '2024-09-10 19:17:32', NULL),
(39, 'Gasoline', 50000, '0', '2024-09-01', '2024-09-10 12:28:17', '2024-09-10 19:28:17', NULL),
(40, 'Monthly Data', 200000, '0', '2024-09-01', '2024-09-10 12:28:53', NULL, NULL),
(41, 'Test Update', 100000, '1', '2024-09-02', '2024-09-10 12:29:31', '2024-09-10 19:29:31', NULL),
(42, 'Test Update', 300000, '0', '2024-09-02', '2024-09-10 12:30:21', '2024-09-10 19:30:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `password_reset_token` text DEFAULT NULL,
  `auth_key` varchar(50) DEFAULT NULL,
  `access_token` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_reset_token`, `auth_key`, `access_token`, `role`) VALUES
(1, 'vic', '$2y$13$C2gyqsDMH66stbUDgx8DCe13tGbmXE/yqtLB3AN2U7JPS1lkdEJhK', NULL, NULL, NULL, NULL),
(2, 'user', '$2y$13$SU7l0D.GF3w4uy/NwXYJ2uFQeAIDTzEeUTgpITNxAIAArs.cGTrdK', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
