-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 02:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `blah`
--

CREATE TABLE `blah` (
  `id` int(11) NOT NULL,
  `first` varchar(10) NOT NULL,
  `last` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `num_songs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blah`
--

INSERT INTO `blah` (`id`, `first`, `last`, `username`, `email`, `pass`, `num_songs`) VALUES
(1, 'b', 'b', '', '', '', 0),
(2, 'baraa', 'nassar', '', '', '', 0),
(3, 'baraa', 'nassar', '', '', '', 0),
(4, 'm', 'm', '', '', '', 0),
(5, 'test', 'baraa', 'testing', '', '', 0),
(6, 'a', '', '', '', '', 0),
(7, 'a', 'a', 'a', '', '', 0),
(8, 'a', 'a', 'a', 'email', 'a', 0),
(9, 'a', 'a', 'a', 'email', 'a', 2),
(10, 'x', 'x', 'x', 'x', 'x', 0),
(11, 'x', 'x', 'x', 'x', '$2y$10$laRt.M78r.99U', 0),
(12, 'x', 'x', 'x', 'x', '$2y$10$v0NGuYgvcfG8G', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blah`
--
ALTER TABLE `blah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blah`
--
ALTER TABLE `blah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
