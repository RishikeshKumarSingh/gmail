-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fname`, `lname`, `email`, `password`, `gender`, `dob`) VALUES
(1, 'Rishikesh', 'Singh', '2001-07-28', 'male', 'rishi2807@gmail.com', 'rishi2807'),
(2, 'Rishi', 'singh', 'rishi', 'male', 'rishi@gmail.com', '2002-07-28'),
(3, 'Rishi', 'singh', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', 'rishi@gmail.com', '2200-01-22'),
(4, 'Rishi', 'singh', 'rishi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', '2222-02-22'),
(5, 'rishi', 'singh', 'rishi2807@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', ''),
(6, 'rishikesh', 'singh', 'rishi1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', '2001-07-28'),
(7, 'Ram', 'Kumar', 'ram@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', '2000-02-12'),
(8, 'Shayam', 'Kumar', 'shayam@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', '2001-07-20'),
(9, 'Geeta', 'Kumari', 'geeta@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'female', '2003-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `attachment` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `sender_id`, `reciver_id`, `subject`, `content`, `attachment`, `date`, `status`) VALUES
(1, 7, 8, 'check', 'all set ready to send', NULL, '2022-02-25 10:19:03', 1),
(2, 8, 7, 'check1', 'all set ready to send mail to ram', NULL, '2022-02-25 10:20:17', 1),
(3, 9, 7, 'hlw mai geeta', 'mai geeta thik hunn', NULL, '2022-02-25 10:48:08', 1),
(4, 9, 8, 'hai mai geeta', 'mai geeta hunn', NULL, '2022-02-25 10:48:43', 1),
(5, 7, 4, 'kaesa hai bro', 'kya aaj aaa jana pankaj ka g@nd farna hai', NULL, '2022-03-22 03:25:01', -1),
(6, 7, 4, 'file check', 'dfdfghjhg', 'DSC_0025 (6).JPG', '2022-03-22 03:34:39', -1),
(7, 7, 7, 'file check', 'eawrsedrtfgvhkn', 'pexels-picography-4776.jpg', '2022-03-22 10:37:39', 1),
(8, 7, 8, 'file check1', 'safdghjk', '3701359_AllotmentOrder.pdf', '2022-03-04 10:08:24', 1),
(9, 7, 4, 'werfghjk', 'dfghjghk', 'imageedit_2_4545568520.jpg', '2022-03-22 03:35:03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`mail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
