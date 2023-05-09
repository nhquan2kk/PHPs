-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2023 lúc 09:47 AM
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
-- Cơ sở dữ liệu: `quanlyhoc_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky_hoc`
--

CREATE TABLE `dang_ky_hoc` (
  `madangky` int(11) NOT NULL,
  `masv` varchar(10) NOT NULL,
  `mamon` varchar(2) NOT NULL,
  `namhk` varchar(4) NOT NULL,
  `ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_hoc`
--

INSERT INTO `dang_ky_hoc` (`madangky`, `masv`, `mamon`, `namhk`, `ghichu`) VALUES
(0, 'sv01', '2', '2023', 'khong'),
(0, 'sv05', '1', '2023', 'khong'),
(0, 'sv02', '3', '2023', 'khong'),
(0, 'sv03', '5', '2023', 'khong'),
(0, 'sv04', '4', '2023', 'khong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_dao_tao`
--

CREATE TABLE `khoa_dao_tao` (
  `makhoa` varchar(2) NOT NULL,
  `tenkhoa` varchar(50) NOT NULL,
  `dienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_dao_tao`
--

INSERT INTO `khoa_dao_tao` (`makhoa`, `tenkhoa`, `dienthoai`) VALUES
('1', 'CNTT', '0123456789'),
('2', 'su pham anh', '0123456789'),
('3', 'su pham toan', '0123456789'),
('4', 'Du lich', '0123456789'),
('5', 'Luat', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `mamon` varchar(2) NOT NULL,
  `makhoa` varchar(2) NOT NULL,
  `tenmon` varchar(30) NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_hoc`
--

INSERT INTO `mon_hoc` (`mamon`, `makhoa`, `tenmon`, `sotinchi`, `ghichu`) VALUES
('m1', '1', 'cau truc du lieu & giai thuat', 3, 'abc'),
('m2', '4', 'du lich hoc', 3, 'abc'),
('m3', '5,', 'luat dai cuong', 3, 'abc'),
('m4', '3', 'toan cao cap', 3, 'abc'),
('m5', '2', 'english basic', 3, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinh_vien`
--

CREATE TABLE `sinh_vien` (
  `masv` varchar(10) NOT NULL,
  `makhoa` varchar(2) NOT NULL,
  `lopbc` varchar(10) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `ngaysinh` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinh_vien`
--

INSERT INTO `sinh_vien` (`masv`, `makhoa`, `lopbc`, `hoten`, `ngaysinh`, `diachi`) VALUES
('sv1', '2', 'bc01', 'Nguyen Thi Anh Vien', '28/02/1996', 'Ha Noi'),
('sv2', '1', 'bc03', 'Nguyen Van Nam', '28/02/1996', 'Nghe An'),
('sv3', '4', 'bc04', 'Pham Minh Phuc', '28/02/1996', 'Nghe An'),
('sv4', '3', 'bc02', 'Nguyen Van An', '28/02/1996', 'Thanh Hoa'),
('sv5', '2', 'bc05', 'Nguyen Thi Minh Anh', '28/02/1996', 'Ha Tinh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoa_dao_tao`
--
ALTER TABLE `khoa_dao_tao`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`mamon`);

--
-- Chỉ mục cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD PRIMARY KEY (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
