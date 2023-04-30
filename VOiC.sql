-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 10:26 AM
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
(5, 'Women in Hinduism', '<ul><li><i><strong>Women have played a significant role in Hinduism since its inception. Hinduism is one of the oldest religions in the world, with a history that dates back more than 5,000 years. Throughout this long history, Hinduism has evolved in many ways, but its teachings have always held women in high regard.&nbsp;</strong></i></li></ul><ol><li><i><strong>This essay will explore the role of women in Hinduism, including their place in the religious texts, their social status, and the challenges they have faced and continue to face. Role of Women in Hindu Religious Texts Hinduism has a vast collection of sacred texts, including the Vedas, the Upanishads, and the Bhagavad Gita.&nbsp;</strong></i></li><li><i><strong>These texts form the basis of Hinduism and contain a wealth of information about the religion\'s teachings and practices. Women play an important role in these texts, and their stories and experiences are woven throughout the narratives.</strong></i></li></ol>', 'Akhil', '2023-04-25', '0000-00-00', '', '', '', 0, '', '0000-00-00', '', '', '', 0, ''),
(7, 'Computer Science', '<ol><li><strong>Initially Computer Science seems hard because learning to program is challenging. Programming is the first task that Computer Science students must master, and programming requires an extremely logical and methodical approach to solving problems. Students who are weak in mathematics often have to work harder to attain the logical thinking skills necessary to learn to program.</strong></li><li><strong>Programming is introduced \"cold\" to students in a first computer science course and continued in the next several courses. Compared to Mathematics, students learn math starting in kindergarten and continuing all the way through college. It is introduced in small steps, all the way through school. Programming is a similar intellectual skill that takes time to master, usually in about 4-5 courses.</strong></li><li><strong>Some students appear to find programming easy and unnecessarily intimidate others into believing they are not suited to computer science. However, most of people learn skills step-by-step over time. Can anyone who has no background in music learn to play a musical instrument really well in one semester? Can someone starting from scratch learn to speak a foreign language fluently with a single course? Unless you are a musical genius, or a young child living in a bi-lingual family, the answer for the vast majority of people is no.</strong></li><li><strong>You can almost think of learning to program as equivalent to learning to speak &amp; write in Chinese and Russian at the same time from scratch. Put another way, you can almost think of learning to program as equivalent to taking biochemistry, gross anatomy, physiology, pharmacology, and pathology courses in a MD program at a medical school (these are 6+ credit hour courses that expect you to memorize incredible amounts of information). The difference is that CS courses require you to do the programming to learn the skills, as opposed to memorizing large quantities of information or spending many hours rotely repeating language phrases and idioms.</strong></li></ol>', 'Professor', '2023-04-26', '0000-00-00', '', '', '', 0, '', '0000-00-00', '', '', '', 0, ''),
(11, 'Database Management system (DBMS)', '<p>A database management system (DBMS) is system software for creating and managing databases. A DBMS makes it possible for end users to create, protect, read, update and delete data in a <a href=\"https://www.techtarget.com/searchdatamanagement/definition/database\">database</a>. The most prevalent type of <a href=\"https://www.techtarget.com/searchdatamanagement/definition/data-management\">data management</a> platform, the DBMS essentially serves as an interface between databases and users or application programs, ensuring that data is consistently organized and remains easily accessible.</p><h3><strong>What does a DBMS do?</strong></h3><p>The DBMS manages the data; the database engine allows data to be accessed, locked and modified; and the database <a href=\"https://www.techtarget.com/searchdatamanagement/definition/schema\">schema</a> defines the database\'s logical structure. These three foundational elements help provide concurrency, security, data integrity and uniform data administration procedures. The DBMS supports many typical database administration tasks, including change management, performance monitoring and tuning, security, and backup and recovery. Most database management systems are also responsible for automated rollbacks and restarts as well as logging and auditing of activity in databases and the applications that access them.</p><p>The DBMS provides a centralized view of data that can be accessed by multiple users from multiple locations in a controlled manner. A DBMS can limit what data end users see and how they view the data, providing many views of a single database schema. End users and software programs are free from having to understand where the data is physically located or on what type of storage medium it resides because the DBMS handles all requests.</p><p>The DBMS can offer both logical and physical data independence to protect users and applications from having to know where data is stored or from being concerned about changes to the physical structure of data. So long as programs use the application programming interface (API) for the database that the DBMS provides, developers won\'t have to modify programs just because changes have been made to the database.</p>', 'Student', '2023-04-26', '0000-00-00', '', '', '', 0, '', '0000-00-00', '', '', '', 0, ''),
(12, 'Sample Demo', '<p>asdf;ihasodi fhaosdfj oasipdhf opaishdf opihasdf hasd;fh asidj fasojd fioasjd fashd fkhasdlfk hbsadguakljdbg asuildfh asidhfb kasdb fkasbdhf kashdf ahs dfh. ahsio dfhais dhfas fioa dhaso hfaso ihfasoifh oiasfh aopis hoaipsoiahs foihakj baskljbasfuih asiudhf auihe kjasbefkjawebf kjalbsf huasdi ofuhasiufh awekj bhfakljesbf klasjdbfh iasuhf ioawh efiouawef iouahsdf ihas&nbsp;</p>', 'Anon', '2023-04-26', '0000-00-00', '', '', '', 0, '', '0000-00-00', '', '', '', 0, ''),
(16, 'Sample Doc with Attributes', '<p>This is just a sample doc with attriubutes to check how the system is working and test it.</p>', 'Attrib', '2023-04-30', '2023-04-14', 'child', 'AL', 'Parent 1', 24, 'IL', '2023-01-02', 'AK', 'FL', 'Parent 2', 35, 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'asdf', 'asdf@asdf.com', '$2y$10$DWpKjTuQcI7VlggfbuD/jOcse8bETDT37SyvWXO37tsGfZ5GibajO'),
(6, '1234', '1243@1243.com', '$2y$10$GuwfycUF6bR9OH82wNEqW.HHwtGHZe3T3Aguwnbq8Kc3PXPiNivae');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
