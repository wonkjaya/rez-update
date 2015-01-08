-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2015 at 04:46 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop.rezstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `metaid` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategory`, `metaid`, `name`, `url`, `status`) VALUES
(1, 2, 'sistem onlineshop', 'category/', 1),
(2, 3, 'sistem perkantoran', 'category/', 1),
(3, 4, 'sistem akuntansi', 'category/', 1),
(4, 5, 'sistem kepegawaian', 'category/', 1),
(5, 6, 'sistem Absensi', 'category/', 1),
(7, 7, 'desain web', 'category/', 1),
(8, 8, 'sistem Penjualan', 'category/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `idcontact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` tinytext,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `blackberry` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `frameworks`
--

CREATE TABLE IF NOT EXISTS `frameworks` (
  `idframework` int(11) NOT NULL AUTO_INCREMENT,
  `metaid` varchar(45) DEFAULT NULL,
  `frameworkname` varchar(45) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idframework`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `frameworks`
--

INSERT INTO `frameworks` (`idframework`, `metaid`, `frameworkname`, `description`, `status`) VALUES
(1, '50', 'codeigniter', 'codeigniter adalah sebuah framework yang sangat layak untuk website menengah keatas dan dapat diandalkan dalam setiap aktivitas di internet.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lisence`
--

CREATE TABLE IF NOT EXISTS `lisence` (
  `idlisence` int(11) NOT NULL AUTO_INCREMENT,
  `metaid` varchar(45) DEFAULT NULL,
  `lisencename` varchar(45) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idlisence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lisence`
--

INSERT INTO `lisence` (`idlisence`, `metaid`, `lisencename`, `description`, `status`) VALUES
(1, '30', 'GPL', 'lisence ini digunakan hanya untuk developer individual saja jangan di publikasi kan tanpa adanya ijin secara tertulis dari pihak ubuntu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE IF NOT EXISTS `metas` (
  `idmeta` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT 'category',
  `metatitle` varchar(45) DEFAULT NULL,
  `metakeywords` varchar(200) DEFAULT NULL,
  `metaimage` varchar(45) DEFAULT NULL,
  `metadescription` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idmeta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`idmeta`, `type`, `metatitle`, `metakeywords`, `metaimage`, `metadescription`, `status`) VALUES
(2, 'category', 'title onlineshop', 'keyword onlineshop', 'onlineshop.png', 'nodescription', 1),
(3, 'category', 'title perkantoran', 'keyword perkantoran', 'noimage.png', 'nodescription', 1),
(4, 'category', 'title akuntansi', 'keyword akuntansi', 'noimage.png', 'nodescription', 1),
(5, 'category', 'title kepegawaian', 'keyword kepegawaian', 'noimage.png', 'nodescription', 1),
(6, 'category', 'title absensi', 'keyword absensi', 'noimage.png', 'nodescription', 1),
(7, 'category', 'title perekrutan', 'keyword perekrutan\r\n', 'noimage.png', 'nodescription', 1),
(8, 'category', 'title penjualan', 'keyword penjualan\r\n', 'noimage.png', 'nodescription', 1),
(20, 'menu', 'menu home', 'keyword home', 'noimage.png', 'nodescription', 1),
(21, 'menu', 'menu product', 'keyword product', 'noimage.png', 'nodescription', 1),
(30, 'licensi', 'licensi product GPL', 'licensi product GPL', 'noimage.png', 'licensi product GPL', 1),
(50, 'framework', 'frmework product ci', 'frmework product ', 'noimage.png', 'frmework product ci', 1),
(100, 'product', 'produk 001', 'keyword for produk 001', 'noimage.png', 'nodescription', 1),
(101, 'product', 'produk 002', 'keyword for produk 002', 'noimage.png', 'nodescription', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `idpage` int(11) NOT NULL AUTO_INCREMENT,
  `metaid` varchar(45) DEFAULT NULL,
  `idcategory` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idpage`, `metaid`, `idcategory`, `name`, `title`, `content`, `image`) VALUES
(2, '2', 1, 'category-1', 'onlineshop content', 'online shop adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(3, '3', 2, 'category-2', 'perkantoran content', 'online shop adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'office.png'),
(4, '4', 3, 'category-3', 'akuntansi content', 'akuntansi adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'report.png'),
(5, '5', 4, 'category-4', 'kepegawaian content', 'kepegawaian adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'employe.png'),
(6, '6', 5, 'category-5', 'absensi content', 'absensi adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'fingerprint.png'),
(8, '7', 7, 'category-7', 'Desain Web', 'perekrutan adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'webdesign.png'),
(9, '8', 8, 'category-8', 'penjualan content', 'penjualan adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'store.png'),
(10, '20', 9, 'home', 'home', 'penjualan adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'home.png');

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE IF NOT EXISTS `productdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) DEFAULT NULL,
  `idframework` int(11) DEFAULT NULL,
  `guarante` int(11) DEFAULT NULL,
  `detail` text,
  `idlisence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`id`, `idproduct`, `idframework`, `guarante`, `detail`, `idlisence`) VALUES
(1, 100, 1, 3, 'produk 001: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(2, 101, 1, 3, 'produk 002: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(3, 102, 1, 4, 'produk 003: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(4, 103, 1, 3, 'produk 004: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(5, 104, 1, 3, 'produk 005: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(6, 105, 1, 3, 'produk 006: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(7, 106, 1, 3, 'produk 007: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1),
(8, 107, 1, 3, 'produk 008: dolor ipsum sit amet sin cinba giu pao sutige for webste', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `idproduct` int(11) NOT NULL AUTO_INCREMENT,
  `metaid` int(11) DEFAULT NULL,
  `idcategory` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `productname` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `productimage` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idproduct`, `metaid`, `idcategory`, `code`, `productname`, `price`, `productimage`, `status`) VALUES
(100, 100, 1, 'PG-100', 'produk 001', 2000, 'products/noimage.png', 1),
(101, 101, 2, 'PG-101', 'produk 002', 2050, 'products/noimage.png', 1),
(102, 102, 3, 'PG-102', 'produk 003', 200, 'products/noimage.png', 1),
(103, 103, 4, 'PG-103', 'produk 004', 4540, 'products/noimage.png', 1),
(104, 104, 5, 'PG-104', 'produk 005', 400, 'products/noimage.png', 1),
(105, 105, 6, 'PG-105', 'produk 006', 800, 'products/noimage.png', 1),
(106, 106, 7, 'PG-106', 'produk 007', 900, 'products/noimage.png', 1),
(107, 107, 8, 'PG-107', 'produk 008', 990, 'products/noimage.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `status`) VALUES
(1, 'rohman', 'cTOKjO4SwE/Cys/iFqp/+TFq5hpZRpSUfeTWgvXm3UYsUm3FJekJ6vryGAql9RqVhbY78hTU0zYjZwHHEi6Lfg==', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `permission` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `idvisitors` int(11) NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(20) DEFAULT NULL,
  `datevisite` datetime DEFAULT NULL,
  `page` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idvisitors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
