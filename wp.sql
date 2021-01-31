-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2021 at 09:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pilih` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `pilih`) VALUES
(1, 'ASUS ZenBook UX310UQ', 0),
(2, 'HP Pavilion 15-BC403TX', 0),
(3, 'Acer Predator Nitro 5 AN515-52', 0),
(4, 'Dell Inspiron 3576', 0),
(5, 'HP Envy 13 AH0051WM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bobot` int(3) NOT NULL,
  `keuntungan` int(1) NOT NULL DEFAULT '1',
  `w` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `bobot`, `keuntungan`, `w`) VALUES
(1, 'Harga', 5, 0, '-0.050'),
(2, 'Kecepatan Processor (GHz)', 20, 1, '0.200'),
(3, 'Processor Cache (MB)', 10, 1, '0.100'),
(4, 'RAM (GB)', 10, 1, '0.100'),
(5, 'Kecepatan RAM (MHz)', 8, 1, '0.080'),
(6, 'Storage (GB)', 15, 1, '0.150'),
(7, 'Daya Tahan Baterai (Hrs)', 10, 1, '0.100'),
(8, 'Ukuran Layar (Inch)', 10, 1, '0.100'),
(9, 'VRAM (GB)', 7, 1, '0.070'),
(10, 'Berat (Kg)', 5, 0, '-0.050');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `alternatif` varchar(30) NOT NULL,
  `k1` double(20,3) NOT NULL,
  `k2` double(20,3) NOT NULL,
  `k3` double(20,3) NOT NULL,
  `k4` double(20,3) NOT NULL,
  `k5` double(20,3) NOT NULL,
  `k6` double(20,3) NOT NULL,
  `k7` double(20,3) NOT NULL,
  `k8` double(20,3) NOT NULL,
  `k9` double(20,3) NOT NULL,
  `k10` double(20,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`) VALUES
(1, 'ASUS ZenBook UX310UQ', 15600000.000, 3.800, 6.000, 8.000, 2133.000, 1128.000, 5.000, 13.300, 2.000, 1.400),
(2, 'HP Pavilion 15-BC403TX', 9899000.000, 4.000, 8.000, 8.000, 2133.000, 1000.000, 7.000, 15.600, 4.000, 2.200),
(3, 'Acer Predator Nitro 5 AN515-52', 8999000.000, 3.500, 6.000, 8.000, 2133.000, 1128.000, 5.500, 15.600, 4.000, 2.700),
(4, 'Dell Inspiron 3576', 9250000.000, 4.300, 8.000, 8.000, 2400.000, 256.000, 7.000, 15.600, 2.000, 2.130),
(5, 'HP Envy 13 AH0051WM', 7599000.000, 3.400, 6.000, 8.000, 2133.000, 256.000, 14.000, 13.300, 4.000, 1.220);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_s`
--

CREATE TABLE `tabel_s` (
  `id` int(11) NOT NULL,
  `s` double(20,12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_s`
--

INSERT INTO `tabel_s` (`id`, `s`) VALUES
(1, 6.992590711445),
(2, 7.877982778178),
(3, 7.367470292996),
(4, 6.296988198538),
(5, 6.649079469904);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_v`
--

CREATE TABLE `tabel_v` (
  `id` int(11) NOT NULL,
  `v` double(20,12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_v`
--

INSERT INTO `tabel_v` (`id`, `v`) VALUES
(1, 0.198742853608),
(2, 0.223907396074),
(3, 0.209397651075),
(4, 0.178972494653),
(5, 0.188979604591);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_s`
--
ALTER TABLE `tabel_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_v`
--
ALTER TABLE `tabel_v`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_s`
--
ALTER TABLE `tabel_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_v`
--
ALTER TABLE `tabel_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
