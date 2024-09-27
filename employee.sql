-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2024 at 09:01 AM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cione`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(1, 'nikhil', 'bhole', '9403526655', 'nikBhole@gmail.com'),
(2, 'akash', 'patil', '8551745542', 'akashpatil50@gmail.com'),
(3, 'shruti', 'birari', '8557442002', 'shru@gmail.com'),
(10, 'Aarohi', 'Patel', '9876543210', 'aarohi.patel@email.com'),
(12, 'Ananya', 'Mehta', '9988776655', 'ananya.mehta@email.com'),
(52, 'new', 'new', '4525415268', 'aa@gmail.com'),
(15, 'Divya', 'Kumar', '9876541230', 'divya.kumar@email.com'),
(17, 'Falguni', 'Reddy', '9123456781', 'falguni.reddy@email.com'),
(18, 'Gauri', 'Bhatt', '9876543219', 'gauri.bhatt@email.com'),
(19, 'Harini', 'Joshi', '9123678909', 'harini.joshi@email.com'),
(20, 'Aarav', 'Patel', '9876543215', 'aarav.patel@email.com'),
(21, 'Bhavesh', 'Sharma', '9123456783', 'bhavesh.sharma@email.com'),
(22, 'Chirag', 'Mehta', '9988776653', 'chirag.mehta@email.com'),
(23, 'Darshan', 'Gupta', '9871234563', 'darshan.gupta@email.com'),
(24, 'Eklavya', 'Nair', '9123678907', 'eklavya.nair@email.com'),
(26, 'Gautam', 'Deshmukh', '9198765430', 'gautam.deshmukh@email.com'),
(27, 'Hrithik', 'Reddy', '9123456787', 'hrithik.reddy@email.com'),
(28, 'Ishan', 'Bhatt', '9876543217', 'ishan.bhatt@email.com'),
(29, 'Jay', 'Joshi', '9123678905', 'jay.joshi@email.com'),
(30, 'Ira', 'Nayak', '9876543216', 'ira.nayak@email.com'),
(31, 'Jiya', 'Khan', '9123456784', 'jiya.khan@email.com'),
(32, 'Kavya', 'Ghosh', '9988776656', 'kavya.ghosh@email.com'),
(33, 'Lavanya', 'Pillai', '9871234569', 'lavanya.pillai@email.com'),
(34, 'Meera', 'Iyer', '9123678902', 'meera.iyer@email.com'),
(35, 'Nisha', 'Kapur', '9876541236', 'nisha.kapoor@email.com'),
(36, 'Oviya', 'Singh', '9198765433', 'oviya.singh@email.com'),
(37, 'Pihu', 'Verma', '9123456788', 'pihu.verma@email.com'),
(38, 'Riya', 'Rathod', '9876543220', 'riya.rathod@email.com'),
(40, 'Vani', 'Tiwari', '9876543218', 'vani.tiwari@email.com'),
(41, 'Yashika', 'Joshi', '9123456782', 'yashika.joshi@email.com'),
(42, 'Vikram', 'Patel', '9876543211', 'vikram.patel@email.com'),
(43, 'Rahul', 'Sharma', '9123456785', 'rahul.sharma@email.com'),
(45, 'Dev', 'Gupta', '9871234562', 'dev.gupta@email.com'),
(46, 'Soham', 'Nair', '9123678904', 'soham.nair@email.com'),
(47, 'Manan', 'Kumar', '9876541238', 'manan.kumar@email.com'),
(48, 'Rohan', 'Deshmukh', '9198765434', 'rohan.deshmukh@email.com'),
(49, 'Aditya', 'Reddy', '9123456786', 'aditya.reddy@email.com'),
(50, 'Pranav', 'Bhatt', '9876543213', 'pranav.bhatt@email.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
