-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 09:54 PM
-- Server version: 8.0.28
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_master`
--

CREATE TABLE `about_master` (
  `heading` varchar(100) DEFAULT 'About Us',
  `subheading` varchar(1000) DEFAULT 'At Home of Compassion Hospital, we are dedicated to providing exceptional and comprehensive care to our patients. Our team of experienced healthcare professionals is committed to using the latest technologies and techniques to ensure that every patient receives the highest quality of care. We pride ourselves on our commitment to excellence and strive to make a positive difference in the lives of those we serve. Join us in our mission to advance healthcare and improve lives.',
  `patient_beds` int DEFAULT '96',
  `doctors_nurses` int DEFAULT '104',
  `happy_patients` int DEFAULT '910',
  `experience` int DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_master`
--

INSERT INTO `about_master` (`heading`, `subheading`, `patient_beds`, `doctors_nurses`, `happy_patients`, `experience`) VALUES
('About Us', '', 96000000, 104, 910, 6);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_master`
--

CREATE TABLE `appointment_master` (
  `patientid` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `pswd` int NOT NULL,
  `doctor_dept` varchar(30) DEFAULT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'Pending',
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment_master`
--

INSERT INTO `appointment_master` (`patientid`, `fname`, `lname`, `gender`, `email`, `pswd`, `doctor_dept`, `doctor_name`, `dat`, `description`, `status`, `time`) VALUES
(101, 'thg', 'gfds', 'F', 'trgf@wed.ss', 76543, 'Allergists', 'steven', '2023-07-31', '', 'Accepted', '11:00:00'),
(102, 'Me', 'Surname', 'M', 'me@mail.me', 1234, 'Allergists', 'Lyon', '2023-07-25', '', 'Accepted', '04:00:00'),
(103, 'thg', 'tgfvc', 'M', 'trgf@wed.ss', 654, 'Allergists', 'steven', '2023-07-12', '', 'Rejected', NULL),
(104, 'thg', 'tgfvc', 'M', 'trgf@wed.ss', 5432, 'Allergists', 'steven', '2023-07-11', '', 'Pending', NULL),
(105, 'thg', 'tgfvc', 'M', 'me@mail.me', 765, 'Allergists', 'steven', '2023-07-12', '', 'Rejected', NULL),
(106, 'thg', 'tgfvc', 'M', 'trgf@wed.ss', 7654, 'Allergists', 'steven', '2023-07-31', '', 'Accepted', '01:30:00'),
(107, 'thg', 'tgfvc', 'F', 'trgf@wed.ss', 543, 'Allergists', 'John', '2023-08-02', 'hgf', 'Accepted', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_master`
--

CREATE TABLE `doctor_master` (
  `doctor_id` int NOT NULL,
  `image` blob,
  `name` varchar(50) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `patients` int DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_master`
--

INSERT INTO `doctor_master` (`doctor_id`, `image`, `name`, `degree`, `speciality`, `patients`, `status`) VALUES
(1, 0x41472e737667, 'Doctor', 'MBBS', 'Heart', 10, 'Active'),
(2, 0x41422e737667, 'AB', 'PhD, MD', 'Liver', 22, 'Active'),
(3, 0x41532e737667, 'AS', 'MD', 'Kidney', 12, 'Active'),
(4, 0x61626f75742e6a7067, 'About', 'Degree', 'None', 3, 'Active'),
(5, 0x435942303030372e6a7067, 'bv', 'gf', 'gfd', 5, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` int NOT NULL,
  `pswd` int NOT NULL,
  `gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`fname`, `lname`, `email`, `phone_no`, `pswd`, `gender`) VALUES
('Fname', 'Lname', 'me@gmail.cpm', 123454, 1234, ''),
('Fname', 'Lname', 'me@gmail.cpme', 123454, 1234, ''),
('Fname', 'Lname', 'me@gmail.cpmmm', 123454, 1234, ''),
('Fname', 'Lname', 'me@gmail.cpmx', 123454, 876, 'F'),
('Fname', 'Lname', 'me@gmail.cpmz', 123454, 43, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `service_id` int NOT NULL,
  `image` blob,
  `heading` varchar(30) DEFAULT NULL,
  `subheading` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`service_id`, `image`, `heading`, `subheading`, `status`) VALUES
(42, 0x43617264696f6c6f67792e706e67, 'Cardiology', 'Cardiology is medicine speciality that involves diagnosis and treatment of disorders of the heart and certain parts of the...', 'Active'),
(43, 0x4f7274686f7065646963732e706e67, 'Orthopedics', 'Orthopedics is a branch of medicine that focuses on the care of the musculoskeletal system. This system is made up of muscl...', 'Active'),
(44, 0x4d65646963696e652e706e67, 'Medicine', 'Orthopedics is a branch of medicine that focuses on the care of the musculoskeletal system. This system is made up of muscl...', 'Active'),
(45, 0x416d62756c616e63652e706e67, 'Ambulance', 'An ambulance is a medically equipped vehicle which transports patients to treatment facilities, such as hospitals. Typicall...', 'Active'),
(46, 0x4f70687468616c6d6f6c6f67792e706e67, 'Ophthalmology', 'Ophthalmology is the study of medical conditions relating to the eye. Ophthalmologists are doctors who specialize in the me...', 'Active'),
(47, 0x4e6575726f6c6f67792e706e67, 'Neurology', 'Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peri...', 'Active'),
(48, 0x416d62756c616e63652e706e67, 'yuh', 'ytgr', 'Active'),
(49, 0x41472e737667, '', '', 'Active'),
(50, 0x637269636c652e737667, 'Newlogy', 'dca', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_master`
--

CREATE TABLE `testimonial_master` (
  `testimonial_id` int NOT NULL,
  `image` blob,
  `name` varchar(50) DEFAULT NULL,
  `review` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial_master`
--

INSERT INTO `testimonial_master` (`testimonial_id`, `image`, `name`, `review`, `status`) VALUES
(1, 0x54657374696d6f6e69616c2d312e6a706567, 'Rossy', 'Services are good', 'Active'),
(2, 0x54657374696d6f6e69616c2d312e6a706567, 'Rossy', 'Services are good', 'Active'),
(3, 0x54657374696d6f6e69616c2d322e6a706567, 'David', 'Found doctors..', 'Active'),
(4, 0x54657374696d6f6e69616c2d332e6a706567, 'Callings Hokma', 'The services are very good. I recommend another patient to come to this hospital. Everything in hospital is good.', 'Active'),
(5, 0x61626f75742e6a7067, 'About', 'None', 'Deactive'),
(6, 0x435942303030342e6a7067, 'Graphice', 'Try', 'Deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_master`
--
ALTER TABLE `appointment_master`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `doctor_master`
--
ALTER TABLE `doctor_master`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`email`,`phone_no`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `testimonial_master`
--
ALTER TABLE `testimonial_master`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_master`
--
ALTER TABLE `appointment_master`
  MODIFY `patientid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `doctor_master`
--
ALTER TABLE `doctor_master`
  MODIFY `doctor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `testimonial_master`
--
ALTER TABLE `testimonial_master`
  MODIFY `testimonial_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
