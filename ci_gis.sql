-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2015 at 07:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `username` varchar(256) NOT NULL,
  `password` mediumtext NOT NULL,
  `nama` varchar(256) NOT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `id_admin`, `username`, `password`, `nama`, `no_telp`, `tgl_lahir`, `alamat`) VALUES
(1, 1, 'admin', '6fcf8c37607e46be2e425319a96d6fe5', 'Administrator', 23339, '1990-01-07', 'bandung'),
(2, 1, 'reza', 'bb98b1d0b523d5e783f931550d7702b6', 'reza', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi_id` int(3) NOT NULL,
  `provinsi_name` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  `provinsi_long` float NOT NULL,
  `provinsi_lat` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsi_id`, `provinsi_name`, `order`, `provinsi_long`, `provinsi_lat`) VALUES
(1, 'Aceh', 1, 96.7361, 4.50031),
(2, 'Sumatera Utara', 2, 99.0525, 3.00119),
(3, 'Sumatera Barat', 3, 100.526, -0.500122),
(4, 'Riau', 4, 101.918, 0.308289),
(5, 'Kepulauan Riau', 5, 104.417, 0.923889),
(6, 'Kepulauan Bangka-Belitung', 9, 105.981, -2.18372),
(7, 'Jambi', 6, 102.815, -1.72809),
(8, 'Bengkulu', 8, 102.407, -3.55353),
(9, 'Sumatera Selatan', 7, 104.078, -3.33899),
(10, 'Lampung', 10, 104.74, -4.90491),
(11, 'Banten', 11, 106.105, -6.39539),
(12, 'DKI Jakarta', 12, 106.828, -6.23969),
(13, 'Jawa Barat', 13, 107.598, -6.88068),
(14, 'Jawa Tengah', 14, 109.98, -7.31573),
(15, 'Daerah Istimewa Yogyakarta  ', 15, 110.425, -7.82202),
(16, 'Jawa Timur', 16, 112.75, -7.80658),
(17, 'Bali', 21, 115.073, -8.35321),
(18, 'Nusa Tenggara Barat', 22, 117.954, -8.82269),
(19, 'Nusa Tenggara Timur', 23, 121.41, -8.6947),
(20, 'Kalimantan Barat', 17, 111.509, -0.103394),
(21, 'Kalimantan Tengah', 18, 113.616, -1.40271),
(22, 'Kalimantan Selatan', 20, 115.415, -3.35058),
(23, 'Kalimantan Timur', 19, 116.583, 2.99554),
(24, 'Gorontalo', 25, 122.347, 0.766907),
(25, 'Sulawesi Selatan', 28, 119.914, -5.08687),
(26, 'Sulawesi Tenggara', 27, 121.887, -3.83502),
(27, 'Sulawesi Tengah', 26, 121.444, -2.21851),
(28, 'Sulawesi Utara', 24, 124.165, 0.674316),
(29, 'Sulawesi Barat', 29, 119.328, -2.664),
(30, 'Maluku', 31, 129.356, -3.12012),
(31, 'Maluku Utara', 30, 127.781, 0.478518),
(32, 'Papua Barat', 32, 132.631, -1.40947),
(33, 'Papua', 33, 136.378, -3.81183);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`), ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `provinsi_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
