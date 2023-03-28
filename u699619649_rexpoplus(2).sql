-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2023 at 09:37 AM
-- Server version: 10.5.18-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u699619649_rexpoplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_packages`
--

CREATE TABLE `active_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `to_give` varchar(255) DEFAULT NULL,
  `give_after` varchar(255) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_updated` varchar(255) DEFAULT NULL,
  `expires_on` varchar(255) DEFAULT NULL,
  `total_return` varchar(255) DEFAULT NULL,
  `remaining` varchar(255) DEFAULT NULL,
  `given` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_packages`
--

INSERT INTO `active_packages` (`id`, `user_id`, `package_id`, `amount`, `to_give`, `give_after`, `timestamp`, `created_at`, `updated_at`, `last_updated`, `expires_on`, `total_return`, `remaining`, `given`) VALUES
(22, 25, 2, '1500', '3.5', '24', '1671096610', '2022-12-15 09:30:10', '2023-02-16 23:54:34', '63', '2023-05-15 09:30:10', NULL, NULL, NULL),
(23, 25, 1, '2000', '0.0023', '1', '1671096734', '2022-12-15 09:32:14', '2023-02-16 23:58:05', '91286', '2023-06-15 09:32:14', NULL, NULL, NULL),
(24, 25, 3, '1000', '21', '7', '1671096779', '2022-12-15 09:32:59', '2023-02-16 23:54:34', '63', '2023-04-15 09:32:59', NULL, NULL, NULL),
(25, 25, 3, '1000', '21', '7', '1671097601', '2022-12-15 09:46:41', '2023-02-16 23:54:34', '63', '2023-04-15 09:46:41', NULL, NULL, NULL),
(26, 25, 4, '1000', '120', '30', '1671097639', '2022-12-15 09:47:19', '2023-02-15 18:34:46', '60', '2023-03-15 09:47:19', NULL, NULL, NULL),
(27, 25, 5, '3000', '1260', '90', '1671097766', '2022-12-15 09:49:26', '2022-12-15 09:49:26', '0', '2023-03-15 09:49:26', NULL, NULL, NULL),
(28, 25, 1, '500', '0.000575', '1', '1671109464', '2022-12-15 13:04:24', '2023-02-16 23:58:05', '91074', '2023-06-15 13:04:24', NULL, NULL, NULL),
(29, 26, 1, '7000', '0.00805', '1', '1671121444', '2022-12-15 16:24:04', '2023-02-14 20:34:09', '87791', '2023-06-15 16:24:04', NULL, NULL, NULL),
(30, 26, 1, '7000', '0.00805', '1', '1671121471', '2022-12-15 16:24:31', '2023-02-14 20:34:09', '87790', '2023-06-15 16:24:31', NULL, NULL, NULL),
(31, 26, 6, '500', '40', '30', '1671121592', '2022-12-15 16:26:32', '2023-02-13 19:51:32', '60', '', '1000', '960', '40'),
(35, 26, 1, '500', '0.000575', '1', '1671285388', '2022-12-17 13:56:28', '2023-02-14 20:34:09', '85058', '2023-06-17 13:56:28', NULL, NULL, NULL),
(36, 26, 1, '50', '5.75E-5', '1', '1671296148', '2022-12-17 16:55:48', '2023-02-14 20:34:09', '84879', '2023-06-17 16:55:48', NULL, NULL, NULL),
(38, 39, 3, '500', '10.5', '7', '1671374629', '2022-12-18 14:43:49', '2023-02-12 19:42:24', '56', '2023-04-18 14:43:49', NULL, NULL, NULL),
(39, 25, 1, '1000', '0.00115', '1', '1671376221', '2022-12-18 15:10:21', '2023-02-16 23:58:05', '86628', '2023-06-18 15:10:21', NULL, NULL, NULL),
(40, 26, 6, '500', '40', '30', '1671388704', '2022-12-18 18:38:24', '2023-02-12 21:53:29', '30', '', '1000', '952.9953', '47.0047'),
(41, 44, 1, '1000', '0.00115', '1', '1671395783', '2022-12-18 20:36:23', '2022-12-18 20:39:56', '4', '2023-06-18 20:36:23', NULL, NULL, NULL),
(42, 44, 2, '1000', '2.3333333333333', '24', '1671395808', '2022-12-18 20:36:48', '2022-12-18 20:36:48', '0', '2023-05-18 20:36:48', NULL, NULL, NULL),
(43, 44, 4, '1000', '120', '30', '1671395827', '2022-12-18 20:37:07', '2022-12-18 20:37:07', '0', '2023-03-18 20:37:07', NULL, NULL, NULL),
(44, 26, 8, '1201', '168.14', '30', '1671450850', '2022-12-19 11:54:10', '2023-02-12 21:53:29', '30', '', '4804', '4628.8553', '175.1447'),
(45, 46, 1, '100', '0.000115', '1', '1671543161', '2022-12-20 13:32:41', '2023-02-16 14:12:51', '83261', '2023-06-20 13:32:41', NULL, NULL, NULL),
(46, 49, 3, '100', '2.1', '7', '1671635632', '2022-12-21 15:13:52', '2023-02-15 23:38:46', '56', '2023-04-21 15:13:52', NULL, NULL, NULL),
(47, 49, 4, '100', '12', '30', '1671635860', '2022-12-21 15:17:40', '2023-01-23 00:25:55', '30', '2023-03-21 15:17:40', NULL, NULL, NULL),
(48, 50, 4, '100', '12', '30', '1671646196', '2022-12-21 18:09:56', '2023-01-28 20:18:07', '30', '2023-03-21 18:09:56', NULL, NULL, NULL),
(49, 51, 1, '150', '0.0001725', '1', '1671723805', '2022-12-22 15:43:25', '2023-02-16 04:28:18', '79665', '2023-06-22 15:43:25', NULL, NULL, NULL),
(50, 54, 4, '100', '12', '30', '1671798654', '2022-12-23 12:30:54', '2022-12-23 12:30:54', '0', '2023-03-23 12:30:54', NULL, NULL, NULL),
(52, 50, 1, '100', '0.000115', '1', '1672239787', '2022-12-28 20:03:07', '2023-02-16 19:21:09', '71959', '2023-06-28 20:03:07', NULL, NULL, NULL),
(53, 25, 1, '300', '0.000345', '1', '1672420675', '2022-12-30 22:17:55', '2023-02-16 23:58:05', '69221', '2023-06-30 22:17:55', NULL, NULL, NULL),
(54, 25, 4, '100', '12', '30', '1672422020', '2022-12-30 22:40:20', '2023-01-30 19:46:33', '30', '2023-03-30 22:40:20', NULL, NULL, NULL),
(56, 56, 4, '100', '12', '30', '1672422181', '2022-12-30 22:43:01', '2023-02-14 20:34:04', '30', '2023-03-30 22:43:01', NULL, NULL, NULL),
(67, 59, 4, '1000', '120', '30', '1672679328', '2023-01-02 22:08:48', '2023-02-02 14:14:06', '30', '2023-04-02 22:08:48', NULL, NULL, NULL),
(68, 60, 4, '100', '12', '30', '1672748439', '2023-01-03 17:20:39', '2023-01-03 17:20:39', '0', '2023-04-03 17:20:39', NULL, NULL, NULL),
(69, 68, 4, '100', '12', '30', '1672843741', '2023-01-04 19:49:01', '2023-02-04 15:23:18', '30', '2023-04-04 19:49:01', NULL, NULL, NULL),
(70, 69, 4, '1000', '120', '30', '1673116043', '2023-01-07 23:27:23', '2023-02-07 16:43:30', '30', '2023-04-07 23:27:23', NULL, NULL, NULL),
(71, 69, 1, '500', '0.000575', '1', '1673116072', '2023-01-07 23:27:52', '2023-02-15 15:12:19', '55665', '2023-07-07 23:27:52', NULL, NULL, NULL),
(72, 69, 3, '500', '10.5', '7', '1673116085', '2023-01-07 23:28:05', '2023-02-15 15:10:25', '35', '2023-05-07 23:28:05', NULL, NULL, NULL),
(73, 70, 1, '20', '2.3E-5', '1', '1673176599', '2023-01-08 16:16:39', '2023-02-17 13:30:02', '57434', '2023-07-08 16:16:39', NULL, NULL, NULL),
(74, 70, 2, '50', '0.11666666666667', '24', '1673179824', '2023-01-08 17:10:24', '2023-02-16 17:17:02', '39', '2023-06-08 17:10:24', NULL, NULL, NULL),
(75, 70, 5, '50', '21', '90', '1673180215', '2023-01-08 17:16:55', '2023-01-08 17:16:55', '0', '2023-04-08 17:16:55', NULL, NULL, NULL),
(77, 25, 1, '500', '0.000575', '1', '1673266041', '2023-01-09 17:07:21', '2023-02-16 23:58:05', '55131', '2023-07-09 17:07:21', NULL, NULL, NULL),
(78, 70, 6, '100', '8', '30', '1673352278', '2023-01-10 17:04:38', '2023-02-10 02:22:33', '30', '', '200', '192', '8'),
(79, 72, 2, '100', '0.23333333333333', '24', '1673375366', '2023-01-10 23:29:26', '2023-02-16 23:29:29', '37', '2023-06-10 23:29:26', NULL, NULL, NULL),
(80, 37, 5, '2', '0.84', '90', '1673648115', '2023-01-14 03:15:15', '2023-01-14 03:15:15', '0', '2023-04-14 03:15:15', NULL, NULL, NULL),
(81, 76, 4, '100', '12', '30', '1673959469', '2023-01-17 17:44:29', '2023-01-17 17:44:29', '0', '2023-04-17 17:44:29', NULL, NULL, NULL),
(82, 80, 4, '100', '12', '30', '1673963700', '2023-01-17 18:55:00', '2023-01-17 18:55:00', '0', '2023-04-17 18:55:00', NULL, NULL, NULL),
(83, 81, 4, '100', '12', '30', '1673964766', '2023-01-17 19:12:46', '2023-01-17 19:12:46', '0', '2023-04-17 19:12:46', NULL, NULL, NULL),
(84, 56, 4, '1000', '120', '30', '1673976550', '2023-01-17 22:29:10', '2023-01-17 22:29:10', '0', '2023-04-17 22:29:10', NULL, NULL, NULL),
(85, 82, 4, '400', '48', '30', '1673985030', '2023-01-18 00:50:30', '2023-01-18 00:50:30', '0', '2023-04-18 00:50:30', NULL, NULL, NULL),
(86, 83, 4, '1122', '134.64', '30', '1673988962', '2023-01-18 01:56:02', '2023-01-18 01:56:02', '0', '2023-04-18 01:56:02', NULL, NULL, NULL),
(87, 70, 2, '35', '0.081666666666667', '24', '1674136043', '2023-01-19 18:47:23', '2023-02-17 10:39:36', '28', '2023-06-19 18:47:23', NULL, NULL, NULL),
(88, 51, 7, '1000', '120', '30', '1674415746', '2023-01-23 00:29:06', '2023-01-23 00:29:06', '0', '', '3000', '3000', '0'),
(89, 25, 1, '500', '0.000575', '1', '1674433034', '2023-01-23 05:17:14', '2023-02-16 23:58:05', '35681', '2023-07-23 05:17:14', NULL, NULL, NULL),
(90, 88, 6, '500', '40', '30', '1674579886', '2023-01-24 22:04:46', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(91, 88, 6, '500', '40', '30', '1674579986', '2023-01-24 22:06:26', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(92, 88, 6, '500', '40', '30', '1674580044', '2023-01-24 22:07:24', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(93, 88, 6, '500', '40', '30', '1674580087', '2023-01-24 22:08:07', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(94, 88, 6, '500', '40', '30', '1674580140', '2023-01-24 22:09:00', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(95, 88, 6, '500', '40', '30', '1674580175', '2023-01-24 22:09:35', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(96, 88, 6, '500', '40', '30', '1674580239', '2023-01-24 22:10:39', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(97, 88, 6, '500', '40', '30', '1674580602', '2023-01-24 22:16:42', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(98, 88, 6, '500', '40', '30', '1674580671', '2023-01-24 22:17:51', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(99, 88, 6, '500', '40', '30', '1674580706', '2023-01-24 22:18:26', '2023-01-27 01:14:36', '0', '', '1000', '999.9428', '0.0572'),
(100, 46, 6, '500', '40', '30', '1674587761', '2023-01-25 00:16:01', '2023-01-25 00:16:01', '0', '', '1000', '1000', '0'),
(101, 46, 6, '500', '40', '30', '1674587781', '2023-01-25 00:16:21', '2023-01-25 00:16:21', '0', '', '1000', '1000', '0'),
(102, 46, 6, '500', '40', '30', '1674587803', '2023-01-25 00:16:43', '2023-01-25 00:16:43', '0', '', '1000', '1000', '0'),
(103, 88, 4, '1000', '120', '30', '1674588012', '2023-01-25 00:20:12', '2023-01-25 00:20:12', '0', '2023-04-25 00:20:12', NULL, NULL, NULL),
(104, 88, 4, '1000', '120', '30', '1674588040', '2023-01-25 00:20:40', '2023-01-25 00:20:40', '0', '2023-04-25 00:20:40', NULL, NULL, NULL),
(105, 90, 5, '765', '321.3', '90', '1674645152', '2023-01-25 16:12:32', '2023-01-25 16:12:32', '0', '2023-04-25 16:12:32', NULL, NULL, NULL),
(106, 88, 4, '2400', '288', '30', '1674647166', '2023-01-25 16:46:06', '2023-01-25 16:46:06', '0', '2023-04-25 16:46:06', NULL, NULL, NULL),
(107, 89, 4, '2500', '300', '30', '1674764034', '2023-01-27 01:13:54', '2023-01-27 01:13:54', '0', '2023-04-27 01:13:54', NULL, NULL, NULL),
(108, 89, 4, '2500', '300', '30', '1674764071', '2023-01-27 01:14:31', '2023-01-27 01:14:31', '0', '2023-04-27 01:14:31', NULL, NULL, NULL),
(109, 26, 4, '2500', '300', '30', '1674937103', '2023-01-29 01:18:23', '2023-01-29 01:18:23', '0', '2023-04-29 01:18:23', NULL, NULL, NULL),
(110, 97, 2, '450', '1.05', '24', '1675181710', '2023-01-31 21:15:10', '2023-02-16 01:34:34', '15', '2023-07-01 21:15:10', NULL, NULL, NULL),
(111, 57, 4, '1000', '120', '30', '1675333888', '2023-01-02 15:31:28', '2023-02-02 15:45:54', '30', '2023-04-02 15:31:28', NULL, NULL, NULL),
(112, 75, 4, '500', '60', '30', '1675360011', '2023-02-02 22:46:51', '2023-02-02 22:46:51', '0', '2023-05-02 22:46:51', NULL, NULL, NULL),
(113, 99, 3, '140', '2.94', '7', '1675680272', '2023-02-06 15:44:32', '2023-02-15 18:38:56', '7', '2023-06-06 15:44:32', NULL, NULL, NULL),
(114, 51, 8, '1201', '168.14', '30', '1675720518', '2023-02-07 02:55:18', '2023-02-07 02:55:18', '0', '', '4804', '4804', '0'),
(116, 99, 3, '60', '1.26', '7', '1676028648', '2023-02-10 16:30:48', '2023-02-10 16:30:48', '0', '2023-06-10 16:30:48', NULL, NULL, NULL),
(117, 25, 6, '500', '40', '30', '1676195214', '2023-02-12 14:46:54', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(118, 25, 6, '500', '40', '30', '1676195243', '2023-02-12 14:47:23', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(119, 25, 6, '500', '40', '30', '1676195274', '2023-02-12 14:47:54', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(120, 25, 6, '500', '40', '30', '1676195303', '2023-02-12 14:48:23', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(121, 25, 6, '500', '40', '30', '1676195418', '2023-02-12 14:50:18', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(122, 25, 6, '500', '40', '30', '1676195441', '2023-02-12 14:50:41', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(123, 25, 6, '500', '40', '30', '1676195486', '2023-02-12 14:51:26', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(124, 25, 6, '500', '40', '30', '1676195542', '2023-02-12 14:52:22', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(125, 25, 6, '500', '40', '30', '1676195605', '2023-02-12 14:53:25', '2023-02-12 21:53:33', '0', '', '1000', '998.2', '1.8'),
(126, 107, 4, '100', '12', '30', '1676220803', '2023-02-12 21:53:23', '2023-02-12 21:53:23', '0', '2023-05-12 21:53:23', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `active_rewards`
--

CREATE TABLE `active_rewards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `is_completed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_rewards`
--

INSERT INTO `active_rewards` (`id`, `user_id`, `reward_id`, `created_at`, `updated_at`, `expiry_date`, `is_completed`) VALUES
(3, 25, 4, '2022-12-16 19:39:04', '2023-01-18 09:34:25', '2023-01-30 19:39:04', 1),
(5, 44, 1, '2022-12-18 20:39:05', '2022-12-18 20:39:05', '2022-12-23 20:39:05', 0),
(15, 73, 6, '2023-01-13 17:14:29', '2023-01-13 17:14:29', '2023-04-13 17:14:29', 0),
(16, 75, 3, '2023-01-17 01:40:26', '2023-01-17 01:40:26', '2023-02-16 01:40:26', 0),
(17, 82, 1, '2023-01-17 21:11:05', '2023-01-18 02:05:21', '2023-01-22 21:11:05', 1),
(18, 49, 1, '2023-01-18 02:30:51', '2023-01-23 00:33:16', '2023-01-23 02:30:51', 1),
(19, 25, 6, '2023-01-18 09:35:15', '2023-01-18 09:35:15', '2023-04-18 09:35:15', 0),
(24, 87, 3, '2023-01-24 11:27:04', '2023-01-24 11:27:04', '2023-02-23 11:27:04', 0),
(26, 82, 1, '2023-01-25 14:57:44', '2023-01-25 16:14:14', '2023-01-30 14:57:44', 1),
(28, 88, 4, '2023-01-27 02:13:26', '2023-01-27 02:13:26', '2023-03-13 02:13:26', 0),
(32, 84, 6, '2023-01-31 22:28:21', '2023-01-31 22:28:21', '2023-05-01 22:28:21', 0),
(33, 91, 1, '2023-02-03 22:29:05', '2023-02-03 22:29:05', '2023-02-08 22:29:05', 0),
(34, 59, 6, '2023-02-04 15:34:12', '2023-02-04 15:34:12', '2023-05-05 15:34:12', 0),
(37, 49, 1, '2023-02-07 02:48:18', '2023-02-07 02:59:15', '2023-02-12 02:48:18', 1),
(39, 26, 8, '2023-02-07 14:34:20', '2023-02-07 14:34:20', '2024-02-02 14:34:20', 0),
(40, 102, 3, '2023-02-08 00:51:53', '2023-02-08 00:51:53', '2023-03-10 00:51:53', 0),
(42, 103, 2, '2023-02-09 13:30:31', '2023-02-09 13:30:31', '2023-02-24 13:30:31', 0),
(44, 105, 6, '2023-02-11 22:48:00', '2023-02-11 22:48:00', '2023-05-12 22:48:00', 0),
(46, 58, 1, '2023-02-13 11:24:40', '2023-02-13 11:24:40', '2023-02-18 11:24:40', 0),
(47, 49, 1, '2023-02-15 23:38:37', '2023-02-15 23:38:37', '2023-02-20 23:38:37', 0),
(48, 82, 2, '2023-02-17 00:49:10', '2023-02-17 00:49:10', '2023-03-04 00:49:10', 0),
(49, 70, 1, '2023-02-17 10:39:58', '2023-02-17 10:39:58', '2023-02-22 10:39:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `martinpay_email` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `martinpay_name` varchar(255) DEFAULT NULL,
  `binance_email` varchar(255) DEFAULT NULL,
  `wallet_address` varchar(255) DEFAULT NULL,
  `binance_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `user_id`, `bank_name`, `account_name`, `iban`, `created_at`, `updated_at`, `martinpay_email`, `payment_id`, `martinpay_name`, `binance_email`, `wallet_address`, `binance_name`) VALUES
(3, 26, 'Meezan bank', 'Muneeb shakeel', '11430103698600', '2022-12-22 23:11:39', '2023-01-18 13:02:18', NULL, NULL, NULL, 'Muneebwma@icloud.com', '0xe75d75b629579b7583b649df2cea4f7ccc2d8f80', 'Muneeb ahmed'),
(5, 57, 'Allied Bank', 'Muhammad Zubair', 'PK47ABPA00100696123', '2022-12-31 06:51:46', '2022-12-31 07:08:38', 'mzubairkhan.official@gmail.com', '12345674789', 'Muhammad Zubair', 'mzubairkhan.offficial@gmail.com', '123456789', 'Zubair Khan'),
(6, 39, 'Faysalbank', 'Ali Raza', '3181301000001264', '2023-01-02 18:15:55', '2023-02-09 16:08:06', NULL, NULL, NULL, 'Alirazarafiq01@gmail.com', '0xf0252db4d3163ade28810568eaa0c46cf5e2cba5', 'Mian902'),
(7, 63, 'Meezan bank', 'Ali traders', '11430105558458', '2023-01-03 19:32:47', '2023-01-03 19:32:47', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 37, NULL, NULL, NULL, '2023-01-04 00:07:59', '2023-01-14 03:11:18', NULL, NULL, NULL, 'sohaibsiddique576@gmail.com', '0x16788a705d342d09312ace36a7e53aa25f7ffc0b', 'Mian510'),
(9, 70, 'Nayapay', 'Shahayar Abbas', 'PK92NAYA1234503247876787', '2023-01-13 19:43:46', '2023-01-31 13:41:24', NULL, NULL, NULL, 'shahayarabbas3@gmail.com', '0x91d5b2072dd3a0a8f0db2fd7d3877219767b6529', 'Shahayar_ABBAS786'),
(10, 49, 'Tayyba', 'Mahertayyab203@gmail.com', '0x4e5fe42d230a0d29e5ed1cce6759b84177b72845', '2023-01-18 13:06:00', '2023-01-18 13:06:00', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 82, NULL, NULL, NULL, '2023-01-18 23:08:16', '2023-01-18 23:08:16', NULL, NULL, NULL, 'rayyan.irfan2023@gmail.com', '0x7dc61f016557579f5ace627eb5cf1da1277b1892', 'Arfan_Naeem'),
(12, 25, 'Mcb', 'Waqar ali', '0672639281004891', '2023-01-25 16:25:20', '2023-01-25 16:25:20', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 93, 'Bank of Punjab', 'Muhammad Ayaz Tahir', '6030022175000019', '2023-01-27 15:21:51', '2023-01-27 15:21:51', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 97, NULL, NULL, NULL, '2023-01-31 20:02:54', '2023-01-31 20:02:54', NULL, NULL, NULL, 'cha775796@gmail.com', '0x97a43c3c391adafa56f12e207287a2d92f83f099', 'MUHAMMAD_ARSHAD78'),
(15, 59, NULL, NULL, NULL, '2023-02-04 23:52:31', '2023-02-04 23:52:31', NULL, NULL, NULL, 'mbadshah454@gmail.com', '0xc2e8944ff08eb8c9c73220d89b8a64bfc51fd68f', 'Malikrehman502'),
(16, 88, NULL, NULL, NULL, '2023-02-05 16:45:29', '2023-02-05 16:45:29', NULL, NULL, NULL, 'Hussainbuttofficial@gmail.com', '0xeff0843bd4f53e2171f1a03de6de481860a6e999', 'Hussain Butt'),
(17, 51, NULL, NULL, NULL, '2023-02-06 21:09:46', '2023-02-06 21:09:46', NULL, NULL, NULL, 'Mahertayyab203@gmai.com', '0xe75d75b629579b7583b649df2cea4f7ccc2d8f80', 'Tayyba'),
(18, 69, NULL, NULL, NULL, '2023-02-09 17:09:43', '2023-02-09 17:09:43', NULL, NULL, NULL, 'farhanrana702@gmail.com', 'TAVA6tHhatcBh4Wj7BBDf6veGEtucS83RX', 'Farhan Rana'),
(19, 100, NULL, NULL, NULL, '2023-02-14 16:48:10', '2023-02-14 16:48:10', NULL, NULL, NULL, 'shahayarabbas3@gmail.com', '0x91d5b2072dd3a0a8f0db2fd7d3877219767b6529', 'Shahayar_ABBAS786');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `tax_amount` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `coin` varchar(255) DEFAULT NULL,
  `pay_amount` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `payment_id`, `order_id`, `type`, `payment_amount`, `tax_amount`, `amount`, `coin`, `pay_amount`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(29, '4478780621', 'ROWUN8LS', 'Crypto', '100', '2.919422', '97.080578', 'ada', '378.515377', 'waiting', '2022-12-17 20:23:36', '2022-12-17 20:23:36', 37),
(30, '5392598757', 'LFQLTRJZ', 'Crypto', '100', '2.54961', '97.45039', 'usdt', '99.75048369', 'waiting', '2022-12-17 20:54:36', '2022-12-17 20:54:36', 26),
(31, '5307694708', '0350GCEG', 'Crypto', '50', '1.681728', '48.318272', 'ada', '189.505566', 'waiting', '2022-12-17 21:02:03', '2022-12-17 21:02:03', 37),
(32, '5788443534', 'A8NJCVK1', 'Crypto', '100', '3.030946', '96.969054', 'usdt', '99.66002599', 'waiting', '2022-12-18 11:37:23', '2022-12-18 11:37:23', 26),
(33, '5851041857', 'RMHTYWNI', 'Crypto', '100', '3.030946', '96.969054', 'usdt', '99.66002599', 'waiting', '2022-12-18 11:37:27', '2022-12-18 11:37:27', 26),
(34, '5647090575', 'SFJHXNBW', 'Crypto', '100', '3.030946', '96.969054', 'usdt', '99.66002599', 'waiting', '2022-12-18 11:37:27', '2022-12-18 11:37:27', 26),
(35, '6212529372', 'RPVT4GES', 'Crypto', '100', '2.818593', '97.181407', 'usdt', '99.70662641', 'waiting', '2022-12-18 14:06:08', '2022-12-18 14:06:08', 26),
(36, '5189589127', 'NGIX9PUV', 'Crypto', '100', '2.818594', '97.181406', 'usdt', '99.70662641', 'waiting', '2022-12-18 14:06:10', '2022-12-18 14:06:10', 26),
(37, '6158481210', 'WQIFKJOF', 'Crypto', '100', '2.453739', '97.546261', 'usdtbsc', '99.87', 'waiting', '2022-12-18 19:08:27', '2022-12-18 19:08:27', 26),
(38, '5356189813', 'N9UNXJ8O', 'Crypto', '100', '2.453739', '97.546261', 'usdtbsc', '99.87', 'waiting', '2022-12-18 19:08:28', '2022-12-18 19:08:28', 26),
(39, '5651948696', 'VAYTZDKL', 'Crypto', '100', '2.631283', '97.368717', 'usdt', '99.7127076', 'waiting', '2022-12-18 21:14:45', '2022-12-18 21:14:45', 26),
(40, '5189064534', 'QPRHE0GQ', 'Crypto', '20', '1.851209', '18.148791', '1inchbsc', '49.69750704', 'waiting', '2022-12-19 10:02:39', '2022-12-19 10:02:39', 19),
(41, '5767150174', 'HQHTX6RJ', 'Crypto', '200', '4.230351', '195.769649', 'usdt', '199.4227852', 'waiting', '2022-12-19 11:10:46', '2022-12-19 11:10:46', 39),
(42, '5919748434', '2WUBIK1S', 'Crypto', '200', '4.159099', '195.840901', 'usdt', '199.75739301', 'waiting', '2022-12-19 16:25:10', '2022-12-19 16:25:10', 26),
(43, '5440283351', 'KUY881GV', 'Crypto', '1000', '16.873169', '983.126831', 'usdt', '997.42102382', 'waiting', '2022-12-20 13:08:46', '2022-12-20 13:08:46', 26),
(44, '5566643841', 'CWCHYAID', 'Crypto', '100', '3.06828', '96.93172', 'usdt', '99.76230033', 'waiting', '2022-12-20 14:05:10', '2022-12-20 14:05:10', 26),
(45, '4987828710', 'QP1MIFIC', 'Crypto', '100', '4.059703', '95.940297', 'usdt', '99.19712621', 'waiting', '2022-12-20 15:00:02', '2022-12-20 15:00:02', 26),
(46, '6189755336', 'WOJNWQNM', 'Crypto', '100', '2.646959', '97.353041', 'usdt', '99.69937435', 'waiting', '2022-12-21 14:44:10', '2022-12-21 14:44:10', 26),
(47, '5724574824', '3WGLQXE2', 'Crypto', '100', '2.889542', '97.110458', 'usdt', '99.7703545', 'waiting', '2022-12-21 17:51:18', '2022-12-21 17:51:18', 26),
(48, '5782925287', '2W2GRJ8S', 'Crypto', '100', '2.889542', '97.110458', 'usdt', '99.7703545', 'waiting', '2022-12-21 17:51:19', '2022-12-21 17:51:19', 26),
(49, '6079452282', 'XUE5PWGM', 'Crypto', '10000', '164.842268', '9835.157732', 'usdt', '9970.72708065', 'waiting', '2022-12-21 18:12:22', '2022-12-21 18:12:22', 26),
(50, '6153432882', 'BLHPAP9X', 'Crypto', '1000', '16.516015', '983.483985', 'usdt', '997.9297317', 'waiting', '2022-12-22 16:02:33', '2022-12-22 16:02:33', 26),
(51, '4504479593', 'WOD0CP0W', 'Crypto', '1000', '16.516025', '983.483975', 'usdt', '997.9297317', 'waiting', '2022-12-22 16:02:36', '2022-12-22 16:02:36', 26),
(52, '6059259545', 'NOULGI0J', 'Crypto', '1000', '15.406163', '984.593837', 'usdt', '998.03356575', 'waiting', '2022-12-23 12:23:15', '2022-12-23 12:23:15', 54),
(53, '4696243191', 'HOUZ5ZOR', 'Crypto', '100', '3.185926', '96.814074', 'usdt', '99.8216089', 'waiting', '2022-12-23 17:42:30', '2022-12-23 17:42:30', 26),
(54, '5571840019', 'CX4QOCOY', 'Crypto', '1000', '13.883409', '986.116591', 'bnbbsc', '4.0883084', 'waiting', '2022-12-28 19:49:15', '2022-12-28 19:49:15', 26),
(55, '5816996995', 'DRZQTFIL', 'Crypto', '100', '2.55077', '97.44923', 'usdt', '99.90051764', 'waiting', '2022-12-30 02:35:51', '2022-12-30 02:35:51', 26),
(56, '4750649472', '4NZOY9CZ', 'Crypto', '1000', '15.117396', '984.882604', 'usdt', '998.89608341', 'waiting', '2022-12-30 21:39:53', '2022-12-30 21:39:53', 26),
(57, '6307591952', 'FWYDVFOH', 'Crypto', '100', '5.857705', '94.142295', '1inchbsc', '258.28433772', 'waiting', '2022-12-31 06:40:02', '2022-12-31 06:40:02', 57),
(58, '6037530558', 'GKERNMOP', 'Crypto', '10', '1.972921', '8.027079', '1inchbsc', '25.82843377', 'waiting', '2022-12-31 06:41:04', '2022-12-31 06:41:04', 57),
(59, '4331603366', '2UD1ZWEH', 'Crypto', '100', '2.74843', '97.25157', 'usdt', '99.91288353', 'waiting', '2023-01-02 21:43:32', '2023-01-02 21:43:32', 26),
(60, '6398888918', 'LQSFXAYQ', 'Crypto', '1000', '14.524831', '985.475169', 'usdt', '999.23871376', 'waiting', '2023-01-03 17:34:05', '2023-01-03 17:34:05', 26),
(61, '6434388197', 'HKSZNC3U', 'Crypto', '100', '2.744417', '97.255583', 'usdt', '99.94918359', 'waiting', '2023-01-04 17:24:13', '2023-01-04 17:24:13', 26),
(62, '4547454148', 'FYNNJ1RY', 'Crypto', '1000', '16.371781', '983.628219', 'usdt', '997.76680602', 'waiting', '2023-01-04 19:42:51', '2023-01-04 19:42:51', 68),
(63, '5893497562', 'C7NET0EU', 'Crypto', '1000', '14.005184', '985.994816', 'usdt', '999.17418652', 'waiting', '2023-01-07 23:21:20', '2023-01-07 23:21:20', 26),
(64, '5124735343', 'NBPTVVEX', 'Crypto', '20', '2.469805', '17.530195', 'btc', '0.00115763', 'waiting', '2023-01-09 20:10:03', '2023-01-09 20:10:03', 70),
(65, '5602280962', '04XSBYPL', 'Crypto', '100', '12.229372', '87.770628', 'bel', '224.35044421', 'waiting', '2023-01-10 22:48:15', '2023-01-10 22:48:15', 69),
(66, '6106257310', 'AQX2IQRI', 'Crypto', '100', '3.593538', '96.406462', 'usdt', '99.94064512', 'waiting', '2023-01-10 22:49:05', '2023-01-10 22:49:05', 69),
(67, '5935475922', 'GD0LEUBM', 'Crypto', '10', '2.796786', '7.203214', 'usdt', '9.99404461', 'waiting', '2023-01-10 22:51:18', '2023-01-10 22:51:18', 69),
(68, '4697447152', 'NCHMQJSP', 'Crypto', '1000', '22.651914', '977.348086', 'usdt', '993.95619264', 'waiting', '2023-01-13 19:55:39', '2023-01-13 19:55:39', 26),
(69, '5529862174', 'ABFH8U7A', 'Crypto', '100', '3.679601', '96.320399', 'USDT', '99.69977792', 'waiting', '2023-01-17 17:57:33', '2023-01-17 17:57:33', 77),
(70, '5646699145', 'OGZS9CXG', 'Crypto', '15', '1.984401', '13.015599', 'USDT', '14.9814862', 'waiting', '2023-01-18 13:15:23', '2023-01-18 13:15:23', 69),
(71, '4820745383', 'F98SBUSQ', 'Crypto', '12', '2.124799', '9.875201', 'USDTTRC20', '11.99', 'waiting', '2023-01-18 13:17:32', '2023-01-18 13:17:32', 69),
(72, '5854305773', 'DJCDGESL', 'Crypto', '1000', '15.959917', '984.040083', 'usdt', '998.78512302', 'waiting', '2023-01-24 21:49:25', '2023-01-24 21:49:25', 26),
(73, '4413054995', '0C59W6YR', 'Crypto', '20', '2.338522', '17.661478', 'eth', '0.01289274', 'waiting', '2023-01-25 06:02:20', '2023-01-25 06:02:20', 82),
(74, '6141418332', 'ME9BE3X0', 'Crypto', '100', '6.278141', '93.721859', 'busd', '100.15804345', 'waiting', '2023-01-25 06:05:16', '2023-01-25 06:05:16', 82),
(75, '4796736028', 'UNI7VJ9O', 'Crypto', '1000', '14.329011', '985.670989', 'usdt', '999.15961517', 'waiting', '2023-01-27 13:13:46', '2023-01-27 13:13:46', 88),
(76, '5160773419', 'UL9GYO7S', 'Crypto', '100', '3.465626', '96.534374', 'usdt', '99.71670968', 'waiting', '2023-01-29 22:18:07', '2023-01-29 22:18:07', 26),
(77, '5456902517', 'YA2B8KUX', 'Crypto', '100', '7.928168', '92.071832', 'busd', '99.94574311', 'waiting', '2023-02-04 18:59:49', '2023-02-04 18:59:49', 25),
(78, '4431755481', 'QDTNGFZR', 'Crypto', '5000', '79.351845', '4920.648155', 'usdt', '4987.41320185', 'waiting', '2023-02-04 23:56:03', '2023-02-04 23:56:03', 59),
(79, '5419888570', 'D7ZYHRVT', 'Crypto', '1000', '18.208892', '981.791108', 'usdt', '998.17047015', 'waiting', '2023-02-12 21:46:10', '2023-02-12 21:46:10', 107),
(80, '6415600992', 'ENZYIMET', 'Crypto', '1000', '12.46991', '987.53009', 'usdtbsc', '1002.36', 'waiting', '2023-02-17 13:30:46', '2023-02-17 13:30:46', 70);

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
(5, '2022_11_25_092014_create_packages_table', 2),
(7, '2022_11_25_095731_add_account_balance_column_in_users_table', 4),
(8, '2022_11_25_103107_create_transactions_table', 5),
(12, '2022_11_25_093759_create_active_packages_table', 6),
(13, '2022_11_25_121609_add_last_updated_column_in_active_packages_table', 7),
(14, '2022_11_25_131506_add_expire_on_column_in_active_packages_table', 8),
(16, '2022_11_26_124354_add_new_columns_in_active_packages_table', 9),
(17, '2022_11_30_095658_add_reward_balance_in_users_table', 10),
(18, '2022_11_30_101537_create_profits_table', 11),
(19, '2022_12_01_083806_add_wallet__id_column_in_users_table', 12),
(21, '2022_12_01_103732_create_deposits_table', 13),
(22, '2022_12_03_070835_add_user_id_column_in_deposits_table', 14),
(23, '2022_12_03_083853_create_banks_table', 15),
(24, '2022_12_03_084250_create_withdraws_table', 16),
(25, '2022_12_03_091917_add_after_amount_column_in_transactions_table', 17),
(26, '2022_12_03_100427_add_verified_at_column_in_users_table', 18),
(28, '2022_12_03_115514_create_rewards_table', 19),
(29, '2022_12_03_130057_create_active_rewards_table', 20),
(30, '2022_12_03_135659_add_expiry_date_column_in_active_rewards_table', 21),
(31, '2022_12_03_150532_add_amount_column_in_rewards_table', 22),
(32, '2022_12_03_153128_add_is_completed_column_in_rewards_table', 23),
(33, '2022_12_04_054922_add_user_type_column_in_users_table', 24),
(34, '2022_12_08_195847_add_profit_balance_column_in_users_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `update_after` varchar(255) DEFAULT NULL,
  `no_days` varchar(255) DEFAULT NULL,
  `multiplier` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `max_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `type`, `percentage`, `update_after`, `no_days`, `multiplier`, `min_amount`, `max_amount`, `created_at`, `updated_at`) VALUES
(1, 'Minute Plus', 'Time', '5', '1', '0.00069', NULL, NULL, NULL, '2022-11-25 09:46:48', '2022-11-25 09:46:48'),
(2, 'Day Plus', 'Time', '7', '24', '1', NULL, NULL, NULL, '2022-11-25 10:53:09', '2022-11-25 10:53:09'),
(3, 'Amateur', 'Time', '9', '7', '7', NULL, NULL, NULL, '2022-11-26 08:47:03', '2022-11-26 08:47:03'),
(4, 'Hustler', 'Time', '12', '30', '30', NULL, NULL, NULL, '2022-11-26 10:08:44', '2022-11-26 10:08:44'),
(5, 'Expert', 'Time', '14', '90', '90', NULL, NULL, NULL, '2022-11-26 10:22:02', '2022-11-26 10:22:02'),
(6, 'Veteran', 'Multiplier', '8', '30', '30', '2', '100', '500', '2022-11-26 12:12:38', '2022-11-26 12:12:38'),
(7, 'Professional', 'Multiplier', '12', '30', '30', '3', '501', '1200', '2022-12-03 19:27:17', '2022-12-03 19:27:17'),
(8, 'Master', 'Multiplier', '14', '30', '30', '4', '1201', '10000', '2022-12-03 19:27:17', '2022-12-03 19:27:17');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `tab_link` varchar(255) NOT NULL,
  `can_create` varchar(255) NOT NULL DEFAULT '0',
  `can_update` varchar(255) NOT NULL DEFAULT '0',
  `can_delete` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profits`
--

CREATE TABLE `profits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level1_profit` int(11) NOT NULL,
  `level2_profit` int(11) NOT NULL,
  `level3_profit` int(11) NOT NULL,
  `level1_reward` int(11) NOT NULL,
  `level2_reward` int(11) NOT NULL,
  `level3_reward` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profits`
--

INSERT INTO `profits` (`id`, `level1_profit`, `level2_profit`, `level3_profit`, `level1_reward`, `level2_reward`, `level3_reward`, `created_at`, `updated_at`) VALUES
(1, 14, 5, 2, 6, 2, 1, '2022-12-15 18:15:11', '2022-12-15 18:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reward` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `reward_image` varchar(255) NOT NULL,
  `days_required` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `reward`, `type`, `reward_image`, `days_required`, `created_at`, `updated_at`, `amount`) VALUES
(1, '50', 'amount', 'reward50.png', '5', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '50'),
(2, '100', 'amount', 'reward100.png', '15', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '100'),
(3, '200', 'amount', 'reward200.png', '30', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '200'),
(4, 'Androind phone worth $350', 'product', 'reward_android.png', '45', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '350'),
(5, '500', 'amount', 'reward500.png', '60', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '500'),
(6, 'Iphone worth $1000', 'product', 'reward1000.png', '90', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '1000'),
(7, 'International Tour worth $1200', 'product', 'reward_tour.png', '50', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '1200'),
(8, '660 CC Car worth $8000', 'product', 'reward660.png', '360', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '8000'),
(9, 'Luxury Car worth $20000', 'product', 'reward_car.png', '500', '2022-12-03 12:08:46', '2022-12-03 12:08:46', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transfer_fee` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `transfer_fee`, `created_at`, `updated_at`) VALUES
(1, '5', '2022-12-13 07:03:42', '2022-12-13 07:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tab_name` varchar(255) NOT NULL,
  `tab_icon` varchar(255) NOT NULL,
  `tab_link` varchar(255) NOT NULL,
  `is_child` varchar(255) NOT NULL DEFAULT '0',
  `parent_id` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `tab_name`, `tab_icon`, `tab_link`, `is_child`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'monitor', 'admin/dashboard', '0', '0', '2022-12-14 09:30:12', '2022-12-14 09:30:12'),
(2, 'Users', 'users', 'admin/users', '0', '0', '2022-12-14 09:30:12', '2022-12-14 09:30:12'),
(3, 'Send Balance', 'send', 'admin/send-balance', '0', '0', '2022-12-14 09:31:39', '2022-12-14 09:31:39'),
(4, 'Withdraws', 'minus-circle', 'admin/withdraws', '0', '0', '2022-12-14 09:32:16', '2022-12-14 09:32:16'),
(5, 'Account Balances', 'dollar-sign', 'admin/account-balances', '0', '0', '2022-12-14 09:32:55', '2022-12-14 09:32:55'),
(6, 'Transactions', 'file-text', 'admin/transactions', '0', '0', '2022-12-14 09:32:55', '2022-12-14 09:32:55'),
(7, 'Deposits', 'plus-circle', 'admin/deposits', '0', '0', '2022-12-14 09:32:55', '2022-12-14 09:32:55'),
(8, 'Active Rewards', 'gift', 'admin/active-rewards', '0', '0', '2022-12-14 09:32:55', '2022-12-14 09:32:55'),
(9, 'Rewards', 'gift', 'admin/rewards', '0', '0', '2022-12-14 09:32:55', '2022-12-14 09:32:55'),
(10, 'Active Packages', 'package', 'admin/active-packages', '0', '0', '2022-12-14 09:35:54', '2022-12-14 09:35:54'),
(11, 'Packages', 'package', 'admin/packages', '0', '0', '2022-12-14 09:35:54', '2022-12-14 09:35:54'),
(12, 'Roles and Permissions', 'book', 'admin/roles', '0', '0', '2022-12-14 10:19:39', '2022-12-14 10:19:39'),
(13, 'Team Management', 'user+plus', 'admin/team-management', '0', '0', '2022-12-14 10:19:39', '2022-12-14 10:19:39'),
(14, 'System Settings', 'settings', 'admin/system-settings', '0', '0', '2022-12-14 17:57:49', '2022-12-14 17:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `inout` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `after_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_id`, `reason`, `amount`, `inout`, `created_at`, `updated_at`, `after_amount`) VALUES
(55, 25, 'HCLGZWBTHF', '$11500 received from Rexoplus', '11500', 1, '2022-12-15 09:27:46', '2022-12-15 09:27:46', '11500'),
(56, 25, 'XRJPOIDKOZ', 'Day Plus subscribed with $1500', '1500', 0, '2022-12-15 09:30:10', '2022-12-15 09:30:10', '10000'),
(57, 25, 'I2TFKPLJBJ', 'Minute Plus subscribed with $2000', '2000', 0, '2022-12-15 09:32:14', '2022-12-15 09:32:14', '8000'),
(58, 25, 'MHL9JIMQHY', 'Amateur subscribed with $1000', '1000', 0, '2022-12-15 09:32:59', '2022-12-15 09:32:59', '7000'),
(59, 25, 'B7ZANZYWKB', 'Amateur subscribed with $1000', '1000', 0, '2022-12-15 09:46:41', '2022-12-15 09:46:41', '6000'),
(60, 25, '63VMBXGKOP', 'Hustler subscribed with $1000', '1000', 0, '2022-12-15 09:47:19', '2022-12-15 09:47:19', '5000'),
(61, 25, 'FKOMIC80WH', 'Expert subscribed with $3000', '3000', 0, '2022-12-15 09:49:26', '2022-12-15 09:49:26', '2000'),
(62, 25, 'QURP1I3LY0', 'Minute Plus subscribed with $500', '500', 0, '2022-12-15 13:04:24', '2022-12-15 13:04:24', '1500'),
(63, 25, 'YJGXKADH7D', '$0.9218 transferred to main wallet successfully', '0.9218', 1, '2022-12-15 15:34:44', '2022-12-15 15:34:44', '1500.9218'),
(64, 26, 'SCSOJCI1ZC', '$20000 received from Rexoplus', '20000', 1, '2022-12-15 16:19:13', '2022-12-15 16:19:13', '20000'),
(65, 26, 'BUB4JCAV0E', 'Minute Plus subscribed with $7000', '7000', 0, '2022-12-15 16:24:04', '2022-12-15 16:24:04', '13000'),
(66, 26, 'PPX1MVMBT2', 'Minute Plus subscribed with $7000', '7000', 0, '2022-12-15 16:24:31', '2022-12-15 16:24:31', '6000'),
(67, 26, 'KR6KVU6NCL', 'Veteran subscribed with $500', '500', 0, '2022-12-15 16:26:32', '2022-12-15 16:26:32', '5500'),
(71, 25, 'QOCBMKBROO', '$8.333 transferred to main wallet successfully', '8.333', 1, '2022-12-16 19:36:02', '2022-12-16 19:36:02', '1509.2548'),
(72, 26, 'UWCO4U1MYS', '$40.8143 transferred to main wallet successfully', '40.8143', 1, '2022-12-17 10:38:59', '2022-12-17 10:38:59', '5540.8143'),
(73, 26, 'RCC4QA94AH', '$3.1559 transferred to main wallet successfully', '3.1559', 1, '2022-12-17 13:54:49', '2022-12-17 13:54:49', '5543.9702'),
(74, 26, 'GMRTRLPUNW', 'Minute Plus subscribed with $500', '500', 0, '2022-12-17 13:56:28', '2022-12-17 13:56:28', '5043.9702'),
(75, 25, 'MW9J1ZXGYN', '$70 profit on $500 Invested by Muneeb shakeel', '70', 1, '2022-12-17 13:56:28', '2022-12-17 13:56:28', '1579.2548'),
(76, 25, 'XCTYJQNBK9', '$30 reward profit on $500 Invested by Muneeb shakeel', '30', 1, '2022-12-17 13:56:29', '2022-12-17 13:56:29', '1579.2548'),
(77, 26, 'EPZ8KNSZYM', '$105 sent to Waqar Ali', '105', 0, '2022-12-17 14:03:33', '2022-12-17 14:03:33', '4938.9702'),
(78, 25, 'ZUAJYUHCES', '$100 received from Muneeb shakeel', '100', 1, '2022-12-17 14:03:34', '2022-12-17 14:03:34', '1679.2548'),
(79, 26, 'DYYPVTRBMC', '$105 sent to Waqar Ali', '105', 0, '2022-12-17 14:03:35', '2022-12-17 14:03:35', '4833.9702'),
(80, 25, 'ZMXIOS7LL2', '$100 received from Muneeb shakeel', '100', 1, '2022-12-17 14:03:36', '2022-12-17 14:03:36', '1779.2548'),
(81, 26, 'SYMRSZMQGW', '$2.9185 transferred to main wallet successfully', '2.9185', 1, '2022-12-17 16:49:40', '2022-12-17 16:49:40', '4836.8887'),
(82, 26, 'QBE1KATHIF', 'Minute Plus subscribed with $50', '50', 0, '2022-12-17 16:55:48', '2022-12-17 16:55:48', '4786.8887'),
(83, 25, '6WLV1FMGHV', '$7 profit on $50 Invested by Muneeb shakeel', '7', 1, '2022-12-17 16:55:49', '2022-12-17 16:55:49', '1786.2548'),
(84, 25, '8HI6C0IUCP', '$3 reward profit on $50 Invested by Muneeb shakeel', '3', 1, '2022-12-17 16:55:50', '2022-12-17 16:55:50', '1786.2548'),
(85, 26, 'N97TCYFT5F', '$0.3605 transferred to main wallet successfully', '0.3605', 1, '2022-12-17 17:11:30', '2022-12-17 17:11:30', '4787.2492'),
(86, 26, 'Z7JQLAQQ4P', '$52.5 sent to Sohaib siddique', '52.5', 0, '2022-12-17 20:28:12', '2022-12-17 20:28:12', '4734.7492'),
(87, 37, 'Z6KI31PR5V', '$50 received from Muneeb shakeel', '50', 1, '2022-12-17 20:28:13', '2022-12-17 20:28:13', '50'),
(88, 37, 'YIYLBROSVS', 'Minute Plus subscribed with $50', '50', 0, '2022-12-17 20:31:33', '2022-12-17 20:31:33', '0'),
(89, 26, 'Y1UGQYKSMX', '$7 profit on $50 Invested by Sohaib siddique', '7', 1, '2022-12-17 20:31:34', '2022-12-17 20:31:34', '4741.7492'),
(90, 26, 'OY91VHICXH', '$3 reward profit on $50 Invested by Sohaib siddique', '3', 1, '2022-12-17 20:31:35', '2022-12-17 20:31:35', '4741.7492'),
(91, 25, 'C9LTMXAHMH', '$2.5 profit on $50 Invested by Sohaib siddique', '2.5', 1, '2022-12-17 20:31:35', '2022-12-17 20:31:35', '1788.7548'),
(92, 25, '54VQZDEHSG', '$1 reward profit on $50 Invested by Sohaib siddique', '1', 1, '2022-12-17 20:31:36', '2022-12-17 20:31:36', '1788.7548'),
(93, 26, '4OCMOZVEKY', '$4.769 transferred to main wallet successfully', '4.769', 1, '2022-12-17 21:56:21', '2022-12-17 21:56:21', '4746.5182'),
(94, 26, 'NVQUUZ1PUN', '$10000 received from Rexoplus', '10000', 1, '2022-12-18 03:20:01', '2022-12-18 03:20:01', '14746.5182'),
(95, 25, '7Y0176JVJA', '$3000 received from Rexoplus', '3000', 1, '2022-12-18 03:23:47', '2022-12-18 03:23:47', '4788.7548'),
(96, 25, 'OFPWBQWUCJ', '$13.584 transferred to main wallet successfully', '13.584', 1, '2022-12-18 09:46:11', '2022-12-18 09:46:11', '4802.3388'),
(98, 26, 'XYYOMPGKOL', '$16.1471 transferred to main wallet successfully', '16.1471', 1, '2022-12-18 14:01:23', '2022-12-18 14:01:23', '14762.6653'),
(99, 26, '4UYVDOQ052', '$525 sent to Mian Ali', '525', 0, '2022-12-18 14:35:04', '2022-12-18 14:35:04', '14237.6653'),
(100, 39, 'NEGPLRKHBD', '$500 received from Muneeb shakeel', '500', 1, '2022-12-18 14:35:05', '2022-12-18 14:35:05', '500'),
(101, 39, 'KQAB9K4TQ7', 'Amateur subscribed with $500', '500', 0, '2022-12-18 14:43:49', '2022-12-18 14:43:49', '0'),
(102, 26, 'YTLW60MV3Q', '$0.7787 transferred to main wallet successfully', '0.7787', 1, '2022-12-18 14:48:03', '2022-12-18 14:48:03', '14238.444'),
(103, 25, 'IUXS2CTGUM', 'Minute Plus subscribed with $1000', '1000', 0, '2022-12-18 15:10:21', '2022-12-18 15:10:21', '3802.3388'),
(104, 26, 'SRQ4UI6JLD', 'Veteran subscribed with $500', '500', 0, '2022-12-18 18:38:24', '2022-12-18 18:38:24', '13738.444'),
(105, 25, 'LQOHOI74XT', '$70 profit on $500 Invested by Muneeb shakeel', '70', 1, '2022-12-18 18:38:25', '2022-12-18 18:38:25', '3872.3388'),
(106, 25, 'UQACH14AYE', '$30 reward profit on $500 Invested by Muneeb shakeel', '30', 1, '2022-12-18 18:38:26', '2022-12-18 18:38:26', '3872.3388'),
(107, 25, 'NTEQQE8OMW', '$3150 sent to Sumaira Rida', '3150', 0, '2022-12-18 20:33:51', '2022-12-18 20:33:51', '722.3388'),
(108, 44, '17ZBVT7Y8Y', '$3000 received from Waqar Ali', '3000', 1, '2022-12-18 20:33:52', '2022-12-18 20:33:52', '3000'),
(109, 44, 'VQEQRAM2SD', 'Minute Plus subscribed with $1000', '1000', 0, '2022-12-18 20:36:23', '2022-12-18 20:36:23', '2000'),
(110, 25, 'PRYBLLVIBC', '$140 profit on $1000 Invested by Sumaira Rida', '140', 1, '2022-12-18 20:36:24', '2022-12-18 20:36:24', '862.3388'),
(111, 25, '8UPVIUOGOF', '$60 reward profit on $1000 Invested by Sumaira Rida', '60', 1, '2022-12-18 20:36:25', '2022-12-18 20:36:25', '862.3388'),
(112, 44, 'OJSP3SVVNA', 'Day Plus subscribed with $1000', '1000', 0, '2022-12-18 20:36:48', '2022-12-18 20:36:48', '1000'),
(113, 25, 'GNYGDKBXCR', '$140 profit on $1000 Invested by Sumaira Rida', '140', 1, '2022-12-18 20:36:49', '2022-12-18 20:36:49', '1002.3388'),
(114, 25, 'FYECAG2UDK', '$60 reward profit on $1000 Invested by Sumaira Rida', '60', 1, '2022-12-18 20:36:49', '2022-12-18 20:36:49', '1002.3388'),
(115, 44, 'OBZPXQ1M8Z', 'Hustler subscribed with $1000', '1000', 0, '2022-12-18 20:37:07', '2022-12-18 20:37:07', '0'),
(116, 25, 'AZPCNXZGRU', '$140 profit on $1000 Invested by Sumaira Rida', '140', 1, '2022-12-18 20:37:08', '2022-12-18 20:37:08', '1142.3388'),
(117, 25, '1M8OIIVAZ7', '$60 reward profit on $1000 Invested by Sumaira Rida', '60', 1, '2022-12-18 20:37:08', '2022-12-18 20:37:08', '1142.3388'),
(118, 44, 'EG5YW4PVNG', '$0.0047 transferred to main wallet successfully', '0.0047', 1, '2022-12-18 20:39:56', '2022-12-18 20:39:56', '0.0047'),
(119, 26, '1FH9YDJMWJ', '$6.4599 transferred to main wallet successfully', '6.4599', 1, '2022-12-18 21:13:32', '2022-12-18 21:13:32', '13744.9039'),
(120, 37, 'C5HQ1MY03K', '$0.0865 transferred to main wallet successfully', '0.0865', 1, '2022-12-18 21:30:40', '2022-12-18 21:30:40', '0.0865'),
(121, 37, 'ZOVRREPPBN', '$0 transferred to main wallet successfully', '0', 1, '2022-12-18 21:30:42', '2022-12-18 21:30:42', '0.0865'),
(122, 26, 'X4QRZOX2LM', 'Master subscribed with $1201', '1201', 0, '2022-12-19 11:54:10', '2022-12-19 11:54:10', '12543.9039'),
(123, 25, 'NYDCGMDRRS', '$168.14 profit on $1201 Invested by Muneeb shakeel', '168.14', 1, '2022-12-19 11:54:10', '2022-12-19 11:54:10', '1310.4788'),
(124, 25, 'CY1XKXRWCW', '$72.06 reward profit on $1201 Invested by Muneeb shakeel', '72.06', 1, '2022-12-19 11:54:11', '2022-12-19 11:54:11', '1310.4788'),
(125, 25, 'RJPJ9IAEYY', '$10.9081 transferred to main wallet successfully', '10.9081', 1, '2022-12-19 17:59:06', '2022-12-19 17:59:06', '1321.3869'),
(126, 26, 'HGBRIGSXXK', '$40.0916 transferred to main wallet successfully', '40.0916', 1, '2022-12-20 13:10:04', '2022-12-20 13:10:04', '12583.9955'),
(127, 26, 'MKBEEUJXCG', '$105 sent to Naeem butt', '105', 0, '2022-12-20 13:29:50', '2022-12-20 13:29:50', '12478.9955'),
(128, 46, 'MROMNTAVMO', '$100 received from Muneeb shakeel', '100', 1, '2022-12-20 13:29:51', '2022-12-20 13:29:51', '100'),
(129, 46, 'GBOAGKEU2S', 'Minute Plus subscribed with $100', '100', 0, '2022-12-20 13:32:41', '2022-12-20 13:32:41', '0'),
(130, 26, 'Q5T2PCUGOI', '$1.4564 transferred to main wallet successfully', '1.4564', 1, '2022-12-20 14:37:01', '2022-12-20 14:37:01', '12480.4519'),
(131, 26, 'CHYBBKIYOF', '$0.4186 transferred to main wallet successfully', '0.4186', 1, '2022-12-20 15:01:55', '2022-12-20 15:01:55', '12480.8705'),
(132, 25, 'Q3IWG25CGS', '$8.7682 transferred to main wallet successfully', '8.7682', 1, '2022-12-20 15:47:22', '2022-12-20 15:47:22', '1330.1551'),
(133, 45, 'DJJFVFXNIT', '$10000 received from Rexoplus', '10000', 1, '2022-12-20 17:33:58', '2022-12-20 17:33:58', '10000'),
(134, 26, '3PGDBGKTNR', '$23.2499 transferred to main wallet successfully', '23.2499', 1, '2022-12-21 14:11:12', '2022-12-21 14:11:12', '12504.1204'),
(135, 26, 'DXIA9FVC6D', '$105 sent to Muhammad Tayyab', '105', 0, '2022-12-21 15:10:29', '2022-12-21 15:10:29', '12399.1204'),
(136, 49, 'AP54DGPSFG', '$100 received from Muneeb shakeel', '100', 1, '2022-12-21 15:10:29', '2022-12-21 15:10:29', '100'),
(137, 26, 'AH9N6EPDXP', '$105 sent to Muhammad Tayyab', '105', 0, '2022-12-21 15:10:36', '2022-12-21 15:10:36', '12294.1204'),
(138, 49, '44IMVZ1PS7', '$100 received from Muneeb shakeel', '100', 1, '2022-12-21 15:10:37', '2022-12-21 15:10:37', '200'),
(139, 49, 'GLRTESYYS2', 'Amateur subscribed with $100', '100', 0, '2022-12-21 15:13:52', '2022-12-21 15:13:52', '100'),
(140, 26, 'GQTHSIQTB7', '$14 profit on $100 Invested by Muhammad Tayyab', '14', 1, '2022-12-21 15:13:53', '2022-12-21 15:13:53', '12308.1204'),
(141, 26, '1BJIXWMMWH', '$6 reward profit on $100 Invested by Muhammad Tayyab', '6', 1, '2022-12-21 15:13:54', '2022-12-21 15:13:54', '12308.1204'),
(142, 25, 'MZDRC8BK9W', '$5 profit on $100 Invested by Muhammad Tayyab', '5', 1, '2022-12-21 15:13:54', '2022-12-21 15:13:54', '1335.1551'),
(143, 25, 'K6SHELYLCW', '$2 reward profit on $100 Invested by Muhammad Tayyab', '2', 1, '2022-12-21 15:13:55', '2022-12-21 15:13:55', '1335.1551'),
(144, 49, 'PFHD3VKUBY', 'Hustler subscribed with $100', '100', 0, '2022-12-21 15:17:40', '2022-12-21 15:17:40', '0'),
(145, 26, 'TAPFLSHVVV', '$14 profit on $100 Invested by Muhammad Tayyab', '14', 1, '2022-12-21 15:17:41', '2022-12-21 15:17:41', '12322.1204'),
(146, 26, 'QQBWLHOWF1', '$6 reward profit on $100 Invested by Muhammad Tayyab', '6', 1, '2022-12-21 15:17:41', '2022-12-21 15:17:41', '12322.1204'),
(147, 25, 'TT8XT8UVDA', '$5 profit on $100 Invested by Muhammad Tayyab', '5', 1, '2022-12-21 15:17:42', '2022-12-21 15:17:42', '1340.1551'),
(148, 25, '8CXKULV4VG', '$2 reward profit on $100 Invested by Muhammad Tayyab', '2', 1, '2022-12-21 15:17:43', '2022-12-21 15:17:43', '1340.1551'),
(149, 26, '2I7RWZWYH2', '$3.6404 transferred to main wallet successfully', '3.6404', 1, '2022-12-21 17:49:04', '2022-12-21 17:49:04', '12325.7608'),
(150, 26, 'YV1YQOYB27', '$105 sent to ZainAnwar', '105', 0, '2022-12-21 18:07:04', '2022-12-21 18:07:04', '12220.7608'),
(151, 50, '6ZSK8RTEO6', '$100 received from Muneeb shakeel', '100', 1, '2022-12-21 18:07:05', '2022-12-21 18:07:05', '100'),
(152, 50, 'SRS8QEIFDO', 'Hustler subscribed with $100', '100', 0, '2022-12-21 18:09:56', '2022-12-21 18:09:56', '0'),
(153, 26, 'MO4OVOCWKB', '$157.5 sent to Muhammad Mashood', '157.5', 0, '2022-12-22 15:37:42', '2022-12-22 15:37:42', '12063.2608'),
(154, 51, 'UOQRP5GCTN', '$150 received from Muneeb shakeel', '150', 1, '2022-12-22 15:37:43', '2022-12-22 15:37:43', '150'),
(155, 51, 'QVSG7LNRID', 'Minute Plus subscribed with $150', '150', 0, '2022-12-22 15:43:25', '2022-12-22 15:43:25', '0'),
(156, 49, '7PEXQFEXLY', '$21 profit on $150 Invested by Muhammad Mashood', '21', 1, '2022-12-22 15:43:26', '2022-12-22 15:43:26', '21'),
(157, 49, 'RAVBLDIEWK', '$9 reward profit on $150 Invested by Muhammad Mashood', '9', 1, '2022-12-22 15:43:26', '2022-12-22 15:43:26', '21'),
(158, 26, 'VO3GBFFK5M', '$7.5 profit on $150 Invested by Muhammad Mashood', '7.5', 1, '2022-12-22 15:43:27', '2022-12-22 15:43:27', '12070.7608'),
(159, 26, 'IK2OCCMPXL', '$3 reward profit on $150 Invested by Muhammad Mashood', '3', 1, '2022-12-22 15:43:28', '2022-12-22 15:43:28', '12070.7608'),
(160, 25, 'E32WOBBPVV', '$3 profit on $150 Invested by Muhammad Mashood', '3', 1, '2022-12-22 15:43:28', '2022-12-22 15:43:28', '1343.1551'),
(161, 25, 'R6N2FVQBNR', '$1.5 reward profit on $150 Invested by Muhammad Mashood', '1.5', 1, '2022-12-22 15:43:29', '2022-12-22 15:43:29', '1343.1551'),
(162, 51, 'RBMWP63TX2', '$0.0004 transferred to main wallet successfully', '0.0004', 1, '2022-12-22 15:44:28', '2022-12-22 15:44:28', '0.0004'),
(163, 25, 'A9KGSACCLE', '$60.6935 transferred to main wallet successfully', '60.6935', 1, '2022-12-22 16:12:34', '2022-12-22 16:12:34', '1403.8486'),
(164, 26, 'X4ELLOXPYK', 'Request for $100 withdraw initiated', '100', 0, '2022-12-22 23:11:58', '2022-12-22 23:11:58', '11970.7608'),
(165, 25, 'KZ38NVHEZ7', '$3.9448 transferred to main wallet successfully', '3.9448', 1, '2022-12-23 08:33:13', '2022-12-23 08:33:13', '1407.7934'),
(166, 51, 'KFS2HIBAPT', '$0.2066 transferred to main wallet successfully', '0.2066', 1, '2022-12-23 11:41:54', '2022-12-23 11:41:54', '0.207'),
(167, 51, 'E2MLTN4MGC', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2022-12-23 11:43:20', '2022-12-23 11:43:20', '0.2072'),
(170, 26, 'RCHNEUUTPI', '$42.7699 transferred to main wallet successfully', '42.7699', 1, '2022-12-23 12:24:53', '2022-12-23 12:24:53', '12013.5307'),
(171, 26, 'NOBNRWFGVD', '$0 transferred to main wallet successfully', '0', 1, '2022-12-23 12:25:01', '2022-12-23 12:25:01', '12013.5307'),
(172, 26, 'M9S5E5FW9U', '$105 sent to Waqas ameen', '105', 0, '2022-12-23 12:26:34', '2022-12-23 12:26:34', '11908.5307'),
(173, 54, 'IMJ0LHZFDC', '$100 received from Muneeb shakeel', '100', 1, '2022-12-23 12:26:35', '2022-12-23 12:26:35', '100'),
(174, 54, 'VCBWYFBFIB', 'Hustler subscribed with $100', '100', 0, '2022-12-23 12:30:54', '2022-12-23 12:30:54', '0'),
(175, 26, 'IVJ7H6K5I3', '$5.355 transferred to main wallet successfully', '5.355', 1, '2022-12-23 17:44:55', '2022-12-23 17:44:55', '11913.8857'),
(176, 26, 'VFPGKNG8FE', '$0.0081 transferred to main wallet successfully', '0.0081', 1, '2022-12-23 17:45:08', '2022-12-23 17:45:08', '11913.8938'),
(177, 26, 'CRXFTRQ8SH', '$0 transferred to main wallet successfully', '0', 1, '2022-12-23 17:45:18', '2022-12-23 17:45:18', '11913.8938'),
(178, 26, 'REWRWJOKDX', '$52.5 sent to Rehanakber', '52.5', 0, '2022-12-23 18:00:09', '2022-12-23 18:00:09', '11861.3938'),
(179, 55, 'IA8DSWAM9A', '$50 received from Muneeb shakeel', '50', 1, '2022-12-23 18:00:09', '2022-12-23 18:00:09', '50'),
(180, 26, 'LPSAAJD3AZ', '$52.5 sent to Rehanakber', '52.5', 0, '2022-12-23 18:00:10', '2022-12-23 18:00:10', '11808.8938'),
(181, 55, 'DDHLVG2UDR', '$50 received from Muneeb shakeel', '50', 1, '2022-12-23 18:00:10', '2022-12-23 18:00:10', '100'),
(182, 55, 'AEK6JTFXWU', 'Amateur subscribed with $100', '100', 0, '2022-12-23 18:13:00', '2022-12-23 18:13:00', '0'),
(183, 51, 'STUFFJF5KY', '$0.3086 transferred to main wallet successfully', '0.3086', 1, '2022-12-24 22:31:33', '2022-12-24 22:31:33', '0.5158'),
(184, 39, 'RLZWD2UP7O', '$10.5 transferred to main wallet successfully', '10.5', 1, '2022-12-25 14:56:41', '2022-12-25 14:56:41', '10.5'),
(185, 51, 'ZFTAK5LJ6P', '$0.1972 transferred to main wallet successfully', '0.1972', 1, '2022-12-25 17:35:07', '2022-12-25 17:35:07', '0.713'),
(186, 51, 'FQ4AMAI4YN', '$0 transferred to main wallet successfully', '0', 1, '2022-12-25 17:35:10', '2022-12-25 17:35:10', '0.713'),
(187, 25, 'MUCQEQ16PG', '$105 sent to Amanullah', '105', 0, '2022-12-25 19:48:11', '2022-12-25 19:48:11', '1302.7934'),
(188, 48, 'EGRCZIIHD2', '$100 received from Waqar Ali', '100', 1, '2022-12-25 19:48:12', '2022-12-25 19:48:12', '100'),
(189, 26, 'UPCT1UVIL4', 'Request for $100 withdraw to Bank initiated', '100', 0, '2022-12-25 21:55:27', '2022-12-25 21:55:27', '11708.8938'),
(190, 25, 'YKS8WXBP9O', '$33.2943 transferred to main wallet successfully', '33.2943', 1, '2022-12-26 21:26:18', '2022-12-26 21:26:18', '1336.0877'),
(191, 26, 'VOJSS7JXG7', '$95.352 transferred to main wallet successfully', '95.352', 1, '2022-12-27 21:43:50', '2022-12-27 21:43:50', '11804.2458'),
(192, 26, 'A6F45TPVP3', '$105 sent to ZainAnwar', '105', 0, '2022-12-28 19:48:37', '2022-12-28 19:48:37', '11699.2458'),
(193, 50, '9LEBIVSIZN', '$100 received from Muneeb shakeel', '100', 1, '2022-12-28 19:48:37', '2022-12-28 19:48:37', '100'),
(194, 50, 'DOQ9MGY50B', 'Minute Plus subscribed with $100', '100', 0, '2022-12-28 20:03:07', '2022-12-28 20:03:07', '0'),
(195, 50, 'PM3QF6KN2D', '$0.0004 transferred to main wallet successfully', '0.0004', 1, '2022-12-28 20:06:11', '2022-12-28 20:06:11', '0.0004'),
(196, 50, 'SEBNICHWC1', '$0.0106 transferred to main wallet successfully', '0.0106', 1, '2022-12-28 21:38:10', '2022-12-28 21:38:10', '0.011'),
(197, 50, 'STGRFVCMQX', '$0.0052 transferred to main wallet successfully', '0.0052', 1, '2022-12-28 22:23:30', '2022-12-28 22:23:30', '0.0162'),
(198, 50, 'RFXQJX4L6Y', '$0.009 transferred to main wallet successfully', '0.009', 1, '2022-12-28 23:41:41', '2022-12-28 23:41:41', '0.0252'),
(199, 26, '2K6JF4GJ4U', '$54.482 transferred to main wallet successfully', '54.482', 1, '2022-12-30 03:59:48', '2022-12-30 03:59:48', '11753.7278'),
(200, 26, 'RVTFZ70ECT', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2022-12-30 03:59:49', '2022-12-30 03:59:49', '11753.7279'),
(201, 26, '0S1DTZUT4B', '$0 transferred to main wallet successfully', '0', 1, '2022-12-30 03:59:51', '2022-12-30 03:59:51', '11753.7279'),
(202, 49, 'EC2OTFCQVF', '$2.1 transferred to main wallet successfully', '2.1', 1, '2022-12-30 21:01:04', '2022-12-30 21:01:04', '23.1'),
(203, 51, 'RYVD33MKZ2', '$1.2778 transferred to main wallet successfully', '1.2778', 1, '2022-12-30 21:03:03', '2022-12-30 21:03:03', '1.9908'),
(204, 26, '3KVV12AVOV', '$17.6696 transferred to main wallet successfully', '17.6696', 1, '2022-12-30 21:35:44', '2022-12-30 21:35:44', '11771.3975'),
(205, 26, '5GTQJNAE21', '$105 sent to Haider Attique', '105', 0, '2022-12-30 21:44:39', '2022-12-30 21:44:39', '11666.3975'),
(206, 56, 'LZAAMNRUCE', '$100 received from Muneeb shakeel', '100', 1, '2022-12-30 21:44:39', '2022-12-30 21:44:39', '100'),
(207, 25, 'BEKFS9G7BT', 'Minute Plus subscribed with $300', '300', 0, '2022-12-30 22:17:55', '2022-12-30 22:17:55', '1036.0877'),
(208, 50, 'YAY9T4ESHU', '$0.3229 transferred to main wallet successfully', '0.3229', 1, '2022-12-30 22:29:30', '2022-12-30 22:29:30', '0.3481'),
(209, 25, 'YO2JISQAXC', 'Hustler subscribed with $100', '100', 0, '2022-12-30 22:40:20', '2022-12-30 22:40:20', '936.0877'),
(210, 26, 'TWE4OKUJ6Z', 'Hustler subscribed with $100', '100', 0, '2022-12-30 22:41:35', '2022-12-30 22:41:35', '11566.3975'),
(211, 25, '4OFGGT2LYC', '$14 profit on $100 Invested by Muneeb shakeel', '14', 1, '2022-12-30 22:41:35', '2022-12-30 22:41:35', '950.0877'),
(212, 25, 'FS0SBJT2AL', '$6 reward profit on $100 Invested by Muneeb shakeel', '6', 1, '2022-12-30 22:41:36', '2022-12-30 22:41:36', '950.0877'),
(213, 56, 'PBOA3SGKPU', 'Hustler subscribed with $100', '100', 0, '2022-12-30 22:43:01', '2022-12-30 22:43:01', '0'),
(214, 57, '6FIJKHWIML', 'Hustler subscribed with $100', '100', 0, '2022-12-30 22:43:22', '2022-12-30 22:43:22', '400'),
(215, 26, 'U4XTPOUP2L', '$3.6904 transferred to main wallet successfully', '3.6904', 1, '2022-12-31 01:16:12', '2022-12-31 01:16:12', '11570.0879'),
(216, 26, 'U3H7GAHY8X', '$0 transferred to main wallet successfully', '0', 1, '2022-12-31 01:16:13', '2022-12-31 01:16:13', '11570.0879'),
(217, 26, 'N99NURDDY9', '$0 transferred to main wallet successfully', '0', 1, '2022-12-31 01:16:14', '2022-12-31 01:16:14', '11570.0879'),
(218, 26, 'YY6CPF0RRF', 'You cancelled the package. $70 added to your wallet', '70', 1, '2022-12-31 01:17:07', '2022-12-31 01:17:07', '11640.0879'),
(219, 57, 'THTE6QSQE5', '$2.1 sent to Rexpoplus User', '2.1', 0, '2022-12-31 06:46:42', '2022-12-31 06:46:42', '397.9'),
(220, 19, 'IF9MFJA79C', '$2 received from Muhammad Zubair', '2', 1, '2022-12-31 06:46:54', '2022-12-31 06:46:54', '2'),
(221, 57, 'QR4VFS1NLM', 'Request for $10 withdraw to Bank initiated', '10', 0, '2022-12-31 06:51:56', '2022-12-31 06:51:56', '387.9'),
(222, 57, 'GQYDUH7CRG', 'Request for $10 withdraw to MartinPay initiated', '10', 0, '2022-12-31 07:05:13', '2022-12-31 07:05:13', '377.9'),
(223, 57, 'HSMEWELM95', 'Request for $10 withdraw to Binance initiated', '10', 0, '2022-12-31 07:09:06', '2022-12-31 07:09:06', '367.9'),
(224, 57, '1ESNIUVZSJ', 'Minute Plus subscribed with $50', '50', 0, '2022-12-31 08:29:57', '2022-12-31 08:29:57', '317.9'),
(225, 57, 'HXP3AA14VR', 'Day Plus subscribed with $50', '50', 0, '2022-12-31 08:30:29', '2022-12-31 08:30:29', '267.9'),
(226, 57, '5MNMLEBF33', 'Amateur subscribed with $50', '50', 0, '2022-12-31 08:30:51', '2022-12-31 08:30:51', '217.9'),
(227, 57, 'XR00MY19ZA', 'Hustler subscribed with $50', '50', 0, '2022-12-31 08:31:13', '2022-12-31 08:31:13', '167.9'),
(228, 57, 'KDUGHUXYJ3', 'Expert subscribed with $50', '50', 0, '2022-12-31 08:31:36', '2022-12-31 08:31:36', '117.9'),
(229, 57, 'XVH7RISQEO', 'You cancelled the package. $35 added to your wallet', '35', 1, '2022-12-31 08:36:11', '2022-12-31 08:36:11', '152.9'),
(230, 57, 'GUZBRLPKPZ', 'You cancelled the package. $35 added to your wallet', '35', 1, '2022-12-31 08:37:02', '2022-12-31 08:37:02', '187.9'),
(231, 57, 'JTQL1LV0AU', 'You cancelled the package. $35 added to your wallet', '35', 1, '2022-12-31 08:38:23', '2022-12-31 08:38:23', '222.9'),
(232, 57, '655UORCGKI', 'You cancelled the package. $35 added to your wallet', '35', 1, '2022-12-31 08:40:40', '2022-12-31 08:40:40', '257.9'),
(233, 57, 'RCJPEODZJK', 'You cancelled the package. $70 added to your wallet', '70', 1, '2022-12-31 08:41:17', '2022-12-31 08:41:17', '327.9'),
(234, 57, 'NUJX5PLIWJ', 'You cancelled the package. $35 added to your wallet', '35', 1, '2022-12-31 08:41:39', '2022-12-31 08:41:39', '362.9'),
(235, 57, 'U7IGHV8LIS', '$0.0009 transferred to main wallet successfully', '0.0009', 1, '2022-12-31 08:41:52', '2022-12-31 08:41:52', '362.9009'),
(236, 57, 'XWOOCSKNC9', 'Veteran subscribed with $200', '200', 0, '2022-12-31 08:46:16', '2022-12-31 08:46:16', '11162.9009'),
(237, 57, 'GZWKLYPBHY', 'Professional subscribed with $600', '600', 0, '2022-12-31 08:46:44', '2022-12-31 08:46:44', '10562.9009'),
(238, 57, 'PEUEAKP35Y', 'Master subscribed with $1500', '1500', 0, '2022-12-31 08:47:05', '2022-12-31 08:47:05', '9062.9009'),
(239, 57, '3WDEUGQVQ3', 'You cancelled the package. $1050 added to your wallet', '1050', 1, '2022-12-31 08:48:42', '2022-12-31 08:48:42', '10112.9009'),
(240, 57, 'ZHPB6KRTYE', 'You cancelled the package. $420 added to your wallet', '420', 1, '2022-12-31 08:54:40', '2022-12-31 08:54:40', '10532.9009'),
(241, 57, 'IEZKDSINWG', 'You cancelled the package. $140 added to your wallet', '140', 1, '2022-12-31 08:55:03', '2022-12-31 08:55:03', '10672.9009'),
(242, 57, 'UA8QQBQKQB', 'Minute Plus subscribed with $0', '0', 0, '2022-12-31 09:59:18', '2022-12-31 09:59:18', '10672.9009'),
(243, 57, 'MD8PKVP2BJ', 'You cancelled the package. $0 added to your wallet', '0', 1, '2022-12-31 10:03:28', '2022-12-31 10:03:28', '10672.9009'),
(244, 39, '88PQJAKGFE', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-01-02 01:24:18', '2023-01-02 01:24:18', '21'),
(245, 37, 'PDRAYW5ARH', '$1.2009 transferred to main wallet successfully', '1.2009', 1, '2023-01-02 14:34:00', '2023-01-02 14:34:00', '1.2874'),
(246, 26, 'QGFSX4B3CB', '$1050 sent to malik Rehman', '1050', 0, '2023-01-02 22:02:57', '2023-01-02 22:02:57', '10590.0879'),
(247, 59, 'FOLTZLMRIR', '$1000 received from Muneeb shakeel', '1000', 1, '2023-01-02 22:02:58', '2023-01-02 22:02:58', '1000'),
(248, 59, 'QNGBZVYQK6', 'Hustler subscribed with $1000', '1000', 0, '2023-01-02 22:08:48', '2023-01-02 22:08:48', '0'),
(249, 26, 'GY7A9DFCDW', '$69.2498 transferred to main wallet successfully', '69.2498', 1, '2023-01-02 22:14:51', '2023-01-02 22:14:51', '10659.3377'),
(250, 25, 'U4S5CCVEIM', '$105 sent to Ateeqanees', '105', 0, '2023-01-03 17:16:52', '2023-01-03 17:16:52', '845.0877'),
(251, 60, 'GH8JAEDDRV', '$100 received from Waqar Ali', '100', 1, '2023-01-03 17:16:53', '2023-01-03 17:16:53', '100'),
(252, 60, 'SNVYQQK6GT', 'Hustler subscribed with $100', '100', 0, '2023-01-03 17:20:39', '2023-01-03 17:20:39', '0'),
(253, 25, 'VR8DO2JOD8', '$14 profit on $100 Invested by Ateeqanees', '14', 1, '2023-01-03 17:20:40', '2023-01-03 17:20:40', '859.0877'),
(254, 25, 'R4O1NSXTQM', '$6 reward profit on $100 Invested by Ateeqanees', '6', 1, '2023-01-03 17:20:40', '2023-01-03 17:20:40', '859.0877'),
(255, 26, 'VUKVN0GBRB', '$19.3769 transferred to main wallet successfully', '19.3769', 1, '2023-01-03 17:32:35', '2023-01-03 17:32:35', '10678.7146'),
(256, 26, 'MCBPYJEMAL', '$105 sent to Ali raza', '105', 0, '2023-01-03 18:34:25', '2023-01-03 18:34:25', '10573.7146'),
(257, 63, 'ZSW7MITS1F', '$100 received from Muneeb shakeel', '100', 1, '2023-01-03 18:34:26', '2023-01-03 18:34:26', '100'),
(258, 63, 'C2UZYYDZFZ', '$84 sent to Muneeb shakeel', '84', 0, '2023-01-03 19:26:18', '2023-01-03 19:26:18', '16'),
(259, 26, 'GAU7JEXUHJ', '$80 received from Ali raza', '80', 1, '2023-01-03 19:26:18', '2023-01-03 19:26:18', '10653.7146'),
(260, 63, 'QU2D16FICG', '$10.5 sent to Muneeb shakeel', '10.5', 0, '2023-01-03 19:30:21', '2023-01-03 19:30:21', '5.5'),
(261, 26, 'MVCUYIVTFH', '$10 received from Ali raza', '10', 1, '2023-01-03 19:30:22', '2023-01-03 19:30:22', '10663.7146'),
(262, 63, '3PUJ6XGODJ', '$5.25 sent to Muneeb shakeel', '5.25', 0, '2023-01-03 19:31:04', '2023-01-03 19:31:04', '0.25'),
(263, 26, 'GJ3IVNVV8T', '$5 received from Ali raza', '5', 1, '2023-01-03 19:31:05', '2023-01-03 19:31:05', '10668.7146'),
(264, 37, 'BTLGQNRXWP', '$0.1157 transferred to main wallet successfully', '0.1157', 1, '2023-01-04 00:06:16', '2023-01-04 00:06:16', '1.4031'),
(265, 37, 'FFB0CUPBZ2', 'Request for $1.40 withdraw to Binance initiated', '1.40', 0, '2023-01-04 00:11:14', '2023-01-04 00:11:14', '0.0031000000000001'),
(266, 50, '2RE0QYXQGG', '$0.7745 transferred to main wallet successfully', '0.7745', 1, '2023-01-04 14:44:53', '2023-01-04 14:44:53', '1.1226'),
(267, 26, 'O6PMTAVBOQ', '$105 sent to Khalid bajwa', '105', 0, '2023-01-04 19:47:08', '2023-01-04 19:47:08', '10563.7146'),
(268, 68, 'HKAONHJ1BY', '$100 received from Muneeb shakeel', '100', 1, '2023-01-04 19:47:09', '2023-01-04 19:47:09', '100'),
(269, 68, 'HIIRHCOBGW', 'Hustler subscribed with $100', '100', 0, '2023-01-04 19:49:01', '2023-01-04 19:49:01', '0'),
(270, 57, 'TF2CM7GYN0', 'Request for $20 withdraw to MartinPay initiated', '20', 0, '2023-01-05 11:42:29', '2023-01-05 11:42:29', '10652.9009'),
(271, 57, '8HT0JMRDX5', 'Withdraw request for $20 rejected by Admin', '20', 1, '2023-01-05 11:44:07', '2023-01-05 11:44:07', '10672.9009'),
(272, 37, 'ET4DPCOKNW', 'Withdraw request for $1.40 rejected by Admin', '1.40', 1, '2023-01-05 14:37:29', '2023-01-05 14:37:29', '1.4031'),
(273, 37, 'S0OCB5IR1X', '$0.1332 transferred to main wallet successfully', '0.1332', 1, '2023-01-05 14:39:53', '2023-01-05 14:39:53', '1.5363'),
(274, 37, '6UPTF5WM0K', '$0.0289 transferred to main wallet successfully', '0.0289', 1, '2023-01-05 23:03:58', '2023-01-05 23:03:58', '1.5652'),
(275, 49, 'DQSX4XL7O3', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-01-06 03:35:27', '2023-01-06 03:35:27', '25.2'),
(276, 51, '59CETGV7BS', '$1.5582 transferred to main wallet successfully', '1.5582', 1, '2023-01-06 03:36:09', '2023-01-06 03:36:09', '3.549'),
(277, 50, 'UJMIQ8PK2T', '$0.3885 transferred to main wallet successfully', '0.3885', 1, '2023-01-06 23:02:54', '2023-01-06 23:02:54', '1.5111'),
(278, 55, 'QYUBNX0I3X', '$4.2 transferred to main wallet successfully', '4.2', 1, '2023-01-07 17:41:30', '2023-01-07 17:41:30', '4.2'),
(279, 39, 'YG5AQRMSBZ', 'Request for $20 withdraw to Bank initiated', '20', 0, '2023-01-07 21:13:04', '2023-01-07 21:13:04', '1'),
(280, 25, 'TLBHRYTOBA', '$703.9925 transferred to main wallet successfully', '703.9925', 1, '2023-01-07 23:16:25', '2023-01-07 23:16:25', '1563.0802'),
(281, 26, '9Z8KLR40EM', '$2100 sent to Farhan Rana', '2100', 0, '2023-01-07 23:23:11', '2023-01-07 23:23:11', '8463.7146'),
(282, 69, 'QKGR6NEUQD', '$2000 received from Muneeb shakeel', '2000', 1, '2023-01-07 23:23:12', '2023-01-07 23:23:12', '2000'),
(283, 69, 'JLKVMOF84Z', 'Hustler subscribed with $1000', '1000', 0, '2023-01-07 23:27:23', '2023-01-07 23:27:23', '1000'),
(284, 69, '6BQHKLZ5PL', 'Minute Plus subscribed with $500', '500', 0, '2023-01-07 23:27:52', '2023-01-07 23:27:52', '500'),
(285, 69, 'NCJBDHEGA1', 'Amateur subscribed with $500', '500', 0, '2023-01-07 23:28:05', '2023-01-07 23:28:05', '0'),
(286, 26, 'EGH7GYEY7A', 'Request for $50 withdraw to Bank initiated', '50', 0, '2023-01-08 14:04:51', '2023-01-08 14:04:51', '8413.7146'),
(287, 26, 'AOF3WKECPV', 'Withdraw request for $50 rejected by Admin', '50', 1, '2023-01-08 14:05:51', '2023-01-08 14:05:51', '8463.7146'),
(288, 39, 'PCYECOTPTB', 'Withdraw request for $20 rejected by Admin', '20', 1, '2023-01-08 14:25:02', '2023-01-08 14:25:02', '21'),
(289, 26, 'AG4CW2VWGL', '$21 sent to SHAHAYAR ABBAS', '21', 0, '2023-01-08 15:46:55', '2023-01-08 15:46:55', '8442.7146'),
(290, 70, 'JTDGYWNSGE', '$20 received from Muneeb shakeel', '20', 1, '2023-01-08 15:46:56', '2023-01-08 15:46:56', '20'),
(291, 70, 'OQK6TJSQ1D', 'Minute Plus subscribed with $20', '20', 0, '2023-01-08 16:16:39', '2023-01-08 16:16:39', '0'),
(292, 26, 'HKDMN4UGUF', '$2.8 profit on $20 Invested by SHAHAYAR ABBAS', '2.8', 1, '2023-01-08 16:16:40', '2023-01-08 16:16:40', '8445.5146'),
(293, 26, 'XBUMEBO4DT', '$1.2 reward profit on $20 Invested by SHAHAYAR ABBAS', '1.2', 1, '2023-01-08 16:16:41', '2023-01-08 16:16:41', '8445.5146'),
(294, 25, '3MB2GEOMX3', '$1 profit on $20 Invested by SHAHAYAR ABBAS', '1', 1, '2023-01-08 16:16:42', '2023-01-08 16:16:42', '1564.0802'),
(295, 25, 'DR2MMIVTAQ', '$0.4 reward profit on $20 Invested by SHAHAYAR ABBAS', '0.4', 1, '2023-01-08 16:16:43', '2023-01-08 16:16:43', '1564.0802'),
(296, 70, 'XMCZPTG3TJ', '$0.0008 transferred to main wallet successfully', '0.0008', 1, '2023-01-08 16:52:47', '2023-01-08 16:52:47', '0.0008'),
(297, 70, 'TJENWZ54PU', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-08 16:56:22', '2023-01-08 16:56:22', '0.0009'),
(298, 26, 'UE0X9BEVVN', '$105 sent to SHAHAYAR ABBAS', '105', 0, '2023-01-08 17:02:17', '2023-01-08 17:02:17', '8340.5146'),
(299, 70, 'URYOI9HIXJ', '$100 received from Muneeb shakeel', '100', 1, '2023-01-08 17:02:18', '2023-01-08 17:02:18', '100.0009'),
(300, 70, '99QMM5FF56', '$0.0003 transferred to main wallet successfully', '0.0003', 1, '2023-01-08 17:09:39', '2023-01-08 17:09:39', '100.0012'),
(301, 70, 'J3NBLT2NR0', 'Day Plus subscribed with $50', '50', 0, '2023-01-08 17:10:24', '2023-01-08 17:10:24', '50.0012'),
(302, 26, 'V37YMEOCS5', '$7 profit on $50 Invested by SHAHAYAR ABBAS', '7', 1, '2023-01-08 17:10:25', '2023-01-08 17:10:25', '8347.5146'),
(303, 26, 'TOHXLJ5FHN', '$3 reward profit on $50 Invested by SHAHAYAR ABBAS', '3', 1, '2023-01-08 17:10:26', '2023-01-08 17:10:26', '8347.5146'),
(304, 25, 'ABNBNQRXE9', '$2.5 profit on $50 Invested by SHAHAYAR ABBAS', '2.5', 1, '2023-01-08 17:10:27', '2023-01-08 17:10:27', '1566.5802'),
(305, 25, 'KNKGL3O91E', '$1 reward profit on $50 Invested by SHAHAYAR ABBAS', '1', 1, '2023-01-08 17:10:29', '2023-01-08 17:10:29', '1566.5802'),
(306, 70, 'NLHKTC3WLQ', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-08 17:16:08', '2023-01-08 17:16:08', '50.0013'),
(307, 70, '0BZK6WCWDQ', 'Expert subscribed with $50', '50', 0, '2023-01-08 17:16:55', '2023-01-08 17:16:55', '0.0013000000000005'),
(308, 26, 'PPSAXOZWYB', '$7 profit on $50 Invested by SHAHAYAR ABBAS', '7', 1, '2023-01-08 17:16:56', '2023-01-08 17:16:56', '8354.5146'),
(309, 26, '2CHPMA3VTP', '$3 reward profit on $50 Invested by SHAHAYAR ABBAS', '3', 1, '2023-01-08 17:16:57', '2023-01-08 17:16:57', '8354.5146'),
(310, 25, 'LRBHRJ96DK', '$2.5 profit on $50 Invested by SHAHAYAR ABBAS', '2.5', 1, '2023-01-08 17:16:58', '2023-01-08 17:16:58', '1569.0802'),
(311, 25, 'J0HYKTHQIS', '$1 reward profit on $50 Invested by SHAHAYAR ABBAS', '1', 1, '2023-01-08 17:16:59', '2023-01-08 17:16:59', '1569.0802'),
(312, 70, 'O5WG9MZOPQ', '$0.0003 transferred to main wallet successfully', '0.0003', 1, '2023-01-08 17:29:31', '2023-01-08 17:29:31', '0.0016'),
(313, 70, 'SKOOJNX723', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-08 17:33:47', '2023-01-08 17:33:47', '0.0017'),
(314, 70, 'IWXRGAIMDW', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-01-08 17:41:58', '2023-01-08 17:41:58', '0.0019'),
(315, 70, 'VC1MWDMFUZ', '$0.0005 transferred to main wallet successfully', '0.0005', 1, '2023-01-08 18:07:19', '2023-01-08 18:07:19', '0.0024'),
(316, 70, 'DJ43FKN8MF', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-01-08 18:39:31', '2023-01-08 18:39:31', '0.0031'),
(317, 70, '3UFTZWGG3Q', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-01-08 19:08:38', '2023-01-08 19:08:38', '0.0038'),
(318, 70, 'UWHX0BXNJ8', '$0.0016 transferred to main wallet successfully', '0.0016', 1, '2023-01-08 20:19:56', '2023-01-08 20:19:56', '0.0054'),
(319, 39, 'WLCWBWDRFD', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-01-08 20:27:06', '2023-01-08 20:27:06', '31.5'),
(320, 39, 'V2MDLTDJRH', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:24', '2023-01-08 20:27:24', '31.5'),
(321, 39, 'COMUK18VCX', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:25', '2023-01-08 20:27:25', '31.5'),
(322, 39, '78TN4RQ460', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:25', '2023-01-08 20:27:25', '31.5'),
(323, 39, '79K0ILZGYV', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:26', '2023-01-08 20:27:26', '31.5'),
(324, 39, '6LBXSFTJXJ', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:26', '2023-01-08 20:27:26', '31.5'),
(325, 39, 'LMC7RSZNCT', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:26', '2023-01-08 20:27:26', '31.5'),
(326, 39, '8PD3QVZPSK', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:27', '2023-01-08 20:27:27', '31.5'),
(327, 39, '8ZEBI9FFHA', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:27:42', '2023-01-08 20:27:42', '31.5'),
(328, 39, '1WOROYJ7KS', '$0 transferred to main wallet successfully', '0', 1, '2023-01-08 20:28:35', '2023-01-08 20:28:35', '31.5'),
(329, 39, 'XUOYUMEDKE', 'Request for $30 withdraw to Bank initiated', '30', 0, '2023-01-08 20:30:51', '2023-01-08 20:30:51', '1.5'),
(330, 70, 'TJ4GKYWK2U', '$0.0006 transferred to main wallet successfully', '0.0006', 1, '2023-01-08 20:47:00', '2023-01-08 20:47:00', '0.006'),
(331, 70, 'GTNWGGLEZS', '$0.0027 transferred to main wallet successfully', '0.0027', 1, '2023-01-08 22:43:44', '2023-01-08 22:43:44', '0.0087'),
(332, 70, 'U4RPJZP1KQ', '$0.0004 transferred to main wallet successfully', '0.0004', 1, '2023-01-08 22:59:16', '2023-01-08 22:59:16', '0.0091'),
(333, 70, 'UPKPTTVID5', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-08 23:05:31', '2023-01-08 23:05:31', '0.0092'),
(334, 70, 'AQ2QK3MCU9', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-08 23:09:04', '2023-01-08 23:09:04', '0.0093'),
(335, 70, 'VTKPZORPNU', '$0.0008 transferred to main wallet successfully', '0.0008', 1, '2023-01-08 23:43:12', '2023-01-08 23:43:12', '0.0101'),
(336, 39, '9GAY6A5EX2', 'Withdraw request for $30 rejected by Admin', '30', 1, '2023-01-08 23:56:47', '2023-01-08 23:56:47', '31.5'),
(337, 39, 'CWC5JEKNH7', 'Request for $20 withdraw to Bank initiated', '20', 0, '2023-01-09 00:03:18', '2023-01-09 00:03:18', '11.5'),
(338, 70, 'IIHBY514EY', '$0.0017 transferred to main wallet successfully', '0.0017', 1, '2023-01-09 00:56:36', '2023-01-09 00:56:36', '0.0118'),
(339, 39, 'LSSMYOCOTK', 'Withdraw request for $20 rejected by Admin', '20', 1, '2023-01-09 06:03:08', '2023-01-09 06:03:08', '31.5'),
(340, 70, 'FBAZG8SFEF', '$0.0135 transferred to main wallet successfully', '0.0135', 1, '2023-01-09 10:42:41', '2023-01-09 10:42:41', '0.0253'),
(341, 70, '0LFNJINCDB', '$0.0052 transferred to main wallet successfully', '0.0052', 1, '2023-01-09 14:31:18', '2023-01-09 14:31:18', '0.0305'),
(342, 70, 'ZSIRZEFMBH', '$0.0032 transferred to main wallet successfully', '0.0032', 1, '2023-01-09 16:51:24', '2023-01-09 16:51:24', '0.0337'),
(343, 26, 'I61HFMOA3Y', '$52.5 sent to SHAHAYAR ABBAS', '52.5', 0, '2023-01-09 17:02:12', '2023-01-09 17:02:12', '8302.0146'),
(344, 70, 'NMDZDI5GVR', '$50 received from Muneeb shakeel', '50', 1, '2023-01-09 17:02:13', '2023-01-09 17:02:13', '50.0337'),
(345, 70, 'M0IKAZHU4J', 'Minute Plus subscribed with $50', '50', 0, '2023-01-09 17:04:12', '2023-01-09 17:04:12', '0.033700000000003'),
(346, 26, 'SAMUQOSZZT', '$7 profit on $50 Invested by SHAHAYAR ABBAS', '7', 1, '2023-01-09 17:04:13', '2023-01-09 17:04:13', '8309.0146'),
(347, 26, 'ZOA57XFYUX', '$3 reward profit on $50 Invested by SHAHAYAR ABBAS', '3', 1, '2023-01-09 17:04:14', '2023-01-09 17:04:14', '8309.0146'),
(348, 25, 'H04BZKQFQG', '$2.5 profit on $50 Invested by SHAHAYAR ABBAS', '2.5', 1, '2023-01-09 17:04:15', '2023-01-09 17:04:15', '1571.5802'),
(349, 25, 'ZXGPGTDQ8C', '$1 reward profit on $50 Invested by SHAHAYAR ABBAS', '1', 1, '2023-01-09 17:04:16', '2023-01-09 17:04:16', '1571.5802'),
(350, 25, 'MUCOJRNQAP', 'Minute Plus subscribed with $500', '500', 0, '2023-01-09 17:07:21', '2023-01-09 17:07:21', '1071.5802'),
(351, 70, '5TVOSUWIHA', '$0.0006 transferred to main wallet successfully', '0.0006', 1, '2023-01-09 17:08:05', '2023-01-09 17:08:05', '0.0343'),
(352, 70, '2YXJPIFSF2', '$0.117 transferred to main wallet successfully', '0.117', 1, '2023-01-09 17:11:28', '2023-01-09 17:11:28', '0.1513'),
(353, 70, 'LDXOMRBCFO', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-01-09 17:20:04', '2023-01-09 17:20:04', '0.152'),
(354, 70, 'V0DZ4BP8YI', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-01-09 17:27:57', '2023-01-09 17:27:57', '0.1527'),
(355, 51, 'RRKP3YY83G', '$0.8894 transferred to main wallet successfully', '0.8894', 1, '2023-01-09 17:31:28', '2023-01-09 17:31:28', '4.4384'),
(356, 70, 'OKO26LK6KL', '$0.0057 transferred to main wallet successfully', '0.0057', 1, '2023-01-09 18:38:28', '2023-01-09 18:38:28', '0.1584'),
(357, 70, '4DKPUIN8GV', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-09 18:39:44', '2023-01-09 18:39:44', '0.1585'),
(358, 70, 'TAHXIFCDNS', '$0.001 transferred to main wallet successfully', '0.001', 1, '2023-01-09 18:52:07', '2023-01-09 18:52:07', '0.1595'),
(359, 70, 'KB0DWIDFPG', '$0.0061 transferred to main wallet successfully', '0.0061', 1, '2023-01-09 20:07:16', '2023-01-09 20:07:16', '0.1656'),
(360, 70, 'TUD1EEU7EH', '$0.0024 transferred to main wallet successfully', '0.0024', 1, '2023-01-09 20:37:58', '2023-01-09 20:37:58', '0.168'),
(361, 70, 'OZAQJG9SFV', '$0.0102 transferred to main wallet successfully', '0.0102', 1, '2023-01-09 22:44:29', '2023-01-09 22:44:29', '0.1782'),
(362, 70, 'MMALWFQRIJ', '$0.0174 transferred to main wallet successfully', '0.0174', 1, '2023-01-10 02:20:00', '2023-01-10 02:20:00', '0.1956'),
(363, 70, 'HIF36S7UV9', '$0.0241 transferred to main wallet successfully', '0.0241', 1, '2023-01-10 07:18:26', '2023-01-10 07:18:26', '0.2197'),
(364, 70, 'P3QPYKDQFY', '$0.0282 transferred to main wallet successfully', '0.0282', 1, '2023-01-10 13:08:12', '2023-01-10 13:08:12', '0.2479'),
(365, 70, '8DKPLW0WQM', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-10 13:08:28', '2023-01-10 13:08:28', '0.248'),
(366, 70, 'MBN2QV0QJC', '$0.0159 transferred to main wallet successfully', '0.0159', 1, '2023-01-10 16:25:57', '2023-01-10 16:25:57', '0.2639'),
(367, 70, 'WEOSEFOYY4', '$0.0016 transferred to main wallet successfully', '0.0016', 1, '2023-01-10 16:46:23', '2023-01-10 16:46:23', '0.2655'),
(368, 70, 'UQ4SHVTNN5', '$0 transferred to main wallet successfully', '0', 1, '2023-01-10 16:46:28', '2023-01-10 16:46:28', '0.2655'),
(369, 70, 'J5SADBUOJW', '$0.0009 transferred to main wallet successfully', '0.0009', 1, '2023-01-10 16:57:10', '2023-01-10 16:57:10', '0.2664'),
(370, 26, 'XJRKL51OXE', '$105 sent to SHAHAYAR ABBAS', '105', 0, '2023-01-10 17:03:12', '2023-01-10 17:03:12', '8204.0146'),
(371, 70, 'A4JGCWDDHK', '$100 received from Muneeb shakeel', '100', 1, '2023-01-10 17:03:13', '2023-01-10 17:03:13', '100.2664'),
(372, 70, '1RWJZGUVCE', 'Veteran subscribed with $100', '100', 0, '2023-01-10 17:04:38', '2023-01-10 17:04:38', '0.2664'),
(373, 26, 'EPMVLP5AYK', '$14 profit on $100 Invested by SHAHAYAR ABBAS', '14', 1, '2023-01-10 17:04:39', '2023-01-10 17:04:39', '8218.0146'),
(374, 26, 'JFRMOV9Y4K', '$6 reward profit on $100 Invested by SHAHAYAR ABBAS', '6', 1, '2023-01-10 17:04:40', '2023-01-10 17:04:40', '8218.0146'),
(375, 25, '9NSQBM5E7W', '$5 profit on $100 Invested by SHAHAYAR ABBAS', '5', 1, '2023-01-10 17:04:41', '2023-01-10 17:04:41', '1076.5802'),
(376, 25, 'DKAZY9SZ6J', '$2 reward profit on $100 Invested by SHAHAYAR ABBAS', '2', 1, '2023-01-10 17:04:42', '2023-01-10 17:04:42', '1076.5802'),
(377, 70, 'HKHWKZOMXB', '$0.0008 transferred to main wallet successfully', '0.0008', 1, '2023-01-10 17:05:37', '2023-01-10 17:05:37', '0.2672'),
(378, 70, '8A7ZHYZG5L', '$0.1175 transferred to main wallet successfully', '0.1175', 1, '2023-01-10 17:15:30', '2023-01-10 17:15:30', '0.3847'),
(379, 70, 'R3FORPE3XJ', '$0.0067 transferred to main wallet successfully', '0.0067', 1, '2023-01-10 18:39:30', '2023-01-10 18:39:30', '0.3914'),
(380, 70, '5UKGWE8ISM', '$0.0003 transferred to main wallet successfully', '0.0003', 1, '2023-01-10 18:42:34', '2023-01-10 18:42:34', '0.3917'),
(381, 70, 'ISFV0DI2PZ', '$0.0034 transferred to main wallet successfully', '0.0034', 1, '2023-01-10 19:24:21', '2023-01-10 19:24:21', '0.3951'),
(382, 70, 'R8EXBU2IVG', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-10 19:25:36', '2023-01-10 19:25:36', '0.3952'),
(383, 25, '1SRCVVTXKR', '$105 sent to Umairqadeer', '105', 0, '2023-01-10 20:28:47', '2023-01-10 20:28:47', '971.5802'),
(384, 72, 'JRVCDK45NX', '$100 received from Waqar Ali', '100', 1, '2023-01-10 20:28:49', '2023-01-10 20:28:49', '100'),
(385, 70, 'ZHDCGIEKDF', '$0.0077 transferred to main wallet successfully', '0.0077', 1, '2023-01-10 21:01:16', '2023-01-10 21:01:16', '0.4029'),
(386, 72, '6UJYYCUP6J', 'Day Plus subscribed with $100', '100', 0, '2023-01-10 23:29:26', '2023-01-10 23:29:26', '0'),
(387, 25, 'UIADKHZDUU', '$14 profit on $100 Invested by Umairqadeer', '14', 1, '2023-01-10 23:29:28', '2023-01-10 23:29:28', '985.5802'),
(388, 25, 'GWFF5OKWVI', '$6 reward profit on $100 Invested by Umairqadeer', '6', 1, '2023-01-10 23:29:29', '2023-01-10 23:29:29', '985.5802'),
(389, 70, 'BH9YVL75PJ', '$0.0137 transferred to main wallet successfully', '0.0137', 1, '2023-01-10 23:51:17', '2023-01-10 23:51:17', '0.4166'),
(390, 70, 'SQYQGZQYNF', '$0.0522 transferred to main wallet successfully', '0.0522', 1, '2023-01-11 10:39:59', '2023-01-11 10:39:59', '0.4688'),
(391, 70, 'AW9GT2IPIV', '$0.0132 transferred to main wallet successfully', '0.0132', 1, '2023-01-11 13:23:17', '2023-01-11 13:23:17', '0.482'),
(392, 70, '8W31ULIV3R', '$0.1472 transferred to main wallet successfully', '0.1472', 1, '2023-01-11 19:42:44', '2023-01-11 19:42:44', '0.6292'),
(393, 70, '4FSOAKJXVN', '$0.0074 transferred to main wallet successfully', '0.0074', 1, '2023-01-11 21:14:55', '2023-01-11 21:14:55', '0.6366'),
(394, 70, 'DXLU206P8S', '$0 transferred to main wallet successfully', '0', 1, '2023-01-11 21:15:00', '2023-01-11 21:15:00', '0.6366'),
(395, 70, '6OY6NK9WAX', '$0 transferred to main wallet successfully', '0', 1, '2023-01-11 21:15:06', '2023-01-11 21:15:06', '0.6366'),
(396, 70, 'UOWVZK9RB7', '$0.02 transferred to main wallet successfully', '0.02', 1, '2023-01-12 01:24:08', '2023-01-12 01:24:08', '0.6566'),
(397, 70, 'GENOAEBUEB', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-01-12 01:26:32', '2023-01-12 01:26:32', '0.6568'),
(398, 70, 'FAVHGDILGP', '$0.0008 transferred to main wallet successfully', '0.0008', 1, '2023-01-12 01:36:39', '2023-01-12 01:36:39', '0.6576'),
(399, 70, 'NJECB6RKWU', '$0.0446 transferred to main wallet successfully', '0.0446', 1, '2023-01-12 10:51:32', '2023-01-12 10:51:32', '0.7022'),
(400, 70, 'KAHAPLWVRG', '$0.0032 transferred to main wallet successfully', '0.0032', 1, '2023-01-12 11:32:05', '2023-01-12 11:32:05', '0.7054'),
(401, 70, 'CW78E9LXGV', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-12 11:32:26', '2023-01-12 11:32:26', '0.7055'),
(402, 70, 'O2WXEW5IMR', '$0.0183 transferred to main wallet successfully', '0.0183', 1, '2023-01-12 15:20:19', '2023-01-12 15:20:19', '0.7238'),
(403, 70, '62E6HCFCM8', '$0.1262 transferred to main wallet successfully', '0.1262', 1, '2023-01-12 17:19:20', '2023-01-12 17:19:20', '0.85'),
(404, 70, 'DM0XGU9TCG', '$0.0189 transferred to main wallet successfully', '0.0189', 1, '2023-01-12 21:13:50', '2023-01-12 21:13:50', '0.8689'),
(405, 70, 'BKWM1Z3LLM', '$0.0147 transferred to main wallet successfully', '0.0147', 1, '2023-01-13 00:15:46', '2023-01-13 00:15:46', '0.8836'),
(406, 70, 'DE8QJZMLBO', '$0 transferred to main wallet successfully', '0', 1, '2023-01-13 00:15:49', '2023-01-13 00:15:49', '0.8836'),
(407, 70, '0FE1SPRDLK', '$0.0522 transferred to main wallet successfully', '0.0522', 1, '2023-01-13 11:04:36', '2023-01-13 11:04:36', '0.9358'),
(408, 70, 'QCQX4CEGGC', '$0.009 transferred to main wallet successfully', '0.009', 1, '2023-01-13 12:56:18', '2023-01-13 12:56:18', '0.9448'),
(409, 70, 'OEUYIN01DI', '$0.008 transferred to main wallet successfully', '0.008', 1, '2023-01-13 14:34:14', '2023-01-13 14:34:14', '0.9528'),
(410, 70, 'U1T9VS0INR', '$0.1363 transferred to main wallet successfully', '0.1363', 1, '2023-01-13 18:37:28', '2023-01-13 18:37:28', '1.0891'),
(411, 70, 'FWCOKHI9XZ', '$0.0052 transferred to main wallet successfully', '0.0052', 1, '2023-01-13 19:42:10', '2023-01-13 19:42:10', '1.0943'),
(412, 26, 'ZDAKLNZCZW', '$243.5769 transferred to main wallet successfully', '243.5769', 1, '2023-01-13 20:09:46', '2023-01-13 20:09:46', '8461.5915'),
(413, 70, 'JYIPTPMSR7', '$0.012 transferred to main wallet successfully', '0.012', 1, '2023-01-13 22:11:03', '2023-01-13 22:11:03', '1.1063'),
(414, 37, '8XHLQLU5QG', '$0.6763 transferred to main wallet successfully', '0.6763', 1, '2023-01-14 03:05:51', '2023-01-14 03:05:51', '2.2415'),
(415, 37, 'K35HDOANYN', 'You cancelled the package. $35 added to your wallet', '35', 1, '2023-01-14 03:06:12', '2023-01-14 03:06:12', '37.2415'),
(416, 37, 'X6XK21CKON', 'Request for $35 withdraw to Binance initiated', '35', 0, '2023-01-14 03:13:28', '2023-01-14 03:13:28', '2.2415'),
(417, 37, 'AHRZ2DN8W8', 'Expert subscribed with $2', '2', 0, '2023-01-14 03:15:15', '2023-01-14 03:15:15', '0.2415'),
(418, 70, 'J6ATVPNSU3', '$0.0731 transferred to main wallet successfully', '0.0731', 1, '2023-01-14 13:18:08', '2023-01-14 13:18:08', '1.1794'),
(419, 70, '0Y1H8NUAAZ', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-14 13:18:18', '2023-01-14 13:18:18', '1.1795'),
(420, 50, 'VK70U9I1MS', '$1.2657 transferred to main wallet successfully', '1.2657', 1, '2023-01-14 14:29:02', '2023-01-14 14:29:02', '2.7768'),
(421, 70, 'PX3JW7L3BK', '$0.0122 transferred to main wallet successfully', '0.0122', 1, '2023-01-14 15:50:33', '2023-01-14 15:50:33', '1.1917'),
(422, 70, '7PHVBZNFSC', '$0.1252 transferred to main wallet successfully', '0.1252', 1, '2023-01-14 17:35:15', '2023-01-14 17:35:15', '1.3169'),
(423, 70, 'ANSNRLS8CZ', '$0.0041 transferred to main wallet successfully', '0.0041', 1, '2023-01-14 18:25:36', '2023-01-14 18:25:36', '1.321'),
(424, 70, 'XZUYZWL1CD', '$0.0268 transferred to main wallet successfully', '0.0268', 1, '2023-01-14 23:57:44', '2023-01-14 23:57:44', '1.3478'),
(425, 70, 'TO7DAIFCLW', '$0 transferred to main wallet successfully', '0', 1, '2023-01-14 23:57:51', '2023-01-14 23:57:51', '1.3478'),
(426, 70, 'UXA0ZGLZG9', '$0.0162 transferred to main wallet successfully', '0.0162', 1, '2023-01-15 03:19:53', '2023-01-15 03:19:53', '1.364'),
(427, 70, '5NDNTMPXNL', '$0 transferred to main wallet successfully', '0', 1, '2023-01-15 03:19:53', '2023-01-15 03:19:53', '1.364'),
(428, 70, 'V93FS7M3CC', '$0 transferred to main wallet successfully', '0', 1, '2023-01-15 03:19:54', '2023-01-15 03:19:54', '1.364');
INSERT INTO `transactions` (`id`, `user_id`, `transaction_id`, `reason`, `amount`, `inout`, `created_at`, `updated_at`, `after_amount`) VALUES
(429, 70, 'MFWJFKYREJ', '$0.0404 transferred to main wallet successfully', '0.0404', 1, '2023-01-15 11:41:15', '2023-01-15 11:41:15', '1.4044'),
(430, 39, 'FJNAS0TKM4', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-01-15 18:13:59', '2023-01-15 18:13:59', '42'),
(431, 39, 'JP9KEZKZJT', 'Request for $40 withdraw to Binance initiated', '40', 0, '2023-01-15 19:22:21', '2023-01-15 19:22:21', '2'),
(432, 70, 'SCPPXKAGX5', '$0.1545 transferred to main wallet successfully', '0.1545', 1, '2023-01-15 19:31:52', '2023-01-15 19:31:52', '1.5589'),
(433, 70, 'XN4DV0753U', '$0.0879 transferred to main wallet successfully', '0.0879', 1, '2023-01-16 13:44:32', '2023-01-16 13:44:32', '1.6468'),
(434, 70, 'AZJMB8L8F6', '$0.0151 transferred to main wallet successfully', '0.0151', 1, '2023-01-16 16:52:47', '2023-01-16 16:52:47', '1.6619'),
(435, 70, '29EQMUNRBX', '$0 transferred to main wallet successfully', '0', 1, '2023-01-16 16:52:53', '2023-01-16 16:52:53', '1.6619'),
(436, 70, 'Q7KEADOXJE', '$0.2046 transferred to main wallet successfully', '0.2046', 1, '2023-01-17 11:04:31', '2023-01-17 11:04:31', '1.8665'),
(437, 26, 'JGAYMF5GCG', '$105 sent to Hamza ameer', '105', 0, '2023-01-17 17:42:30', '2023-01-17 17:42:30', '8356.5915'),
(438, 76, 'ANKAUFJBE0', '$100 received from Muneeb shakeel', '100', 1, '2023-01-17 17:42:31', '2023-01-17 17:42:31', '100'),
(439, 76, 'R1WZE1FS5J', 'Hustler subscribed with $100', '100', 0, '2023-01-17 17:44:29', '2023-01-17 17:44:29', '0'),
(440, 26, 'I1WND4XGFA', '$105 sent to Muhammad irfan', '105', 0, '2023-01-17 18:53:56', '2023-01-17 18:53:56', '8251.5915'),
(441, 80, 'WPUIMMEKG4', '$100 received from Muneeb shakeel', '100', 1, '2023-01-17 18:53:57', '2023-01-17 18:53:57', '100'),
(442, 80, 'DJ0SP0PXWM', 'Hustler subscribed with $100', '100', 0, '2023-01-17 18:55:00', '2023-01-17 18:55:00', '0'),
(443, 26, 'TCH1ZT7TVD', '$105 sent to Waheed khan', '105', 0, '2023-01-17 19:11:27', '2023-01-17 19:11:27', '8146.5915'),
(444, 81, 'MDTSGIRULJ', '$100 received from Muneeb shakeel', '100', 1, '2023-01-17 19:11:28', '2023-01-17 19:11:28', '100'),
(445, 81, '8IYD5PAR0Z', 'Hustler subscribed with $100', '100', 0, '2023-01-17 19:12:46', '2023-01-17 19:12:46', '0'),
(446, 26, 'VWKMD75RZW', '$14 profit on $100 Invested by Waheed khan', '14', 1, '2023-01-17 19:12:47', '2023-01-17 19:12:47', '8160.5915'),
(447, 26, 'CS84RZNXCG', '$6 reward profit on $100 Invested by Waheed khan', '6', 1, '2023-01-17 19:12:48', '2023-01-17 19:12:48', '8160.5915'),
(448, 25, 'HOFWIONQ0P', '$5 profit on $100 Invested by Waheed khan', '5', 1, '2023-01-17 19:12:48', '2023-01-17 19:12:48', '990.5802'),
(449, 25, 'KO6DKSDWIO', '$2 reward profit on $100 Invested by Waheed khan', '2', 1, '2023-01-17 19:12:49', '2023-01-17 19:12:49', '990.5802'),
(450, 26, '6Y3RAYFE0B', '$1050 sent to Haider Attique', '1050', 0, '2023-01-17 21:37:02', '2023-01-17 21:37:02', '7110.5915'),
(451, 56, '7BF2P39MXL', '$1000 received from Muneeb shakeel', '1000', 1, '2023-01-17 21:37:03', '2023-01-17 21:37:03', '1000'),
(452, 56, 'CQGF5KXJN6', 'Hustler subscribed with $1000', '1000', 0, '2023-01-17 22:29:10', '2023-01-17 22:29:10', '0'),
(453, 26, '6MGHMGMWOQ', '$420 sent to Irfan Naeem', '420', 0, '2023-01-18 00:44:02', '2023-01-18 00:44:02', '6690.5915'),
(454, 82, '57DWX6TWT4', '$400 received from Muneeb shakeel', '400', 1, '2023-01-18 00:44:03', '2023-01-18 00:44:03', '400'),
(455, 82, 'RA7LVWWOPP', 'Hustler subscribed with $400', '400', 0, '2023-01-18 00:50:30', '2023-01-18 00:50:30', '0'),
(456, 26, 'BEMGTM5LIZ', '$56 profit on $400 Invested by Irfan Naeem', '56', 1, '2023-01-18 00:50:31', '2023-01-18 00:50:31', '6746.5915'),
(457, 26, 'PW0XWQ4B2G', '$24 reward profit on $400 Invested by Irfan Naeem', '24', 1, '2023-01-18 00:50:32', '2023-01-18 00:50:32', '6746.5915'),
(458, 25, 'HXWQHRHLVL', '$20 profit on $400 Invested by Irfan Naeem', '20', 1, '2023-01-18 00:50:33', '2023-01-18 00:50:33', '1010.5802'),
(459, 25, 'BUMV75TUXX', '$8 reward profit on $400 Invested by Irfan Naeem', '8', 1, '2023-01-18 00:50:33', '2023-01-18 00:50:33', '1010.5802'),
(460, 26, 'EBTKOAYNIP', '$1178.1 sent to Shaheen', '1178.1', 0, '2023-01-18 01:49:30', '2023-01-18 01:49:30', '5568.4915'),
(461, 83, 'LCC46KIDCP', '$1122 received from Muneeb shakeel', '1122', 1, '2023-01-18 01:49:31', '2023-01-18 01:49:31', '1122'),
(462, 83, '9P2SNMBNY1', 'Hustler subscribed with $1122', '1122', 0, '2023-01-18 01:56:02', '2023-01-18 01:56:02', '0'),
(463, 82, 'UPY6EAX5CR', '$157.08 profit on $1122 Invested by Shaheen', '157.08', 1, '2023-01-18 01:56:03', '2023-01-18 01:56:03', '157.08'),
(464, 82, 'GQ5HVGORTW', '$67.32 reward profit on $1122 Invested by Shaheen', '67.32', 1, '2023-01-18 01:56:04', '2023-01-18 01:56:04', '157.08'),
(465, 26, 'J81TNCWCE4', '$56.1 profit on $1122 Invested by Shaheen', '56.1', 1, '2023-01-18 01:56:05', '2023-01-18 01:56:05', '5624.5915'),
(466, 26, 'QFW57AWIRI', '$22.44 reward profit on $1122 Invested by Shaheen', '22.44', 1, '2023-01-18 01:56:06', '2023-01-18 01:56:06', '5624.5915'),
(467, 25, 'HI0WQ57D0S', '$22.44 profit on $1122 Invested by Shaheen', '22.44', 1, '2023-01-18 01:56:07', '2023-01-18 01:56:07', '1033.0202'),
(468, 25, 'QOVJZZBIPR', '$11.22 reward profit on $1122 Invested by Shaheen', '11.22', 1, '2023-01-18 01:56:08', '2023-01-18 01:56:08', '1033.0202'),
(469, 82, 'O0QBUEXD6N', 'You earned a reward of $50', '50', 1, '2023-01-18 02:05:20', '2023-01-18 02:05:20', '157.08'),
(470, 51, '8IEAYT0E0X', '$2.0793 transferred to main wallet successfully', '2.0793', 1, '2023-01-18 02:25:43', '2023-01-18 02:25:43', '6.5177'),
(471, 49, 'P1TBH0ZFTO', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-01-18 02:30:25', '2023-01-18 02:30:25', '27.3'),
(472, 70, 'JE0XDF4MSG', '$0.1922 transferred to main wallet successfully', '0.1922', 1, '2023-01-18 02:42:30', '2023-01-18 02:42:30', '2.0587'),
(473, 51, 'WN5VUEYI94', '$0.0061 transferred to main wallet successfully', '0.0061', 1, '2023-01-18 03:01:02', '2023-01-18 03:01:02', '6.5238'),
(474, 26, '5DQNBBDMJ2', 'Request for $27 withdraw to Binance initiated', '27', 0, '2023-01-18 13:03:15', '2023-01-18 13:03:15', '5597.5915'),
(475, 69, 'F8IGOTOZBC', '$19.2548 transferred to main wallet successfully', '19.2548', 1, '2023-01-18 13:12:31', '2023-01-18 13:12:31', '19.2548'),
(476, 49, 'UAAVQ983HF', 'Request for $27 withdraw to Bank initiated', '27', 0, '2023-01-18 13:17:51', '2023-01-18 13:17:51', '0.3'),
(477, 70, 'RTNC5UAF3H', '$0.0612 transferred to main wallet successfully', '0.0612', 1, '2023-01-18 15:22:54', '2023-01-18 15:22:54', '2.1199'),
(478, 70, 'HNTNQWOOIU', '$0 transferred to main wallet successfully', '0', 1, '2023-01-18 15:23:05', '2023-01-18 15:23:05', '2.1199'),
(479, 70, 'OCUBL6UMGR', '$0.1528 transferred to main wallet successfully', '0.1528', 1, '2023-01-18 22:51:31', '2023-01-18 22:51:31', '2.2727'),
(480, 70, 'DVW6SNEACW', '$0.0766 transferred to main wallet successfully', '0.0766', 1, '2023-01-19 14:44:02', '2023-01-19 14:44:02', '2.3493'),
(481, 70, '5TBQF5BZQO', 'You cancelled the package. $35 added to your wallet', '35', 1, '2023-01-19 14:45:06', '2023-01-19 14:45:06', '37.3493'),
(482, 70, 'UZCN8GNDJR', 'Request for $20 withdraw to Bank initiated', '20', 0, '2023-01-19 14:47:22', '2023-01-19 14:47:22', '17.3493'),
(483, 70, 'SBQGV1WQ4Z', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-01-19 14:53:42', '2023-01-19 14:53:42', '17.3495'),
(484, 70, 'BENV90NXN4', 'Withdraw request for $20 rejected by Admin', '20', 1, '2023-01-19 15:18:54', '2023-01-19 15:18:54', '37.3495'),
(485, 70, 'ZG4SJOUW3V', '$0.122 transferred to main wallet successfully', '0.122', 1, '2023-01-19 18:46:00', '2023-01-19 18:46:00', '37.4715'),
(486, 70, '0GUYFWBDVV', 'Day Plus subscribed with $35', '35', 0, '2023-01-19 18:47:23', '2023-01-19 18:47:23', '2.4715'),
(487, 26, 'PYEZ5YLVWF', '$4.9 profit on $35 Invested by SHAHAYAR ABBAS', '4.9', 1, '2023-01-19 18:47:24', '2023-01-19 18:47:24', '5602.4915'),
(488, 26, 'NX2VMWME6Z', '$2.1 reward profit on $35 Invested by SHAHAYAR ABBAS', '2.1', 1, '2023-01-19 18:47:25', '2023-01-19 18:47:25', '5602.4915'),
(489, 25, '9L7OQLNJDW', '$1.75 profit on $35 Invested by SHAHAYAR ABBAS', '1.75', 1, '2023-01-19 18:47:26', '2023-01-19 18:47:26', '1034.7702'),
(490, 25, 'C1JJKXVTMG', '$0.7 reward profit on $35 Invested by SHAHAYAR ABBAS', '0.7', 1, '2023-01-19 18:47:27', '2023-01-19 18:47:27', '1034.7702'),
(491, 70, 'CZUATKD2XE', '$0.012 transferred to main wallet successfully', '0.012', 1, '2023-01-20 03:27:35', '2023-01-20 03:27:35', '2.4835'),
(492, 82, '4UVHX7ZXQS', '$199.5 sent to Muneeb shakeel', '199.5', 0, '2023-01-20 03:55:00', '2023-01-20 03:55:00', '7.58'),
(493, 26, 'IYG13MEZXZ', '$190 received from Irfan Naeem', '190', 1, '2023-01-20 03:55:01', '2023-01-20 03:55:01', '5792.4915'),
(494, 70, 'RJV3OMZMOC', '$0.0105 transferred to main wallet successfully', '0.0105', 1, '2023-01-20 11:02:57', '2023-01-20 11:02:57', '2.494'),
(495, 70, 'UJTFAZCSYH', '$0.1253 transferred to main wallet successfully', '0.1253', 1, '2023-01-20 17:15:01', '2023-01-20 17:15:01', '2.6193'),
(496, 51, 'LXTSBSGIB3', '$0.8957 transferred to main wallet successfully', '0.8957', 1, '2023-01-21 17:32:29', '2023-01-21 17:32:29', '7.4195'),
(497, 70, 'OO5VDDL0SM', '$0.3158 transferred to main wallet successfully', '0.3158', 1, '2023-01-21 19:11:24', '2023-01-21 19:11:24', '2.9351'),
(498, 69, 'TYDPIYJOQJ', '$2.7284 transferred to main wallet successfully', '2.7284', 1, '2023-01-21 20:17:49', '2023-01-21 20:17:49', '21.9832'),
(499, 69, 'VFF9VUKK09', '$0.0006 transferred to main wallet successfully', '0.0006', 1, '2023-01-21 20:17:53', '2023-01-21 20:17:53', '21.9838'),
(500, 51, 'UOSHXXFL1Q', '$0.043 transferred to main wallet successfully', '0.043', 1, '2023-01-21 21:42:09', '2023-01-21 21:42:09', '7.4625'),
(501, 51, 'BGXUAMLOPQ', '$0 transferred to main wallet successfully', '0', 1, '2023-01-21 21:42:10', '2023-01-21 21:42:10', '7.4625'),
(502, 51, '7O9QYKSJ2R', '$0.185 transferred to main wallet successfully', '0.185', 1, '2023-01-22 15:34:18', '2023-01-22 15:34:18', '7.6475'),
(503, 26, 'DULGO7N5XJ', '$1050 sent to Muhammad Mashood', '1050', 0, '2023-01-22 15:37:04', '2023-01-22 15:37:04', '4742.4915'),
(504, 51, 'Z1XYJMVH7P', '$1000 received from Muneeb shakeel', '1000', 1, '2023-01-22 15:37:04', '2023-01-22 15:37:04', '1007.6475'),
(505, 69, 'IHFXCDIE66', '$11.2326 transferred to main wallet successfully', '11.2326', 1, '2023-01-22 17:32:48', '2023-01-22 17:32:48', '33.2164'),
(506, 39, 'TEZWVUR7BR', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-01-22 22:17:33', '2023-01-22 22:17:33', '12.5'),
(507, 51, 'M1XUWIPRJB', 'Professional subscribed with $1000', '1000', 0, '2023-01-23 00:29:06', '2023-01-23 00:29:06', '7.6475'),
(508, 49, 'EQR9YGMWLS', '$140 profit on $1000 Invested by Muhammad Mashood', '140', 1, '2023-01-23 00:29:07', '2023-01-23 00:29:07', '140.3'),
(509, 49, '1CAWMEBMVE', '$60 reward profit on $1000 Invested by Muhammad Mashood', '60', 1, '2023-01-23 00:29:08', '2023-01-23 00:29:08', '140.3'),
(510, 26, 'Y0C71N3635', '$50 profit on $1000 Invested by Muhammad Mashood', '50', 1, '2023-01-23 00:29:09', '2023-01-23 00:29:09', '4792.4915'),
(511, 26, '2CHJYQMZII', '$20 reward profit on $1000 Invested by Muhammad Mashood', '20', 1, '2023-01-23 00:29:10', '2023-01-23 00:29:10', '4792.4915'),
(512, 25, 'UOQPXGHKYV', '$20 profit on $1000 Invested by Muhammad Mashood', '20', 1, '2023-01-23 00:29:10', '2023-01-23 00:29:10', '1054.7702'),
(513, 25, '67V6BQSAKZ', '$10 reward profit on $1000 Invested by Muhammad Mashood', '10', 1, '2023-01-23 00:29:11', '2023-01-23 00:29:11', '1054.7702'),
(514, 51, 'Z3J3MGMSAG', '$0.0924 transferred to main wallet successfully', '0.0924', 1, '2023-01-23 00:29:30', '2023-01-23 00:29:30', '7.7399'),
(515, 49, 'IKDVIVYXQG', 'You earned a reward of $50', '50', 1, '2023-01-23 00:33:16', '2023-01-23 00:33:16', '140.3'),
(516, 49, 'UBW345RXZ0', '$14.1 transferred to main wallet successfully', '14.1', 1, '2023-01-23 00:38:37', '2023-01-23 00:38:37', '204.4'),
(522, 25, 'RELEFLYTTP', '$363.6448 transferred to main wallet successfully', '363.6448', 1, '2023-01-23 05:15:40', '2023-01-23 05:15:40', '1418.415'),
(523, 25, 'YLZPJNVGK2', 'Minute Plus subscribed with $500', '500', 0, '2023-01-23 05:17:14', '2023-01-23 05:17:14', '918.415'),
(525, 70, 'UVW8EAY8I1', '$0.2556 transferred to main wallet successfully', '0.2556', 1, '2023-01-23 12:37:59', '2023-01-23 12:37:59', '3.4463'),
(526, 25, 'KYTBE3HJUM', '$6.7957 transferred to main wallet successfully', '6.7957', 1, '2023-01-23 15:13:06', '2023-01-23 15:13:06', '931.9898'),
(527, 25, 'ENQRU60SUM', '$0 transferred to main wallet successfully', '0', 1, '2023-01-23 15:13:08', '2023-01-23 15:13:08', '931.9898'),
(528, 49, 'MMYDTACW57', 'Request for $70 withdraw to Bank initiated', '70', 0, '2023-01-23 20:22:56', '2023-01-23 20:22:56', '134.4'),
(529, 70, 'RBVXZUDQWW', '$0.2104 transferred to main wallet successfully', '0.2104', 1, '2023-01-23 21:20:01', '2023-01-23 21:20:01', '3.8671'),
(530, 26, 'ZEHTROCQBM', '$1522.5 sent to Naeem butt', '1522.5', 0, '2023-01-23 23:38:57', '2023-01-23 23:38:57', '4028.2464'),
(531, 46, 'NN7MPVJCT5', '$1450 received from Muneeb shakeel', '1450', 1, '2023-01-23 23:38:59', '2023-01-23 23:38:59', '1450'),
(532, 69, 'QTIABZZR1F', '$1.2006 transferred to main wallet successfully', '1.2006', 1, '2023-01-24 04:20:26', '2023-01-24 04:20:26', '35.6176'),
(533, 46, 'PUP6YGI31D', '$5.7679 transferred to main wallet successfully', '5.7679', 1, '2023-01-24 14:25:45', '2023-01-24 14:25:45', '1456.214'),
(534, 70, 'M9AO8ZQUNG', '$0.228 transferred to main wallet successfully', '0.228', 1, '2023-01-24 18:47:48', '2023-01-24 18:47:48', '4.3231'),
(535, 25, 'AKGRCODMI5', '$5050 received from Rexoplus', '5050', 1, '2023-01-24 21:47:48', '2023-01-24 21:47:48', '5992.7651'),
(536, 26, 'AEM1HIZQ76', '$33.2567 transferred to main wallet successfully', '33.2567', 1, '2023-01-24 21:48:18', '2023-01-24 21:48:18', '4083.7829'),
(537, 26, 'PTGRPZ34DQ', '$3885 sent to Hussain Butt', '3885', 0, '2023-01-24 21:52:39', '2023-01-24 21:52:39', '198.7835'),
(538, 88, 'E9UPLBSEI9', '$3700 received from Muneeb shakeel', '3700', 1, '2023-01-24 21:52:40', '2023-01-24 21:52:40', '3700'),
(539, 25, 'BIJZWVVOTM', '$5985 sent to Hussain Butt', '5985', 0, '2023-01-24 22:00:50', '2023-01-24 22:00:50', '10.6802'),
(540, 88, 'PKZD5HAKGK', '$5700 received from Waqar Ali', '5700', 1, '2023-01-24 22:00:52', '2023-01-24 22:00:52', '9400'),
(541, 88, '2CSCJDA13T', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:04:46', '2023-01-24 22:04:46', '8900'),
(542, 26, 'VBQXCY9FHY', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:04:46', '2023-01-24 22:04:46', '268.7835'),
(543, 26, 'MG2IMTULYQ', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:04:47', '2023-01-24 22:04:47', '268.7835'),
(544, 25, '12QAJKZYHS', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:04:48', '2023-01-24 22:04:48', '35.6964'),
(545, 25, 'VK6DWMBDLA', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:04:48', '2023-01-24 22:04:48', '35.6964'),
(546, 88, 'GRTYFD1JVM', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:06:26', '2023-01-24 22:06:26', '8400'),
(547, 26, '5DYZ1YGMSS', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:06:26', '2023-01-24 22:06:26', '338.7835'),
(548, 26, 'K9UVCT24AE', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:06:27', '2023-01-24 22:06:27', '338.7835'),
(549, 25, '7VCLTTO7HQ', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:06:28', '2023-01-24 22:06:28', '60.6964'),
(550, 25, 'YJEXV9CLMR', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:06:29', '2023-01-24 22:06:29', '60.6964'),
(551, 88, '4YBFJUHKMN', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:07:24', '2023-01-24 22:07:24', '7900'),
(552, 26, '40GQVUVIXF', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:07:25', '2023-01-24 22:07:25', '408.7835'),
(553, 26, 'ZF6AJ01CUF', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:07:27', '2023-01-24 22:07:27', '408.7835'),
(554, 25, 'LQWLFKE1QV', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:07:27', '2023-01-24 22:07:27', '85.6964'),
(555, 25, '4DIQFDOZQR', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:07:28', '2023-01-24 22:07:28', '85.6964'),
(556, 88, 'EQNG04WSYY', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:08:07', '2023-01-24 22:08:07', '7400'),
(557, 26, 'EEG9PYTRYB', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:08:07', '2023-01-24 22:08:07', '479.1095'),
(558, 26, 'CV2JVNXNLD', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:08:08', '2023-01-24 22:08:08', '479.1095'),
(559, 25, '6KA7QZ1PN6', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:08:09', '2023-01-24 22:08:09', '110.6964'),
(560, 25, 'VRMIKEUQFD', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:08:09', '2023-01-24 22:08:09', '110.6964'),
(561, 88, 'XIJ9PTNWQK', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:09:00', '2023-01-24 22:09:00', '6900'),
(562, 26, '7AHEWLBMSO', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:09:00', '2023-01-24 22:09:00', '549.1095'),
(563, 26, 'FUXB9QGXJS', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:09:01', '2023-01-24 22:09:01', '549.1095'),
(564, 25, 'J9JWBQXDUW', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:09:02', '2023-01-24 22:09:02', '135.6964'),
(565, 25, 'KSCSL36BNQ', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:09:03', '2023-01-24 22:09:03', '135.6964'),
(566, 88, 'DRLWRXHEKG', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:09:35', '2023-01-24 22:09:35', '6400'),
(567, 26, 'HACAEDTOHI', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:09:35', '2023-01-24 22:09:35', '619.1095'),
(568, 26, 'ZXAJK6A3C8', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:09:36', '2023-01-24 22:09:36', '619.1095'),
(569, 25, 'U5BNSBK5TF', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:09:37', '2023-01-24 22:09:37', '160.6964'),
(570, 25, '4NZMKFP3S6', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:09:38', '2023-01-24 22:09:38', '160.6964'),
(571, 88, '7G1QADWJHL', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:10:39', '2023-01-24 22:10:39', '5900'),
(572, 26, 'PVUXU1RJUY', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:10:40', '2023-01-24 22:10:40', '689.1095'),
(573, 26, 'YN1MKNBCGE', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:10:40', '2023-01-24 22:10:40', '689.1095'),
(574, 25, 'LCJO1MFRXF', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:10:41', '2023-01-24 22:10:41', '185.6964'),
(575, 25, '0D0RCPLFEE', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:10:41', '2023-01-24 22:10:41', '185.6964'),
(576, 88, 'RMOYWXGZPJ', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:16:42', '2023-01-24 22:16:42', '5400'),
(577, 26, '1P4NMM9KZJ', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:16:43', '2023-01-24 22:16:43', '759.1095'),
(578, 26, 'BH75TXHSNJ', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:16:43', '2023-01-24 22:16:43', '759.1095'),
(579, 25, 'V7QVXMCT9Z', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:16:44', '2023-01-24 22:16:44', '210.7603'),
(580, 25, 'D9TWEXSDHE', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:16:45', '2023-01-24 22:16:45', '210.7603'),
(581, 88, 'VSSJBXUIO2', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:17:51', '2023-01-24 22:17:51', '4900'),
(582, 26, '5QBA1LTDXU', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:17:52', '2023-01-24 22:17:52', '829.1095'),
(583, 26, 'TAPTIEBPF8', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:17:53', '2023-01-24 22:17:53', '829.1095'),
(584, 25, 'EHGXCNOODI', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:17:53', '2023-01-24 22:17:53', '235.7603'),
(585, 25, 'CPO96KYA88', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:17:54', '2023-01-24 22:17:54', '235.7603'),
(586, 88, 'MZUFAABJNV', 'Veteran subscribed with $500', '500', 0, '2023-01-24 22:18:26', '2023-01-24 22:18:26', '4400'),
(587, 26, 'BCNRYELI01', '$70 profit on $500 Invested by Hussain Butt', '70', 1, '2023-01-24 22:18:27', '2023-01-24 22:18:27', '899.1095'),
(588, 26, 'J9NAMI2OJW', '$30 reward profit on $500 Invested by Hussain Butt', '30', 1, '2023-01-24 22:18:28', '2023-01-24 22:18:28', '899.1095'),
(589, 25, '75FCEWXKWK', '$25 profit on $500 Invested by Hussain Butt', '25', 1, '2023-01-24 22:18:28', '2023-01-24 22:18:28', '260.7603'),
(590, 25, 'ZTCZJSHLZH', '$10 reward profit on $500 Invested by Hussain Butt', '10', 1, '2023-01-24 22:18:29', '2023-01-24 22:18:29', '260.7603'),
(591, 26, '9GTHVYRQUJ', '$52.5 sent to Naeem butt', '52.5', 0, '2023-01-25 00:13:33', '2023-01-25 00:13:33', '848.6925'),
(592, 46, 'ATMTB3SZII', '$50 received from Muneeb shakeel', '50', 1, '2023-01-25 00:13:34', '2023-01-25 00:13:34', '1506.2807'),
(593, 46, 'RXTRKQT6AV', 'Veteran subscribed with $500', '500', 0, '2023-01-25 00:16:01', '2023-01-25 00:16:01', '1006.2816'),
(594, 46, '1IGQDG9CJ4', 'Veteran subscribed with $500', '500', 0, '2023-01-25 00:16:21', '2023-01-25 00:16:21', '506.2817'),
(595, 46, 'RLJS2WNT2H', 'Veteran subscribed with $500', '500', 0, '2023-01-25 00:16:43', '2023-01-25 00:16:43', '6.2817'),
(596, 88, '4GTVQBZHXW', 'Hustler subscribed with $1000', '1000', 0, '2023-01-25 00:20:12', '2023-01-25 00:20:12', '3400'),
(597, 26, 'KTKWRULM45', '$140 profit on $1000 Invested by Hussain Butt', '140', 1, '2023-01-25 00:20:13', '2023-01-25 00:20:13', '988.6925'),
(598, 26, '3CKIYOHANJ', '$60 reward profit on $1000 Invested by Hussain Butt', '60', 1, '2023-01-25 00:20:14', '2023-01-25 00:20:14', '988.6925'),
(599, 25, 'ESXEFVT9MA', '$50 profit on $1000 Invested by Hussain Butt', '50', 1, '2023-01-25 00:20:14', '2023-01-25 00:20:14', '311.3095'),
(600, 25, 'FL2D0WRDUN', '$20 reward profit on $1000 Invested by Hussain Butt', '20', 1, '2023-01-25 00:20:15', '2023-01-25 00:20:15', '311.3095'),
(601, 88, 'O0FJP5V3IW', 'Hustler subscribed with $1000', '1000', 0, '2023-01-25 00:20:40', '2023-01-25 00:20:40', '2400'),
(602, 26, 'T2TOFRCKW5', '$140 profit on $1000 Invested by Hussain Butt', '140', 1, '2023-01-25 00:20:41', '2023-01-25 00:20:41', '1128.6925'),
(603, 26, 'NISDMEDG4P', '$60 reward profit on $1000 Invested by Hussain Butt', '60', 1, '2023-01-25 00:20:42', '2023-01-25 00:20:42', '1128.6925'),
(604, 25, '0PD17HXOLX', '$50 profit on $1000 Invested by Hussain Butt', '50', 1, '2023-01-25 00:20:43', '2023-01-25 00:20:43', '361.3095'),
(605, 25, 'OTNWCIIP48', '$20 reward profit on $1000 Invested by Hussain Butt', '20', 1, '2023-01-25 00:20:43', '2023-01-25 00:20:43', '361.3095'),
(606, 25, '1NRIJI8LTK', '$15.0207 transferred to main wallet successfully', '15.0207', 1, '2023-01-25 01:59:33', '2023-01-25 01:59:33', '377.0312'),
(607, 70, 'L8B8BVCBYS', '$0.0103 transferred to main wallet successfully', '0.0103', 1, '2023-01-25 02:15:23', '2023-01-25 02:15:23', '4.3437'),
(608, 70, 'ERSAHO4UTY', '$0.0147 transferred to main wallet successfully', '0.0147', 1, '2023-01-25 12:52:35', '2023-01-25 12:52:35', '4.3731'),
(609, 90, 'AFHD2VICD1', '$805 received from Rexoplus', '805', 1, '2023-01-25 15:13:49', '2023-01-25 15:13:49', '805'),
(610, 90, 'LBYRSGUK8N', 'Expert subscribed with $765', '765', 0, '2023-01-25 16:12:32', '2023-01-25 16:12:32', '40'),
(611, 82, 'BJ4XMSDCKO', '$107.1 profit on $765 Invested by Aneeza', '107.1', 1, '2023-01-25 16:12:33', '2023-01-25 16:12:33', '114.68'),
(612, 82, 'PSGTDAXF1U', '$45.9 reward profit on $765 Invested by Aneeza', '45.9', 1, '2023-01-25 16:12:34', '2023-01-25 16:12:34', '114.68'),
(613, 26, 'WGLHQCK0NL', '$38.25 profit on $765 Invested by Aneeza', '38.25', 1, '2023-01-25 16:12:35', '2023-01-25 16:12:35', '1166.9425'),
(614, 26, 'C6YLZSGGMD', '$15.3 reward profit on $765 Invested by Aneeza', '15.3', 1, '2023-01-25 16:12:36', '2023-01-25 16:12:36', '1166.9425'),
(615, 25, 'TATVRF89SK', '$15.3 profit on $765 Invested by Aneeza', '15.3', 1, '2023-01-25 16:12:36', '2023-01-25 16:12:36', '392.4973'),
(616, 25, '5ZKUQRMVMR', '$7.65 reward profit on $765 Invested by Aneeza', '7.65', 1, '2023-01-25 16:12:37', '2023-01-25 16:12:37', '392.4973'),
(617, 82, 'PP8RYLS7WS', 'You earned a reward of $50', '50', 1, '2023-01-25 16:14:13', '2023-01-25 16:14:13', '114.68'),
(618, 25, '29AMPICSIV', '$750 received from Rexoplus', '750', 1, '2023-01-25 16:19:26', '2023-01-25 16:19:26', '1150.5458'),
(619, 88, '8RZKFFVFER', 'Hustler subscribed with $2400', '2400', 0, '2023-01-25 16:46:06', '2023-01-25 16:46:06', '0'),
(620, 26, '1KYBW7WGAK', '$336 profit on $2400 Invested by Hussain Butt', '336', 1, '2023-01-25 16:46:06', '2023-01-25 16:46:06', '1502.9425'),
(621, 26, 'GN3QNJPYV7', '$144 reward profit on $2400 Invested by Hussain Butt', '144', 1, '2023-01-25 16:46:07', '2023-01-25 16:46:07', '1502.9425'),
(622, 25, '7DT3CANY3I', '$120 profit on $2400 Invested by Hussain Butt', '120', 1, '2023-01-25 16:46:08', '2023-01-25 16:46:08', '1270.6209'),
(623, 25, 'QZBZMVWOMU', '$48 reward profit on $2400 Invested by Hussain Butt', '48', 1, '2023-01-25 16:46:08', '2023-01-25 16:46:08', '1270.6209'),
(624, 25, 'BWQY2H3UX1', '$10.1138 transferred to main wallet successfully', '10.1138', 1, '2023-01-25 21:57:47', '2023-01-25 21:57:47', '1282.5588'),
(625, 70, '2QIA6PCVDZ', '$0.2139 transferred to main wallet successfully', '0.2139', 1, '2023-01-26 00:05:36', '2023-01-26 00:05:36', '4.8009'),
(626, 55, 'VKTAS8LS9M', '$4.2 transferred to main wallet successfully', '4.2', 1, '2023-01-26 00:13:04', '2023-01-26 00:13:04', '12.6'),
(627, 55, 'WKNYVYE0XO', 'You cancelled the package. $70 added to your wallet', '70', 1, '2023-01-26 00:13:19', '2023-01-26 00:13:19', '82.6'),
(628, 55, 'JDAISXRCJM', '$81.9 sent to Muneeb shakeel', '81.9', 0, '2023-01-26 00:14:55', '2023-01-26 00:14:55', '0.69999999999999'),
(629, 26, 'SJJ4DLK6KU', '$78 received from Rehanakber', '78', 1, '2023-01-26 00:14:56', '2023-01-26 00:14:56', '1580.9425'),
(630, 82, 'KQLRZD7SFP', '$162.75 sent to Muneeb shakeel', '162.75', 0, '2023-01-26 04:05:38', '2023-01-26 04:05:38', '1.93'),
(631, 26, 'VX5TJZLHDZ', '$155 received from Irfan Naeem', '155', 1, '2023-01-26 04:05:39', '2023-01-26 04:05:39', '1735.9425'),
(632, 69, '7T1KQU8BMB', '$2.0763 transferred to main wallet successfully', '2.0763', 1, '2023-01-26 16:31:37', '2023-01-26 16:31:37', '39.7702'),
(633, 70, 'HZQKKQHH9F', '$0.1416 transferred to main wallet successfully', '0.1416', 1, '2023-01-26 18:05:48', '2023-01-26 18:05:48', '5.0841'),
(634, 25, 'ER3ZYSW2AW', '$5000 received from Rexoplus', '5000', 1, '2023-01-27 00:05:58', '2023-01-27 00:05:58', '6282.7082'),
(635, 25, 'AV79KAS9ZP', '$5250 sent to Muneeb shakeel', '5250', 0, '2023-01-27 00:09:08', '2023-01-27 00:09:08', '1086.7198'),
(636, 26, 'QP5KERGLTX', '$5000 received from Waqar Ali', '5000', 1, '2023-01-27 00:09:09', '2023-01-27 00:09:09', '6764.2541'),
(637, 25, 'ICYFUUGNP4', '$5000 received from Rexoplus', '5000', 1, '2023-01-27 00:51:57', '2023-01-27 00:51:57', '6086.7363'),
(638, 25, '216AHLIGLQ', '$5250 sent to Ali Rashid', '5250', 0, '2023-01-27 00:53:58', '2023-01-27 00:53:58', '836.9736'),
(639, 89, '8T57QAMEVP', '$5000 received from Waqar Ali', '5000', 1, '2023-01-27 00:53:59', '2023-01-27 00:53:59', '5000'),
(640, 89, 'HTVAZQTDRN', 'Hustler subscribed with $2500', '2500', 0, '2023-01-27 01:13:54', '2023-01-27 01:13:54', '2500'),
(641, 88, 'VD2XYKJF5X', '$350 profit on $2500 Invested by Ali Rashid', '350', 1, '2023-01-27 01:13:55', '2023-01-27 01:13:55', '350'),
(642, 88, 'EKJGEQX7AZ', '$150 reward profit on $2500 Invested by Ali Rashid', '150', 1, '2023-01-27 01:13:56', '2023-01-27 01:13:56', '350'),
(643, 26, 'ZF5ZX1DYC0', '$125 profit on $2500 Invested by Ali Rashid', '125', 1, '2023-01-27 01:13:56', '2023-01-27 01:13:56', '6909.6265'),
(644, 26, 'HC8CM3ZUB6', '$50 reward profit on $2500 Invested by Ali Rashid', '50', 1, '2023-01-27 01:13:57', '2023-01-27 01:13:57', '6909.6265'),
(645, 25, 'SPZJLGE3PI', '$50 profit on $2500 Invested by Ali Rashid', '50', 1, '2023-01-27 01:13:58', '2023-01-27 01:13:58', '886.9736'),
(646, 25, 'CPGBKYMXES', '$25 reward profit on $2500 Invested by Ali Rashid', '25', 1, '2023-01-27 01:13:59', '2023-01-27 01:13:59', '886.9736'),
(647, 89, 'WFPHTR2WMQ', 'Hustler subscribed with $2500', '2500', 0, '2023-01-27 01:14:31', '2023-01-27 01:14:31', '0'),
(648, 88, 'WN2YN4PWR3', '$350 profit on $2500 Invested by Ali Rashid', '350', 1, '2023-01-27 01:14:34', '2023-01-27 01:14:34', '700'),
(649, 88, 'QJMMPH4YAI', '$150 reward profit on $2500 Invested by Ali Rashid', '150', 1, '2023-01-27 01:14:34', '2023-01-27 01:14:34', '700'),
(650, 26, 'MVLSTMTALA', '$125 profit on $2500 Invested by Ali Rashid', '125', 1, '2023-01-27 01:14:36', '2023-01-27 01:14:36', '7034.6265'),
(651, 26, 'DRZQ6RO349', '$50 reward profit on $2500 Invested by Ali Rashid', '50', 1, '2023-01-27 01:14:36', '2023-01-27 01:14:36', '7034.6265'),
(652, 25, 'XHQQ1BBYFK', '$50 profit on $2500 Invested by Ali Rashid', '50', 1, '2023-01-27 01:14:37', '2023-01-27 01:14:37', '936.9736'),
(653, 25, 'DVUQ7LHSW0', '$25 reward profit on $2500 Invested by Ali Rashid', '25', 1, '2023-01-27 01:14:37', '2023-01-27 01:14:37', '936.9736'),
(654, 70, 'UYZJPGIDZA', '$0.1075 transferred to main wallet successfully', '0.1075', 1, '2023-01-27 12:48:11', '2023-01-27 12:48:11', '5.2991'),
(655, 70, '0X7CN4S9EJ', '$0.2287 transferred to main wallet successfully', '0.2287', 1, '2023-01-28 10:45:11', '2023-01-28 10:45:11', '5.7565'),
(656, 69, 'AOEHNDWUQZ', '$1.464 transferred to main wallet successfully', '1.464', 1, '2023-01-28 10:57:39', '2023-01-28 10:57:39', '42.6982'),
(657, 50, 'F8CZVFP5RR', '$14.3586 transferred to main wallet successfully', '14.3586', 1, '2023-01-28 20:18:44', '2023-01-28 20:18:44', '31.494'),
(658, 26, 'OFVWERJBX7', 'Hustler subscribed with $2500', '2500', 0, '2023-01-29 01:18:23', '2023-01-29 01:18:23', '4583.4269'),
(659, 25, 'V1JGDXDLCL', '$350 profit on $2500 Invested by Muneeb shakeel', '350', 1, '2023-01-29 01:18:24', '2023-01-29 01:18:24', '1297.4762'),
(660, 25, '8Z9EZWB2DV', '$150 reward profit on $2500 Invested by Muneeb shakeel', '150', 1, '2023-01-29 01:18:25', '2023-01-29 01:18:25', '1297.4762'),
(661, 70, 'UQ8WZUPYJ5', '$0.2191 transferred to main wallet successfully', '0.2191', 1, '2023-01-29 01:45:13', '2023-01-29 01:45:13', '6.1947'),
(662, 69, 'SYLKVVLYBQ', '$11.5465 transferred to main wallet successfully', '11.5465', 1, '2023-01-29 17:17:18', '2023-01-29 17:17:18', '65.7912'),
(663, 70, 'IYTZEJKM8S', '$0.2224 transferred to main wallet successfully', '0.2224', 1, '2023-01-29 19:10:35', '2023-01-29 19:10:35', '6.6395'),
(664, 39, 'WBTG1U2AGK', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-01-29 22:05:15', '2023-01-29 22:05:15', '33.5'),
(665, 49, 'IGNUETLXQI', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-01-30 10:26:55', '2023-01-30 10:26:55', '138.6'),
(666, 51, '21FQMAA0JV', '$1.8421 transferred to main wallet successfully', '1.8421', 1, '2023-01-30 10:27:52', '2023-01-30 10:27:52', '11.3909'),
(667, 70, 'OSOKP5HOVR', '$0.0221 transferred to main wallet successfully', '0.0221', 1, '2023-01-30 11:12:18', '2023-01-30 11:12:18', '6.6837'),
(668, 25, 'GNMYGZ0R3S', '$367.5 sent to Muhammad Mashood', '367.5', 0, '2023-01-30 19:48:08', '2023-01-30 19:48:08', '975.5799'),
(669, 51, 'QHI3PQEHKZ', '$350 received from Waqar Ali', '350', 1, '2023-01-30 19:48:10', '2023-01-30 19:48:10', '361.4864'),
(670, 51, 'DEUAFQNBQV', '$0.0969 transferred to main wallet successfully', '0.0969', 1, '2023-01-30 19:50:11', '2023-01-30 19:50:11', '361.5847'),
(671, 49, 'RUKUXVUOU6', '$136.5 sent to Muhammad Mashood', '136.5', 0, '2023-01-30 20:51:05', '2023-01-30 20:51:05', '2.1'),
(672, 51, 'QY814B8S4Y', '$130 received from Muhammad Tayyab', '130', 1, '2023-01-30 20:51:05', '2023-01-30 20:51:05', '491.5847'),
(673, 70, 'MJLIVKZS64', '$0.2119 transferred to main wallet successfully', '0.2119', 1, '2023-01-30 20:57:41', '2023-01-30 20:57:41', '7.1075'),
(674, 70, 'PXBTLSGURN', '$0.001 transferred to main wallet successfully', '0.001', 1, '2023-01-30 21:43:00', '2023-01-30 21:43:00', '7.1095'),
(675, 70, 'NPENZ2TIC7', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-01-30 22:14:20', '2023-01-30 22:14:20', '7.1109'),
(676, 70, 'JQWAW3K2YD', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-30 22:21:25', '2023-01-30 22:21:25', '7.1111'),
(677, 70, 'B3XOQOOWDD', '$0.0169 transferred to main wallet successfully', '0.0169', 1, '2023-01-31 10:34:58', '2023-01-31 10:34:58', '7.1449'),
(678, 70, 'WDUFXOFNGF', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-01-31 10:42:59', '2023-01-31 10:42:59', '7.1451'),
(679, 70, 'PFVYSYKFNP', '$0.0013 transferred to main wallet successfully', '0.0013', 1, '2023-01-31 11:37:59', '2023-01-31 11:37:59', '7.1477'),
(680, 70, 'YHCIJ61INH', '$0.0028 transferred to main wallet successfully', '0.0028', 1, '2023-01-31 13:39:51', '2023-01-31 13:39:51', '7.1533'),
(681, 70, 'OFW2JLJ4UL', '$0.1227 transferred to main wallet successfully', '0.1227', 1, '2023-01-31 17:59:51', '2023-01-31 17:59:51', '7.3987'),
(682, 70, 'H1R8QXUFHM', '$0.084 transferred to main wallet successfully', '0.084', 1, '2023-01-31 19:41:21', '2023-01-31 19:41:21', '7.5667'),
(683, 26, 'MSPKA31LFY', '$472.5 sent to Muhammad Arshad', '472.5', 0, '2023-01-31 20:30:50', '2023-01-31 20:30:50', '4178.3436'),
(684, 97, '4NJJKV0XHU', '$450 received from Muneeb shakeel', '450', 1, '2023-01-31 20:30:52', '2023-01-31 20:30:52', '450'),
(685, 97, 'LH3XSYI5RZ', 'Day Plus subscribed with $450', '450', 0, '2023-01-31 21:15:10', '2023-01-31 21:15:10', '0'),
(686, 70, 'QVJLF0YLTW', '$63 profit on $450 Invested by Muhammad Arshad', '63', 1, '2023-01-31 21:15:12', '2023-01-31 21:15:12', '70.5672'),
(687, 70, 'TKXEHADO3C', '$27 reward profit on $450 Invested by Muhammad Arshad', '27', 1, '2023-01-31 21:15:14', '2023-01-31 21:15:14', '70.5672'),
(688, 26, 'OWBBJXM2O5', '$22.5 profit on $450 Invested by Muhammad Arshad', '22.5', 1, '2023-01-31 21:15:16', '2023-01-31 21:15:16', '4200.8436'),
(689, 26, 'IXKYN605LS', '$9 reward profit on $450 Invested by Muhammad Arshad', '9', 1, '2023-01-31 21:15:18', '2023-01-31 21:15:18', '4200.8436'),
(690, 25, 'UZB8UYVQBT', '$9 profit on $450 Invested by Muhammad Arshad', '9', 1, '2023-01-31 21:15:20', '2023-01-31 21:15:20', '985.737'),
(691, 25, 'K5BLDOPT1X', '$4.5 reward profit on $450 Invested by Muhammad Arshad', '4.5', 1, '2023-01-31 21:15:22', '2023-01-31 21:15:22', '985.737'),
(692, 70, '4KU3CX7IHA', '$0.0022 transferred to main wallet successfully', '0.0022', 1, '2023-01-31 21:22:27', '2023-01-31 21:22:27', '70.5711'),
(693, 70, 'DU7E32VO9K', 'Request for $20 withdraw to Binance initiated', '20', 0, '2023-01-31 21:25:43', '2023-01-31 21:25:43', '50.5711'),
(694, 70, 'OWTDAHDZB8', '$0.0009 transferred to main wallet successfully', '0.0009', 1, '2023-01-31 22:01:24', '2023-01-31 22:01:24', '50.5729'),
(695, 70, 'PLXDZHCNVT', '$0.0019 transferred to main wallet successfully', '0.0019', 1, '2023-01-31 23:24:18', '2023-01-31 23:24:18', '50.5767'),
(696, 70, 'NPOTSTYFLC', 'Request for $20 withdraw to Binance initiated', '20', 0, '2023-01-31 23:25:49', '2023-01-31 23:25:49', '30.5767'),
(697, 70, 'MK6CIGHFWM', '$0.0017 transferred to main wallet successfully', '0.0017', 1, '2023-02-01 00:40:10', '2023-02-01 00:40:10', '30.5801'),
(698, 70, 'XVBVUJGMCK', '$0.0003 transferred to main wallet successfully', '0.0003', 1, '2023-02-01 00:51:58', '2023-02-01 00:51:58', '30.5807'),
(699, 70, 'WUOYAO0ZYT', '$0.0018 transferred to main wallet successfully', '0.0018', 1, '2023-02-01 02:11:43', '2023-02-01 02:11:43', '30.5843'),
(700, 51, 'OIOIYF0SY8', '$0.3899 transferred to main wallet successfully', '0.3899', 1, '2023-02-01 09:29:49', '2023-02-01 09:29:49', '492.3645'),
(701, 70, 'CLKMKW4W1W', '$0.0119 transferred to main wallet successfully', '0.0119', 1, '2023-02-01 10:49:36', '2023-02-01 10:49:36', '30.6081'),
(702, 70, 'IVT9PGV9DZ', '$0.001 transferred to main wallet successfully', '0.001', 1, '2023-02-01 11:32:28', '2023-02-01 11:32:28', '30.6101'),
(703, 70, '6VOLGBSZAP', '$0.0006 transferred to main wallet successfully', '0.0006', 1, '2023-02-01 12:00:54', '2023-02-01 12:00:54', '30.6113'),
(704, 70, 'JZTKBYCJ1E', 'Request for $30 withdraw to Binance initiated', '30', 0, '2023-02-01 12:01:39', '2023-02-01 12:01:39', '0.6113'),
(705, 70, 'TD8VZALPLP', '$0.0058 transferred to main wallet successfully', '0.0058', 1, '2023-02-01 16:11:10', '2023-02-01 16:11:10', '0.6229'),
(706, 69, 'MQ1CNRO0FM', '$2.4668 transferred to main wallet successfully', '2.4668', 1, '2023-02-01 16:47:33', '2023-02-01 16:47:33', '70.7248'),
(707, 70, 'H3JW46SHLA', '$0.1188 transferred to main wallet successfully', '0.1188', 1, '2023-02-01 17:45:43', '2023-02-01 17:45:43', '0.8605'),
(708, 70, 'IEOGM9NSZW', '$0.0839 transferred to main wallet successfully', '0.0839', 1, '2023-02-01 19:20:25', '2023-02-01 19:20:25', '1.0283'),
(709, 70, 'HQWVMYGRAC', '$0.0015 transferred to main wallet successfully', '0.0015', 1, '2023-02-01 20:26:49', '2023-02-01 20:26:49', '1.0313'),
(710, 70, 'OTKPJNGQFY', '$0.0009 transferred to main wallet successfully', '0.0009', 1, '2023-02-01 21:08:23', '2023-02-01 21:08:23', '1.0331'),
(711, 97, 'ALMXDOIXSP', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-01 22:09:13', '2023-02-01 22:09:13', '2.1'),
(712, 70, 'XA2AGYYGGG', '$0.0058 transferred to main wallet successfully', '0.0058', 1, '2023-02-02 01:19:38', '2023-02-02 01:19:38', '1.0447'),
(713, 70, 'BRKTUMIYPL', '$0.0146 transferred to main wallet successfully', '0.0146', 1, '2023-02-02 11:55:26', '2023-02-02 11:55:26', '1.0739'),
(714, 70, '2MFQX9BM5C', '$0 transferred to main wallet successfully', '0', 1, '2023-02-02 11:55:39', '2023-02-02 11:55:39', '1.0739'),
(715, 59, '4KT09IKKWK', '$120 transferred to main wallet successfully', '120', 1, '2023-02-02 14:19:18', '2023-02-02 14:19:18', '120'),
(716, 26, 'IGBZOEEVM6', '$209.6773 transferred to main wallet successfully', '209.6773', 1, '2023-02-02 14:39:19', '2023-02-02 14:39:19', '4452.8875'),
(717, 25, 'GX7PJ6ZSHT', '$185.173 transferred to main wallet successfully', '185.173', 1, '2023-02-02 14:39:48', '2023-02-02 14:39:48', '1244.4048'),
(718, 57, 'BROC5RY6IY', 'Hustler subscribed with $1000', '1000', 0, '2023-02-02 15:31:28', '2023-02-02 15:31:28', '9672.9009'),
(719, 57, '0WJIDS7UBG', '$120 transferred to main wallet successfully', '120', 1, '2023-02-02 15:47:56', '2023-02-02 15:47:56', '120'),
(720, 70, 'QAFCORB3CL', '$0.0057 transferred to main wallet successfully', '0.0057', 1, '2023-02-02 16:04:37', '2023-02-02 16:04:37', '1.0796'),
(721, 25, '8AFWCNR1Y9', '$525 sent to Ishfaq Anjum Muhammad', '525', 0, '2023-02-02 17:32:18', '2023-02-02 17:32:18', '719.4051'),
(722, 75, 'JB2JG1VDP2', '$500 received from Waqar Ali', '500', 1, '2023-02-02 17:32:21', '2023-02-02 17:32:21', '500'),
(723, 97, 'XPNSED79TE', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-02 21:18:16', '2023-02-02 21:18:16', '3.15'),
(724, 70, 'ZDSWRDIJGN', '$0.2058 transferred to main wallet successfully', '0.2058', 1, '2023-02-02 21:28:14', '2023-02-02 21:28:14', '1.2854'),
(725, 75, 'DJPO9UVHUL', 'Hustler subscribed with $500', '500', 0, '2023-02-02 22:46:51', '2023-02-02 22:46:51', '0'),
(726, 25, 'XTHGZHCCSG', '$70 profit on $500 Invested by Ishfaq Anjum Muhammad', '70', 1, '2023-02-02 22:46:54', '2023-02-02 22:46:54', '789.4051'),
(727, 25, 'GU8M4AXXP1', '$30 reward profit on $500 Invested by Ishfaq Anjum Muhammad', '30', 1, '2023-02-02 22:46:56', '2023-02-02 22:46:56', '789.4051'),
(728, 70, 'GYXLMUOMTO', '$0.0184 transferred to main wallet successfully', '0.0184', 1, '2023-02-03 10:46:56', '2023-02-03 10:46:56', '1.3038'),
(729, 69, 'RKRGVKRBYR', '$1.483 transferred to main wallet successfully', '1.483', 1, '2023-02-03 11:46:17', '2023-02-03 11:46:17', '72.2078'),
(730, 70, '7D7B0BJTJJ', '$0.0079 transferred to main wallet successfully', '0.0079', 1, '2023-02-03 16:29:00', '2023-02-03 16:29:00', '1.3117'),
(731, 70, 'QAIOOK4OQH', '$0.202 transferred to main wallet successfully', '0.202', 1, '2023-02-03 19:04:21', '2023-02-03 19:04:21', '1.5137'),
(732, 97, 'VJQFM97N7Q', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-03 21:35:24', '2023-02-03 21:35:24', '4.2'),
(733, 70, 'GY0IINWIBY', '$0.0042 transferred to main wallet successfully', '0.0042', 1, '2023-02-03 22:07:05', '2023-02-03 22:07:05', '1.5179'),
(734, 70, 'SZBOGKC6X7', '$0.0051 transferred to main wallet successfully', '0.0051', 1, '2023-02-04 01:47:57', '2023-02-04 01:47:57', '1.523'),
(735, 51, 'QSGEDGYOBF', '$0.6712 transferred to main wallet successfully', '0.6712', 1, '2023-02-04 02:21:05', '2023-02-04 02:21:05', '493.0357'),
(736, 70, 'IVMZYBFP19', '$0.0207 transferred to main wallet successfully', '0.0207', 1, '2023-02-04 16:50:14', '2023-02-04 16:50:14', '1.5437'),
(737, 25, '37IA0F9VIU', '$24.3057 transferred to main wallet successfully', '24.3057', 1, '2023-02-04 18:55:14', '2023-02-04 18:55:14', '813.7108'),
(738, 97, 'PLC0WHKNCE', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-04 21:18:31', '2023-02-04 21:18:31', '5.25'),
(739, 70, '2ZUPHBPKCT', '$0.2051 transferred to main wallet successfully', '0.2051', 1, '2023-02-04 21:40:36', '2023-02-04 21:40:36', '1.7488'),
(740, 70, 'EZAXFI0ODA', '$0.0005 transferred to main wallet successfully', '0.0005', 1, '2023-02-04 22:00:57', '2023-02-04 22:00:57', '1.7493'),
(741, 69, 'JQTTPF0UOT', '$1.188 transferred to main wallet successfully', '1.188', 1, '2023-02-04 22:12:03', '2023-02-04 22:12:03', '73.3958'),
(742, 70, '3MWPGUDDOV', '$0.0019 transferred to main wallet successfully', '0.0019', 1, '2023-02-04 23:23:27', '2023-02-04 23:23:27', '1.7512'),
(743, 70, 'MXADWHJWTW', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-02-04 23:32:44', '2023-02-04 23:32:44', '1.7514'),
(744, 51, '582FG7QTDY', '$0.3368 transferred to main wallet successfully', '0.3368', 1, '2023-02-05 10:54:11', '2023-02-05 10:54:11', '493.3725'),
(745, 49, 'LCJ3GJWEM9', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-02-05 10:55:50', '2023-02-05 10:55:50', '4.2'),
(746, 88, 'RIL343R7OP', '$682.5 sent to malik Rehman', '682.5', 0, '2023-02-05 16:28:14', '2023-02-05 16:28:14', '17.5'),
(747, 59, 'RPSILCXMDJ', '$650 received from Hussain Butt', '650', 1, '2023-02-05 16:28:16', '2023-02-05 16:28:16', '770'),
(748, 25, '60BJDTIAM3', '$787.5 sent to Muhammad Mashood', '787.5', 0, '2023-02-05 18:48:08', '2023-02-05 18:48:08', '26.2108'),
(749, 51, '5CID7SPSLO', '$750 received from Waqar Ali', '750', 1, '2023-02-05 18:48:10', '2023-02-05 18:48:10', '1243.3725'),
(750, 51, 'W7FCDS1UNB', '$0.1246 transferred to main wallet successfully', '0.1246', 1, '2023-02-05 22:56:24', '2023-02-05 22:56:24', '1243.4971'),
(751, 51, 'VRSBJBOMBQ', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-02-05 22:56:26', '2023-02-05 22:56:26', '1243.4973'),
(752, 39, 'VXTBZ2YPRD', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-02-05 23:13:15', '2023-02-05 23:13:15', '44'),
(753, 70, 'TKVCUG6JYX', '$0.235 transferred to main wallet successfully', '0.235', 1, '2023-02-06 02:07:36', '2023-02-06 02:07:36', '1.9864'),
(754, 70, 'VVG6BAW05P', '$0.0121 transferred to main wallet successfully', '0.0121', 1, '2023-02-06 10:52:05', '2023-02-06 10:52:05', '1.9985'),
(755, 25, 'TUZIHM53AN', '$21.5236 transferred to main wallet successfully', '21.5236', 1, '2023-02-06 14:45:37', '2023-02-06 14:45:37', '47.7344'),
(756, 26, 'ZLO9GT9QKV', '$147 sent to Ch zahid', '147', 0, '2023-02-06 15:38:18', '2023-02-06 15:38:18', '4305.8962'),
(757, 99, 'A00OXLWSXB', '$140 received from Muneeb shakeel', '140', 1, '2023-02-06 15:38:20', '2023-02-06 15:38:20', '140'),
(758, 99, 'MVZA0RSTUT', 'Amateur subscribed with $140', '140', 0, '2023-02-06 15:44:32', '2023-02-06 15:44:32', '0'),
(759, 25, 'SCEDUWLKCP', '$19.6 profit on $140 Invested by Ch zahid', '19.6', 1, '2023-02-06 15:44:33', '2023-02-06 15:44:33', '67.3344'),
(760, 25, 'MGOWTRO9PW', '$8.4 reward profit on $140 Invested by Ch zahid', '8.4', 1, '2023-02-06 15:44:35', '2023-02-06 15:44:35', '67.3344'),
(761, 70, 'MFUKP2DTJ9', '$0.2103 transferred to main wallet successfully', '0.2103', 1, '2023-02-06 19:29:48', '2023-02-06 19:29:48', '2.2088'),
(762, 51, 'SKE44LPVSK', '$0.2289 transferred to main wallet successfully', '0.2289', 1, '2023-02-06 21:04:10', '2023-02-06 21:04:10', '1243.7262'),
(763, 51, 'OMSOUAB1AV', 'Request for $35 withdraw to Binance initiated', '35', 0, '2023-02-06 21:10:52', '2023-02-06 21:10:52', '1208.7262'),
(764, 97, 'GNSE9JSLI6', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-02-06 23:36:20', '2023-02-06 23:36:20', '7.35'),
(765, 51, 'HPHC2857X3', 'Master subscribed with $1201', '1201', 0, '2023-02-07 02:55:18', '2023-02-07 02:55:18', '7.7262000000001'),
(766, 49, 'QGNIZCQN67', '$168.14 profit on $1201 Invested by Muhammad Mashood', '168.14', 1, '2023-02-07 02:55:20', '2023-02-07 02:55:20', '172.34'),
(767, 49, 'T1QHEAZ9YW', '$72.06 reward profit on $1201 Invested by Muhammad Mashood', '72.06', 1, '2023-02-07 02:55:22', '2023-02-07 02:55:22', '172.34'),
(768, 26, 'KZ3YEQIUMP', '$60.05 profit on $1201 Invested by Muhammad Mashood', '60.05', 1, '2023-02-07 02:55:25', '2023-02-07 02:55:25', '4365.9462'),
(769, 26, 'HCERD64WET', '$24.02 reward profit on $1201 Invested by Muhammad Mashood', '24.02', 1, '2023-02-07 02:55:27', '2023-02-07 02:55:27', '4365.9462'),
(770, 25, 'EXS98NIVMS', '$24.02 profit on $1201 Invested by Muhammad Mashood', '24.02', 1, '2023-02-07 02:55:29', '2023-02-07 02:55:29', '91.3544'),
(771, 25, 'RQNGQ02IO1', '$12.01 reward profit on $1201 Invested by Muhammad Mashood', '12.01', 1, '2023-02-07 02:55:30', '2023-02-07 02:55:30', '91.3544'),
(772, 49, '10ZQXWKRFU', 'You earned a reward of $50', '50', 1, '2023-02-07 02:59:14', '2023-02-07 02:59:14', '172.34'),
(773, 50, 'QMRYNQFYM7', '$1.5937 transferred to main wallet successfully', '1.5937', 1, '2023-02-07 11:16:51', '2023-02-07 11:16:51', '33.4411'),
(774, 70, 'D9UZXMS0MJ', '$0.0255 transferred to main wallet successfully', '0.0255', 1, '2023-02-07 13:59:38', '2023-02-07 13:59:38', '2.2343'),
(775, 26, 'OKNQY00RPO', '$10.5 sent to Hasnain Arif', '10.5', 0, '2023-02-07 14:35:11', '2023-02-07 14:35:11', '4355.4462'),
(776, 100, 'SAYKTPQE4L', '$10 received from Muneeb shakeel', '10', 1, '2023-02-07 14:35:13', '2023-02-07 14:35:13', '10'),
(777, 100, 'SNOCZMX7RX', 'Minute Plus subscribed with $10', '10', 0, '2023-02-07 14:38:56', '2023-02-07 14:38:56', '0'),
(778, 70, 'GRYXCEGXPR', '$1.4 profit on $10 Invested by Hasnain Arif', '1.4', 1, '2023-02-07 14:38:58', '2023-02-07 14:38:58', '3.6343'),
(779, 70, 'WCXEHXKTBH', '$0.6 reward profit on $10 Invested by Hasnain Arif', '0.6', 1, '2023-02-07 14:38:59', '2023-02-07 14:38:59', '3.6343'),
(780, 26, '4UUOGR9SM1', '$0.5 profit on $10 Invested by Hasnain Arif', '0.5', 1, '2023-02-07 14:39:02', '2023-02-07 14:39:02', '4355.9462'),
(781, 26, 'GXGEGZTUMH', '$0.2 reward profit on $10 Invested by Hasnain Arif', '0.2', 1, '2023-02-07 14:39:04', '2023-02-07 14:39:04', '4355.9462'),
(782, 25, 'NRCJFBXTPK', '$0.2 profit on $10 Invested by Hasnain Arif', '0.2', 1, '2023-02-07 14:39:05', '2023-02-07 14:39:05', '91.5544'),
(783, 25, '4HPD8QVWHC', '$0.1 reward profit on $10 Invested by Hasnain Arif', '0.1', 1, '2023-02-07 14:39:07', '2023-02-07 14:39:07', '91.5544'),
(784, 100, 'RKFGLZX0MO', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-02-07 14:55:42', '2023-02-07 14:55:42', '0.0001'),
(785, 100, 'CDHSBRTCRP', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-02-07 15:17:08', '2023-02-07 15:17:08', '0.0003'),
(786, 70, 'OYYNIJLFDR', '$0.002 transferred to main wallet successfully', '0.002', 1, '2023-02-07 15:25:54', '2023-02-07 15:25:54', '3.6363'),
(787, 100, '26XXOQZPK1', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-02-07 15:27:13', '2023-02-07 15:27:13', '0.0004'),
(788, 70, 'PSYBLZQ0XS', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-02-07 15:32:36', '2023-02-07 15:32:36', '3.6364'),
(789, 100, '1YQHBUOFPR', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-02-07 15:47:23', '2023-02-07 15:47:23', '0.0006'),
(790, 69, 'IIDJMTIKTC', '$132.7972 transferred to main wallet successfully', '132.7972', 1, '2023-02-07 16:47:21', '2023-02-07 16:47:21', '206.193'),
(791, 100, 'NQLLDVKRHG', '$0.0007 transferred to main wallet successfully', '0.0007', 1, '2023-02-07 16:49:56', '2023-02-07 16:49:56', '0.0013'),
(792, 100, '8H2XFOMYN7', '$0.0005 transferred to main wallet successfully', '0.0005', 1, '2023-02-07 17:31:59', '2023-02-07 17:31:59', '0.0018'),
(793, 100, 'GKLHHRVW3B', '$0.0009 transferred to main wallet successfully', '0.0009', 1, '2023-02-07 18:49:21', '2023-02-07 18:49:21', '0.0027'),
(794, 100, 'HIOCGRNCK5', '$0.0028 transferred to main wallet successfully', '0.0028', 1, '2023-02-07 22:55:52', '2023-02-07 22:55:52', '0.0055'),
(795, 51, '5LJIP0QGK2', '$0.4077 transferred to main wallet successfully', '0.4077', 1, '2023-02-08 12:27:23', '2023-02-08 12:27:23', '8.1339'),
(796, 70, 'SZBPREMLTX', '$0.2285 transferred to main wallet successfully', '0.2285', 1, '2023-02-08 13:19:50', '2023-02-08 13:19:50', '3.8649'),
(797, 59, 'IBGDDO9WBT', 'Request for $20 withdraw to Binance initiated', '20', 0, '2023-02-08 15:19:19', '2023-02-08 15:19:19', '750'),
(798, 69, 'A80ZKPD0XE', '$0.8395 transferred to main wallet successfully', '0.8395', 1, '2023-02-08 17:07:07', '2023-02-08 17:07:07', '207.0325');
INSERT INTO `transactions` (`id`, `user_id`, `transaction_id`, `reason`, `amount`, `inout`, `created_at`, `updated_at`, `after_amount`) VALUES
(799, 70, 'GV1YUUCEXA', '$0.1232 transferred to main wallet successfully', '0.1232', 1, '2023-02-08 18:01:25', '2023-02-08 18:01:25', '3.9881'),
(800, 100, 'FHOEJZL6MD', '$0.0138 transferred to main wallet successfully', '0.0138', 1, '2023-02-08 18:59:56', '2023-02-08 18:59:56', '0.0193'),
(801, 70, 'SJG2E5DXWJ', '$0.0841 transferred to main wallet successfully', '0.0841', 1, '2023-02-08 19:44:27', '2023-02-08 19:44:27', '4.0722'),
(802, 49, '9HP3FQ5HEX', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-02-08 19:45:33', '2023-02-08 19:45:33', '224.44'),
(803, 70, 'LMZHJI21O0', '$0.0018 transferred to main wallet successfully', '0.0018', 1, '2023-02-08 21:03:00', '2023-02-08 21:03:00', '4.074'),
(804, 25, 'X6EVDLZIYU', '$25.3606 transferred to main wallet successfully', '25.3606', 1, '2023-02-08 22:12:12', '2023-02-08 22:12:12', '116.915'),
(805, 25, 'SFIJ1NGZRE', '$105 sent to Saira Tabasum', '105', 0, '2023-02-08 22:12:56', '2023-02-08 22:12:56', '11.915'),
(806, 104, 'HOHWFW2IN5', '$100 received from Waqar Ali', '100', 1, '2023-02-08 22:12:57', '2023-02-08 22:12:57', '100'),
(807, 97, 'BI4TTU7YSC', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-02-08 22:50:10', '2023-02-08 22:50:10', '9.45'),
(808, 70, 'BB963VLZMO', '$0.0024 transferred to main wallet successfully', '0.0024', 1, '2023-02-08 22:50:16', '2023-02-08 22:50:16', '4.0764'),
(809, 26, 'PWRSNI97TY', 'Request for $200 withdraw to Binance initiated', '200', 0, '2023-02-09 00:04:51', '2023-02-09 00:04:51', '4155.9462'),
(810, 39, 'E9ZXCCRFZR', 'Request for $40 withdraw to Binance initiated', '40', 0, '2023-02-09 16:08:53', '2023-02-09 16:08:53', '4'),
(811, 69, 'KXNHS9ZX4E', '$0.8148 transferred to main wallet successfully', '0.8148', 1, '2023-02-09 16:44:41', '2023-02-09 16:44:41', '207.8473'),
(812, 69, 'KD9JHT5SPG', 'Request for $20 withdraw to Binance initiated', '20', 0, '2023-02-09 17:10:18', '2023-02-09 17:10:18', '187.8473'),
(813, 69, 'JHVYDKHNSD', 'Request for $187 withdraw to Binance initiated', '187', 0, '2023-02-09 21:51:59', '2023-02-09 21:51:59', '0.84729999999999'),
(814, 59, 'DX6JBQEVGM', '$745.5 sent to Waqar Ali', '745.5', 0, '2023-02-10 01:21:39', '2023-02-10 01:21:39', '4.5'),
(815, 25, 'Y4DMGCEYX0', '$710 received from malik Rehman', '710', 1, '2023-02-10 01:21:41', '2023-02-10 01:21:41', '721.915'),
(816, 97, 'FM8LLNYXVH', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-10 01:29:32', '2023-02-10 01:29:32', '10.5'),
(817, 70, 'HIBAX6BLUU', '$8.2364 transferred to main wallet successfully', '8.2364', 1, '2023-02-10 02:23:23', '2023-02-10 02:23:23', '12.3128'),
(818, 25, 'HIS3WM1HFI', '$63 sent to Ch zahid', '63', 0, '2023-02-10 16:24:39', '2023-02-10 16:24:39', '658.915'),
(819, 99, '9GHABBLVFR', '$60 received from Waqar Ali', '60', 1, '2023-02-10 16:24:41', '2023-02-10 16:24:41', '60'),
(820, 99, 'F5ZMZ8MCHZ', 'Amateur subscribed with $60', '60', 0, '2023-02-10 16:30:48', '2023-02-10 16:30:48', '0'),
(821, 25, 'XYQSAPRL3Y', '$8.4 profit on $60 Invested by Ch zahid', '8.4', 1, '2023-02-10 16:30:49', '2023-02-10 16:30:49', '667.315'),
(822, 25, 'MWU2VFKJUX', '$3.6 reward profit on $60 Invested by Ch zahid', '3.6', 1, '2023-02-10 16:30:51', '2023-02-10 16:30:51', '667.315'),
(823, 25, '1AAXG2A6Y0', '$63.027 transferred to main wallet successfully', '63.027', 1, '2023-02-10 16:32:26', '2023-02-10 16:32:26', '730.342'),
(824, 70, '0EMCBCJZN8', '$0.2213 transferred to main wallet successfully', '0.2213', 1, '2023-02-10 19:03:53', '2023-02-10 19:03:53', '12.5341'),
(825, 100, 'PJPFJITFTB', '$0.0339 transferred to main wallet successfully', '0.0339', 1, '2023-02-10 20:09:54', '2023-02-10 20:09:54', '0.0532'),
(826, 100, '3I5SXCFXLZ', '$0 transferred to main wallet successfully', '0', 1, '2023-02-10 20:09:57', '2023-02-10 20:09:57', '0.0532'),
(827, 100, 'JSIUDTIWOI', '$0 transferred to main wallet successfully', '0', 1, '2023-02-10 20:09:58', '2023-02-10 20:09:58', '0.0532'),
(828, 100, 'LHQB6YMK1E', '$0 transferred to main wallet successfully', '0', 1, '2023-02-10 20:10:00', '2023-02-10 20:10:00', '0.0532'),
(829, 97, '9VXBNEW3TX', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-11 00:02:34', '2023-02-11 00:02:34', '11.55'),
(830, 26, '2PCOCQAZZC', '$203.8623 transferred to main wallet successfully', '203.8623', 1, '2023-02-11 01:42:48', '2023-02-11 01:42:48', '4359.8085'),
(831, 26, 'ORE1LIB34P', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-02-11 01:42:51', '2023-02-11 01:42:51', '4359.8086'),
(832, 70, 'QIBURPE1BO', '$0.0097 transferred to main wallet successfully', '0.0097', 1, '2023-02-11 02:03:53', '2023-02-11 02:03:53', '12.5438'),
(833, 51, 'XTD0MYT1VG', '$0.7971 transferred to main wallet successfully', '0.7971', 1, '2023-02-11 17:28:07', '2023-02-11 17:28:07', '8.931'),
(834, 70, 'F0S10QYQDD', '$0.2296 transferred to main wallet successfully', '0.2296', 1, '2023-02-12 00:42:25', '2023-02-12 00:42:25', '12.7734'),
(835, 70, 'DI8WQRSXPI', '$0.0173 transferred to main wallet successfully', '0.0173', 1, '2023-02-12 13:16:17', '2023-02-12 13:16:17', '12.7907'),
(836, 25, 'MNEJWJXYG7', '$8000 received from Rexoplus', '8000', 1, '2023-02-12 14:42:47', '2023-02-12 14:42:47', '8730.342'),
(837, 25, 'P9OJLYZFZV', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:46:54', '2023-02-12 14:46:54', '8230.342'),
(838, 25, 'TM1SCWADTB', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:47:23', '2023-02-12 14:47:23', '7730.342'),
(839, 25, '21KAYUT1VT', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:47:54', '2023-02-12 14:47:54', '7230.342'),
(840, 25, 'XUR93SJ1VL', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:48:23', '2023-02-12 14:48:23', '6730.342'),
(841, 25, 'QC9DBOW6RF', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:50:18', '2023-02-12 14:50:18', '6230.342'),
(842, 25, 'OBIGJ5WPDF', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:50:41', '2023-02-12 14:50:41', '5730.342'),
(843, 25, 'KNWDJKBMI9', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:51:26', '2023-02-12 14:51:26', '5230.342'),
(844, 25, '01MKGU244H', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:52:22', '2023-02-12 14:52:22', '4730.342'),
(845, 25, 'H7V6SQ85Q1', 'Veteran subscribed with $500', '500', 0, '2023-02-12 14:53:25', '2023-02-12 14:53:25', '4230.342'),
(846, 25, 'SE2GKZIFE2', '$3150 sent to Muneeb shakeel', '3150', 0, '2023-02-12 14:54:43', '2023-02-12 14:54:43', '1080.342'),
(847, 26, 'G1W1YM4LKJ', '$3000 received from Waqar Ali', '3000', 1, '2023-02-12 14:54:45', '2023-02-12 14:54:45', '7359.8086'),
(848, 70, '7OP0RNUC8C', '$0.0033 transferred to main wallet successfully', '0.0033', 1, '2023-02-12 15:38:33', '2023-02-12 15:38:33', '12.794'),
(849, 97, 'I243KTR7CV', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-12 15:38:38', '2023-02-12 15:38:38', '12.6'),
(850, 70, 'ALZEET194S', '$0.0001 transferred to main wallet successfully', '0.0001', 1, '2023-02-12 15:46:46', '2023-02-12 15:46:46', '12.7941'),
(851, 100, 'OV7GMHMMNR', '$0.0322 transferred to main wallet successfully', '0.0322', 1, '2023-02-12 18:50:06', '2023-02-12 18:50:06', '0.0854'),
(852, 39, 'ZSOWCDLY5H', '$10.5 transferred to main wallet successfully', '10.5', 1, '2023-02-12 19:42:31', '2023-02-12 19:42:31', '14.5'),
(853, 26, 'KYE5NW3YEB', '$105 sent to Muhmmad Hashir', '105', 0, '2023-02-12 21:51:38', '2023-02-12 21:51:38', '7254.8086'),
(854, 107, 'AYKYADUPQW', '$100 received from Muneeb shakeel', '100', 1, '2023-02-12 21:51:40', '2023-02-12 21:51:40', '100'),
(855, 107, 'CCAQ66PKKQ', 'Hustler subscribed with $100', '100', 0, '2023-02-12 21:53:23', '2023-02-12 21:53:23', '0'),
(856, 26, 'R5BOTBZHLS', '$14 profit on $100 Invested by Muhmmad Hashir', '14', 1, '2023-02-12 21:53:25', '2023-02-12 21:53:25', '7268.8086'),
(857, 26, '1HWJXU7UD9', '$6 reward profit on $100 Invested by Muhmmad Hashir', '6', 1, '2023-02-12 21:53:27', '2023-02-12 21:53:27', '7268.8086'),
(858, 25, '0R665GFUZG', '$5 profit on $100 Invested by Muhmmad Hashir', '5', 1, '2023-02-12 21:53:29', '2023-02-12 21:53:29', '1085.342'),
(859, 25, 'V3HGYQDQZN', '$2 reward profit on $100 Invested by Muhmmad Hashir', '2', 1, '2023-02-12 21:53:31', '2023-02-12 21:53:31', '1085.342'),
(860, 70, 'LGS65DHBDE', '$0.2098 transferred to main wallet successfully', '0.2098', 1, '2023-02-13 00:02:07', '2023-02-13 00:02:07', '13.0039'),
(861, 100, 'NUXWGPTKGY', '$0.0036 transferred to main wallet successfully', '0.0036', 1, '2023-02-13 00:02:50', '2023-02-13 00:02:50', '0.089'),
(862, 97, 'XHH6NOMYPP', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-13 00:26:32', '2023-02-13 00:26:32', '13.65'),
(863, 26, 'SCAMAEOMEI', '$11.55 sent to Hasnain Arif', '11.55', 0, '2023-02-13 01:32:18', '2023-02-13 01:32:18', '7257.2586'),
(864, 100, 'OSKH23TFSD', '$11 received from Muneeb shakeel', '11', 1, '2023-02-13 01:32:20', '2023-02-13 01:32:20', '11.089'),
(865, 25, 'BPITVUHNSC', '$26.8706 transferred to main wallet successfully', '26.8706', 1, '2023-02-13 04:32:18', '2023-02-13 04:32:18', '1112.2126'),
(866, 100, '2PCDLLPNGQ', '$0.0076 transferred to main wallet successfully', '0.0076', 1, '2023-02-13 11:02:33', '2023-02-13 11:02:33', '11.0966'),
(867, 26, 'NKGN7LRRBV', '$11.55 sent to Hasnain Arif', '11.55', 0, '2023-02-13 13:34:37', '2023-02-13 13:34:37', '7245.7086'),
(868, 100, 'F9TILKLFME', '$11 received from Muneeb shakeel', '11', 1, '2023-02-13 13:34:39', '2023-02-13 13:34:39', '22.0966'),
(869, 100, 'SS5EZUS8X0', '$0.0023 transferred to main wallet successfully', '0.0023', 1, '2023-02-13 14:23:59', '2023-02-13 14:23:59', '22.0989'),
(870, 100, 'XTFF7ZYJ6Z', 'You cancelled the package. $7 added to your wallet', '7', 1, '2023-02-13 14:24:07', '2023-02-13 14:24:07', '29.0989'),
(871, 70, 'LTQVUZGBHJ', '$0.0198 transferred to main wallet successfully', '0.0198', 1, '2023-02-13 14:24:52', '2023-02-13 14:24:52', '13.0237'),
(872, 70, 'BPDY9FL9CL', '$0.2078 transferred to main wallet successfully', '0.2078', 1, '2023-02-13 21:12:59', '2023-02-13 21:12:59', '13.2315'),
(873, 97, 'R0YFOG7RFZ', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-13 22:07:48', '2023-02-13 22:07:48', '14.7'),
(874, 70, 'K4RJOTMFJL', '$0.0203 transferred to main wallet successfully', '0.0203', 1, '2023-02-14 11:58:56', '2023-02-14 11:58:56', '13.2518'),
(875, 70, 'R87GIYBBQM', '$0.0054 transferred to main wallet successfully', '0.0054', 1, '2023-02-14 15:54:33', '2023-02-14 15:54:33', '13.2572'),
(876, 100, 'VIQS0E5WDV', 'Request for $29 withdraw to Binance initiated', '29', 0, '2023-02-14 16:49:11', '2023-02-14 16:49:11', '0.0989'),
(877, 49, 'QGQADTKHPZ', 'Request for $70 withdraw to Bank initiated', '70', 0, '2023-02-14 19:47:51', '2023-02-14 19:47:51', '154.44'),
(878, 70, 'HIU8WDMFTR', '$0.212 transferred to main wallet successfully', '0.212', 1, '2023-02-15 01:39:56', '2023-02-15 01:39:56', '13.4692'),
(879, 97, '5C6JYO28UW', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-15 13:52:30', '2023-02-15 13:52:30', '15.75'),
(880, 69, 'E3WALJV4XI', '$15.4154 transferred to main wallet successfully', '15.4154', 1, '2023-02-15 15:12:25', '2023-02-15 15:12:25', '16.2627'),
(881, 70, 'IPFUPEXWLT', '$0.1394 transferred to main wallet successfully', '0.1394', 1, '2023-02-15 18:07:15', '2023-02-15 18:07:15', '13.6086'),
(882, 70, 'CIN9JU3BDQ', '$0.0002 transferred to main wallet successfully', '0.0002', 1, '2023-02-15 18:13:51', '2023-02-15 18:13:51', '13.6088'),
(883, 99, 'AVTNHNLUZQ', '$2.94 transferred to main wallet successfully', '2.94', 1, '2023-02-15 18:40:32', '2023-02-15 18:40:32', '2.94'),
(884, 25, '15VLBWRKBT', '$105 sent to Ch zahid', '105', 0, '2023-02-15 18:54:09', '2023-02-15 18:54:09', '1007.2126'),
(885, 99, 'AG3PKXHUNN', '$100 received from Waqar Ali', '100', 1, '2023-02-15 18:54:11', '2023-02-15 18:54:11', '102.94'),
(886, 70, 'SIBXZQO6B4', '$0.0849 transferred to main wallet successfully', '0.0849', 1, '2023-02-15 20:33:03', '2023-02-15 20:33:03', '13.6937'),
(887, 51, 'MQMMEZJPHW', '$1.0564 transferred to main wallet successfully', '1.0564', 1, '2023-02-15 23:31:46', '2023-02-15 23:31:46', '9.9874'),
(888, 49, 'WRMA0O46TH', '$2.1 transferred to main wallet successfully', '2.1', 1, '2023-02-15 23:39:02', '2023-02-15 23:39:02', '156.54'),
(889, 97, 'FKU3SGRDXH', '$1.05 transferred to main wallet successfully', '1.05', 1, '2023-02-16 01:34:38', '2023-02-16 01:34:38', '16.8'),
(890, 70, 'VQSEGTL2UU', '$0.0193 transferred to main wallet successfully', '0.0193', 1, '2023-02-16 10:36:47', '2023-02-16 10:36:47', '13.713'),
(891, 46, 'JXOTYQVUXD', '$3.8073 transferred to main wallet successfully', '3.8073', 1, '2023-02-16 14:13:09', '2023-02-16 14:13:09', '11.1919'),
(892, 70, 'IOASRGNDEB', '$0.1259 transferred to main wallet successfully', '0.1259', 1, '2023-02-16 17:17:05', '2023-02-16 17:17:05', '13.8389'),
(893, 50, 'XXUKEQAQJ4', '$1.5461 transferred to main wallet successfully', '1.5461', 1, '2023-02-16 19:21:12', '2023-02-16 19:21:12', '34.9872'),
(894, 70, 'SSSAMJVV9L', '$0.1056 transferred to main wallet successfully', '0.1056', 1, '2023-02-17 10:39:48', '2023-02-17 10:39:48', '13.9445'),
(895, 70, 'V5QMNLBXOQ', '$0.0038 transferred to main wallet successfully', '0.0038', 1, '2023-02-17 13:27:39', '2023-02-17 13:27:39', '13.9483');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` text NOT NULL,
  `reference_code` varchar(255) NOT NULL,
  `security_code` varchar(255) NOT NULL,
  `profile_pic` text NOT NULL DEFAULT 'default.png',
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_balance` varchar(255) NOT NULL DEFAULT '0.00',
  `reward_balance` varchar(255) NOT NULL DEFAULT '0.00',
  `wallet_id` varchar(255) NOT NULL,
  `verified_at` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0,
  `profit_balance` varchar(255) NOT NULL DEFAULT '0.00',
  `user_role` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `reference_code`, `security_code`, `profile_pic`, `parent_id`, `remember_token`, `created_at`, `updated_at`, `account_balance`, `reward_balance`, `wallet_id`, `verified_at`, `user_type`, `profit_balance`, `user_role`) VALUES
(18, 'Rexpoplus', 'admin@rexpoplus.com', '', '2022-12-04 05:50:14', '$2y$10$54Df0eIzsajt8Tcb.Tnxou8RsLA/9uoUKZFJ5u6LgD8jKlKImBNSG', '', '', 'default.png', 0, NULL, '2022-12-04 05:50:14', '2022-12-04 08:43:23', '0', '0', '', NULL, 1, '0.00', '0'),
(19, 'Rexpoplus User', 'user@rexpoplus.com', '+16183693146', NULL, '$2y$10$AnQ5C/djyyPfwB4XZx.jBOhcPDs0vI9rjsvieSH5LNpZ54dpMp5g.', 'XG6SFEJT', '123456', 'default.png', 0, NULL, '2022-12-14 09:01:47', '2022-12-31 06:46:54', '2', '0.00', '1671026507', '2022-12-03 10:54:30', 0, '0', '0'),
(21, 'Amjad Azeem', 'amjadazeem@rexpoplus.com', '+923455555574', '2022-12-14 14:12:36', '$2y$10$54Df0eIzsajt8Tcb.Tnxou8RsLA/9uoUKZFJ5u6LgD8jKlKImBNSG', '', '', 'default.png', 0, NULL, '2022-12-14 14:12:36', '2022-12-14 14:12:36', '0.00', '0.00', '', NULL, 1, '0.00', '0'),
(22, 'Zoyamuneeb', 'zmaham25@gmail.com', '+923224242246', NULL, '$2y$10$QhZ9Gn596DyJQNzINo8WcuVNYViezZ8nTewDXifABM01V/NddEyTi', 'VOEXPEC0', 'Zoyamuneeb@25', 'default.png', 19, NULL, '2022-12-14 21:13:02', '2022-12-14 21:14:47', '0.00', '0.00', '1671052382', '2022-12-14 21:14:15', 0, '0', '0'),
(23, 'Ali Khan', 'saripay7@gmail.com', '+188877665544', NULL, '$2y$10$LnUrbsWqgCj20kVhTO3R1O1uwLAAnP1.8.k1zNzqfI41UonCMBPGm', '4ULPKVKA', '123456', 'default.png', 19, NULL, '2022-12-15 01:29:41', '2022-12-15 01:30:59', '0.00', '0.00', '1671067781', '2022-12-15 01:30:26', 0, '0', '0'),
(24, 'Muhammad Arham', 'zayanawan4767@gmail.com', '+923154423897', NULL, '$2y$10$eeAjeOXJ6m37bZrIeADj1.OTAdYeLtgGra5UGhCZSGXQKmCKmujM.', 'UQIDNYKM', '123456', 'default.png', 19, NULL, '2022-12-15 07:22:17', '2022-12-15 07:23:37', '0.00', '0.00', '1671088937', '2022-12-15 07:23:15', 0, '0', '0'),
(25, 'Waqar Ali', 'waqaralih077@gmail.com', '+923200450970', NULL, '$2y$10$Q4syknQElF/ZnkJXqsZtGOqtgn2F9TMd3P5LWd/Enn64A.3D7FfSa', 'SVVT2D6F', '111111', '1671172320-Snapchat-1481847756.jpg', 24, NULL, '2022-12-15 07:27:07', '2023-02-16 23:58:05', '1007.2126', '483.14', '1671089227', '2022-12-15 07:27:40', 0, '206.2807', '0'),
(26, 'Muneeb shakeel', 'muneebwma@icloud.com', '+923214797449', NULL, '$2y$10$6Dwo4B8FZLTCgsYdSXz5ce/WTXSn4nw89qgam4/4ML5JpDACv2yKW', 'TVAEV8OG', '123456', 'default.png', 25, NULL, '2022-12-15 16:15:21', '2023-02-14 20:34:09', '7245.7086', '827.26', '1671120921', '2022-12-15 16:16:00', 0, '131.2182', '0'),
(28, 'Usama khan', 'usamakhan25@icloud.com', '+923137934003', NULL, '$2y$10$88028nENtYgNfvuGRYSz3.nqRMZ.TBfCacjUd.hxj8H5geZkEmZNe', 'BNPUWLRZ', '112233', 'default.png', 19, NULL, '2022-12-15 17:23:45', '2022-12-15 17:24:53', '0.00', '0.00', '1671125025', '2022-12-15 17:24:24', 0, '0', '0'),
(29, 'Sohaib siddique', 'sohaibsiddique576@gmil.com', '+923235107106', NULL, '$2y$10$HP3nCOrRBOf3ByLQ/glHOeX5.fTYlbMmR9NWm9litT8A1ffz7xkrS', 'KYQXHBB6', 'Raja5866', 'default.png', 19, NULL, '2022-12-17 19:59:11', '2022-12-17 19:59:11', '0.00', '0.00', '1671307151', NULL, 0, '0.00', '0'),
(37, 'Sohaib siddique', 'sohaibsiddique576@gmail.com', '+92323 5107106', NULL, '$2y$10$NbZh6VfFWeUQhgnhr.bP1eB5iQOWUBt7AQj2BN0rjDGuMGq6MpbEK', 'ESDQBCBT', 'Raja5866', 'default.png', 26, NULL, '2022-12-17 20:14:32', '2023-01-14 03:15:15', '0.2415', '0.00', '1671308072', '2022-12-17 20:16:09', 0, '0', '0'),
(39, 'Mian Ali', 'alirazarafiq01@gmail.com', '+1320-412-0902', NULL, '$2y$10$1cnN4nXhY11dAOJCAgUWo..1.zSepv6kPO/2Zcpm8WE5AEcfXsdEK', 'GVMOFUWD', '4120902', 'default.png', 19, NULL, '2022-12-18 14:18:53', '2023-02-12 19:42:31', '14.5', '0.00', '1671373133', '2022-12-18 14:19:31', 0, '0', '0'),
(44, 'Sumaira Rida', 'awanarham34@gmail.com', '+923070450970', NULL, '$2y$10$XdZz7E1zaX3ysmF.mXDMietVllBj6Dh9iDoTVML6Wlpt0uCRjkgX.', 'KB6XW5FU', '123456', 'default.png', 25, NULL, '2022-12-18 20:30:13', '2022-12-18 20:39:57', '0.0047', '0.00', '1671395413', '2022-12-18 20:31:01', 0, '0', '0'),
(45, 'Muhammad asif', 'ch.asif1@icloud.com', '+9234347474264', NULL, '$2y$10$Uxyru6xYqiKNORk72W8Gm.IxbawpGrDN03SaMZjDSXXsdmcwBO6DG', 'C4YJZTWD', '123456', 'default.png', 19, NULL, '2022-12-20 12:54:20', '2022-12-20 17:33:58', '10000', '0.00', '1671540860', '2022-12-20 12:55:16', 0, '0', '0'),
(46, 'Naeem butt', 'naseembutt12@gmail.com', '+92322 8881114', NULL, '$2y$10$zpAmRyCs.HbH/GS6Gy5YguCXZcYzcifLgdDlsCem8FZ//Nm4G84uS', 'RMHBJQVE', '744000', 'default.png', 19, NULL, '2022-12-20 13:24:01', '2023-02-16 14:13:09', '11.1919', '0.00', '1671542641', '2022-12-20 13:24:47', 0, '0', '0'),
(47, 'Kashif Anees', 'kashifanees996@gmail.com', '+923078863394', NULL, '$2y$10$X2ZRbfUDpcoWIkpbMgyv7OzJNgQX43mvu5uAToEWI8nS3X7ZK7rQm', 'FTXL249Y', '123456', 'default.png', 25, NULL, '2022-12-20 15:58:41', '2022-12-20 15:58:41', '0.00', '0.00', '1671551921', NULL, 0, '0.00', '0'),
(48, 'Amanullah', 'amansaqi648@gmail.com', '+923041544421', NULL, '$2y$10$3B/igrud1vxNB2qtHtPiAeqGYRhifklBrROXcfl7170Xm55VAs.Ca', 'UXHBVIOZ', '123456', 'default.png', 25, NULL, '2022-12-20 17:17:09', '2022-12-25 20:06:23', '100', '0.00', '1671556629', '2022-12-20 17:17:46', 0, '0', '0'),
(49, 'Muhammad Tayyab', 'mahertayyab203@gmail.com', '+923034638466', NULL, '$2y$10$LEg/D9IWx.UvPO/LpOM7o.kmBSLiQ3jeeU75Sfvhf1CsLiiTrY8dW', 'BCFXZWHK', 'Tayyab@1122', '1671643461-DDE19E4C-877F-498F-BA7B-DCFBFB6ECB84.jpeg', 26, NULL, '2022-12-21 15:04:22', '2023-02-15 23:39:02', '156.54', '41.06', '1671635062', '2022-12-21 15:04:42', 0, '0', '0'),
(50, 'ZainAnwar', 'zain3327@icloud.com', '+923334493046', NULL, '$2y$10$siet4uJF2vW2AJ3rnq/gC.Ehtz9VbAlgkKRZYnO0bCRJkKXcXNjVW', 'FT5NLE1S', '999999', 'default.png', 19, NULL, '2022-12-21 18:01:59', '2023-02-16 19:21:12', '34.9872', '0.00', '1671645719', '2022-12-21 18:02:21', 0, '0', '0'),
(51, 'Muhammad Mashood', 'tayyabshahid99@gmail.com', '+9203480177822', NULL, '$2y$10$HO5ddX9uBzqquKm.N58AgO7/9Y2qYMuav2Ng3ZvYv0nwN/4rbLE6G', '50JHGNAC', 'Tayyab@1122', '1674369962-5086FA5D-5811-4534-982A-23E41B5C3464.jpeg', 49, NULL, '2022-12-22 15:17:12', '2023-02-16 04:28:18', '9.9874', '0.00', '1671722232', '2022-12-22 15:17:53', 0, '0.0511', '0'),
(52, 'Hamza', 'hamzeychaudhary@gmail.com', '+92308 0791958', NULL, '$2y$10$hSvCLNBlMrT6lqSdaS0WRu9aWaQ5oWiUxerOpSQCBBwLYBzJ0CspC', 'NVZQWW9L', '0791958', 'default.png', 25, NULL, '2022-12-22 16:30:44', '2022-12-22 16:32:17', '0.00', '0.00', '1671726644', '2022-12-22 16:32:06', 0, '0', '0'),
(53, 'Abdul hadi', 'manimk644000@gmail.com', '+923558454730', NULL, '$2y$10$4KIa3H6X2i9eBEAf0oYp/epFfx.mZ1nEVz3S4nF9/fOBrIQuZA1v.', 'FNHCWUOA', '696400', 'default.png', 19, NULL, '2022-12-23 12:02:04', '2022-12-23 12:02:04', '0.00', '0.00', '1671796924', NULL, 0, '0.00', '0'),
(54, 'Waqas ameen', 'chwaqarameen1122@gmail.com', '+923064771534', NULL, '$2y$10$Lpe2910eBMcucRcsDAW7FeHEcdxGwIubTLkenhgW7fid556Z/ZoZO', 'PO7F3FOX', '123456', 'default.png', 19, NULL, '2022-12-23 12:10:57', '2022-12-23 12:30:54', '0', '0.00', '1671797457', '2022-12-23 12:18:38', 0, '0', '0'),
(55, 'Rehanakber', 'rehanakber415@gmail.com', '+923071081088', NULL, '$2y$10$pMZPCTrHAaXs9IM5IRR3mO5/y23XhjtRm66OjQu7Gd/2.Bo6lhAZK', 'SEIAJ8G6', '123456', 'default.png', 19, NULL, '2022-12-23 17:53:58', '2023-01-26 00:15:29', '0.7', '0.00', '1671818038', '2022-12-23 17:54:45', 0, '0', '0'),
(56, 'Haider Attique', 'almeraj786@hotmail.com', '+923219471407', NULL, '$2y$10$culYUwkFWIWvaVvZZdcddOoflxlF.jDkpPbWLYk.T4N69FQMKLfwW', '0Z6XCIWI', '654321', 'default.png', 19, NULL, '2022-12-30 21:32:37', '2023-02-14 20:34:04', '0', '0.00', '1672417957', '2022-12-30 21:34:28', 0, '12', '0'),
(57, 'Zubair Khan', 'mzubairkhan.official@gmail.com', '+923126962389', NULL, '$2y$10$zC0XLPPrmulA0pMMzzuHYeqO.wlzS7TsBzVx0Z2IY49OkJjoGPOnO', 'FBMWVAAQ', '123789', '1672748229-960x0.jpg', 19, NULL, '2022-12-30 22:27:11', '2023-02-10 20:59:03', '120', '0.00', '1672421231', '2022-12-30 22:27:35', 0, '0', '0'),
(58, 'Mian', 'mianbakar341@yahoo.com', '+92306 1431628', NULL, '$2y$10$J1XLFhRnR79Q2I6RKy7aBOULnM9j0Ii2z8yRDtB4d1avK6pNL1CHO', 'FKY32GGV', '426563', 'default.png', 19, NULL, '2023-01-02 09:17:40', '2023-02-13 11:23:47', '0.00', '0.00', '1672633060', '2023-01-02 09:18:39', 0, '0', '0'),
(59, 'malik Rehman', 'mbadshah454@gmail.com', '+92323 8300009', NULL, '$2y$10$2MO.fMbtFgzm95Eu/a/RSuCOJuAamITv5VSqEwphc9Qj6.DMjysUW', 'Z4ZZXAUK', '474747', 'default.png', 19, NULL, '2023-01-02 21:50:06', '2023-02-10 01:21:39', '4.5', '0.00', '1672678206', '2023-01-02 21:50:47', 0, '0', '0'),
(60, 'Ateeqanees', 'ateeqanees1122@gmail.com', '+923404374900', NULL, '$2y$10$YyeD7iFvkorNSSK0KH.OzOTkZBvgwJ8mH/oQvPkOEC4HyAG8H5CgC', 'EBOQG5HP', '111111', 'default.png', 25, NULL, '2023-01-03 17:10:55', '2023-01-03 17:20:39', '0', '0.00', '1672747855', '2023-01-03 17:12:48', 0, '0', '0'),
(61, 'Saad Naeem', 'saadn9978@gmail.com', '+923350804914', NULL, '$2y$10$mHseSUDNrUda86524vkN1.scryOWdPrEwProiFykKb/CEXjWihXZW', 'QA3PMERP', '123456', '1672748300-IMG-20230102-WA0107.jpg', 57, NULL, '2023-01-03 17:14:50', '2023-01-03 17:18:20', '0.00', '0.00', '1672748090', '2023-01-03 17:15:16', 0, '0', '0'),
(62, 'Zubair Khan', 'mzubairkhan.developer@gmail.com', '+12258462574', NULL, '$2y$10$7gwfL1vfvmrnRVeyheI20Oy5vdcJMFFQ8zWr2WpgnY/gQhFZ8SMNm', 'DGHGMMPQ', '123456', 'default.png', 57, NULL, '2023-01-03 17:24:39', '2023-01-03 17:27:13', '0.00', '0.00', '1672748679', '2023-01-03 17:26:56', 0, '0', '0'),
(63, 'Ali raza', 'mianalee150@gmail.com', '+9203044155209', NULL, '$2y$10$6bBV3rXu7jHPGvSpSeZXqehdWgur77tpub179Ip2.CuU.AvKSn/be', 'C3I1MONN', 'Aliraza1995', 'default.png', 19, NULL, '2023-01-03 18:27:35', '2023-01-03 19:31:04', '0.25', '0.00', '1672752455', '2023-01-03 18:28:20', 0, '0', '0'),
(64, 'Khalid Butt', 'Khalidbutt27522@gmail.com', '+923314527522', NULL, '$2y$10$ooRUtCklqyMwyFkqzJ6li.UEfYmi7t3w3ynXF50YSBp23S9cdzHn6', 'B31VC9IN', '111111', 'default.png', 25, NULL, '2023-01-04 15:48:53', '2023-01-04 15:48:53', '0.00', '0.00', '1672829333', NULL, 0, '0.00', '0'),
(66, 'Khalid Butt', 'khalidshahid98980@gmail.com', '+92321 4798980', NULL, '$2y$10$9I4SLJuGSPL/jW2JTFpCtOhPZhJF0.DBGUuHOpeJAgFtWunJcCJ2O', 'P2ZDEPBW', '111111', 'default.png', 25, NULL, '2023-01-04 15:56:55', '2023-01-04 15:56:55', '0.00', '0.00', '1672829815', NULL, 0, '0.00', '0'),
(67, 'Khalid Butt', 'buttk5912@gmail.com', '+923368425867', NULL, '$2y$10$xHujhL8n5a8FgwXQv5A68.ozwfNH1xLnuXBNvMGDsHyjM0El13Op.', '1YOQ8AQI', '111111', 'default.png', 25, NULL, '2023-01-04 16:14:44', '2023-01-04 16:14:44', '0.00', '0.00', '1672830884', NULL, 0, '0.00', '0'),
(68, 'Khalid bajwa', 'khalidbajwa8090@gmail.com', '+923008090332', NULL, '$2y$10$OaoA0AE/A0GFgtd/If7Uf.hrsjxMYsAY0bSxccFwuUouRSyh8h.7W', '9WIFRFOG', '654321', 'default.png', 19, NULL, '2023-01-04 19:35:49', '2023-02-04 15:23:18', '0', '0.00', '1672842949', '2023-01-04 19:38:24', 0, '12', '0'),
(69, 'Farhan Rana', 'farhanrana702@gmail.com', '+971524421259', NULL, '$2y$10$4fMNvR5lTbknF3LY.46K3e969fMDqK15vgGKhDhMQcBRY6NTz.w02', 'GYYUDGPV', '083608', 'default.png', 19, NULL, '2023-01-07 23:10:58', '2023-02-15 15:12:25', '16.2627', '0.00', '1673115058', '2023-01-07 23:11:26', 0, '0', '0'),
(70, 'SHAHAYAR ABBAS', 'zain31522@gmail.com', '+923247876787', NULL, '$2y$10$4t7qaZVkUTZhirWhf2neKOZR0aGFy37KpykpoINJcpOgqU7Yhs.g2', 'Q8TTRCOH', '7AYN78', '1673174471-Snapchat-1657561649.jpg', 26, NULL, '2023-01-08 15:33:38', '2023-02-17 13:27:39', '13.9483', '27.6', '1673174018', '2023-01-08 15:34:06', 0, '0', '0'),
(71, 'Abedullah', 'abedullahch86@gmail.com', '+9203045901531', NULL, '$2y$10$H4WBb0A0KS01cGBrElupe.1OrVISHm0kH94xWDoK1.CRWq/ZKhfdC', 'ONQUIL5N', '901531', 'default.png', 70, NULL, '2023-01-08 23:02:06', '2023-01-08 23:02:46', '0.00', '0.00', '1673200926', '2023-01-08 23:02:39', 0, '0', '0'),
(72, 'Umairqadeer', 'umaireman0@gmail.com', '+923218879097', NULL, '$2y$10$MBk./0INlnm8mTf7vgXEze64o88yp.d/ed9iwlc6yeyn4ftvksgWa', 'T9NZMM33', 'Umair6568', 'default.png', 25, NULL, '2023-01-10 19:52:00', '2023-02-16 23:29:29', '2.3333', '0.00', '1673362320', '2023-01-10 19:52:57', 0, '8.6332', '0'),
(73, 'M Awais', 'awaissajawal9@gmail.com', '+92305 4774668', NULL, '$2y$10$VmcUMkK5QXsXHjj/X0KBpu28/z3zWUtKblDkff8X5biUEZchdsuge', 'TL5AEBSO', '120812', 'default.png', 25, NULL, '2023-01-13 17:08:22', '2023-01-13 17:09:17', '0.00', '0.00', '1673611702', '2023-01-13 17:09:04', 0, '0', '0'),
(74, 'Bilal Bajwa', 'bilalbajwa00199@gmail.com', '+923346342199', NULL, '$2y$10$JtHWpstwmB1dhgvGora29OxEWen00LSv/hcdzAA1ODd6Slqvp6Fha', 'XIMVGFDK', '098765', 'default.png', 26, NULL, '2023-01-16 21:09:10', '2023-01-16 21:10:40', '0.00', '0.00', '1673885350', '2023-01-16 21:10:18', 0, '0', '0'),
(75, 'Ishfaq Anjum Muhammad', 'ashbello50@gmail.com', '+447710579401', NULL, '$2y$10$FcnwW6AaeyHXzHfOb9SZw.4sMisyFg8MGv.GQFWx7iZIrsk/xeUQe', 'MPEDBMAI', '431967', 'default.png', 25, NULL, '2023-01-17 01:29:53', '2023-02-02 22:46:51', '0', '0.00', '1673900993', '2023-01-17 01:30:51', 0, '0', '0'),
(76, 'Hamza ameer', 'hamza033442@gmail.com', '+923092230701', NULL, '$2y$10$5yjsV5R9Se6I47ThG26sHuYWTpaQXIxMYkaUVgiygpYKd.GC3ajcK', 'LNOFZPN7', '658080', 'default.png', 19, NULL, '2023-01-17 17:38:54', '2023-01-17 17:44:29', '0', '0.00', '1673959134', '2023-01-17 17:39:48', 0, '0', '0'),
(77, 'Sajidmunir', 'Sajidnunir885@gmail.com', '+103218858861', NULL, '$2y$10$mVBZiJnasj5P/57e/oiKCerVrER82IKL0CRPX27HwljenaleoLQ6y', '1OROZJ3Q', '123456', 'default.png', 26, NULL, '2023-01-17 17:51:22', '2023-01-17 17:56:06', '0.00', '0.00', '1673959882', '2023-01-17 17:52:40', 0, '0', '0'),
(78, 'Muhammad irfan', 'juttg6600420@gmail.com', '+923156600420', NULL, '$2y$10$imZNhg2kczmlH6msU3lfYOzRjvDs.WQHdAhDDLj1g8KnQ.bsP6/IC', 'VPTGFHW5', '123456', 'default.png', 19, NULL, '2023-01-17 18:31:16', '2023-01-17 18:31:16', '0.00', '0.00', '1673962276', NULL, 0, '0.00', '0'),
(80, 'Muhammad irfan', 'geej6129@gmail.com', '+92156600420', NULL, '$2y$10$X6PJuroSFdYpu.01f9RG6.vfOJc4XWGjR2ud0YHMV04mMFhgtbBju', 'OJYKAI32', '123456', 'default.png', 19, NULL, '2023-01-17 18:37:00', '2023-01-17 18:55:00', '0', '0.00', '1673962620', '2023-01-17 18:48:08', 0, '0', '0'),
(81, 'Waheed khan', 'waheedkhan11888@gmail.com', '+923224264860', NULL, '$2y$10$ZXZ90usS0d3HhYGmhnqhqe.vkaz09zcV/65L97fKReIpPnji8XfGG', 'M3Z5DKRB', '123456', 'default.png', 26, NULL, '2023-01-17 19:01:48', '2023-01-17 19:12:46', '0', '0.00', '1673964108', '2023-01-17 19:07:13', 0, '0', '0'),
(82, 'Irfan Naeem', 'crocodile.kick@gmail.com', '+923334690026', NULL, '$2y$10$YA3L0tPy9Zhs5HW9fgZ4vuDH9hjXddTT7YNc645.fpJaJ.y3FUDZ2', 'R6WH0YSO', 'HelloNescafe1122', 'default.png', 26, NULL, '2023-01-17 19:12:34', '2023-01-26 04:05:38', '1.93', '13.22', '1673964754', '2023-01-17 19:13:33', 0, '0', '0'),
(83, 'Shaheen', 'shaheenshahid662@gmail.com', '+92224286177', NULL, '$2y$10$FqEYqhOSKZcGlQczXPfSC.5XWmN3fxULaatF02wKmSOFa5/myxpYS', 'FWTXB6FP', 'Jumbosale2244', 'default.png', 82, NULL, '2023-01-18 01:13:46', '2023-01-18 01:56:02', '0', '0.00', '1673986426', '2023-01-18 01:14:21', 0, '0', '0'),
(84, 'Waleed Sadiq', 'waleedsadiq846@gmail.com', '+923134598312', NULL, '$2y$10$q5mFV9FvvsOPYxWbfOHcyed5EhmXCKuf5QCpvTUXJCxdVihI2/w5y', 'UPJ8PLKD', 'W@leed786786', 'default.png', 49, NULL, '2023-01-18 02:45:31', '2023-01-23 16:51:10', '0', '0.00', '1673991931', '2023-01-18 02:46:04', 0, '0', '0'),
(85, 'Tanveer', 'tanveerpervaiz786@gmail.com', '+103065181729', NULL, '$2y$10$whdh/hl2WPabuNIdfdUt5ON9BQ/iaF..aPr6SwTJERDMMfTFw/Nki', '9K1L69XG', 'Tanveer786786', 'default.png', 84, NULL, '2023-01-19 02:50:49', '2023-01-19 02:51:37', '0.00', '0.00', '1674078649', '2023-01-19 02:51:28', 0, '0', '0'),
(86, 'Hammad', 'hammafk432@gmail.com', '+923424984880', NULL, '$2y$10$0tbMXFgtLmynq9lVdq58kuWxAk0WZu/9vLL8bZ3SC9LTI9LDJ34EG', 'XV6VEY0M', '0333333', 'default.png', 25, NULL, '2023-01-21 00:38:47', '2023-01-21 00:41:14', '0.00', '0.00', '1674243527', '2023-01-21 00:39:20', 0, '0', '0'),
(87, 'Shahab ayyub', 'shahabayub7866@gmail.com', '+923077305063', NULL, '$2y$10$LdJZuETBWJ8DWAAFVl1bl.7kiA6BwTwGJ5gFkh.o1AIIjOlF8FodG', 'HAALR566', 'Ss12345678', 'default.png', 19, NULL, '2023-01-24 11:25:10', '2023-01-24 11:26:35', '0', '0.00', '1674541510', '2023-01-24 11:26:09', 0, '0', '0'),
(88, 'Hussain Butt', 'Hussainbuttofficial@gmail.com', '+923157374374', NULL, '$2y$10$VT/IwQdcR4FWP56wRIEcROAf24w3mDiGI01gmRXIPFhLKlYZ/7j.W', 'GAVFGDFY', '221995', 'default.png', 26, NULL, '2023-01-24 21:41:16', '2023-02-05 16:28:14', '17.5', '300', '1674578476', '2023-01-24 21:41:59', 0, '0', '0'),
(89, 'Ali Rashid', 'miansaab11@gmail.com', '+923222222676', NULL, '$2y$10$M3.JAbidpbzGCw6swBYNf.wPBZ9Fdox14zrd8XJDHQqlQXIoDJyp2', '7E1QQSGY', '222676', 'default.png', 88, NULL, '2023-01-24 22:27:49', '2023-01-27 01:14:31', '0', '0.00', '1674581269', '2023-01-24 22:28:28', 0, '0', '0'),
(90, 'Aneeza', 'aneeza.shahid0099@gmail.com', '+923114449336', NULL, '$2y$10$XvCsook1yzHlXA4euIszVOhCMg65OxOy..UqGFTEhVvBz29P7sYOS', 'Z98FL34R', 'Aneeza9988.', 'default.png', 82, NULL, '2023-01-25 05:27:47', '2023-01-25 16:12:32', '40', '0.00', '1674606467', '2023-01-25 05:29:01', 0, '0', '0'),
(91, 'Awais', 'awaisansari771@gmail.com', '+92309 4024371', NULL, '$2y$10$NIxLKSclqm.F2MlJhImKB.BX/Nm6DY8xpCRpDHFnXX6LP5xb3cqwC', 'HQLZ4KQX', '402437', 'default.png', 25, NULL, '2023-01-25 22:29:38', '2023-01-25 22:31:46', '0', '0.00', '1674667778', '2023-01-25 22:30:44', 0, '0', '0'),
(92, 'Zulfiqar Ali', 'mianzulfiqar7600@gmail.com', '+923018121276', NULL, '$2y$10$pH5lte4uwLhZKSmBDp8o0OC0uX3cWCVsshAQCkqSenBOYMN1e/ikW', 'LQMDT4WN', '121276', 'default.png', 89, NULL, '2023-01-27 13:10:53', '2023-01-27 13:11:35', '0', '0.00', '1674807053', '2023-01-27 13:11:15', 0, '0', '0'),
(93, 'Muhammad Ayaz Tahir', 'ayaz.tahir25@gmail.com', '+923414573703', NULL, '$2y$10$OG1r8hA4G7g05zWR.AosOuqpxMCGNVjaWMN2DdppHfP6/OWxBzIx6', 'J08M2GQW', '474734', 'default.png', 19, NULL, '2023-01-27 14:50:45', '2023-01-27 14:52:23', '0', '0.00', '1674813045', '2023-01-27 14:51:55', 0, '0', '0'),
(94, 'Muhammad Furqan', 'rehmanlucky034@gmail.com', '+96655 447 9527', NULL, '$2y$10$Gl4nf7NbUgT/cG8t/GOIPeUxmILnjP/yEAbDys7o7ZOjS/F1lHHaW', '6PBMR3YP', '135135', 'default.png', 26, NULL, '2023-01-28 20:54:44', '2023-01-28 20:55:19', '0', '0.00', '1674921284', '2023-01-28 20:55:11', 0, '0', '0'),
(95, 'Ahmad farooq', 'ahmadfarooq7891@gmail.com', '+923007776808', NULL, '$2y$10$JVCnqKav9d3UIlRRyejWFOIMgeBzkAEwDgoyw0YwUYYtSoHqGm5EG', 'LL3YYIUO', '123456', 'default.png', 19, NULL, '2023-01-29 22:04:37', '2023-01-29 22:04:37', '0.00', '0.00', '1675011877', NULL, 0, '0.00', '0'),
(96, 'Ahmad farooq', 'afmarketingpa@gmail.com', '+923072500049', NULL, '$2y$10$ucB/essSmyCTaOEWEUtzEut2fd4UF59oBw.u03qrw..jeTQsEFUp6', 'YYPI3KON', '123456', 'default.png', 19, NULL, '2023-01-29 22:13:14', '2023-01-29 22:13:56', '0', '0.00', '1675012394', '2023-01-29 22:13:49', 0, '0', '0'),
(97, 'Muhammad Arshad', 'cha775796@gmail.com', '+9203004024830', NULL, '$2y$10$5W2yNjyrVUysYgLvCRsdF.ykNeaZ9oaqhXjmyPH1rZ/cDtRgJfVtC', 'VVGMF20C', 'Arshad0', 'default.png', 70, NULL, '2023-01-30 22:29:04', '2023-02-16 01:34:38', '16.8', '0.00', '1675099744', '2023-01-30 22:29:32', 0, '0', '0'),
(98, 'Ch Zahid', 'chudhryzahid@gmail.com', '+923214474062', NULL, '$2y$10$e64CS0d2LEq5zR.zOAIB9.mhQDbVURaKUpR5OMLEzl9WNI0K9jdZG', 'VT80MM8P', '141962', 'default.png', 25, NULL, '2023-02-06 15:20:42', '2023-02-06 15:20:42', '0.00', '0.00', '1675678842', NULL, 0, '0.00', '0'),
(99, 'Ch zahid', 'zahidshazia62@gmail.com', '+923328102993', NULL, '$2y$10$OGt4hPg9S7Oew4im96Z1EOXV2XZNo56qL8QKGa.aBWTbPUlZo5vVi', '0BIGKNXF', '14101962', 'default.png', 25, NULL, '2023-02-06 15:27:40', '2023-02-15 18:54:11', '102.94', '0.00', '1675679260', '2023-02-06 15:28:14', 0, '0', '0'),
(100, 'Hasnain Arif', 'h818981@gmail.com', '+9203125329844', NULL, '$2y$10$I7L9EnYJ6XS2knn52lfvduOkBhZatrdFKqJCzznHKg513UORa9aYK', '91I5WMHS', '426922', 'default.png', 70, NULL, '2023-02-07 14:04:30', '2023-02-14 16:49:11', '0.0989', '0.00', '1675760670', '2023-02-07 14:04:53', 0, '0', '0'),
(101, 'farooq rafaqat', 'farooq92@yahoo.com', '+923216759241', NULL, '$2y$10$kPE9BOLKcF0BksU1ZAk.3uyyNO7oivrXEKkEF2VVTzycrVfgBZa5K', 'ZJHCXCDA', '123456', 'default.png', 19, NULL, '2023-02-07 20:47:40', '2023-02-07 20:47:40', '0.00', '0.00', '1675784860', NULL, 0, '0.00', '0'),
(102, 'naveedmano', 'naveedmano@gmail.com', '+92323 4319351', NULL, '$2y$10$2I41EdxM1t6RW1a7JoyLhO5uUq8QxbOfbHCLyFHUTguDn4MbR4tQG', 'YFVRMJZF', 'Abbas11220077', '1675789259-16757892202311196069683918711996.jpg', 81, NULL, '2023-02-07 21:53:08', '2023-02-07 22:00:59', '0.00', '0.00', '1675788788', '2023-02-07 21:55:07', 0, '0', '0'),
(103, 'ABUBAKAR TALIB', 'abubakartalib786@gmail.com', '+923138854001', NULL, '$2y$10$aL0JRVnc9vziDwKgHJYot.4IHty/UzxTWDHnjHGHooNib2tTr1iaG', 'USO76VPH', 'Babbu25786', 'default.png', 70, NULL, '2023-02-08 13:37:32', '2023-02-08 13:38:36', '0.00', '0.00', '1675845452', '2023-02-08 13:38:16', 0, '0', '0'),
(104, 'Saira Tabasum', 'adansaira72@gmail.com', '+92319 7645062', NULL, '$2y$10$S/3eJg8a3jWrMObFKosQEOsw5j5i0z0.tSHHUihUK.Tm7fxUjE6tC', 'VGLFNISV', 'ss8545', 'default.png', 25, NULL, '2023-02-08 21:59:47', '2023-02-08 22:12:57', '100', '0.00', '1675875587', '2023-02-08 22:00:38', 0, '0', '0'),
(105, 'Irtaza mehmood', 'meharirtaza2001@gmail.com', '+923074564897', NULL, '$2y$10$Lc7tFyum1Jo88bpf9XXpmuKtYwle4GZLIOECBdWIzAnAkgvsezfma', 'NDKDA9N0', 'Irt@za6661', 'default.png', 49, NULL, '2023-02-11 17:51:23', '2023-02-11 17:52:03', '0.00', '0.00', '1676119883', '2023-02-11 17:51:49', 0, '0', '0'),
(106, 'Faraz Ahmad', 'syedfaraz669@gmail.com', '+97152 273 4074', NULL, '$2y$10$pgRdGh5qHsW/ZCilN0peUuwXmr8oIDhAZWtk0k2.NkiXxYlwbVuyq', 'KAYQ1GFP', '717273', 'default.png', 51, NULL, '2023-02-11 20:47:35', '2023-02-11 20:48:00', '0.00', '0.00', '1676130455', '2023-02-11 20:47:51', 0, '0', '0'),
(107, 'Muhmmad Hashir', 'hashir0310900@gmail.com', '+92310 9003221', NULL, '$2y$10$z4S4cSEsuCEqs4VLWywxM./lDWh/LBNxH6F9P9OqoxpnWhCbX6V1C', 'NXM3E6AG', '123456', 'default.png', 26, NULL, '2023-02-12 21:42:49', '2023-02-12 21:53:23', '0', '0.00', '1676220169', '2023-02-12 21:43:58', 0, '0', '0'),
(108, 'Muhammad zubair', 'anwerzubair57@gmail.com', '+923418117749', NULL, '$2y$10$8hHXZSGp0jqzzoR7bsnzhu9Qm9qMeVHZkbG0C9lk3rZeboF6sMahS', 'B891X1JZ', '987654', 'default.png', 25, NULL, '2023-02-13 05:30:29', '2023-02-13 05:36:07', '0.00', '0.00', '1676248229', '2023-02-13 05:31:18', 0, '0', '0'),
(109, 'Muneeb', 'mianbakar3411@gmail.com', '+923164970671', NULL, '$2y$10$xS8XnVuzbM9fbItRfNm9NOUAeQ0VTJ5/bld6G44AC8XnGT2OcAPYW', '47G5T8U0', 'Allah786.', 'default.png', 58, NULL, '2023-02-13 11:38:04', '2023-02-13 13:48:46', '0.00', '0.00', '1676270284', '2023-02-13 11:39:01', 0, '0', '0'),
(110, 'Shazia zahid', 'chudhryzahid@hotmail.com', '+92332 8102993', NULL, '$2y$10$drvQzpPjO4q0DsrSr3RJIeZuCBv5IYfnjuK7gOLBYT2uMNrjAUt.K', 'YWFFOTKB', '123456', 'default.png', 99, NULL, '2023-02-15 18:50:34', '2023-02-15 18:50:34', '0.00', '0.00', '1676469034', NULL, 0, '0.00', '0'),
(111, 'Zubair', 'mzubairkhan.developer1@gmail.com', '+165465465465', NULL, '$2y$10$vcKZBntf2aJ/n3RGFWCjLeT1d6YR6G3FLs77Os1miIPGQlbVEMY1.', 'UIEOHP90', '123456', 'default.png', 19, NULL, '2023-02-17 13:43:53', '2023-02-17 13:43:53', '0.00', '0.00', '1676623433', NULL, 0, '0.00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `withdraw_to` varchar(255) NOT NULL,
  `withdraw_as` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `reject_reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `amount`, `status`, `created_at`, `updated_at`, `withdraw_to`, `withdraw_as`, `transaction_id`, `reject_reason`) VALUES
(4, 26, '100', 1, '2022-12-22 23:11:58', '2022-12-31 01:18:30', 'Bank', NULL, 'Muneebwma@icloud.com', NULL),
(7, 26, '100', 1, '2022-12-25 21:55:27', '2022-12-25 22:10:16', 'Bank', NULL, 'Muneebwma@icloud.com', NULL),
(8, 57, '10', 0, '2022-12-31 06:51:56', '2022-12-31 06:51:56', 'Bank', NULL, NULL, NULL),
(9, 57, '10', 0, '2022-12-31 07:05:13', '2022-12-31 07:05:13', 'MartinPay', '1inch Network', NULL, NULL),
(10, 57, '10', 1, '2022-12-31 07:09:06', '2023-01-05 11:44:48', 'Binance', 'ApeCoin', '456456231321', NULL),
(11, 37, '1.40', 2, '2023-01-04 00:11:14', '2023-01-05 14:37:29', 'Binance', 'USDT', NULL, 'Sohaibsiddique576@gmail.com'),
(12, 57, '20', 2, '2023-01-05 11:42:29', '2023-01-05 11:44:07', 'MartinPay', '1inch Network', NULL, 'Account Number or Payment ID is Invalid'),
(13, 39, '20', 2, '2023-01-07 21:13:04', '2023-01-08 14:25:02', 'Bank', NULL, NULL, 'Hello Ali Raza, local bank didn’t accept please withdraw in binance'),
(14, 26, '50', 2, '2023-01-08 14:04:51', '2023-01-08 14:05:51', 'Bank', NULL, NULL, 'Hello Muneeb Shakeel,'),
(15, 39, '30', 2, '2023-01-08 20:30:51', '2023-01-08 23:56:47', 'Bank', NULL, NULL, 'Please don’t use local banks under 200 usd'),
(16, 39, '20', 2, '2023-01-09 00:03:18', '2023-01-09 06:03:08', 'Bank', NULL, NULL, 'Hello sir withdraws in binance'),
(17, 37, '35', 1, '2023-01-14 03:13:28', '2023-01-14 15:26:14', 'Binance', 'USDT', 'Sohaibsiddique576@gmail.com', NULL),
(18, 39, '40', 1, '2023-01-15 19:22:21', '2023-01-15 21:35:27', 'Binance', 'USDT', 'Alirazarafiq01@gmail.com', NULL),
(19, 26, '27', 1, '2023-01-18 13:03:15', '2023-01-19 02:05:57', 'Binance', 'USDT', 'Muneebwma@icloud.com', NULL),
(20, 49, '27', 1, '2023-01-18 13:17:51', '2023-01-18 13:29:35', 'Bank', NULL, 'Mahertayyab203@gmail.com', NULL),
(21, 70, '20', 2, '2023-01-19 14:47:22', '2023-01-19 15:18:54', 'Bank', NULL, NULL, 'Please sir, don’t use local banks for withdrawal'),
(22, 49, '70', 1, '2023-01-23 20:22:56', '2023-01-24 00:59:34', 'Bank', NULL, 'Mahertayyab201@gmail.com', NULL),
(23, 70, '20', 1, '2023-01-31 21:25:43', '2023-01-31 22:10:30', 'Binance', 'USDT', 'Shahayarabbas3@gmail.com', NULL),
(24, 70, '20', 1, '2023-01-31 23:25:49', '2023-02-01 11:44:43', 'Binance', 'USDT', 'Shahayarabbas3@gmail.com', NULL),
(25, 70, '30', 1, '2023-02-01 12:01:39', '2023-02-01 12:37:19', 'Binance', 'USDT', 'Shahayarabbas3@gmail.com', NULL),
(26, 51, '35', 1, '2023-02-06 21:10:52', '2023-02-07 01:06:07', 'Binance', 'BUSD', 'Mahertayyab203@gmail.com', NULL),
(27, 59, '20', 1, '2023-02-08 15:19:19', '2023-02-08 18:41:59', 'Binance', 'USDT', 'Mbadshah454@gmail.com', NULL),
(28, 26, '200', 1, '2023-02-09 00:04:51', '2023-02-09 02:25:09', 'Binance', 'USDT', 'Muneebwma@icloud.com', NULL),
(29, 39, '40', 1, '2023-02-09 16:08:53', '2023-02-09 16:54:43', 'Binance', 'USDT', 'Alirazarafiq01@gmail.com', NULL),
(30, 69, '20', 1, '2023-02-09 17:10:18', '2023-02-09 18:44:00', 'Binance', 'USDT', 'Farhanrana702@gmail.com', NULL),
(31, 69, '187', 1, '2023-02-09 21:51:59', '2023-02-10 01:07:54', 'Binance', 'USDT', 'Farhanrana702@gmail.com', NULL),
(32, 100, '29', 1, '2023-02-14 16:49:11', '2023-02-14 20:17:59', 'Binance', 'USDT', 'Shahayarabbas3@gmail.com', NULL),
(33, 49, '70', 1, '2023-02-14 19:47:51', '2023-02-14 20:22:12', 'Bank', NULL, 'Mahertayyab203@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_packages`
--
ALTER TABLE `active_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active_rewards`
--
ALTER TABLE `active_rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profits`
--
ALTER TABLE `profits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_packages`
--
ALTER TABLE `active_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `active_rewards`
--
ALTER TABLE `active_rewards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profits`
--
ALTER TABLE `profits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=896;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
