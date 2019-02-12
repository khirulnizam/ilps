-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 07:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkelphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `IDPelajar` int(11) NOT NULL,
  `NamaPel` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`IDPelajar`, `NamaPel`, `Alamat`) VALUES
(1, 'Khirulnizam Abd Rahman', 'JSK FSTM, KUIS'),
(2, 'Ali Ahmad', 'Bandar Seri Putra'),
(3, 'Ali Jinnah Al-Yamaani', 'Batu Tiga, Shah Alam'),
(4, 'Ali Abu', 'Politeknik Shah Alam'),
(10, 'kerul', 'abc'),
(11, 'kerul', 'abc'),
(12, 'Ahmad bin Ali', 'Puchong Selangor'),
(13, '$NamaPel', '$Alamat'),
(100, 'Arif Ahmad', ''),
(101, 'Anif Ali', 'Selandar');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `namapengguna` varchar(20) NOT NULL,
  `katalaluan` varchar(255) NOT NULL,
  `namapenuh` varchar(100) NOT NULL,
  `IDPelajar` int(11) NOT NULL,
  `userlevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `namapengguna`, `katalaluan`, `namapenuh`, `IDPelajar`, `userlevel`) VALUES
(0, 'anif', 'e10adc3949ba59abbe56e057f20f883e', '', 101, 'pelajar'),
(17, 'ilp', '27e335e8abda02af7b2d55f77a771469', 'ILP Selandar', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`IDPelajar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`namapengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `IDPelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
