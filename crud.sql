-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2026 at 08:53 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(487957, 'sanjeev', 'sanjeev@gmail.com', '8478478973', '$2y$10$myfLAv9Ee6MFSd5ZgrH2MuSHvqdQCy/AF/muCq97FYPePWD2CaOKy'),
(487958, 'dip', 'dip@gmail.com', '367863878', '$2y$10$rQV2l.H9j44cxtmst4RpSeIH5QRK5ynOkQjBBhWQptQASA1KxtsGe'),
(487959, 'ravi', 'ravi@gmail.com', '3763873', '$2y$10$qvdcONIl8UwV2SybbeMFk.wU8wjhDFNnfsUWpwBi9pEan5caxaOoS'),
(487960, 'utsav', 'utsav@gmail.com', '673467848', '$2y$10$iHbR/42stkpe3ogdsrXbCOAOO3i1QgT5LAv.MJhQD7QTBDpZ1sAfa'),
(487961, 'raj', 'raj@gmail.com', '7643678467', '$2y$10$CsFkzhJExGlNnBiBFkSd6OfP/cLlcAOL8Ky4erTwERIrCwjuRx2WC'),
(487962, 'sandeep', 'sandeep@gmail.com', '36387683', '$2y$10$O9BqZzqtuDBDEAjpCAfzr.rIPICQbGnSGHt8m4qmUCRnPUJvpKhfi'),
(487963, 'bablu', 'bablu@gmail.com', '3763738738', '$2y$10$WHj7AJuyvSX8BWY19bZaHOA03VfQo24GkRNdLyQEQln17D103LpYO'),
(487964, 'anup', 'anup@gmail.com', '367367868', '$2y$10$DnLOMzP6vsYDa6xC/HoY3eTpxYFCWheojNT30yFCjlhF4GfK.6Htq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487965;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
