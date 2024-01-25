-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 17, 2023 lúc 05:57 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web-ban-hang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(11) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(0, 15, '2250', 1, '2023-07-12 21:06:47', 'tienmat', 0),
(0, 15, '5247', 1, '2023-07-12 21:35:18', 'chuyenkhoan', 0),
(0, 15, '5577', 1, '2023-07-12 22:06:53', 'tienmat', 0),
(0, 1, '4810', 1, '2023-07-13 00:45:18', 'tienmat', 1),
(0, 1, '1043', 1, '2023-07-13 02:57:33', 'tienmat', 1),
(0, 1, '9817', 1, '2023-07-13 02:58:09', 'tienmat', 1),
(0, 1, '9293', 1, '2023-07-13 03:53:43', 'chuyenkhoan', 1),
(0, 1, '2245', 1, '2023-07-13 03:56:02', 'tienmat', 1),
(0, 1, '3434', 1, '2023-07-13 03:56:43', 'chuyenkhoan', 1),
(0, 1, '9535', 1, '2023-07-13 04:01:28', 'tienmat', 1),
(0, 1, '6747', 1, '2023-07-13 04:10:12', 'tienmat', 1),
(0, 1, '5362', 1, '2023-07-13 04:11:35', 'tienmat', 1),
(0, 1, '2489', 1, '2023-07-13 04:13:40', 'tienmat', 1),
(0, 1, '9626', 1, '2023-07-13 04:15:35', 'tienmat', 1),
(0, 1, '97', 1, '2023-07-13 04:15:52', 'chuyenkhoan', 1),
(0, 1, '3609', 1, '2023-07-13 04:16:06', 'tienmat', 1),
(0, 1, '2042', 1, '2023-07-13 04:16:40', 'tienmat', 1),
(0, 1, '1689', 1, '2023-07-13 04:20:19', 'tienmat', 1),
(0, 1, '2643', 1, '2023-07-13 04:26:48', 'tienmat', 1),
(0, 1, '3577', 1, '2023-07-13 04:28:00', 'tienmat', 1),
(0, 1, '2512', 1, '2023-07-13 04:30:11', 'tienmat', 1),
(0, 1, '3677', 1, '', 'tienmat', 1),
(0, 1, '4315', 1, '', 'tienmat', 1),
(0, 1, '237', 1, '', 'tienmat', 1),
(0, 1, '1576', 1, '', 'tienmat', 1),
(0, 1, '280', 1, '', 'tienmat', 1),
(0, 1, '9860', 1, '', 'tienmat', 1),
(0, 1, '5452', 1, '', 'tienmat', 1),
(0, 1, '5028', 1, '', 'tienmat', 1),
(0, 1, '398', 1, '', 'tienmat', 1),
(0, 1, '4150', 1, '', 'tienmat', 1),
(0, 1, '3324', 1, '', 'tienmat', 1),
(0, 1, '8747', 1, '', 'tienmat', 1),
(0, 1, '7797', 1, '', 'tienmat', 1),
(0, 1, '4152', 1, '', 'chuyenkhoan', 1),
(0, 1, '1271', 1, '', 'tienmat', 1),
(0, 28, '3152', 1, '', 'tienmat', 0),
(0, 1, '7247', 1, '', 'tienmat', 1),
(0, 1, '3657', 1, '', 'tienmat', 1),
(0, 1, '4782', 1, '', 'tienmat', 1),
(0, 1, '2467', 1, '', 'tienmat', 1),
(0, 1, '7232', 1, '', 'tienmat', 1),
(0, 29, '6695', 1, '', 'tienmat', 0),
(0, 1, '773', 1, '', 'chuyenkhoan', 1),
(0, 1, '8248', 1, '', 'tienmat', 1),
(0, 31, '2679', 1, '', 'tienmat', 0),
(0, 1, '5189', 1, '', 'tienmat', 1),
(0, 34, '8261', 1, '', 'tienmat', 0),
(0, 34, '7126', 1, '', 'chuyenkhoan', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(54, '1048', 12, 1),
(55, '6315', 12, 1),
(56, '4559', 12, 1),
(57, '9554', 12, 1),
(58, '2844', 12, 1),
(59, '9487', 12, 1),
(60, '3066', 12, 1),
(61, '6962', 12, 1),
(62, '6140', 12, 1),
(63, '3872', 12, 1),
(64, '1161', 7, 1),
(65, '1323', 8, 2),
(66, '1323', 6, 3),
(67, '1323', 11, 2),
(68, '7661', 12, 1),
(69, '4714', 12, 1),
(70, '226', 19, 1),
(71, '9070', 19, 1),
(72, '9367', 19, 1),
(73, '9707', 11, 1),
(74, '9707', 19, 1),
(75, '2106', 15, 1),
(76, '9668', 15, 1),
(77, '2250', 19, 1),
(78, '5247', 19, 1),
(79, '5577', 7, 1),
(80, '4810', 11, 1),
(81, '1043', 11, 1),
(82, '9817', 11, 1),
(83, '9293', 7, 1),
(84, '9293', 18, 1),
(85, '2245', 19, 1),
(86, '3434', 8, 1),
(87, '9535', 19, 1),
(88, '6747', 19, 1),
(89, '5362', 16, 1),
(90, '2489', 19, 1),
(91, '9626', 19, 1),
(92, '97', 19, 1),
(93, '3609', 19, 1),
(94, '3609', 18, 1),
(95, '2042', 19, 1),
(96, '2042', 18, 1),
(97, '1689', 16, 1),
(98, '1689', 15, 1),
(99, '2643', 18, 1),
(100, '3577', 15, 1),
(101, '2512', 19, 1),
(102, '3677', 18, 1),
(103, '4315', 19, 2),
(104, '237', 19, 1),
(105, '1576', 19, 2),
(106, '280', 19, 2),
(107, '280', 10, 2),
(108, '9860', 19, 2),
(109, '5452', 10, 2),
(110, '5028', 19, 1),
(111, '398', 19, 1),
(112, '4150', 19, 2),
(113, '3324', 19, 2),
(114, '8747', 19, 2),
(115, '8747', 18, 1),
(116, '7797', 16, 1),
(117, '4152', 19, 1),
(118, '1271', 16, 1),
(119, '3152', 16, 1),
(120, '7247', 19, 1),
(121, '3657', 19, 1),
(122, '4782', 19, 1),
(123, '2467', 19, 1),
(124, '2467', 11, 1),
(125, '7232', 9, 1),
(126, '6695', 18, 1),
(127, '773', 19, 1),
(128, '8248', 13, 1),
(129, '2679', 18, 1),
(130, '5189', 18, 1),
(131, '8261', 13, 1),
(132, '8261', 18, 1),
(133, '7126', 16, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'chiti', 'chiti@gmail.com', 'tp bmt', '827ccb0eea8a706c4c34a16891f84e7b', '0332468763'),
(2, 'chiti', '', '', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(3, '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(4, '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(5, '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(24, '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(25, 'ti', 'cit2131@gmail.com', 'bmt', '827ccb0eea8a706c4c34a16891f84e7b', '123456'),
(26, 'ti', 'cit2131@gmail.com', 'bmt', '827ccb0eea8a706c4c34a16891f84e7b', '123456'),
(27, 'tii', 'cit2131@gmail.com', 'haf huy taapj', '827ccb0eea8a706c4c34a16891f84e7b', '12345678'),
(28, 'lò thái', 'lothai@gmail.com', 'bmt', '827ccb0eea8a706c4c34a16891f84e7b', '01236545286'),
(29, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(30, 'tii', 'chiti@gmail.com', 'bmt', '827ccb0eea8a706c4c34a16891f84e7b', '12'),
(31, 'tii', 'chiti@gmail.com', 'bmt', '827ccb0eea8a706c4c34a16891f84e7b', '12'),
(32, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(33, 'ti', 'citi22@gmail.com', 'bmt', '202cb962ac59075b964b07152d234b70', '123456'),
(34, 'toti', 'cit2131@gmail.com', 'bmt', '202cb962ac59075b964b07152d234b70', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Đàn Organ', 1),
(2, 'Đàn guitar', 2),
(3, 'Đàn Kalimba', 3),
(4, 'Sáo trúc', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'đàn guitar classic-FlamencoJX-STUDIO', '001', '2500000', 3, 'casio-px-120-.jpg', 'dasdas', 'dsadadasdas', 1, 1),
(2, 'Organ-Casio-CT-X800', '002', '35000000', 10, 'Organ-Casio-CT-X800.jpg', 'dasdasdas', 'dasdadasdas', 1, 1),
(3, 'organ-roland-e-x20', '003', '750000', 10, 'organ-roland-e-x20a.jpg', 'dasd', 'asdsadasdas', 1, 1),
(4, 'organ-Yamaha-PSR-S970', '004', '25000000', 3, 'organ-Yamaha-PSR-S970.jpg', 'dsad', 'asdasdasdas', 2, 1),
(5, 'Yamaha-PSR-SX700', '005', '29000000', 10, 'Yamaha-PSR-SX700.jpg', 'fsdfs', 'fsdfdsfsdf', 1, 1),
(6, 'Yamaha-PSR-SX700', '006', '250000', 3, 'Yamaha-PSR-SX700.jpg', 'dsdad', 'sadsadasd', 1, 1),
(7, 'organ-Yamaha-PSR-SX700-1', '007', '320000000', 5, 'organ-Yamaha-PSR-SX700-1.jpg', 'abcccxyz', 'abc', 1, 1),
(8, 'classic-FlamencoJX-STUDIO', '008', '4000000', 5, 'classic-FlamencoJX-STUDIO.jpg', 'abc', 'acb', 2, 2),
(9, 'dan-guitar-classic-Dallas-DL-Q39', '009', '4000000', 5, 'dan-guitar-classic-Dallas-DL-Q39.jpg', 'abc', 'abc', 2, 2),
(10, 'dan-guitar-classic-DallasDL-Q39CE', '010', '3000000', 5, 'dan-guitar-classic-DallasDL-Q39CE.jpg', 'abc', 'abc', 3, 2),
(11, 'Đàn guitar classicDallas DL', '011', '3500000', 5, 'Đàn guitar classicDallas DL.jpg', 'abc', 'abc', 3, 2),
(12, 'ốp lung 1', '001', '250000', 3, '1633710055_dayngoc.jpg', '', '', 1, 5),
(13, 'kalimba-gecko-k8ca', '013', '120000', 5, 'dan-kalimba-gecko-k8ca.jpg', 'đẹp trong tầm giá', 'đẹp trong tầm giá', 3, 3),
(14, 'kalimba-hluru', '014', '200000', 5, 'dan-kalimba-hluru-kb-sa.jpg', 'kalimba giá rẻ', 'kalimba giá rẻ', 3, 3),
(15, 'Kalimba-Hluru-KW-Resin4', '015', '200000', 5, 'Dan-Kalimba-Hluru-KW-Resin4.jpg', 'kalimba giá rẻ', 'giá rẻ đẹp trong tầm giá', 5, 3),
(16, 'kalimba-hluru-kx', '016', '200000', 5, 'dan-kalimba-hluru-kx.jpg', 'đẹp giá rẻ như cho', 'giá sinh viên', 5, 3),
(17, 'sáo nứa khắc hình', '017', '100000', 5, 'sáo nứa khắc hình.jpg', 'sáo đẹp giá rẻ', 'tiếng sáo như tiếng mẹ ru', 5, 4),
(18, 'sáo ống nứa nhiều tông', '018', '200000', 5, 'sáo ống nứa nhiều tông.jpg', 'sáo nứa nhiều tông hay và chuấn', 'giá sinh viên', 5, 4),
(19, 'sáo trúc tone C', '019', '100000', 5, 'sao-truc-tone-c-boc-dau-4-400x400.jpg', 'giá sinh viên', 'đẹp nhất trong tầm khúc', 5, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(1, 'Ti', '033246789', 'hà huy tập. tp Buôn Ma Thuột', 'Đi từ từ thôi nhưng mà phải giao đúng hạn nha.', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
