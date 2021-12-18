-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 09:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_legalisir`
--

CREATE TABLE `pengajuan_legalisir` (
  `id_pengajuan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` int(10) NOT NULL,
  `tahun_tamat` int(4) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status_legalisir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat_keluar`
--

CREATE TABLE `pengajuan_surat_keluar` (
  `id_pengajuan` int(10) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` int(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `perihal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(10) NOT NULL,
  `id_pengajuan_surat_keluar` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `tanggal_keluar_surat` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `status_surat` varchar(20) NOT NULL,
  `file_surat` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `perihal` text NOT NULL,
  `file_surat` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan_legalisir`
--
ALTER TABLE `pengajuan_legalisir`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengajuan_surat_keluar`
--
ALTER TABLE `pengajuan_surat_keluar`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `id_pengajuan_surat_keluar` (`id_pengajuan_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_legalisir`
--
ALTER TABLE `pengajuan_legalisir`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_surat_keluar`
--
ALTER TABLE `pengajuan_surat_keluar`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`id_surat_keluar`) REFERENCES `surat_masuk` (`id_surat_masuk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_3` FOREIGN KEY (`id_pengajuan_surat_keluar`) REFERENCES `pengajuan_surat_keluar` (`id_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`id_surat_masuk`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
