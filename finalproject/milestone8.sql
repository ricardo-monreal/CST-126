-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2021 at 02:48 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milestone8`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `idblog_posts` int(11) NOT NULL,
  `blog_post_title` varchar(45) DEFAULT NULL,
  `blog_post` text,
  `users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`idblog_posts`, `blog_post_title`, `blog_post`, `users_ID`) VALUES
(1, 'Test Post + Edit Test', '<p>Test Post + Edit Test</p>', 14),
(4, 'test', 'testing database connection', 22),
(5, 'test 2', 'testing redirecting to index page', 22),
(6, 'Test HTML Editor', '<p><strong>Hello!</strong></p>\r\n<p>Testing HTML editor. </p>\r\n<p>&nbsp;</p>', 22),
(7, 'Dwight Test', '<p>Hello this is a test by Dwight!</p>', 26),
(8, 'Dwight Test 2', '<p>Whoa!? A second test?</p>', 26);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idcomments` int(11) NOT NULL,
  `comment_text` text,
  `blog_posts_idblog_posts` int(11) NOT NULL,
  `users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idcomments`, `comment_text`, `blog_posts_idblog_posts`, `users_ID`) VALUES
(1, 'I see you like The Office', 7, 14),
(2, 'Testing comments!', 6, 25),
(3, 'My very first comment!', 4, 14),
(4, 'I see you like the office!', 7, 14),
(5, 'Have you been to Costa Rica?', 1, 14),
(6, 'Michael, You dont know the power of the dark side!', 6, 22),
(7, 'Do or do not, there is not try.', 6, 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`, `role`) VALUES
(14, 'Toby ', 'Flenderson', 'toby', 'pass7', NULL),
(17, 'Meridith', 'Palmer', 'meridith', 'pass', NULL),
(21, 'testone', 'test', 'testone', 'pass', NULL),
(22, 'Darth', 'Vader', 'vader', 'pass', NULL),
(25, 'Michael', 'Scott', 'michael', 'pass', 'admin'),
(26, 'Dwight', 'Schrute', 'dwight', 'pass', NULL),
(28, 'admin', '', 'admin', 'root', 'admin'),
(29, 'yoda', 'jedi', 'yoda', 'pass', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`idblog_posts`),
  ADD KEY `fk_blog_posts_users_idx` (`users_ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idcomments`),
  ADD KEY `fk_comments_blog_posts1_idx` (`blog_posts_idblog_posts`),
  ADD KEY `fk_comments_users1_idx` (`users_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `idblog_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idcomments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk_blog_posts_users` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_blog_posts1` FOREIGN KEY (`blog_posts_idblog_posts`) REFERENCES `blog_posts` (`idblog_posts`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
