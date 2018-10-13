-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 05:26 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfit1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `username` varchar(50) NOT NULL,
  `qid` int(11) NOT NULL,
  `ansid` int(11) NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`username`, `qid`, `ansid`, `answer`) VALUES
('PKK', 1, 1, 'answer1'),
('PKK', 1, 2, 'answer32e2'),
('myronic', 1, 3, 'answersre'),
('myy', 2, 4, 'answe3434'),
('myronic', 3, 5, 'answer121'),
('PKK', 3, 6, 'answer54'),
('myronic', 3, 7, 'answer45'),
('PKK', 1, 8, 'answer23'),
('PKK', 1, 23, 'answer1'),
('PKK', 4, 24, 'ans1'),
('PKK', 4, 25, 'answer2'),
('myy', 4, 26, 'ans3'),
('PKK', 5, 27, 'answer12'),
('PKK', 6, 28, 'answer13'),
('PKK', 5, 29, 'answer14'),
('myronic', 6, 30, 'answer15'),
('myronic', 7, 31, 'answer16'),
('PKK', 7, 32, 'answer17'),
('PKK', 8, 33, 'answer18'),
('myronic', 9, 34, 'answer19'),
('PKK', 9, 35, 'answer20'),
('PKK', 13, 36, 'answer21'),
('myronic', 14, 37, 'answer22'),
('myy', 14, 38, 'answer23'),
('PKK', 12, 39, 'answer24'),
('PKK', 12, 40, 'answer25'),
('PKK', 15, 41, 'answer26'),
('myronic', 15, 42, 'answer27'),
('myronic', 17, 43, 'answer28'),
('myy', 17, 44, 'answer29'),
('myy', 16, 45, 'answer30'),
('myy', 17, 46, 'answer31'),
('PKK', 4, 50, 'answer2');

-- --------------------------------------------------------

--
-- Table structure for table `chall`
--

CREATE TABLE `chall` (
  `id` int(11) NOT NULL,
  `names` mediumtext NOT NULL,
  `some` int(11) NOT NULL,
  `some1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chall`
--

INSERT INTO `chall` (`id`, `names`, `some`, `some1`) VALUES
(1, 'push up/pull up/kicks/bents', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `username` varchar(50) NOT NULL,
  `qid` int(11) NOT NULL,
  `quest` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`username`, `qid`, `quest`) VALUES
('PKK', 1, 'What is cardio?'),
('PKK', 2, 'How many sets of bench press?'),
('myronic', 3, 'When to train legs?'),
('myy', 4, 'What is Whey?'),
('PKK', 5, 'What is BCAA'),
('PKK', 6, 'how to perform squats'),
('PKK', 7, 'What is melanine'),
('myronic', 8, 'What is keto diet'),
('myronic', 9, 'When to workout'),
('myy', 10, 'What is best time to start posing'),
('myronic', 11, 'What is BCAA3'),
('myy', 12, 'What is BCAA4'),
('PKK', 13, 'What is BCAA5'),
('PKK', 14, 'What is BCAA6'),
('myy', 15, 'What is BCAA7'),
('PKK', 16, 'What is BCAA8'),
('PKK', 17, 'What is BCAA9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `goal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `username`, `password`, `height`, `weight`, `age`, `gender`, `goal`) VALUES
(3, '', 'prajwal.kotian@somaiya.edu', 'PKK', '12345', 168, 62, 0, 'Male', ''),
(5, '', 'my.c@som.edu', 'myronic', '123', 176, 70, 0, 'Male', ''),
(24, '', 'sd@gmail.com', 'myy', 'bjh', 165, 80, 23, 'Male', 'Fat Loss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
