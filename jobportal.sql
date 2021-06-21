-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 07:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `id` int(11) NOT NULL,
  `pay_order_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`id`, `pay_order_no`, `date`, `amount`) VALUES
(1, '1323afdgdfg', '2020-11-11', 1000),
(2, '1323afdgdfg', '2020-11-11', 1000),
(3, '1323afdgdfg', '2020-11-11', 1000),
(4, '1323afdgdfg', '2020-11-10', 1000),
(5, '1323afdgdfg', '2020-11-11', 1000),
(6, '1323afdgdfg', '2020-11-11', 1000),
(7, '1323afdgdfg', '2020-11-11', 1000),
(8, '1323afdgdfg', '2020-11-11', 1000),
(9, '1323afdgdfg', '2020-11-11', 1000),
(10, '1323afdgdfg', '2020-11-11', 1000),
(11, '1323afdgdfg', '2020-11-11', 1000),
(12, '1323afdgdfg', '2020-11-11', 1000),
(13, '1323afdgdfg', '2020-11-11', 1000),
(14, '1323afdgdfg', '2020-11-11', 1000),
(15, '1323afdgdfg', '2020-11-11', 1000),
(16, '', '0000-00-00', 0),
(17, '', '0000-00-00', 0),
(18, '', '0000-00-00', 0),
(19, '', '0000-00-00', 0),
(20, '', '0000-00-00', 0),
(21, '', '0000-00-00', 0),
(22, '', '0000-00-00', 0),
(23, '', '0000-00-00', 0),
(24, '', '0000-00-00', 0),
(25, '', '0000-00-00', 0),
(26, '', '0000-00-00', 0),
(27, '', '0000-00-00', 0),
(28, '', '0000-00-00', 0),
(29, '', '0000-00-00', 0),
(30, '', '0000-00-00', 0),
(31, '', '0000-00-00', 0),
(32, '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `extra_edu_info`
--

CREATE TABLE `extra_edu_info` (
  `id` int(11) NOT NULL,
  `other_edu_details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra_edu_info`
--

INSERT INTO `extra_edu_info` (`id`, `other_edu_details`) VALUES
(1, 'yes'),
(2, 'yes'),
(3, 'yes'),
(4, 'yes ,i do....'),
(5, 'sgdfg'),
(6, 'sgdfg'),
(7, 'sgdfg'),
(8, 'sgdfg'),
(9, 'sgdfg'),
(10, 'sgdfg'),
(11, 'sgdfg'),
(12, 'sgdfg'),
(13, 'sgdfg'),
(14, 'sgdfg'),
(15, 'sgdfg'),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, '');

-- --------------------------------------------------------

--
-- Table structure for table `honours_info`
--

CREATE TABLE `honours_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` float NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `honours_info`
--

INSERT INTO `honours_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(1, 'Bangladesh Open University', 2014, 2018, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2018, 'qweetr', 'Computer Science'),
(2, 'Bangladesh Open University', 2014, 2018, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2018, 'qweetr', 'Computer Science'),
(3, 'Bangladesh Open University', 2014, 2018, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2018, 'qweetr', 'Computer Science'),
(4, 'Bangladesh Open University', 2014, 2018, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2018, 'qweetr', 'Computer Science'),
(5, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(6, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(7, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(8, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(9, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(10, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(11, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(12, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(13, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(14, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(15, 'National University', 2007, 2011, 'B.S.S (Honors)', '2nd Class', 0, 2013, 'National university', 'Management'),
(16, '', 0, 0, '', '', 0, 0, '', ''),
(17, '', 0, 0, '', '', 0, 0, '', ''),
(18, '', 0, 0, '', '', 0, 0, '', ''),
(19, '', 0, 0, '', '', 0, 0, '', ''),
(20, '', 0, 0, '', '', 0, 0, '', ''),
(21, '', 0, 0, '', '', 0, 0, '', ''),
(22, '', 0, 0, '', '', 0, 0, '', ''),
(23, '', 0, 0, '', '', 0, 0, '', ''),
(24, '', 0, 0, '', '', 0, 0, '', ''),
(25, '', 0, 0, '', '', 0, 0, '', ''),
(26, '', 0, 0, '', '', 0, 0, '', ''),
(27, '', 0, 0, '', '', 0, 0, '', ''),
(28, '', 0, 0, '', '', 0, 0, '', ''),
(29, '', 0, 0, '', '', 0, 0, '', ''),
(30, '', 0, 0, '', '', 0, 0, '', ''),
(31, '', 0, 0, '', '', 0, 0, '', ''),
(32, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hsc_info`
--

CREATE TABLE `hsc_info` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(10,2) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hsc_info`
--

INSERT INTO `hsc_info` (`id`, `collage_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `board`, `subject`) VALUES
(1, 'Dhaka Mohela Polytechnic Institute', 2009, 2014, 'Diploma Engineering', 'GPA(Out of 4)', '3.56', 2014, 'Bangladesh Technical', 'Computer Science & Technology'),
(2, 'Dhaka Mohela Polytechnic Institute', 2009, 2014, 'Diploma Engineering', 'GPA(Out of 4)', '3.56', 2014, 'Bangladesh Technical', 'Computer Science & Technology'),
(3, 'Dhaka Mohela Polytechnic Institute', 2009, 2014, 'Diploma Engineering', 'GPA(Out of 4)', '3.56', 2014, 'Bangladesh Technical', 'Computer Science & Technology'),
(4, 'Dhaka Mohela Polytechnic Institute', 2009, 2014, 'Diploma Engineering', 'GPA(Out of 4)', '3.56', 2014, 'Bangladesh Technical', 'Computer Science & Technology'),
(5, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(6, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(7, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(8, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(9, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(10, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(11, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(12, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(13, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(14, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(15, 'Polash Urea SarkarKhana Collage', 2005, 2007, 'H.S.C', 'GPA(Out of 5)', '4.88', 2007, 'Dhaka', 'Business Studies'),
(16, '', 0, 0, '', '', '0.00', 0, '', ''),
(17, '', 0, 0, '', '', '0.00', 0, '', ''),
(18, '', 0, 0, '', '', '0.00', 0, '', ''),
(19, '', 0, 0, '', '', '0.00', 0, '', ''),
(20, '', 0, 0, '', '', '0.00', 0, '', ''),
(21, '', 0, 0, '', '', '0.00', 0, '', ''),
(22, '', 0, 0, '', '', '0.00', 0, '', ''),
(23, '', 0, 0, '', '', '0.00', 0, '', ''),
(24, '', 0, 0, '', '', '0.00', 0, '', ''),
(25, '', 0, 0, '', '', '0.00', 0, '', ''),
(26, '', 0, 0, '', '', '0.00', 0, '', ''),
(27, '', 0, 0, '', '', '0.00', 0, '', ''),
(28, '', 0, 0, '', '', '0.00', 0, '', ''),
(29, '', 0, 0, '', '', '0.00', 0, '', ''),
(30, '', 0, 0, '', '', '0.00', 0, '', ''),
(31, '', 0, 0, '', '', '0.00', 0, '', ''),
(32, '', 0, 0, '', '', '0.00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `image_sign_date`
--

CREATE TABLE `image_sign_date` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `signature` blob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_sign_date`
--

INSERT INTO `image_sign_date` (`id`, `image`, `signature`, `date`) VALUES
(1, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '2020-11-14'),
(2, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '2020-11-14'),
(3, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '2020-11-14'),
(4, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466, '2020-11-15'),
(5, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(6, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(7, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(8, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(9, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(10, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(11, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(12, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(13, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(14, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(15, 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 0x73656d7070746d6f6466696e616c2d3039303931393036353834342d70687061707030322e706466, '2020-11-20'),
(16, 0x20, '', '0000-00-00'),
(17, 0x20, '', '0000-00-00'),
(18, 0x20, '', '0000-00-00'),
(19, 0x20, '', '0000-00-00'),
(20, 0x20, '', '0000-00-00'),
(21, 0x20, '', '0000-00-00'),
(22, 0x20, '', '0000-00-00'),
(23, 0x20, '', '0000-00-00'),
(24, 0x20, '', '0000-00-00'),
(25, 0x64312e6a706720, 0x424f55206c6f676f2e706e67, '0000-00-00'),
(26, 0x20, '', '0000-00-00'),
(27, 0x642e6a706720, 0x64322e706e67, '0000-00-00'),
(28, 0x642e6a706720, 0x64322e706e67, '0000-00-00'),
(29, 0x642e6a706720, 0x64322e706e67, '0000-00-00'),
(30, 0x642e6a706720, 0x64322e706e67, '0000-00-00'),
(31, 0x20, '', '0000-00-00'),
(32, 0x642e6a706720, 0x64322e706e67, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `masters_info`
--

CREATE TABLE `masters_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `gpa` double NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_info`
--

INSERT INTO `masters_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(1, 'Chittagong University of Engineering & Technology', 63, 65, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2020, 'dfhghgf', 'Computer Science'),
(2, 'Chittagong University of Engineering & Technology', 63, 65, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2020, 'dfhghgf', 'Computer Science'),
(3, 'Chittagong University of Engineering & Technology', 63, 65, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2020, 'dfhghgf', 'Computer Science'),
(4, 'Bangladesh Open University', 2018, 2020, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2020, 'dfhghgf', 'Computer Science'),
(5, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(6, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(7, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(8, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(9, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(10, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(11, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(12, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(13, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(14, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(15, 'National University', 2013, 2015, 'Masters', '1st Class', 0, 2016, 'National University', 'Management'),
(16, '', 0, 0, '', '', 0, 0, '', ''),
(17, '', 0, 0, '', '', 0, 0, '', ''),
(18, '', 0, 0, '', '', 0, 0, '', ''),
(19, '', 0, 0, '', '', 0, 0, '', ''),
(20, '', 0, 0, '', '', 0, 0, '', ''),
(21, '', 0, 0, '', '', 0, 0, '', ''),
(22, '', 0, 0, '', '', 0, 0, '', ''),
(23, '', 0, 0, '', '', 0, 0, '', ''),
(24, '', 0, 0, '', '', 0, 0, '', ''),
(25, '', 0, 0, '', '', 0, 0, '', ''),
(26, '', 0, 0, '', '', 0, 0, '', ''),
(27, '', 0, 0, '', '', 0, 0, '', ''),
(28, '', 0, 0, '', '', 0, 0, '', ''),
(29, '', 0, 0, '', '', 0, 0, '', ''),
(30, '', 0, 0, '', '', 0, 0, '', ''),
(31, '', 0, 0, '', '', 0, 0, '', ''),
(32, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `more_research_paper`
--

CREATE TABLE `more_research_paper` (
  `id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `description1` varchar(300) NOT NULL,
  `officer_notice` blob NOT NULL,
  `description2` varchar(300) NOT NULL,
  `teacher_notice` blob NOT NULL,
  `description3` varchar(300) NOT NULL,
  `stuff_notice` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `description1`, `officer_notice`, `description2`, `teacher_notice`, `description3`, `stuff_notice`) VALUES
(13, 'Recruitment: Regional Director, Administrative Officer (Legal), Assistant Director, Cameraman. ', 0x6f6666696365725f7265635f3032313231392e706466, 'Recruitment notice of Lecturer (Marketing, Law, Bangla, Computer Science, Physiotherapy, Fisheries, Psychology, Education) ', '', 'Recruitment: UDA, LDA, Security Guard, Night Guard, Office Assistant, Classifier, Office Assistant cum Computer Typist, Helper for Carpenter.', ''),
(14, 'Recruitment: Regional Director, Administrative Officer (Legal), Assistant Director, Cameraman. ', 0x6f6666696365725f7265635f3032313231392e706466, 'Recruitment notice of Lecturer (Marketing, Law, Bangla, Computer Science, Physiotherapy, Fisheries, Psychology, Education) ', '', 'Recruitment: UDA, LDA, Security Guard, Night Guard, Office Assistant, Classifier, Office Assistant cum Computer Typist, Helper for Carpenter.', ''),
(36, '', '', 'notice', 0x726563725f746561636865725f3033313231392e706466, '', ''),
(37, 'Notice ....', 0x6f6666696365725f7265635f3238303932302e70646620, '', '', '', ''),
(38, '', '', '', '', '', ''),
(39, '', '', '', '', 'New Notice....', 0x6e6f746963655f656d705f3233303932302e706466),
(40, '', '', '', '', '', ''),
(41, '', '', '', '', '', ''),
(42, '', '', '', '', 'Recruitment: UDA, LDA, Security Guard, Night Guard, Office Assistant, Classifier, Office Assistant cum Computer Typist, Helper for Carpenter.(20/09/2020)', 0x6e6f746963655f656d705f3233303932302e706466),
(43, 'Recruitment: Regional Director, Administrative Officer (Legal), Assistant Director, Cameraman.  (15/09/2020)', 0x6f6666696365725f7265635f3238303932302e70646620, '', '', '', ''),
(44, '', '', 'Recruitment notice of Lecturer (Marketing, Law, Bangla, Computer Science, Physiotherapy, Fisheries, Psychology, Education).(01/12/2019)', 0x726563725f746561636865725f3033313231392e706466, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `id` int(11) NOT NULL,
  `language_performance` varchar(200) NOT NULL,
  `previous_job` varchar(200) NOT NULL,
  `present_job` varchar(300) NOT NULL,
  `job_experience` varchar(300) NOT NULL,
  `job_agreement` varchar(300) NOT NULL,
  `expected_salary` int(11) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `extracurricular` varchar(300) NOT NULL,
  `other_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`id`, `language_performance`, `previous_job`, `present_job`, `job_experience`, `job_agreement`, `expected_salary`, `reference`, `extracurricular`, `other_info`) VALUES
(1, 'fgfv', 'gnbcb ', 'asczxv', 'svxcb', 'sdvxcv', 60000, 'aegfb\r\negdfgh\r\ndgfd', 'good at cultural program', 'asdsf'),
(2, 'fgfv', 'gnbcb ', 'asczxv', 'svxcb', 'sdvxcv', 60000, 'aegfb\r\negdfgh\r\ndgfd', 'good at cultural program', 'asdsf'),
(3, 'fgfv', 'gnbcb ', 'asczxv', 'svxcb', 'sdvxcv', 60000, 'aegfb\r\negdfgh\r\ndgfd', 'good at cultural program', 'asdsf'),
(4, 'adfdfb', 'sgvdfv', 'dgbcvb ', 'sdvv', 'na', 60000, 'sdgdfhbg', 'good at cultural program', 'scxcbdgb'),
(5, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(6, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(7, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(8, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(9, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(10, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(11, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(12, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(13, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(14, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(15, 'fhnfh', 'thgggn', 'rdhfg', 'dhfgn', 'na', 60000, 'drgf\r\ndfhg\r\ndfhbg', 'good at cultural program', 'dfgdf'),
(16, '', '', '', '', '', 0, '', '', ''),
(17, '', '', '', '', '', 0, '', '', ''),
(18, '', '', '', '', '', 0, '', '', ''),
(19, '', '', '', '', '', 0, '', '', ''),
(20, '', '', '', '', '', 0, '', '', ''),
(21, '', '', '', '', '', 0, '', '', ''),
(22, '', '', '', '', '', 0, '', '', ''),
(23, '', '', '', '', '', 0, '', '', ''),
(24, '', '', '', '', '', 0, '', '', ''),
(25, '', '', '', '', '', 0, '', '', ''),
(26, '', '', '', '', '', 0, '', '', ''),
(27, '', '', '', '', '', 0, '', '', ''),
(28, '', '', '', '', '', 0, '', '', ''),
(29, '', '', '', '', '', 0, '', '', ''),
(30, '', '', '', '', '', 0, '', '', ''),
(31, '', '', '', '', '', 0, '', '', ''),
(32, '', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_bank_info`
--

CREATE TABLE `o_bank_info` (
  `id` int(11) NOT NULL,
  `pay_order_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_bank_info`
--

INSERT INTO `o_bank_info` (`id`, `pay_order_no`, `date`, `amount`) VALUES
(17, '1323afdgdfg', '2020-12-14', 1000),
(18, '1323afdgdfg', '2020-12-14', 1000),
(19, '1323afdgdfg', '2020-12-14', 1000),
(20, '12030', '2020-12-20', 1000),
(21, '12030', '2020-12-20', 1000),
(22, '12030', '2020-12-20', 1000),
(23, '12030', '2020-12-20', 1000),
(24, '12030', '2020-12-20', 1000),
(25, '', '0000-00-00', 0),
(26, '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `o_ extra_edu_info`
--

CREATE TABLE `o_ extra_edu_info` (
  `id` int(11) NOT NULL,
  `other_edu_details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_ extra_edu_info`
--

INSERT INTO `o_ extra_edu_info` (`id`, `other_edu_details`) VALUES
(17, 'yes'),
(18, 'yes'),
(19, 'yes'),
(20, 'sfsdf'),
(21, 'sfsdf'),
(22, 'sfsdf'),
(23, 'sfsdf'),
(24, 'sfsdf'),
(25, '');

-- --------------------------------------------------------

--
-- Table structure for table `o_honours_info`
--

CREATE TABLE `o_honours_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` float NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_honours_info`
--

INSERT INTO `o_honours_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(17, 'Bangladesh Open University', 1, 4, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2014, 'Open university', 'Computer Science'),
(18, 'Bangladesh Open University', 1, 4, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2014, 'Open university', 'Computer Science'),
(19, 'Bangladesh Open University', 1, 4, 'B.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2014, 'Open university', 'Computer Science'),
(20, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(21, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(22, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(23, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(24, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(25, '', 0, 0, '', '', 0, 0, '', ''),
(26, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_hsc_info`
--

CREATE TABLE `o_hsc_info` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(10,2) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_hsc_info`
--

INSERT INTO `o_hsc_info` (`id`, `collage_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `board`, `subject`) VALUES
(17, 'Polash Urea SarkarKhana Collage', 2007, 2009, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Science'),
(18, 'Polash Urea SarkarKhana Collage', 2007, 2009, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Science'),
(19, 'Polash Urea SarkarKhana Collage', 2007, 2009, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Science'),
(20, 'wetwert', 0, 0, '', '', '0.00', 0, '', ''),
(21, 'wetwert', 0, 0, '', '', '0.00', 0, '', ''),
(22, 'wetwert', 0, 0, '', '', '0.00', 0, '', ''),
(23, 'wetwert', 0, 0, '', '', '0.00', 0, '', ''),
(24, 'wetwert', 0, 0, '', '', '0.00', 0, '', ''),
(25, '', 0, 0, '', '', '0.00', 0, '', ''),
(26, '', 0, 0, '', '', '0.00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_image_sign_date`
--

CREATE TABLE `o_image_sign_date` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `signature` blob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_image_sign_date`
--

INSERT INTO `o_image_sign_date` (`id`, `image`, `signature`, `date`) VALUES
(17, 0x642e6a7067, 0x64322e706e67, '2020-12-20'),
(18, 0x642e6a7067, 0x64322e706e67, '2020-12-20'),
(19, 0x642e6a7067, 0x64322e706e67, '2020-12-20'),
(20, 0x424f55206c6f676f2e706e67, 0x64332e6a7067, '2020-12-20'),
(21, 0x424f55206c6f676f2e706e67, 0x64332e6a7067, '2020-12-20'),
(22, 0x424f55206c6f676f2e706e67, 0x64332e6a7067, '2020-12-20'),
(23, 0x424f55206c6f676f2e706e67, 0x64332e6a7067, '2020-12-20'),
(24, 0x424f55206c6f676f2e706e67, 0x64332e6a7067, '2020-12-20'),
(25, 0x642e6a7067, 0x64322e706e67, '0000-00-00'),
(26, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `o_masters_info`
--

CREATE TABLE `o_masters_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `gpa` double NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_masters_info`
--

INSERT INTO `o_masters_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(17, 'Bangladesh Open University', 1, 2, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2016, '', 'Computer Science'),
(18, 'Bangladesh Open University', 1, 2, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2016, '', 'Computer Science'),
(19, 'Bangladesh Open University', 1, 2, 'M.Sc (Engineering/Architecture)', 'CGPA(Out of 4)', 3.9, 2016, '', 'Computer Science'),
(20, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(21, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(22, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(23, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(24, 'Bangabandhu Sheikh Mujib Medical University', 0, 0, '', '', 0, 0, '', ''),
(25, '', 0, 0, '', '', 0, 0, '', ''),
(26, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_other_info`
--

CREATE TABLE `o_other_info` (
  `id` int(11) NOT NULL,
  `language_performance` varchar(200) NOT NULL,
  `previous_job` varchar(200) NOT NULL,
  `present_job` varchar(300) NOT NULL,
  `job_experience` varchar(300) NOT NULL,
  `job_agreement` varchar(300) NOT NULL,
  `expected_salary` int(11) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `suspention_details` varchar(100) NOT NULL,
  `pension_details` varchar(300) NOT NULL,
  `other_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_other_info`
--

INSERT INTO `o_other_info` (`id`, `language_performance`, `previous_job`, `present_job`, `job_experience`, `job_agreement`, `expected_salary`, `reference`, `suspention_details`, `pension_details`, `other_info`) VALUES
(17, 'good at english,hindi,bangla', 'dgfg\r\n', 'fghfn', 'dfhyu\r\nerytfh\r\nfgjgfj', 'na', 60000, 'drgtfh\r\nbcvbgfh', '', 'na', 'na'),
(18, 'good at english,hindi,bangla', 'dgfg\r\n', 'fghfn', 'dfhyu\r\nerytfh\r\nfgjgfj', 'na', 60000, 'drgtfh\r\nbcvbgfh', '', 'na', 'na'),
(19, 'good at english,hindi,bangla', 'dgfg\r\n', 'fghfn', 'dfhyu\r\nerytfh\r\nfgjgfj', 'na', 60000, 'drgtfh\r\nbcvbgfh', '', 'na', 'na'),
(20, 'rgfdfg', 'vxcvdfg', 'sdgsfg', 'dvdfv', 'na', 60000, 'dfgd\r\nsdfdsfg\r\n', '', 'ergdfg', 'dfgdfg'),
(21, 'rgfdfg', 'vxcvdfg', 'sdgsfg', 'dvdfv', 'na', 60000, 'dfgd\r\nsdfdsfg\r\n', '', 'ergdfg', 'dfgdfg'),
(22, 'rgfdfg', 'vxcvdfg', 'sdgsfg', 'dvdfv', 'na', 60000, 'dfgd\r\nsdfdsfg\r\n', '', 'ergdfg', 'dfgdfg'),
(23, 'rgfdfg', 'vxcvdfg', 'sdgsfg', 'dvdfv', 'na', 60000, 'dfgd\r\nsdfdsfg\r\n', '', 'ergdfg', 'dfgdfg'),
(24, 'rgfdfg', 'vxcvdfg', 'sdgsfg', 'dvdfv', 'na', 60000, 'dfgd\r\nsdfdsfg\r\n', '', 'ergdfg', 'dfgdfg'),
(25, '', '', '', '', '', 0, '', '', '', ''),
(26, '', '', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_parmanent_add`
--

CREATE TABLE `o_parmanent_add` (
  `id` int(11) NOT NULL,
  `village` varchar(30) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telegram` varchar(30) NOT NULL,
  `upozilla` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_parmanent_add`
--

INSERT INTO `o_parmanent_add` (`id`, `village`, `post_office`, `telegram`, `upozilla`, `district`) VALUES
(17, 'Hazra', 'Shaheave Bazar', 'na', 'Chandpur', 'Chandpur'),
(18, 'Hazra', 'Shaheave Bazar', 'na', 'Chandpur', 'Dhaka'),
(19, 'Hazra', 'Shaheave Bazar', 'na', 'Chandpur', 'Dhaka'),
(20, '', '', '', '', ''),
(21, 'Boyra', '', '', '', 'Barishal'),
(22, 'Dhaka Cantonment', '', '', '', 'Dhaka'),
(23, 'Dhaka Cantonment', '', '', '', 'Dhaka'),
(24, 'Dhaka Cantonment', '', '', '', 'Barishal'),
(25, '', '', '', '', ''),
(26, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `o_personal_info`
--

CREATE TABLE `o_personal_info` (
  `id` int(11) NOT NULL,
  `name_bangla` varchar(50) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `father_husband_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_area` varchar(50) NOT NULL,
  `present_age` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `NID` int(11) NOT NULL,
  `religion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_personal_info`
--

INSERT INTO `o_personal_info` (`id`, `name_bangla`, `name_english`, `father_husband_name`, `mother_name`, `birth_date`, `birth_area`, `present_age`, `status`, `nationality`, `NID`, `religion`) VALUES
(17, 'আবু সাঈদ', 'Abu Syeed', 'Abdul Hye', 'Nelufa Yeasmin', '1990-06-20', 'Narsingdi', '30', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(18, 'dssdf', 'Zannatul Ferdous', 'Abdul Hye', 'Nelufa Yeasmin', '1990-06-20', 'Narsingdi', '28', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(19, 'dssdf', ' Debnath Roy', 'Mr. X', 'Mrs.X', '1990-06-20', 'Narsingdi', '29', 'অবিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(20, 'dssdf', ' Debnath Roy', 'Mr. X', 'Mrs.X', '0000-00-00', '', '30', 'বিবাহিত', '', 0, ''),
(21, 'dssdf', ' Debnath Roy', 'Mr. X', 'Mrs.X', '0000-00-00', '', '29', 'অবিবাহিত', 'Bangladeshi', 1223353667, 'Hinduism'),
(22, 'dssdf', 'Sarmin Sultana', 'Mr. X', 'Mrs.X', '0000-00-00', '', '29', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(23, 'dssdf', 'Sarmin Sultana', 'Mr. X', 'Mrs.X', '0000-00-00', '', '29', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(24, 'dssdf', 'Sultana', 'Mr. X', 'Mrs.X', '0000-00-00', '', '29', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(25, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(26, '', '', '', '', '0000-00-00', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `o_present_address`
--

CREATE TABLE `o_present_address` (
  `id` int(100) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_present_address`
--

INSERT INTO `o_present_address` (`id`, `full_address`, `post_office`, `telephone`, `mobile`, `e_mail`) VALUES
(17, 'Lalkhan bazar,chottogram', 'na', 1558101062, 1558101062, 'rumi.sumo@gmail.com'),
(18, 'Lalkhan bazar,chottogram', 'na', 1558101062, 1558101062, 'rumi.sumo@gmail.com'),
(19, '', '', 0, 0, 'zannat@gmail.com'),
(20, '', '', 0, 0, 'roy@gmail.com'),
(21, 'werf', 'na', 0, 0, 'roy@gmail.com'),
(22, 'werf', 'na', 0, 0, 'r@gmail.com'),
(23, 'werf', 'na', 0, 0, 'r@gmail.com'),
(24, 'werf', 'na', 0, 0, 'sultana@gmail.com'),
(25, '', '', 0, 0, ''),
(26, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `o_school_info`
--

CREATE TABLE `o_school_info` (
  `id` int(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `circular_no` varchar(50) NOT NULL,
  `circular_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_school_info`
--

INSERT INTO `o_school_info` (`id`, `designation`, `circular_no`, `circular_date`) VALUES
(17, 'Engineer', '1245', '2020-12-14'),
(18, 'Sub-Assistant Engineer', '1245', '2020-12-14'),
(19, 'Genaral Manager', '12', '2020-12-20'),
(20, 'Manager', '12', '2020-12-20'),
(21, 'Chairman', '1245', '2020-12-20'),
(22, 'Assistant Manager', '1245', '2020-12-20'),
(23, 'Manager', '1245', '2020-12-20'),
(24, 'Sub-Assistant Engineer', '1245', '2020-12-20'),
(25, '', '', '0000-00-00'),
(26, 'Manager', '12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `o_ssc_info`
--

CREATE TABLE `o_ssc_info` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(50,2) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_ssc_info`
--

INSERT INTO `o_ssc_info` (`id`, `school_name`, `year_start`, `year_end`, `exam_name`, `passed_year`, `board`, `result`, `gpa`, `subject`) VALUES
(17, 'Polash SarkarKhana High School', 1995, 2007, 'S.S.C', 2007, 'Dhaka', '1', '4.75', 'Science'),
(18, 'Polash SarkarKhana High School', 1995, 2007, 'S.S.C', 2007, 'Dhaka', '1', '4.75', 'Science'),
(19, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(20, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(21, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(22, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(23, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(24, 'fddgfc', 0, 0, '', 0, '', '1', '0.00', ''),
(25, '', 0, 0, '', 0, '', '1', '0.00', ''),
(26, '', 0, 0, '', 0, '', '1', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `parmanent_add`
--

CREATE TABLE `parmanent_add` (
  `id` int(11) NOT NULL,
  `village` varchar(30) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telegram` varchar(30) NOT NULL,
  `upozilla` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parmanent_add`
--

INSERT INTO `parmanent_add` (`id`, `village`, `post_office`, `telegram`, `upozilla`, `district`) VALUES
(1, 'Hazra', 'Shaheave Bazar', 'na', 'Chandpur', 'Chandpur'),
(2, 'Hazra', 'Shaheave Bazar', 'na', 'Khalishpur', 'Khulna'),
(3, 'Hazra', 'Shaheave Bazar', 'na', 'Khalishpur', 'Khulna'),
(4, 'Hazra', 'Shaheave Bazar', 'na', 'Chandpur', 'Chandpur'),
(5, 'Dhaka Cantonment', 'Shaheave ', 'na', 'Dhaka', 'Dhaka'),
(6, 'Barighal', 'Shaheave ', 'na', 'Barishal', 'Barishal'),
(7, 'Barighal', 'Shaheave ', 'na', 'Barishal', 'Chandpur'),
(8, 'Barighal', 'Shaheave ', 'na', 'Barishal', 'Chandpur'),
(9, 'Barighal', 'Shaheave ', 'na', 'Barishal', 'Chandpur'),
(10, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Chattogram'),
(11, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Pabna'),
(12, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Dhaka'),
(13, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Narsingdi'),
(14, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Rangpur'),
(15, 'Barighal', 'Shaheave ', 'na', 'rampal', 'Kustia'),
(16, '', '', '', '', 'Chandpur'),
(17, '', '', '', '', 'Chandpur'),
(18, '', '', '', '', 'Chandpur'),
(19, '', '', '', '', 'Chandpur'),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `name_bangla` varchar(50) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `father_husband_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_area` varchar(50) NOT NULL,
  `present_age` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `NID` int(11) NOT NULL,
  `religion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `name_bangla`, `name_english`, `father_husband_name`, `mother_name`, `birth_date`, `birth_area`, `present_age`, `status`, `nationality`, `NID`, `religion`) VALUES
(1, 'শারমিন সুলতানা', 'Sarmin Sultana', 'Abu Syeed', 'Saleha Begum', '1994-12-20', 'Narsingdi', '26', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(2, 'আবু সাঈদ', 'Abu Syeed', 'Abdul Hye', 'Nelufa Yeasmin', '1994-12-20', 'Khulna', '26', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(3, 'sarmin', 'sultana', 'Abdul Hye', 'Nelufa Yeasmin', '1994-12-20', 'Khulna', '26', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(4, 'শারমিন সুলতানা', 'Sarmin Sultana', 'Abu Syeed', 'Saleha Begum', '1994-12-20', 'Narsingdi', '26', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(5, 'জান্নাতুল ফেরদৌস ', 'Zannatul Ferdous', 'MD.Rasel', 'Nasima', '1990-08-28', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(6, 'আইরিন সুলতানা', 'Ayrin Sultana', 'MD.Mehedi', 'Begum', '1990-08-28', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(7, 'আল ফয়সাল', 'Al Foysal', 'MD. Shahjahan', 'Saleha Begum', '1990-08-28', 'Narsingdi', '30', 'অবিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(8, 'আল যুবরাজ', 'Al Juboraj', 'MD. Shahjahan', 'Saleha Begum', '1990-08-28', 'Narsingdi', '30', 'অবিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(9, ' শুভ দেবনাথ', 'Shuvo Debnath', 'MD. Debnath', 'Mrs. Debnath', '1990-08-28', 'Narsingdi', '30', 'অবিবাহিত', 'Bangladeshi', 123456789, 'Hinduism'),
(10, ' শুভ দেবনাথ', ' Debnath Roy', 'MD. Roy', 'Mrs.Roy', '1990-08-28', 'Narsingdi', '30', 'বিবাহিত', 'Bangladeshi', 123456789, 'Hinduism'),
(11, 'রাজিইয়া', ' Debnath Roy', 'MD. Roy', 'Mrs.Roy', '1990-08-28', 'Narsingdi', '27', 'অবিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(12, 'রাজিইয়া', ' Rehana Parvin', 'Mr. X', 'Mrs.X', '1990-08-28', 'Narsingdi', '26', 'বিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(13, '', ' Rahim', 'Mr. X', 'Mrs.X', '1990-08-28', 'Narsingdi', '28', 'বিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(14, '', 'Saleha Begum', 'Mr. X', 'Mrs.X', '1990-08-28', 'Narsingdi', '29', 'বিবাহিত', 'Bangladeshi', 123456789, 'Islam'),
(15, '', 'Ranju Ghosh', 'Mr. X', 'Mrs.X', '1990-08-28', 'Narsingdi', '29', 'বিবাহিত', 'Bangladeshi', 123456789, 'Hinduism'),
(16, 'শারমিন সুলতানা', 'Sarmin Sultana', '', '', '1990-06-20', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(17, 'শারমিন সুলতানা', 'Sarmin Sultana', '', '', '1990-06-20', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(18, 'শারমিন সুলতানা', 'Sarmin Sultana', '', '', '1990-06-20', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(19, 'শারমিন সুলতানা', 'Sarmin Sultana', '', '', '1990-06-20', 'Chandpur', '30', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(20, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(21, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(22, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(23, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(24, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(25, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(26, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(27, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(28, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(29, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(30, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(31, '', '', '', '', '0000-00-00', '', '', '', '', 0, ''),
(32, '', '', '', '', '0000-00-00', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `present_address`
--

CREATE TABLE `present_address` (
  `id` int(100) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `present_address`
--

INSERT INTO `present_address` (`id`, `full_address`, `post_office`, `telephone`, `mobile`, `e_mail`) VALUES
(1, 'sdfsdfvf', 'na', 1558101062, 4527852, 'sarmin1207@gmail.com'),
(2, 'sdfsdfvf', 'na', 1558101062, 4527852, 'sarmin1207@gmail.com'),
(3, 'sdfsdfvf', 'na', 1558101062, 4527852, 'sarmin1207@gmail.com'),
(4, 'Chottogram', 'na', 1558101062, 1558101062, 'sarmin1207@gmail.com'),
(5, 'Dhaka Cantonment', 'na', 1522101562, 1719276266, 'zannat@gmail.com'),
(6, 'Narsingdi', 'na', 1522101562, 1719276266, 'ayrin@gmail.com'),
(7, 'Narsingdi', 'na', 1522101562, 1719276266, 'al@gmail.com'),
(8, 'Narsingdi', 'na', 1522101562, 1719276266, 'al@gmail.com'),
(9, 'Narsingdi', 'na', 1522101562, 1719276266, 'shuvo@gmail.com'),
(10, 'Narsingdi', 'na', 1522101562, 1719276266, 'roy@gmail.com'),
(11, 'Narsingdi', 'na', 1522101562, 1719276266, 'razia@gmail.com'),
(12, 'Narsingdi', 'na', 1522101562, 1719276266, 'parvin@gmail.com'),
(13, 'Narsingdi', 'na', 1522101562, 1719276266, 'rahim@gmail.com'),
(14, 'Narsingdi', 'na', 1522101562, 1719276266, 'sa@gmail.com'),
(15, 'Narsingdi', 'na', 1522101562, 1719276266, 'ranju@gmail.com'),
(16, '', '', 0, 0, 'sarmin1207@gmail.com'),
(17, '', '', 0, 0, 'sarmin1207@gmail.com'),
(18, '', '', 0, 0, 'sarmin1207@gmail.com'),
(19, '', '', 0, 0, 'sarmin1207@gmail.com'),
(20, '', '', 0, 0, ''),
(21, '', '', 0, 0, ''),
(22, '', '', 0, 0, ''),
(23, '', '', 0, 0, ''),
(24, '', '', 0, 0, ''),
(25, '', '', 0, 0, ''),
(26, '', '', 0, 0, ''),
(27, '', '', 0, 0, ''),
(28, '', '', 0, 0, ''),
(29, '', '', 0, 0, ''),
(30, '', '', 0, 0, ''),
(31, '', '', 0, 0, ''),
(32, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `research_paper`
--

CREATE TABLE `research_paper` (
  `id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `pablish_date` date NOT NULL,
  `file` blob NOT NULL,
  `author_name_2nd` varchar(50) NOT NULL,
  `title_2nd` varchar(50) NOT NULL,
  `publisher_name_2nd` varchar(50) NOT NULL,
  `pablish_date_2nd` date NOT NULL,
  `file_2nd` blob NOT NULL,
  `author_name_3rd` varchar(50) NOT NULL,
  `title_3rd` varchar(50) NOT NULL,
  `publisher_name_3rd` varchar(200) NOT NULL,
  `pablish_date_3rd` date NOT NULL,
  `file_3rd` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_paper`
--

INSERT INTO `research_paper` (`id`, `author_name`, `title`, `publisher_name`, `pablish_date`, `file`, `author_name_2nd`, `title_2nd`, `publisher_name_2nd`, `pablish_date_2nd`, `file_2nd`, `author_name_3rd`, `title_3rd`, `publisher_name_3rd`, `pablish_date_3rd`, `file_3rd`) VALUES
(1, 'athor', 'erg', 'hghjryj', '2015-07-08', 0x636830312e707074, 'p2', 't', 'pb', '2013-07-11', 0x4841434b2e70707478, 'p3', 'y', 'hg', '2018-06-05', 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466),
(2, 'athor', 'erg', 'hghjryj', '2015-07-08', 0x636830312e707074, 'p2', 't', 'pb', '2013-07-11', 0x4841434b2e70707478, 'p3', 'y', 'hg', '2018-06-05', 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466),
(3, 'athor', 'erg', 'hghjryj', '2015-07-08', 0x636830312e707074, 'p2', 't', 'pb', '2013-07-11', 0x4841434b2e70707478, 'p3', 'y', 'hg', '2018-06-05', 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466),
(4, 'athor', 'erg', 'hghjryj', '2017-01-24', 0x696e74726f64756374696f6e6574686963616c6861636b696e672d3137303231303137313231362e706466, 'p2', 't', 'pb', '2015-02-03', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, 'p3', 'y', 'hg', '2019-08-15', 0x6574686963616c6861636b696e6770656e6574726174696f6e74657374696e672d3130303430383132343730302d70687061707030322e706466),
(5, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(6, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(7, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(8, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(9, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(10, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(11, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(12, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(13, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(14, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(15, 'athor', 'erg', 'hghjryj', '2012-02-10', 0x30325f526571756972656d656e74735f456e67696e656572696e672e706466, 'p2', 't', 'pb', '2016-06-07', 0x436861707465722d30312e706466, 'p3', 'y', 'hg', '2016-03-02', 0x436861707465722d30312e706466),
(16, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(17, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(18, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(19, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(20, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(21, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(22, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(23, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(24, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(25, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(26, '', '', '', '0000-00-00', 0x6574686963616c6861636b696e6770656e6574726174696f6e74657374696e672d3130303430383132343730302d70687061707030322e706466, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(27, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(28, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(29, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(30, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', 0x646f632d32303136303830362d7761303030302d3137303330363133353133312e706466, '', '', '', '0000-00-00', 0x696e74726f64756374696f6e6574686963616c6861636b696e672d3137303231303137313231362e706466),
(31, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', 0x6574686963616c6861636b696e6770656e6574726174696f6e74657374696e672d3130303430383132343730302d70687061707030322e706466, '', '', '', '0000-00-00', 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466),
(32, '', '', '', '0000-00-00', 0x313836313232393633353037383732303038343636353030302d3133313031323133313931332d70687061707030322e706466, '', '', '', '0000-00-00', 0x6574686963616c6861636b696e6770656e6574726174696f6e74657374696e672d3130303430383132343730302d70687061707030322e706466, '', '', '', '0000-00-00', 0x6373656574686963616c6861636b696e677070742d3137313031313138333232332e706466);

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `id` int(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `circular_no` varchar(50) NOT NULL,
  `circular_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`id`, `school_name`, `designation`, `circular_no`, `circular_date`) VALUES
(1, 'School of Science & Technology (SST)', 'Lecturer', '12', '2020-11-11'),
(2, 'School of Science & Technology (SST)', 'Lecturer', '12', '2020-11-11'),
(3, 'Open School', 'Associate Professor', '12', '2020-11-11'),
(4, 'School of Social Science, Humanities & Languages (', 'Lecturer', '145', '2020-11-10'),
(5, 'School of Business (SoB)', 'Assistant Professor', '101', '2020-11-11'),
(6, 'School of Business (SoB)', 'Assistant Professor', '101', '2020-11-11'),
(7, 'School of Science & Technology (SST)', 'Associate Professor', '102', '2020-11-11'),
(8, 'Open School', 'Lecturer', '106', '2020-11-11'),
(9, 'School of Education (SoE)', 'Lecturer', '106', '2020-11-11'),
(10, 'School of Agriculture & Rural Development (SARD)', 'Lecturer', '106', '2020-11-11'),
(11, 'School of Education (SoE)', 'Lecturer', '102', '2020-11-11'),
(12, 'School of Social Science, Humanities & Languages (', 'Assistant Professor', '102', '2020-11-11'),
(13, 'School of Science & Technology (SST)', 'Lecturer', '107', '2020-11-11'),
(14, 'School of Social Science, Humanities & Languages (', 'Associate Professor', '107', '2020-11-11'),
(15, 'School of Business (SoB)', 'Associate Professor', '107', '2020-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `ssc_info`
--

CREATE TABLE `ssc_info` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(50,2) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssc_info`
--

INSERT INTO `ssc_info` (`id`, `school_name`, `year_start`, `year_end`, `exam_name`, `passed_year`, `board`, `result`, `gpa`, `subject`) VALUES
(1, 'Polash SarkarKhana High School', 2000, 2009, 'S.S.C', 2009, 'Dhaka', '1', '4.75', 'Science'),
(2, 'Polash SarkarKhana High School', 2000, 2009, 'S.S.C', 2009, 'Dhaka', '1', '4.75', 'Science'),
(3, 'Polash SarkarKhana High School', 2000, 2009, 'S.S.C', 2009, 'Dhaka', '1', '4.75', 'Science'),
(4, 'Polash SarkarKhana High School', 2000, 2009, 'S.S.C', 2009, 'Dhaka', '1', '4.75', 'Science'),
(5, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(6, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(7, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(8, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(9, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(10, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(11, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(12, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(13, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(14, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(15, 'Polash SarkarKhana High School', 1995, 2005, 'S.S.C', 2005, 'Dhaka', '1', '4.94', 'Business Studies'),
(16, '', 0, 0, '', 0, '', '1', '0.00', ''),
(17, '', 0, 0, '', 0, '', '1', '0.00', ''),
(18, '', 0, 0, '', 0, '', '1', '0.00', ''),
(19, '', 0, 0, '', 0, '', '1', '0.00', ''),
(20, '', 0, 0, '', 0, '', '1', '0.00', ''),
(21, '', 0, 0, '', 0, '', '1', '0.00', ''),
(22, '', 0, 0, '', 0, '', '1', '0.00', ''),
(23, '', 0, 0, '', 0, '', '1', '0.00', ''),
(24, '', 0, 0, '', 0, '', '1', '0.00', ''),
(25, '', 0, 0, '', 0, '', '1', '0.00', ''),
(26, '', 0, 0, '', 0, '', '1', '0.00', ''),
(27, '', 0, 0, '', 0, '', '1', '0.00', ''),
(28, '', 0, 0, '', 0, '', '1', '0.00', ''),
(29, '', 0, 0, '', 0, '', '1', '0.00', ''),
(30, '', 0, 0, '', 0, '', '1', '0.00', ''),
(31, '', 0, 0, '', 0, '', '1', '0.00', ''),
(32, '', 0, 0, '', 0, '', '1', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_bank_edu_info`
--

CREATE TABLE `s_bank_edu_info` (
  `id` int(11) NOT NULL,
  `pay_order_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_bank_edu_info`
--

INSERT INTO `s_bank_edu_info` (`id`, `pay_order_no`, `date`, `amount`) VALUES
(21, '12030', '2020-12-08', 1000),
(22, '12030', '2020-12-08', 1000),
(23, '12030', '2020-12-08', 1000),
(24, '12030', '2020-12-08', 1000),
(25, '12030', '2020-12-08', 1000),
(26, '12030', '2020-12-08', 1000),
(27, '12030', '2020-12-08', 1000),
(28, '12030', '2020-12-08', 1000),
(29, '12030', '2020-12-08', 1000),
(30, '', '0000-00-00', 0),
(31, '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `s_honours_info`
--

CREATE TABLE `s_honours_info` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(10,2) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_honours_info`
--

INSERT INTO `s_honours_info` (`id`, `collage_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `board`, `subject`) VALUES
(21, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 0, 'Dhaka', 'Business Studies'),
(22, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 0, 'Dhaka', 'Business Studies'),
(23, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 0, 'Dhaka', 'Business Studies'),
(24, 'Dhaka Mohela Polytechnic Institute', 0, 0, 'Diploma Engineering', 'GPA(Out of 4)', '3.56', 2014, 'Bangladesh Technical', 'Computer Science & Technology'),
(25, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Business Studies'),
(26, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Business Studies'),
(27, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Business Studies'),
(28, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Business Studies'),
(29, 'Polash Urea SarkarKhana Collage', 0, 0, 'H.S.C', 'GPA(Out of 5)', '4.88', 2009, 'Dhaka', 'Business Studies'),
(30, '', 0, 0, '', '', '0.00', 0, '', ''),
(31, '', 0, 0, '', '', '0.00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_hsc_info`
--

CREATE TABLE `s_hsc_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` float NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_hsc_info`
--

INSERT INTO `s_hsc_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(21, 'National University', 0, 0, 'B.S.S (Honors)', '1st Class', 0, 0, 'National university', 'Accounting'),
(22, 'National University', 0, 0, 'B.S.S (Honors)', '1st Class', 0, 0, 'National university', 'Accounting'),
(23, 'Bangladesh Open University', 0, 0, 'B.S.S (Honors)', '1st Class', 0, 0, 'National university', 'Accounting'),
(24, 'Bangladesh Open University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Computer Science'),
(25, 'National University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Management'),
(26, 'National University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Management'),
(27, 'National University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Management'),
(28, 'National University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Management'),
(29, 'National University', 0, 0, 'B.Sc (Engineering/Architecture)', '1st Class', 0, 0, ' university', 'Management'),
(30, '', 0, 0, '', '', 0, 0, '', ''),
(31, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_image_sign_date`
--

CREATE TABLE `s_image_sign_date` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `signature` blob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_image_sign_date`
--

INSERT INTO `s_image_sign_date` (`id`, `image`, `signature`, `date`) VALUES
(21, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(22, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(23, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(24, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(25, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(26, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(27, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(28, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(29, 0x642e6a7067, 0x64322e706e67, '2020-12-21'),
(30, '', '', '0000-00-00'),
(31, 0x686f6d65312e6a7067, 0x686f6d652e6a7067, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `s_masters_info`
--

CREATE TABLE `s_masters_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `gpa` double NOT NULL,
  `passed_year` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_masters_info`
--

INSERT INTO `s_masters_info` (`id`, `university_name`, `year_start`, `year_end`, `exam_name`, `result`, `gpa`, `passed_year`, `university`, `subject`) VALUES
(21, 'National University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'National University', 'Accounting'),
(22, 'National University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'National University', 'Accounting'),
(23, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'National University', 'Accounting'),
(24, 'Bangladesh Open University', 0, 0, 'M.Sc (Engineering/Architecture)', '1st Class', 0, 0, 'dfhghgf', 'Computer Science'),
(25, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'dfhghgf', 'Management'),
(26, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'dfhghgf', 'Management'),
(27, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'dfhghgf', 'Management'),
(28, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'dfhghgf', 'Management'),
(29, 'Bangladesh Open University', 0, 0, 'M.S.S', '1st Class', 0, 0, 'dfhghgf', 'Management'),
(30, '', 0, 0, '', '', 0, 0, '', ''),
(31, '', 0, 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_other_info`
--

CREATE TABLE `s_other_info` (
  `id` int(11) NOT NULL,
  `previous_job` varchar(200) NOT NULL,
  `present_job` varchar(300) NOT NULL,
  `job_experience` varchar(300) NOT NULL,
  `job_agreement` varchar(300) NOT NULL,
  `reference` varchar(300) NOT NULL,
  `suspention_details` varchar(100) NOT NULL,
  `trainning_details` varchar(300) NOT NULL,
  `other_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_other_info`
--

INSERT INTO `s_other_info` (`id`, `previous_job`, `present_job`, `job_experience`, `job_agreement`, `reference`, `suspention_details`, `trainning_details`, `other_info`) VALUES
(21, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(22, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(23, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(24, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(25, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(26, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(27, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(28, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(29, 'yes', 'ffgfg', 'efdgfdg', 'na', 'strgdth\r\nrtyft\r\n', '', 'na', 'yes'),
(30, '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_parmanent_add`
--

CREATE TABLE `s_parmanent_add` (
  `id` int(11) NOT NULL,
  `village` varchar(30) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telegram` varchar(30) NOT NULL,
  `upozilla` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_parmanent_add`
--

INSERT INTO `s_parmanent_add` (`id`, `village`, `post_office`, `telegram`, `upozilla`, `district`) VALUES
(21, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Khulna'),
(22, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Khulna'),
(23, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Chandpur'),
(24, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Khulna'),
(25, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Dhaka'),
(26, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Barishal'),
(27, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Barishal'),
(28, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Barishal'),
(29, 'Boyra', 'Shaheave ', 'na', 'Khalishpur', 'Barishal'),
(30, '', '', '', '', ''),
(31, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_personal_info`
--

CREATE TABLE `s_personal_info` (
  `id` int(11) NOT NULL,
  `name_bangla` varchar(50) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `father_husband_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_area` varchar(50) NOT NULL,
  `present_age` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `NID` int(11) NOT NULL,
  `religion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_personal_info`
--

INSERT INTO `s_personal_info` (`id`, `name_bangla`, `name_english`, `father_husband_name`, `mother_name`, `birth_date`, `birth_area`, `present_age`, `status`, `nationality`, `NID`, `religion`) VALUES
(21, 'আবু সাঈদ', 'Abu Syeed', 'Abdul Hye', 'Nelufa Yeasmin', '1992-06-09', 'Khulna', '', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(22, 'আবু সাঈদ', 'Abu Syeed', 'Abdul Hye', 'Nelufa Yeasmin', '1992-06-09', 'Khulna', '', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(23, 'ytuytu', ' Debnath Roy', 'Mr. X', 'Mrs.X', '1992-06-09', 'Chandpur', '28', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Hinduism'),
(24, 'ytuytu', 'Sarmin Sultana', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(25, 'ytuytu', 'Zannatul Ferdous', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(26, 'ytuytu', 'Abu Syeed', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(27, 'ytuytu', 'Abu Syeed', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(28, 'ytuytu', 'Abu ', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(29, 'ytuytu', ' Syeed', 'Mr. X', 'Mrs.X', '1992-06-09', 'Narsingdi', '27', 'বিবাহিত', 'Bangladeshi', 1223353667, 'Islam'),
(30, '', 'Mr.Syeed', '', '', '0000-00-00', '', '', '', '', 0, ''),
(31, '', '', '', '', '0000-00-00', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `s_present_address`
--

CREATE TABLE `s_present_address` (
  `id` int(100) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `e_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_present_address`
--

INSERT INTO `s_present_address` (`id`, `full_address`, `post_office`, `telephone`, `mobile`, `e_mail`) VALUES
(21, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'rumi.sumo@gmail.com'),
(22, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'rumi.sumo@gmail.com'),
(23, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'roy@gmail.com'),
(24, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'sarmin1207@gmail.com'),
(25, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'zannat@gmail.com'),
(26, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'rumi.@gmail.com'),
(27, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'rumi.@gmail.com'),
(28, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'rumi.@gmail.com'),
(29, 'lalkhan bazar', 'na', 1522101562, 1558101062, 'ru@gmail.com'),
(30, '', '', 0, 0, 'y@gmail.com'),
(31, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `s_school_info`
--

CREATE TABLE `s_school_info` (
  `id` int(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `circular_no` varchar(50) NOT NULL,
  `circular_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_school_info`
--

INSERT INTO `s_school_info` (`id`, `designation`, `circular_no`, `circular_date`) VALUES
(21, 'Accountant', '100', '2020-12-08'),
(22, 'Accountant', '100', '2020-12-08'),
(23, 'Library Assistant', '101', '2020-12-08'),
(24, 'Office Assistant', '101', '2020-12-08'),
(25, 'Office Assistsnt cum Computer Typist ', '101', '2020-12-08'),
(26, 'Computer Operater', '101', '2020-12-08'),
(27, 'Cashier ', '101', '2020-12-08'),
(28, 'Driver', '101', '2020-12-08'),
(29, 'Office Assistant', '101', '2020-12-08'),
(30, 'Office Assistant', '145', '0000-00-00'),
(31, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `s_ssc_info`
--

CREATE TABLE `s_ssc_info` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  `passed_year` int(11) NOT NULL,
  `board` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `gpa` decimal(50,2) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_ssc_info`
--

INSERT INTO `s_ssc_info` (`id`, `school_name`, `year_start`, `year_end`, `exam_name`, `passed_year`, `board`, `result`, `gpa`, `subject`) VALUES
(21, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(22, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(23, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(24, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(25, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(26, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(27, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(28, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(29, 'Polash SarkarKhana High School', 0, 0, 'S.S.C', 0, 'Dhaka', '1', '4.75', 'Business Studies'),
(30, '', 0, 0, '', 0, '', '1', '0.00', ''),
(31, '', 0, 0, '', 0, '', '1', '0.00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_edu_info`
--
ALTER TABLE `extra_edu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honours_info`
--
ALTER TABLE `honours_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsc_info`
--
ALTER TABLE `hsc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_sign_date`
--
ALTER TABLE `image_sign_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_info`
--
ALTER TABLE `masters_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_research_paper`
--
ALTER TABLE `more_research_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_bank_info`
--
ALTER TABLE `o_bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_ extra_edu_info`
--
ALTER TABLE `o_ extra_edu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_honours_info`
--
ALTER TABLE `o_honours_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_hsc_info`
--
ALTER TABLE `o_hsc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_image_sign_date`
--
ALTER TABLE `o_image_sign_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_masters_info`
--
ALTER TABLE `o_masters_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_other_info`
--
ALTER TABLE `o_other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_parmanent_add`
--
ALTER TABLE `o_parmanent_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_personal_info`
--
ALTER TABLE `o_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_present_address`
--
ALTER TABLE `o_present_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_school_info`
--
ALTER TABLE `o_school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_ssc_info`
--
ALTER TABLE `o_ssc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parmanent_add`
--
ALTER TABLE `parmanent_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `present_address`
--
ALTER TABLE `present_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_paper`
--
ALTER TABLE `research_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssc_info`
--
ALTER TABLE `ssc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_bank_edu_info`
--
ALTER TABLE `s_bank_edu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_honours_info`
--
ALTER TABLE `s_honours_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_hsc_info`
--
ALTER TABLE `s_hsc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_image_sign_date`
--
ALTER TABLE `s_image_sign_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_masters_info`
--
ALTER TABLE `s_masters_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_other_info`
--
ALTER TABLE `s_other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_parmanent_add`
--
ALTER TABLE `s_parmanent_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_personal_info`
--
ALTER TABLE `s_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_present_address`
--
ALTER TABLE `s_present_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_school_info`
--
ALTER TABLE `s_school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_ssc_info`
--
ALTER TABLE `s_ssc_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `extra_edu_info`
--
ALTER TABLE `extra_edu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `honours_info`
--
ALTER TABLE `honours_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hsc_info`
--
ALTER TABLE `hsc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `image_sign_date`
--
ALTER TABLE `image_sign_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `masters_info`
--
ALTER TABLE `masters_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `more_research_paper`
--
ALTER TABLE `more_research_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `o_bank_info`
--
ALTER TABLE `o_bank_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_ extra_edu_info`
--
ALTER TABLE `o_ extra_edu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `o_honours_info`
--
ALTER TABLE `o_honours_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_hsc_info`
--
ALTER TABLE `o_hsc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_image_sign_date`
--
ALTER TABLE `o_image_sign_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_masters_info`
--
ALTER TABLE `o_masters_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_other_info`
--
ALTER TABLE `o_other_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_parmanent_add`
--
ALTER TABLE `o_parmanent_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_personal_info`
--
ALTER TABLE `o_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_present_address`
--
ALTER TABLE `o_present_address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_school_info`
--
ALTER TABLE `o_school_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `o_ssc_info`
--
ALTER TABLE `o_ssc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `parmanent_add`
--
ALTER TABLE `parmanent_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `present_address`
--
ALTER TABLE `present_address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `research_paper`
--
ALTER TABLE `research_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ssc_info`
--
ALTER TABLE `ssc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `s_bank_edu_info`
--
ALTER TABLE `s_bank_edu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_honours_info`
--
ALTER TABLE `s_honours_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_hsc_info`
--
ALTER TABLE `s_hsc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_image_sign_date`
--
ALTER TABLE `s_image_sign_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_masters_info`
--
ALTER TABLE `s_masters_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_other_info`
--
ALTER TABLE `s_other_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_parmanent_add`
--
ALTER TABLE `s_parmanent_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_personal_info`
--
ALTER TABLE `s_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_present_address`
--
ALTER TABLE `s_present_address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_school_info`
--
ALTER TABLE `s_school_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `s_ssc_info`
--
ALTER TABLE `s_ssc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
