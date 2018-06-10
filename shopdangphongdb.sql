-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 10:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdangphongdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `sort_num` int(11) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `parent_id`, `sort_num`, `level`) VALUES
(1, 'Đá tự nhiên', NULL, 10, 1),
(2, 'Vòng đá mẫu', NULL, 20, 1),
(3, 'Phụ kiện', NULL, 30, 1),
(4, 'Thạch anh tóc vòng', 1, 10, 2),
(5, 'Đá mắt hổ Brazil(Tiger Eyes)', 1, 20, 2),
(6, 'Ngọc phỉ thúy', 1, 30, 2),
(7, 'Thạch anh tóc vòng', 2, 10, 2),
(8, 'Đá mắt hổ Brazil(Tiger Eyes)', 2, 20, 2),
(9, 'Ngọc phỉ thúy', 2, 30, 2),
(10, 'Mặt đá', 3, 10, 2),
(11, 'Charm bạc', 3, 20, 2),
(12, 'Charm vàng', 3, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_content` text COLLATE utf8_unicode_ci,
  `full_content` text COLLATE utf8_unicode_ci,
  `reg_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `image_url` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_publish` char(1) COLLATE utf8_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `short_content`, `full_content`, `reg_date`, `update_date`, `image_url`, `is_publish`) VALUES
(1, 'Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.', 'Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.', 'Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.Cách sử dụng màu đỏ hài hòa đem lại may mắn trong phong thủy.', '2018-04-30 17:00:00', '2018-04-30 17:00:00', 'assets/img/blog/1.jpg', '1'),
(2, 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', '2018-04-29 17:00:00', '2018-04-29 17:00:00', 'assets/img/blog/2.jpg', '1'),
(3, 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', 'Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.Ra đường gặp quý nhân nhờ biết cách bố trí sofa sát tường.', '2018-04-29 17:00:00', '2018-04-29 17:00:00', 'assets/img/blog/3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `page_review`
--

CREATE TABLE `page_review` (
  `page_review_id` int(11) NOT NULL,
  `avatar_url` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL,
  `reviewer_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_review`
--

INSERT INTO `page_review` (`page_review_id`, `avatar_url`, `content`, `reg_date`, `reviewer_name`) VALUES
(1, 'assets/img/testimonial/2.png', 'Sản phẩm chất lượng, đá đẹp, ông chủ nhiệt tình.', '2018-04-30 00:00:00', 'Hoàng'),
(2, 'assets/img/testimonial/3.png', 'Sản phẩm chất lượng, đá đẹp, ông chủ nhiệt tình.', '2018-04-29 00:00:00', 'Dương'),
(3, 'assets/img/testimonial/2.png', 'Sản phẩm chất lượng, đá đẹp, ông chủ nhiệt tình.', '2018-04-28 00:00:00', 'Phương');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `full_description` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL,
  `available_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `delete_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `price_discount` double(15,0) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `new_flg` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `image_small_path` text COLLATE utf8_unicode_ci,
  `image_full_path` text COLLATE utf8_unicode_ci,
  `feat_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `short_description`, `full_description`, `price`, `available_flg`, `delete_flg`, `price_discount`, `reg_date`, `update_date`, `new_flg`, `image_small_path`, `image_full_path`, `feat_flg`) VALUES
(2, 'Vòng đá mắt chồn', 'Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn Mô tả ngắn gọn ', 'Mô tả dài', 350000, '0', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d1.jpg', 'assets/img/product/d1.jpg', '0'),
(3, 'Vòng đá mắt heo', 'Mô tả ngắn gọn', 'Mô tả dài', 350000, '1', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d2.jpg', 'assets/img/product/d1.jpg', '0'),
(4, 'Vòng đá mắt chuột', 'Mô tả ngắn gọn', 'Mô tả dài', 350000, '1', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d2.jpg', 'assets/img/product/d3.jpg', '0'),
(5, 'Vòng đá mắt chim', 'Mô tả ngắn gọn', 'Mô tả dài', 270000, '1', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d4.jpg', 'assets/img/product/d4.jpg', '0'),
(6, 'Vòng đá mắt gấu', 'Mô tả ngắn gọn', 'Mô tả dài', 350000, '1', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d1.jpg', 'assets/img/product/d1.jpg', '0'),
(7, 'Vòng đá mắt gấu 2', 'Mô tả ngắn gọn', 'Mô tả dài', 150000, '1', '0', NULL, '2018-04-24 17:00:00', '2018-04-24 17:00:00', '0', 'assets/img/product/d1.jpg', 'assets/img/product/d1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_small_path` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `image_full_path` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `main_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_id`, `image_small_path`, `image_full_path`, `main_flg`) VALUES
(1, 2, 'assets/img/product/d1.jpg', 'assets/img/product/d1.jpg', '0'),
(2, 2, 'assets/img/product/d2.jpg', 'assets/img/product/d2.jpg', '1'),
(3, 2, 'assets/img/product/d3.jpg', 'assets/img/product/d1.jpg', '0'),
(4, 2, 'assets/img/product/d4.jpg', 'assets/img/product/d2.jpg', '0'),
(5, 2, 'assets/img/product/d4.jpg', 'assets/img/product/d2.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_relate`
--

CREATE TABLE `product_relate` (
  `product_id` int(11) NOT NULL,
  `product_relate_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_relate`
--

INSERT INTO `product_relate` (`product_id`, `product_relate_id`, `reg_date`, `update_date`) VALUES
(2, 3, '2018-05-28 03:16:41', '0000-00-00 00:00:00'),
(2, 4, '2018-05-28 03:16:41', '0000-00-00 00:00:00'),
(2, 5, '2018-05-28 03:17:10', '0000-00-00 00:00:00'),
(2, 6, '2018-05-28 03:17:10', '0000-00-00 00:00:00'),
(2, 7, '2018-05-28 03:17:21', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `page_review`
--
ALTER TABLE `page_review`
  ADD PRIMARY KEY (`page_review_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `product_relate`
--
ALTER TABLE `product_relate`
  ADD PRIMARY KEY (`product_id`,`product_relate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_review`
--
ALTER TABLE `page_review`
  MODIFY `page_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
