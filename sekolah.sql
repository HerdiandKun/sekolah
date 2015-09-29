-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mar 2015 pada 18.04
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_menu`
--

CREATE TABLE IF NOT EXISTS `tabel_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `tabel_menu`
--

INSERT INTO `tabel_menu` (`menu_id`, `nama_menu`, `icon`, `link`, `parent`, `aktif`) VALUES
(22, 'dashboard', 'icon-dashboard', 'example/dashboard', 0, 'y'),
(23, 'Typography', 'icon-text-width', 'example/typography', 0, 'y'),
(24, 'UI Element', 'icon-desktop', '#', 0, 'y'),
(25, 'Tables', 'icon-list', 'example/tables', 0, 'y'),
(26, 'Element', '', 'example/element', 24, 'y'),
(27, 'Form', 'icon-edit', 'form', 0, 'y'),
(28, 'widget', 'icon-list-alt', 'widget', 0, 'y'),
(29, 'calendar', 'icon-calendar', 'calendar', 0, 'y'),
(30, 'Gallery', 'icon-picture', 'menu_management/gallery', 0, 'y'),
(31, 'More pages', 'icon-tag', '#', 0, 'y'),
(32, 'Other pages', 'icon-file-alt', '#', 0, 'y'),
(33, 'Button & Icon', '', 'example/button', 24, 'y'),
(34, 'treeview', '', 'example/treeview', 24, 'y'),
(35, 'form element', '', 'example/form_element', 27, 'y'),
(36, 'wizard & validation', '', 'example/wizard', 27, 'y'),
(37, 'Wysiwyg & Markdown', '', 'wysiwyg', 27, 'y'),
(38, 'user profile', '', 'example/user_profile', 31, 'y'),
(39, 'princing tables', '', 'princing_tables', 31, 'y'),
(40, 'invoice', '', 'example/invoice', 31, 'y'),
(41, 'login & register', '', 'example/login_register', 31, 'y'),
(42, 'error 404', '', 'example/err404', 32, 'y'),
(43, 'error 500', '', 'example/err500', 32, 'y'),
(44, 'grid', '', 'example/grid', 32, 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
