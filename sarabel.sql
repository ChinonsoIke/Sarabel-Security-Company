-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 08:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Example', 'nonso@example.com', 'admin123456', '2020-08-05 10:33:22', '2020-08-05 10:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Oasis Insurance', '1597182390.png', '2020-08-11 20:46:30', '2020-08-11 20:46:30'),
(2, 'Clina-Lancet Technologies', '1597185982.jpg', '2020-08-11 21:46:22', '2020-08-11 21:46:22'),
(3, 'Abeko Gold', '1597186002.png', '2020-08-11 21:46:42', '2020-08-11 21:46:42'),
(4, 'Aquila Capital', '1597186023.jpg', '2020-08-11 21:47:03', '2020-08-11 21:47:03'),
(5, 'Ashosh Group', '1597186042.jpg', '2020-08-11 21:47:22', '2020-08-11 21:47:22'),
(6, 'Astrophysics Inc', '1597186072.png', '2020-08-11 21:47:52', '2020-08-11 21:47:52'),
(7, 'Babcock University', '1597186106.jpg', '2020-08-11 21:48:26', '2020-08-11 21:48:26'),
(8, 'Buttercup School', '1597186124.png', '2020-08-11 21:48:44', '2020-08-11 21:48:44'),
(9, 'Centurion', '1597186166.png', '2020-08-11 21:49:26', '2020-08-11 21:49:26'),
(10, 'Malvin Meadow Schools', '1597186200.jpg', '2020-08-11 21:50:00', '2020-08-11 21:50:00'),
(11, 'Heritage Capital', '1597186240.JPG', '2020-08-11 21:50:40', '2020-08-11 21:50:40'),
(12, 'Interlink', '1597186265.jpg', '2020-08-11 21:51:05', '2020-08-11 21:51:05'),
(13, 'KPI', '1597186287.png', '2020-08-11 21:51:27', '2020-08-11 21:51:27'),
(14, 'Kresta Laurel Limited', '1597186311.png', '2020-08-11 21:51:52', '2020-08-11 21:51:52'),
(15, 'Mustard Foods Limited', '1597186344.png', '2020-08-11 21:52:24', '2020-08-11 21:52:24'),
(16, 'National Primary Healthcare Development Agency', '1597186391.jpg', '2020-08-11 21:53:11', '2020-08-11 21:53:11'),
(17, 'RAPSON', '1597186432.png', '2020-08-11 21:53:52', '2020-08-11 21:53:52'),
(18, 'Onity', '1597186456.png', '2020-08-11 21:54:16', '2020-08-11 21:54:16'),
(19, 'Play Zone', '1597186478.png', '2020-08-11 21:54:38', '2020-08-11 21:54:38'),
(20, 'Poise Nigeria', '1597186500.gif', '2020-08-11 21:55:00', '2020-08-11 21:55:00'),
(21, 'Premier Stores', '1597186534.png', '2020-08-11 21:55:34', '2020-08-11 21:55:34'),
(22, 'Rosslare Security Products', '1597186563.png', '2020-08-11 21:56:03', '2020-08-11 21:56:03'),
(23, 'Saipem', '1597186581.png', '2020-08-11 21:56:21', '2020-08-11 21:56:21'),
(24, 'Seagles', '1597186607.jpg', '2020-08-11 21:56:47', '2020-08-11 21:56:47'),
(25, 'Shepherd Court Parish', '1597186637.png', '2020-08-11 21:57:17', '2020-08-11 21:57:17'),
(26, 'Skye Bank', '1597186683.jpg', '2020-08-11 21:58:03', '2020-08-11 21:58:03'),
(27, 'Stanqueen', '1597186699.png', '2020-08-11 21:58:20', '2020-08-11 21:58:20'),
(28, 'Turnstar', '1597186724.png', '2020-08-11 21:58:44', '2020-08-11 21:58:44'),
(29, 'Ubiquiti Networks', '1597186771.png', '2020-08-11 21:59:32', '2020-08-11 21:59:32'),
(30, 'White Soul Motors', '1597186794.png', '2020-08-11 21:59:54', '2020-08-11 21:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_08_01_230324_create_administrators_table', 1),
(19, '2020_08_05_114039_create_services_table', 2),
(20, '2020_08_05_115248_create_posts_table', 2),
(26, '2020_08_08_085750_add_title_to_posts', 3),
(27, '2020_08_08_123403_create_pictures_table', 4),
(28, '2020_08_09_082040_create_tasks_table', 5),
(29, '2020_08_11_212230_create_clients_table', 6);

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
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `picture`, `created_at`, `updated_at`) VALUES
(5, '1596895967.jpg', '2020-08-08 13:12:49', '2020-08-08 13:12:49'),
(6, '1596896151.jpg', '2020-08-08 13:15:52', '2020-08-08 13:15:52'),
(7, '1596896173.png', '2020-08-08 13:16:14', '2020-08-08 13:16:14'),
(8, '1596896197.jpg', '2020-08-08 13:16:37', '2020-08-08 13:16:37'),
(9, '1596896215.jpg', '2020-08-08 13:16:58', '2020-08-08 13:16:58'),
(10, '1596896238.jpg', '2020-08-08 13:17:23', '2020-08-08 13:17:23'),
(11, '1596896264.jpg', '2020-08-08 13:17:45', '2020-08-08 13:17:45'),
(12, '1596896279.jpg', '2020-08-08 13:17:59', '2020-08-08 13:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Security Challenges in Nigeria', 'security-challenges-in-nigeria', 'We provide procurement services. We ensure quality is balanced with cost and value to our clients. We understand that procurement has time sensitivity and most times done to meet budget target. We ensure that we deliver within agreed and stipulated time, that is why we have established processes to that enable not to miss targets. Our procurement services cut across various industries and the under listed security products and materials. Automatic Revolving Door Automatic Sliding Gate Walk Through Metal Detector Full Height Industrial Turnstile Alarm Systems Fire Extinguishers Metal Detectors Bullet Proof Vests Radio Communication Equipment Scanners Electric Fence Complete Kits for Security Guard ( Design and Implementation) CCTV and Access Control Systems', '1596882643.jpg', '2020-08-08 09:30:46', '2020-08-08 09:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CCTV & DIGITAL VIDEO SURVEILLANCE', 'cctv-digital-video-surveillance', '1597155154.png', 'Video Surveillance provides strong deterrent, evidence and reduces liability. Providing a valuable tool for security personnel and follow-up investigation, video can tell the truth and supply visual evidence to help prevent insurance fraud, arson, vandalism, shoplifting, theft, breaches of policy on property, employee/time abuse, crowd monitoring and control and boldly go where no human needs to be present, increasing safety and reducing risk. We are professionals in CCTV Systems, products and installations and our services cover the following areas;\r\n\r\nCommercial interior, exterior, and perimeter applications\r\nAnalog and Digital technology with on site or off site monitoring capabilities\r\nComplete covert installations for discreet monitoring, theft of time, personal safety concerns, and vandalism.\r\nSpecially designed systems, to meet individual concerns and system troubleshooting to ensure solutions and satisfaction.', '2020-08-05 20:14:56', '2020-08-11 13:12:34'),
(2, 'PERIMETER SECURITY', 'perimeter-security', '1597179088.png', 'We secure the exterior of your estate and its attached properties. The lifestyle of your organization is incorporated in the design in accomplishing this goal. We utilize state of the art procedures and technologies to secure the exterior of your organization or residence and its attached properties.\r\n\r\nWe are there to design, implement and oversee these security measures for you, whatever your specific needs are. We integrate the lifestyle of the organization with operational procedures and state of the art security technologies to create a safe and impregnable organization security environment. The utilization of cameras, alarms, access control panels and lighting are all considered and harnessed into this process. The whole of these measures are incorporated to realize the specific needs of your estate or organization. Gates, fences, early warning entry system, lightening, alarm system, camera systems, locking mechanism, ingress, egress, generators, main power, protocol principles, and perimeter security procedural manual.', '2020-08-06 08:57:35', '2020-08-11 19:51:30'),
(3, 'SECURITY GUARD SERVICES', 'security-guard-services', '1597155205.png', 'We provide intelligent manned guarding solutions within the retail, banking, telecom, hotel, residential, corporate industries and government. Our full range of services includes, supply of trained guards, security officers, security consultancy, risk assessment and investigations and supporting wide range of activities like gatehouse activities, reporting of maintenance issues, control and evacuation, crowd control, access control, retail outlet security and car park monitoring', '2020-08-06 09:22:53', '2020-08-11 13:13:26'),
(4, 'ARMED ESCORT SERVICES', 'armed-escort-services', '1597155267.jpg', 'We are well experienced in armed escort services having been in the industry for many years. Through our experience, we are capable to provide for our clients services backed with the following inputs.\r\nResources (Escort vehicles & Personnel)\r\nCommunication\r\nGeographical Spread\r\nStrategic Alliance\r\nSecurity (Plain & armed Mopol etc.)\r\nAffordable Cost\r\nOfficial Permits & Approvals\r\nInsurance\r\nOur escort team consists of two armed Mobile Policemen, a driver and escort team leader. In addition to the lead and follow Toyota Hilux vehicles with full complement of staff and security, we also provide SUVs for the principal’s transportation and sometimes Bullet proof SUV on demand, all at extra cost.\r\nOur service types includes; Standby, Pickup, Drop off, General mission, High profile and Low profile, Pin down (24hrs with police security) and initial charges are made for the first two hours, and then each extra hour attracts extra charges. We also have monthly charges, but charges depend on the types of Services required by the client.\r\nWe provide a code of conduct for our personnel to ensure efficiency and satisfactory services and require advance notice of at least one week with minimum of 48 hours to requested date of service including escort itinerary is needed to ensure adequate arrangement and hitch free compliance. However, there could also be a standing order for daily, weekly or monthly services as the case may be.', '2020-08-06 09:28:38', '2020-08-11 13:14:28'),
(5, 'PERSONAL SECURITY', 'personal-security', '1597155300.png', 'We have proven experience in providing personal security and training that keep the staff and work force very focused and alert concerning their personal safety and security. Sarabel Logistics and Security Services have extensive experience in providing personal security solutions and services to individuals and groups. We are skilled at conducting threat and violence risk assessment, managing and disrupting threats, and providing a range of personal safety services. Depending on the unique circumstances of each client, we can provide differentiated services customized to meet the needs of each client and their personal circumstances. These includes personal protection, home and office security consulting, threat assessment and technological aids such as GPS monitoring persons 24x7, home surveillance systems. We also offer general guidelines and training on personal safety on the following areas, street precaution, car park security, waiting for bus, office security, guidelines to survive kidnapping attack, passport safety, hotel security, luggage load and guarding against thieves and personal security briefing and training for staff.', '2020-08-06 09:35:58', '2020-08-11 13:15:01'),
(6, 'PROCUREMENT OF SECURITY EQUIPMENTS', 'procurements', '1597179298.png', 'We secure the exterior of your estate and its attached properties. The lifestyle of your organization is incorporated in the design in accomplishing this goal. We utilize state of the art procedures and technologies to secure the exterior of your organization or residence and its attached properties.\r\n\r\nWe are there to design, implement and oversee these security measures for you, whatever your specific needs are. We integrate the lifestyle of the organization with operational procedures and state of the art security technologies to create a safe and impregnable organization security environment. The utilization of cameras, alarms, access control panels and lighting are all considered and harnessed into this process. The whole of these measures are incorporated to realize the specific needs of your estate or organization. Gates, fences, early warning entry system, lightening, alarm system, camera systems, locking mechanism, ingress, egress, generators, main power, protocol principles, and perimeter security procedural manual.', '2020-08-06 09:41:20', '2020-08-11 19:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','processing','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Install CCTV at Indaboski\'s House', 'install-cctv-at-indaboskis-house', 'CCTV installation on 20th August, 2020.', 'pending', '2020-08-09 08:21:29', '2020-08-09 08:21:29');

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
(1, 'Kameron Crona', 'rrunolfsdottir@example.net', '2020-08-05 10:33:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '71c1hWsDz2', '2020-08-05 10:33:24', '2020-08-05 10:33:24'),
(2, 'Doug O\'Connell', 'cfarrell@example.net', '2020-08-05 10:33:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PqwyMHlbMm', '2020-08-05 10:33:24', '2020-08-05 10:33:24'),
(3, 'Luisa Schmeler', 'trinity.schinner@example.net', '2020-08-05 10:33:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RYKNLn3xoj', '2020-08-05 10:33:24', '2020-08-05 10:33:24'),
(4, 'Remington Kuvalis', 'abe41@example.org', '2020-08-05 10:33:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uewaXMlsFT', '2020-08-05 10:33:24', '2020-08-05 10:33:24'),
(5, 'Destiney Green', 'jrogahn@example.com', '2020-08-05 10:33:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rqQOE1cx38', '2020-08-05 10:33:24', '2020-08-05 10:33:24'),
(6, 'nonso', 'nonso@example.com', NULL, '$2y$10$7iUG8Fk3poC6Asi6/9rCnOxM2AMA441KWVju6zFV.YHq25oZlNmM2', NULL, '2020-08-05 10:38:44', '2020-08-05 10:38:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrators_email_unique` (`email`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
