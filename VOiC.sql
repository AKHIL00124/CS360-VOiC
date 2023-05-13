-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 11:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voic`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(125) NOT NULL,
  `createdOn` date NOT NULL,
  `todaydate` date NOT NULL,
  `ChildName` varchar(125) NOT NULL,
  `ChildState` varchar(45) NOT NULL,
  `Parent1Name` varchar(125) NOT NULL,
  `ChildStayPre` int(11) NOT NULL,
  `Parent1State` varchar(45) NOT NULL,
  `CaseDate` date NOT NULL,
  `CaseState` varchar(45) NOT NULL,
  `ChangeState` varchar(45) NOT NULL,
  `Parent2Name` varchar(125) NOT NULL,
  `CaseStay` int(11) NOT NULL,
  `Parent2State` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `author`, `createdOn`, `todaydate`, `ChildName`, `ChildState`, `Parent1Name`, `ChildStayPre`, `Parent1State`, `CaseDate`, `CaseState`, `ChangeState`, `Parent2Name`, `CaseStay`, `Parent2State`) VALUES
(17, '1234', '<p>1234</p>', '1243', '2023-04-30', '2023-04-30', '1234', 'AL', '1234', 1234, 'AL', '2023-04-30', 'AL', 'AL', '1234', 1234, 'AL'),
(18, 'asdf', '<p>asdf</p>', 'asdf', '2023-04-30', '2023-03-31', 'asdf', 'CA', 'asdf', 789, 'CA', '2023-03-31', 'CA', 'CA', 'asdf', 789, 'CA'),
(19, 'WHY IS IT HARD TO LEARN TO PROGRAM?', '<p><a href=\"https://www.lindenwood.edu/science/mathematics-computer-science-and-information-technology/computer-science/prospective-students/is-computer-science-hard/\">IS COMPUTER SCIENCE HARD?</a></p><h2><a href=\"https://slate.lindenwood.edu/apply/\">APPLY NOW</a></h2><h2><a href=\"https://slate.lindenwood.edu/register/request_info\">REQUEST INFO</a></h2><h2><a href=\"https://www.lindenwood.edu/admissions/visit-campus/\">SCHEDULE A VISIT</a></h2><h2>I HEARD THAT COMPUTER SCIENCE IS ONE OF THE HARDEST FIELDS OF STUDY. IS THAT TRUE?</h2><p>Yes. Computer Science is a hard discipline to learn. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn Computer Science.</p><h3>FULL ANSWER</h3><h2>WHY IS IT HARD TO LEARN TO PROGRAM?</h2><p>Computer Science is a hard discipline to learn because learning to program is hard. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn how to program.</p><h3>FULL ANSWER</h3><h2>WHAT DOES IT MEAN THAT THE DISCIPLINE OF COMPUTER SCIENCE IS CONSTRUCTIVE IN NATURE?</h2><p>Computer Science is a hard discipline to learn because of the constructive nature of the discipline. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn and master every concept when it is encountered.</p><h3>FULL ANSWER</h3><h2>HOW MUCH TIME IS REQUIRED TO SUCCESSFULLY LEARN COMPUTER SCIENCE?</h2><p>Even though Computer Science is a hard discipline to learn, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn Computer Science.</p><h2>BUT IF I HAVE TO PUT IN SO MUCH TIME TO STUDY COMPUTER SCIENCE, THEN I WON\'T HAVE TIME TO DO OTHER THINGS, WILL I?</h2><p>Computer Science requires students to invest a lot of time to learn. But, if you learn good time management skills, you can put in the necessary time to learn the discipline and still have time for other activities.</p><h3>FULL ANSWER</h3><p>&nbsp;</p><blockquote><p>Many students are not motivated or prepared to invest this amount of time. They are looking for an “easy” discipline that “allows them time for significant extra-curricular or social activities.” They don’t believe that they can have a fulfilling social life in college while putting in this amount of time to study. Fortunately, students who are motivated to invest the necessary time often find that they can also fit in active extra-curricular or social calendars and still be satisfied. The only difference is that CS students must utilize really good time management skills, and must plan for these extra-curricular and social activities.</p></blockquote>', 'Akhil', '2023-04-30', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `role`) VALUES
(1, 'asdf', 'asdf@asdf.com', '$2y$10$DWpKjTuQcI7VlggfbuD/jOcse8bETDT37SyvWXO37tsGfZ5GibajO', 2),
(7, 'qwer', 'qwre@asdf.com', '$2y$10$PT6PWYms8hjzszZyO9kbyeeAarOKNBv561g3O13/QDtREyg7PdMT6', 1),
(8, '1234', '1234@1234.com', '$2y$10$kmD6IGk.kWd74X6XMHzLGukhroEjRH54O5Ytlb7RQqT..I1bykT7O', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
