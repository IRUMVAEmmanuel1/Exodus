-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 01:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exodus`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `file_name`, `description`, `date`) VALUES
(2, ' ewdeqwdThe requested URL was not found on this server. The link on the referring page', 'image_5.jpg', 'Exodus Travel provide the best travel blogs in the world offer amazing travel tips, photography, and content', '2022-12-04'),
(3, ' was not found on this server. The link on the referring page', 'premier-suite-v14584925-1440.jpg', 'service/ rnp/registration_ for_driving_license_test_ definitive service/ rnp/registration_ for_driving_license_test_ definitive service/ rnp/registration_ for_driving_license_test_ definitive service/ rnp/registration_ for_driving_license_test_ definitive', '2022-12-04'),
(4, 'was not found on this server. The link on the referring page', 'Facts-about-Akagera-National-Park.jpg', 'ewdeqwdThe requested URL was not found on this server. The link on the referring page', '2022-12-04'),
(5, 'was not found on this server. The link on the referring page', '(21).jpg', 'ewdeqwdThe requested URL was not found on this server. The link on the referring page', '2022-12-04'),
(6, 'was not found on this server. The link on the referring page', '(19).jpg', 'ewdeqwdThe requested URL was not found on this server. The link on the referring page', '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `title` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `status` int(30) NOT NULL,
  `request` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `title`, `location`, `name`, `email`, `number`, `phone`, `date`, `status`, `request`) VALUES
(31, '     Moouiop', 'downtown', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '6', '0781548519', '2022-12-12', 1, '0'),
(32, 'Nyungwe', 'kigali', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '8', '0781548519', '2022-12-12', 0, '0'),
(33, 'lucky ', 'Kigali,Rwanda', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '5', '0781548519', '2022-12-12', 0, '0'),
(34, '  GISHWATI', 'kigali', 'eugene', 'eugene@gmail.com', '3', '098237431', '2022-12-20', 0, '0'),
(35, 'Nyungwe', 'kigali', 'Eugene MUGIRANEZA', 'eugenemugiraneza2@gmail.com', '2', '0781548519', '2022-12-29', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `bookinghotel`
--

CREATE TABLE `bookinghotel` (
  `id` int(30) NOT NULL,
  `hotelName` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `request` varchar(10) NOT NULL,
  `numberOfroom` varchar(10) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookinghotel`
--

INSERT INTO `bookinghotel` (`id`, `hotelName`, `phone`, `fullName`, `email`, `date`, `status`, `request`, `numberOfroom`, `Location`) VALUES
(1, 'UBUMWE', '12345678', '', '', '2022-11-02', '1', '0', '3', 'kigali'),
(2, 'UBUMWE HOTEL', '0781548519', 'eugene', 'eugene@gmail.com', '2022-11-02', '0', '0', '4', 'downtown/ congo'),
(3, 'UBUMWE HOTEL555', '0781548519', 'kakiru branch', '', '2022-11-23', '0', '0', '6', 'kigali/ burundi'),
(4, 'UBUMWE HOTEL555', '0781548519', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '2022-11-23', '0', '0', '4', 'kigali/ burundi'),
(6, 'gallaxy hotel', '0781548519', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '2022-12-15', '0', '0', '3', 'kigali/ downtown'),
(7, 'UBUMWE HOTEL', '0781548519', 'Eugene MUGIRANEZA', 'eugene@gmail.com', '2022-12-14', '0', '0', '3', 'downtown/ congo');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `time` varchar(50) NOT NULL,
  `near` varchar(34) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `title`, `file_name`, `location`, `time`, `near`, `price`) VALUES
(24, '   MUHAZI1', 'software1.png', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(25, '    MUHIMA', 'home2.jpg', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(26, '   MUHAZI1', 'Traveler-booking.jpg', 'downtown4', '8 DAY TOUR', 'kivu', '9000'),
(31, '   MUHAZI1wertui', 'IMVANO-PICTURES(67) (1).jpg', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(32, '    MUHAZI1wertui222222', 'marriot.jfif', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(35, '    Moo', 'images (2).jfif', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(36, '     Moouiop', 'hotel-des-mille-collines.jpg', 'downtown', '8 DAY TOUR', 'kivu', '9000'),
(38, 'Nyungwe', 'Nyungwe-forest-national-park.jpg', 'kigali', '8 DAY TOUR', 'burundi', '3000'),
(39, '  GISHWATI', 'gishwati-forest-reserve.jpg', 'kigali', '8 DAY TOUR', 'downtown', '900000000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`, `subject`, `date`, `profile`) VALUES
(4, 'irumva', 'emmanuel@gmail.com', 'qAWSEFGHJKDSDFGHGDSGFGHFG', 'visit rwanda', '2022-11-10', ''),
(5, 'Vital', 'vital@gmail.com', 'Checking the network cables, modem, and router\r\nReconnecting to Wi-Fi', 'thank', '2022-11-13', 'EUGENE.jpg'),
(6, 'isaac', 'isaac@gmail.com', 'The .dropdown class is used to indicate a dropdown menu.\r\nUse the .dropdown-menu class to actually build the dropdown menu.', 'greeting', '2022-11-13', 'veda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `date`) VALUES
(3, 'nyungwe', 'Facts-about-Akagera-National-Park.jpg', '2022-12-02'),
(4, 'gishwati', 'client-descend-at-napoleon.jpg', '2022-12-02'),
(5, 'muhazi', 'REGACY.jpg', '2022-12-02'),
(6, 'mnxnx', 'HOTEL.jpg', '2022-12-02'),
(7, 'Mhotel', 'marriot.jfif', '2022-12-02'),
(8, 'nice', 'gishwati-forest-reserve.jpg', '2022-12-02'),
(9, 'nnm', 'client-descend-at-napoleon.jpg', '2022-12-02'),
(11, 'nyungwe3', 'service3.jpg', '2022-12-13'),
(19, 'All star', 'service1.jpg', '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(6) NOT NULL,
  `hotelName` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `location` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `near` varchar(30) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotelName`, `file_name`, `location`, `duration`, `near`, `price`) VALUES
(19, ' SERENA12', 'service2.jpg', 'kigali', '5 DAY', 'congo', 4000),
(20, 'SERENA 2', 'selena1.jpg', 'downtown', '1 Day', 'kivu', 50000),
(21, '5 SRTAR', '5 STAR.jpg', 'Gisenyi', '5 DAY', 'kivu', 3000),
(22, 'Kigali Hotel', 'kigali hotel.jpg', 'Kigali,Rwanda', '2 Day', 'T2000', 50000),
(23, 'Mille colline', 'hotel-des-mille-collines.jpg', 'kigali', '2 Day', 'downtown', 4000),
(24, 'Gisenyi', 'download (1).jfif', 'Gisenyi', '1 Day', 'rubavu', 9000),
(25, 'Radison Blue Kigali', 'radi.jpg', 'kigali', '1 Day', 'kacyiru', 3000),
(29, 'UBUMWE HOTEL555', 'radi.jpg', 'kigali', '1 Day', 'burundi', 9000),
(30, 'UBUMWE HOTEL', 'selena.jpg', 'downtown', '1 Day', 'congo', 9000),
(35, 'gallaxy hotel', 'kigali hotel.jpg', 'kigali', '10 Day', 'ACEAR', 50000),
(36, 'SERENA', 'selena.jpg', 'kigali', '1 Day', 'RSSB', 4000),
(37, 'gallaxy hotel', 'marriot.jfif', 'kigali', '2 Day', 'downtown', 9000),
(38, 'gallaxy hotel', 'marriot.jfif', 'kigali', '2 Day', 'downtown', 9000),
(39, 'Safari', 'bistate-lodge-rwanda-p.jpg', 'South provience', '10 Day', 'kivu', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `file_name`, `description`, `date`) VALUES
(1, ' Travel Managements', 'photo-1530521954074-e64f6810b32d.jpg', 'This would be the core function and the one which agencies engaged in organising business travel have always performed. ', '2023-01-16'),
(2, ' Passenger assistance', 'sdd.jpg', 'On a trip there may be many unforeseen problems and issues which need to be resolved: repatriation due to illness, accident or emergency, lost luggage or documents, etc.', '2023-01-16'),
(4, ' Technology', 'tec.jpg', 'The proper and constantly updated use of technology is vital, not only for the requesting and comparison of travel services (tickets, accommodation, etc.)', '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `password`, `userType`, `profile`) VALUES
(4, 'irumva', 'emmanuel@gmail.com', 781548519, '12345', 'Admin', 'eric.jpg'),
(6, 'yotam', 'eugene@gmail.com', 781548519, '12345', 'endUser', 'eric.jpg'),
(8, 'vedaste@gmail.com', 'vedaste@gmail.com', 781548519, '12345', 'Admin', 'eric.jpg'),
(9, 'lucie', 'lucie@gmail.com', 2147483647, '12345', 'Admin', '1.jpg'),
(10, 'vital', 'vital@gmail.com', 781548519, '12345', 'Admin', 'maxresdefault (4).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinghotel`
--
ALTER TABLE `bookinghotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bookinghotel`
--
ALTER TABLE `bookinghotel`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
