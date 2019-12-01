-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 11:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tops`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `postdegree` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `password`, `email`, `gender`, `degree`, `postdegree`, `hobby`) VALUES
(4, 'Jalpa12356', 'fcea920f7412b5da7be0cf42b8c937', 'jalpa@gmail.com', 'Female', 'BE', 'MCA', 'Reading,Writing,drawing');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(50) NOT NULL,
  `img_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `img_name`) VALUES
(4, 'uplods/Sheikh-Zayed-Mosque.jpg'),
(9, 'uplods/9.jpg'),
(11, 'uplods/351322.jpg'),
(13, 'uplods/361043952036b563129f11809cfffd0d.jpg'),
(14, 'uplods/3d-nature-wallpaper-wallpaper-nature-full-size-for-computer-free-download-nature-wallpaper-3d-nature-wallpaper-for-pc-free-download-3d-nature-wallpaper-for-android-mobile.jpg'),
(15, 'uplods/Dubai-Miracle-Garden.jpg'),
(17, 'uplods/195991.jpg'),
(18, 'uplods/15.jpg'),
(19, 'uplods/21.jpg'),
(21, 'uplods/22.jpg'),
(22, 'uplods/17.jpg'),
(23, 'uplods/2.jpg'),
(24, 'uplods/19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `password`) VALUES
(3, 'owner@tecdiary.com', '12345678'),
(4, 'owner@tecdiary.com', '12345678'),
(5, 'owner@tecdiary.com', '12345678'),
(6, 'owner@tecdiary.com', '12345678'),
(7, 'owner@tecdiary.com', '12345678'),
(8, 'jalpamehta', 'jalpa'),
(9, 'jalpamehta', 'jalpa'),
(10, 'jalpamehta', 'jalpa'),
(11, 'jalpamehta', 'jalpa'),
(12, 'jalpamehta', 'jalpa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `uname`, `address`, `gender`, `city`, `password`, `email`, `mobile`) VALUES
(16, 2, 'jalpa.mehta2', 'gujarat', 'Female', 'Ahmedabad', '123456', 'jk@gmail.com', 2147483647),
(24, 2, 'abc', 'ahmmedabad', 'Female', 'Ahmedabad', '123456', 'abc@gmail.com', 1234567890),
(25, 1, 'admin', 'surat,gujarat..', 'Male', 'Surat', '1234567', 'admin@gmail.com', 987654321),
(26, 3, 'owner', 'baroda,gujarat', 'Male', 'Baroda', '123456', 'owner@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
