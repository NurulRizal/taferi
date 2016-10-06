-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 03:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `username` char(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `jabatan`) VALUES
(1, 'supervisor', 'supervisor', 'Feri Eko Fattoni', 1),
(2, 'groupleader', 'groupleader', 'Devi Dwi Rohmawati', 2),
(3, 'admin', 'admin', 'Meri Septiani', 2),
(6, 'test', 'test', 'Maria Mercedez', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(10) NOT NULL,
  `part_number` char(30) NOT NULL,
  `id_proses` char(30) NOT NULL,
  `produk` varchar(15) NOT NULL,
  `model` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `part_number`, `id_proses`, `produk`, `model`) VALUES
(1, '12345', 'Pro-01', 'Hub Core Set', 'YR 9'),
(3, '123', 'Pro-02', 'Ring', 'YR9'),
(4, '666', 'Pro-03', '666', '666');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(10) NOT NULL,
  `nip` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `nip`, `nama`) VALUES
(1, '1312046', 'Feri Eko Fattoni'),
(2, '1312045', 'Nur Shodiqotul Fajriyah'),
(5, '131210', 'Muhamad Subhan Ganteng sekali');

-- --------------------------------------------------------

--
-- Table structure for table `proses_produksi`
--

CREATE TABLE `proses_produksi` (
  `id` int(10) NOT NULL,
  `id_proses` char(10) NOT NULL,
  `nama_proses_produksi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_produksi`
--

INSERT INTO `proses_produksi` (`id`, `id_proses`, `nama_proses_produksi`) VALUES
(1, 'Pro-01', 'Broaching'),
(2, 'Pro-02', 'Coiling'),
(11, 'Pro-03', 'Welding 1');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_produksi`
--

CREATE TABLE `rencana_produksi` (
  `id` int(10) NOT NULL,
  `id_rencana` char(10) NOT NULL,
  `part_number` char(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_shift1` int(5) NOT NULL,
  `jumlah_shift2` int(5) NOT NULL,
  `area_plan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_produksi`
--

INSERT INTO `rencana_produksi` (`id`, `id_rencana`, `part_number`, `tanggal`, `jumlah_shift1`, `jumlah_shift2`, `area_plan`) VALUES
(1, 'R-001', '12345', '2016-10-07', 3, 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`,`part_number`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indexes for table `proses_produksi`
--
ALTER TABLE `proses_produksi`
  ADD PRIMARY KEY (`id`,`id_proses`);

--
-- Indexes for table `rencana_produksi`
--
ALTER TABLE `rencana_produksi`
  ADD PRIMARY KEY (`id`,`id_rencana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `proses_produksi`
--
ALTER TABLE `proses_produksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rencana_produksi`
--
ALTER TABLE `rencana_produksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
