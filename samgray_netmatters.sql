-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 02:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samgray_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message`) VALUES
(13, 'test', 'test', 'test@test.com', 2147483647, 'test', 'test'),
(14, 'asdasdasd', 'asdasd', 'asdasd@asdasd.com', 11111111, 'asdasdasd', 'asdasdads'),
(15, 'asdasdasd', 'asdasd', 'asdasd@asdasd.com', 11111111, 'asdasdasd', 'asdasdads'),
(16, 'asdasd', 'asdasd', 'asdasd@asdasd.com', 4444444, 'asdasdasd', 'asdadsdas'),
(17, 'asdasd', 'asdasd', 'asdasd@asdasd.com', 4444444, 'asdasdasd', 'asdadsdas'),
(18, 'test', '', 'test@test.com', 0, '', ''),
(19, 'test', '', 'test@test.com', 0, '', ''),
(20, 'wewwewe', 'wewewe', 'wewew@wewewe.com', 4444444, 'qweqwe', 'qweqweewqwe');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `author` text NOT NULL,
  `date` text NOT NULL,
  `class` text NOT NULL,
  `tag` text NOT NULL,
  `image_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `author`, `date`, `class`, `tag`, `image_path`) VALUES
(1, 'The Green Team Reducing Our Carbon Footprint...', 'At Netmatters, we are continuing to support carbon reduction and reforestation projects through our Ecologi programme.', 'Posted by Netmatters', '23rd November 2022', 'news', 'News', './img/green-team.png'),
(2, 'In-House vs Outsourced Software Development', 'One of the most common dilemmas businesses face when embarking on a software development project is...', 'Posted by Netmatters', '23rd November 2022', 'news', 'news', './img/inhouse.png'),
(3, 'Hiring A 2nd Line Support Technician', 'Salary Range £28k-£36k + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location Wymondh...', 'Posted by Netmatters', '23rd November 2022', 'news', 'news', './img/2nd-line-support.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'asdasd', 'asdasd@asdasd.com'),
(2, '', ''),
(3, 'asdasd', 'asdasd@gmail.com'),
(4, 'test123', 'test123@test123.com'),
(5, 'test1234', 'test1234@test1234.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
