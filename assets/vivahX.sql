-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 07:29 PM
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
  `validate` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astro_req`
--

INSERT INTO `astro_req` (`req_id`, `user1`, `user2`, `validate`) VALUES
('1111', '1202', '3010', 0);

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
  `height` float(2,2) NOT NULL,
  `weight` float(3,2) NOT NULL,
  `complexion` varchar(100) NOT NULL,
  `face_photo` varchar(1000) NOT NULL,
  `body_photo` varchar(1000) NOT NULL,
  `about` varchar(500) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `earnings` float(6,2) NOT NULL,
  `requirement` varchar(500) NOT NULL,
  `aadhar` varchar(1000) NOT NULL,
  `qualification` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`rec_id`, `fname`, `minit`, `lname`, `phone`, `aphone`, `aemail`, `address`, `height`, `weight`, `complexion`, `face_photo`, `body_photo`, `about`, `profession`, `earnings`, `requirement`, `aadhar`, `qualification`) VALUES
('0726', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '', '', '', '', 0.00, '', '', NULL),
('1213', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '2020-02-20.png', '2020-03-22.png', '', '', 0.00, '', '2020-03-22.png', NULL),
('1383', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '', '', '', '', 0.00, '', '', NULL),
('3813', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '2020-01-29.png', '2020-01-31.png', '', '', 0.00, '', '2020-01-31.png', NULL),
('4249', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '', '', '', '', 0.00, '', '', NULL),
('4477', 'hha', 'mns', 'svkjn', 959595959, 5959594, 'hh@kk.vv', 'vrkjrebjbbkb wicn   weieucnw v  i bedf ib d f ei d,j  be el ie nd lud, nd il', 0.99, 9.99, 'blue1', '', '', 'aecsbk, lkjnb,c kbvm vbvm sevk  kk', 'mm', 9999.99, 'lkjnc nlwev  nwv j v / ', '', 'ma'),
('4796', 'olndel', 'lnl', 'jjd', 654864, 65646, 'jkj@ss.cSA', 'WEKJCNW.KCVNE.K1', 0.99, 6.00, 'WEWOUCNW', '', '', 'sdc;knlin', 'nelcw', 0.00, 'elewcknl', '', 'jwencwke'),
('4915', 'pa', 'ma', 'svr', 11111, 11113, 'hh@c.c', 'ecv', 0.99, 9.99, 'black', '', '', 'dvs', 'se', 9999.99, 'wvre', '', 'mca'),
('4987', '', '', '', 0, 0, '', '', 0.00, 0.00, '', '2020-02-20.png', '2020-03-22.png', '', '', 0.00, '', '2020-03-22.png', NULL),
('9522', 'Gopalakrishnan nayak', 'savitha', 'G', 2147483647, 2147483647, 'nayakgururaj9@gmail.com', 'shreeniketana ajeru govindamoole house punacha post and village ,bantwal t q , D . K 574243 karnataka', 0.99, 9.99, 'brown', '', '', 'are marle,pirki soya ijji', 'student', 5.50, 'bodalthi,ande pirki ,sokuta', '', 'MCA'),
('9805', 'sCHOOL bOOK cOMPANU', 'No idea', 'launch', 955907012, 2147483647, 'flash2@flash.com', 'vcet, puttur, neharu nagara, karnataka , dakshina kannada, asia, india, WOrld, Milkiway', 0.99, 9.99, 'green', '', '', 'thus iuwkabdeiil  ee;d w h n iuhfwf w98w9d wdnw dgwf WWGF OEAV WFHH KS WFH WKNBWFH WKCND8W N FHW FCN IWH FKWN FWHF KW INWIFI HP9 W;UFHWH A;I AWUHF  ILWFALIW HLA BIH FWILFWH ', 'engineer', 9999.99, 'IQUDH ILWRLIWHFIWLF LWFWI WFPWFHK.WFNWHF;WPWF W;UW FHWILFN ILF BWY LFB F', '', 'mca');

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
('2032', 'Gopalakrishnan nayak a', 'savitha ', 'aggircultutre', 'house maker', 1, 0, '7762'),
('2173', 'hha', 'mns ', 'ndd', 'nns', 5, 6, '1202'),
('9010', 'sCHOOL bOOK cOMPANU', 'No idea ', 'Print Books', 'no idea', 2, 4, '1202'),
('9784', 'pa', 'ma ', 'pa', 'ma', 2, 0, '9206');

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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `title`, `content`, `user_id`) VALUES
('0397', 'hi', 'hello', '9206');

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
('0902', 'vashista', '1999-10-02', 3, 'ashwini', '1202', ''),
('4601', 'vathsa', '2001-03-09', 2, 'purvaphalguni', '7762', '2020-04-04.png'),
('9705', 'v', '2000-04-04', 1, 'ashwini', '1202', '');

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
  `details` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `uname`, `password`, `acnt_type`, `validate`, `rec_id`, `email`, `details`) VALUES
('0108', 'Mrutynjaya', 'mrutyu123', 'as', 0, '3813', 'mrutyujai@gg.cc', 0),
('1122', 'keshava', 'kes123', 'a', 1, NULL, 'keshava@gmail.com', 0),
('1202', 'flash', 'flash123', 'b', 0, '4249', 'flash@flash.com', 0),
('3010', 'Boss', 'hoss123', 'a', 0, '0726', 'boss@bb.com', 0),
('5555', 'Purushothama', 'puru123', 'as', 1, NULL, 'puru@gmail.com', 0),
('7762', 'Shreeniketana_guru', 'Gururaj9686', 'bg', 1, '9522', 'nayakgururaj932001@gmail.com', 0),
('9206', 'mru', 'mru123', 'b', 1, '4987', 'mru@123.co', 1),
('9905', 'kesh', 'kes123', 'bg', 0, '1383', 'kesh@abc.co', 0);

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
