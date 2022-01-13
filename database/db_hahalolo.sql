-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 05:43 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_hahalolo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` int(11) NOT NULL,
  `ngaynhanphong` date NOT NULL,
  `ngaytraphong` date NOT NULL,
  `songuoi` int(11) NOT NULL,
  `yeucau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sothe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenchuthe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayhh` date NOT NULL,
  `macvc` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `makh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float DEFAULT NULL,
  `thue` float NOT NULL,
  `maphong` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quocgia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thanhpho` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `makhachsan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhachsan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `tienich` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`makhachsan`, `tenkhachsan`, `diachi`, `gia`, `tienich`, `anh`) VALUES
('MT1', 'Mường Thanh', 'Cửa Lò', 1000000, 'Đưa đón-Dịch vụ phòng-Gửi xe-Tiệc', ''),
('MT2', 'Mường Thanh', 'Hà Nội', 2000000, 'Đưa đón-Dịch vụ phòng-Gửi xe-Tiệc', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `maphong` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `makhachsan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenphong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `songuoi` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`maphong`, `makhachsan`, `tenphong`, `songuoi`, `gia`, `mota`) VALUES
('P-MT1-2', 'MT1', 'VIP2', 1, 2000000, ''),
('P-MT1-3', 'MT1', 'VIP3', 2, 2000000, ''),
('P-MT2-1', 'MT2', 'VIP1', 1, 2000000, ''),
('P-MT2-2', 'MT2', 'VIP2', 5, 10000000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ho` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `vaitro` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'KH',
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ho`, `ten`, `email`, `pass`, `status`, `vaitro`, `email_verification_link`, `email_verified_at`) VALUES
(1, 'Nguyễn Thị Phương', 'Thảo', 'phuongthao2104.na@gmail.com', '$2y$10$v8AZr0Imyp.DXmRRXjjqjO2jrpqLQ.Frgcn1C6zjtb8tmFUj0JHEO', 1, 'KH', 'ec96df749bdbd2548ea1028b95435a9d1585', '2022-01-01 10:39:40'),
(2, 'Đặng Khắc', 'Hùng', 'dangkhachung10k@gmail.com', 'Admin1@', 0, 'AD', '', NULL),
(3, 'Phương', 'Thảo', 'nguyenthiphuongthao@gmail.com', 'Admin2@', 0, 'AD', '', NULL),
(4, 'Nguyễn Anh', 'Quân', 'nguyenanhquan@gmail.com', 'Admin3@', 0, 'AD', '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `fk_hoadon_makhachhang` (`makh`),
  ADD KEY `fk_hoadon_maks` (`maphong`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`makhachsan`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maphong`),
  ADD KEY `fk_1` (`makhachsan`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `fk_hdp` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`),
  ADD CONSTRAINT `fk_hoadon_makhachhang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `fk_hoadon_maks` FOREIGN KEY (`maphong`) REFERENCES `khachsan` (`makhachsan`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`makhachsan`) REFERENCES `khachsan` (`makhachsan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
