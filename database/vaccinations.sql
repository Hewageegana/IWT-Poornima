-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 29, 2022 at 02:01 PM
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
-- Indexes for table `vaccinations`
--
ALTER TABLE `vaccinations`
  ADD PRIMARY KEY (`vac_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaccinations`
--
ALTER TABLE `vaccinations`
  MODIFY `vac_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
