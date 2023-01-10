-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `id` int(11) NOT NULL,
  `user_sql` varchar(230) NOT NULL,
  `pass_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `user_sql`, `pass_sql`) VALUES
(2, 'admin', '$2y$10$vX6xkAjyDEEkxjyYL31ciOmRrL0b5tmMyfwFCwhqrVRDJpeDyeKYC'),
(4, 'soumodeep', '$2y$10$FvRKbOijv33.IWYjHCfWm.8N2iCsaEPERNSwH8qV7Z8hmM4OdGG/q');

-- --------------------------------------------------------

--
-- Table structure for table `cv_download_info`
--

CREATE TABLE `cv_download_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(230) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `agree` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_download_info`
--

INSERT INTO `cv_download_info` (`id`, `Name`, `Mobile_No`, `agree`) VALUES
(27, 'soumo', '', 'I agree'),
(28, 'soumo', '7059411929', 'I agree'),
(29, 'soumo', '7059411929', 'I agree'),
(30, 'soumo', '1234567891', 'I agree');

-- --------------------------------------------------------

--
-- Table structure for table `graphics_uploadform`
--

CREATE TABLE `graphics_uploadform` (
  `id` int(11) NOT NULL,
  `Title_graphics` varchar(230) NOT NULL,
  `subtitle_graphics` varchar(230) NOT NULL,
  `Image_graphicsfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphics_uploadform`
--

INSERT INTO `graphics_uploadform` (`id`, `Title_graphics`, `subtitle_graphics`, `Image_graphicsfile`, `project_information_sql`, `category_sql`, `client_sql`, `date_sql`, `url_sql`, `title_details_sql`, `details_sql`) VALUES
(1, 'Logo Design', ' Car Logo', 'graphics-01.png', '', '', '', '', '', '', ''),
(2, 'Hoading Design', ' CAR COMPANY', 'graphics-02.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `motion_uploadform`
--

CREATE TABLE `motion_uploadform` (
  `id` int(11) NOT NULL,
  `Title_motion` varchar(230) NOT NULL,
  `subtitle_motion` varchar(230) NOT NULL,
  `Image_motionfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_uploadform`
--

CREATE TABLE `web_uploadform` (
  `id` int(11) NOT NULL,
  `Title_webimg` varchar(230) NOT NULL,
  `subtitle_web` varchar(230) NOT NULL,
  `Image_webfile` varchar(230) NOT NULL,
  `project_information_sql` varchar(230) NOT NULL,
  `category_sql` varchar(230) NOT NULL,
  `client_sql` varchar(230) NOT NULL,
  `date_sql` varchar(230) NOT NULL,
  `url_sql` varchar(230) NOT NULL,
  `title_details_sql` varchar(230) NOT NULL,
  `details_sql` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_uploadform`
--

INSERT INTO `web_uploadform` (`id`, `Title_webimg`, `subtitle_web`, `Image_webfile`, `project_information_sql`, `category_sql`, `client_sql`, `date_sql`, `url_sql`, `title_details_sql`, `details_sql`) VALUES
(8, 'Landing Page Design', '', 'webdesign-02.png', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_download_info`
--
ALTER TABLE `cv_download_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphics_uploadform`
--
ALTER TABLE `graphics_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motion_uploadform`
--
ALTER TABLE `motion_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_uploadform`
--
ALTER TABLE `web_uploadform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv_download_info`
--
ALTER TABLE `cv_download_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `graphics_uploadform`
--
ALTER TABLE `graphics_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motion_uploadform`
--
ALTER TABLE `motion_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `web_uploadform`
--
ALTER TABLE `web_uploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
