-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 10:42 AM
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
(4, 'TOSHIBA  a'),
(1, 'Samsung'),
(2, 'Sony '),
(3, 'Xiaomi Mi'),
(12, 'Apple');

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
(61, 'Điện thoại iPhone 15 Pro Max 256GB', 12, 1, 33890, '../public/upload/1701934681_iphone-15-pro-max-blue-thumbnew-600x600.jpg.jpg', 'Diện mạo đẳng cấp và cực kỳ sang trọng iPhone 15 Pro Max tiếp tục sẽ là một chiếc điện thoại có màn hình và mặt lưng phẳng đặc trưng đến từ nhà Apple, mang lại vẻ đẹp thanh lịch và sang trọng.  Chất liệu chủ đạo của iPhone 15 Pro Max vẫn là khung kim loại và mặt lưng kính cường lực, tạo nên sự bền bỉ và chắc chắn. Tuy nhiên, với công nghệ tiên tiến, khung này đã được nâng cấp thành chất liệu titanium thay vì thép không gỉ hay nhôm ở những thế hệ trước.', 0, '2023-12-10 21:22:36'),
(62, 'Điện thoại iPhone 15 Pro 128GB', 12, 1, 39000000, '../public/upload/1702276764_iphone-15-pro-max-blue-thumbnew-600x600.jpg.jpg', 'Sử dụng Action button mới Thay vì sử dụng phím gạt như những phiên bản trước, iPhone 15 Pro được nâng cấp phần này trở thành nút bấm và vẫn giữ nguyên vị trí như cũ. Cách làm này cho phép bạn có thể dễ dàng điều chỉnh chế độ bật tắt chuông của điện thoại iPhone bằng một tay mà không hề gặp phải bất kỳ khó khăn. Ngoài ra, máy còn cho phép bạn có thể cài thêm một vài tiện ích mở ứng dụng nhanh thông qua phím chức năng này.', 1, '2023-12-11 00:39:24'),
(67, 'Điện thoại iPhone 11 64GB', 12, 1, 10790000, '../public/upload/1702264627_iphone-xl-64gb.jpg.jpg', 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó', 1, '2023-12-10 21:17:07'),
(68, 'Điện thoại iPhone 13 128GB', 12, 1, 16490000, '../public/upload/1702264899_iphone-13-pink-2-600x600.jpg.jpg', 'Trong khi sức hút đến từ bộ 4 phiên bản iPhone 12 vẫn chưa nguội đi, thì hãng điện thoại Apple đã mang đến cho người dùng một siêu phẩm mới iPhone 13 với nhiều cải tiến thú vị sẽ mang lại những trải nghiệm hấp dẫn nhất cho người dùng.', 0, '2023-12-10 21:21:39'),
(69, 'Điện thoại Samsung Galaxy S23 Ultra 5G 256GB', 1, 1, 25990000, '../public/upload/1702265145_samsung-galaxy-s23-ultra-thumb-xanh-600x600.jpg.jpg', 'Samsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung, sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP, xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.', 1, '2023-12-10 21:25:45'),
(70, 'Điện thoại Samsung Galaxy S23 5G 128GB', 1, 1, 15990000, '../public/upload/1702266050_samsung-galaxy-s23-600x600.jpg.jpg', 'Samsung Galaxy S23 5G 128GB chắc hẳn không còn là cái tên quá xa lạ đối với các tín đồ công nghệ hiện nay, được xem là một trong những gương mặt chủ chốt đến từ nhà Samsung với cấu hình mạnh mẽ bậc nhất, camera trứ danh hàng đầu cùng lối hoàn thiện vô cùng sang trọng và hiện đại.', 0, '2023-12-10 21:40:50'),
(71, 'Điện thoại Samsung Galaxy Z Flip5 5G 256GB', 1, 1, 19999000, '../public/upload/1702268223_samsung-galaxy-z-flip5-xanh-mint-thumb-600x600.jpg.jpg', 'Samsung Galaxy Z Flip5 đã chính thức ra mắt vào ngày 26 tháng 7. Đây là một chiếc điện thoại thông minh có thiết kế độc đáo với màn hình gập, được trang bị bộ vi xử lý cao cấp Snapdragon 8 Gen 2 for Galaxy, RAM 8 GB, bộ nhớ trong 256 GB, camera kép 12 MP và pin 3700 mAh.', 0, '2023-12-10 22:17:03'),
(72, 'Điện thoại iPhone 14 Plus 128GB', 12, 1, 21990000, '../public/upload/1702279821_iPhone-14-plus-thumb-xanh-1-600x600.jpg.jpg', 'Sau nhiều thế hệ điện thoại của Apple thì cái tên “Plus” cũng đã chính thức trở lại vào năm 2022 và xuất hiện trên chiếc iPhone 14 Plus 128GB, nổi trội với ngoại hình bắt trend cùng màn hình kích thước lớn để đem đến không gian hiển thị tốt hơn cùng cấu hình mạnh mẽ không đổi so với bản tiêu chuẩn. Thân hình thanh mảnh cùng ngoại hình góc cạnh Giống như những thế hệ “Plus” trước đây, iPhone 14 Plus vẫn sẽ là phiên bản phóng to từ iPhone 14 với ngôn ngữ thiết kế không đổi, vẫn sẽ là cạnh viền vuông vức đi kèm với mặt lưng phẳng để tạo nên cái nhìn bắt trend và đặc trưng.', 0, '2023-12-11 01:30:21'),
(73, 'Điện thoại Xiaomi 13T Pro 5G', 3, 1, 14490000, '../public/upload/1702280280_xiaomi-13t-pro-xanh-thumb-600x600.jpg.jpg', 'Xiaomi 13T Pro 5G là mẫu máy thuộc phân khúc tầm trung đáng chú ý tại thị trường Việt Nam. Điện thoại ấn tượng nhờ được trang bị chip Dimensity 9200+, camera 50 MP có kèm sự hợp tác với Leica cùng kiểu thiết kế tinh tế đầy sang trọng. Ngoại hình đẹp mắt cùng chất liệu cao cấp  Mặt lưng của Xiaomi 13T Pro được thiết kế làm phẳng với một sự bo cong nhẹ ở vùng rìa, tạo nên sự hoàn hảo trong việc cầm nắm. Với chất liệu kính cao cấp, máy trở nên mỏng nhẹ và mềm mại, giúp bạn có thể dễ dàng sử dụng trong thời gian dài mà không cảm thấy cấn tay hay khó chịu.   Mặt lưng bóng loáng của Xiaomi 13T Pro mang đến sự sang trọng và lôi cuốn. Được gia công một cách tỉ mỉ khiến mặt lưng của chiếc điện thoại Xiaomi trở nên rất cuốn hút và đẳng cấp. Không chỉ là một công cụ công nghệ, Xiaomi 13T Pro còn là một biểu tượng thời trang thể hiện cá tính và phong cách của bạn.', 0, '2023-12-11 01:38:00'),
(74, 'Điện thoại Xiaomi 13 Lite 5G', 3, 1, 9490000, '../public/upload/1702280739_xiaomi-13-lite-xanh-thumb-1-600x600.jpg.jpg', 'Hãng Xiaomi đã ra mắt mẫu điện thoại Xiaomi 13 Lite 5G, tiếp tục thành công từ dòng flagship Xiaomi 13 series. Được xem là dòng sản phẩm tầm trung, Xiaomi 13 Lite 5G có nhiều điểm nổi bật như sử dụng chipset mới từ Qualcomm và hệ thống camera đáng chú ý trong phân khúc. Hiệu năng vượt trội với chipset mới ra mắt Là mẫu điện thoại đầu tiên trang bị con chip Snapdragon 7 Gen 1*, vì thế Xiaomi 13 Lite gần như thu hút được sự quan tâm đến từ đông đảo người dùng yêu công nghệ và đặc biệt là các khách hàng quan tâm tới những mẫu smartphone tầm trung.  Snapdragon 7 Gen 1 có thể coi là cái tên rất mới, khi ở thị trường Việt Nam thì gần như chưa có mẫu điện thoại chính hãng nào được trang bị vi xử lý này trước khi Xiaomi 13 Lite ra mắt', 0, '2023-12-11 01:45:39'),
(75, 'Điện thoại Xiaomi Redmi Note 12 Pro 5G Tím', 3, 1, 8490000, '../public/upload/1702280877_xiaomi-redmi-note-12-pro-5g-tim-thumb-1-600x600.jpg.jpg', 'Xiaomi Redmi Note 12 Pro 5G Tím phiên bản màu mới thuộc dòng Note 12 Pro được Xiaomi mang đến thị trường Việt Nam trước đó. Lần trở lại này máy sẽ khoác lên mình một diện mạo mới mẻ với lớp áo tím mộng mơ đẹp mắt, hiệu năng và nhiều tính năng ưu việt khác vẫn được nhà Xiaomi giữ nguyên. Màu tím đẹp mắt kết hợp với lối thiết kế trẻ trung Xiaomi Redmi Note 12 Pro 5G Tím mang lối thiết kế trẻ trung với cạnh viền được bo cong nhẹ và mặt lưng kính làm tăng thêm sự bóng bẩy khi tiếp xúc với ánh sáng. Không dừng lại ở đó ở phiên bản màu tím kết hợp với mặt lưng kính sẽ làm cho thiết bị toát lên vẻ quyến rũ và sang trọng.', 1, '2023-12-11 03:35:33'),
(78, 'Laptop Apple MacBook Pro 16 inch M3 Max 2023', 12, 13, 100000000, '../public/upload/1702287447_apple-macbook-pro-16-inch-m3-max-2023-14-core-311023-034030-600x600.jpg.jpg', 'Dấu ấn khó phai đến từ nhà Táo qua sự kiện ', 0, '2023-12-11 03:38:08'),
(79, 'Laptop Apple MacBook Pro 16 inch M2 Pro 2023', 12, 13, 56990000, '../public/upload/1702287558_macbook-pro-16-inch-m2-pro-gray-thumb-1-600x600.jpg.jpg', 'Apple vừa giới thiệu đến người dùng chiếc MacBook Pro 16 inch M2 Pro 2023 có kiểu dáng mỏng nhẹ nhưng bên trong là một hiệu năng vô cùng mạnh mẽ đáp ứng được mọi tác vụ, hứa hẹn sẽ trở thành một người bạn đồng hành tuyệt vời trong công việc, học tập và giải trí.  Xử lý trơn tru mọi công việc nhờ con chip Apple M2 Pro Vẫn được sản xuất trên tiến trình 5 nm nhưng con chip Apple M2 Pro có rất nhiều cải tiến so với thế hệ M1 Pro đã ra mắt trước đó. Với CPU 12 nhân cùng băng thông bộ nhớ 200 GB/s sẽ cung cấp sức mạnh cao hơn 20% giúp vận hành trơn tru mọi tác vụ từ cơ bản đến nâng cao nhưng vẫn rất tiết kiệm năng lượng.  MacBook Pro M2 Pro 2023 - Chip Apple M2 Pro  Chiếc Apple MacBook được trang bị card đồ họa tích hợp 19 lõi GPU cung cấp hiệu suất đồ họa cao hơn 30% và Neural Engine nhanh hơn 40% so với thế hệ tiền nhiệm giúp đẩy nhanh tốc độ xử lý của các tác vụ đồ họa. Người dùng hoàn toàn có thể thực hiện các công việc chỉnh sửa hình ảnh, thiết kế, dựng phim hay render video trên những phần mềm đồ họa một cách nhẹ nhàng.  Được trang bị bộ nhớ RAM 16 GB nên chiếc MacBook này có khả năng xử lý đa nhiệm vô cùng mượt mà, người dùng có thể mở cùng lúc nhiều cửa sổ làm việc, layer đồ họa, file Excel lớn,... mà không gặp phải tình trạng giật lag. Bên cạnh đó, thiết bị còn có tốc độ đọc ghi vô cùng nhanh chóng, thời gian khởi động máy được rút ngắn nhờ ổ cứng SSD 512 GB.  MacBook Pro M2 Pro 2023 - Hiệu năng mạnh mẽ  Giữ vững lối thiết kế sang trọng, tỉ mỉ trên từng chi tiết Vỏ được làm từ kim loại không chỉ đủ cứng cáp để bảo vệ các linh kiện bên trong mà còn mang đến vẻ ngoài vô cùng sang trọng. Các góc được bo cong một cách tinh tế, hạn chế móp méo khi va đập, logo “quả táo cắn dở” vẫn được đặt ở trung tâm mặt lưng thu hút mọi ánh nhìn. Thiết bị có khối lượng 2.15 kg và dày 16.8 mm. Tuy vậy, chiếc laptop đồ họa - kỹ thuật vẫn cho bạn khả năng di chuyển linh hoạt.  MacBook Pro M2 Pro 2023 - Kiểu dáng sang trọng  Bạn có thể mở khóa chiếc MacBook Pro vô cùng nhanh chóng chỉ với một lần chạm thông qua cảm biến vân tay (Touch ID) tích hợp trên nút nguồn. Không những rút ngắn thời gian thao tác đăng nhập mà còn đảm bảo độ an toàn hơn cho dữ liệu bên trong so với loại mật khẩu truyền thống.  Magic keyboard mang đến cảm giác gõ phím êm nhẹ khi gõ hạn chế tối đa việc ảnh hưởng tiếng ồn đến những người xung quanh, hành trình ổn định và bố cục phím sắp xếp hợp lý giúp đẩy nhanh tốc độ đánh chữ. Bàn phím còn trang bị đèn nền hỗ trợ người dùng làm việc tốt hơn trong môi trường ánh sáng yếu.  MacBook Pro M2 Pro 2023 - Bàn phím  Được trang bị 3 cổng Thunderbolt 4, HDMI và Jack tai nghe 3.5 mm nằm gọn gàng dọc cạnh bên của laptop giúp tổng thể trông đẹp mắt nhưng vẫn đảm bảo việc kết nối, truyền tải dữ liệu trong quá trình sử dụng. Đảm bảo đường truyền mạng luôn trong trạng thái ổn định nhờ Wi-Fi 6E (802.11ax), kết nối không dây nhanh chóng thông qua Bluetooth 5.3.  MacBook Pro M2 Pro 2023 - Kết nối  Làm việc, giải trí trọn vẹn với màn hình chất lượng cao Sở hữu màn hình 16.2 inch mang đến không gian hiển thị rộng rãi, độ phân giải Liquid Retina XDR display (3456 x 2234) mang đến những nội dung vô cùng sắc nét, kết hợp cùng công nghệ Wide color (P3) cho màu sắc vô cùng sống động, chuẩn xác trên từng chi tiết, phù hợp với người dùng làm trong lĩnh vực thiết kế.  Khả năng hiển thị nội dung rõ nét ở nhiều môi trường sáng khác nhau nhờ độ sáng 1000 nits đảm bảo cho người dùng làm việc hiệu quả ở bất kỳ đâu. Công nghệ True Tone trên MacBook Pro 2023 có khả năng tự động điều chỉnh độ sáng màn hình tùy theo môi trường xung quanh cung cấp cho người dùng những hình ảnh tự nhiên nhất.  MacBook Pro M2 Pro 2023 - Màn hình  Màn hình còn có tấn số quét lên đến 120 Hz kết hợp công nghệ ProMotion tự động điều chỉnh để phù hợp với chuyển động của nội dung đáp ứng nhu cầu giải trí với các tựa game, làm đồ họa,... khi chỉnh sửa video bạn còn có thể chọn tốc độ làm mới khung hình cho phù hợp với từng đoạn phim.  Hệ thống âm đa chiều Dolby Atmos cùng công nghệ Wide stereo sound và Spatial Audio giúp người dùng đắm chìm vào không gian âm thanh sống động, thưởng thức những giai điệu cuốn hút hoặc những thước phim hành động kịch tính.  MacBook Pro M2 Pro 2023 - Âm thanh  Với thiết kế thời thượng, hiệu năng mạnh mẽ đến từ con chip Apple M2 Pro đáp ứng được mọi tác vụ chiếc MacBook Pro 16 inch M2 Pro 2023 19-core GPU chắc chắn là chiếc máy tính xách tay hoàn hảo để đồng hành cùng bạn trong công việc, cuộc sống. ', 1, '2023-12-11 03:39:18');

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
(1, 'Điện Thoại'),
(2, 'MacBook Air'),
(3, 'Máy Tính Bảng'),
(4, 'TiVi'),
(5, 'Máy Giặt'),
(13, 'Macbook Pro');

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
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
