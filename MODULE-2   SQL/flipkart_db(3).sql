-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 09:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipkart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `flip_category`
--

CREATE TABLE `flip_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flip_category`
--

INSERT INTO `flip_category` (`category_id`, `name`, `added_date`) VALUES
(1, 'kids items', '09/01/2023'),
(2, 'Mens items', '09/01/2023'),
(3, 'electronics', '07/01/2023');

-- --------------------------------------------------------

--
-- Table structure for table `flip_customers`
--

CREATE TABLE `flip_customers` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flip_employee`
--

CREATE TABLE `flip_employee` (
  `emplid` int(11) NOT NULL,
  `empname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flip_employee`
--

INSERT INTO `flip_employee` (`emplid`, `empname`, `email`, `address`, `phone`, `salary`) VALUES
(3, 'yash', 'yash@gmail.com', 'rajkot', 91212122541, 45565),
(4, 'yash', 'yash007@gmail.com', 'rajkot', 9154895658, 545121);

-- --------------------------------------------------------

--
-- Table structure for table `flip_products`
--

CREATE TABLE `flip_products` (
  `product_id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `offer_price` float DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `product_decriptions` text DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flip_subcategory`
--

CREATE TABLE `flip_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategoryname` varchar(255) DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `country_id`, `state_id`, `city_name`) VALUES
(1, 1, 1, 'Rajkot'),
(2, 1, 1, 'Ahemdabad'),
(3, 1, 1, 'Surat'),
(4, 1, 1, 'Gandhinagar'),
(5, 1, 2, 'Mirzapur'),
(6, 1, 2, 'Mathura'),
(7, 2, 3, 'navada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'india'),
(2, 'usa'),
(3, 'srilanka'),
(4, 'australia'),
(5, 'canada'),
(6, 'united kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 2, 'California'),
(4, 1, 'Mahrastra');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `username`, `password`, `mobile`, `salary`, `country_id`, `state_id`, `city_id`) VALUES
(1, 'dixit', 'd12121', 9121212121, 85000, 1, 1, 1),
(2, 'yash', 'yash3215', 988658789, 85600, 1, 2, 5),
(3, 'hiten', 'jh545454', 9121212121, 87600, 2, 3, 7),
(4, 'jigna', 'j92121', 988658789, 88600, 1, 1, 3),
(5, 'nirav', 'n3221', 9121212121, 85456, 1, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flip_category`
--
ALTER TABLE `flip_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `flip_customers`
--
ALTER TABLE `flip_customers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `flip_employee`
--
ALTER TABLE `flip_employee`
  ADD PRIMARY KEY (`emplid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `flip_products`
--
ALTER TABLE `flip_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `flip_subcategory`
--
ALTER TABLE `flip_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flip_category`
--
ALTER TABLE `flip_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flip_customers`
--
ALTER TABLE `flip_customers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flip_employee`
--
ALTER TABLE `flip_employee`
  MODIFY `emplid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flip_products`
--
ALTER TABLE `flip_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flip_subcategory`
--
ALTER TABLE `flip_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
