-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2014 pada 02.46
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

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
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`idcategory`, `name`, `url`, `status`) VALUES
(0, 'home', 'home/', 1),
(1, 'onlineshop', 'category/', 1),
(2, 'sistem perkantoran', 'category/', 1),
(3, 'sistem akuntansi', 'category/', 1),
(4, 'sistem kepegawaian', 'category/', 1),
(5, 'sistem Absensi', 'category/', 1),
(6, 'sistem Sekolah', 'category/', 1),
(7, 'sistem Perekrutan', 'category/', 1),
(8, 'sistem Penjualan', 'category/', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
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
-- Struktur dari tabel `frameworks`
--

CREATE TABLE IF NOT EXISTS `frameworks` (
  `idframework` int(11) NOT NULL AUTO_INCREMENT,
  `frameworkname` varchar(45) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idframework`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `frameworks`
--

INSERT INTO `frameworks` (`idframework`, `frameworkname`, `description`, `status`) VALUES
(1, 'codeigniter', 'codeigniter adalah sebuah framework yang sangat layak untuk website menengah keatas dan dapat diandalkan dalam setiap aktivitas di internet.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lisence`
--

CREATE TABLE IF NOT EXISTS `lisence` (
  `idlisence` int(11) NOT NULL AUTO_INCREMENT,
  `lisencename` varchar(45) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idlisence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lisence`
--

INSERT INTO `lisence` (`idlisence`, `lisencename`, `description`, `status`) VALUES
(1, 'GPL', 'lisence ini digunakan hanya untuk developer individual saja jangan di publikasi kan tanpa adanya ijin secara tertulis dari pihak ubuntu', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metas`
--

CREATE TABLE IF NOT EXISTS `metas` (
  `idmeta` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) DEFAULT NULL,
  `metatitle` varchar(45) DEFAULT NULL,
  `metakeywords` varchar(200) DEFAULT NULL,
  `metaimage` varchar(45) DEFAULT NULL,
  `metadescription` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idmeta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Dumping data untuk tabel `metas`
--

INSERT INTO `metas` (`idmeta`, `idproduct`, `metatitle`, `metakeywords`, `metaimage`, `metadescription`, `status`) VALUES
(1, 0, 'title home', 'keyword home', 'noimage.png', 'nodescription', 1),
(2, 1, 'title onlineshop', 'keyword onlineshop', 'noimage.png', 'nodescription', 1),
(3, 2, 'title perkantoran', 'keyword perkantoran', 'noimage.png', 'nodescription', 1),
(4, 3, 'title akuntansi', 'keyword akuntansi', 'noimage.png', 'nodescription', 1),
(5, 4, 'title kepegawaian', 'keyword kepegawaian', 'noimage.png', 'nodescription', 1),
(100, 100, 'produk 001', 'keyword for produk 001', 'noimage.png', 'nodescription', 1),
(101, 101, 'produk 002', 'keyword for produk 002', 'noimage.png', 'nodescription', 1),
(102, 3, 'title akuntansi', 'keyword akuntansi', 'noimage.png', 'nodescription', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `idpage` int(11) NOT NULL AUTO_INCREMENT,
  `idcategory` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`idpage`, `idcategory`, `name`, `title`, `content`, `image`) VALUES
(1, 0, 'home', 'home content', 'kami adalah sebuah instansi yang bergerak dibidang jasa pembuatan software berbasis web serta provider untk aplikasi perusahaan anda', 'home.png'),
(2, 1, 'category-1', 'onlineshop content', 'online shop adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(3, 2, 'category-2', 'perkantoran content', 'online shop adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(4, 3, 'category-3', 'akuntansi content', 'akuntansi adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(5, 4, 'category-4', 'kepegawaian content', 'kepegawaian adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(6, 5, 'category-5', 'absensi content', 'absensi adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(7, 6, 'category-6', 'sekolah content', 'sekolah adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(8, 7, 'category-7', 'perekrutan content', 'perekrutan adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png'),
(9, 8, 'category-8', 'penjualan content', 'penjualan adalah suatu media yang digunakan untuk sebuah transaksi online yang memfokuskan atau menggunakan sistem kerja online yang hanya bisa digunakan oleh orang yang baik saja', 'onlineshop.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `productdetail`
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
-- Dumping data untuk tabel `productdetail`
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
-- Struktur dari tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `idproduct` int(11) NOT NULL AUTO_INCREMENT,
  `idcategory` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `productname` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `productimage` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`idproduct`, `idcategory`, `code`, `productname`, `price`, `productimage`, `status`) VALUES
(100, 1, 'PG-100', 'produk 001', 2000, 'noimage.png', 1),
(101, 2, 'PG-101', 'produk 002', 2050, 'noimage.png', 1),
(102, 3, 'PG-102', 'produk 003', 200, 'noimage.png', 1),
(103, 4, 'PG-103', 'produk 004', 4540, 'noimage.png', 1),
(104, 5, 'PG-104', 'produk 005', 400, 'noimage.png', 1),
(105, 6, 'PG-105', 'produk 006', 800, 'noimage.png', 1),
(106, 7, 'PG-106', 'produk 007', 900, 'noimage.png', 1),
(107, 8, 'PG-107', 'produk 008', 990, 'noimage.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_details`
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
-- Struktur dari tabel `visitors`
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
