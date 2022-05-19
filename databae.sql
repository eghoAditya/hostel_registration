-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 06:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shubee`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(100) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `SGPA` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `regno`, `name`, `email`, `branch`, `semester`, `address`, `phone`, `gender`, `SGPA`, `state`) VALUES
(16, '2k22en012', 'ananya', 'ananya@pil.com', 'ENE', 1, 'Mumbai', '9455147674', 'F', '5.2', 'Maharashtra'),
(17, '2k19mc021', 'arahant', 'arahant@ib.in', 'MC', 5, 'Dun', '8979312224', 'M', '8.3', 'Uttarakhand'),
(18, '2k19mc029', 'ayush', 'ayush@wrk.c', 'MC', 5, 'Varanasi', '7677858354', 'M', '8', 'UP'),
(19, '2k19ce030', 'aryaman', 'aryam@lt.com', 'CE', 5, 'Jammu', '908987643', 'M', '7.5', 'JnK'),
(20, '2k19hu045', 'Hoelly', 'Ho@yaface.in', '', 6, 'Ratnagiri', '2525252421', 'F', '7.8', 'UP'),
(22, '2k19mc121', 'brij', 'brijad@jml.com', 'MC', 6, 'Bhopal', '', '', '5.8', 'MP'),
(23, '2k18se011', 'Sam', 'Sam@g.com', 'se', 8, 'Delhi', '9089876477', 'M', '', 'New Delhi'),
(24, '2k19it001', 'Aayan', 'aayee@we.in', 'it', 6, 'Shimla', '5698135147', 'M', '6.7', 'HP'),
(26, '2k19ae088', 'Dewansh', 'Dew@pvt.com', 'AE', 6, '', '9776006634', 'M', '6.9', 'Uttarakhand'),
(27, '2k19mc079', 'Pranav', 'pk@rm.com', 'MC', 6, '', '8979448037', 'M', '7', 'Uttarakhand'),
(28, '2k19mc008', 'Utkarsh', 'rawat@aviator.com', 'MC', 6, 'Kinnaur', '', 'M', '8.1', 'HP'),
(29, '2k19me044', 'Tapasya', 'Tap@datas.com', 'ME', 6, 'Patna', '9089875675', 'f', '8', 'Bihar'),
(30, '2k19me001', 'Aarshya', 'Aru@w.com', 'ME', 4, '', '', 'F', '6', 'Punjab'),
(31, '2k19mam012', 'ishita', 'kjkn@f.col', 'MAM', 6, 'Dehradun', '5698035147', 'f', '5.8', 'Uttarakhand'),
(32, '2k20mc098', 'Dhwani', 'Datt@ep.com', 'MC', 4, 'Manali', '9455145543', 'f', '5.6', 'HP'),
(33, '2k19mc086', 'shubanghni', 'adsa@b.m', 'MC', 6, 'dad', '', 'f', '', 'JnK'),
(34, '2k19mc125', 'Shivi', 'adasda@dfv.nim', 'MC', 6, '', '5698235140', 'f', '', ''),
(35, '2k19mc112', 'Maruk', 'ytn@f.col', 'MC', 6, '', '', '', '', 'Haryana'),
(36, '2k19mam077', 'Simba', 'sim@w.m', 'MAM', 6, 'Dehradun', '', '', '2', 'Uttarakhand'),
(37, '2k19mc010', 'boka', 'adasda@dfv.ni', 'MC', 6, 'addad ', '', 'M', '9', 'Tripura'),
(38, '2k19mc110', 'taran', 'a@g.c', 'MC', 0, '', '', '', '6', 'Tripura'),
(39, '2k19mc017', 'simmi', 'ss@g.l', 'MC', 2, 'dat', '', 'f', '6.6', 'Rajasthan'),
(40, '2k19me123', 'tanya', 'atya@oe.in', 'ME', 6, '', '', 'f', '5.8', 'Tripura'),
(41, '2k19mc070', 'Jojo', 'jkk@g.ik', 'MC', 0, 'ADSAD ', '', '', '7', 'Assam'),
(42, '2K19BT77', 'Ram', 'ramu@we.it', 'BT', 6, 'Sirai', '', 'M', '5', 'UP'),
(43, '2k19/bt/033', 'harshit', 'harshit@mail.com', 'bio tech', 6, 'hazaribagh', '6951254874', 'M', '8.1', 'Jharkhand'),
(50, '2K19MC0056', 'ADASWSD', 'MN@M.C', 'bvf', 8, 'CHANDIGARH', '5698235147', 'M', '5.8', 'PUNJAB'),
(51, '2K19/MC/087', 'KLFJLKAJF', 'HJKHADKJA@H.C', 'NB', 5, 'dad', '7845215', 'adada', '9', 'ffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
