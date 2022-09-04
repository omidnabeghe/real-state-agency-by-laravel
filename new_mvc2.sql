-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 04:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_mvc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `storeroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `toilet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `sell_status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `address`, `amount`, `image`, `floor`, `year`, `storeroom`, `balcony`, `area`, `room`, `toilet`, `parking`, `tag`, `user_id`, `cat_id`, `status`, `sell_status`, `type`, `view`, `created_at`, `updated_at`) VALUES
(2, 'emarat', '<p>I like to say that there&rsquo;s no magic button for fixing the problems facing social media platforms. The current state of social media is a Gordian Knot, an impossibly difficult, tangled web of complexity that humbles the countless thought leaders and organizations who offer solutions.</p>\r\n\r\n<p>It isn&rsquo;t that social media companies are making the wrong decisions, but rather that there are no right decisions to be made. Making determinations regarding speech means diving headfirst into a messy world of tradeoffs. The public allows the government to make these difficult decisions because we exercise power through the political process. That isn&rsquo;t the case with social media platforms, however.</p>\r\n\r\n<p>&nbsp;</p>', 'BILBOARD BLV. 2TH ST, LONDON', '125000$', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659773190\\\\1659773190_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659773190\\\\1659773190_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659773190\\\\1659773190_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659773190\",\"currentImage\":\"medium\"}', 'wooden', 2012, 0, 1, 100, 5, 'europe', 1, 'cozy,big,pool', 1, 5, 0, 1, 1, NULL, '2022-08-06 03:36:36', '2022-08-06 03:36:36'),
(3, 'big farm', '<p>&ldquo;Free speech isn&rsquo;t about saying whatever comes to mind,&rdquo; said <a href=\"https://pen.org/user/suzanne-nossel/\" target=\"_blank\">Suzanne Nossel</a>, CEO of PEN America, a nonprofit organization that works to defend and celebrate the free expression of writers across the globe. &ldquo;It&rsquo;s about protecting the right to engage. That&rsquo;s what makes deliberation and democracy possible.&rdquo;</p>\r\n\r\n<p>Nossel was <a href=\"https://www.youtube.com/watch?v=jEDUGb_xkYQ\" target=\"_blank\">speaking</a> at the recent <a href=\"https://alltechishuman.org/responsible-tech-summit-may-20th-in-nyc-improving-digital-spaces\" target=\"_blank\">Responsible Tech Summit: Improving Digital Spaces</a> event organized by All Tech Is Human, the nonprofit I run that is dedicated to improving the responsible tech ecosystem.</p>', 'outside sity, near beach', '1250$', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659782830\\\\1659782830_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659782830\\\\1659782830_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659782830\\\\1659782830_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659782830\",\"currentImage\":\"medium\"}', '0', 2000, 0, 0, 1500, 0, 'iran', 0, 'farm', 1, 11, 0, 0, 2, NULL, '2022-08-06 06:17:12', '2022-08-06 06:17:12'),
(4, 'modern house', '<p>Instead, it simply transfers the power to make complex decisions about free speech from the public domain to a mercurial billionaire. That&rsquo;s not progress; it&rsquo;s a dystopian future. Society becomes trapped in a &ldquo;benevolent dictatorship&rdquo; where we have to hope that he makes the right decision. No single person should ever have that much power in a healthy democracy.</p>\r\n\r\n<p>But for Musk to recognize Twitter&rsquo;s public role eliminates his very authority to privately govern it. In other words, public squares are governed publicly, not privately. To imagine ceding that authority to one person should send shivers down your spine.</p>', 'beverley hills, us', '500000000', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659783144\\\\1659783144_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659783144\\\\1659783144_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659783144\\\\1659783144_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659783144\",\"currentImage\":\"medium\"}', '24', 2010, 1, 1, 1500, 24, 'both', 1, 'big,smart', 1, 5, 1, 1, 1, NULL, '2022-08-06 06:22:26', '2022-08-06 06:22:26'),
(5, 'homebuid', '<p>like to say that there&rsquo;s no magic button for fixing the problems facing social media platforms. The current state of social media is a Gordian Knot, an impossibly difficult, tangled web of complexity that humbles the countless thought leaders and organizations who offer solutions.</p>\r\n\r\n<p>To reduce hate speech on platforms is to surrender a substantial amount of power to those platforms in determining appropriateness. To tackle misinformation on social media turns companies with limited transparency and public accountability into arbiters of truth.</p>', 'veach-near  kanzas city', '450000$', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784047\\\\1659784047_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784047\\\\1659784047_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784047\\\\1659784047_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784047\",\"currentImage\":\"medium\"}', '4', 1999, 0, 0, 100, 2, 'europe', 0, 'small', 1, 6, 0, 0, 0, NULL, '2022-08-06 06:37:29', '2022-08-06 06:37:29'),
(6, 'shalk', '<p>Given that the general public often relates to platforms in a quasi-governmental fashion, platforms will increasingly move in that direction. What hasn&rsquo;t happened yet, however, is the creation of more reliable ways to ensure transparency. Right now, we tend to rely on platforms to develop their own advisory councils and provide reporting; in the coming years, this will likely be government-appointed officials and boards that are interwoven with tech companies to be social media ombudspersons.</p>\r\n\r\n<p>For any platform that evolves into a de facto public square, the public has to be involved in its oversight. Anything less is anti-democratic.</p>', 'in jungle-new york', '2000$', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784218\\\\1659784218_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784218\\\\1659784218_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784218\\\\1659784218_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784218\",\"currentImage\":\"medium\"}', 'wooden', 1874, 0, 0, 200, 1, 'iran', 0, 'shalk,small', 1, 6, 0, 0, 1, NULL, '2022-08-06 06:40:20', '2022-08-06 06:40:20'),
(7, 'empire state', '<p>We separate our branches of government in the U.S. into a group that makes laws (legislative), one that enforces them (executive), and one that interprets them (judicial). Social media platforms will need a similarly clear separation between departments that develop terms of service and community guidelines, enforce those rules, and interpret them when issues arise. This is exactly why the <a href=\"https://oversightboard.com/\" target=\"_blank\">Oversight Board</a> was originally dubbed Facebook&rsquo;s <a href=\"https://www.cjr.org/the_media_today/facebook-supreme-court.php\" target=\"_blank\">Supreme Court</a> &mdash; it has a similar structure and goal.</p>', 'new york, manhatan', '100000000000$', '{\"indexArray\":{\"large\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784386\\\\1659784386_large.jpg\",\"medium\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784386\\\\1659784386_medium.jpg\",\"small\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784386\\\\1659784386_small.jpg\"},\"directory\":\"images\\\\ads\\\\2022\\\\08\\\\06\\\\1659784386\",\"currentImage\":\"medium\"}', 'ceramic', 1938, 1, 1, 5000, 251, 'both', 1, 'big', 1, 5, 0, 0, 1, NULL, '2022-08-06 06:43:10', '2022-08-06 06:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'news', NULL, '2022-08-05 07:56:02', '2022-08-05 07:56:02'),
(2, 'economic', 1, '2022-08-05 07:56:41', '2022-08-05 07:56:41'),
(3, 'political', 1, '2022-08-05 10:28:57', '2022-08-05 10:28:57'),
(4, 'advertise', NULL, '2022-08-05 10:29:35', '2022-08-05 10:29:35'),
(5, 'big-house', 4, '2022-08-05 10:30:06', '2022-08-06 02:52:14'),
(6, 'small-house', 4, '2022-08-05 10:30:36', '2022-08-06 02:52:48'),
(7, 'sport', 1, '2022-08-05 10:37:58', '2022-08-05 10:37:58'),
(8, 'movie', 1, '2022-08-05 10:38:38', '2022-08-05 10:38:38'),
(9, 'Arts', 1, '2022-08-05 15:12:57', '2022-08-05 15:12:57'),
(10, 'vila', 4, '2022-08-06 06:09:57', '2022-08-06 06:09:57'),
(11, 'farm', 4, '2022-08-06 06:10:21', '2022-08-06 06:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `approved` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `parent_id`, `status`, `approved`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'very interesting', NULL, 0, 1, '2022-08-05 11:50:43', '2022-08-05 11:51:10'),
(2, 1, 3, 'thanks , yo love it', 1, 0, 1, '2022-08-05 11:51:46', '2022-08-05 11:53:10'),
(3, 1, 3, 'very funny', 1, 0, 1, '2022-08-05 11:52:11', '2022-08-05 11:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertise_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `advertise_id`, `created_at`, `updated_at`) VALUES
(4, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782278\\\\1659782278_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782278\\\\1659782278_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782278\\\\1659782278_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782278\",\"currentImage\":\"medium\"}', 2, '2022-08-06 06:08:00', '2022-08-06 06:08:00'),
(5, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782299\\\\1659782299_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782299\\\\1659782299_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782299\\\\1659782299_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782299\",\"currentImage\":\"medium\"}', 2, '2022-08-06 06:08:22', '2022-08-06 06:08:22'),
(6, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782954\\\\1659782954_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782954\\\\1659782954_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782954\\\\1659782954_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782954\",\"currentImage\":\"medium\"}', 3, '2022-08-06 06:19:17', '2022-08-06 06:19:17'),
(7, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782973\\\\1659782973_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782973\\\\1659782973_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782973\\\\1659782973_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659782973\",\"currentImage\":\"medium\"}', 3, '2022-08-06 06:19:35', '2022-08-06 06:19:35'),
(8, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783871\\\\1659783871_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783871\\\\1659783871_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783871\\\\1659783871_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783871\",\"currentImage\":\"medium\"}', 4, '2022-08-06 06:34:33', '2022-08-06 06:34:33'),
(9, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783897\\\\1659783897_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783897\\\\1659783897_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783897\\\\1659783897_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783897\",\"currentImage\":\"medium\"}', 4, '2022-08-06 06:34:59', '2022-08-06 06:34:59'),
(10, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783918\\\\1659783918_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783918\\\\1659783918_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783918\\\\1659783918_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659783918\",\"currentImage\":\"medium\"}', 4, '2022-08-06 06:35:20', '2022-08-06 06:35:20'),
(11, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784081\\\\1659784081_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784081\\\\1659784081_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784081\\\\1659784081_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784081\",\"currentImage\":\"medium\"}', 5, '2022-08-06 06:38:03', '2022-08-06 06:38:03'),
(12, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784421\\\\1659784421_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784421\\\\1659784421_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784421\\\\1659784421_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784421\",\"currentImage\":\"medium\"}', 7, '2022-08-06 06:43:43', '2022-08-06 06:43:43'),
(13, '{\"indexArray\":{\"large\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784459\\\\1659784459_large.jpg\",\"medium\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784459\\\\1659784459_medium.jpg\",\"small\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784459\\\\1659784459_small.jpg\"},\"directory\":\"images\\\\gallery\\\\2022\\\\08\\\\06\\\\1659784459\",\"currentImage\":\"medium\"}', 7, '2022-08-06 06:44:21', '2022-08-06 06:44:21');

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
(5, '2021_08_05_095009_creat_categories_table', 1),
(6, '2022_06_18_052033_create_permission_tables', 1),
(7, '2022_08_05_085815_creat_ads_table', 1),
(8, '2022_08_05_100449_creat_posts_table', 1),
(9, '2022_08_05_100558_creat_comments_table', 1),
(10, '2022_08_05_101718_creat_galleries_table', 1),
(11, '2022_08_05_102019_creat_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit', 'web', '2022-08-05 10:15:09', '2022-08-05 10:15:09'),
(2, 'delete', 'web', '2022-08-05 10:15:42', '2022-08-05 10:15:42'),
(3, 'create', 'web', '2022-08-05 10:16:13', '2022-08-05 10:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `cat_id`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'barber-shop-template', '<p>&nbsp;</p>\r\n\r\n<div><span style=\"color:#d4d4d4\">Lorem ipsum dolor sit amet consectetur adipisicing elit</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#d4d4d4\"> </span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">Inventore dolore pariatur officia officiis! Quis saepe</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">explicabo quaerat</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#d4d4d4\"> Voluptatem id praesentium perferendis </span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">et sapiente repellat tempora a minima possimus doloribus</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">deserunt molestiae accusamus enim esse, odit quae fugit </span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">tempore at ad veritatis itaque mollitia unde error laboriosam</span><span style=\"color:#d4d4d4\">.</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">Ab delectus est tempora, nesciunt excepturi magnam veritatis</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">ex esse molestiae iusto nemo aliquid saepe, adipisci offici</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">, eaque voluptatum! Vitae soluta nesciunt quia quam corporis</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">nisi dicta obcaecati porro repudiandae reiciendis, pariatur</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">rerum eligendi, nihil autem quis? Et, debitis placeat possim</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">us reiciendis hic nesciunt quia perspiciatis odit iure eveni</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">et laudantium tempora sequi voluptatem provident?</span></div>\r\n\r\n<p>&nbsp;</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659708708\\\\1659708708_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659708708\\\\1659708708_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659708708\\\\1659708708_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659708708\",\"currentImage\":\"medium\"}', 1, 2, NULL, '2022-08-01 19:30:00', '2022-08-05 09:41:53', '2022-08-05 09:41:53'),
(2, 'omid died on eating much', '<p>A team of scientists recently conducted an exciting quantum physics experiment allowing them to demonstrate that reality might actually be real.</p>\r\n\r\n<p>Well, don&rsquo;t everybody applaud all at once. It&rsquo;s actually an amazing feat of science.</p>\r\n\r\n<p>Let&rsquo;s start with a simple question. How do you demonstrate that reality is real? You can pinch yourself. But that only demonstrates that you&rsquo;re capable of perceiving pain.</p>\r\n\r\n<p>Fictional characters can experience pain, so that doesn&rsquo;t give us anything to go on.</p>\r\n\r\n<p>In fact, as I wrote in <a href=\"https://hello.thenextweb.com/punching-a-hole-in-the-universe-and-sticking-your-middle-finger-through-it\">a recent Neural newsletter</a>, we can&rsquo;t be 100% sure we don&rsquo;t live in a doppelganger universe or a simulation. And, because of that, there&rsquo;s no way for us to be certain that we&rsquo;re not fictional characters ourselves.</p>\r\n\r\n<p>However, for the sake of argument, let&rsquo;s just assume we are real and that our universe actually exists. If that&rsquo;s true, we should be able to demonstrate &mdash; in some way, no matter how strange &mdash; that our reality is, in fact, objective.</p>\r\n\r\n<p>The problem is that reality isn&rsquo;t so simple as our ability to perceive it. What you or I experience as objective reality can differ significantly.</p>\r\n\r\n<h2>Doing science</h2>\r\n\r\n<p>In order to truly determine whether there&rsquo;s an objective reality, we have to devise a way in which to demonstrate its existence without relying on our observations.</p>\r\n\r\n<p>We&rsquo;ve already established that our senses are meaningless here. What we need are measurements.</p>\r\n\r\n<p>And that&rsquo;s exactly what the aforementioned team of scientists, who were led by Brazilian physicist Pedro Dieguez, set out to do when they conducted the experiment that, one day, could be referred to as a keystone in our quest to define and demonstrate objective physical realism.</p>\r\n\r\n<p>According to the team&rsquo;s <a href=\"https://www.nature.com/articles/s42005-022-00828-z#Sec5\" rel=\"nofollow noopener\" target=\"_blank\">research paper</a>:</p>\r\n\r\n<blockquote>\r\n<p>We show that, in disparity with previous proposals, our setup ensures a formal link between the output visibility and elements of reality within the interferometer.</p>\r\n\r\n<p>An experimental proof-of-principle is provided for a two-spin-1/2 system in an interferometric setup implemented in a nuclear magnetic resonance platform.</p>\r\n\r\n<p>We discuss how our results validate, to a great extent, Bohr&rsquo;s original formulation of the complementarity principle and unveil morphing reality states.</p>\r\n</blockquote>\r\n\r\n<h2>I&rsquo;m sorry, what?</h2>\r\n\r\n<p>Okay, let&rsquo;s back up a bit and have some fun figuring out what all that means.</p>\r\n\r\n<p>Measuring reality is a tricky endeavor. We can&rsquo;t step outside of reality to grab a snapshot of what ground-truth looks like. We&rsquo;re essentially like fish in a sealed aquarium trying to figure out what&rsquo;s beyond the confines of our perception.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659711863\\\\1659711863_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659711863\\\\1659711863_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659711863\\\\1659711863_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659711863\",\"currentImage\":\"medium\"}', 1, 2, NULL, '2022-08-09 19:30:00', '2022-08-05 10:34:28', '2022-08-05 11:44:07'),
(3, 'ukraine, killed 2 heli from', '<p>A team of scientists recently conducted an exciting quantum physics experiment allowing them to demonstrate that reality might actually be real.</p>\r\n\r\n<p>Well, don&rsquo;t everybody applaud all at once. It&rsquo;s actually an amazing feat of science.</p>\r\n\r\n<p>Let&rsquo;s start with a simple question. How do you demonstrate that reality is real? You can pinch yourself. But that only demonstrates that you&rsquo;re capable of perceiving pain.</p>\r\n\r\n<p>Fictional characters can experience pain, so that doesn&rsquo;t give us anything to go on.</p>\r\n\r\n<p>In fact, as I wrote in <a href=\"https://hello.thenextweb.com/punching-a-hole-in-the-universe-and-sticking-your-middle-finger-through-it\">a recent Neural newsletter</a>, we can&rsquo;t be 100% sure we don&rsquo;t live in a doppelganger universe or a simulation. And, because of that, there&rsquo;s no way for us to be certain that we&rsquo;re not fictional characters ourselves.</p>\r\n\r\n<p>However, for the sake of argument, let&rsquo;s just assume we are real and that our universe actually exists. If that&rsquo;s true, we should be able to demonstrate &mdash; in some way, no matter how strange &mdash; that our reality is, in fact, objective.</p>\r\n\r\n<p>The problem is that reality isn&rsquo;t so simple as our ability to perceive it. What you or I experience as objective reality can differ significantly.</p>\r\n\r\n<h2>Doing science</h2>\r\n\r\n<p>In order to truly determine whether there&rsquo;s an objective reality, we have to devise a way in which to demonstrate its existence without relying on our observations.</p>\r\n\r\n<p>We&rsquo;ve already established that our senses are meaningless here. What we need are measurements.</p>\r\n\r\n<p>And that&rsquo;s exactly what the aforementioned team of scientists, who were led by Brazilian physicist Pedro Dieguez, set out to do when they conducted the experiment that, one day, could be referred to as a keystone in our quest to define and demonstrate objective physical realism.</p>\r\n\r\n<p>According to the team&rsquo;s <a href=\"https://www.nature.com/articles/s42005-022-00828-z#Sec5\" rel=\"nofollow noopener\" target=\"_blank\">research paper</a>:</p>\r\n\r\n<blockquote>\r\n<p>We show that, in disparity with previous proposals, our setup ensures a formal link between the output visibility and elements of reality within the interferometer.</p>\r\n\r\n<p>An experimental proof-of-principle is provided for a two-spin-1/2 system in an interferometric setup implemented in a nuclear magnetic resonance platform.</p>\r\n\r\n<p>We discuss how our results validate, to a great extent, Bohr&rsquo;s original formulation of the complementarity principle and unveil morphing reality states.</p>\r\n</blockquote>\r\n\r\n<h2>I&rsquo;m sorry, what?</h2>\r\n\r\n<p>Okay, let&rsquo;s back up a bit and have some fun figuring out what all that means.</p>\r\n\r\n<p>Measuring reality is a tricky endeavor. We can&rsquo;t step outside of reality to grab a snapshot of what ground-truth looks like. We&rsquo;re essentially like fish in a sealed aquarium trying to figure out what&rsquo;s beyond the confines of our perception.</p>\r\n\r\n<p>That&rsquo;s where quantum mechanics and Nobel laureate <a href=\"https://en.wikipedia.org/wiki/Niels_Bohr\" rel=\"nofollow noopener\" target=\"_blank\">Niels Bohr</a> come in.</p>\r\n\r\n<p>We can imagine our universe as encompassing every physical object in existence, including us.</p>\r\n\r\n<p>Quantum physics tells us that, if we zoom in on anything in our universe, we&rsquo;ll eventually unveil a complex world made up of tiny objects that interact in ways we can&rsquo;t observe in our everyday reality.</p>\r\n\r\n<p>But here&rsquo;s the thing: if we can sort out how objects act at very, very small scales, we should be able to sort out how the universe works at very, very massive scales.</p>\r\n\r\n<p>Bohr seemed to believe there wasn&rsquo;t as much difference between the two as Newtonian physics would lead us to believe.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712009\\\\1659712009_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712009\\\\1659712009_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712009\\\\1659712009_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712009\",\"currentImage\":\"medium\"}', 1, 3, NULL, '2022-08-11 19:30:00', '2022-08-05 10:36:51', '2022-08-05 11:49:58'),
(4, 'manchester defeat barcelona', '<p>A group of researchers at the <a href=\"https://www.firstpost.com/india/the-iit-madras-invention-that-could-put-an-end-to-manual-scavenging-in-india-10860341.html\" target=\"_blank\"><strong>Indian Institute of Technology, Madras</strong> </a>have developed an <a href=\"https://www.firstpost.com/tech/news-analysis/instagram-testing-age-verification-via-video-selfies-artificial-intelligence-and-social-vouching-10833081.html\" target=\"_blank\"><strong>Artificial Intelligence-based tool</strong> </a>that can predict cancer-causing genes in an individual. This paves the way for helping doctors better diagnose patients and to devise personalised treatment strategies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The tool, which has been named PIVOT, is designed to predict which cancer-causing genes are present in a given sample, based on a model that utilises information on mutations, expression of genes, and a number of variations in genes and perturbations in the biological network due to an altered gene expression.</p>\r\n\r\n<p>&ldquo;Cancer, being a complex disease, cannot be dealt with in a one-treatment-fits-all fashion. As cancer treatment increasingly shifts towards personalised medicine, such models that build toward pinpointing differences between patients can be very useful,&rdquo; said Dr Karthik Raman, Core Member, RBCDSAI, IIT Madras, in a statement.</p>\r\n\r\n<p>The tool, described in a peer-reviewed journal Frontier in Genetics, is based on a machine learning model that classifies genes as tumour suppressor genes, oncogenes or neutral genes.</p>\r\n\r\n<p>According to the World Health Organization, cancer is a leading cause of death worldwide and accounted for nearly one in six deaths in 2020. This figure stands true, despite the COVID-19 pandemic.</p>\r\n\r\n<p>Present cancer treatments- like chemotherapy or radiation therapy are known to be detrimental to the overall health of the patient. Knowledge of the genes responsible for the initiation and progression of cancer in patients can help determine the combination of drugs and therapy most suitable for a patient&rsquo;s recovery.</p>\r\n\r\n<p>The new tool was able to successfully predict both the existing oncogenes and tumour-suppressor genes like TP53, and PIK3CA, among others, and new cancer-related genes such as PRKCA, SOX9 and PSMD4.</p>\r\n\r\n<p>The researchers built <a href=\"https://www.firstpost.com/tech/science/artificial-intelligence-system-dall-e-creates-realistic-photos-and-paintings-10556431.html\" target=\"_blank\"><strong>AI prediction models</strong> </a>for three different types of cancer including breast invasive carcinoma, colon adenocarcinoma and lung adenocarcinoma.</p>\r\n\r\n<p>&ldquo;The research area of precision medicine is still at a nascent stage. PIVOT helps push these boundaries and presents prospects for experimental research based on the genes identified,&rdquo; said Malvika Sudhakar, Research Scholar, IIT Madras.</p>\r\n\r\n<p>The researchers built AI prediction models for three different types of cancer including breast invasive carcinoma, colon adenocarcinoma and lung adenocarcinoma.</p>\r\n\r\n<p>&ldquo;The research area of precision medicine is still at a nascent stage. PIVOT helps push these boundaries and presents prospects for experimental research based on the genes identified,&rdquo; said Malvika Sudhakar, Research Scholar, IIT Madras.</p>\r\n\r\n<p>The team is planning to extend PIVOT further to many more cancer types. The team is also working on a list of personalised cancer-causing genes that can help in identifying the suitable drug for patients based on their cancer profile.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712299\\\\1659712299_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712299\\\\1659712299_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712299\\\\1659712299_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712299\",\"currentImage\":\"medium\"}', 1, 7, NULL, '2022-08-10 19:30:00', '2022-08-05 10:41:41', '2022-08-05 11:45:00'),
(5, 'tom cruise reach 1 million $', '<p>What if we could zoom out past our own myopic point of view and see the planet Earth and all of its inhabitants as one giant global intelligence?</p>\r\n\r\n<p>That&rsquo;s the question a trio of researchers recently tackled in <a href=\"https://www.cambridge.org/core/journals/international-journal-of-astrobiology/article/intelligence-as-a-planetary-scale-process/5077C784D7FAC55F96072F7A7772C5E5\" rel=\"nofollow noopener\" target=\"_blank\">a paper</a> titled &ldquo;Intelligence as a planetary scale process.&rdquo;</p>\r\n\r\n<p>AKA: the &ldquo;By your powers combined, I am Captain Planet&rdquo; theory, as we like to call it here at Neural.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This one&rsquo;s a bit of a doozy. The paper itself is intriguing, but my first instinct was to call it ironically boring and painfully optimistic.</p>\r\n\r\n<p>Here&rsquo;s a snippet from the abstract:</p>\r\n\r\n<blockquote>\r\n<p>We consider the ways in which the appearance of technological intelligence may represent a kind of planetary scale transition, and thus might be seen not as something which happens on a planet but to a planet, much as some models propose the origin of life itself was a planetary phenomenon.</p>\r\n</blockquote>\r\n\r\n<p>Anybody else getting &ldquo;<a href=\"https://en.wikipedia.org/wiki/Dune_(novel)\" rel=\"nofollow noopener\" target=\"_blank\">Dune</a>&rdquo; vibes?</p>\r\n\r\n<h2>Aliens</h2>\r\n\r\n<p>Oh you weren&rsquo;t expecting this to be about aliens? Neither were we. Thank goodness for PR.</p>\r\n\r\n<p><a href=\"https://phys.org/news/2022-02-planet-mind.html\" rel=\"nofollow noopener\" target=\"_blank\">A press release</a> from the University of Rochester implicates this research in the quest for extraterrestrial life:</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;We&rsquo;re saying the only technological civilizations we may ever see&mdash;the ones we should expect to see &mdash; are the ones that didn&rsquo;t kill themselves, meaning they must have reached the stage of a true planetary intelligence,&rdquo;[lead author Adam Frank] says. &ldquo;That&rsquo;s the power of this line of inquiry: It unites what we need to know to survive the climate crisis with what might happen on any planet where life and intelligence evolve.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Okay, so this is really about climate change. Basically, if we live long enough to solve climate change, we&rsquo;ll meet aliens?</p>\r\n\r\n<p>Kinda, yeah. The researchers seem to be positing that observations on how Earth&rsquo;s climate adjusts to technological advancements will give us great insight into what we should be looking for when we search for signs of advanced intelligence in the universe.</p>\r\n\r\n<h2>Climate change</h2>\r\n\r\n<p>The researchers describe a sort of evolutionary ebb and flow between the unfettered world before the advent of technology, the destruction of the climate by the use of technology, and the ultimate saving of the planet by&hellip; more technology.</p>\r\n\r\n<p>In their words:</p>\r\n\r\n<blockquote>\r\n<p>We believe the concept of planetary intelligence holds promise in providing a framework for understanding possible paths of long-term inhabited planetary evolution that is both broad and deep. Most important, it may ultimately help unite disparate perspectives into a single explanatory paradigm for the transitions in the Earth-system observed in the past, with what we are experiencing now and will experience in the future evolution of the Earth.</p>\r\n</blockquote>\r\n\r\n<p>In this view, it seems like humans are an infantile species who&rsquo;ll ultimately grow up to save the planet from the harm we&rsquo;ve caused. Climate change is our responsibility, but it&rsquo;s not our fault because we are the world and the world is us.</p>\r\n\r\n<p>It&rsquo;s nice to be off the hook, but we&rsquo;ve still got to figure out how to fix the problems. And that&rsquo;s where the researchers say we should <em>literally</em> start thinking globally.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712506\\\\1659712506_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712506\\\\1659712506_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712506\\\\1659712506_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659712506\",\"currentImage\":\"medium\"}', 1, 8, NULL, '2022-08-02 19:30:00', '2022-08-05 10:45:13', '2022-08-05 11:46:11'),
(6, 'god father new feature', '<p>What if we could zoom out past our own myopic point of view and see the planet Earth and all of its inhabitants as one giant global intelligence?</p>\r\n\r\n<p>That&rsquo;s the question a trio of researchers recently tackled in <a href=\"https://www.cambridge.org/core/journals/international-journal-of-astrobiology/article/intelligence-as-a-planetary-scale-process/5077C784D7FAC55F96072F7A7772C5E5\" rel=\"nofollow noopener\" target=\"_blank\">a paper</a> titled &ldquo;Intelligence as a planetary scale process.&rdquo;</p>\r\n\r\n<p>AKA: the &ldquo;By your powers combined, I am Captain Planet&rdquo; theory, as we like to call it here at Neural.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This one&rsquo;s a bit of a doozy. The paper itself is intriguing, but my first instinct was to call it ironically boring and painfully optimistic.</p>\r\n\r\n<p>Here&rsquo;s a snippet from the abstract:</p>\r\n\r\n<blockquote>\r\n<p>We consider the ways in which the appearance of technological intelligence may represent a kind of planetary scale transition, and thus might be seen not as something which happens on a planet but to a planet, much as some models propose the origin of life itself was a planetary phenomenon.</p>\r\n</blockquote>\r\n\r\n<p>Anybody else getting &ldquo;<a href=\"https://en.wikipedia.org/wiki/Dune_(novel)\" rel=\"nofollow noopener\" target=\"_blank\">Dune</a>&rdquo; vibes?</p>\r\n\r\n<h2>Aliens</h2>\r\n\r\n<p>Oh you weren&rsquo;t expecting this to be about aliens? Neither were we. Thank goodness for PR.</p>\r\n\r\n<p><a href=\"https://phys.org/news/2022-02-planet-mind.html\" rel=\"nofollow noopener\" target=\"_blank\">A press release</a> from the University of Rochester implicates this research in the quest for extraterrestrial life:</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;We&rsquo;re saying the only technological civilizations we may ever see&mdash;the ones we should expect to see &mdash; are the ones that didn&rsquo;t kill themselves, meaning they must have reached the stage of a true planetary intelligence,&rdquo;[lead author Adam Frank] says. &ldquo;That&rsquo;s the power of this line of inquiry: It unites what we need to know to survive the climate crisis with what might happen on any planet where life and intelligence evolve.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Okay, so this is really about climate change. Basically, if we live long enough to solve climate change, we&rsquo;ll meet aliens?</p>\r\n\r\n<p>Kinda, yeah. The researchers seem to be positing that observations on how Earth&rsquo;s climate adjusts to technological advancements will give us great insight into what we should be looking for when we search for signs of advanced intelligence in the universe.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659715600\\\\1659715600_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659715600\\\\1659715600_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659715600\\\\1659715600_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\05\\\\1659715600\",\"currentImage\":\"medium\"}', 1, 8, NULL, '2022-08-03 19:30:00', '2022-08-05 11:36:47', '2022-08-05 11:43:20'),
(7, 'bomb blast', '<h2>A 3-billion-year-old beach</h2>\r\n\r\n<p>When continents rise above the oceans they start to erode. Wind and rain break rocks down into grains of sand, which are transported downstream by rivers and accumulate along coastlines to form beaches.</p>\r\n\r\n<p>These processes, which we can observe in action during a trip to the beach today, have been operating for billions of years. By scouring the rock record for signs of ancient beach deposits, geologists can study episodes of continent formation that happened in the distant past.</p>\r\n\r\n<p>The Singhbhum craton, an ancient piece of continental crust that makes up the eastern parts of the Indian subcontinent, contains several formations of ancient sandstone. These layers were originally formed from sand deposited in beaches, estuaries and rivers, which was then buried and compressed into rock.</p>\r\n\r\n<p>We determined the age of these deposits by studying microscopic grains of a mineral called zircon, which is preserved within these sandstones. This mineral contains tiny amounts of uranium, which very slowly turns into lead via radioactive decay. This allows us to estimate the age of these zircon grains, using a technique called <a href=\"https://en.wikipedia.org/wiki/Uranium%E2%80%93lead_dating\" rel=\"nofollow\" target=\"_blank\">uranium-lead dating</a>, which is well suited to dating very old rocks.</p>\r\n\r\n<p>The zircon grains reveal that the Singhbhum sandstones were deposited around 3 billion years ago, making them some of the oldest beach deposits in the world. This also suggests a continental landmass had emerged in what is now India by at least 3 billion years ago.</p>\r\n\r\n<p>Interestingly, sedimentary rocks of roughly this age are also present in the oldest cratons of Australia (the Pilbara and Yilgarn cratons) and South Africa (the Kaapvaal Craton), suggesting multiple continental landmasses may have emerged around the globe at this time.</p>\r\n\r\n<h2>Rise above it</h2>\r\n\r\n<p>How did rocky continents manage to rise above the oceans? A unique feature of continents is their thick, buoyant crust, which allows them to float on top of Earth&rsquo;s mantle, just like a cork in water. Like icebergs, the top of continents with thick crust (typically more than 45km thick) sticks out above the water, whereas continental blocks with crusts thinner than about 40km remain submerged.</p>\r\n\r\n<p>So if the secret of the continents&rsquo; rise is due to their thickness, we need to understand how and why they began to grow thicker in the first place.</p>\r\n\r\n<p>Most ancient continents, including the Singhbhum Craton, are made of granites, which formed through the melting of pre-existing rocks at the base of the crust. In our research, we found the granites in the Singhbhum Craton formed at increasingly greater depths between about 3.5 billion and 3 billion years ago, implying the crust was becoming thicker during this time window.</p>\r\n\r\n<p>Because granites are one of the least dense types of rock, the ancient crust of the Singhbhum Craton would have become progressively more buoyant as it grew thicker. We calculate that by around 3 billion years ago, the continental crust of the Singhbhum Craton had grown to be about 50km thick, making it buoyant enough to begin rising above sea level.</p>\r\n\r\n<p>The rise of continents had a profound influence on the climate, atmosphere and oceans of the early Earth. And the erosion of these continents would have provided chemical nutrients to coastal environments in which early photosynthetic life was flourishing, leading to a <a href=\"https://www.sciencedirect.com/science/article/abs/pii/S0012821X16307117\" rel=\"nofollow\" target=\"_blank\">boom in oxygen production</a> and ultimately helping to create the <a href=\"https://www.pnas.org/content/118/33/e2107511118\" rel=\"nofollow\" target=\"_blank\">oxygen-rich atmosphere</a> in which we thrive today.</p>\r\n\r\n<p>Erosion of the early continents would have also helped in sequestering carbon dioxide from the atmosphere, leading to global cooling of the early Earth. Indeed, the earliest glacial deposits also happen to <a href=\"https://www.sciencedirect.com/science/article/pii/S0012825220303445#bb0765\" rel=\"nofollow\" target=\"_blank\">appear in the geological record</a> around 3 billion years ago, shortly after the first continents emerged from the oceans.<img alt=\"The Conversation\" src=\"https://counter.theconversation.com/content/171391/count.gif?distributor=republish-lightbox-basic\" style=\"border:none !important; box-shadow:none !important; height:1px; margin:0 !important; max-height:1px !important; max-width:1px !important; min-height:1px !important; min-width:1px !important; opacity:0 !important; outline:none !important; padding:0 !important; text-shadow:none !important; width:1px\" /></p>\r\n\r\n<p><em><a href=\"https://theconversation.com/profiles/priyadarshi-chowdhury-1275290\" rel=\"nofollow\" target=\"_blank\">Priyadarshi Chowdhury</a>, Postdoctoral research fellow, Monash University; <a href=\"https://theconversation.com/profiles/jack-mulder-1272289\" rel=\"nofollow\" target=\"_blank\">Jack Mulder</a>, Research Associate, The University of Queensland; <a href=\"https://theconversation.com/profiles/oliver-nebel-1183401\" rel=\"nofollow\" target=\"_blank\">Oliver Nebel</a>, Associate Professor, Monash University, and <a href=\"https://theconversation.com/profiles/peter-cawood-986219\" rel=\"nofollow\" target=\"_blank\">Peter Cawood</a>, Professor and ARC Laureate Fellow, Monash Universit</em></p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659765973\\\\1659765973_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659765973\\\\1659765973_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659765973\\\\1659765973_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659765973\",\"currentImage\":\"medium\"}', 1, 3, NULL, '2022-08-09 19:30:00', '2022-08-06 01:36:14', '2022-08-06 01:36:14'),
(8, 'teniss player won reward', '<h2>Why every developer should have a side project</h2>\r\n\r\n<p>Apart from being something that helps you stand out and shows your interests and skills, starting a side project has many other benefits</p>\r\n\r\n<ol>\r\n	<li><strong>It keeps you from burning out:</strong> you can choose whatever you want to work on, whenever you feel like it, choosing whatever language, tool, or framework you want.</li>\r\n	<li><strong>It&rsquo;s challenging:</strong> if you feel like your job has become routine, you can choose how difficult to make your side project.</li>\r\n	<li><strong>It&rsquo;s a great networking tool:</strong> your side project can be a great way to interact with different communities and find people with similar interests.</li>\r\n	<li><strong>It&rsquo;s educational:</strong> in your job, you spend most of your time applying your existing skills to new problems. Side projects allow you to dip your toes in multiple related skills, which can come in handy later.</li>\r\n	<li><strong>It&rsquo;s free from constraints:</strong> you can choose your deadlines, what technologies you want to work with, which features to implement, and explore any topic that interests you. It&rsquo;s entirely up to you.</li>\r\n</ol>\r\n\r\n<h2><strong>How to find a great side project idea</strong></h2>\r\n\r\n<p>Starting a new side project can be quite overwhelming. How do you find a good idea to work on?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Reflect on your daily life</strong></h2>\r\n\r\n<p>One of the best ways to find an idea to work on is to reflect on your life and see what problems you face or what frustrations you repeatedly run into. Focusing on your own problems will also help you stay motivated while working on your side project, knowing you can make your own life a little easier.</p>\r\n\r\n<p>An example. As a freelance designer and front-end engineer, I would send screenshots to clients and coworkers multiple times per day. I wanted to send them nice-looking mockups but didn&rsquo;t want to spend time doing that multiple times per day.</p>\r\n\r\n<p>I solved my own problem by building a tool that turns screenshots into browser mockups automatically called <a href=\"https://www.screely.com/\" rel=\"nofollow noopener\" target=\"_blank\">Screely</a>. The first week I launched it, it already had <a href=\"https://www.freecodecamp.org/news/how-i-built-my-side-project-and-got-31-000-users-the-first-week-d9053bae5302/\" rel=\"nofollow noopener\" target=\"_blank\">over 31,000 users</a>, and it&rsquo;s been a fantastic lead-generation tool for my freelance business for the past three years.</p>\r\n\r\n<h2>Emerging trends</h2>\r\n\r\n<p>Technology moves fast, and some new technologies enable brand-new trends that turn into big businesses. New hardware or software also allows new industries and niches to be born overnight.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<div class=\"c-richText__pullQuoteGradient\">\r\n<p>Jumping on a new trend early makes it easier to get noticed.</p>\r\n</div>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For example, the pandemic made working from home and video calls the new normal. AirPods drove up user interest in audio like podcasts and audiobooks. 5G will enable a host of bandwidth-intensive applications on your phone.</p>\r\n\r\n<p>Another good example of this strategy happened last year when Apple released iOS 14. This update was the first time that iOS users could customize their home screen with widgets and custom icons. James (@Traf), a designer, saw an opportunity and created an icon pack for iOS; he generated over <a href=\"https://tr.af/6\" rel=\"nofollow noopener\" target=\"_blank\">100k in sales in just six days</a> after many media outlets, and prominent YouTubers like MKBHD talked about the ability to customize your home screen.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766051\\\\1659766051_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766051\\\\1659766051_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766051\\\\1659766051_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766051\",\"currentImage\":\"medium\"}', 1, 7, NULL, '2022-08-01 19:30:00', '2022-08-06 01:37:32', '2022-08-06 01:37:32'),
(9, 'van gogh art robbed', '<h2>Free expression doesn&rsquo;t mean the absence of moderation</h2>\r\n\r\n<p>&ldquo;<a href=\"https://www.law.ox.ac.uk/research-and-subject-groups/digitalisation-human-rights\" rel=\"nofollow noopener\" target=\"_blank\">Free expression</a>&rdquo; is a phrase getting <a href=\"https://www.washingtonpost.com/technology/2022/05/16/twitter-elon-musk-india/\" rel=\"nofollow noopener\" target=\"_blank\">tossed around a lot</a> today in relation to social media platforms, particularly regarding content moderation decisions. Unfortunately, the phrase tends to be misconstrued.</p>\r\n\r\n<p>&ldquo;Free speech isn&rsquo;t about saying whatever comes to mind,&rdquo; said <a href=\"https://pen.org/user/suzanne-nossel/\" rel=\"nofollow noopener\" target=\"_blank\">Suzanne Nossel</a>, CEO of PEN America, a nonprofit organization that works to defend and celebrate the free expression of writers across the globe. &ldquo;It&rsquo;s about protecting the right to engage. That&rsquo;s what makes deliberation and democracy possible.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nossel was <a href=\"https://www.youtube.com/watch?v=jEDUGb_xkYQ\" rel=\"nofollow noopener\" target=\"_blank\">speaking</a> at the recent <a href=\"https://alltechishuman.org/responsible-tech-summit-may-20th-in-nyc-improving-digital-spaces\" rel=\"nofollow noopener\" target=\"_blank\">Responsible Tech Summit: Improving Digital Spaces</a> event organized by All Tech Is Human, the nonprofit I run that is dedicated to improving the responsible tech ecosystem.</p>\r\n\r\n<p>Elon Musk&rsquo;s <a href=\"https://www.socialmediatoday.com/news/musk-discusses-his-views-on-content-moderation-as-twitter-deal-inches-close/623524/\" rel=\"nofollow noopener\" target=\"_blank\">entire argument</a> about Twitter is based on a flawed premise: He seems to believe that reducing the number of content moderation decisions and guidelines promotes free speech. It doesn&rsquo;t.</p>\r\n\r\n<p>Instead, it simply transfers the power to make complex decisions about free speech from the public domain to a mercurial billionaire. That&rsquo;s not progress; it&rsquo;s a dystopian future. Society becomes trapped in a &ldquo;benevolent dictatorship&rdquo; where we have to hope that he makes the right decision. No single person should ever have that much power in a healthy democracy.</p>\r\n\r\n<p>Musk, whether he recognizes it or not, has set up a paradox of sorts in his approach to Twitter. &ldquo;Given that Twitter serves as the de facto public town square, failing to adhere to free speech principles fundamentally undermines democracy,&rdquo; <a href=\"https://twitter.com/elonmusk/status/1507777261654605828?lang=en\" rel=\"nofollow noopener\" target=\"_blank\">he tweeted</a> on March 26.</p>\r\n\r\n<p>But for Musk to recognize Twitter&rsquo;s public role eliminates his very authority to privately govern it. In other words, public squares are governed publicly, not privately. To imagine ceding that authority to one person should send shivers down your spine.</p>\r\n\r\n<p>If Twitter is truly the de facto public square, that should necessitate far greater governmental involvement to ensure fairness, accountability and transparency. You know, the stuff we have in a functioning democracy.</p>\r\n\r\n<p>Twitter&rsquo;s growth into a &ldquo;de facto public town square,&rdquo; I would argue, should necessitate its radically reimagining its business structure, transforming into a nonprofit or benefit corporation, which is a legal structure that includes the overall benefit to society as an objective of the business, not just maximizing profits.</p>\r\n\r\n<p>If the platform immensely affects the public &mdash; as both <a href=\"https://www.cnbc.com/video/2018/09/05/jack-dorsey-twitter-users-consider-it-a-public-square.html\" rel=\"nofollow noopener\" target=\"_blank\">Jack Dorsey</a> and Elon Musk argue it does &mdash; its business model should serve the public interest and not shareholders or the ego of a company leader.</p>\r\n\r\n<h2>Where do we go from here?</h2>\r\n\r\n<p>I like to say that there&rsquo;s no magic button for fixing the problems facing social media platforms. The current state of social media is a Gordian Knot, an impossibly difficult, tangled web of complexity that humbles the countless thought leaders and organizations who offer solutions.</p>\r\n\r\n<p>To reduce hate speech on platforms is to surrender a substantial amount of power to those platforms in determining appropriateness. To tackle misinformation on social media turns companies with limited transparency and public accountability into arbiters of truth.</p>\r\n\r\n<p>It isn&rsquo;t that social media companies are making the wrong decisions, but rather that there are no right decisions to be made. Making determinations regarding speech means diving headfirst into a messy world of tradeoffs. The public allows the government to make these difficult decisions because we exercise power through the political process. That isn&rsquo;t the case with social media platforms, however.</p>\r\n\r\n<p>In my opinion, the only way to undo this Gordian Knot is that social media must tie together the roles of government and platforms more closely. In order to untangle, we may need to become more tangled.</p>\r\n\r\n<p>What would this look like? Well, in the near term, it would mean that platforms continue building out the trappings of democratic structures to adjudicate issues of fairness and accountability and exercise oversight.</p>\r\n\r\n<p>We separate our branches of government in the U.S. into a group that makes laws (legislative), one that enforces them (executive), and one that interprets them (judicial). Social media platforms will need a similarly clear separation between departments that develop terms of service and community guidelines, enforce those rules, and interpret them when issues arise. This is exactly why the <a href=\"https://oversightboard.com/\" rel=\"nofollow noopener\" target=\"_blank\">Oversight Board</a> was originally dubbed Facebook&rsquo;s <a href=\"https://www.cjr.org/the_media_today/facebook-supreme-court.php\" rel=\"nofollow noopener\" target=\"_blank\">Supreme Court</a> &mdash; it has a similar structure and goal.</p>\r\n\r\n<p>Given that the general public often relates to platforms in a quasi-governmental fashion, platforms will increasingly move in that direction. What hasn&rsquo;t happened yet, however, is the creation of more reliable ways to ensure transparency. Right now, we tend to rely on platforms to develop their own advisory councils and provide reporting; in the coming years, this will likely be government-appointed officials and boards that are interwoven with tech companies to be social media ombudspersons.</p>', '{\"indexArray\":{\"large\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766126\\\\1659766126_large.jpg\",\"medium\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766126\\\\1659766126_medium.jpg\",\"small\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766126\\\\1659766126_small.jpg\"},\"directory\":\"images\\\\post\\\\2022\\\\08\\\\06\\\\1659766126\",\"currentImage\":\"medium\"}', 1, 9, NULL, '2022-08-24 19:30:00', '2022-08-06 01:38:48', '2022-08-06 01:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'web', '2022-08-05 10:11:39', '2022-08-05 10:11:39'),
(2, 'auditor', 'web', '2022-08-05 10:12:21', '2022-08-05 10:12:21'),
(3, 'Super Admin', 'web', '2022-08-05 10:19:12', '2022-08-05 10:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `address`, `amount`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'banner1', 'https://www.webbuildprof.com', 'beverley hills blv, 2th st', 123000, '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque dicta exercitationem provident. Voluptate pariatur officia dolorem corrupti neque quod tenetur dicta fugit hic, illo, in quos vel quia adipisci culpa voluptatum, sit ducimus doloribus? Iste, eaque eius, explicabo, sit exercitationem laudantium voluptatum quod repellendus quasi officiis reprehenderit incidunt? Corporis enim voluptate incidunt impedit porro corrupti blanditiis</p>', '{\"indexArray\":{\"large\":\"images\\\\slide\\\\2022\\\\08\\\\05\\\\1659710340\\\\1659710340_large.jpg\",\"medium\":\"images\\\\slide\\\\2022\\\\08\\\\05\\\\1659710340\\\\1659710340_medium.jpg\",\"small\":\"images\\\\slide\\\\2022\\\\08\\\\05\\\\1659710340\\\\1659710340_small.jpg\"},\"directory\":\"images\\\\slide\\\\2022\\\\08\\\\05\\\\1659710340\",\"currentImage\":\"medium\"}', '2022-08-05 10:09:09', '2022-08-05 10:09:09'),
(2, 'house2', 'https://www.webbuildprof.com', 'beverley hills-london', 700000, 'The idea behind using Sphere for Wikipedia is a straightforward one: the online encyclopedia has 6.5 million entries and is on average seeing some 17,000 articles added each month. The wiki concept behind that means effectively that adding and editing content is crowdsourced, and while there is a team of editors tasked with overseeing that, it’s a daunting task that grows by the day, not just because of that size but because of its mandate, considering how many people, educators and others rely on it as a repository of record.', '{\"indexArray\":{\"large\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786751\\\\1659786751_large.jpg\",\"medium\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786751\\\\1659786751_medium.jpg\",\"small\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786751\\\\1659786751_small.jpg\"},\"directory\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786751\",\"currentImage\":\"medium\"}', '2022-08-06 07:22:33', '2022-08-06 07:22:33'),
(3, 'house3', 'https://www.webbuildprof.com', 'lona park, manchester city', 5000000, 'It’s also not clear whether this deal makes Wikipedia a paying customer of Meta’s, or vice versa — say, Meta becoming an enterprise customer in order to have more access to the data to work on Sphere. Meta does note that to train the Sphere model, it created “a new data set (WAFER) of 4 million Wikipedia citations, significantly more intricate than ever used for this sort of research.” We have asked and will update this post as we know more.', '{\"indexArray\":{\"large\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786857\\\\1659786857_large.jpg\",\"medium\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786857\\\\1659786857_medium.jpg\",\"small\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786857\\\\1659786857_small.jpg\"},\"directory\":\"images\\\\slide\\\\2022\\\\08\\\\06\\\\1659786857\",\"currentImage\":\"medium\"}', '2022-08-06 07:24:19', '2022-08-06 07:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci COMMENT 'avatar',
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 => inactive, 1 => active',
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token_expire` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `avatar`, `is_active`, `user_type`, `status`, `email_verified_at`, `verify_token`, `remember_token`, `remember_token_expire`, `created_at`, `updated_at`) VALUES
(1, 'alfred@gmail.com', '$2y$10$ISXerrmgb3qtNaFoAlAIOu1778K5InLiSKDQalVCAv8h3lYJp4gnC', 'alfred', 'badbakht', NULL, 1, 'admin', 0, NULL, NULL, NULL, NULL, '2022-08-05 07:54:10', '2022-08-05 10:27:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_user_id_foreign` (`user_id`),
  ADD KEY `ads_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_advertise_id_foreign` (`advertise_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_advertise_id_foreign` FOREIGN KEY (`advertise_id`) REFERENCES `ads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
