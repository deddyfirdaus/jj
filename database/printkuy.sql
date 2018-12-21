-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 09:14 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `detail_harga`
--

CREATE TABLE `detail_harga` (
  `id_user` int(11) NOT NULL,
  `hargaa4hp` int(11) NOT NULL,
  `hargaf4hp` int(11) NOT NULL,
  `hargaa4clr` int(11) NOT NULL,
  `hargaf4clr` int(11) NOT NULL,
  `diambil` int(11) NOT NULL,
  `diantar` int(11) NOT NULL,
  `jilid` int(11) NOT NULL,
  `staples` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_harga`
--

INSERT INTO `detail_harga` (`id_user`, `hargaa4hp`, `hargaf4hp`, `hargaa4clr`, `hargaf4clr`, `diambil`, `diantar`, `jilid`, `staples`) VALUES
(4, 200, 200, 200, 200, 200, 200, 200, 200),
(10, 100, 10, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kertas`
--

CREATE TABLE `detail_kertas` (
  `id_kertas` int(11) NOT NULL,
  `kertas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kertas`
--

INSERT INTO `detail_kertas` (`id_kertas`, `kertas`) VALUES
(1, 'a4'),
(2, 'f4');

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
(2, 'jember', 'adjnlakwmdlk', '918762567'),
(3, 'becak', 'jln bacak', '0899999999');

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE `print` (
  `id_print` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat_print` varchar(25) NOT NULL,
  `kertas_print` varchar(25) NOT NULL,
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

INSERT INTO `print` (`id_print`, `tanggal`, `tempat_print`, `kertas_print`, `nama_file`, `nama_customer`, `alamat`, `status_print`, `status_diterima`, `penerima`) VALUES
(1, '2018-10-15', 'jember', 'a4', 'coba', 'jahro', '', 'Sudah Diprint', 'Diterima', 'Mas Johan'),
(2, '2018-10-15', 'jember', 'a4', 'file', 'jahrotus', '', 'Sudah Diprint', 'Belum Diterima', 'jahrotus'),
(3, '2018-10-15', 'jember', '', '15102018132634WhatsApp Image 2018-10-14 at 21.26.1', 'jahro', '', 'Sudah Diprint', 'Belum Diterima', 'jahro'),
(4, '2018-10-15', 'jember', '', '15102018134209WhatsApp Image 2018-10-14 at 20.04.4', 'jahro', 'dwadawdwa', 'Sudah Diprint', 'Diterima', 'jahro'),
(5, '2018-12-07', 'jember', 'a4', '07122018002130nyobaaaaaa.txt', 'jahrotus', 'Diambil Sendiri', 'Belum Diprint', 'Belum Diterima', 'jahrotus'),
(7, '2018-12-20', 'jember', 'a4', '2012201806283423.docx', 'jahrotus', '', 'Sudah Diprint', 'Belum Diterima', 'jahrotus');

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
(1, 'jahrotus', 'jahro', 1),
(2, 'qweqwe', 'qweqweq', 1),
(3, 'wadawd', 'awdaawda', 2),
(4, 'deddy2', 'deddy2', 2),
(5, 'wawan', 'wawan', 1),
(6, 'becak', 'becak', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_harga`
--
ALTER TABLE `detail_harga`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `detail_kertas`
--
ALTER TABLE `detail_kertas`
  ADD PRIMARY KEY (`id_kertas`);

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
-- AUTO_INCREMENT for table `detail_kertas`
--
ALTER TABLE `detail_kertas`
  MODIFY `id_kertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_pengeprint`
--
ALTER TABLE `detail_pengeprint`
  MODIFY `id_pengeprint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_tempat`
--
ALTER TABLE `detail_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
