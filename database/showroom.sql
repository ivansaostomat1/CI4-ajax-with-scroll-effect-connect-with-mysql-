-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 04:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--
CREATE DATABASE IF NOT EXISTS `showroom` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `showroom`;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

DROP TABLE IF EXISTS `mobil`;
CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `brand`, `nama`, `deskripsi`, `gambar`) VALUES
(8, 'Toyota', 'Avanza', 'Mobil keluarga bahagia', '1716862871_ce0cb57146c8fa1a7ae3.jpg'),
(9, 'Toyota', 'Innova Zenix', 'Mobil nyaman', '1716862673_2b608451c271e2168236.jpg'),
(10, 'Honda', 'Hrv', 'Mobil compact', '1716862801_650af38f7293336f10f2.jpg'),
(11, 'Toyota', 'Calya', 'LCGC ', '1716862174_5a3efc6e1249925fd3da.jpg'),
(12, 'Cherry', 'Omoda 5', 'Mobil China', '1716862310_aa3f8f94382fab7b223f.jpg'),
(13, 'Bmw', 'M3', 'Mobil Kencang 5 seater', '1716862437_76a6fa91c4c067d92fdd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
