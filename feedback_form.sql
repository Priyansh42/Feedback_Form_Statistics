-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 08:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback_data`
--

CREATE TABLE `tbl_feedback_data` (
  `feedback_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `rating_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback_data`
--

INSERT INTO `tbl_feedback_data` (`feedback_id`, `question_no`, `rating_id`) VALUES
(1, 4, 3),
(2, 1, 1),
(3, 1, 4),
(4, 1, 3),
(5, 2, 1),
(6, 2, 2),
(7, 3, 4),
(8, 1, 2),
(9, 2, 3),
(10, 4, 2),
(11, 4, 2),
(12, 3, 3),
(13, 3, 1),
(14, 4, 4),
(15, 4, 4),
(16, 2, 3),
(17, 1, 1),
(18, 3, 3),
(19, 2, 2),
(20, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ratings`
--

CREATE TABLE `tbl_ratings` (
  `rating_id` int(11) NOT NULL,
  `rating_value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ratings`
--

INSERT INTO `tbl_ratings` (`rating_id`, `rating_value`) VALUES
(1, 'Very Bad'),
(2, 'Bad'),
(3, 'Good'),
(4, 'Excellent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_feedback_data`
--
ALTER TABLE `tbl_feedback_data`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `foreignKey` (`rating_id`);

--
-- Indexes for table `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_feedback_data`
--
ALTER TABLE `tbl_feedback_data`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_feedback_data`
--
ALTER TABLE `tbl_feedback_data`
  ADD CONSTRAINT `foreignKey` FOREIGN KEY (`rating_id`) REFERENCES `tbl_ratings` (`rating_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
