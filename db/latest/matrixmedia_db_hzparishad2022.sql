-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 03:10 PM
-- Server version: 5.7.42
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrixmedia_db_hzparishad2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `deleted_at`, `created_at`) VALUES
(1, 'admin@gmail.com', '123456', 'Admin', NULL, '2022-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pannumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adharnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adhar_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjectt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `fullname`, `phone`, `email`, `address`, `qualification`, `qualification_document`, `pannumber`, `pan_document`, `adharnumber`, `adhar_document`, `subjectt`, `attachment`, `created_at`) VALUES
(1, 'Basu Chatterjee', 7894562211, 'basu@gmail.com', '', '', NULL, '', NULL, '', NULL, '', '1637041241.pdf', '2021-11-16 05:40:41'),
(2, 'DEBAJYOTI SAMANTA', NULL, 'dd@gmail.com', '', '', NULL, '', NULL, '', NULL, 'test', '', '2022-03-02 06:59:11'),
(3, 'DEBNIDHI KUILA', NULL, 'debnidhi.kuila@gmail.com', '', '', NULL, '', NULL, '', NULL, 'sxasx', '', '2022-03-02 07:05:59'),
(4, 'dfdfd', NULL, 'debnidhi.kuila@gmail.com', '', '', NULL, '', NULL, '', NULL, 'sacasc', '', '2022-03-02 07:06:30'),
(5, 'DEBAJYOTI SAMANTA', NULL, 'dd@gmail.com', '', '', NULL, '', NULL, '', NULL, 'axAX', '', '2022-03-02 07:20:51'),
(6, 'BABUL SUPRIYO', NULL, 'debnidhi.kuila@gmail.com', '', '', NULL, '', NULL, '', NULL, 'axAX', '', '2022-03-02 07:22:06'),
(7, 'DEBNIDHI KUILA', 9732942512, 'debnidhi.kuila@gmail.com', '', '', NULL, '', NULL, '', NULL, NULL, '1646376266.jpg', '2022-03-04 06:44:26'),
(8, 'BABUL SUPRIYO', 9732942512, 'debnidhi.kuila@gmail.com', '', 'Graduation', NULL, 'BMTPK8434J', '1646396432.jpg', '123452510214', 'adhar.jpg', NULL, '1646396432.jpg', '2022-03-04 12:20:32'),
(9, 'Samiran Kuila', 8965230147, 'samir@gmail.com', '', 'B.Pherm', NULL, 'bmyjk6787h', '1646397413.jpg', '789620104568', 'adhar.jpg', NULL, '1646397413.jpg', '2022-03-04 12:36:53'),
(10, 'sfvsafasf', 9732942512, 'debnidhi.kuila@gmail.com', NULL, 'dfd', 'finger.jpg', 'dgdgdgdgdg', '1646400850.jpg', '454636463663', '1642494770.jpg', NULL, '1646400850.jpg', '2022-03-04 13:34:10'),
(11, 'Rahul Sinha', 8745211550, 'rahul@gmail.com', NULL, 'MCA', '', 'hgfhfjgfjg', '', '656565657676', '', NULL, '', '2023-04-14 05:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_title`, `banner_image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Banner1', '1663136932.jpg', '1', '0', '2022-09-14 06:21:49', '2022-09-14 12:19:05'),
(2, 'Banner2', '1663157968.jpg', '1', '0', '2022-09-14 06:25:16', '2022-09-14 12:19:28'),
(3, 'Banner3', '1663136730.jpg', '1', '0', '2022-09-14 06:25:30', '2022-09-14 06:25:30'),
(4, 'Banner4', '1663136747.jpg', '1', '0', '2022-09-14 06:25:47', '2022-09-14 06:25:47'),
(5, 'Banner5', '1663136765.jpg', '1', '0', '2022-09-14 06:26:05', '2022-09-14 06:26:05'),
(6, 'Banner6', '1663136780.jpg', '1', '0', '2022-09-14 06:26:20', '2022-09-14 09:07:43'),
(7, 'scriptalertdocumentcookiescript', '1691476015.jpg', '0', '0', '2023-08-08 06:26:55', '2023-08-08 06:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phone`, `email`, `subjectt`, `messages`, `created_at`) VALUES
(1, 'DEBAJYOTI SAMANTA', NULL, 'dd@gmail.com', 'System test', 'In 1713, the Bengal Council of the British East India Company, on the accession of the Emperor Farrukhsiyar, grandson of Aurangzeb, to the throne of Delhi, sent a deputation to him with a petition for a settlement of five villages on west bank of Hooghly river along with thirty-three villages on the east bank. The list of villages appeared in the Consultation Book of the Council dated 4 May 1714. The five villages on the west bank on Hooghly river were: ‘Salica’ (Salkia), ‘Harirah’ (Howrah), ‘Cassundeah’ (Kasundia), ‘Ramkrishnopoor’ (Ramkrishnapur), and ‘Battar’ (Bator): all identifiable with localities of modern day Howrah city.', '2022-03-04 06:01:22'),
(2, 'S sen', NULL, 'ddd@gmail.com', 'System Test', 'hvfg dfug hselgh ldfighdlgh lflh dlo', '2022-03-04 06:07:43'),
(3, 'Test User', NULL, 'prasun@matrixnmedia.com', 'Test msg', 'Testing going on..', '2023-04-11 11:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_no` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `notice` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('1','0') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_no`, `title`, `notice`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Notice1', 'Notice1 ', '1663572062.pdf', '1', '0', '2022-09-15 07:20:34', '2022-09-19 13:31:44'),
(2, 'Notice2', 'Notice2', '1663572815.pdf', '1', '0', '2022-09-19 07:33:35', '2022-09-19 13:31:49'),
(3, 'Notice3', 'Notice3    ', '1663594319.pdf', '1', '0', '2022-09-19 13:31:59', '2023-04-11 10:28:40'),
(4, '397/006/HZP', 'Sealed Quotations are invited from the reputed and bonafide printers and suppliers for supply of bill form the Parishad.', '1690197389.pdf', '1', '0', '2023-07-24 11:16:29', '2023-07-24 11:16:29'),
(5, '397/006/HZP', 'marquescriptkjkjhkhscriptmarque', '1691416416.pdf', '1', '0', '2023-08-07 13:42:17', '2023-08-07 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `image_title`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Image1', '1663154748.jpg', '1', '0', '2022-09-14 11:25:48', '2022-09-14 12:25:54'),
(2, 'Image2', '1663158322.jpg', '1', '0', '2022-09-14 11:37:53', '2022-09-14 12:25:22'),
(3, 'scriptalertdocumentcookiescript', '1691478314.jpeg', '1', '0', '2023-08-08 06:48:36', '2023-08-08 07:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `tender_no` varchar(255) DEFAULT NULL,
  `tender_type` varchar(255) DEFAULT NULL,
  `title` text,
  `tender_notice` varchar(255) DEFAULT NULL,
  `publication_date` varchar(255) DEFAULT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `tender_no`, `tender_type`, `title`, `tender_notice`, `publication_date`, `submission_date`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(42, 'Tenders1', 'E-Tender', 'OFFICE OF THE HOWRAH ZILLA PARISHAD    ', '1663322036.pdf', '2022-02-11', '2022-02-11', '1', '0', NULL, '2022-09-19 13:06:05'),
(43, 'Tenders2', 'Paper Tender', 'Tenders2', '1663586838.pdf', '2022-08-15', '2022-08-20', '1', '0', '2022-09-19 11:27:18', '2022-09-19 11:27:18'),
(44, 'Tenders3', 'E-Tender', 'Tenders3', '1663586881.pdf', '2022-09-19', '2022-09-19', '1', '0', '2022-09-19 11:28:01', '2022-09-19 11:28:01'),
(45, '1147006HZP', 'Paper Tender', 'scripttestscript', '1663591925.pdf', '2022-09-12', '2022-09-26', '1', '0', '2022-09-19 12:52:05', '2023-08-07 14:08:31'),
(46, '1147/006/HZP', 'Paper Tender', 'fsfsf86767', '1691414966.pdf', '2023-08-07', '2023-08-12', '1', '0', '2023-08-07 13:14:55', '2023-08-07 13:29:26'),
(47, '1254006HZP', 'Paper Tender', 'scriptalerthjhjhjscript', '1691414349.pdf', '2023-08-07', '2023-08-24', '1', '0', '2023-08-07 13:19:09', '2023-08-08 06:09:03'),
(48, '637006HZP', 'Paper Tender', ' Sealed Quotations are invited from the reputed and bonafide printers and suppliers for supply of the following materials', '1695107015.pdf', '2023-09-19', '2023-10-03', '1', '0', '2023-09-19 07:03:35', '2023-09-19 08:54:03'),
(49, '1250HZP', 'Paper Tender', 'Test Tender ', '1695114636.pdf', '2023-09-19', '2023-09-20', '0', '0', '2023-09-19 09:10:36', '2023-09-19 09:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `video_title`, `video`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Video1', '1663317647.mp4', '1', '0', '2022-09-16 07:46:13', '2022-09-16 08:40:47'),
(2, 'Video2', '1663317604.mp4', '1', '0', '2022-09-16 08:28:12', '2022-09-16 08:40:04'),
(3, 'scriptalertdocumentcookiescript', '1691478799.pdf', '0', '0', '2023-08-08 07:13:19', '2023-08-08 07:36:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
