-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 02:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `post`, `user_name`, `image`) VALUES
(12, 'Benefits of software testing', 'Cost-Effective: It is one of the important advantages of software testing. Testing any IT project on time helps you to save your money for the long term. In case if the bugs caught in the earlier stage of software testing, it costs less to fix.\r\nSecurity: It is the most vulnerable and sensitive benefit of software testing. People are looking for trusted products. It helps in removing risks and problems earlier.\r\nProduct quality: It is an essential requirement of any software product. Testing ensures a quality product is delivered to customers.\r\nCustomer Satisfaction: The main aim of any product is to give satisfaction to their customers. UI/UX Testing ensures the best user experience.', 'gudu123', ''),
(13, 'What is Use Case testing?', 'A Use Case in Testing is a brief description of a particular use of the software application by an actor or user. Use cases are made on the basis of user actions and the response of the software application to those user actions. It is widely used in developing test cases at system or acceptance level.', 'Rahul123', ''),
(14, 'What is manual Testing?', 'Manual testing is testing of the software where tests are executed manually by a QA Analyst. It is performed to discover bugs in software under development.\r\n\r\nIn Manual testing, the tester checks all the essential features of the given application or software. In this process, the software testers execute the test cases and generate the test reports without the help of any automation software testing tools. \r\n\r\nIt is a classical method of all testing types and helps find bugs in software systems. It is generally conducted by an experienced tester to accomplish the software testing process.', '', ''),
(15, 'What is  automation Testing?', 'In Automated Software Testing, testers write code/test scripts to automate test execution. Testers use appropriate automation tools to develop the test scripts and validate the software. The goal is to complete test execution in a less amount of time.\r\n\r\nAutomated testing entirely relies on the pre-scripted test which runs automatically to compare actual result with the expected results. This helps the tester to determine whether or not an application performs as expected.\r\nyes', 'Rahul123', ''),
(18, 'What is recovery testing?', 'recovery of system of computer', '', ''),
(22, 'what are the types of software maintenance?', 'In a software lifetime, type of maintenance may vary based on its nature. It may be just a routine maintenance tasks as some bug discovered by some user or it may be a large event in itself based on maintenance size or nature. Following are some types of maintenance based on their characteristics:\r\n\r\nCorrective Maintenance - This includes modifications and updations done in order to correct or fix problems, which are either discovered by user or concluded by user error reports.\r\n\r\nAdaptive Maintenance - This includes modifications and updations applied to keep the software product up-to date and tuned to the ever changing world of technology and business environment.\r\n\r\nPerfective Maintenance - This includes modifications and updates done in order to keep the software usable over long period of time. It includes new features, new user requirements for refining the software and improve its reliability and performance.\r\n\r\nPreventive Maintenance - This includes modifications and updations to prevent future problems of the software. It aims to attend problems, which are not significant at this moment but may cause serious issues in future.', 'Rahul123', ''),
(24, 'What is deep learning?', 'Deep Learning is a computer software that mimics the network of neurons in a brain. It is a subset of machine learning based on artificial neural networks with representation learning. It is called deep learning because it makes use of deep neural networks. This learning can be supervised, semi-supervised or unsupervised.', 'Rahul123', ''),
(25, 'why is deep learning is important?', 'Deep learning is a powerful tool to make prediction an actionable result. Deep learning excels in pattern discovery (unsupervised learning) and knowledge-based prediction. Big data is the fuel for deep learning. When both are combined, an organization can reap unprecedented results in term of productivity, sales, management, and innovation.\r\n\r\nDeep learning can outperform traditional method. For instance, deep learning algorithms are 41% more accurate than machine learning algorithm in image classification, 27 % more accurate in facial recognition and 25% in voice recognition', 'Rahul123', ''),
(26, 'What is Junit ?', 'JUnit is an open source Unit Testing Framework for JAVA. It is useful for Java Developers to write and run repeatable tests. Erich Gamma and Kent Beck initially develop it. It is an instance of xUnit architecture. As the name implies, it is used for Unit Testing of a small chunk of code.\r\n\r\nDevelopers who are following test-driven methodology must write and execute unit test first before any code.\r\n\r\nOnce you are done with code, you should execute all tests, and it should pass. Every time any code is added, you need to re-execute all test cases and makes sure nothing is broken.', 'Rahul123', ''),
(27, 'what is selenium?', 'Selenium is a free (open-source) automated testing framework used to validate web applications across different browsers and platforms. You can use multiple programming languages like Java, C#, Python etc to create Selenium Test Scripts. Testing done using the Selenium testing tool is usually referred to as Selenium Testing.\r\n\r\nSelenium Software is not just a single tool but a suite of software, each piece catering to different Selenium QA testing needs of an organization. Here is the list of tools\r\n\r\nSelenium Integrated Development Environment (IDE)\r\nSelenium Remote Control (RC)\r\nWebDriver\r\nSelenium Grid', 'Rahul123', ''),
(28, 'History of operating system?', 'Operating systems were first developed in the late 1950s to manage tape storage\r\nThe General Motors Research Lab implemented the first OS in the early 1950s for their IBM 701\r\nIn the mid-1960s, operating systems started to use disks\r\nIn the late 1960s, the first version of the Unix OS was developed\r\nThe first OS built by Microsoft was DOS. It was built in 1981 by purchasing the 86-DOS software from a Seattle company\r\nThe present-day popular OS Windows first came to existence in 1985 when a GUI was created and paired with MS-DOS.', 'gudu123', ''),
(29, 'operating system', 'An Operating System (OS) is a software that acts as an interface between computer hardware components and the user. Every computer system must have at least one operating system to run other programs. Applications like Browsers, MS Office, Notepad Games, etc., need some environment to run and perform its tasks.', 'gudu123', ''),
(30, 'what is jsp?', 'Java Server Pages (JSP) is a technology which is used to develop web pages by inserting Java code into the HTML pages by making special JSP tags. The JSP tags which allow java code to be included into it are &lt;% ----java code----%&gt;.\r\n\r\nIt can consist of either HTML or XML (combination of both is also possible) with JSP actions and commands.\r\n\r\nIt can be used as HTML page, which can be used in forms and registration pages with the dynamic content into it.\r\n\r\nDynamic content includes some fields like dropdown, checkboxes, etc. whose value will be fetched from the database.\r\n\r\nThis can also be used to access JavaBeans objects.\r\n\r\nWe can share information across pages using request and response objects.\r\n\r\nJSP can be used for separation of the view layer with the business logic in the web application.', 'gudu123', ''),
(31, 'what is data warehousing?', 'A Data Warehousing (DW) is process for collecting and managing data from varied sources to provide meaningful business insights. A Data warehouse is typically used to connect and analyze business data from heterogeneous sources. The data warehouse is the core of the BI system which is built for data analysis and reporting.\r\n\r\nIt is a blend of technologies and components which aids the strategic use of data. It is electronic storage of a large amount of information by a business which is designed for query and analysis instead of transaction processing. It is a process of transforming data into information and making it available to users in a timely manner to make a difference.', 'gudu123', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`, `Email`) VALUES
(1, 'Rahul@123', '12345', 'Rahul', ''),
(2, 'Admin@123', '12345', 'Admin', ''),
(3, 'Rahul@3178', '827ccb0eea8a706c4c34a16891f84e7b', 'kumar', 'kmrrahul997@gmail.com'),
(4, 'Deeoak@3178', '827ccb0eea8a706c4c34a16891f84e7b', 'Deepak', 'rk2670382@gmail.com'),
(5, 'Rahul_kumar', '827ccb0eea8a706c4c34a16891f84e7b', 'Rahul', 'kmrrahul997@gmail.com'),
(6, 'Asif123', '827ccb0eea8a706c4c34a16891f84e7b', 'Asif', 'asif123@gmail.com'),
(7, 'None123', '827ccb0eea8a706c4c34a16891f84e7b', 'none', 'rk2670382@gmail.com'),
(8, 'Rahul123', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Rahul Kumar', 'kmrrahul997@gmail.com'),
(9, 'gudu123', '827ccb0eea8a706c4c34a16891f84e7b', 'gudu', 'asif123@gmail.com'),
(10, 'user3178', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'asif378@gmail.com'),
(11, 'user31', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'asif378@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
