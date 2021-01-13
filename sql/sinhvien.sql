-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2021 lúc 10:35 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsinhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ID` int(11) NOT NULL,
  `MaSV` varchar(10) NOT NULL,
  `TenSV` varchar(20) NOT NULL,
  `GioiTinh` varchar(5) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `MaLop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`ID`, `MaSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `SDT`, `DiaChi`, `MaLop`) VALUES
(1, '519CNT001', 'Đinh Văn Hữu', 'Nam', '1999-06-18', '0989496291', 'Hà Nội', '519CNT'),
(2, '519CNT002', 'Nguyễn Văn Toản', 'Nam', '2001-05-23', '0936274551', 'Thái Bình', '519CNT'),
(4, '519CNT004', 'Hoàng Sành Châu', 'Nam', '2000-06-23', '0387265151', 'Hà Giang', '519CNT'),
(5, '519CNT005', 'Nguyễn Minh Đức', 'Nam', '2001-12-04', '0713546171', 'Quảng Ninh', '519CNT'),
(6, '519CNT007', 'huutcha', 'Nữ', '2021-01-23', '0933472223', 'Hồ Chí Minh', '518CNT'),
(8, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(9, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(11, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(12, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(13, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(14, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(15, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(16, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(17, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(18, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(19, 'test', 'tsee', 'Nam', '2021-01-16', '0377911345', 'Hà Nội 1', '518CNT'),
(22, '519CNT008', 'huutcha1', 'Nữ', '2021-01-06', '0933472223', 'Hồ Chí Minh', '518CNT');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
