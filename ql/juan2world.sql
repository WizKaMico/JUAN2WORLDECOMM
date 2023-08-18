-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 01:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juan2world`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `compatibility` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `code`, `compatibility`, `size`, `color`, `member_id`) VALUES
(1, 11, 1, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 2),
(2, 3, 1, 'J2W3', 'IPAD', '10.2', 'Clear', 2),
(3, 2, 8, 'J2W2', 'IPAD AIR', '10.9', 'Clear', 1),
(4, 4, 1, 'J2W4', 'SAMSUNG GALAXY S22', 'NA', 'Clear', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `amount`, `name`, `phone`, `email`, `region`, `province`, `city`, `barangay`, `street_address`, `payment_type`, `order_status`, `order_at`) VALUES
(1, 2, 11360, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'National Capital Region (NCR)', 'Ncr, Second District', 'City Of Mandaluyong', 'Namayan', '10 U206 TARRAVILLE SUBDIVISION', 'Metamask', 'PENDING', '2023-08-15 05:46:52'),
(2, 2, 11360, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'National Capital Region (NCR)', 'Ncr, City Of Manila, First District', 'Santa Cruz', 'Barangay 319', '10 U206 TARRAVILLE SUBDIVISION', 'DragonPay', 'PENDING', '2023-08-15 05:47:56'),
(3, 2, 12660, 'THINKIT SOLUTIONS PH', '091653189', 'revcoreitsolution@gmail.com', 'National Capital Region (NCR)', 'City Of Manila', 'Binondo', 'Barangay 288', '10 U206', 'DragonPay', 'PENDING', '2023-08-15 16:44:10'),
(4, 2, 6485, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'Region II (Cagayan Valley)', 'Batanes', 'Basco (Capital)', 'Chanarian', '10 U206 TARRAVILLE SUBDIVISION', 'COD', 'PENDING', '2023-08-16 03:43:24'),
(5, 2, 2300, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'Region IV-A (CALABARZON)', 'Batangas', 'Alitagtag', 'Concordia', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-16 03:56:55'),
(6, 2, 480, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'Cordillera Administrative Region (CAR)', 'Apayao', 'Calanasan (Bayag)', 'Tubang', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-16 13:16:45'),
(7, 2, 480, 'Gerald Mico Facistol', '0998 303 25 37', 'tricore012@gmail.com', 'Region I (Ilocos Region)', 'Ilocos Sur', 'San Emilio', 'Kalumsing', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-16 13:44:04'),
(8, 2, 480, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'National Capital Region (NCR)', 'City Of Manila', 'Santa Cruz', 'Barangay 318', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-17 05:55:49'),
(9, 2, 480, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'Region XII (SOCCSKSARGEN)', 'Cotabato (North Cotabato)', 'Magpet', 'Ilian', '10 U206 TARRAVILLE SUBDIVISION', 'Store Pickup', 'PENDING', '2023-08-17 06:03:40'),
(10, 2, 480, 'Gerald Mico Facistol', '0998 303 25 37', 'tricore012@gmail.com', 'Region II (Cagayan Valley)', 'Cagayan', 'Gonzaga', 'Pateng', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-17 06:19:30'),
(11, 2, 480, 'Gerald Mico Facistol', '0998 303 25 37', 'tricore012@gmail.com', 'National Capital Region (NCR)', 'Ncr, City Of Manila, First District', 'Santa Ana', 'Barangay 759', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-17 06:22:09'),
(12, 2, 480, 'Tricore', '9531599179', 'mico101213@gmail.com', 'National Capital Region (NCR)', 'Ncr, Fourth District', 'City Of Makati', 'Pio Del Pilar', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-17 06:25:47'),
(13, 2, 480, 'Gerald Mico Facistol', '9531599179', 'tricore012@gmail.com', 'Autonomous Region in Muslim Mindanao (ARMM)', 'Basilan', 'Lantawan', 'Pamucalin', '10 U206 TARRAVILLE SUBDIVISION', 'Paypal', 'PENDING', '2023-08-17 06:29:22'),
(14, 2, 940, 'THINKIT SOLUTIONS PH', '091111', 'tricore012@gmail.com', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Pasuquin', 'Poblacion 1', 'dtor', 'Paypal', 'PENDING', '2023-08-17 06:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `compatibility` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `order_id`, `product_id`, `code`, `compatibility`, `size`, `color`, `item_price`, `quantity`) VALUES
(1, 1, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Green', 325, 15),
(2, 1, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Iridescent', 325, 1),
(3, 1, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Sunset Gold', 325, 4),
(4, 1, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Pure Silver', 325, 7),
(5, 1, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Knight Black', 325, 6),
(6, 1, 7, 'J2W7', 'IWATCH', '41MM', 'Clear', 310, 1),
(7, 1, 7, 'J2W7', 'IWATCH', '45MM', 'Clear', 325, 1),
(8, 2, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Green', 325, 15),
(9, 2, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Iridescent', 325, 1),
(10, 2, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Sunset Gold', 325, 4),
(11, 2, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Pure Silver', 325, 7),
(12, 2, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Knight Black', 325, 6),
(13, 2, 7, 'J2W7', 'IWATCH', '41MM', 'Clear', 310, 1),
(14, 2, 7, 'J2W7', 'IWATCH', '45MM', 'Clear', 325, 1),
(15, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Green', 325, 16),
(16, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'White Diamond', 325, 2),
(17, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Iridescent', 325, 1),
(18, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Sunset Gold', 325, 4),
(19, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Pure Silver', 325, 8),
(20, 3, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Knight Black', 325, 6),
(21, 3, 7, 'J2W7', 'IWATCH', '41MM', 'Clear', 310, 1),
(22, 3, 7, 'J2W7', 'IWATCH', '45MM', 'Clear', 325, 1),
(23, 4, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Sunset Gold', 325, 4),
(24, 4, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Pure Silver', 325, 8),
(25, 4, 1, 'J2W1', 'IPHONE 13 PRO', '6.1', 'Knight Black', 325, 6),
(26, 4, 7, 'J2W7', 'IWATCH', '41MM', 'Clear', 310, 1),
(27, 4, 7, 'J2W7', 'IWATCH', '45MM', 'Clear', 325, 1),
(28, 5, 3, 'J2W3', 'IPAD', '10.2', 'Clear', 460, 5),
(29, 6, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(30, 7, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(31, 8, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(32, 9, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(33, 10, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(34, 11, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(35, 12, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(36, 13, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1),
(37, 14, 3, 'J2W3', 'IPAD', '10.2', 'Clear', 460, 1),
(38, 14, 11, 'J2W11', 'IPHONE 13 PRO | IPHONE 13', '6.1', 'Clear', 480, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `ads` text NOT NULL,
  `howto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `code`, `category`, `details`, `ads`, `howto`) VALUES
(1, 'ZEELOT PIshield Titanium Alloy Camera Lens Protector', 'J2W1', 'CAMERA_LENS_PROTECTOR', '<p><strong>PIshield&trade;</strong> has developed complete solutions that provide your phone and you anywhere with the gamut of protection and care so as to <strong>kindle your classic life</strong>. <strong>Electroplate super smooth Oleophobic Coating</strong>. <strong>Initial waterdrop angle 116-118 Degree</strong>.</p>\r\n\r\n<p><strong>PERFECT MATCH:</strong> <strong>Speciafically designed to fit the lens</strong>.</p>\r\n\r\n<p><strong>SCRATCH RESISTANT:</strong> <strong>Featuring with hardness, effectively resists scratches by key, knife and any other sharp objects</strong>. <strong>Protect your phone camera lens from drops, bumps, scratches and scrapes</strong>.</p>\r\n\r\n<p><strong>ULTRA CLEAR:</strong> <strong>High-definition clear hydrophobic and oleophobic screen coating protects against sweat, oil residue and fingerprints</strong>. <strong>99.9% transparency to ensure original high resolution for pictures and videos</strong>.</p>\r\n\r\n<p><strong>EASY INSTALLATION:</strong> <strong>With the included cleaning tools, it is effortless to install this quality camera lens protector</strong>.</p>\r\n\r\n<p><strong>Compatible with iPhone 13mini 5.4\"/13 6.1\" (2 Cameras)</strong>.</p>\r\n\r\n<p><strong>Box Contents:</strong> <strong>PIshield&trade;</strong> <strong>Lens Protectorx 1</strong> <strong>Cleaning Kit x 1</strong>.</p>\r\n', '<iframe width=\"100%\" height=\"400\" src=\"https://www.youtube.com/embed/mBe_wR00_aM?start=18\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '<iframe width=\"100%\" height=\"400\" src=\"https://www.youtube.com/embed/hi_f13jqnqY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(2, 'ZEELOT Corning PureGlass 2.5D Tempered Glass Screen Protector Anti-Bluray', 'J2W2', 'TEMPERED_GLASS', '<p><strong>CASE FRIENDLY:</strong> Design with edge space for case compatibility.</p>\r\n<p><strong>EASY INSTALLATION:</strong> Fits perfectly with the iPhone 11 series screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN:</strong> 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION:</strong> A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE:</strong> Covers the screen completely; provides more on screen coverage when compared to a 2.5D Tempered Glass.</p>\r\n<p><strong>CRYSTAL CLEAR:</strong> Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION:</strong> Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(3, 'ZEELOT PureGlass 2.5D Tempered Glass Screen Protector Privacy', 'J2W3', 'TEMPERED_GLASS', '<p><strong>CASE FRIENDLY</strong> – Design with edge space for case compatibility.</p>\r\n<p><strong>DOESN\'T DARKEN SCREEN</strong> – No need to increase your screen brightness, save your battery life!</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat. <strong>FULL COVERAGE</strong> – Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(4, 'ZEELOT SOLIDsleek 2.5D Tempered Glass Screen Protector', 'J2W4', 'TEMPERED_GLASS', '<p><strong>Anti Scratch:</strong> Reinforced glasses withstand stronger scratch.</p>\r\n<p><strong>Perfect Fit:</strong> Excellent sizing fully fit to every single edge.</p>\r\n<p><strong>Smooth Surface:</strong> Smooth coating for writing with Apple Pencil.</p>\r\n<p><strong>Ultra Clear:</strong> Screen Protector high transmittance can fully maintain the iPad screen resolution.</p>\r\n<p><strong>Ultra Hydrophoic:</strong> The oleophobic coating effectively isolates the water and fingerprints.</p>\r\n', '', ''),
(5, 'ZEELOT Entire View Steel Wire Tempered Glass Screen Protector Anti Blue-Ray PureGlass', 'J2W5', 'TEMPERED_GLASS', '<p><strong>WITH STEEL WIRE (MESH)</strong> - It has steel wire (mesh) covering the receiver which prevents dust or other small particles from damaging or spoiling the receiver.</p>\r\n<p><strong>ANTI-BLUE RAY FEATURE</strong> - Effectively blocks blue light emitted by your screen to protect eyes from myopia and retinal damage.</p>\r\n<p><strong>CASE FRIENDLY</strong> – Design with edge space for case compatibility.</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE</strong> – Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(6, 'ZEELOT PureGlass 2.5D Steel Wire Tempered Glass Screen Protector PureGlass', 'J2W6', 'TEMPERED_GLASS', '<p><strong>CASE FRIENDLY</strong> – Design with edge space for case compatibility.</p>\r\n<p><strong>DOESN\'T DARKEN SCREEN</strong> – No need to increase your screen brightness, save your battery life!</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE</strong> – Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(7, 'ZEELOT PIshield 360 Watch Protection Case (2 in1) for Apple Watch', 'J2W7', 'WATCH_PROTECTION', '<p><strong>SLIM AND DURABLE</strong> - Smooth and anti-glare texture.</p>\r\n<p><strong>SPLASH PROOF</strong> - Isolate water splash from the device.</p>\r\n<p><strong>ANTI-SCRATCH</strong> - Reinforced glasses withstand stronger scratches.</p>\r\n<p><strong>TOUGH SHIELD</strong> - Provides 360 full angle protection.</p>\r\n<p><strong>PERFECT FIT</strong> - Excellent sizing fully fits with the watch.</p>\r\n', '', ''),
(8, 'ZEELOT PIshield Nanometer Hybrid Glass with Alignment Kit', 'J2W8', 'TEMPERED_GLASS', '<p><strong>ULTRA HYDROPHOBIC</strong> - The oleophobic coating effectively isolates the water and fingerprints.</p>\r\n<p><strong>ANTI-SCRATCH</strong> - Reinforced glasses withstand stronger scratches.</p>\r\n<p><strong>PERFECT FIT</strong> - Excellent sizing fully fits to every single edge.</p>\r\n<p><strong>ULTRA CLEAR</strong> - Screen Protector with high transmittance can fully maintain the iPad screen resolution.</p>\r\n', '', ''),
(9, 'ZEELOT 3D Curved Ultrathin Glass HD', 'J2W9', 'TEMPERED_GLASS', '<p><strong>Water Resistant:</strong> IP67 Water resistance level. You can also wear your watch even swimming.</p>\r\n<p><strong>Curved like your screen:</strong> Renovation of blanket protection. Inner curved anti-dust 0.01mm &lt; Dust particle 0.05mm.</p>\r\n<p><strong>Hot Bending Technology:</strong> Anti-dust, no bubbles.</p>\r\n<p><strong>4 Layers of Protection:</strong> Optical Layer, NanoMeter compressive Layer, Hydraulic Pressure Explosion-proof Layer and Oleophobic Coating.</p>\r\n<p><strong>Ultra-thin:</strong> Barely there – 0.26mm.</p>\r\n<p><strong>COMPATIBILITY:</strong> Compatible with Apple Watch Series 6-4 (40mm).</p>\r\n<p><strong>EASY INSTALLATION:</strong> Fits perfectly with the Apple Watch Series screen. Easy application using AB Glue.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN:</strong> 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION:</strong> A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE:</strong> Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR:</strong> Maintains your Apple Watch Series Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION:</strong> Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(10, 'ZEELOT PIshield Nebula Series Anti Dust Filter Tempered Glass Screen Protector Privacy', 'J2W10', 'TEMPERED_GLASS', '<p><strong>PIshield&trade;</strong> has developed complete solutions that provide your phone and you anywhere with the gamut of protection and care so as to kindle your classic life.</p>\r\n<p><strong>ZEELOT PIshield Nebula Series</strong></p>\r\n<p><strong>Case Friendly</strong></p>\r\n<p><strong>Ultra Hydrophobic</strong></p>\r\n<p><strong>Dust Proof</strong></p>\r\n<p><strong>Water Proof</strong></p>\r\n<p><strong>Impact Protection</strong></p>\r\n', '', ''),
(11, 'ZEELOT PIshield Nebula Series Anti Dust Filter Tempered Glass Screen Anti BlueRay', 'J2W11', 'TEMPERED_GLASS', '<p><strong>PIshield&trade; has developed complete solutions that provide your phone and you anywhere with the gamut of protection and care so as to kindle your classic life.</strong></p>\r\n<p><strong>ZEELOT PIshield Nebula Series</strong></p>\r\n<p><strong>Case Friendly</strong></p>\r\n<p><strong>Ultra Hydrophobic</strong></p>\r\n<p><strong>Dust Proof</strong></p>\r\n<p><strong>Water Proof</strong></p>\r\n<p><strong>Impact Protection</strong></p>\r\n', '', ''),
(12, 'ZEELOT SOLIDsleek with Alignment Kit Screen Protector Privacy', 'J2W12', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(13, 'ZEELOT SOLIDsleek with Alignment Kit Screen Protector, Anti Blue-Ray', 'J2W13', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(14, 'ZEELOT SOLIDsleek Tempered Glass Screen Protector, Privacy', 'J2W14', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(15, 'ZEELOT Entire View Steel Wire Anti Blue-Ray PureGlass 2.5D Tempered Glass Screen Protector', 'J2W15', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(16, 'ZEELOT SOLIDsleek Tempered Glass Screen Protector, Anti Blue Ray', 'J2W16', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(17, 'ZEELOT SOLIDsleek Tempered Glass Screen Protector, Matte (Anti-Glare)', 'J2W17', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(18, 'ZEELOT SOLIDsleek Tempered Glass Screen Protector, Retina Clear', 'J2W18', 'TEMPERED_GLASS', '<p><strong>SOLIDsleek&trade;</strong> is a trademark registered under <strong>Zeelot&reg;</strong>. It has developed innovative solutions that protect your phone and you anywhere <strong>(approving)</strong>. <strong>3x smooth and 5x stronger than other leading glasses*</strong>.</p>\r\n<p><strong>9H hardness protection for mobile phone can no longer satisfy the needs of daily use. Solidsleek&trade;</strong> has become a part of our lives, pursuit of which is providing better protection experience for extremity. Affordable and superlative protection will be your decent choice. <strong>Solidsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>PureGlass</strong> is reinforced at the molecular level, making it stronger and nearly impossible to scratch even with a sharp knife.</p>\r\n<p><strong>SOLIDsleek&trade;</strong> provides full coverage around the iPhone screen, which is compatible with almost all cases in the market.</p>\r\n<p><strong>Easy Application</strong> All Series has antistatic with bubble-free adhesive layer easy for you to install by yourselves.</p>\r\n<p><strong>Box Contents:</strong></p>\r\n<ul>\r\n  <li><strong>SOLIDsleek&trade; Glassx 1</strong></li>\r\n  <li><strong>Cleaning Kit x 1</strong></li>\r\n</ul>\r\n', '', ''),
(19, 'ZEELOT Entire View Steel Wire Privacy PureGlass Tempered Glass Screen Protector', 'J2W19', 'TEMPERED_GLASS', '<p><strong>WITH STEEL WIRE (MESH)</strong> - It has steel wire (mesh) covering the receiver which prevents dust or other small particles <strong>to damage or spoil the receiver</strong>.</p>\r\n<p><strong>ANTI-BLUE RAY FEATURE</strong> - Effectively blocks blue light emitted by your screen <strong>to protect eyes from myopia and retinal damage</strong>.</p>\r\n<p><strong>CASE FRIENDLY</strong> – <strong>Design with edge space for case compatibility</strong>.</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation <strong>easy & effortless, leaving no bubble & white edge</strong>.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – <strong>5x Stronger Impact Protection</strong>.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen <strong>easy-to-clean as it helps resists oil and fingerprints while effectively protecting against dirt, dust, and sweat</strong>.</p>\r\n<p><strong>FULL COVERAGE</strong> – <strong>Covers the screen completely</strong>.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – <strong>Maintains your iPhone Vivid display</strong>.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - <strong>Resists knife, keys & Scratch marks</strong>.</p>\r\n', '', ''),
(20, 'ZEELOT Entire View Steel Wire Anti-Glare PureGlass 2.5D Tempered Glass Screen Protector', 'J2W20', 'TEMPERED_GLASS', '<p><strong>WITH STEEL WIRE (MESH)</strong> - It has steel wire (mesh) covering the receiver which prevents dust or other small particles <strong>to damage or spoil the receiver</strong>.</p>\r\n<p><strong>ANTI-BLUE RAY FEATURE</strong> - Effectively blocks blue light emitted by your screen <strong>to protect eyes from myopia and retinal damage</strong>.</p>\r\n<p><strong>CASE FRIENDLY</strong> – <strong>Design with edge space for case compatibility</strong>.</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation <strong>easy & effortless, leaving no bubble & white edge</strong>.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – <strong>5x Stronger Impact Protection</strong>.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen <strong>easy-to-clean as it helps resists oil and fingerprints while effectively protecting against dirt, dust, and sweat</strong>.</p>\r\n<p><strong>FULL COVERAGE</strong> – <strong>Covers the screen completely</strong>.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – <strong>Maintains your iPhone Vivid display</strong>.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - <strong>Resists knife, keys & Scratch marks</strong>.</p>\r\n', '', ''),
(21, 'ZEELOT Stereoscopic PureGlass HD Clear Tempered Glass Screen Protector', 'J2W21', 'TEMPERED_GLASS', '<p><strong>Emerging as a global premium brand, ZEELOT is increasingly a target for counterfeiters around the world. Copying ZEELOT product is stealing the work of the company and infringing the work of our designers.</strong></p>\r\n<p><strong>At ZEELOT we have spent a lot of time on refining our products. You will never experience the same quality in a counterfeit product. Furthermore, fake products rarely comply with health and safety requirements. Only genuine ZEELOT products are made with the skill and care that our customers deserve. When you buy ZEELOT products from an authorised ZEELOT reseller, you have certainty that the product is genuine. However, it may not always be obvious if a reseller is an authorised ZEELOT reseller.</strong></p>\r\n<p><strong>To protect our customers against counterfeiters and illegal copies, we will develop special authentication labels that verify the authenticity of our products. You will find the authentication label on the outside of our packaging box in the near future.</strong></p>\r\n', '', ''),
(22, 'ZEELOT PureGlass 2.5D Entire View Steel Wire Tempered Glass Screen Protector, HD Clear', 'J2W22', 'TEMPERED_GLASS', '<p><strong>WITH STEEL WIRE (MESH)</strong> - It has steel wire (mesh) covering the receiver which prevents dust or other small particles <strong>to damage or spoil the receiver</strong>.</p>\r\n<p><strong>ANTI-BLUE RAY FEATURE</strong> - Effectively blocks blue light emitted by your screen <strong>to protect eyes from myopia and retinal damage</strong>.</p>\r\n<p><strong>CASE FRIENDLY</strong> – <strong>Design with edge space for case compatibility</strong>.</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation <strong>easy & effortless, leaving no bubble & white edge</strong>.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – <strong>5x Stronger Impact Protection</strong>.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen <strong>easy-to-clean as it helps resists oil and fingerprints while effectively protecting against dirt, dust, and sweat</strong>.</p>\r\n<p><strong>FULL COVERAGE</strong> – <strong>Covers the screen completely</strong>.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – <strong>Maintains your iPhone Vivid display</strong>.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - <strong>Resists knife, keys & Scratch marks</strong>.</p>\r\n', '', ''),
(23, 'ZEELOT Entire View Steel Wire HD Clear PureGlass', 'J2W23', 'TEMPERED_GLASS', '<p><strong>WITH STEEL WIRE (MESH)</strong> - It has steel wire (mesh) covering the receiver which prevents dust or other small particles <strong>to damage or spoil the receiver</strong>.</p>\r\n<p><strong>ANTI-BLUE RAY FEATURE</strong> - Effectively blocks blue light emitted by your screen <strong>to protect eyes from myopia and retinal damage</strong>.</p>\r\n<p><strong>CASE FRIENDLY</strong> – <strong>Design with edge space for case compatibility</strong>.</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation <strong>easy & effortless, leaving no bubble & white edge</strong>.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – <strong>5x Stronger Impact Protection</strong>.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen <strong>easy-to-clean as it helps resists oil and fingerprints while effectively protecting against dirt, dust, and sweat</strong>.</p>\r\n<p><strong>FULL COVERAGE</strong> – <strong>Covers the screen completely</strong>.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – <strong>Maintains your iPhone Vivid display</strong>.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - <strong>Resists knife, keys & Scratch marks</strong>.</p>\r\n', '', ''),
(24, 'ZEELOT PureGlass 2.5D Steel Wire Tempered Glass Screen Protector', 'J2W24', 'TEMPERED_GLASS', '<p><strong>CASE FRIENDLY</strong> – Design with edge space for case compatibility.</p>\r\n<p><strong>DOESN\'T DARKEN SCREEN</strong> – No need to increase your screen brightness, save your battery life!</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE</strong> – Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - Resists knife, keys &amp; Scratch marks.</p>\r\n', '', ''),
(25, 'ZEELOT PureGlass 2.5D Steel Wire Tempered Glass Screen Protector,Privacy', 'J2W25', 'TEMPERED_GLASS', '<p><strong>CASE FRIENDLY</strong> – Design with edge space for case compatibility.</p>\r\n<p><strong>DOESN\'T DARKEN SCREEN</strong> – No need to increase your screen brightness, save your battery life!</p>\r\n<p><strong>EASY INSTALLATION</strong> - Fits perfectly with the screen. Upgraded Rapid adhesive made installation easy &amp; effortless, leaving no bubble &amp; white edge.</p>\r\n<p><strong>REDUCE THE RISK OF BROKEN SCREEN</strong> – 5x Stronger Impact Protection.</p>\r\n<p><strong>UPGRADED SMUDGE RESISTANCE PROTECTION</strong> - A special oleophobic coating makes your screen easy-to-clean as it helps resist oil and fingerprints while effectively protecting against dirt, dust, and sweat.</p>\r\n<p><strong>FULL COVERAGE</strong> – Covers the screen completely.</p>\r\n<p><strong>CRYSTAL CLEAR</strong> – Maintains your iPhone Vivid display.</p>\r\n<p><strong>SCRATCH RESISTANCE PROTECTION</strong> - Resists knife, keys &amp; Scratch marks.</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_comment`
--

CREATE TABLE `tbl_product_comment` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `rating` int(10) NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_commented` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_comment`
--

INSERT INTO `tbl_product_comment` (`id`, `pid`, `rating`, `comment`, `email`, `name`, `date_commented`) VALUES
(1, 1, 4, 'Gerald Mico', 'revcoreitsolution@gmail.com', 'Gerald Mico', '2023-08-15'),
(2, 3, 4, 'I really love the product its awesome ', 'revcoreitsolution@gmail.com', 'THINKIT SOLUTIONS PH', '2023-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_info`
--

CREATE TABLE `tbl_product_info` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `vcode` varchar(50) NOT NULL,
  `compatibility` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_info`
--

INSERT INTO `tbl_product_info` (`id`, `pid`, `size`, `color`, `vcode`, `compatibility`) VALUES
(1, 1, 'NA', 'Ocean Blue', 'i3285506728-s16607754565', 'IPHONE 13 | IPHONE 13 MINI'),
(2, 1, 'NA', 'Iridescent', 'i3285546483-s16607490969', 'IPHONE 13 | IPHONE 13 MINI'),
(3, 1, 'NA', 'Pure Silver', 'i3285457947-s16607611905', 'IPHONE 13 | IPHONE 13 MINI'),
(4, 1, 'NA', 'Knight Black', 'i3285636041-s16607714707', 'IPHONE 13 | IPHONE 13 MINI'),
(5, 1, 'NA', 'Aquatic Green', 'i3285616059-s16607487832', 'IPHONE 13 | IPHONE 13 MINI'),
(6, 1, 'NA', 'White Diamond', 'i3285599137-s16607356855', 'IPHONE 13 | IPHONE 13 MINI'),
(7, 1, 'NA', 'Rose Pink', 'i3285512589-s16607493460', 'IPHONE 13 | IPHONE 13 MINI'),
(8, 1, 'NA', 'Passion Red', 'i3285466783-s16607216842', 'IPHONE 13 | IPHONE 13 MINI'),
(9, 1, '6.1', 'Green', 'i3285536515-s16607486967', 'IPHONE 13 PRO'),
(10, 1, '6.7', 'Green', 'i3285536515-s16607486967', 'IPHONE 13 PRO MAX'),
(11, 1, '6.1', 'White Diamond', 'i3285582276-s16607608593', 'IPHONE 13 PRO'),
(12, 1, '6.7', 'White Diamond', 'i3285582276-s16607608593', 'IPHONE 13 PRO MAX'),
(13, 1, '6.1', 'Iridescent', 'i3285585303-s16607555755', 'IPHONE 13 PRO'),
(14, 1, '6.7', 'Iridescent', 'i3285585303-s16607555755', 'IPHONE 13 PRO MAX'),
(15, 1, '6.1', 'Sunset Gold', 'i3285616079-s16607641363', 'IPHONE 13 PRO'),
(16, 1, '6.7', 'Sunset Gold', 'i3285616079-s16607641363', 'IPHONE 13 PRO MAX'),
(17, 1, '6.1', 'Pure Silver', 'i3285520515-s16607657578', 'IPHONE 13 PRO'),
(18, 1, '6.7', 'Pure Silver', 'i3285520515-s16607657578', 'IPHONE 13 PRO MAX'),
(19, 1, '6.1', 'Knight Black', 'i3285537447-s16607668263', 'IPHONE 13 PRO'),
(20, 1, '6.7', 'Knight Black', 'i3285537447-s16607668263', 'IPHONE 13 PRO MAX'),
(21, 2, '11', 'Clear', 'i3285539543-s16703306308', 'IPAD PRO'),
(22, 2, '10.9', 'Clear', 'i3285539543-s16703306308', 'IPAD AIR'),
(23, 3, '10.5', 'Clear', 'i3285536538-s16703443700', 'IPAD'),
(24, 3, '12.9', 'Clear', 'i3285539522-s16607607696', 'IPAD PRO'),
(25, 3, '9.7', 'Clear', 'i3285499720-s16607658342', 'IPAD'),
(26, 3, '9.7', 'Clear', 'i3285499720-s16607658342', 'IPAD PRO'),
(27, 3, '10.2', 'Clear', 'i3285596223-s16607719028', 'IPAD'),
(28, 4, 'NA', 'Clear', 'i3285417954-s16607411290', 'SAMSUNG GALAXY S22 PLUS '),
(29, 4, 'NA', 'Clear', 'i3285526387-s16607316550', 'SAMSUNG GALAXY S22'),
(30, 5, '6.7', 'Clear', 'i3285417946-s16607400127', 'IPHONE 12'),
(31, 6, '6.1', 'Clear', 'i3285407995-s16607215779', 'IPHONE 12'),
(32, 7, '41MM', 'Clear', 'i3285484567-s16607384424', 'IWATCH'),
(33, 7, '45MM', 'Clear', 'i3285516420-s16607320550', 'IWATCH'),
(34, 8, '41MM', 'Clear', 'i3285547258-s16607320533', 'IWATCH'),
(35, 9, '44MM', 'Clear', 'i3285503483-s16607175977', 'IWATCH'),
(36, 9, '40MM', 'Clear', 'i3285519439-s16607382011', 'IWATCH'),
(37, 10, '6.7', 'Clear', 'i3285540275-s16607188598', 'IPHONE 13 PRO MAX'),
(38, 10, '6.1', 'Clear', 'i3285597006-s16607353298', 'IPHONE 13 PRO | IPHONE 13'),
(39, 11, '6.7', 'Clear', 'i3285419921-s16607186766', 'IPHONE 13 PRO | IPHONE 13'),
(40, 11, '6.1', 'Clear', 'i3285487557-s16607274193', 'IPHONE 13 PRO | IPHONE 13'),
(41, 12, '6.1', 'Clear', 'i3285512450-s16607201633', 'IPHONE 13 PRO | IPHONE 13'),
(42, 12, '6.7', 'Clear', 'i3285527352-s16607289150', 'IPHONE 13 PRO MAX'),
(43, 13, '6.1', 'Clear', 'i3285509461-s16606991811', 'IPHONE 13 PRO | IPHONE 13'),
(44, 14, '6.7', 'Clear', 'i3285540260-s16607225408', 'IPHONE 13 PRO MAX'),
(45, 14, '6.1', 'Clear', 'i3285564138-s16607310062', 'IPHONE 13 PRO | IPHONE 13'),
(46, 14, '5.4', 'Clear', 'i3285504418-s16607274093', 'IPHONE 13 MINI'),
(47, 15, '5.4', 'Clear', 'i3285513389-s16606996798', 'IPHONE 12'),
(48, 16, '6.7', 'Clear', 'i3285408951-s16607225363', 'IPHONE 13 PRO MAX'),
(49, 16, '6.1', 'Clear', 'i3285421939-s16607212555', 'IPHONE 13 PRO | IPHONE 13'),
(50, 17, '6.7', 'Matte', 'i3285532281-s16607178620', 'IPHONE 13 PRO MAX'),
(51, 17, '6.1', 'Matte', 'i3285579092-s16607186428', 'IPHONE 13 PRO | IPHONE 13'),
(52, 17, '5.4', 'Matte', 'i3285550155-s16607101783', 'IPHONE 13 MINI'),
(53, 18, '6.7', 'Clear', 'i3285444774-s16607109846', 'IPHONE 13 PRO MAX'),
(54, 18, '6.1', 'Clear', 'i3285580072-s16607216185', 'IPHONE 13 PRO | IPHONE 13'),
(55, 18, '5.4', 'Clear', 'i3285547194-s16606996720', 'IPHONE 13 MINI'),
(56, 19, '6.7', 'Clear', 'i3285437816-s16607237127', 'IPHONE 13 PRO MAX'),
(57, 19, '6.1', 'Clear', 'i3285402978-s16607125294', 'IPHONE 13 PRO | IPHONE 13'),
(58, 20, '6.7', 'Clear', 'i3285428842-s16607077797', 'IPHONE 13 PRO MAX'),
(59, 20, '6.1', 'Clear', 'i3285436834-s16607179161', 'IPHONE 13 PRO | IPHONE 13'),
(60, 21, '5.4', 'Clear', 'i3285399987-s16606947589', 'IPHONE 13 MINI'),
(61, 22, '6.7', 'Clear', 'i3285411938-s16607058310', 'IPHONE 12'),
(62, 23, '6.1', 'Clear', 'i3285447749-s16607119534', 'IPHONE 12'),
(63, 24, '6.5', 'Clear', 'i3285506408-s16607122230', 'IPHONE 11 PRO MAX'),
(64, 24, '5.8', 'Clear', 'i3285550130-s16607007454', 'IPHONE 11 PRO'),
(65, 24, '6.1', 'Clear', 'i3285411922-s16606952933', 'IPHONE 11'),
(66, 25, '6.5', 'Clear', 'i3285503396-s16607115242', 'IPHONE 11 PRO MAX'),
(67, 25, '5.8', 'Clear', 'i3285464612-s16607149058', 'IPHONE 11 PRO'),
(68, 25, '6.1', 'Clear', 'i3285497415-s16607043661', 'IPHONE 11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_info_price`
--

CREATE TABLE `tbl_product_info_price` (
  `id` int(11) NOT NULL,
  `vcode` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_info_price`
--

INSERT INTO `tbl_product_info_price` (`id`, `vcode`, `image`, `price`) VALUES
(1, 'i3285506728-s16607754565', 'https://ph-live.slatic.net/p/06557aefbee36ee862f6ab02bf0e62e4.png', 280.00),
(2, 'i3285546483-s16607490969', 'https://ph-live.slatic.net/p/0571de2c607e9e86b653860e38813e14.png', 280.00),
(3, 'i3285457947-s16607611905', 'https://ph-live.slatic.net/p/dbee1326c6a8689914edb50a01d911ed.png', 280.00),
(4, 'i3285636041-s16607714707', 'https://ph-live.slatic.net/p/ed61581b35c7bb3a418a8abe6b0fbd1f.png', 280.00),
(5, 'i3285539543-s16703306308', 'https://ph-live.slatic.net/p/d46ed409d33edb5c296cd2efcd951f5a.png', 460.00),
(6, 'i3285536538-s16703443700', 'https://ph-live.slatic.net/p/0ace220dcbe07193b27b227a1f0a280d.png', 640.00),
(7, 'i3285585350-s16607608624', 'https://ph-live.slatic.net/p/d46ed409d33edb5c296cd2efcd951f5a.png', 460.00),
(8, 'i3285539522-s16607607696', 'https://ph-live.slatic.net/p/71efa9bdd3896245dcb32dd13de4665e.png', 525.00),
(9, 'i3285499720-s16607658342', 'https://ph-live.slatic.net/p/71efa9bdd3896245dcb32dd13de4665e.png', 460.00),
(10, 'i3285596223-s16607719028', 'https://ph-live.slatic.net/p/71efa9bdd3896245dcb32dd13de4665e.png', 460.00),
(11, 'i3285536515-s16607486967', 'https://ph-live.slatic.net/p/07b8c1d595c786da682af9d2dca79a32.png', 325.00),
(12, 'i3285582276-s16607608593', 'https://ph-live.slatic.net/p/37d59a5d0c5d7085c4684b3a9dd0cc3a.png', 325.00),
(13, 'i3285585303-s16607555755', 'https://ph-live.slatic.net/p/862f180da405071cafa4c04e4f2a40b3.png', 325.00),
(14, 'i3285616079-s16607641363', 'https://ph-live.slatic.net/p/823b29f06b7a775e65de8245c1a83974.png', 325.00),
(15, 'i3285520515-s16607657578', 'https://ph-live.slatic.net/p/fe52f40ddbce789070db836061bb2c8d.png', 325.00),
(16, 'i3285537447-s16607668263', 'https://ph-live.slatic.net/p/fe52f40ddbce789070db836061bb2c8d.png', 325.00),
(17, 'i3285616059-s16607487832', 'https://ph-live.slatic.net/p/163ec38f157580ce6b61fdb76f20489e.png', 280.00),
(18, 'i3285599137-s16607356855', 'https://ph-live.slatic.net/p/c8a59c04b8b7f1a7f943144a8d62005b.png', 280.00),
(19, 'i3285512589-s16607493460', 'https://ph-live.slatic.net/p/678b92b94742bfdff3bcf6f3922a4dc0.png', 280.00),
(20, 'i3285466783-s16607216842', 'https://ph-live.slatic.net/p/aeb87fc46301e62f997ac3a6827c9c21.png', 280.00),
(21, 'i3285417954-s16607411290', 'https://ph-live.slatic.net/p/6a00fbdcbf56dec23c9f040479c7e7a4.png', 260.00),
(22, 'i3285526387-s16607316550', 'https://ph-live.slatic.net/p/6a00fbdcbf56dec23c9f040479c7e7a4.png', 260.00),
(23, 'i3285436927-s16607421072', 'https://ph-live.slatic.net/p/6a00fbdcbf56dec23c9f040479c7e7a4.png', 415.00),
(24, 'i3285490600-s16607360121', 'https://ph-live.slatic.net/p/22eec11b5eb0c6e337eb97ed7be83d59.png', 415.00),
(25, 'i3285417946-s16607400127', 'https://ph-live.slatic.net/p/feeb7ce5116e1fc8c18019e6db4443ef.png', 325.00),
(26, 'i3285407995-s16607215779', 'https://ph-live.slatic.net/p/8f967c8154dbc423725ad5a5c7c41d00.png', 325.00),
(27, 'i3285484567-s16607384424', 'https://ph-live.slatic.net/p/d3503876c30c433ef2dd344f15d8b447.png', 310.00),
(28, 'i3285516420-s16607320550', 'https://ph-live.slatic.net/p/d3503876c30c433ef2dd344f15d8b447.png', 325.00),
(29, 'i3285547258-s16607320533', 'https://ph-live.slatic.net/p/d3503876c30c433ef2dd344f15d8b447.png', 300.00),
(30, 'i3285503483-s16607175977', 'https://ph-live.slatic.net/p/69a0144c0080120384645512b1bff7aa.png', 300.00),
(31, 'i3285519439-s16607382011', 'https://ph-live.slatic.net/p/78e1550394f7b8f9708145e47950e8e1.png', 300.00),
(32, 'i3285540275-s16607188598', 'https://ph-live.slatic.net/p/45d7d8f0217b0e76f4c1cfdf8d401a8c.png', 530.00),
(33, 'i3285597006-s16607353298', 'https://ph-live.slatic.net/p/b0b22bf1ff7b123786e1d74e3840bb6c.png', 530.00),
(34, 'i3285419921-s16607186766', 'https://ph-live.slatic.net/p/45d7d8f0217b0e76f4c1cfdf8d401a8c.png', 480.00),
(35, 'i3285487557-s16607274193', 'https://ph-live.slatic.net/p/45d7d8f0217b0e76f4c1cfdf8d401a8c.png', 480.00),
(36, 'i3285512450-s16607201633', 'https://ph-live.slatic.net/p/dd621755a5f279b6411c102e97eaefb3.png', 400.00),
(37, 'i3285509461-s16606991811', 'https://ph-live.slatic.net/p/5c051e074b0fda3ce67e062ba56e1190.png', 325.00),
(38, 'i3285527352-s16607289150', 'https://ph-live.slatic.net/p/5c051e074b0fda3ce67e062ba56e1190.png', 325.00),
(39, 'i3285540260-s16607225408', 'https://ph-live.slatic.net/p/78648b77c22179d867ec134706127514.png', 370.00),
(40, 'i3285564138-s16607310062', 'https://ph-live.slatic.net/p/78648b77c22179d867ec134706127514.png', 370.00),
(41, 'i3285513389-s16606996798', 'https://ph-live.slatic.net/p/feeb7ce5116e1fc8c18019e6db4443ef.png', 325.00),
(42, 'i3285504418-s16607274093', 'https://ph-live.slatic.net/p/feb68f156e156d28956cdd942106cb75.png', 370.00),
(43, 'i3285408951-s16607225363', 'https://ph-live.slatic.net/p/78648b77c22179d867ec134706127514.png', 350.00),
(44, 'i3285421939-s16607212555', 'https://ph-live.slatic.net/p/5c051e074b0fda3ce67e062ba56e1190.png', 350.00),
(45, 'i3285532281-s16607178620', 'https://ph-live.slatic.net/p/d96ca09cdded81d3874526e840ca3e40.png', 350.00),
(46, 'i3285579092-s16607186428', 'https://ph-live.slatic.net/p/d96ca09cdded81d3874526e840ca3e40.png', 350.00),
(47, 'i3285550155-s16607101783', 'https://ph-live.slatic.net/p/d96ca09cdded81d3874526e840ca3e40.png', 350.00),
(48, 'i3285444774-s16607109846', 'https://ph-live.slatic.net/p/78648b77c22179d867ec134706127514.png', 310.00),
(49, 'i3285580072-s16607216185', 'https://ph-live.slatic.net/p/d96ca09cdded81d3874526e840ca3e40.png', 310.00),
(50, 'i3285547194-s16606996720', 'https://ph-live.slatic.net/p/d96ca09cdded81d3874526e840ca3e40.png', 310.00),
(51, 'i3285437816-s16607237127', 'https://ph-live.slatic.net/p/9285effa30cd3e8c1f6653fa2acaa429.png', 370.00),
(52, 'i3285402978-s16607125294', 'https://ph-live.slatic.net/p/49b05f84d79731921697c19c96f749f9.png', 370.00),
(53, 'i3285428842-s16607077797', 'https://ph-live.slatic.net/p/9285effa30cd3e8c1f6653fa2acaa429.png', 325.00),
(54, 'i3285436834-s16607179161', 'https://ph-live.slatic.net/p/9285effa30cd3e8c1f6653fa2acaa429.png', 325.00),
(55, 'i3285399987-s16606947589', 'https://ph-live.slatic.net/p/2e067af9545639c85e8a78402c703da5.png', 310.00),
(56, 'i3285411938-s16607058310', 'https://ph-live.slatic.net/p/49b05f84d79731921697c19c96f749f9.png', 310.00),
(57, 'i3285447749-s16607119534', 'https://ph-live.slatic.net/p/49b05f84d79731921697c19c96f749f9.png', 310.00),
(58, 'i3285506408-s16607122230', 'https://ph-live.slatic.net/p/47110c722170f322fd2e85b6937a5df8.png', 300.00),
(59, 'i3285550130-s16607007454', 'https://ph-live.slatic.net/p/47110c722170f322fd2e85b6937a5df8.png', 310.00),
(60, 'i3285411922-s16606952933', 'https://ph-live.slatic.net/p/82ab216ef593c8521a72737a8f91424a.png', 310.00),
(61, 'i3285503396-s16607115242', 'https://ph-live.slatic.net/p/42358a913f2c413a25b055cfb88686fa.png', 400.00),
(62, 'i3285464612-s16607149058', 'https://ph-live.slatic.net/p/42358a913f2c413a25b055cfb88686fa.png', 400.00),
(63, 'i3285497415-s16607043661', 'https://ph-live.slatic.net/p/82ab216ef593c8521a72737a8f91424a.png', 400.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `email`, `password`, `code`, `status`, `date_created`) VALUES
(1, 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 8519, 'INVALID', '2023-08-18'),
(2, 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 7278, 'INVALID', '2023-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_comment`
--
ALTER TABLE `tbl_product_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_info`
--
ALTER TABLE `tbl_product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_info_price`
--
ALTER TABLE `tbl_product_info_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_product_comment`
--
ALTER TABLE `tbl_product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product_info`
--
ALTER TABLE `tbl_product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_product_info_price`
--
ALTER TABLE `tbl_product_info_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
