-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 07:42 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_lname` varchar(30) NOT NULL,
  `emai_id` varchar(40) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `emai_id`, `contact_no`) VALUES
(1, 'Anita', 'Shinde', 'admin@quiz.com', 7898908789);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(2) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `check_user` enum('true','false','','') NOT NULL DEFAULT 'false',
  `status` enum('active','inactive','','') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `emailid`, `check_user`, `status`) VALUES
(1, 'admin', 'admin', 'admin@quiz.com', 'true', 'active'),
(2, 'anita', 'anita', 'shinde@gmail.com', 'false', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`que_id` int(4) NOT NULL,
  `que_name` mediumtext NOT NULL,
  `que_category` enum('basic','medium','hard','') NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `rightans` varchar(300) NOT NULL,
  `tech_id` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`que_id`, `que_name`, `que_category`, `option1`, `option2`, `option3`, `option4`, `rightans`, `tech_id`) VALUES
(1, '<?php \r\n$x=array("aaa","ttt","www","ttt","yyy","tttt"); \r\n$y=array_count_values($x); \r\necho $y[“ttt”]; \r\n?>\r\n', 'basic', '2', '3', '1', '4', '2', 1),
(2, 'How do you get information from a form that is submitted using the "get" method?', 'basic', '$_GET[];', 'Request.Form;', 'Request.QueryString;', '$_POST[];', '$_GET[];', 1),
(3, 'What''s the best way to copy a file from within a piece of PHP?', 'basic', 'Print out a message asking your user to "telnet" in to the server and copy the file for you', 'Open the input and output files, and use read() and write() to copy the data block by block until read() returns a zero', 'Use the built in copy() function', 'Use "exec" to run an operating system command such as cp (Unix, Linux) or copy (Windows)', 'Use the built in copy() function', 1),
(4, 'Is it possible to submit a form with out a submit button?', 'medium', 'Yes', 'No', 'NULL', 'NULL', 'YES', 1),
(5, 'Full form of PHP?', 'basic', 'PreHypertext Processor', 'Hypertext Preprocessor', 'Hypertext Postprocessor', 'PostHypertext Processor', 'Hypertext Preprocessor', 1),
(6, 'What is the expansion of LAMP?', 'medium', 'Linux And Mysql Php', 'Linux Apache Mysql Php', 'NULL', 'NULL', 'Linux Apache Mysql Php', 1),
(7, 'In php Which method is used to getting browser properties?', 'medium', '$_SERVER[''HTTP_USER_AGENT''];', '$_SERVER[''PHP_SELF'']', '$_SERVER[''SERVER_NAME'']', '$_SERVER[''HTTP_VARIENT'']', '$_SERVER[''HTTP_USER_AGENT''];', 1),
(8, 'Which of the following function is used to pick one or more random values from PHP Array?', 'medium', 'array_rand()', 'array_random()', 'Random_array()', 'Rand_array()', 'array_rand()', 1),
(9, '<?php \r\n$x=array(1,3,2,3,7,8,9,7,3); \r\n$y=array_count_values($x); \r\necho $y[8]; \r\n?>\r\n', 'hard', '43', '1', '8', '6', '43', 1),
(10, 'Assume that your php file ''index.php'' in location c:/apache/htdocs/phptutor/index.php. If you used$_SERVER[''PHP_SELF''] function in your page, then what is the return value of this function ?', 'medium', 'phptutor/index.php', '/phptutor/index.php', 'c:/apache/htdocs/phptutor/index.php', 'index.php', '/phptutor/index.php', 1),
(11, 'Which operator is used to concatenate two strings in php?', 'medium', 'dot operator (.)', 'plus operator (+)', 'NULL', 'NULL', 'dot operator (.)', 1),
(12, 'Are there regular expressions in PHP?', 'hard', 'Yes - regular expressions use Perl-like conventions', 'Yes - PHP supports two different types of regular expressions: POSIX-extended and Perl-Compatible Regular Expressions (PCRE).', 'Yes - regular expressions use the POSIX standard', 'No - PHP uses "glob" style matching only', 'Yes - PHP supports two different types of regular expressions: POSIX-extended and Perl-Compatible Regular Expressions (PCRE).', 1),
(13, 'In PHP, which of the following function is used to insert content of one php file into another php file before server executes it ', 'medium', 'include[]', '#include()', 'include()', '#include{}', 'include()', 1),
(14, 'what will be the ouput of below code ? Assume that today is 2009-5-19:2:45:32 pm \r\n<?php\r\n$today = date("F j, Y, g:i a");\r\n?>\r\n', 'medium', 'may 19,09,2:45:32 PM', 'May 19, 2009, 2:45 pm', 'May 19,2009,14:45:32 pm', 'May 19,2009,14:45:32 PM', 'May 19, 2009, 2:45 pm', 1),
(15, '<?php \r\n$x=array(2=>"mouse",7=>"keyboard"); \r\n$y=array_keys($x); \r\necho $y[1]; \r\n?>', 'medium', 'keyboard', 'mouse', '7', '2', '7', 1),
(16, '$data="98.8degrees"; \r\n(double)$data; \r\n(int)$data; \r\n(string)$string; \r\necho $data; \r\n?>', 'hard', '98', '98.8', '98.8degrees', 'degrees', '98.8degrees', 1),
(17, 'PHP is', 'hard', 'Partially cross-platform', 'Truly cross-platform', 'None of above', 'NULL', 'Truly cross-platform', 1),
(18, '<?php \r\n$x="101.5degrees"; \r\n(double)$x; \r\n(int)$x; \r\necho (string)$x; \r\n?> \r\n', 'hard', '101.5', 'degrees', '101', '101.5degrees', '101.5degrees', 1),
(19, '<?php \r\n$test="3.5seconds"; \r\nsettype($test,"double"); \r\nsettype($test,"integer"); \r\nsettype($test,"string"); \r\nprint($test); \r\n?> \r\n', 'basic', '3.5', '3.5seconds', '3', '3seconds', '3', 1),
(20, 'Whether One-line comment begin with pound sing(#) in php?', 'basic', 'True', 'False', 'None of above', 'NULL', 'False', 1),
(21, 'In PHP, during error handling include() generates......................', 'medium', 'a fatal error, and the script will stop', 'a warning, but the script will continue execution', 'None of the above', 'NULL', 'a warning, but the script will continue execution', 1),
(22, '<?php \r\n$qpt = ''Eat to live, but not live to eat''; \r\necho preg_match("/^to/", $qpt); \r\n?>', 'medium', '0', '1', 'to', 'NULL', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactno` varchar(45) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `name`, `emailid`, `contactno`, `degree`, `username`) VALUES
(0, '', '', '12th', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE IF NOT EXISTS `technology` (
  `tech_id` int(2) NOT NULL,
  `tech_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`tech_id`, `tech_name`) VALUES
(1, 'PHP'),
(2, 'JAVA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`que_id`), ADD KEY `tech_id` (`tech_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
 ADD PRIMARY KEY (`tech_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `que_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`tech_id`) REFERENCES `technology` (`tech_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
