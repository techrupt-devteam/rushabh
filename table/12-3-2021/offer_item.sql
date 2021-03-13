-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2021 at 06:03 PM
-- Server version: 5.7.33
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `offer_id` int(11) NOT NULL COMMENT 'pk off offers',
  `item` varchar(100) NOT NULL,
  `cost_unit` int(11) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `allocated_offer_qty` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `is_deleted` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_item`
--

INSERT INTO `offer_item` (`offer_item_id`, `offer_id`, `item`, `cost_unit`, `qty`, `allocated_offer_qty`, `total_amount`, `created_at`, `updated_at`, `status`, `is_deleted`) VALUES
(1, 9, 'Gold Coin 0.5 gm', 1700, '2', 0, 3400, '2021-03-04 12:49:11', '2021-03-04 12:49:11', 'Active', 'No'),
(2, 9, 'Extended Warrenty', 300, '40', 0, 9000, '2021-03-04 12:49:39', '2021-03-04 12:49:39', 'Active', 'No'),
(3, 9, 'AMC Book', 30, '56', 0, 1530, '2021-03-04 12:50:16', '2021-03-04 12:50:16', 'Active', 'No'),
(4, 9, 'Helmet', 270, '35', 0, 6750, '2021-03-04 12:51:40', '2021-03-04 12:51:40', 'Active', 'No'),
(5, 9, 'Body Cover', 225, '2', 0, 450, '2021-03-04 13:08:06', '2021-03-04 13:08:06', 'Active', 'No'),
(6, 9, 'Lady Foot Rest', 407, '20', 0, 8140, '2021-03-04 13:08:39', '2021-03-04 13:08:39', 'Active', 'No'),
(7, 9, 'Leg Guard', 429, '20', 0, 8580, '2021-03-09 16:06:32', '2021-03-09 16:06:32', 'Active', 'No'),
(8, 9, 'Side Stand', 122, '25', 0, 3050, '2021-03-04 13:09:50', '2021-03-04 13:09:50', 'Active', 'No'),
(9, 9, 'Seat Cover', 293, '35', 0, 7325, '2021-03-09 16:11:42', '2021-03-09 16:11:42', 'Active', 'No'),
(10, 9, 'Coating', 200, '65', 0, 10000, '2021-03-04 13:13:49', '2021-03-04 13:13:49', 'Active', 'No');

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
