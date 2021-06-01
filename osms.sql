-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 05:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtechnician`
--

CREATE TABLE `addtechnician` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_phone` int(50) NOT NULL,
  `emp_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'rahul@gamil.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `assests`
--

CREATE TABLE `assests` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `available` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `original_cost_each` int(100) NOT NULL,
  `selling_cost_each` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `available` int(100) NOT NULL,
  `selling_cost_each` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `date_of_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest`
--

CREATE TABLE `submitrequest` (
  `request_id` int(11) NOT NULL,
  `request_info` varchar(50) NOT NULL,
  `request_des` varchar(100) NOT NULL,
  `request_name` varchar(50) NOT NULL,
  `request_add1` varchar(50) NOT NULL,
  `request_add2` varchar(50) NOT NULL,
  `request_city` varchar(50) NOT NULL,
  `request_state` varchar(50) NOT NULL,
  `request_zip` int(10) NOT NULL,
  `request_email` varchar(50) NOT NULL,
  `request_mobile` varchar(50) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitrequest`
--

INSERT INTO `submitrequest` (`request_id`, `request_info`, `request_des`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `request_date`) VALUES
(1, 'aws server vanished', 'no idea', ' pankaj gandu', '42 anuradh society dehgam', 'gandhinagar', 'dehgam', 'gujarat', 382305, 'pankajgandu420@gmail.com', '8200447408', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `thumb`
--

CREATE TABLE `thumb` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thumb`
--

INSERT INTO `thumb` (`r_id`, `r_name`, `r_email`, `r_password`) VALUES
(1, 'PANKAJ GANDU', 'pankajgandu420@gmail.com', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `workassign`
--

CREATE TABLE `workassign` (
  `request_id` int(11) NOT NULL,
  `request_name` varchar(50) NOT NULL,
  `request_info` longtext NOT NULL,
  `request_des` longtext NOT NULL,
  `request_add1` varchar(100) NOT NULL,
  `request_add2` varchar(100) NOT NULL,
  `request_city` varchar(100) NOT NULL,
  `request_state` varchar(100) NOT NULL,
  `request_zip` int(10) NOT NULL,
  `request_email` varchar(100) NOT NULL,
  `request_phone` int(10) NOT NULL,
  `request_assigntechnician` varchar(100) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtechnician`
--
ALTER TABLE `addtechnician`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assests`
--
ALTER TABLE `assests`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitrequest`
--
ALTER TABLE `submitrequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `thumb`
--
ALTER TABLE `thumb`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `workassign`
--
ALTER TABLE `workassign`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtechnician`
--
ALTER TABLE `addtechnician`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assests`
--
ALTER TABLE `assests`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submitrequest`
--
ALTER TABLE `submitrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thumb`
--
ALTER TABLE `thumb`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workassign`
--
ALTER TABLE `workassign`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
