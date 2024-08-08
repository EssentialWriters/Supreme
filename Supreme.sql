-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 08:58 AM
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
-- Database: `alphaforex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `affiliateuser`
--

CREATE TABLE `affiliateuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `referedby` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `activefee` decimal(10,2) DEFAULT NULL,
  `terms` varchar(255) DEFAULT NULL,
  `signupcode` varchar(255) DEFAULT NULL,
  `accounttype` varchar(255) DEFAULT NULL,
  `pcktaken` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `tamount` decimal(10,2) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `invtimes` int(11) DEFAULT NULL,
  `getpayment` int(11) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `referaltamount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `affiliateuser`
--

INSERT INTO `affiliateuser` (`id`, `firstname`, `lastname`, `username`, `country`, `password`, `referedby`, `phone`, `email`, `date`, `activefee`, `terms`, `signupcode`, `accounttype`, `pcktaken`, `active`, `tamount`, `level`, `invtimes`, `getpayment`, `images`, `referaltamount`) VALUES
(1, '0', '0', 'alpha', 'kenya', '12345678', '00', '+254711111111', 'alpha1@gmail.com', '2024-04-20', 0.00, 'ok', '8756842016', 'referal', 20, 1, 0.00, 0, 0, 0, 'IMG-669abace211005.07290429.jpg', NULL),
(3, '0', '0', 'Sparta', 'kenya', '12345678', 'Eeduh', '+254717068691', 'sparta@yahoo.com', '2024-07-15', 0.00, 'ok', '2672624983', 'referal', 20, 1, 0.00, 0, 0, 0, '0', NULL),
(4, '0', '0', 'Alexa', 'kenya', '12345678', 'billy', '+254112465721', 'alex@gmail.cm', '2024-07-17', 0.00, 'ok', '2237935441', 'referal', 20, 1, 0.00, 0, 0, 0, '0', NULL),
(5, '0', '0', 'Fatty', 'kenya', '12345678', '<br /><b>Warning</b>:  Undefined variable $star in <b>C:\\xampp\\htdocs\\Alpha FX\\signup.php</b> on line <b>1523</b><br />', '+254705930626', 'fatty@gmail.com', '2024-07-18', 0.00, 'ok', '7661429019', 'referal', 20, 1, 0.00, 0, 0, 0, '0', NULL),
(6, '0', '0', 'Eeduh', 'kenya', '12345678', 'billy', '+254705930634', 'eeduhsparta@gmail.comm', '2024-07-19', 0.00, 'ok', '6425573702', 'referal', 20, 1, 0.00, 0, 0, 0, 'IMG-669aba9d928c33.74841697.jpg', NULL),
(7, '0', '0', 'Morgan', 'kenya', '12345678', 'Eeduh', '+254717068696', 'morgan@yahhoo.com', '2024-07-20', 0.00, 'ok', '9662032386', 'referal', 20, 1, 0.00, 0, 0, 0, 'IMG-669b70c08142d1.74198611.jpg', NULL),
(8, '0', '0', 'Edwin', 'kenya', 'Edwin1234', 'Eeduh', '254705930629', 'edwin@gmail.com', '2024-07-24', 0.00, 'ok', '5978052980', 'referal', 20, 1, 0.00, 0, 0, 0, 'IMG-66a2728e325e53.29706092.jpg', NULL),
(9, '0', '0', 'Kimani', 'kenya', '1234567890', '', '254705980629', 'edwina@gmail.com', '2024-07-24', 0.00, 'ok', '4741401419', 'referal', 20, 1, 0.00, 0, 0, 0, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alphafx1`
--

CREATE TABLE `alphafx1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alphafx1`
--

INSERT INTO `alphafx1` (`id`, `full_name`, `email`, `password`) VALUES
(2, '', 'eeduh@yahoo.com', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `username`, `phone`, `message`, `date`) VALUES
(1, 'Eeduh', '+254705930634', 'thank you', '2024-07-20'),
(2, 'Eeduh', '+254705930634', 'thank you', '2024-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `type`, `title`, `text`, `date`, `status`) VALUES
(1, 'Blog', 'Hiii', 'cafe\\admin', '2024-07-13', '0'),
(2, 'Blog', 'Hiii', 'cafe\\admin', '2024-07-13', '0'),
(3, 'Notification', 'Helloo visit www.alpafx.com ', 'hii the time to invest is now', '2024-07-19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `investuser`
--

CREATE TABLE `investuser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `invested` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `tamount` decimal(11,0) NOT NULL,
  `pcktaken` int(11) DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `sbonus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `createdtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `itemid` int(11) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `acctype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `MerchantRequestID` varchar(500) NOT NULL,
  `CheckoutRequestID` varchar(500) NOT NULL,
  `ResultCode` varchar(500) NOT NULL,
  `Amount` int(11) NOT NULL,
  `MpesaReceiptNumber` varchar(500) NOT NULL,
  `PhoneNumber` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `MerchantRequestID`, `CheckoutRequestID`, `ResultCode`, `Amount`, `MpesaReceiptNumber`, `PhoneNumber`) VALUES
(1, '10901-120004573-1', 'ws_CO_19072023190603085768168060', '0', 200, 'RGJ7XFLLZR', '254705930629'),
(2, '23315-193823651-1', 'ws_CO_19072023191437398768168060', '0', 10, 'RGJ7XGUMBF', '254768168060');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `phone_number`, `email`, `password`) VALUES
(1, 'eduardo dev ', '721500760', 'eduardo@gmail.yahoo', '1234'),
(2, 'eduado dev', '721500760', 'eduado1@gmail.yahoo', '123'),
(3, 'eduh dev', '721500760', 'eduh11@gmail.yahoo', '1234'),
(4, 'eeduh dev', '721500760', 'eeduh21@gmail.yahoo', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Eeduh', 'Sparta', 'eeduhsparta@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(2, 'Eeduh', 'Sparta', 'eeduhsparta@gmail.comm', 'c20ad4d76fe97759aa27a0c99bff6710'),
(3, 'Mwangi', 'Kimani', 'mwangi@gmail.com', 'bbed702e853f89466f58cc48c3b80efd'),
(4, 'Peter', 'Mbuthi', 'petermbuthi@gmail.com', '1f7b4b9ef68d8bab54c776614c551f43'),
(5, 'vaite', 'baite', 'baite@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(6, 'Billy', 'Alex', 'billy@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Sparta', 'Wan', 'jjjj@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(8, 'Alex', 'Munyua', 'alex@gmail.cm', '25d55ad283aa400af464c76d713c07ad'),
(9, 'Kamaa', 'Doh', 'kamaa@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(10, 'Admin', 'Eeduh', 'admineeduh@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliateuser`
--
ALTER TABLE `affiliateuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alphafx1`
--
ALTER TABLE `alphafx1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investuser`
--
ALTER TABLE `investuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `affiliateuser`
--
ALTER TABLE `affiliateuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `alphafx1`
--
ALTER TABLE `alphafx1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investuser`
--
ALTER TABLE `investuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
