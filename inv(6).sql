-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 06:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Reguler user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 06:19:09', 1),
(2, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 06:22:18', 1),
(3, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 06:25:47', 1),
(4, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 09:05:08', 1),
(5, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-02 09:54:15', 1),
(6, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 09:57:39', 1),
(7, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-02 09:57:55', 1),
(8, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-02 10:04:02', 1),
(9, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-02 10:06:55', 1),
(10, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-17 05:22:05', 1),
(11, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-17 05:22:22', 1),
(12, '::1', 'addityarivaldo89', NULL, '2021-03-17 09:36:29', 0),
(13, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-17 09:36:35', 1),
(14, '::1', 'Login', NULL, '2021-03-22 12:42:00', 0),
(15, '::1', 'Login', NULL, '2021-03-22 12:42:12', 0),
(16, '::1', 'Login', NULL, '2021-03-22 12:42:24', 0),
(17, '::1', 'Login', NULL, '2021-03-22 12:42:34', 0),
(18, '::1', 'Login', NULL, '2021-03-22 12:42:42', 0),
(19, '::1', 'Login', NULL, '2021-03-22 12:46:15', 0),
(20, '::1', 'addit', NULL, '2021-03-22 12:47:42', 0),
(21, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 12:49:03', 1),
(22, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 12:49:38', 1),
(23, '::1', 'dipa@gmail.com', 3, '2021-03-22 13:03:38', 1),
(24, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-22 13:04:30', 1),
(25, '::1', 'dipa@gmail.com', 3, '2021-03-22 13:04:45', 1),
(26, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-22 13:05:03', 1),
(27, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 13:05:14', 1),
(28, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 13:13:46', 1),
(29, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 14:07:14', 1),
(30, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-22 14:17:30', 1),
(31, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-23 04:53:40', 1),
(32, '::1', 'demoproject@gmail.com', 4, '2021-03-23 04:55:21', 1),
(33, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-26 09:38:42', 1),
(34, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-28 09:10:13', 1),
(35, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-31 03:48:33', 1),
(36, '::1', 'addityarivaldo89', NULL, '2021-03-31 11:25:30', 0),
(37, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-31 11:25:38', 1),
(38, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-31 12:11:32', 1),
(39, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-31 12:14:52', 1),
(40, '::1', 'addityarivaldo@inf55.com', 2, '2021-03-31 12:23:08', 1),
(41, '::1', 'addityarivaldo89@gmail.com', 1, '2021-03-31 12:49:51', 1),
(42, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-02 21:58:42', 1),
(43, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-03 07:32:32', 1),
(44, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-03 11:51:12', 1),
(45, '::1', 'addityarivaldo89', NULL, '2021-04-06 11:42:07', 0),
(46, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-06 11:42:13', 1),
(47, '::1', 'addityarivaldo@inf55.com', 2, '2021-04-06 15:10:46', 1),
(48, '::1', 'dipa', NULL, '2021-04-06 15:12:24', 0),
(49, '::1', 'dipa', NULL, '2021-04-06 15:12:33', 0),
(50, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-06 15:14:13', 1),
(51, '::1', 'addit', NULL, '2021-04-06 15:16:56', 0),
(52, '::1', 'addityarivaldo@inf55.com', 2, '2021-04-06 15:17:05', 1),
(53, '::1', 'addityarivaldo@inf55.com', 2, '2021-04-07 02:53:53', 1),
(54, '::1', 'pakbayu@gmail.com', 5, '2021-04-07 02:57:23', 1),
(55, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-08 03:01:08', 1),
(56, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-08 10:43:11', 1),
(57, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-08 11:30:25', 1),
(58, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-08 11:41:58', 1),
(59, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-08 11:46:23', 1),
(60, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:19:43', 1),
(61, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:20:49', 1),
(62, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:34:20', 1),
(63, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:35:30', 1),
(64, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:37:25', 1),
(65, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 08:41:01', 1),
(66, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:33:37', 1),
(67, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:39:44', 1),
(68, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:41:36', 1),
(69, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:41:52', 1),
(70, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:42:28', 1),
(71, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-09 10:43:18', 1),
(72, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-10 11:48:12', 1),
(73, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-10 12:16:08', 1),
(74, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-11 12:32:39', 1),
(75, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-14 02:36:14', 1),
(76, '::1', 'adit', NULL, '2021-04-14 04:27:24', 0),
(77, '::1', 'addityarivaldo@inf55.com', 2, '2021-04-14 04:27:30', 1),
(78, '::1', 'pakbayu', NULL, '2021-04-14 04:49:24', 0),
(79, '::1', 'demoproject@gmail.com', 6, '2021-04-14 04:50:50', 1),
(80, '::1', 'demoproject@gmail.com', 6, '2021-04-14 04:58:22', 1),
(81, '::1', 'demoproject@gmail.com', 6, '2021-04-14 05:04:26', 1),
(82, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-14 05:24:37', 1),
(83, '::1', 'demoproject@gmail.com', 6, '2021-04-14 07:41:04', 1),
(84, '::1', 'demoproject@gmail.com', 6, '2021-04-14 08:02:15', 1),
(85, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-14 08:08:23', 1),
(86, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-14 09:52:17', 1),
(87, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-14 12:06:30', 1),
(88, '::1', 'luthfihrdy@gmail.com', 7, '2021-04-17 01:43:00', 1),
(89, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-17 04:29:27', 1),
(90, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-21 02:26:40', 1),
(91, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-21 03:16:36', 1),
(92, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-24 00:09:45', 1),
(93, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-25 14:36:36', 1),
(94, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-26 14:25:36', 1),
(95, '::1', 'luthfihrdy@gmail.com', 7, '2021-04-26 16:41:33', 1),
(96, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-28 08:21:36', 1),
(97, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-28 10:40:22', 1),
(98, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-28 10:41:10', 1),
(99, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-29 12:29:15', 1),
(100, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-29 12:54:55', 1),
(101, '::1', 'addityarivaldo', NULL, '2021-04-29 12:58:42', 0),
(102, '::1', 'addityarivaldo', NULL, '2021-04-29 12:58:48', 0),
(103, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-29 12:58:59', 1),
(104, '::1', 'addityarivaldo89@gmail.com', 1, '2021-04-29 13:00:13', 1),
(105, '::1', 'luthfihrdy@gmail.com', 7, '2021-04-29 14:15:29', 1),
(106, '::1', 'addityarivaldo89@gmail.com', 1, '2021-05-01 01:52:15', 1),
(107, '::1', 'tasyavania@gmail.com', 8, '2021-05-01 02:50:37', 1),
(108, '::1', 'addityarivaldo89@gmail.com', 1, '2021-05-01 03:09:59', 1),
(109, '::1', 'tasyavania@gmail.com', 8, '2021-05-01 03:10:24', 1),
(110, '::1', 'tasyavania@gmail.com', 8, '2021-05-01 03:12:43', 1),
(111, '::1', 'bagus@gmail.com', 9, '2021-05-01 03:28:53', 1),
(112, '::1', 'shanum@gmail.com', 10, '2021-05-01 03:38:24', 1),
(113, '::1', 'lipi@gmail.com', 11, '2021-05-01 04:40:28', 1),
(114, '::1', 'tasyaaa', NULL, '2021-05-04 03:33:04', 0),
(115, '::1', 'tasyaavania@gmail.com', 12, '2021-05-04 03:34:03', 1),
(116, '::1', 'aditdipa@gmail.com', 13, '2021-05-04 04:55:31', 1),
(117, '::1', 'aditdipa@gmail.com', 13, '2021-05-04 04:58:02', 1),
(118, '::1', 'aditdipa@gmail.com', 13, '2021-05-04 05:07:50', 1),
(119, '::1', 'aditdipa@gmail.com', 13, '2021-05-04 05:08:17', 1),
(120, '::1', 'aditdipa@gmail.com', 13, '2021-05-04 05:18:33', 1),
(121, '::1', 'addityarivaldo89@gmail.com', 1, '2021-05-16 00:33:07', 1),
(122, '::1', 'bimbingan1@gmail.com', 15, '2021-05-26 22:03:33', 1),
(123, '::1', 'addityarivaldo89@gmail.com', 1, '2021-06-02 22:03:35', 1),
(124, '::1', 'bimbingan1@gmail.com', 15, '2021-06-02 22:04:53', 1),
(125, '::1', 'addityarivaldo89@gmail.com', 1, '2021-06-14 04:02:53', 1),
(126, '::1', 'demoproject@gmail.com', 6, '2021-06-14 04:55:23', 1),
(127, '::1', 'bimbingan1@gmail.com', 15, '2021-06-14 05:03:34', 1),
(128, '::1', 'dipa', NULL, '2021-06-14 05:05:09', 0),
(129, '::1', 'additdipa', NULL, '2021-06-14 05:06:00', 0),
(130, '::1', 'aditdipa@gmail.com', 13, '2021-06-14 05:06:08', 1),
(131, '::1', 'addityarivaldo89@gmail.com', 1, '2021-06-28 10:40:04', 1),
(132, '::1', 'addityarivaldo89@gmail.com', 1, '2021-06-28 10:40:40', 1),
(133, '::1', 'merry@gmail.com', 16, '2021-06-28 11:04:51', 1),
(134, '::1', 'merry@gmail.com', 16, '2021-06-28 11:25:26', 1),
(135, '::1', 'ceban@gmail.com', 17, '2021-06-29 11:11:36', 1),
(136, '::1', 'ceban@gmail.com', 17, '2021-06-29 11:14:06', 1),
(137, '::1', 'ceban@gmail.com', 17, '2021-06-30 00:26:14', 1),
(138, '::1', 'ceban', NULL, '2021-06-30 00:39:02', 0),
(139, '::1', 'ceban@gmail.com', 17, '2021-06-30 00:39:09', 1),
(140, '::1', 'ceban@gmail.com', 17, '2021-06-30 00:44:30', 1),
(141, '::1', 'ceban@gmail.com', 17, '2021-06-30 01:14:14', 1),
(142, '::1', 'reydinda@gmail.com', 18, '2021-06-30 03:14:01', 1),
(143, '::1', 'addityarivaldo89@gmail.com', 1, '2021-08-20 18:16:38', 1),
(144, '::1', 'bismillah89@gmail.com', 19, '2021-08-20 19:44:41', 1),
(145, '::1', 'bismillah89@gmail.com', 19, '2021-08-20 19:47:17', 1),
(146, '::1', 'addityarivaldo89@gmail.com', 1, '2021-08-21 09:28:12', 1),
(147, '::1', 'bismillah89@gmail.com', 19, '2021-08-21 09:29:49', 1),
(148, '::1', 'addityarivaldo89@gmail.com', 1, '2021-08-24 06:39:35', 1),
(149, '::1', 'baguss@gmail.com', 20, '2021-08-24 06:47:07', 1),
(150, '::1', 'baguss@gmail.com', 20, '2021-08-24 06:48:07', 1),
(151, '::1', 'ceban@gmail.com', 17, '2021-08-24 07:00:23', 1),
(152, '::1', 'baguss', NULL, '2021-08-24 10:04:17', 0),
(153, '::1', 'baguss', NULL, '2021-08-24 10:04:25', 0),
(154, '::1', 'baguss@gmail.com', 20, '2021-08-24 10:04:42', 1),
(155, '::1', 'ceban@gmail.com', 17, '2021-08-24 10:27:28', 1),
(156, '::1', 'baguss@gmail.com', 20, '2021-08-24 10:37:37', 1),
(157, '::1', 'baguss@gmail.com', 20, '2021-08-24 21:30:51', 1),
(158, '::1', 'addityarivaldo89@gmail.com', 1, '2021-08-25 10:21:28', 1),
(159, '::1', 'addityarivaldo89@gmail.com', 1, '2021-08-25 10:39:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage_users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `id_users`, `slug`, `nama_tamu`, `pesan`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 1, 'adit-tasya', 'bismillah', 'bismillahhh', '', '2021-04-29', '2021-04-29'),
(9, 1, 'adit-tasya', 'sd', 'sad', '', '2021-04-29', '2021-04-29'),
(10, 7, 'lutfi-lipi', 'adit', 'hwd lutpi', '', '2021-04-29', '2021-04-29'),
(11, 1, 'adit-tasya', 'dip', 'bis', '', '2021-05-01', '2021-05-01'),
(12, 10, 'shanum-wow', 'bisa ayoo', 'bismillah', '', '2021-05-01', '2021-05-01'),
(13, 13, 'adit-dipa', 'Lutfi', 'Selamat yaa', '', '2021-05-04', '2021-05-04'),
(14, 13, 'adit-dipa', 'Alivia', 'Semoga langgeng', '', '2021-05-04', '2021-05-04'),
(15, 15, 'bimbingan-satu', 'Lutfi', 'Selamat ya adit semoga ', '', '2021-05-26', '2021-05-26'),
(16, 16, 'meru-meri', 'merry', 'selamat ya bro', '', '2021-06-28', '2021-06-28'),
(17, 16, 'meru-meri', 'ceban', 'oii dindahauw selamat', '', '2021-06-28', '2021-06-28'),
(18, 17, 'uhuy-ehey', 'Ceban', 'woy selamat yee', '', '2021-06-29', '2021-06-29'),
(19, 17, 'uhuy-ehey', 'merry', 'wakdawkea', '', '2021-06-29', '2021-06-29'),
(20, 17, 'uhuy-ehey', 'error', 'jangan erroorr woy', '', '2021-06-29', '2021-06-29'),
(21, 18, 'rey-dinda', 'Adit', 'Selamat yaa', '', '2021-06-30', '2021-06-30'),
(22, 19, 'bismillah-basmallah', 'adit', 'wew', '', '2021-08-21', '2021-08-21'),
(23, 20, 'bagus-ones', 'addit', 'bismillah', '', '2021-08-24', '2021-08-24'),
(24, 20, 'bagus-ones', 'bagus', 'mantap betul', '', '2021-08-24', '2021-08-24'),
(25, 20, 'bagus-ones', 'iqbal', 'gacor boy', '', '2021-08-24', '2021-08-24'),
(26, 20, 'bagus-ones', 'esko', 'jangan lupa gaskeun malem', '', '2021-08-24', '2021-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) NOT NULL,
  `link_youtube` varchar(50) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `id_users`, `slug`, `link_youtube`, `gambar`, `created_at`, `updated_at`) VALUES
(13, 7, 'lutfi-lipi', 'https://youtu.be/iT44pZmor3o', 'pixel-jeff-mario.gif', NULL, NULL),
(14, 7, 'lutfi-lipi', 'https://youtu.be/iT44pZmor3o', '998e055aba57c24138220937cc5166ab.gif', NULL, NULL),
(15, 7, 'lutfi-lipi', 'https://youtu.be/iT44pZmor3o', 'pixel-jeff-noodles.gif', NULL, NULL),
(16, 7, 'lutfi-lipi', 'https://youtu.be/iT44pZmor3o', 'mario-pixel-art-digital-art-nintendo-computer-uhdpaper.com-4K-4.2038.jpg', NULL, NULL),
(32, 8, 'dit-tas', 'https://youtu.be/LhJJ4LY2uAs', '2020_08_27_15_48_IMG_3416.JPG', '2021-05-01 03:17:03', '2021-05-01 03:17:03'),
(33, 8, 'dit-tas', 'https://youtu.be/LhJJ4LY2uAs', '2020_08_27_15_48_IMG_3417.JPG', '2021-05-01 03:17:03', '2021-05-01 03:17:03'),
(34, 8, 'dit-tas', 'https://youtu.be/LhJJ4LY2uAs', '2020_08_27_15_48_IMG_3418.JPG', '2021-05-01 03:17:03', '2021-05-01 03:17:03'),
(35, 9, 'bagus-audi', 'RQVmSCL1w5Y 	', 'the-magical-lake-house-4k-sa_1.jpg', '2021-05-01 03:33:18', '2021-05-01 03:33:18'),
(36, 9, 'bagus-audi', 'RQVmSCL1w5Y 	', 'the-quiet-is-nice-4k-4j.jpg', '2021-05-01 03:33:18', '2021-05-01 03:33:18'),
(37, 9, 'bagus-audi', 'RQVmSCL1w5Y 	', 'travelling-van-4k-4z.jpg', '2021-05-01 03:33:18', '2021-05-01 03:33:18'),
(43, 10, 'shanum-wow', 'https://youtu.be/1nDCl0wrIJc', '8-bit-pixel-art-city-2o.jpg', '2021-05-01 04:04:25', '2021-05-01 04:04:25'),
(44, 10, 'shanum-wow', 'https://youtu.be/1nDCl0wrIJc', '8-bit-sunrise-mountains-artwork-4k-fg.jpg', '2021-05-01 04:04:26', '2021-05-01 04:04:26'),
(45, 10, 'shanum-wow', 'https://youtu.be/1nDCl0wrIJc', 'all-night-long-4k-uf_3.jpg', '2021-05-01 04:04:26', '2021-05-01 04:04:26'),
(46, 12, 'rivaldo-salsabila', 'https://youtu.be/S6E1AyXjlAU', '2020_02_21_17_46_IMG_0103.JPG', '2021-05-04 03:43:53', '2021-05-04 03:43:53'),
(47, 12, 'rivaldo-salsabila', 'https://youtu.be/S6E1AyXjlAU', '2020_02_21_17_46_IMG_0104.JPG', '2021-05-04 03:43:53', '2021-05-04 03:43:53'),
(49, 13, 'adit-dipa', 'https://youtu.be/S6E1AyXjlAU', '979dac7ad66c8c7e32947437437cfb3a04d7dc68_s2_n2.jpg', '2021-05-04 05:00:33', '2021-05-04 05:00:33'),
(50, 13, 'adit-dipa', 'https://youtu.be/S6E1AyXjlAU', 'WhatsApp Image 2021-03-03 at 16.41.21 (1).jpeg', '2021-05-04 05:00:33', '2021-05-04 05:00:33'),
(51, 13, 'adit-dipa', 'https://youtu.be/S6E1AyXjlAU', 'WhatsApp Image 2021-03-03 at 16.41.21.jpeg', '2021-05-04 05:00:33', '2021-05-04 05:00:33'),
(52, 13, 'adit-dipa', 'https://youtu.be/S6E1AyXjlAU', 'WhatsApp Image 2021-03-03 at 16.41.22.jpeg', '2021-05-04 05:00:33', '2021-05-04 05:00:33'),
(53, 15, 'bimbingan-satu', 'https://youtu.be/_GUEOfnm8u8', '580b57fcd9996e24bc43c521.png', '2021-05-26 22:08:13', '2021-05-26 22:08:13'),
(54, 15, 'bimbingan-satu', 'https://youtu.be/_GUEOfnm8u8', '580b57fcd9996e24bc43c543.png', '2021-05-26 22:08:13', '2021-05-26 22:08:13'),
(55, 15, 'bimbingan-satu', 'https://youtu.be/_GUEOfnm8u8', '24a9eb786ce112d90e707bf0e46d4046.jpg', '2021-05-26 22:08:13', '2021-05-26 22:08:13'),
(56, 16, 'meru-meri', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_1.jpg', '2021-06-28 11:29:18', '2021-06-28 11:29:18'),
(57, 16, 'meru-meri', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_2.png', '2021-06-28 11:29:18', '2021-06-28 11:29:18'),
(58, 16, 'meru-meri', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_3.jpg', '2021-06-28 11:29:18', '2021-06-28 11:29:18'),
(59, 16, 'meru-meri', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_4.jpeg', '2021-06-28 11:29:18', '2021-06-28 11:29:18'),
(60, 16, 'meru-meri', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_5.png', '2021-06-28 11:29:18', '2021-06-28 11:29:18'),
(61, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_1.jpg', '2021-06-29 11:14:51', '2021-06-29 11:14:51'),
(62, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_2.png', '2021-06-29 11:14:51', '2021-06-29 11:14:51'),
(63, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_3.jpg', '2021-06-29 11:14:51', '2021-06-29 11:14:51'),
(64, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_4.jpeg', '2021-06-29 11:14:51', '2021-06-29 11:14:51'),
(65, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_5.png', '2021-06-30 00:27:00', '2021-06-30 00:27:00'),
(66, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_6.jpg', '2021-06-30 00:27:00', '2021-06-30 00:27:00'),
(67, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_7.jpg', '2021-06-30 00:27:00', '2021-06-30 00:27:00'),
(68, 17, 'uhuy-ehey', 'https://youtu.be/S6E1AyXjlAU', 'prewedd_8.jpg', '2021-06-30 00:28:12', '2021-06-30 00:28:12'),
(69, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_1.jpg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(70, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_2.png', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(71, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_3.jpg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(72, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_4.jpeg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(73, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_5.png', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(74, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_6.jpg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(75, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_7.jpg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(76, 18, 'rey-dinda', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'prewedd_8.jpg', '2021-06-30 03:18:39', '2021-06-30 03:18:39'),
(87, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_33.jpg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(88, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_13.png', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(89, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_34.jpg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(90, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_12.jpeg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(91, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_14.png', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(92, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_35.jpg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(93, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_36.jpg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(94, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'prewedd_37.jpg', '2021-08-21 10:52:09', '2021-08-21 10:52:09'),
(95, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'calon pengantin pria.jpg', '2021-08-21 10:52:22', '2021-08-21 10:52:22'),
(96, 19, 'bismillah-basmallah', 'https://www.youtube.com/watch?v=kTJczUoc26U', 'calon pengantin wanita.jpg', '2021-08-21 10:52:22', '2021-08-21 10:52:22'),
(99, 1, 'adit-tasya', 'iT44pZmor3o', 'calon pengantin pria_2.jpg', '2021-08-24 06:46:04', '2021-08-24 06:46:04'),
(103, 17, 'uhuy-ehey', 'https://www.youtube.com/S6E1AyXjlAU', 'calon pengantin pria.jpg', '2021-08-24 10:29:34', '2021-08-24 10:29:34'),
(107, 20, 'bagus-ones', 'https://www.youtube.com/watch?v=1FOeT0GWD5I', 'calon pengantin wanita.jpg', '2021-08-24 11:13:35', '2021-08-24 11:13:35'),
(108, 20, 'bagus-ones', 'https://www.youtube.com/1FOeT0GWD5I', 'calon pengantin pria.jpg', '2021-08-24 11:14:11', '2021-08-24 11:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `id_inv` int(11) NOT NULL,
  `id_users` int(11) UNSIGNED NOT NULL,
  `id_tema` int(11) NOT NULL,
  `invoice` int(25) NOT NULL,
  `couple_name` varchar(100) NOT NULL,
  `sub_judul` varchar(255) NOT NULL DEFAULT 'The Wedding',
  `slug` varchar(100) DEFAULT NULL,
  `foto_p` varchar(255) NOT NULL,
  `pria` varchar(100) NOT NULL,
  `instagram_p` varchar(100) NOT NULL,
  `ayah_p` varchar(100) NOT NULL,
  `ibu_p` varchar(100) NOT NULL,
  `foto_w` varchar(255) NOT NULL,
  `wanita` varchar(100) NOT NULL,
  `instagram_w` varchar(100) NOT NULL,
  `ayah_w` varchar(100) NOT NULL,
  `ibu_w` varchar(100) NOT NULL,
  `alamat_akad` varchar(255) NOT NULL,
  `akad_time` time NOT NULL,
  `akad_date` datetime NOT NULL,
  `alamat_resepsi` varchar(255) NOT NULL,
  `resepsi_time` time NOT NULL,
  `resepsi_date` datetime NOT NULL,
  `link_youtube` varchar(255) NOT NULL DEFAULT 'RQVmSCL1w5Y',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`id_inv`, `id_users`, `id_tema`, `invoice`, `couple_name`, `sub_judul`, `slug`, `foto_p`, `pria`, `instagram_p`, `ayah_p`, `ibu_p`, `foto_w`, `wanita`, `instagram_w`, `ayah_w`, `ibu_w`, `alamat_akad`, `akad_time`, `akad_date`, `alamat_resepsi`, `resepsi_time`, `resepsi_date`, `link_youtube`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 30421, 'Additya Tasya', 'The Wedding', 'adit-tasya', '1617900664_00a4a9cfeb4350d8fbbc.jpeg', 'Additya Rivaldo', 'dasa', 'Dudi Ahmadi', 'Theresia Silviana', '1617900664_00a4a9cfeb4350d8fbbc.jpeg', 'Tasya Vania Salsabila', 'tretergf', 'Sri Redjeki', 'Dindin Saifuddin', 'jalan flamboyan raya 2 no 58', '04:45:00', '2021-08-22 10:00:00', 'jalan bunga matahari 2 blok f5 no 23', '03:45:00', '2021-04-04 11:00:00', 's2SBP-kf0bk', '2021-04-03 15:47:46', '2021-08-25 10:52:01'),
(27, 6, 1, 54561421, 'coba dulu', 'The Wedding', 'coba-dulu', '1618405177_1453500f13ab089b381f.jpg', 'asasadasa', 'asadsa', 'adsad', 'sada', '1618405177_681afcac79c119f0649d.jpg', 'ytut', 'utyut', 'utyuyt', 'utyut', 'Jalan jalan ah', '08:58:00', '2021-04-14 00:00:00', 'Jalan jalan juga ah', '08:58:00', '2021-04-14 00:00:00', 'RQVmSCL1w5Y', '2021-04-14 07:59:37', '2021-04-14 07:59:37'),
(29, 7, 1, 1431721, 'Lutfi Lipi', 'The Wedding', 'lutfi-lipi', '1618641975_a9c96bfee6831976b0aa.png', 'Lutfi coc', '@lutfihrdy', 'Lutfi', 'Hrdy', '1618641975_a24d48ad6cd333dbbed2.png', 'Alivia', '@lipireparepi', 'lipi', 'repa', 'Hotel HARRIS Summarecon', '00:00:00', '2021-04-17 00:00:00', 'Hotel HARRIS Summarecon', '10:46:00', '2021-04-17 00:00:00', 'iT44pZmor3o', '2021-04-17 01:46:15', '2021-04-17 01:46:15'),
(31, 8, 2, 18050121, 'dit tas', 'The Wedding', 'dit-tas', '1619856367_d256c45ffd493c7ee98a.jpg', 'Additya Rivaldo', '@adityarivaldo', 'Dudi Ahmadi', 'Theresia Silviana', '1619856367_1678fc149e77b8bb0ab0.jpg', 'Tasya Vania Salsabila', '@tasyavaniia', 'Dindin Saifuddin', 'Sri Redjeki', 'Ballroom Hotel Mulia Senayan', '04:06:00', '2021-05-01 00:00:00', 'Ballroom Hotel Mulia Senayan', '04:06:00', '2021-05-01 00:00:00', 'RQVmSCL1w5Y', '2021-05-01 03:06:07', '2021-05-01 03:06:07'),
(32, 9, 1, 53280121, 'bagus audi', 'The Wedding', 'bagus-audi', '1619857799_aeba305d391f4b817648.jpg', 'bagus', '@bagus', 'bagus deh', 'bagus juga', '1619857799_c3eeff6eb02dbb8c8af9.jpg', 'audi', '@audi', 'mercy', 'bmw kali', 'Ballroom Hotel Mulia Senayan', '04:30:00', '2021-05-01 00:00:00', 'Ballroom Hotel Mulia Senayan', '04:30:00', '2021-05-01 00:00:00', 'RQVmSCL1w5Y', '2021-05-01 03:29:59', '2021-05-01 03:29:59'),
(33, 10, 1, 24380121, 'shanum wow', 'The Wedding', 'shanum-wow', '1619858370_7ab679c1cdecd1c4bebd.jpg', 'dsada', 'dsadsa', 'adsad', 'dasda', '1619858370_8f195c3b8b2c729b5cee.jpg', 'dasda', 'dsda', 'dsada', 'dsaad', 'dsadas', '04:40:00', '2022-06-02 00:00:00', 'Ballroom Hotel Mulia Senayan', '04:40:00', '2022-06-02 00:00:00', 'RQVmSCL1w5Y', '2021-05-01 03:39:30', '2021-05-01 03:39:30'),
(34, 11, 5, 12410121, 'lipi coba', 'The Wedding', 'lipi-coba', '1619862112_202c3956ca4e70f570f6.jpg', 'dasdad', 'dsadas', 'dsada', 'sdasda', '1619862112_a039c2bd6c93fe966772.jpg', 'dsadad', 'sdads', 'sdas', 'dsadsa', 'Ballroom Hotel Mulia Senayan', '05:42:00', '2021-05-05 00:00:00', 'Ballroom Hotel Mulia Senayan', '05:42:00', '2021-05-07 00:00:00', 'RQVmSCL1w5Y', '2021-05-01 04:41:52', '2021-05-01 04:41:52'),
(35, 12, 5, 4400421, 'rivaldo salsabila', 'The Wedding', 'rivaldo-salsabila', '1620117694_ca609bd721f49ffcd8f3.jpg', 'Additya Rivaldo', '@adityarivaldo', 'Dudi Ahmadi', 'Theresia Silviana', '1620117694_16a6241cc415643ec5f8.jpeg', 'Tasya Vania Salsabila', '@tasyavaniia', 'Dindin Saifuddin', 'Sri Redjeki', 'Ballroom Hotel Mulia Senayan', '10:00:00', '2023-01-26 00:00:00', 'Ballroom Hotel Mulia Senayan', '12:00:00', '2023-01-26 00:00:00', 'RQVmSCL1w5Y', '2021-05-04 03:41:34', '2021-05-04 03:41:34'),
(36, 13, 2, 31550421, 'Additya Diva Ayu', 'The Wedding', 'adit-dipa', '1620122262_0b68cc4af17e8e57b4c1.jpg', 'Additya', '@additya', 'additya', 'rivaldo', '1620122262_35f505b341e068cae12b.jpeg', 'diva', '@divaa', 'diva', 'ayu', 'Hotel Harris Summarecon Bekasi', '10:00:00', '2021-05-08 00:00:00', 'Hotel Harris Summarecon Bekasi', '12:00:00', '2021-05-09 00:00:00', 'RQVmSCL1w5Y', '2021-05-04 04:57:42', '2021-05-04 05:00:03'),
(37, 15, 2, 33032621, 'bimbingan satu', 'The Wedding', 'bimbingan-satu', '1622084763_0fec2024a233133b5412.jpg', 'Additya Rivaldo', '@adityarivaldo', 'Additya', 'Rivaldo', '1622084763_1da0ee4d07b695862f51.jpg', 'Diva Ayu', '@divaayu', 'Diva', 'Ayu', 'Summarecon Mall Bekasi', '11:00:00', '2021-05-30 00:00:00', 'Summarecon Mall Bekasi', '12:00:00', '2021-05-30 00:00:00', 'RQVmSCL1w5Y', '2021-05-26 22:06:03', '2021-05-26 22:06:03'),
(38, 16, 1, 51042821, 'ceban merry', 'The Wedding', 'meru-meri', '1624897510_238063ebe8f082dc9160.jpg', 'Reynaldi Aditya Wisnuh Hasidi Putra Atmaja Mbayang', '@rey_mbayang', 'Ahmad', 'Slavina', '1624897510_361c90f6455cc264cab6.jpg', 'Nyimas Khodidjah Nasthiti Adinda', '@dindahw', 'Kemas Herman', 'Hulwati Husna', ': Vila Azila di kawasan Cipayung, Jakarta Timur', '10:00:00', '2020-07-10 00:00:00', ': Vila Azila di kawasan Cipayung, Jakarta Timur', '12:00:00', '2020-07-10 00:00:00', 'RQVmSCL1w5Y', '2021-06-28 11:25:10', '2021-06-28 12:11:47'),
(39, 17, 1, 36112921, 'uhuy ehey', 'The Wedding', 'uhuy-ehey', '1624983212_5cc26370bb9bc747de61.jpg', 'uhuy', 'uyuy', 'ahay', 'ihiy', '1624983212_d797f905d6a113cb0e4e.jpg', 'werr', 'wirr', 'wurr', 'worr', 'Hotel Harris Summarecon Bekasi', '17:00:00', '2021-06-30 00:00:00', 'Hotel Harris Summarecon Bekasi', '18:00:00', '2021-06-30 00:00:00', 'RQVmSCL1w5Y', '2021-06-29 11:13:32', '2021-06-29 11:13:32'),
(40, 18, 1, 1143021, 'Rey Dinda', 'The Wedding', 'rey-dinda', '1625041061_51987cc49747372ba515.jpg', 'Reynaldi Aditya Wisnuh Hasidi Putra Atmaja Mbayang', '@rey_mbayang', 'Ahmad', 'Slavina', '1625041061_0b8f5a419c9d18d2a616.jpg', 'Nyimas Khodidjah Nasthiti Adinda', '@dindahw', 'Kemas Herman', 'Hulwati Husna', 'Hotel Harris Summarecon Bekasi', '16:00:00', '2021-06-30 00:00:00', 'Hotel Harris Summarecon Bekasi', '17:00:00', '2021-06-30 00:00:00', 'RQVmSCL1w5Y', '2021-06-30 03:17:41', '2021-06-30 03:17:41'),
(41, 19, 3, 49292121, 'bismillah basmallah', 'The Wedding', 'bismillah-basmallah', '1629556395_05b7251b428c0aebbc95.jpg', 'bismillah', 'bismillah', 'bismillah', 'bismillah', '1629556395_c50ff20dfefaef745cd5.jpg', 'basmallah', 'basmallah', 'basmallah', 'basmallah', 'adsad', '10:33:00', '2021-08-22 00:00:00', 'hkhk', '00:34:00', '0000-00-00 00:00:00', 'RQVmSCL1w5Y', '2021-08-21 09:33:15', '2021-08-21 09:47:09'),
(43, 20, 3, 47052421, 'bagus ones', 'The Wedding', 'bagus-ones', '1629817558_91bcfc63f98423f11ca5.jpg', 'bagus', 'bagus', 'bagus', 'bagus', '1629817558_e95bd5f3b0f5dd4d335a.jpg', 'ones', 'ones', 'ones', 'ones', 'Hotel Harris Summarecon Bekasi', '22:05:00', '2021-08-25 22:05:00', 'Hotel Harris Summarecon Bekasi', '22:05:00', '2021-08-25 22:05:00', 'RQVmSCL1w5Y', '2021-08-24 10:05:58', '2021-08-24 10:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id_komik` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id_komik`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(2, 'One Piece', 'one-piece', 'Eichiro Oda', 'Gramedia', '1616943367_d981028182dc9afd487a.jpeg', NULL, '2021-03-28 09:56:07'),
(7, 'Naruto', 'naruto', 'Masashi Kishimotoo', 'Shonen Jump', 'default.svg', '2021-03-22 15:20:24', '2021-03-22 15:20:24'),
(8, 'Coba input gambar', 'coba-input-gambar', 'asd', 'asd', '5a87ae1a6c674865266447.jpg', '2021-03-22 16:05:01', '2021-03-22 16:05:01'),
(12, 'Coba input gambar2', 'coba-input-gambar2', 'asd', 'dds', '1616450442_b0b3047a579940e5011f.jpg', '2021-03-22 17:00:42', '2021-03-22 17:00:42'),
(13, 'Coba default', 'coba-default', 'sada', 'dsa', '1616451011_25265f8897dccf388f86.jpeg', '2021-03-22 17:10:11', '2021-03-22 17:10:11'),
(14, 'Jojo jeje', 'jojo-jeje', '12 maret 2021', 'jakarta', '1616493372_e2e4c6f02c6b0180e44c.jpg', '2021-03-23 04:56:12', '2021-03-23 04:56:12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `link_yt`
-- (See below for the actual view)
--
CREATE TABLE `link_yt` (
`slug` varchar(100)
,`id_users` int(10) unsigned
,`link_youtube` varchar(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1614312681, 1);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `id_users` int(11) UNSIGNED NOT NULL,
  `slug` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `id_users`, `slug`, `music`, `created_at`, `updated_at`) VALUES
(7, 1, 'adit-tasya', 'Natalie Taylor - Surrender (Frank Pierce Remix)_1.mp3', '2021-04-26', '2021-04-26'),
(8, 7, 'lutfi-lipi', 'DJ RAMADHAN TIBA 2020.mp3', '2021-04-26', '2021-04-26'),
(9, 8, 'dit-tas', 'Natalie Taylor - Surrender (Frank Pierce Remix).mp3', '2021-05-01', '2021-05-01'),
(10, 12, 'rivaldo-salsabila', 'Natalie Taylor - Surrender (Frank Pierce Remix).mp3', '2021-05-04', '2021-05-04'),
(11, 13, 'adit-dipa', 'Natalie Taylor - Surrender (Frank Pierce Remix).mp3', '2021-05-04', '2021-05-04'),
(12, 15, 'bimbingan-satu', 'Natalie Taylor - Surrender (Frank Pierce Remix).mp3', '2021-05-26', '2021-05-26'),
(13, 16, 'meru-meri', 'Brian McKnight Jr - Marry Your Daughter Lyrics Terjemahan Indonesia.mp3', '2021-06-28', '2021-06-28'),
(14, 17, 'uhuy-ehey', 'Brian McKnight Jr - Marry Your Daughter Lyrics Terjemahan Indonesia.mp3', '2021-06-29', '2021-06-29'),
(15, 18, 'rey-dinda', 'Brian McKnight Jr - Marry Your Daughter Lyrics Terjemahan Indonesia.mp3', '2021-06-30', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`id_tema`, `nama`, `harga`) VALUES
(1, 'Astronomy', 450000),
(2, 'Etnic', 50000),
(3, 'Fall', 50000),
(4, 'Rose', 90000),
(5, 'Rustic', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'addityarivaldo89@gmail.com', 'addityarivaldo89', NULL, 'default.svg', '$2y$10$VI3wMlum075zouKBNS8K7u5M/whggT9rVoxYrmJB6ADtUQzjK1es.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-02 06:18:42', '2021-03-02 06:18:42', NULL),
(2, 'addityarivaldo@inf55.com', 'addit', NULL, 'default.svg', '$2y$10$nZ1HxJWxWEKWqP306TqcJ.Q8vSBCfA2G5HnjGmgQ/hv.5jCGGUM22', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-02 06:47:56', '2021-03-02 06:47:56', NULL),
(6, 'demoproject@gmail.com', 'demoproject', NULL, 'default.svg', '$2y$10$yTuZdylfTXQbbxbyhOEnYecZik11BcS1rgBusuryoH5o77Yt02gKK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-14 04:50:33', '2021-04-14 04:50:33', NULL),
(7, 'luthfihrdy@gmail.com', 'lutficoc', NULL, 'default.svg', '$2y$10$ckZ6YaKlifNtJ9HWnqRckuKy1eSkGU8bz5fdkrwgq9jDriEAznCsy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-17 01:42:49', '2021-04-17 01:42:49', NULL),
(8, 'tasyavania@gmail.com', 'tasya', NULL, 'default.svg', '$2y$10$v1j3rk/DjXXwBDcQ8FcKa.8pbbUrcghUiSOxfKsAilc3/jKa34sYW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-01 02:50:33', '2021-05-01 02:50:33', NULL),
(9, 'bagus@gmail.com', 'bagus', NULL, 'default.svg', '$2y$10$HZjv9xrprr2cT4bsPLbtx.Xq8If/JRdcwNy9LIHuTigaLA8r0vUq6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-01 03:28:43', '2021-05-01 03:28:43', NULL),
(10, 'shanum@gmail.com', 'shanum', NULL, 'default.svg', '$2y$10$J4B2ZIaE6K8/R6bmpClK2.UaB/Ye3Pzl37WnfkEvKEO64p0QICWte', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-01 03:38:17', '2021-05-01 03:38:17', NULL),
(11, 'lipi@gmail.com', 'lipi', NULL, 'default.svg', '$2y$10$85Lu0qv9255KCpB9WZH65OpvUyqpKQsig.yf87LVbFgxD3EjCBa8i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-01 04:40:24', '2021-05-01 04:40:24', NULL),
(12, 'tasyaavania@gmail.com', 'tasyaa', NULL, 'default.svg', '$2y$10$EX1ZdwQPnYCfCtntfAFgHOhUToGSpw1UQdGJz7SAEvarfwuz0CwHS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-04 03:32:46', '2021-05-04 03:32:46', NULL),
(13, 'aditdipa@gmail.com', 'aditdipa', NULL, 'default.svg', '$2y$10$PHaRmlsck0NMZgcbXdQR3euMz7R8X0spLqNpFBXzHA/8HsHsu/l1y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-04 04:52:31', '2021-05-04 04:52:31', NULL),
(14, 'addityarivaldo8999@gail.com', 'addityarivaldo8999', NULL, 'default.svg', '$2y$10$/Ct/wyahsZJvn5eJDr/QH.eXy5q3VP4fGQEqCaHl4hTPu8OpZBJNW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-04 04:53:35', '2021-05-04 04:53:35', NULL),
(15, 'bimbingan1@gmail.com', 'bimbingan1', NULL, 'default.svg', '$2y$10$QrRYNqz2O3RX6oYy3iKQqO9Fr/CCN90svuLpgHtB4qasj1VqdCCR6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-26 22:03:15', '2021-05-26 22:03:15', NULL),
(16, 'merry@gmail.com', 'merry', NULL, 'default.svg', '$2y$10$HjZFUM8/30o/XcGVAQTo2OoAS6bFiV2aVzX8P3CPejaHsnhUViza2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-28 11:04:39', '2021-06-28 11:04:39', NULL),
(17, 'ceban@gmail.com', 'ceban', NULL, 'default.svg', '$2y$10$pR0SlnUcrwtgGz0FKHpvn.94.RSMtPOonJEX5kOLk/QPg3XCgD4f.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-29 11:11:18', '2021-06-29 11:11:18', NULL),
(18, 'reydinda@gmail.com', 'reydinda', NULL, 'default.svg', '$2y$10$JuT845/NeGlH7fZgb.Zx7OSg3zSlBb9PZiN7Ip6nGJpjyU1Q57oLO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-30 03:13:49', '2021-06-30 03:13:49', NULL),
(19, 'bismillah89@gmail.com', 'bismillah89', NULL, 'default.svg', '$2y$10$0pURxiKJGAgcdS0yEI.4sOgGX.rYj4s5HfuzfgUee8Dgz9hZCFnS6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-20 19:44:35', '2021-08-20 19:44:35', NULL),
(20, 'baguss@gmail.com', 'baguss', NULL, 'default.svg', '$2y$10$lHs9exrzVVFTK0KSffVIO.JfM.78VcRJ8HhFJYsb76YQfF7xeoIie', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-24 06:47:03', '2021-08-24 06:47:03', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vlink_youtube`
-- (See below for the actual view)
--
CREATE TABLE `vlink_youtube` (
`slug` varchar(100)
,`link_youtube` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `waktu`
-- (See below for the actual view)
--
CREATE TABLE `waktu` (
`akad_date - created_at` bigint(16)
);

-- --------------------------------------------------------

--
-- Structure for view `link_yt`
--
DROP TABLE IF EXISTS `link_yt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `link_yt`  AS  select distinct `gallery`.`slug` AS `slug`,`gallery`.`id_users` AS `id_users`,substr(`gallery`.`link_youtube`,-11) AS `link_youtube` from `gallery` ;

-- --------------------------------------------------------

--
-- Structure for view `vlink_youtube`
--
DROP TABLE IF EXISTS `vlink_youtube`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlink_youtube`  AS  select `invitation`.`slug` AS `slug`,substr(`invitation`.`link_youtube`,-11) AS `link_youtube` from `invitation` ;

-- --------------------------------------------------------

--
-- Structure for view `waktu`
--
DROP TABLE IF EXISTS `waktu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `waktu`  AS  select `invitation`.`akad_date` - `invitation`.`created_at` AS `akad_date - created_at` from `invitation` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id_komik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_users` (`id_users`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `invitation_ibfk_1` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`),
  ADD CONSTRAINT `invitation_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
