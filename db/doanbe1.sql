-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 02:44 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanbe1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `id_detail` int(11) NOT NULL,
  `name_product` varchar(259) NOT NULL,
  `qty_product` int(11) NOT NULL,
  `price_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_product`
--

INSERT INTO `detail_product` (`id_detail`, `name_product`, `qty_product`, `price_product`) VALUES
(4, 'Điện Thoại 3', 1, 1000000),
(5, 'Sạc Không Dây', 4, 2500000),
(4, 'Điện Thoại 3', 1, 1000000),
(5, 'Sạc Không Dây', 4, 2500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(4, 'TOSHIBA  '),
(1, 'Samsung'),
(2, 'Sony '),
(3, 'Xiaomi Mi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `product_id` int(11) NOT NULL,
  `order_id` mediumint(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `tel_user` varchar(250) NOT NULL,
  `email_user` varchar(250) NOT NULL,
  `address_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `name_user`, `tel_user`, `email_user`, `address_user`) VALUES
(2, 'Do Nguyen Toan113', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(3, 'Do Nguyen Toan113', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(4, 'Do Nguyen Toan', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(5, 'Do Nguyen Toan', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(6, 'Do Nguyen Toan', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(7, 'Do Nguyen Toan', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak'),
(8, 'Do Nguyen Toan teo anh em', '0344842232', 'donguyentoan2003@gmail.com', 'xom 1 thon 13 dak lak');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `feature` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(6, 'Dien thoại', 1, 2, 5000000, '', 'Đồ Ăn Nhanh Tiện Lợib', 0, '2023-12-05 09:22:47'),
(7, 'Bánh mì', 1, 2, 30000, 'banhmi.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-10-25 23:30:18'),
(8, 'Trà đào', 2, 2, 30000000, 'tradao.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-10-25 23:31:41'),
(9, 'Trà chanh', 2, 3, 7000000, 'trachanh.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-10-25 23:32:52'),
(10, 'Cà phê', 2, 3, 600000, 'caphe.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2023-12-05 08:40:00'),
(11, 'Trà sữa', 2, 3, 1000000, 'trasua.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-11-10 16:59:38'),
(12, 'Trái cây tô', 3, 3, 2000000, 'traicay.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-11-10 17:00:24'),
(13, 'Kem matcha', 3, 4, 100000, 'kem.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-11-10 16:58:35'),
(43, 'Bánh Tráng', 3, 1, 290000, 'banhtrang.png', 'Đồ Ăn Nhanh Tiện Lợi', 0, '2023-05-02 04:21:46'),
(44, 'Cá Viên', 3, 1, 234234, 'cavien.png', 'Đồ Ăn Nhanh Tiện Lợi', 0, '2023-05-02 04:22:51'),
(46, 'Pizza', 1, 1, 234234, 'pizza.png', 'Đồ Ăn Nhanh Tiện Lợi', 0, '2023-05-30 09:44:27'),
(47, 'Gà rán', 4, 2, 5000000, 'garan.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-10-25 23:29:48'),
(48, 'Trà chanh', 4, 3, 7000000, 'trachanh.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-10-25 23:32:52'),
(49, 'Kem matcha', 4, 4, 100000, 'kem.png', 'Đồ Ăn Nhanh Tiện Lợi', 1, '2022-11-10 16:58:35'),
(50, 'Cá Viên', 4, 1, 1222222, 'cavien.png', 'Đồ Ăn Nhanh Tiện Lợi', 0, '2023-05-02 04:22:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại  '),
(2, 'MacBook Air'),
(3, 'Máy Tính Bảng'),
(4, 'TiVi'),
(5, 'Máy Giặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` mediumint(9) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(12) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(3, 'toan', '202cb962ac59075b964b07152d234b70', 'user'),
(20, 'Admin1', '202cb962ac59075b964b07152d234b70', 'user'),
(36, 'Admin', '0192023a7bbd73250516f069df18b500', 'user'),
(37, 'Duchoa', '823f4cfe556f95863e2df595c02b432f', 'user'),
(38, 'Adminn11', '202cb962ac59075b964b07152d234b70', 'user'),
(39, 'hoaphd27.df@gmail.com', '9e688cd052098bf14734e7dcc057faa3', 'user'),
(40, 'hoaphd27.df@gmail.com', '9e688cd052098bf14734e7dcc057faa3', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD KEY `id_detail` (`id_detail`);

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
