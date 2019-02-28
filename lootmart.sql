-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 06:10 AM
-- Server version: 5.5.20
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lootmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'LG'),
(4, 'Apple'),
(5, 'Sony'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(1, 9, '0', 1, 'Ladies Casual Cloths', 'summerdress.jpg', 1, 2000, 2000),
(2, 7, '0', 1, 'Red LAdies Dress', 'reddress.jpg', 1, 1000, 1000),
(3, 1, '0', 1, 'Samsung Dous', 'android.jpg', 1, 5000, 5000),
(4, 6, '0', 1, 'Sony Mobile', 'sony.jpg', 1, 10000, 10000),
(9, 3, '0', 1, 'iPad', 'logo2.jpg', 1, 12000, 12000),
(63, 2, '0', 6, 'iPhone 5s', 'iphone.jpg', 3, 10000, 30000),
(64, 3, '0', 6, 'iPad', 'logo2.jpg', 5, 12000, 60000),
(68, 1, '0', 6, 'Samsung Dous', 'android.jpg', 1, 5000, 5000),
(69, 4, '0', 6, 'HP Laptop r series', 'window.jpg', 1, 20000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Mens Wear'),
(3, 'Ladies Wears'),
(4, 'Kids Wears'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronic Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE IF NOT EXISTS `customer_order` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keyword` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keyword`) VALUES
(1, 1, 2, 'Samsung Dous', 5000, 'Samsung Dous 2', 'android.jpg', 'samsung mobile galaxy'),
(2, 1, 3, 'iPhone 5s', 10000, 'iPhone 5s', 'iphone.jpg', 'iPhone apple '),
(3, 1, 3, 'iPad', 12000, 'iPad apple brand', 'logo2.jpg', 'apple ipad tablet'),
(4, 1, 1, 'HP Laptop r series', 20000, 'HP red and black combination laptop', 'window.jpg', 'hp laptop'),
(5, 1, 1, 'HP Pavillion', 20000, 'HP Pavillion', 'window2.jpg', 'HP laptop pavillion'),
(6, 1, 4, 'Sony Mobile', 10000, 'Sony Mobile', 'sony.jpg', 'Sony Mobile'),
(7, 3, 6, 'Red LAdies Dress', 1000, 'red dress for girls', 'reddress.jpg', 'red dress'),
(8, 3, 6, 'Blue Heave Dress', 2000, 'blue dress', 'bluedress.jpg', 'blue dress cloths'),
(9, 3, 6, 'Ladies Casual Cloths', 2000, 'summer casula two colors pleted clothes', 'summerdress.jpg', 'girls dress cloths casual'),
(10, 3, 6, 'SpringAutumnDress', 1200, 'girls dress', 'dress.jpg', 'girls dress');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE IF NOT EXISTS `received_payment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(2, 'Sohil', 'Vahora', 'sohilvahora@gmail.com', '83c31d5ed3fb5d311dc46789e5a8ccce', '9979086351', 'Padra', 'Kathlal'),
(3, 'Sohil', 'Vahora', 'sohilvahora16@gmail.com', '59f4adee85af33e374321f4ed7fb13e0', '9979086310', 'Padra', 'sdsd'),
(5, 'Saransh', 'Jain', 'saranshjain96@gmail.com', 'e388c1c5df4933fa01f6da9f92595589', '7418529630', 'BArodiya', 'asasas'),
(6, 'Sohil', 'Vahora', 'sohilvahora1996@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '9979086310', 'Kathlal', 'Nadiad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
