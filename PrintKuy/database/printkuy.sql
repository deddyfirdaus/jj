-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2018 pada 10.30
-- Versi Server: 10.1.21-MariaDB
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
-- Struktur dari tabel `detail_pengeprint`
--

CREATE TABLE `detail_pengeprint` (
  `id_pengeprint` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_hp` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pengeprint`
--

INSERT INTO `detail_pengeprint` (`id_pengeprint`, `nama`, `nomor_hp`, `jenis_kelamin`) VALUES
(2, '1wqeq', 'qweqwe', 'Laki - Laki'),
(3, 'jah', '082', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tempat`
--

CREATE TABLE `detail_tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_tempat`
--

INSERT INTO `detail_tempat` (`id_tempat`, `nama`, `alamat`, `nomor_hp`) VALUES
(1, 'wada', 'awdawd', 'awdaw'),
(2, 'jember', 'adjnlakwmdlk', '918762567'),
(3, 'kafe print', 'jalan gajahmada', '098');

-- --------------------------------------------------------

--
-- Struktur dari tabel `print`
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
-- Dumping data untuk tabel `print`
--

INSERT INTO `print` (`id_print`, `tanggal`, `tempat_print`, `nama_file`, `nama_customer`, `alamat`, `status_print`, `status_diterima`, `penerima`) VALUES
(5, '2018-10-15', 'kafe print', '15102018155937printkuy.png', 'jah', '', 'Sudah Diprint', 'Diterima', 'jah'),
(6, '2018-10-16', 'jember', '16102018054804Rundown + Pemateri.doc', 'jah', 'kalimantan 10', 'Sudah Diprint', 'Diterima', 'jah'),
(7, '2018-10-16', 'jember', '16102018054804Rundown + Pemateri.doc', 'jah', 'kalimantan 10', 'Sudah Diprint', 'Diterima', 'jah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `level`) VALUES
(2, 'qweqwe', 'qweqweq', 1),
(3, 'wadawd', 'awdaawda', 2),
(5, 'jah', 'jah12', 1),
(6, 'kafep', 'kafep', 2);

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
  MODIFY `id_pengeprint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
