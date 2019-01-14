-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 06:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eudoxus`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` int(5) NOT NULL,
  `BookTitle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `BookPublisher` longtext COLLATE utf8_unicode_ci NOT NULL,
  `BookWriter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `NumOfCopies` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `instID` int(5) NOT NULL,
  `InstShortName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `InstituteName` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`instID`, `InstShortName`, `InstituteName`) VALUES
(1, 'EKPA', 'National Kapodistrian University of Athens'),
(2, 'EMP', 'National Technical Institute'),
(3, 'PADA', 'University of Western Attica'),
(4, 'PAPI', 'University of Piraeus'),
(5, 'XP', 'Xarokopeio University');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `userNickname` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `userFirstName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `userLastName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `emailUsers` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `pwdUsers` longtext COLLATE utf8_unicode_ci NOT NULL,
  `usersCategory` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `StudentsAM` int(11) DEFAULT NULL,
  `StudentsInst` tinytext COLLATE utf8_unicode_ci,
  `StudentsDepart` tinytext COLLATE utf8_unicode_ci,
  `StudentsYear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `userNickname`, `userFirstName`, `userLastName`, `emailUsers`, `pwdUsers`, `usersCategory`, `StudentsAM`, `StudentsInst`, `StudentsDepart`, `StudentsYear`) VALUES
(1, 'Effie13', 'EFTICHIA', 'PITAOULI', 'sdi1400159@gmail.com', 'EfaKi13', 'Student', NULL, 'EKPA', 'IT', 2014);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`instID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `instID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
