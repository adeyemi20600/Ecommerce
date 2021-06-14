-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 07:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(255) NOT NULL,
  `customer_lastname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_repassword` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_gender` enum('male','female','others','') NOT NULL DEFAULT 'others'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_email`, `customer_password`, `customer_repassword`, `customer_address`, `customer_gender`) VALUES
(1, 'IDRIS', 'ADEYEMI', 'yinkayz4luv@gmail.com', '7f45f4b6eaca99e3998d21ae3dc3f7c5', '7f45f4b6eaca99e3998d21ae3dc3f7c5', 'djfmgvm', 'male'),
(2, 'adeyemi', 'idris', 'adewile@yahoo.com', '21314e18db1bac719b4efb1d574b3b47', '21314e18db1bac719b4efb1d574b3b47', '11, ayoakintokun street, Alagbole Akute, Ogun State.', 'male'),
(3, 'adeesho', 'adewale', 'adeesho@yahoo.com', '8e39ed2e95f4fe209df3b7461eed3cb8', '8e39ed2e95f4fe209df3b7461eed3cb8', '22,akinrogun street, Oke aro, Ogun State.', 'male'),
(4, 'adeyemi', 'adewole', 'Adeyemiadewole@yahoo.com', '7435b41912998f3a2877a1172e1b8990', '7435b41912998f3a2877a1172e1b8990', '11, adekotumbo street, onobanjo, Ogun state.', 'male'),
(5, 'ademeko', 'james', 'ademekojames@gmail.com', '8e39ed2e95f4fe209df3b7461eed3cb8', '8e39ed2e95f4fe209df3b7461eed3cb8', '22, addesoso street, igbada, Lagos State.', 'male'),
(6, 'Tobi', 'Abilaja', 'Tobiabilaja@yahoo.com', '6ef98486fabe1b68c2c96a7d4e08716c', '6ef98486fabe1b68c2c96a7d4e08716c', 'ademeko street, gbagada, lagos', 'female'),
(7, 'ademosho', 'adetayo', 'ademtayo@yahoo.com', '7f45f4b6eaca99e3998d21ae3dc3f7c5', '7f45f4b6eaca99e3998d21ae3dc3f7c5', '12 karounfayo street, agbado, Ogun State', 'male'),
(8, 'ademosho', 'adetayo', 'ademotayo@yahoo.com', '5181cd4e88aa19a45e95cd055b812945', '5181cd4e88aa19a45e95cd055b812945', '12 karounfayo street, agbado, Ogun State', 'male'),
(9, 'namota', 'Adenekan', 'namotaade@yahoo.com', '651b7269f46433970ef9ce6128d5aca7', '651b7269f46433970ef9ce6128d5aca7', '11, ademesho street, Ogun State', 'female'),
(10, 'Adeyemi', 'idris', 'idrisadeyemi@gmail.com', '7f45f4b6eaca99e3998d21ae3dc3f7c5', '7f45f4b6eaca99e3998d21ae3dc3f7c5', '11,Ayoakintokun Street, Alagbole Akute, Ogun State', 'male'),
(11, 'tobi', 'adeshola', 'tobi@yahoo.com', 'e86c3e01d84a2495fa9d92031c67b09a', 'e86c3e01d84a2495fa9d92031c67b09a', '11, adeshesan street, Lagos State', 'female');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2021_06_13_164708_create_products_table', 1);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_description` blob DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_keywords` varchar(255) DEFAULT NULL,
  `favourite_product` enum('yes','no') NOT NULL,
  `latest_product` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_cat`, `product_brand`, `product_description`, `product_image`, `product_keywords`, `favourite_product`, `latest_product`) VALUES
(1, 'band T-shirt', '5000', 'shirt', 'nike', 0x41206c6f6e67206c617374696e6720636c6f74686573206d6164652066726f6d203130302520636f74746f6e, 'shirt/shirt1.jpg', 'shirt, ladies, girls, nike', 'yes', 'yes'),
(2, 'slim T-shirt', '3000', 'shirt', 'Hugo Boss', 0x41206c6f6e67206c617374696e6720636f74746f6e20636c6f74686573206d6164652066726f6d203130302520636f74746f6e, 'shirt/shirt2.jpg', 'shirt, guys, Hugo Boss, cotton', 'no', 'yes'),
(3, 'amazi jacket', '10000', 'jacket', 'versace', 0x41206c6f6e67206c617374696e6720636c6f74686573206d6164652066726f6d203130302520636f74746f6e, 'men/men1.jpg', 'shirt,men,jacket, nike', 'yes', 'yes'),
(4, 'Office Shirt', '3000', 'shirt', 'armani', 0x41206c6f6e67206c617374696e67206f6666696365207368697274, 'men/men2.jpg', 'shirt, ladies, girls, nike', 'yes', 'yes'),
(5, 'stock jean', '6000', 'jean', 'Adidas', 0x41206c6f6e67206c617374696e6720616e6420756e666164696e67206a65616e, 'jeans/jean1.jpg', 'shirt, ladies, girls, Adidas, jean', 'yes', 'yes'),
(6, 'slack jean', '5000', 'jean', 'nike', 0x41206c6f6e67206c617374696e6720616e6420756e666164696e67206a65616e, 'jeans/jean4.jpg', 'shirt, ladies, girls, nike', 'yes', 'yes');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
