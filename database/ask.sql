-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jan 06, 2022 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stack_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `ask_id` int(11) NOT NULL,
  `ask_title` varchar(100) NOT NULL,
  `ask_desc` varchar(250) NOT NULL,
  `ask_cat_id` int(11) NOT NULL,
  `ask_user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`ask_id`, `ask_title`, `ask_desc`, `ask_cat_id`, `ask_user_id`, `timestamp`) VALUES
(1, 'tags and elements', 'Are the HTML tags and elements the same thing?', 1, 1, '2021-12-04 17:29:15'),
(2, 'tags and attributes', 'What are tags and attributes in HTML?', 1, 1, '2021-12-04 17:30:53'),
(3, 'void elements', 'What are void elements in HTML?', 1, 1, '2021-12-04 17:34:12'),
(4, 'advantage of collapsing', 'What is the advantage of collapsing white space?', 1, 1, '2021-12-04 17:34:46'),
(5, 'Entities?', 'What are HTML Entities?', 1, 1, '2021-12-05 11:10:51'),
(13, 'what is css?', 'I don&apos;t know about CSS please help me.', 2, 4, '2021-12-05 11:40:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`ask_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask`
--
ALTER TABLE `ask`
  MODIFY `ask_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
