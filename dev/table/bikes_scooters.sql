-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 02:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `bikes_scooters`
--

CREATE TABLE `bikes_scooters` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(500) NOT NULL,
  `meta_description` text NOT NULL,
  `image_title` varchar(500) NOT NULL,
  `image_description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikes_scooters`
--

INSERT INTO `bikes_scooters` (`id`, `type`, `name`, `description`, `image`, `meta_title`, `meta_description`, `image_title`, `image_description`, `created_at`, `updated_at`) VALUES
(1, 'Bikes', 'SP 125', '<p>it&#39;s time to be advanced</p>\r\n\r\n<p>Experience thrilling performance and advanced technology come together in the SP 125. It comes with Honda&rsquo;s globally acclaimed Enhanced Smart Power (eSP) technology with an eco-friendly, BS-VI engine in a dynamic personality that makes for an equally smart and stylish ride. So, get ready to make a serious, attitude-packed style statement with a bike that&rsquo;s strictly for the advanced.</p>\r\n\r\n<p>a quiet revolution</p>\r\n\r\n<p>Price for Nashik City</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>Color</td>\r\n			<td>On Road Price</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NEW SP125 DISC CBS-BSVI</td>\r\n			<td>Gray Metallic</td>\r\n			<td><strong>90876</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>NEW SP125 DRUM CBS-BSVI</td>\r\n			<td>Gray Metallic</td>\r\n			<td><strong>90876</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>SP125 DISC CBS-BSVI</td>\r\n			<td>I RED-M</td>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>90876</strong></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>P S BLUE</td>\r\n			<td><strong>90876</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>SP125 DRUM CBS-BSVI</td>\r\n			<td>BLACK GREEN</td>\r\n			<td><strong>89571</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>I RED-M</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>P S BLUE</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>* Prices are subject to change without any prior notice.</p>\r\n', 'b9711f2ec87d8a7bd1213c80678ae48a.png', '', '', '', '', '2020-07-01 12:23:54', '2020-09-24 14:55:55'),
(2, 'Bikes', 'CB UNICORN', '<p>Honda takes forward its philosophy to the next level with the CB Unicorn that prides itself with the perfect blend of quality, comfort and class. It is by far the most sophisticated motorcycle in its category-in looks and in robustness. It is yet another creation of the renowned Honda technology.</p>\r\n', '59715b58c2a99439157467352aff35ad.png', '', '', '', '', '2020-09-18 17:33:33', '0000-00-00 00:00:00'),
(4, 'Scooters', 'DIO-BS-VI', '<p>With a sportier look and aggressive design, it&rsquo;s time to express your attitude in the streets with all new Honda Dio BS-VI. DIO your sporty side, DIO some thrills and then, &lsquo;Keep Dio&rsquo;ing it&rsquo;. Explore the amazing Honda DIO color variants! Checkout Honda Bs6 price here:</p>\r\n', '0fd26772ebb3a3fc4e488fbda494006e.png', '', '', '', '', '2020-09-28 17:56:39', '0000-00-00 00:00:00'),
(5, 'Scooters', 'activa-6g', '<p>For about two decades, Activa has been changing the game in Indian scootering. With the latest technological innovation, Honda Activa 6G changes the world of scootering all over again with its amazing mileage. It is equipped with the new eSP technology along with incredible new features like the revolutionary silent start, telescopic suspension, double lid external fuel fill, 12 inch front wheel and 10%^ more mileage. In short, with the all new Activa 6G and its BS-VI engine, Honda scores a magnificient, game changing 6!</p>\r\n', '92a727a910501eb6bc24ff5abb68fa19.png', 'Honda Activa 6g price in Nashik |  Rushabh Honda', 'Looking for Honda Activa 6g in Nashik? Here is Rushabh Honda with Hondas best two-wheeler model inventory. Browse today!', 'Honda Activa 6G | Blue | About | Rushabh Honda', 'Checkout Blue Metallic Honda Activa 6G features, price and more exclusively at Rushabh Honda, Nashik. Best Two wheeler Honda Dealers for years.', '2020-09-28 18:21:40', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes_scooters`
--
ALTER TABLE `bikes_scooters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes_scooters`
--
ALTER TABLE `bikes_scooters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
