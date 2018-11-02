-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 02:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengeprint`
--

CREATE TABLE `detail_pengeprint` (
  `id_pengeprint` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_hp` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengeprint`
--

INSERT INTO `detail_pengeprint` (`id_pengeprint`, `nama`, `nomor_hp`, `jenis_kelamin`) VALUES
(1, 'Muhammad Fahmy', '082330750358', 'Laki - Laki'),
(2, '1wqeq', 'qweqwe', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tempat`
--

CREATE TABLE `detail_tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_tempat`
--

INSERT INTO `detail_tempat` (`id_tempat`, `nama`, `alamat`, `nomor_hp`) VALUES
(1, 'wada', 'awdawd', 'awdaw'),
(2, 'jember', 'adjnlakwmdlk', '918762567');

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE `print` (
  `id_print` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat_print` varchar(25) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `nama_customer` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL DEFAULT 'Diambil Sendiri',
  `status_print` enum('Sudah Diprint','Belum Diprint','','') DEFAULT 'Belum Diprint',
  `status_diterima` enum('Diterima','Belum Diterima','','') DEFAULT 'Belum Diterima',
  `penerima` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print`
--

INSERT INTO `print` (`id_print`, `tanggal`, `tempat_print`, `nama_file`, `nama_customer`, `alamat`, `status_print`, `status_diterima`, `penerima`) VALUES
(1, '2018-10-15', 'jember', 'coba', 'fahmy', '', 'Sudah Diprint', 'Diterima', 'Mas Johan'),
(2, '2018-10-15', 'jember', '$nama_file', '$nama_customer', '', 'Sudah Diprint', 'Belum Diterima', '$penerima'),
(3, '2018-10-15', 'jember', '15102018132634WhatsApp Image 2018-10-14 at 21.26.1', 'fahmy', '', 'Sudah Diprint', 'Belum Diterima', 'fahmy'),
(4, '2018-10-15', 'jember', '15102018134209WhatsApp Image 2018-10-14 at 20.04.4', 'fahmy', 'dwadawdwa', 'Sudah Diprint', 'Belum Diterima', 'fahmy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `level`) VALUES
(1, 'fahmy', 'fahmy', 1),
(2, 'qweqwe', 'qweqweq', 1),
(3, 'wadawd', 'awdaawda', 2),
(4, 'fahmy2', 'fahmy2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengeprint`
--
ALTER TABLE `detail_pengeprint`
  ADD PRIMARY KEY (`id_pengeprint`);

--
-- Indexes for table `detail_tempat`
--
ALTER TABLE `detail_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengeprint`
--
ALTER TABLE `detail_pengeprint`
  MODIFY `id_pengeprint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_tempat`
--
ALTER TABLE `detail_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
