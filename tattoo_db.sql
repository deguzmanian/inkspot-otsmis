-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tattoo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announce_id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(30) NOT NULL,
  `shopid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `title` text NOT NULL,
  `phonenumber` text NOT NULL,
  `description` text NOT NULL,
  `appointment_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `shopid`, `userid`, `serviceid`, `start_datetime`, `title`, `phonenumber`, `description`, `appointment_status`) VALUES
(1, 9, 163, 43, '2022-09-17 11:00:00', '', '', '', 'pending'),
(2, 9, 168, 43, '2022-09-24 22:00:00', '', '', '', 'Cancelled'),
(3, 12, 168, 49, '2022-09-15 18:50:00', '', '', '', 'Approved'),
(4, 10, 168, 45, '2022-09-30 20:50:00', '', '', '', 'Cancelled'),
(5, 10, 168, 45, '2022-09-24 20:20:00', '', '', '', 'pending'),
(6, 9, 168, 43, '2022-09-23 20:40:00', '', '09774875549', '', 'Cancelled'),
(7, 9, 168, 43, '2022-09-30 20:40:00', '', '09774875549', '', 'Approved'),
(8, 9, 168, 43, '2022-09-29 20:40:00', '', '09774875549', '', 'pending'),
(9, 9, 168, 43, '2022-09-28 20:40:00', '', '09774875549', '', 'pending'),
(10, 9, 168, 43, '2022-10-01 20:40:00', '', '09774875549', '', 'pending'),
(11, 9, 168, 43, '2022-10-08 20:40:00', '', '09774875549', '', 'pending'),
(12, 9, 168, 43, '2022-10-14 20:40:00', '', '09774875549', '', 'pending'),
(13, 9, 168, 43, '2022-10-19 20:40:00', '', '09774875549', '', 'Approved'),
(14, 9, 168, 43, '2022-10-17 20:45:00', '', '09774875549', '', 'Approved'),
(15, 9, 168, 43, '2022-10-14 20:45:00', '', '09774875549', '', 'Approved'),
(16, 9, 168, 43, '2022-08-09 20:50:00', '', '09774875549', '', 'Approved'),
(17, 9, 168, 43, '2022-10-18 20:50:00', '', '09774875549', '', 'Cancelled'),
(18, 9, 173, 43, '2022-09-29 12:40:00', '', '09774875549', '', 'pending'),
(19, 9, 173, 43, '2022-09-30 21:25:00', '', '09774875549', '', 'pending'),
(20, 9, 173, 43, '2022-09-08 21:30:00', '', '09774875549', '', 'pending'),
(21, 9, 173, 43, '2022-09-29 21:40:00', '', '09774875549', '', 'pending'),
(22, 9, 173, 43, '2022-09-30 21:40:00', '', '09774875549', '', 'pending'),
(23, 9, 173, 43, '2022-10-05 21:55:00', '', '09774875549', '', 'pending'),
(24, 9, 173, 43, '2022-09-30 21:56:00', '', '09774875549', '', 'pending'),
(25, 9, 173, 43, '2022-11-30 21:59:00', '', '09774875549', '', 'pending'),
(26, 9, 173, 43, '2022-09-30 21:00:00', '', '', '', ''),
(27, 10, 173, 45, '2022-09-29 11:00:00', '', '', '', ''),
(28, 10, 173, 45, '2022-10-05 11:10:00', '', '', '', ''),
(29, 10, 173, 45, '2022-09-28 12:00:00', '', '', '', ''),
(30, 10, 173, 45, '2022-11-23 12:00:00', '', '', '', ''),
(31, 11, 173, 47, '2022-09-23 22:40:00', '', '09774875549', '', 'pending'),
(32, 11, 173, 47, '2022-09-30 11:16:00', '', '09774875549', '', 'pending'),
(33, 11, 173, 47, '2022-10-06 12:00:00', '', '09774875549', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `chat_id` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `distance_in_kilo` int(11) NOT NULL,
  `distance_in_mile` int(11) NOT NULL,
  `duration_in_text` varchar(255) NOT NULL,
  `TravelMode` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `outgoing_msg_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 'hIZOTNFl', 'YR3eIVPh', 'hello'),
(2, 'YR3eIVPh', 'hIZOTNFl', 'test hi'),
(3, 'EZDzfWRw', 'hIZOTNFl', 'Hello, this message is a test,');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `prices_id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `artist_fee` varchar(100) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`prices_id`, `shopid`, `color`, `size`, `artist_fee`, `total`) VALUES
(2, 41, 'With Color', 'Small', '100/Hour', '₱1,066'),
(3, 41, 'With Color', '2x3', '100/Hour', '₱1,500'),
(4, 41, 'With Color', 'Medium', '100/Hour', '₱2,000'),
(5, 43, 'With Color', 'Large', '100/Hour', '₱4,000-₱8,000'),
(6, 44, 'With Color', 'Full Sleeve', '₱6000', '₱10,000-₱25,000'),
(7, 45, 'Plain Black', 'Small', '100/Hour', '₱500-₱1,000'),
(8, 44, 'Plain Black', '2x3', '100/Hour', '₱1,000-₱2,000'),
(9, 44, 'Plain Black', 'Medium', '100/Hour', '₱2,000-₱4,000'),
(10, 43, 'Plain Black', 'Large', '100/Hour', '₱5,000-₱8,000'),
(11, 43, 'Plain Black', 'Full Sleeve', '₱3000', '₱10,000-₱17,000');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `shopid`, `userid`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 19, 163, 'Mich Dimaano', 5, 'testing for mich', 1662049673),
(2, 18, 163, 'Mich Dimaano', 5, 'testing for marjo', 1662049694),
(3, 19, 163, 'Mich Dimaano', 4, 'good job', 1662049770),
(4, 11, 163, 'Mich Dimaano', 4, 'galing!', 1662049793),
(5, 11, 163, 'Mich Dimaano', 3, 'hello test', 1662049867),
(6, 19, 163, 'Mich Dimaano', 0, 'goodjob', 1662101064),
(7, 22, 163, 'Mich Dimaano', 5, 'nice job', 1662101864),
(8, 22, 168, 'John Alfred', 3, 'good job 2', 1662104159);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `day_` varchar(500) NOT NULL,
  `from_` varchar(50) NOT NULL,
  `to_` varchar(50) NOT NULL,
  `void` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `shopid`, `day_`, `from_`, `to_`, `void`) VALUES
(1, 12, '1', '', '', 1),
(2, 12, '2', '10:00', '14:00', 0),
(3, 12, '3', '', '', 1),
(4, 12, '4', '23:00', '16:00', 0),
(5, 12, '5', '', '', 1),
(6, 12, '6', '23:00', '15:00', 0),
(7, 12, '7', '', '', 1),
(8, 23, '0', '10:00', '16:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type_services` varchar(100) NOT NULL,
  `estimated_amount` varchar(100) NOT NULL,
  `shopid` int(11) NOT NULL,
  `void` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type_services`, `estimated_amount`, `shopid`, `void`) VALUES
(1, 'Tattoo', 'See table above for the prices', 0, 0),
(2, 'Piercing', '300-1,500', 0, 0),
(3, 'Cosmetic Tattoo', '500-1,000', 0, 0),
(4, 'abc', '500', 0, 0),
(5, 'Tattoo removal', '500', 76, 0),
(6, 'Tattoo', '300', 76, 0),
(7, 'Piercing', '120', 76, 0),
(8, 'rsesvf', '50', 76, 0),
(9, 'tattoo', '345', 77, 0),
(10, 'piercing', '135', 77, 0),
(11, 'ewewe', '563', 77, 0),
(12, 'aaaaaaaa', '11111', 78, 0),
(13, 'bbbbbb', '3333', 78, 0),
(14, 'gggggggggg', '6666', 78, 0),
(15, 'wewewe', '121', 79, 0),
(16, 'tttt', '455', 79, 1),
(17, 'tattoo', '30', 79, 0),
(18, 'tatto', '40', 79, 1),
(19, 'tatto', '40', 79, 1),
(20, 'gefe', '56', 79, 1),
(21, 'A', '55', 79, 1),
(22, 'peirce', '1212', 79, 0),
(23, 'sss', '67', 79, 1),
(24, 'nanana', '190', 79, 1),
(25, 'test', '78', 79, 0),
(26, 'hy', '46', 79, 0),
(27, 'rr', '43', 79, 1),
(28, 'dsds', '89', 79, 0),
(29, 'Tattoo', '700', 80, 0),
(30, 'Piercing', '200', 80, 0),
(31, 'testing', '500', 80, 0),
(32, 'test', '44', 81, 0),
(33, 'sada', '8', 1, 0),
(34, 'sadfdsfsad', '455', 1, 0),
(35, 'asdfsqa', '1234', 2, 0),
(36, 'dfasdf', '12313', 3, 0),
(37, 'sdafasdfas', '324', 4, 0),
(38, 'sadfsa', '123', 6, 0),
(39, 'Tattoo', '1000', 7, 0),
(40, 'Piercing', '200', 7, 0),
(41, 'Tattoo ', '1000', 8, 0),
(42, 'Piercing', '250', 8, 0),
(43, 'Tattoo', '1000', 9, 0),
(44, 'Piercing', '250', 9, 0),
(45, 'Tattoo ', '1000', 10, 0),
(46, 'Piercing', '200', 10, 0),
(47, 'Tattoo', '1000', 11, 0),
(48, 'Piercing', '250', 11, 0),
(49, 'Tattoo', '1000', 12, 0),
(50, 'Piercing', '200', 12, 0),
(51, 'gthgt', '1000', 13, 0),
(52, 'tyuyj', '1000', 14, 0),
(53, 'frvgrv', '1000', 15, 0),
(54, 'gthyh', '100', 16, 0),
(55, 'thyjh', '10', 17, 0),
(56, 'Tattoo', '1000', 18, 0),
(57, 'Tattoo', '2000', 19, 1),
(58, 'Tattoo', '1000', 20, 0),
(59, 'Piercing', '250', 20, 0),
(60, 'Tattoo', '1000', 21, 0),
(61, 'Piercing', '200', 21, 0),
(62, 'Tattoo', '1000', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tattooshops`
--

CREATE TABLE `tattooshops` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `map` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tattooshops`
--

INSERT INTO `tattooshops` (`id`, `name`, `email`, `contact`, `schedule`, `description`, `location`, `map`, `image`) VALUES
(9, 'Asyang Tattoo Shop', 'dianemedina192916@gmail.com', '09667500519', '', 'Tattoo and Piercing Shop', 'Samal, Bataan', '', 'Asyang Tattoo Shop.jpg'),
(10, 'Danny Mabatang Ink', 'danilo.manrique@yahoo.com', '09565790666', '', 'Tattoo and Piercing Shop', 'Abucay, Bataan', '', 'Danny Mabatang Ink.jpg'),
(11, 'Emersons Earth Ink Tattoo', 'penaemerson504@gmail.com', '09616415836', '', 'Tattoo and Piercing Shop', '#4 Naval Street Cupang North, Balanga Bataan', '', 'Emersons Earth Ink Tattoo.jpg'),
(12, 'Herchel Vape and  Ink', 'lungcayherchel@gmail.com', '09278905441', '', 'Tattoo and Piercing Shop', 'Lower Balandasan, Mt. View Mariveles, Bataan', '', 'Herchel Vape and  Ink.jpg'),
(17, 'gthgt', 'hfuefh@gmail.com', '09876543212', '', 'vffbvgtbf', 'efrfr', '', 'gthgt.jpg'),
(18, 'Marjo', 'michuser02@gmail.com', '09123456789', '', 'Tattoo and Freelance Artist', 'Mariveles, Bataan', 'https://www.google.com.ph/maps/place/Alion,+Freeport+Area+of+Bataan,+Mariveles,+Bataan/@14.4869564,120.5458973,14z/data=!3m1!4b1!4m5!3m4!1s0x33962324225dd621:0x603e2460e6767a3b!8m2!3d14.4890806!4d120.5682028?hl=en&authuser=0', 'Marjo.jpg'),
(19, 'Michelle', 'celoricomichellemae@gmail.com', '09165921733', '', 'fhrhgrf', 'Mariveles, Bataan', '', 'Michelle.jpg'),
(22, 'Erika', 'erikacate@gmail.com', '09876545321', '', 'Freelance Artist', 'Hermosa, Bataan', '', 'Erika.jpg'),
(23, 'WILDCHILD LA UNION TATTOO STUDIO PHILIPPINES', 'deguzmanianmooreen@gmail.com', '09774875549', '', 'test shop', 'SANTIAGO SUR PUROK 5, San Fernando, La Union', 'https://goo.gl/maps/yaRJwWK1WpFPWD3YA', 'WILDCHILD LA UNION TATTOO STUDIO PHILIPPINES.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tattoo_products`
--

CREATE TABLE `tattoo_products` (
  `id` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `stocks` int(100) NOT NULL,
  `date_added` date NOT NULL,
  `void` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tattoo_products`
--

INSERT INTO `tattoo_products` (`id`, `serviceid`, `shopid`, `equipment_name`, `stocks`, `date_added`, `void`) VALUES
(11, 17, 79, 'ink', 47, '2022-07-24', 0),
(12, 22, 79, 'Needle', 9, '2022-07-24', 0),
(13, 25, 79, 'hello', 100, '2022-07-24', 0),
(14, 28, 79, 'zxc', 15, '2022-07-24', 0),
(15, 29, 80, 'Ink', 15, '2022-07-24', 0),
(16, 45, 10, 'Ink', 15, '2022-08-21', 0),
(17, 46, 10, 'Piercing Needle', 10, '2022-08-21', 0),
(18, 47, 11, 'Ink', 19, '2022-08-21', 0),
(19, 48, 11, 'Piercing Needle', 50, '2022-08-21', 0),
(20, 49, 12, 'Ink', 89, '2022-08-21', 0),
(21, 50, 12, 'Piercing Needle', 15, '2022-09-05', 0),
(24, 56, 18, 'Ink', 23, '2022-08-22', 0),
(25, 56, 18, 'Alcohol', 23, '2022-08-22', 0),
(26, 49, 12, 'Gloves', 10, '2022-08-23', 0),
(27, 57, 19, 'ink', 25, '2022-08-29', 0),
(28, 0, 19, 'alcohol', 25, '2022-09-25', 0),
(29, 0, 19, 'gloves', 100, '2022-08-29', 0),
(34, 43, 9, 'Ink', 33, '2022-08-31', 0),
(35, 43, 9, 'Ink', 33, '2022-08-31', 0),
(36, 44, 9, 'Piercing Needle', 40, '2022-09-08', 0),
(37, 44, 9, 'Piercing Needle', 40, '2022-09-08', 0),
(38, 43, 9, 'Tattoo Needle', 33, '2022-08-31', 0),
(39, 43, 9, 'Tattoo Needle', 33, '2022-08-31', 0),
(40, 43, 9, 'Alcohol', 33, '2022-08-31', 0),
(41, 43, 9, 'Gloves', 33, '2022-08-31', 0),
(42, 44, 9, 'Gloves', 40, '2022-09-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(8) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL COMMENT '0=user\r\n1=shop\r\n2=superadmin\r\n3=freelance',
  `shopid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approved` int(10) NOT NULL COMMENT '0=pending\r\n1=approved\r\n2=denied',
  `docUploaded` varchar(500) NOT NULL COMMENT 'name of document uploaded in uploads/documents'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `fname`, `lname`, `email`, `phonenumber`, `password`, `role_as`, `shopid`, `status`, `created_at`, `approved`, `docUploaded`) VALUES
(28, 'YR3eIVPh', 'Mich', 'Celorico', 'admin@gmail.com', '09165921733', '$2y$10$wKujHKwK8U2e8Cm5Ou6swepy/w5kJNY382ALibBctQ73f25zIBCJq', 2, 49, 'approved', '2022-10-23 12:43:23', 1, ''),
(93, 'UNK0R4ad', 'HANZ_SUPER', 'ADM', 'hanzjmanuel@gmail.ph', '9163482224', '$2y$10$D9xZJ86Mb3YcMpteZfd8COxz/5wjosFvFgK1Zs.04.5PbkZGZiG1W', 2, 0, 'pending', '2022-10-23 12:43:45', 0, ''),
(140, 'VO2vt1W9', 'micdhsic', 'weqdqewdqwe', 'asdfsa@gmail.com', '09123456789', '$2y$10$CBbQF2vtrt33gsZ0cJOx3eV2myLtZ.XQh0yeVGJFm5HrrF8Oc6KpS', 1, 1, 'pending', '2022-10-23 12:43:54', 0, ''),
(141, '0RX170yO', 'dsafsdgsad', 'dsaffsdf', 'asdf@gmail.com', '09123456789', '$2y$10$YTALeVTWyRHpFW.AG2m83u6lJkz9vK8XKjK8irrAT1uY0.1..eJU6', 1, 2, 'pending', '2022-10-23 12:44:01', 2, ';141.jpg;141.jpg'),
(142, 'oY7ybvX8', 'John Alfred', 'Borreros', 'borrerosjohnalfred704@gmail.com', '09123456789', '$2y$10$Y/tFfF3UIaDleFU2.FOpFOY8j7PaBV2tgm1IQmK2nyGcdfN/dPjrO', 2, 0, 'pending', '2022-10-23 12:44:16', 1, ''),
(143, 'WY8uVjfm', 'johny', 'wedfaed', 'asdfas@gmail.com', '09123456789', '$2y$10$9fraqAu1siWCNEB8as6aUuHVTMG2VULPICE32QGRP08TQxTkwDceC', 1, 3, 'pending', '2022-10-23 12:44:25', 1, ';143.jpg;143.jpg'),
(149, 'W9ix6SMA', 'Diane', 'Medina', 'dianemedina192916@gmail.com', '09667500519', '$2y$10$Lr8O1kVrG2JQ/s0oU/QgDeCZijkQN9C1n8792M0eLtWB83kaNGBHe', 1, 9, 'pending', '2022-10-23 12:44:32', 1, ';149.jpg'),
(150, 'HQT6RXJL', 'Danilo', 'Manrique', 'danilo.manrique@yahoo.com', '09565790666', '$2y$10$yp5cSX2awhK1VTMt0wVO/eSdHb3VAmxbxR3F3q14oS/5..MT84nLW', 1, 10, 'pending', '2022-10-23 12:44:39', 1, ';150.jpg'),
(151, 'I6nAzvSl', 'Emerson', 'Peña', 'penaemerson504@gmail.com', '09616415836', '$2y$10$vfWbYCynX9gBkGBvg5CPyeXRZ7hUWreVkEF1f/pGeG/OXUFBqxyfW', 1, 11, 'pending', '2022-10-23 12:44:46', 1, ';151.jpg'),
(152, 'EZDzfWRw', 'Herchel', 'Lungcay', 'lungcayherchel@gmail.com', '09278905441', '$2y$10$.IQAwLa29HaofrF7jIicT.MO.Fgg69pE3sHtuSaUpGbOZsjFD4zga', 1, 12, 'pending', '2022-10-23 12:44:52', 1, ';152.jpg'),
(163, 'KPa1V9Z9', 'Mich', 'Dimaano', 'michdimaano11@gmail.com', '09123456789', '$2y$10$7W3rE7oKOb1zildZdVLMAe4GGmznhcZvB4ZjS.OAdnuBGQ9e5dZo6', 0, 0, 'pending', '2022-10-23 12:45:00', 1, ''),
(165, 'NwmWafSc', 'Marjorie', 'Carter', 'michuser02@gmail.com', '09123456789', '$2y$10$SdeqBom2wyv7EUFz0sLV2O.oqz7WawvPQZkQg/gM9V4aQHxnY4ASW', 3, 18, 'pending', '2022-10-23 12:45:06', 1, ';165.jpg'),
(168, 'hIZOTNFl', 'John', 'Alfred', 'johnalfuser01@gmail.com', '09666921240', '$2y$10$154211car/lhzfZA9gtXmuODeSZsotNITx55exZrHtgs.nCOCEhvS', 0, 0, 'pending', '2022-10-23 12:45:14', 1, ''),
(169, '2C6u5bcn', 'Mich', 'Celorico', 'celoricomichellemae@gmail.com', '09165921733', '$2y$10$mCpIzU/9/WYZf6O7xdh2wOSC5pFPixdfXa/ih2vs0YeJnZwKGTTDG', 1, 19, 'pending', '2022-10-23 12:45:20', 1, ';169.jpg'),
(172, 'HYnj0EhE', 'Erika ', 'Cate', 'erikacate@gmail.com', '09876545321', '$2y$10$r82eDrWKv9lzhYQHE0Qqde1S4yJALeHjt3874FAitKw7DmEdlS6CC', 3, 22, 'pending', '2022-10-23 12:45:26', 1, ';172.png'),
(173, 'W9AagiLK', 'Anastashia', 'Steele', 'deguzmanianmooreen@gmail.com', '09774875549', '$2y$10$h2VS0m6wxCmDyQwfZv4H2uYaD0wKBAhh8brgImljNbJYHEaPtT1li', 0, 23, 'pending', '2022-10-23 12:45:32', 1, ';173.jpg'),
(176, 'szpmgwew', 'Marco', 'Polo', 'marco_polo@gmail.cpm', '09349034583', '$2y$10$.pOW.GNqPaHtY2pRIO4AaOmylhddaWJwMrpjy8YsNQpsjO2ngq5my', 0, 0, 'pending', '2022-10-23 13:00:48', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `design_id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`design_id`, `shopid`, `shopname`, `image`) VALUES
(21, 9, 'Asyang Tattoo', 'asyang (1).jpg'),
(22, 9, 'Asyang Tattoo', 'asyang (2).jpg'),
(23, 9, 'Asyang Tattoo', 'asyang (3).jpg'),
(24, 9, 'Asyang Tattoo', 'asyang (4).jpg'),
(25, 9, 'Asyang Tattoo', 'asyang (5).jpg'),
(26, 9, 'Asyang Tattoo', 'asyang (6).jpg'),
(27, 9, 'Asyang Tattoo', 'asyang (7).jpg'),
(28, 9, 'Asyang Tattoo', 'asyang (8).jpg'),
(29, 9, 'Asyang Tattoo', 'asyang (9).jpg'),
(30, 9, 'Asyang Tattoo', 'asyang (10).jpg'),
(31, 9, 'Asyang Tattoo', 'asyang (11).jpg'),
(32, 9, 'Asyang Tattoo', 'asyang (12).jpg'),
(33, 9, 'Asyang Tattoo', 'asyang (13).jpg'),
(34, 9, 'Asyang Tattoo', 'asyang (14).jpg'),
(35, 9, 'Asyang Tattoo', 'asyang (15).jpg'),
(41, 60, 'New Tinta Mariveles', 'new (1).jpg'),
(42, 60, 'New Tinta Mariveles', 'new (2).jpg'),
(43, 60, 'New Tinta Mariveles', 'new (3).jpg'),
(44, 60, 'New Tinta Mariveles', 'new (4).jpg'),
(45, 60, 'New Tinta Mariveles', 'new (5).jpg'),
(46, 60, 'New Tinta Mariveles', 'new (6).jpg'),
(47, 60, 'New Tinta Mariveles', 'new (7).jpg'),
(48, 60, 'New Tinta Mariveles', 'new (8).jpg'),
(49, 60, 'New Tinta Mariveles', 'new (9).jpg'),
(50, 60, 'New Tinta Mariveles', 'new (10).jpg'),
(51, 60, 'New Tinta Mariveles', 'new (11).jpg'),
(52, 60, 'New Tinta Mariveles', 'new (12).jpg'),
(53, 60, 'New Tinta Mariveles', 'new (13).jpg'),
(54, 60, 'New Tinta Mariveles', 'new (14).jpg'),
(55, 60, 'New Tinta Mariveles', 'new (15).jpg'),
(56, 60, 'New Tinta Mariveles', 'new (16).jpg'),
(57, 60, 'New Tinta Mariveles', 'new (17).jpg'),
(75, 42, 'Smile Tattoo Studio', 'smile (1).jpg'),
(76, 42, 'Smile Tattoo Studio', 'smile (2).jpg'),
(77, 42, 'Smile Tattoo Studio', 'smile (3).jpg'),
(78, 42, 'Smile Tattoo Studio', 'smile (4).jpg'),
(79, 42, 'Smile Tattoo Studio', 'smile (5).jpg'),
(80, 42, 'Smile Tattoo Studio', 'smile (6).jpg'),
(81, 42, 'Smile Tattoo Studio', 'smile (7).jpg'),
(82, 42, 'Smile Tattoo Studio', 'smile (8).jpg'),
(83, 42, 'Smile Tattoo Studio', 'smile (9).jpg'),
(84, 42, 'Smile Tattoo Studio', 'smile (10).jpg'),
(85, 42, 'Smile Tattoo Studio', 'smile (11).jpg'),
(86, 42, 'Smile Tattoo Studio', 'smile (12).jpg'),
(87, 42, 'Smile Tattoo Studio', 'smile (13).jpg'),
(88, 42, 'Smile Tattoo Studio', 'smile (14).jpg'),
(89, 42, 'Smile Tattoo Studio', 'smile (15).jpg'),
(90, 42, 'Smile Tattoo Studio', 'smile (16).jpg'),
(91, 42, 'Smile Tattoo Studio', 'smile (17).jpg'),
(92, 42, 'Smile Tattoo Studio', 'smile (18).jpg'),
(93, 42, 'Smile Tattoo Studio', 'smile (19).jpg'),
(94, 42, 'Smile Tattoo Studio', 'smile (20).jpg'),
(115, 10, 'Danny Mabatang Ink', 'mabatang (1).jpg'),
(116, 10, 'Danny Mabatang Ink', 'mabatang (2).jpg'),
(117, 10, 'Danny Mabatang Ink', 'mabatang (3).jpg'),
(118, 10, 'Danny Mabatang Ink', 'mabatang (4).jpg'),
(119, 10, 'Danny Mabatang Ink', 'mabatang (5).jpg'),
(120, 10, 'Danny Mabatang Ink', 'mabatang (6).jpg'),
(121, 10, 'Danny Mabatang Ink', 'mabatang (7).jpg'),
(122, 10, 'Danny Mabatang Ink', 'mabatang (8).jpg'),
(123, 10, 'Danny Mabatang Ink', 'mabatang (9).jpg'),
(124, 10, 'Danny Mabatang Ink', 'mabatang (10).jpg'),
(125, 10, 'Danny Mabatang Ink', 'mabatang (11).jpg'),
(126, 10, 'Danny Mabatang Ink', 'mabatang (12).jpg'),
(127, 10, 'Danny Mabatang Ink', 'mabatang (13).jpg'),
(128, 10, 'Danny Mabatang Ink', 'mabatang (14).jpg'),
(129, 10, 'Danny Mabatang Ink', 'mabatang (15).jpg'),
(135, 46, 'Tintamore', 'tinta1.jpg'),
(136, 46, 'Tintamore', 'tinta2.jpg'),
(137, 46, 'Tintamore', 'tinta3.jpg'),
(138, 46, 'Tintamore', 'tinta4.jpg'),
(139, 46, 'Tintamore', 'tinta5.jpg'),
(140, 46, 'Tintamore', 'tinta6.jpg'),
(141, 46, 'Tintamore', 'tinta7.jpg'),
(142, 46, 'Tintamore', 'tinta8.jpg'),
(143, 46, 'Tintamore', 'tinta9.jpg'),
(144, 46, 'Tintamore', 'tinta10.jpg'),
(145, 46, 'Tintamore', 'tinta11.jpg'),
(146, 46, 'Tintamore', 'tinta12.jpg'),
(147, 46, 'Tintamore', 'tinta13.jpg'),
(148, 46, 'Tintamore', 'tinta14.jpg'),
(149, 46, 'Tintamore', 'tinta15.jpg'),
(150, 46, 'Tintamore', 'tinta16.jpg'),
(151, 46, 'Tintamore', 'tinta17.jpg'),
(152, 46, 'Tintamore', 'tinta18.jpg'),
(153, 46, 'Tintamore', 'tinta19.jpg'),
(154, 46, 'Tintamore', 'tinta20.jpg'),
(189, 48, 'Bataan Tattoo', 'bataan (1).jpg'),
(190, 48, 'Bataan Tattoo', 'bataan (2).jpg'),
(191, 48, 'Bataan Tattoo', 'bataan (3).jpg'),
(192, 48, 'Bataan Tattoo', 'bataan (4).jpg'),
(193, 48, 'Bataan Tattoo', 'bataan (5).jpg'),
(194, 48, 'Bataan Tattoo', 'bataan (6).jpg'),
(195, 48, 'Bataan Tattoo', 'bataan (7).jpg'),
(196, 48, 'Bataan Tattoo', 'bataan (8).jpg'),
(197, 48, 'Bataan Tattoo', 'bataan (9).jpg'),
(198, 48, 'Bataan Tattoo', 'bataan (10).jpg'),
(199, 48, 'Bataan Tattoo', 'bataan (11).jpg'),
(200, 48, 'Bataan Tattoo', 'bataan (12).jpg'),
(201, 48, 'Bataan Tattoo', 'bataan (13).jpg'),
(202, 48, 'Bataan Tattoo', 'bataan (14).jpg'),
(203, 48, 'Bataan Tattoo', 'bataan (15).jpg'),
(204, 48, 'Bataan Tattoo', 'bataan (16).jpg'),
(205, 48, 'Bataan Tattoo', 'bataan (17).jpg'),
(206, 48, 'Bataan Tattoo', 'bataan (18).jpg'),
(207, 48, 'Bataan Tattoo', 'bataan (19).jpg'),
(208, 48, 'Bataan Tattoo', 'bataan (20).jpg'),
(209, 49, 'Inkvulnerable Tattoo', 'invulnerable (11).jpg'),
(210, 49, 'Inkvulnerable Tattoo', 'invulnerable (12).jpg'),
(211, 49, 'Inkvulnerable Tattoo', 'invulnerable (13).jpg'),
(212, 49, 'Inkvulnerable Tattoo', 'invulnerable (14).jpg'),
(213, 49, 'Inkvulnerable Tattoo', 'invulnerable (15).jpg'),
(214, 49, 'Inkvulnerable Tattoo', 'invulnerable (16).jpg'),
(216, 12, 'Herchel Vape and Ink', 'herchel (1).jpg'),
(217, 12, 'Herchel Vape and Ink', 'herchel (2).jpg'),
(218, 12, 'Herchel Vape and Ink', 'herchel (3).jpg'),
(219, 12, 'Herchel Vape and Ink', 'herchel (4).jpg'),
(220, 12, 'Herchel Vape and Ink', 'herchel (5).jpg'),
(221, 12, 'Herchel Vape and Ink', 'herchel (6).jpg'),
(222, 12, 'Herchel Vape and Ink', 'herchel (7).jpg'),
(223, 12, 'Herchel Vape and Ink', 'herchel (8).jpg'),
(224, 12, 'Herchel Vape and Ink', 'herchel (9).jpg'),
(225, 12, 'Herchel Vape and Ink', 'herchel (10).jpg'),
(226, 12, 'Herchel Vape and Ink', 'herchel (11).jpg'),
(227, 12, 'Herchel Vape and Ink', 'herchel (12).jpg'),
(228, 12, 'Herchel Vape and Ink', 'herchel (13).jpg'),
(229, 12, 'Herchel Vape and Ink', 'herchel (14).jpg'),
(230, 12, 'Herchel Vape and Ink', 'herchel (15).jpg'),
(233, 11, 'Emersons Earth Ink Tattoo', 'emerson (1).jpg'),
(234, 11, 'Emersons Earth Ink Tattoo', 'emerson (2).jpg'),
(235, 11, 'Emersons Earth Ink Tattoo', 'emerson (3).jpg'),
(236, 11, 'Emersons Earth Ink Tattoo', 'emerson (4).jpg'),
(237, 11, 'Emersons Earth Ink Tattoo', 'emerson (5).jpg'),
(238, 11, 'Emersons Earth Ink Tattoo', 'emerson (6).jpg'),
(239, 11, 'Emersons Earth Ink Tattoo', 'emerson (7).jpg'),
(240, 11, 'Emersons Earth Ink Tattoo', 'emerson (8).jpg'),
(241, 11, 'Emersons Earth Ink Tattoo', 'emerson (9).jpg'),
(242, 11, 'Emersons Earth Ink Tattoo', 'emerson (10).jpg'),
(243, 11, 'Emersons Earth Ink Tattoo', 'emerson (11).jpg'),
(244, 11, 'Emersons Earth Ink Tattoo', 'emerson (12).jpg'),
(245, 11, 'Emersons Earth Ink Tattoo', 'emerson (13).jpg'),
(246, 11, 'Emersons Earth Ink Tattoo', 'emerson (14).jpg'),
(247, 11, 'Emersons Earth Ink Tattoo', 'emerson (15).jpg'),
(253, 47, 'Baruyas Ink ', 'baruya (1)-1655393826.jpg'),
(254, 47, 'Baruyas Ink ', 'baruya (2)-1655393826.jpg'),
(255, 47, 'Baruyas Ink ', 'baruya (3)-1655393826.jpg'),
(256, 47, 'Baruyas Ink ', 'baruya (4)-1655393826.jpg'),
(257, 47, 'Baruyas Ink ', 'baruya (5)-1655393826.jpg'),
(258, 47, 'Baruyas Ink ', 'baruya (6)-1655393826.jpg'),
(259, 47, 'Baruyas Ink ', 'baruya (7)-1655393826.jpg'),
(260, 47, 'Baruyas Ink ', 'baruya (8)-1655393826.jpg'),
(261, 47, 'Baruyas Ink ', 'baruya (9)-1655393826.jpg'),
(262, 47, 'Baruyas Ink ', 'baruya (10)-1655393826.jpg'),
(263, 47, 'Baruyas Ink ', 'baruya (11)-1655393826.jpg'),
(264, 47, 'Baruyas Ink ', 'baruya (12)-1655393826.jpg'),
(265, 47, 'Baruyas Ink ', 'baruya (13)-1655393826.jpg'),
(266, 47, 'Baruyas Ink ', 'baruya (14)-1655393826.jpg'),
(267, 49, 'Inkvulnerable Tattoo', 'invulnerable (1).jpg'),
(268, 49, 'Inkvulnerable Tattoo', 'invulnerable (2).jpg'),
(269, 49, 'Inkvulnerable Tattoo', 'invulnerable (3).jpg'),
(270, 49, 'Inkvulnerable Tattoo', 'invulnerable (4).jpg'),
(271, 49, 'Inkvulnerable Tattoo', 'invulnerable (5).jpg'),
(272, 49, 'Inkvulnerable Tattoo', 'invulnerable (6).jpg'),
(273, 49, 'Inkvulnerable Tattoo', 'invulnerable (7).jpg'),
(274, 49, 'Inkvulnerable Tattoo', 'invulnerable (8).jpg'),
(275, 49, 'Inkvulnerable Tattoo', 'invulnerable (9).jpg'),
(276, 49, 'Inkvulnerable Tattoo', 'invulnerable (10).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`prices_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tattooshops`
--
ALTER TABLE `tattooshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tattoo_products`
--
ALTER TABLE `tattoo_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`design_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `prices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tattooshops`
--
ALTER TABLE `tattooshops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tattoo_products`
--
ALTER TABLE `tattoo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
