-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 May 2024, 03:14:35
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `butcebak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(15) NOT NULL,
  `expense_money` float(10,2) DEFAULT NULL,
  `expense_category` varchar(50) DEFAULT NULL,
  `expense_date` int(11) DEFAULT NULL,
  `expense_timedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `expense`
--

INSERT INTO `expense` (`expense_id`, `expense_money`, `expense_category`, `expense_date`, `expense_timedate`) VALUES
(8, 100.00, 'Alışveriş', 1, '2024-05-02 01:23:30'),
(9, 200.00, 'Gıda', 2, '2024-05-02 01:23:36'),
(10, 300.00, 'Telefon', 33, '2024-05-02 01:23:43'),
(11, 400.00, 'Eğlence', 4, '2024-05-02 01:23:50'),
(12, 500.00, 'Güzellik', 5, '2024-05-02 01:23:57'),
(13, 600.00, 'Giyim', 6, '2024-05-02 01:24:04'),
(14, 740.00, 'Evcil Hayvan', 7, '2024-05-02 01:24:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `income`
--

CREATE TABLE `income` (
  `income_id` int(15) NOT NULL,
  `income_money` float(10,2) DEFAULT NULL,
  `income_category` varchar(50) DEFAULT NULL,
  `income_date` int(11) NOT NULL,
  `income_timedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `income`
--

INSERT INTO `income` (`income_id`, `income_money`, `income_category`, `income_date`, `income_timedate`) VALUES
(36, 100.00, 'Eğlence', 1111, '2024-05-01 23:14:04'),
(37, 200.00, 'Eğlence', 111, '2024-05-01 23:14:20'),
(38, 500.00, 'Eğitim', 2222, '2024-05-01 23:14:31'),
(39, 300.00, 'Telefon', 22, '2024-05-02 00:54:39'),
(40, 400.00, 'Spor', 2, '2024-05-02 00:55:05'),
(41, 500.00, 'Güzellik', 77, '2024-05-02 00:55:23'),
(42, 999.00, 'Giyim', 9999, '2024-05-02 03:26:58'),
(43, 977.00, 'Eğlence', 3, '2024-05-02 03:28:46');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Tablo için indeksler `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
