-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2023 at 06:51 AM
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
(1, 'Santosky v. Kramer', '<p><i><strong>Santosky v. Kramer</strong></i>, 455 U.S. 745 (1982), is a <a href=\"https://en.wikipedia.org/wiki/Supreme_Court_of_the_United_States\">Supreme Court</a> case involving the <a href=\"https://en.wikipedia.org/wiki/Legal_burden_of_proof\">burden of proof</a> for the revocation of <a href=\"https://en.wikipedia.org/wiki/Parental_rights\">parental rights</a>. The case arose when the <a href=\"https://en.wikipedia.org/wiki/Ulster_County,_New_York\">Ulster County, New York</a>, Department of Social Services sought to revoke John Santosky II and Annie Santosky\'s parental rights to their three children. Under Section 622 of the <a href=\"https://en.wikipedia.org/wiki/New_York_State\">New York State</a> Family Court Act, the state was permitted to revoke parental rights to a natural child if, after a <a href=\"https://en.wikipedia.org/wiki/Preponderance_of_the_evidence\">fair preponderance of the evidence</a>, a court found \"permanent neglect.\" The New York State Family Court found such neglect by using the \"fair preponderance\" standard. The <a href=\"https://en.wikipedia.org/wiki/Appellate_Division_of_the_New_York_Supreme_Court\">Appellate Division of the New York Supreme Court</a> upheld the constitutionality of the burden of proof used.</p><ul><li>In a 5–4 opinion written by <a href=\"https://en.wikipedia.org/wiki/Associate_Justice_of_the_United_States_Supreme_Court\">Justice</a> <a href=\"https://en.wikipedia.org/wiki/Harry_Blackmun\">Harry Blackmun</a>, the Supreme Court of the United States vacated the Appellate Division\'s ruling, holding that states seeking to sever parental rights irrevocably must show at least <a href=\"https://en.wikipedia.org/wiki/Clear_and_convincing_evidence\">clear and convincing evidence</a> of neglect. Justice <a href=\"https://en.wikipedia.org/wiki/William_Rehnquist\">William Rehnquist</a>, joined by three others, dissented, on the grounds that the majority\'s focus on a single aspect of the law disregarded the fairness of the scheme as a whole. The ruling has since been criticized for its intrusion into state affairs. Because of the ruling, all states previously using the fair preponderance standard changed to the clear and convincing standard, but <a href=\"https://en.wikipedia.org/wiki/California\">California</a> has since abandoned the clear and convincing standard and returned to the fair preponderance standard.</li></ul>', 'Abraham Lincoln', '2023-05-13', '2023-05-13', 'Child', 'AL', 'P1', 12, 'AL', '2023-05-13', 'AL', 'AL', 'P2', 12, 'AL', 'Moscow High Court', 374986, 'Franny Bronson', 'Dreda Jayna', 'Derwing, T. M., Rossiter, M. J., & Munro, M. J. (2002). Teaching native speakers to listen to foreign-accented speech. Journal of Multilingual and Multicultural Development, 23(4), 245-259.', 'akhil'),
(23, 'DATABASE MANAGEMENT SYSTEM (DBMS)', '<blockquote><p><strong>A database management system (DBMS) is system software for creating and managing databases. A DBMS makes it possible for end users to create, protect, read, update and delete data in a database. The most prevalent type of data management platform, the DBMS essentially serves as an interface between databases and users or application programs, ensuring that data is consistently organized and remains easily accessible.</strong></p></blockquote><ul><li>What does a DBMS do?<ul><li>The DBMS manages the data; the database engine allows data to be accessed, locked and modified; and the database schema defines the database\'s logical structure. These three foundational elements help provide concurrency, security, data integrity and uniform data administration procedures. The DBMS supports many typical database administration tasks, including change management, performance monitoring and tuning, security, and backup and recovery. Most database management systems are also responsible for automated rollbacks and restarts as well as logging and auditing of activity in databases and the applications that access them.</li></ul></li><li>The DBMS provides a centralized view of data that can be accessed by multiple users from multiple locations in a controlled manner. A DBMS can limit what data end users see and how they view the data, providing many views of a single database schema. End users and software programs are free from having to understand where the data is physically located or on what type of storage medium it resides because the DBMS handles all requests.</li><li>The DBMS can offer both logical and physical data independence to protect users and applications from having to know where data is stored or from being concerned about changes to the physical structure of data. So long as programs use the application programming interface (API) for the database that the DBMS provides, developers won\'t have to modify programs just because changes have been made to the database.</li></ul><p><br>&nbsp;</p>', 'Akhil', '2023-05-01', '2023-05-03', 'Ak', 'VI', 'P1', 12, 'VA', '2023-05-03', 'WA', 'VT', 'P2', 12, 'VA', '', 0, '', '', '', ''),
(72, 'Derwing, T. M., Rossiter, M. J., & Munro, M. J. (2002)', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(73, 'Santosky v. Kramer, 455 U.S. 745 (1982)', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(74, 'Turner v. Commonwealth', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(75, 'Commonwealth v. Zamani', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(76, 'Miller-Jenkins v. Miller-Jenkins,', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(77, 'Thompson v. Thompson', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(78, 'Scott v. Rutherfoord', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(79, 'Wilson v. Gouse', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(80, 'Meade v. Meade', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(81, 'Murphy v. Woerner', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', ''),
(82, 'Davenport v. Little-Bowser', '', '', '2023-09-22', '1970-01-01', '', '', '', 0, '', '1970-01-01', '', '', '', 0, '', '', 0, '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
