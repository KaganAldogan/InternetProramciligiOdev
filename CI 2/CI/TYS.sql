-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2022 at 07:30 PM
-- Server version: 10.4.24-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmg_app2`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups_tbl`
--

CREATE TABLE `groups_tbl` (
  `id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups_tbl`
--

INSERT INTO `groups_tbl` (`id`, `group_name`) VALUES
(1, 'Google Developer Student Clubs'),
(2, 'Huawei Student Developers'),
(3, 'Altogic Developer Communities'),
(4, 'IEEE');

-- --------------------------------------------------------

--
-- Table structure for table `teams_tbl`
--

CREATE TABLE `teams_tbl` (
  `id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_group_id` int(11) NOT NULL,
  `team_persons` int(11) NOT NULL,
  `team_task_desc` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams_tbl`
--

INSERT INTO `teams_tbl` (`id`, `team_name`, `team_group_id`, `team_persons`, `team_task_desc`, `createdAt`) VALUES
(1, 'GDSC ADU', 1, 5, 'Google Techs', '2022-04-05 16:16:08'),
(2, 'HSD Aydin', 2, 7, 'Huawei Techs', '2022-04-05 16:16:08'),
(3, 'ADC Aydin', 3, 9, 'Altogic Techs', '2022-04-05 16:18:38'),
(4, 'IEEE', 4, 6, 'Electronic Electronics', '2022-04-05 16:18:38'),
(7, 'GDSC Ayd?n', 1, 7, 'Google Techs', '2022-04-05 16:26:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups_tbl`
--
ALTER TABLE `groups_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams_tbl`
--
ALTER TABLE `teams_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups_tbl`
--
ALTER TABLE `groups_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams_tbl`
--
ALTER TABLE `teams_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
