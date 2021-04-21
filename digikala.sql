-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2021 at 02:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digikala`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `street_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `city_id`, `street_id`, `address`, `user_id`) VALUES
(7, 3, 14, 'بلوار یک - پلاک 60 -طبقه 1', 7),
(2, 1, 2, 'ستارخان 15 - پلاک 5 - طبقه دوم', 3),
(3, 1, 4, 'ستارخان 15 - پلاک 200 - طبقه 2', 3),
(4, 2, 10, 'شهریار 5 - پلاک 385 - طبقه اول', 2),
(5, 2, 9, 'پیروزی 152 . پلاک 8 . طبقه 2', 2),
(6, 1, 2, 'احمد اباد 15 - پلاک 65 - طبقه 3', 7),
(9, 1, 1, 'بلوار یک - پلاک 25 - طبقه 2', 8),
(10, 1, 3, 'بلوار یک بلوار یک', 9),
(11, 1, 3, 'بلوار یک بلوار یک', 9);

-- --------------------------------------------------------

--
-- Table structure for table `all_menus`
--

DROP TABLE IF EXISTS `all_menus`;
CREATE TABLE IF NOT EXISTS `all_menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_menus`
--

INSERT INTO `all_menus` (`id`, `name`, `icon`) VALUES
(1, 'کالا های دیجیتال', 'fab fa-digital-ocean'),
(2, 'خوردرو ابزار', 'fas fa-tools'),
(3, 'مود پوشاک', 'fas fa-tshirt'),
(4, 'اسباب بازی  و نوزاد', 'fas fa-baby'),
(5, 'سوپر مارکت', 'fas fa-shopping-basket'),
(6, 'زیبای سلامت', 'fas fa-heart'),
(7, 'خانه و اشپزخانه', 'fas fa-home'),
(8, 'کتاب لوازم تحریر', 'fas fa-pen'),
(9, 'ورزش سفر', 'fas fa-route');

-- --------------------------------------------------------

--
-- Table structure for table `attr_comments`
--

DROP TABLE IF EXISTS `attr_comments`;
CREATE TABLE IF NOT EXISTS `attr_comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attr_comments`
--

INSERT INTO `attr_comments` (`id`, `name`, `model`, `comment_id`) VALUES
(11, '2', 1, 11),
(12, '4', 0, 13),
(13, '2', 1, 11),
(14, '4', 0, 11),
(9, '1', 1, 9),
(10, '4', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `attr_filters`
--

DROP TABLE IF EXISTS `attr_filters`;
CREATE TABLE IF NOT EXISTS `attr_filters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_filter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attr_filters`
--

INSERT INTO `attr_filters` (`id`, `name`, `title_filter_id`) VALUES
(1, '4G', 1),
(2, '6G', 1),
(3, '8G', 1),
(4, '13', 2),
(5, '16', 2),
(6, '32', 2),
(7, '1', 3),
(8, '2', 3),
(9, '6', 4),
(10, '8', 4),
(11, '10', 4),
(12, 'OLED', 5),
(13, 'SU OMOLED', 5),
(14, 'TFT', 5),
(15, 'LCD', 5),
(17, '64', 2);

-- --------------------------------------------------------

--
-- Table structure for table `attr_products`
--

DROP TABLE IF EXISTS `attr_products`;
CREATE TABLE IF NOT EXISTS `attr_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_filter_id` bigint(20) UNSIGNED NOT NULL,
  `attr_filter_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attr_products_title_filter_id_foreign` (`title_filter_id`),
  KEY `attr_products_attr_filter_id_foreign` (`attr_filter_id`),
  KEY `attr_products_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attr_products`
--

INSERT INTO `attr_products` (`id`, `title_filter_id`, `attr_filter_id`, `product_id`, `menu_id`) VALUES
(1, 1, 3, 21, 1),
(2, 2, 6, 21, 1),
(3, 3, 8, 21, 1),
(4, 4, 11, 21, 1),
(5, 5, 13, 21, 1),
(11, 2, 6, 6, 1),
(10, 1, 3, 6, 1),
(12, 3, 8, 6, 1),
(13, 4, 11, 6, 1),
(14, 5, 13, 6, 1),
(15, 1, 1, 7, 1),
(16, 2, 4, 7, 1),
(17, 3, 8, 7, 1),
(18, 4, 9, 7, 1),
(19, 5, 15, 7, 1),
(20, 2, 4, 8, 1),
(21, 1, 2, 8, 1),
(22, 3, 8, 8, 1),
(23, 4, 10, 8, 1),
(24, 5, 12, 8, 1),
(25, 1, 3, 22, 1),
(26, 2, 6, 22, 1),
(27, 3, 8, 22, 1),
(28, 4, 11, 22, 1),
(29, 5, 13, 22, 1),
(30, 2, 6, 23, 1),
(31, 1, 3, 23, 1),
(32, 3, 8, 23, 1),
(33, 4, 11, 23, 1),
(34, 5, 13, 23, 1),
(35, 1, 1, 24, 1),
(36, 2, 4, 24, 1),
(37, 3, 8, 24, 1),
(38, 4, 9, 24, 1),
(39, 5, 15, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_centers`
--

DROP TABLE IF EXISTS `banner_centers`;
CREATE TABLE IF NOT EXISTS `banner_centers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_centers`
--

INSERT INTO `banner_centers` (`id`, `product_id`, `title`, `alt`, `address`, `created_at`, `updated_at`) VALUES
(1, '1', '39 میلیون درامد', '39 میلیون درامد', 'banner_center_1.jpg', '2020-10-27 07:00:00', '2020-10-24 07:00:00'),
(2, '2', 'کرونا', 'کرونا', 'banner_center_2.jpg', '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(3, '1', 'محصولات بومی', 'محصولات بومی', 'banner_center_3.jpg', '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(4, '2', 'هدیه', 'هدیه', 'banner_center_4.jpg', '2021-01-05 08:00:00', '2021-01-26 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner_ends`
--

DROP TABLE IF EXISTS `banner_ends`;
CREATE TABLE IF NOT EXISTS `banner_ends` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_slides`
--

DROP TABLE IF EXISTS `banner_slides`;
CREATE TABLE IF NOT EXISTS `banner_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_slides`
--

INSERT INTO `banner_slides` (`id`, `title`, `alt`, `address`) VALUES
(1, 'خرید خونه تکونی', 'خرید خونه تکونی', 'min_slide_1.gif'),
(2, 'سال نو با دیجی استایل', 'سال نو با دیجی استایل', 'min_slide_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_times`
--

DROP TABLE IF EXISTS `banner_times`;
CREATE TABLE IF NOT EXISTS `banner_times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_ups`
--

DROP TABLE IF EXISTS `banner_ups`;
CREATE TABLE IF NOT EXISTS `banner_ups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_ups`
--

INSERT INTO `banner_ups` (`id`, `title`, `alt`, `address`, `status`, `product_id`) VALUES
(1, 'تخفیف 75', 'تخفیف 75', 'banner_up_1.gif', '1', 1),
(2, 'اسباب بازی', 'اسباب بازی', 'banner_up_2.gif', '1', 2),
(3, 'موسیقی', 'موسیقی', 'banner_up_3.gif', '1', 3),
(4, 'پی اس 5', 'پی اس 5', 'banner_up_4.gif', '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

DROP TABLE IF EXISTS `baskets`;
CREATE TABLE IF NOT EXISTS `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `product_id`, `user_id`, `number`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(30, 21, 7, 2, '23750000', 0, '2021-04-19 13:53:13', '2021-04-19 13:53:16'),
(31, 7, 7, 1, '5200000', 0, '2021-04-19 13:53:32', '2021-04-19 13:53:32'),
(32, 21, 8, 1, '23750000', 0, '2021-04-19 14:13:58', '2021-04-19 14:13:58'),
(28, 21, 2, 1, '23750000', 0, '2021-04-15 00:51:11', '2021-04-15 00:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`) VALUES
(1, 'LG', 'lg_1.jpg'),
(2, 'samsung', 'samsung_1.jpg'),
(3, 'beats', 'be_1.jpg'),
(4, 'not brand', 'not.jpg'),
(5, 'JBL', 'jbl_1.jpg'),
(6, 'MI', 'mi_1.jpg'),
(7, 'sony', 'sony_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

DROP TABLE IF EXISTS `citys`;
CREATE TABLE IF NOT EXISTS `citys` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `name`) VALUES
(1, 'مشهد'),
(2, 'تهران'),
(3, 'اصفهان'),
(4, 'کرج'),
(5, 'شیراز');

-- --------------------------------------------------------

--
-- Table structure for table `comment_products`
--

DROP TABLE IF EXISTS `comment_products`;
CREATE TABLE IF NOT EXISTS `comment_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `vote_bad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote_good` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_products`
--

INSERT INTO `comment_products` (`id`, `title`, `text`, `status`, `user_id`, `product_id`, `dislike`, `like`, `vote_bad`, `vote_good`, `created_at`, `updated_at`) VALUES
(15, 'عالیه', 'بهترینه تو رنج خودش', 1, 3, 21, 0, 1, '{\"0\":\"\\u0642\\u06cc\\u0645\\u062a\",\"1\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc\"}', '{\"0\":\"\\u062f\\u0648\\u0631\\u0628\\u06cc\\u0646\",\"1\":\"\\u0628\\u0627\\u0637\\u0631\\u06cc\"}', '2021-04-08 13:41:04', '2021-04-17 12:34:47'),
(19, 'test', 'test', 1, 8, 10, 0, 1, '{\"0\":\"test\",\"1\":\"test 2\"}', '{\"0\":\"test\",\"1\":\"test 2\"}', '2021-04-19 20:52:02', '2021-04-19 20:52:28'),
(17, 'عالیه', 'بهترینه تو رنج خودش', 0, 3, 21, 0, 1, '{\"0\":\"\\u0642\\u06cc\\u0645\\u062a\",\"1\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc\"}', '{\"0\":\"\\u062f\\u0648\\u0631\\u0628\\u06cc\\u0646\",\"1\":\"\\u0628\\u0627\\u0637\\u0631\\u06cc\"}', '2021-04-08 13:41:04', '2021-04-08 13:41:18'),
(18, 'عالیه', 'بهترینه تو رنج خودش', 0, 3, 21, 0, 1, '{\"0\":\"\\u0642\\u06cc\\u0645\\u062a\",\"1\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc\"}', '{\"0\":\"\\u062f\\u0648\\u0631\\u0628\\u06cc\\u0646\",\"1\":\"\\u0628\\u0627\\u0637\\u0631\\u06cc\"}', '2021-04-08 13:41:04', '2021-04-08 13:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `discounted_products`
--

DROP TABLE IF EXISTS `discounted_products`;
CREATE TABLE IF NOT EXISTS `discounted_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `down_all_menus`
--

DROP TABLE IF EXISTS `down_all_menus`;
CREATE TABLE IF NOT EXISTS `down_all_menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_all_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `down_all_menus`
--

INSERT INTO `down_all_menus` (`id`, `name`, `slug`, `sub_all_menu_id`) VALUES
(1, 'کاور گوشی', 'caver-mobile', 1),
(2, 'گلس', 'gelass', 1),
(3, 'شارژر', 'charcher', 1),
(4, 'سامسونگ', 'samsung', 2),
(5, 'سونی', 'sony', 2),
(6, 'ال جی', 'lg', 2),
(7, 'سامسونگ', 'samsung', 3),
(8, 'اچ تی سی', 'htc', 3),
(9, 'سونی', 'sony', 3),
(10, 'شیاومی', 'mi', 4),
(11, 'سامسونگ', 'samsung', 5),
(12, 'سرفیس', 'surface', 5),
(13, 'جی بی ال', 'JBL', 6),
(14, 'بیتس', 'beats', 6),
(15, 'اینتل', 'intel', 7),
(16, 'سامسونگ', 'samsung', 7),
(17, 'کانون', 'canon', 8),
(18, 'سونی', 'sony', 8),
(19, 'لنز', 'lenz', 9),
(20, 'کیف', 'caver', 9),
(21, 'نیکون', 'nicon', 10),
(22, 'ایکس باکس', 'xbox', 11),
(23, 'سونی', 'sony', 11),
(24, 'مانیتور', 'manitor', 12),
(25, 'کیبورد', 'keybord', 12),
(26, 'لنوو', 'lenovo', 13),
(27, 'اچ پی ', 'hp', 13),
(28, 'ایسر', 'acer', 13),
(29, 'موس', 'mouse', 14),
(30, 'کول پد', 'coolpad', 14),
(31, 'سامسونگ', 'samsung', 15),
(32, 'سونی', 'sony', 15),
(33, 'ال چی', 'lg', 15),
(34, 'شارژر ', 'charcher', 16),
(35, 'کیف', 'caver', 16),
(36, 'تی پی لینک', 'tp-link', 17),
(37, 'دی لینک', 'd-link', 17),
(38, 'پیرینتر', 'prinbter', 18),
(39, 'اسکنر', 'eckaner', 18),
(40, 'سایپا', 'saypa', 19),
(41, 'بی ام و', 'bmw', 19),
(42, 'هوندا', 'honda', 20),
(43, 'چراغ', 'cheragh', 21),
(44, 'دریل', 'deril', 22),
(45, 'فرز', 'ferez', 22),
(46, 'پیچ', 'pich', 23),
(47, 'مهره', 'mohre', 23),
(48, 'قیچی', 'ghyjy', 24),
(49, 'شلنگ', 'shlang', 24),
(50, 'مهتابی', 'mahtabi', 25),
(51, 'ال ای دی', 'led', 25),
(52, 'زمستانی', 'zemstani', 26),
(53, 'شلوار', 'shalvar', 26),
(54, 'راحتی', 'rahati', 27),
(55, 'کوهنردی', 'koh-nvardi', 27),
(56, 'ساعت', 'saat', 28),
(57, 'دستبند', 'dastband', 28),
(58, 'زمستانی', 'zemstani-zan', 29),
(59, 'تابستانی', 'tabstani-zan', 29),
(60, 'راحتی', 'rahati-zan', 30),
(61, 'بیرونی', 'birony-zan', 30),
(62, 'ساعت', 'saat-zan', 31),
(63, 'دستبند', 'dasband-zan', 31),
(64, 'پوشک', 'poshak', 32),
(65, 'حوله', 'hole', 32),
(66, 'کفش', 'kafsh-nozad', 33),
(67, 'لباس', 'lebas', 33),
(68, 'ماست', 'mast', 34),
(69, 'کره', 'kare', 34),
(70, 'مربا', 'morba', 35),
(71, 'نان', 'nan', 35),
(72, 'نوشابه', 'noshabe', 36),
(73, 'دلستر', 'delster', 36),
(74, 'تخمه', 'tokhme', 37),
(75, 'پفک', 'pofak', 37),
(76, 'روغن', 'roghan', 38),
(77, 'برنج', 'berenj', 38),
(78, 'صورت', 'sorat', 39),
(79, 'مو', 'mo', 39),
(80, 'شامپو', 'shampo', 40),
(81, 'لاک', 'lak', 40),
(82, 'ادکلن', 'odklan', 41),
(83, 'اسپری', 'espery', 41),
(84, 'دستبند', 'dastband-tala', 42),
(85, 'گردنبند', 'gardanband-tala', 42),
(86, 'باند', 'band', 43),
(87, 'ساندبار', 'sandbar', 43),
(88, 'تلوزیون', 'ty', 44),
(89, 'مانیتور', 'manitor', 44),
(90, 'ماشینی', 'mashini', 45),
(91, 'دستباف', 'dastbap', 45),
(92, 'ایینه', 'ayne', 46),
(93, 'قاب', 'ghb', 46),
(94, 'ظرف شوی', 'zarf-shoy', 47),
(95, 'مایع', 'maye', 47),
(96, 'یخچال', 'yakhjal', 48),
(97, 'گاز', 'gaz', 48),
(98, 'مجله', 'majale', 49),
(99, 'روزنامه', 'rozname', 49),
(100, 'مداد', 'medad', 50),
(101, 'تراش', 'tarash', 50),
(102, 'سخن', 'sokhan', 51),
(103, 'کتاب', 'ketab', 51),
(104, 'ویندوز', 'mindows', 52),
(105, 'مک', 'mac', 52),
(106, 'لباس', 'lebas-mard-varzeshi', 53),
(107, 'شلوار', 'shalvar-mard-varzeshi', 53),
(108, 'لباس', 'lebas-zan-varzeshi', 54),
(109, 'کفش', 'kafsh-zan-varzeshi', 54),
(110, 'چادر', 'chdor', 55),
(111, 'کیسه خواب', 'kese-khab', 55),
(112, 'زبت', 'zabt', 56),
(113, 'باند', 'band-mashin', 56);

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

DROP TABLE IF EXISTS `factors`;
CREATE TABLE IF NOT EXISTS `factors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_buy` int(11) NOT NULL DEFAULT 300,
  `status_send` int(11) NOT NULL DEFAULT 100,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `factors_user_id_foreign` (`user_id`),
  KEY `factors_address_id_foreign` (`address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `user_id`, `address_id`, `product`, `status_buy`, `status_send`, `total_price`, `created_at`, `updated_at`) VALUES
(8, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-14 23:11:07', '2021-04-14 23:11:07'),
(7, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-14 22:38:23', '2021-04-14 22:38:23'),
(6, 7, 6, '[{\"product_id\":30,\"number\":1},{\"product_id\":21,\"number\":1}]', 300, 100, '23783250', '2021-04-14 22:32:08', '2021-04-14 22:32:08'),
(9, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-14 23:11:22', '2021-04-14 23:11:22'),
(10, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-14 23:16:57', '2021-04-14 23:16:57'),
(11, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:09:07', '2021-04-15 00:09:07'),
(12, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:09:46', '2021-04-15 00:09:46'),
(13, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:10:11', '2021-04-15 00:10:11'),
(14, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:12:53', '2021-04-15 00:12:53'),
(15, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:13:08', '2021-04-15 00:13:08'),
(16, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:14:41', '2021-04-15 00:14:41'),
(17, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:17:49', '2021-04-15 00:17:49'),
(18, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:18:34', '2021-04-15 00:18:34'),
(19, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:18:49', '2021-04-15 00:18:49'),
(20, 7, 6, '[{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '6684150', '2021-04-15 00:30:18', '2021-04-15 00:30:18'),
(21, 7, 6, '[{\"product_id\":21,\"number\":1},{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 300, 100, '30434150', '2021-04-15 00:32:42', '2021-04-15 00:32:42'),
(22, 7, 6, '[{\"product_id\":21,\"number\":1},{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 404, 100, '30434150', '2021-04-15 00:36:13', '2021-04-15 00:36:36'),
(23, 7, 6, '[{\"product_id\":21,\"number\":1},{\"product_id\":30,\"number\":3},{\"product_id\":24,\"number\":2}]', 200, 100, '30434150', '2021-04-15 00:36:42', '2021-04-15 00:36:45'),
(24, 7, 6, '[{\"product_id\":7,\"number\":1},{\"product_id\":21,\"number\":2}]', 200, 100, '52700000', '2021-04-19 13:53:51', '2021-04-19 13:54:00'),
(25, 8, 9, '[{\"product_id\":21,\"number\":1}]', 200, 100, '23750000', '2021-04-19 14:18:16', '2021-04-19 14:18:25'),
(26, 8, 9, '[{\"product_id\":21,\"number\":1}]', 200, 100, '23750000', '2021-04-19 14:20:22', '2021-04-19 14:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

DROP TABLE IF EXISTS `image_products`;
CREATE TABLE IF NOT EXISTS `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alt_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `alt_title`, `address`, `product_id`) VALUES
(1, 'A70', 'a70_1.jpg', 21),
(2, 'A70', 'a70_2.jpg', 21),
(3, 'A70', 'a70_3.jpg', 21),
(4, 'A70', 'a70_4.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `item_filters`
--

DROP TABLE IF EXISTS `item_filters`;
CREATE TABLE IF NOT EXISTS `item_filters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_filter_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 2, 'موضوع', ' متن تستی برای تست این بخشمتن تستی برای تست این بخشمتن تستی برای تست این بخشمتن تستی برای تست این بخشمتن تستی برای تست این بخشمتن تستی برای تست این بخشمتن تستی برای تست این بخش', '2021-04-22 07:00:00', '2021-04-22 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_26_131409_create_min_menus_table', 1),
(5, '2021_03_26_131510_create_sub_min_menus_table', 1),
(6, '2021_03_26_131526_create_all_menus_table', 1),
(7, '2021_03_26_131541_create_down_all_menus_table', 1),
(8, '2021_03_26_131552_create_sub_all_menus_table', 1),
(9, '2021_03_26_131612_create_baskets_table', 1),
(10, '2021_03_26_131625_create_sliders_table', 1),
(11, '2021_03_26_131644_create_banner_ups_table', 1),
(12, '2021_03_26_131701_create_attributs_table', 1),
(13, '2021_03_26_131716_create_properties_table', 1),
(14, '2021_03_26_131739_create_discounted_products_table', 1),
(15, '2021_03_26_131816_create_products_table', 1),
(16, '2021_03_26_131832_create_banner_times_table', 1),
(17, '2021_03_26_131843_create_banner_centers_table', 1),
(18, '2021_03_26_131852_create_banner_ends_table', 2),
(19, '2021_03_26_131909_create_comment_products_table', 2),
(20, '2021_03_26_131923_create_reply_comments_table', 2),
(21, '2021_03_26_131940_create_attr_comments_table', 2),
(22, '2021_03_27_053113_create_title_filters_table', 3),
(23, '2021_03_27_053146_create_item_filters_table', 3),
(24, '2021_03_30_053419_create_banner_slides_table', 4),
(25, '2021_03_31_135708_add_iamge_to_products', 5),
(26, '2021_04_02_155323_add_google_id_to_users', 6),
(27, '2021_04_03_134346_create_attr_filters_table', 7),
(28, '2021_04_05_123723_create_image_products_table', 8),
(29, '2021_04_05_135810_create_brands_table', 9),
(30, '2021_04_05_140004_add_brand_id_to_products', 9),
(31, '2021_04_05_143829_create_attr_products_table', 10),
(32, '2021_04_06_062404_add_like_to_comment_product', 11),
(33, '2021_04_06_062527_add_dislike_to_comment_product', 11),
(34, '2021_04_08_054503_add_vote_to_comment_product', 12),
(35, '2021_04_08_125557_add_menu_id_to_attr_product', 13),
(36, '2021_04_09_155437_add_action_to_users', 14),
(37, '2021_04_10_044850_add_code_m_to_users', 15),
(38, '2021_04_10_125344_create_save_product_table', 16),
(39, '2021_04_11_122344_create_addresses_table', 17),
(40, '2021_04_11_123208_create_streets_table', 17),
(41, '2021_04_11_123227_create_cities_table', 17),
(42, '2021_04_11_152023_add_address_id_to_users', 18),
(43, '2021_04_13_121748_create_messages_table', 19),
(44, '2021_04_13_122305_create_messages_table', 20),
(45, '2021_04_14_150726_create_factors_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `min_menus`
--

DROP TABLE IF EXISTS `min_menus`;
CREATE TABLE IF NOT EXISTS `min_menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `min_menus`
--

INSERT INTO `min_menus` (`id`, `name`, `icon`) VALUES
(1, 'سوپر مارکت', 'fas fa-store'),
(2, 'تخفیف', 'fas fa-percentage'),
(3, 'دیجی پلاس', 'fas fa-plus'),
(4, 'دیجی کلاب', 'fas fa-wave-square'),
(5, 'سوالی دارد؟', '0'),
(6, 'فروشنده شوید', '0');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `off` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `slug`, `image`, `description`, `off`, `menu_id`, `sub_menu_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'کفش روزمره زنانه مدل پینو', '110000', 'کفش-روزمره-زنانه-مدل-پینو', 'product_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae corporis debitis distinctio facere hic illum in, odit pariatur quo quod, unde voluptates! Aliquam aut consequatur necessitatibus quam quasi!', 20, 3, 61, 4, '2021-03-18 07:00:00', '2021-03-08 08:00:00'),
(2, '2 کفش روزمره زنانه مدل پینو', '120000', '2-کفش-روزمره-زنانه-مدل-پینو', 'product_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae corporis debitis distinctio facere hic illum in, odit pariatur quo quod, unde voluptates! Aliquam aut consequatur necessitatibus quam quasi!', 20, 3, 61, 4, '2021-03-18 07:00:00', '2021-03-08 08:00:00'),
(3, 'گارد s10', '25000', 'گارد-s10', 's10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 1, 1, 2, '2021-03-12 08:00:00', '2021-03-22 07:00:00'),
(4, 'گلس s20', '52000', 'گلس-s20', 'g10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 1, 2, 2, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(5, 'شارژر note20', '250000', 'شارژر-note20', 'ch10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 5, 1, 3, 2, '2021-03-08 08:00:00', '2021-03-03 08:00:00'),
(6, 's10', '12000000', 's10', 'ms10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 2, 4, 2, '2021-03-16 07:00:00', '2021-03-21 07:00:00'),
(7, 'z6', '5200000', 'z6', 'z5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 2, 5, 7, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(8, 'G5', '3200000', 'G5', 'g5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 2, 6, 1, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(9, 'VR5', '3200000', 'VR5', 'VR.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 3, 7, 2, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(10, 'H-VR-M2', '3800000', 'H-VR-M2', 'VR2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 10, 3, 8, 2, '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(11, 'PS4-VR', '4200000', 'PS4-VR', 'SonyV.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 3, 9, 7, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(12, 'mi4', '650000', 'mi4', 'mi4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 4, 10, 6, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(13, 'AKG-8', '950000', 'AKG-8', 'AKG.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 5, 11, 5, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(14, 'MIC-HF55', '1500000', 'MIC-HF55', 'MIC.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 10, 5, 12, 5, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(15, 'JBL 8', '2500000', 'JBL-8', 'jbl.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 6, 13, 5, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(16, 'B 87SL PRO', '860000', 'B-87SL-PRO', 'be.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 6, 6, 14, 3, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(17, 'شامپو مردانه', '15000', 'شامپو-مردانه', 'p4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 1, 34, 80, 4, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(18, 'کرم صورت', '1500000', 'کرم-صورت', 'p3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 5, 35, 78, 4, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(19, 'طبعیت', '250000', 'طبعیت', 'p2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 0, 36, 77, 4, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(20, 'پپسی', '7500', 'پپسی', 'p1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur autem deserunt dolor ea est eveniet fuga id in laudantium molestias mollitia necessitatibus nulla optio quod, quos sequi similique sunt.', 6, 37, 72, 4, '2021-03-31 07:00:00', '2021-03-31 07:00:00'),
(21, 'A70', '25000000', 'A70', 'A70.jpg', 'گوشی موبایل گلکسی A71 سامسونگ یکی از قدرتمندترین محصولات میان‌رده موجود در بازار است که حسگر انگشت زیرصفحه نمایش و دوربین چهار‌گانه روانه بازار شده است. سامسونگ سال 2019 را با متنوع کردن هرچند بیشتر سری گوشی‌های A خود آغاز کرد. این سری از تولیدات سامسونگ به داشتن صفحه‌نمایش بسیار با کیفیت AMOLED و دوربین‌هایی با امکانات بالا شهرت دارند. گوشی موبایل Galaxy A71 با صفحه‌نمایش سوپر آمولد طراحی شده است و ظاهر هم زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند. این گوشی قاب پشتی از جنس پلاستیک دارد و قاب جلویی آن را شیشه پوشانده که البته جلوه‌ی زیبایی به گوشی داده است. این محصول سامسونگ با جدیدترین نسخه از سیستم‌عامل اندروید روانه بازار شده است تا از هر نظر گوشی مدرن به‌حساب بیاید. صفحه‌نمایش استفاده‌شده در این گوشی 6.7 اینچ با رزولوشن FullHD+ است که با استفاده از فناوری Super AMOLED و پنل OLED تصاویر شفاف و بی‌نظیری را به نمایش می‌گذارد. این صفحه‌نمایش در هر اینچ 393 پیکسل را نشان می‌دهد که این یعنی جزئیات و وضوح تصویر عالی است. همچنین روکش این نمایشگر لایه‌ی محافظ Corning Gorilla Glass 3 است که از خط‌وخش و ضربه جلوگیری می‌کند. تراشه‌ی این محصول،Qualcomm SDM730 Snapdragon 730 از تراشه‌های 8 نانومتری کوالکام است که به همراه 8 گیگابایت رم عرضه می‌شود. این تراشه برای بازکردن چندین برنامه به صورت هم‌زمان و تماشای ویدئو کاملاً مناسب است. تراشه‌ی گرافیکی Adreno 618 هم برای پخش ویدئو و بازی در این محصول درنظر گرفته شده است. این گوشی در ظرفیت 128 گیگابایتی عرضه شده است و با استفاده از یک کارت حافظه‌ی جانبی قادر خواهید بود حافظه داخلی را تا یک ترابایت دیگر هم افزایش دهید. دوربین اصلی A71 سنسور 64 مگاپیکسلی دارد و فلش LED برخوردار است. سنسور 12 مگاپیکسلی دیگر از نوع فوق عریض (Ultrawide) و سنسور 5 مگاپیکسلی عمق و لنز ماکرو هم در کنار این دوربین اصلی مجموعه دوربین‌های قاب پشتی A71 را تشکیل داده‌اند. دوربین سلفی 32مگاپیکسلی هم در قاب جلویی این گوشی به کار گرفته شده است. باتری 4500 میلی‌آمپرساعتی، پشتیبانی از فناوری شارژ سریع 25 واتی، درگاه USB Type-C و حسگر اثرانگشت اپتیکال در زیر صفحه‌نمایش هم از دیگر ویژگی‌های این تازه‌وارد است.', 5, 2, 4, 2, '2020-10-08 07:00:00', '2020-10-17 07:00:00'),
(22, 'S21', '60000000', 'S21', 'S21.jpg', 'lorem', 0, 2, 4, 2, '2020-10-31 07:00:00', '2020-10-19 07:00:00'),
(23, 'A10s', '1500000', 'A10s', 'A10.jpg', 'lorem', 0, 2, 4, 2, '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(24, 'A80', '3658000', 'A80', 'A80.jpg', 'lorem', 10, 2, 4, 2, '2020-10-08 07:00:00', '2020-10-17 07:00:00'),
(25, 'گارد 6 plus', '36000', 'گارد-6-plus', 'tools1.jpg', 'lorem', 0, 1, 1, 4, '2020-10-27 07:00:00', '2020-10-24 07:00:00'),
(26, 'گارد 6 ', '30000', 'گارد-6 ', 'tools2.jpg', 'lorem', 0, 1, 1, 4, '2021-01-05 08:00:00', '2020-10-19 07:00:00'),
(27, 'گارد 7', '38000', 'گارد-7', 'tools3.jpg', 'lorem', 0, 1, 1, 4, '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(28, 'گارد 7 plus', '30000', 'گارد-7-plus', 'tools4.jpg', 'lorem', 0, 1, 1, 4, '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(29, 'mi5', '85000', 'mi5', 'mi5.jpg', 'lorem', 0, 4, 10, 6, '2020-10-14 07:00:15', '2021-01-26 08:00:00'),
(30, 'mi3', '35000', 'mi3', 'mi3.jpg', 'lorem', 5, 4, 10, 6, '2020-10-31 07:00:00', '2020-10-19 07:00:00'),
(31, 'm3', '35000', 'm3', 'm3.jpg', 'lorem', 0, 4, 10, 6, '2021-01-05 08:00:00', '2021-04-18 21:03:14'),
(32, 'm4', '15000', 'm4', 'm4.jpg', 'lorem', 0, 4, 10, 6, '2021-01-05 08:00:00', '2021-01-26 08:00:00'),
(33, 'JBL 1', '150000', 'JBL-1', 'jbl.jpg', 'lorem', 0, 6, 13, 5, '2020-10-14 07:00:15', '2020-10-12 07:00:00'),
(34, 'JBL 2', '350000', 'JBL-2', 'jbl1.jpg', 'lorem', 0, 6, 13, 5, '2021-01-05 08:00:00', '2020-10-19 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `name`, `product_id`) VALUES
(1, 'حافظه داخلی ', '128 گیگابایت', 21),
(2, 'شبکه های ارتباطی ', '4G، 3G، 2G', 21),
(3, 'دوربین‌های پشت گوشی ', '4 ماژول دوربین', 21),
(4, 'سیستم عامل ', 'Android', 21);

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

DROP TABLE IF EXISTS `reply_comments`;
CREATE TABLE IF NOT EXISTS `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `text`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(16, 'test test test', 8, 19, '2021-04-19 20:54:08', '2021-04-19 20:54:08'),
(14, 'بله این محصول خیلی عالی است', 7, 15, '2021-04-17 13:03:05', '2021-04-17 13:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `save_product`
--

DROP TABLE IF EXISTS `save_product`;
CREATE TABLE IF NOT EXISTS `save_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `alt`, `address`, `status`, `product_id`) VALUES
(1, 'مزمز', 'مزمز', 'slider_1.jpg', '1', 0),
(2, 'فیدیبو', 'فیدیبو', 'slider_2.jpg', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `streets`
--

DROP TABLE IF EXISTS `streets`;
CREATE TABLE IF NOT EXISTS `streets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `streets`
--

INSERT INTO `streets` (`id`, `name`, `city_id`) VALUES
(1, 'سناباد', 1),
(2, 'احمداباد', 1),
(3, 'فلسطین', 1),
(4, 'سجاد', 1),
(5, 'الهیه', 1),
(6, 'ستارخان', 2),
(7, 'دولت اباد', 2),
(8, 'جنت اباد', 2),
(9, 'پیروزی', 2),
(10, 'شهریار', 2),
(11, 'باغ قدک', 3),
(12, 'شهر رضا', 3),
(13, 'ازادگان', 3),
(14, 'چرخان', 3),
(15, 'خواجو', 3),
(16, 'پیشاهنگی', 4),
(17, 'فردیس', 4),
(18, 'گلشهر', 4),
(19, 'ازادگان', 4),
(20, 'باغستان', 4),
(21, 'مرودشت', 5),
(22, 'ارم', 5),
(23, 'ویزاباد', 5),
(24, 'سهل ابد', 5),
(25, 'ستارخان', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_all_menus`
--

DROP TABLE IF EXISTS `sub_all_menus`;
CREATE TABLE IF NOT EXISTS `sub_all_menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_all_menus`
--

INSERT INTO `sub_all_menus` (`id`, `name`, `all_menu_id`) VALUES
(1, 'لوازم جانبی گوشی', 1),
(2, 'گوشی موبایل ', 1),
(3, 'واقعیت مجازی ', 1),
(4, 'مچ بند و ساعت هوشمتد', 1),
(5, 'هدفون', 1),
(6, 'اسپیکر', 1),
(7, 'هارد', 1),
(8, 'دوربین', 1),
(9, 'لوازم دوربین ', 1),
(10, 'تلسکوپ ', 1),
(11, 'کنسول', 1),
(12, 'کامپیوتر', 1),
(13, 'لپ تاپ', 1),
(14, 'لوازم لپ تاپ ', 1),
(15, 'تبلت', 1),
(16, 'لوازم تبلت', 1),
(17, 'مودم', 1),
(18, 'ماشین های اداری', 1),
(19, 'خودرو', 2),
(20, 'موتور', 2),
(21, 'لوازم موتور', 2),
(22, 'ابزار برقی', 2),
(23, 'یراق الات', 2),
(24, 'لواز باغبانی', 2),
(25, 'نور و روشنایی', 2),
(26, 'لباس مردارنه ', 3),
(27, 'کفش مردانه', 3),
(28, 'اکسسوری مردانه', 3),
(29, 'لباس زنانه', 3),
(30, 'کفش زنانه', 3),
(31, 'اکسسوری زنانه', 3),
(32, 'بهداشت نوزاد', 4),
(33, 'پوشاک نوزاد', 4),
(34, 'لبنیات', 5),
(35, 'صبحانه', 5),
(36, 'نوشیدنی ', 5),
(37, 'تنقلات', 5),
(38, 'کالای های اساسی', 5),
(39, 'لوازم بهداشتی', 6),
(40, 'لوازن ارایشی ', 6),
(41, 'عطر', 6),
(42, 'طلا نقره', 6),
(43, 'صوتی ', 7),
(44, 'تصویری', 7),
(45, 'فرش', 7),
(46, 'دکراتیو', 7),
(47, 'شوینده', 7),
(48, 'اشپزخانه', 7),
(49, 'کتاب', 8),
(50, 'لوازن تحریر', 8),
(51, 'کتاب صوتی ', 8),
(52, 'نرم افزار', 8),
(53, 'پوشاک ورزشی مردانه ', 9),
(54, 'پوشاک ورزشی زنانه', 9),
(55, 'لوازم کوهنوردی', 9),
(56, 'لوازم خودرو', 9);

-- --------------------------------------------------------

--
-- Table structure for table `sub_min_menus`
--

DROP TABLE IF EXISTS `sub_min_menus`;
CREATE TABLE IF NOT EXISTS `sub_min_menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `title_filters`
--

DROP TABLE IF EXISTS `title_filters`;
CREATE TABLE IF NOT EXISTS `title_filters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_filters`
--

INSERT INTO `title_filters` (`id`, `name`, `sub_menu_id`) VALUES
(1, 'حافظه داخلی', 2),
(2, 'دوربین', 2),
(3, 'تعداد سیم کارت', 2),
(4, 'دوربین جلو ', 2),
(5, 'صفحه نمایش', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_m` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH,
  KEY `users_address_id_foreign` (`address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `code_m`, `google_id`, `action`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address_id`) VALUES
(4, 'sina', 'siis@gmail.com', '09100109848', NULL, NULL, 1, NULL, '$2y$10$l3.Pmigl7gR2ePRGlVSnIOWaQIOhHeZuqnTh/eajpgSDQ7y70PYFS', NULL, '2021-04-09 23:29:36', '2021-04-16 12:16:32', 0),
(9, 'sina', 'sina1010anis@gmail.com', 'null', 'null', NULL, 1, NULL, '$2y$10$XNtmvmjKunZ0Tihl90EnNuVO/IeQymm5GxTDr11WmdCO73EB9JD/q', NULL, '2021-04-19 20:59:57', '2021-04-19 21:01:25', 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
