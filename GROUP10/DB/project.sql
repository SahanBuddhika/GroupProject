-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 02:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appoinmentid` int(5) NOT NULL,
  `attribute` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `paymentid` int(5) NOT NULL,
  `petownerid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homevisit`
--

CREATE TABLE `homevisit` (
  `homevisitid` int(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `paymentid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineid` int(5) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `stockid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationid` int(5) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificationsend`
--

CREATE TABLE `notificationsend` (
  `notificationid` int(5) NOT NULL,
  `petownerid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificatiosendperiodictreatment`
--

CREATE TABLE `notificatiosendperiodictreatment` (
  `autoid` int(5) NOT NULL,
  `notificationid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(5) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(10) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `homevisitid` int(5) NOT NULL,
  `appoinmentid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periodicincludemedicine`
--

CREATE TABLE `periodicincludemedicine` (
  `medicineid` int(5) NOT NULL,
  `autoid` int(5) NOT NULL,
  `dosage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periodictreatment`
--

CREATE TABLE `periodictreatment` (
  `autoid` int(5) NOT NULL,
  `period` varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(5) NOT NULL,
  `age` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `speialnotes` varchar(50) NOT NULL,
  `species` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `petownerid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pethavespecification`
--

CREATE TABLE `pethavespecification` (
  `petid` int(5) NOT NULL,
  `presciptionid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petincludeperiodictreatment`
--

CREATE TABLE `petincludeperiodictreatment` (
  `petid` int(5) NOT NULL,
  `autoid` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `petownerid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tpnumber` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `homevisitid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presciption`
--

CREATE TABLE `presciption` (
  `presciptionid` int(5) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(50) NOT NULL,
  `disease` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presciptionincludemedicine`
--

CREATE TABLE `presciptionincludemedicine` (
  `medicineid` int(5) NOT NULL,
  `presciptionid` int(5) NOT NULL,
  `dosage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chamin', 'CHAMIN@GMAIL.COM', '$2y$10$eoHkDsZY3EfYsSHNi3yuDeDlAw0mzQj2A7GbXd.qTj6nT3eHHqnKq', NULL, '2018-09-13 03:27:05', '2018-09-13 03:27:05'),
(2, 'Chamin', 'chaminl@gmail.com', '$2y$10$Fdi2uO70ItFL2XghwxBuoO8wCqHQMtc.lEQleRbu/B0kKu.xMzC8y', '2dzjwoB26HfRwRDrV2nSwiadoe3I74irRCgKyYguB7B2icG1FAj1SqMILbWP', '2018-09-13 03:29:12', '2018-09-13 03:29:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appoinmentid`),
  ADD KEY `paymentid` (`paymentid`),
  ADD KEY `petownerid` (`petownerid`);

--
-- Indexes for table `homevisit`
--
ALTER TABLE `homevisit`
  ADD PRIMARY KEY (`homevisitid`),
  ADD KEY `paymentid` (`paymentid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineid`),
  ADD KEY `stockid` (`stockid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationid`);

--
-- Indexes for table `notificationsend`
--
ALTER TABLE `notificationsend`
  ADD PRIMARY KEY (`notificationid`,`petownerid`);

--
-- Indexes for table `notificatiosendperiodictreatment`
--
ALTER TABLE `notificatiosendperiodictreatment`
  ADD PRIMARY KEY (`autoid`,`notificationid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `homevisitid` (`homevisitid`),
  ADD KEY `appoinmentid` (`appoinmentid`);

--
-- Indexes for table `periodicincludemedicine`
--
ALTER TABLE `periodicincludemedicine`
  ADD KEY `medicineid` (`medicineid`),
  ADD KEY `autoid` (`autoid`);

--
-- Indexes for table `periodictreatment`
--
ALTER TABLE `periodictreatment`
  ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`),
  ADD KEY `petownerid` (`petownerid`);

--
-- Indexes for table `pethavespecification`
--
ALTER TABLE `pethavespecification`
  ADD PRIMARY KEY (`petid`,`presciptionid`);

--
-- Indexes for table `petincludeperiodictreatment`
--
ALTER TABLE `petincludeperiodictreatment`
  ADD KEY `petid` (`petid`),
  ADD KEY `autoid` (`autoid`);

--
-- Indexes for table `petowner`
--
ALTER TABLE `petowner`
  ADD PRIMARY KEY (`petownerid`),
  ADD KEY `homevisitid` (`homevisitid`);

--
-- Indexes for table `presciption`
--
ALTER TABLE `presciption`
  ADD PRIMARY KEY (`presciptionid`);

--
-- Indexes for table `presciptionincludemedicine`
--
ALTER TABLE `presciptionincludemedicine`
  ADD KEY `medicineid` (`medicineid`),
  ADD KEY `presciptionid` (`presciptionid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `appoinmentid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homevisit`
--
ALTER TABLE `homevisit`
  MODIFY `homevisitid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicineid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodictreatment`
--
ALTER TABLE `periodictreatment`
  MODIFY `autoid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petowner`
--
ALTER TABLE `petowner`
  MODIFY `petownerid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presciption`
--
ALTER TABLE `presciption`
  MODIFY `presciptionid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`petownerid`) REFERENCES `petowner` (`petownerid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`paymentid`) REFERENCES `payment` (`paymentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `homevisit`
--
ALTER TABLE `homevisit`
  ADD CONSTRAINT `homevisit_ibfk_1` FOREIGN KEY (`paymentid`) REFERENCES `payment` (`paymentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`stockid`) REFERENCES `stock` (`stockid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`homevisitid`) REFERENCES `homevisit` (`homevisitid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`appoinmentid`) REFERENCES `appoinment` (`appoinmentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periodicincludemedicine`
--
ALTER TABLE `periodicincludemedicine`
  ADD CONSTRAINT `periodicincludemedicine_ibfk_1` FOREIGN KEY (`autoid`) REFERENCES `periodictreatment` (`autoid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periodicincludemedicine_ibfk_2` FOREIGN KEY (`medicineid`) REFERENCES `medicine` (`medicineid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`petownerid`) REFERENCES `petowner` (`petownerid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petincludeperiodictreatment`
--
ALTER TABLE `petincludeperiodictreatment`
  ADD CONSTRAINT `petincludeperiodictreatment_ibfk_1` FOREIGN KEY (`autoid`) REFERENCES `periodictreatment` (`autoid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petincludeperiodictreatment_ibfk_2` FOREIGN KEY (`petid`) REFERENCES `pet` (`petid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petowner`
--
ALTER TABLE `petowner`
  ADD CONSTRAINT `petowner_ibfk_1` FOREIGN KEY (`homevisitid`) REFERENCES `homevisit` (`homevisitid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presciptionincludemedicine`
--
ALTER TABLE `presciptionincludemedicine`
  ADD CONSTRAINT `presciptionincludemedicine_ibfk_1` FOREIGN KEY (`presciptionid`) REFERENCES `presciption` (`presciptionid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presciptionincludemedicine_ibfk_2` FOREIGN KEY (`medicineid`) REFERENCES `medicine` (`medicineid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
