-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 05:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(33) NOT NULL,
  `receiver_name` varchar(33) NOT NULL,
  `message_text` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `receiver_name`, `message_text`, `date_time`) VALUES
(1, 'asd', 'asd', 'asd', '2019-11-28 05:20:06'),
(2, 'asd', 'asdasdasd', '', '2019-11-28 05:20:25'),
(3, 'asd', 'asd', 'asd', '2019-11-28 05:20:37'),
(4, 'asd', 'asd', 'asd123123', '2019-11-28 05:20:48'),
(5, 'asd', 'asd123123', 'asd123123', '2019-11-28 05:21:00'),
(6, 'asd', 'khirt', 'hoy', '2019-11-28 05:21:16'),
(7, 'zxc', 'asd', 'zxc', '2019-11-28 05:23:40'),
(8, 'asd', 'asd', 'asd', '2019-11-28 05:24:01'),
(9, 'asd', 'zxc', 'asd', '2019-11-28 05:24:20'),
(10, 'asd', 'zxc', 'asd', '2019-11-28 05:26:51'),
(11, 'zxc', 'asd', '123123123123', '2019-11-28 05:30:59'),
(12, 'asd', 'zxc', 'asd', '2019-11-28 05:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `first_name` varchar(33) NOT NULL,
  `last_name` varchar(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'asd', 'asd', 'asd', 'asd'),
(2, 'zxc', 'zxc', 'zxc', 'zxc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `email`) VALUES
(1, 'asd', 1, 'asd'),
(2, 'asd', 0, 'asd'),
(3, 'asd', 0, 'asd'),
(4, 'asd', 123123, 'asd'),
(5, 'zxc', 0, 'zxc'),
(6, 'zxc', 0, 'zxc'),
(7, 'khirt', 1, 'asd'),
(8, 'khirt', 123, 'asd'),
(9, 'asd', 123, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
