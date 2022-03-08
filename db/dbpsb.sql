-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 04:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Lulus'),
(2, 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE `tbl_pendaftar` (
  `id` int(11) NOT NULL,
  `nmsiswa` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nmortu` varchar(255) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `nowa` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id`, `nmsiswa`, `tgllahir`, `tempatlahir`, `jk`, `agama`, `nmortu`, `pekerjaan`, `nohp`, `nowa`, `alamat`, `id_status`) VALUES
(7, 'Dyna Monica', '2022-03-07', 'Kisaran', 'Perempuan', 'Islam', 'Rina', 'Ibu Rumah Tangga', '0822', '0822', 'Bunut', 'Lulus'),
(8, 'Saya', '2022-03-01', 'Kisaran', 'Laki laki', 'Hindu', 'Ada', 'Ada', '082222', '082222', 'Ada', 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Dyna Monica', 'Admin', 'admin', 'admin'),
(2, 'Pengguna', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
