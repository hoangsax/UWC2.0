-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2023 lúc 10:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uwc_2_0`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `back officer`
--

CREATE TABLE `back officer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `BirthDay` date NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `back officer`
--

INSERT INTO `back officer` (`ID`, `Name`, `BirthDay`, `Address`, `Email`, `Phone`, `Gender`, `Image`) VALUES
(1, 'Trần Văn A', '1995-09-01', 'Phường Thảo Điền, quận 2, TP. Hồ Chí Minh', 'nva@gmail.com', '1237825256', 'Nam', ''),
(2, 'Phạm Thị C', '1999-12-16', 'Phường 7, quận 3, TP. Hồ Chí Minh', 'ptc@gmail.com', '6589658959', 'Nữ', ''),
(3, 'Lê Văn D', '1980-09-10', 'Phường Cầu Kho, quận 1, TP. Hồ Chí Minh', 'lvd@gmail.com', '5574252247', 'Nam', ''),
(4, 'Nguyễn Thị M', '1985-04-10', 'Phường Bến Thành, quận 1, TP. Hồ Chí Minh', 'ntm@gmail.com', '5689265512', 'Nữ', ''),
(5, 'Hồ Văn C', '1998-01-01', 'Phường 7, quận 3, TP. Hồ Chí Minh', 'hvc@gmail.com', '5353668300', 'Nam', ''),
(6, 'Lê Văn N', '1999-06-01', 'Phường Thủ Thiêm, quận 2, TP. Hồ Chí Minh', 'lvn@gmail.com', '6455825521', 'Nam', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calender`
--

CREATE TABLE `calender` (
  `ID` int(11) NOT NULL,
  `Owner_ID` int(11) NOT NULL,
  `Task_ID` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mcp`
--

CREATE TABLE `mcp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Location` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mcp`
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
-- Cấu trúc bảng cho bảng `notification`
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
-- Cấu trúc bảng cho bảng `route`
--

CREATE TABLE `route` (
  `ID` int(11) NOT NULL,
  `Begin_location` varchar(800) NOT NULL,
  `End_location` varchar(800) NOT NULL,
  `MCP_list` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `route`
--

INSERT INTO `route` (`ID`, `Begin_location`, `End_location`, `MCP_list`, `Name`) VALUES
(1, '1, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '300, đường số 6, phường Linh Xuân, TP Thủ Đức, TPHCM', '1,2,3', 'Route 1'),
(2, '1, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '500, đường số 8, phường Linh Xuân, TP Thủ Đức, TPHCM', '4,5,6', 'Route 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `ID` int(11) NOT NULL,
  `Staff_ID` int(11) NOT NULL,
  `MCP_ID` int(11) DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  `Assign_Date` date NOT NULL,
  `Duration` int(11) NOT NULL,
  `Vehicle_ID` int(11) NOT NULL,
  `Route_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `birthday`, `address`, `email`, `phone`, `gender`, `password`, `type`) VALUES
(4, 'Đỗ Văn H', '', '1995-04-10', 'Quận Bình Tân, TPHCM', 'dvh@gmail.com', '08080909', 'Nam', '08080909', 'Janitor'),
(13, 'Trần Đoàn Đức Huy', '', '0000-00-00', '', 'tddh@gmail.com', '0901406434', '', '123', ''),
(14, 'Nguyễn Văn A', '', '0000-00-00', '', 'nva@gmail.com', '123456789', '', '0000', ''),
(15, 'Trần Thị B', '', '0000-00-00', '', 'ttb@gmail.com', '88889999', '', '88889999', ''),
(18, 'Trần Đức B', '', '0000-00-00', 'TP Bình Dương', 'tdb@gmail.com', '1111122222', '', '1111122222', 'Collector'),
(19, 'Quản trị viên', '', '0000-00-00', 'TP Nha Trang', 'admin@admin.com', '0102030405', '', '0102030405', 'Admin'),
(20, 'Quản trị viên', '', '0000-00-00', 'TP Nha Trang', 'admin@admin.com', '102030405', '', '102030405', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicle`
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
-- Đang đổ dữ liệu cho bảng `vehicle`
--

INSERT INTO `vehicle` (`ID`, `Name`, `Vehicle_Number`, `Weight`, `Capacity`, `Type`) VALUES
(1, 'Truck 1', '123', 500, 700, 'Truck'),
(2, 'Truck 2', '1230', 400, 600, 'Truck'),
(3, 'Truck 3', '12593', 1000, 100, 'Truck'),
(4, 'Troller 1', '562215', 50, 30, 'Troller'),
(5, 'Troller 2', '5963225', 40, 60, 'Troller'),
(6, 'Troller 3', '36632525', 20, 50, 'Troller');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `back officer`
--
ALTER TABLE `back officer`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Chỉ mục cho bảng `mcp`
--
ALTER TABLE `mcp`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Receiver_ID` (`Receiver_ID`),
  ADD KEY `Sender_ID` (`Sender_ID`),
  ADD KEY `Task_ID` (`Task_ID`);

--
-- Chỉ mục cho bảng `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MCP_ID` (`MCP_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`),
  ADD KEY `Route_ID` (`Route_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `back officer`
--
ALTER TABLE `back officer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `calender`
--
ALTER TABLE `calender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `mcp`
--
ALTER TABLE `mcp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `calender`
--
ALTER TABLE `calender`
  ADD CONSTRAINT `calender_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`Receiver_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`Sender_ID`) REFERENCES `back officer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`Task_ID`) REFERENCES `task` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`MCP_ID`) REFERENCES `mcp` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`Staff_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicle` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_4` FOREIGN KEY (`Route_ID`) REFERENCES `route` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
