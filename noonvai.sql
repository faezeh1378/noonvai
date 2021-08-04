-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noonvai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` tinyint(11) NOT NULL,
  `brand_title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'سنگک 1078'),
(2, 'نانوایی دلیران'),
(3, 'نانوائی مجید'),
(4, 'نانوایی برازشی');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` tinyint(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'نان سنگک'),
(2, 'نان بربری'),
(3, 'نان فانتزی'),
(4, 'نان لواش'),
(5, 'نان روغنی'),
(8, 'نان تافتون');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `user_id` tinyint(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`user_id`, `username`, `password`) VALUES
(1, 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` tinyint(11) NOT NULL,
  `pro_cat` tinyint(11) NOT NULL,
  `pro_brand` tinyint(11) NOT NULL,
  `pro_title` text COLLATE utf8_persian_ci NOT NULL,
  `pro_desc` text COLLATE utf8_persian_ci NOT NULL,
  `pro_thumb` text COLLATE utf8_persian_ci NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_tags` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_cat`, `pro_brand`, `pro_title`, `pro_desc`, `pro_thumb`, `pro_price`, `pro_tags`) VALUES
(1, 3, 4, 'نان فانتزی', 'نان ساندویچی بسته 6 تایی ', '11.png', 60000, 'نان ساندویچی'),
(2, 4, 4, 'نان لواش ', 'نان لواش ماشینی', '55.png', 20000, 'نان لواش'),
(3, 5, 2, 'نان روغنی', 'نان روغنی', '77.jpg', 20000, 'نان روغنی'),
(4, 1, 1, 'نان سنگگ', ' سنگگ سنتی و کنجدی\r\n\r\n', '98.png', 17500, 'سنگگ سنتی و کنجدی'),
(5, 1, 1, 'نان سنگگ', 'نان سنگگ', '99.jpg', 15000, 'نان سنگگ'),
(6, 4, 4, 'نان لواش ', 'نان لواش سنتی', '66.jpg', 2500, 'نان لواش سنتی'),
(7, 3, 3, 'نان فانتزی', 'نان باگت', '33.jpg', 200000, 'نان باگت'),
(8, 6, 4, 'نان تافتون ', 'نان تافتون کنجدی', '22.jpg', 35000, 'نان تانفتون کنجدی'),
(9, 2, 3, 'نان بربری', 'نان بربری کنجدی ', '88.jpg', 17500, 'نان بربری ساده');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `phonecall` int(100) NOT NULL,
  `address` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `namestore` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `products` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `user_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
