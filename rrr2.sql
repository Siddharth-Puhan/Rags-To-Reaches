-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 06:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rrr2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `pswd`, `time`) VALUES
(1, 'Siddharth Puhan', 'sidpuhan@gmail.com', '9006028587', 'helloworld', '2022-08-19 06:51:59'),
(2, 'Rini Naskar', 'rininaskar1999@gmail.com', '8340114742', 'helloworld', '2022-08-19 06:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `pay_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`order_id`, `name`, `phone`, `addr`, `pay_mode`) VALUES
(13, 'Rini Naskar', '8340114742', 'Dwarka Grand', 'COD'),
(14, 'Sid', '8744563709', 'Mumbai, Maharashtra', 'COD'),
(15, 'Prithvi', '8977654789', 'BTM Layout', 'COD'),
(16, 'Sumanta ', '9835764561', 'Kolkata', 'COD'),
(17, 'Rini', '8378978900', 'Jamshedpur', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `cpswd` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phone`, `dob`, `gender`, `addr`, `pswd`, `cpswd`, `time`) VALUES
(1, 'Siddharth Puhan', 'sidpuhan@gmail.com', '9006028587', '2001-03-07', 'male', '504 Mahalakshmi Layout', 'helloworld', 'helloworld', '2022-08-09 16:54:57'),
(2, 'Rini Naskar', 'rini@gmail.com', '098765432', '2008-12-11', 'Female', 'Kumarswamy Layout', '123', '123', '2022-08-09 16:57:21'),
(4, 'Karan', 'karan@gmail.com', '9890889657', '2012-01-03', 'male', 'kumarswamy Layout', '12345', '12345', '2022-08-20 06:45:07'),
(5, 'Rohini', 'rohini@gmail.com', '9456832460', '2001-03-07', 'female', 'Guwahati', '12389', '12389', '2022-08-20 06:46:38'),
(6, 'Sunanda', 'sunandasadhukhan1@gmail.com', '7896545690', '2008-12-20', 'Female', 'Indiranagar', '34567', '34567', '2022-08-20 06:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(12, 'Bag 3', 799, 1),
(12, 'Bag 5', 659, 1),
(13, 'Product 3', 850, 1),
(13, 'Product 4', 999, 1),
(13, 'Product 2', 800, 1),
(14, 'Product 7', 659, 1),
(14, 'Product 6', 999, 1),
(14, 'Product 9', 1299, 1),
(15, 'Product 1', 700, 3),
(15, 'Product 3', 850, 1),
(15, 'Product 4', 999, 1),
(16, 'Product 2', 800, 1),
(16, 'Product 3', 850, 1),
(16, 'Product 4', 999, 1),
(17, 'Product 2', 800, 2),
(17, 'Product 3', 850, 1),
(17, 'Product 4', 999, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
