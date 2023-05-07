-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2023 at 03:00 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `school_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `years` varchar(80) NOT NULL,
  `award` varchar(80) NOT NULL,
  `image_file_path` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`school_id`, `name`, `years`, `award`, `image_file_path`) VALUES
(0, 'Lincoln Southwest High School', '2015-2019', 'High School Diploma', 'assets/southwest1.png'),
(1, 'University of Nebraska-Lincoln', '2019-2023', 'Bachelor\'s in Software Engineering', 'assets/unl1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `time` varchar(80) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_file_path` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `company`, `title`, `time`, `description`, `image_file_path`) VALUES
(0, 'Scheels', 'Cashier | Customer Service | Visa Representative', '2017-2021', 'I started at Lincoln Scheels in High School as a cashier where I learned to interact with many customers on a daily basis. After I outgrew that position with experience I moved up to customer service which came with a whole new set of responsibilities. Soon after that I specialized in working in the Visa credit card booth helping customers apply for the store credit card where I remained for the rest of my time at Scheels.', 'assets/scheels-logo.png'),
(1, 'PenLink', 'Intern', '2021-2023', 'I worked as a Software Development Intern at PenLink for two years, where I gained experience in several projects, including internal tools, simulators, and PenLink\'s flagship product PLX. I have honed my skills in creating Windows applications from scratch, utilizing C# as the primary programming language. Additionally, I managed build pipelines for full-scale projects, contributing to the successful delivery of various initiatives.', 'assets/penlink-logo.png'),
(2, 'PenLink', 'Software Engineer', 'Starting May 2023', 'I have accepted a full-time offer from PenLink as a software engineer.', 'assets/penlink-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `email`, `content`) VALUES
(0, 'jswanson@gmail.com', 'Hey there! I like your website!');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_file_path` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `description`, `image_file_path`) VALUES
(0, 'Retail Schedule Viewer', 'When viewing my retail schedule, the mobile schedule app was very outdated and bland. The website version, while still bland, offered an interesting feature of being able to see everyone\'s shifts for the month which I thought I could take advantage of. So I created an app that scrapes the schedule data for everyone so that I can do what I want with it. I could: view my schedule, view the schedule for a particular day, view a co-worker\'s schedule, and even see what days I work with certain people. Overall this was a very cool project that I used everyday while working in retail, with the added bonus that my co-workers were jealous.', 'assets/schedule-viewer.png'),
(1, 'Google President Watcher', 'When the inauguration of the next president was coming up, I was curious at what point the Google search for current president changes to the next person. So, using a Raspberry Pi, I created a script that constantly watches the Google search for current president to see when it changes. Once it changes, it was set to save a log of when it happened and send me a text message. Unfortunately, I forgot that time zones exist and messed up when I was going to turn on the program, so it was too late. Maybe when the next president is elected I can try again.', 'assets/president-watcher.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
