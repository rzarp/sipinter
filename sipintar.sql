-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 12:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipintar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'user', '6ad14ba9986e3615423dfca256d04e3f');

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `idUser` int(255) NOT NULL,
  `asalUK` varchar(128) NOT NULL,
  `role` int(1) NOT NULL,
  `username` varchar(128) NOT NULL,
  `npp` int(128) NOT NULL,
  `posisi` varchar(128) NOT NULL,
  `kodeBC` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`idUser`, `asalUK`, `role`, `username`, `npp`, `posisi`, `kodeBC`, `email`, `password`, `alamat`) VALUES
(1, 'Purbalingga', 1, 'Ahmad', 16747, 'HR & GA Officer 2', '10-43-01-06-4722-00-14-042-0-0000-000000', 'ahmad@gmail.com', '12345', 'PT. Sucofindo (Persero) Cabang Cilacap\r\nJl. Soekarno Hatta No. 280, Kel Menganti Kec. Kesugihan\r\nKabupaten Cilacap, Jawa Tengah 53274'),
(2, 'Purbalingga', 1, 'admin', 22222, 'Administrator', '10-43-01-06-4722-00-11-011-0-0000-000000 ', 'admin@admin.com', 'admin123', 'Purbalingga'),
(3, 'Purbalingga', 2, 'eks', 111111, 'ekspedisi', '516171718181819182727', 'eks@eks.com', 'eks', 'Purbalingga'),
(4, 'Purbalingga', 3, 'user', 6666666, 'user', '456789023456789456', 'user@user.com', 'user', 'Purbalingga');

-- --------------------------------------------------------

--
-- Table structure for table `kodebc`
--

CREATE TABLE `kodebc` (
  `id_bc` int(11) NOT NULL,
  `namaUK` varchar(255) NOT NULL,
  `kodeUK` varchar(255) NOT NULL,
  `kodeBc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kodebc`
--

INSERT INTO `kodebc` (`id_bc`, `namaUK`, `kodeUK`, `kodeBc`) VALUES
(1, 'Purbalingga', 'PBG', '10-43-01-06-4722-00-17-072-0-0000-000000'),
(2, 'Purbalingga', 'PBG', '10-43-01-06-4722-00-17-071-0-0000-000000'),
(3, 'Surabaya', 'SBY', '10-43-01-06-4722-00-17-073-0-0000-000000'),
(4, 'Surabaya', 'SBY', '10-43-01-06-4722-00-17-074-0-0000-000000');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(1) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama`) VALUES
(1, 'JNE'),
(2, 'TIKI'),
(4, 'Apa');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `idpenerima` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kodePos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`idpenerima`, `nama`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `negara`, `kodePos`) VALUES
(2, 'Jalal', 'Purbalingga', 'Kalimanah Kulon', 'Kalimanah', 'Purbalingga', 'Jawa Tengah', 'Indonesia', '53313'),
(3, 'Ahmad', 'JL.Manggis', 'Kalimanah Kulon', 'Kalimanah', 'Purbalingga', 'Jawa Tengah', 'Indonesia', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(1) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'administrator'),
(2, 'ekspedisi'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `kodeUK` varchar(255) NOT NULL,
  `namaUK` varchar(255) NOT NULL,
  `alamatUK` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `kodePos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`kodeUK`, `namaUK`, `alamatUK`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `negara`, `kodePos`) VALUES
('CLC', 'Cilacap', 'cilacap', 'cilacap', 'cilacap', 'cilacap', 'Jawa Tengah', 'Indonesia', 829182),
('PBG', 'Purbalingga', 'JL.Manggis', 'Kalimanah Kulon', 'Kalimanah', 'Purbalingga', 'Jawa Tengah', 'Indonesia', 312222),
('SBY', 'Surabaya', 'JL.Mangga', 'Gatau', 'Gatau', 'Surabaya', 'Jawa Timur', 'Indonesia', 423233),
('SMG', 'Semarang Kota assss', 'fdhfj', 'dhyrjug', 'yjyfjut', 'trjyryt7', 'hyfruti', 'yrut7ry', 4453426);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `kodebc`
--
ALTER TABLE `kodebc`
  ADD PRIMARY KEY (`id_bc`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`idpenerima`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`kodeUK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datauser`
--
ALTER TABLE `datauser`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kodebc`
--
ALTER TABLE `kodebc`
  MODIFY `id_bc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `idpenerima` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
