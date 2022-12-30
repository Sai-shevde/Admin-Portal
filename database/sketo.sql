-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 12:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sketo`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationform`
--

CREATE TABLE `registrationform` (
  `id` int(11) NOT NULL,
  `d_enquiry_id` varchar(10) NOT NULL,
  `d_registration_id` varchar(10) NOT NULL,
  `d_first_name` varchar(10) NOT NULL,
  `d_middle_name` varchar(10) NOT NULL,
  `d_last_name` varchar(10) NOT NULL,
  `d_email_id` varchar(10) NOT NULL,
  `d_mobile_number` varchar(10) NOT NULL,
  `d_alternate_number` varchar(10) NOT NULL,
  `d_gender` varchar(10) NOT NULL,
  `d_date_of_birth` datetime NOT NULL,
  `d_address` varchar(50) NOT NULL,
  `d_city` varchar(10) NOT NULL,
  `d_pincode` varchar(10) NOT NULL,
  `d_state` varchar(10) NOT NULL,
  `d_country` varchar(10) NOT NULL,
  `d_qualification` varchar(10) NOT NULL,
  `d_qualification_specialization` varchar(10) NOT NULL,
  `d_courses` varchar(10) NOT NULL,
  `d_courses_applied` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`id`, `d_enquiry_id`, `d_registration_id`, `d_first_name`, `d_middle_name`, `d_last_name`, `d_email_id`, `d_mobile_number`, `d_alternate_number`, `d_gender`, `d_date_of_birth`, `d_address`, `d_city`, `d_pincode`, `d_state`, `d_country`, `d_qualification`, `d_qualification_specialization`, `d_courses`, `d_courses_applied`) VALUES
(1, '1', '2', 'sai', 'waman', 'shevde', 'saishevde2', '8652784797', '7710953793', 'male', '0000-00-00 00:00:00', 'gautam nagar', 'mumbai', '400059', 'maharastra', 'india', 'hsc', 'commerce', 'programing', 'full stack'),
(2, '2.', '1', 'Sai', 'Waman', 'Shevde', 'saishevde2', '0865278479', '7710953793', 'Male', '2022-12-15 00:00:00', 'Gautam nager\r\nrahivashi sangh', 'mumbai', '400059', 'Maharastra', 'India', '2', 'commerce', '2', 'full stack'),
(3, '2.', '1', 'Sai', 'Waman', 'Shevde', 'saishevde2', '0865278479', '7710953793', 'Male', '2022-12-15 00:00:00', 'Gautam nager\r\nrahivashi sangh', 'mumbai', '400059', 'Maharastra', 'India', '2', 'commerce', '2', 'full stack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationform`
--
ALTER TABLE `registrationform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationform`
--
ALTER TABLE `registrationform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
