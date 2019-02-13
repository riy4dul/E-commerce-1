-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebazzarbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(14, 'Women\'s', '2018-09-26 18:04:25', '2018-09-26 18:04:25'),
(15, 'Men\'s', '2018-09-26 18:04:35', '2018-09-26 18:04:35'),
(16, 'Electronics', '2018-09-26 18:04:45', '2018-09-26 18:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email_address`, `password`, `phone_number`, `created_at`, `updated_at`) VALUES
(13, 'swat', 'swat@gmail.com', '$2y$10$nZwcsdbPKqe4auhcJji8gunc8K3F9tCYGONo1hCGzuQvvsNlAyzpK', '123456789', '2018-10-03 23:41:18', '2018-10-03 23:41:18'),
(14, 'Uzzal Kar', 'uzzal@gamil.com', '$2y$10$q/Clbm8dYr7yCV5mNX.c2OTuk5LOw4ofvmi1rMvKqSJTSCYFudE4m', '01676275506', '2018-10-03 23:58:20', '2018-10-03 23:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_09_27_051424_create_categories_table', 1),
(9, '2018_09_27_064652_create_products_table', 1),
(10, '2018_09_28_191313_create_customers_table', 2),
(11, '2018_09_29_062105_create_shippings_table', 3),
(12, '2018_09_29_070859_create_orders_table', 4),
(13, '2018_09_29_071956_create_payments_table', 5),
(14, '2018_09_29_072636_add_order_id_to_payments_table', 6),
(15, '2018_09_29_073009_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(8,2) NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(13, 13, 14, 1999.00, 'Delivered', '2018-10-03 23:41:45', '2018-10-03 23:55:40'),
(14, 14, 15, 5940.00, 'Pending', '2018-10-03 23:59:25', '2018-10-03 23:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(9, 13, 19, 'Gaming Headphone', 1999.00, 1, '2018-10-03 23:41:45', '2018-10-03 23:41:45'),
(10, 14, 8, 'Saree', 2970.00, 2, '2018-10-03 23:59:25', '2018-10-03 23:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_type`, `payment_status`, `created_at`, `updated_at`, `order_id`) VALUES
(10, 'Cash', 'Pending', '2018-10-03 23:41:45', '2018-10-03 23:41:45', 13),
(11, 'Cash', 'Pending', '2018-10-03 23:59:25', '2018-10-03 23:59:25', 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_price`, `product_quantity`, `description`, `price`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 14, 'Cotton Sweater', 500.00, 5, 'Product Type: Sweater\r\nMain Material: Cotton', NULL, 'cotton-sweater-2018-09-28.jpg', 1, '2018-09-28 13:31:24', '2018-09-28 13:31:24'),
(2, 14, 'Georgette Lehenga', 2100.00, 5, 'Product Type: Lehenga\r\nColor: Red and Golden', NULL, 'georgette-lehenga-2018-09-28.jpg', 1, '2018-09-28 13:34:16', '2018-09-28 13:34:16'),
(4, 14, 'Leather Hand Bag', 10650.00, 5, 'Product Type: Hand Bag\r\nColor: Dark Brown', NULL, 'leather-hand-bag-2018-09-28.jpg', 1, '2018-09-28 13:37:43', '2018-09-28 13:37:43'),
(5, 14, 'Leather Ballerinas', 2124.00, 5, 'Product Type: Ballerinas\r\nMain Material: Leather', NULL, 'leather-ballerinas-2018-09-28.jpg', 1, '2018-09-28 13:39:07', '2018-09-28 13:39:07'),
(6, 14, 'Pink Blazer', 3280.00, 5, 'Product Type: Blazer\r\nColor: Pink', NULL, 'pink-blazer-2018-09-28.jpg', 1, '2018-09-28 13:40:41', '2018-09-28 13:40:41'),
(7, 14, 'Salwar Kameez', 1550.00, 5, 'Product Type: Salwar Kameez\r\nColor: White and Black', NULL, 'salwar-kameez-2018-09-28.jpg', 1, '2018-09-28 13:43:02', '2018-09-28 13:43:02'),
(8, 14, 'Saree', 2970.00, 5, 'Product Type: Saree\r\nColor: White and Res', NULL, 'saree-2018-09-28.jpg', 1, '2018-09-28 13:44:58', '2018-09-28 13:44:58'),
(9, 14, 'Sleeve Shirt', 450.00, 5, 'Main Material: Cotton\r\nStylish and fashionable', NULL, 'sleeve-shirt-2018-09-28.jpg', 1, '2018-09-28 13:46:38', '2018-09-28 13:46:38'),
(10, 14, 'Golden Jhapta', 1690.00, 5, 'Good quality product\r\nHigh quality material', NULL, 'golden-jhapta-2018-09-29.jpg', 1, '2018-09-28 21:21:51', '2018-09-28 21:21:51'),
(18, 16, 'Mi Notebook', 68700.00, 5, '13.3\" 7th Gen Core i5 8GB/\r\n256GB SSD /2GB Graphics', NULL, 'mi-notebook-2018-09-29.jpg', 1, '2018-09-28 22:42:46', '2018-09-28 22:42:46'),
(19, 16, 'Gaming Headphone', 1999.00, 5, 'Style: Headband\r\nCommunication: Wired', NULL, 'gaming-headphone-2018-09-29.jpg', 1, '2018-09-28 22:52:51', '2018-09-28 22:52:51'),
(20, 16, 'iMac', 135000.00, 2, 'Intel Core i5 (7th gen)\r\n 8GB RAM - 1TB HDD - 21.5', NULL, 'imac-2018-09-29.jpg', 1, '2018-09-28 22:54:44', '2018-09-28 22:54:44'),
(21, 16, 'Game Pad', 710.00, 5, 'With built-in motors for dual vibration\r\nUnique and delicate design', NULL, 'game-pad-2018-09-29.jpg', 1, '2018-09-28 22:57:40', '2018-09-28 22:57:40'),
(22, 16, 'CCTV Camera', 1615.00, 5, 'Image Sensor: 1/3” CMOS Sensor\r\nResolution : 720P HD (1280x720)', NULL, 'cctv-camera-2018-09-29.jpg', 1, '2018-09-28 22:58:41', '2018-09-28 22:58:41'),
(23, 16, 'Memory Card', 550.00, 5, 'Class 4 MicroSD Memory Card', NULL, 'memory-card-2018-09-29.jpg', 1, '2018-09-28 22:59:59', '2018-09-28 22:59:59'),
(24, 16, 'Bluetooth Earphone', 3000.00, 5, 'Hybrid technology\r\nStyle: In-Ear', NULL, 'bluetooth-earphone-2018-09-29.jpg', 1, '2018-09-28 23:05:15', '2018-09-28 23:06:29'),
(25, 16, 'Mirrorless Camera', 42900.00, 5, '24.3MP APS-C Exmor APS HD \r\nBIONZ X Image Processor', NULL, 'mirrorless-camera-2018-09-29.jpg', 1, '2018-09-28 23:08:50', '2018-09-28 23:08:50'),
(26, 16, 'Camera Cannon', 47900.00, 5, 'Camera type: DSLR\r\n24.2 Megapixel APS-C', NULL, 'camera-cannon-2018-09-29.jpg', 1, '2018-09-28 23:10:13', '2018-09-28 23:10:13'),
(27, 16, 'Sony Camera', 84200.00, 5, '24.2MP APS-C Exmor\r\nBIONZ X Image Processo', NULL, 'sony-camera-2018-09-29.jpg', 1, '2018-09-28 23:12:27', '2018-09-28 23:27:15'),
(28, 16, 'Digital Camera', 98000.00, 5, 'Pixels - 16.3MP\r\n2.8-inch TFT color LCD', NULL, 'digital-camera-2018-09-29.jpg', 1, '2018-09-28 23:13:25', '2018-09-28 23:13:25'),
(29, 16, 'Alpha Camera', 201800.00, 5, 'No return policy after delivered\r\n24MP Full-Frame Exmor R BSI', NULL, 'alpha-camera-2018-09-29.jpg', 1, '2018-09-28 23:15:28', '2018-09-28 23:15:28'),
(30, 16, 'Waterproof Camera', 6999.00, 5, 'Wireless 4K Action Camera\r\n155 Degree Wide Lens', NULL, 'waterproof-camera-2018-09-29.jpg', 1, '2018-09-28 23:17:01', '2018-09-28 23:17:01'),
(31, 16, 'Hero 5 Camera', 32500.00, 5, 'Product type: Action cam\r\nCapture 12MP Photos at 30fps', NULL, 'hero-5-camera-2018-09-29.jpg', 1, '2018-09-28 23:19:09', '2018-09-28 23:19:09'),
(32, 16, 'Yi 4K Camera', 16000.00, 5, 'Effective MegaPixel: About 12MP\r\nNightShot Function: Yes', NULL, 'yi-4k-camera-2018-09-29.jpg', 1, '2018-09-28 23:20:43', '2018-09-28 23:20:43'),
(33, 16, 'H9R Camera', 5750.00, 5, '2-inch LCD Display\r\n4K video and 12MP photos', NULL, 'h9r-camera-2018-09-29.jpg', 1, '2018-09-28 23:22:31', '2018-09-28 23:22:31'),
(34, 16, 'SJ6 Camera', 13500.00, 5, 'Waterproof housing \r\nMN34120PA CMOS sensor', NULL, 'sj6-camera-2018-09-29.jpg', 1, '2018-09-28 23:27:00', '2018-09-28 23:27:00'),
(35, 15, 'Casual Shoe', 3500.00, 5, 'Product Type: Shoe\r\nColor: Brown', NULL, 'casual-shoe-2018-09-29.jpg', 1, '2018-09-28 23:32:48', '2018-09-28 23:32:48'),
(37, 15, 'Sleeve Blazer', 3350.00, 6, 'Product Type: Blazer\r\nColor: Gra', NULL, 'sleeve-blazer-2018-09-29.jpg', 1, '2018-09-28 23:34:56', '2018-09-28 23:34:56'),
(39, 15, 'Motorcycle Backpack', 20999.00, 5, 'Hidden zipper\r\nMaterial: High-grade polyester', NULL, 'motorcycle-backpack-2018-09-29.jpg', 1, '2018-09-28 23:37:29', '2018-09-28 23:37:29'),
(40, 15, 'Tread Bagpack', 7200.00, 5, 'Overnighter Space\r\nAer-Zone Back Comfor', NULL, 'tread-bagpack-2018-09-29.jpg', 1, '2018-09-28 23:38:38', '2018-09-28 23:38:38'),
(41, 15, 'Leather Sneakers', 2800.00, 5, 'Product Type: Ankle Sneakers\r\nColor: Chocolate', NULL, 'leather-sneakers-2018-09-29.jpg', 1, '2018-09-28 23:40:11', '2018-09-28 23:40:11'),
(42, 15, 'Silk Ties', 2300.00, 5, 'Pure SIlk Tie (8CM)', NULL, 'silk-ties-2018-09-29.jpg', 1, '2018-09-28 23:41:43', '2018-09-28 23:41:43'),
(43, 15, 'Leather Belt', 12500.00, 5, 'Product Type: Belt\r\nColor: Black', NULL, 'leather-belt-2018-09-29.jpg', 1, '2018-09-28 23:42:33', '2018-09-28 23:42:33'),
(44, 15, 'Chronograph Watch', 62000.00, 5, 'Product Type: Watch\r\nBrand: TISSOT', NULL, 'chronograph-watch-2018-09-29.jpg', 1, '2018-09-28 23:44:37', '2018-09-28 23:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `company_name`, `email`, `telephone`, `address`, `created_at`, `updated_at`) VALUES
(14, 'Swat', 'Nomad', 'swat@gamil.com', '123456789', 'Farmget', '2018-10-03 23:41:42', '2018-10-03 23:41:42'),
(15, 'Uzzal Kar', 'Unknow', 'uzzal@gamil.com', '01676275506', 'Dhanmondi', '2018-10-03 23:59:23', '2018-10-03 23:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riyadul', 'riyadul@gmail.com', '$2y$10$FjBCCtWwZTYk62Y4rAjpJeKivJlFL2w408lGYoHWwBShJ4j95VlXu', 'PoK9REuLZizC5NbqV3ywU5mvqDnk4CFtnBzf18s6inKsxiZyODv9IpH1VgtA', '2018-09-25 17:23:43', '2018-09-25 17:23:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
