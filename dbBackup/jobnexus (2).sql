-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobnexus`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `applicant_status` varchar(255) NOT NULL,
  `applicant_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_details`
--

CREATE TABLE `application_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_title` varchar(255) NOT NULL,
  `application_employer_name` varchar(255) NOT NULL,
  `application_employee_name` varchar(255) NOT NULL,
  `application_employee_address` varchar(255) NOT NULL,
  `application_company_name` varchar(255) NOT NULL,
  `application_slug` varchar(255) NOT NULL,
  `application_description` longtext NOT NULL,
  `application_employee_image` longtext NOT NULL,
  `application_employee_cv` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_first_name` varchar(255) NOT NULL,
  `employee_middle_name` varchar(255) DEFAULT NULL,
  `employee_last_name` varchar(255) NOT NULL,
  `employee_address` varchar(255) NOT NULL,
  `employee_slug` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL,
  `employee_contact` varchar(255) NOT NULL,
  `employee_image` longtext NOT NULL,
  `employee_description` longtext NOT NULL,
  `employee_cv` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_education` varchar(255) DEFAULT NULL,
  `employee_work_experience` varchar(255) DEFAULT NULL,
  `employee_participation` varchar(255) DEFAULT NULL,
  `employee_training` varchar(255) DEFAULT NULL,
  `employee_fb_link` varchar(255) DEFAULT NULL,
  `employee_linkedin_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `employee_email`, `employee_password`, `employee_first_name`, `employee_middle_name`, `employee_last_name`, `employee_address`, `employee_slug`, `employee_status`, `employee_contact`, `employee_image`, `employee_description`, `employee_cv`, `created_at`, `updated_at`, `employee_education`, `employee_work_experience`, `employee_participation`, `employee_training`, `employee_fb_link`, `employee_linkedin_link`) VALUES
(1, 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'verified', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', '0000-00-00 00:00:00', '2024-05-03 03:18:12', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'beeenaya98@gmail.com', 'Binaya Koiralaa', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koirala', 'Binaya Koiralaa', 'Binaya Koirala', 'under verification', 'Binaya Koiralaa', '1714808199-Binaya Koiralaa.jpg', 'Binaya Koiralaa', '1714808200-Binaya Koiralaa.jpg', '0000-00-00 00:00:00', '2024-05-04 04:32:49', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'beeenaya98@gmail.com', '234567ghj', 'Binaya', 'asdfg', 'Koirala', 'Pokhara, Malepatan', 'Binaya', 'verified', '789456', '1714725950.Software Development (1).png', 'wertyuio sdfghjkl; dfghjkl cvbnm,.', '1714725950.lineup.png', '2024-05-03 03:00:50', '2024-05-03 03:29:17', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_email` varchar(255) NOT NULL,
  `employer_password` varchar(255) NOT NULL,
  `employer_first_name` varchar(255) NOT NULL,
  `employer_middle_name` varchar(255) DEFAULT NULL,
  `employer_last_name` varchar(255) NOT NULL,
  `employer_address` varchar(255) NOT NULL,
  `employer_slug` varchar(255) NOT NULL,
  `employer_status` varchar(255) NOT NULL,
  `employer_contact` varchar(255) NOT NULL,
  `employer_company_name` varchar(255) NOT NULL,
  `employer_image` longtext NOT NULL,
  `employer_description` longtext NOT NULL,
  `employer_certificate` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`id`, `employer_email`, `employer_password`, `employer_first_name`, `employer_middle_name`, `employer_last_name`, `employer_address`, `employer_slug`, `employer_status`, `employer_contact`, `employer_company_name`, `employer_image`, `employer_description`, `employer_certificate`, `created_at`, `updated_at`) VALUES
(1, 'beeenaya98@gmail.com', 'abcdef', 'Binaya', NULL, 'Koirala', 'Pokhara, Malepatan', 'Binaya', 'verified', '89465132', 'ABC', '1714216847.IMG_5393.JPG', 'sdfksdanlskgjna', '1714216847.IMG_5373.JPG', '2024-04-27 05:35:47', '2024-05-02 05:52:39'),
(2, 'ssunil11@gmail.com', 'suni123s', 'SuniL', NULL, 'Sapkotas', 'Pokhara, Malepatanss', 'SuniL', 'under verification', '8784555', 'LA GRANDEE INTERNATIONALs', '1714803662-SuniL.jpg', 'dbfjksbfd as askfd askfa fasx', '1714803662-SuniL.jpg', '2024-04-27 08:38:10', '2024-05-04 00:36:02'),
(4, 'EMp1@gmail.com', 'EMp1', 'EMp1', 'EMp1', 'EMp1', 'EMp1', 'EMp1', 'verified', '7894562', 'EMp1', '1714578522.lineup.png', 'mnjkznzxv cvBVZXM ZXVNmx vm, zxv x', '1714578522.Physical-structure-diagram-of-distributed-database-system.png', '2024-05-01 10:03:42', '2024-05-02 06:38:39'),
(5, 'dp45@gmail.com', 'dp123', 'Dipendra', 'Sing', 'Airee', 'Baitadi', 'Dipendra', 'under verification', '789455425', 'CAN', '1714804166-Dipendra.jpg', 'asdfg wertyu xcvbn fghjkl fghjkl', '1714804166-Dipendra.jpg', '2024-05-02 04:12:16', '2024-05-04 00:44:26');

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
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `job_address` varchar(255) NOT NULL,
  `job_company_name` varchar(255) NOT NULL,
  `job_experience` varchar(255) NOT NULL,
  `job_max_salary` varchar(255) NOT NULL,
  `job_min_salary` varchar(255) NOT NULL,
  `job_slug` varchar(255) NOT NULL,
  `job_status` varchar(255) NOT NULL,
  `job_contact` varchar(255) NOT NULL,
  `job_validity` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_hour` varchar(255) NOT NULL,
  `job_description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_posted_by` varchar(255) NOT NULL,
  `job_requirements` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `job_title`, `job_category`, `job_address`, `job_company_name`, `job_experience`, `job_max_salary`, `job_min_salary`, `job_slug`, `job_status`, `job_contact`, `job_validity`, `job_type`, `job_hour`, `job_description`, `created_at`, `updated_at`, `job_posted_by`, `job_requirements`) VALUES
(2, 'Electrician', 'SemiSkilled', 'Kathmandu', 'Pokhara Plumbers', '2years', '40000', '20000', 'Electrician', 'Not Verified', '989898898', '2024-05-17', 'Full Time', '10-4', 'This is job vacancy post for Plumber', '2024-05-06 03:00:02', '2024-05-06 20:53:32', '', ''),
(3, 'Plumber', 'SemiSkilled', 'Pokhara', 'Pokhara Plumbers', '2years', '40000', '20000', 'Plumber', 'verified', '989898898', '2024-05-17', 'Full Time', '10-4', 'This is job vacancy post for Plumber', '2024-05-06 03:32:20', '2024-05-06 03:32:31', '', ''),
(4, 'Pharmacist', 'Medical', 'OKM', 'Xatay Medical', '1yrs', '50000', '30000', 'Pharmacist', 'Not Verified', '78788787', '2024-05-15', 'Full TIme', '10-4', 'This is for Pharmacist', '2024-05-11 02:27:43', '2024-05-11 02:27:43', '', ''),
(5, 'Teacher', 'Education', 'Simalchaur', 'LA GRANDEE', '2yrs', '45000', '35000', 'Teacher', 'verified', '141414141', '2024-05-18', 'Full Time', '10-4', 'Vacancy Post for teacher.', '2024-05-11 07:39:10', '2024-05-12 19:46:36', '', ''),
(6, 'Security Guard', 'Security Guard', 'Security Guard', 'Security Guard', '8yrs', '1000000', '500000', 'Security Guard', 'Not Verified', '234567890', '2024-05-21', 'Full Time', '10-4', 'This is job vacancy post for Security Guard', '2024-05-12 19:40:21', '2024-05-12 19:46:41', '', ''),
(7, 'Book Keeper', 'Education', 'Butwal', 'Butwal Books and Services', '1 year', '30000', '15000', 'Book Keeper', 'Not Verified', '9816188459', '15-05-2024', 'Full Timer', '11-6', 'This is job desc for book keeper.', '2024-05-14 21:17:15', '2024-05-14 21:17:15', '', ''),
(8, 'Salesman', 'Marketing', 'Kathmandu', 'Kathmandu Bakery', '1 year', '30000', '15000', 'Salesman', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc for sales man', '2024-05-14 22:54:16', '2024-05-14 22:54:16', '', ''),
(9, 'Teacher', 'Marketing', 'Kathmandu', 'Kathmandu Bakery', '1 year', '30000', '15000', 'Teacher', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc for teacher', '2024-05-15 03:08:37', '2024-05-15 03:08:37', '', ''),
(10, 'Receptionist', 'Marketing', 'Kathmandu', 'KTM Consulting', '1 year', '30000', '15000', 'Receptionist', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc receptionist', '2024-05-16 00:02:47', '2024-05-16 00:02:47', '', '');

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
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2024_04_22_053346_employer__details', 1),
(48, '2024_04_22_053512_employee__details', 1),
(49, '2024_04_22_053529_job__details', 1),
(50, '2024_04_22_055025_application__details', 1),
(51, '2024_05_05_072404_job_details', 2),
(52, '2014_10_12_100000_create_password_resets_table', 3),
(53, '2024_04_22_053346_wishlist_details', 3),
(54, '2024_05_05_072404_application', 3),
(55, '2024_05_30_152814_category_details', 3),
(56, '2024_06_03_080731_add_job_posted_by_to_job_details_table', 3),
(57, '2024_06_04_103641_create_sessions_table', 3),
(58, '2024_06_26_033212_contact_to_users_table', 4),
(59, '2024_06_26_150015_add_employee_education_to_employee_details', 5);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `sessions`
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `contact`, `role`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$12$may9dagcMAp5EyVo.sRDfOX6Eb4NGy.8nd.3opeI/evUNhmEd3oYO', NULL, '2024-06-25 21:50:24', '2024-06-25 21:50:24', '9840454572', 'admin'),
(2, 'Laxman Parajuli', 'parajulil385@gmail.com', NULL, '$2y$12$kiOLN99Tcoj3K5UxMYSk1.CbBlH1lYsudCPVx5t5ELDxBMvoHVo.i', NULL, '2024-06-25 21:51:42', '2024-06-25 21:51:42', '9806501357', 'admin'),
(3, 'Binaya Koirala', 'beeenaya98@gmail.com', NULL, '$2y$12$JwdGOiBB2c/T/.H3dDZTeO5EtDwYmnNzuAcBnNIy5xXaEfzfb.5zu', NULL, '2024-06-26 07:54:04', '2024-06-26 07:54:04', '9840454572', 'user'),
(4, 'Aakrity Chapagai', 'aakritycpg@gmail.com', NULL, '$2y$12$BpjmduYqjMiRgRWtjDWl7uymV1osETlHFSXnSVi.M3s.flz9.EpXG', NULL, '2024-06-26 08:06:30', '2024-06-26 08:06:30', '9898989899', 'admin'),
(5, 'asd', 'asd@gmail.com', NULL, '$2y$12$oMe4R0AdMtD4FI8eIDvvjOoVKPysh5cy8KP1aE9/a1jTKcdthIXvi', NULL, '2024-06-26 09:02:53', '2024-06-26 09:02:53', '98404444', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_details`
--

CREATE TABLE `wishlist_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
