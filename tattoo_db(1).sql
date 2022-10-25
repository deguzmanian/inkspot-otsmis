-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announce_id`, `shopid`, `shopname`, `event`, `date`, `start_time`, `end_time`) VALUES
(42, 9, '', 'Announcement Trial For Asyang Tattoo No.3', '2022-09-29', '07:00:00', '19:00:00'),
(43, 10, '', 'Announcement Trial for Danny Mabatang No.1', '2022-09-29', '07:00:00', '19:00:00'),
(44, 10, '', 'Annoucement Trial Danny Mabatang No.2', '2022-09-28', '07:00:00', '19:00:00'),
(46, 9, '', 'Announcement Trial For Asyang Tattoo No.4', '2022-10-01', '07:00:00', '19:00:00'),
(47, 12, '', 'Announcement Trial for Herchel Vape and Ink 1', '2022-10-05', '13:00:00', '12:00:00'),
(48, 12, '', 'Announcement Trial for Herchel Vape and Ink 2', '2022-10-08', '08:00:00', '20:00:00'),
(49, 12, '', 'Announcement Trial for Herchel Vape and Ink 3', '2022-10-09', '08:00:00', '20:00:00'),
(50, 11, '', 'Announcement Trial for Emerson 1', '2022-10-04', '07:00:00', '22:00:00');

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
(1, 9, 163, 43, '2022-09-17 11:00:00', '', '', '', 'Cancelled'),
(2, 9, 168, 43, '2022-09-24 22:00:00', '', '', '', 'Cancelled'),
(3, 12, 168, 49, '2022-09-15 18:50:00', '', '', '', 'Approved'),
(4, 10, 168, 45, '2022-09-30 20:50:00', '', '', '', 'Cancelled'),
(5, 10, 168, 45, '2022-09-24 20:20:00', '', '', '', 'Approved'),
(25, 9, 173, 43, '2022-11-30 21:59:00', '', '09774875549', '', 'pending'),
(26, 9, 173, 43, '2022-09-30 21:00:00', '', '', '', ''),
(27, 10, 173, 45, '2022-09-29 11:00:00', '', '', '', ''),
(28, 10, 173, 45, '2022-10-05 11:10:00', '', '', '', ''),
(29, 10, 173, 45, '2022-09-28 12:00:00', '', '', '', ''),
(30, 10, 173, 45, '2022-11-23 12:00:00', '', '', '', ''),
(31, 11, 173, 47, '2022-09-23 22:40:00', '', '09774875549', '', 'pending'),
(32, 11, 173, 47, '2022-09-30 11:16:00', '', '09774875549', '', 'pending'),
(33, 11, 173, 47, '2022-10-06 12:00:00', '', '09774875549', '', 'pending'),
(34, 9, 176, 43, '2022-09-28 13:00:00', '', '09165921733', '', 'Approved'),
(35, 10, 176, 45, '2022-09-27 09:00:00', '', '09165921733', '', 'Approved'),
(36, 11, 176, 47, '2022-09-29 15:00:00', '', '09165921733', '', 'Approved'),
(37, 12, 176, 49, '2022-09-28 14:00:00', '', '09165921733', '', 'Approved'),
(38, 12, 168, 49, '2022-10-03 11:00:00', '', '09666921240', '', 'pending'),
(39, 12, 163, 49, '2022-10-07 00:00:00', '', '09123456789', '', 'Cancelled'),
(40, 12, 176, 49, '2022-10-10 11:00:00', '', '09165921733', '', 'Approved'),
(41, 9, 176, 43, '2022-10-04 09:00:00', '', '09165921733', '', 'Approved'),
(42, 11, 176, 47, '2022-10-06 10:00:00', '', '09165921733', '', 'Approved'),
(43, 11, 176, 47, '2022-10-05 10:00:00', '', '09165921733', '', 'Approved'),
(44, 12, 176, 49, '2022-10-03 10:30:00', '', '09165921733', '', 'Cancelled'),
(45, 12, 176, 49, '2022-10-04 10:30:00', '', '09165921733', '', 'Cancelled'),
(46, 12, 176, 49, '2022-10-05 09:30:00', '', '09165921733', '', 'Cancelled'),
(47, 9, 181, 43, '2022-10-10 10:00:00', '', '09480164969', '', 'Approved'),
(48, 9, 176, 43, '2022-10-08 10:00:00', '', '09165921733', '', 'Approved'),
(49, 9, 181, 43, '2022-10-07 10:00:00', '', '09667697527', '', 'Approved'),
(50, 10, 182, 45, '2022-10-10 08:30:00', '', '09695055496', '', 'Approved'),
(51, 9, 176, 43, '2022-10-20 13:00:00', '', '09165921733', '', 'Approved'),
(52, 9, 176, 43, '2022-10-10 16:20:00', '', '09165921733', '', 'Approved'),
(53, 9, 183, 43, '2022-10-19 17:30:00', '', '09950266795', '', 'Approved'),
(54, 12, 168, 49, '2022-10-24 11:40:00', '', '09666921240', '', 'Approved'),
(55, 11, 184, 47, '2022-10-17 14:50:00', '', '09770410155', '', 'Approved'),
(56, 12, 176, 49, '2022-10-19 14:10:00', '', '09165921733', '', 'Approved'),
(57, 9, 176, 43, '2022-10-21 13:30:00', '', '09165921733', '', 'Cancelled'),
(58, 9, 176, 43, '2022-10-19 13:00:00', '', '09165921733', '', 'Approved'),
(59, 9, 168, 43, '2022-10-21 13:00:00', '', '09666921240', '', 'Approved'),
(60, 9, 181, 43, '2022-10-24 13:10:00', '', '09667697527', '', 'Approved'),
(61, 9, 182, 43, '2022-10-27 02:15:00', '', '09695055496', '', 'Approved');

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
(8, 22, 168, 'John Alfred', 3, 'good job 2', 1662104159),
(9, 9, 176, 'Elle Celorico', 5, 'testing for asyang tattoo', 1664166518),
(10, 9, 163, 'Mich Dimaano', 5, 'testing for asyang tattoo 1', 1664410634),
(11, 9, 173, 'Anastashia Steele', 5, 'tesing for asyang tattoo 2', 1664414830),
(12, 11, 176, 'Elle Celorico', 5, 'testing for emerson, galing!', 1664499429),
(13, 10, 176, 'Elle Celorico', 5, 'testing for danny', 1664499516),
(14, 12, 176, 'Elle Celorico', 5, 'testing for herchel', 1664673483),
(15, 9, 176, 'Elle Celorico', 5, 'good', 1665111896),
(16, 9, 182, 'Shenna Celorico', 5, 'very good', 1665119821),
(17, 9, 181, 'Izle Salundaga', 3, 'Satisfied', 1665364293);

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
(8, 23, '0', '10:00', '16:00', 0),
(9, 24, '0', '10:00', '22:00', 0),
(17, 25, '0', '10:00', '22:00', 0),
(18, 26, '0', '10:00', '22:00', 0),
(27, 10, '0', '09:00', '20:00', 0),
(28, 10, '1', '', '', 1),
(29, 10, '2', '', '', 1),
(30, 10, '3', '', '', 1),
(31, 10, '4', '', '', 1),
(32, 10, '5', '', '', 1),
(33, 10, '6', '', '', 1),
(34, 10, '7', '', '', 1),
(43, 11, '0', '13:00', '18:00', 0),
(44, 11, '1', '', '', 1),
(45, 11, '2', '', '', 1),
(46, 11, '3', '', '', 1),
(47, 11, '4', '', '', 1),
(48, 11, '5', '', '', 1),
(49, 11, '6', '', '', 1),
(50, 11, '7', '', '', 1),
(51, 12, '0', '10:00', '20:00', 0),
(52, 12, '1', '', '', 1),
(53, 12, '2', '10:00', '14:00', 1),
(54, 12, '3', '', '', 1),
(55, 12, '4', '23:00', '16:00', 1),
(56, 12, '5', '', '', 1),
(57, 12, '6', '23:00', '15:00', 1),
(58, 12, '7', '', '', 1),
(59, 9, '0', '10:00', '22:00', 0),
(60, 9, '1', '', '', 1),
(61, 9, '2', '', '', 1),
(62, 9, '3', '', '', 1),
(63, 9, '4', '', '', 1),
(64, 9, '5', '', '', 1),
(65, 9, '6', '', '', 1),
(66, 9, '7', '', '', 1),
(67, 27, '0', '11:49', '12:49', 0);

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
(62, 'Tattoo', '1000', 22, 0),
(63, 'Tattoo', '800', 24, 0),
(64, 'Piercing ', '150', 24, 0),
(65, 'Tattoo', '1000', 25, 0),
(66, 'Piercing', '150', 25, 0),
(67, 'Tattoo', '1000', 26, 0),
(68, 'Piercing', '150', 26, 0),
(69, 'Tattoo', '1000', 27, 0);

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
(23, 'WILDCHILD LA UNION TATTOO STUDIO PHILIPPINES', 'deguzmanianmooreen@gmail.com', '09774875549', '', 'test shop', 'SANTIAGO SUR PUROK 5, San Fernando, La Union', 'https://goo.gl/maps/yaRJwWK1WpFPWD3YA', 'WILDCHILD LA UNION TATTOO STUDIO PHILIPPINES.jpg'),
(24, 'Scylla', 'scyllaromanoff11@gmail.com', '09123456789', '', 'Freelance Artist ', 'Mariveles, Bataan', '', 'Scylla.jpg'),
(25, 'Manta Ray', 'marjorieuser03@gmail.com', '09876543212', '', 'Tattoo and Piercing Shop', 'Limay,Bataan', '', 'Manta Ray.png'),
(26, 'Urban Tracker', 'urbantracker@gmail.com', '09234567890', '', 'Tattoo and Piercing Shop', 'Limay, Bataan', '', 'Urban Tracker.jpg'),
(27, 'She', 'admin@gmail.com', '09123456789', '', 'Tattoo Shop', 'Mariveles, Bataan', '', 'She.png');

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
  `status` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `void` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tattoo_products`
--

INSERT INTO `tattoo_products` (`id`, `serviceid`, `shopid`, `equipment_name`, `stocks`, `status`, `date_added`, `void`) VALUES
(11, 17, 79, 'ink', 47, '', '2022-07-24', 0),
(12, 22, 79, 'Needle', 9, '', '2022-07-24', 0),
(13, 25, 79, 'hello', 100, '', '2022-07-24', 0),
(14, 28, 79, 'zxc', 15, '', '2022-07-24', 0),
(15, 29, 80, 'Ink', 15, '', '2022-07-24', 0),
(16, 45, 10, 'Ink', 16, '', '2022-10-04', 0),
(17, 46, 10, 'Piercing Needle', 10, '', '2022-08-21', 0),
(18, 47, 11, 'Ink', 2, '', '2022-10-04', 0),
(19, 48, 11, 'Piercing Needle', 50, '', '2022-08-21', 0),
(20, 49, 12, 'Ink', 3, '', '2022-09-30', 0),
(21, 50, 12, 'Piercing Needle', 15, '', '2022-09-05', 0),
(24, 56, 18, 'Ink', 23, '', '2022-08-22', 0),
(25, 56, 18, 'Alcohol', 23, '', '2022-08-22', 0),
(26, 49, 12, 'Gloves', 4, '', '2022-09-30', 0),
(27, 57, 19, 'ink', 25, '', '2022-08-29', 0),
(28, 0, 19, 'alcohol', 25, '', '2022-09-25', 0),
(29, 0, 19, 'gloves', 100, '', '2022-08-29', 0),
(34, 43, 9, 'Ink', 4, '', '2022-10-07', 0),
(36, 44, 9, 'Piercing Needle', 6, '', '2022-10-07', 0),
(38, 43, 9, 'Tattoo Needle', 3, '', '2022-10-02', 0),
(40, 43, 9, 'Alcohol', 3, '', '2022-10-04', 0),
(45, 44, 9, 'Earrings', 25, '', '2022-10-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phonenumber`, `password`, `role_as`, `shopid`, `status`, `created_at`, `approved`, `docUploaded`) VALUES
(28, 'Mich', 'Celorico', 'admin@gmail.com', '09165921733', '$2y$10$wKujHKwK8U2e8Cm5Ou6swepy/w5kJNY382ALibBctQ73f25zIBCJq', 2, 49, 'approved', '2022-10-06 03:50:09', 0, ';28.docx'),
(140, 'micdhsic', 'weqdqewdqwe', 'asdfsa@gmail.com', '09123456789', '$2y$10$CBbQF2vtrt33gsZ0cJOx3eV2myLtZ.XQh0yeVGJFm5HrrF8Oc6KpS', 1, 1, 'pending', '2022-08-21 08:45:28', 0, ''),
(141, 'dsafsdgsad', 'dsaffsdf', 'asdf@gmail.com', '09123456789', '$2y$10$YTALeVTWyRHpFW.AG2m83u6lJkz9vK8XKjK8irrAT1uY0.1..eJU6', 1, 2, 'pending', '2022-08-21 09:32:00', 2, ';141.jpg;141.jpg'),
(142, 'John Alfred', 'Borreros', 'borrerosjohnalfred704@gmail.com', '09123456789', '$2y$10$Y/tFfF3UIaDleFU2.FOpFOY8j7PaBV2tgm1IQmK2nyGcdfN/dPjrO', 2, 0, 'pending', '2022-08-21 08:51:07', 1, ''),
(143, 'johny', 'wedfaed', 'asdfas@gmail.com', '09123456789', '$2y$10$9fraqAu1siWCNEB8as6aUuHVTMG2VULPICE32QGRP08TQxTkwDceC', 1, 3, 'pending', '2022-08-21 09:13:01', 1, ';143.jpg;143.jpg'),
(149, 'Diane', 'Medina', 'dianemedina192916@gmail.com', '09667500519', '$2y$10$Lr8O1kVrG2JQ/s0oU/QgDeCZijkQN9C1n8792M0eLtWB83kaNGBHe', 1, 9, 'pending', '2022-08-21 10:17:03', 1, ';149.jpg'),
(150, 'Danilo', 'Manrique', 'danilo.manrique@yahoo.com', '09565790666', '$2y$10$yp5cSX2awhK1VTMt0wVO/eSdHb3VAmxbxR3F3q14oS/5..MT84nLW', 1, 10, 'pending', '2022-09-05 13:32:44', 1, ';150.jpg'),
(151, 'Emerson', 'Peña', 'penaemerson504@gmail.com', '09616415836', '$2y$10$vfWbYCynX9gBkGBvg5CPyeXRZ7hUWreVkEF1f/pGeG/OXUFBqxyfW', 1, 11, 'pending', '2022-08-21 11:01:49', 1, ';151.jpg'),
(152, 'Herchel', 'Lungcay', 'lungcayherchel@gmail.com', '09278905441', '$2y$10$.IQAwLa29HaofrF7jIicT.MO.Fgg69pE3sHtuSaUpGbOZsjFD4zga', 1, 12, 'pending', '2022-08-21 12:31:11', 1, ';152.jpg'),
(163, 'Mich', 'Dimaano', 'michdimaano11@gmail.com', '09123456789', '$2y$10$7W3rE7oKOb1zildZdVLMAe4GGmznhcZvB4ZjS.OAdnuBGQ9e5dZo6', 0, 0, 'pending', '2022-08-22 02:20:25', 1, ''),
(165, 'Marjorie', 'Carter', 'michuser02@gmail.com', '09123456789', '$2y$10$SdeqBom2wyv7EUFz0sLV2O.oqz7WawvPQZkQg/gM9V4aQHxnY4ASW', 3, 18, 'pending', '2022-08-22 06:25:57', 1, ';165.jpg'),
(168, 'John', 'Alfred', 'johnalfuser01@gmail.com', '09666921240', '$2y$10$154211car/lhzfZA9gtXmuODeSZsotNITx55exZrHtgs.nCOCEhvS', 0, 0, 'pending', '2022-09-25 11:16:40', 1, ''),
(169, 'Mich', 'Celorico', 'celoricomichellemae@gmail.com', '09165921733', '$2y$10$mCpIzU/9/WYZf6O7xdh2wOSC5pFPixdfXa/ih2vs0YeJnZwKGTTDG', 1, 19, 'pending', '2022-08-22 13:34:04', 1, ';169.jpg'),
(172, 'Erika ', 'Cate', 'erikacate@gmail.com', '09876545321', '$2y$10$r82eDrWKv9lzhYQHE0Qqde1S4yJALeHjt3874FAitKw7DmEdlS6CC', 3, 22, 'pending', '2022-08-24 09:04:03', 1, ';172.png'),
(173, 'Anastashia', 'Steele', 'deguzmanianmooreen@gmail.com', '09774875549', '$2y$10$h2VS0m6wxCmDyQwfZv4H2uYaD0wKBAhh8brgImljNbJYHEaPtT1li', 0, 23, 'pending', '2022-09-25 14:53:08', 1, ';173.jpg'),
(176, 'Elle', 'Celorico', 'celoricomichelle533@gmail.com', '09165921733', '$2y$10$R/0ElKIDroI5PXbMINTNEeflHCjrf1FhZz3RXq.I07YK0VLnJaHg6', 0, 0, 'pending', '2022-09-26 04:17:14', 1, ''),
(177, 'Scylla', 'Romanoff', 'scyllaromanoff11@gmail.com', '09123456789', '$2y$10$mwmalSD2fJ4h9XG.6Q9zkuGQ5D4jBm/33kbChGLXmqbGYtGGDMeTK', 3, 24, 'pending', '2022-09-29 00:21:09', 1, ';177.jpg'),
(178, 'Manta', 'Ray', 'marjorieuser03@gmail.com', '09876543212', '$2y$10$//fQRNxUssLoNbnVvCKITOqavN1M25EkqwDV8WuYUkmflpKPXvNrm', 0, 0, 'pending', '2022-09-30 01:19:29', 1, ';178.jpg'),
(179, 'Manta', 'Ray', 'marjorieuser03@gmail.com', '09876543212', '$2y$10$LD/JTXuX.YJzBAcBtQ/D6.HpV0T6lHEAtT2LAv4ojpmcNb4TwG0.O', 1, 25, 'pending', '2022-09-30 00:01:33', 0, ''),
(180, 'Urban', 'Tracker', 'urbantracker@gmail.com', '09234567890', '$2y$10$rv7lB.OfcislRyku4PXq3e98YwBmG7kfIcGifvKvWVTAuJpqaVsaG', 1, 26, 'pending', '2022-09-30 00:12:06', 1, ';180.pdf'),
(181, 'Izle', 'Salundaga', 'kmysalundaga@gmail.com', '09667697527', '$2y$10$4D3krzbeqUglD5qEA7tgQO8YqQfy8NDNMlxia5KH9K3ZxLz.sjQQ.', 0, 0, 'pending', '2022-10-04 09:08:07', 1, ''),
(182, 'Shenna', 'Celorico', 'xheneeeycelorico@gmail.com', '09695055496', '$2y$10$wKW9Xs78MWdmd4.Re90/f.Nu27l.Cvrci5fD8GvG66qkIB28KrVRi', 0, 0, 'pending', '2022-10-04 09:20:56', 1, ''),
(183, 'Erika', 'Cate', 'ericauser04@gmail.com', '09950266795', '$2y$10$nmIFxv02etLQnpyOmCPzM.N6X90Kw9iKwnyExmv/DC3JeDLsM9wPq', 0, 0, 'pending', '2022-10-06 03:35:38', 1, ''),
(184, 'Majo', 'Carter', 'marjouser07@gmail.com', '09770410155', '$2y$10$8tpZvjPo7VGfH5W8B.3aA.HDPUxqvSkB0oi8nqgICApn7PcSejd8.', 0, 0, 'pending', '2022-10-06 03:46:40', 1, ''),
(185, 'She', 'Shop', 'admin@gmail.com', '09123456789', '$2y$10$fuyuSg5iemR83u2SPCeGXOsKI.Mg39sAZ8xD1zYrfBpTzBbslbrRC', 1, 27, 'pending', '2022-10-06 03:49:33', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `design_id` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `likes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`design_id`, `shopid`, `shopname`, `image`, `likes`) VALUES
(21, 9, 'Asyang Tattoo', 'asyang (1).jpg', 0),
(22, 9, 'Asyang Tattoo', 'asyang (2).jpg', 0),
(23, 9, 'Asyang Tattoo', 'asyang (3).jpg', 0),
(24, 9, 'Asyang Tattoo', 'asyang (4).jpg', 0),
(25, 9, 'Asyang Tattoo', 'asyang (5).jpg', 0),
(26, 9, 'Asyang Tattoo', 'asyang (6).jpg', 0),
(27, 9, 'Asyang Tattoo', 'asyang (7).jpg', 0),
(28, 9, 'Asyang Tattoo', 'asyang (8).jpg', 0),
(29, 9, 'Asyang Tattoo', 'asyang (9).jpg', 0),
(30, 9, 'Asyang Tattoo', 'asyang (10).jpg', 0),
(31, 9, 'Asyang Tattoo', 'asyang (11).jpg', 0),
(32, 9, 'Asyang Tattoo', 'asyang (12).jpg', 0),
(33, 9, 'Asyang Tattoo', 'asyang (13).jpg', 0),
(34, 9, 'Asyang Tattoo', 'asyang (14).jpg', 0),
(35, 9, 'Asyang Tattoo', 'asyang (15).jpg', 0),
(41, 60, 'New Tinta Mariveles', 'new (1).jpg', 0),
(42, 60, 'New Tinta Mariveles', 'new (2).jpg', 0),
(43, 60, 'New Tinta Mariveles', 'new (3).jpg', 0),
(44, 60, 'New Tinta Mariveles', 'new (4).jpg', 0),
(45, 60, 'New Tinta Mariveles', 'new (5).jpg', 0),
(46, 60, 'New Tinta Mariveles', 'new (6).jpg', 0),
(47, 60, 'New Tinta Mariveles', 'new (7).jpg', 0),
(48, 60, 'New Tinta Mariveles', 'new (8).jpg', 0),
(49, 60, 'New Tinta Mariveles', 'new (9).jpg', 0),
(50, 60, 'New Tinta Mariveles', 'new (10).jpg', 0),
(51, 60, 'New Tinta Mariveles', 'new (11).jpg', 0),
(52, 60, 'New Tinta Mariveles', 'new (12).jpg', 0),
(53, 60, 'New Tinta Mariveles', 'new (13).jpg', 0),
(54, 60, 'New Tinta Mariveles', 'new (14).jpg', 0),
(55, 60, 'New Tinta Mariveles', 'new (15).jpg', 0),
(56, 60, 'New Tinta Mariveles', 'new (16).jpg', 0),
(57, 60, 'New Tinta Mariveles', 'new (17).jpg', 0),
(75, 42, 'Smile Tattoo Studio', 'smile (1).jpg', 0),
(76, 42, 'Smile Tattoo Studio', 'smile (2).jpg', 0),
(77, 42, 'Smile Tattoo Studio', 'smile (3).jpg', 0),
(78, 42, 'Smile Tattoo Studio', 'smile (4).jpg', 0),
(79, 42, 'Smile Tattoo Studio', 'smile (5).jpg', 0),
(80, 42, 'Smile Tattoo Studio', 'smile (6).jpg', 0),
(81, 42, 'Smile Tattoo Studio', 'smile (7).jpg', 0),
(82, 42, 'Smile Tattoo Studio', 'smile (8).jpg', 0),
(83, 42, 'Smile Tattoo Studio', 'smile (9).jpg', 0),
(84, 42, 'Smile Tattoo Studio', 'smile (10).jpg', 0),
(85, 42, 'Smile Tattoo Studio', 'smile (11).jpg', 0),
(86, 42, 'Smile Tattoo Studio', 'smile (12).jpg', 0),
(87, 42, 'Smile Tattoo Studio', 'smile (13).jpg', 0),
(88, 42, 'Smile Tattoo Studio', 'smile (14).jpg', 0),
(89, 42, 'Smile Tattoo Studio', 'smile (15).jpg', 0),
(90, 42, 'Smile Tattoo Studio', 'smile (16).jpg', 0),
(91, 42, 'Smile Tattoo Studio', 'smile (17).jpg', 0),
(92, 42, 'Smile Tattoo Studio', 'smile (18).jpg', 0),
(93, 42, 'Smile Tattoo Studio', 'smile (19).jpg', 0),
(94, 42, 'Smile Tattoo Studio', 'smile (20).jpg', 0),
(115, 10, 'Danny Mabatang Ink', 'mabatang (1).jpg', 0),
(116, 10, 'Danny Mabatang Ink', 'mabatang (2).jpg', 0),
(117, 10, 'Danny Mabatang Ink', 'mabatang (3).jpg', 0),
(118, 10, 'Danny Mabatang Ink', 'mabatang (4).jpg', 0),
(119, 10, 'Danny Mabatang Ink', 'mabatang (5).jpg', 0),
(120, 10, 'Danny Mabatang Ink', 'mabatang (6).jpg', 0),
(121, 10, 'Danny Mabatang Ink', 'mabatang (7).jpg', 0),
(122, 10, 'Danny Mabatang Ink', 'mabatang (8).jpg', 0),
(123, 10, 'Danny Mabatang Ink', 'mabatang (9).jpg', 0),
(124, 10, 'Danny Mabatang Ink', 'mabatang (10).jpg', 0),
(125, 10, 'Danny Mabatang Ink', 'mabatang (11).jpg', 0),
(126, 10, 'Danny Mabatang Ink', 'mabatang (12).jpg', 0),
(127, 10, 'Danny Mabatang Ink', 'mabatang (13).jpg', 0),
(128, 10, 'Danny Mabatang Ink', 'mabatang (14).jpg', 0),
(129, 10, 'Danny Mabatang Ink', 'mabatang (15).jpg', 0),
(135, 46, 'Tintamore', 'tinta1.jpg', 0),
(136, 46, 'Tintamore', 'tinta2.jpg', 0),
(137, 46, 'Tintamore', 'tinta3.jpg', 0),
(138, 46, 'Tintamore', 'tinta4.jpg', 0),
(139, 46, 'Tintamore', 'tinta5.jpg', 0),
(140, 46, 'Tintamore', 'tinta6.jpg', 0),
(141, 46, 'Tintamore', 'tinta7.jpg', 0),
(142, 46, 'Tintamore', 'tinta8.jpg', 0),
(143, 46, 'Tintamore', 'tinta9.jpg', 0),
(144, 46, 'Tintamore', 'tinta10.jpg', 0),
(145, 46, 'Tintamore', 'tinta11.jpg', 0),
(146, 46, 'Tintamore', 'tinta12.jpg', 0),
(147, 46, 'Tintamore', 'tinta13.jpg', 0),
(148, 46, 'Tintamore', 'tinta14.jpg', 0),
(149, 46, 'Tintamore', 'tinta15.jpg', 0),
(150, 46, 'Tintamore', 'tinta16.jpg', 0),
(151, 46, 'Tintamore', 'tinta17.jpg', 0),
(152, 46, 'Tintamore', 'tinta18.jpg', 0),
(153, 46, 'Tintamore', 'tinta19.jpg', 0),
(154, 46, 'Tintamore', 'tinta20.jpg', 0),
(189, 48, 'Bataan Tattoo', 'bataan (1).jpg', 0),
(190, 48, 'Bataan Tattoo', 'bataan (2).jpg', 0),
(191, 48, 'Bataan Tattoo', 'bataan (3).jpg', 0),
(192, 48, 'Bataan Tattoo', 'bataan (4).jpg', 0),
(193, 48, 'Bataan Tattoo', 'bataan (5).jpg', 0),
(194, 48, 'Bataan Tattoo', 'bataan (6).jpg', 0),
(195, 48, 'Bataan Tattoo', 'bataan (7).jpg', 0),
(196, 48, 'Bataan Tattoo', 'bataan (8).jpg', 0),
(197, 48, 'Bataan Tattoo', 'bataan (9).jpg', 0),
(198, 48, 'Bataan Tattoo', 'bataan (10).jpg', 0),
(199, 48, 'Bataan Tattoo', 'bataan (11).jpg', 0),
(200, 48, 'Bataan Tattoo', 'bataan (12).jpg', 0),
(201, 48, 'Bataan Tattoo', 'bataan (13).jpg', 0),
(202, 48, 'Bataan Tattoo', 'bataan (14).jpg', 0),
(203, 48, 'Bataan Tattoo', 'bataan (15).jpg', 0),
(204, 48, 'Bataan Tattoo', 'bataan (16).jpg', 0),
(205, 48, 'Bataan Tattoo', 'bataan (17).jpg', 0),
(206, 48, 'Bataan Tattoo', 'bataan (18).jpg', 0),
(207, 48, 'Bataan Tattoo', 'bataan (19).jpg', 0),
(208, 48, 'Bataan Tattoo', 'bataan (20).jpg', 0),
(209, 49, 'Inkvulnerable Tattoo', 'invulnerable (11).jpg', 0),
(210, 49, 'Inkvulnerable Tattoo', 'invulnerable (12).jpg', 0),
(211, 49, 'Inkvulnerable Tattoo', 'invulnerable (13).jpg', 0),
(212, 49, 'Inkvulnerable Tattoo', 'invulnerable (14).jpg', 0),
(213, 49, 'Inkvulnerable Tattoo', 'invulnerable (15).jpg', 0),
(214, 49, 'Inkvulnerable Tattoo', 'invulnerable (16).jpg', 0),
(216, 12, 'Herchel Vape and Ink', 'herchel (1).jpg', 0),
(217, 12, 'Herchel Vape and Ink', 'herchel (2).jpg', 0),
(218, 12, 'Herchel Vape and Ink', 'herchel (3).jpg', 0),
(219, 12, 'Herchel Vape and Ink', 'herchel (4).jpg', 0),
(220, 12, 'Herchel Vape and Ink', 'herchel (5).jpg', 0),
(221, 12, 'Herchel Vape and Ink', 'herchel (6).jpg', 0),
(222, 12, 'Herchel Vape and Ink', 'herchel (7).jpg', 0),
(223, 12, 'Herchel Vape and Ink', 'herchel (8).jpg', 0),
(224, 12, 'Herchel Vape and Ink', 'herchel (9).jpg', 0),
(225, 12, 'Herchel Vape and Ink', 'herchel (10).jpg', 0),
(226, 12, 'Herchel Vape and Ink', 'herchel (11).jpg', 0),
(227, 12, 'Herchel Vape and Ink', 'herchel (12).jpg', 0),
(228, 12, 'Herchel Vape and Ink', 'herchel (13).jpg', 0),
(229, 12, 'Herchel Vape and Ink', 'herchel (14).jpg', 0),
(230, 12, 'Herchel Vape and Ink', 'herchel (15).jpg', 0),
(233, 11, 'Emersons Earth Ink Tattoo', 'emerson (1).jpg', 0),
(234, 11, 'Emersons Earth Ink Tattoo', 'emerson (2).jpg', 0),
(235, 11, 'Emersons Earth Ink Tattoo', 'emerson (3).jpg', 0),
(236, 11, 'Emersons Earth Ink Tattoo', 'emerson (4).jpg', 0),
(237, 11, 'Emersons Earth Ink Tattoo', 'emerson (5).jpg', 0),
(238, 11, 'Emersons Earth Ink Tattoo', 'emerson (6).jpg', 0),
(239, 11, 'Emersons Earth Ink Tattoo', 'emerson (7).jpg', 0),
(240, 11, 'Emersons Earth Ink Tattoo', 'emerson (8).jpg', 0),
(241, 11, 'Emersons Earth Ink Tattoo', 'emerson (9).jpg', 0),
(242, 11, 'Emersons Earth Ink Tattoo', 'emerson (10).jpg', 0),
(243, 11, 'Emersons Earth Ink Tattoo', 'emerson (11).jpg', 0),
(244, 11, 'Emersons Earth Ink Tattoo', 'emerson (12).jpg', 0),
(245, 11, 'Emersons Earth Ink Tattoo', 'emerson (13).jpg', 0),
(246, 11, 'Emersons Earth Ink Tattoo', 'emerson (14).jpg', 0),
(247, 11, 'Emersons Earth Ink Tattoo', 'emerson (15).jpg', 0),
(253, 47, 'Baruyas Ink ', 'baruya (1)-1655393826.jpg', 0),
(254, 47, 'Baruyas Ink ', 'baruya (2)-1655393826.jpg', 0),
(255, 47, 'Baruyas Ink ', 'baruya (3)-1655393826.jpg', 0),
(256, 47, 'Baruyas Ink ', 'baruya (4)-1655393826.jpg', 0),
(257, 47, 'Baruyas Ink ', 'baruya (5)-1655393826.jpg', 0),
(258, 47, 'Baruyas Ink ', 'baruya (6)-1655393826.jpg', 0),
(259, 47, 'Baruyas Ink ', 'baruya (7)-1655393826.jpg', 0),
(260, 47, 'Baruyas Ink ', 'baruya (8)-1655393826.jpg', 0),
(261, 47, 'Baruyas Ink ', 'baruya (9)-1655393826.jpg', 0),
(262, 47, 'Baruyas Ink ', 'baruya (10)-1655393826.jpg', 0),
(263, 47, 'Baruyas Ink ', 'baruya (11)-1655393826.jpg', 0),
(264, 47, 'Baruyas Ink ', 'baruya (12)-1655393826.jpg', 0),
(265, 47, 'Baruyas Ink ', 'baruya (13)-1655393826.jpg', 0),
(266, 47, 'Baruyas Ink ', 'baruya (14)-1655393826.jpg', 0),
(267, 49, 'Inkvulnerable Tattoo', 'invulnerable (1).jpg', 0),
(268, 49, 'Inkvulnerable Tattoo', 'invulnerable (2).jpg', 0),
(269, 49, 'Inkvulnerable Tattoo', 'invulnerable (3).jpg', 0),
(270, 49, 'Inkvulnerable Tattoo', 'invulnerable (4).jpg', 0),
(271, 49, 'Inkvulnerable Tattoo', 'invulnerable (5).jpg', 0),
(272, 49, 'Inkvulnerable Tattoo', 'invulnerable (6).jpg', 0),
(273, 49, 'Inkvulnerable Tattoo', 'invulnerable (7).jpg', 0),
(274, 49, 'Inkvulnerable Tattoo', 'invulnerable (8).jpg', 0),
(275, 49, 'Inkvulnerable Tattoo', 'invulnerable (9).jpg', 0),
(276, 49, 'Inkvulnerable Tattoo', 'invulnerable (10).jpg', 0);

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
  MODIFY `announce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `prices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tattooshops`
--
ALTER TABLE `tattooshops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tattoo_products`
--
ALTER TABLE `tattoo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
