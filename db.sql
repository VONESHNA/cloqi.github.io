-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `customer` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `billtoken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `created`, `updated`, `customer`, `firstname`, `lastname`, `email`, `contact`, `address`, `city`, `pincode`, `landmark`, `billtoken`) VALUES
(1, '2025-02-16 08:37:40', NULL, '1', '', '', '', '', '', '', '', '', '1'),
(2, '2025-02-16 08:47:02', NULL, '1', '', '', '', '8907896789', '456, street 10', 'Los Angeles', '123456', 'tree house', '2'),
(3, '2025-03-02 07:40:25', NULL, '5', 'Malini', 'Mehta', 'metha@mail.co', '1234567890', 'test address', 'LA', '123456', 'Tree House', '3');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `created`, `updated`, `customer`, `product`, `size`, `quantity`) VALUES
(6, '2025-03-02 11:19:54', NULL, 0, 6, 'XL                                                  <input type=\"hidden\" id=\"size\" value=\"XL\">', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `created`, `updated`, `name`, `img`, `description`) VALUES
(1, '2025-02-16 08:05:47', '0000-00-00 00:00:00', 'men', 'category-3511740900391l9.jpg', 'men\'s wear'),
(2, '2025-02-16 08:06:07', '0000-00-00 00:00:00', 'women', 'category-3511740900375h3.jpg', 'women clothing'),
(3, '2025-02-16 08:06:25', '0000-00-00 00:00:00', 'Kid', 'category-3491740900226km.jpg', 'Kids apparel');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `created`, `updated`, `fullname`, `email`, `mobno`, `type`, `password`) VALUES
(1, '2025-02-16 07:51:22', NULL, 'Ujala', 'ujala@mail.co', '', 0, '123456'),
(2, '2025-02-16 07:53:03', NULL, 'Neha', 'neha@mail.co', '', 0, '123456'),
(3, '2025-02-16 07:54:00', NULL, 'Kabir', 'kabir@mail.co', '', 0, '123456'),
(4, '2025-02-16 07:55:13', NULL, 'Admin', 'admin@mail.co', '', 1, '123456'),
(5, '2025-03-02 07:34:14', NULL, 'Mohini', 'mohini@mail.co', '', 0, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2025_02_12_034126_create_members_table', 1),
(6, '2025_02_12_035251_create_category_table', 1),
(7, '2025_02_12_053048_create_product_table', 1),
(8, '2025_02_13_123452_create_carts_table', 1),
(9, '2025_02_13_235057_create_wishes_table', 1),
(10, '2025_02_14_011445_billitems__table', 1),
(11, '2025_02_14_011709_billingdetail__table', 1),
(12, '2025_02_14_011735_checkout_table', 1),
(13, '2025_02_14_173414_create_checkout_table', 1),
(14, '2025_02_14_173726_create_bill_table', 1),
(15, '2025_02_14_173904_create_order_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `billtoken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `created`, `updated`, `customer`, `product`, `size`, `quantity`, `billtoken`) VALUES
(1, '2025-02-16 08:37:40', NULL, 1, 6, 'M', 2, '1'),
(2, '2025-02-16 08:47:02', NULL, 1, 6, 'XL                                                  <input type=\"hidden\" id=\"size\" value=\"XL\">', 1, '2'),
(3, '2025-03-02 07:40:25', NULL, 5, 6, 'XL                                                  <input type=\"hidden\" id=\"size\" value=\"XL\">', 1, '3'),
(4, '2025-03-02 07:40:25', NULL, 5, 4, 'XL                                                  <input type=\"hidden\" id=\"size\" value=\"XL\">', 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image_1` longtext NOT NULL,
  `image_2` longtext NOT NULL,
  `image_3` longtext NOT NULL,
  `image_4` longtext NOT NULL,
  `image_5` longtext NOT NULL,
  `image_6` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `sellingprice` varchar(255) NOT NULL,
  `actualprice` varchar(255) NOT NULL,
  `xs` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `xl` int(11) NOT NULL,
  `xxl` int(11) NOT NULL,
  `xxxl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `created`, `updated`, `name`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `category`, `description`, `sellingprice`, `actualprice`, `xs`, `s`, `m`, `l`, `xl`, `xxl`, `xxxl`) VALUES
(1, '2025-02-16 08:16:49', '0000-00-00 00:00:00', 'funky kids sear', 'product-386173969380928.png', 'product-38717396938760b.png', 'product-38717396938768d.png', 'product-3871739693876is.png', 'product-3871739693876kq.png', 'product-387173969387627.png', '3', 'little champs funcky', '599', '799', 1, 0, 0, 0, 0, 0, 0),
(2, '2025-02-16 08:20:30', NULL, 'Pega kids', 'product-38917396940307x.png', 'product-3891739694030ov.png', 'product-3891739694030ll.png', 'product-3891739694030pk.png', 'product-3891739694030ua.png', 'product-3891739694030hv.png', '3', 'kids wear another', '990', '1000', 0, 2, 3, 4, 0, 0, 0),
(3, '2025-02-16 08:22:35', NULL, 'Women ewar', 'product-39017396941552o.png', 'product-3901739694155b2.png', 'product-3901739694155cb.png', 'product-39017396941555f.png', 'product-3901739694155ps.png', 'product-3901739694155xc.png', '2', 'women wear one', '1100', '1200', 0, 0, 3, 4, 5, 0, 0),
(4, '2025-02-16 08:24:05', NULL, 'Women wear two', 'product-3911739694245ru.png', 'product-3911739694245nr.png', 'product-39117396942459d.png', 'product-3911739694245kq.png', 'product-39117396942451t.png', 'product-3911739694245y6.png', '2', 'women wear another', '5000', '6000', 0, 2, 3, 4, 5, 0, 0),
(5, '2025-02-16 08:25:38', NULL, 'Men\'s wear', 'product-3921739694338iw.png', 'product-39217396943383s.png', 'product-39217396943389x.jpg', 'product-3921739694338dm.jpg', 'product-3921739694338si.png', 'product-3921739694338ro.png', '1', 'men wear', '6000', '7000', 0, 0, 0, 4, 5, 6, 7),
(6, '2025-02-16 08:26:55', NULL, 'men wear one', 'product-3931739694415vw.png', 'product-3931739694415rj.png', 'product-39317396944154c.png', 'product-393173969441546.png', 'product-3931739694415h5.png', 'product-3931739694415vt.png', '1', 'men wear one', '3000', '4000', 1, 2, 3, 4, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
