-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 08:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_m_system16`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `Batch_ID` int(11) NOT NULL,
  `Teacher_ID` int(11) DEFAULT NULL,
  `Class_shift` varchar(100) DEFAULT NULL,
  `Days` varchar(100) DEFAULT NULL,
  `Start_Time` varchar(100) DEFAULT NULL,
  `End_Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`Batch_ID`, `Teacher_ID`, `Class_shift`, `Days`, `Start_Time`, `End_Time`) VALUES
(101, 8002, '07 (BM)', 'Sat/Mon/Wed', '9:00 am', '10:20 am'),
(102, 9011, '08 (BM)', 'Sat/Mon/Wed', '10:30 am', '11:50 am'),
(103, 9012, '09 (BM)', 'Sat/Mon/Wed', '6:00 pm', '7:20 pm'),
(201, 8002, '07 (EM)', 'Sun/Tues/Thurs', '9:00 am', '10:20 am'),
(202, 9011, '08 (EM)', 'Sun/Tues/Thurs', '10:30 am', '11:50 am'),
(203, 9012, '09 (EM)', 'Sun/Tues/Thurs', '6:00 pm', '7:20 pm');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `User_ID` int(11) DEFAULT NULL,
  `Student_ID` int(11) NOT NULL,
  `Batch_ID` int(11) DEFAULT NULL,
  `Class_shift` varchar(100) DEFAULT NULL,
  `Fees` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`User_ID`, `Student_ID`, `Batch_ID`, `Class_shift`, `Fees`) VALUES
(25, 1025, 102, '08 (BM)', 1500),
(21, 2021, 103, '09 (BM)', 2000),
(22, 2022, 201, '07 (EM)', 2000),
(23, 2023, 202, '08 (EM)', 2000),
(26, 2026, 201, '07 (EM)', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `User_ID` int(11) DEFAULT NULL,
  `Teacher_ID` int(11) NOT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`User_ID`, `Teacher_ID`, `Salary`) VALUES
(13, 8002, 15000),
(11, 9011, 20000),
(12, 9012, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Username`, `Password`, `Email`) VALUES
(1, 'Rahad Uddin Samir', 'adminchan', 'admin@gmail.com'),
(3, 'Samir Uddin', 'samirStudent', 'samir@gmail.com'),
(4, 'Shihab Shahriar', 'shihabStudent', 'shihab@gmail.com'),
(10, 'Rahad1998', '12345', 'rahadrakib4@gmail.com'),
(11, 'Arafat Bin Amin', 'ArafatTeacher', 'arafat@gmail.com'),
(12, 'Monthasir Delwar Afnan', 'AfnanTeacher', 'afnan1999@gmail.com'),
(13, 'Rakib Hasan Rahad', 'rakibteacher', 'rahad@gmail.com'),
(21, 'Navid Alvee', 'AlveeStudent', 'alvee@gmail.com'),
(22, 'Sifat Nayna', 'naynaStudent', 'nayna@gmail.com'),
(23, 'Samiha Dilshad', 'samihaStudent', 'samiha@gmail.com'),
(24, 'Abidur Rahman', 'abidurStudent', 'abidur@gmail.com'),
(25, 'Rashed Faruque', 'rashedStudent', 'rashed@gmail.com'),
(26, 'Fardin Rahman', 'fardinStudent', 'fardin@gmail.com'),
(152, 'Rahad99', '12345', 'rahad33@gmail.com'),
(365, 'rahad789', '12345', 'rahad908@gmail.com'),
(433, 'Rahad099', '12345', 'rahad099@gmail.com'),
(1236, 'rahad7898', '12345', 'adminsssss@gmail.com'),
(1458, 'tousifsir07', '12345', 'tousifsir07@gmail.com'),
(1947, 'DipjolSamir08', '12345', 'dipjolsamir08@gmail.com'),
(1995, 'Arkok', 'arkoStudent', 'akro@gmail.com'),
(9552, 'Rahad12345', '12345', 'rahad98@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`Batch_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Batch_ID` (`Batch_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachers` (`Teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`Batch_ID`) REFERENCES `batch` (`Batch_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
