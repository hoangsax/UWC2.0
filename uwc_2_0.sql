-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 12:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uwc2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `ID` int(11) NOT NULL,
  `Owner_ID` int(11) NOT NULL,
  `Task_ID` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcp`
--

CREATE TABLE `mcp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Location` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcp`
--

INSERT INTO `mcp` (`ID`, `Name`, `Capacity`, `Status`, `Location`) VALUES
(1, 'MCP1', 50, 50, '27, đường số 6, phường Linh Xuân, thành phố Thủ Đức, TP. Hồ Chí Minh'),
(2, 'MCP 2', 600, 80, '01, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(3, 'MCP 3', 500, 100, '02, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(4, 'MCP 4', 600, 10, '03, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(5, 'MCP 6\r\n', 40, 30, '03, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(6, 'MCP 4', 70, 25, '04, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM'),
(7, 'MCP 5', 90, 20, '05, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID` int(11) NOT NULL,
  `Content` varchar(3000) NOT NULL,
  `Receiver_ID` int(11) NOT NULL,
  `Sender_ID` int(11) NOT NULL,
  `Task_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ID` int(11) NOT NULL,
  `Begin_location` varchar(800) NOT NULL,
  `End_location` varchar(800) NOT NULL,
  `MCP_list` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ID`, `Begin_location`, `End_location`, `MCP_list`, `Name`) VALUES
(1, '1, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '300, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '1,2,3', 'Route 1'),
(2, '1, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '500, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '4,5,6', 'Route 2');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `Staff_ID` int(11) NOT NULL,
  `MCP_List` varchar(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Assign_Date` date NOT NULL,
  `Start` varchar(11) NOT NULL,
  `End` varchar(11) DEFAULT NULL,
  `Vehicle_ID` int(11) NOT NULL,
  `Route_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID`, `Staff_ID`, `MCP_List`, `Status`, `Assign_Date`, `Start`, `End`, `Vehicle_ID`, `Route_ID`) VALUES
(1, 1, '', 'Completed', '0000-00-00', '10:00AM', '12:00PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `birthday`, `address`, `email`, `phone`, `gender`, `password`, `type`) VALUES
(1, 'asdasdasd', '', '0000-00-00', 'ádafaskfa', '123@cc.cc', '010203040512', 'male', '', 'Collector'),
(2, 'Hoàng Provjp', '', '0000-00-00', 'TP Nha Trang', 'hoangsax123@gmail.co', '01020304051', 'male', '', 'Collector'),
(3, 'Cong Hoang', '', '0000-00-00', 'asdasdasd', '123@cc.cc1', '1231231', 'male', '', 'Janitor'),
(20, 'Quản trị viên', '', '0000-00-00', 'TP Nha Trang', 'admin@admin.com', '102030405', '', '102030405', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Vehicle_Number` varchar(200) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`ID`, `Name`, `Vehicle_Number`, `Weight`, `Capacity`, `Type`) VALUES
(1, 'Truck 1', '123', 500, 700, 'Truck'),
(2, 'Truck 2', '1230', 400, 600, 'Truck'),
(3, 'Truck 3', '12593', 1000, 100, 'Truck'),
(4, 'Troller 1', '562215', 50, 30, 'Troller'),
(5, 'Troller 2', '5963225', 40, 60, 'Troller'),
(6, 'Troller 3', '36632525', 20, 50, 'Troller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Indexes for table `mcp`
--
ALTER TABLE `mcp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Receiver_ID` (`Receiver_ID`),
  ADD KEY `Sender_ID` (`Sender_ID`),
  ADD KEY `Task_ID` (`Task_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Staff_ID` (`Staff_ID`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`),
  ADD KEY `Route_ID` (`Route_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mcp`
--
ALTER TABLE `mcp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calender`
--
ALTER TABLE `calender`
  ADD CONSTRAINT `calender_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`Receiver_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`Sender_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`Task_ID`) REFERENCES `task` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`Staff_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicle` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_4` FOREIGN KEY (`Route_ID`) REFERENCES `route` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
