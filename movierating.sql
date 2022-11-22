-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 10:36 AM
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
(16, 'kritkorn', 'สนุกมากกกก', 8),
(17, 'kritkorn', 'เยี่ยมจริงๆ', 5),
(17, 'Paramee', 'แย่', 2),
(16, 'Paramee', 'ชอบมากก', 7),
(19, 'Paramee', 'มันมาก', 4),
(15, 'Paramee', 'พระเอกหล่อ', 9),
(17, 'KritProm', 'แจ๋ว', 6),
(14, 'KritProm', 'สุดยอดด', 7),
(17, 'KritProm', 'ไม่ชอบรถเลย', 2),
(1, 'Peerawut', 'ดูเพลินมาก', 7),
(3, 'Peerawut', 'สนุกมากๆลุ้นทั้งเรื่องเลย', 9),
(5, 'Peerawut', 'เพลินมากกกกก ประทับใจ', 6),
(6, 'Peerawut', 'เร้าใจสุดๆ', 7),
(7, 'Peerawut', 'ยิงทั้งเรื่อง เพลินตาาาา', 5),
(8, 'minecraftpond', 'สนุกมากๆๆ', 10),
(9, 'minecraftpond', 'ขำทั้งเรื่องเลยยยย', 8),
(10, 'minecraftpond', 'น่ากลัวมากกก', 6),
(2, 'minecraftpond', 'จบแบบงงๆ ', 3),
(11, 'minecraftpond', 'สนุกจัดๆๆ', 7),
(12, 'minecraftpond', 'โคตรเท่เลยคร้าบบบ', 7),
(13, 'minecraftpond', 'เศร้ามาก แงงง', 8),
(14, 'minecraftpond', 'เครื่องบินโคตรเท่เลยครับ', 10),
(15, 'minecraftpond', 'เพลินตา เพลินใจมากๆ', 8),
(16, 'minecraftpond', 'Peter โคตรหล่อ', 7),
(16, 'PEERAUT', 'สนุกโคตรๆเลยครับ', 10),
(17, 'PEERAUT', 'Dom ขับอย่างเท่', 8),
(18, 'PEERAUT', 'สนุกครับ ลุ้นทั้งเรื่อง', 8),
(19, 'PEERAUT', 'โคตรdarkkk', 8),
(20, 'PEERAUT', 'สนุกจัดๆ', 5),
(30, 'PEERAUT', 'ลึกซึ้งกินใจมาก', 7),
(29, 'KritProm', 'อยากดูภาคต่อไปแล้วครับ สุดจัด', 10),
(28, 'KritProm', 'ประทับใจจริงๆ ดูแล้วอยากมีแฟนเลยย งืออ', 9),
(27, 'KritProm', 'โคตรเท่เลย ตอนสู้กันชอบมากครับ', 8),
(26, 'KritProm', 'โคตรมันส์ครับ ชอบซันนี้มากกก', 9),
(25, 'KritProm', 'ภาพสวยตระการตามากครับ', 10),
(24, 'KritProm', 'ดูแล้วงงๆครับ', 2),
(23, 'KritProm', 'ไม่อินเลย ครับ', 1),
(22, 'KritProm', 'เกินบรรยายครับ', 6),
(21, 'KritProm', 'สนุกมาก แนะนำเลยครับสายเกมเมอร์', 10),
(13, 'minecraftpond', 'น้ำตาแตกฮะ', 7),
(12, 'minecraftpond', 'สนุกมากก ลุ้นตัวเกร็ง', 8),
(21, 'minecraftpond', 'โคตรชอบเลยฮ้าบบ', 9),
(1, 'minecraftpond', 'เหมาะกับเด็กครับ', 1),
(2, 'minecraftpond', 'จบแบบ ไม่ได้เรื่อง!!!', 0),
(3, 'minecraftpond', 'very very good', 4),
(3, 'minecraftpond', 'very very good', 4),
(6, 'minecraftpond', 'Exellent', 6),
(8, 'minecraftpond', 'soo funny', 10),
(25, 'minecraftpond', 'สนุกมากคร้าบ', 7),
(7, 'minecraftpond', 'เท่มากครับ', 6),
(4, 'minecraftpond', 'หลอนได้ใจ', 7),
(11, 'minecraftpond', 'เร้าใจครับ', 5),
(16, 'minecraftpond', 'ชอบมากครับ', 9),
(16, 'KritProm', 'ชอบมากๆครับ', 10);

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
(5, 'minecraftpond', '123456', 'KENZA@hotmail.com'),
(6, 'PEERAUT', '123456', 'esus@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(30) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_type`) VALUES
(1, 'MINIONS 2', 'Comedy'),
(2, 'THE MEDIUM', 'Horror'),
(3, 'JUMANJI', 'Comedy'),
(4, 'IT', 'Horror'),
(5, 'HANGOVER', 'Comedy'),
(6, 'VENOM', 'Action'),
(7, 'MORTAL ENGINE', 'Fantasy'),
(8, 'FREE GUY', 'Comedy'),
(9, 'TED 2', 'Comedy'),
(10, 'IT 2', 'Horror'),
(11, 'THE DARK TOWER', 'Fantasy'),
(12, 'TEXAS CHAINSAW', 'Horror'),
(13, 'MIDSOMMAR', 'Horror'),
(14, 'TOP GUN MAVERICK', 'Action'),
(15, 'THE GRAY MAN', 'Action'),
(16, 'SPIDERMAN NO WAY HOME', 'Fantasy'),
(17, 'FAST & FURIOUS 7', 'Action'),
(18, 'HOME STAY', 'Fantasy'),
(19, 'THE BATMAN', 'Action'),
(20, 'MALEFICENT: MISTRESS OF EVIL', 'Fantasy'),
(21, 'READY PLAYER ONE', 'SCI-FI'),
(22, '365 DAYS', 'Romantic'),
(23, 'BLADE RUNNER 2049', 'SCI-FI'),
(24, 'FIFTY SHADES OF GREY', 'Romantic'),
(25, 'AVATAR', 'SCI-FI'),
(26, 'BROTHER OF THE YEARS', 'Romantic'),
(27, 'PACIFIC RIM', 'SCI-FI'),
(28, 'REDEEMING LOVE', 'Romantic'),
(29, 'JURASSIC WORLD : DOMINION', 'SCI-FI'),
(30, 'ME BEFORE YOU', 'Romantic');

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
  MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
