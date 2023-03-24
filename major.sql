-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 07:33 PM
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
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `location` text NOT NULL,
  `mac` varchar(500) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`location`, `mac`, `status`) VALUES
('k1', 'a2:34:2a:61', 'up');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query`) VALUES
(' hloo'),
(' hloo\r\n\r\nbuugs here .....please solve them');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` text NOT NULL,
  `id` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `id`, `email`, `password`) VALUES
('Prasanth', 's170073', 'kornuprash@gmail.com', '$2y$10$coP9XenKHzSV/AY7c0lZHuiHj/ePaV/NQy7oq.UvZij5ovCwj5Ute'),
('itinfra', 'itinfra', 'itinfra@gmail.com', '$2y$10$29J7NyG4CZb0BlWQdNX47eyEdgl9A5FU.1JfGsikM5W6rD2o3vU6W'),
('admin', 'admin', 'admin@gmail.com', '$2y$10$Rcj79cu9la2Z/98XhDuzcekJmgfM5KvaheiQcROizukjl7ypJ4pLa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
