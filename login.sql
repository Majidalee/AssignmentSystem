-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 05:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `batch` varchar(5) NOT NULL DEFAULT '2k16',
  `assignment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`, `regno`, `batch`, `assignment`) VALUES
(7, '2k16-it-196', '$2y$10$vR8uqL7jkhvKhfN40Ou65.LpMn3wb5/yh/HcbqzDJPQxG9gPipoYq', '2019-11-05 23:03:35', '', '', '2k16', 'hello world'),
(8, '2k16-it-224', '$2y$10$3/ZK/4c0MNwKQq89RqejOOL7FUOum.fwou9qW8yq4Iz5/T9TNJ922', '2019-11-05 23:11:35', '', '', '2k16', 'do this then this'),
(9, '2k16-it-191', '$2y$10$F3VCnzMfKh1ydgFIXUXZFuv19ZGoyUFMvMXfvqAu2bhaWqAY4IICe', '2019-11-06 18:55:50', '', '', '2k16', 'ENter assignment field');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
