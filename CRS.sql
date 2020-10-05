-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2020 at 08:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CRS`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `did` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`did`, `name`, `size`, `price`, `path`) VALUES
('MC', 'Shirt', 'L', '2500', 'mc1.jpg'),
('MC', 'Shirt', 'L', '2300', 'mc2.jpg'),
('MC', 'Shirt', 'L', '3100', 'mc3.jpg'),
('MC', 'Shirt', 'L', '3000', 'mc4.jpg'),
('MC', 'Shirt', 'L', '3200', 'mc5.jpg'),
('MC', 'Shirt', 'L', '3800', 'mc6.jpeg'),
('WC', 'Sleeve', 'L', '2000', 'wc1.jpg'),
('WC', 'Sleeve', 'L', '2300', 'wc2.jpg'),
('WC', 'Sleeve', 'L', '2500', 'wc3.jpg'),
('WC', 'Sleeve', 'L', '2300', 'wc4.jpg'),
('WC', 'Sleeve', 'L', '2000', 'wc5.jpg'),
('WC', 'Sleeve', 'L', '2300', 'wc6.jpg'),
('KC', 'Frock', 'S', '800', 'kc1.jpg'),
('KC', 'Frock', 'S', '1100', 'kc2.jpg'),
('KC', 'Frock', 'S', '1000', 'kc3.jpg'),
('KC', 'Western', 'S', '2400', 'kc4.jpg'),
('KC', 'Western', 'S', '2400', 'kc5.jpg'),
('KC', 'Western', 'S', '3000', 'kc6.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
