-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3308
-- Üretim Zamanı: 21 Tem 2020, 15:33:17
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`) VALUES
(1, 'Başlık', '&lt;a href=&quot;#&quot;&gt;s&lt;/a&gt;');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banned_ip`
--

DROP TABLE IF EXISTS `banned_ip`;
CREATE TABLE IF NOT EXISTS `banned_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `banned_ip`
--

INSERT INTO `banned_ip` (`id`, `ip`, `date`) VALUES
(1, '158.122.12.25', '2020-04-21'),
(2, '158.122.12.25', '2020-04-21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail_settings`
--

DROP TABLE IF EXISTS `mail_settings`;
CREATE TABLE IF NOT EXISTS `mail_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` text NOT NULL,
  `port` int(5) NOT NULL,
  `secure` varchar(5) NOT NULL,
  `mail` text NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mail_settings`
--

INSERT INTO `mail_settings` (`id`, `host`, `port`, `secure`, `mail`, `password`) VALUES
(1, 'smtp.google.com', 587, 'tls', 'site@site.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `security`
--

DROP TABLE IF EXISTS `security`;
CREATE TABLE IF NOT EXISTS `security` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_attempt` int(11) NOT NULL,
  `time_out` int(11) NOT NULL,
  `save_ip` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `analytics` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adsense` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `seo`
--

INSERT INTO `seo` (`id`, `title`, `desc`, `keywords`, `analytics`, `adsense`) VALUES
(1, 'Demo - Admin Paneli', 'Admin Paneli', 'admin paneli', 'UA-74742916-10', 'boş');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subs`
--

DROP TABLE IF EXISTS `subs`;
CREATE TABLE IF NOT EXISTS `subs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `subs`
--

INSERT INTO `subs` (`id`, `username`, `email`) VALUES
(1, 'admin', 'abbasjames91@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demo@gmail.com'),
(2, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demsdo@gmail.com'),
(4, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'admfasin@gmail.com'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demasdasdo@gmail.com'),
(6, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'admsain@gmail.com'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demsdsado@gmail.com'),
(8, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'admfasidsn@gmail.com'),
(9, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demof@gmail.com'),
(10, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'admifn@gmail.com'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demsfdo@gmail.com'),
(12, 'adminf', '21232f297a57a5a743894a0e4a801fc3', 'fffas@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
