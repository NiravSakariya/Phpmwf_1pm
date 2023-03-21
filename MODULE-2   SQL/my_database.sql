-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 01:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CNM` int(11) DEFAULT NULL,
  `CNAME` varchar(20) DEFAULT NULL,
  `CITY` varchar(20) DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CNM`, `CNAME`, `CITY`, `RATING`, `SNO`) VALUES
(201, 'KRISHTINA', 'MUMBAI', 200, 1001),
(202, 'MAITRI', 'RAJKOT', 400, 1004),
(204, 'NIRAV', 'RAJKOT', 400, 1004),
(203, 'ISHA', 'DELHI', 200, 1002),
(206, 'NIKITA', 'AHMEDABAD', 300, 1002),
(208, 'AKASH', 'SURAT', 100, 1008);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ONM` int(11) DEFAULT NULL,
  `AMT` int(11) DEFAULT NULL,
  `ODE` date DEFAULT NULL,
  `CNM` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ONM`, `AMT`, `ODE`, `CNM`, `SNO`) VALUES
(3001, 30, '2020-10-01', 201, 1001),
(3002, 4000, '2020-10-02', 202, 1004),
(3004, 4000, '2020-10-02', 202, 1004),
(3003, 1800, '2020-10-04', 204, 1002),
(3005, 501, '2020-10-05', 206, 1003),
(3006, 6000, '2020-10-06', 203, 1002),
(3008, 2000, '2020-10-08', 208, 1008),
(3009, 3000, '2020-10-08', 206, 1008),
(3010, 1000, '2020-10-08', 206, 1008),
(3012, 400, '2020-10-20', 202, 1006);

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `SNO` int(4) DEFAULT NULL,
  `SNAME` varchar(10) DEFAULT NULL,
  `CITY` varchar(20) DEFAULT NULL,
  `COMM` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_person`
--

INSERT INTO `sales_person` (`SNO`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'MAHER', 'ANAND', '0.12'),
(1002, 'HITEN', 'RAJKOT', '0.13'),
(1003, 'DHRUV', 'SURAT', '0.10'),
(1004, 'NITESH', 'RAJKOT', '0.11'),
(1008, 'DENISH', 'VADALA', '0.15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
