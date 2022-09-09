-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jan 06, 2022 at 04:46 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(8) NOT NULL,
  `categories_name` varchar(30) NOT NULL,
  `categories_description` varchar(300) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_description`, `created`) VALUES
(1, 'HTML', 'HTML is the standard markup language for Web pages.<br>\nWith HTML you can create your own Website.<br>\nHTML is easy to learn - You will enjoy it!', '2021-11-01 17:10:17'),
(2, 'CSS', 'CSS is the language we use to style an HTML document.\r\nCSS describes how HTML elements should be displayed.\r\nThis tutorial will teach you CSS from basic to advanced.', '2021-11-01 19:09:15'),
(3, 'JavaScript', 'JavaScript is the world\'s most popular programming language.\r\nJavaScript is the programming language of the Web.\r\nJavaScript is easy to learn.\r\nThis tutorial will teach you JavaScript from basic to advanced.', '2021-11-01 17:29:14'),
(4, 'PHP', 'PHP is a server scripting language and a powerful tool for making dynamic and interactive Web pages.\r\nPHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.', '2021-11-01 17:30:26'),
(5, 'C', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.', '2021-11-01 17:31:05'),
(6, 'CPP', 'C++ is a popular programming language.\r\nC++ is used to create computer programs.', '2021-11-01 19:11:53'),
(7, 'Java', 'Java is a popular programming language.\r\nJava is used to develop mobile apps, web apps, desktop apps, games, and much more.', '2021-11-01 19:13:42'),
(8, 'Python', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation.', '2021-11-01 19:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
