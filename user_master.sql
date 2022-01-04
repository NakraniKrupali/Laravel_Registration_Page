-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 07:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_user_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`uid`, `uname`, `bday`, `email`, `hobby`, `gender`, `password`, `city`) VALUES
(1, 'Krupali', '1999-11-26', 'nakranikrupali99@gmail.com', 'Listening', 'F', '123', 'Surat'),
(2, 'Taksh', '2016-12-07', 'takshnakrani@gmail.com', 'Dancing', 'M', 't123', 'Vadodara'),
(5, 'Het', '2013-12-04', 'het123@yahoo.com', 'Dancing,Singing', 'M', 'het123', 'Surat'),
(6, 'Mayuri', '2005-08-01', 'mayur12@gmail.com', 'Singing', 'F', 'm123', 'Mumbai'),
(7, 'Dipu', '2021-12-09', 'dipu99@gmail.com', 'Cricket', 'F', '123', 'Pune'),
(8, 'Krishna', '2011-12-01', 'krishna67@gmail.com', 'Dancing,Singing', 'F', '1233', 'Mumbai'),
(9, 'Riya Patel', '2021-12-05', 'riya1@gmail.com', 'Dancing,Listening,Reading', 'F', 'asdc', 'Pune'),
(10, 'Meera Shah', '2021-12-03', 'ms12r@gmail.com', 'Listening', 'F', 'sadZX', 'Mumbai'),
(11, 'Riya', '2021-12-31', 'riya12@gmail.com', 'Dancing', 'F', 'q23', 'Pune'),
(12, 'Rashmi', '2006-05-16', 'rashmi12@gmail.com', 'Dancing,Listening', 'F', '123', 'Surat'),
(13, 'Nishant Dave', '2000-01-18', 'dave12@yahoo.com', 'Listening,Internet Surfing,Reading', 'M', '12a', 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
