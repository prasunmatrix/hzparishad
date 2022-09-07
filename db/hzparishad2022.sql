-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2022 at 09:29 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hzparishad2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` bigint DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` text,
  `qualification` varchar(255) NOT NULL,
  `qualification_document` varchar(255) DEFAULT NULL,
  `pannumber` varchar(255) NOT NULL,
  `pan_document` varchar(255) DEFAULT NULL,
  `adharnumber` varchar(255) NOT NULL,
  `adhar_document` varchar(255) DEFAULT NULL,
  `subjectt` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
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
(10, 'sfvsafasf', 9732942512, 'debnidhi.kuila@gmail.com', NULL, 'dfd', 'finger.jpg', 'dgdgdgdgdg', '1646400850.jpg', '454636463663', '1642494770.jpg', NULL, '1646400850.jpg', '2022-03-04 13:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` bigint DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `subjectt` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phone`, `email`, `subjectt`, `messages`, `created_at`) VALUES
(1, 'DEBAJYOTI SAMANTA', NULL, 'dd@gmail.com', 'System test', 'In 1713, the Bengal Council of the British East India Company, on the accession of the Emperor Farrukhsiyar, grandson of Aurangzeb, to the throne of Delhi, sent a deputation to him with a petition for a settlement of five villages on west bank of Hooghly river along with thirty-three villages on the east bank. The list of villages appeared in the Consultation Book of the Council dated 4 May 1714. The five villages on the west bank on Hooghly river were: ‘Salica’ (Salkia), ‘Harirah’ (Howrah), ‘Cassundeah’ (Kasundia), ‘Ramkrishnopoor’ (Ramkrishnapur), and ‘Battar’ (Bator): all identifiable with localities of modern day Howrah city.', '2022-03-04 06:01:22'),
(2, 'S sen', NULL, 'ddd@gmail.com', 'System Test', 'hvfg dfug hselgh ldfighdlgh lflh dlo', '2022-03-04 06:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int NOT NULL,
  `notice_no` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `notice` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_no`, `title`, `notice`, `created_at`) VALUES
(16, 'test', 'test', '1662023864.pdf', NULL),
(17, 'test2', 'test2', 'Notices.pdf', NULL),
(18, 'test3', 'test3 ', 'sample.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int NOT NULL,
  `tender_no` varchar(255) DEFAULT NULL,
  `tender_type` varchar(255) DEFAULT NULL,
  `title` text,
  `tender_notice` varchar(255) DEFAULT NULL,
  `publication_date` varchar(255) DEFAULT NULL,
  `submission_date` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `tender_no`, `tender_type`, `title`, `tender_notice`, `publication_date`, `submission_date`, `created_at`) VALUES
(38, 'test1', 'E-Tender', 'test tender ', 'sample.pdf', '2022-09-01', '2022-09-10', NULL),
(40, 'test2', 'Paper Tender', 'test2 ', 'sample.pdf', '2022-09-08', '2022-09-30', NULL),
(41, 'test3', 'Paper Tender', 'test3 ', 'sample.pdf', '2022-09-08', '2022-09-30', NULL);

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
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
