-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 01:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(5) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `vehicleno` varchar(255) NOT NULL,
  `vmake` varchar(255) NOT NULL,
  `vmode` varchar(255) NOT NULL,
  `date_calibration` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `horsepower_detail`
--

CREATE TABLE `horsepower_detail` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `rmark` varchar(255) NOT NULL,
  `rbn` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cidentification` varchar(255) NOT NULL,
  `vmake` varchar(255) NOT NULL,
  `vmodel` varchar(255) NOT NULL,
  `vclass` varchar(255) NOT NULL,
  `vtype` varchar(255) NOT NULL,
  `vcolour` varchar(255) NOT NULL,
  `chassisnumber` varchar(255) NOT NULL,
  `enginenumber` varchar(255) NOT NULL,
  `enginecapacity` varchar(255) NOT NULL,
  `installedby` varchar(255) NOT NULL,
  `invnumber` varchar(255) NOT NULL,
  `amountnumber` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `mspeed` varchar(255) NOT NULL,
  `valid` int(2) NOT NULL DEFAULT 0,
  `request` int(2) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `horsepower_image`
--

CREATE TABLE `horsepower_image` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sendername` varchar(255) NOT NULL,
  `sendernumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `horsepower_note`
--

CREATE TABLE `horsepower_note` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `note_detail` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_detail`
--

CREATE TABLE `request_detail` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `reqstatus` int(2) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `speedlimiter`
--

CREATE TABLE `speedlimiter` (
  `id` int(11) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `billreference` varchar(255) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `track_log_user`
--

CREATE TABLE `track_log_user` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `login` varchar(255) NOT NULL,
  `logout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertest`
--

CREATE TABLE `usertest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertest`
--

INSERT INTO `usertest` (`id`, `name`, `email`, `password`, `usertype`, `created_at`, `verified`, `deleted`, `lastlogin`) VALUES
(12, 'admin_admin', 'admin_admin@gmail.com', '$2y$10$.F4AjOxPd.6lKj95.eqvweMDnu63lZtSLo0hQ5Y3BxoApWZNjkH7a', 'Admin', '2020-11-19 07:33:08', 0, 1, '2022-04-12 21:16:40'),
(13, 'vidurath Auchraje', 'avidurath@gmail.com', '$2y$10$HyppmllQLxCApMqxbNk0UOwleqPy.dKIeCkJGFGw/11uz4zxIXD9e', 'Employee', '2020-11-26 06:56:34', 0, 1, '2022-04-12 22:33:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horsepower_detail`
--
ALTER TABLE `horsepower_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horsepower_image`
--
ALTER TABLE `horsepower_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horsepower_note`
--
ALTER TABLE `horsepower_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_detail`
--
ALTER TABLE `request_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speedlimiter`
--
ALTER TABLE `speedlimiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track_log_user`
--
ALTER TABLE `track_log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horsepower_detail`
--
ALTER TABLE `horsepower_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horsepower_image`
--
ALTER TABLE `horsepower_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horsepower_note`
--
ALTER TABLE `horsepower_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_detail`
--
ALTER TABLE `request_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speedlimiter`
--
ALTER TABLE `speedlimiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track_log_user`
--
ALTER TABLE `track_log_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
