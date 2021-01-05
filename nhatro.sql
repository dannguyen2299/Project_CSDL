-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2021 lúc 04:09 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhatro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuphong`
--

CREATE TABLE `chuphong` (
  `MaCP` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Ten` varchar(40) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SDT` int(10) NOT NULL,
  `CMND` int(10) NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `UserPass` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuphong`
--

INSERT INTO `chuphong` (`MaCP`, `Ten`, `GioiTinh`, `SDT`, `CMND`, `Username`, `UserPass`) VALUES
('CP01', 'Pham Tuan Anh', 'Nam', 2147483647, 25841313, 'tuananh@gmail.com', '123456'),
('CP02', 'Dan', 'Nam', 372303381, 152268261, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkidichvu`
--

CREATE TABLE `dangkidichvu` (
  `ID` int(10) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `MaKhachHang` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangkidichvu`
--

INSERT INTO `dangkidichvu` (`ID`, `MaDV`, `MaKhachHang`) VALUES
(0, 0, 'KH00'),
(1, 0, 'KH01'),
(2, 1, 'KH01'),
(3, 1, 'KH00'),
(4, 2, 'KH00'),
(5, 0, 'KH02'),
(6, 1, 'KH02'),
(7, 2, 'KH02'),
(8, 0, 'KH03'),
(9, 1, 'KH03'),
(10, 2, 'KH03'),
(11, 0, 'KH04'),
(12, 1, 'KH04'),
(13, 2, 'KH04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` int(11) NOT NULL,
  `TenDV` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `DonGia` decimal(18,0) NOT NULL,
  `DonViTinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`MaDV`, `TenDV`, `DonGia`, `DonViTinh`) VALUES
(0, 'Vệ sinh', '30', '/nguoi'),
(1, 'Giữ xe', '100', '/nguoi'),
(2, 'internet', '60', '/nguoi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ten` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SDT` int(10) NOT NULL,
  `CMND` int(10) NOT NULL,
  `Trangthaitro` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `Ten`, `GioiTinh`, `SDT`, `CMND`, `Trangthaitro`) VALUES
('KH00', ' Phạm Tuấn Anh', 'Nam', 366532866, 152268261, 1),
('KH01', 'Nguyễn Viết Dân', 'Nam', 372303381, 1872346, 1),
('KH02', 'Lê Thanh Hải', 'Nam', 368467251, 2147483647, 1),
('KH03', 'Nguyễn Đình Nam', 'Nam', 445564564, 1872346, 2),
('KH04', 'Trần Thị Thu', 'Nữ', 78132465, 745456, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `MaKV` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenKV` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT 'Noname'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`MaKV`, `TenKV`) VALUES
('KV00', 'Hai Bà Trưng'),
('KV01', 'Nam Từ Niêm'),
('KV02', 'Hà Đông'),
('KV03', 'Thanh Xuân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongtro`
--

CREATE TABLE `phongtro` (
  `MaPT` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `MaKV` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `SoPhong` int(11) DEFAULT NULL,
  `Tang` int(2) NOT NULL,
  `DienTich` decimal(4,2) NOT NULL,
  `GiaTienThue` int(11) NOT NULL,
  `SLToiDa` int(2) NOT NULL,
  `SLHienTai` int(2) NOT NULL,
  `DiaChi` varchar(60) NOT NULL,
  `TrangThaiPhong` varchar(5) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'Còn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongtro`
--

INSERT INTO `phongtro` (`MaPT`, `MaKV`, `SoPhong`, `Tang`, `DienTich`, `GiaTienThue`, `SLToiDa`, `SLHienTai`, `DiaChi`, `TrangThaiPhong`) VALUES
('PT00', 'KV00', 301, 3, '15.50', 1500000, 4, 2, '101 Dai La', 'còn'),
('PT01', 'KV00', 401, 4, '15.50', 1500000, 4, 1, '104 Dai La', 'còn'),
('PT02', 'KV01', 411, 4, '16.50', 1500000, 4, 0, '402', 'hết'),
('PT03', 'KV02', 511, 5, '15.50', 1500000, 4, 1, '501 Trương Định', 'còn'),
('PT04', 'KV03', 101, 1, '15.50', 1500000, 4, 0, '867 Thái Hà', 'hết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlihopdong`
--

CREATE TABLE `quanlihopdong` (
  `MaHopDong` int(11) NOT NULL,
  `MaKhachHang` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `MaPT` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `TGThue` int(11) NOT NULL,
  `NgaySuDung` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `TienThue` decimal(12,0) NOT NULL,
  `TrangThaiHD` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlihopdong`
--

INSERT INTO `quanlihopdong` (`MaHopDong`, `MaKhachHang`, `MaPT`, `TGThue`, `NgaySuDung`, `NgayKetThuc`, `TienThue`, `TrangThaiHD`) VALUES
(0, 'KH00', 'PT00', 6, '2020-01-01 00:00:00', '2020-06-01 00:00:00', '9000000', 1),
(1, 'KH01', 'PT00', 6, '2020-01-01 00:00:00', '2020-06-01 00:00:00', '9000000', 1),
(2, 'KH02', 'PT01', 6, '2020-01-01 00:00:00', '2020-06-01 00:00:00', '9000000', 1),
(8, 'KH02', 'PT03', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '9000000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlyphieuthu`
--

CREATE TABLE `quanlyphieuthu` (
  `MaPhieuThuDV` int(11) NOT NULL,
  `MaKhachHang` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `MaPT` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `GhiChu` varchar(40) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Tien` decimal(18,0) NOT NULL,
  `NgayThu` datetime NOT NULL,
  `TrangThaiPhieu` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'Chưa thu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlyphieuthu`
--

INSERT INTO `quanlyphieuthu` (`MaPhieuThuDV`, `MaKhachHang`, `MaPT`, `GhiChu`, `Tien`, `NgayThu`, `TrangThaiPhieu`) VALUES
(0, 'KH00', 'PT00', 'khong', '2000000', '0000-00-00 00:00:00', 'thu'),
(1, 'KH01', 'PT00', 'khong', '2000000', '0000-00-00 00:00:00', 'thu'),
(2, 'KH02', 'PT01', 'khong', '2000000', '0000-00-00 00:00:00', 'thu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuphong`
--
ALTER TABLE `chuphong`
  ADD PRIMARY KEY (`MaCP`),
  ADD UNIQUE KEY `UNIQUE_CHUPHONG_ACC` (`Username`);

--
-- Chỉ mục cho bảng `dangkidichvu`
--
ALTER TABLE `dangkidichvu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaDV` (`MaDV`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`),
  ADD UNIQUE KEY `UNIQUE_DICHVU` (`TenDV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`MaKV`);

--
-- Chỉ mục cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  ADD PRIMARY KEY (`MaPT`),
  ADD KEY `MaKV` (`MaKV`);

--
-- Chỉ mục cho bảng `quanlihopdong`
--
ALTER TABLE `quanlihopdong`
  ADD PRIMARY KEY (`MaHopDong`),
  ADD KEY `MaPT` (`MaPT`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `quanlyphieuthu`
--
ALTER TABLE `quanlyphieuthu`
  ADD PRIMARY KEY (`MaPhieuThuDV`),
  ADD KEY `MaPT` (`MaPT`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangkidichvu`
--
ALTER TABLE `dangkidichvu`
  ADD CONSTRAINT `dangkidichvu_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `dangkidichvu_ibfk_2` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`);

--
-- Các ràng buộc cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  ADD CONSTRAINT `phongtro_ibfk_1` FOREIGN KEY (`MaKV`) REFERENCES `khuvuc` (`MaKV`);

--
-- Các ràng buộc cho bảng `quanlihopdong`
--
ALTER TABLE `quanlihopdong`
  ADD CONSTRAINT `quanlihopdong_ibfk_1` FOREIGN KEY (`MaPT`) REFERENCES `phongtro` (`MaPT`),
  ADD CONSTRAINT `quanlihopdong_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `quanlyphieuthu`
--
ALTER TABLE `quanlyphieuthu`
  ADD CONSTRAINT `quanlyphieuthu_ibfk_1` FOREIGN KEY (`MaPT`) REFERENCES `phongtro` (`MaPT`),
  ADD CONSTRAINT `quanlyphieuthu_ibfk_3` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
