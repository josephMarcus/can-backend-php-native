-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2021 at 05:25 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `case_id` int(11) NOT NULL,
  `item_id` int(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `size` varchar(50) NOT NULL,
  `units` int(11) NOT NULL,
  `price` double(8,3) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `production_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `full_desc` varchar(2000) NOT NULL,
  `supplier_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`case_id`, `item_id`, `item_name`, `size`, `units`, `price`, `currency`, `tag`, `category`, `production_date`, `status`, `short_desc`, `full_desc`, `supplier_email`) VALUES
(1, 14253, 'iphone 11', '1024x542', 10, 5405.000, 'EGP', 'iphone', 'Elctronics', '2021-06-05', 'New', '7-Inch (diagonal) 5120-by-2880 Retina 5K display Stunning 5-mm-thin design 6-Core 8th-Generation Int', '7-Inch (diagonal) 5120-by-2880 Retina 5K display Stunning 5-mm-thin design 6-Core 8th-Generation Intel Core i5 Processor Radeon Pro 570x, 575x, or ...', 'jo@gmail.com'),
(2, 7617, 'pc dell', '1045', 10, 9800.000, 'EGP', 'pc', 'Computers', '2021-06-04', 'New', '7-Inch (diagonal) 5120-by-2880 Retina 5K display Stunning 5-mm-thin ', '7-Inch (diagonal) 5120-by-2880 Retina 5K display Stunning 5-mm-thin ', 'jo@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `items_page`
-- (See below for the actual view)
--
CREATE TABLE `items_page` (
`item_id` int(20)
,`item_name` varchar(20)
,`price` double(8,3)
,`short_desc` varchar(100)
,`url` varchar(300)
);

-- --------------------------------------------------------

--
-- Table structure for table `item_img`
--

CREATE TABLE `item_img` (
  `case_id` int(20) NOT NULL,
  `item_id` int(20) NOT NULL,
  `img_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_img`
--

INSERT INTO `item_img` (`case_id`, `item_id`, `img_url`) VALUES
(1, 14253, 'http://localhost/can/supplier/item_images/Apple-iPhone-11.jpg'),
(2, 14253, 'http://localhost/can/supplier/item_images/download (1).jpg'),
(3, 7617, 'http://localhost/can/supplier/item_images/c06575196_1.png'),
(4, 7617, 'http://localhost/can/supplier/item_images/pc.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `case_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `inc` varchar(20) NOT NULL,
  `post_code` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `img_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`case_id`, `first_name`, `middle_name`, `last_name`, `national_id`, `mobile`, `email`, `password`, `category`, `inc`, `post_code`, `address`, `bio`, `img_url`) VALUES
(1, 'joseph', 'A', 'Morcos', '124', '015457', 'mork@gmail.com', '123', 'phones', 'ano', '12511', 'giza El haram', 'bio good', 'http://localhost/can-files/supplier/supplier_images/albert.jpg'),
(2, 'gozif', 'abdalla', 'Morcos', '142', '0125', 'jo@gmail.com', '123', 'phones', 'apple', '12511', 'giza El haram', 'bio', 'http://localhost/can/supplier/supplier_images/albert.jpg');

-- --------------------------------------------------------

--
-- Structure for view `items_page`
--
DROP TABLE IF EXISTS `items_page`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `items_page`  AS  select `i`.`item_id` AS `item_id`,`i`.`item_name` AS `item_name`,`i`.`price` AS `price`,`i`.`short_desc` AS `short_desc`,(select `item_img`.`img_url` from `item_img` where (`i`.`item_id` = `item_img`.`item_id`) limit 1) AS `url` from `items` `i` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `item_img`
--
ALTER TABLE `item_img`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`case_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_img`
--
ALTER TABLE `item_img`
  MODIFY `case_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
