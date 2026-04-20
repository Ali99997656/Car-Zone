-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 أبريل 2026 الساعة 05:21
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car zone`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `fuel` varchar(50) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cars`
--

INSERT INTO `cars` (`id`, `brand`, `type`, `price`, `transmission`, `fuel`, `image_url`) VALUES
(1, 'Audi', 'SUV', 250, 'Automat', 'PB 95', 'audi-q8.webp'),
(2, 'Jeep', 'SUV', 250, 'Automat', 'PB 95', 'jeep.webp'),
(3, 'Mercedes', 'SPORT', 250, 'Automat', 'PB 95', 'marcedes-gt.webp'),
(4, 'Audi', 'SUV', 250, 'Automat', 'PB 95', 'Black-audi.webp'),
(5, 'Honda', 'Sedan', 250, 'Automat', 'PB 95', 'hybrid-car.webp'),
(6, 'Mercedes', 'SUV', 250, 'Automat', 'PB 95', 'marcedec-jeep.png'),
(7, 'Mazda', 'Sedan', 250, 'Automat', 'PB 95', 'mazda.webp'),
(8, 'Mercedes', 'SUV', 250, 'Automat', 'PB 95', 'mercedes_jeep2.webp'),
(9, 'Mercedes', 'SPORT', 250, 'Automat', 'PB 95', 'Sports-Car.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
