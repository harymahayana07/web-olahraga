-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_olahraga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `no_telp` varchar(17) NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `username`, `password`, `nama_paket`, `no_telp`, `harga_paket`) VALUES
(1, 'member1', 'member1', 'paket1', '08786512123', 0),
(2, 'member2', 'member2', 'paket3', '08786123123', 0),
(3, 'member3', 'member3', 'paket body transformation', '0978912321', 125000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` varchar(50) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `ket_paket` varchar(200) NOT NULL,
  `harga_paket` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `ket_paket`, `harga_paket`, `gambar`) VALUES
('1231231', 'shiping Transformation In one years1', 'membuat otot kekar maksimal dan memperbaiki engsel kaki1 , dan mengencangkan otot kaki secara maksimal dengan berbagai olahraga dan suplemen terbaik dari kami', '125000', 'Latihan-kaki.jpg'),
('1232123', 'paket pelangsing', 'mengurangi berat badan berlebih dengan olahraga kardio dan paket diet yang tidak terlalu berat untuk pemula', '125000', 'gym_profil1.jpg'),
('129857', 'Lengan Besar kuat', 'membesarkan lengan dengan beberapa suntikan steroid yang membuat lengan makin terlihat kekar dan berotot', '12000000', 'Otot-Tangan.jpg'),
('14564', 'Body Transformation In one years', 'paket dengan penjualan terlaris, mengikuti pelatihan ini , membuat tubuh anda menjadi sixpack dalam satu tahun.', '250000', 'All-Body.jpg'),
('18241', 'paket body  building', 'paket yang digunakan untuk membentuk otot badan yang kokoh dan tahan banting', '150000', 'gallery2.jpg'),
('287654', 'Paket Body Transformation on 6 month', 'Paket ini mengubah transformasi bentuk tubuh kamu dengan sangat drastis , cocok untuk pemula dan masih memiliki berat 70kg.', '1250000', 'Otot-Tangan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `fullname`, `password`, `role`) VALUES
(1810050022, 'mega', 'ni luh putu sri astiti', 'mega', 'admin'),
(1901010011, 'putu', 'putu ananda pradnya w', 'putu', 'operator'),
(1901010020, 'deden', 'dewa ngakan klaci ariandana', 'deden', 'operator'),
(1901010033, 'agus', 'muhammad agus alfan salim hamid', 'agus', 'operator'),
(1901010042, 'rio', 'christuaji satrio', 'rio', 'operator'),
(1901010046, 'hary', 'I Made Hary Mahayana', 'hary', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1901010047;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
