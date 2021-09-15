-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2021 at 04:37 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `google_id` decimal(21,0) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `google_link` varchar(60) NOT NULL,
  `google_picture_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_users`
--

INSERT INTO `google_users` (`google_id`, `google_name`, `google_email`, `google_link`, `google_picture_link`) VALUES
(102556589119723034864, 'hasan mousavi', 'hsmsender1370@gmail.com', 'https://plus.google.com/102556589119723034864', 'https://lh3.googleusercontent.com/-xtfBSH4jPTo/AAAAAAAAAAI/AAAAAAAAAAA/ABtNlbDIQj-bLWyfV5OoV_vDGWThu55Egg/mo/photo.jpg'),
(112165503629477603096, 'hesam boy', 'hesam.boy10@gmail.com', 'https://plus.google.com/112165503629477603096', 'https://lh3.googleusercontent.com/-HEpytAauqx4/AAAAAAAAAAI/AAAAAAAAAAA/ABtNlbBTcxJkR75WQR9s80HjqT6uOYLIKw/mo/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `tbl_project`
--
DELIMITER $$
CREATE TRIGGER `tg_update_tbl_project` BEFORE UPDATE ON `tbl_project` FOR EACH ROW SET NEW.update_time=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resurces`
--

CREATE TABLE `tbl_resurces` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `id_google` decimal(21,0) NOT NULL,
  `md5id` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `active_email` tinyint(4) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `mobile`, `family`, `id_google`, `md5id`, `active_email`, `timestamp`) VALUES
(4, 'hsmsender1370@gmail.com', '', '', 'hasan mousavi', 102556589119723034864, 'a87ff679a2f3e71d9181a67b7542122c', 1, '2018-10-28 06:37:58'),
(5, 'hesam.boy10@gmail.com', '', '', 'hesam boy', 112165503629477603096, 'e4da3b7fbbce2345d7772b0674a318d5', 1, '2018-10-28 11:17:03'),
(10, 'info@pgant.ir', '811369', '23123', 'شسیشی', 0, 'd3d9446802a44259755d38e6d163e820', 1, '2018-11-08 15:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `google_users`
--
ALTER TABLE `google_users`
  ADD PRIMARY KEY (`google_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resurces`
--
ALTER TABLE `tbl_resurces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_google` (`id_google`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_resurces`
--
ALTER TABLE `tbl_resurces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `google_users`
--
ALTER TABLE `google_users`
  ADD CONSTRAINT `google_users_ibfk_1` FOREIGN KEY (`google_id`) REFERENCES `tbl_user` (`id_google`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
