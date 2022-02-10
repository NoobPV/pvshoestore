-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pvshoestore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name_category`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Bitis');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `start_order` datetime NOT NULL,
  `total_order` double NOT NULL,
  `flag` varchar(255) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `image_product` varchar(255) DEFAULT NULL,
  `detail_product` varchar(255) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `image_product`, `detail_product`, `id_category`, `price`) VALUES
(1, 'Nike Air Jordan 1', 'product1.png', 'Familiar but always fresh, the iconic Air Jordan 1 is remastered for todays sneakerhead culture. This Retro High OG version goes all in with full-grain leather, comfortable cushioning and classic design details.', 1, 17500000),
(2, 'Adidas Run 2', 'product2.png', 'This product is made with Primeblue, a high-performance recycled material made in part with Parley Ocean Plastic. 50% of the upper is textile, 75% of the textile is Primeblue yarn.', 2, 13500000),
(3, 'Nike Running 2', 'product3.png', 'When running becomes a daily goal, you want a running shoe thats tough on the road and soft on your feet.Designed with better shaping around the collar and tongue to help support your foot, every step feels supported.Plus, a foam midsole keeps you comfort', 1, 12300000),
(4, 'Adidas NMD', 'product4.png', 'Casual style just for kids. After all, why should adults get to have all the fun? With a super flexible EVA midsole, these adidas NMD 360 Shoes are made for feet that are always on the move. The sleek running-inspired style keeps your little one looking f', 2, 8400000),
(5, 'Adidas NMD Red', 'product5.png', 'No risk of losing their LEGO® bricks with these kids adidas running shoes, because they stay laced onto their feet. The Colorful trainers have a durable textile upper with easy, elastic laces and a hook-and-loop strap for a snug fit. Play time is all the ', 2, 9500000),
(6, 'Adidas Chuck White', 'product6.png', 'Style, fun and comfort is not a bad combination to have. Superstar LEGO® shoes feature iconic 3-Stripe branding and playful design details with LEGO brick-inspired texture on the shell-toe and heel-tab. Comfortable sockliners have been designed to allow f', 2, 15500000),
(7, 'Nike Air Max 1', 'product7.png', 'Let your attitude have edge in the Nike Air Max Plus EOI, a tuned Air experience thats been doling out comfort and street cred since 1998. Paying tribute to everything Air Max, it blends DNA, materials and colours from other 90s icons, while gradient acce', 1, 10500000),
(8, 'Nike Air Pink', 'product8.png', 'These kicks are FAR out!The Nike Air Max 90 Toggle SE is totally groovy for kids and sees the future join forces with an icon.We added a quick-and-easy toggle system that makes taking these on and off a breeze.Plus, the 70s-inspired graphics and colours m', 1, 11000000),
(9, 'Bitis Hunter Red', 'product9.png', 'Là một thương hiệu của Đi và Trải nghiệm, Bitis Hunter tin rằng thực ra những góc phố, con đường hàng ngày ta vẫn ngược xuôi có thể chứa đựng đằng sau đó cả câu chuyện của những ngày xưa cũ. Những người ta từng gặp, những ngõ ngách ta từng qua, đều có sẵn', 3, 3200000),
(10, 'Bitis Hunter Yellow', 'product10.png', 'Từng bước cờ chậm mà chắc của Biti’s với cái đích cuối cùng: “Bao trọn tâm trí người Việt yêu giày” dần phát huy tác dụng khi mọi người bắt đầu bàn tán về sự trở lại của “huyền thoại tuổi thơ” ngày một nhiều hơn. Biti’s đã khẳng định mình xứng đáng là “an', 3, 3200000),
(11, 'Nike Vapomax Pink', 'product11.png', 'Made from at least 40% recycled materials by weight, the Nike Air VaporMax 2021 FK is airy and easy to wear with super-stretchy, recycled Flyknit fabric (plus a soft collar that sculpts your ankle).The stitched-on Swoosh and recycled TPU heel clip add a s', 1, 7800000),
(12, 'Nike Max Pink', 'product12.png', 'The street is the stage for the LeBron Low, a shoe engineered to give LeBron the contained, connected feel he likes but with more ankle mobility.Inspired by the colourful energy of a nighttime city skyline, the LeBron 18 Low Neon Nights shows off a bold c', 1, 9400000),
(13, 'Bitis Hunter Cock', 'product13.png', 'Làm thế nào để Biti’s Hunter có thể tiếp cận gần hơn tới giới trẻ - đối tượng mà Biti’s tập trung hướng đến? “Hãy để tự bản thân nó lan truyền và bung tỏa sức mạnh” – một nước bài khôn ngoan của tay lão luyện nhà nghề với bề dày nhiều năm chinh chiến trên', 3, 4000000),
(14, 'Nike Air Max', 'product14.png', 'Splitting the Nike Air unit into different sections allowed us to fine-tune each one—a technology we called Tuned Air. The debut colorway took its look from tropical skies and swaying palms.', 1, 14000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `name_customer` varchar(255) NOT NULL,
  `phone_customer` varchar(20) NOT NULL,
  `address_customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_type`, `name_customer`, `phone_customer`, `address_customer`) VALUES
(1, 'admin@nlpv', '202cb962ac59075b964b07152d234b70', 0, 'Admin', '', ''),
(2, 'famboyway@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'Nguyễn lưu phi vũ', '0938317614', '245/26 Chu Văn An, Phường 12, quận Bình Thạnh, TPHCM , hẻm nằm kế bên quán nhậu ANH EM, đối diện là cổng lớn trường cán bộ chu văn an');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_detail` (`id_order`),
  ADD KEY `fk_order_product` (`id_product`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_product` (`id_category`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
