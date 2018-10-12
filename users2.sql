-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 02:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vijana`
--

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `userId` int(12) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `pick_file` varchar(100) NOT NULL DEFAULT 'default.png',
  `password` varchar(32) NOT NULL,
  `lastaccessdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `usertype` int(1) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`userId`, `full_name`, `email`, `phone_number`, `username`, `pick_file`, `password`, `lastaccessdate`, `usertype`, `status`) VALUES
(1, 'George', 'jiooo@gmail.com', 921890324, 'jorges', 'default.png', '900150983cd24fb0d6963f7d28e17f72', '2017-11-13 19:20:09', 1, 'online'),
(2, 'ABC-02-OOO1', 'george.muchiri@strathmore.edu', 721890324, 'admin@bluecloud.space', 'default.png', '123', '2017-11-15 05:51:38', 1, 'offline'),
(3, 'Muchiri', 'georgetttt@bluecloud.space', 9776, 'George', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-02-13 07:20:21', 2, 'offline'),
(4, 'Maxin', 'mich@gmail.com', 716484610, 'Maxin', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-01 16:39:18', 1, 'offline'),
(5, 'Muchiri', 'georgetttt@bluecloud.space', 2147483647, '12345', 'susc_Muchiri.png', '827ccb0eea8a706c4c34a16891f84e7b', '2017-11-16 15:35:56', 2, 'offline'),
(6, 'ABC-06-OOO1', 'chris@gmail.com', 721890324, 'kibxz', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-02-16 12:45:35', 2, 'offline'),
(10, 'Elizabeth', 'george@briyoconsultants.co.ke', 2147483647, '', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '2018-03-28 13:07:44', 2, 'offline'),
(11, 'Tiffany Nyambura', 'tevingeorge@gmail.com', 2147483647, 'Admin', 'default.png', '14e1b600b1fd579f47433b88e8d85291', '2018-04-02 13:26:53', 1, 'offline'),
(12, 'Tiffany Nyambura', '', 0, 'Nyambura', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-08 17:53:03', 0, 'offline'),
(13, 'Jorges', '', 721890324, 'Jorges', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-01 15:48:32', 2, 'offline'),
(14, 'Jorges', '', 721890324, 'Jorges', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-08 18:04:05', 2, 'offline'),
(15, 'Maxin', 'george@briyoconsultants.co.ke', 921890324, 'jorgine', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-20 13:50:29', 2, 'offline'),
(16, 'Charity', 'admin@yahoo.com', 254548044, 'CG', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-01 16:49:39', 2, 'offline'),
(17, '', '', 0, 'Name', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '2018-10-04 10:42:32', 2, 'offline'),
(18, '', 'georgetmuchiri@yahoo.com', 0, '', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-04 13:00:39', 2, 'offline'),
(19, 'Jorges M', 'georgetmuchiri@yahoo.com', 254, 'Muchiri', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-05 09:45:37', 2, 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
