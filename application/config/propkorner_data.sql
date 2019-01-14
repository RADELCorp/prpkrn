-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 07:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propkorner_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `prop_id` varchar(20) NOT NULL,
  `prop_key` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`prop_id`, `prop_key`, `value`) VALUES
('5c36fa4a7ed6b', '', ''),
('5c36fad2e92e7', '', ''),
('5c36fe1c69092', 'prop_id', '5c36fe1c69092'),
('5c36fe59e77a7', 'prop_id', '5c36fe59e77a7'),
('5c36fed9096dd', 'prop_id', '5c36fed9096dd'),
('5c36ff639bad1', 'img', 'nnng'),
('5c36ff639bad1', 'prop_id', '5c36ff639bad1'),
('5c36ff639bad1', 'prop_name', 'Test Value'),
('5c36ff8fe9a4b', 'prop_id', '5c36ff8fe9a4b'),
('5c36ff8fe9a4b', 'prop_img', 'nnng'),
('5c36ff8fe9a4b', 'prop_name', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `listings_meta`
--

CREATE TABLE `listings_meta` (
  `prop_id` varchar(20) NOT NULL,
  `prop_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings_meta`
--

INSERT INTO `listings_meta` (`prop_id`, `prop_name`) VALUES
('5c36ff8fe9a4b', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `sudo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_email`, `user_password`, `user_full_name`, `profile_pic`, `hash`, `sudo`) VALUES
(3, 'ashwinncj@gmail.com', 'e8ec18b980ea58cf363d3b49064faf19', 'Ashwin Kumar C', '/assemblepoint/ap/assets/img/profileimg/303d8f2c175a3171b282b3700a4c89de.jpg', '330ec1bc2564a5f1a6ab77d668efad4a', 1),
(11, 'ashwin@radelcorp.in', 'e8ec18b980ea58cf363d3b49064faf19', 'Ashwin Kumar', '', '03230f5a8b11462cf79596188e84584d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`prop_id`,`prop_key`);

--
-- Indexes for table `listings_meta`
--
ALTER TABLE `listings_meta`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
