-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 01:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblog`
--

CREATE TABLE `addblog` (
  `bid` int(11) NOT NULL,
  `bphoto` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addblog`
--

INSERT INTO `addblog` (`bid`, `bphoto`, `title`, `description`, `cdate`, `ctime`) VALUES
(1, 'blogs_image/slide01.jpg', 'good morning', 'i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.i have written an blogs on good Morning.', '05/10/18', '16:51:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `master_aid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`master_aid`, `photo`, `email`, `password`) VALUES
(1, 'upload/slide04.jpg', 'ridhi@gmail.com', 'a123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblog`
--
ALTER TABLE `addblog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`master_aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblog`
--
ALTER TABLE `addblog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `master_aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
