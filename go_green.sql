-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 01:27 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_green`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `age` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `address`, `dateofbirth`, `age`) VALUES
('carissawle123', '123', 'siti kodijah haliman', 'jl pelangi harapan', '2025-11-05', 17),
('mey123', '$2y$10$bjM0VOzpDBzKu5hDx7hEPeWUWbaCuX9r/U17XArjj4g5Ieb2Vvoey', 'meylinda', 'jl gamon', '2008-07-04', 17),
('sasa123', '$2y$10$f94jU7x8xNTudxVD9tE92.nfb3JV2QfZret7rMybWgJfu/c8Ig54m', 'sasa', 'jl gamon', '2016-07-04', 17);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `activity` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `reason` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `activitydate` date NOT NULL,
  `status` int NOT NULL,
  `community` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`phone`, `fullname`, `age`, `gender`, `activity`, `reason`, `activitydate`, `status`, `community`) VALUES
('233', 'meli', 20, 'female', 'nanam', 'gatau', '2025-12-06', 1, 'sm'),
('45', 'p', 4, 'male', 'nanam', 'gatau', '2025-12-17', 0, 'sm'),
('788', 'sasa', 2, 'female', 'nanam', 'pengen aja', '2025-12-05', 1, 'sm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
