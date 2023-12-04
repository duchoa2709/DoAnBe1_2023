-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 04, 2023 lúc 10:10 AM
-- Phiên bản máy phục vụ: 8.0.24
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql_webservice_m`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `id_detail` int NOT NULL,
  `name_product` varchar(259) NOT NULL,
  `qty_product` int NOT NULL,
  `price_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `manu_id` int NOT NULL,
  `manu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

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
  `id` mediumint NOT NULL,
  `user_id` mediumint NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `product_id` int NOT NULL,
  `order_id` mediumint NOT NULL,
  `quantity` int NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `tel_user` varchar(250) NOT NULL,
  `email_user` varchar(250) NOT NULL,
  `address_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `manu_id` int NOT NULL,
  `type_id` int NOT NULL,
  `price` int NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `feature` tinytext NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(6, 'Dien thoại', 1, 2, 5000000, 'garan.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:29:48'),
(7, 'Bánh mì', 1, 2, 30000, 'banhmi.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:30:18'),
(8, 'Trà đào', 2, 2, 30000000, 'tradao.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:31:41'),
(9, 'Trà chanh', 2, 3, 7000000, 'trachanh.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:32:52'),
(10, 'Cà phê', 2, 3, 600000, 'caphe.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:33:48'),
(11, 'Trà sữa', 2, 3, 1000000, 'trasua.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-11-10 16:59:38'),
(12, 'Trái cây tô', 3, 3, 2000000, 'traicay.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-11-10 17:00:24'),
(13, 'Kem matcha', 3, 4, 100000, 'kem.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-11-10 16:58:35'),
(43, 'Bánh Tráng', 3, 1, 290000, 'banhtrang.png', 'Đồ Ăn Nhanh Tiện Lợi', '0', '2023-05-02 04:21:46'),
(44, 'Cá Viên', 3, 1, 234234, 'cavien.png', 'Đồ Ăn Nhanh Tiện Lợi', '0', '2023-05-02 04:22:51'),
(46, 'Pizza', 1, 1, 234234, 'pizza.png', 'Đồ Ăn Nhanh Tiện Lợi', '0', '2023-05-30 09:44:27'),
(47, 'Gà rán', 4, 2, 5000000, 'garan.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:29:48'),
(48, 'Trà chanh', 4, 3, 7000000, 'trachanh.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-10-25 23:32:52'),
(49, 'Kem matcha', 4, 4, 100000, 'kem.png', 'Đồ Ăn Nhanh Tiện Lợi', '1', '2022-11-10 16:58:35'),
(50, 'Cá Viên', 4, 1, 1222222, 'cavien.png', 'Đồ Ăn Nhanh Tiện Lợi', '0', '2023-05-02 04:22:51'),
(51, 'sdfsdf', 2, 2, 1, 'maytinh1.jpg', 'Giúp Bạn Làm Công Việc Nhanh Chóng Và Truy Cập WebSite Nhanh Hơn binh thuong', '0', '2023-12-02 02:35:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int NOT NULL,
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

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
  `id` mediumint NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'toan', '202cb962ac59075b964b07152d234b70'),
(20, 'Admin1', '202cb962ac59075b964b07152d234b70'),
(32, 'toanase', '123'),
(33, '', ''),
(34, '', ''),
(35, '', ''),
(36, 'Admin', '0192023a7bbd73250516f069df18b500'),
(37, 'Duchoa', '823f4cfe556f95863e2df595c02b432f'),
(38, 'Adminn11', '202cb962ac59075b964b07152d234b70');

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
  MODIFY `manu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
