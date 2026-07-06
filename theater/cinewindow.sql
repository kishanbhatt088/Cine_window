-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 09:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinewindow`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(5) NOT NULL,
  `movie_fk` int(5) NOT NULL,
  `cinema_img` varchar(200) NOT NULL,
  `cinema_name` varchar(200) NOT NULL,
  `cinema_location` varchar(200) NOT NULL,
  `own_phone` varchar(13) NOT NULL,
  `own_name` varchar(50) NOT NULL,
  `cinema_phone` varchar(13) NOT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cinema_id`, `movie_fk`, `cinema_img`, `cinema_name`, `cinema_location`, `own_phone`, `own_name`, `cinema_phone`, `join_date`) VALUES
(1, 3, '../movie_img/theater-1.webp', 'INOX', '21, Sector 21,30 Cir, Sector 20, Gandhinagar, Gujarat 382021', '6351007345', 'Pratham', '6351007345', '2024-02-17'),
(2, 1, '../img/1708247747theater-2.webp', 'Wide Angle', 'opposite - iskon scross road , Sarkhej - Gandhinagar Hwy, Ramdev Nagar, Ahmedabad, Gujarat 380015', '+91 45-0073', 'Kuldip', '+911234567890', '2024-02-18'),
(3, 1, '../img/1708247780theater-3.webp', 'PVR Acropolis', 'Near gurudwara , Thaltej Service Rd, Thaltej, Ahmedabad, Gujarat 380059', '+91 45-0055', 'kishan', '+911122334455', '2024-02-18'),
(4, 1, '../img/1708247803theater-2.webp', 'New Fangled Fantasy Miniplex', 'Safal Mondeal Retail Park,block-O, Besides iscon mega mall, nr iscon circle, Sarkhej - Gandhinagar Hwy, Ahmedabad, Gujarat 380015', '+91 45-0045', 'Gaurang', '+911122556699', '2024-02-18'),
(5, 1, '../img/1708247812theater-3.webp', 'Banana Smartplex', '3rd Floor, Times Square Grand, Sindhu Bhavan Marg, near PRL Colony, PRL Colony, Thaltej, Ahmedabad, Gujarat 380059', '+91 45-0258', 'vishw', '+917788996655', '2024-02-18'),
(6, 1, '../img/1708247820theater-3.webp', 'AB Miniplex', ' Sheetal Varsha 5, 512 A, Satellite Rd, Suryapooja Block B, Satellite, Ahmedabad, Gujarat 380013', '+91 45-0073', 'Dhruvi', '+912233665577', '2024-02-18'),
(7, 1, '../img/1708247838theater-2.webp', 'Connplex Smart Theatre ', 'Ambuja House, 1st Floor, Anam-1, Besides, Chimanlal Girdharlal Rd, opposite Parimal Garden, Ahmedabad, Gujarat 380006', '+91 45-0073', 'minaxi', '+915522446688', '2024-02-18'),
(8, 1, '../img/1708247853leo-00.jpeg', 'Carnival Cinemas', '3rd floor, Himalaya Mall Commercial Building Big Bazar, Drive In Rd, Nilmani Society, Memnagar, Ahmedabad, Gujarat 380054', '+91 45-0088', 'krupal', '+915522113344', '2024-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(4) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `th_id` int(4) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `r_date` date NOT NULL,
  `m_time` varchar(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `m_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `sc_id` int(4) NOT NULL,
  `no_seat` int(2) NOT NULL,
  `type` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `s_id` int(4) NOT NULL,
  `s_date` date NOT NULL,
  `s_time` varchar(25) NOT NULL,
  `m_id` int(4) NOT NULL,
  `seat` varchar(800) NOT NULL,
  `sc_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`s_id`, `s_date`, `s_time`, `m_id`, `seat`, `sc_id`) VALUES
(1, '2024-04-11', '11:00 AM TO 2:00 PM', 2, ' C-1.C-2.C-3.C-4.C-5.C-6.C-7.C-8.C-9.C-10.C-11.C-12.C-13.C-14.C-15.C-16.C-17.C-18<br>', 1),
(2, '2024-04-17', '2pm', 2, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `threquest`
--

CREATE TABLE `threquest` (
  `req_id` int(5) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `th_name` varchar(50) NOT NULL,
  `th_address` varchar(100) NOT NULL,
  `own_phone` varchar(13) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threquest`
--

INSERT INTO `threquest` (`req_id`, `owner_name`, `th_name`, `th_address`, `own_phone`, `date`) VALUES
(1, 'Pratham', 'INOX', 'Old Rajshree Cinema, 2nd Floor, R-21, Sector 21, Near Akshardham Mandir, Gandhinagar, Gujarat 382021', '+91-45-8855', '2024-02-01 14:40:10'),
(2, 'Kuldip', 'Wide Angle', 'opposite - iskon scross road , Sarkhej - Gandhinagar Hwy, Ramdev Nagar, Ahmedabad, Gujarat 380015	', '+91 45-0073', '2024-02-02 14:44:05'),
(3, 'kishan', 'PVR Acropolis', 'Near gurudwara , Thaltej Service Rd, Thaltej, Ahmedabad, Gujarat 380059', '+91 45-0055', '2024-02-03 14:44:57'),
(4, 'Gaurang', 'New Fangled Fantasy Miniplex', 'Safal Mondeal Retail Park,block-O, Besides iscon mega mall, nr iscon circle, Sarkhej - Gandhinagar H', '+91 45-0045', '2024-02-04 14:45:48'),
(5, 'vishw', 'Banana Smartplex', '3rd Floor, Times Square Grand, Sindhu Bhavan Marg, near PRL Colony, PRL Colony, Thaltej, Ahmedabad, ', '+91 45-0258', '2024-02-05 14:46:35'),
(6, 'Dhruvi', 'AB Miniplex', 'Sheetal Varsha 5, 512 A, Satellite Rd, Suryapooja Block B, Satellite, Ahmedabad, Gujarat 380013', '+91 45-0073', '2024-02-07 14:47:23'),
(7, 'Mirali', 'Connplex Smart Theatre', 'Ambuja House, 1st Floor, Anam-1, Besides, Chimanlal Girdharlal Rd, opposite Parimal Garden, Ahmedaba', '+91 45-0044', '2024-02-10 14:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(266) NOT NULL,
  `image` varchar(266) NOT NULL,
  `otp` varchar(266) NOT NULL,
  `verify` varchar(266) NOT NULL DEFAULT '0',
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `username` varchar(266) NOT NULL,
  `discription` varchar(477) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `fp` int(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `phone`, `password`, `image`, `otp`, `verify`, `user_type`, `username`, `discription`, `address`, `address2`, `city`, `state`, `zip`, `fp`) VALUES
(143, 'Pratham', 'Parmar', 'prathammkv@gmail.com', '6351007345', 'c4ca4238a0b923820dcc509a6f75849b', '../img/1705905489IMG_20230101_113221-COLLAGE.jpg', '0', '1', 'user', 'pratham.parmar__', 'HELLO THERE, I AM PRATHAM', 'JAWAHAR NAVODAYA VIDYALAYA', 'DIST-RATLAM', 'RATLAM', 'Madhya Pradesh', '457340', 0),
(496, 'Pratham', 'Admin', 'admin@gmail.com', '123456789', 'c4ca4238a0b923820dcc509a6f75849b', '../img/17082485681700562801log.png', '0', '1', 'admin', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(654, 'Pratham', 'Owner', 'owner@gmail.com', '1234567897', 'c4ca4238a0b923820dcc509a6f75849b', '../img/17083566021700565098p.jpg', '0', '1', 'owner', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `threquest`
--
ALTER TABLE `threquest`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
  MODIFY `sc_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `threquest`
--
ALTER TABLE `threquest`
  MODIFY `req_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=834;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
