-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 07:27 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dictalive_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_shape` text COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1_page` text COLLATE utf8mb4_unicode_ci,
  `title2_page` text COLLATE utf8mb4_unicode_ci,
  `content_page` text COLLATE utf8mb4_unicode_ci,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_description` text COLLATE utf8mb4_unicode_ci,
  `image1_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_description` text COLLATE utf8mb4_unicode_ci,
  `small_title_portfolio` text COLLATE utf8mb4_unicode_ci,
  `title_portfolio` text COLLATE utf8mb4_unicode_ci,
  `text_portfolio` text COLLATE utf8mb4_unicode_ci,
  `image1_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title1` text COLLATE utf8mb4_unicode_ci,
  `portfolio_date1` text COLLATE utf8mb4_unicode_ci,
  `portfolio_title2` text COLLATE utf8mb4_unicode_ci,
  `portfolio_date2` text COLLATE utf8mb4_unicode_ci,
  `portfolio_title3` text COLLATE utf8mb4_unicode_ci,
  `portfolio_date3` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt1` text COLLATE utf8mb4_unicode_ci,
  `alt2` text COLLATE utf8mb4_unicode_ci,
  `alt3` text COLLATE utf8mb4_unicode_ci,
  `alt4` text COLLATE utf8mb4_unicode_ci,
  `alt1_desc` text COLLATE utf8mb4_unicode_ci,
  `alt2_desc` text COLLATE utf8mb4_unicode_ci,
  `alt3_desc` text COLLATE utf8mb4_unicode_ci,
  `alt_desc` text COLLATE utf8mb4_unicode_ci,
  `alt1_portfolio` text COLLATE utf8mb4_unicode_ci,
  `alt2_portfolio` text COLLATE utf8mb4_unicode_ci,
  `alt3_portfolio` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `shape`, `alt_shape`, `image1`, `image2`, `image3`, `image4`, `title1_page`, `title2_page`, `content_page`, `video`, `title_description`, `image1_description`, `image2_description`, `image3_description`, `image4_description`, `text_description`, `small_title_portfolio`, `title_portfolio`, `text_portfolio`, `image1_portfolio`, `image2_portfolio`, `image3_portfolio`, `portfolio_title1`, `portfolio_date1`, `portfolio_title2`, `portfolio_date2`, `portfolio_title3`, `portfolio_date3`, `color`, `alt1`, `alt2`, `alt3`, `alt4`, `alt1_desc`, `alt2_desc`, `alt3_desc`, `alt_desc`, `alt1_portfolio`, `alt2_portfolio`, `alt3_portfolio`, `created_at`, `updated_at`) VALUES
(1, '1696784950about-shape-circle.png', 'shape', '1696784816nous-connaitre-img1.jpg', '1696784816nous-connaitre-img2.jpg', '1696784816nous-connaitre-img3.jpg', '1696784816nous-connaitre-img4.jpg', 'CREATIVE', 'SOLUTION', '<p id=\"isPasted\">We take a similar approach to design commercial we do impactfully approches over the flowchart of user friendly wireframe.</p>', 'video.mp4', 'We want to bring business and the digital world together', '1696785085nous-connaitre-main1.jpg', '1696785085activities-2.jpg', '1696785085activities-3.jpg', NULL, '<p id=\"isPasted\">We believe that we&rsquo;ve managed to achieve what we set out to do. Today, we&rsquo;re proud to bring &nbsp;together people who share our passion for change. This is how Outcrowd began. We were just a bunch &nbsp;of talented Ukrainians united by a common vision: creating a synergy of business and the digital&nbsp; world. We were tired of stale design solutions. We felt strongly that design was more than pretty pictures: it was a powerful tool that could really transform business.</p>', 'OUR', 'Activities', '<p id=\"isPasted\">View the full case study of our recent featured and awesome works that we created for our clients.</p>', '1696785267nous-connaitre-main1.jpg', '1696785267nous-connaitre-main3.jpg', '1696785267activities-3.jpg', 'Lionpro Agency', '02 May 2021', 'Lionpro Agency', '02 May 2021', 'Lionpro Agency', '02 May 2021', '#e1f5fa', 'Portfolio Image', 'Portfolio Image 2', 'Portfolio Image', 'Portfolio Image 4', 'Image main', 'Image 2', 'image 3', NULL, 'Lionpro Agency', 'Portfolio Image 2', 'Portfolio Image 3', NULL, '2023-10-08 14:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_blog` text COLLATE utf8mb4_unicode_ci,
  `text_blog` text COLLATE utf8mb4_unicode_ci,
  `text_read_more` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_blog`, `text_blog`, `text_read_more`, `created_at`, `updated_at`) VALUES
(1, 'We always think', '<p id=\"isPasted\">Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs.&nbsp;</p>', 'Read more', NULL, '2023-10-08 14:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_box` text COLLATE utf8mb4_unicode_ci,
  `alt_image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `title`, `date`, `text`, `image`, `image_box`, `alt_image_box`, `alt_image`, `created_at`, `updated_at`) VALUES
(5, 'Notre PDG à Choose France', '15 March 2019', '<p>Notre PDG, Myriam Zarife a &eacute;t&eacute; invit&eacute;e &agrave; participer &agrave; la 5&egrave;me &eacute;dition de Choose France au ch&acirc;teau de Versailles. &nbsp;Choose France&quot; est une initiative lanc&eacute;e par le gouvernement fran&ccedil;ais et instaur&eacute;e par le pr&eacute;sident Emmanuel Macron pour promouvoir la France en tant que destination attractive pour les investissements &eacute;trangers. Elle a eu l&rsquo;honneur de rencontrer le Ministre des Solidarit&eacute;s, de l&#39;Autonomie et des Personnes Handicap&eacute;es et des chefs d&#39;entreprise venus du monde entier. Ces responsables sont sinc&egrave;rement d&eacute;di&eacute;s et engag&eacute;s &agrave; faire briller la France &agrave; l&#39;international, afin d&rsquo;&eacute;changer sur le futur des services de la e-sant&eacute;.</p>', '1696788795blog-1.jpg', '1696788795blog-1.jpg', 'Alt Image Thumbnail', 'Alt Image', NULL, '2023-10-08 15:16:15'),
(6, 'L\'équipe Dictalive aux Journées Francophones de Radiologie', '02 May 2019', '<p>Les Journ&eacute;es Francophones de Radiologie diagnostique et interventionnelle sont organis&eacute;es chaque ann&eacute;e au Palais des Congr&egrave;s &agrave; Paris. &nbsp;C&rsquo;est un congr&egrave;s annuel qui r&eacute;unit l&#39;ensemble des professionnels et entreprises li&eacute;s &agrave; la radiologie dans le but de promouvoir les derni&egrave;res avanc&eacute;es scientifiques et les innovations technologiques dans ce domaine, ainsi que de favoriser les &eacute;changes d&#39;exp&eacute;riences et de connaissances. Nous avons le plaisir de participer &agrave; cet &eacute;v&eacute;nement o&ugrave; chaque ann&eacute;e nous pr&eacute;sentons nos &nbsp;services et les nouveaut&eacute;s de l&rsquo;entreprise. Au plaisir de vous y (re)voir tr&egrave;s prochainement !!</p>', '1696788957blog-1.jpg', '1696788957blog-2.jpg', NULL, 'Alt Image', NULL, NULL),
(7, 'Dictalive à SantExpo', '02 May 2022', '<p>Chaque ann&eacute;e, notre &eacute;quipe participe au rendez-vous incontournable de la sant&eacute; en France : SantExpo, le salon annuel de la F&eacute;d&eacute;ration Hospitali&egrave;re de France. Cet &eacute;v&eacute;nement prestigieux se tient &agrave; Paris, &agrave; la Porte de Versailles, r&eacute;unissant tous les secteurs d&rsquo;activit&eacute; li&eacute;s au monde de la sant&eacute;. C&#39;est l&#39;occasion de pr&eacute;senter et d&eacute;couvrir les derni&egrave;res avanc&eacute;es en mati&egrave;re de soins, de services, de technologies m&eacute;dicales et de nouveaut&eacute;s en e-sant&eacute; Notre pr&eacute;sence &agrave; SantExpo est motiv&eacute;e par notre engagement &agrave; soutenir les professionnels de sant&eacute; &agrave; travers nos services de t&eacute;l&eacute;secr&eacute;tariat sp&eacute;cialis&eacute;s et d&eacute;di&eacute;s et nos services de e-sant&eacute;.</p>', '1696789046blog-1.jpg', '1696789046blog-3.jpg', NULL, 'Alt Image', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` text COLLATE utf8mb4_unicode_ci,
  `small_text` text COLLATE utf8mb4_unicode_ci,
  `title_contact` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `url_phone` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title_page`, `small_text`, `title_contact`, `phone`, `url_phone`, `email`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Let’s get in touch', 'Don\'t­ be­ afraid­ man­ !­ say­hello', 'Great! We\'re excited to hear from you and let\'s start something special togerter. call us for any inquery.', '+(2) 578 - 365 - 379', '+(2)578365379', 'hello@example.com', '230 Norman Street New York, QC (USA) H8R 1A1', NULL, '2023-10-08 13:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `dictasupports`
--

CREATE TABLE `dictasupports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_page` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_section1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_section1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dictasupports`
--

INSERT INTO `dictasupports` (`id`, `title_page`, `subtitle_page`, `image`, `title_section1`, `subtitle_section1`, `text_section1`, `image2`, `text_section2`, `title_section2`, `text_section3`, `title_section3`, `link`, `url`, `color`, `color2`, `color3`, `alt_image`, `created_at`, `updated_at`) VALUES
(1, 'why', 'choose us', '1696791775centre-de-frappe.jpg', 'why choose us', 'KEWORD,RESEARCH STRATEGY, SURVEY, & ANALYTICS', '<p>Your marketing strategy optimizing performances doesn&rsquo;t have to be a guessing game. Your marketing strategy optimizing performances doesn&rsquo;t have to be a guessing game.</p>', '1696791775centre-de-frappe.jpg', '<p>text</p>', 'text', 'Have you project in mind?', 'Let’s make something great together!', 'Calendly', 'https://calendly.com/dictalive', '#008aac', '#58595b', '#58595b', NULL, NULL, '2023-10-08 16:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Design should enrich our day', '<p><span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\" id=\"isPasted\">People know what an FAQ is, so make that your page title. Don&rsquo;t overcomplicate things by calling it &ldquo;Good to Know&rdquo; or &ldquo;More Info&rdquo;. Sometimes people put the frequently asked questions section on their Contact page, but you can create your own page and put it right in your website navigation menu or website footer so it&rsquo;s easy to find. Getting a straight, quick answer to your question is a relief. So keep answers to a short paragraph if you can, less than 100 words. Answer the entire question in the FAQ without linking away to another page</span></p>', NULL, NULL),
(2, 'Human centred design to challenges', '<p><span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\" id=\"isPasted\">People know what an FAQ is, so make that your page title. Don&rsquo;t overcomplicate things by calling it &ldquo;Good to Know&rdquo; or &ldquo;More Info&rdquo;. Sometimes people put the frequently asked questions section on their Contact page, but you can create your own page and put it right in your website navigation menu or website footer so it&rsquo;s easy to find. Getting a straight, quick answer to your question is a relief. So keep answers to a short paragraph if you can, less than 100 words. Answer the entire question in the FAQ without linking away to another page</span></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_pages`
--

CREATE TABLE `footer_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_pages`
--

INSERT INTO `footer_pages` (`id`, `title_page`, `subtitle_page`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Politique de Confidentalité', 'En date du 01/01/2020.', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\" id=\"isPasted\"><br>La pr&eacute;sente Politique de confidentialit&eacute; r&eacute;git la collecte et le traitement des donn&eacute;es &agrave; caract&egrave;re personnel (ci-apr&egrave;s les &laquo; Donn&eacute;es Personnelles &raquo;) des utilisateurs (ci-apr&egrave;s les &laquo; Utilisateurs &raquo;) sur le site internet de Dictalive&nbsp;<a href=\"https://dictalive.com/\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">(https://dictalive.com/)</a>, par la soci&eacute;t&eacute; Dictalive (ci-apr&egrave;s &laquo; Dictalive &raquo;) dont le si&egrave;ge est &agrave; St.Georges, Sarba, Jounieh, Liban.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Dictalive assure un haut niveau de protection des Donn&eacute;es Personnelles des Utilisateurs du site Dictalive conform&eacute;ment &agrave; la l&eacute;gislation et &agrave; la r&eacute;glementation applicable.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Dictalive s&rsquo;engage notamment &agrave; respecter la l&eacute;gislation et la r&eacute;glementation en vigueur en mati&egrave;re de protection des donn&eacute;es personnelles et plus particuli&egrave;rement le r&egrave;glement UE 2016/679 du Parlement europ&eacute;en et du Conseil du 27 avril 2016 relatif &agrave; la protection des personnes physiques &agrave; l&rsquo;&eacute;gard du traitement des donn&eacute;es &agrave; caract&egrave;re personnel (RGPD) et la loi Informatique et Libert&eacute;s et l&rsquo;ordonnance n&deg;2018-1125 du 12 d&eacute;cembre 2018 relative &agrave; la protection des donn&eacute;es personnelles portant modification de la loi 78-17 du 6 janvier 1978 relative &agrave; l&rsquo;informatique, aux fichiers et aux libert&eacute;s et diverses dispositions concernant la protection des donn&eacute;es &agrave; caract&egrave;re personnel.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Cette Politique de confidentialit&eacute; est applicable &agrave; raison de toute utilisation du site Dictalive et de ses diff&eacute;rents services et fonctionnalit&eacute;s.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">I. D&Eacute;FINITIONS</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Les Donn&eacute;es Personnelles sont les informations et donn&eacute;es permettant d&rsquo;identifier ou rendant identifiable une personne physique, et par exemple son nom, adresse email, num&eacute;ro de t&eacute;l&eacute;phone ou adresse IP.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Les Utilisateurs sont toutes les personnes utilisatrices du site et de tout ou partie des services propos&eacute;s par Dictalive par l&rsquo;interm&eacute;diaire de ce site.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">II. DICTALIVE RESPONSABLE DE TRAITEMENT</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Dictalive agit comme responsable de traitement, au sens de la r&eacute;glementation applicable, lorsqu&rsquo;il traite les donn&eacute;es personnelles des Utilisateurs dans le cadre de leur utilisation du site internet Dictalive, du formulaire de contact ou encore de l&rsquo;essai du service propos&eacute; par Dictalive.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Le portail de Dictalive est h&eacute;berg&eacute; par CLARANET dans des conditions conformes au RGPD.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">R&eacute;glement g&eacute;n&eacute;ral sur la protection des donn&eacute;es (RGPD) - Repr&eacute;sentant europ&eacute;en.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Conform&eacute;ment &agrave; l&#39;article 27 du r&egrave;glement g&eacute;n&eacute;ral sur la protection des donn&eacute;es (RGPD) , DICTALIVE a design&eacute; EDPO (Europeen Data Protection Office) comme son repr&eacute;sentant dans l&#39;UE. Vous pouvez contacter EDPO pour toute question relative au RGPD :<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- en utilisant le formulaire de demande en ligne d&#39;EDPO : <a href=\"https://edpo.com/gdpr-data-request/\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">https://edpo.com/gdpr-data-request/</a><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">- en &eacute;crivant &agrave; EDPO,&nbsp;<a href=\"https://www.google.com/maps/search/Rond-point+des+Champs+%C3%89lys%C3%A9es,+12%2F14,+75008+Paris,+France?entry=gmail&source=g\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">Rond-point des Champs &Eacute;lys&eacute;es, 12/14, 75008 Paris, France</a><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Vous trouverez ci-dessous le lien de notre certificat prouvant notre conformit&eacute; &agrave; l&#39;article 27 du code RGPD :<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><a href=\"https://edpo.com/art-27-compliance-certificate/\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">https://edpo.com/art-27-compliance-certificate/</a><br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Pour tout compl&eacute;ment d&#39;information concernant le traitement de Donn&eacute;es personnelles, la soci&eacute;t&eacute; Dictalive peut &ecirc;tre contact&eacute;e : par courrier adress&eacute; &agrave; Dictalive, Centre Saint Georges, Sarba, Jounieh, ou par mail &agrave; <a href=\"mailto:contact@dictalive.com\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">[contact@dictalive.com]</a>.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">III. DONN&Eacute;ES PERSONNELLES</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">La soci&eacute;t&eacute; Dictalive collecte et traite les Donn&eacute;es Personnelles suivantes des Utilisateurs en sa qualit&eacute; de responsable de traitement :</p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px; color: rgb(88, 89, 91); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Nom, pr&eacute;nom</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Num&eacute;ro de t&eacute;l&eacute;phone</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Adresse mail</li></ul><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Lorsque ces Donn&eacute;es Personnelles sont recueillies, la soci&eacute;t&eacute; Dictalive signale &agrave; l&rsquo;Utilisateur le caract&egrave;re obligatoire ou facultatif des Donn&eacute;es Personnelles demand&eacute;es, l&rsquo;utilisation envisag&eacute;e et les cons&eacute;quences d&rsquo;un d&eacute;faut de renseignement.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">IV. FINALIT&Eacute;S</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Les Donn&eacute;es Personnelles communiqu&eacute;es par l&rsquo;Utilisateur au site de la soci&eacute;t&eacute; Dictalive font l&rsquo;objet d&rsquo;un traitement informatique et sont conserv&eacute;es et utilis&eacute;es par cette soci&eacute;t&eacute; pour les seules finalit&eacute;s suivantes :</p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px; color: rgb(88, 89, 91); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Permettre l&rsquo;acc&egrave;s au site et son utilisation par l&rsquo;Utilisateur ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Permettre le partage, la consultation et l&rsquo;utilisation des donn&eacute;es fournies par l&rsquo;Utilisateur, y compris les Donn&eacute;es personnelles ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Am&eacute;liorer les diff&eacute;rents services propos&eacute;s par le site et fournir &agrave; l&rsquo;Utilisateur des informations pertinentes et &agrave; jour, r&eacute;pondre aux questions de l&rsquo;Utilisateur, proc&eacute;der &agrave; des statistiques sur la base d&rsquo;informations ou de donn&eacute;es et utiliser ces statistiques pour am&eacute;liorer le site et ses services ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Envoyer &agrave; l&rsquo;Utilisateur des notifications pour l&rsquo;informer d&rsquo;une &eacute;volution du site ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Adresser &agrave; l&rsquo;Utilisateur, avec son accord pr&eacute;alable expr&egrave;s, des messages de r&eacute;ponse &agrave; sa demande de contact ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Permettre l&rsquo;essai du service propos&eacute; par la soci&eacute;t&eacute; Dictalive et le recueil de Donn&eacute;es Personnelles n&eacute;cessaire au d&eacute;roulement de l&rsquo;essai du service ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Envoyer &agrave; l&rsquo;Utilisateur des notifications afin de v&eacute;rifier la s&eacute;curit&eacute; des acc&egrave;s au site et aux informations ou donn&eacute;es transmises &agrave; la requ&ecirc;te de l&rsquo;Utilisateur ou &agrave; son profit.</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Permettre l&rsquo;essai du service propos&eacute; par la soci&eacute;t&eacute; Dictalive et le recueil de Donn&eacute;es Personnelles n&eacute;cessaire au d&eacute;roulement de l&rsquo;essai du service.</li></ul><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Lorsque l&rsquo;Utilisateur se connecte et utilise le site de la soci&eacute;t&eacute; Dictalive, des donn&eacute;es de navigation sont susceptibles d&rsquo;&ecirc;tre collect&eacute;es et trait&eacute;es par la soci&eacute;t&eacute; Dictalive ou tout prestataire (tiers) de son choix &agrave; des fins statistiques afin d&rsquo;am&eacute;liorer l&rsquo;ergonomie du site et de mesurer le nombre de pages vues, le nombre de visites, ainsi que l&rsquo;activit&eacute; et le parcours de l&rsquo;Utilisateur sur le site.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">V. FONDEMENTS JURIDIQUES DES TRAITEMENTS</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Les traitements r&eacute;alis&eacute;s par la soci&eacute;t&eacute; Dictalive dans le cadre de son site, conform&eacute;ment aux finalit&eacute;s &eacute;nonc&eacute;es sont n&eacute;cessaires &agrave; la soci&eacute;t&eacute; pour lui permettre de :</p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px; color: rgb(88, 89, 91); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Satisfaire ses obligations vis-&agrave;-vis de ses Utilisateurs sur le fondement de leur consentement ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">Respecter les obligations contractuelles et l&eacute;gales qui lui incombent ;</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px;\">R&eacute;pondre &agrave; certains int&eacute;r&ecirc;ts l&eacute;gitimes relatifs notamment &agrave; son objet.</li></ul><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Dans tous les cas o&ugrave; le consentement de l&rsquo;Utilisateur est n&eacute;cessaire, le recueil de ce consentement est expr&egrave;s (case &agrave; cocher (opt-in)) et sp&eacute;cifique.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">VI. DROITS DE LA PERSONNE CONCERN&Eacute;E</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">L&rsquo;Utilisateur dispose d&rsquo;un droit d&rsquo;information, d&rsquo;acc&egrave;s, d&rsquo;opposition, de rectification, d&rsquo;effacement et de suppression de tout ou partie des Donn&eacute;es personnelles le concernant, et d&rsquo;un droit &agrave; la limitation du traitement et &agrave; la portabilit&eacute; des Donn&eacute;es personnelles.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">L&rsquo;Utilisateur peut, &agrave; tout moment, acc&eacute;der &agrave; son compte pour modifier ou supprimer les informations et donn&eacute;es le concernant.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Il peut exercer ses droits en &eacute;crivant &agrave; l&rsquo;adresse email&nbsp;<a href=\"mailto:contact@dictalive.com\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">contact@dictalive.com</a> ou &agrave; l&rsquo;adresse postale de Dictalive susmentionn&eacute;e.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Une demande par voie postale devra &ecirc;tre pr&eacute;sent&eacute;e par l&rsquo;Utilisateur personnellement et par &eacute;crit, sign&eacute;e et accompagn&eacute;e de la photocopie d&rsquo;un titre d&rsquo;identit&eacute; portant la signature de son titulaire. Ces informations ne seront communiqu&eacute;es qu&rsquo;&agrave; des fins d&rsquo;identification de l&rsquo;Utilisateur et ne seront pas conserv&eacute;es pour une dur&eacute;e exc&eacute;dant celle n&eacute;cessaire au traitement de la r&eacute;ponse. La demande pr&eacute;cisera l&rsquo;adresse email ou postale &agrave; laquelle devra parvenir l&rsquo;&eacute;ventuelle r&eacute;ponse.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">La soci&eacute;t&eacute; Dictalive disposera d&rsquo;un d&eacute;lai d&rsquo;un mois pour r&eacute;pondre suivant r&eacute;ception de la demande. Ce d&eacute;lai peut &ecirc;tre prolong&eacute; de deux mois en cas de complexit&eacute; ou du nombre &eacute;lev&eacute; de demandes.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">L&rsquo;Utilisateur est averti que l&rsquo;exercice de ses droits ne porte pas atteinte &agrave; la validit&eacute; des op&eacute;rations de traitement r&eacute;alis&eacute;es pr&eacute;alablement, ni au droit de la soci&eacute;t&eacute; Dictalive de proc&eacute;der &agrave; l&rsquo;archivage de certaines des Donn&eacute;es Personnelles en cause, conform&eacute;ment aux principes &eacute;nonc&eacute;s ci-avant.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">L&rsquo;Utilisateur dispose par ailleurs du droit de formuler une r&eacute;clamation aupr&egrave;s des autorit&eacute;s comp&eacute;tentes, et en particulier aupr&egrave;s de la CNIL <a href=\"http://localhost:8000/www.cnil.fr\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 138, 173); text-decoration: none; transition: all 0.3s ease 0s; position: relative; z-index: 1;\">(www.cnil.fr)</a>.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">VII. DUR&Eacute;E DE CONSERVATION DES DONN&Eacute;ES</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">La soci&eacute;t&eacute; Dictalive ne conservera les Donn&eacute;es Personnelles de l&rsquo;Utilisateur que pour une dur&eacute;e limit&eacute;e, d&eacute;termin&eacute;e en fonction de la nature des donn&eacute;es en cause, et du traitement concern&eacute;.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Les Donn&eacute;es Personnelles fournies par l&rsquo;Utilisateur dans le cadre de l&rsquo;utilisation du site sont conserv&eacute;es aussi longtemps que l&rsquo;Utilisateur est actif. Au-del&agrave;, les Donn&eacute;es Personnelles seront archiv&eacute;es pour une dur&eacute;e d&rsquo;un mois.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">VIII. SECURITE DES DONNEES PERSONNELLES</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">La soci&eacute;t&eacute; Dictalive s&rsquo;engage &agrave; prendre toutes les mesures techniques et organisationnelles pour assurer la protection, la s&eacute;curit&eacute; et la confidentialit&eacute; des Donn&eacute;es Personnelles de l&rsquo;Utilisateur, en particulier contre toute perte, alt&eacute;ration, diffusion ou usage ill&eacute;gal.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">En particulier, la soci&eacute;t&eacute; Dictalive s&rsquo;assure que de telles mesures sont mises en place sur l&rsquo;ensemble des op&eacute;rations r&eacute;alis&eacute;es dans le cadre de ses traitements, et notamment lors de la collecte des Donn&eacute;es Personnelles, de leur stockage et de leur h&eacute;bergement.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">A cet &eacute;gard, la soci&eacute;t&eacute; Dictalive s&rsquo;assure &eacute;galement que les tiers auxquels elle est susceptible de faire appel (prestataires techniques, fournisseurs&hellip;) respectent cette exigence de protection des Donn&eacute;es Personnelles de l&rsquo;Utilisateur par la mise en place de mesures appropri&eacute;es, conform&eacute;ment au RGPD. Les mesures techniques et organisationnelles mises en place peuvent inclure le recours &agrave; des formulaires d&rsquo;inscription s&eacute;curis&eacute;s, le cryptage et/ou l&rsquo;acc&egrave;s restreint aux Donn&eacute;es Personnelles.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">La soci&eacute;t&eacute; Dictalive invite l&rsquo;Utilisateur &agrave; la plus grande prudence dans la communication, par ses soins &agrave; des tiers, de ses Donn&eacute;es Personnelles mais &eacute;galement de ses identifiants et mots de passe personnels permettant l&rsquo;acc&egrave;s au site.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Certains messages ou sollicitations re&ccedil;us peuvent provenir de personnes mal intentionn&eacute;es cherchant &agrave; obtenir des informations personnelles concernant l&rsquo;Utilisateur en vue d&rsquo;une utilisation frauduleuse (pratique du phishing). Si l&rsquo;Utilisateur re&ccedil;oit un message qui para&icirc;t &ecirc;tre une tentative de phishing, il est invit&eacute; &agrave; ne pas y r&eacute;pondre et &agrave; ne pas ouvrir les pi&egrave;ces jointes, les images ou les liens contenus dans le message.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">IX. TRANSFERT DE DONN&Eacute;ES PERSONNELLES EN DEHORS DE L&rsquo;UNION EUROP&Eacute;ENNE</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">La soci&eacute;t&eacute; Dictalive proc&egrave;de le cas &eacute;ch&eacute;ant aux transferts de Donn&eacute;es Personnelles en dehors de l&rsquo;Union Europ&eacute;enne au titre du fonctionnement de son site et encadre ces transferts &agrave; travers des garanties appropri&eacute;es, conform&eacute;ment &agrave; la l&eacute;gislation et &agrave; la r&eacute;glementation applicable.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">X. MODIFICATION DE LA POLITIQUE DE CONFIDENTIALIT&Eacute;</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">La pr&eacute;sente Politique de confidentialit&eacute; peut &ecirc;tre modifi&eacute;e par la soci&eacute;t&eacute; Dictalive &agrave; tout moment.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">En cas de modification de la Politique de confidentialit&eacute;, la nouvelle version en vigueur sera applicable &agrave; l&rsquo;Utilisateur &agrave; compter de sa connexion au site. En cas de litige entre l&rsquo;Utilisateur et la soci&eacute;t&eacute; Dictalive au regard de traitements de Donn&eacute;es Personnelles au titre de l&rsquo;utilisation du site, la Politique de confidentialit&eacute; &agrave; prendre en compte sera celle en vigueur au moment des faits &agrave; l&rsquo;origine du litige.</p><h2 style=\"box-sizing: border-box; margin: 30px 0px 10px; padding: 0px; font-weight: bold; line-height: 1.4; color: black; font-size: 20px; position: relative; z-index: 1; font-family: Roboto, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">XI. DESTINATAIRES DES DONN&Eacute;ES PERSONNELLES</h2><p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-3); position: relative; z-index: 1; text-align: justify; font-family: Roboto, sans-serif; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\">Les Donn&eacute;es Personnelles des Utilisateurs sont destin&eacute;es &agrave; la soci&eacute;t&eacute; Dictalive ; elles pourront toutefois &ecirc;tre communiqu&eacute;es par cette derni&egrave;re &agrave; des tiers sous-traitants pour assurer l&rsquo;acc&egrave;s et l&rsquo;utilisation du site et de de toute autres applications tierces partenaires.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Les Donn&eacute;es Personnelles des Utilisateurs ne font pas l&rsquo;objet de communication ou de transfert &agrave; des tiers &agrave; des fins commerciales ou promotionnelles.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Dans certains cas, Dictalive peut &ecirc;tre susceptible de communiquer les Donn&eacute;es Personnelles de l&rsquo;Utilisateur &agrave; toute autorit&eacute; administrative ou judiciaire qui lui en ferait la demande, conform&eacute;ment &agrave; la l&eacute;gislation en vigueur.</p>', NULL, '2023-10-08 15:18:30'),
(2, 'Politique cookies', 'Quels cookies sont déposées sur notre site ?', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(88, 89, 91); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\" id=\"isPasted\"><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px; font-weight: 700 !important;\">N&eacute;cessaires</li></ul><p style=\"box-sizing: border-box; margin: 0px 0px 55px; padding: 0px 80px 0px 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-13); position: relative; z-index: 1; display: inline-block; text-align: justify;\">Ces cookies sont essentiels pour que vous puissiez naviguer sur le site web et utiliser ses fonctionnalit&eacute;s, comme l&#39;acc&egrave;s &agrave; des zones s&eacute;curis&eacute;es du site.</p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px; font-weight: 700 !important;\">Statistiques</li></ul><p style=\"box-sizing: border-box; margin: 0px 0px 55px; padding: 0px 80px 0px 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-13); position: relative; z-index: 1; display: inline-block; text-align: justify;\">Ces cookies nous permettent d&rsquo;analyser les statistiques relatives &agrave; votre interaction avec notre site internet et ce, de mani&egrave;re anonyme.</p><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 30px;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: initial; position: relative; z-index: 1; font-size: 18px; font-weight: 700 !important;\">Marketing</li></ul><p style=\"box-sizing: border-box; margin: 0px 0px 55px; padding: 0px 80px 0px 0px; font-style: normal; line-height: 1.4; font-weight: 400; font-size: 18px; color: var(--black-13); position: relative; z-index: 1; display: inline-block; text-align: justify;\">Ces cookies sont utilis&eacute;s afin d&rsquo;effectuer un suivi des visiteurs et de leur proposer des publicit&eacute;s pertinentes et adapt&eacute;es. Ils n&eacute;cessitent votre consentement pr&eacute;alable.</p></div><table style=\"box-sizing: border-box; margin: 20px 0px 0px; padding: 0px; caption-side: bottom; border-collapse: collapse; color: rgb(88, 89, 91); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; width: 1140px; border: 1px solid rgb(204, 204, 204); background-color: rgb(255, 255, 255);\"><thead style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px; background-color: rgb(242, 242, 242);\"><tr style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px;\"><th style=\"box-sizing: border-box; margin: 0px; padding: 8px; text-align: center; border: 1px solid rgb(204, 204, 204); font-weight: bold; background: rgba(0, 138, 173, 0.15);\">Nom du cookie</th><th style=\"box-sizing: border-box; margin: 0px; padding: 8px; text-align: center; border: 1px solid rgb(204, 204, 204); font-weight: bold; background: rgba(0, 138, 173, 0.15);\">Type de cookie</th><th style=\"box-sizing: border-box; margin: 0px; padding: 8px; text-align: center; border: 1px solid rgb(204, 204, 204); font-weight: bold; background: rgba(0, 138, 173, 0.15);\">Finalit&eacute;</th><th style=\"box-sizing: border-box; margin: 0px; padding: 8px; text-align: center; border: 1px solid rgb(204, 204, 204); font-weight: bold; background: rgba(0, 138, 173, 0.15);\">Fournisseur</th><th style=\"box-sizing: border-box; margin: 0px; padding: 8px; text-align: center; border: 1px solid rgb(204, 204, 204); font-weight: bold; background: rgba(0, 138, 173, 0.15);\">Expiration</th></tr></thead><tbody style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px;\"><tr style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px;\"><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">CONSENT</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">N&eacute;cessaires</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">D&eacute;tecter si le visiteur a accept&eacute; la cat&eacute;gorie marketing dans la banni&egrave;re de cookie. Ce cookie est n&eacute;cessaire pour la conformit&eacute; du site Web avec le RGPD.</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">Youtube.com</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">2 ans</td></tr><tr style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px; background-color: rgb(242, 242, 242);\"><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">CONSENT</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">N&eacute;cessaires</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">D&eacute;tecter si le visiteur a accept&eacute; la cat&eacute;gorie marketing dans la banni&egrave;re de cookie. Ce cookie est n&eacute;cessaire pour la conformit&eacute; du site Web avec le RGPD.</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">Youtube.com</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">2 ans</td></tr><tr style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-color: inherit; border-style: solid; border-width: 0px;\"><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">CONSENT</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">N&eacute;cessaires</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">D&eacute;tecter si le visiteur a accept&eacute; la cat&eacute;gorie marketing dans la banni&egrave;re de cookie. Ce cookie est n&eacute;cessaire pour la conformit&eacute; du site Web avec le RGPD.</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">Youtube.com</td><td style=\"box-sizing: border-box; margin: 0px; padding: 8px; border: 1px solid rgb(204, 204, 204); text-align: center;\">2 ans</td></tr></tbody></table>', NULL, '2023-10-08 15:19:47'),
(3, 'Mentions légales', 'Mentions légales', '<p>Content</p>', NULL, '2023-10-08 15:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` text COLLATE utf8mb4_unicode_ci,
  `subtitle_page` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1_service` text COLLATE utf8mb4_unicode_ci,
  `title2_service` text COLLATE utf8mb4_unicode_ci,
  `icon1_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon2_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon3_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon4_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon5_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_video` text COLLATE utf8mb4_unicode_ci,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section4` text COLLATE utf8mb4_unicode_ci,
  `content_section4` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `image1_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_blog` text COLLATE utf8mb4_unicode_ci,
  `subtitle_blog` text COLLATE utf8mb4_unicode_ci,
  `image_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_text` text COLLATE utf8mb4_unicode_ci,
  `alt_image` text COLLATE utf8mb4_unicode_ci,
  `alt_image1_section4` text COLLATE utf8mb4_unicode_ci,
  `alt_image2_section4` text COLLATE utf8mb4_unicode_ci,
  `alt_icon1` text COLLATE utf8mb4_unicode_ci,
  `alt_icon2` text COLLATE utf8mb4_unicode_ci,
  `alt_icon3` text COLLATE utf8mb4_unicode_ci,
  `alt_icon4` text COLLATE utf8mb4_unicode_ci,
  `alt_icon5` text COLLATE utf8mb4_unicode_ci,
  `alt_footer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `title_page`, `subtitle_page`, `text`, `image`, `title1_service`, `title2_service`, `icon1_service`, `icon2_service`, `icon3_service`, `icon4_service`, `icon5_service`, `title_video`, `video`, `title_section4`, `content_section4`, `link`, `image1_section4`, `image2_section4`, `color1`, `color2`, `title_blog`, `subtitle_blog`, `image_footer`, `url_text`, `alt_image`, `alt_image1_section4`, `alt_image2_section4`, `alt_icon1`, `alt_icon2`, `alt_icon3`, `alt_icon4`, `alt_icon5`, `alt_footer`, `created_at`, `updated_at`) VALUES
(1, 'Dicta', 'Live', '<p id=\"isPasted\">tatic and dynamic secure code review can prevent a day before your product is even released. We can integrate with your dev environment</p>', '1696789545dictalive-main-image.jpg', 'SERVICES DE TÉLÉSECRÉTARIAT MÉDICAL', 'NOS SERVICES DANS LA E-SANTÉ', '1696789545frappe.png', '1696789545call.png', '1696789545eva.png', '1696789545erep.png', '1696789545dictasuppor.png', 'Dictalive : Un Acteur De Référence Dans Le Secteur Du Secrétariat Médical À Distance', 'video.mp4', 'Dictalive : Un Acteur De Référence Dans Le Secteur Du Secrétariat Médical À Distance', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">Afin de garantir une qualit&eacute; de service satisfaisante et</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">continue, Dictalive est &agrave; l&rsquo;&eacute;coute de ses clients et</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">cherche &agrave; d&eacute;passer leurs attentes. Nous sommes</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">convaincus que la confiance est la clef d&#39;une relation</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">durable. C&#39;est pourquoi &agrave; Dictalive, nous cherchons</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">continuellement &agrave; d&eacute;velopper un climat qui favorise la</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">compr&eacute;hension, le respect des engagements et la</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">loyaut&eacute; tant envers nos clients, nos partenaires que</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">nos collaborateurs. Gr&acirc;ce &agrave; un personnel d&eacute;di&eacute; et</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">engag&eacute;, Dictalive s&#39;impr&egrave;gne de ses employ&eacute;s pour</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">v&eacute;hiculer l&rsquo;image d&#39;une soci&eacute;t&eacute; qui mise sur les</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 220px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">rapports humains.</div><p><br></p><div style=\"box-sizing: border-box; margin: 0px 0px 0px -25px; padding: 0px; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; position: relative; height: 220px; width: 220px; border-radius: 100%; translate: none; rotate: none; scale: none; transform: translate(0px, -70px); opacity: 0;\"><a href=\"http://dictalive.webneoodemo.com/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: var(--black-3); text-decoration: none; transition: all 0.3s ease 0s; position: absolute; z-index: 1; display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; width: 170px; height: 170px; font-weight: 400; font-size: 16px; line-height: 1.3; text-transform: capitalize; border: 1px solid var(--gray); border-radius: 100%; overflow: hidden;\"><span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: capitalize; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Explore Us</span><br></a></div>', '/nous-connaitre', '1696789716about-image.jpg', '1696789716about-image.jpg', NULL, NULL, 'Recent Blog', 'News insignt', '1696789716footer-img.jpg', 'Explore Us', 'Alt Image', 'Alt Image 1', 'Alt Image 2', 'alt icon1', 'alt icon2', 'alt icon3', 'alt icon4', 'alt icon5', 'logo footer', NULL, '2023-10-08 15:28:37');

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
(3, '2023_09_25_085627_create_contacts_table', 1),
(4, '2023_09_25_114630_create_abouts_table', 1),
(5, '2023_09_25_122653_create_settings_table', 1),
(6, '2023_09_26_054604_create_service_centres_table', 1),
(7, '2023_09_26_091408_create_reputations_table', 1),
(8, '2023_09_26_100253_create_dictasupports_table', 1),
(9, '2023_09_26_113602_create_blogs_table', 1),
(10, '2023_09_27_053838_create_blog_details_table', 1),
(11, '2023_09_27_075209_create_home_pages_table', 1),
(12, '2023_09_27_075435_create_slider_texts_table', 1),
(13, '2023_09_27_085111_create_seo_pages_table', 1),
(14, '2023_09_27_123917_create_faqs_table', 1),
(15, '2023_09_27_123955_create_footer_pages_table', 1),
(16, '2023_10_05_135717_create_title_pages_table', 1),
(17, '2023_10_08_143650_create_option_forms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `option_forms`
--

CREATE TABLE `option_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_forms`
--

INSERT INTO `option_forms` (`id`, `option`, `created_at`, `updated_at`) VALUES
(1, 'Centre de Frappe', NULL, NULL),
(2, 'Centre d\'Appels', NULL, NULL),
(3, 'Assistance médicale à distance', NULL, NULL),
(4, 'Gestion de votre', NULL, NULL),
(5, 'e-Réputation médicale', NULL, NULL);

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
-- Table structure for table `reputations`
--

CREATE TABLE `reputations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section1` text COLLATE utf8mb4_unicode_ci,
  `subtitle_section1` text COLLATE utf8mb4_unicode_ci,
  `image_section1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_section1` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section2` text COLLATE utf8mb4_unicode_ci,
  `subtitle_section2` text COLLATE utf8mb4_unicode_ci,
  `icon1_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon2_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon3_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon4_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon5_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li3_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li4_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li5_section2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1_section2` text COLLATE utf8mb4_unicode_ci,
  `subtitle1_section2` text COLLATE utf8mb4_unicode_ci,
  `percent1_section2` text COLLATE utf8mb4_unicode_ci,
  `title2_section2` text COLLATE utf8mb4_unicode_ci,
  `subtitle2_section2` text COLLATE utf8mb4_unicode_ci,
  `percent2_section2` text COLLATE utf8mb4_unicode_ci,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section3` text COLLATE utf8mb4_unicode_ci,
  `text_section3` text COLLATE utf8mb4_unicode_ci,
  `image_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section4` text COLLATE utf8mb4_unicode_ci,
  `text_section4` text COLLATE utf8mb4_unicode_ci,
  `image_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section5` text COLLATE utf8mb4_unicode_ci,
  `text_section5` text COLLATE utf8mb4_unicode_ci,
  `image_section5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section6` text COLLATE utf8mb4_unicode_ci,
  `text_section6` text COLLATE utf8mb4_unicode_ci,
  `image_section6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section7` text COLLATE utf8mb4_unicode_ci,
  `text_section7` text COLLATE utf8mb4_unicode_ci,
  `image_section7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section8` text COLLATE utf8mb4_unicode_ci,
  `text_section8` text COLLATE utf8mb4_unicode_ci,
  `image_section8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1_section8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li1_section8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li2_section8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_section9` text COLLATE utf8mb4_unicode_ci,
  `text_section9` text COLLATE utf8mb4_unicode_ci,
  `link_section9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_section9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image_s7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reputations`
--

INSERT INTO `reputations` (`id`, `title_page`, `subtitle_page`, `title_section1`, `subtitle_section1`, `image_section1`, `text_section1`, `color`, `color3`, `title_section2`, `subtitle_section2`, `icon1_section2`, `icon2_section2`, `icon3_section2`, `icon4_section2`, `icon5_section2`, `li1_section2`, `li2_section2`, `li3_section2`, `li4_section2`, `li5_section2`, `title1_section2`, `subtitle1_section2`, `percent1_section2`, `title2_section2`, `subtitle2_section2`, `percent2_section2`, `color2`, `title_section3`, `text_section3`, `image_section3`, `image1_section3`, `li1_section3`, `li2_section3`, `title_section4`, `text_section4`, `image_section4`, `image1_section4`, `li1_section4`, `li2_section4`, `title_section5`, `text_section5`, `image_section5`, `image1_section5`, `li1_section5`, `li2_section5`, `title_section6`, `text_section6`, `image_section6`, `image1_section6`, `li1_section6`, `li2_section6`, `title_section7`, `text_section7`, `image_section7`, `image1_section7`, `li1_section7`, `li2_section7`, `title_section8`, `text_section8`, `image_section8`, `image1_section8`, `li1_section8`, `li2_section8`, `title_section9`, `text_section9`, `link_section9`, `url_section9`, `alt_image_s1`, `alt_image_s3`, `alt_image_s4`, `alt_image_s5`, `alt_image_s6`, `alt_image_s7`, `created_at`, `updated_at`) VALUES
(1, 'why', 'choose us', 'WHY CHOOSE US', 'Keword,Research Strategy, Survey, & Analytics', '1696790891centre-de-frappe.jpg', '<p>Your marketing strategy optimizing performances doesn&rsquo;t have to be a guessing game. Your marketing strategy optimizing performances doesn&rsquo;t have to be a guessing game.</p>', '#008aac', '#088aac', 'WHY CHOOSE US', 'Keword,Research Strategy, Survey, & Analytic', '1696791009check-icon.svg', '1696791009check-icon.svg', '1696791009check-icon.svg', '1696791010check-icon.svg', '1696791010check-icon.svg', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'STRATEGY', 'Your marketing strategy optimizing performances doesn’t have to be a guessing game.', '60%', 'AUDIENCE', 'Your marketing strategy optimizing performances doesn’t have to be a guessing game.', '60%', '#58595b', 'Keword,Research Strategy', '<p>Keword,Research Strategy, Survey, &amp; Analytics Keword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; Analytics</p>', '1696791128centre-de-frappe.jpg', '1696791128centre-de-frappe.jpg', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy', '<p>Keword,Research Strategy, Survey, &amp; Analytics Keword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; Analytics</p>', '1696791318centre-de-frappe.jpg', '1696791318centre-de-frappe.jpg', 'Keword,Research Strategy', 'Keword,Research Strategy', 'Keword,Research Strategy, Survey, & Analytics', '<p>Keword,Research Strategy, Survey, &amp; Analytics Keword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; Analytics</p>', '1696791318centre-de-frappe.jpg', '1696791318centre-de-frappe.jpg', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy', '<p>Keword,Research Strategy, Survey, &amp; Analytics Keword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; Analytics</p>', '1696791318centre-de-frappe.jpg', '1696791318centre-de-frappe.jpg', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy', '<p>Keword,Research Strategy, Survey, &amp; Analytics Keword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; AnalyticsKeword,Research Strategy, Survey, &amp; Analytics</p>', '1696791318centre-de-frappe.jpg', '1696791318centre-de-frappe.jpg', 'Keword,Research Strategy, Survey, & Analytics', 'Keword,Research Strategy, Survey, & Analytics', 'Text', '<p>text</p>', NULL, NULL, NULL, NULL, 'Have you project in mind?', 'Let’s make something great together!', NULL, 'https://calendly.com/dictalive', 'Alt Image', 'Alt image', 'Alt image', 'Alt image', 'Alt image', 'Alt image', NULL, '2023-10-09 03:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `page`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'HomePage| meta title', '<p>meta description</p>', '<p>Home| meta keywords</p>', '1696783756activities-2.jpg', NULL, '2023-10-08 13:49:16'),
(2, 'Nous Connaitre', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696783785nous-connaitre-img1.jpg', NULL, '2023-10-08 13:49:45'),
(3, 'Centre De Frappe', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696783816nous-connaitre-img4.jpg', NULL, '2023-10-08 13:50:16'),
(4, 'Centre D\'appels', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696783839nous-connaitre-img3.jpg', NULL, '2023-10-08 13:50:39'),
(5, 'E-Va', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696783864activities-1.jpg', NULL, '2023-10-08 13:51:04'),
(6, 'E-Reputation', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696783890nous-connaitre-main1.jpg', NULL, '2023-10-08 13:51:30'),
(7, 'Dictasupport', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696792199activities-1.jpg', NULL, '2023-10-08 16:09:59'),
(8, 'Blog', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696792241activities-1.jpg', NULL, '2023-10-08 16:10:41'),
(9, 'Contact', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696792277about-image.jpg', NULL, '2023-10-08 16:11:17'),
(10, 'Footer Pages', 'meta titlr', '<p>meta description</p>', '<p>meta&nbsp; keywords</p>', '1696792311activities-1.jpg', NULL, '2023-10-08 16:11:51'),
(11, 'Blog Details', 'meta title', '<p>meta description</p>', '<p>meta keywords</p>', '1696792336about-image.jpg', NULL, '2023-10-08 16:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `service_centres`
--

CREATE TABLE `service_centres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_page` longtext COLLATE utf8mb4_unicode_ci,
  `title_section1` longtext COLLATE utf8mb4_unicode_ci,
  `text_section1` longtext COLLATE utf8mb4_unicode_ci,
  `url_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_centres`
--

INSERT INTO `service_centres` (`id`, `video`, `title_page`, `title_section1`, `text_section1`, `url_youtube`, `image`, `video1`, `alt_image`, `title_contact`, `text_href`, `href`, `created_at`, `updated_at`) VALUES
(1, 'video.mp4', 'Frappe de courriers médicaux à distance', 'We design and develop outstanding Digital Products and digital-first Brands.', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\" id=\"isPasted\">We help brands stand out through powerful, elegant</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">visual design. Our design philosophy is shaped&lt; by our</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">experience growing up at our father&rsquo;s bookbindery.</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">Surrounded by the highest-quality materials and</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">turn-of-the-century machines, we observed the art of</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">true craftsmanship firsthand.Powered by Froala Editor</div>', 'https://www.youtube.com/embed/hJiWSgG8hGM', '1696785749frappe-slider.jpg', 'video.mp4', 'Alt Image', 'Have a project in your mind?', 'Contact us', 'http://dictalive.webneoodemo.com/nous-connaitre#contact', NULL, '2023-10-08 14:25:43'),
(2, 'video.mp4', 'Frappe de courriers médicaux à distance', 'We design and develop outstanding Digital Products and digital-first Brands.', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\" id=\"isPasted\">We help brands stand out through powerful, elegant</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">visual design. Our design philosophy is shaped&lt; by our</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">experience growing up at our father&rsquo;s bookbindery.</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">Surrounded by the highest-quality materials and</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">turn-of-the-century machines, we observed the art of</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">true craftsmanship firsthand.Powered by Froala Editor</div>', 'https://www.youtube.com/embed/hJiWSgG8hGM', '1696786046call-center-slider.jpg', 'video.mp4', 'portfolio', 'Have a project in your mind?', 'Contact us', 'http://dictalive.webneoodemo.com/nous-connaitre#contact', NULL, '2023-10-08 14:28:13'),
(3, 'video.mp4', 'Frappe de courriers médicaux à distance', 'We design and develop outstanding Digital Products and digital-first Brands.', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\" id=\"isPasted\">We help brands stand out through powerful, elegant</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">visual design. Our design philosophy is shaped&lt; by our</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">experience growing up at our father&rsquo;s bookbindery.</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">Surrounded by the highest-quality materials and</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">turn-of-the-century machines, we observed the art of</div><div style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(153, 153, 153); font-family: Roboto, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: block; position: relative; translate: none; rotate: none; scale: none; transform-origin: 217.711px 12.5938px; transform: translate3d(0px, 0px, 0px); opacity: 1;\">true craftsmanship firsthand.Powered by Froala Editor</div>', 'https://www.youtube.com/embed/hJiWSgG8hGM', '1696786151e-va.jpg', NULL, 'portfolio', 'Have a project in your mind?', 'Contact us', 'http://dictalive.webneoodemo.com/nous-connaitre#contact', NULL, '2023-10-08 14:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `phone2` text COLLATE utf8mb4_unicode_ci,
  `fb` text COLLATE utf8mb4_unicode_ci,
  `insta` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `title_contact` text COLLATE utf8mb4_unicode_ci,
  `link_contact` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `tel1` text COLLATE utf8mb4_unicode_ci,
  `tel2` text COLLATE utf8mb4_unicode_ci,
  `alt_header` text COLLATE utf8mb4_unicode_ci,
  `alt_footer` text COLLATE utf8mb4_unicode_ci,
  `alt_email` text COLLATE utf8mb4_unicode_ci,
  `alt_phone` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_header`, `logo_footer`, `icon_email`, `icon_phone`, `description`, `address`, `email`, `phone`, `phone2`, `fb`, `insta`, `linkedin`, `title_contact`, `link_contact`, `url`, `tel1`, `tel2`, `alt_header`, `alt_footer`, `alt_email`, `alt_phone`, `created_at`, `updated_at`) VALUES
(1, '1696790438dictalive-logo.png', '1696790705dictalive-icon.png', '1696790438mail.png', '1696790438smartphone.png', 'Rejoignez-nous sur les réseaux sociaux pour découvrir notre univers', 'Valentin, Street Road 24, New York, USA - 67452', 'info@buildyexample.com', '+961 9 832 855/7', '+33 1 82 88 88 32', 'https://www.facebook.com/Dictalive/', 'https://www.instagram.com/dictalive/', 'https://www.linkedin.com/company/dictalive/', 'Have a project in your mind?', 'contact us', 'http://dictalive.webneoodemo.com/nous-connaitre#contact', '+9619832855', '+33182888832', 'logo header', 'logo footer', 'alt', 'alt phone', NULL, '2023-10-08 15:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `slider_texts`
--

CREATE TABLE `slider_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_texts`
--

INSERT INTO `slider_texts` (`id`, `slider1`, `slider2`, `slider3`, `slider4`, `slider5`, `slider6`, `slider7`, `slider8`, `slider9`, `slider10`, `slider11`, `slider12`, `slider13`, `slider14`, `slider15`, `slider16`, `slider17`, `slider18`, `color`, `color2`, `created_at`, `updated_at`) VALUES
(1, 'e-santé', 'comptes-rendus', 'rendez-vous', 'e-réputation', 'parcours patients', 'télésecrétariat', 'appels', 'frappe', 'relecture', 'Déterminé', 'Impliqué', 'Concentré', 'Travailleur', 'Accueillant', 'Loyal', 'Innovateur', 'Vaillant', 'Efficace', '#58595b', '#008aac', NULL, '2023-10-08 15:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `title_pages`
--

CREATE TABLE `title_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_pages`
--

INSERT INTO `title_pages` (`id`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'FAQ', 'Frequently asked question (FAQ) pages to find answars.', NULL, '2023-10-08 15:20:09'),
(2, 'Related Aricles', NULL, NULL, '2023-10-08 14:30:48');

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
(1, 'joudi', 'joudi@admin.com', NULL, '$2y$10$.Ll9RjALeyDvWGFy/7q.dOYDCxgm/Xd0D.BNoFjB.zCUSa5eDdW5i', NULL, '2023-10-08 13:24:32', '2023-10-08 13:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dictasupports`
--
ALTER TABLE `dictasupports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_pages`
--
ALTER TABLE `footer_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_forms`
--
ALTER TABLE `option_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reputations`
--
ALTER TABLE `reputations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_centres`
--
ALTER TABLE `service_centres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_texts`
--
ALTER TABLE `slider_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_pages`
--
ALTER TABLE `title_pages`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dictasupports`
--
ALTER TABLE `dictasupports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_pages`
--
ALTER TABLE `footer_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `option_forms`
--
ALTER TABLE `option_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reputations`
--
ALTER TABLE `reputations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_centres`
--
ALTER TABLE `service_centres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_texts`
--
ALTER TABLE `slider_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `title_pages`
--
ALTER TABLE `title_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
