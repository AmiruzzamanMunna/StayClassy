-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 06:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayclassy`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `heading`, `title`, `description`) VALUES
(1, 'About heading', 'About', 'Amiruzzaman Almost finished the project');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `phone`, `email`, `password`, `confirm_password`) VALUES
(1, 'Md. Amiruzzaman Munna', 'Admin', '01787284068', 'munna.ak17@gmail.com', '111111', '111111'),
(2, 'Munna', 'Munna', '01682088827', 'munna.ak17@gmail.com', '111111', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `user_id`, `product_id`, `quantity`, `unit_price`) VALUES
(5, 4, 6, 10, 810),
(6, 4, 4, 10, 720),
(7, 4, 5, 10, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Travelling'),
(2, 'Duffel'),
(3, 'Office'),
(4, 'Regular'),
(5, 'Other bags\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `contactnumber` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `heading`, `contactnumber`, `email`) VALUES
(1, 'Contact', 1641064685, 'munna.ak17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerservice`
--

CREATE TABLE `tbl_customerservice` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customerservice`
--

INSERT INTO `tbl_customerservice` (`id`, `heading`, `title`, `description`) VALUES
(1, 'Customer Service', 'Customer', 'Satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forgot_pass`
--

CREATE TABLE `tbl_forgot_pass` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `expired` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `order_date` int(100) NOT NULL,
  `order_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(111) NOT NULL,
  `name` int(111) NOT NULL,
  `mobile1` varchar(111) NOT NULL,
  `mobile2` varchar(111) DEFAULT NULL,
  `address` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `userid` int(111) NOT NULL,
  `cart_id` int(111) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policy`
--

CREATE TABLE `tbl_policy` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_policy`
--

INSERT INTO `tbl_policy` (`id`, `heading`, `title`, `description`) VALUES
(2, 'Policy', 'Policy is everything', 'Amiruzzaman Is great');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `buy_price` float NOT NULL,
  `product_price` float NOT NULL,
  `discount` float NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `newarrival` tinyint(1) NOT NULL,
  `category_fk` int(100) NOT NULL,
  `type_fk` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `status_fk` varchar(100) NOT NULL,
  `specification` text,
  `sold_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `code`, `buy_price`, `product_price`, `discount`, `product_quantity`, `newarrival`, `category_fk`, `type_fk`, `image1`, `image2`, `image3`, `status_fk`, `specification`, `sold_item`) VALUES
(1, 'Office Bag', 'Office-1', 1000, 1200, 5, 20, 1, 3, 1, 'product/Office-1-1.jpg', 'product/Office-1-2.jpg', 'product/Office-1-3.jpg', '5', '["Good","Excellent","Nice bag"]', 1),
(2, 'Office Bag', 'Office-2', 1300, 1500, 10, 10, 0, 3, 1, 'product/Office-2-1.jpg', 'product/Office-2-2.jpg', 'product/Office-2-3.jpg', '5', '["Excellent","Very Cool","Great"]', 0),
(3, 'Gents Bag', 'Gents-1', 800, 1000, 1, 10, 1, 1, 1, 'product/Gents-1-1.jpg', 'product/Gents-1-2.jpg', 'product/Gents-1-3.jpg', '5', '["Cool Looking","Stylish","Good"]', 1),
(4, 'Ladis Bag', 'Ladis-1', 500, 800, 10, 10, 0, 4, 2, 'product/Ladis-1-1.jpg', 'product/Ladis-1-2.jpg', 'product/Ladis-1-3.jpg', '5', '["Lovely looking","Nice",null]', 0),
(5, 'Travelling Bag', 'Travelling-1', 1800, 2500, 0, 10, 1, 1, 1, 'product/Travelling-1-1.jpg', 'product/Travelling-1-2.jpg', 'product/Travelling-1-3.jpg', '5', '["Cool Looking","Attractive","Gorgeous"]', 0),
(6, 'Collage Bag', 'Collage-1', 500, 900, 10, 5, 0, 4, 1, 'product/Collage-1-1.jpg', 'product/Collage-1-2.jpg', 'product/Collage-1-3.jpg', '5', '["Cool Looking","For Every session","Nice"]', 1),
(7, 'Other Bags', 'Other-1', 1200, 1700, 2, 11, 1, 5, 1, 'product/Other-1-1.jpg', 'product/Other-1-2.jpg', 'product/Other-1-3.jpg', '5', '["Very Nice","Good Looking","Strong"]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quality`
--

CREATE TABLE `tbl_quality` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quality`
--

INSERT INTO `tbl_quality` (`id`, `heading`, `title`, `description`) VALUES
(1, 'Quality Heading', 'Quality is Good', 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_returnpolicy`
--

CREATE TABLE `tbl_returnpolicy` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_returnpolicy`
--

INSERT INTO `tbl_returnpolicy` (`id`, `heading`, `title`, `description`) VALUES
(1, 'Return Policy', 'Product can not be Returnable', 'Amiruzzaman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `heading`, `title`, `description`) VALUES
(1, 'Shipping Heading', 'Shipping', 'It''s good');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `facebook`, `twitter`, `instagram`, `youtube`) VALUES
(1, 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `name`) VALUES
(1, 'pending\r\n'),
(2, 'delivered'),
(3, 'return'),
(4, 'cancel'),
(5, 'Active'),
(6, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `name`) VALUES
(1, 'Gents'),
(2, 'Ladies');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `mobile1` varchar(100) NOT NULL,
  `mobile2` varchar(100) DEFAULT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`, `confirm_password`, `mobile1`, `mobile2`, `address`) VALUES
(4, 'Md. Amiruzzaman Munna', 'admin', 'munna.ak17@gmail.com', '12345', '12345', '111111111', '01641064685', 'gazipur, joydevpur');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order`
--
CREATE TABLE `view_order` (
`id` int(111)
,`name` int(111)
,`mobile1` varchar(111)
,`mobile2` varchar(111)
,`address` varchar(111)
,`email` varchar(111)
,`userid` int(111)
,`cart_id` int(111)
,`date` date
,`status` tinyint(1)
,`quantity` int(100)
,`unit_price` double
,`code` varchar(100)
,`product_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product`
--
CREATE TABLE `view_product` (
`id` int(100)
,`product_name` varchar(100)
,`code` varchar(100)
,`buy_price` float
,`product_price` float
,`discount` float
,`product_quantity` int(100)
,`newarrival` tinyint(1)
,`image1` varchar(100)
,`image2` varchar(100)
,`image3` varchar(100)
,`specification` text
,`sold_item` int(11)
,`category_name` varchar(100)
,`type_name` varchar(100)
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_order`
--
DROP TABLE IF EXISTS `view_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order`  AS  select `tbl_order`.`id` AS `id`,`tbl_order`.`name` AS `name`,`tbl_order`.`mobile1` AS `mobile1`,`tbl_order`.`mobile2` AS `mobile2`,`tbl_order`.`address` AS `address`,`tbl_order`.`email` AS `email`,`tbl_order`.`userid` AS `userid`,`tbl_order`.`cart_id` AS `cart_id`,`tbl_order`.`date` AS `date`,`tbl_order`.`status` AS `status`,`tbl_cart`.`quantity` AS `quantity`,`tbl_cart`.`unit_price` AS `unit_price`,`tbl_product`.`code` AS `code`,`tbl_product`.`product_name` AS `product_name` from ((`tbl_order` join `tbl_cart`) join `tbl_product`) where ((`tbl_order`.`cart_id` = `tbl_cart`.`id`) and (`tbl_cart`.`product_id` = `tbl_product`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS  select `tbl_product`.`id` AS `id`,`tbl_product`.`product_name` AS `product_name`,`tbl_product`.`code` AS `code`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`product_price` AS `product_price`,`tbl_product`.`discount` AS `discount`,`tbl_product`.`product_quantity` AS `product_quantity`,`tbl_product`.`newarrival` AS `newarrival`,`tbl_product`.`image1` AS `image1`,`tbl_product`.`image2` AS `image2`,`tbl_product`.`image3` AS `image3`,`tbl_product`.`specification` AS `specification`,`tbl_product`.`sold_item` AS `sold_item`,`tbl_category`.`name` AS `category_name`,`tbl_type`.`name` AS `type_name`,`tbl_status`.`name` AS `status_name` from (((`tbl_product` left join `tbl_category` on((`tbl_product`.`category_fk` = `tbl_category`.`id`))) left join `tbl_type` on((`tbl_product`.`type_fk` = `tbl_type`.`id`))) left join `tbl_status` on((`tbl_product`.`status_fk` = `tbl_status`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customerservice`
--
ALTER TABLE `tbl_customerservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forgot_pass`
--
ALTER TABLE `tbl_forgot_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_returnpolicy`
--
ALTER TABLE `tbl_returnpolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_customerservice`
--
ALTER TABLE `tbl_customerservice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_forgot_pass`
--
ALTER TABLE `tbl_forgot_pass`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_returnpolicy`
--
ALTER TABLE `tbl_returnpolicy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
