-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2022 at 11:29 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `em_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `brances`
--

CREATE TABLE `brances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `shop_issue_date` date NOT NULL,
  `shop_expiry_date` date NOT NULL,
  `shop_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_issue_date` date DEFAULT NULL,
  `home_expiry_date` date DEFAULT NULL,
  `home_file` text COLLATE utf8mb4_unicode_ci,
  `Project` text COLLATE utf8mb4_unicode_ci,
  `senapid_decision` text COLLATE utf8mb4_unicode_ci,
  `starowstwo_decision` text COLLATE utf8mb4_unicode_ci,
  `book` text COLLATE utf8mb4_unicode_ci,
  `water_test` text COLLATE utf8mb4_unicode_ci,
  `vantilation_report` text COLLATE utf8mb4_unicode_ci,
  `garbage` text COLLATE utf8mb4_unicode_ci,
  `electronic_contract` text COLLATE utf8mb4_unicode_ci,
  `bhp1` text COLLATE utf8mb4_unicode_ci,
  `bhp2` text COLLATE utf8mb4_unicode_ci,
  `bhp3` text COLLATE utf8mb4_unicode_ci,
  `bhp4` text COLLATE utf8mb4_unicode_ci,
  `krs` text COLLATE utf8mb4_unicode_ci,
  `oil_contract` text COLLATE utf8mb4_unicode_ci,
  `login_info` text COLLATE utf8mb4_unicode_ci,
  `ali_baba_contract` text COLLATE utf8mb4_unicode_ci,
  `beverage_contract` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brances`
--

INSERT INTO `brances` (`id`, `name`, `location`, `controller_name`, `acc_number`, `number`, `shop_issue_date`, `shop_expiry_date`, `shop_file`, `home_issue_date`, `home_expiry_date`, `home_file`, `Project`, `senapid_decision`, `starowstwo_decision`, `book`, `water_test`, `vantilation_report`, `garbage`, `electronic_contract`, `bhp1`, `bhp2`, `bhp3`, `bhp4`, `krs`, `oil_contract`, `login_info`, `ali_baba_contract`, `beverage_contract`, `email`, `password`, `Status`, `created_at`, `updated_at`) VALUES
(7, 'Harding Roberts', 'Lani Bruce', 'Isabella York', 'Maile Dejesus', 12272727, '2015-10-11', '1977-12-10', 'Dashboard  Adminto - Responsive Admin Dashboard Template (6).pdf', '2002-08-11', '2018-07-16', 'Datatables  Adminto - Responsive Admin Dashboard Template (4).pdf', 'Addison Cummings', 'Datatables  Adminto - Responsive Admin Dashboard Template (4).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (4).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (2).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (5).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'myw3schoolsimage (1).jpg', 'myw3schoolsimage (2).jpg', 'Dashboard  Adminto - Responsive Admin Dashboard Template (2).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (2).pdf', 'myw3schoolsimage.jpg', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'Dashboard  Adminto - Responsive Admin Dashboard Template (7).pdf', 'shop@gmail.com', '$2y$10$7pptuUg2.LxN9hjTFArnMOK191nAmIc5ICVg5p9/0sCKmoPmrZXeu', 1, '2022-08-17 10:18:37', '2022-09-25 02:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_date` date NOT NULL,
  `father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hour` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pp_issue_date` date NOT NULL,
  `pp_expiry_date` date NOT NULL,
  `passport_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_file` text COLLATE utf8mb4_unicode_ci,
  `update_passport_file` text COLLATE utf8mb4_unicode_ci,
  `rd_issue_date` date NOT NULL,
  `rd_expiry_date` date NOT NULL,
  `rd_file` text COLLATE utf8mb4_unicode_ci,
  `d_residence_file` text COLLATE utf8mb4_unicode_ci,
  `work_issue_date` date NOT NULL,
  `work_expiry_date` date NOT NULL,
  `work_file` text COLLATE utf8mb4_unicode_ci,
  `zus_date` date NOT NULL,
  `zus_dec` text COLLATE utf8mb4_unicode_ci,
  `work_contact_issue_date` date NOT NULL,
  `work_contact_expiry_date` date NOT NULL,
  `work_contact_file` text COLLATE utf8mb4_unicode_ci,
  `health_doc` text COLLATE utf8mb4_unicode_ci,
  `attachment1` text COLLATE utf8mb4_unicode_ci,
  `attachment2` text COLLATE utf8mb4_unicode_ci,
  `attachment3` text COLLATE utf8mb4_unicode_ci,
  `attachment4` text COLLATE utf8mb4_unicode_ci,
  `attachment5` text COLLATE utf8mb4_unicode_ci,
  `attachment6` text COLLATE utf8mb4_unicode_ci,
  `attachment7` text COLLATE utf8mb4_unicode_ci,
  `attachment8` text COLLATE utf8mb4_unicode_ci,
  `attachment9` text COLLATE utf8mb4_unicode_ci,
  `attachment10` text COLLATE utf8mb4_unicode_ci,
  `pasel_no` text COLLATE utf8mb4_unicode_ci,
  `shop_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_location_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_details` text COLLATE utf8mb4_unicode_ci,
  `contact_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `Status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(20) NOT NULL,
  `title` text,
  `lg_logo` varchar(255) DEFAULT NULL,
  `small_logo` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `title`, `lg_logo`, `small_logo`, `fav_icon`, `created_at`, `updated_at`) VALUES
(1, 'HRM', 'logo.png', 'dk.png', 'fav.png', NULL, '2022-10-05');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_08_04_052602_create_brances_table', 1),
(21, '2022_08_05_115830_create_employees_table', 2),
(22, '2022_08_21_081443_create_notifications_table', 2),
(23, '2022_10_04_063656_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shop_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `read_at` timestamp NULL DEFAULT NULL,
  `read_by_shop` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `employee_id`, `shop_id`, `type`, `data`, `read_at`, `read_by_shop`, `created_at`, `updated_at`) VALUES
(5, 15, 7, 'Residence Card Expired', 'Koch\'s residence card will expired with in 2 months.', '2022-08-26 08:33:05', '2022-08-26 14:33:26', '2022-08-26 08:31:07', '2022-08-26 08:33:26'),
(6, 13, 7, 'Work Contract Expired', 'Middleton\'s work contract will expired from today', '2022-08-26 08:33:05', '2022-08-26 14:33:26', '2022-08-26 08:31:07', '2022-08-26 08:33:26');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(2, 'role-create', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(3, 'role-edit', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(4, 'role-delete', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(5, 'employee-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(6, 'employee-create', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(7, 'employee-edit', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(8, 'employee-delete', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(9, 'brance-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(10, 'brance-create', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(11, 'brance-edit', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(12, 'brance-delete', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(13, 'web-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(14, 'web-create', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(15, 'web-edit', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(16, 'web-delete', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(17, 'user-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(18, 'user-create', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(19, 'user-edit', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(20, 'user-delete', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(21, 'activeemployee-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(22, 'inactiveemployee-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(23, 'passportexpire-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(24, 'rdexpiry-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22'),
(25, 'workpermitreport-list', 'web', '2022-10-05 05:24:22', '2022-10-05 05:24:22');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-10-05 05:24:35', '2022-10-05 05:24:35');

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
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1);

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
(4, 'hridoy', 'admin1@gmail.com', NULL, '$2y$10$EcDKVNoh3e0fiqTei448SOaUca6tFb1.WuveJtzXGgd3J/B1dK7eq', NULL, '2022-10-05 05:24:35', '2022-10-05 05:24:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brances`
--
ALTER TABLE `brances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brances`
--
ALTER TABLE `brances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
