-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 11:25 AM
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
-- Table structure for table `datacovid`
--

CREATE TABLE `datacovid` (
  `no` int(2) NOT NULL,
  `id negara` varchar(10) NOT NULL,
  `Total Cases` int(11) NOT NULL,
  `New Cases` varchar(50) NOT NULL,
  `Total Deaths` int(11) NOT NULL,
  `New Deaths` varchar(11) NOT NULL,
  `Total Recovered` int(11) NOT NULL,
  `Active Cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacovid`
--

INSERT INTO `datacovid` (`no`, `id negara`, `Total Cases`, `New Cases`, `Total Deaths`, `New Deaths`, `Total Recovered`, `Active Cases`) VALUES
(1, 'USA', 1029878, '19522 ', 58640, '1843', 140138, 831100),
(2, 'Spain', 232128, '2706 ', 23822, '301', 123903, 84403),
(3, 'Italy', 201505, '2091 ', 27359, '382', 68941, 105205),
(4, 'France', 165911, '2638 ', 23660, '367', 46886, 95365),
(5, 'UK', 161145, '3996 ', 21678, '586', 0, 139123),
(6, 'Germany', 159431, '673 ', 6215, '89', 117400, 35816),
(7, 'Turkey', 114653, '2392 ', 2992, '92', 38809, 72852),
(8, 'Russia', 93558, '6411 ', 867, '73', 8456, 84235),
(9, 'Iran', 92584, '1112 ', 5877, '71', 72439, 14268),
(10, 'China', 82836, '6', 4633, '', 77555, 648);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacovid`
--
ALTER TABLE `datacovid`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
