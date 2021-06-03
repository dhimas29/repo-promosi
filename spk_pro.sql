-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `awal_masuk` varchar(10) NOT NULL,
  `lama_kerja` int(11) NOT NULL,
  `submit_by` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nip`, `nama`, `jenis_kelamin`, `alamat`, `no_telp`, `email`, `divisi`, `awal_masuk`, `lama_kerja`, `submit_by`) VALUES
(124, '123213', 'Dhimas', 'Laki - Laki', 'Bekasi', '12312', 'example@gmail.com', 'Divisi Engineering', '2021-06-01', 2, 1),
(125, '22233', 'Agus', 'Laki - Laki', 'Bekasi', '3332224', 'example@gmail.com', 'Divisi Engineering', '2021-05-30', 4, 1),
(126, '444333', 'Ayap', 'Laki - Laki', 'Jakarta', '0878754', 'ex@gmail.com', 'Divisi Engineering', '2021-05-30', 4, 1),
(127, '11155', 'Sapri', 'Laki - Laki', 'Bandung', '15125123', 'sapri@gmail.com', 'Divisi Purchasing', '2021-05-30', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `calon_subkriteria`
--

CREATE TABLE `calon_subkriteria` (
  `id` int(11) NOT NULL,
  `calon_id` int(11) DEFAULT NULL,
  `subkriteria_id` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_subkriteria`
--

INSERT INTO `calon_subkriteria` (`id`, `calon_id`, `subkriteria_id`, `value`) VALUES
(910, 124, 1, 0),
(911, 124, 9, 0),
(912, 124, 14, 0),
(913, 124, 32, 0),
(914, 124, 30, 0),
(915, 126, 2, 0),
(916, 126, 11, 0),
(917, 126, 15, 0),
(918, 126, 32, 0),
(919, 126, 30, 0),
(920, 125, 4, 0),
(921, 125, 12, 0),
(922, 125, 17, 0),
(923, 125, 33, 0),
(924, 125, 31, 0),
(925, 127, 1, 0),
(926, 127, 8, 0),
(927, 127, 13, 0),
(928, 127, 32, 0),
(929, 127, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(11) NOT NULL,
  `calon_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `persetujuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id`, `calon_id`, `status`, `persetujuan`) VALUES
(7, 124, 'Dapat di Promosikan', 'Disetujui'),
(8, 125, 'Tidak Dapat di Promosikan', '-'),
(9, 126, 'Dapat di Promosikan', 'Tidak Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `bobot`, `jenis`) VALUES
(3, 'Sistematika Berpikir', 3, 'Benefit'),
(5, 'Logika Praktis', 5, 'Benefit'),
(6, 'Potensi Kecerdasan', 4, 'Benefit'),
(7, 'Penalaran Solusi', 5, 'Benefit'),
(14, 'Konsentrasi', 5, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', 'admin', 'superadmin'),
(11, 'Divisi Engineering', 'engineering@gmail.com', 'engineering', 'engineering', 'Divisi Engineering'),
(12, 'Divisi Purchasing', 'purchasing@gmail.com', 'purchasing', 'purchasing', 'Divisi Purchasing'),
(13, 'Divisi Cost Control', 'cost@gmail.com', 'cost', 'cost', 'Divisi Cost Control'),
(14, 'Pimpinan', 'pimpinan@gmail.com', 'pimpinan', 'pimpinan', 'pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `kriteria_id` int(11) DEFAULT 0,
  `nama` varchar(50) DEFAULT '0',
  `bobot` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `kriteria_id`, `nama`, `bobot`) VALUES
(1, 3, 'Belum Kawin', 4),
(2, 3, 'Cerai Mati', 3),
(3, 3, 'Cerai Hidup', 2),
(4, 3, 'Kawin', 1),
(8, 5, 'Belum/Tidak Tamat SD/Sederajat', 5),
(9, 5, 'SD/MI/Sederajat', 1),
(10, 5, 'SLTP/MTs/Sederajat', 2),
(11, 5, 'SLTA/MA/Sederajat', 3),
(12, 5, 'Diploma/S1/S2/S3', 4),
(13, 6, 'Sakit', 1),
(14, 6, 'Umur', 2),
(15, 6, 'Kecelakaan', 3),
(16, 6, 'Depresi', 4),
(17, 6, 'Sejak Lahir', 5),
(30, 14, 'Ilmu', 3),
(31, 14, 'Ye', 2),
(32, 7, 'Still', 3),
(33, 7, 'Sun', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `submit_by` (`submit_by`);

--
-- Indexes for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calon_id` (`calon_id`),
  ADD KEY `subkriteria_id` (`subkriteria_id`);

--
-- Indexes for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calon_id` (`calon_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_id` (`kriteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=930;

--
-- AUTO_INCREMENT for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`submit_by`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  ADD CONSTRAINT `FK__calon` FOREIGN KEY (`calon_id`) REFERENCES `calon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__subkriteria` FOREIGN KEY (`subkriteria_id`) REFERENCES `subkriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `FK_subkriteria_kriteria` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
