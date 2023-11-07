-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2023 at 03:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `host`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `count` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `worker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `email`, `role`, `date`, `place`, `count`, `status`, `id`, `worker`) VALUES
('Arjun', 'Arjun@123', 'anchor', '2023-11-28', 'kochi,kerala', '1', 'confirmed', 'BO6791', 'Aliya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `phone`, `town`, `state`, `dob`) VALUES
('Arjun', 'Arjun@123', 'Arjun@123', '07594900620', 'Ernakulam', 'Kerala', '2023-10-09'),
('nandhitha', 'Nandi@123', 'Nandi@123', '07594900620', 'Ernakulam', 'Kerala', '2023-10-29'),
('shely', 'Shelly@123', 'Shelly@123', '9989784323', 'aluva', 'kerala', '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `booking` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `email`, `password`, `phone`, `town`, `state`, `gender`, `dob`, `role`, `booking`, `status`) VALUES
('12121212', 'dev', 'dev@1234', 'kuutapan', '759223832398', 'kochi', 'kerala', 'male', '2023-10-02', 'anchor', 'none', 'confirmed'),
('W577', 'Karun', 'Karun@123', 'Karun@123', '07594900213', 'kochi', 'Kerala', 'male', '2023-10-23', 'catering', 'none', 'confirmed'),
('W581', 'Aliya', 'Aliya@123', 'Aliya@123', '07594900620', 'Ernakulam', 'Kerala', 'female', '2023-10-31', 'anchor', 'none', 'confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
