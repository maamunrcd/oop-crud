-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 12:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zend28`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `student_address` text NOT NULL,
  `student_type` tinyint(4) NOT NULL,
  `student_group` varchar(15) NOT NULL,
  `student_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_address`, `student_type`, `student_group`, `student_status`) VALUES
(17, 'Mamun Or Rashid', 'maamunrcd@gmail.com', '01785 964 788', 'Bangladeshi Band', 1, 'cse', 1),
(21, 'Karim hossain', 'karim@gmail.com', '0178 596 784', 'Design world', 1, 'software', 1),
(22, 'freadom', 'freadom@gmail.com', '01785 996 778', 'Gulshan-1', 0, 'it', 1),
(23, 'Rakib Hossain', 'rakib@gmail.com', '01787 458 123', 'Prime Hospital', 0, 'software', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
