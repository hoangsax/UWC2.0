-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2023 lúc 07:41 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uwc2.0`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `CMND` int(12) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `tel` int(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `name`, `CMND`, `email`, `tel`, `password`, `address`, `gender`, `role`) VALUES
(1, 'Công Hoàng', 321321321, 'hoangsax123@gaaa.aa', 315615151, '111111', 'asldjhasdkasdhj', 'Male', 'Janitor'),
(2, 'Công Hoàng', 321321321, 'hoangsax123@gaaa.aa', 315615151, '111111', 'asldjhasdkasdhj', 'Male', 'Janitor'),
(3, 'asdasdasd', 123, 'hoangsax123@gmail.co', 0, '12312313', 'asdasdasd', 'female', 'collector'),
(5, 'ádasdad', 1231231, 'hoang.truong2702@hcmut.edu.vn', 0, '12312313', '12312312', 'female', 'collector'),
(6, 'ádasdad', 1231231, 'hoang.truong2702@hcmut.edu.vn', 0, '12312313', '12312312', 'female', 'collector'),
(7, 'ádasdad', 1231231, 'hoang.truong2702@hcmut.edu.vn', 3123123, '12312313', '12312312', 'female', 'collector'),
(8, 'ádasdad', 1231231, 'hoang.truong2702@hcmut.edu.vn', 3123123, '12312313', '12312312', 'female', 'collector'),
(9, 'Cong Hoang', 12312312, 'hoang.truong2702@hcmut.edu.vn', 3123123, '12312312312', 'ádafaskfa', 'male', 'janitor');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
