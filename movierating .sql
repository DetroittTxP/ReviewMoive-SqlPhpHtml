-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movierating`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `movie_id` int(50) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `movie_comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `movie_score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`movie_id`, `username`, `movie_comment`, `movie_score`) VALUES
(16, 'kritkorn', 'หนังกากมากครับเอาไป 1', 1),
(17, 'Paramee', 'หนังดีมากครับไอ่สัส', 2),
(26, 'kritkorn', 'หนังดีมากครับสัส', 0),
(14, 'kritkorn', 'หนังกากมากไอเคนไอเชี่ยเคนไอสัส', -21),
(16, 'kritkorn', '32', 23),
(16, 'minecraftpond', 'ไม่ชอบ', 1),
(23, 'minecraftpond', 'เก่งมากขอบใจ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `email`) VALUES
(1, 'kritkorn', '224236', 'krit_korn@gmail.com'),
(2, 'Peerawut', '236224', 'Peerawut@gmail.com'),
(3, 'Paramee', '123456', 'Pomme@gmail.com'),
(4, 'KritProm', '223456', 'Sumsan@gmail.com'),
(5, 'minecraftpond', '123456', 'KENZA@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(30) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_type` varchar(50) NOT NULL,
  `movie_score` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_type`, `movie_score`) VALUES
(1, 'MINIONS 2', 'Comedy', 0),
(2, 'THE MEDIUM', 'Horror', 0),
(3, 'JUMANJI', 'Comedy', 0),
(4, 'IT', 'Horror', 0),
(5, 'HANGOVER', 'Comedy', 0),
(6, 'VENOM', 'Action', 0),
(7, 'MORTAL ENGINE', 'Fantasy', 0),
(8, 'FREE GUY', 'Comedy', 0),
(9, 'TED 2', 'Comedy', 0),
(10, 'IT 2', 'Horror', 0),
(11, 'THE DARK TOWER', 'Fantasy', 0),
(12, 'TEXAS CHAINSAW', 'Horror', 0),
(13, 'MIDSOMMAR', 'Horror', 0),
(14, 'TOP GUN MAVERICK', 'Action', 0),
(15, 'THE GRAY MAN', 'Action', 0),
(16, 'SPIDERMAN NO WAY HOME', 'Fantasy', 0),
(17, 'FAST & FURIOUS 7', 'Action', 0),
(18, 'HOME STAY', 'Fantasy', 0),
(19, 'THE BATMAN', 'Action', 0),
(20, 'MALEFICENT: MISTRESS OF EVIL', 'Fantasy', 0),
(21, 'READY PLAYER ONE', 'SCI-FI', 0),
(22, '365 DAYS', 'Romantic', 0),
(23, 'BLADE RUNNER 2049', 'SCI-FI', 0),
(24, 'FIFTY SHADES OF GREY', 'Romantic', 0),
(25, 'AVATAR', 'SCI-FI', 0),
(26, 'BROTHER OF THE YEARS', 'Romantic', 0),
(27, 'PACIFIC RIM', 'SCI-FI', 0),
(28, 'REDEEMING LOVE', 'Romantic', 0),
(29, 'JURASSIC WORLD : DOMINION', 'SCI-FI', 0),
(30, 'ME BEFORE YOU', 'Romantic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `movie_id` int(50) NOT NULL,
  `movie_comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `movie_score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `movie_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
