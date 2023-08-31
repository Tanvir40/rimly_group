-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 11:09 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwrgn_businessprofilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-12-08 04:19:21', '2022-12-08 04:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `bannersections`
--

CREATE TABLE `bannersections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannersections`
--

INSERT INTO `bannersections` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Image/banner/0ee0aa34df.jpg', '2022-12-08 04:12:51', '2022-12-08 04:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `times` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `address_one`, `address_two`, `number_one`, `number_two`, `email_one`, `email_two`, `days`, `times`, `created_at`, `updated_at`) VALUES
(1, 'House-42 Road-03, Block-B,', 'Section-12, Mirpur, Dhaka-1216', '+8801894 84 81 84', '+8801894 84 81 84', 'info@example.com', 'contact@example.com', 'Monday - Friday', '9:00AM - 05:00PM', '2022-12-08 04:15:42', '2022-12-08 04:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_05_061506_create_aboutuses_table', 1),
(6, '2022_12_05_093957_create_sliders_table', 1),
(7, '2022_12_06_041546_create_ourbrands_table', 1),
(8, '2022_12_06_052639_create_teams_table', 1),
(9, '2022_12_06_052703_create_websetups_table', 1),
(10, '2022_12_06_110232_create_contact_infos_table', 1),
(11, '2022_12_06_111808_create_pages_table', 1),
(12, '2022_12_07_045834_create_narbars_table', 1),
(13, '2022_12_07_052314_create_subnavbars_table', 1),
(14, '2022_12_08_050155_create_jobs_table', 1),
(15, '2022_12_08_063326_create_our_clients_table', 1),
(16, '2022_12_08_071006_create_bannersections_table', 1),
(17, '2022_12_08_090904_create_profles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `narbars`
--

CREATE TABLE `narbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `narbars`
--

INSERT INTO `narbars` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(4, 'Blog', NULL, '2022-12-11 00:14:43', '2022-12-11 00:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `ourbrands`
--

CREATE TABLE `ourbrands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourbrands`
--

INSERT INTO `ourbrands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Image/brands/8f093da14d.png', '2022-12-08 04:13:20', '2022-12-08 04:13:37'),
(3, 'Image/brands/8a4074b05e.png', '2022-12-08 04:13:22', '2022-12-08 04:13:22'),
(4, 'Image/brands/f259b21635.png', '2022-12-08 04:13:26', '2022-12-08 04:13:26'),
(5, 'Image/brands/c194ead6e8.png', '2022-12-08 04:13:28', '2022-12-08 04:13:28'),
(6, 'Image/brands/458ed25b9c.png', '2022-12-08 05:11:41', '2022-12-08 05:11:41'),
(7, 'Image/brands/e5fcce9168.png', '2022-12-08 05:11:46', '2022-12-08 05:11:46'),
(8, 'Image/brands/e6e54c7b27.png', '2022-12-08 05:11:50', '2022-12-08 05:11:50'),
(9, 'Image/brands/9537c1b52f.png', '2022-12-08 05:11:54', '2022-12-08 05:11:54'),
(10, 'Image/brands/e7096ae130.png', '2022-12-08 05:11:57', '2022-12-08 05:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `image`, `name`, `position`, `desp`, `created_at`, `updated_at`) VALUES
(8, '95e9c3b3bf.jpg', 'Yetta Davenport', 'Qui in dolores dolor', 'Magnam nostrud labor Magnam nostrud labor Magnam nostrud laborMagnam nostrud laborMagnam nostrud laborMagnam nostrud.', '2022-12-11 00:02:44', NULL),
(9, 'e15a9a1a6c.jpg', 'Madonna Garrett', 'Quae voluptate quis', 'Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint Quis sunt alias sint', '2022-12-11 00:03:25', NULL),
(10, 'e00079a620.jpg', 'Abdul Schneider', 'Ex facere veniam do', 'Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do Magnam doloremque do.', '2022-12-11 00:03:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Fifa', 'fifa', '<div class=\"BG103 story-title-info\">\r\n<div>\r\n<h1 style=\"text-align:justify\">আর্জেন্টিনায় কষ্টের জীবনে উচ্ছ্বাস ফেরাল মেসিরা</h1>\r\n</div>\r\n</div>\r\n\r\n<div class=\"H6cQ5\">\r\n<div class=\"D-0u1 author-read-time-wrapper\">\r\n<div class=\"mH-nJ\">\r\n<div class=\"author-details no-author-image o6ue2\">\r\n<div class=\"author-name-location-wrapper\">\r\n<div class=\"print-authors-list zM7oX\">\r\n<div class=\"_7cKay contributor-type-7 wqvPE\" style=\"text-align:justify\">নিজস্ব প্রতিবেদক</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"_24WTx time-social-share-wrapper\">\r\n<div class=\"c436q xuoYp\" style=\"text-align:justify\">প্রকাশ: ১০ ডিসেম্বর ২০২২, ১৭: ০০</div>\r\n\r\n<div class=\"UmzUb meta-data-icons\" style=\"text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"Dp4VG\" style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<div class=\"Dwfxv print-story-first-part\">\r\n<div>\r\n<div class=\"kAIJK print-meta-content\">\r\n<div class=\"RJoJJ\">\r\n<div>\r\n<div class=\"FitPV JCQpo UUq0z card-image-wrapper image16x9 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><img alt=\" কোয়ার্টার ফাইনালে নেদারল্যান্ডসের বিপক্ষে ম্যাচে গোল ও গোলে সহায়তা দুটোই করেছেন মেসি\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2022-12%2Fe1d91930-587c-4d06-bba2-51335954202e%2Fprothomalo_bangla_2022_12_bccaa096_9ff4_45ca_bbf6_672543201a6f_2022_12_09T215847Z_712491835_UP1EIC91.webp?rect=0%2C44%2C600%2C338&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=900&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"cdKYX\" style=\"text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p style=\"text-align:justify\">কোয়ার্টার ফাইনালে নেদারল্যান্ডসের বিপক্ষে ম্যাচে গোল ও গোলে সহায়তা দুটোই করেছেন মেসিছবি: রয়টার্স</p>\r\n\r\n<div class=\"wI1Ik\" id=\"faca5c4c-e910-4352-b6dd-88c1b22b81c3\">\r\n<div class=\"eyOoS storyCard\">\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text\">\r\n<div>\r\n<p style=\"text-align:justify\">একে তো রাজনৈতিক অস্থিরতার জেরে চলছে আন্দোলন, তার ওপর ক্রমবর্ধমান মূল্যস্ফীতির চাপ। সার্বিক অর্থনৈতিক অবস্থাও ভালো নয়, ঋণভারে জর্জরিত। বিশেষ করে বাজারে গেলেই নাভিশ্বাস ওঠে সাধারণ ক্রেতাদের। যেকোনো কিছু কেনার আগে দশবার ভাবতে হয় তাঁদের। কারণ বার্ষিক হিসাবে মূল্যস্ফীতি বেড়ে এরই মধ্যে ৮৮ শতাংশে উঠে গেছে। অর্থাৎ এক বছর আগে যে পণ্যের দাম ছিল ১০০ পেসো (স্থানীয় মুদ্রা), সেটি এখন ১৮৮ পেসো। দুর্নীতির মামলায় গত মঙ্গলবার তো বর্তমান ভাইস প্রেসিডেন্ট (যিনি আবার সাবেক প্রেসিডেন্টও) ক্রিস্টিনা ফার্নান্দেজ দে কির্চনারের ছয় বছরের কারাদণ্ড হয়েছে।</p>\r\n\r\n<p style=\"text-align:justify\">এ রকম পরিস্থিতিতেই দেশটির ফুটবলাররা গত রাতে বিশ্বকাপ ফুটবলে অবিস্মরণীয় এক জয় পেয়েছে। কোয়ার্টার ফাইনালের খেলায় তাঁরা টাইব্রেকারে নেদারল্যান্ডসকে ৪-৩ ব্যবধানে হারিয়ে উঠে গেছেন সেমিফাইনালে। বুঝতেই পারছেন, মেসিদের দেশ আর্জেন্টিনার কথা বলা হচ্ছে। এবারের বিশ্বকাপ ফুটবলের প্রথম ম্যাচের পরাজয় খানিক ধরিয়ে দিলেও পরবর্তী ম্যাচগুলোয় একের পর এক জয়ের সুবাদে দেশটি এখন সেমিফাইনালে উঠে গেছে। বদৌলতে ভোক্তারা ঊর্ধ্বমুখী মূল্যস্ফীতির চাপসহ দেশের অর্থনৈতিক দুর্দশা ভুলে; রাজনৈতিক আন্দোলনের কর্মীরা রাজপথ ছেড়ে ঘরে, বারে, হোটেলে, রেস্তোরাঁয় কিংবা উন্মুক্ত স্থানে বড় পর্দায় আর্জেন্টিনা জাতীয় ফুটবল দলের খেলা প্রাণভরে উপভোগ করছেন। দলের জয়ের পর রাস্তায় নেমে উদ্&zwnj;যাপন করছেন।</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text story-element-text-also-read\">\r\n<div class=\"also-read-text\" style=\"text-align:justify\">আরও পড়ুন</div>\r\n\r\n<h2 style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/industry/vwsgdtix3s\">আর্জেন্টিনার মানুষও পরেন বাংলাদেশের তৈরি পোশাক</a></h2>\r\n\r\n<div class=\"JCQpo UUq0z _8mCoa card-image-wrapper image3x2 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/industry/vwsgdtix3s\"><img alt=\"কাতার বিশ্বকাপে দ্বিতীয় গোল পাওয়ার পর মেসি\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2022-11%2Fc5780d4a-663e-4a32-9127-85f14eeb42ca%2Fprothomalo_bangla_2022_11_7f89c1f2_be66_48d7_a980_55f1e241798c_11__1_.webp?rect=78%2C0%2C608%2C405&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"WoXvn adsBox print-adslot\" lang=\"bn\">\r\n<div class=\"dfp-ad-unit\">\r\n<div class=\"adunitContainer\">\r\n<div class=\"AV62fcc475724a917bc561b696\" style=\"margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; max-width:640px; width:100%\">\r\n<div id=\"aniBox\" style=\"height:1px; opacity:0; overflow:hidden; transition:height 1s ease 0s; width:256px\">\r\n<div id=\"aniplayer_AV62fcc475724a917bc561b696-1670739034753\" style=\"bottom:115px; left:0px; position:fixed; transform-origin:left bottom 0px; visibility:hidden; z-index:10000001\">\r\n<div id=\"aniplayer_AV62fcc475724a917bc561b696-1670739034753gui\">\r\n<div class=\"av-desktop hide-controls\" id=\"av-container\" style=\"height:144px; width:256px\">\r\n<div id=\"av-inner\">\r\n<div id=\"slot\">\r\n<div class=\"loaded\" id=\"videoslot\" style=\"background-color:#000000; height:144px; text-align:justify; width:256px\">&nbsp;</div>\r\n</div>\r\n\r\n<div id=\"gui\">\r\n<div id=\"aniview-credit\" style=\"cursor:pointer; display:inline; right:2px; text-align:justify; top:2px\">&nbsp;</div>\r\n\r\n<div id=\"ad-icon\" style=\"text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div id=\"anibid\" style=\"text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"adBox\" id=\"mcanvas1x1-story-content-c1aeec29-9cef-44c7-bba1-355be8baf910\">\r\n<div id=\"google_ads_iframe_85406138/mCanvas_1x1_0__container__\" style=\"border:0pt none; text-align:justify\"><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_85406138/mCanvas_1x1_0\" name=\"google_ads_iframe_85406138/mCanvas_1x1_0\" scrolling=\"no\" style=\"border: 0px none; vertical-align: bottom;\" title=\"3rd party ad content\" width=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div id=\"7193e18c-b33d-4d35-b9ca-6827d9630808\">\r\n<div class=\"eyOoS storyCard\">\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text story-element-text-also-read\">\r\n<div class=\"also-read-text\" style=\"text-align:justify\">আরও পড়ুন</div>\r\n\r\n<h2 style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/jbcajwhffz\">পণ্য আমদানি কমেছে</a></h2>\r\n\r\n<div class=\"JCQpo UUq0z _8mCoa card-image-wrapper image3x2 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/jbcajwhffz\"><img alt=\"পণ্য আমদানি কমেছে\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2022-12%2F37ab848b-9537-4fcc-9b81-78b7e324e4a2%2Finfo__2_.JPG?rect=0%2C101%2C1692%2C1128&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text\">\r\n<div>\r\n<p style=\"text-align:justify\">অনেক আর্জেন্টাইনের মতো রাজধানী বুয়েনস আইরেসের বাসিন্দা নাটালি অ্যাকোস্তাও আশা করছেন, দেশের অর্থনৈতিক অস্থিরতা শিগগিরই কেটে যাবে। যদিও তিনি এখন রাজনৈতিক অস্থিরতার মধ্য দিয়ে যাচ্ছেন, উচ্চ মূল্যে মুদিখানা থেকে খাদ্যপণ্য কিনতে হচ্ছে। তবে এ রকম সঙ্গিন পরিস্থিতিকেও উপেক্ষা করার চেষ্টা করছেন নাটালি। কারণ একটাই, ফুটবল।</p>\r\n\r\n<p style=\"text-align:justify\">একটি কারখানার কর্মী নাটালি অ্যাকোস্তা বলেন, &lsquo;সকার (ফুটবল) আমাদের দৈনন্দিন সমস্যাগুলো কিছুটা ভুলে যেতে সাহায্য করে। আমাদেরও সমস্যাগুলো ভুলে যেতে হবে। আর্জেন্টিনা যদি সব জিতে যায়, তাতে আমি হয়তো পুরো ভালো থাকতে পারব না। তবে আমরা অন্তত খুশি তো হতে পারব।&rsquo;</p>\r\n\r\n<p style=\"text-align:justify\">বিরোধী রাজনৈতিক কর্মীরা অর্থনৈতিক সংকট মোকাবিলায় আরও সরকারি সাহায্যের দাবিতে আন্দোলন করে আসছিলেন। তাঁরা এখন আর্জেন্টিনার খেলার দিনে রাস্তা অবরোধের কর্মসূচি ছেড়ে ঘরে অবস্থান করেন, টিভিতে ম্যাচ দেখেন। খেলার সময় অফিসের কর্মীরা ছুটি নেন, ব্যস্ত পার্কগুলো ফাঁকা হয়ে যায়। স্কুলও শিশুদের বাড়িতে পাঠিয়ে দেয়।</p>\r\n\r\n<p style=\"text-align:justify\">আর্জেন্টিনার বেকার নাগরিকদের একটি সংস্থার প্রধান এদুয়ার্দো বেলিবোনি বরেন, &lsquo;খেলা চলাকালে আমরা প্রতিবাদ করতে যাই না।&rsquo;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"_0Zwdj _4Pk8L adsBox print-adslot\" lang=\"bn\">\r\n<div class=\"dfp-ad-unit\">\r\n<div class=\"adunitContainer\">\r\n<div class=\"adBox\" id=\"story_0-1-inArticle2\">\r\n<div id=\"google_ads_iframe_85406138/News_InArticle2_300x250_0__container__\" style=\"border:0pt none; text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div id=\"76b921cc-7bc6-4d0c-a7c3-b61d40e17495\">\r\n<div class=\"eyOoS storyCard\">\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text story-element-text-also-read\">\r\n<div class=\"also-read-text\" style=\"text-align:justify\">আরও পড়ুন</div>\r\n\r\n<h2 style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/6eg1eb7wj9\">মহাসড়কে পণ্য চুরি থামেনি, উদ্বিগ্ন রপ্তানিকারকেরা</a></h2>\r\n\r\n<div class=\"JCQpo UUq0z _8mCoa card-image-wrapper image3x2 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/6eg1eb7wj9\"><img alt=\"তৈরি পোশাক কারখানা\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2Fbe44bac2-94ed-4d11-9da7-7fdad25c4b81%2FIMG_8327.JPG?rect=0%2C0%2C2047%2C1365&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text\">\r\n<div>\r\n<p style=\"text-align:justify\">এদিকে &lsquo;আর্জেন্টিনার সমাজে ফুটবলের ভূমিকা&rsquo; শীর্ষক বইয়ের লেখক এদুয়ার্দো সাচেরি বলেন, &lsquo;সব মনোযোগ বিশ্বকাপের দিকে। আমি বলব, সকারই &nbsp;একমাত্র জিনিস, যা আমাদের একত্র করে।&rsquo;</p>\r\n\r\n<p style=\"text-align:justify\">সামাজিক যোগাযোগমাধ্যমে ভাইরাল হওয়া একটি ভিডিওতে দেখা গেছে, বিমানবন্দরের এক নিরাপত্তা প্রহরী এক যাত্রীর বোর্ডিং পাস হাতে রেখে আর্জেন্টিনার গোল উদযাপনের জন্য ছুটে যান।</p>\r\n\r\n<p style=\"text-align:justify\">জাতীয় দলের ক্রমাগত জয়ের ফলে আর্জেন্টিনার নাগরিকদের কাতারে আগমন বাড়ছে। দেশটির রাষ্ট্রীয় মালিকানাধীন বিমান সংস্থা অ্যারোলিনাস আর্জেন্টিনাস সম্প্রতি বুয়েনস আইরেস থেকে দোহা পর্যন্ত ২০ ঘণ্টার উড়ান চালু করেছে। টিকিটও বিক্রি হচ্ছে দেদার।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div id=\"5b394bbb-134b-4ab7-a63e-7c6520e5e77f\">\r\n<div class=\"eyOoS storyCard\">\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text story-element-text-also-read\">\r\n<div class=\"also-read-text\" style=\"text-align:justify\">আরও পড়ুন</div>\r\n\r\n<h2 style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/bank/oaenrytlsd\">ইসলামী ব্যাংকে &lsquo;ভয়ংকর নভেম্বর&rsquo;</a></h2>\r\n\r\n<div class=\"JCQpo UUq0z _8mCoa card-image-wrapper image3x2 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/bank/oaenrytlsd\"><img alt=\"ইসলামী ব্যাংকে ‘ভয়ংকর নভেম্বর’\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2022-11%2F42d7780a-099f-492c-83b2-c8983065feca%2FUntitled_1.gif?rect=0%2C0%2C1600%2C1067&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text\">\r\n<div>\r\n<p style=\"text-align:justify\">ক্যাথলিক ইউনিভার্সিটি অব আর্জেন্টিনার একটি প্রতিবেদন অনুযায়ী গত অক্টোবর মাসে দেশটিতে মূল্যস্ফীতি ৮৮ শতাংশে ওঠায় সরকারের প্রতি জনগণের সমর্থন কমে গেছে। মূল্যস্ফীতির এই হার এক প্রজন্মের মধ্যে সবচেয়ে খারাপ। অন্য এক হিসাবমতে, বর্তমানে বিশ্বে মাত্র ছয়টি দেশে আর্জেন্টিনার চেয়ে মূল্যস্ফীতির হার বেশি। দেশগুলো হচ্ছে জিম্বাবুয়ে (২৬৯%), লেবানন (১৬২%), ভেনিজুয়েলা (১৫৬%), সিরিয়া (১৩৯%) ও সুদান (১০৩%)। এ ছাড়া আর্জেন্টিনায় দারিদ্র্যের হার বেড়ে ৪৩ শতাংশে উঠেছে, যা পাঁচ বছর আগে ছিল ২৮ শতাংশ।</p>\r\n\r\n<p style=\"text-align:justify\">ফুটবলপ্রিয় জাতি হিসেবে অতি সাধারণ আর্জেন্টাইন নাগরিকদের মধ্যেও বিশ্বকাপ নিয়ে উত্সাহ আগের মতোই শক্তিশালী। আর্জেন্টিনার ফুটবল জার্সি পরে রাস্তায় রুমাল বিক্রি করছিল নিকোলাস ভিউব্লিওনেট নামের এক কিশোর। এক প্রশ্নের জবাবে সে জানায়, অর্থনীতির উন্নতির চেয়ে আর্জেন্টিনাকে এই বছরের বিশ্বকাপ জিততে দেখাটাকেই সে বেশি পছন্দ করবে। তার বক্তব্য, &lsquo;কোনো সন্দেহ নেই যে আমি আর্জেন্টিনাকে জিততে দেখতেই পছন্দ করব। একটু সুখ পাওয়াই ভালো।&rsquo;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"_0Zwdj _4Pk8L adsBox print-adslot\" lang=\"bn\">\r\n<div class=\"dfp-ad-unit\">\r\n<div class=\"adunitContainer\">\r\n<div class=\"adBox\" id=\"story_0-3-inArticle2\">\r\n<div id=\"google_ads_iframe_85406138/News_InArticle2_300x250_1__container__\" style=\"border:0pt none; text-align:justify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div id=\"d836327e-25c4-4835-8928-c47e03c0f76c\">\r\n<div class=\"eyOoS storyCard\">\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text story-element-text-also-read\">\r\n<div class=\"also-read-text\" style=\"text-align:justify\">আরও পড়ুন</div>\r\n\r\n<h2 style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/bank/vqxpqre7y9\">গ্লোবাল ইসলামী ব্যাংকের তথ্য ফাঁস ডার্ক ওয়েবে</a></h2>\r\n\r\n<div class=\"JCQpo UUq0z _8mCoa card-image-wrapper image3x2 qt-image-dynamic\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\">\r\n<p style=\"text-align:justify\"><a class=\"card-with-image-zoom _-2jpv\" href=\"https://www.prothomalo.com/business/world-business/business/bank/vqxpqre7y9\"><img alt=\"সাইবার নিরাপত্তার  প্রতীকী ছবি\" class=\"gm-added gm-loaded gm-observing gm-observing-cb image qt-image\" src=\"https://images.prothomalo.com/prothomalo-bangla%2F2022-09%2Fbd963fae-00dd-47aa-8f51-d7f721fdc35f%2FSophos_Research_2.jpeg?rect=75%2C0%2C810%2C540&amp;auto=format%2Ccompress&amp;fmt=webp&amp;format=webp&amp;w=100&amp;dpr=1.0\" style=\"background-image:url(&quot;/media-placeholder.svg&quot;)\" /></a></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"story-element\">\r\n<div class=\"story-element story-element-text\">\r\n<div>\r\n<p style=\"text-align:justify\">নিকোলাস ভিউব্লিওনেটের কথাই হয়তো ঠিক, আর্জেন্টিনার মতো দেশে অর্থনৈতিক পুনরুদ্ধার স্বল্পস্থায়ী হয় এবং তা সংকটের পুনরাবৃত্তি ঘটায়। তা না হলে ১৯৫০ সাল থেকে এখন পর্যন্ত আর্জেন্টিনাকে অর্থনৈতিক পুনরুদ্ধারের জন্য আন্তর্জাতিক মুদ্রা তহবিল (আইএমএফ) থেকে ২০ বারের বেশি সহায়তা নিতে হবে কেন? সূত্র: দ্য ওয়াল স্ট্রিট জার্নাল।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2022-12-11 00:11:13', '2022-12-11 00:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profles`
--

CREATE TABLE `profles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Image/slider/120ffbec56.jpg', '2022-12-11 10:09:05', '2022-12-11 10:09:05'),
(7, 'Image/slider/c2c8ebe9de.jpg', '2022-12-11 10:15:04', '2022-12-11 10:16:12'),
(8, 'Image/slider/3c2586a8c5.jpg', '2022-12-11 10:15:10', '2022-12-11 10:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `subnavbars`
--

CREATE TABLE `subnavbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subnavbars`
--

INSERT INTO `subnavbars` (`id`, `name`, `navbar_id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Football', 4, 'https://business.softcreation.tech/dynamic/fifa', '2022-12-11 00:15:03', '2022-12-11 06:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `position`, `desp`, `created_at`, `updated_at`) VALUES
(1, '1d01837b54.jpg', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor', 'lit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit.', '2022-12-08 04:15:04', '2022-12-11 00:04:46'),
(2, '0245cb2e80.jpg', 'Rowan Colon', 'Perferendis elit vo', 'Facere ipsum qui qu Facere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere ipsum qui quFacere.', '2022-12-08 05:04:58', '2022-12-11 00:05:02'),
(3, 'c47ac0dc73.jpg', 'Lane Peck', 'Sunt excepteur incid', 'Rerum labore atque q Rerum labore atque qRerum labore atque qRerum labore atque qRerum labore atque qRerum labore atque qRerum labore atque qRerum labore atque qRerum labore atque q', '2022-12-08 05:05:06', '2022-12-11 00:04:21'),
(4, '9dbda3677e.jpg', 'Barbara Witt', 'Aut id deserunt magn', 'Sint fuga Rerum eos Sint fuga Rerum eosSint fuga Rerum eosSint fuga Rerum eosSint fuga Rerum eosSint fuga Rerum eosSint fuga Rerum eos', '2022-12-08 05:05:11', '2022-12-11 00:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2022-12-08 04:06:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sxNCJGGJkNp7AjD4oBdNxVIKi25VFsuXWMvGS6f0U6JOMNRRfDdviUEW9TTY', '2022-12-08 04:06:15', '2022-12-08 04:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `websetups`
--

CREATE TABLE `websetups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websetups`
--

INSERT INTO `websetups` (`id`, `email`, `phone`, `address`, `fb`, `tw`, `ins`, `ldin`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Rimly Group Of Industries', '+8801894 84 81 84', 'Delua, Saturia, Manikganj. Delua, Saturia, Manikganj.Delua, Saturia, Manikganj. Delua, Saturia, Manikganj.', 'http://shakziaurrahmantito.tk/', 'http://shakziaurrahmantito.tk/', 'http://shakziaurrahmantito.tk/', 'https://bd.linkedin.com/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Image/icon/64f3b7e1ab.png', '2022-12-08 04:09:08', '2022-12-11 09:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannersections`
--
ALTER TABLE `bannersections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narbars`
--
ALTER TABLE `narbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourbrands`
--
ALTER TABLE `ourbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profles`
--
ALTER TABLE `profles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subnavbars`
--
ALTER TABLE `subnavbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websetups`
--
ALTER TABLE `websetups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannersections`
--
ALTER TABLE `bannersections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `narbars`
--
ALTER TABLE `narbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ourbrands`
--
ALTER TABLE `ourbrands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profles`
--
ALTER TABLE `profles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subnavbars`
--
ALTER TABLE `subnavbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websetups`
--
ALTER TABLE `websetups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
