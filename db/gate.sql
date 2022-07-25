-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 03:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluar`
--

CREATE TABLE `tbl_keluar` (
  `id_keluar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `foto_keluar` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_keluar`
--

INSERT INTO `tbl_keluar` (`id_keluar`, `nama`, `waktu_keluar`, `foto_keluar`, `prodi`, `kategori`) VALUES
(1, 'James', '2022-07-11 16:04:16', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(2, 'James euy', '2022-07-11 16:04:16', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(3, 'Thomas Slebew', '2022-07-11 16:04:16', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(4, 'James euy', '2022-07-11 16:04:16', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(5, 'Thomas Slebew', '2022-07-11 16:04:16', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(6, 'Thomas Slebew', '2022-07-11 16:04:16', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(7, 'Thomas Slebew', '2022-07-11 16:04:16', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(8, 'Thomas Slebew', '2022-07-11 16:04:16', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masuk`
--

CREATE TABLE `tbl_masuk` (
  `id_masuk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `foto_masuk` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_masuk`
--

INSERT INTO `tbl_masuk` (`id_masuk`, `nama`, `waktu_masuk`, `foto_masuk`, `prodi`, `kategori`) VALUES
(1, 'James', '2022-07-11 15:30:05', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(2, 'James euy', '2022-07-11 15:30:14', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(3, 'Thomas Slebew', '2022-07-11 15:30:42', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(4, 'James euy', '2022-07-11 15:30:42', 'pic.png', 'Fakultas Teknik', 'Dosen'),
(5, 'Thomas Slebew', '2022-07-11 15:30:42', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(6, 'Thomas Slebew', '2022-07-11 15:30:42', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(7, 'Thomas Slebew', '2022-07-11 15:30:42', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa'),
(8, 'Thomas Slebew', '2022-07-11 15:30:42', 'pic.png', ' Fakultas Agama Islam ', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `no_kartu` int(20) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `no_induk` int(15) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `no_kartu`, `nama`, `no_induk`, `prodi`, `kategori`, `status`, `date_add`) VALUES
(12, NULL, 'Rifqi', 11, 'Fakultas Teknik', 'Mahasiswa', '3', '0000-00-00 00:00:00'),
(18, NULL, 'gas', 1233, ' Fakultas Agama Islam ', 'Dosen', '', '0000-00-00 00:00:00'),
(19, NULL, 'gas', 1234, ' Fakultas Agama Islam ', 'Dosen', '', '0000-00-00 00:00:00'),
(20, 555, 'gasken', 2, ' Fakultas Agama Islam ', 'Dosen', '1', '0000-00-00 00:00:00'),
(69, 8010203, 'Thomas', 12, 'Fakultas Teknik', 'Mahasiswa', '2', '0000-00-00 00:00:00'),
(71, 5550, 'TU', 101, 'Fakultas Teknik', 'Staff TU', '1', '0000-00-00 00:00:00'),
(72, NULL, 'akuh', 1919, 'Fakultas Teknik', 'Staff TU', '', '0000-00-00 00:00:00'),
(73, NULL, 'aa', 2, 'Fakultas Teknik', 'Staff TU', 'non', '0000-00-00 00:00:00'),
(74, NULL, 'aku', 10, 'Fakultas Ekonomi', 'Dosen', 'Aktif', '0000-00-00 00:00:00'),
(75, NULL, 'a', 101, 'Fakultas Teknik', 'Dosen', 'Non-Aktif', '0000-00-00 00:00:00'),
(76, 123, 'Rifqi', 1919, 'Fakultas Teknik', 'Mahasiswa', '1', '0000-00-00 00:00:00'),
(77, 15, 'akuar', 1919, 'Fakultas Teknik', 'Dosen', '1', '2022-07-14 00:00:00'),
(89, 69, 'WWW', 698, 'Fakultas Teknik', 'Dosen', '2', '2022-07-22 20:16:46'),
(90, NULL, 'SSer', 31, 'Fakultas Teknik', 'Mahasiswa', '1', '2022-07-24 00:58:24'),
(91, 321, 'asem', 312, 'Fakultas Teknik', 'Mahasiswa', '1', '2022-07-24 01:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekap`
--

CREATE TABLE `tbl_rekap` (
  `id_rekap` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `foto_masuk` varchar(20) NOT NULL,
  `foto_keluar` varchar(20) NOT NULL,
  `durasi` int(5) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `nama_status`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tbl_masuk`
--
ALTER TABLE `tbl_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`),
  ADD UNIQUE KEY `no_kartu` (`no_kartu`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_masuk`
--
ALTER TABLE `tbl_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
