-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2017 at 08:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoprating`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Ggg', 'Cc', 'vcvc', '$2y$10$nsCyOssoVP5CNANOTSEuFuTApHsz6hHVJeCFg9K5cWp'),
(2, 'J', 'H', 'fg', '$2y$10$uUNO5rsjmAxJGqo/GmCv9OY9bCl.WHAQzmOuxqlrcwY'),
(8, 'Bvc', 'Idwjijrw', 'fdf@gmail.com', '$2y$10$tL7TOuV4daufhecuhAFlJ.t53ilucNHtaVjObLMsDzl'),
(3, 'Mmon', 'Kfwcpqk', 'reg@gmail.com', '$2y$10$wSHUDDT/HzIDcQHyItEEQeVD.vB5KgFytG2wSvsyhb8'),
(4, 'Mm', 'Mm', 'bbv@gmail.com', '$2y$10$PtOoqdpCG2BW0J07k5B3ku/juaOmlfFLt/V7HnWQckc'),
(5, 'Nb', 'Nb', 'bv', '$2y$10$Hm1mHG.ztsruEeT7fEqmyu8TYkdfoG60CLnhU0HMAhW'),
(6, 'Mn', 'Ooo', 'ch@gmail.com', '$2y$10$M0QrLOcd.A6GGHsWU7/Na.rY2GP4UgX3hsEc1/B7EDX'),
(7, 'Vv', 'Vv', 'cjw@gmail.com', '$2y$10$d5HrhcPzW2FY2NG4y5BiY./DPto.mjWN4ztmPQB/EPb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
