-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 12:06 PM
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
(5, 'sleeveless shirt', 'men/women', 5, 39, '2023-11-07 09:02:31'),
(6, 'blouse', 'women', 22, 25, '2023-11-07 09:04:55'),
(8, 'sweater', 'men/women', 12, 25, '2023-11-25 09:12:45'),
(9, 'cap', 'women', 12, 24, '2023-11-25 09:28:50'),
(10, 'henley shirt', 'men', 12, 35, '2023-11-28 05:28:02'),
(11, 'winter cap', 'men/women', 21, 30, '2023-11-28 05:32:53');

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
(11, 'hoodie', 'men/women', 12, 30, '2023-11-07 10:58:11'),
(12, 'sweater', 'men/women', 12, 25, '2023-11-25 09:12:45'),
(13, 'cap', 'women', 12, 24, '2023-11-25 09:28:50'),
(14, 'henley shirt', 'men', 12, 35, '2023-11-28 05:28:02'),
(15, 'winter cap', 'men/women', 21, 30, '2023-11-28 05:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sellunit` int(100) NOT NULL,
  `totalprice` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `sellunit`, `totalprice`, `productid`, `created_at`) VALUES
(6, 'polo-shirt', 10, 310, 2, '2023-11-28 06:42:12.645538'),
(7, 'sleeveless shirt', 5, 195, 5, '2023-11-28 06:42:37.179385'),
(8, 'sleeveless shirt', 2, 78, 5, '2023-11-28 07:38:27.309635'),
(9, 'sleeveless shirt', 2, 78, 5, '2023-11-28 08:33:25.387043'),
(10, 'sleeveless shirt', 1, 39, 5, '2023-11-28 08:34:03.545285');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'ela', '202cb962ac59075b964b07152d234b70', 'Ela'),
(4, 'elias', '202cb962ac59075b964b07152d234b70', 'elias'),
(5, 'joy', 'c2c8e798aecbc26d86e4805114b03c51', 'joy'),
(6, 'bijoy', '605ab26297d84bf9ff5344870dd8a85a', 'bijoy'),
(7, 'amit', '0cb1eb413b8f7cee17701a37a1d74dc3', 'amit');

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
