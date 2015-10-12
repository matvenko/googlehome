-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 08 2015 г., 10:45
-- Версия сервера: 5.6.21
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `freeinfo_ge`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ganc`
--

CREATE TABLE IF NOT EXISTS `ganc` (
`id` int(6) unsigned NOT NULL,
  `username` varchar(150) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `qalaqi` varchar(120) NOT NULL,
  `raioni` varchar(150) NOT NULL,
  `ubani` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `misamarti_geo` varchar(250) NOT NULL,
  `misamarti_eng` varchar(250) NOT NULL,
  `about_company_geo` text NOT NULL,
  `about_company_eng` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image5` varchar(250) NOT NULL,
  `image6` varchar(250) NOT NULL,
  `statusi` tinyint(2) NOT NULL,
  `ganc_tarigi` date NOT NULL,
  `ganc_periodi` date NOT NULL,
  `nomeri` int(11) NOT NULL,
  `saiti` varchar(120) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `maili` varchar(100) NOT NULL,
  `ruka` text NOT NULL,
  `saatebi_geo` varchar(250) NOT NULL,
  `saatebi_eng` varchar(250) NOT NULL,
  `swavlebis_statusi_geo` varchar(250) NOT NULL,
  `swavlebis_statusi_eng` varchar(250) NOT NULL,
  `swavlebis_safexuri_geo` varchar(250) NOT NULL,
  `swavlebis_safexuri_eng` varchar(250) NOT NULL,
  `swavlebis_migeba_geo` varchar(250) NOT NULL,
  `swavlebis_migeba_eng` varchar(250) NOT NULL,
  `samzareulo_geo` varchar(250) NOT NULL,
  `samzareulo_eng` varchar(250) NOT NULL,
  `darbazi_geo` varchar(100) NOT NULL,
  `darbazi_eng` varchar(250) NOT NULL,
  `rekviziti` varchar(250) NOT NULL,
  `sms` varchar(250) NOT NULL,
  `partniorebi_geo` varchar(255) NOT NULL,
  `partniorebi_eng` varchar(250) NOT NULL,
  `sxva_servisi_geo` text NOT NULL,
  `sxva_servisi_eng` text NOT NULL,
  `upload_all` varchar(250) NOT NULL,
  `upload_aqcia` varchar(250) NOT NULL,
  `aqcia_name_geo` varchar(250) NOT NULL,
  `aqcia_name_eng` varchar(250) NOT NULL,
  `aqcia_photo` varchar(250) NOT NULL,
  `aqcia_pirobebi_geo` text NOT NULL,
  `aqcia_pirobebi_eng` text NOT NULL,
  `visible` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ganc`
--
ALTER TABLE `ganc`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ganc`
--
ALTER TABLE `ganc`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
