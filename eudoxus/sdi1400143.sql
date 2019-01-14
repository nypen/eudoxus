-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Ιαν 2019 στις 19:27:43
-- Έκδοση διακομιστή: 10.1.37-MariaDB
-- Έκδοση PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eudoxus`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `annancouments`
--
CREATE DATABASE eudoxus;
USE eudoxus;

CREATE TABLE `annancouments` (
  `anTitle` tinytext NOT NULL,
  `anText` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `annancouments`
--


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `book`
--

CREATE TABLE `book` (
  `BookID` int(5) NOT NULL,
  `BookTitle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `BookPublisher` longtext COLLATE utf8_unicode_ci NOT NULL,
  `BookWriter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `NumOfCopies` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `book`
--

INSERT INTO `book` (`BookID`, `BookTitle`, `BookPublisher`, `BookWriter`, `NumOfCopies`) VALUES
(1, 'The unexpected', 'Giannis', 'Giorgos', 52);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `departments`
--

CREATE TABLE `departments` (
  `tmname` text NOT NULL,
  `tmid` tinytext NOT NULL,
  `tmInst` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `departments`
--

INSERT INTO `departments` (`tmname`, `tmid`, `tmInst`) VALUES
('Informatics & Technology', 'IT', 'EKPA'),
('Physics', 'PH', 'EKPA'),
('Mathematics', 'MATH', 'EKPA');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `institutes`
--

CREATE TABLE `institutes` (
  `instID` int(5) NOT NULL,
  `InstShortName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `InstituteName` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `institutes`
--

INSERT INTO `institutes` (`instID`, `InstShortName`, `InstituteName`) VALUES
(1, 'EKPA', 'National Kapodistrian University of Athens'),
(2, 'EMP', 'National Technical Institute'),
(3, 'PADA', 'University of Western Attica'),
(4, 'PAPI', 'University of Piraeus'),
(5, 'XP', 'Xarokopeio University');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Lessons`
--

CREATE TABLE `Lessons` (
  `Uni_less_half` int(11) NOT NULL,
  `Uni_lesson_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Uni_lesson_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Uni_season` text NOT NULL,
  `Uni_less_proff` text NOT NULL,
  `Uni_less_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `Lessons`
--

INSERT INTO `Lessons` (`Uni_less_half`, `Uni_lesson_id`, `Uni_lesson_title`, `Uni_season`, `Uni_less_proff`, `Uni_less_publication`) VALUES
(1, 'K09', 'Diakrita Math', 'Xeimerino', '', ''),
(3, 'K10', 'OOP', 'Xeimerino', '', ''),
(5, 'K17', 'Algorithmoi', 'Earino', '', ''),
(7, 'YS08', 'EAM', 'Xeimerino', '', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Parametroi_dianomis`
--

CREATE TABLE `Parametroi_dianomis` (
  `max_books` int(11) NOT NULL,
  `max_semesters` int(11) NOT NULL,
  `max_winter` int(11) NOT NULL,
  `max_spring` int(11) NOT NULL,
  `winter_start_date` date NOT NULL,
  `winter_stop_date` date NOT NULL,
  `spring_start_date` date NOT NULL,
  `spring_stop_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subjects`
--

CREATE TABLE `subjects` (
  `subCode` tinytext NOT NULL,
  `subName` varchar(40) NOT NULL,
  `subBook` tinytext NOT NULL,
  `subSem` int(11) NOT NULL,
  `subDep` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `subjects`
--

INSERT INTO `subjects` (`subCode`, `subName`, `subBook`, `subSem`, `subDep`) VALUES
('K24', 'System Programming', 'F132', 6, 'IT'),
('876', 'Introduction to programming', 'K5', 1, 'IT'),
('873', 'C++', 'C++ , the Ocean', 3, 'IT'),
('876', 'Computational Analysis', 'Computational is more', 3, 'IT'),
('874', 'Web Design', 'Make my site', 5, 'IT'),
('874', 'Compilers', 'Let me compile this for you', 7, 'IT');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tmimata`
--

CREATE TABLE `tmimata` (
  `tmname` varchar(45) NOT NULL,
  `tmInst` varchar(45) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `tmimata`
--

INSERT INTO `tmimata` (`tmname`, `tmInst`, `id`) VALUES
('Fisiko', 'EKPA', 1),
('Mathimatiko', 'EKPA', 2),
('Filolofias', 'EKPA', 3),
('Biologias', 'EKPA', 4),
('Ximiko', 'EKPA', 5),
('Informatics & Technology', 'EKPA', 6);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
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
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`idUsers`, `userNickname`, `userFirstName`, `userLastName`, `emailUsers`, `pwdUsers`, `usersCategory`, `StudentsAM`, `StudentsInst`, `StudentsDepart`, `StudentsYear`) VALUES
(1, 'Effie13', 'EFTICHIA', 'PITAOULI', 'sdi1400159@gmail.com', 'EfaKi13', 'Student', NULL, 'EKPA', 'IT', 2014);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Ευρετήρια για πίνακα `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`instID`);

--
-- Ευρετήρια για πίνακα `Lessons`
--
ALTER TABLE `Lessons`
  ADD UNIQUE KEY `Uni_lesson_id` (`Uni_lesson_id`);

--
-- Ευρετήρια για πίνακα `tmimata`
--
ALTER TABLE `tmimata`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `institutes`
--
ALTER TABLE `institutes`
  MODIFY `instID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `tmimata`
--
ALTER TABLE `tmimata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
