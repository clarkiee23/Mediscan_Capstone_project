-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 01:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `course_yr` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`id`, `id_number`, `name`, `suffix`, `birthday`, `sex`, `course_yr`, `position`, `date`) VALUES
(1, '1000810038', 'Jellien Jay Pamat', '', 'September 20,2000', 'male', 'BSIT 4th', 'employee', '0000-00-00 00:00:00.000000'),
(2, '1000809999', 'Jether Lloyd Clarito', '', 'February 24, 2000', 'Male', 'BSIT-4th', 'student', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `suffix`, `sex`, `position`, `created_at`, `updated_at`) VALUES
(1, '1000810038', 'jellien jay', 'bautista', 'pamat', NULL, 'male', 'student', '2023-11-14 12:01:58.000000', '2023-11-14 12:01:58.000000'),
(2, '1000810038', 'jellien jay', 'bautista', 'pamat', NULL, 'male', 'student', '2023-11-14 12:04:34.000000', '2023-11-14 12:04:34.000000'),
(10, '1000809999', 'Jether Lloyd', 'Yap', 'Clarito', NULL, 'male', 'Student', '2023-11-17 05:15:37.000000', '2023-11-17 05:15:37.000000'),
(11, '1000809999', 'Jether Lloyd', 'Yap', 'Clarito', NULL, 'male', 'Student', '2023-11-21 04:04:04.000000', '2023-11-21 04:04:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `suffix`, `sex`, `position`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 0, '', '', '', '', '', '', 'admin', '$2y$10$mHxokuG.sxCm/oCMjnSIZed0YzDEX3t8tFDke7hvdbSH4k91/0pGi', 'admin', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, 1000810038, 'jellien jay', 'bautista', 'pamat', NULL, 'male', 'Student', 'jay_pamat', '$2y$10$Pl2HK9ReyZ9snJhU68faReL1RUpSJcKOkVIIsDt/U5K8nf/AoUxXe', 'user', '2023-11-14 03:34:06.000000', '2023-11-21 04:31:05.000000'),
(8, 1000809999, 'Jether Lloyd', 'Yap', 'Clarito', NULL, 'male', 'Student', 'Jether', '$2y$10$rGKwMOosih5IBdlRtNP6MeHM0lWa.ITj94n46q.4vrTNXrDeJiz5y', 'user', '2023-11-14 21:24:26.000000', '2023-11-14 21:24:26.000000'),
(10, 1000806817, 'Jhon fronie', 'Espinosa', 'Gresos', NULL, 'Male', 'Student', 'jhon', '$2y$10$nhM5KnniW5A8XMGzm012o.wwIWOEmHGaPyidw8AZAgYAizvOArukm', 'user', '2023-11-20 22:13:08.000000', '2023-11-20 22:13:08.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
