-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 03:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Table structure for table `cat_off`
--

CREATE TABLE `cat_off` (
  `id_category` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_off`
--

INSERT INTO `cat_off` (`id_category`, `cat_name`) VALUES
(1, 'Crime'),
(2, 'Misdemeanour'),
(3, 'Drugs'),
(4, 'Contraventions'),
(5, 'Other Occurrences');

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

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `customer_name`, `vehicleno`, `vmake`, `vmode`, `date_calibration`, `createdAt`) VALUES
(1, 'John Smith', '323233', 'bjbbjb', 'nlnlnl', 'lmkkm', '2022-01-21 10:10:49'),
(2, 'John Smith', '323233', 'bjbbjb', 'nlnlnl', 'lmkkm', '2022-01-21 10:10:57');

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
  `vehiclenumber` varchar(255) NOT NULL,
  `invnumber` varchar(255) NOT NULL,
  `amountnumber` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `valid` int(2) NOT NULL DEFAULT 0,
  `request` int(2) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horsepower_detail`
--

INSERT INTO `horsepower_detail` (`id`, `uuid`, `ctype`, `serialnumber`, `rmark`, `rbn`, `cname`, `caddress`, `cidentification`, `vmake`, `vmodel`, `vclass`, `vtype`, `vcolour`, `chassisnumber`, `enginenumber`, `enginecapacity`, `installedby`, `vehiclenumber`, `invnumber`, `amountnumber`, `qrcode`, `valid`, `request`, `createdAt`) VALUES
(1, '8e84c592-ac03-421e-8691-64487a73091d', 'First Installation', '12345', '1234 BZ 04', '324234', 'Vidu test', 'sdasass sd asd a asd asd asd asd asd asd asd asd', '4232423', 'Nissan', 'Atlas', 'GOOD VEHICLE', 'TRUCK', 'Black', '42342423432', '324233234', '342342', 'Adil', '32432233', '', '', '', 0, 0, '2022-03-31 11:14:37'),
(2, '156b35c4-80df-4420-8438-2d2b20d70765', 'Transfer Of Vehicle', '12345', '55555', '55555', 'Biskrem Biskrem', 'dasdasd asdad asdasretrete ret erter', '54545', 'plplp', 'plplpl', 'plpplp', 'lplppl', 'plplp', '888888', '99999', '44444', 'hkjkiukh ouhhu', '789 hh 4444', '', '', '', 0, 0, '2022-04-01 07:36:32'),
(5, 'ad97b3f5-98a0-4ab1-b3e5-102ce2206a57', 'First Installation', '44444', '453535', '54353', 'Yeastar Startouch', 'da sdasda adasd asdasd asd as dasd ad adasdas dsda', '34343434343', 'fgdgfdggd', 'gdfgdfg', 'gdfgdf', 'gdfgdfg', 'gdgdfgdf', '3434334', '45445', '54454', 'Adil', '4535 gh 4344', '3432', '43242', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=ad97b3f5-98a0-4ab1-b3e5-102ce2206a57', 0, 0, '2022-04-01 08:42:22');

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

--
-- Dumping data for table `horsepower_image`
--

INSERT INTO `horsepower_image` (`id`, `uuid`, `photo`, `title`, `sendername`, `sendernumber`) VALUES
(1, '8e84c592-ac03-421e-8691-64487a73091d', 'alberta-drivers-licence-small.jpg', 'nic front', '', ''),
(2, '8e84c592-ac03-421e-8691-64487a73091d', 'horsepowersample.jpeg', 'Horsepower', '', ''),
(10, '156b35c4-80df-4420-8438-2d2b20d70765', 'prod1.png', 'fasfafasafasf safaf', '', ''),
(11, '156b35c4-80df-4420-8438-2d2b20d70765', 'prod24.png', 'fdhdgdfh', '', '');

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

--
-- Dumping data for table `horsepower_note`
--

INSERT INTO `horsepower_note` (`id`, `uuid`, `uname`, `note_detail`, `createdAt`) VALUES
(1, '8e84c592-ac03-421e-8691-64487a73091d', 'vid_admin', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br></p>', '2022-02-23 12:27:38'),
(2, '8e84c592-ac03-421e-8691-64487a73091d', 'vid_admin', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br></p>', '2022-02-23 12:27:53'),
(3, '156b35c4-80df-4420-8438-2d2b20d70765', 'vid_admin', '<p>sdadsa asdasd asd asd asd asd asd asdas</p>', '2022-03-05 06:59:24'),
(4, '156b35c4-80df-4420-8438-2d2b20d70765', 'vid_admin', 'poiphjmhk hjhmpj oifg dog doihdfohg dfiohg od', '2022-03-05 06:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `username`, `password`, `status`, `createdAt`) VALUES
(1, 'user', '1234', 1, '2020-06-23 08:45:06'),
(3, 'John33', '1234', 1, '2020-06-26 07:42:37'),
(4, 'testusername', '1234', 2, '2020-06-30 10:56:27'),
(5, 'test33', '1234', 1, '2020-06-29 09:37:09'),
(6, 'nawaz', '1234', 1, '2020-07-01 10:25:20');

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

--
-- Dumping data for table `request_detail`
--

INSERT INTO `request_detail` (`id`, `userid`, `uname`, `uuid`, `reqstatus`, `createdAt`) VALUES
(1, 12, 'vid_admin', '8e84c592-ac03-421e-8691-64487a73091d', 0, '2022-02-23 12:24:17'),
(2, 12, 'vid_admin', '156b35c4-80df-4420-8438-2d2b20d70765', 0, '2022-04-01 07:36:32');

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

--
-- Dumping data for table `speedlimiter`
--

INSERT INTO `speedlimiter` (`id`, `serialnumber`, `make`, `billreference`, `voltage`, `createdAt`) VALUES
(1, '12345', 'maketest1', '98765', 'voltagetest', '2022-02-21 10:07:45'),
(2, '21113', 'maketest2', '80434', 'voltagetest2', '2022-02-21 10:08:47'),
(3, '44444', 'aaaa', 'aaaaaa', 'aaaa', '2022-02-22 13:28:11'),
(7, '8788', 'wwww', '56464', '55', '2022-03-07 11:19:17');

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

--
-- Dumping data for table `track_log_user`
--

INSERT INTO `track_log_user` (`id`, `id_user`, `login`, `logout`) VALUES
(1, 1, '06/18/2020 9:53:02 AM', ''),
(2, 1, '06/20/2020 10:27:59 AM', ''),
(3, 1, '06/20/2020 10:32:24 AM', ''),
(4, 1, '06/22/2020 11:00:27 AM', ''),
(5, 1, '06/24/2020 2:19:53 PM', ''),
(6, 1, '06/24/2020 7:13:54 PM', ''),
(7, 1, '06/26/2020 10:44:30 AM', ''),
(8, 3, '06/26/2020 11:42:56 AM', ''),
(9, 1, '06/26/2020 11:45:02 AM', ''),
(10, 3, '06/26/2020 11:45:20 AM', ''),
(11, 1, '06/26/2020 11:51:56 AM', ''),
(12, 1, '06/29/2020 11:19:30 AM', ''),
(13, 1, '06/29/2020 1:33:49 PM', ''),
(14, 5, '06/29/2020 1:37:39 PM', ''),
(15, 1, '06/30/2020 11:12:50 AM', ''),
(16, 1, '06/30/2020 2:57:43 PM', ''),
(17, 6, '07/01/2020 2:25:36 PM', ''),
(18, 1, '07/01/2020 2:28:33 PM', ''),
(19, 1, '07/08/2020 9:13:00 AM', ''),
(20, 1, '07/13/2020 9:14:34 AM', ''),
(21, 1, '07/13/2020 2:11:12 PM', ''),
(22, 1, '07/15/2020 9:20:32 AM', ''),
(23, 1, '07/17/2020 9:28:50 AM', ''),
(24, 1, '07/18/2020 9:06:35 AM', ''),
(25, 1, '07/20/2020 10:10:24 AM', ''),
(26, 1, '07/21/2020 3:14:42 PM', ''),
(27, 1, '07/22/2020 11:50:59 AM', ''),
(28, 1, '07/24/2020 2:46:46 PM', ''),
(29, 1, '07/27/2020 9:37:08 AM', ''),
(30, 1, '07/27/2020 1:14:40 PM', ''),
(31, 1, '07/27/2020 3:37:11 PM', ''),
(32, 1, '07/29/2020 9:34:15 AM', ''),
(33, 1, '09/10/2020 10:59:30 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(10) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `OfficerRank` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Division` varchar(255) NOT NULL,
  `Station` varchar(255) NOT NULL,
  `StatusId` int(2) NOT NULL,
  `UserType` int(2) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Fullname`, `Email`, `Pwd`, `OfficerRank`, `Department`, `Division`, `Station`, `StatusId`, `UserType`, `CreatedOn`) VALUES
(2, 'dsads', 'dasd@das', '$2y$10$8gQLbepUrZgblUjmvRVBreYwbLi5n7YjbC/D4A6GesPGYUslGkuYG', '', '', '', '', 0, 0, '2020-09-08 18:02:46'),
(4, 'Vidurath', 'avidurath@gmail.com', '$2y$10$Y3QSLG1Vk2g23t4oZVm2x.//ykCDefnkF6q30T09Ul4sXILiiWGxu', '', '', '', '', 0, 0, '2020-09-08 18:20:19'),
(5, '', '', '$2y$10$SDBXpR/SFqfZqxEQ3YmXseEbeEtF9nzANCIrZoS6eXhcmzVVaV88e', '', '', '', '', 0, 0, '2020-11-13 10:47:23'),
(6, 'aaaaa', 'aaaaaaaa', '$2y$10$Ym2hyuVgl8/xon1bjPgBoeNxRKzWNwgvsJ2gOFaK4XEeI4J9qF5KC', '', '', '', '', 0, 0, '2020-11-13 10:52:30'),
(7, 'aaa', 'a', '$2y$10$.QrlZOw4sXWqHPQ3k8Ig7.fLKo5EJUmFNeYpOW5ak8uhM3xjZYbWy', '', '', '', '', 0, 0, '2020-11-13 10:53:41'),
(8, 'aa', 'aa', '$2y$10$tmuJaBV4TLh/VvyXFeqn2.ZlaIdPy29O0XEG.MC/AU20dWbfE13.6', '', '', '', '', 0, 0, '2020-11-13 10:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `usertest`
--

CREATE TABLE `usertest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertest`
--

INSERT INTO `usertest` (`id`, `name`, `email`, `password`, `created_at`, `verified`, `deleted`, `lastlogin`) VALUES
(12, 'vid_admin', 'larzalonzo@gmail.com', '$2y$10$.F4AjOxPd.6lKj95.eqvweMDnu63lZtSLo0hQ5Y3BxoApWZNjkH7a', '2020-11-19 07:33:08', 0, 1, '2022-04-01 08:18:14'),
(13, 'vidurath Auchraje', 'avidurath@gmail.com', '$2y$10$HyppmllQLxCApMqxbNk0UOwleqPy.dKIeCkJGFGw/11uz4zxIXD9e', '2020-11-26 06:56:34', 0, 1, '2022-01-15 16:56:46'),
(15, 'bob', 'bob@gmail.com', '$2y$10$pne62hxMr8RvJl/2VhfVQeWC6XNGOK63Z9OLvln04YHl1tyVn9VLK', '2021-11-18 12:19:50', 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `officer_rank` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `station` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `id_user`, `firstname`, `lastname`, `officer_rank`, `division`, `station`) VALUES
(1, 1, 'Wasiim', 'Gukhool', 'sp', 'Northern Divison', 'Pamplemousses'),
(3, 3, 'John', 'Henri', 'Caporal', 'SOUTHERN DIVISION', 'Mahebourg'),
(4, 4, 'test', 'testlname', 'Constable', 'EASTERN DIVISION', 'Moka'),
(5, 5, 'test', 'testname', 'Constable', 'NORTHERN DIVISION', 'Triolet'),
(6, 6, 'nawaz', 'seetama', 'Chief Inspector', 'NORTHERN DIVISION', 'P/des Papayes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_off`
--
ALTER TABLE `cat_off`
  ADD PRIMARY KEY (`id_category`);

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
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
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
-- AUTO_INCREMENT for table `cat_off`
--
ALTER TABLE `cat_off`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `horsepower_detail`
--
ALTER TABLE `horsepower_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `horsepower_image`
--
ALTER TABLE `horsepower_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `horsepower_note`
--
ALTER TABLE `horsepower_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request_detail`
--
ALTER TABLE `request_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speedlimiter`
--
ALTER TABLE `speedlimiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `track_log_user`
--
ALTER TABLE `track_log_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
