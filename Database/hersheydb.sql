-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodiedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin_image` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `admin_image`, `email`, `username`, `password`, `phone`, `role`) VALUES
(10, 'Heroien M. Martinez', '442365325_450165137425926_956875252769839375_n.jpg', 'Jovypinapin0114@gmail.com', 'Heroien', 'Heroien76', '09269757736', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `food_id`, `session_id`, `qty`, `total_cost`) VALUES
(16, 15, '6umc9u61221ietf5k359bouj4h', 2, '138'),
(17, 7, '6umc9u61221ietf5k359bouj4h', 1, '50'),
(18, 6, '8qjqm4t1ib2ov39ceblj8gnlk4', 1, '36'),
(20, 6, 'kotd04p9kh51ifmdestm5rmeg5', 1, '36'),
(22, 7, 'kotd04p9kh51ifmdestm5rmeg5', 1, '50'),
(24, 25, 'kotd04p9kh51ifmdestm5rmeg5', 1, '43'),
(25, 24, 'kotd04p9kh51ifmdestm5rmeg5', 3, '168'),
(26, 8, '33afnid7ce6o7a9b72lck88ijj', 1, '40'),
(27, 18, '33afnid7ce6o7a9b72lck88ijj', 2, '120'),
(28, 14, 'hdkrmq3d4qmd95l23phv6fsb1i', 1, '49'),
(29, 14, '52f1gojkb9aus82pdet31glq10', 1, '49'),
(30, 38, 'aa35ioagcu1mk444noaq4jv8pp', 1, '220');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboys`
--

CREATE TABLE `deliveryboys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `db_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `deliveryboys`
--

INSERT INTO `deliveryboys` (`id`, `name`, `phone`, `email`, `db_image`) VALUES
(3, 'John Hero Dela Cruz', '09999999999', 'ehor@gmail.com', '317536553_3438542633042477_6558825462609729922_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_desc` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `image`, `food_name`, `food_desc`, `category`, `price`) VALUES
(30, 'argentine-corned-beef-can-150g.jpg', 'Argentina Corned Beef Bundle', '12pcs', 'localfood', '480'),
(33, 'nova.png', 'Nova Bundle', '12pcs', 'fastfood', '240'),
(34, 'piattos_cheese_potato_chips_40g-600x600.jpg', 'Piattos Bundle', '12pcs', 'fastfood', '240'),
(35, 'Vcut-Potato-Chips-Spicy-Barbecue-Flavor-25g-500x500-product_popup.png', 'Vcut Bundle', '12pcs', 'fastfood', '240'),
(36, 'head_shoulders_cool_menthol_shampoo_sachet_12ml_1.jpg', 'Head and Shoulders Bundle', '10pcs', 'cakes', '90'),
(37, 'Creamsilk-Sachet-Damage-Control-Conditioner-6pcsX11mL-500x500-product_popup.jpg', 'Cream Silk Bundle', '10pcs', 'cakes', '90'),
(38, 'safeguard.jpg', 'Safe Guard Bundle', '10pcs', 'cakes', '220'),
(39, 'soy sauce.jpg', 'Data Puti Soy Sauce Bundle', '12pcs', 'dessert', '120'),
(40, 'vinegar.jpg', 'Datu Puti Vinegar Bundle', '12pcs', 'dessert', '108'),
(41, 'coke.png', 'Coke Mismo Bundle', '12pcs', 'drinks', '240'),
(42, 'royal.png', 'Royal Mismo Bundle', '12 pcs', 'drinks', '240'),
(43, 'sting.png', 'Sting Bundle', '12pcs', 'drinks', '240'),
(44, 'Mega-Sardines-in-Tomato-Sauce-425g-1.jpg', 'Mega Sardines Bundle', '12pcs', 'localfood', '324'),
(45, '555-afritada.jpg', '555 Tuna Bundle', '12pcs', 'localfood', '456'),
(46, 'century.jpg', 'Century Tuna Bundle', '12pcs ', 'localfood', '480'),
(47, 'san marino.jpg', 'San Marino Bundle', 'Corned Tuna\r\n12pcs', 'localfood', '480'),
(48, 'mountain dew.png', 'Mountain Dew Mismo Bundle', '12pcs', 'drinks', '240'),
(49, 'sprite.png', 'Sprite Mismo', '12pcs', 'drinks', '240'),
(50, 'popcorn.jpg', 'Oishi Popcorn Bundle', '12pcs', 'fastfood', '240'),
(51, 'cracklings.png', 'Cracklings Bundle', '12pcs', 'fastfood', '120'),
(52, 'palmolive-naturals-ultra-smooth-triple-sachet-shampoo-15ml_1.jpg', 'Palmolive Bundle', '10pcs', 'cakes', '90'),
(53, 'sunsilk.png', 'Sunsilk Bundle', '10pcs', 'cakes', '90'),
(54, 'ufc.jpg', 'UFC Ketchup', '12pcs', 'dessert', '192'),
(55, 'Mang-Tomas-All-Around-Sarsa-Regular-100g-500x500-product_popup.png', 'Mang Tomas Bundle', '12pcs', 'dessert', '180'),
(56, 'Mama_Sitas_Oyster_Sauce_Sachet_30g_6sr_3f247602-7e45-4528-9d5d-09afd00a59f7_512x.jpg', 'Oyster Sauce Bundle', '12pcs', 'dessert', '120');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_ID` int(11) NOT NULL,
  `cust_fname` varchar(15) NOT NULL,
  `cust_sname` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `location` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street` varchar(15) NOT NULL,
  `building` varchar(10) NOT NULL,
  `message` varchar(225) NOT NULL,
  `total_cost` varchar(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_ID`, `cust_fname`, `cust_sname`, `contact`, `location`, `email`, `street`, `building`, `message`, `total_cost`, `order_status`, `payment`, `updated_by`, `updated_date`) VALUES
(25, 18, 'Damon Ellison', 'Devin Stark', '099999999999', '', 'gikezi@mailinator.com', 'macban st', '1', '', '36', 'delivered', 'C.O.D', 'Heroien', '2024-05-10 17:59:35'),
(27, 27, 'Bree Kelly', 'Alfonso Frankli', '099999999999', 'tandang sora', 'wodubeni@mailinator.com', 'agno st', '2', '', '160', 'delivered', 'C.O.D', 'Heroien', '2024-05-10 17:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryboys`
--
ALTER TABLE `deliveryboys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `deliveryboys`
--
ALTER TABLE `deliveryboys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
