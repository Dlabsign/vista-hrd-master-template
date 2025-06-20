-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2025 pada 20.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vista_hr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `general_competencies`
--

CREATE TABLE `general_competencies` (
  `id` int(11) NOT NULL,
  `core_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `position_id` int(11) DEFAULT NULL,
  `definition` varchar(100) NOT NULL,
  `objectives` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `general_competencies`
--

INSERT INTO `general_competencies` (`id`, `core_id`, `area_id`, `position_id`, `definition`, `objectives`, `created_at`) VALUES
(11, 10, 10, NULL, '10', 'Objective test', '2025-06-16 18:46:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leadership_competencies`
--

CREATE TABLE `leadership_competencies` (
  `id` int(11) NOT NULL,
  `core_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `definition` varchar(100) DEFAULT NULL,
  `objectives` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `leadership_competencies`
--

INSERT INTO `leadership_competencies` (`id`, `core_id`, `area_id`, `definition`, `objectives`, `created_at`) VALUES
(5, 10, 10, '10', 'Obejctive Test', '2025-06-16 18:46:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_department`
--

CREATE TABLE `master_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `no_urut` int(11) DEFAULT NULL,
  `group_dept` varchar(255) NOT NULL,
  `is_void` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_department`
--

INSERT INTO `master_department` (`id`, `department_name`, `no_urut`, `group_dept`, `is_void`, `timestamp`) VALUES
(1, 'Center - Bandung', 23, 'Cabang', 0, '2024-09-05 21:34:15'),
(2, 'HO - Finance & Accounting', 3, 'HO', 0, '2024-09-05 22:22:11'),
(3, 'Center - East Surabaya', 13, 'Cabang', 0, '2024-09-05 21:34:29'),
(4, 'Area - Jakarta (Sales & Marketing)', 11, 'Area', 0, '2024-09-05 22:21:52'),
(5, 'HO - VOS VE  LIU (Sales & Marketing)', 1, 'HO', 0, '2024-09-05 22:22:29'),
(6, 'HO - Admission', 2, 'HO', 0, '2024-09-05 21:32:29'),
(7, 'Surabaya - Sales And Marketing', 8, 'Area', 1, '2024-09-05 21:24:18'),
(8, 'Center - PIK North Jakarta', 22, 'Cabang', 0, '2024-09-05 21:34:35'),
(9, 'Center - West Surabaya', 14, 'Cabang', 0, '2024-09-05 21:34:42'),
(10, 'Center - Bali', 15, 'Cabang', 0, '2024-09-05 21:35:00'),
(11, 'LIU Media', 28, 'LIU', 0, '2023-11-02 21:56:45'),
(12, 'Center - Malang', 17, 'Cabang', 0, '2024-09-05 21:37:04'),
(13, 'Surabaya Area - Academic', 10, 'Area', 1, '2024-09-05 21:37:31'),
(14, 'HO - Operation, HR, IT , GA, Admin', 4, 'HO', 0, '2023-11-02 21:54:10'),
(15, 'Center - MOI North Jakarta', 18, 'Cabang', 0, '2024-09-05 21:35:05'),
(16, 'Center - PIM South Jakarta', 19, 'Cabang', 0, '2024-09-05 21:35:08'),
(17, 'Center - SOHO West Jakarta', 20, 'Cabang', 0, '2024-09-05 21:35:15'),
(18, 'Center - Operation,  Admin, GA', 7, 'Area', 0, '2023-11-02 21:55:31'),
(19, 'Sales & Marketing', 6, 'Area', 0, '2023-11-02 21:55:31'),
(20, 'Jakarta Area - Academic', 12, 'Area', 1, '2024-09-05 21:37:32'),
(21, 'VIP Malang', 27, 'VIP Cabang', 1, '2024-09-05 21:36:56'),
(22, 'HO - Academic', 5, 'HO', 1, '2024-09-05 21:32:15'),
(23, 'Bandung - Academic', 24, 'Cabang', 1, '2024-09-05 21:37:33'),
(24, 'Bali -  Academic', 16, 'Cabang', 1, '2024-09-05 21:37:35'),
(25, 'Bali -  Academic', 16, 'Cabang', 1, '2023-11-02 21:55:56'),
(26, 'Area - Surabaya (Sales & Marketing)', 9, 'Area', 0, '2024-09-05 22:21:41'),
(27, 'North Jakarta - PIK', 21, 'Cabang', 1, '2024-09-01 10:24:41'),
(28, 'HO - Sales', 1, 'HO', 0, '2024-09-05 21:32:39'),
(29, 'VIP North Jakarta Center', 26, 'VIP Cabang', 1, '2024-09-05 21:35:45'),
(30, 'VIP East Surabaya Center', 26, 'VIP Cabang', 1, '2024-09-05 21:35:33'),
(31, 'Area - Jakarta (Operation)', 12, 'Area', 0, '2024-09-05 21:42:09'),
(32, 'VIP - Sales & Marketing', 25, 'VIP Cabang', 0, '2023-11-28 07:33:18'),
(33, 'VIP West Surabaya Center', 26, 'VIP Cabang', 1, '2024-09-05 21:35:36'),
(34, 'VIP - Academic', 26, 'VIP Cabang', 0, '2024-09-09 01:49:42'),
(35, 'VPro', 24, 'VIP Cabang', 0, '2024-09-09 01:59:31'),
(36, 'Center - Medan', 23, 'Cabang', 0, '2025-04-27 19:36:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_performance_management`
--

CREATE TABLE `master_performance_management` (
  `id` int(11) NOT NULL,
  `core` varchar(100) NOT NULL,
  `key_val` varchar(100) NOT NULL,
  `definition` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_performance_management`
--

INSERT INTO `master_performance_management` (`id`, `core`, `key_val`, `definition`, `created_at`) VALUES
(10, 'Core Test', 'Key Test', 'Definition Test', '2025-06-16 18:46:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_position`
--

CREATE TABLE `master_position` (
  `id` int(11) NOT NULL,
  `job` int(11) DEFAULT NULL,
  `position_name` varchar(255) NOT NULL,
  `position_department` int(11) NOT NULL,
  `position_office_status` int(11) NOT NULL,
  `position_office_placement` int(11) NOT NULL,
  `is_void` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `group_sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_position`
--

INSERT INTO `master_position` (`id`, `job`, `position_name`, `position_department`, `position_office_status`, `position_office_placement`, `is_void`, `timestamp`, `group_sort`) VALUES
(0, 0, 'Root', 0, 0, 0, 0, '2022-06-25 16:16:13', 0),
(1, 0, 'Founder dan CEO', 5, 1, 1, 0, '2023-10-21 06:44:46', 4),
(2, 9, 'Mgmt Support & Devlp.', 5, 1, 1, 0, '2023-10-21 06:44:58', 4),
(3, 7, 'Head of Finance and Accounting', 2, 1, 7, 0, '2023-10-21 06:19:01', 3),
(4, 7, 'Finance Supervisor', 2, 1, 1, 0, '2023-10-21 06:19:01', 3),
(5, 7, 'Tax & Accounting Coordinator', 2, 1, 1, 0, '2023-10-21 06:43:50', 3),
(6, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:06:22', 3),
(7, 8, 'AR staff', 4, 1, 1, 0, '2023-10-21 06:45:07', 3),
(8, 6, 'Head of Business Strategic', 5, 1, 1, 0, '2024-08-23 11:29:42', 1),
(9, 5, 'Admission & AR Manager', 6, 1, 1, 0, '2024-08-28 23:44:44', 2),
(10, 2, 'Sales Support & Development Manager', 28, 1, 1, 0, '2024-08-23 11:28:26', 1),
(11, 6, 'Marketing Manager', 7, 1, 1, 0, '2023-10-21 06:17:06', 1),
(12, 3, 'Corporate Manager VIP', 13, 1, 1, 0, '2023-10-21 06:45:35', 1),
(13, 3, 'Sales Area Manager', 26, 1, 1, 0, '2024-09-06 00:12:23', 1),
(14, 3, 'Center Manager', 6, 2, 2, 1, '2024-12-10 00:49:04', 1),
(15, 3, 'Center Coordinator', 19, 2, 2, 0, '2024-12-10 00:48:19', 1),
(16, 5, 'Branch Coordinator - MOI', 15, 3, 3, 1, '2024-09-01 10:35:01', 1),
(17, 3, 'Project Coordinator Australia & New Zealand', 28, 0, 0, 0, '2025-01-05 22:01:31', 1),
(18, 2, 'Branch Supervisor & Project Leader China', 4, 0, 0, 0, '2024-09-01 10:37:51', 0),
(19, 2, 'Vpro Sales', 13, 1, 1, 0, '2023-10-21 06:14:25', 1),
(20, 4, 'Admissions Consultant - Manyar', 6, 1, 1, 0, '2023-10-21 06:18:12', 2),
(21, 6, 'Marketing Executive', 19, 1, 2, 0, '2023-10-21 06:17:06', 1),
(22, 9, 'Coporate Creative Developer', 11, 1, 1, 0, '2023-08-29 03:30:44', 0),
(23, 9, 'Creative Team Supervisor', 11, 1, 1, 1, '2024-09-01 10:39:43', 0),
(24, 9, 'Sosmed Specialist', 11, 1, 1, 0, '2022-06-25 16:19:03', 0),
(25, 4, 'Admission Consultant', 6, 2, 2, 0, '2023-10-21 06:18:12', 2),
(26, 2, 'Student Consultant (SC)', 19, 0, 0, 0, '2024-09-01 10:25:19', 0),
(27, 2, 'Internship', 5, 2, 2, 0, '2022-06-25 16:19:18', 0),
(28, 9, 'Head of Operation', 12, 1, 1, 0, '2023-10-21 06:20:30', 4),
(29, 9, 'System & Operation Manager', 12, 1, 1, 0, '2023-10-21 06:20:30', 4),
(30, 8, 'Academic Manager', 13, 1, 1, 0, '2022-06-25 16:19:35', 0),
(31, 8, 'Full Time Teacher (FTT)', 34, 1, 1, 0, '2024-09-01 10:15:39', 0),
(32, 8, 'Academic Curriculum & Training Developer', 22, 1, 1, 0, '2023-09-12 20:47:13', 0),
(33, 8, 'Learning Center Supervisor', 22, 1, 0, 0, '2023-09-12 20:45:11', 0),
(34, 8, 'Full Time Teacher - MOI', 29, 1, 0, 1, '2024-09-01 10:18:10', 0),
(35, 8, 'Learning Center Instructor', 13, 1, 0, 1, '2024-09-01 10:34:01', 0),
(36, 9, 'IT Coordinator', 14, 1, 1, 0, '2022-06-25 16:19:49', 0),
(37, 9, 'IT Staff', 14, 1, 1, 0, '2022-06-25 16:19:50', 0),
(38, 9, 'Human Resources & Training Manager', 14, 1, 1, 0, '2023-08-29 03:31:07', 0),
(39, 9, 'Recruitment & Legal Staff', 14, 1, 1, 1, '2025-01-07 23:14:38', 4),
(40, 9, 'A&O Administrative Assistant', 14, 1, 1, 1, '2023-09-12 19:19:07', 0),
(41, 9, 'Administrative Assistant', 31, 1, 0, 0, '2024-09-06 00:03:09', 0),
(42, 9, 'Maintenance Spv', 17, 1, 1, 0, '2022-06-25 16:20:07', 0),
(43, 9, 'GA Team', 18, 1, 0, 1, '2024-04-03 02:12:46', 4),
(44, 8, 'Full Time Teacher', 13, 1, 0, 1, '2022-06-25 16:20:20', 0),
(45, 9, 'GA & Driver Staff', 3, 1, 0, 0, '2024-09-06 00:05:50', 4),
(46, 9, 'GA Supervisor', 14, 1, 1, 0, '2024-09-06 00:06:24', 4),
(47, 8, 'Full Time Teacher - Manyar', 3, 1, 0, 1, '2024-09-01 10:18:12', 0),
(48, 6, 'Marketing Coordinator', 19, 1, 0, 0, '2023-10-21 06:17:06', 1),
(49, 8, 'Part Time Teacher (PTT)', 34, 1, 0, 0, '2024-09-01 10:18:43', 0),
(50, 9, 'Freelancer', 5, 0, 0, 0, '2022-06-29 02:22:42', 0),
(52, 9, 'HRD Manager', 15, 1, 1, 1, '2023-10-21 06:20:50', 4),
(53, 9, 'HR staff and Administration', 14, 1, 1, 1, '2025-01-07 23:13:41', 0),
(54, 9, 'HRT Manager', 14, 1, 1, 1, '2025-01-07 23:13:43', 0),
(55, 9, 'Sales Supervisor - MOI', 15, 0, 0, 1, '2024-09-01 10:38:47', 1),
(56, 9, 'Accounting Supervisor', 2, 0, 0, 0, '2023-10-30 22:04:39', 3),
(57, 9, 'City Sales & Marketing Representative', 12, 0, 0, 0, '2025-03-02 22:08:36', 0),
(58, 9, 'Marketing Excecutive - Surabaya', 7, 0, 0, 0, '2023-10-21 06:17:06', 1),
(59, 9, 'Senior Admission Consultant', 6, 0, 0, 0, '2023-10-21 06:18:12', 2),
(60, 9, 'Online Program Development', 22, 0, 0, 0, '2023-09-12 20:46:30', 0),
(61, 9, 'VPro Manager', 13, 0, 0, 0, '2022-09-13 03:12:55', 0),
(62, 4, 'Sales Support & Training Coordinator', 5, 0, 0, 0, '2023-10-21 06:14:25', 1),
(63, 9, 'HR Officer', 14, 0, 0, 0, '2023-12-20 19:28:14', 0),
(64, 9, 'Admission Consultant - MOI', 6, 0, 0, 0, '2023-10-21 06:18:12', 2),
(65, 9, 'Academic & Operation Administrative', 22, 0, 0, 0, '2024-08-09 00:52:29', 4),
(66, 9, 'Corporate Creative Developer', 11, 0, 0, 0, '2022-09-13 03:20:17', 0),
(67, 5, 'Project Manager', 11, 0, 0, 0, '2023-02-28 02:29:29', 0),
(68, 9, 'Account Receivable', 2, 0, 0, 0, '2023-10-30 22:05:49', 3),
(69, 9, 'Recruitment Officer', 14, 0, 0, 1, '2025-01-07 23:14:25', 0),
(70, 9, 'Digital Marketing Strategic', 11, 0, 0, 0, '2023-10-21 06:17:06', 1),
(71, NULL, 'Account Executive Vpro', 19, 0, 0, 0, '2023-10-30 22:06:01', 3),
(72, 9, 'East Indo General Affair Coordinator', 14, 0, 0, 0, '2022-12-07 19:57:10', 0),
(73, 9, 'Administrative Assistant - Manyar', 3, 0, 0, 1, '2024-09-06 00:05:28', 0),
(74, 9, 'Administrative Assistant - WP', 9, 0, 0, 1, '2024-09-06 00:05:29', 0),
(75, 9, 'GA Staff', 9, 0, 0, 0, '2024-09-06 00:06:09', 4),
(76, 9, 'Administrative Assistant - Bali', 10, 0, 0, 1, '2024-09-06 00:05:32', 0),
(77, 9, 'GA Staff - Bali', 10, 0, 0, 1, '2024-09-06 00:06:12', 4),
(78, 9, 'Administrative Assistant - BDG', 1, 0, 0, 1, '2024-09-06 00:05:33', 0),
(79, 9, 'GA & Driver Staff - BDG', 1, 0, 0, 1, '2024-09-06 00:06:13', 4),
(80, 9, 'GA & Driver Staff - Jakarta', 31, 0, 0, 1, '2024-09-06 00:06:15', 4),
(81, 9, 'SC Supervisor - Manyar', 3, 0, 0, 1, '2024-09-01 10:38:49', 0),
(82, 9, 'SC Supervisor - WP', 9, 0, 0, 1, '2024-09-01 10:38:50', 0),
(83, 9, 'Student Consultant - WP', 9, 0, 0, 1, '2024-09-01 10:33:00', 0),
(84, 9, 'Student Consultant - Bali', 10, 0, 0, 1, '2024-09-01 10:33:02', 0),
(85, 9, 'Student Consultant - MOI', 15, 0, 0, 1, '2024-09-01 10:33:04', 0),
(86, 9, 'Student Consultant - PIK', 27, 0, 0, 1, '2024-09-01 10:33:06', 0),
(87, 9, 'Student Consultant - SOHO', 17, 0, 0, 1, '2024-09-01 10:33:07', 0),
(88, 9, 'Student Consultant - BDG', 1, 0, 0, 1, '2024-09-01 10:33:42', 0),
(89, NULL, 'Semi Full Time Teacher (SFT)', 34, 0, 0, 0, '2024-09-01 10:15:24', 0),
(90, 1, 'Student Consultant - PIM', 16, 0, 0, 1, '2024-09-01 10:33:44', 0),
(91, 3, 'Marketing Relations  Officer', 11, 0, 0, 0, '2024-09-22 07:29:34', 1),
(92, 2, 'Administrative Business Partner', 11, 0, 0, 0, '2023-02-28 02:24:42', 0),
(93, 2, 'Administrative Business Partner', 11, 0, 0, 1, '2023-02-28 02:30:17', 0),
(94, 5, 'USA Specialist manager', 28, 0, 0, 1, '2024-09-05 22:21:07', 0),
(95, 3, 'Branch Supervisor', 19, 0, 0, 0, '2024-09-01 10:34:58', 0),
(96, 2, 'Social Media Strategist', 11, 0, 0, 0, '2023-06-22 02:31:28', 0),
(97, 4, 'Academic & Operation Coordinator', 22, 0, 0, 0, '2023-10-21 06:20:30', 4),
(98, 3, 'Project Leader Hospitality', 4, 0, 0, 0, '2024-09-01 10:22:29', 0),
(99, 4, 'System & Product Development Coordinator', 28, 0, 0, 0, '2023-09-13 23:47:27', 0),
(100, 2, 'Full Time Teacher - Bali', 10, 0, 0, 1, '2024-09-01 10:18:15', 0),
(101, NULL, 'Semi Full Time Teacher - Malang', 22, 0, 0, 1, '2024-09-01 10:18:17', 0),
(102, 2, 'Student Consultant (SC SFT)', 19, 0, 0, 0, '2024-09-01 10:31:06', 0),
(103, NULL, 'VIP Student Consultant - Manyar', 30, 0, 0, 1, '2024-09-01 10:33:40', 0),
(104, NULL, 'Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-09-01 10:18:31', 0),
(105, NULL, 'Semi Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-09-01 10:18:28', 0),
(106, 3, 'Administrative Supervisor', 14, 0, 0, 0, '2024-08-09 00:48:47', 0),
(107, 4, 'Finance Coordinator', 2, 0, 0, 0, '2023-10-21 06:19:01', 3),
(108, 1, 'Content Creator', 11, 0, 0, 0, '2023-10-01 21:34:25', 0),
(109, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:03:43', 3),
(110, 4, 'VIP Sales Coordinator', 32, 0, 0, 0, '2023-11-28 00:04:09', NULL),
(111, 3, 'Center Supervisor', 19, 0, 0, 0, '2024-09-01 10:35:50', NULL),
(112, 2, 'Sales Relation Officer - Manyar', 32, 0, 0, 0, '2023-11-28 00:04:26', NULL),
(113, 1, 'LIU Accounting Staff', 2, 0, 0, 0, '2024-01-11 19:41:47', NULL),
(114, 2, 'Recruiter', 14, 0, 0, 1, '2024-09-06 00:13:31', NULL),
(115, 4, 'HR Coordinator', 14, 0, 0, 0, '2023-12-20 23:37:19', NULL),
(116, 2, 'Sales Relation Officer - Bali', 10, 0, 0, 0, '2024-01-02 22:14:41', NULL),
(117, 3, 'Branch Supervisor - Manyar', 3, 0, 0, 1, '2024-09-01 10:38:11', NULL),
(118, 2, 'USA Consultant Specialist', 17, 0, 0, 0, '2024-09-05 22:21:15', NULL),
(119, 4, 'Center Leader MOI & PIK', 4, 0, 0, 1, '2024-12-10 00:48:08', NULL),
(120, 2, 'Tax & Accounting Staff', 2, 0, 0, 0, '2024-04-03 02:07:25', NULL),
(121, 2, 'Graphic Designer', 11, 0, 0, 0, '2024-04-03 02:40:25', NULL),
(122, NULL, 'Center Supervisor ', 19, 0, 0, 1, '2024-09-01 10:37:02', NULL),
(123, NULL, 'Full Time Teacher - WP', 33, 0, 0, 1, '2024-09-01 10:18:26', NULL),
(124, NULL, 'HR Operations & System Support', 14, 0, 0, 0, '2025-01-07 23:13:20', NULL),
(125, NULL, 'Marketing Relations Coordinator', 11, 0, 0, 0, '2024-08-23 02:59:39', NULL),
(126, NULL, 'Academic & Operation Supervisor', 34, 0, 0, 0, '2024-09-01 10:14:06', NULL),
(127, NULL, 'Student Consultant (SC Intern)', 19, 0, 0, 0, '2024-09-01 22:17:58', NULL),
(128, NULL, 'Project Manager (Competition Prep. & VGo)', 34, 0, 0, 0, '2024-09-05 03:25:53', NULL),
(129, NULL, 'HR Intern', 14, 0, 0, 0, '2024-09-05 03:26:26', NULL),
(130, NULL, 'Business Development Intern', 35, 0, 0, 0, '2024-09-05 03:26:42', NULL),
(131, NULL, 'USA Manager', 28, 0, 0, 0, '2024-09-06 00:11:55', NULL),
(132, NULL, 'HR Recruitment & Development Officer', 14, 0, 0, 0, '2025-01-07 23:14:35', NULL),
(133, NULL, 'Admission Consultant (AC Intern)', 6, 0, 0, 0, '2024-09-16 22:53:09', NULL),
(134, NULL, 'Marketing Intern', 11, 0, 0, 0, '2024-10-07 22:58:41', NULL),
(135, NULL, 'Student Consultant VIP (SC VIP)', 19, 0, 0, 0, '2024-11-04 19:41:34', NULL),
(136, NULL, 'Social Media Officer', 11, 0, 0, 0, '2024-11-04 20:13:19', NULL),
(137, NULL, 'Sales Operational Manager', 0, 0, 0, 0, '2024-11-06 20:31:16', NULL),
(138, NULL, 'VIP Coordinator (Sales & Marketing)', 0, 0, 0, 0, '2024-12-10 00:35:55', NULL),
(139, NULL, 'Admission Support', 0, 0, 0, 0, '2025-01-07 22:15:17', NULL),
(140, NULL, 'Telemarketing Intern', 0, 0, 0, 0, '2025-02-01 21:47:17', NULL),
(141, NULL, 'SEO & Web Specialist', 0, 0, 0, 0, '2025-02-07 22:58:08', NULL),
(142, NULL, 'Champions Academy Intern', 0, 0, 0, 0, '2025-04-28 23:20:44', NULL),
(143, NULL, 'Training Support Intern', 0, 0, 0, 0, '2025-05-02 02:38:09', NULL),
(144, NULL, 'Graphic Designer Intern', 0, 0, 0, 0, '2025-05-08 08:47:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_position_20240806`
--

CREATE TABLE `master_position_20240806` (
  `id` int(11) NOT NULL,
  `job` int(11) DEFAULT NULL,
  `position_name` varchar(255) NOT NULL,
  `position_department` int(11) NOT NULL,
  `position_office_status` int(11) NOT NULL,
  `position_office_placement` int(11) NOT NULL,
  `is_void` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `group_sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_position_20240806`
--

INSERT INTO `master_position_20240806` (`id`, `job`, `position_name`, `position_department`, `position_office_status`, `position_office_placement`, `is_void`, `timestamp`, `group_sort`) VALUES
(0, 0, 'Root', 0, 0, 0, 0, '2022-06-25 16:16:13', 0),
(1, 0, 'Founder dan CEO', 5, 1, 1, 0, '2023-10-21 06:44:46', 4),
(2, 9, 'Mgmt Support & Devlp.', 5, 1, 1, 1, '2024-07-26 02:18:49', 4),
(3, 7, 'Head of Finance and Accounting', 2, 1, 7, 0, '2023-10-21 06:19:01', 3),
(4, 7, 'Finance Supervisor', 2, 1, 1, 0, '2023-10-21 06:19:01', 3),
(5, 7, 'Tax & Accounting Coordinator', 2, 1, 1, 0, '2023-10-21 06:43:50', 3),
(6, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:06:22', 3),
(7, 8, 'AR staff', 4, 1, 1, 1, '2024-07-26 01:16:34', 3),
(8, 6, 'Head of Business Strategic', 5, 1, 1, 0, '2024-07-26 02:19:07', 1),
(9, 5, 'Admission Manager', 6, 1, 1, 0, '2023-10-21 06:18:12', 2),
(10, 2, 'Sales Support & Development Manager', 28, 1, 1, 0, '2024-08-05 19:07:48', 1),
(11, 6, 'Marketing Manager', 11, 1, 1, 0, '2024-06-25 23:50:15', 1),
(12, 3, 'Corporate Manager VIP', 13, 1, 1, 0, '2023-10-21 06:45:35', 1),
(13, 3, 'Sales Area Manager', 19, 1, 1, 0, '2024-07-26 01:39:59', 1),
(14, 3, 'Center Manager', 19, 2, 2, 0, '2024-07-26 01:39:01', 1),
(15, 3, 'Center Leader', 19, 2, 2, 0, '2024-07-26 01:44:01', 1),
(16, 5, 'Branch Coordinator - MOI', 15, 3, 3, 1, '2024-07-26 01:47:09', 1),
(17, 3, 'Project Leader Australia & New Zealand', 7, 0, 0, 0, '2024-07-26 01:30:29', 1),
(18, 2, 'Branch Supervisor SOHO & Project Leader China', 19, 0, 0, 0, '2024-07-26 01:16:54', 0),
(19, 2, 'VPro Sales', 13, 1, 1, 0, '2024-07-26 00:44:23', 1),
(20, 4, 'Admissions Consultant - Manyar', 6, 1, 1, 1, '2024-07-26 01:02:53', 2),
(21, 6, 'Marketing Executive', 19, 1, 2, 0, '2023-10-21 06:17:06', 1),
(22, 9, 'Coporate Creative Developer', 11, 1, 1, 0, '2023-08-29 03:30:44', 0),
(23, 9, 'Creative Team Supervisor', 11, 1, 1, 0, '2022-06-25 16:19:05', 0),
(24, 9, 'Sosmed Specialist', 11, 1, 1, 0, '2022-06-25 16:19:03', 0),
(25, 4, 'Admission Consultant', 6, 2, 2, 0, '2023-10-21 06:18:12', 2),
(26, 2, 'Student Consultant', 19, 0, 0, 0, '2024-07-26 01:17:48', 0),
(27, 2, 'Internship', 5, 2, 2, 1, '2024-07-26 01:15:40', 0),
(28, 9, 'Head of Operation', 12, 1, 1, 1, '2024-07-26 01:42:37', 4),
(29, 9, 'System & Operation Manager', 12, 1, 1, 1, '2024-07-26 01:42:39', 4),
(30, 8, 'Academic Manager', 13, 1, 1, 0, '2022-06-25 16:19:35', 0),
(31, 8, 'Full Time Teacher (FTT)', 13, 1, 1, 0, '2024-07-26 00:45:19', 0),
(32, 8, 'Training and Product Development Coordinator', 13, 1, 1, 0, '2024-07-26 03:05:53', 0),
(33, 8, 'Learning Center Supervisor', 13, 1, 0, 0, '2024-07-26 03:06:24', 0),
(34, 8, 'Full Time Teacher - MOI', 29, 1, 0, 1, '2024-07-26 00:49:32', 0),
(35, 8, 'Learning Center Instructor', 13, 1, 0, 1, '2024-07-26 01:45:10', 0),
(36, 9, 'IT Coordinator', 14, 1, 1, 0, '2022-06-25 16:19:49', 0),
(37, 9, 'IT Staff', 14, 1, 1, 0, '2022-06-25 16:19:50', 0),
(38, 9, 'Human Resources & Training Manager', 14, 1, 1, 0, '2023-08-29 03:31:07', 0),
(39, 9, 'Recruitment & Legal Staff', 14, 1, 1, 1, '2024-07-26 01:56:41', 4),
(40, 9, 'A&O Administrative Assistant', 14, 1, 1, 1, '2023-09-12 19:19:07', 0),
(41, 9, 'Administrative Assistant', 33, 1, 0, 0, '2024-07-26 01:55:28', 0),
(42, 9, 'Maintenance Spv', 17, 1, 1, 0, '2022-06-25 16:20:07', 0),
(43, 9, 'GA Team', 18, 1, 0, 1, '2024-04-03 02:12:46', 4),
(44, 8, 'Full Time Teacher', 13, 1, 0, 1, '2022-06-25 16:20:20', 0),
(45, 9, 'GA & Driver Staff', 33, 1, 0, 0, '2024-07-26 01:58:38', 4),
(46, 9, 'GA Leader', 14, 1, 1, 0, '2023-10-21 06:22:46', 4),
(47, 8, 'Full Time Teacher - Manyar', 30, 1, 0, 1, '2024-07-26 00:49:41', 0),
(48, 6, 'Marketing Coordinator', 19, 1, 0, 0, '2023-10-21 06:17:06', 1),
(49, 8, 'Part Time Teacher (PTT)', 13, 1, 0, 0, '2022-06-25 16:20:33', 0),
(50, 9, 'Freelancer', 5, 0, 0, 1, '2024-07-26 01:15:38', 0),
(52, 9, 'HRD Manager', 15, 1, 1, 1, '2023-10-21 06:20:50', 4),
(53, 9, 'HR staff and Administration', 14, 1, 1, 1, '2024-07-26 01:56:18', 0),
(54, 9, 'HRT Manager', 14, 1, 1, 1, '2024-07-26 01:56:20', 0),
(55, 9, 'Sales Supervisor', 15, 0, 0, 1, '2024-07-26 01:40:37', 1),
(56, 9, 'Accounting Supervisor', 2, 0, 0, 0, '2023-10-30 22:04:39', 3),
(57, 9, 'Vista City Representative', 19, 0, 0, 0, '2024-07-26 01:42:00', 0),
(58, 9, 'Marketing Excecutive', 19, 0, 0, 0, '2024-07-26 01:15:04', 1),
(59, 9, 'Senior Admission Consultant', 6, 0, 0, 0, '2023-10-21 06:18:12', 2),
(60, 9, 'Online Program Development', 22, 0, 0, 0, '2023-09-12 20:46:30', 0),
(61, 9, 'VPro Manager', 13, 0, 0, 0, '2022-09-13 03:12:55', 0),
(62, 4, 'Sales Support & Training Coordinator', 19, 0, 0, 0, '2024-07-26 01:15:15', 1),
(63, 9, 'HR Officer', 14, 0, 0, 0, '2023-12-20 19:28:14', 0),
(64, 9, 'Admission Consultant - MOI', 6, 0, 0, 1, '2024-07-26 01:02:51', 2),
(65, 9, 'Academic & Operation Administrative', 14, 0, 0, 0, '2023-10-21 06:20:30', 4),
(66, 9, 'Corporate Creative Developer', 11, 0, 0, 0, '2022-09-13 03:20:17', 0),
(67, 5, 'Project Manager', 11, 0, 0, 0, '2023-02-28 02:29:29', 0),
(68, 9, 'Account Receivable', 2, 0, 0, 0, '2023-10-30 22:05:49', 3),
(69, 9, 'HR Recruitment Officer', 14, 0, 0, 0, '2024-07-26 01:56:47', 0),
(70, 9, 'Digital Marketing Strategic', 11, 0, 0, 0, '2023-10-21 06:17:06', 1),
(71, NULL, 'Account Executive Vpro', 19, 0, 0, 0, '2023-10-30 22:06:01', 3),
(72, 9, 'East Indo General Affair Coordinator', 14, 0, 0, 1, '2024-07-26 01:57:53', 0),
(73, 9, 'Administrative Assistant - Manyar', 3, 0, 0, 1, '2024-07-26 01:52:13', 0),
(74, 9, 'Administrative Assistant - WP', 9, 0, 0, 1, '2024-07-26 01:52:15', 0),
(75, 9, 'GA Staff', 33, 0, 0, 0, '2024-07-26 01:58:54', 4),
(76, 9, 'Administrative Assistant - Bali', 10, 0, 0, 1, '2024-07-26 01:52:16', 0),
(77, 9, 'GA Staff - Bali', 10, 0, 0, 1, '2024-07-26 02:01:09', 4),
(78, 9, 'Administrative Assistant - BDG', 1, 0, 0, 1, '2024-07-26 01:52:17', 0),
(79, 9, 'GA & Driver Staff - BDG', 1, 0, 0, 1, '2024-07-26 02:01:12', 4),
(80, 9, 'GA & Driver Staff - Jakarta', 31, 0, 0, 1, '2024-07-26 02:01:14', 4),
(81, 9, 'SC Supervisor - Manyar', 3, 0, 0, 0, '2022-12-07 21:18:09', 0),
(82, 9, 'SC Supervisor - WP', 9, 0, 0, 0, '2022-12-07 22:34:18', 0),
(83, 9, 'Student Consultant - WP', 9, 0, 0, 1, '2024-07-26 01:27:32', 0),
(84, 9, 'Student Consultant - Bali', 10, 0, 0, 1, '2024-07-26 01:27:34', 0),
(85, 9, 'Student Consultant - MOI', 15, 0, 0, 1, '2024-07-26 01:27:35', 0),
(86, 9, 'Student Consultant - PIK', 27, 0, 0, 1, '2024-07-26 01:27:37', 0),
(87, 9, 'Student Consultant - SOHO', 17, 0, 0, 1, '2024-07-26 01:27:38', 0),
(88, 9, 'Student Consultant - BDG', 1, 0, 0, 1, '2024-07-26 01:27:40', 0),
(89, NULL, 'Semi Full Time Teacher (SFT)', 13, 0, 0, 0, '2024-07-26 00:45:39', 0),
(90, 1, 'Student Consultant - PIM', 16, 0, 0, 1, '2024-07-26 01:27:42', 0),
(91, 3, 'Marketing Relation Executive', 11, 0, 0, 0, '2023-10-21 06:17:06', 1),
(92, 2, 'Administrative Business Partner', 11, 0, 0, 0, '2023-02-28 02:24:42', 0),
(93, 2, 'Administrative Business Partner', 11, 0, 0, 1, '2023-02-28 02:30:17', 0),
(94, 5, 'USA Specialist manager', 7, 0, 0, 0, '2024-07-26 01:29:56', 0),
(95, 3, 'Branch Supervisor', 19, 0, 0, 0, '2024-07-26 01:47:24', 0),
(96, 2, 'Social Media Strategist', 11, 0, 0, 0, '2023-06-22 02:31:28', 0),
(97, 4, 'Academic & Operation Coordinator', 13, 0, 0, 0, '2024-07-26 02:57:22', 4),
(98, 3, 'Hospitality Coordinator', 7, 0, 0, 0, '2024-07-26 01:25:51', 0),
(99, 4, 'System & Product Development Coordinator', 7, 0, 0, 0, '2024-07-26 01:30:01', 0),
(100, 2, 'Full Time Teacher - Bali', 10, 0, 0, 1, '2024-07-26 00:50:11', 0),
(101, NULL, 'Semi Full Time Teacher - Malang', 21, 0, 0, 1, '2024-07-26 00:50:02', 0),
(102, 2, 'Student Consultant (SFT)', 19, 0, 0, 0, '2024-07-26 01:27:06', 0),
(103, NULL, 'VIP Student Consultant - Manyar', 30, 0, 0, 0, '2023-09-19 04:23:59', 0),
(104, NULL, 'VIP Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-07-26 00:49:59', 0),
(105, NULL, 'VIP Semi Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-07-26 00:49:57', 0),
(106, 3, 'Administrative Supervisor', 14, 0, 0, 0, '2024-06-06 23:25:15', 0),
(107, 4, 'Finance Coordinator', 2, 0, 0, 0, '2023-10-21 06:19:01', 3),
(108, 1, 'Content Creator', 11, 0, 0, 0, '2023-10-01 21:34:25', 0),
(109, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:03:43', 3),
(110, 4, 'VIP Sales Coordinator', 32, 0, 0, 0, '2023-11-28 00:04:09', NULL),
(111, 3, 'Branch Supervisor - PIK', 27, 0, 0, 1, '2024-07-26 01:47:51', NULL),
(112, 2, 'Sales Relation Officer (SRO)', 32, 0, 0, 0, '2024-07-26 01:40:21', NULL),
(113, 1, 'LIU Accounting Staff', 2, 0, 0, 0, '2024-01-11 19:41:47', NULL),
(114, 2, 'Recruiter', 14, 0, 0, 1, '2024-07-26 01:56:30', NULL),
(115, 4, 'HR Coordinator', 14, 0, 0, 0, '2023-12-20 23:37:19', NULL),
(116, 2, 'Sales Relation Officer - Bali', 10, 0, 0, 1, '2024-07-26 01:41:05', NULL),
(117, 3, 'Branch Supervisor - Manyar', 3, 0, 0, 1, '2024-07-26 01:46:42', NULL),
(118, 2, 'USA Consultant Specialist', 19, 0, 0, 0, '2024-07-26 02:15:33', NULL),
(119, 4, 'Center Leader MOI & PIK', 19, 0, 0, 1, '2024-07-26 01:44:45', NULL),
(120, 2, 'Tax & Accounting Staff', 2, 0, 0, 0, '2024-04-03 02:07:25', NULL),
(121, 2, 'Graphic Designer', 11, 0, 0, 0, '2024-04-03 02:40:25', NULL),
(122, 3, 'Center Supervisor', 19, 0, 0, 0, '2024-07-26 01:45:16', NULL),
(123, 3, 'Academic & Operation Supervisor', 13, 0, 0, 0, '2024-07-26 02:57:47', NULL),
(124, 5, 'Marketing Manager', 11, 0, 0, 0, '2024-06-06 22:53:18', NULL),
(125, 3, 'Branch Supervisor - WP', 9, 0, 0, 1, '2024-07-26 01:46:43', NULL),
(126, NULL, 'HR Operations & Development Officer', 14, 0, 0, 0, '2024-07-27 00:35:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_position_bu`
--

CREATE TABLE `master_position_bu` (
  `id` int(11) NOT NULL,
  `job` int(11) DEFAULT NULL,
  `position_name` varchar(255) NOT NULL,
  `position_department` int(11) NOT NULL,
  `position_office_status` int(11) NOT NULL,
  `position_office_placement` int(11) NOT NULL,
  `is_void` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `group_sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_position_bu`
--

INSERT INTO `master_position_bu` (`id`, `job`, `position_name`, `position_department`, `position_office_status`, `position_office_placement`, `is_void`, `timestamp`, `group_sort`) VALUES
(0, 0, 'Root', 0, 0, 0, 0, '2022-06-25 16:16:13', 0),
(1, 0, 'Founder dan CEO', 5, 1, 1, 0, '2023-10-21 06:44:46', 4),
(2, 9, 'Mgmt Support & Devlp.', 5, 1, 1, 1, '2024-07-26 02:18:49', 4),
(3, 7, 'Head of Finance and Accounting', 2, 1, 7, 0, '2023-10-21 06:19:01', 3),
(4, 7, 'Finance Supervisor', 2, 1, 1, 0, '2023-10-21 06:19:01', 3),
(5, 7, 'Tax & Accounting Coordinator', 2, 1, 1, 0, '2023-10-21 06:43:50', 3),
(6, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:06:22', 3),
(7, 8, 'AR staff', 4, 1, 1, 1, '2024-07-26 01:16:34', 3),
(8, 6, 'Head of Business Strategic', 5, 1, 1, 0, '2024-07-26 02:19:07', 1),
(9, 5, 'Admission Manager', 6, 1, 1, 0, '2023-10-21 06:18:12', 2),
(10, 2, 'Sales Support & Development Manager', 28, 1, 1, 0, '2024-08-05 19:07:48', 1),
(11, 6, 'Marketing Manager', 11, 1, 1, 0, '2024-06-25 23:50:15', 1),
(12, 3, 'Corporate Manager VIP', 13, 1, 1, 0, '2023-10-21 06:45:35', 1),
(13, 3, 'Sales Area Manager', 26, 1, 1, 0, '2024-08-05 19:30:57', 1),
(14, 3, 'Center Manager', 19, 2, 2, 0, '2024-07-26 01:39:01', 1),
(15, 3, 'Center Leader - Bandung', 1, 2, 2, 0, '2024-08-05 20:21:05', 1),
(16, 5, 'Branch Coordinator - MOI', 15, 3, 3, 1, '2024-07-26 01:47:09', 1),
(17, 3, 'Project Leader Australia & New Zealand', 28, 0, 0, 0, '2024-08-05 19:11:36', 1),
(18, 2, 'Branch Supervisor SOHO & Project Leader China', 4, 0, 0, 0, '2024-08-05 19:32:44', 0),
(19, 2, 'VPro Sales', 13, 1, 1, 0, '2024-07-26 00:44:23', 1),
(20, 4, 'Admissions Consultant - Manyar', 6, 1, 1, 1, '2024-07-26 01:02:53', 2),
(21, 6, 'Marketing Executive', 19, 1, 2, 0, '2023-10-21 06:17:06', 1),
(22, 9, 'Coporate Creative Developer', 11, 1, 1, 0, '2023-08-29 03:30:44', 0),
(23, 9, 'Creative Team Supervisor', 11, 1, 1, 0, '2022-06-25 16:19:05', 0),
(24, 9, 'Sosmed Specialist', 11, 1, 1, 0, '2022-06-25 16:19:03', 0),
(25, 4, 'Admission Consultant', 6, 2, 2, 0, '2023-10-21 06:18:12', 2),
(26, 2, 'Student Consultant', 19, 0, 0, 0, '2024-07-26 01:17:48', 0),
(27, 2, 'Internship', 5, 2, 2, 1, '2024-07-26 01:15:40', 0),
(28, 9, 'Head of Operation', 12, 1, 1, 1, '2024-07-26 01:42:37', 4),
(29, 9, 'System & Operation Manager', 12, 1, 1, 1, '2024-07-26 01:42:39', 4),
(30, 8, 'Academic Manager', 13, 1, 1, 0, '2022-06-25 16:19:35', 0),
(31, 8, 'Full Time Teacher (FTT)', 13, 1, 1, 0, '2024-07-26 00:45:19', 0),
(32, 8, 'Training and Product Development Coordinator', 22, 1, 1, 0, '2024-08-05 19:26:48', 0),
(33, 8, 'Learning Center Supervisor', 22, 1, 0, 0, '2024-08-05 19:28:10', 0),
(34, 8, 'Full Time Teacher - MOI', 29, 1, 0, 1, '2024-07-26 00:49:32', 0),
(35, 8, 'Learning Center Instructor', 13, 1, 0, 1, '2024-07-26 01:45:10', 0),
(36, 9, 'IT Coordinator', 14, 1, 1, 0, '2022-06-25 16:19:49', 0),
(37, 9, 'IT Staff', 14, 1, 1, 0, '2022-06-25 16:19:50', 0),
(38, 9, 'Human Resources & Training Manager', 14, 1, 1, 0, '2023-08-29 03:31:07', 0),
(39, 9, 'Recruitment & Legal Staff', 14, 1, 1, 1, '2024-07-26 01:56:41', 4),
(40, 9, 'A&O Administrative Assistant', 14, 1, 1, 1, '2023-09-12 19:19:07', 0),
(41, 9, 'Administrative Assistant - Jakarta', 31, 1, 0, 0, '2024-08-05 20:58:53', 0),
(42, 9, 'Maintenance Spv', 17, 1, 1, 0, '2022-06-25 16:20:07', 0),
(43, 9, 'GA Team', 18, 1, 0, 1, '2024-04-03 02:12:46', 4),
(44, 8, 'Full Time Teacher', 13, 1, 0, 1, '2022-06-25 16:20:20', 0),
(45, 9, 'GA & Driver Staff', 3, 1, 0, 0, '2024-08-05 21:11:44', 4),
(46, 9, 'GA Leader', 14, 1, 1, 0, '2023-10-21 06:22:46', 4),
(47, 8, 'Full Time Teacher - Manyar', 30, 1, 0, 1, '2024-07-26 00:49:41', 0),
(48, 6, 'Marketing Coordinator', 19, 1, 0, 0, '2023-10-21 06:17:06', 1),
(49, 8, 'Part Time Teacher (PTT)', 13, 1, 0, 0, '2022-06-25 16:20:33', 0),
(50, 9, 'Freelancer', 5, 0, 0, 1, '2024-07-26 01:15:38', 0),
(52, 9, 'HRD Manager', 15, 1, 1, 1, '2023-10-21 06:20:50', 4),
(53, 9, 'HR staff and Administration', 14, 1, 1, 1, '2024-07-26 01:56:18', 0),
(54, 9, 'HRT Manager', 14, 1, 1, 1, '2024-07-26 01:56:20', 0),
(55, 9, 'Sales Supervisor', 15, 0, 0, 1, '2024-07-26 01:40:37', 1),
(56, 9, 'Accounting Supervisor', 2, 0, 0, 0, '2023-10-30 22:04:39', 3),
(57, 9, 'Vista City Representative', 19, 0, 0, 0, '2024-07-26 01:42:00', 0),
(58, 9, 'Marketing Excecutive', 19, 0, 0, 0, '2024-07-26 01:15:04', 1),
(59, 9, 'Senior Admission Consultant', 6, 0, 0, 0, '2023-10-21 06:18:12', 2),
(60, 9, 'Online Program Development', 22, 0, 0, 0, '2023-09-12 20:46:30', 0),
(61, 9, 'VPro Manager', 13, 0, 0, 0, '2022-09-13 03:12:55', 0),
(62, 4, 'Sales Support & Training Coordinator', 19, 0, 0, 0, '2024-07-26 01:15:15', 1),
(63, 9, 'HR Officer', 14, 0, 0, 0, '2023-12-20 19:28:14', 0),
(64, 9, 'Admission Consultant - MOI', 6, 0, 0, 0, '2024-08-05 21:38:10', 2),
(65, 9, 'Academic & Operation Administrative', 14, 0, 0, 0, '2023-10-21 06:20:30', 4),
(66, 9, 'Corporate Creative Developer', 11, 0, 0, 0, '2022-09-13 03:20:17', 0),
(67, 5, 'Project Manager', 11, 0, 0, 0, '2023-02-28 02:29:29', 0),
(68, 9, 'Account Receivable', 2, 0, 0, 0, '2023-10-30 22:05:49', 3),
(69, 9, 'HR Recruitment Officer', 14, 0, 0, 0, '2024-07-26 01:56:47', 0),
(70, 9, 'Digital Marketing Strategic', 11, 0, 0, 0, '2023-10-21 06:17:06', 1),
(71, NULL, 'Account Executive Vpro', 19, 0, 0, 0, '2023-10-30 22:06:01', 3),
(72, 9, 'East Indo General Affair Coordinator', 14, 0, 0, 1, '2024-07-26 01:57:53', 0),
(73, 9, 'Administrative Assistant - Manyar', 3, 0, 0, 0, '2024-08-05 21:00:19', 0),
(74, 9, 'Administrative Assistant - WP', 9, 0, 0, 0, '2024-08-05 21:00:19', 0),
(75, 9, 'GA Staff', 33, 0, 0, 0, '2024-07-26 01:58:54', 4),
(76, 9, 'Administrative Assistant - Bali', 10, 0, 0, 0, '2024-08-05 21:00:19', 0),
(77, 9, 'GA Staff - Bali', 10, 0, 0, 0, '2024-08-05 21:39:04', 4),
(78, 9, 'Administrative Assistant - BDG', 1, 0, 0, 0, '2024-08-05 21:39:33', 0),
(79, 9, 'GA & Driver Staff - BDG', 1, 0, 0, 0, '2024-08-05 21:10:48', 4),
(80, 9, 'GA & Driver Staff - Jakarta', 31, 0, 0, 0, '2024-08-05 21:10:48', 4),
(81, 9, 'SC Supervisor - Manyar', 3, 0, 0, 0, '2022-12-07 21:18:09', 0),
(82, 9, 'SC Supervisor - WP', 9, 0, 0, 0, '2022-12-07 22:34:18', 0),
(83, 9, 'Student Consultant - WP', 9, 0, 0, 0, '2024-08-05 22:37:06', 0),
(84, 9, 'Student Consultant - Bali', 10, 0, 0, 0, '2024-08-05 22:37:06', 0),
(85, 9, 'Student Consultant - MOI', 15, 0, 0, 9, '2024-08-05 22:37:06', 0),
(86, 9, 'Student Consultant - PIK', 27, 0, 0, 0, '2024-08-05 22:37:06', 0),
(87, 9, 'Student Consultant - SOHO', 17, 0, 0, 0, '2024-08-05 22:37:06', 0),
(88, 9, 'Student Consultant - BDG', 1, 0, 0, 0, '2024-08-05 22:37:06', 0),
(89, NULL, 'Semi Full Time Teacher (SFT)', 13, 0, 0, 0, '2024-07-26 00:45:39', 0),
(90, 1, 'Student Consultant - PIM', 16, 0, 0, 0, '2024-08-05 22:37:06', 0),
(91, 3, 'Marketing Relation Executive', 11, 0, 0, 0, '2023-10-21 06:17:06', 1),
(92, 2, 'Administrative Business Partner', 11, 0, 0, 0, '2023-02-28 02:24:42', 0),
(93, 2, 'Administrative Business Partner', 11, 0, 0, 1, '2023-02-28 02:30:17', 0),
(94, 5, 'USA Specialist manager', 7, 0, 0, 0, '2024-07-26 01:29:56', 0),
(95, 3, 'Branch Supervisor', 19, 0, 0, 0, '2024-07-26 01:47:24', 0),
(96, 2, 'Social Media Strategist', 11, 0, 0, 0, '2023-06-22 02:31:28', 0),
(97, 4, 'Academic & Operation Coordinator', 22, 0, 0, 0, '2024-08-05 19:25:25', 4),
(98, 3, 'Hospitality Coordinator', 4, 0, 0, 0, '2024-08-05 20:24:07', 0),
(99, 4, 'System & Product Development Coordinator', 7, 0, 0, 0, '2024-07-26 01:30:01', 0),
(100, 2, 'Full Time Teacher - Bali', 10, 0, 0, 0, '2024-08-05 22:37:06', 0),
(101, NULL, 'Semi Full Time Teacher - Malang', 21, 0, 0, 0, '2024-08-05 22:37:06', 0),
(102, 2, 'Student Consultant (SFT)', 19, 0, 0, 0, '2024-07-26 01:27:06', 0),
(103, NULL, 'VIP Student Consultant - Manyar', 30, 0, 0, 0, '2023-09-19 04:23:59', 0),
(104, NULL, 'VIP Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-07-26 00:49:59', 0),
(105, NULL, 'VIP Semi Full Time Teacher - Manyar', 30, 0, 0, 1, '2024-07-26 00:49:57', 0),
(106, 3, 'Administrative Supervisor', 14, 0, 0, 0, '2024-06-06 23:25:15', 0),
(107, 4, 'Finance Coordinator', 2, 0, 0, 0, '2023-10-21 06:19:01', 3),
(108, 1, 'Content Creator', 11, 0, 0, 0, '2023-10-01 21:34:25', 0),
(109, 7, 'Accounting Staff', 2, 1, 1, 0, '2023-10-30 22:03:43', 3),
(110, 4, 'VIP Sales Coordinator', 32, 0, 0, 0, '2023-11-28 00:04:09', NULL),
(111, 3, 'Branch Supervisor - PIK', 27, 0, 0, 1, '2024-07-26 01:47:51', NULL),
(112, 2, 'Sales Relation Officer (SRO)', 32, 0, 0, 0, '2024-07-26 01:40:21', NULL),
(113, 1, 'LIU Accounting Staff', 2, 0, 0, 0, '2024-01-11 19:41:47', NULL),
(114, 2, 'Recruiter', 14, 0, 0, 1, '2024-07-26 01:56:30', NULL),
(115, 4, 'HR Coordinator', 14, 0, 0, 0, '2023-12-20 23:37:19', NULL),
(116, 2, 'Sales Relation Officer - Bali', 10, 0, 0, 1, '2024-07-26 01:41:05', NULL),
(117, 3, 'Branch Supervisor - Manyar', 3, 0, 0, 1, '2024-07-26 01:46:42', NULL),
(118, 2, 'USA Consultant Specialist', 19, 0, 0, 0, '2024-07-26 02:15:33', NULL),
(119, 4, 'Center Leader MOI & PIK', 4, 0, 0, 0, '2024-08-05 20:21:34', NULL),
(120, 2, 'Tax & Accounting Staff', 2, 0, 0, 0, '2024-04-03 02:07:25', NULL),
(121, 2, 'Graphic Designer', 11, 0, 0, 0, '2024-04-03 02:40:25', NULL),
(122, 3, 'Center Supervisor -  Manyar', 3, 0, 0, 0, '2024-08-05 21:22:35', NULL),
(123, 3, 'Academic & Operation Supervisor', 22, 0, 0, 0, '2024-08-05 19:29:15', NULL),
(124, 5, 'Marketing Manager', 11, 0, 0, 0, '2024-06-06 22:53:18', NULL),
(125, 3, 'Branch Supervisor - WP', 9, 0, 0, 1, '2024-07-26 01:46:43', NULL),
(126, NULL, 'HR Operations & Development Officer', 14, 0, 0, 0, '2024-07-27 00:35:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_template`
--

CREATE TABLE `master_template` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `core_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `definition_id` int(11) NOT NULL,
  `objectives` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `technical` int(11) NOT NULL,
  `general` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `key_result` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `template_type` varchar(50) NOT NULL,
  `leadership` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_template`
--

INSERT INTO `master_template` (`id`, `position_id`, `core_id`, `area_id`, `definition_id`, `objectives`, `department`, `division`, `technical`, `general`, `weight`, `key_result`, `unit`, `template_type`, `leadership`, `created_at`) VALUES
(62, 14, 10, 0, 0, '', '', '', 0, 0, 20, 'VOS Enrollment (by Pax)', 'Nominal', 'Probation', 0, '2025-06-16 18:47:42'),
(63, 14, 10, 10, 10, 'Objective TEst', '', '', 0, 0, 0, '', '', '', 0, '2025-06-16 18:47:51'),
(64, 14, 10, 0, 0, '', '', '', 0, 0, 15, '12', 'Nominal', 'PKWT 1', 0, '2025-06-16 18:48:04'),
(65, 16, 10, 0, 0, '', '', '', 0, 0, 2, '2', 'Nominal', 'Probation', 0, '2025-06-16 18:48:21'),
(66, 16, 10, 0, 0, '', '', '', 0, 0, 2, '2', 'Rating', 'PKWT 2', 0, '2025-06-16 18:48:31'),
(67, 16, 10, 0, 0, '', '', '', 0, 0, 2, '2', 'Nominal', 'PKWT 2', 0, '2025-06-16 18:48:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `target_performance`
--

CREATE TABLE `target_performance` (
  `id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `target_performance`
--

INSERT INTO `target_performance` (`id`, `area_id`, `result`, `unit`, `created_at`) VALUES
(4, 10, '20', 'Nominal', '2025-06-16 18:46:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_performance`
--

CREATE TABLE `work_performance` (
  `id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `position_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `definition` text DEFAULT NULL,
  `objectives` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `work_performance`
--

INSERT INTO `work_performance` (`id`, `area_id`, `position_id`, `department_id`, `definition`, `objectives`, `created_at`) VALUES
(3, 10, 0, 0, '10', 'Objective test\r\n', '2025-06-16 18:46:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `general_competencies`
--
ALTER TABLE `general_competencies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `leadership_competencies`
--
ALTER TABLE `leadership_competencies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_performance_management`
--
ALTER TABLE `master_performance_management`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_position`
--
ALTER TABLE `master_position`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_position_20240806`
--
ALTER TABLE `master_position_20240806`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_position_bu`
--
ALTER TABLE `master_position_bu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_template`
--
ALTER TABLE `master_template`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `target_performance`
--
ALTER TABLE `target_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work_performance`
--
ALTER TABLE `work_performance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `general_competencies`
--
ALTER TABLE `general_competencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `leadership_competencies`
--
ALTER TABLE `leadership_competencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_performance_management`
--
ALTER TABLE `master_performance_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_template`
--
ALTER TABLE `master_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `target_performance`
--
ALTER TABLE `target_performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `work_performance`
--
ALTER TABLE `work_performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
