-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 06:49 AM
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
-- Database: `euy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blj`
--

CREATE TABLE `blj` (
  `angkatan` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `wa` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kahima`
--

CREATE TABLE `kahima` (
  `nama` varchar(30) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `wa` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL,
  `nama2` varchar(30) NOT NULL,
  `npm2` varchar(30) NOT NULL,
  `ttl2` varchar(50) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `wa2` varchar(12) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `syarat2` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blj`
--
ALTER TABLE `blj`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `kahima`
--
ALTER TABLE `kahima`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `npm2` (`npm2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
