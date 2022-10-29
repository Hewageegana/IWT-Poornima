-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 29, 2022 at 02:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-vaccination-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `user_type` int(1) NOT NULL,
  `created_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `first_name`, `last_name`, `gender`, `phone_number`, `address`, `email`, `password`, `nic`, `isActive`, `user_type`, `created_date`) VALUES
(1, 'Damru', 'Fernando', 'Male', 778945836, 'Colombo 12   ', 'damruravihara2@gmail.com', '12345', '200025501131', 1, 2, '2022-10-21 22:30:13.000'),
(8, 'Damru', 'Ravihara', 'Male', 778945836, 'Colombo', '1234dssdaa5@gmail.com', '12345', '200225501131', 1, 1, '2022-10-22 02:34:52.000'),
(15, 'Damru', 'Ravihara', 'Male', 778945837, 'Colombo', 'damruravihara10@gmail.com', '12345', '200925501131', 1, 1, '2022-10-28 12:58:20.000'),
(16, 'Imal', 'Shanaka', 'Male', 778945836, 'colombo', 'imal.shanaka@gmail.com', '12345', '205025501131', 1, 1, '2022-10-28 13:02:56.000');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinations`
--

CREATE TABLE `vaccinations` (
  `vac_Id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dose_no` int(10) NOT NULL,
  `vaccine_name` varchar(50) NOT NULL,
  `vaccine_place` varchar(250) NOT NULL,
  `vaccine_date` varchar(100) NOT NULL,
  `batch_number` varchar(59) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `created_date` timestamp(3) NOT NULL DEFAULT current_timestamp(3) ON UPDATE current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`vac_Id`, `fullname`, `dose_no`, `vaccine_name`, `vaccine_place`, `vaccine_date`, `batch_number`, `remarks`, `nic`, `created_date`) VALUES
(14, 'Damru Ravihara', 2, 'Fizer', 'Panadura', '2022-10-29', '100-2212', 'no', '200025501131', '2022-10-29 11:56:18.587'),
(15, 'Damru Ravihara', 2, 'Fizer', 'Panadura', '2022-10-10', '100-22', '', '200225501131', '2022-10-29 08:27:00.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `vaccinations`
--
ALTER TABLE `vaccinations`
  ADD PRIMARY KEY (`vac_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vaccinations`
--
ALTER TABLE `vaccinations`
  MODIFY `vac_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
