-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jun 2015 pada 11.47
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0096eef2d621875bebbae50943e4822e65a9a7be', '::1', 1435516595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531363539353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('026874ad35695a29a28feb437635912195cd8f36', '::1', 1435293105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239333130353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('1410ddb2d4fc54660452d52ad8ab78c998986720', '::1', 1435283528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353238333532383b),
('2ae2f025d3ed71229a1e17ab776e6b4504536468', '::1', 1435306119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330363131393b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('2bdb0301b1c6beb64c74300ba311d326f0f0e677', '::1', 1435513197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531333139373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('2e629e361c8ecc84e5368b82ae4cd38e1deca26a', '::1', 1435564339, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353536343333393b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('34f0ac03c0bf7238001bcbb63d3af264d627985b', '::1', 1435284615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353238343631353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('358474e8b2db9ab060966878ca144b0ae0fd02cd', '::1', 1435517772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531373736363b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('375c66d61c1d8fc0792fac61db873aca1bb04c59', '::1', 1435564903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353536343835333b69647c4e3b757365726e616d657c733a383a226865726469616e64223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2232223b),
('3bef66840a3add927467e88be6b672616bbba6d8', '::1', 1435515645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531353634353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('3ed8d5ca16ee2cbb5e7beafcdebec9e60fecfc5b', '::1', 1435513914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531333931343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('3f08c67a41640dd8c374a0cc42b2fec572cc55ca', '::1', 1435192862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353139323836323b),
('44cc8c84d0a9c4d7885fa331384ba65e65b51d76', '::1', 1435307992, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330373939323b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('52b2e760fe46ad3d6bb1c97dd92a421e3ca4697f', '::1', 1434985258, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938353235383b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('648df4525ccef8dce34d787857e132160dc45255', '::1', 1435518836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531383833363b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('65f1bdbc15d75e5443335037f33ca4fad7a96238', '::1', 1434984573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938343537333b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('6cb2abd6331ce0d66e2867243aaf4d444b0d9bb0', '::1', 1435512144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531323134343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('6f0ac3a4f37629a84136aa4e6da0cc3b7f06a2f6', '::1', 1435511499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531313439323b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('7090d9447423564b22f40923f0673bdf89c7388d', '::1', 1435303035, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330333033353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('76a9e96455cf0df7bfe862be6f5bfdbc6812db32', '::1', 1435158207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353135383132353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('782770a945e2c37380d517fc9c09b76888420645', '::1', 1435291545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239313534353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('79fa10c69d7ac3ec7bd4af3d76d5b1603f79e828', '::1', 1435511146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531313134363b),
('8097ef809900ccf4b5fb1c32bc46ee413102c593', '::1', 1435303370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330333337303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('80a7ee943085e2607f162afa8310356f81f069ca', '::1', 1434985623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938353632333b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('851fa745502a7232d602f360ac2e0d91e9210219', '::1', 1435297545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239373534353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('864072dbc45ba83dbe7ca86c9ba732d9ed1aa23d', '::1', 1435305750, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330353735303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('8b15d88452efe9255e95973f647486aa345f1381', '::1', 1434986672, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938363637323b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('8c3885893c76725596ee31b8bc908ac6acc02c8b', '::1', 1435511154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531313135343b),
('8cf5de9fd69302352099a63ed7496044d2c36874', '::1', 1435298285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239383238353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('90b38e0d7fa6dd32220a2822280eb673072894da', '::1', 1435300788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330303738383b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('988a7b7657ceadfe9760791c92e92132fcea29fa', '::1', 1435512839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531323833393b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('9a58050392e6e00488ca8096640f09ac8fb702bc', '::1', 1435517055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531373035353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('9adfa59aaedca2adbc63b63c24180423d82f377e', '::1', 1434986997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938363939373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('9e4ca8c90b5410e0f5fd97599e7b169a2045aa66', '::1', 1435526882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353532363837373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('a367020630040b5a2eb74b4dae4ff2bb0c7bdb75', '::1', 1435299084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239393038343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('a5e8ef5d673c234d6613c7283935f52b1bfce216', '::1', 1434984918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938343931383b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('a7365d9ac483bc3bdd53e99fb2c44c9ed838b191', '::1', 1435529567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353532393536373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('a7ae4683edd3e470803455c803dbd18d142344c6', '::1', 1435515958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531353935383b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('a95a7119876235ddfa752699257eb2a5ab0193b8', '::1', 1435518180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531383138303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('ab814c56525d6e5a3ad795b15bf1cc94e0c26c80', '::1', 1435564003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353536333939373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('b10d3a6320c5d7bd65a53b1d215fd0937bc0d7f1', '::1', 1435305368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330353336383b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('b593bc11a7a86ac19af601b4c2d7820ca9dbd8d6', '::1', 1435288785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353238383738353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('b669f2c31a5f0f1c479d5df3d2340001bedbd237', '::1', 1435285132, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353238353133323b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('c203f4636c206955d7489b37c393042caf0b722d', '::1', 1435286356, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353238363335363b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('c8bfc3d1657aa73242b7914a5229209d339a3c13', '::1', 1435515320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531353332303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('ca9275ff2561125de05ed626ff638769a9159fd8', '::1', 1435514637, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531343633373b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('d2e97833d21873797b9bf0dd8317268321322c7e', '::1', 1435290764, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239303736343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('de2e9f3c451eaf80082dc3bb1cb25c27b69995e5', '::1', 1435514974, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531343937343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('e14a82e7b98aca09dcc14fddac4515f8fe41844d', '::1', 1435518503, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531383530333b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2231223b),
('e2b7a0519a58723ca313ecc3fd4824b51c47176d', '::1', 1435306581, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330363538313b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('e304b633a16ed5544b171ac4ddcb4beb27be64ec', '::1', 1435514240, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353531343234303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c733a303a22223b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('e594725714706bb4537d0acadc6e6587fbf9334b', '::1', 1435298595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239383539353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('e804f0120a68987a6e4788a3758f90510cb8ade7', '::1', 1435291204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353239313230343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('e8186f5c2fa16b8ffe82c60c58285fc1bbb55aaf', '::1', 1435555129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353535353132333b69647c4e3b757365726e616d657c733a383a226865726469616e64223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b746970655f757365727c733a313a2232223b),
('ea960c5b5e85ed90b0369f02a57e1c2ef1281f7f', '::1', 1434984194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938343139343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('ec3f5d1ae3c1ae25f8bd2160b3e06dedb1c24c62', '::1', 1434986370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938363337303b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('ed1cbdf2579b5db8ee084cb4bf5453607a522573', '::1', 1435302034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330323033343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('edfadb95689310e7e373a11fc1ef95befadde456', '::1', 1434985962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938353936323b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('ef1b2a63c3a855710c58e501ca1003810d85b75b', '::1', 1435302355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330323335353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('f3d83f7f7b9437cb91e2b50850f2fa176980b673', '::1', 1435302725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433353330323732353b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b),
('f59162475c0eb78ccb5a2a02d8c0628f73b0ece7', '::1', 1434983848, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433343938333739343b69647c4e3b757365726e616d657c733a353a2261646d696e223b656d61696c7c4e3b69735f61646d696e5f6c6f67696e7c623a313b757365725f747970657c4e3b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
`id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_berita_kelas` (
  `id_berita_kelas` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita_kelas` date NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ekskul`
--

CREATE TABLE IF NOT EXISTS `tbl_ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
`id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nip` varchar(50) NOT NULL,
  `email_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
`id_jadwal` int(11) NOT NULL,
  `senin` varchar(100) NOT NULL,
  `selasa` varchar(100) NOT NULL,
  `rabu` varchar(100) NOT NULL,
  `kamis` varchar(100) NOT NULL,
  `jumat` varchar(100) NOT NULL,
  `sabtu` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
`id_kelas` int(11) NOT NULL,
  `tingkat` tinyint(4) NOT NULL,
  `jurusan` char(3) NOT NULL,
  `kelas` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `tingkat`, `jurusan`, `kelas`) VALUES
(1, 10, 'ips', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prestasi`
--

CREATE TABLE IF NOT EXISTS `tbl_prestasi` (
`id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `tipe_user` tinyint(1) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `telp_user` varchar(13) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `foto_user` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `tipe_user`, `id_kelas`, `telp_user`, `email_user`, `foto_user`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, '', '', ''),
(3, 'Herdiand', 'herdiand', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '876823', 'jelajahbatik@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
 ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
