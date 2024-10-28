-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 11:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(20) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `appointment_date` date NOT NULL,
  `time_slot` varchar(30) NOT NULL,
  `amount` int(100) NOT NULL,
  `amount_status` varchar(30) NOT NULL,
  `patient_current_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `patient_id`, `doctor_id`, `appointment_date`, `time_slot`, `amount`, `amount_status`, `patient_current_status`) VALUES
(0, 1235, 1651, '2023-11-15', '03:12:10', 100, 'paaid', 'saad'),
(0, 1235, 1651, '2023-11-15', '03:12:10', 100, 'paaid', 'lollllll'),
(3, 1235, 1651, '2023-11-15', '03:12:10', 100, 'paaid', 'hahahahhah');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(20) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `complain_type` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `designation` varchar(70) NOT NULL,
  `join_date` date NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `user_id`, `name`, `address`, `designation`, `join_date`, `department`) VALUES
(1, 1234, 'proma', 'brindabon', 'doctor', '2023-11-16', 'business dev');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(20) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `doctor_id` int(50) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `designation` varchar(70) NOT NULL,
  `join_date` date NOT NULL,
  `department` varchar(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `name`, `address`, `designation`, `join_date`, `department`, `salary`) VALUES
(1, 1234, 'proma', 'korea', 'Army', '2023-11-16', 'business dev', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `contact`) VALUES
(1, 'proma', 1011011010);

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `id` int(20) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `prescription_type` varchar(30) NOT NULL,
  `appointment_id` int(50) NOT NULL,
  `doctor_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_appointment`
--

CREATE TABLE `pending_appointment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `time_slot` time DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `amount_status` varchar(20) DEFAULT NULL,
  `patient_current_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_user`
--

CREATE TABLE `pending_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(0, 'alu@potol.com', 'alualu', 'nomnonm'),
(3, 'loujasgbfdoiupasgflouj', 'alsiuyyfdvliasyyg', 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `ward_patient`
--

CREATE TABLE `ward_patient` (
  `id` int(20) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `prescription_id` int(30) NOT NULL,
  `bed_number` int(10) NOT NULL,
  `cabin_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending_appointment`
--
ALTER TABLE `pending_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_user`
--
ALTER TABLE `pending_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
