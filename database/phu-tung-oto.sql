-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 10:48 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
(3, 2, NULL, 'uploads/products/ac-quy-varta-1.png', 'ac-quy-varta-1.png', 0, '2023-12-12 21:18:25', '2023-12-12 21:18:25'),
(4, 2, NULL, 'uploads/products/ac-quy-varta-4.png', 'ac-quy-varta-4.png', 1, '2023-12-12 21:18:25', '2023-12-12 21:18:25'),
(5, 2, NULL, 'uploads/products/binh-ac-quy-varta-2.png', 'binh-ac-quy-varta-2.png', 2, '2023-12-12 21:18:25', '2023-12-12 21:18:25'),
(6, 2, NULL, 'uploads/products/binh-ac-quy-varta-3.png', 'binh-ac-quy-varta-3.png', 3, '2023-12-12 21:18:25', '2023-12-12 21:18:25'),
(7, 3, NULL, 'uploads/products/ac-quy-varta-agm-ln4-1.png', 'ac-quy-varta-agm-ln4-1.png', 0, '2023-12-13 00:29:59', '2023-12-13 00:29:59'),
(8, 3, NULL, 'uploads/products/ac-quy-varta-agm-ln4-2.png', 'ac-quy-varta-agm-ln4-2.png', 1, '2023-12-13 00:29:59', '2023-12-13 00:29:59'),
(9, 3, NULL, 'uploads/products/ac-quy-varta-agm-ln4-3.png', 'ac-quy-varta-agm-ln4-3.png', 2, '2023-12-13 00:29:59', '2023-12-13 00:29:59'),
(10, 3, NULL, 'uploads/products/ac-quy-varta-agm-ln4-4.png', 'ac-quy-varta-agm-ln4-4.png', 3, '2023-12-13 00:29:59', '2023-12-13 00:29:59'),
(11, 4, NULL, 'uploads/products/varta-65b24l-1.png', 'varta-65b24l-1.png', 0, '2023-12-13 00:34:25', '2023-12-13 00:34:25'),
(12, 4, NULL, 'uploads/products/varta-65b24l-2.png', 'varta-65b24l-2.png', 1, '2023-12-13 00:34:25', '2023-12-13 00:34:25'),
(13, 4, NULL, 'uploads/products/varta-65b24l-3.png', 'varta-65b24l-3.png', 2, '2023-12-13 00:34:25', '2023-12-13 00:34:25'),
(14, 4, NULL, 'uploads/products/varta-65b24l-4.png', 'varta-65b24l-4.png', 3, '2023-12-13 00:34:25', '2023-12-13 00:34:25'),
(15, 5, NULL, 'uploads/products/varta-60044-din100-1.png', 'varta-60044-din100-1.png', 0, '2023-12-13 00:39:08', '2023-12-13 00:39:08'),
(16, 5, NULL, 'uploads/products/varta-60044-din100-2.png', 'varta-60044-din100-2.png', 1, '2023-12-13 00:39:08', '2023-12-13 00:39:08'),
(17, 5, NULL, 'uploads/products/varta-60044-din100-4.png', 'varta-60044-din100-4.png', 2, '2023-12-13 00:39:08', '2023-12-13 00:39:08'),
(18, 5, NULL, 'uploads/products/varta-60044-din100-33.png', 'varta-60044-din100-33.png', 3, '2023-12-13 00:39:08', '2023-12-13 00:39:08'),
(19, 6, NULL, 'uploads/products/varta-61038-din110-1.png', 'varta-61038-din110-1.png', 0, '2023-12-13 00:46:28', '2023-12-13 00:46:28'),
(20, 6, NULL, 'uploads/products/varta-61038-din110-2.png', 'varta-61038-din110-2.png', 1, '2023-12-13 00:46:28', '2023-12-13 00:46:28'),
(21, 6, NULL, 'uploads/products/varta-61038-din110-3.png', 'varta-61038-din110-3.png', 2, '2023-12-13 00:46:28', '2023-12-13 00:46:28'),
(22, 6, NULL, 'uploads/products/varta-61038-din110-4.png', 'varta-61038-din110-4.png', 3, '2023-12-13 00:46:28', '2023-12-13 00:46:28'),
(23, 7, NULL, 'uploads/products/gs-q-85-1.png', 'gs-q-85-1.png', 0, '2023-12-13 01:49:58', '2023-12-13 01:49:58'),
(24, 7, NULL, 'uploads/products/gs-q-85-2.png', 'gs-q-85-2.png', 1, '2023-12-13 01:49:58', '2023-12-13 01:49:58'),
(25, 7, NULL, 'uploads/products/gs-q-85-3.png', 'gs-q-85-3.png', 2, '2023-12-13 01:49:58', '2023-12-13 01:49:58'),
(26, 7, NULL, 'uploads/products/gs-q-85-4.png', 'gs-q-85-4.png', 3, '2023-12-13 01:49:58', '2023-12-13 01:49:58');

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
(15, '2023_12_12_083426_add_unit_to_products_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `tolal` decimal(8,2) NOT NULL,
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
  `price` decimal(8,2) NOT NULL
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
(2, 'ẮC QUY VARTA Q85 115D23L 12V 70AH', 'Chủng loại: EFB, ắc quy khô (miễn bảo dưỡng)\nĐiện áp: 12V\nDung lượng: 70AH\nCCA (SAE): 660A\nCông năng: Khởi động piston ô tô, nguồn hỗ trợ thiết bị mở rộng & tiện ích trên xe\nCông nghệ: I-Stop, Start-Stop, Auto Hold\nKích thước (dài x rộng x cao): 230 x 173 x 225 mm\nThương hiệu: VARTA®\nPhân khúc: VARTA® Silver Dynamic\nNhà sản xuất: Clarios Delkor Corporation\nNơi sản xuất: Hàn Quốc\nBảo hành: 9 tháng (Bảo hành điện tử cùng tem chống hàng giả)', 2380000.00, 20, 1, 15, '2023-12-12 21:18:25', '2023-12-12 21:18:25', 'Cái'),
(3, 'ẮC QUY VARTA AGM LN4 580901080 12V - 80AH (ECO/START-STOP PLUS)', 'OEM: Thương hiệu Varta là sản phẩm lắp ráp theo xe và khuyên dùng cho các dòng xe sang: Mercedes-Benz, BMW, Maserati, Bentley, Volswagen...\r\nChủng loại: Ắc quy công nghệ AGM 100%\r\nMã bình: LN4 580901080\r\nDung lượng: 80Ah\r\nDòng khởi động: 800A\r\nPhân khúc: VARTA® Silver Dynamic AGM\r\nKích thước (dài * rộng * cao):314 x 174 x 188 mm\r\nThương hiệu: VARTA®\r\nCông nghệ: ECO, START-STOP PLUS\r\nNơi sản xuất: Hàn Quốc\r\nNhà sản xuất: Clarios - Johnson Controls\r\nTrọng lượng: 23,5 kg', 4810000.00, 20, 1, 15, '2023-12-13 00:29:59', '2023-12-13 00:29:59', 'Cái'),
(4, 'ẮC QUY VARTA 65B24LS NX100-S6LS 12V - 50AH', 'Mã sản phẩm: Varta 65B24LS\r\nSố hiệu: NX100-S6LS\r\nĐiện áp: 12V\r\nDung lượng: 50Ah\r\nChỉ số Dòng khởi động (CCA): 390A\r\nKích thước (Dài x Rộng x Cao): 237X126X225 mm\r\nLoại cọc: cọc nổi\r\nLoại bình: Ắc quy khô kín khí, miễn bảo dưỡng (MF)\r\nMàu sắc: Trắng xanh\r\nXuất xứ: Nhập khẩu từ Hàn Quốc\r\nBảo hành chính hãng 9 tháng, 6 tháng với xe Taxi, GrabMã sản phẩm: Varta 65B24LS\r\nSố hiệu: NX100-S6LS\r\nĐiện áp: 12V\r\nDung lượng: 50Ah\r\nChỉ số Dòng khởi động (CCA): 390A\r\nKích thước (Dài x Rộng x Cao): 237X126X225 mm\r\nLoại cọc: cọc nổi\r\nLoại bình: Ắc quy khô kín khí, miễn bảo dưỡng (MF)\r\nMàu sắc: Trắng xanh\r\nXuất xứ: Nhập khẩu từ Hàn Quốc\r\nBảo hành chính hãng 9 tháng, 6 tháng với xe Taxi, Grab', 1199000.00, 20, 1, 15, '2023-12-13 00:34:25', '2023-12-13 00:34:25', 'Cái'),
(5, 'ẮC QUY VARTA 60044 DIN100(L) 12V - 100AH', 'Mã sản phẩm: 60044 DIN100\r\nĐiện áp: 12V\r\nDung lượng: 100AH\r\nChỉ số CCA: 760\r\nKích thước (Dài x Rộng x Cao): 354 x 174 x 188 (mm)\r\nLoại bình: Ắc quy khô kín khí\r\nLoại cọc: Cọc L, DIN\r\nMàu sắc: Thân màu trắng, mặt bình màu xanh\r\nXuất xứ: Hàn Quốc', 2580000.00, 20, 1, 15, '2023-12-13 00:39:08', '2023-12-13 00:39:08', 'Cái'),
(6, 'ẮC QUY VARTA 61038 DIN110 12V - 110AH', 'Mã sản phẩm: Varta 61038\r\nSố hiệu: DIN110\r\nĐiện áp: 12V\r\nDung lượng: 110 Ah\r\nChỉ số Dòng khởi động (CCA): 900A\r\nKích thước (Dài x Rộng x Cao): 393X174X188 mm\r\nLoại cọc: cọc chìm\r\nLoại bình: Ắc quy khô kín khí, miễn bảo dưỡng (MF)\r\nMàu sắc: Xanh lam, bạc\r\nXuất xứ: Nhập khẩu từ Hàn Quốc', 3150000.00, 20, 1, 15, '2023-12-13 00:46:28', '2023-12-13 00:46:28', 'Cái'),
(7, 'ẮC QUY GS Q85 MF 12V - 65AH', 'Mã sản phẩm: Q85 MF 12V - 65AH\r\nCông nghệ: Start-Stop Technology, I-Stop\r\nChỉ số CCA: 520A\r\nDung lượng: 65AH (20Hr)\r\nĐiện áp: 12Volt\r\nKích thước (Dài x Rộng x Cao): 230 x 172 x 200 (mm)\r\nLoại bình: Ắc quy khí khô, miễn bảo dưỡng\r\nLoại cọc: Cọc trái, chuẩn cọc to\r\nXuất xứ: Thái Lan, bình ắc quy được lắp mặc định trên xe Mazda 3, Mazda 6, Mazda CX-5, Mazda CX-8\r\nThương hiệu: GS ắc quy số 1 tại Nhật Bản', 1999000.00, 20, 1, 16, '2023-12-13 01:49:58', '2023-12-13 01:49:58', 'Cái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `avatar`, `address`, `phone`, `email`) VALUES
(15, 'VARTA', 'uploads/suppliers/varta-logo.png', '66 Vũ Trọng Khánh - Phường Mộ Lao - Quận Hà Đông', '0816668898', 'vartabattery88@gmail.com'),
(16, 'GS', 'uploads/suppliers/GS-logo.png', '631 Ngô Gia Tự, phường Đức Giang, quận Long Biên, TP Hà Nội', '1900555562', 'saleshn@gsbattery.vn'),
(17, 'PINACO', 'uploads/suppliers/logopinaco.png', '321, Trần Hưng Đạo, P.Cô Giang, Q.1, Tp.HCM', '02839203061', 'Pinaco@pinaco.com.vn'),
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
(1, 'Trương Công Đức', 'truongcongduc2004@gmail.com', NULL, NULL, 1, NULL, '$2y$12$PApCtLlZn0f9X6Tc9NW/ruutOxi/N31kO7ERshe8m1KPIszhcr4dS', NULL, '2023-12-11 08:00:55', '2023-12-11 08:00:55'),
(2, 'Phạm Vinh Quang', 'phamvinhquang14042003@gmail.com', NULL, NULL, 1, NULL, '$2y$12$3DGHN8JJJoChTxE7x9xc9.tHsnvMHSWWvgToPZFcmyejGsPpzihtC', NULL, '2023-12-12 20:48:54', '2023-12-12 20:48:54');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
