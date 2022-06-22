-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 05:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei_projct`
--

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
-- Table structure for table `job_experiences`
--

CREATE TABLE `job_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `respondent_id` bigint(20) UNSIGNED NOT NULL,
  `do_you_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_workplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_educational_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_per_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_experiences`
--

INSERT INTO `job_experiences` (`id`, `respondent_id`, `do_you_work`, `workplace`, `name_workplace`, `description`, `start_work`, `address_work`, `job_educational_background`, `income_per_month`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sudah', 'Pemerintah', 'Rumah Sakit Yowari', NULL, 'Juni 2022', 'Jl.Sentani-Hawai.No.79 RT/RW 002/003', 'Sesuai', '3500000', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(2, 2, 'Sudah', 'Pemerintah', 'Rumah Sakit Yowari', NULL, 'Juni 2022', 'Jl.Sentani-Hawai.No.79 RT/RW 002/003', 'Sesuai', '3500000', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(3, 3, 'Sudah', 'Pemerintah', 'Rumah Sakit Yowari', NULL, 'Juni 2022', 'Jl.Sentani-Hawai.No.79 RT/RW 002/003', 'Sesuai', '3500000', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(4, 4, 'Sudah', 'Pemerintah', 'Rumah Sakit Yowari', NULL, 'Juni 2022', 'Jl.Sentani-Hawai.No.79 RT/RW 002/003', 'Sesuai', '3500000', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(5, 5, 'Sedang melanjutkan pendidikan', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL, NULL, '2022-06-20 09:01:12', '2022-06-20 09:01:12');

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
(5, '2022_05_19_080117_laratrust_setup_tables', 1),
(6, '2022_05_30_081242_create_respondent_table', 1),
(7, '2022_05_30_081321_create_questions_learning_table', 1),
(8, '2022_05_30_081357_create_job_experiences_table', 1),
(9, '2022_05_30_081440_create_relationship_table', 1);

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
-- Table structure for table `pbm_experience`
--

CREATE TABLE `pbm_experience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `respondent_id` bigint(20) UNSIGNED NOT NULL,
  `active_inactive_organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecturer_ability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer_skills_practice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rectors_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_program_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pbm_experience`
--

INSERT INTO `pbm_experience` (`id`, `respondent_id`, `active_inactive_organization`, `organization_name`, `lecturer_ability`, `lecturer_skills_practice`, `rectors_service`, `study_program_services`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ya', 'BEM', 'Baik', 'Baik', 'Baik', 'Baik', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(2, 2, 'Ya', 'HMJ', 'Sangat baik', 'Sangat baik', 'Baik', 'Baik', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(3, 3, 'Ya', 'UKM', 'Cukup', 'Cukup', 'Kurang', 'Kurang', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(4, 4, 'Ya', 'Lainnya', 'Baik', 'Baik', 'Kurang', 'Baik', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(5, 5, 'Tidak', NULL, 'Sangat Baik', 'Cukup', 'Cukup', 'Cukup', '2022-06-20 09:01:12', '2022-06-20 09:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-06-20 08:59:42', '2022-06-20 08:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `respondent`
--

CREATE TABLE `respondent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_study_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_college_entry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_graduation_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respondent`
--

INSERT INTO `respondent` (`id`, `name`, `gender`, `mobile_phone_number`, `place_of_birth`, `address`, `email`, `what_study_program`, `year_of_college_entry`, `college_graduation_date`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Josua Buay', 'Pria', '081212131012', 'Jayapura', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'josua@mail.com', 'DIII Gizi', '2018', 'Juni 2021', 'josua-buay', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(2, 'Luckman Said', 'Pria', '081212131013', 'Biak', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'luck01@mail.com', 'DIII Keperawatan Yapen', '2016', 'Juni 2019', 'luckman-said', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(3, 'Mawar Bazar', 'Wanita', '081212131014', 'Maluku', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'mawarmerah@mail.com', 'DIII Sanitasi Jayapura', '2018', 'Juni 2021', 'mawar-bazar', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(4, 'Merpati Suana', 'Wanita', '081212131015', 'Ambom', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'merpatiputih@mail.com', 'DIII Sanitasi Mimika', '2018', 'Juni 2021', 'merpati-suana', '2022-06-20 08:59:42', '2022-06-20 08:59:42'),
(5, 'Johan Nasendi', 'Pria', '081342843730', 'Maribu', 'Jl.Sentani-Depapre', 'jhonnasendi@gmail.com', 'Sajana Terapan Gizi dan Dietetika', '2018', '2022-06', 'johan-nasendi', '2022-06-20 09:01:12', '2022-06-20 09:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-06-20 08:59:42', '2022-06-20 08:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `respondent_id` bigint(20) UNSIGNED NOT NULL,
  `learning_process` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `curriculum` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admini_services` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities_infrastructure` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `respondent_id`, `learning_process`, `curriculum`, `student_admini_services`, `facilities_infrastructure`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(2, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(3, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(4, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-20 08:59:43', '2022-06-20 08:59:43'),
(5, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-20 09:01:12', '2022-06-20 09:01:12');

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
(1, 'Poltekses', 'admin@gmail.com', NULL, '$2y$10$m8kMkdcoVfTPxaK/NAnCy.MFDrE8.pYRbDGN9GR0eY5GMf4dMM7RC', NULL, '2022-06-20 08:59:42', '2022-06-20 08:59:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_experiences`
--
ALTER TABLE `job_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_experiences_respondent_id_foreign` (`respondent_id`);

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
-- Indexes for table `pbm_experience`
--
ALTER TABLE `pbm_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pbm_experience_respondent_id_foreign` (`respondent_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `respondent`
--
ALTER TABLE `respondent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `respondent_mobile_phone_number_unique` (`mobile_phone_number`),
  ADD UNIQUE KEY `respondent_email_unique` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suggestion_respondent_id_foreign` (`respondent_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_experiences`
--
ALTER TABLE `job_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pbm_experience`
--
ALTER TABLE `pbm_experience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respondent`
--
ALTER TABLE `respondent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_experiences`
--
ALTER TABLE `job_experiences`
  ADD CONSTRAINT `job_experiences_respondent_id_foreign` FOREIGN KEY (`respondent_id`) REFERENCES `respondent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pbm_experience`
--
ALTER TABLE `pbm_experience`
  ADD CONSTRAINT `pbm_experience_respondent_id_foreign` FOREIGN KEY (`respondent_id`) REFERENCES `respondent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `suggestion_respondent_id_foreign` FOREIGN KEY (`respondent_id`) REFERENCES `respondent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
