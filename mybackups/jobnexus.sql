-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 11:18 AM
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
  `user_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `applicant_status` varchar(255) NOT NULL,
  `applicant_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `user_id`, `job_id`, `applicant_status`, `applicant_description`, `created_at`, `updated_at`) VALUES
(3, '4', '4', 'accepted', 'Description for application 3', '2024-06-28 13:50:37', '2024-06-28 09:27:26'),
(4, '5', '5', 'accepted', 'Description for application 4', '2024-06-28 13:50:37', '2024-06-28 09:39:42'),
(6, '3', '7', 'pending', 'Description for application 6', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(7, '4', '8', 'pending', 'Description for application 7', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(8, '5', '9', 'pending', 'Description for application 8', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(10, '3', '2', 'accepted', 'Description for application 10', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(11, '4', '3', 'pending', 'Description for application 11', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(12, '5', '4', 'pending', 'Description for application 12', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(14, '3', '6', 'pending', 'Description for application 14', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(15, '4', '7', 'pending', 'Description for application 15', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(16, '5', '8', 'pending', 'Description for application 16', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(18, '3', '10', 'pending', 'Description for application 18', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(19, '4', '2', 'pending', 'Description for application 19', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(20, '5', '3', 'pending', 'Description for application 20', '2024-06-28 13:50:37', '2024-06-28 13:50:37'),
(24, '2', '4', 'rejected', 'Qui irure est vitae', '2024-06-29 00:11:13', '2024-06-29 00:11:13'),
(25, '2', '6', 'accepted', 'Qui irure est vitae', '2024-06-29 00:11:45', '2024-06-29 00:11:45'),
(26, '2', '2', 'rejected', 'Qui irure est vitae', '2024-06-29 00:17:52', '2024-06-29 00:17:52'),
(27, '2', '5', 'pending', 'Qui irure est vitae', '2024-06-29 01:09:17', '2024-06-29 01:09:17'),
(28, '2', '13', 'pending', 'Qui irure est vitae', '2024-06-29 01:12:28', '2024-06-29 01:12:28');

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

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_title`, `category_image`, `created_at`, `updated_at`) VALUES
(8, 'IT', '1719627078.IT.jpg', '2024-06-28 20:26:18', '2024-06-28 20:26:18'),
(9, 'Plumbing', '1719627159.Plumbing.jpg', '2024-06-28 20:27:39', '2024-06-28 20:27:39'),
(10, 'Education', '1719627174.Education.jpg', '2024-06-28 20:27:54', '2024-06-28 20:27:54'),
(11, 'Marketing', '1719627188.Marketing.png', '2024-06-28 20:28:08', '2024-06-28 20:28:08'),
(12, 'Volunteer', '1719627206.Volunteer.jpg', '2024-06-28 20:28:26', '2024-06-28 20:28:26'),
(13, 'Music', '1719627219.Music.jpg', '2024-06-28 20:28:39', '2024-06-28 20:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `employee_address` varchar(255) NOT NULL,
  `employee_slug` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL,
  `employee_image` longtext NOT NULL,
  `employee_cv` longtext DEFAULT NULL,
  `employee_description` longtext NOT NULL,
  `employee_education` longtext DEFAULT NULL,
  `employee_work_experience` longtext DEFAULT NULL,
  `employee_participation` longtext DEFAULT NULL,
  `employee_training` longtext DEFAULT NULL,
  `employee_fb_link` varchar(255) DEFAULT NULL,
  `employee_linkedin_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `user_id`, `employee_address`, `employee_slug`, `employee_status`, `employee_image`, `employee_cv`, `employee_description`, `employee_education`, `employee_work_experience`, `employee_participation`, `employee_training`, `employee_fb_link`, `employee_linkedin_link`, `created_at`, `updated_at`) VALUES
(1, '2', 'Delectus ut in et m', 'Delectus ut in et m', 'Inactive', '1719420293.karaage-isolated-transparent-background_191095-32647-removebg-preview.png', '1719420293.Binaya-Citizen-Front.jpg', 'Qui irure est vitae', 'Sunt enim voluptatib', 'Eos alias anim mini', 'Eius enim eos ut qu', 'Voluptate tempor et', 'Voluptate nemo qui n', 'Enim rerum pariatur', '2024-06-26 10:59:53', '2024-06-26 10:59:53'),
(2, '3', 'Ratione ab Nam venia', 'Ratione ab Nam venia', 'Inactive', '1719420395.Binaya-Citizen-Front.jpg', '1719420395.Binaya-Citizen-Back.jpg', 'Vero hic modi incidi', 'Velit dolor alias e', 'Illum esse qui dele', 'Fuga Qui voluptatib', 'Qui eligendi veniam', 'Occaecat quas tempor', 'Nihil animi itaque', '2024-06-26 11:01:35', '2024-06-26 11:01:35'),
(3, '4', 'Pokhara', 'Isabella Foley', 'verified', '1719420843.Binaya-Citizen-Front.jpg', '1719420843.Binaya-Citizen-Back.jpg', 'Vero hic modi incidi', 'Velit dolor alias e', 'Illum esse qui dele', 'Fuga Qui voluptatib', 'Qui eligendi veniam', 'Occaecat quas tempor', 'Nihil animi itaque', '2024-06-26 11:09:03', '2024-06-26 12:32:15'),
(4, '5', 'Exercitationem sint', 'Exercitationem sint', 'Inactive', '1719425888.oie_XIZUAUqCsWe9.jpg', '1719425888.Binaya-Citizen-Back.jpg', 'Occaecat veniam nih', 'Nam eum obcaecati fu', 'Lorem voluptatibus r', 'Nam cumque repudiand', 'Eveniet et velit of', 'Ullamco voluptas ab', 'Illum aperiam aute', '2024-06-26 12:33:08', '2024-06-26 12:33:08'),
(5, '6', 'Exercitationem sint', 'Binaya', 'verified', '1719425988.oie_XIZUAUqCsWe9.jpg', '1719425988.Binaya-Citizen-Back.jpg', 'Occaecat veniam nih', 'Nam eum obcaecati fu', 'Lorem voluptatibus r', 'Nam cumque repudiand', 'Hello', 'Ullamco voluptas ab', 'Illum aperiam aute', '2024-06-26 12:34:48', '2024-06-26 14:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_address` varchar(255) NOT NULL,
  `employer_slug` varchar(255) NOT NULL,
  `employer_status` varchar(255) NOT NULL,
  `employer_company_name` varchar(255) NOT NULL,
  `employer_pan_vat` varchar(255) DEFAULT NULL,
  `employer_image` longtext NOT NULL,
  `employer_description` longtext NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `employer_certificate` longtext DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`id`, `employer_address`, `employer_slug`, `employer_status`, `employer_company_name`, `employer_pan_vat`, `employer_image`, `employer_description`, `user_id`, `employer_certificate`, `company_website`, `created_at`, `updated_at`) VALUES
(1, 'Pokhara, Malepatan', '25', 'approved', 'KTM Consulting Pokhara', '123', '1719430113.Binaya-Citizen-Front.jpg', 'qwertyui sdfghjkl dfghjkl dfghjkl', '25', '1719430113.Binaya-Citizen-Back.jpg', 'https://www.laqojaxihika.org.uk', '2024-06-26 13:43:33', '2024-06-28 07:22:21'),
(2, 'Sit quod exercitatio', '26', 'approved', 'Wolf and Duffy LLC', 'Assumenda sequi blan', '1719431083.437045262_983409110177529_1207943669018372539_n.jpg', 'Molestias ipsum cons', '26', '1719431083.Physical-structure-diagram-of-distributed-database-system.png', 'https://www.duk.org.uk', '2024-06-26 13:59:43', '2024-06-26 13:59:43'),
(3, 'Tempore at officia', '27', 'approved', 'Gross and Garza Trading', 'Magna magna necessit', '1719431375.a9d7925990407a6f15f193dfdf3afb3c.png', 'Possimus quod liber', '27', '1719431375.cbece2592e4eee20ffb22de16baacc7a (1).jpg', 'https://www.jylameg.co', '2024-06-26 14:04:35', '2024-06-26 14:04:35'),
(4, 'Pokhara, Malepatan', 'Inactive', 'approved', 'KTM Consulting', '123wear', '1719560947.84a6e0bb-2665-4728-9eb4-919336f247c1.jpeg', 'qwertyui sdfghjkl dfghjkl dfghjkl', '1', '1719560947.Binaya-Citizen-Front.jpg', 'https://www.laqojaxihika.org.uk', '2024-06-28 02:04:07', '2024-06-28 08:41:30');

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
(2, 'Electrician', 'SemiSkilled', 'Kathmandu', 'Pokhara Plumbers', '2years', '40000', '20000', 'Electrician', 'Not Verified', '989898898', '2024-05-17', 'Full Time', '10-4', 'This is job vacancy post for Plumber', '2024-05-06 03:00:02', '2024-05-06 20:53:32', '1', ''),
(3, 'Plumber', 'SemiSkilled', 'Pokhara', 'Pokhara Plumbers', '2years', '40000', '20000', 'Plumber', 'verified', '989898898', '2024-05-17', 'Full Time', '10-4', 'This is job vacancy post for Plumber', '2024-05-06 03:32:20', '2024-05-06 03:32:31', '1', ''),
(4, 'Pharmacist', 'Medical', 'OKM', 'Xatay Medical', '1yrs', '50000', '30000', 'Pharmacist', 'verified', '78788787', '2024-05-15', 'Full TIme', '10-4', 'This is for Pharmacist', '2024-05-11 02:27:43', '2024-06-28 08:44:57', '1', ''),
(5, 'Teacher', 'Education', 'Simalchaur', 'LA GRANDEE', '2yrs', '45000', '35000', 'Teacher', 'verified', '141414141', '2024-05-18', 'Full Time', '10-4', 'Vacancy Post for teacher.', '2024-05-11 07:39:10', '2024-05-12 19:46:36', '1', ''),
(6, 'Security Guard', 'Security Guard', 'Security Guard', 'Security Guard', '8yrs', '1000000', '500000', 'Security Guard', 'Not Verified', '234567890', '2024-05-21', 'Full Time', '10-4', 'This is job vacancy post for Security Guard', '2024-05-12 19:40:21', '2024-05-12 19:46:41', '1', ''),
(8, 'Salesman', 'Marketing', 'Kathmandu', 'Kathmandu Bakery', '1 year', '30000', '15000', 'Salesman', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc for sales man', '2024-05-14 22:54:16', '2024-05-14 22:54:16', '25', ''),
(9, 'Teacher', 'Marketing', 'Kathmandu', 'Kathmandu Bakery', '1 year', '30000', '15000', 'Teacher', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc for teacher', '2024-05-15 03:08:37', '2024-05-15 03:08:37', '26', ''),
(10, 'Receptionist', 'Marketing', 'Kathmandu', 'KTM Consulting', '1 year', '30000', '15000', 'Receptionist', 'Not Verified', '9816188459', '2024-05-20', 'Part Time', '1pm-9pm', 'This is job desc receptionist', '2024-05-16 00:02:47', '2024-05-16 00:02:47', '27', ''),
(13, 'Blood Donation', '12', 'Pokhara', 'Red Cross', 'None', '200000', '100000', 'Blood Donation', 'Not Verified', '98989898', '2024-06-30', 'PART TIME', '6-8', 'This is volunteering post', '2024-06-28 21:23:30', '2024-06-28 21:23:30', '2', 'Nonee');

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
(59, '2024_06_26_150015_add_employee_education_to_employee_details', 5),
(60, '2024_06_26_152033_employee_details', 6),
(61, '2024_06_26_152230_employee_details', 7),
(62, '2024_06_26_154339_employee_details', 8),
(63, '2024_06_26_160749_employee_details', 9),
(64, '2024_06_26_163813_employee_details', 10),
(65, '2024_06_26_185957_employer_details', 11),
(66, '2024_06_28_134629_application', 12);

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
(2, 'Laxman Parajuli', 'parajulil385@gmail.com', NULL, '$2y$12$kiOLN99Tcoj3K5UxMYSk1.CbBlH1lYsudCPVx5t5ELDxBMvoHVo.i', NULL, '2024-06-25 21:51:42', '2024-06-25 21:51:42', '9806501357', 'user'),
(3, 'Binaya Koirala', 'beeenaya98@gmail.com', NULL, '$2y$12$JwdGOiBB2c/T/.H3dDZTeO5EtDwYmnNzuAcBnNIy5xXaEfzfb.5zu', NULL, '2024-06-26 07:54:04', '2024-06-26 07:54:04', '9840454572', 'user'),
(4, 'Aakrity Chapagai', 'aakritycpg@gmail.com', NULL, '$2y$12$BpjmduYqjMiRgRWtjDWl7uymV1osETlHFSXnSVi.M3s.flz9.EpXG', NULL, '2024-06-26 08:06:30', '2024-06-26 08:06:30', '9898989899', 'user'),
(5, 'asd', 'asd@gmail.com', NULL, '$2y$12$oMe4R0AdMtD4FI8eIDvvjOoVKPysh5cy8KP1aE9/a1jTKcdthIXvi', NULL, '2024-06-26 09:02:53', '2024-06-26 09:02:53', '98404444', 'user'),
(7, 'asds', 'asdt@gmail.com', NULL, '$2y$12$nw1Vg6r.eE6NyW7PbvwtsOZXTcy/loFAYyEtBuOG8flBowZ6lwAO6', NULL, '2024-06-26 09:50:26', '2024-06-26 09:50:26', '98404444', 'user'),
(24, 'Hop Rhodes', 'dexefacy@mailinator.com', NULL, '$2y$12$WBdYrnboYHtmdFQKKlh3mekA1mwYvbsMSeUlAyDZ0eQ4Lytz7UbQC', NULL, '2024-06-26 13:37:34', '2024-06-26 13:37:34', 'Error hic voluptatem', 'admin'),
(25, 'Updated Name', 'zecacivu@mailinator.com', NULL, '$2y$12$lyQQ.fxnf5sQcQnJsOjABOyaWy3p/uNT2EAVg5mLlmBgfx.A14EQK', NULL, '2024-06-26 13:43:08', '2024-06-26 14:33:16', 'Sequi necessitatibus', 'admin'),
(26, 'Karyn Duran', 'jyputibis@mailinator.com', NULL, '$2y$12$y9QTcpGfvFsxNPraJXMqTu2Sgd8nbiDEIbm1PMFzbP5f39V.Ytfga', NULL, '2024-06-26 13:59:14', '2024-06-26 13:59:14', 'Aliquip ut dolore co', 'admin'),
(27, 'Tate Mcclain', 'xifacitec@mailinator.com', NULL, '$2y$12$dP16SKY0PtyaKWGEZb0Jyu6GQW/unIbXgaxwdP/xUK5jAT4sAyeSO', NULL, '2024-06-26 14:03:58', '2024-06-26 14:03:58', 'Ad tempor molestiae', 'admin'),
(28, 'Teegan Aguirre', 'kuro@mailinator.com', NULL, '$2y$12$Knh/z6Dll9mmbXWWOqCXn.J./92x8AI6l26qRmAByA.eSecrpzhKe', NULL, '2024-06-28 01:06:42', '2024-06-28 01:06:42', '98989898', 'Nostrum optio dolor'),
(29, 'Ina Richardson', 'kysola@mailinator.com', NULL, '$2y$12$iliVzcGWJG4U.xuCiDhJI.C9NNfifIcf6RiNZsxhM5JZ4ZA3m2LE2', NULL, '2024-06-28 01:10:39', '2024-06-28 01:10:39', '123213214', 'Dicta voluptatem El'),
(31, 'Binaya Koirala', 'eenaya98@gmail.com', NULL, '$2y$12$.7/do09hIsy5LPDUA2XP7u1n8jNyff1Y8GFjYD1RhPgHTkoOcm5pa', NULL, '2024-06-28 20:08:57', '2024-06-28 20:08:57', '9840454572', 'user'),
(32, 'Abc', 'Abc@gmail.com', NULL, '$2y$12$nXkRBMddF5DeD73Y3B6ZTu608hgxnClADQVacR.k4u.N.lf6qF39K', NULL, '2024-06-29 02:14:39', '2024-06-29 02:14:39', '9840454572', 'user'),
(33, 'Abc', 'Ab1c@gmail.com', NULL, '$2y$12$0TlDmo58C0oJlz8MKPHMG.ebCosULQUQKNrgDiLLA2/QVWvWje5X6', NULL, '2024-06-29 02:16:10', '2024-06-29 02:16:10', '9840454572', 'user'),
(34, 'Abc', 'Ab12c@gmail.com', NULL, '$2y$12$1O4quNzFbhGqWz2cpCB/JO5zLAVXW8HzT4tPl8TvC.eKOBjWG3Sb2', NULL, '2024-06-29 02:17:16', '2024-06-29 02:17:16', '9840454572', 'user'),
(35, 'Abc', 'Binaya@gmail.com', NULL, '$2y$12$0K2aoFNSl6I60g5m4ypuJ.5GI9Iglt6KYFbGg4RdsqKjwnuZhvMNC', NULL, '2024-06-29 02:38:38', '2024-06-29 02:38:38', '9840454572', 'user'),
(36, 'Abc', 'Ainaya@gmail.com', NULL, '$2y$12$2q7HcSzSkvgk1EqO95ErMunYkW//.wFjCm41dK6Y66ymg1sE/iY62', NULL, '2024-06-29 02:39:50', '2024-06-29 02:39:50', '9840454572', 'user'),
(37, 'Abc', 'Pinaya@gmail.com', NULL, '$2y$12$q7QoETTYXTakkWKaEKHFw.dAm7ZAQLKCfCLg3YGUFYvoxwnJupOcy', NULL, '2024-06-29 02:42:19', '2024-06-29 02:42:19', '9840454572', 'user');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
