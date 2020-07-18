-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 02:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(16) NOT NULL,
  `karyawan_id` int(16) NOT NULL,
  `tgl_absen_masuk` varchar(50) NOT NULL DEFAULT 'TIDAK PRESENSI MASUK',
  `tgl_absen_keluar` varchar(50) NOT NULL DEFAULT 'TIDAK PRESENSI PULANG'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `karyawan_id`, `tgl_absen_masuk`, `tgl_absen_keluar`) VALUES
(1, 111, '2020-06-07', '2020-06-08'),
(2, 112, '2020-06-08', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `absen_keluar`
--

CREATE TABLE `absen_keluar` (
  `id_abskeluar` int(11) NOT NULL,
  `id_kry` int(16) NOT NULL,
  `tgl_absen_keluar` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'Tidak absen keluar!'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `absen_masuk`
--

CREATE TABLE `absen_masuk` (
  `id_absmasuk` int(11) NOT NULL,
  `id_kry` int(16) NOT NULL,
  `tgl_absen_masuk` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'Tidak ada absen masuk!'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kry` int(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(35) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_kry`, `nama`, `email`, `password`, `last_login`) VALUES
(111, 'Rezzy Andrean R', 'rezzyandrean@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-03 15:23:20'),
(112, 'James Moli', 'james_moli@mail.com', '202cb962ac59075b964b07152d234b70', '2020-07-03 15:23:20'),
(113, 'Edward Snowden', 'edsnow@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-03 16:06:15'),
(114, 'Erdogan', 'rterdogan@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-16 13:25:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `karyawan_id` (`karyawan_id`);

--
-- Indexes for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  ADD PRIMARY KEY (`id_abskeluar`),
  ADD KEY `id_kry` (`id_kry`);

--
-- Indexes for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD PRIMARY KEY (`id_absmasuk`),
  ADD KEY `id_kry` (`id_kry`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kry`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  MODIFY `id_abskeluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  MODIFY `id_absmasuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kry` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id_kry`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
