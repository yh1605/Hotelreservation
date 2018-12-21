-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 05:38 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_img` varchar(300) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_location` varchar(50) NOT NULL,
  `directory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_img`, `hotel_name`, `hotel_location`, `directory`) VALUES
(23, 'uploads/258_Cebu_day.jpg', 'Toyoko INN', 'Cebu island', ''),
(24, 'uploads/Elegant-pool-place-Bluewater-Maribago-Beach-Resort.jpg', 'Maribago Bluewater', 'Mactan island', ''),
(25, 'uploads/1192069_106_z.jpg', 'Movenpick Hotel ', 'Mactan island', ''),
(26, 'uploads/top-2.jpg', 'Waterfront Cebu City Hotel', 'Cebu island', ''),
(27, 'uploads/258_Cebu_day.jpg', 'kredo hotel', 'Cebu island', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `restatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `user_id`, `room_id`, `in_date`, `out_date`, `total_price`, `restatus`) VALUES
(24, 12, 30, '2018-12-21', '2018-12-22', '2500', 'pending'),
(25, 12, 33, '2018-12-22', '2018-12-24', '2000', 'confirmed'),
(26, 12, 33, '2018-12-22', '2018-12-24', '2000', 'confirmed'),
(27, 12, 35, '2018-12-22', '2018-12-23', '2500', 'pending'),
(28, 13, 35, '2018-12-28', '2018-12-31', '7500', 'confirmed'),
(29, 13, 33, '2018-12-22', '2018-12-24', '2000', 'confirmed'),
(30, 13, 33, '2018-12-22', '2018-12-25', '3000', 'pending'),
(31, 13, 39, '2018-12-22', '2018-12-25', '3000', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `hotel_id` varchar(11) NOT NULL,
  `room_img` varchar(300) NOT NULL,
  `room_type` varchar(11) NOT NULL,
  `room_price` float NOT NULL,
  `roomstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `hotel_id`, `room_img`, `room_type`, `room_price`, `roomstatus`) VALUES
(33, '23', 'uploads/DOUBLE_ROOM1.png', 'single', 1000, 'pending'),
(34, '23', 'uploads/542002_238_z.jpg', 'double', 1500, 'available'),
(36, '25', 'uploads/MVP_STAFF_8.jpg', 'double', 3000, 'available'),
(37, '26', 'uploads/542002_238_z.jpg', 'double', 3000, 'available'),
(38, '23', 'uploads/DOUBLE_ROOM1.png', 'single', 200, 'available'),
(39, '24', 'uploads/190534_101_z.jpg', 'single', 1000, 'pending'),
(40, '25', 'uploads/bluewater-hotel13.jpg', 'single', 2500, 'available'),
(41, '26', 'uploads/MVP_STAFF_8.jpg', 'single', 1000, 'available'),
(42, '27', 'uploads/542002_238_z.jpg', 'single', 1000, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `status`) VALUES
(10, 'yh1605', 'Yoji', 'Harada', 'y_h_1605@yahoo.co.jp', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(11, 'admin', 'Taro', 'Tanaka', 'y_h_1605@softbank.ne.jp', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12, 'Kei', 'Keishiro', 'Kanamori', 'y_h_1605@yahoo.co.jp', 'fb6ab4c12a9baff730339f00f278bdac', 'user'),
(13, 'Urara', 'Urara', 'Yasaki', 'y_h_1605@yahoo.co.jp', '9015c4d6220e883d4b259c68b7692ff5', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
