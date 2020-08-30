-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 05:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(200) NOT NULL,
  `brand_title` text NOT NULL,
  `brand_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_description`) VALUES
(401, 'GreatValue', ''),
(402, 'Dannon', 'famous for milk'),
(403, 'Kroggers', 'kroggers '),
(404, 'Aveeno', 'Aveeno'),
(405, 'Target', 'Target'),
(406, 'walgreens', 'walgreens'),
(410, 'Jersey', 'jersey'),
(411, 'Pepsi', 'Pepsi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `ip-address` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `ip-address`, `username`, `product_title`, `product_image`, `quantity`, `price`, `total_amount`) VALUES
(78, '111', '0', '', '7up', '7up.jpg', 1, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(200) NOT NULL,
  `cat_title` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `category_description`) VALUES
(201, 'fruits', 'fruits'),
(202, 'vegetables', 'vegetables'),
(203, 'bread', 'bread'),
(204, 'beverages', 'bevarages'),
(205, 'Health & Beauty', 'Health & Beauty'),
(206, 'dairy', 'dairy');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `total_amount` int(200) NOT NULL,
  `order_date` date NOT NULL,
  `identification_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `username`, `total_amount`, `order_date`, `identification_code`) VALUES
(17, 'zainab', 33, '2020-08-30', '8302020195530000000'),
(18, 'pooja11228', 33, '2020-08-30', '8302020195812000000'),
(19, 'pooja11228', 135, '2020-08-30', '8302020200209000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `product_price`, `product_quantity`, `flag`) VALUES
(17, 103, 15, 1, 1),
(17, 110, 4, 1, 1),
(17, 112, 6, 1, 1),
(17, 121, 8, 1, 1),
(18, 103, 15, 1, 1),
(18, 110, 4, 1, 1),
(18, 111, 6, 1, 1),
(18, 121, 8, 1, 1),
(19, 103, 15, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_img` text NOT NULL,
  `product_keywords` varchar(200) NOT NULL,
  `product_brand` int(200) NOT NULL,
  `product_quantity` varchar(200) NOT NULL,
  `product_flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_img`, `product_keywords`, `product_brand`, `product_quantity`, `product_flag`) VALUES
(103, 201, 'Grapes', '15', 'grapes.jpg', 'grapes Grapes fruits', 402, '66', 1),
(105, 201, 'Apple', '10', 'apples.jpg', 'Fruits fruits greatvalue Apple', 401, '100', 0),
(106, 202, 'Beans', '5', 'beans.jpg', 'Beans Bean vegetable', 403, '100', 0),
(107, 202, 'Carrots', '6', 'carrots.jpg', 'vegetables Carrots', 405, '85', 0),
(108, 203, 'Rolls', '10', 'rolls.jpg', 'Breads rolls', 405, '100', 0),
(109, 203, 'tortillos', '11', 'tortillos.jpg', 'Breads tortillos', 402, '99', 0),
(110, 204, 'Coffee', '4', 'coffee.jpg', 'Cofee beverages', 401, '82', 1),
(111, 204, '7up', '6', '7up.jpg', 'beverages 7up', 403, '90', 1),
(112, 202, 'Tomatoes', '6', 'tomatoes.jpg', 'vegetables tomatoes red', 401, '92', 1),
(113, 205, 'Vaseline1', '120', 'Vaseline.jpg', 'Aveeno Vaseline', 405, '110', 1),
(114, 206, 'Yogurt', '5', 'yogurt.jpg', 'Yogurt curd dairy', 401, '99', 1),
(115, 201, 'Oranges', '8', 'oranges.jpg', 'fruits Oranges', 403, '99', 1),
(116, 206, 'Butter', '3', 'butter.jpg', 'butter cheese GreatValue dairy', 401, '97', 1),
(118, 205, 'Vaseline', '10', 'lipbalms.jpg', 'balm', 404, '100', 0),
(121, 203, 'tortillos', '8', 'tortillos.jpg', 'Breads tortillos', 405, '98', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `first_name`, `last_name`, `email`, `password`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', 'admin123'),
('Archana', 'archana', 'g', 'archana@gmail.com', '37f706226d2cb349334a494923bb14db'),
('arpitha', 'arpitha', 'm', 'arpita.mothukuri@gmail.com', '1f642da5e154c40d02c9765421c1e2c3'),
('pooja11228', 'pooja', 'kumari', 'pooja@gmail.com', 'pooja123'),
('Priyanka', 'Priyanka', 'Parimi', 'Priyanka@gmail.com', '654d97c2330e1a725b686065a2b51d68'),
('zainab', 'zainab', 'khan', 'zainab@gmail.com', 'zainab123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_fk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
