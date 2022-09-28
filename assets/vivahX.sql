-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 02:07 AM
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
('6645', '5970', '2942', 1, 1, 0, 0);

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
('0642', 'Praveen', 'prasanna', 'gauda', 896633668, 2147483647, 'amail', 'Praveen P Gauda, Gopal layut, kohlapura, kumara parva', '5', '5', '56', 'Semi Brown', 'praveenaf.jpg', 'praveenab.jpg', 'Being born in a vokkaliga gauda family, i am passionate towards lots of things, now that im seraching for my partner!', 'Developer', '600000', 'Good and matching to me', 'A_sample_of_Aadhaar_card.jpg', 'BE Computer Science'),
('0844', 'Keshava', 'maharaja', 'Suprasada Adiga', 2147483647, 2147483647, 'amail', 'Keshava M S P Adiga, Adiga house, Mahesha nagara, Bengre kopa, Atramule, Manja', '5', '9', '70', 'white', 'keshava.jpg', 'keshava2.jpg', 'I belong to a brahmin family, kota brahmin to be precise. I am passionate towards bike riding to long distances, and i own 15 acres of fertile land cultivated with various types of crops', 'Professor', '700000', 'Good and adjustable', 'A_sample_of_Aadhaar_card.jpg', 'MCom'),
('4479', 'Namrutha', 'nayana ', 'gauda', 855577885, 2147483647, 'amail', 'namrutha gauda, kumaralli, sankad katte, kottige male, sampre', '5', '4', '50', 'Brown', 'namruthaf.jpg', 'namruthab.jpg', 'Happy life', 'Tester', '550000', 'happy and dependable', 'A_sample_of_Aadhaar_card.jpg', 'BSC Cs'),
('6205', 'Sukumari', 's ', 'Hegde', 2147483647, 2147483647, 'amail', 'Bhavana krupa, bandar katte, botwala, sampa', '5', '2', '48', 'Semi Brown', 'sukumarif.jpg', 'sukumarib.jpg', 'Kind hearted', 'book stall', '200000 ', 'understanding', 'A_sample_of_Aadhaar_card.jpg', 'BCom'),
('6816', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL);

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
('2286', 'Mahendra Suprasada Adiga', 'Veena Adiga ', 'Teacher', 'Teacher', 1, 0, '2942'),
('3106', 'Vigneshwara Hegde', 'Sukanya Hegde ', 'Agriculturist', 'teacher', 0, 0, '5970'),
('6646', 'NArayana gauda', 'Kaveri ', 'lawyer', 'house wife', 0, 0, '6686'),
('8307', 'Sankappa Gauda', 'Puvamma Gauda ', 'Agriculture', 'house wife', 2, 0, '2761');

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
('0800', 'Shanka pingal Kamsha', '1998-10-25', 1, 'krittika', '2761', 'jatakasample.jpg'),
('2771', 'vishvamita', '1999-03-01', 2, 'pushya', '5970', 'jatakasample.jpg'),
('6697', 'vashista', '1995-10-02', 2, 'ashwini', '2942', 'jatakasample.jpg'),
('7846', 'vathsa', '2000-02-12', 2, 'mrigashirsha', '6686', 'jatakasample.jpg');

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
('1000', 'admin', 'admin', 'a', 1, NULL, '', 0, 0),
('1671', 'Purushothama', 'puru123', 'as', 0, '6816', 'purushothama@gmail.com', 0, 0),
('2761', 'praveen', 'pra123', 'bg', 0, '0642', 'praveengauda@gmail.com', 0, 0),
('2942', 'keshava', 'kes123', 'bg', 1, '0844', 'keshava@gmail.com', 0, 0),
('5970', 'Sukumari', 'suk123', 'b', 1, '6205', 'sukku1213@gmail.com', 0, 0),
('6686', 'namrutha', 'nam123', 'b', 0, '4479', 'namruthaa@gmail.com', 0, 0);

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
