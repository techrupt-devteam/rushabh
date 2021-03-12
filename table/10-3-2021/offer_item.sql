-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 10:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushabh_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `offer_item`
--

CREATE TABLE `offer_item` (
  `offer_item_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `cost_unit` int(11) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `is_deleted` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_item`
--

INSERT INTO `offer_item` (`offer_item_id`, `item`, `cost_unit`, `qty`, `total_amount`, `created_at`, `updated_at`, `status`, `is_deleted`) VALUES
(1, 'Gold Coin 0.5 gm', 1700, '2', 3400, '2021-03-04 12:49:11', '2021-03-04 12:49:11', 'Active', 'No'),
(2, 'Extended Warrenty', 300, '1', 9000, '2021-03-04 12:49:39', '2021-03-04 12:49:39', 'Active', 'No'),
(3, 'AMC Book', 30, '2', 1530, '2021-03-04 12:50:16', '2021-03-04 12:50:16', 'Active', 'No'),
(4, 'Helmet', 270, '3', 6750, '2021-03-04 12:51:40', '2021-03-04 12:51:40', 'Active', 'No'),
(5, 'Body Cover', 225, '4', 450, '2021-03-04 13:08:06', '2021-03-04 13:08:06', 'Active', 'No'),
(6, 'Lady Foot Rest', 407, '5', 8140, '2021-03-04 13:08:39', '2021-03-04 13:08:39', 'Active', 'No'),
(7, 'Leg Guard', 429, '1', 8580, '2021-03-09 16:06:32', '2021-03-09 16:06:32', 'Active', 'No'),
(8, 'Side Stand', 122, '2', 3050, '2021-03-04 13:09:50', '2021-03-04 13:09:50', 'Active', 'No'),
(9, 'Seat Cover', 293, '3', 7325, '2021-03-09 16:11:42', '2021-03-09 16:11:42', 'Active', 'No'),
(10, 'Coating', 200, '4', 10000, '2021-03-04 13:13:49', '2021-03-04 13:13:49', 'Active', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offer_item`
--
ALTER TABLE `offer_item`
  ADD PRIMARY KEY (`offer_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer_item`
--
ALTER TABLE `offer_item`
  MODIFY `offer_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
