-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2023 at 03:23 AM
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
-- Database: `VOiC`
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
  `Parent2State` varchar(45) NOT NULL,
  `court` varchar(255) NOT NULL,
  `caseNo` int(11) NOT NULL,
  `Petitioner` varchar(255) NOT NULL,
  `Respondent` varchar(255) NOT NULL,
  `Citations` text NOT NULL,
  `Signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `author`, `createdOn`, `todaydate`, `ChildName`, `ChildState`, `Parent1Name`, `ChildStayPre`, `Parent1State`, `CaseDate`, `CaseState`, `ChangeState`, `Parent2Name`, `CaseStay`, `Parent2State`, `court`, `caseNo`, `Petitioner`, `Respondent`, `Citations`, `Signature`) VALUES
(20, 'COMPUTER SCIENCE', '<ol><li>Initially, Computer Science seems hard because learning to program is challenging. Programming is the first task that Computer Science students must master, and programming requires an extremely logical and methodical approach to solving problems. Students who are weak in mathematics often have to work harder to attain the logical thinking skills necessary to learn to program.</li><li>Programming is introduced \"cold\" to students in the first computer science course and continued in the next several courses. Compared to Mathematics, students learn math starting in kindergarten and continuing all the way through college. It is introduced in small steps, all the way through school. Programming is a similar intellectual skill that takes time to master, usually in about 4-5 courses.</li><li>Some students appear to find programming easy and unnecessarily intimidate others into believing they are not suited to computer science. However, most of people learn skills step-by-step over time. Can anyone who has no background in music learn to play a musical instrument really well in one semester? Can someone starting from scratch learn to speak a foreign language fluently with a single course? Unless you are a musical genius, or a young child living in a bi-lingual family, the answer for the vast majority of people is no.</li><li>You can almost think of learning to program as equivalent to learning to speak &amp; write in Chinese and Russian at the same time from scratch. Put another way, you can almost think of learning to program as equivalent to taking biochemistry, gross anatomy, physiology, pharmacology, and pathology courses in a MD program at a medical school (these are 6+ credit hour courses that expect you to memorize incredible amounts of information). The difference is that CS courses require you to do the programming to learn the skills, as opposed to memorizing large quantities of information or spending many hours rotely repeating language phrases and idioms.</li></ol>', 'Professor', '2023-05-01', '2023-04-24', 'Ak', 'CA', 'comp', 800, 'ID', '2023-04-24', 'CA', 'CA', 'sci', 800, 'AK', '', 0, '', '', '', ''),
(22, 'WHY IS IT HARD TO LEARN TO PROGRAM?', '<h4>I HEARD THAT COMPUTER SCIENCE IS ONE OF THE HARDEST FIELDS OF STUDY. IS THAT TRUE?</h4><p>Yes. Computer Science is a hard discipline to learn. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn Computer Science.</p><h4>FULL ANSWER</h4><h4>WHY IS IT HARD TO LEARN TO PROGRAM?</h4><p>Computer Science is a hard discipline to learn because learning to program is hard. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn how to program.</p><h4>FULL ANSWER</h4><h4>WHAT DOES IT MEAN THAT THE DISCIPLINE OF COMPUTER SCIENCE IS CONSTRUCTIVE IN NATURE?</h4><p>Computer Science is a hard discipline to learn because of the constructive nature of the discipline. But, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn and master every concept when it is encountered.</p><h4>FULL ANSWER</h4><h4>HOW MUCH TIME IS REQUIRED TO SUCCESSFULLY LEARN COMPUTER SCIENCE?</h4><p>Even though Computer Science is a hard discipline to learn, if you are motivated and devote sufficient time to studying the discipline, then it is possible to learn Computer Science.</p><h4>BUT IF I HAVE TO PUT IN SO MUCH TIME TO STUDY COMPUTER SCIENCE, THEN I WON\'T HAVE TIME TO DO OTHER THINGS, WILL I?</h4><p>Computer Science requires students to invest a lot of time to learn. But, if you learn good time management skills, you can put in the necessary time to learn the discipline and still have time for other activities.</p><h4>FULL ANSWER</h4><p>&nbsp;</p><blockquote><p>Many students are not motivated or prepared to invest this amount of time. They are looking for an “easy” discipline that “allows them time for significant extra-curricular or social activities.” They don’t believe that they can have a fulfilling social life in college while putting in this amount of time to study. Fortunately, students who are motivated to invest the necessary time often find that they can also fit in active extra-curricular or social calendars and still be satisfied. The only difference is that CS students must utilize really good time management skills, and must plan for these extra-curricular and social activities.</p></blockquote><p><br>&nbsp;</p>', 'Average Student', '2023-05-01', '2023-05-01', 'Avg Stu', 'CT', 'AvgP1', 45, 'ND', '2023-05-01', 'UM-84', 'UM', 'AvgP2', 45, 'UM-79', '', 0, '', '', '', ''),
(23, 'DATABASE MANAGEMENT SYSTEM (DBMS)', '<blockquote><p><strong>A database management system (DBMS) is system software for creating and managing databases. A DBMS makes it possible for end users to create, protect, read, update and delete data in a database. The most prevalent type of data management platform, the DBMS essentially serves as an interface between databases and users or application programs, ensuring that data is consistently organized and remains easily accessible.</strong></p></blockquote><ul><li>What does a DBMS do?<ul><li>The DBMS manages the data; the database engine allows data to be accessed, locked and modified; and the database schema defines the database\'s logical structure. These three foundational elements help provide concurrency, security, data integrity and uniform data administration procedures. The DBMS supports many typical database administration tasks, including change management, performance monitoring and tuning, security, and backup and recovery. Most database management systems are also responsible for automated rollbacks and restarts as well as logging and auditing of activity in databases and the applications that access them.</li></ul></li><li>The DBMS provides a centralized view of data that can be accessed by multiple users from multiple locations in a controlled manner. A DBMS can limit what data end users see and how they view the data, providing many views of a single database schema. End users and software programs are free from having to understand where the data is physically located or on what type of storage medium it resides because the DBMS handles all requests.</li><li>The DBMS can offer both logical and physical data independence to protect users and applications from having to know where data is stored or from being concerned about changes to the physical structure of data. So long as programs use the application programming interface (API) for the database that the DBMS provides, developers won\'t have to modify programs just because changes have been made to the database.</li></ul><p><br>&nbsp;</p>', 'Akhil', '2023-05-01', '2023-05-03', 'Ak', 'VI', 'P1', 12, 'VA', '2023-05-03', 'WA', 'VT', 'P2', 12, 'VA', '', 0, '', '', '', ''),
(24, 'test', '<p>test</p>', 'test', '2023-05-01', '2023-05-02', 'Child', 'AZ', 'P1', 56, 'AZ', '2023-05-02', 'AZ', 'AZ', 'P2', 56, 'AZ', '', 0, '', '', '', ''),
(25, 'Akhil', '', '', '2023-05-12', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', '');

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
(9, 'normal', 'noraml@gmail.com', '$2y$10$jDgFvW1Cu2Zzvn6rrcvMNOitzvIaUYIMRQl1gYE1STcQg/2J.8fza', 1),
(10, 'admin', 'admin@gmail.com', '$2y$10$YMNXe5T0HocFloXy.0ok0.0A94fgjrbMifHWh3JCc3U0U1wKN78IC', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
