-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:33 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `maba`
--

CREATE TABLE `maba` (
  `tgl` date NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmptlhr` varchar(20) NOT NULL,
  `tgllhr` char(11) NOT NULL,
  `noregakta` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwn` char(3) NOT NULL,
  `negara` varchar(20) DEFAULT NULL,
  `kebkhus` varchar(20) NOT NULL,
  `alamatjl` varchar(40) NOT NULL,
  `rt` char(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `dsn` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kdpos` char(5) NOT NULL,
  `lintang` varchar(20) DEFAULT NULL,
  `bujur` varchar(20) DEFAULT NULL,
  `domisili` varchar(20) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `nokks` varchar(6) DEFAULT NULL,
  `anke` char(2) NOT NULL,
  `penerima` varchar(5) NOT NULL,
  `nopenerima` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maba`
--

INSERT INTO `maba` (`tgl`, `nama`, `jk`, `nisn`, `nik`, `tmptlhr`, `tgllhr`, `noregakta`, `agama`, `kwn`, `negara`, `kebkhus`, `alamatjl`, `rt`, `rw`, `dsn`, `desa`, `kec`, `kdpos`, `lintang`, `bujur`, `domisili`, `transport`, `nokks`, `anke`, `penerima`, `nopenerima`) VALUES
('2020-04-16', 'baitun nadhiroh', 'pr', '111675', '90009', 'gresik', '11-12-2000', '12', 'islam', 'wni', '', 'tidak', 'Cendana', '6', '7', 'Pandu', 'Tambak Beras', 'Cerme', '61171', '', '', 'sama ortu', 'jalan kaki', '', '2', 'ya', ''),
('2020-04-14', 'Haqul Yakin', 'lk', '111679', '11311', 'Surabaya', '13-03-1999', '12', 'islam', 'wna', 'Belanda', 'tidak', 'Si Jalak Harupat Blok B', '3', '1', 'Karang Rejo', 'Karang Rejo', 'Benjeng', '61172', '', '', 'sama ortu', 'jalan kaki', '99902', '2', 'tidak', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
