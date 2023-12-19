-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2023 lúc 03:30 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phu-tung-oto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--


CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Bình Điện'),
(2, 'Đèn Oto'),
(3, 'Còi'),
(4, 'Mô Tơ Kính'),
(5, 'Đề-Ma-Rua'),
(6, 'Điamo'),
(7, 'Đèn Hông'),
(8, 'Gương Chiếu Hậu'),
(9, 'Than Đề Oto'),
(10, 'Than Điamo'),
(11, 'Cammera'),
(12, 'Đầu Androi'),
(13, 'Bendix Đề'),
(14, 'Ruột Đề'),
(15, 'Bale Đề'),
(16, 'Vỏ Đề-Ma-Rua'),
(17, 'Vỏ Điamo'),
(18, 'Đồ Bãi Nhật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `discount_amount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `usage_limit` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon_orders`
--

CREATE TABLE `coupon_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_features`
--

CREATE TABLE `image_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url_img` varchar(100) NOT NULL,
  `alt_img` varchar(100) DEFAULT NULL,
  `number` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_features`
--

INSERT INTO `image_features` (`id`, `product_id`, `post_id`, `url_img`, `alt_img`, `number`, `created_at`, `updated_at`) VALUES
(75, 20, NULL, 'uploads/products/ac-quy-gs-ln4-1.png', 'ac-quy-gs-ln4-1.png', 0, '2023-12-14 01:35:53', '2023-12-14 01:35:53'),
(76, 20, NULL, 'uploads/products/ac-quy-gs-ln4-2.png', 'ac-quy-gs-ln4-2.png', 1, '2023-12-14 01:35:53', '2023-12-14 01:35:53'),
(77, 20, NULL, 'uploads/products/ac-quy-gs-ln4-3.png', 'ac-quy-gs-ln4-3.png', 2, '2023-12-14 01:35:53', '2023-12-14 01:35:53'),
(78, 20, NULL, 'uploads/products/ac-quy-gs-ln4-4.png', 'ac-quy-gs-ln4-4.png', 3, '2023-12-14 01:35:53', '2023-12-14 01:35:53'),
(79, 21, NULL, 'uploads/products/ac-quy-gs-mf-1.png', 'ac-quy-gs-mf-1.png', 0, '2023-12-14 01:38:03', '2023-12-14 01:38:03'),
(80, 21, NULL, 'uploads/products/ac-quy-gs-mf-2.png', 'ac-quy-gs-mf-2.png', 1, '2023-12-14 01:38:03', '2023-12-14 01:38:03'),
(81, 21, NULL, 'uploads/products/ac-quy-gs-mf-3.png', 'ac-quy-gs-mf-3.png', 2, '2023-12-14 01:38:03', '2023-12-14 01:38:03'),
(82, 21, NULL, 'uploads/products/ac-quy-gs-mf-4.png', 'ac-quy-gs-mf-4.png', 3, '2023-12-14 01:38:03', '2023-12-14 01:38:03'),
(83, 22, NULL, 'uploads/products/gs-mf-44b19l-12V-1.png', 'gs-mf-44b19l-12V-1.png', 0, '2023-12-14 01:43:37', '2023-12-14 01:43:37'),
(84, 22, NULL, 'uploads/products/gs-mf-44b19l-12V-2.png', 'gs-mf-44b19l-12V-2.png', 1, '2023-12-14 01:43:37', '2023-12-14 01:43:37'),
(85, 22, NULL, 'uploads/products/gs-mf-44b19l-12V-3.png', 'gs-mf-44b19l-12V-3.png', 2, '2023-12-14 01:43:37', '2023-12-14 01:43:37'),
(86, 22, NULL, 'uploads/products/gs-mf-44b19l-12V-4.png', 'gs-mf-44b19l-12V-4.png', 3, '2023-12-14 01:43:37', '2023-12-14 01:43:37'),
(87, 23, NULL, 'uploads/products/gs-mf-din45-lbn-1.png', 'gs-mf-din45-lbn-1.png', 0, '2023-12-14 01:48:54', '2023-12-14 01:48:54'),
(88, 23, NULL, 'uploads/products/gs-mf-din45-lbn-2.png', 'gs-mf-din45-lbn-2.png', 1, '2023-12-14 01:48:54', '2023-12-14 01:48:54'),
(89, 23, NULL, 'uploads/products/gs-mf-din45-lbn-3.png', 'gs-mf-din45-lbn-3.png', 2, '2023-12-14 01:48:54', '2023-12-14 01:48:54'),
(90, 23, NULL, 'uploads/products/gs-mf-din45-lbn-4.png', 'gs-mf-din45-lbn-4.png', 3, '2023-12-14 01:48:54', '2023-12-14 01:48:54'),
(91, 24, NULL, 'uploads/products/dong-nai-31s-800 -12v-100ah-1.png', 'dong-nai-31s-800 -12v-100ah-1.png', 0, '2023-12-14 01:53:42', '2023-12-14 01:53:42'),
(92, 24, NULL, 'uploads/products/dong-nai-31s-800 -12v-100ah-2.png', 'dong-nai-31s-800 -12v-100ah-2.png', 1, '2023-12-14 01:53:42', '2023-12-14 01:53:42'),
(93, 24, NULL, 'uploads/products/dong-nai-31s-800 -12v-100ah-3.png', 'dong-nai-31s-800 -12v-100ah-3.png', 2, '2023-12-14 01:53:42', '2023-12-14 01:53:42'),
(94, 24, NULL, 'uploads/products/dong-nai-31s-800 -12v-100ah-4.png', 'dong-nai-31s-800 -12v-100ah-4.png', 3, '2023-12-14 01:53:42', '2023-12-14 01:53:42'),
(95, 25, NULL, 'uploads/products/CMF-80D26L-1.png', 'CMF-80D26L-1.png', 0, '2023-12-14 01:57:28', '2023-12-14 01:57:28'),
(96, 25, NULL, 'uploads/products/CMF-80D26L-2.png', 'CMF-80D26L-2.png', 1, '2023-12-14 01:57:28', '2023-12-14 01:57:28'),
(97, 25, NULL, 'uploads/products/CMF-80D26L-3.png', 'CMF-80D26L-3.png', 2, '2023-12-14 01:57:28', '2023-12-14 01:57:28'),
(98, 25, NULL, 'uploads/products/CMF-80D26L-4.png', 'CMF-80D26L-4.png', 3, '2023-12-14 01:57:28', '2023-12-14 01:57:28'),
(99, 26, NULL, 'uploads/products/dong-nai-extra-cmf-1.png', 'dong-nai-extra-cmf-1.png', 0, '2023-12-14 01:59:32', '2023-12-14 01:59:32'),
(100, 26, NULL, 'uploads/products/dong-nai-extra-cmf-2.png', 'dong-nai-extra-cmf-2.png', 1, '2023-12-14 01:59:32', '2023-12-14 01:59:32'),
(101, 26, NULL, 'uploads/products/dong-nai-extra-cmf-3.png', 'dong-nai-extra-cmf-3.png', 2, '2023-12-14 01:59:32', '2023-12-14 01:59:32'),
(102, 26, NULL, 'uploads/products/dong-nai-extra-cmf-4.png', 'dong-nai-extra-cmf-4.png', 3, '2023-12-14 01:59:32', '2023-12-14 01:59:32'),
(103, 27, NULL, 'uploads/products/varta-65b24l-1.png', 'varta-65b24l-1.png', 0, '2023-12-14 02:02:59', '2023-12-14 02:02:59'),
(104, 27, NULL, 'uploads/products/varta-65b24l-2.png', 'varta-65b24l-2.png', 1, '2023-12-14 02:02:59', '2023-12-14 02:02:59'),
(105, 27, NULL, 'uploads/products/varta-65b24l-3.png', 'varta-65b24l-3.png', 2, '2023-12-14 02:02:59', '2023-12-14 02:02:59'),
(106, 27, NULL, 'uploads/products/varta-65b24l-4.png', 'varta-65b24l-4.png', 3, '2023-12-14 02:02:59', '2023-12-14 02:02:59'),
(107, 28, NULL, 'uploads/products/varta-61038-din110-1.png', 'varta-61038-din110-1.png', 0, '2023-12-14 02:09:28', '2023-12-14 02:09:28'),
(108, 28, NULL, 'uploads/products/varta-61038-din110-2.png', 'varta-61038-din110-2.png', 1, '2023-12-14 02:09:28', '2023-12-14 02:09:28'),
(109, 28, NULL, 'uploads/products/varta-61038-din110-3.png', 'varta-61038-din110-3.png', 2, '2023-12-14 02:09:28', '2023-12-14 02:09:28'),
(110, 28, NULL, 'uploads/products/varta-61038-din110-4.png', 'varta-61038-din110-4.png', 3, '2023-12-14 02:09:28', '2023-12-14 02:09:28'),
(111, 29, NULL, 'uploads/products/varta-61038-din110-1.png', 'varta-61038-din110-1.png', 0, '2023-12-14 02:12:13', '2023-12-14 02:12:13'),
(112, 29, NULL, 'uploads/products/varta-61038-din110-2.png', 'varta-61038-din110-2.png', 1, '2023-12-14 02:12:13', '2023-12-14 02:12:13'),
(113, 29, NULL, 'uploads/products/varta-61038-din110-3.png', 'varta-61038-din110-3.png', 2, '2023-12-14 02:12:13', '2023-12-14 02:12:13'),
(114, 29, NULL, 'uploads/products/varta-61038-din110-4.png', 'varta-61038-din110-4.png', 3, '2023-12-14 02:12:13', '2023-12-14 02:12:13'),
(115, 30, NULL, 'uploads/products/ac-quy-rocket-efb-q85-12v-65ah-1.png', 'ac-quy-rocket-efb-q85-12v-65ah-1.png', 0, '2023-12-14 02:15:07', '2023-12-14 02:15:07'),
(116, 30, NULL, 'uploads/products/ac-quy-rocket-efb-q85-12v-65ah-2.png', 'ac-quy-rocket-efb-q85-12v-65ah-2.png', 1, '2023-12-14 02:15:07', '2023-12-14 02:15:07'),
(117, 30, NULL, 'uploads/products/ac-quy-rocket-efb-q85-12v-65ah-3.png', 'ac-quy-rocket-efb-q85-12v-65ah-3.png', 2, '2023-12-14 02:15:07', '2023-12-14 02:15:07'),
(118, 30, NULL, 'uploads/products/ac-quy-rocket-efb-q85-12v-65ah-4.png', 'ac-quy-rocket-efb-q85-12v-65ah-4.png', 3, '2023-12-14 02:15:07', '2023-12-14 02:15:07'),
(119, 31, NULL, 'uploads/products/rocket-smf-50d23l-12v-50ah-1.png', 'rocket-smf-50d23l-12v-50ah-1.png', 0, '2023-12-14 02:17:55', '2023-12-14 02:17:55'),
(120, 31, NULL, 'uploads/products/rocket-smf-50d23l-12v-50ah-2.png', 'rocket-smf-50d23l-12v-50ah-2.png', 1, '2023-12-14 02:17:55', '2023-12-14 02:17:55'),
(121, 31, NULL, 'uploads/products/rocket-smf-50d23l-12v-50ah-3.png', 'rocket-smf-50d23l-12v-50ah-3.png', 2, '2023-12-14 02:17:55', '2023-12-14 02:17:55'),
(122, 31, NULL, 'uploads/products/rocket-smf-50d23l-12v-50ah-4.png', 'rocket-smf-50d23l-12v-50ah-4.png', 3, '2023-12-14 02:17:55', '2023-12-14 02:17:55'),
(123, 32, NULL, 'uploads/products/rocket-agm-l6-din110-12v-105ah-1.png', 'rocket-agm-l6-din110-12v-105ah-1.png', 0, '2023-12-14 02:25:30', '2023-12-14 02:25:30'),
(124, 32, NULL, 'uploads/products/rocket-agm-l6-din110-12v-105ah-2.png', 'rocket-agm-l6-din110-12v-105ah-2.png', 1, '2023-12-14 02:25:30', '2023-12-14 02:25:30'),
(125, 32, NULL, 'uploads/products/rocket-agm-l6-din110-12v-105ah-3.png', 'rocket-agm-l6-din110-12v-105ah-3.png', 2, '2023-12-14 02:25:30', '2023-12-14 02:25:30'),
(126, 32, NULL, 'uploads/products/rocket-agm-l6-din110-12v-105ah-4.png', 'rocket-agm-l6-din110-12v-105ah-4.png', 3, '2023-12-14 02:25:30', '2023-12-14 02:25:30'),
(127, 33, NULL, 'uploads/products/42B20L-1.png', '42B20L-1.png', 0, '2023-12-14 02:31:57', '2023-12-14 02:31:57'),
(128, 33, NULL, 'uploads/products/42B20L-2.png', '42B20L-2.png', 1, '2023-12-14 02:31:57', '2023-12-14 02:31:57'),
(129, 34, NULL, 'uploads/products/ac-quy-atlas-90d23lf-1.png', 'ac-quy-atlas-90d23lf-1.png', 0, '2023-12-14 02:39:16', '2023-12-14 02:39:16'),
(130, 34, NULL, 'uploads/products/ac-quy-atlas-90d23lf-2.png', 'ac-quy-atlas-90d23lf-2.png', 1, '2023-12-14 02:39:16', '2023-12-14 02:39:16'),
(131, 34, NULL, 'uploads/products/ac-quy-atlas-90d23lf-3.png', 'ac-quy-atlas-90d23lf-3.png', 2, '2023-12-14 02:39:16', '2023-12-14 02:39:16'),
(132, 34, NULL, 'uploads/products/ac-quy-atlas-90d23lf-4.png', 'ac-quy-atlas-90d23lf-4.png', 3, '2023-12-14 02:39:16', '2023-12-14 02:39:16'),
(141, 37, NULL, 'uploads/products/acquy-globe-wp4-5-6-klb-1.png', 'acquy-globe-wp4-5-6-klb-1.png', 0, '2023-12-14 02:46:28', '2023-12-14 02:46:28'),
(142, 37, NULL, 'uploads/products/acquy-globe-wp4-5-6-klb-2.png', 'acquy-globe-wp4-5-6-klb-2.png', 1, '2023-12-14 02:46:28', '2023-12-14 02:46:28'),
(143, 38, NULL, 'uploads/products/varta-61038-din110-1.png', 'varta-61038-din110-1.png', 0, '2023-12-18 06:23:14', '2023-12-18 06:23:14'),
(144, 38, NULL, 'uploads/products/varta-61038-din110-2.png', 'varta-61038-din110-2.png', 1, '2023-12-18 06:23:14', '2023-12-18 06:23:14'),
(145, 38, NULL, 'uploads/products/varta-61038-din110-3.png', 'varta-61038-din110-3.png', 2, '2023-12-18 06:23:14', '2023-12-18 06:23:14'),
(146, 38, NULL, 'uploads/products/varta-61038-din110-4.png', 'varta-61038-din110-4.png', 3, '2023-12-18 06:23:14', '2023-12-18 06:23:14'),
(151, 40, NULL, 'uploads/products/varta-q85-115d23l-1.png', 'varta-q85-115d23l-1.png', 0, '2023-12-18 06:32:07', '2023-12-18 06:32:07'),
(152, 40, NULL, 'uploads/products/varta-q85-115d23l-2.png', 'varta-q85-115d23l-2.png', 1, '2023-12-18 06:32:07', '2023-12-18 06:32:07'),
(153, 40, NULL, 'uploads/products/varta-q85-115d23l-3.png', 'varta-q85-115d23l-3.png', 2, '2023-12-18 06:32:07', '2023-12-18 06:32:07'),
(154, 40, NULL, 'uploads/products/varta-q85-115d23l-4.png', 'varta-q85-115d23l-4.png', 3, '2023-12-18 06:32:07', '2023-12-18 06:32:07'),
(155, 41, NULL, 'uploads/products/varta-agm-ln5-12v-95ah-1.png', 'varta-agm-ln5-12v-95ah-1.png', 0, '2023-12-18 06:37:00', '2023-12-18 06:37:00'),
(156, 41, NULL, 'uploads/products/varta-agm-ln5-12v-95ah-2.png', 'varta-agm-ln5-12v-95ah-2.png', 1, '2023-12-18 06:37:00', '2023-12-18 06:37:00'),
(157, 41, NULL, 'uploads/products/varta-agm-ln5-12v-95ah-3.png', 'varta-agm-ln5-12v-95ah-3.png', 2, '2023-12-18 06:37:00', '2023-12-18 06:37:00'),
(158, 41, NULL, 'uploads/products/varta-agm-ln5-12v-95ah-4.png', 'varta-agm-ln5-12v-95ah-4.png', 3, '2023-12-18 06:37:00', '2023-12-18 06:37:00'),
(159, 42, NULL, 'uploads/products/varta-agm-ln3-12v-70ah-1.png', 'varta-agm-ln3-12v-70ah-1.png', 0, '2023-12-18 06:43:01', '2023-12-18 06:43:01'),
(160, 42, NULL, 'uploads/products/varta-agm-ln3-12v-70ah-2.png', 'varta-agm-ln3-12v-70ah-2.png', 1, '2023-12-18 06:43:01', '2023-12-18 06:43:01'),
(161, 42, NULL, 'uploads/products/varta-agm-ln3-12v-70ah-3.png', 'varta-agm-ln3-12v-70ah-3.png', 2, '2023-12-18 06:43:01', '2023-12-18 06:43:01'),
(162, 42, NULL, 'uploads/products/varta-agm-ln3-12v-70ah-4.png', 'varta-agm-ln3-12v-70ah-4.png', 3, '2023-12-18 06:43:01', '2023-12-18 06:43:01'),
(163, 43, NULL, 'uploads/products/varta-q85-115d23l-1.png', 'varta-q85-115d23l-1.png', 0, '2023-12-18 06:50:56', '2023-12-18 06:50:56'),
(164, 43, NULL, 'uploads/products/varta-q85-115d23l-2.png', 'varta-q85-115d23l-2.png', 1, '2023-12-18 06:50:56', '2023-12-18 06:50:56'),
(165, 43, NULL, 'uploads/products/varta-q85-115d23l-3.png', 'varta-q85-115d23l-3.png', 2, '2023-12-18 06:50:56', '2023-12-18 06:50:56'),
(166, 43, NULL, 'uploads/products/varta-q85-115d23l-4.png', 'varta-q85-115d23l-4.png', 3, '2023-12-18 06:50:56', '2023-12-18 06:50:56'),
(195, 44, NULL, 'uploads/products/ac-quy-atlas-12v-35ah-1.png', 'ac-quy-atlas-12v-35ah-1.png', 0, '2023-12-18 08:00:56', '2023-12-18 08:00:56'),
(196, 44, NULL, 'uploads/products/ac-quy-atlas-12v-35ah-2.png', 'ac-quy-atlas-12v-35ah-2.png', 1, '2023-12-18 08:00:56', '2023-12-18 08:00:56'),
(197, 44, NULL, 'uploads/products/ac-quy-atlas-12v-35ah-3.png', 'ac-quy-atlas-12v-35ah-3.png', 2, '2023-12-18 08:00:56', '2023-12-18 08:00:56'),
(198, 44, NULL, 'uploads/products/ac-quy-atlas-12v-35ah-4.png', 'ac-quy-atlas-12v-35ah-4.png', 3, '2023-12-18 08:00:56', '2023-12-18 08:00:56'),
(199, 45, NULL, 'uploads/products/ac-quy-atlas-60ah-76ae5f35-1.png', 'ac-quy-atlas-60ah-76ae5f35-1.png', 0, '2023-12-18 08:01:31', '2023-12-18 08:01:31'),
(200, 45, NULL, 'uploads/products/ac-quy-atlas-60ah-76ae5f35-2.png', 'ac-quy-atlas-60ah-76ae5f35-2.png', 1, '2023-12-18 08:01:31', '2023-12-18 08:01:31'),
(201, 45, NULL, 'uploads/products/ac-quy-atlas-60ah-76ae5f35-3.png', 'ac-quy-atlas-60ah-76ae5f35-3.png', 2, '2023-12-18 08:01:31', '2023-12-18 08:01:31'),
(202, 45, NULL, 'uploads/products/ac-quy-atlas-60ah-76ae5f35-4.png', 'ac-quy-atlas-60ah-76ae5f35-4.png', 3, '2023-12-18 08:01:31', '2023-12-18 08:01:31'),
(203, 48, NULL, 'uploads/products/atlas-mf-75d23fl-12v-65ah-1.png', 'atlas-mf-75d23fl-12v-65ah-1.png', 0, '2023-12-18 08:05:25', '2023-12-18 08:05:25'),
(204, 48, NULL, 'uploads/products/atlas-mf-75d23fl-12v-65ah-2.png', 'atlas-mf-75d23fl-12v-65ah-2.png', 1, '2023-12-18 08:05:25', '2023-12-18 08:05:25'),
(205, 48, NULL, 'uploads/products/atlas-mf-75d23fl-12v-65ah-3.png', 'atlas-mf-75d23fl-12v-65ah-3.png', 2, '2023-12-18 08:05:25', '2023-12-18 08:05:25'),
(206, 48, NULL, 'uploads/products/atlas-mf-75d23fl-12v-65ah-4.png', 'atlas-mf-75d23fl-12v-65ah-4.png', 3, '2023-12-18 08:05:25', '2023-12-18 08:05:25'),
(215, 51, NULL, 'uploads/products/dong-nai-extra-cmf-1.png', 'dong-nai-extra-cmf-1.png', 0, '2023-12-18 08:21:32', '2023-12-18 08:21:32'),
(216, 51, NULL, 'uploads/products/dong-nai-extra-cmf-2.png', 'dong-nai-extra-cmf-2.png', 1, '2023-12-18 08:21:32', '2023-12-18 08:21:32'),
(217, 51, NULL, 'uploads/products/dong-nai-extra-cmf-3.png', 'dong-nai-extra-cmf-3.png', 2, '2023-12-18 08:21:32', '2023-12-18 08:21:32'),
(218, 51, NULL, 'uploads/products/dong-nai-extra-cmf-4.png', 'dong-nai-extra-cmf-4.png', 3, '2023-12-18 08:21:32', '2023-12-18 08:21:32'),
(219, 50, NULL, 'uploads/products/dong-nai-hybird-n100-1.png', 'dong-nai-hybird-n100-1.png', 0, '2023-12-18 08:22:18', '2023-12-18 08:22:18'),
(220, 50, NULL, 'uploads/products/dong-nai-hybird-n100-2.png', 'dong-nai-hybird-n100-2.png', 1, '2023-12-18 08:22:18', '2023-12-18 08:22:18'),
(221, 50, NULL, 'uploads/products/dong-nai-hybird-n100-3.png', 'dong-nai-hybird-n100-3.png', 2, '2023-12-18 08:22:18', '2023-12-18 08:22:18'),
(222, 50, NULL, 'uploads/products/dong-nai-hybird-n100-4.png', 'dong-nai-hybird-n100-4.png', 3, '2023-12-18 08:22:18', '2023-12-18 08:22:18'),
(223, 49, NULL, 'uploads/products/ac-quy-atlas-mf95d31r-12v-80ah-1.png', 'ac-quy-atlas-mf95d31r-12v-80ah-1.png', 0, '2023-12-18 08:24:08', '2023-12-18 08:24:08'),
(224, 49, NULL, 'uploads/products/ac-quy-atlas-mf95d31r-12v-80ah-2.png', 'ac-quy-atlas-mf95d31r-12v-80ah-2.png', 1, '2023-12-18 08:24:08', '2023-12-18 08:24:08'),
(225, 49, NULL, 'uploads/products/ac-quy-atlas-mf95d31r-12v-80ah-3.png', 'ac-quy-atlas-mf95d31r-12v-80ah-3.png', 2, '2023-12-18 08:24:08', '2023-12-18 08:24:08'),
(226, 49, NULL, 'uploads/products/ac-quy-atlas-mf95d31r-12v-80ah-4.png', 'ac-quy-atlas-mf95d31r-12v-80ah-4.png', 3, '2023-12-18 08:24:08', '2023-12-18 08:24:08'),
(227, 52, NULL, 'uploads/products/gs-mf-85d26l-12v-75ah-1.png', 'gs-mf-85d26l-12v-75ah-1.png', 0, '2023-12-18 08:29:37', '2023-12-18 08:29:37'),
(228, 52, NULL, 'uploads/products/gs-mf-85d26l-12v-75ah-2.png', 'gs-mf-85d26l-12v-75ah-2.png', 1, '2023-12-18 08:29:37', '2023-12-18 08:29:37'),
(229, 52, NULL, 'uploads/products/gs-mf-85d26l-12v-75ah-3.png', 'gs-mf-85d26l-12v-75ah-3.png', 2, '2023-12-18 08:29:37', '2023-12-18 08:29:37'),
(230, 52, NULL, 'uploads/products/gs-mf-85d26l-12v-75ah-4.png', 'gs-mf-85d26l-12v-75ah-4.png', 3, '2023-12-18 08:29:37', '2023-12-18 08:29:37'),
(231, 53, NULL, 'uploads/products/acquy-rocket-efb-n55-12v-55ah-1.png', 'acquy-rocket-efb-n55-12v-55ah-1.png', 0, '2023-12-18 08:47:41', '2023-12-18 08:47:41'),
(232, 53, NULL, 'uploads/products/acquy-rocket-efb-n55-12v-55ah-2.png', 'acquy-rocket-efb-n55-12v-55ah-2.png', 1, '2023-12-18 08:47:41', '2023-12-18 08:47:41'),
(233, 53, NULL, 'uploads/products/acquy-rocket-efb-n55-12v-55ah-3.png', 'acquy-rocket-efb-n55-12v-55ah-3.png', 2, '2023-12-18 08:47:41', '2023-12-18 08:47:41'),
(234, 53, NULL, 'uploads/products/acquy-rocket-efb-n55-12v-55ah-4.png', 'acquy-rocket-efb-n55-12v-55ah-4.png', 3, '2023-12-18 08:47:41', '2023-12-18 08:47:41'),
(235, 54, NULL, 'uploads/products/rocket-smf-57113-din71-12v-71ah-1.png', 'rocket-smf-57113-din71-12v-71ah-1.png', 0, '2023-12-18 08:52:46', '2023-12-18 08:52:46'),
(236, 54, NULL, 'uploads/products/rocket-smf-57113-din71-12v-71ah-2.png', 'rocket-smf-57113-din71-12v-71ah-2.png', 1, '2023-12-18 08:52:46', '2023-12-18 08:52:46'),
(237, 54, NULL, 'uploads/products/rocket-smf-57113-din71-12v-71ah-3.png', 'rocket-smf-57113-din71-12v-71ah-3.png', 2, '2023-12-18 08:52:46', '2023-12-18 08:52:46'),
(238, 54, NULL, 'uploads/products/rocket-smf-57113-din71-12v-71ah-4.png', 'rocket-smf-57113-din71-12v-71ah-4.png', 3, '2023-12-18 08:52:47', '2023-12-18 08:52:47'),
(239, 55, NULL, 'uploads/products/ac-quy-delkor-55b24ls-12v-45ah-1.png', 'ac-quy-delkor-55b24ls-12v-45ah-1.png', 0, '2023-12-18 18:22:01', '2023-12-18 18:22:01'),
(240, 55, NULL, 'uploads/products/ac-quy-delkor-55b24ls-12v-45ah-2.png', 'ac-quy-delkor-55b24ls-12v-45ah-2.png', 1, '2023-12-18 18:22:01', '2023-12-18 18:22:01'),
(241, 55, NULL, 'uploads/products/ac-quy-delkor-55b24ls-12v-45ah-3.png', 'ac-quy-delkor-55b24ls-12v-45ah-3.png', 2, '2023-12-18 18:22:01', '2023-12-18 18:22:01'),
(242, 55, NULL, 'uploads/products/ac-quy-delkor-55b24ls-12v-45ah-4.png', 'ac-quy-delkor-55b24ls-12v-45ah-4.png', 3, '2023-12-18 18:22:01', '2023-12-18 18:22:01'),
(243, 56, NULL, 'uploads/products/ac-quy-35-60-75d23-r-l-12v-65ah-1.png', 'ac-quy-35-60-75d23-r-l-12v-65ah-1.png', 0, '2023-12-18 18:28:04', '2023-12-18 18:28:04'),
(244, 56, NULL, 'uploads/products/ac-quy-35-60-75d23-r-l-12v-65ah-2.png', 'ac-quy-35-60-75d23-r-l-12v-65ah-2.png', 1, '2023-12-18 18:28:04', '2023-12-18 18:28:04'),
(245, 56, NULL, 'uploads/products/ac-quy-35-60-75d23-r-l-12v-65ah-3.png', 'ac-quy-35-60-75d23-r-l-12v-65ah-3.png', 2, '2023-12-18 18:28:04', '2023-12-18 18:28:04'),
(246, 56, NULL, 'uploads/products/ac-quy-35-60-75d23-r-l-12v-65ah-4.png', 'ac-quy-35-60-75d23-r-l-12v-65ah-4.png', 3, '2023-12-18 18:28:04', '2023-12-18 18:28:04'),
(247, 57, NULL, 'uploads/products/delkor-85br60k-12v-60ah-df60r-1.png', 'delkor-85br60k-12v-60ah-df60r-1.png', 0, '2023-12-18 18:32:50', '2023-12-18 18:32:50'),
(248, 57, NULL, 'uploads/products/delkor-85br60k-12v-60ah-df60r-2.png', 'delkor-85br60k-12v-60ah-df60r-2.png', 1, '2023-12-18 18:32:50', '2023-12-18 18:32:50'),
(249, 57, NULL, 'uploads/products/delkor-85br60k-12v-60ah-df60r-3.png', 'delkor-85br60k-12v-60ah-df60r-3.png', 2, '2023-12-18 18:32:50', '2023-12-18 18:32:50'),
(250, 57, NULL, 'uploads/products/delkor-85br60k-12v-60ah-df60r-4.png', 'delkor-85br60k-12v-60ah-df60r-4.png', 3, '2023-12-18 18:32:50', '2023-12-18 18:32:50'),
(251, 58, NULL, 'uploads/products/ac-quy-delkor-46b20ls-12v-35ah-1.png', 'ac-quy-delkor-46b20ls-12v-35ah-1.png', 0, '2023-12-18 18:36:53', '2023-12-18 18:36:53'),
(252, 58, NULL, 'uploads/products/ac-quy-delkor-46b20ls-12v-35ah-2.png', 'ac-quy-delkor-46b20ls-12v-35ah-2.png', 1, '2023-12-18 18:36:53', '2023-12-18 18:36:53'),
(253, 58, NULL, 'uploads/products/ac-quy-delkor-46b20ls-12v-35ah-3.png', 'ac-quy-delkor-46b20ls-12v-35ah-3.png', 2, '2023-12-18 18:36:53', '2023-12-18 18:36:53'),
(254, 58, NULL, 'uploads/products/ac-quy-delkor-46b20ls-12v-35ah-4.png', 'ac-quy-delkor-46b20ls-12v-35ah-4.png', 3, '2023-12-18 18:36:53', '2023-12-18 18:36:53'),
(255, 59, NULL, 'uploads/products/delkor-df40al-1.png', 'delkor-df40al-1.png', 0, '2023-12-18 18:41:07', '2023-12-18 18:41:07'),
(256, 59, NULL, 'uploads/products/delkor-df40al-2.png', 'delkor-df40al-2.png', 1, '2023-12-18 18:41:07', '2023-12-18 18:41:07'),
(257, 59, NULL, 'uploads/products/delkor-df40al-3.png', 'delkor-df40al-3.png', 2, '2023-12-18 18:41:07', '2023-12-18 18:41:07'),
(258, 59, NULL, 'uploads/products/delkor-df40al-4.png', 'delkor-df40al-4.png', 3, '2023-12-18 18:41:07', '2023-12-18 18:41:07'),
(259, 60, NULL, 'uploads/products/ac-quy-globe-12v-7-5ah-1.png', 'ac-quy-globe-12v-7-5ah-1.png', 0, '2023-12-18 18:44:49', '2023-12-18 18:44:49'),
(260, 60, NULL, 'uploads/products/ac-quy-globe-12v-7-5ah-2.png', 'ac-quy-globe-12v-7-5ah-2.png', 1, '2023-12-18 18:44:49', '2023-12-18 18:44:49'),
(261, 60, NULL, 'uploads/products/ac-quy-globe-12v-7-5ah-3.png', 'ac-quy-globe-12v-7-5ah-3.png', 2, '2023-12-18 18:44:49', '2023-12-18 18:44:49'),
(262, 60, NULL, 'uploads/products/ac-quy-globe-12v-7-5ah-4.png', 'ac-quy-globe-12v-7-5ah-4.png', 3, '2023-12-18 18:44:49', '2023-12-18 18:44:49'),
(263, 61, NULL, 'uploads/products/globe-wp5-12-long-12v-5ah-1.png', 'globe-wp5-12-long-12v-5ah-1.png', 0, '2023-12-18 18:49:52', '2023-12-18 18:49:52'),
(264, 61, NULL, 'uploads/products/globe-wp5-12-long-12v-5ah-2.png', 'globe-wp5-12-long-12v-5ah-2.png', 1, '2023-12-18 18:49:52', '2023-12-18 18:49:52'),
(265, 61, NULL, 'uploads/products/globe-wp5-12-long-12v-5ah-3.png', 'globe-wp5-12-long-12v-5ah-3.png', 2, '2023-12-18 18:49:52', '2023-12-18 18:49:52'),
(266, 61, NULL, 'uploads/products/globe-wp5-12-long-12v-5ah-4.png', 'globe-wp5-12-long-12v-5ah-4.png', 3, '2023-12-18 18:49:52', '2023-12-18 18:49:52'),
(267, 62, NULL, 'uploads/products/globe-wp12-12-se-12v-12ah-1.png', 'globe-wp12-12-se-12v-12ah-1.png', 0, '2023-12-18 18:53:35', '2023-12-18 18:53:35'),
(268, 62, NULL, 'uploads/products/globe-wp12-12-se-12v-12ah-2.png', 'globe-wp12-12-se-12v-12ah-2.png', 1, '2023-12-18 18:53:35', '2023-12-18 18:53:35'),
(269, 62, NULL, 'uploads/products/globe-wp12-12-se-12v-12ah-3.png', 'globe-wp12-12-se-12v-12ah-3.png', 2, '2023-12-18 18:53:35', '2023-12-18 18:53:35'),
(270, 62, NULL, 'uploads/products/globe-wp12-12-se-12v-12ah-4.png', 'globe-wp12-12-se-12v-12ah-4.png', 3, '2023-12-18 18:53:35', '2023-12-18 18:53:35'),
(271, 63, NULL, 'uploads/products/ac-quy-globe-6v-5ah-wp5-1.png', 'ac-quy-globe-6v-5ah-wp5-1.png', 0, '2023-12-18 18:57:02', '2023-12-18 18:57:02'),
(272, 63, NULL, 'uploads/products/ac-quy-globe-6v-5ah-wp5-2.png', 'ac-quy-globe-6v-5ah-wp5-2.png', 1, '2023-12-18 18:57:02', '2023-12-18 18:57:02'),
(273, 63, NULL, 'uploads/products/ac-quy-globe-6v-5ah-wp5-3.png', 'ac-quy-globe-6v-5ah-wp5-3.png', 2, '2023-12-18 18:57:02', '2023-12-18 18:57:02'),
(274, 63, NULL, 'uploads/products/ac-quy-globe-6v-5ah-wp5-4.png', 'ac-quy-globe-6v-5ah-wp5-4.png', 3, '2023-12-18 18:57:02', '2023-12-18 18:57:02'),
(275, 64, NULL, 'uploads/products/globe-wtz7l-bp-12v-7ah-1.png', 'globe-wtz7l-bp-12v-7ah-1.png', 0, '2023-12-18 19:00:51', '2023-12-18 19:00:51'),
(276, 64, NULL, 'uploads/products/globe-wtz7l-bp-12v-7ah-2.png', 'globe-wtz7l-bp-12v-7ah-2.png', 1, '2023-12-18 19:00:51', '2023-12-18 19:00:51'),
(277, 64, NULL, 'uploads/products/globe-wtz7l-bp-12v-7ah-3.png', 'globe-wtz7l-bp-12v-7ah-3.png', 2, '2023-12-18 19:00:51', '2023-12-18 19:00:51'),
(278, 64, NULL, 'uploads/products/globe-wtz7l-bp-12v-7ah-4.png', 'globe-wtz7l-bp-12v-7ah-4.png', 3, '2023-12-18 19:00:51', '2023-12-18 19:00:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_05_024313_category', 1),
(6, '2023_12_05_024458_products', 1),
(7, '2023_12_05_024600_supplier', 1),
(8, '2023_12_05_024729_orders', 1),
(9, '2023_12_05_025014_order_detail', 1),
(10, '2023_12_11_125843_posts', 1),
(11, '2023_12_11_130745_image_feature', 1),
(12, '2023_12_11_144159_coupon', 1),
(13, '2023_12_11_144612_coupon_orders', 1),
(14, '2023_12_12_041752_add_supplier_id_to', 1),
(15, '2023_12_12_083426_add_unit_to_products_table', 1),
(16, '2023_12_13_073232_add_description_to_posts_table', 1),
(17, '2023_12_13_073912_update_price_in_products_table', 1),
(18, '2023_12_18_051359_create_sessions_table', 1),
(19, '2023_12_18_095326_create_notifications_table', 1),
(20, '2023_12_18_125542_rename_totol_to_total_in_orders', 1),
(21, '2023_12_18_145143_update_total_in_orders', 1),
(22, '2023_12_18_153329_update_order_details', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `body` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `category_id`, `supplier_id`, `created_at`, `updated_at`, `unit`) VALUES
(20, 'ẮC QUY GS LN4 DIN80L 12V - 80AH (THÁI LAN)', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:&nbsp;</strong>GS LN4 DIN80L</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:</strong>&nbsp;12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;80AH</li>\r\n<li role=\"presentation\"><strong>Chỉ số CCA:</strong>&nbsp;760</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x Rộng x Cao):</strong>&nbsp;314 x 175 x 190 (mm)</li>\r\n<li role=\"presentation\"><strong>Loại b&igrave;nh:</strong>&nbsp;B&igrave;nh ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li role=\"presentation\"><strong>Loại cọc:</strong>&nbsp;Cọc nghịch L</li>\r\n<li role=\"presentation\"><strong>Xuất xứ: </strong>Nhập khẩu Th&aacute;i Lan</li>\r\n</ul>', 2100000.00, 100, 1, 16, '2023-12-14 01:35:53', '2023-12-14 01:35:53', 'Cái'),
(21, 'ẮC QUY GS MF 40B19L 12V - 35AH', '<ul>\r\n<li>M&atilde; sản phẩm: GS MF 40B19L</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 35Ah</li>\r\n<li>Trọng lượng: 9kg</li>\r\n<li>K&iacute;ch thước ( D&agrave;i x rộng x cao): 185 x 127 x 227 mm</li>\r\n<li>Xuất xứ:&nbsp; Sản xuất tại Việt Nam theo c&ocirc;ng nghệ Nhật Bản</li>\r\n<li>H&atilde;ng sản xuất: GS</li>\r\n<li>Loại cọc: Cọc tr&aacute;i (L), chuẩn cọc nhỏ</li>\r\n<li>Loại ắc quy: Ắc quy k&iacute;n kh&iacute;, miễn bảo dưỡng</li>\r\n<li>M&agrave;u sắc: Đen</li>\r\n<li>Bảo h&agrave;nh: 6 th&aacute;ng</li>\r\n</ul>', 950000.00, 100, 1, 16, '2023-12-14 01:38:03', '2023-12-14 01:38:03', 'Cái'),
(22, 'ẮC QUY GS MF 44B19L 12V - 40AH', '<ul>\r\n<li>M&atilde; sản phẩm: GS MF 44B19L</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 40Ah</li>\r\n<li>Trọng lượng: 9,88kg</li>\r\n<li>K&iacute;ch thước ( D&agrave;i x rộng x cao): 187 x 127 x 203 mm</li>\r\n<li>Xuất xứ:&nbsp; Sản xuất tại Việt Nam theo c&ocirc;ng nghệ Nhật Bản</li>\r\n<li>H&atilde;ng sản xuất: GS</li>\r\n</ul>', 1080000.00, 100, 1, 16, '2023-12-14 01:43:37', '2023-12-14 01:43:37', 'Cái'),
(23, 'ẮC QUY GS MF DIN45 LBN 12V - 45AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\">M&atilde; sản phẩm:&nbsp;MF DIN45 LBN</li>\r\n<li role=\"presentation\">Điện &aacute;p:&nbsp;12V</li>\r\n<li role=\"presentation\">Dung lượng<strong>:</strong>&nbsp;45AH</li>\r\n<li role=\"presentation\">Chỉ số CCA:&nbsp;600</li>\r\n<li role=\"presentation\">K&iacute;ch thước:<strong>&nbsp;</strong>207 x 175 x 175 (mm)</li>\r\n<li role=\"presentation\">Loại b&igrave;nh:<strong>&nbsp;</strong>Ắc quy kh&iacute; kh&ocirc;, miễn bảo dưỡng</li>\r\n<li role=\"presentation\">Loại cọc:&nbsp;Cọc nghịch - cọc ch&igrave;m</li>\r\n<li role=\"presentation\">Khối lượng<strong>:&nbsp;</strong>12kg</li>\r\n<li role=\"presentation\">Xuất xứ: Việt Nam</li>\r\n</ul>', 1150000.00, 100, 1, 16, '2023-12-14 01:48:54', '2023-12-14 01:48:54', 'Cái'),
(24, 'ẮC QUY ĐỒNG NAI CMF 31800 12V - 100AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;CMF 31800</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:&nbsp;</strong>100AH</li>\r\n<li role=\"presentation\"><strong>Khối lượng:&nbsp;</strong>25.13kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước:</strong>&nbsp;230 x 171 x 215 (mm)</li>\r\n<li role=\"presentation\"><strong>Vị tr&iacute; cọc b&igrave;nh:&nbsp;</strong>R</li>\r\n<li role=\"presentation\"><strong>H&atilde;ng sản xuất:</strong>&nbsp;Pinaco&nbsp;- Việt Nam</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:&nbsp;</strong>09 th&aacute;ng</li>\r\n</ul>', 2050000.00, 100, 1, 17, '2023-12-14 01:53:42', '2023-12-14 01:53:42', 'Cái'),
(25, 'ẮC QUY ĐỒNG NAI CMF 80D26L 12V - 70AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:&nbsp;</strong>CMF 80D26L</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:</strong>&nbsp;12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;70AH</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (L x W x H):</strong>&nbsp;258 x 174 x 203 (mm)</li>\r\n<li role=\"presentation\"><strong>Vị tr&iacute; cọc:&nbsp;</strong>LO</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:</strong> 18,59 kg</li>\r\n</ul>', 1450000.00, 100, 1, 17, '2023-12-14 01:57:28', '2023-12-14 01:57:28', 'Cái'),
(26, 'ẮC QUY ĐỒNG NAI EXTRA CMF 55D23R - 12V - 60AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;Extra CMF 55D23R</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;60AH</li>\r\n<li role=\"presentation\"><strong>Vị tr&iacute; cọc:</strong>&nbsp;R</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x Rộng x Cao):</strong>&nbsp;232 x 171 x 200 (mm)</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:</strong>&nbsp;16.22kg</li>\r\n<li role=\"presentation\"><strong>Loại b&igrave;nh:</strong>&nbsp;B&igrave;nh ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li role=\"presentation\"><strong>H&atilde;ng sản xuất:&nbsp;</strong>Pinaco</li>\r\n</ul>', 1199000.00, 100, 1, 17, '2023-12-14 01:59:32', '2023-12-14 01:59:32', 'Cái'),
(27, 'ẮC QUY VARTA 65B24L NX100-S6L 12V - 50Ah', '<ul>\r\n<li>M&atilde; sản phẩm: Varta 65B24L</li>\r\n<li>S&ocirc;́ hi&ecirc;̣u: NX100-S6L</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 50Ah</li>\r\n<li>Chỉ số D&ograve;ng khởi động (CCA): 390A</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 236X134X201 mm</li>\r\n<li>Loại cọc: cọc nhỏ</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc; k&iacute;n kh&iacute;, miễn bảo dưỡng (MF)</li>\r\n<li>M&agrave;u sắc: Trắng xanh</li>\r\n<li>Xuất xứ: Nhập khẩu từ H&agrave;n Quốc</li>\r\n</ul>', 1189000.00, 100, 1, 15, '2023-12-14 02:02:59', '2023-12-14 02:02:59', 'Cái'),
(28, 'ẮC QUY VARTA 60044 DIN100(L) 12V - 100AH', '<ul>\r\n<li>M&atilde; sản phẩm: 60044 DIN100</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 100AH</li>\r\n<li>Chỉ số CCA: 760</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 354 x 174 x 188 (mm)</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc; k&iacute;n kh&iacute;</li>\r\n<li>Loại cọc: Cọc L, DIN</li>\r\n<li>M&agrave;u sắc: Th&acirc;n m&agrave;u trắng, mặt b&igrave;nh m&agrave;u xanh</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n</ul>', 2580000.00, 100, 1, 15, '2023-12-14 02:09:27', '2023-12-14 02:09:27', 'Cái'),
(29, 'ẮC QUY VARTA 61038 DIN110 12V - 110AH', '<ul>\r\n<li>M&atilde; sản phẩm: Varta 61038</li>\r\n<li>S&ocirc;́ hi&ecirc;̣u: DIN110</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 110 Ah</li>\r\n<li>Chỉ số D&ograve;ng khởi động (CCA): 900A</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 393X174X188 mm</li>\r\n<li>Loại cọc: cọc ch&igrave;m</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc; k&iacute;n kh&iacute;, miễn bảo dưỡng (MF)</li>\r\n<li>M&agrave;u sắc: Xanh lam, bạc</li>\r\n<li>Xuất xứ: Nhập khẩu từ H&agrave;n Quốc</li>\r\n</ul>', 3150000.00, 100, 1, 15, '2023-12-14 02:12:13', '2023-12-14 02:12:13', 'Cái'),
(30, 'ẮC QUY ROCKET EFB Q85 12V - 65AH', '<ul>\r\n<li>M&atilde; sản phẩm: EFB Q85 12 - 65AH</li>\r\n<li>Chủng loại: Ắc quy kh&ocirc; (miễn bảo dưỡng)</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 65AH</li>\r\n<li>C&ocirc;ng nghệ: Start-Stop, I-Stop, High CCA</li>\r\n<li>K&iacute;ch thước (d&agrave;i x rộng x cao): 233 x 173 x 225 mm</li>\r\n<li>Thương hiệu: ROCKET đến từ H&agrave;n Quốc</li>\r\n<li>Xuất xứ: Được nhập khẩu 100% từ H&agrave;n Quốc</li>\r\n</ul>', 1999000.00, 100, 1, 18, '2023-12-14 02:15:07', '2023-12-14 02:15:07', 'Cái'),
(31, 'ẮC QUY ROCKET SMF 50D20R 12V - 50AH', '<ul>\r\n<li>M&atilde; sản phẩm: Rocket SMF</li>\r\n<li>S&ocirc;́ hi&ecirc;̣u: 50D20R</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 50Ah</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 202x173x225 mm</li>\r\n<li>Loại cọc: cọc xu&ocirc;i</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc; k&iacute;n kh&iacute;, miễn bảo dưỡng (MF)</li>\r\n<li>M&agrave;u sắc: m&agrave;u Đen</li>\r\n<li>Xuất xứ: Nhập khẩu từ H&agrave;n Quốc</li>\r\n</ul>', 1150000.00, 100, 1, 18, '2023-12-14 02:17:55', '2023-12-14 02:17:55', 'Cái'),
(32, 'ẮC QUY ROCKET AGM L3 12V - 70AH', '<ul>\r\n<li>Mã sản phẩm: AGM L3</li>\r\n<li>Ki&ecirc;̉u dáng: Ắc quy acid chì, bình DIN kín khí, cọc ngược</li>\r\n<li>Đi&ecirc;̣n áp: 12V</li>\r\n<li>Dung lượng: 70Ah</li>\r\n<li>Dòng khởi đ&ocirc;̣ng lạnh: 700CCA</li>\r\n<li>Kích thước (d&agrave;i x rộng x cao): 278x175x190 mm&nbsp;</li>\r\n<li>Xu&acirc;́t xứ: Nh&acirc;̣p kh&acirc;̉u Hàn Qu&ocirc;́c</li>\r\n<li>Hãng sản xu&acirc;́t : Sebang Global Battery Co</li>\r\n</ul>', 5700000.00, 100, 1, 18, '2023-12-14 02:25:30', '2023-12-14 02:25:30', 'Cái'),
(33, 'Ắc quy AMARON 42B20L 12V 35Ah', '<p><strong>AMARON - ẮC QUY MIỄN BẢO DƯỠNG -&nbsp;HỢP KIM BẠC</strong></p>\r\n<ul>\r\n<li><strong>H&atilde;ng sản xuất:</strong>&nbsp;Amara Raja Batteries - Johnson Controls</li>\r\n<li><strong>Thương hiệu: </strong><a target=\"_blank\">AMARON</a></li>\r\n</ul>\r\n<p><strong>* Xuất xứ:&nbsp;</strong>Ấn Độ</p>\r\n<p><strong>* Ưu điểm:</strong></p>\r\n<p>- C&ocirc;ng nghệ hợp kim bạc(Silven X)&nbsp;được cấp bằng s&aacute;ng chế, gi&uacute;p tăng tuổi thọ ắc quy.</p>\r\n<p>- Thiết kế vỏ nhựa c&oacute; khả năng chịu nhiệt cao, chống rung động.</p>\r\n<p>- Khả năng dự trữ điện năng cao, hiệu suất khởi động cao.</p>', 1160000.00, 100, 1, 19, '2023-12-14 02:31:57', '2023-12-14 02:31:57', 'Cái'),
(34, 'ẮC QUY ATLAS SE-Q85 90D23FL 12V - 65AH', '<ul>\r\n<li>M&atilde; sản phẩm: SE-Q85</li>\r\n<li>Dung lượng: 65AH</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 230 x 172 x 200 (mm)</li>\r\n<li>M&agrave;u sắc: X&aacute;m v&agrave; ghi đen</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n</ul>', 2199000.00, 100, 1, 21, '2023-12-14 02:39:16', '2023-12-14 02:39:16', 'Cái'),
(37, 'ẮC QUY GLOBE WP4,5-6 KLB 6V - 4,5AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;WP4,5-6 KLB</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>6V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:&nbsp;</strong>4,5AH</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:</strong>&nbsp;0,85kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x rộng x cao):</strong>&nbsp;70 x 47 x 101mm</li>\r\n<li role=\"presentation\"><strong>Xuất xứ:</strong>&nbsp;Việt Nam</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:&nbsp;</strong>12 th&aacute;ng</li>\r\n</ul>', 120000.00, 100, 1, 22, '2023-12-14 02:46:28', '2023-12-14 02:46:28', 'Cái'),
(38, 'ẮC QUY VARTA AGM LN2 506901568 12V 60AH', '<ul>\r\n<li>Model: VARTA AGM LN2</li>\r\n<li>Barcode: 4016987144497</li>\r\n<li>UK code: 027AGM</li>\r\n<li>Điện &aacute;p: 12VDC</li>\r\n<li>Dung Lượng: 60Ah (20HR)</li>\r\n<li>Khởi động lạnh (CCA): 680A</li>\r\n<li>K&iacute;ch thước (D*R*C): 241 x 174 x 188</li>\r\n<li>Xuất xứ: H&agrave;n Quốc - Gia c&ocirc;ng theo c&ocirc;ng nghệ của tập đo&agrave;n Jonson Controls</li>\r\n</ul>', 4350000.00, 100, 1, 15, '2023-12-18 06:23:14', '2023-12-18 06:23:14', 'Cái'),
(40, 'ẮC QUY VARTA Q85 115D23L 12V 70AH', '<ul>\r\n<li>Chủng loại: EFB,&nbsp;ắc quy kh&ocirc; (miễn bảo dưỡng)</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 70AH</li>\r\n<li>CCA (SAE): 660A</li>\r\n<li>C&ocirc;ng năng: Khởi động piston &ocirc; t&ocirc;, nguồn&nbsp;hỗ trợ thiết bị&nbsp;mở rộng &amp; tiện &iacute;ch tr&ecirc;n xe</li>\r\n<li>C&ocirc;ng nghệ:&nbsp;<strong>I-Stop,&nbsp;Start-Stop, Auto Hold</strong></li>\r\n<li>K&iacute;ch thước (d&agrave;i x&nbsp;rộng x&nbsp;cao): 230 x&nbsp;173 x&nbsp;225 mm</li>\r\n<li>Thương hiệu: VARTA&reg;</li>\r\n<li>Ph&acirc;n kh&uacute;c:&nbsp;VARTA&reg; Silver Dynamic</li>\r\n<li>Nh&agrave; sản xuất: Clarios Delkor Corporation</li>\r\n<li>Nơi sản xuất: H&agrave;n Quốc</li>\r\n<li>Bảo h&agrave;nh: 9 th&aacute;ng (Bảo h&agrave;nh điện tử c&ugrave;ng tem chống h&agrave;ng giả)</li>\r\n</ul>', 2380000.00, 100, 1, 15, '2023-12-18 06:32:07', '2023-12-18 06:32:07', 'Cái'),
(41, 'ẮC QUY VARTA AGM LN5 595901085 12V - 95AH', '<ul>\r\n<li>M&atilde; sản phẩm: AGM LN5 595901085&nbsp;</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 95AH</li>\r\n<li>Chỉ số CCA: 850A</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 352 x 174 x 188 (mm)</li>\r\n<li>Loại b&igrave;nh: AGM, Ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li>M&agrave;u sắc: Th&acirc;n b&igrave;nh v&agrave; mặt b&igrave;nh đều c&oacute; m&agrave;u bạc</li>\r\n<li>C&ocirc;ng nghệ: Eco, Start-Stop/I-Stop, Auto-Hold Plus v&agrave; c&aacute;c t&iacute;nh năng chuy&ecirc;n dụng hỗ trợ tr&ecirc;n Mercedes-Benz</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n<li>Thương hiệu: VARTA&nbsp;- Lắp r&aacute;p v&agrave; l&agrave; thương hiệu khuy&ecirc;n d&ugrave;ng cho c&aacute;c d&ograve;ng xe Mercedes-Benz, Audi, BMW, Poscher...</li>\r\n<li>H&atilde;ng sản xuất: Clarios - Johnson Controls</li>\r\n</ul>', 5280000.00, 100, 1, 15, '2023-12-18 06:37:00', '2023-12-18 06:37:00', 'Cái'),
(42, 'ẮC QUY VARTA AGM LN3 570901076 12V - 70AH', '<ul>\r\n<li>T&ecirc;n sản phẩm: Ắc Quy Varta AGM LN3 570901076 12V - 70Ah</li>\r\n<li>Thương hiệu:&nbsp;VARTA&reg;&nbsp;của Đức, thuộc tập đo&agrave;n Clarios&nbsp;Johnson Controls</li>\r\n<li>Ph&acirc;n kh&uacute;c: Silver Dynamic AGM</li>\r\n<li>Sử dụng: ECO, START-STOP PLUS</li>\r\n<li>Sản xuất tại: H&agrave;n Quốc</li>\r\n<li>Model: LN3 570901076</li>\r\n<li>D&ograve;ng sản phẩm: Ắc quy c&ocirc;ng nghệ AGM - Absorbent Glass Mat</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 70Ah (20Hr)</li>\r\n<li>K&iacute;ch thước (mm): 277 x 174 x 188 (D x R x C)</li>\r\n<li>D&ograve;ng khởi động - CCA (A): 760</li>\r\n</ul>', 4499000.00, 100, 1, 15, '2023-12-18 06:43:01', '2023-12-18 06:43:01', 'Cái'),
(43, 'ẮC QUY VARTA Q85 95D23L 12V - 65AH', '<ul>\r\n<li>Chủng loại: EFB,&nbsp;ắc quy kh&ocirc; (miễn bảo dưỡng)</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 65AH</li>\r\n<li>CCA: 620A</li>\r\n<li>Ph&acirc;n kh&uacute;c: VARTA&reg;&nbsp;Silver Dynamic</li>\r\n<li>Ứng dụng: Start-Stop /&nbsp;I-Stop Systems, khởi động piston &ocirc; t&ocirc;</li>\r\n<li>K&iacute;ch thước (d&agrave;i * rộng * cao): 230* 173 * 225 mm</li>\r\n<li>Thương hiệu: VARTA&reg;</li>\r\n<li>H&atilde;ng sản xuất: Clarios - Johnson Controls</li>\r\n<li>Nơi sản xuất: H&agrave;n Quốc</li>\r\n<li>Bảo h&agrave;nh: 9 th&aacute;ng (Bảo h&agrave;nh điện tử c&ugrave;ng tem chống h&agrave;ng giả)</li>\r\n</ul>', 2150000.00, 1, 1, 15, '2023-12-18 06:50:56', '2023-12-18 06:50:56', 'Cái'),
(44, 'ẮC QUY ATLAS MF40B19FL 12V - 35AH', '<ul>\r\n<li>M&atilde; sản phẩm: MF40B19FL&nbsp;</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 35Ah ( 20 Hr )</li>\r\n<li>K&iacute;ch thước:&nbsp; 187 x 127 x 200</li>\r\n<li>M&agrave;u sắc: v&agrave;ng, đen&nbsp;</li>\r\n<li>Trọng lượng: 9 kg&nbsp;</li>\r\n<li>D&ograve;ng sản phẩm: miễn bảo dưỡng</li>\r\n<li>Bảo h&agrave;nh: 9 th&aacute;ng&nbsp;</li>\r\n<li>Thương hiệu: Atlas</li>\r\n<li>Xuất xứ: nội địa H&agrave;n Quốc</li>\r\n</ul>', 845000.00, 1, 1, 21, '2023-12-18 07:44:18', '2023-12-18 08:00:56', 'Cái'),
(45, 'ẮC QUY ATLAS MF 55D23FL 12V - 60AH', '<ul>\r\n<li>M&atilde; sản phẩm: MF 55D23FL</li>\r\n<li>Dung lượng: 60AH</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 230 x 172 x 222(mm)</li>\r\n<li>M&agrave;u sắc: Đen v&agrave; v&agrave;ng</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n</ul>', 1299000.00, 100, 1, 21, '2023-12-18 07:52:31', '2023-12-18 08:01:31', 'Cái'),
(48, 'ẮC QUY ATLAS MF 65-650 12V - 70AH', '<ul>\r\n<li>M&atilde; sản phẩm: MF 65-650</li>\r\n<li>Dung lượng: 70AH</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 296 x 187 x 171 (mm)</li>\r\n<li>M&agrave;u sắc: V&agrave;ng, đen</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc;, miễn bảo dưỡng</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n</ul>', 1640000.00, 100, 1, 21, '2023-12-18 08:05:25', '2023-12-18 08:05:25', 'Cái'),
(49, 'ẮC QUY ATLAS MF95D31L 12V - 80AH', '<ul>\r\n<li>Chủng loại: Ắc quy kh&ocirc; (miễn bảo dưỡng)</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 80AH</li>\r\n<li>K&iacute;ch thước (d&agrave;i * rộng * cao):&nbsp;302*172*200 (D x R x C)</li>\r\n<li>Thương hiệu: AtlasBX</li>\r\n<li>Xuất xứ: H&agrave;n Quốc</li>\r\n<li>Bảo h&agrave;nh: 9 th&aacute;ng (Bảo h&agrave;nh điện tử c&ugrave;ng tem chống h&agrave;ng giả)</li>\r\n</ul>', 1610000.00, 20, 1, 21, '2023-12-18 08:09:22', '2023-12-18 08:24:08', 'Cái'),
(50, 'ẮC QUY ĐỒNG NAI N100 12V - 100AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;Đồng Nai N100 12V -100AH</li>\r\n<li role=\"presentation\"><strong>D&ograve;ng xả tối đa:</strong>&nbsp;500A</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x Rộng x Cao):</strong>&nbsp;406X174X208 mm</li>\r\n<li role=\"presentation\"><strong>Thể t&iacute;ch axit:</strong>&nbsp;7.2L</li>\r\n<li role=\"presentation\"><strong>Loại cọc:</strong>&nbsp;cọc to</li>\r\n<li role=\"presentation\"><strong>Loại b&igrave;nh:</strong>&nbsp;Ắc quy nước</li>\r\n<li role=\"presentation\"><strong>M&agrave;u sắc:&nbsp;</strong>Trắng đen</li>\r\n<li role=\"presentation\"><strong>Xuất xứ:</strong> Việt Nam</li>\r\n</ul>', 188000.00, 1, 1, 17, '2023-12-18 08:17:20', '2023-12-18 08:22:18', 'Cái'),
(51, 'ẮC QUY ĐỒNG NAI EXTRA CMF 105D31R - 12V - 90AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;CMF 105D31R</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;90AH</li>\r\n<li role=\"presentation\"><strong>Khối lượng:</strong>&nbsp;22.24Kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước:</strong>&nbsp;303 x 171 x 203 (mm)</li>\r\n<li role=\"presentation\"><strong>Vị tr&iacute; cọc b&igrave;nh:</strong>&nbsp;Phải</li>\r\n<li role=\"presentation\"><strong>H&atilde;ng sản xuất:&nbsp;</strong>Pinaco</li>\r\n<li role=\"presentation\"><strong>Xuất xứ:&nbsp;</strong>Việt Nam</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:&nbsp;</strong>9 th&aacute;ng</li>\r\n</ul>', 2050000.00, 1, 1, 17, '2023-12-18 08:21:32', '2023-12-18 08:21:32', 'Cái'),
(52, 'ẮC QUY GS MF 85D26L 12V - 75AH', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>M&atilde; sản phẩm:&nbsp;</strong>GS MF 85D26L 12V - 70AH</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>12V</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;70AH</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x Rộng x Cao):</strong>&nbsp;258 x 171 x 200 (mm)</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Loại b&igrave;nh:</strong>&nbsp;Ắc quy kh&ocirc;, miễn bảo dưỡng</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Loại cọc:&nbsp;</strong>Cọc tr&aacute;i, chuẩn cọc to</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Xuất xứ:&nbsp;</strong>Việt Nam</p>\r\n</li>\r\n</ul>', 1560000.00, 1, 1, 16, '2023-12-18 08:29:37', '2023-12-18 08:29:37', 'Cái'),
(53, 'ẮC QUY ROCKET EFB N55 12V - 55AH', '<ul>\r\n<li>M&atilde; sản phẩm: Rocket EFB</li>\r\n<li>S&ocirc;́ hi&ecirc;̣u: EFB N55</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 55Ah</li>\r\n<li>Chỉ số D&ograve;ng khởi động (CCA): 450A</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 238X129X227 mm</li>\r\n<li>Loại cọc: CỌC NGƯỢC</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc; k&iacute;n kh&iacute;, miễn bảo dưỡng (MF)</li>\r\n<li>M&agrave;u sắc: m&agrave;u Đen</li>\r\n<li>Xuất xứ: Nhập khẩu từ H&agrave;n Quốc</li>\r\n</ul>', 1595000.00, 1, 1, 18, '2023-12-18 08:47:41', '2023-12-18 08:47:41', 'Cái'),
(54, 'ẮC QUY ROCKET SMF 57113 12V - 71AH (DIN)', '<ul>\r\n<li>M&atilde; sản phẩm: SMF 57113</li>\r\n<li>Điện &aacute;p: 12V</li>\r\n<li>Dung lượng: 71Ah</li>\r\n<li>Chỉ số CCA: 620</li>\r\n<li>K&iacute;ch thước (D&agrave;i x Rộng x Cao): 277x175x175 (mm)</li>\r\n<li>Loại cọc: Cọc thấp, cọc ngược DIN</li>\r\n<li>Loại b&igrave;nh: Ắc quy kh&ocirc;, b&igrave;nh Din k&iacute;n kh&iacute;, miễn bảo dưỡng</li>\r\n<li>M&agrave;u sắc: M&agrave;u đen</li>\r\n<li>Xuất xứ: Sản xuất tại H&agrave;n Quốc</li>\r\n</ul>', 1510000.00, 100, 1, 18, '2023-12-18 08:52:46', '2023-12-18 08:52:46', 'Cái'),
(55, 'ẮC QUY DELKOR 55B24LS 12V 45AH', '<ul dir=\"ltr\">\r\n<li>M&atilde; sản phẩm: 55B24LS&nbsp;</li>\r\n<li role=\"presentation\">Loại ắc quy: Ắc quy kh&ocirc; k&iacute;n kh&iacute;, kh&ocirc;ng bảo dưỡng</li>\r\n<li role=\"presentation\">Điện &aacute;p: 12V</li>\r\n<li role=\"presentation\">Dung lượng: 45Ah</li>\r\n<li role=\"presentation\">CCA: 325CCA</li>\r\n<li role=\"presentation\">K&iacute;ch thước (d&agrave;i x rộng x cao): 237mm x 128mm x 202mm</li>\r\n<li role=\"presentation\">Loại cọc: Cọc tr&aacute;i (L)</li>\r\n<li role=\"presentation\">Thương hiệu: Delkor</li>\r\n<li role=\"presentation\">Sản xuất: H&agrave;n Quốc</li>\r\n</ul>', 1150000.00, 100, 1, 20, '2023-12-18 18:22:01', '2023-12-18 18:22:01', 'Cái'),
(56, 'ẮC QUY 35-60 (75D23 R/L) 12V - 65AH', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">M&atilde; sản phẩm: 35-60 (75D23 R/L)</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Loại ắc quy: B&igrave;nh ắc quy kh&ocirc;</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Điện &aacute;p: 12V</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Dung lượng: 65Ah</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">CCA: 520CCA</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">K&iacute;ch thước (d&agrave;i x rộng x cao): 229mm x 172mm x 203mm</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Thương hiệu: Delkor</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Xuất xứ: H&agrave;n Quốc</p>\r\n</li>\r\n</ul>', 1400000.00, 100, 1, 20, '2023-12-18 18:28:04', '2023-12-18 18:28:04', 'Cái'),
(57, 'ẮC QUY DELKOR 85BR60K 12V 60AH DF60R', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">M&atilde; sản phẩm: 85BR60K (DF60R)</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Loại ắc quy: Ắc quy kh&ocirc;</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Điện &aacute;p: 12V</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Dung lượng: 60Ah</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">CCA: 560CCA</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">K&iacute;ch thước (d&agrave;i x rộng x cao): 229mm x 179mm x 184mm</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Loại cọc: Cọc to, R</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Thương hiệu: Delkor</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Sản xuất: H&agrave;n Quốc</p>\r\n</li>\r\n</ul>', 1500000.00, 100, 1, 20, '2023-12-18 18:32:50', '2023-12-18 18:32:50', 'Cái'),
(58, 'ẮC QUY DELKOR 46B20LS 12V 35AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\">Loại ắc quy: Ắc quy kh&ocirc;, kh&ocirc;ng cần bảo dưỡng</li>\r\n<li role=\"presentation\">Điện &aacute;p: 12V</li>\r\n<li role=\"presentation\">Dung lượng: 35Ah</li>\r\n<li role=\"presentation\">CCA: 310CCA</li>\r\n<li role=\"presentation\">K&iacute;ch thước (d&agrave;i x rộng x cao): 196mm x 128mm x 202mm</li>\r\n<li role=\"presentation\">Loại cọc: Cọc chuẩn nhỏ, L</li>\r\n<li role=\"presentation\">Thương hiệu: Delkor</li>\r\n<li role=\"presentation\">Sản xuất: H&agrave;n Quốc</li>\r\n</ul>', 1100000.00, 1, 1, 20, '2023-12-18 18:36:53', '2023-12-18 18:36:53', 'Cái'),
(59, 'ẮC QUY DELKOR DF40AL 12V 40AH', '<ul dir=\"ltr\">\r\n<li>M&atilde; sản phẩm: DF40AL</li>\r\n<li role=\"presentation\">Loại ắc quy: Ắc quy kh&ocirc;, kh&ocirc;ng cần bảo dưỡng</li>\r\n<li role=\"presentation\">Điện &aacute;p: 12V</li>\r\n<li role=\"presentation\">Dung lượng: 40Ah</li>\r\n<li role=\"presentation\">CCA: 350CCA</li>\r\n<li role=\"presentation\">K&iacute;ch thước (d&agrave;i x rộng x cao): 196mm x 128mm x 202mm</li>\r\n<li role=\"presentation\">Loại cọc: Cọc nhỏ, L</li>\r\n<li role=\"presentation\">Thương hiệu: Delkor</li>\r\n<li role=\"presentation\">Sản xuất: H&agrave;n Quốc</li>\r\n</ul>', 1080000.00, 100, 1, 20, '2023-12-18 18:41:07', '2023-12-18 18:41:07', 'Cái'),
(60, 'ẮC QUY GLOBE WP7,5-12 12V - 7,5AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;WP7,5-12&nbsp;</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:</strong>&nbsp;12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;7,5AH</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:</strong>&nbsp;2.45kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x rộng x cao):</strong>&nbsp;151 x 65 x 94mm</li>\r\n<li role=\"presentation\"><strong>Xuất xứ:&nbsp;</strong>Việt Nam</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:</strong> 6 th&aacute;ng</li>\r\n</ul>', 310000.00, 100, 1, 22, '2023-12-18 18:44:49', '2023-12-18 18:44:49', 'Cái'),
(61, 'ẮC QUY GLOBE WP5-12 LONG 12V - 5AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:&nbsp;</strong>WP5-12 LONG</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:&nbsp;</strong>12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;5AH</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:</strong>&nbsp;1,9kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x rộng x cao):</strong>&nbsp;90 x 70 x 101mm</li>\r\n<li role=\"presentation\"><strong>M&agrave;u sắc:&nbsp;</strong>M&agrave;u đen</li>\r\n<li role=\"presentation\"><strong>Tuổi thọ thiết kế:</strong>&nbsp;12 năm</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:</strong> 12 th&aacute;ng</li>\r\n</ul>', 269000.00, 100, 1, 22, '2023-12-18 18:49:52', '2023-12-18 18:49:52', 'Cái'),
(62, 'ẮC QUY GLOBE WP12-12 SE 12V - 12AH', '<ul dir=\"ltr\">\r\n<li role=\"presentation\"><strong>M&atilde; sản phẩm:</strong>&nbsp;WP12-12 SE</li>\r\n<li role=\"presentation\"><strong>Điện &aacute;p:</strong>&nbsp;12V</li>\r\n<li role=\"presentation\"><strong>Dung lượng:</strong>&nbsp;12AH</li>\r\n<li role=\"presentation\"><strong>Trọng lượng:&nbsp;</strong>4,02kg</li>\r\n<li role=\"presentation\"><strong>K&iacute;ch thước (D&agrave;i x rộng x cao):</strong>&nbsp;151 x 98 x 93 (mm)</li>\r\n<li role=\"presentation\"><strong>Tuổi thọ:</strong>&nbsp;5-7 năm</li>\r\n<li role=\"presentation\"><strong>Xuất xứ:&nbsp;</strong>Việt Nam</li>\r\n<li role=\"presentation\"><strong>Bảo h&agrave;nh:</strong> 6 th&aacute;ng</li>\r\n</ul>', 440000.00, 100, 1, 22, '2023-12-18 18:53:35', '2023-12-18 18:53:35', 'Cái'),
(63, 'ẮC QUY GLOBE 6V 5AH (WP5-6)', '<ul>\r\n<li><strong>M&atilde; sản phẩm</strong>: GLOBE WP5 - 6</li>\r\n<li><strong>Điện &aacute;p</strong>: 6V</li>\r\n<li><strong>Dung lượng</strong>: 5AH</li>\r\n<li><strong>K&iacute;ch thước (D&agrave;i x Rộng x Cao)</strong>: 70 x 47 x 102 mm</li>\r\n<li><strong>Xuất xứ</strong>: Việt Nam</li>\r\n</ul>', 140000.00, 100, 1, 22, '2023-12-18 18:57:02', '2023-12-18 18:57:02', 'Cái'),
(64, 'ẮC QUY GLOBE WTZ7L-BP 12V - 7AH', '<ul>\r\n<li>T&ecirc;n sản phẩm: GLOBE WTZ7L-BP 12V - 7Ah</li>\r\n<li>Hiệu điện thế: 12V</li>\r\n<li>Dung lượng: 7Ah</li>\r\n<li>K&iacute;ch thước (d&agrave;i x rộng x cao): 113 x 70 x 129 (mm)</li>\r\n<li>Trọng lượng: 2.53 kg</li>\r\n<li>Loại ắc quy: Kh&ocirc;, k&iacute;n kh&iacute;, miễn bảo dưỡng</li>\r\n<li>Thương hiệu: GLOBE</li>\r\n<li>Xuất xứ: Việt Nam</li>\r\n<li>Tuổi thọ thiết kế: 5 năm</li>\r\n</ul>', 435000.00, 100, 1, 22, '2023-12-18 19:00:51', '2023-12-18 19:00:51', 'Cái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `avatar`, `address`, `phone`, `email`) VALUES
(15, 'VARTA', 'uploads/suppliers/varta-logo.png', '66 Vũ Trọng Khánh - Phường Mộ Lao - Quận Hà Đông', '0816668898', 'vartabattery88@gmail.com'),
(16, 'GS', 'uploads/suppliers/GS-logo.png', '631 Ngô Gia Tự, phường Đức Giang, quận Long Biên, TP Hà Nội', '1900555562', 'saleshn@gsbattery.vn'),
(17, 'PINACO', 'uploads/suppliers/logopinaco.png', '321, Trần Hưng Đạo, P.Cô Giang, Q.1, Tp.HCM', '0283920306', 'Pinaco@pinaco.com.vn'),
(18, 'ROCKET', 'uploads/suppliers/rocket-logo.png', '236 P. Lê Thanh Nghị Đồng Tâm Hai Bà Trưng Hà Nội', '0965668575', 'Rocketbattery.vn@gmail.com'),
(19, 'AMARON', 'uploads/suppliers/amaron-logo.png', '343A Lũy Bán Bích - P.Hiệp Tân Quận Tân Phú - Hà Nội', '0988555993', 'acquyduyphat@gmail.com'),
(20, 'DELKOR', 'uploads/suppliers/delkor-logo.png', '100 Cầu Lớn , Nam Hồng, Đông Anh, Hà Nội', '0981079832', 'hdviet.ltd@gmail.com'),
(21, 'ATLASBX', 'uploads/suppliers/logo-atlasbx.png', 'Số 4 Duy Tân, Cầu Giấy, Hà Nội', '0948737396', 'atlasbxvietnam@gmail.com'),
(22, 'GLOBE', 'uploads/suppliers/logo-globe.png', 'Ngã Tư Bình Chuẩn, Thành Phố Thuận An, Tỉnh Bình Dương', '0987396499', 'bivipha@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Phạm Vinh Quang', 'phamvinhquang14042003@gmail.com', NULL, NULL, 0, NULL, '$2y$12$TT3uf0fFvIbq.4nZ3OGGi.9D.VpZdLL7R6bNutMbkaqc7PIFmbgiS', NULL, '2023-12-18 17:55:34', '2023-12-18 17:55:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Chỉ mục cho bảng `coupon_orders`
--
ALTER TABLE `coupon_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon_orders_coupon_id_foreign` (`coupon_id`),
  ADD KEY `coupon_orders_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `image_features`
--
ALTER TABLE `image_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_features_product_id_foreign` (`product_id`),
  ADD KEY `image_features_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_foreign` (`users_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coupon_orders`
--
ALTER TABLE `coupon_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_features`
--
ALTER TABLE `image_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `coupon_orders`
--
ALTER TABLE `coupon_orders`
  ADD CONSTRAINT `coupon_orders_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `image_features`
--
ALTER TABLE `image_features`
  ADD CONSTRAINT `image_features_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `image_features_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
