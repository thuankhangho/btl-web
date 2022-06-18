-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `res_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `datetime`, `content`) VALUES
(0, 'Địa điểm mới', '2022-06-15 00:00:00', 'Mở chi nhánh mới ở Tokyo');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE `news_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` text NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_comments`
--

INSERT INTO `news_comments` (`id`, `user_id`, `datetime`, `content`, `news_id`) VALUES
(0, 2052243, '2022-06-15 00:00:00', 'Quán thoáng mát, rộng rãi!', 0),
(1, 2052242, '2016-06-22 10:14:59', 'nut', 0),
(2, 2052242, '2016-06-22 10:16:04', '<img src=\"img/product-list/UwU.png\" class=\"img-fluid\" alt=\"\">', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `img_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: unavailable, 1: available',
  `feature` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: not featured on news, 1: featured on news'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `img_path`, `status`, `feature`) VALUES
(0, 'Shoyu Ramen', 'Ramen & nước tương', 900, 'img/product-list/shoyu-ramen.jpg', 0, 0),
(1, 'Shio Ramen', 'Ramen muối', 220, 'img/product-list/shio-ramen.jpg', 1, 1),
(2, 'Cơm Trứng', 'Cơm và trứng chiên', '324', 'img/food-img/rice-cata.jpg', '1', '1'),
(3, 'Rượu Sake', 'Rượu Sake nhập khẩu từ Nhật Bản 100%', '950', 'img/food-img/beverage-cata.jpg', '1', '1'),
(4, 'Tonkotsu Ramen', 'Ramen cùng thịt lợn', '340', 'img/food-img/ramen-cata.jpg', '1', '1'),
(5, 'Sushi', 'Sushi 7 món', '240', 'img/food-img/sushi-cata.jpg', '1', '1');


-- --------------------------------------------------------

--
-- Table structure for table `prod_comments`
--

CREATE TABLE `prod_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` text NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod_comments`
--

INSERT INTO `prod_comments` (`id`, `user_id`, `datetime`, `content`, `prod_id`) VALUES
(0, 2052243, '2022-06-15 00:00:00', 'Nhà hàng tuyệt hảo!', 0),
(1, 2052242, '2016-06-22 10:41:30', 'afdf', 0),
(2, 2052242, '2016-06-22 10:41:51', 'saikyou', 0),
(3, 2052242, '2016-06-22 10:42:01', 'deadweight', 0),
(4, 2052242, '2016-06-22 10:43:15', 'blalablala', 0),
(5, 2052242, '2016-06-22 10:44:18', 'lmao', 0),
(6, 2052243, '2016-06-22 12:35:10', '<img src=\"img/product-list/shoyu-ramen.jpg\" class=\"img-fluid\" alt=\"\">', 0),
(7, 2052242, '2016-06-22 10:12:46', 'nut', 0),
(8, 2052242, '2016-06-22 10:15:38', '<img src=\"img/product-list/D=.jpg\" class=\"img-fluid\" alt=\"\">', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL COMMENT 'Nam, Nữ, Khác',
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: user, 1: admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`, `sex`, `birthday`, `email`, `phone`, `address`, `admin`) VALUES
(0, 'user', 'iwannafly', 'Edogawa Conan', 'Nam', '2022-06-16', 'conanmeitantei@gmail.com', '07258258758', 'asgz14hs', 0),
(1, 'user2', 'TMD', 'Tokoyami Towa', 'Nữ', '2022-04-28', 'everlastingdarkness@gmail.com', '07258258758', 'ahudjhvkusg', 0),
(2, 'user3', 'stellarstellar', 'Hoshimachi Suisei', 'Nữ', '2022-04-23', 'suiseinogotokuarawaretasutaanogenseki@gmail.com', '04684548214', 'asgz14hs', 0),
(3, 'kamisamada', 'startend', 'staffA', 'Nữ', '2022-01-26', 'achan@gmail.com', '46879213548', 'grgarhhs', 1),
(4, 'user4', 'whateverusay', 'Join Cena', 'Nam', '1997-01-24', 'jsmith@sample.com', '4682135468', 'WJDJTJAdjdtjykjyr', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `prod_comments`
--
ALTER TABLE `prod_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prod_comments`
--
ALTER TABLE `prod_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;