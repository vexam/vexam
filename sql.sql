-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 05:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31
 
CREATE TABLE `answer` (
  `ID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `IsCorrect` tinyint(1) NOT NULL DEFAULT '0',
  `Question_ID` int(11) NOT NULL,
  `Answer` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
-- INSERT INTO `answer` (`ID`, `IsActive`, `IsCorrect`, `Question_ID`, `Answer`) VALUES 
 
CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
-- INSERT INTO `categories` (`ID`, `IsActive`, `name`) VALUES
 
CREATE TABLE `explanation` (
  `ID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `Explanation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Question_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
-- INSERT INTO `explanation` (`ID`, `IsActive`, `Explanation`, `Question_ID`) VALUES
 
CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_type` int(11) NOT NULL,
  `q_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--INSERT INTO `question` (`ID`, `IsActive`, `question`, `q_type`, `q_category`) VALUES
 
CREATE TABLE `type` (
  `ID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
-- INSERT INTO `type` (`ID`, `IsActive`, `name`) VALUES
 

CREATE TABLE `vexam_user1` (
  `id` int(11) NOT NULL,
  `auth` tinyint(1) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `currentlogin` tinyint(1) NOT NULL DEFAULT '0',
  `lastip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `picture` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Question_ID` (`Question_ID`);
 
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);
 
ALTER TABLE `explanation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Question_ID` (`Question_ID`);
 
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `q_type` (`q_type`),
  ADD KEY `q_category` (`q_category`);
 
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);
 
ALTER TABLE `answer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3794;
 
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
 
ALTER TABLE `explanation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
 
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;
 
ALTER TABLE `type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
 
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`Question_ID`) REFERENCES `question` (`ID`) ON UPDATE CASCADE;
 
ALTER TABLE `explanation`
  ADD CONSTRAINT `explanation_ibfk_1` FOREIGN KEY (`Question_ID`) REFERENCES `question` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
 
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`q_type`) REFERENCES `type` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`q_category`) REFERENCES `categories` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;
 