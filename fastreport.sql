-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 09:25 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftarisi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bab` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `cover`, `daftarisi`, `bab`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, 'dasd', 'asdsa', 'asdas', 'asdsa', NULL, NULL),
(2, '<p style=\"text-align: center;\">INI ADAKLAH HALAMAN COVER</p>', '<p>ini adlah halaman daftar isi</p>\r\n<ul>\r\n<li>asdad</li>\r\n<li>asda</li>\r\n<li>sdas</li>\r\n<li>d</li>\r\n<li>sad</li>\r\n<li>sa</li>\r\n<li>d</li>\r\n<li>a</li>\r\n<li>da</li>\r\n<li>d</li>\r\n</ul>', '<p>asdsad ajdas das dkas dkas d</p>\r\n<ol>\r\n<li>BAB 1</li>\r\n<li>BAB 2</li>\r\n<li>BAB 3</li>\r\n<li>BAB 4</li>\r\n<li>BAB 5</li>\r\n</ol>', '<p style=\"text-align: center;\">ASDASD ASDSLADSKADJKASD AJWADAS</p>', NULL, NULL),
(3, '<p style=\"text-align: center;\"><strong>INI ADALAH HALAMAN COVER</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">GAMBAR</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>BLA-BLA-BLA</strong></p>', '<p style=\"text-align: center;\"><strong>INI ADALALH HALMAN DAFTAR ISI</strong></p>\r\n<ol>\r\n<li style=\"text-align: left;\"><strong>Cover</strong></li>\r\n<li style=\"text-align: left;\"><strong>Daftar Isi</strong></li>\r\n<li style=\"text-align: left;\"><strong>BAB&nbsp;</strong></li>\r\n<li style=\"text-align: left;\"><strong>Lampiran</strong></li>\r\n</ol>', '<p style=\"text-align: center;\"><strong>BAB 1</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 2</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 3</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 4</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 5</strong></p>', '<p style=\"text-align: center;\"><strong>Ini adalah halaman lampiran</strong></p>', NULL, NULL),
(4, '<p style=\"text-align: center;\"><strong>halaman covera</strong></p>\r\n<p style=\"text-align: center;\"><strong>adssads</strong></p>\r\n<p style=\"text-align: center;\"><strong>adas</strong></p>\r\n<p style=\"text-align: center;\"><strong>dsa</strong></p>\r\n<p style=\"text-align: center;\"><strong>d</strong></p>\r\n<p style=\"text-align: center;\"><strong>a</strong></p>\r\n<p style=\"text-align: center;\"><strong>das</strong></p>\r\n<p style=\"text-align: center;\"><strong>d</strong></p>\r\n<p style=\"text-align: center;\"><strong>sad</strong></p>\r\n<p style=\"text-align: center;\"><strong>sads</strong></p>\r\n<p style=\"text-align: center;\"><strong>ad</strong></p>\r\n<p style=\"text-align: center;\"><strong>sa</strong></p>\r\n<p style=\"text-align: center;\"><strong>d</strong></p>', '<p style=\"text-align: center;\">DAFTAR ISI</p>\r\n<ul>\r\n<li style=\"text-align: left;\">sdadasdsa</li>\r\n<li style=\"text-align: left;\">das</li>\r\n<li style=\"text-align: left;\">d</li>\r\n<li style=\"text-align: left;\">asd</li>\r\n<li style=\"text-align: left;\">sa</li>\r\n<li style=\"text-align: left;\">d</li>\r\n<li style=\"text-align: left;\">as</li>\r\n<li style=\"text-align: left;\">da</li>\r\n<li style=\"text-align: left;\">sd</li>\r\n<li style=\"text-align: left;\">ad</li>\r\n<li style=\"text-align: left;\">a</li>\r\n<li style=\"text-align: left;\">d</li>\r\n<li style=\"text-align: left;\">as</li>\r\n<li style=\"text-align: left;\">das</li>\r\n</ul>', '<p style=\"text-align: center;\"><strong>BAB 1</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 2</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 3</strong></p>\r\n<p style=\"text-align: center;\"><strong>BAB 4</strong></p>', '<p style=\"text-align: center;\">LAMPIRAN</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>\r\n<p style=\"text-align: center;\">a</p>', NULL, NULL),
(5, '<p>jad asdjas dajsd asdjbsa da</p>', '<p>dsadasd&nbsp; asdasdas</p>', '<p>adsdsa a asdasdasd</p>', '<p>dasdas&nbsp; dasdasd</p>', NULL, NULL),
(6, '<p>dsadasdsadsadsa</p>', '<p>asdsadas</p>', '<p>dsadasda</p>', '<p>dsadasdas</p>', NULL, NULL),
(7, '<p>adsa dsadas asdasdas dasdsa</p>', '<ul>\r\n<li>adas sad asdasdasdas</li>\r\n<li>adasd</li>\r\n<li>a</li>\r\n<li>da</li>\r\n<li>d</li>\r\n<li>ad</li>\r\n<li>as</li>\r\n<li>d</li>\r\n</ul>', '<p><strong><em>asddsad askjdjask dasdasda</em></strong></p>\r\n<p><strong><em>sd</em></strong></p>\r\n<p><strong><em>ad</em></strong></p>\r\n<p><strong><em>sad</em></strong></p>\r\n<p><strong><em>a</em></strong></p>', '<p>asdasdasdasd sad ka sdkasd</p>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
