-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 01:36 PM
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
-- Database: `clinicsystem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Elementary Department', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Senior High Department', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'College Department', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_positions`
--

CREATE TABLE `tbl_positions` (
  `id` int(255) NOT NULL,
  `position` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_positions`
--

INSERT INTO `tbl_positions` (`id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Student', '2023-11-24 13:18:41', '2023-11-24 13:18:41'),
(2, 'Employee', '2023-11-24 13:18:41', '2023-11-24 13:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sex`
--

CREATE TABLE `tbl_sex` (
  `id` int(255) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sex`
--

INSERT INTO `tbl_sex` (`id`, `sex`, `created_at`, `updated_at`) VALUES
(1, 'Male', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Female', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `stamp` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `id_number`, `stamp`, `created_at`, `updated_at`) VALUES
(1, 7, '01:37:06:PM', '2023-11-14 12:01:58.000000', '2023-11-14 12:01:58.000000'),
(2, 7, '10:17:05:AM', '2023-11-14 12:04:34.000000', '2023-11-14 12:04:34.000000'),
(11, 10, '09:17:05:AM', '2023-11-27 03:49:46.000000', '2023-11-27 03:49:46.000000'),
(15, 18, '08:45:05:AM', '2023-11-27 07:19:20.000000', '2023-11-27 07:19:20.000000'),
(16, 18, '08:17:05:AM', '2023-11-27 10:20:54.000000', '2023-11-27 10:20:54.000000'),
(17, 18, '07:20:05:AM', '2023-11-27 10:31:50.000000', '2023-11-27 10:31:50.000000'),
(18, 18, '06:20:05:AM', '2023-11-27 18:39:27.000000', '2023-11-27 18:39:27.000000'),
(19, 18, '07:37:06:PM', '2023-11-27 19:37:07.000000', '2023-11-27 19:37:07.000000'),
(20, 18, '07:43:38:PM', '2023-11-27 19:43:38.000000', '2023-11-27 19:43:38.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yearlevels`
--

CREATE TABLE `tbl_yearlevels` (
  `id` int(255) NOT NULL,
  `year_level` varchar(200) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_yearlevels`
--

INSERT INTO `tbl_yearlevels` (`id`, `year_level`, `created_at`, `updated_at`) VALUES
(1, 'Grade School', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Junior High School', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Senior High School', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'College', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

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
  `sex_id` int(255) DEFAULT NULL,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `position_id` int(255) DEFAULT NULL,
  `yearlevel_id` int(255) DEFAULT NULL,
  `department_id` int(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `suffix`, `sex_id`, `birthdate`, `position_id`, `yearlevel_id`, `department_id`, `username`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '', '', '', '', 1, '2023-11-24', 1, NULL, NULL, 'admin', '$2y$10$mHxokuG.sxCm/oCMjnSIZed0YzDEX3t8tFDke7hvdbSH4k91/0pGi', 'admin', 'active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, 1000810038, 'jellien jay', 'bautista', 'pamat', NULL, 1, '2023-11-24', 2, 4, 2, 'jay_pamat', '$2y$10$Pl2HK9ReyZ9snJhU68faReL1RUpSJcKOkVIIsDt/U5K8nf/AoUxXe', 'user', 'active', '2023-11-14 03:34:06.000000', '2023-11-27 00:31:20.000000'),
(10, 1000811746, 'Kim bernadine', 'Mayuga', 'Taculin', NULL, 2, '2023-11-25', 1, 4, 1, 'kim', '$2y$10$jMh5uc468f7LoZPn4.bJIuE14r2g.NBqFPwaCYD81KcoLdu/K7Ei6', 'user', 'active', '0000-00-00 00:00:00.000000', '2023-11-27 00:32:07.000000'),
(11, 1000811612, 'John Ariel', 'Merenillo', 'Rullan', NULL, 1, '2023-11-25', 1, 4, 3, 'rullan', '$2y$10$jMh5uc468f7LoZPn4.bJIuE14r2g.NBqFPwaCYD81KcoLdu/K7Ei6', 'user', 'active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(12, 1000810986, 'John Frel', 'Palabao', 'Diems', NULL, 1, '2023-11-25', 1, 4, 2, 'john', '$2y$10$jMh5uc468f7LoZPn4.bJIuE14r2g.NBqFPwaCYD81KcoLdu/K7Ei6', 'user', 'active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(13, 1000810904, 'Rizalyn', 'Jamili', 'Batalla', NULL, 2, '2023-11-25', 1, 4, 2, 'rizalyn', '$2y$10$jMh5uc468f7LoZPn4.bJIuE14r2g.NBqFPwaCYD81KcoLdu/K7Ei6', 'user', 'inactive', '0000-00-00 00:00:00.000000', '2023-11-27 00:32:51.000000'),
(18, 1000809999, 'Jether Lloyd', 'Yap', 'Clarito', NULL, 1, '2023-11-27', 2, NULL, NULL, 'jether', '$2y$10$gE4r0QZh2z1tOqp9HcJVlerqGH8iiTP45eloyy3TvFADPpyY8GH/y', 'user', 'active', '2023-11-26 23:18:22.000000', '2023-11-27 02:01:42.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_positions`
--
ALTER TABLE `tbl_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sex`
--
ALTER TABLE `tbl_sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`id_number`);

--
-- Indexes for table `tbl_yearlevels`
--
ALTER TABLE `tbl_yearlevels`
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
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_positions`
--
ALTER TABLE `tbl_positions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sex`
--
ALTER TABLE `tbl_sex`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_yearlevels`
--
ALTER TABLE `tbl_yearlevels`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD CONSTRAINT `tbl_transactions_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
