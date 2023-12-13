-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 08:03 AM
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
-- Database: `travel-tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`id`, `full_name`, `address`, `city`, `zip_code`) VALUES
(5, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216'),
(6, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '32113'),
(7, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216'),
(8, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216'),
(9, 'Md Sarafat Ali Adir 2', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--
-- Error reading structure for table travel-tour.demo: #1932 - Table 'travel-tour.demo' doesn't exist in engine
-- Error reading data for table travel-tour.demo: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `travel-tour`.`demo`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` decimal(10,0) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `helpline`
--

CREATE TABLE `helpline` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email_address` varchar(25) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helpline`
--

INSERT INTO `helpline` (`id`, `contact_name`, `contact_number`, `email_address`, `purpose`) VALUES
(1, 'asif', 1783869974, 'aksshawon512@gmail.com', 'fdyfyrdyrdyr'),
(2, 'asif', 1783869974, 'aksshawon512@gmail.com', 'jnjnjjndjn'),
(3, 'asif', 1783869974, 'aksshawon512@gmail.com', 'KHGFHCDX'),
(4, 'asif', 1783869974, 'aksshawon512@gmail.com', 'JGVCYYR'),
(5, 'VBJG', 0, 'aksshawon512@gmail.com', 'JTFUC'),
(6, 'asif', 1783869974, 'aksshawon512@gmail.com', 'JGCHFC'),
(7, '017836', 0, 'aksshawon512@gmail.com', 'rregegegeg'),
(8, '017836', 0, 'aksshawon512@gmail.com', 'sdff'),
(9, '017836', 0, 'aksshawon512@gmail.com', 'asdad'),
(10, '017836', 0, 'aksshawon512@gmail.com', 'asdad'),
(11, '017836', 0, 'aksshawon512@gmail.com', 'asdad'),
(12, '017836', 0, 'aksshawon512@gmail.com', 'ds'),
(13, 'Md Sarafat Ali Adir', 1837730317, 'adir.ixr@gmail.com', 'adsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `booking_reference` varchar(255) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image_url`, `destination_name`, `description`, `price`) VALUES
(8, '../assets/image/package/istockphoto-474259514-612x612.jpg', 'Sain Martin', 'Wonderful package', 500),
(9, '../assets/image/package/package-pic-3.jpg', 'Destination Four', 'this is destination descriptin', 100),
(12, '../assets/image/package/istockphoto-474259514-612x612.jpg', 'Sain Martin 2', 'Wonderful', 900),
(13, '../assets/image/package/istockphoto-474259514-612x612.jpg', 'Inida', 'ccsdsad', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `pay_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `package_id`, `full_name`, `address`, `city`, `zip_code`, `pay_amount`, `payment_method`, `transaction_id`, `created_at`) VALUES
(1, 3, 8, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 500.00, 'Bkash', 'jdadhuej332341nn', '2023-12-12 21:13:25'),
(2, 3, 8, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 500.00, 'Nagad', 'jdadhuej332341nn', '2023-12-13 03:27:42'),
(3, 3, 8, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 500.00, 'Bkash', 'jdadhuej332341nn', '2023-12-13 03:49:07'),
(4, 4, 9, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 100.00, 'Rocket', 'jdadhuej332341nn', '2023-12-13 06:02:51'),
(5, 4, 9, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 100.00, 'Nagad', 'jdadhuej332341nn', '2023-12-13 06:03:30'),
(6, 4, 9, 'Md Sarafat Ali Adir', '402 Monipur,Mirpur,Dhaka', 'Dhaka', '1216', 100.00, 'Rocket', 'jdadhuej33eqwe2341nn', '2023-12-13 06:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `reviewer_Name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_Title` varchar(255) NOT NULL,
  `review_Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `reviewer_Name`, `rating`, `review_Title`, `review_Content`) VALUES
(10, 'Asif', 3, 'Good Package', 'great');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `contact`, `email`, `password`, `nid`, `age`, `name`, `image`, `type`) VALUES
(1, '3023012321', 'admin@gmail.com', '1111', '13123123213', '17', 'Admin', '', 'Admin'),
(2, '3023012321', 'lubna@gmail.com', '2222', '13123123213', '17', 'Lubna', '', 'User'),
(3, '3023012321', 'test@gmail.com', '1111', '13123123213', '17', 'test', '', 'User'),
(4, '302301232188', 'adir.ixr@gmail.com', '9999', '13123123213', '17', 'Sarafat ALI Adir', '', 'User'),
(5, '3023012321', 'lajim@gmail.com', '1111', '13123123213', '17', 'lajim', '', 'User'),
(6, '302301232188', 'adir.ixr@gmail.com', '5555', '13123123213', '17', 'Sarafat ALI Adir', '', 'User'),
(7, 'aa', 'aaaa@gmail.com', 'aa', 'aa', 'aa', 'aa', '', 'User'),
(8, 'aa', 'adir.imac@gmail.com', '1111', '13123123213', '17', 'Sarafat ALI Adir', '', 'User'),
(9, '0123', 'adir44@gmail.com', '1111', '4214233555', '17', 'Md Abu Yousuf ', '', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpline`
--
ALTER TABLE `helpline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `helpline`
--
ALTER TABLE `helpline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
