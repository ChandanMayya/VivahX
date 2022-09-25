-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 12:57 PM
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
-- Database: `vivahx`
--

-- --------------------------------------------------------

--
-- Table structure for table `astro_req`
--

CREATE TABLE `astro_req` (
  `req_id` char(4) NOT NULL,
  `user1` char(4) NOT NULL,
  `user2` char(4) NOT NULL,
  `u1val` tinyint(1) NOT NULL,
  `u2val` tinyint(1) NOT NULL,
  `validate` tinyint(4) NOT NULL,
  `withheld` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astro_req`
--

INSERT INTO `astro_req` (`req_id`, `user1`, `user2`, `u1val`, `u2val`, `validate`, `withheld`) VALUES
('2220', '7845', '1274', 1, 1, 1, 0),
('7030', '7845', '1274', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `rec_id` char(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `minit` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `aphone` int(10) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `height_ft` varchar(25) NOT NULL,
  `height_in` varchar(25) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `complexion` varchar(100) NOT NULL,
  `face_photo` varchar(1000) NOT NULL,
  `body_photo` varchar(1000) NOT NULL,
  `about` varchar(500) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `earnings` varchar(20) NOT NULL,
  `requirement` varchar(500) NOT NULL,
  `aadhar` varchar(1000) NOT NULL,
  `qualification` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`rec_id`, `fname`, `minit`, `lname`, `phone`, `aphone`, `aemail`, `address`, `height_ft`, `height_in`, `weight`, `complexion`, `face_photo`, `body_photo`, `about`, `profession`, `earnings`, `requirement`, `aadhar`, `qualification`) VALUES
('2431', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
('3247', 'Sulochana', 'prema', 'Shekhara', 987568696, 2147483647, 'amail', 'Keshava priya, Kumara layout, Keshava city, bharata rashtra', '-ft', '-in', '45', 'Brown', '2020-04-15 (1).png', '2020-05-25 (1).png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nulla, aperiam alias consequatur maxime explicabo ipsum porro quis unde praesentium recusandae illum deleniti. Aut voluptatibus tempora fugit sunt ducimus ea.', 'Tester', '540000', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nulla, aperiam alias consequatur maxime explicabo ipsum porro quis unde praesentium recusandae illum deleniti. Aut voluptatibus tempora fugit sunt ducimus ea.', '2020-05-25 (1).png', 'BCA'),
('4567', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
('6816', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
('7850', 'Keshava', 'priya', 'Madhusudhana', 2147483647, 2147483647, 'amail', 'Shakthi nilaya, Kumara layout, Keshava City, Bharatha Rashtra', '-ft', '-in', '56', 'Brown', '2020-08-05 (3).png', '2020-08-05 (5).png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nulla, aperiam alias consequatur maxime explicabo ipsum porro quis unde praesentium recusandae illum deleniti. Aut voluptatibus tempora fugit sunt ducimus ea.', 'Developer', '560000', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nulla, aperiam alias consequatur maxime explicabo ipsum porro quis unde praesentium recusandae illum deleniti. Aut voluptatibus tempora fugit sunt ducimus ea.', '2020-08-05 (5).png', 'BE Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `family_id` char(4) NOT NULL,
  `father` varchar(25) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `fa_occu` varchar(50) NOT NULL,
  `mo_occu` varchar(50) NOT NULL,
  `bro_no` int(2) NOT NULL,
  `sis_no` int(2) NOT NULL,
  `user_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`family_id`, `father`, `mother`, `fa_occu`, `mo_occu`, `bro_no`, `sis_no`, `user_id`) VALUES
('4552', '', ' ', '', '', 0, 0, '1274'),
('7324', 'Vasudeva', 'Devaki ', 'Govt. Officer', 'House wife', 6, 0, '1274'),
('9788', 'Premashekhara', 'Prameela ', 'News Agency', 'house wife', 0, 0, '7845');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` varchar(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `user_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jaataka`
--

CREATE TABLE `jaataka` (
  `jtk_id` varchar(4) NOT NULL,
  `gotra` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `paada` int(2) NOT NULL,
  `nakshatra` varchar(20) NOT NULL,
  `user_id` char(4) NOT NULL,
  `document` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jaataka`
--

INSERT INTO `jaataka` (`jtk_id`, `gotra`, `DOB`, `paada`, `nakshatra`, `user_id`, `document`) VALUES
('2357', '', '0000-00-00', 0, 'ashwini', '1274', '2020-05-27 (1).png'),
('4102', 'vathsa', '2003-02-02', 3, 'ashwini', '7845', '2020-04-04.png'),
('5142', 'vashista', '2000-02-02', 4, 'mrigashirsha', '1274', '2020-05-27 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(4) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `acnt_type` char(2) NOT NULL,
  `validate` tinyint(1) NOT NULL,
  `rec_id` char(4) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `details` tinyint(1) NOT NULL,
  `withheld` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `uname`, `password`, `acnt_type`, `validate`, `rec_id`, `email`, `details`, `withheld`) VALUES
('0066', 'pushpalatha', 'push123', '', 0, '4567', 'push@gmail.com', 0, 0),
('1000', 'admin', 'admin', 'a', 1, NULL, '', 0, 0),
('1274', 'keshava', 'kes123', 'bg', 1, '7850', 'keshava@gmail.com', 0, 0),
('1671', 'Purushothama', 'puru123', 'as', 0, '6816', 'purushothama@gmail.com', 0, 0),
('3158', 'dakshyayini', 'dak123', 'b', 0, '2431', 'dakshyayini@gmail.com', 0, 0),
('7845', 'sulochana', 'sulo123', 'b', 1, '3247', 'sulochana@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astro_req`
--
ALTER TABLE `astro_req`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `user1` (`user1`),
  ADD KEY `user2` (`user2`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`family_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `FEEDBACK` (`user_id`);

--
-- Indexes for table `jaataka`
--
ALTER TABLE `jaataka`
  ADD PRIMARY KEY (`jtk_id`),
  ADD KEY `JAATAKA` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user` (`rec_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `astro_req`
--
ALTER TABLE `astro_req`
  ADD CONSTRAINT `astro_req_ibfk_1` FOREIGN KEY (`user1`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `astro_req_ibfk_2` FOREIGN KEY (`user2`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FEEDBACK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `jaataka`
--
ALTER TABLE `jaataka`
  ADD CONSTRAINT `JAATAKA` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rec_id`) REFERENCES `details` (`rec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
