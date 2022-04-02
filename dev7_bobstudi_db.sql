-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 07 2020 г., 20:49
-- Версия сервера: 5.5.62-0+deb8u1
-- Версия PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dev7_bobstudi_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `text_ru`, `text_en`, `text_az`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis Tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis Tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis Tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', NULL, NULL, 'images/uploads/cb64feb39d09cc38d8a1b71887b2c4ea.jpg', '2020-01-29 13:16:54', '2020-01-29 13:16:54');

-- --------------------------------------------------------

--
-- Структура таблицы `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `areas`
--

INSERT INTO `areas` (`id`, `title_ru`, `text_ru`, `title_en`, `text_en`, `title_az`, `text_az`, `created_at`, `updated_at`) VALUES
(1, 'Лайтбоксы в паркингах', 'icon-parking-lightbox', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Колонны в паркингах', 'icon-parking-column', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Пилларсы 4-х сторонние', 'icon-pillars', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Реклама в W/C', 'icon-ws', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Рекламные стенды', 'icon-stand', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Лайтбоксы<span>большие, средние, маленькие</span>', 'icon-lightbox', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Реклама на бренд волл', 'icon-brandwall', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Подвесная реклама', 'icon-pendant-advertising', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Реклама на мониторах', 'icon-monitor', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Брендирование лифтов', 'icon-elevator', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Брендирование эскалаторов', 'icon-eskalator', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Фасадные окна', 'icon-windows', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Реклама под потолком <span>малый потолок</span>', 'icon-pendant-advertising-2', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Вращающиеся двери', 'icon-revolving-doors', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Рекламные акции', 'icon-promotional', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Изготовление рекламной продукции', 'icon-promotional-2', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `area_floor`
--

DROP TABLE IF EXISTS `area_floor`;
CREATE TABLE `area_floor` (
  `area_id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `area_floor`
--

INSERT INTO `area_floor` (`area_id`, `floor_id`) VALUES
(11, 2),
(16, 2),
(14, 2),
(9, 2),
(10, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `floors`
--

DROP TABLE IF EXISTS `floors`;
CREATE TABLE `floors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `malls_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `floors`
--

INSERT INTO `floors` (`id`, `title_ru`, `title_en`, `title_az`, `malls_id`, `created_at`, `updated_at`) VALUES
(1, '1 этаж', NULL, NULL, 1, '2020-01-28 14:50:32', '2020-01-28 14:50:32'),
(2, '2 этаж', NULL, NULL, 1, '2020-01-28 14:51:31', '2020-01-28 15:38:13');

-- --------------------------------------------------------

--
-- Структура таблицы `malls`
--

DROP TABLE IF EXISTS `malls`;
CREATE TABLE `malls` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `short_text_ru` longtext COLLATE utf8_unicode_ci,
  `short_text_en` longtext COLLATE utf8_unicode_ci,
  `short_text_az` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `malls`
--

INSERT INTO `malls` (`id`, `title_ru`, `text_ru`, `title_en`, `text_en`, `title_az`, `text_az`, `short_text_ru`, `short_text_en`, `short_text_az`, `image`, `logo`, `images`, `slug`, `created_at`, `updated_at`) VALUES
(1, '28 Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<ul>\r\n</ul>\r\n', NULL, NULL, NULL, NULL, '<p>Торговый центр 28 Mall находится в городе Nasimi. Вы можете беззаботно провести день за знакомством с достопримечательностями и интересными местами этого района.</p>\r\n\r\n<ul>\r\n	<li>Лайтбоксы в паркингах</li>\r\n	<li>Колонны в паркингах</li>\r\n	<li>Пилларсы 4-х сторонние</li>\r\n	<li>Реклама в W/C</li>\r\n	<li>Рекламные стенды</li>\r\n	<li>Лайтбоксы</li>\r\n	<li>Реклама на бренд волл</li>\r\n	<li>Подвесная реклама</li>\r\n	<li>Реклама на мониторах</li>\r\n	<li>Брендирование лифтов</li>\r\n</ul>\r\n', '', '', 'images/uploads/245d4b9349b3848c60e7201a3955b427.jpg', 'images/uploads/3a5cad54649ed38abfd078a29ed2be9a.jpg', '[\"images\\/uploads\\/65c4f4c931447f9edf4f3697e5f4fc17.jpg\",\"images\\/uploads\\/1bf773920bf8bf95f3ce178b279352b6.jpg\",\"images\\/uploads\\/493d6cbe5c49a66893cd1ffce53ff90f.jpg\",\"images\\/uploads\\/761bd26d76b320c12f8ca62005be73e2.jpg\",\"images\\/uploads\\/6687f62345ba505269125b1f1ccd4bc3.jpg\"]', '28-mall', '2020-01-19 21:04:42', '2020-01-29 12:19:06'),
(2, 'Gənclik Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<ul>\r\n</ul>\r\n', NULL, NULL, NULL, NULL, '<p>Торговый центр 28 Mall находится в городе Nasimi. Вы можете беззаботно провести день за знакомством с достопримечательностями и интересными местами этого района.</p>\r\n\r\n<ul>\r\n	<li>Лайтбоксы в паркингах</li>\r\n	<li>Колонны в паркингах</li>\r\n	<li>Пилларсы 4-х сторонние</li>\r\n	<li>Реклама в W/C</li>\r\n	<li>Рекламные стенды</li>\r\n	<li>Лайтбоксы</li>\r\n	<li>Реклама на бренд волл</li>\r\n	<li>Подвесная реклама</li>\r\n	<li>Реклама на мониторах</li>\r\n	<li>Брендирование лифтов</li>\r\n</ul>\r\n', '', '', 'images/uploads/4f3e146f7d700629adfc3fb1d0579c45.jpg', 'images/uploads/3e8c2aca90102d5b5b75828b83e729c6.jpg', '[\"images\\/uploads\\/e4b4634e1cf2618f34bebbfaea7ad0de.jpg\",\"images\\/uploads\\/10843f85befc81ee6fd80eac8cb02cb4.jpg\",\"images\\/uploads\\/3453b1362b5a60bd1b26d03e40d6e29f.jpg\"]', 'genclik-mall', '2020-01-29 07:02:41', '2020-01-29 12:20:14'),
(3, 'Deniz Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', NULL, NULL, NULL, NULL, '<p>Торговый центр 28 Mall находится в городе Nasimi. Вы можете беззаботно провести день за знакомством с достопримечательностями и интересными местами этого района.</p>\r\n\r\n<ul>\r\n	<li>Лайтбоксы в паркингах</li>\r\n	<li>Колонны в паркингах</li>\r\n	<li>Пилларсы 4-х сторонние</li>\r\n	<li>Реклама в W/C</li>\r\n	<li>Рекламные стенды</li>\r\n	<li>Лайтбоксы</li>\r\n	<li>Реклама на бренд волл</li>\r\n	<li>Подвесная реклама</li>\r\n	<li>Реклама на мониторах</li>\r\n	<li>Брендирование лифтов</li>\r\n</ul>\r\n', '', '', 'images/uploads/8cac02de2c61a18614a9bd5bec9a89c1.jpg', 'images/uploads/5ebe70f2e9c3225e05fa2ab9115c0046.jpg', '[\"images\\/uploads\\/5e5b1565fbcf31573f377af0c4c9bd3d.jpg\",\"images\\/uploads\\/6956fd7036e8802de967b5db76bc6d9f.png\"]', 'deniz-mall', '2020-01-29 07:03:03', '2020-01-29 12:20:31'),
(4, 'Gəndja Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', 'Gəndja Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', 'Gəndja Mall', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', '<p>Торговый центр 28 Mall находится в городе Nasimi. Вы можете беззаботно провести день за знакомством с достопримечательностями и интересными местами этого района.</p>\r\n\r\n<ul>\r\n	<li>Лайтбоксы в паркингах</li>\r\n	<li>Колонны в паркингах</li>\r\n	<li>Пилларсы 4-х сторонние</li>\r\n	<li>Реклама в W/C</li>\r\n	<li>Рекламные стенды</li>\r\n	<li>Лайтбоксы</li>\r\n	<li>Реклама на бренд волл</li>\r\n	<li>Подвесная реклама</li>\r\n	<li>Реклама на мониторах</li>\r\n	<li>Брендирование лифтов</li>\r\n</ul>\r\n', '', '', 'images/uploads/bc1fe0aec115dc1ac6d6fed499eec731.jpg', 'images/uploads/9ec51ea7471d327c1bcb2e4c9b43ca27.jpg', '[\"images\\/uploads\\/145ed71813ba777c4072d6a93a60d584.jpg\",\"images\\/uploads\\/fc780145ad2120dcb74b647f371534f8.jpg\",\"images\\/uploads\\/0a47c0db5f11556ac4e0c77115164d70.jpg\"]', 'gendja-mall', '2020-01-29 07:03:28', '2020-01-29 12:20:47'),
(5, 'Port Baku', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', 'Port Baku', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', 'Port Baku', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', '<p>Торговый центр 28 Mall находится в городе Nasimi. Вы можете беззаботно провести день за знакомством с достопримечательностями и интересными местами этого района.</p>\r\n\r\n<ul>\r\n	<li>Лайтбоксы в паркингах</li>\r\n	<li>Колонны в паркингах</li>\r\n	<li>Пилларсы 4-х сторонние</li>\r\n	<li>Реклама в W/C</li>\r\n	<li>Рекламные стенды</li>\r\n	<li>Лайтбоксы</li>\r\n	<li>Реклама на бренд волл</li>\r\n	<li>Подвесная реклама</li>\r\n	<li>Реклама на мониторах</li>\r\n	<li>Брендирование лифтов</li>\r\n</ul>\r\n', '', '', 'images/uploads/2b356543816df3b92a4db26cf5c39293.jpg', 'images/uploads/05977044a9024e6dfd8c59e9d08cde38.jpg', '[\"images\\/uploads\\/66281121c0d62fa374e5ad185fed3b9e.jpg\",\"images\\/uploads\\/215b2091d0b0d41dace337e3821a3395.jpg\",\"images\\/uploads\\/46916d3492b13cca709c7b03926320f0.jpg\"]', 'port-baku', '2020-01-29 07:04:11', '2020-01-29 12:21:00');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_01_19_174240_create_table_portfolio', 1),
(11, '2020_01_19_185356_create_table_services', 2),
(19, '2020_01_19_205641_create_table_malls', 3),
(20, '2020_01_19_210154_create_table_floors', 3),
(21, '2020_01_19_210246_create_table_advertising_areas', 3),
(23, '2020_01_28_172054_create_place_table', 4),
(24, '2020_01_29_155104_main_page', 5),
(25, '2020_01_29_162357_create_team_table', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8_unicode_ci NOT NULL,
  `availability` date DEFAULT NULL,
  `price_1` int(11) NOT NULL,
  `price_10` int(11) DEFAULT NULL,
  `price_15` int(11) DEFAULT NULL,
  `price_21` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `floor_id` int(11) NOT NULL,
  `mall_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `title_ru`, `text_ru`, `images`, `availability`, `price_1`, `price_10`, `price_15`, `price_21`, `title_en`, `text_en`, `title_az`, `text_az`, `floor_id`, `mall_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Название рекламного места №3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', '[\"images\\/uploads\\/05729160ea7f9e6129ea78608cc99d4a.jpg\",\"images\\/uploads\\/74ff8323668e34c6973686ca2c5a75fe.jpg\",\"images\\/uploads\\/e4884e4c6599ac227a48ef87ae91843a.jpg\"]', NULL, 10, 20, 30, 40, NULL, NULL, NULL, NULL, 1, 1, 10, '2020-01-28 15:05:43', '2020-01-28 15:05:43'),
(2, 'Рекламное место 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', '[\"images\\/uploads\\/1d81b16950da88282c50db7ff99a5dc1.jpg\",\"images\\/uploads\\/0b2ad2765f19b2e6e3679cba55d3fcf3.jpg\",\"images\\/uploads\\/7a195094dbb1b15342fd48cbba38817f.jpg\"]', '2020-02-08', 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 10, '2020-01-29 06:58:00', '2020-01-29 10:53:14'),
(3, 'Название рекламного места №2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n', '[\"images\\/uploads\\/da3b2ca71105deaa512a2ca104265e9b.jpg\",\"images\\/uploads\\/1d29628df5e7320c4bf375c98290ad94.jpg\",\"images\\/uploads\\/9f496e58dd607328f36e5be285077d16.jpg\"]', NULL, 500, 5000, 2500, 3500, NULL, NULL, NULL, NULL, 2, 1, 11, '2020-02-06 13:16:33', '2020-02-06 13:34:18');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `images` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `title_ru`, `text_ru`, `title_en`, `text_en`, `title_az`, `text_az`, `images`, `created_at`, `updated_at`) VALUES
(1, 'ЗАГОЛОВОК 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<h3>Заголовок 3</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>\r\n', NULL, NULL, NULL, NULL, '[\"images\\/uploads\\/1bc2e904298c43a3e2f9d0d4207f6f7d.jpg\",\"images\\/uploads\\/510e8d5c0bb1a1fc2efebff496f8b056.jpg\",\"images\\/uploads\\/29c2cbd0b30e6c3cbf91c14dfd6ec58c.jpg\",\"images\\/uploads\\/100eccb99addb841487385dcaacdbeb7.jpg\",\"images\\/uploads\\/8bbdb466b188fadb757ad7560b567b43.jpg\",\"images\\/uploads\\/7a5fd107eb966c4266d89e1fcfc48af6.jpg\",\"images\\/uploads\\/fa786b32ee7d2ea3f252053cbd40f2cb.jpg\",\"images\\/uploads\\/cfa8c989ed6c89b32dc99f1f16785aa2.jpg\"]', '2020-01-19 15:22:25', '2020-01-19 15:27:17');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `title_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `images` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title_ru`, `text_ru`, `title_en`, `text_en`, `title_az`, `text_az`, `images`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Услуги по дизайну стендов', '<h2>ЗАГОЛОВОК 2</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<h3>Заголовок 3</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>\r\n', NULL, NULL, NULL, NULL, '[\"images\\/uploads\\/b0c513836db92d11bf77e6045d8e084e.jpg\",\"images\\/uploads\\/4b2ccc4f21925174572404e68257851f.jpg\",\"images\\/uploads\\/665c16ef181e0dfc5e920d08154d07bc.jpg\",\"images\\/uploads\\/9e152345644cf78d80198a1275bc78a8.jpg\",\"images\\/uploads\\/ad90d94c6c166936f810447778096c1c.jpg\",\"images\\/uploads\\/333794db6dd4bb96fea24de4b961ecb3.jpg\",\"images\\/uploads\\/a4b0fba00d8e3b779d370ef65a73d8da.jpg\",\"images\\/uploads\\/9d90cf55a3236f0996a14fd010bd87f7.jpg\",\"images\\/uploads\\/fd0c147ee2b64c2206134c34083e98f7.jpg\"]', '[\"images\\/uploads\\/4f7c4e5842d959d46ffcd1199389d639.jpg\"]', 'usluhy-po-dyzainu-stendov', '2020-01-19 16:04:43', '2020-01-19 16:04:43'),
(2, 'Изготовление стендов', '<h2>ЗАГОЛОВОК 2</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<h3>Заголовок 3</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>\r\n', NULL, NULL, NULL, NULL, '[\"images\\/uploads\\/4aab0d80a8cc124fc4a821addfe92f52.jpg\",\"images\\/uploads\\/b47f795ffd16787258f437646a8b21ae.jpg\",\"images\\/uploads\\/4b06a1ec239ec899e9fb1273edd6a42d.jpg\",\"images\\/uploads\\/ceae96cdd5f45af985e967d85e0c754c.jpg\",\"images\\/uploads\\/ca692ca6c3d5d82c05327e38faf43a78.jpg\",\"images\\/uploads\\/376e3781d16f412e3b03699a0cd0c417.jpg\",\"images\\/uploads\\/2b0d73c8d0d74fbf41f750047fa3ad02.jpg\",\"images\\/uploads\\/ccfcd80dcaace61631c2a479626dff95.jpg\"]', '[\"images\\/uploads\\/5591d56967ec4cde0cfa376426e9f6a9.jpg\"]', 'izgotovlenie-stendov', '2020-01-19 16:20:11', '2020-01-19 16:20:11'),
(3, 'Разработка концепций акций', '<h2>ЗАГОЛОВОК 2</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<h3>Заголовок 3</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>\r\n', NULL, NULL, NULL, NULL, '[\"images\\/uploads\\/e0eab2932e7142250e155c21907eaeca.jpg\",\"images\\/uploads\\/0b8bc143f439129839192c60c38a0303.jpg\",\"images\\/uploads\\/cf5af8af14d9a54a4642cba4843b2ba4.jpg\",\"images\\/uploads\\/79bea40d7aae4122bb8ec549d875a42a.jpg\",\"images\\/uploads\\/c35f1183c64a6dabe631386dd57d9034.jpg\",\"images\\/uploads\\/a795a3205bc3ba10c7f3fb5ea21312b9.jpg\",\"images\\/uploads\\/25adcd086daffbcbaaeb61b91b8f9d20.jpg\",\"images\\/uploads\\/c0f97542accb13715d7231052bba3b3e.jpg\"]', '[\"images\\/uploads\\/486b5dcf5ae7a328d612190d9bdb2989.jpg\"]', 'razrabotka-kontseptsiy-aktsiy', '2020-01-19 17:15:56', '2020-01-19 17:15:56'),
(4, 'Предоставление промоутеров', '<h2>ЗАГОЛОВОК 2</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>\r\n\r\n<h3>Заголовок 3</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>\r\n', NULL, NULL, NULL, NULL, '[\"images\\/uploads\\/a6f61183d1ca77058ec8ba0eb39a02da.jpg\",\"images\\/uploads\\/82907280f60afc710b4d096a51b06ca5.jpg\",\"images\\/uploads\\/89438c973d78a21c8fe40ee2ba2d381f.jpg\",\"images\\/uploads\\/b3983651f82487c3eed734c0fabc1486.jpg\",\"images\\/uploads\\/d5740aa607942414377c99114ee53a3b.jpg\",\"images\\/uploads\\/78153186c6db5546042f7e2cf83b76f3.jpg\",\"images\\/uploads\\/2b8c9999f5121028a688043e501f651d.jpg\",\"images\\/uploads\\/aedfaa270e2b3c347d45e9f91645e3b4.jpg\"]', '[\"images\\/uploads\\/3d4ea02d818e375610f5307626179db7.jpg\"]', 'predostavlenie-promouterov', '2020-01-19 17:16:44', '2020-01-19 17:16:44');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_main`
--

DROP TABLE IF EXISTS `slider_main`;
CREATE TABLE `slider_main` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_en` longtext COLLATE utf8_unicode_ci,
  `text_az` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `slider_main`
--

INSERT INTO `slider_main` (`id`, `text_ru`, `text_en`, `text_az`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p class=\"title\">Эксклюзивные права на размещение рекламы</p>\r\n                      <p class=\"subtitle\">в лучших торговых центрах Баку - Гянджа</p>', NULL, NULL, 'images/uploads/c3ba8d0df6e681b2be5e32c8f0f92e69.jpg', '2020-01-29 13:05:01', '2020-01-29 13:08:41'),
(2, '<p class=\"title\">Эксклюзивные права на размещение рекламы</p>\r\n                      <p class=\"subtitle\">в лучших торговых центрах Баку - Гянджа</p>', NULL, NULL, 'images/uploads/075bd4adc04a85cf0199838ee5d191ac.jpg', '2020-01-29 13:05:45', '2020-01-29 13:09:18');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position_ru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_az` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name_ru`, `position_ru`, `name_az`, `position_az`, `name_en`, `position_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Эльдар Ибрагимов', 'Praesent consequat feugiat pulvinarм', NULL, NULL, NULL, NULL, 'images/uploads/91eb56037a2d3f07f651579bd6596948.jpg', '2020-01-29 13:32:58', '2020-01-29 13:32:58'),
(2, 'Эльдар Ибрагимов', 'Praesent consequat feugiat pulvinarм', NULL, NULL, NULL, NULL, 'images/uploads/6d48e63de8ab471838f21a95762c3ff6.jpg', '2020-01-29 13:33:27', '2020-01-29 13:33:27'),
(3, 'Эльдар Ибрагимов', 'Praesent consequat feugiat pulvinarм', NULL, NULL, NULL, NULL, 'images/uploads/bb46a63df1dd187842891f5d7e84906b.jpg', '2020-01-29 13:33:41', '2020-01-29 13:33:41'),
(4, 'Эльдар Ибрагимов', 'Praesent consequat feugiat pulvinarм', NULL, NULL, NULL, NULL, 'images/uploads/396a7fd47573be8e02140947df5de5b8.jpg', '2020-01-29 13:33:50', '2020-01-29 13:33:50');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `malls`
--
ALTER TABLE `malls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_main`
--
ALTER TABLE `slider_main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `malls`
--
ALTER TABLE `malls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `slider_main`
--
ALTER TABLE `slider_main`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
