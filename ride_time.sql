-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ride time`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(200) DEFAULT NULL,
  `car_brand` varchar(100) DEFAULT NULL,
  `car_status` varchar(50) DEFAULT NULL,
  `display_price` varchar(50) DEFAULT NULL,
  `seling_price` varchar(50) DEFAULT NULL,
  `engine_power` int(11) DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `giar_type` varchar(50) DEFAULT NULL,
  `car_image_url` varchar(200) NOT NULL,
  `car_is_enable` tinyint(1) DEFAULT 0,
  `car_cato_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_brand`, `car_status`, `display_price`, `seling_price`, `engine_power`, `km`, `giar_type`, `car_image_url`, `car_is_enable`, `car_cato_id`) VALUES
(2, 'Toyota Corolla', 'Toyota', 'brand new', '24,000', '21,500', 3400, 0, 'Automatic', 'assets/images/1.jpg', 1, 1),
(3, 'asas', 'BMW', 'asdfdf', '23,000', '34,000', 100, 0, 'sdffd', 'assets/images/5.jpg', 1, NULL),
(4, 'Honda Civic', 'Honda', 'brand new', '44,000', '44,000', 2500, 0, 'Automatic', 'assets/images/2.jpg', 1, NULL),
(5, 'NUChevrolet CamaroLL', 'Chevrolet', 'brand new', '34,000', '76,000', 4300, 0, 'Automatic', 'assets/images/6.jpg', 1, NULL),
(6, 'Mercedes-Benz C-Class', 'Mercedes-Benz', 'brand new', '25,000', '12,000', 2400, 0, 'manual', 'assets/images/1.jpg', 1, NULL),
(7, 'Nissan Altima', 'Nissan', 'brand new', '28,000', '23,000', 3566, 0, 'manual', 'assets/images/4.jpg', 1, NULL),
(8, 'Audi A4', 'Audi', 'brand new', '44,000', '44,000', 2344, 0, 'manual', 'assets/images/3.jpg', 1, NULL),
(9, 'Hyundai Elantra', 'Hyundai', 'brand new', '54,000', '23,000', 2244, 0, 'manual', 'assets/images/2.jpg', 1, NULL),
(10, 'Kia Soul', 'Kia', 'brand new', '54,000', '34,000', 2233, 0, 'manual', 'assets/images/5.jpg', 1, NULL),


-- --------------------------------------------------------

--
-- Table structure for table `car_cato`
--

CREATE TABLE `car_cato` (
  `car_cato_id` int(11) NOT NULL,
  `car_cato_text` varchar(300) DEFAULT NULL,
  `car_cato_order` int(11) DEFAULT NULL,
  `car_cato_enable` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car_cato`
--

INSERT INTO `car_cato` (`car_cato_id`, `car_cato_text`, `car_cato_order`, `car_cato_enable`) VALUES
(1, 'used', 1, 1),
(2, 'brand-new', 2, 1),
(3, 's', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_description`
--

CREATE TABLE `car_description` (
  `car_id` int(11) DEFAULT NULL,
  `car_text` varchar(200) DEFAULT NULL,
  `car_description` varchar(200) DEFAULT NULL,
  `car_owaner_name` varchar(200) DEFAULT NULL,
  `car_owner_phone1` varchar(200) DEFAULT NULL,
  `car_owner_phone2` varchar(200) DEFAULT NULL,
  `car_owner_email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_page`
--

CREATE TABLE `car_page` (
  `car_page_id` int(11) NOT NULL,
  `car_image1` varchar(200) DEFAULT NULL,
  `car_image2` varchar(200) DEFAULT NULL,
  `car_image3` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `doors` int(11) DEFAULT NULL,
  `car_color` varchar(100) DEFAULT NULL,
  `nu_of_seets` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `first_registation` date DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_testers`
--

CREATE TABLE `car_testers` (
  `car_tester_id` int(11) NOT NULL,
  `car_tester_name` varchar(200) DEFAULT NULL,
  `car_tester_image_url` varchar(200) DEFAULT NULL,
  `car_tester_description` varchar(200) DEFAULT NULL,
  `car_tester_emal` varbinary(200) DEFAULT NULL,
  `car_tester_phone1` varchar(200) DEFAULT NULL,
  `car_tester_is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_user`
--

CREATE TABLE `car_user` (
  `user_id` int(11) NOT NULL,
  `user_cato` int(11) DEFAULT 3,
  `user_name` varchar(100) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `user_image_url` varchar(200) DEFAULT NULL,
  `user_is_active` tinyint(1) DEFAULT 1,
  `last_login` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `car_user`
--

INSERT INTO `car_user` (`user_id`, `user_cato`, `user_name`, `pwd`, `email`, `phone_no`, `user_image_url`, `user_is_active`, `last_login`, `created_date`) VALUES
(1, 1, 'ishan', '12345', 'assa', 'asdasd', 'ascasccasascasc', 1, '2023-07-11 20:09:35', '2023-07-27 20:09:38'),
(69, 1, 'test', 'c06db68e819be6ec3d26c6038d8e8d1f', 'test@gmail.com', NULL, NULL, 1, '2023-10-01 02:59:27', NULL),
(70, 3, 'test1', '47ec2dd791e31e2ef2076caf64ed9b3d', 'test1@gmail.com', NULL, NULL, 0, NULL, NULL),
(71, 3, 'is1', '938426abe086bd7f1dd007a7e6a7e6b0', 'is1@gmail.com', NULL, NULL, 1, NULL, NULL),
(72, 3, 'ishan1233', '62c8ad0a15d9d1ca38d5dee762a16e01', 'ishan123', NULL, NULL, 0, NULL, NULL),
(73, 3, 'dilhan', '62c8ad0a15d9d1ca38d5dee762a16e01', 'dilhan@gmail.com', NULL, NULL, 1, NULL, NULL),
(74, 3, 'Dilhan1', '62c8ad0a15d9d1ca38d5dee762a16e01', 'dilhan1@gmail.com', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `_comsubject` varchar(200) DEFAULT NULL,
  `massage` varchar(3000) DEFAULT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_name`, `email`, `_comsubject`, `massage`, `comment_id`, `comment_available`) VALUES
('John Doe', 'john.doe@example.com', 'Feedback', 'Great service, highly recommend!', 1, 1),
('Jane Smith', 'jane.smith@example.com', 'Appointment Inquiry', 'Could I schedule an appointment for next Tuesday?', 2, 1),
('Alice Johnson', 'alice.j@example.com', 'Service Question', 'What are your operating hours?', 3, 1),
('Bob Brown', 'bob.brown@example.com', 'Complaint', 'I had to wait too long for my appointment.', 4, 1),
('Carol White', 'carol.white@example.com', 'Praise', 'The staff was very friendly and helpful.', 5, 1),
('David Black', 'david.black@example.com', 'Follow-up', 'I need to reschedule my appointment.', 6, 1),
('Eve Green', 'eve.green@example.com', 'Question', 'Do you accept walk-ins?', 7, 1),
('Frank Blue', 'frank.blue@example.com', 'Concern', 'The waiting area was quite crowded.', 8, 1),
('Grace Pink', 'grace.pink@example.com', 'Thank you', 'Thank you for the excellent care!', 9, 1),
('ishan', 'ishan@gmail.com', 'servise', 'very good servise', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cato`
--

CREATE TABLE `user_cato` (
  `cato_id` int(11) NOT NULL,
  `cato_text` varchar(100) DEFAULT NULL,
  `cato_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_cato`
--

INSERT INTO `user_cato` (`cato_id`, `cato_text`, `cato_active`) VALUES
(1, 'admin', 1),
(2, 'autlet_manager', 1),
(3, 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `fk_car_cato` (`car_cato_id`);

--
-- Indexes for table `car_cato`
--
ALTER TABLE `car_cato`
  ADD PRIMARY KEY (`car_cato_id`);

--
-- Indexes for table `car_description`
--
ALTER TABLE `car_description`
  ADD KEY `fk_car_decription` (`car_id`);

--
-- Indexes for table `car_page`
--
ALTER TABLE `car_page`
  ADD PRIMARY KEY (`car_page_id`),
  ADD KEY `fk_car_id` (`car_id`);

--
-- Indexes for table `car_testers`
--
ALTER TABLE `car_testers`
  ADD PRIMARY KEY (`car_tester_id`);

--
-- Indexes for table `car_user`
--
ALTER TABLE `car_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_catos` (`user_cato`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user_cato`
--
ALTER TABLE `user_cato`
  ADD PRIMARY KEY (`cato_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `car_cato`
--
ALTER TABLE `car_cato`
  MODIFY `car_cato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_page`
--
ALTER TABLE `car_page`
  MODIFY `car_page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_testers`
--
ALTER TABLE `car_testers`
  MODIFY `car_tester_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_user`
--
ALTER TABLE `car_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_cato`
--
ALTER TABLE `user_cato`
  MODIFY `cato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_car_cato` FOREIGN KEY (`car_cato_id`) REFERENCES `car_cato` (`car_cato_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_description`
--
ALTER TABLE `car_description`
  ADD CONSTRAINT `fk_car_decription` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_page`
--
ALTER TABLE `car_page`
  ADD CONSTRAINT `fk_car_id` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_user`
--
ALTER TABLE `car_user`
  ADD CONSTRAINT `fk_user_catos` FOREIGN KEY (`user_cato`) REFERENCES `user_cato` (`cato_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
