-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 03:29 PM
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
(125, '43254', 'Agus', 'Laki - Laki', 'Bekasi', '084572342', 'example@gmail.com', 'Divisi Engineering', '2021-05-30', 4, 1),
(126, '444333', 'Ayap', 'Laki - Laki', 'Jakarta', '0878754', 'ex@gmail.com', 'Divisi Engineering', '2021-05-30', 13, 1),
(127, '35124', 'Sapri', 'Laki - Laki', 'Bandung', '15125123', 'sapri@gmail.com', 'Divisi Purchasing', '2021-05-30', 4, 1),
(128, '49059', 'mahmud', 'Laki - Laki', 'Jakarta', '085729349234', 'mahmud123@gmail.com', 'Divisi Engineering', '2015-06-26', 2169, 1),
(129, '39570', 'fitri', 'Perempuan', 'Bali', '083812364213', 'fitriatu7123@gmail.com', 'Divisi Cost Control', '2019-06-12', 722, 1),
(130, '39789', 'ditol', 'Perempuan', 'Bekasi', '08124627348', 'ditakumel@gmail.com', 'Divisi Cost Control', '2018-06-12', 1087, 1),
(131, '39662', 'baraki', 'Laki - Laki', 'Jakarta', '08561238473', 'baraki1233@gmail.com', 'Divisi Cost Control', '2019-01-23', 862, 1),
(132, '23085', 'ilyas', 'Laki - Laki', 'Jakarta', '0835127364', 'ilyasalazis@gmail.com', 'Divisi Purchasing', '2017-06-13', 1451, 1),
(133, '28464', 'adi', 'Laki - Laki', 'Jakarta', '021836343', 'adiselalu@gmail.com', 'Divisi Purchasing', '2018-06-06', 1093, 1),
(134, '44123', 'anita', 'Perempuan', 'Surabaya', '085612312236', 'anitaynt11@gmail.com', 'Divisi Engineering', '2017-09-12', 1360, 1),
(135, '37582', 'edgar', 'Laki - Laki', 'Manado', '0212374343', 'edgarmar@gmail.com', 'Divisi Purchasing', '2018-09-11', 996, 1),
(136, '39775', 'fabian', 'Laki - Laki', 'Jakarta', '085712632134', 'fabiandwki@gmail.com', 'Divisi Purchasing', '2018-07-04', 1065, 1),
(137, '21732', 'rahmadina', 'Perempuan', 'Manado', '0856237123', 'rahmadinacil@gmail.com', 'Divisi Cost Control', '2018-02-22', 1197, 1),
(138, '21765', 'vera', 'Perempuan', 'Riau', '085712382357', 'verabcnt12@gmail.com', 'Divisi Cost Control', '2020-01-08', 512, 1),
(139, '395472', 'Alghan', 'Laki - Laki', 'Jakarta', '0857126374856', 'alghanirusdi@gmail.com', 'Divisi Engineering', '2016-06-05', 1840, 1),
(140, '39542', 'dias', 'Laki - Laki', 'Bandung', '08571236495', 'diassapty@gmail.com', 'Divisi Cost Control', '2015-06-04', 2192, 1),
(141, '39653', 'Iswanto', 'Laki - Laki', 'Jakarta', '083812374657', 'iswatonego@gmail.com', 'Divisi Cost Control', '2020-08-16', 292, 1),
(142, '49273', 'faqih', 'Laki - Laki', 'Jakarta', '08527363741', 'faqih1237@gmail.com', 'Divisi Engineering', '2019-06-16', 734, 1),
(143, '40129', 'Nabila', 'Perempuan', 'Tanggerang', '083512374734', 'nabila12332@gmail.com', 'Divisi Engineering', '2019-05-29', 745, 1),
(144, '47544', 'Dion', 'Laki - Laki', 'Lampung', '08579659654', 'Dionnre@gmail.com', 'Divisi Engineering', '2019-11-19', 571, 1),
(145, '47534', 'maulanadwi', 'Perempuan', 'Bandung', '085727364658', 'maulana4563@gmail.com', 'Divisi Engineering', '2020-03-08', 461, 1),
(146, '1000', 'Dhimas', 'Laki - Laki', 'Jakarta', '082525252', 'exam@gmail.com', 'Divisi Engineering', '2021-06-16', 3, 1),
(147, '111', 'Dimas', 'Laki - Laki', 'Jakarta', '085858581', 'ex@gmail.com', 'Divisi Engineering', '2021-05-31', 19, 1);

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
(915, 126, 2, 0),
(916, 126, 11, 0),
(917, 126, 15, 0),
(918, 126, 32, 0),
(919, 126, 30, 0),
(921, 125, 12, 0),
(922, 125, 17, 0),
(923, 125, 33, 0),
(924, 125, 31, 0),
(925, 127, 2, 0),
(926, 127, 12, 0),
(927, 127, 14, 0),
(928, 127, 33, 0),
(929, 127, 36, 0),
(930, 128, 2, 0),
(931, 128, 10, 0),
(932, 128, 14, 0),
(933, 128, 33, 0),
(934, 128, 34, 0),
(935, 129, 1, 0),
(936, 129, 8, 0),
(937, 129, 16, 0),
(938, 129, 33, 0),
(939, 129, 31, 0),
(940, 130, 2, 0),
(941, 130, 9, 0),
(942, 130, 14, 0),
(943, 130, 33, 0),
(944, 130, 31, 0),
(945, 131, 3, 0),
(946, 131, 9, 0),
(947, 131, 13, 0),
(948, 131, 33, 0),
(949, 131, 31, 0),
(950, 132, 2, 0),
(951, 132, 9, 0),
(952, 132, 14, 0),
(953, 132, 33, 0),
(954, 132, 31, 0),
(955, 134, 1, 0),
(956, 134, 8, 0),
(957, 134, 15, 0),
(958, 134, 32, 0),
(959, 134, 34, 0),
(960, 137, 1, 0),
(961, 137, 8, 0),
(962, 137, 13, 0),
(963, 137, 32, 0),
(964, 137, 30, 0),
(965, 138, 1, 0),
(966, 138, 9, 0),
(967, 138, 13, 0),
(968, 138, 32, 0),
(969, 138, 30, 0),
(970, 133, 2, 0),
(971, 133, 8, 0),
(972, 133, 15, 0),
(973, 133, 32, 0),
(974, 133, 34, 0),
(975, 135, 3, 0),
(976, 135, 9, 0),
(977, 135, 14, 0),
(978, 135, 33, 0),
(979, 135, 34, 0),
(980, 136, 3, 0),
(981, 136, 12, 0),
(982, 136, 17, 0),
(983, 136, 33, 0),
(984, 136, 36, 0),
(985, 125, 2, 0),
(986, 140, 1, 0),
(987, 140, 11, 0),
(988, 140, 14, 0),
(989, 140, 33, 0),
(990, 140, 34, 0),
(991, 141, 2, 0),
(992, 141, 10, 0),
(993, 141, 15, 0),
(994, 141, 33, 0),
(995, 141, 34, 0),
(996, 143, 3, 0),
(997, 143, 9, 0),
(998, 143, 15, 0),
(999, 143, 32, 0),
(1000, 143, 31, 0),
(1001, 144, 1, 0),
(1002, 144, 10, 0),
(1003, 144, 14, 0),
(1004, 144, 32, 0),
(1005, 144, 30, 0),
(1006, 145, 2, 0),
(1007, 145, 10, 0),
(1008, 145, 13, 0),
(1009, 145, 33, 0),
(1010, 145, 36, 0),
(1011, 142, 2, 0),
(1016, 139, 2, 0),
(1017, 139, 9, 0),
(1018, 139, 14, 0),
(1019, 139, 32, 0),
(1020, 139, 31, 0),
(1021, 142, 9, 0),
(1022, 142, 14, 0),
(1023, 142, 33, 0),
(1024, 142, 31, 0),
(1025, 146, 1, 0),
(1026, 146, 9, 0),
(1027, 146, 14, 0),
(1028, 146, 32, 0),
(1030, 146, 35, 0),
(1031, 147, 2, 0),
(1032, 147, 9, 0),
(1033, 147, 14, 0),
(1034, 147, 33, 0),
(1035, 147, 34, 0);

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
(114, 146, 'Dapat di Promosikan', 'Disetujui'),
(115, 147, 'Dapat di Promosikan', 'Disetujui'),
(119, 139, 'Dapat di Promosikan', 'Disetujui'),
(120, 142, 'Dapat di Promosikan', 'Menunggu Persetujuan'),
(121, 143, 'Dapat di Promosikan', 'Menunggu Persetujuan'),
(132, 125, 'Dapat di Promosikan', 'Menunggu Persetujuan'),
(133, 126, 'Dapat di Promosikan', 'Menunggu Persetujuan'),
(135, 144, 'Dapat di Promosikan', 'Menunggu Persetujuan');

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
(5, 'Sikap Kerja', 4, 'Cost'),
(6, 'Potensi Kecerdasan', 5, 'Benefit'),
(7, 'Penalaran Solusi', 1, 'Benefit'),
(14, 'Perilaku', 2, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', 'admin', 'superadmin'),
(11, 'Divisi Engineering', 'engineering@gmail.com', 'engineering', 'engineering', 'Divisi Engineering'),
(12, 'Divisi Purchasing', 'purchasing@gmail.com', 'purchasing', 'purchasing', 'Divisi Purchasing'),
(13, 'Divisi Cost Control', 'cost@gmail.com', 'cost', 'cost', 'Divisi Cost Control'),
(14, 'Pimpinan', 'pimpinan@gmail.com', 'pimpinan', 'pimpinan', 'pimpinan'),
(15, 'Dimas', 'ex@gmail.com', '111', '111', 'Karyawan');

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
(1, 3, 'Imajinasi Kreatif', 5),
(2, 3, 'Antisipasi ', 4),
(3, 3, 'Vitalitas dan Perencanaan', 3),
(8, 5, 'Cepat Merespon', 4),
(9, 5, 'Energi Psikis ', 1),
(10, 5, 'Ketelitian dan Tanggung Jawab ', 2),
(11, 5, 'Kehati-hatian', 3),
(12, 5, 'Dorongan Berprestasi', 4),
(13, 6, 'Common Sense', 1),
(14, 6, 'Verbalisasi Ide ', 2),
(15, 6, 'Fleksibilitas Berpikir', 3),
(16, 6, 'Antisipasi', 4),
(17, 6, 'IQ', 5),
(30, 14, 'Bermotivasi', 1),
(31, 14, 'Fokus', 2),
(32, 7, 'penalaran deduktif', 3),
(33, 7, 'penalaran induktif', 2),
(34, 14, 'Tekun', 5),
(35, 14, 'Keteguhan Hati', 4),
(36, 14, 'Produktif', 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;

--
-- AUTO_INCREMENT for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
