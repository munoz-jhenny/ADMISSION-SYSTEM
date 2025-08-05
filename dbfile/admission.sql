-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 11:56 AM
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
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE `email_config` (
  `id` int(145) NOT NULL,
  `email` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'joshua010104@gmail.com', 'zdfc ttgm rnit apcc', '2024-09-24 14:23:13', '2024-09-25 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(14) NOT NULL,
  `user_id` int(14) NOT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `activity`, `created_at`) VALUES
(79, 62, 'Has Successfully Signed In', '2025-07-27 04:55:42'),
(80, 62, 'Has Successfully Signed In', '2025-07-27 05:01:25'),
(81, 62, 'Has Successfully Signed In', '2025-07-27 05:05:41'),
(82, 62, 'Has Successfully Signed In', '2025-07-27 05:17:38'),
(83, 62, 'Has Successfully Signed In', '2025-07-27 05:19:52'),
(84, 62, 'Has Successfully Signed In', '2025-07-27 05:27:55'),
(85, 62, 'Has Successfully Signed In', '2025-07-28 10:25:32'),
(86, 62, 'Has Successfully Signed In', '2025-07-30 07:22:13'),
(87, 62, 'Has Successfully Signed In', '2025-07-30 09:29:01'),
(88, 62, 'Has Successfully Signed In', '2025-07-30 09:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `tupad_applications`
--

CREATE TABLE `tupad_applications` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `income_level` varchar(100) NOT NULL,
  `income_amount` decimal(10,2) DEFAULT NULL,
  `valid_id_path` varchar(255) DEFAULT NULL,
  `certificate_of_low_income_path` varchar(255) DEFAULT NULL,
  `specimen_signature_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'new',
  `specimen_signature_paths` text DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tupad_applications`
--

INSERT INTO `tupad_applications` (`id`, `full_name`, `address`, `birth_date`, `place_of_birth`, `phone_number`, `employment_status`, `income_level`, `income_amount`, `valid_id_path`, `certificate_of_low_income_path`, `specimen_signature_path`, `created_at`, `status`, `specimen_signature_paths`, `barangay`) VALUES
(4, 'halan', 'dampe', '2025-07-04', 'pangan', '4434343', 'Unemployed', 'Below minimum wage', 12342424.00, NULL, NULL, NULL, '2025-07-30 09:33:54', 'new', '[]', NULL),
(5, 'joy', 'dampe', '2025-07-10', 'pangan', '34334434434', 'Underemployed', 'Above minimum wage', 12342424.00, NULL, NULL, NULL, '2025-07-30 09:34:25', 'new', '[]', NULL),
(8, 'halan jan', 'dampe', '2025-07-22', 'sdvsdvsv', '4434343', 'Unemployed', 'Minimum wage', 99999999.99, NULL, NULL, NULL, '2025-07-30 09:55:26', 'new', '[]', 'San Isidro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(400) DEFAULT NULL,
  `status` enum('not_active','active') NOT NULL DEFAULT 'not_active',
  `tokencode` varchar(400) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(64) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `tokencode`, `created_at`, `reset_token`, `token_expiry`) VALUES
(62, 'alan', 'ajjohn152129@gmail.com', '202cb962ac59075b964b07152d234b70', 'active', NULL, '2025-07-27 04:55:29', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tupad_applications`
--
ALTER TABLE `tupad_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tupad_applications`
--
ALTER TABLE `tupad_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
