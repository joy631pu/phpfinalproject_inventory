-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comoxfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `unit` int(100) NOT NULL,
  `unitprice` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `des`, `unit`, `unitprice`, `created_at`) VALUES
(2, 'polo-shirt', 'men/women', 22, 30, '2023-11-07 08:50:52'),
(4, 'jean jacket', 'men', 10, 50, '2023-11-07 09:01:48'),
(5, 'sleeveless shirt', 'men/women', 15, 35, '2023-11-07 09:02:31'),
(6, 'blouse', 'women', 22, 25, '2023-11-07 09:04:55'),
(7, 'hoodie', 'men/women', 12, 25, '2023-11-07 10:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `unit` int(100) NOT NULL,
  `unitprice` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `des`, `unit`, `unitprice`, `created_at`) VALUES
(5, 't-shirt', 'men', 12, 25, '2023-11-07 08:50:36'),
(6, 'polo-shirt', 'men/women', 22, 30, '2023-11-07 08:50:52'),
(7, 't-shirt', 'men/women', 20, 40, '2023-11-07 09:01:11'),
(8, 'jean jacket', 'men', 10, 50, '2023-11-07 09:01:48'),
(9, 'sleeveless shirt', 'men/women', 15, 35, '2023-11-07 09:02:31'),
(10, 'blouse', 'women', 22, 25, '2023-11-07 09:04:55'),
(11, 'hoodie', 'men/women', 12, 30, '2023-11-07 10:58:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
