-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 05:02 PM
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
(1, 'Amiruzzaman', 'Admin', '01787284068', 'munna.ak17@gmail.com', 'aaaaa', 'aaaaa'),
(3, 'Amiruzzaman', 'Amir Admin', '1641064685', 'munna.ak17@gmail.com', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `contactnumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `heading`, `contactnumber`, `email`) VALUES
(1, 'Contact', '01641064685', 'munna.ak17@gmail.com');

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
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `image1`, `image2`, `image3`) VALUES
(1, 'slider/1545746048-1.jpg', 'slider/1545746048-2.jpg', 'slider/1545746048-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `totalprice` double NOT NULL,
  `order_date` date NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `user_id`, `totalprice`, `order_date`, `status`) VALUES
(1, 5, 12000, '2018-12-21', 2),
(2, 10, 16000, '2018-12-21', 3),
(3, 5, 11000, '2018-12-23', 2),
(4, 5, 6000, '2018-12-23', 2),
(5, 5, 7000, '2018-12-23', 1),
(6, 4, 6600, '2018-12-24', 3),
(7, 4, 6000, '2018-12-25', 1),
(8, 4, 7200, '2018-12-25', 1),
(9, 4, 31800, '2018-12-25', 1),
(10, 4, 22000, '2018-12-25', 3),
(11, 4, 5000, '2018-12-25', 1),
(12, 4, 6000, '2018-12-25', 2),
(13, 5, 17600, '2018-12-25', 1),
(14, 11, 6000, '2018-12-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_left_image`
--

CREATE TABLE `tbl_left_image` (
  `id` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_left_image`
--

INSERT INTO `tbl_left_image` (`id`, `image1`) VALUES
(1, 'slider/1543428411-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `mobile1` varchar(111) NOT NULL,
  `mobile2` varchar(111) DEFAULT NULL,
  `address` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `userid` int(111) NOT NULL,
  `cart_id` int(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invoice_id` int(11) NOT NULL,
  `totalprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `product_id`, `quantity`, `name`, `mobile1`, `mobile2`, `address`, `email`, `userid`, `cart_id`, `date`, `invoice_id`, `totalprice`) VALUES
(1, 5, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 1, '2018-12-21 20:13:40', 1, 7000),
(2, 10, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 2, '2018-12-21 20:13:40', 1, 5000),
(3, 1, 10, 'Naimul Ferdous', '01641064685', '01641064685', 'Uttora', 'naimul@gmail.com', 10, 3, '2018-12-21 20:15:54', 2, 11000),
(4, 8, 10, 'Naimul Ferdous', '01641064685', '01641064685', 'Uttora', 'naimul@gmail.com', 10, 4, '2018-12-21 20:15:54', 2, 5000),
(5, 1, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 1, '2018-12-23 04:54:42', 3, 11000),
(6, 4, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 2, '2018-12-23 04:57:38', 4, 6000),
(7, 3, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 1, '2018-12-23 05:15:04', 5, 7000),
(8, 4, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 1, '2018-12-24 08:49:56', 6, 6600),
(9, 4, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 1, '2018-12-25 05:45:18', 7, 6000),
(10, 6, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 2, '2018-12-25 05:52:54', 8, 7200),
(11, 5, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 23, '2018-12-25 06:17:27', 9, -8400),
(12, 6, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 26, '2018-12-25 06:17:27', 9, 7200),
(13, 6, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 27, '2018-12-25 06:17:27', 9, 7200),
(14, 6, 11, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 28, '2018-12-25 06:17:28', 9, 6600),
(15, 6, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 29, '2018-12-25 06:17:28', 9, 6000),
(16, 6, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 34, '2018-12-25 06:17:28', 9, 6000),
(17, 6, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 35, '2018-12-25 06:17:28', 9, 7200),
(18, 4, 10, 'Md. Amiruzzaman Munna', '01641064685', '01787284068', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 37, '2018-12-25 06:20:07', 10, 6000),
(19, 1, 10, 'Md. Amiruzzaman Munna', '01641064685', '01787284068', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 38, '2018-12-25 06:20:07', 10, 11000),
(20, 8, 10, 'Md. Amiruzzaman Munna', '01641064685', '01787284068', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 39, '2018-12-25 06:20:07', 10, 5000),
(21, 10, 10, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 40, '2018-12-25 06:22:36', 11, 5000),
(22, 9, 12, 'Md. Amiruzzaman Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 4, 1, '2018-12-25 06:55:23', 12, 6000),
(23, 4, 11, 'Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 1, '2018-12-25 09:46:29', 13, 6600),
(24, 1, 10, 'Munna', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 5, 2, '2018-12-25 09:46:29', 13, 11000),
(25, 4, 10, 'Ali', '01641064685', '01641064685', 'gazipur, joydevpur', 'munna.ak17@gmail.com', 11, 1, '2018-12-26 11:10:01', 14, 6000);

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
(2, 'Policy', 'Policy is everything', 'policy of this company is superve');

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
  `discount` varchar(100) DEFAULT NULL,
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
(1, 'Travelling', 'Travelling-1', 700, 1100, NULL, 159, 1, 1, 1, 'product/Travelling-1-1.jpg', 'product/Travelling-1-2.jpg', 'product/Travelling-1-3.jpg', '5', '["Style Looking","Gorgeous","Durable"]', 0),
(2, 'Office', 'Office-1', 400, 700, NULL, 100, 1, 3, 1, 'product/Office-1-1.jpg', 'product/Office-1-2.jpeg', 'product/Office-1-3.jpg', '5', '["Office Stylish bag","Nice Looking","Attractive and Durable"]', 0),
(3, 'Office', 'Office-2', 300, 700, NULL, 90, 1, 3, 1, 'product/Office-2-1.jpg', 'product/Office-2-2.jpg', 'product/Office-2-3.jpg', '5', '["New Office Bag","Durable and Attractive","Easy to Use"]', 0),
(4, 'Office', 'Office-3', 400, 600, NULL, 37, 1, 3, 1, 'product/Office-3-1.jpg', 'product/Office-3-2.jpg', 'product/Office-3-3.jpg', '5', '["Easy to Carry","Durable","Very suitable for office use"]', 0),
(5, 'Office', 'Office-3', 470, 700, NULL, 78, 1, 3, 1, 'product/Office-3-1.jpg', 'product/Office-3-2.jpg', 'product/Office-3-3.jpg', '5', '["Good Bag","Easy to Carry","Durable"]', 0),
(6, 'Travelling', 'Travelling-2', 300, 600, NULL, 21, 1, 1, 1, 'product/Travelling-2-1.jpg', 'product/Travelling-2-2.jpg', 'product/Travelling-2-3.jpg', '5', '["Easy to use","Nice Looking",null]', 0),
(7, 'Gents', 'Gents-1', 500, 800, NULL, 100, 1, 4, 1, 'product/Gents-1-1.jpeg', 'product/Gents-1-2.jpeg', 'product/Gents-1-3.jpg', '5', '["Regular carrying bag","Everyday use","Cool Looking"]', 0),
(8, 'Regular', 'Regular-1', 250, 500, NULL, 80, 1, 4, 1, 'product/Regular-1-1.jpg', 'product/Regular-1-2.jpg', 'product/Regular-1-3.png', '5', '["Regular Use","Use both Gents and Female",null]', 0),
(9, 'Other bags', 'Other bags-1', 200, 500, NULL, 88, 1, 5, 1, 'product/Other bags-1-1.jpg', 'product/Other bags-1-2.jpg', 'product/Other bags-1-3.jpg', '5', '["Everybody Use","Cool Looking",null]', 0),
(10, 'Ladies', 'Ladies-1', 400, 500, NULL, 80, 1, 4, 2, 'product/Ladies-1-1.jpg', 'product/Ladies-1-2.jpg', 'product/Ladies-1-3.jpg', '5', '["Ladies bag","New Arrival Ladies","Fashionable"]', 0),
(11, 'Duffel', 'Duffel-1', 200, 400, NULL, 95, 1, 2, 1, 'product/Duffel-1-1.jpg', 'product/Duffel-1-2.jpg', 'product/Duffel-1-3.jpg', '5', '["Duffel Bag","Duffel bags are great","Durable"]', 0),
(12, 'Ladies', 'Ladies-2', 1100, 1400, NULL, 100, 1, 1, 2, 'product/Ladies-2-1.jpg', 'product/Ladies-2-2.jpg', 'product/Ladies-2-3.jpg', '5', '["Excellent Condition","Cool Looking",null]', 1);

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
(1, 'Quality Heading', 'Quality is Good', 'Qualitys of this company is marvelous.It''s trustable \nevery one can buy and trust this company');

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
-- Table structure for table `tbl_right`
--

CREATE TABLE `tbl_right` (
  `id` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_right`
--

INSERT INTO `tbl_right` (`id`, `image1`) VALUES
(1, 'slider/1543428383-1.jpg');

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
(1, 'https://www.facebook.com/zuck1', 'https://twitter.com', 'https://www.instagram.com', 'https://www.youtube.com');

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
(3, 'returned'),
(4, 'canceled'),
(5, 'Active'),
(6, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transection`
--

CREATE TABLE `tbl_transection` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` float NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transection`
--

INSERT INTO `tbl_transection` (`id`, `date`, `amount`, `role`) VALUES
(1, '2018-12-21', 12000, 1),
(2, '2018-12-21', 16000, 1),
(3, '2018-12-23', 6000, 1),
(4, '2018-12-23', 11000, 1),
(5, '2018-12-23', 12000, 1),
(6, '2018-12-24', 6600, 1),
(7, '2018-12-24', 6600, 1),
(8, '2018-12-25', 6000, 1),
(9, '2018-12-26', 6000, 1);

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
(4, 'Md. Amiruzzaman Munna', 'user', 'munna.ak17@gmail.com', '12345', '12345', '111111111', '01641064685', 'gazipur, joydevpur'),
(5, 'Munna', 'Amir', 'munna.ak17@gmail.com', '11111', '11111', '01641064685', '01641064685', 'gazipur, joydevpur'),
(6, 'Ifat', 'ifat', 'ifat@gmail.com', '1234', '1234', '32423423', '234234234', 'Dhaka'),
(7, 'Ifat hasan', 'Ifat hasan', 'ifat@gmail.com', '11111', '11111', '121212', '1212112', 'uttora'),
(8, 'Arifuzzaman', 'Arif', 'arif@gmail.com', '11111', '11111', '12121212', '12121212', 'Uttora Dhaka'),
(9, 'rifat', 'rifat', 'ri@gmail.com', 'adhar12', 'adhar12', '1641', '01641064685', 'gazipur, joydevpur'),
(10, 'Naimul Ferdous', 'naim93', 'ferdousnaimul@gmail.com', '12345', '12345', '0928492307934r9', '7847894698713', 'Uttara'),
(11, 'Ali', 'Ali', 'munna.ak17@gmail.com', '11111', '11111', '01787284068', '01641064685', 'gazipur, joydevpur');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_invoice`
--
CREATE TABLE `view_invoice` (
`invoice_id` int(11)
,`order_date` date
,`totalprice` double
,`status` int(100)
,`id` int(11)
,`name` varchar(100)
,`username` varchar(100)
,`email` varchar(100)
,`password` varchar(100)
,`confirm_password` varchar(100)
,`mobile1` varchar(100)
,`mobile2` varchar(100)
,`address` text
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order`
--
CREATE TABLE `view_order` (
`id` int(11)
,`product_id` int(11)
,`quantity` int(11)
,`name` varchar(111)
,`mobile1` varchar(111)
,`mobile2` varchar(111)
,`address` text
,`email` varchar(40)
,`userid` int(111)
,`cart_id` int(111)
,`date` timestamp
,`invoice_id` int(11)
,`totalprice` int(100)
,`status` int(100)
,`status_name` varchar(100)
,`product_name` varchar(100)
,`code` varchar(100)
,`image1` varchar(100)
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
,`discount` varchar(100)
,`product_quantity` int(100)
,`newarrival` tinyint(1)
,`image1` varchar(100)
,`image2` varchar(100)
,`image3` varchar(100)
,`specification` text
,`sold_item` int(11)
,`category` int(100)
,`category_name` varchar(100)
,`type` int(100)
,`type_name` varchar(100)
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_invoice`
--
DROP TABLE IF EXISTS `view_invoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice`  AS  select `tbl_invoice`.`id` AS `invoice_id`,`tbl_invoice`.`order_date` AS `order_date`,`tbl_invoice`.`totalprice` AS `totalprice`,`tbl_invoice`.`status` AS `status`,`tbl_user`.`id` AS `id`,`tbl_user`.`name` AS `name`,`tbl_user`.`username` AS `username`,`tbl_user`.`email` AS `email`,`tbl_user`.`password` AS `password`,`tbl_user`.`confirm_password` AS `confirm_password`,`tbl_user`.`mobile1` AS `mobile1`,`tbl_user`.`mobile2` AS `mobile2`,`tbl_user`.`address` AS `address`,`tbl_status`.`name` AS `status_name` from ((`tbl_invoice` join `tbl_user`) join `tbl_status`) where ((`tbl_invoice`.`user_id` = `tbl_user`.`id`) and (`tbl_invoice`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_order`
--
DROP TABLE IF EXISTS `view_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order`  AS  select `tbl_order`.`id` AS `id`,`tbl_order`.`product_id` AS `product_id`,`tbl_order`.`quantity` AS `quantity`,`tbl_order`.`name` AS `name`,`tbl_order`.`mobile1` AS `mobile1`,`tbl_order`.`mobile2` AS `mobile2`,`tbl_order`.`address` AS `address`,`tbl_order`.`email` AS `email`,`tbl_order`.`userid` AS `userid`,`tbl_order`.`cart_id` AS `cart_id`,`tbl_order`.`date` AS `date`,`tbl_order`.`invoice_id` AS `invoice_id`,`tbl_order`.`totalprice` AS `totalprice`,`tbl_invoice`.`status` AS `status`,`tbl_status`.`name` AS `status_name`,`tbl_product`.`product_name` AS `product_name`,`tbl_product`.`code` AS `code`,`tbl_product`.`image1` AS `image1` from (((`tbl_order` join `tbl_invoice`) join `tbl_product`) join `tbl_status`) where ((`tbl_invoice`.`id` = `tbl_order`.`invoice_id`) and (`tbl_order`.`product_id` = `tbl_product`.`id`) and (`tbl_invoice`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS  select `tbl_product`.`id` AS `id`,`tbl_product`.`product_name` AS `product_name`,`tbl_product`.`code` AS `code`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`product_price` AS `product_price`,`tbl_product`.`discount` AS `discount`,`tbl_product`.`product_quantity` AS `product_quantity`,`tbl_product`.`newarrival` AS `newarrival`,`tbl_product`.`image1` AS `image1`,`tbl_product`.`image2` AS `image2`,`tbl_product`.`image3` AS `image3`,`tbl_product`.`specification` AS `specification`,`tbl_product`.`sold_item` AS `sold_item`,`tbl_category`.`id` AS `category`,`tbl_category`.`name` AS `category_name`,`tbl_type`.`id` AS `type`,`tbl_type`.`name` AS `type_name`,`tbl_status`.`name` AS `status_name` from (((`tbl_product` left join `tbl_category` on((`tbl_product`.`category_fk` = `tbl_category`.`id`))) left join `tbl_type` on((`tbl_product`.`type_fk` = `tbl_type`.`id`))) left join `tbl_status` on((`tbl_product`.`status_fk` = `tbl_status`.`id`))) ;

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
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_left_image`
--
ALTER TABLE `tbl_left_image`
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
-- Indexes for table `tbl_right`
--
ALTER TABLE `tbl_right`
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
-- Indexes for table `tbl_transection`
--
ALTER TABLE `tbl_transection`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_left_image`
--
ALTER TABLE `tbl_left_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
-- AUTO_INCREMENT for table `tbl_right`
--
ALTER TABLE `tbl_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `tbl_transection`
--
ALTER TABLE `tbl_transection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
