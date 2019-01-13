-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 04:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbteras`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `pertanyaan_keamanan` varchar(70) NOT NULL,
  `jawaban_keamanan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`nama_admin`, `username`, `password`, `pertanyaan_keamanan`, `jawaban_keamanan`) VALUES
('Gea Rulisca Kandora', 'admin', 'admin', 'Siapa nama ibu kandung anda ?', 'Indriyana');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_promo`
--

CREATE TABLE `informasi_promo` (
  `id_promo` int(2) NOT NULL,
  `promo` varchar(30) NOT NULL,
  `keterangan_promo` text NOT NULL,
  `status_aktif_promo` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_promo`
--

INSERT INTO `informasi_promo` (`id_promo`, `promo`, `keterangan_promo`, `status_aktif_promo`) VALUES
(1, 'Bonus Air Mineral', 'Setiap pelanggan dengan penambahan 3 Jam Booking Studio mendapatkan bonus air mineral\r\n\r\n*Dapat diambil di kasir kami', 'AKTIF'),
(2, '10x Gratis 1x Room', 'Booking room 10x dengan nama pelanggan yang sama mendapatkan gratis 1x room gratis\r\n\r\n*Nama pelanggan yang berbeda tidak dapat dihitung', 'TIDAK AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `nama_owner` varchar(30) NOT NULL,
  `username_owner` varchar(8) NOT NULL,
  `password_owner` varchar(8) NOT NULL,
  `pertanyaan_keamanan_owner` varchar(70) NOT NULL,
  `jawaban_keamanan_owner` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`nama_owner`, `username_owner`, `password_owner`, `pertanyaan_keamanan_owner`, `jawaban_keamanan_owner`) VALUES
('Aley Angsa', 'owner', 'owner', 'Apa alat musik favorite kamu ?', 'Gitar');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(2) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `no_hp_pelanggan` varchar(18) NOT NULL,
  `tanggal_daftar_pelanggan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_hp_pelanggan`, `tanggal_daftar_pelanggan`) VALUES
(5, 'Ridho Kusuma', 'Jalan Kolonel Polisi M. Thaher No 02 Jambi', '085266390909', '14-10-2016'),
(6, 'Perwira Sungkoso', 'Jalan Budiman RT 01 No 23 Jambi', '082374899799', '14-10-2016'),
(7, 'Killing Me Inside', 'jakarta', '081994399009', '17-03-2017'),
(8, 'Payung Teduh', 'Jakarta', '0812020908', '17-03-2017'),
(9, 'ada band', 'jakarta', '082322334455', '17-03-2017'),
(10, 'gea', 'baseng lah', '1234567890987654', '15-06-2017');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(2) NOT NULL,
  `nama_studio` varchar(25) NOT NULL,
  `tarif_studio` int(11) NOT NULL,
  `fasilitas_studio` text NOT NULL,
  `keterangan` text NOT NULL,
  `foto_studio` varchar(100) NOT NULL,
  `rental` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`, `tarif_studio`, `fasilitas_studio`, `keterangan`, `foto_studio`, `rental`) VALUES
(1, 'STUDIO A', 45000, '- Full AC\r\n- Ruangan Studio Luas\r\n- Gitar Merk Yamaha\r\n- Sound Merk RCH\r\n- Fasilitas studio setara kualitas studio recording\r\n', 'Kerusakan alat-alat ditanggung oleh penyewa studio', 'IMG20161001172242.JPG', 'studio'),
(2, 'STUDIO B', 55000, '- Full AC\r\n- Ruangan Studio Luas\r\n- Gitar Merk Yamaha\r\n- Sound Merk RCH\r\n- Fasilitas studio setara kualitas studio recording', 'Kerusakan alat-alat ditanggung oleh penyewa studio', 'IMG20161001171855.jpg', 'studio'),
(7, 'ROOM RECORD ', 500000, '- recording', 'Rp.500.000 berlaku untuk 5 jam recording, untuk hari selanjutnya jam tersisa tidak dapat digunakan', 'IMG20161001171903.jpg', 'record'),
(8, 'STUDIO C', 65000, 'live studio', 'area terbuka', 'IMG20161001172518.jpg', 'studio');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(2) NOT NULL,
  `id_pelanggan` int(2) NOT NULL,
  `id_studio` int(2) NOT NULL,
  `tanggal_booking` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `total_jam` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `admin_operator` varchar(30) NOT NULL,
  `waktu_transaksi` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_studio`, `tanggal_booking`, `jam_mulai`, `jam_selesai`, `total_jam`, `total_bayar`, `admin_operator`, `waktu_transaksi`) VALUES
(15, 6, 2, '19-10-2016', '08:02:00', '11:02:00', 3, 165000, 'Administrator Aplikasi', '2016-10-19 15:16:13'),
(13, 5, 2, '19-10-2016', '16:07:00', '17:07:00', 1, 55000, 'Administrator Aplikasi', '2016-10-19 15:09:34'),
(17, 5, 2, '22-10-2016', '19:15:00', '21:15:00', 2, 110000, 'Ahmad Zaky', '2016-10-22 08:21:55'),
(11, 5, 2, '19-10-2016', '16:07:00', '17:07:00', 1, 55000, 'Administrator Aplikasi', '2016-10-19 11:40:07'),
(10, 5, 1, '19-10-2016', '08:07:00', '10:07:00', 2, 90000, 'Administrator Aplikasi', '2016-10-19 09:43:21'),
(16, 5, 1, '21-11-2016', '22:15:00', '00:15:00', 2, 90000, 'Ahmad Zaky', '2016-10-21 20:42:24'),
(24, 5, 1, '30-01-2017', '07:00:00', '08:00:00', 1, 45000, 'Ahmad Zaky', '2017-01-30 19:01:00'),
(23, 5, 2, '20-01-2017', '10:00:00', '11:00:00', 1, 55000, 'Ahmad Zaky', '2017-01-20 10:45:51'),
(25, 5, 2, '30-01-2017', '07:50:00', '08:50:00', 1, 55000, 'Ahmad Zaky', '2017-01-30 19:51:23'),
(26, 5, 1, '26-02-2017', '14:10:00', '15:10:00', 1, 45000, 'Ahmad Zaky', '2017-02-26 14:37:49'),
(27, 5, 1, '26-02-2017', '08:30:00', '09:30:00', 1, 45000, 'Ahmad Zaky', '2017-02-26 20:39:10'),
(28, 5, 1, '16-03-2017', '18:16:00', '20:16:00', 2, 0, 'Ahmad Zaky', '2017-03-16 17:37:17'),
(30, 6, 7, '16-03-2017', '07:00:00', '12:00:00', 5, 500000, 'Ahmad Zaky', '2017-03-16 17:56:57'),
(32, 9, 8, '24-04-2017', '07:42:00', '08:42:00', 1, 65000, 'Ahmad Zaky', '2017-04-24 07:43:10'),
(33, 8, 1, '24-04-2017', '07:44:00', '08:44:00', 1, 45000, 'Ahmad Zaky', '2017-04-24 07:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi_promo`
--
ALTER TABLE `informasi_promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD UNIQUE KEY `id_promo` (`id_promo`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`),
  ADD UNIQUE KEY `id_studio` (`id_studio`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi_promo`
--
ALTER TABLE `informasi_promo`
  MODIFY `id_promo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
