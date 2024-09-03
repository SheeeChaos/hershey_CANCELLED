-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 01:48 PM
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
-- Database: `hersheydb`
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
  `role` varchar(10) NOT NULL,
  `verify_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `admin_image`, `email`, `username`, `password`, `phone`, `role`, `verify_token`) VALUES
(10, 'Heroien M. Martinez', '442365325_450165137425926_956875252769839375_n.jpg', 'storeheshey@gmail.com', 'Heroien', '$2y$10$u1QnmkEJCdUARzg6rw.RuO.q11f.7dNM85PwS/QF2wXLuK3dDlagq', '09269757736', 'manager', '');

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
(30, 38, 'aa35ioagcu1mk444noaq4jv8pp', 1, '220'),
(31, 35, 'kr8jobq3nuji1qjdlh0u5cb178', 1, '240'),
(32, 33, 'kr8jobq3nuji1qjdlh0u5cb178', 1, '240'),
(33, 50, 'ia12h65fsatke8fc2gorquddbj', 1, '240'),
(35, 34, 'qkdcohpo6272bugd0qsdm4o7ub', 1, '240'),
(40, 122, '4eg9bu9iepdh1l6lg2jtschvrj', 1, '14'),
(45, 108, 'pmk02kes2kumermbseoth9fand', 1, '155'),
(46, 140, 'cj5ovfqb5h08cvivu4716fpgt2', 1, '78'),
(47, 107, 'cj5ovfqb5h08cvivu4716fpgt2', 1, '155'),
(48, 122, 'jal6u6tc5sovmsvocgpc5ieknl', 1, '14'),
(49, 122, 'snk5ovscj36h8rmcp3cbcfqacc', 1, '14'),
(50, 122, 'ot1oubuk1qc4ndv7ilqkmtt45j', 1, '14'),
(51, 139, 'ot1oubuk1qc4ndv7ilqkmtt45j', 1, '115'),
(52, 72, 'n9a5lsm5ghkg6vfgr8vkram8bp', 5, '50'),
(53, 108, '7f2koq5jkr2ghtdojtt77b0j5r', 1, '155'),
(54, 50, 'lrcfbb08najvsgo5oqi8h9mr5p', 7, '105'),
(55, 52, 'unna3n8n8th2sknmv7a74str0f', 1, '90'),
(56, 52, 'unna3n8n8th2sknmv7a74str0f', 1, '90'),
(57, 122, 'gfdajejrkqd98de3luu4q7upmc', 1, '14'),
(58, 41, 'q63q7071b5tm4mfrhjvd1c3214', 1, '190'),
(59, 68, 'bsrnkfi29kjvsgg8nkkhee6nng', 1, '120');

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
(3, 'John Hero Dela Cruz', '09999999999', 'ehor@gmail.com', '317536553_3438542633042477_6558825462609729922_n.jpg'),
(4, 'vincent', '122312312', 'vincent@gmail.com', '319902259_705259114567977_8050488518039952617_n.jpg');

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
  `price` varchar(10) NOT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `image`, `food_name`, `food_desc`, `category`, `price`, `barcode`, `stock`) VALUES
(30, 'download - 2024-06-12T184511.623.png', 'Argentina Corned 150g', '1pcs                                EXP: 1/10/2026', 'canned', '37', '111111', 50),
(33, 'download - 2024-06-12T224318.793.png', 'Nova ', '1pcs EXP: 1/10/2027', 'snacks', '17', '222222', 50),
(34, 'download - 2024-06-12T224322.283.png', 'Piattos', '1pcs EXP: 1/10/2027', 'snacks', '18', '333333', 50),
(35, 'download - 2024-06-12T224454.808.png', 'Vcut ', '1pcs EXP: 1/10/2027', 'snacks', '15', '444444', 50),
(36, 'download - 2024-06-12T230307.415.png', 'Head and Shoulders Bundle', '10pcs EXP: 1/10/2027', 'essentials', '90', '555555', 50),
(37, 'download - 2024-06-12T231258.054.png', 'Cream Silk Bundle', '10pcs EXP: 1/10/2027', 'essentials', '90', '666666', 50),
(38, 'download - 2024-06-12T231254.851.png', 'Safe Guard Bundle', '10pcs EXP: 1/10/2027', 'essentials', '220', '777777', 50),
(39, 'download - 2024-06-12T232003.615.png', 'Data Puti Soy Sauce ', '1pcs EXP: 1/10/2027', 'condiments', '10', '888888', 50),
(40, 'download - 2024-06-12T232159.130.png', 'Datu Puti Vinegar Bundle', '1pcs EXP: 1/10/2027', 'condiments', '10', '999999', 50),
(41, 'download - 2024-06-12T215143.741.png', 'Coke Mismo', '12pcs EXP: 1/10/2027', 'drinks', '190', '000011', 50),
(42, 'download - 2024-06-12T215151.717.png', 'Royal Mismo Bundle', '12pcs EXP: 1/10/2027', 'drinks', '190', '000022', 50),
(43, 'download - 2024-06-12T215326.712.png', 'Sting Bundle', '12pcs EXP: 1/10/2027', 'drinks', '190', '000033', 50),
(44, 'download - 2024-06-12T203519.600.png', 'Mega Sardines Green', '1pcs EXP: 1/10/2027', 'canned', '25', '000044', 50),
(45, 'download - 2024-06-12T203750.700.png', '555 Tuna ', '1pcs EXP: 1/10/2027', 'canned', '29', '000055', 50),
(46, 'download - 2024-06-12T203844.127.png', 'Century Tuna ', '1pcs EXP: 1/10/2027', 'canned', '36', '000066', 50),
(47, 'download - 2024-06-12T204536.447.png', 'San Marino ', '1pcs EXP: 1/10/2027', 'canned', '37', '000077', 50),
(48, 'download - 2024-06-12T215322.486.png', 'Mountain Dew Mismo Bundle', '12pcs EXP: 1/10/2027', 'drinks', '185', '000088', 50),
(49, 'download - 2024-06-12T221227.834.png', 'Sprite Mismo', '12pcs EXP: 1/10/2027', 'drinks', '190', '000099', 50),
(50, 'download - 2024-06-12T224502.137.png', 'Oishi Popcorn Bundle', '1pcs EXP: 1/10/2027', 'snacks', '15', '110000', 50),
(51, 'download - 2024-06-12T224505.984.png', 'Cracklings ', '1pcs EXP: 1/10/2027', 'snacks', '17', '220000', 49),
(52, 'download - 2024-06-12T231250.944.png', 'Palmolive Bundle', '10pcs EXP: 1/10/2027', 'essentials', '90', '330000', 50),
(53, 'download - 2024-06-12T231242.658.png', 'Sunsilk Bundle', '10pcs EXP: 1/10/2027', 'essentials', '90', '440000', 50),
(54, 'download - 2024-06-12T232259.468.png', 'UFC Ketchup', '1pcs EXP: 1/10/2027', 'condiments', '10', '550000', 50),
(56, 'Mama_Sitas_Oyster_Sauce_Sachet_30g_6sr_3f247602-7e45-4528-9d5d-09afd00a59f7_512x.jpg', 'Oyster Sauce Bundle', '12pcs', '', '120', '770000', 50),
(57, 'download - 2024-06-12T205157.299.png', 'CDO CORNED BEEF ', '1pcs EXP: 1/10/2027', 'canned', '35', '880000', 50),
(58, 'download - 2024-06-12T205613.510.png', 'Maling ', '1pcs EXP: 1/10/2027', 'canned', '115', '990000', 50),
(59, 'download - 2024-06-12T210855.442.png', 'Lucky 7', '1pcs EXP: 1/10/2027', 'canned', '28', '001100', 50),
(60, 'download - 2024-06-12T211607.180.png', 'Pure Foods Corned Beef ', '1pcs EXP: 1/10/2027', 'canned', '38', '002200', 50),
(61, 'download - 2024-06-12T213614.777.png', 'Hokkaido Mackerel ', '1pcs EXP: 1/10/2027', 'canned', '38', '003300', 50),
(62, 'download - 2024-06-12T224509.800.png', 'Clover Chips ', '1pcs EXP: 1/10/2027', 'snacks', '16', '004400', 50),
(63, 'download - 2024-06-12T224513.400.png', 'Ding Dong ', '1pcs EXP: 1/10/2027', 'snacks', '14', '005500', 50),
(64, 'download - 2024-06-12T224517.388.png', 'Chippy ', '1pcs EXP: 1/10/2027', 'snacks', '16', '006600', 50),
(65, 'download - 2024-06-12T225331.440.png', 'Pillows ', '1pcs EXP: 1/10/2027', 'snacks', '17', '007700', 50),
(66, 'download - 2024-06-12T225520.702.png', 'Oishi Crackers', '1pcs EXP: 1/10/2027', 'snacks', '18', '008800', 50),
(67, 'download - 2024-06-12T231238.159.png', 'Silka Bundle', '10pcs EXP: 1/10/2027', 'essentials', '250', '009900', 50),
(68, 'download - 2024-06-12T231233.699.png', 'Tide Bundle', '10pcs EXP: 1/10/2027', 'essentials', '120', '001111', 50),
(69, 'download - 2024-06-12T231229.811.png', 'Downy 3 in 1 Bundle', '10pcs EXP: 1/10/2027', 'essentials', '35', '002222', 50),
(70, 'download - 2024-06-12T231224.900.png', 'Keratin Gold Bundle', '10pcs EXP: 1/10/2027', 'essentials', '89', '003333', 50),
(71, 'download - 2024-06-12T231219.049.png', 'Bioderm Bundle', ' 10pcs EXP: 1/10/2027', 'essentials', '65', '004444', 50),
(72, 'download - 2024-06-12T232635.275.png', 'Del Monte Tomato Bundle', '1pcs EXP: 1/10/2027', 'condiments', '10', '005555', 50),
(73, 'download - 2024-06-12T232807.929.png', 'Silver Swan Soy Sauce Bundle', '1pcs EXP: 1/10/2027', 'condiments', '10', '006666', 50),
(74, 'download - 2024-06-12T232935.606.png', 'Magic Sarap Bundle', '1pcs EXP: 1/10/2027', 'condiments', '50', '007777', 50),
(75, 'download - 2024-06-12T233105.209.png', 'Namnam ', '1pcs EXP: 1/10/2027', 'condiments', '10', '008888', 50),
(76, 'download - 2024-06-12T233222.309.png', 'Mayonnaise ', '1pcs EXP: 1/10/2027', 'condiments', '10', '009999', 50),
(77, '1.png', 'Wow Ulam', '1pcs EXP: 1/10/2027', 'canned', '29', '111100', 50),
(78, 'download (1).png', 'Argentina Meat Loaf', '1pcs EXP: 1/10/2027', 'canned', '25', '222200', 50),
(79, 'download (2).png', 'Argentina Beff Loaf', '1pcs EXP: 1/10/2027', 'canned', '30', '333300', 50),
(80, 'download (3).png', 'Young Town Green', '1pcs EXP: 1/10/2027', 'canned', '25', '444400', 50),
(81, 'download (4).png', 'Young Town Red', '1pcs EXP: 1/10/2027', 'canned', '25', '555500', 50),
(82, 'download (5).png', 'San Marino Yellow', '1pcs EXP: 1/10/2027', 'canned', '38', '666600', 50),
(83, 'download (6).png', 'San Marino flakes', '1pcs EXP: 1/10/2027', 'canned', '38', '777700', 50),
(84, 'download (7).png', 'Cobra Energy Drink Red', '12 pcs', 'drinks', '198', '888800', 50),
(85, 'download (8).png', 'Cobra Energy Drink Green ', '12 pcs', 'drinks', '198', '999900', 50),
(86, 'download (9).png', 'Cobra Energy Drink Yellow', '12 pcs', 'drinks', '198', '111000', 50),
(87, 'download (11).png', 'Fruit Soda Lemon ', '12pcs EXP: 1/10/2027', 'drinks', '122', '222000', 50),
(88, 'download (10).png', 'Fruit Soda Orange', '12pcs EXP: 1/10/2027', 'drinks', '122', '333000', 50),
(89, 'download (12).png', 'RC Cola', '12pcs EXP: 1/10/2027', 'drinks', '122', '444000', 50),
(90, 'download (13).png', 'Root Beer', '12pcs EXP: 1/10/2027', 'drinks', '122', '555000', 50),
(91, 'download (14).png', 'Coke 1.5', '12pcs EXP: 1/10/2027', 'drinks', '732', '666000', 50),
(92, 'download - 2024-06-12T215151.717.png', 'Royal 1.5', '12pcs EXP: 1/10/2027', 'drinks', '732', '777000', 50),
(93, 'download (16).png', 'Sprite 1.5 ', '12pcs EXP: 1/10/2027', 'drinks', '732', '888000', 50),
(94, 'download (17).png', 'Zesto Mango ', '12pcs EXP: 1/10/2027', 'drinks', '102', '999000', 50),
(95, 'download (19).png', 'Zesto Apple', '1boxEXP: 1/10/2027', 'drinks', '92', '000111', 50),
(96, 'download (18).png', 'Zesto Orange', '1box EXP: 1/10/2027', 'drinks', '92', '000222', 50),
(97, 'download - 2024-06-12T225717.347.png', 'Cheese-It Red', '1pcs EXP: 1/10/2027', 'snacks', '15', '000333', 50),
(98, 'download (21).png', 'Cheese-It Yellow', '1pcs EXP: 1/10/2027', 'snacks', '15', '000444', 50),
(99, 'download (24).png', 'Moby Caramel', '1pcs EXP: 1/10/2027', 'snacks', '15', '000555', 50),
(100, 'download (23).png', 'Moby Chocolate', '1pcs EXP: 1/10/2027', 'snacks', '15', '000666', 50),
(101, 'download (22).png', 'Cheese Ring', '1pcs EXP: 1/10/2027', 'snacks', '15', '000777', 50),
(105, 'download (25).png', 'Marlboro Red', '1 pack ', 'ciggar', '155', '000888', 50),
(106, 'download (26).png', 'Marlboro Light', '1 pack', 'ciggar', '155', '000999', 50),
(107, 'download (70).png', 'Marlboro Black', '1 pack', 'ciggar', '155', '101010', 50),
(108, 'download (69).png', 'Marlboro Blue', '1 pack', 'ciggar', '155', '202020', 50),
(109, 'download (75).png', 'Camel Red', '1 pack', 'ciggar', '107', '303030', 50),
(110, 'download (76).png', 'Camel Light', '1 pack', 'ciggar', '107', '404040', 50),
(111, 'download (79).png', 'Winston Red', '1 pack', 'ciggar', '144', '505050', 50),
(112, 'download (77).png', 'Winston Light', '1 pack', 'ciggar', '144', '606060', 50),
(113, 'download (78).png', 'Winston Mint', '1 pack', 'ciggar', '144', '707070', 50),
(114, 'chester.png', 'Chester Red', '1 pack', 'dessert', '107', '808080', 50),
(115, 'download (68).png', 'Chester white', '1 pack', 'ciggar', '107', '909090', 50),
(116, 'download (71).png', 'Mighty Red', '1 pack', 'ciggar', '126', '010101', 50),
(117, 'download (72).png', 'Mighty Green', '1 pack', 'ciggar', '126', '020202', 50),
(118, 'download (73).png', 'Fortune Light', '1pack', 'ciggar', '126', '030303', 50),
(119, 'download (67).png', 'Sweet & Spicy', '1pcs EXP: 1/10/2027', 'canton', '14', '040404', 50),
(120, 'download (66).png', 'Extra Hot', '1pcs EXP: 1/10/2027', 'canton', '14', '050505', 50),
(121, 'download (63).png', 'Original ', '10pcs EXP: 1/10/2027', 'canton', '14', '060606', 50),
(122, 'download (64).png', 'Chilimansi', '1pcs EXP: 1/10/2027', 'canton', '14', '070707', 50),
(123, 'download (65).png', 'Calamansi', '1pcs EXP: 1/10/2027', 'canton', '14', '080808', 50),
(124, 'download (59).png', 'Ho-mi Beef', '1pcs EXP: 1/10/2027', 'canton', '9', '090909', 50),
(125, 'download (58).png', 'Ho-mi Chicken ', '1pcs EXP: 1/10/2027', 'canton', '9', '111122', 50),
(126, 'download (62).png', 'Lucky Me Beef', '1pcs EXP: 1/10/2027', 'canton', '9', '111133', 50),
(127, 'download (61).png', 'Lucky Me Chicken', '1pcs EXP: 1/10/2027', 'canton', '9', '111144', 50),
(128, 'download (60).png', 'Lucky Me Labuyo', '1pcs1pcs EXP: 1/10/2027', 'canton', '11', '111155', 50),
(129, 'download (57).png', 'Cup Noodles seafood', '1pcs EXP: 1/10/2027', 'canton', '22', '111166', 50),
(130, 'download (56).png', 'Cup Noodles Spicy seafood', '1pcs EXP: 1/10/2027', 'canton', '22', '111177', 50),
(131, 'download (52).png', 'Cup Noodles Beef', '1pcs EXP: 1/10/2027', 'canton', '22', '111188', 50),
(132, 'download (50).png', 'Cup Noodles Jjamppong', '1pcs EXP: 1/10/2027', 'canton', '27', '111199', 50),
(133, 'download (51).png', 'Cup Noodles Sontanghon', '1pcs EXP: 1/10/2027', 'canton', '25', '222211', 50),
(134, 'download (55).png', 'Cup Noodles Bulalo', '1pcs EXP: 1/10/2027', 'canton', '22', '222233', 50),
(135, 'download (54).png', 'Cup Noodles Spicy Bulalo', '1pcs EXP: 1/10/2027', 'canton', '22', '222244', 50),
(136, 'download (53).png', 'Cup Noodles Spicy Hot Beef', '1pcs\r\nexp 1/10/2026', 'canton', '22', '222255', 50),
(137, 'download - 2024-06-12T234009.679.png', 'Blanca Twin', '10pcs EXP: 1/10/2027', 'coffee', '118', '222266', 50),
(138, 'download (45).png', 'Blanca Single', '10pcs EXP: 1/10/2027', 'coffee', '80', '222277', 50),
(139, 'download (48).png', 'Brown Twin', '10pcs EXP: 1/10/2027', 'coffee', '115', '222288', 50),
(140, 'download (49).png', 'Brown Single', '10pcs EXP: 1/10/2027', 'coffee', '78', '222299', 50),
(141, 'download (47).png', 'Black Twin ', '10pcs EXP: 1/10/2027', 'coffee', '115', '333311', 50),
(142, 'download (46).png', 'Black Single', '10pcs EXP: 1/10/2027', 'coffee', '78', '333322', 50),
(143, 'download (44).png', 'Nescafe Original 3-1', '10pcs EXP: 1/10/2027', 'coffee', '119', '333344', 50),
(145, 'download (42).png', 'Nescafe Creamy White 3-1 Single', '10pcs', 'coffee', '88', '333355', 50),
(146, 'download (43).png', 'Nescafe Original 3-1 Single', '10pcs EXP: 1/10/2027', 'coffee', '88', '333366', 50),
(147, 'download (40).png', 'Nescafe Creamy Latte 3-1 Twin', '10pcs EXP: 1/10/2027', 'coffee', '119', '333377', 50),
(148, 'download (39).png', 'Nescafe Creamy White 3-1 Twin', '10pcs EXP: 1/10/2027', 'coffee', '119', '333388', 50),
(150, 'download (38).png', 'Great Taste White Twin', '10pcs EXP: 1/10/2027', 'coffee', '114', '444411', 50),
(151, 'download (37).png', 'Great Taste White Single', '10pcs EXP: 1/10/2027', 'coffee', '78', '444422', 50),
(152, 'download (35).png', 'Great Taste Choco Twin', '10pcs EXP: 1/10/2027', 'coffee', '120', '444433', 50),
(153, 'download (36).png', 'Great Taste Choco Single', '10pcs EXP: 1/10/2027', 'coffee', '88', '444455', 50),
(154, 'download (33).png', 'Bear Brand Swak', '10pcs EXP: 1/10/2027', 'coffee', '86', '444466', 50),
(155, 'download (31).png', 'Champion Twin', '10pcs EXP: 1/10/2027', 'coffee', '110', '444477', 50),
(156, 'download (30).png', 'Champion Single', '10pcs EXP: 1/10/2027', 'coffee', '78', '444488', 50),
(157, 'download (34).png', 'Milo', '10pcs EXP: 1/10/2027', 'coffee', '105', '444499', 50),
(158, 'download (32).png', 'Energen Choco', '10pcs EXP: 1/10/2027', 'coffee', '78', '555511', 50),
(159, 'download (29).png', 'Energen Vanilla', '10pcs EXP: 1/10/2027', 'coffee', '78', '555522', 50),
(160, 'download (28).png', 'Pandesal Mate', '10pcs EXP: 1/10/2027', 'coffee', '88', '555533', 50),
(162, 'download (81).png', 'Mentos Fruit', '1pack EXP: 1/10/2027', 'candy', '42', '555566', 50),
(163, 'download (84).png', 'Mentos', '1pack EXP: 1/10/2027', 'candy', '42', '555577', 50),
(164, 'download (87).png', 'Maxx Yellow', '1pack EXP: 1/10/2027', 'candy', '42', '555588', 50),
(165, 'download (86).png', 'Maxx Red', '1pack EXP: 1/10/2027', 'candy', '42', '555599', 50),
(166, 'download (89).png', 'Maxx Green', '1pack EXP: 1/10/2027', 'candy', '42', '666611', 50),
(167, 'download (88).png', 'Maxx Orange ', '1pack EXP: 1/10/2027', 'candy', '42', '666611', 50),
(168, 'download (90).png', 'Maxx White', '1pack EXP: 1/10/2027', 'candy', '42', '666611', 50),
(169, 'chester.png', 'Chester Red', '1 Pack', 'ciggar', '107', NULL, NULL),
(170, 'download (90).png', 'SnowBear', '1pack EXP: 1/10/2027', 'candy', '48', NULL, NULL),
(171, 'download - 2024-06-12T232435.297.png', 'Mang Tomas', '1pcs EXP: 1/10/2027', 'condiments', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_items`
--

CREATE TABLE `monthly_items` (
  `id` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `total_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monthly_items`
--

INSERT INTO `monthly_items` (`id`, `month`, `total_items`) VALUES
(1, 'June 2024', 35),
(2, 'July 2024', 45),
(3, 'August 2024', 55),
(4, 'September 2024', 65),
(5, 'October 2024', 75),
(6, 'November 2024', 85),
(7, 'December 2024', 95);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_ID` int(11) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street` varchar(15) NOT NULL,
  `houseNo` varchar(10) NOT NULL,
  `message` varchar(225) NOT NULL,
  `total_cost` varchar(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_ID`, `Fname`, `phone`, `location`, `email`, `street`, `houseNo`, `message`, `total_cost`, `order_status`, `payment`, `updated_by`, `updated_date`, `image`) VALUES
(25, 18, 'Damon Ellison', '099999999999', '', 'gikezi@mailinator.com', 'macban st', '1', '', '36', 'delivered', 'C.O.D', 'Heroien', '2024-05-10 17:59:35', NULL),
(27, 27, 'Bree Kelly', '099999999999', 'tandang sora', 'wodubeni@mailinator.com', 'agno st', '2', '', '160', 'delivered', 'C.O.D', 'Heroien', '2024-05-10 17:59:43', NULL),
(28, 32, 'reylouie', '09945360225', 'London', 'reylouejoson@gmail.com', 'alpan st', '2', 'PAKIBILISAN PO', '480', 'delivered', 'C.O.D', 'Heroien', '2024-06-10 13:58:13', NULL),
(36, 52, '', '', '', '', '', '', '', '50', '', 'C.O.D', '', '', ''),
(37, 53, '', '', '', '', '', '', '', '155', 'ordered', 'C.O.D', 'Heroien', '2024-06-13 17:02:02', NULL),
(38, 54, '', '', '', '', '', '', '', '105', '', 'C.O.D', '', '', NULL),
(39, 58, '', '', '', '', '', '', '', '190', '', 'C.O.D', '', '', NULL),
(40, 59, '', '', '', '', '', '', '', '120', 'on the way', 'C.O.D', 'Heroien', '2024-08-28 15:38:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rider_locations`
--

CREATE TABLE `rider_locations` (
  `id` int(11) NOT NULL,
  `rider_id` int(11) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rider_locations`
--

INSERT INTO `rider_locations` (`id`, `rider_id`, `latitude`, `longitude`, `timestamp`) VALUES
(1, NULL, 14.68190000, 121.04210000, '2024-06-05 08:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `quantity`, `total_price`, `date`) VALUES
(180, 11, 1, 0.50, '2024-06-04 13:12:52'),
(181, 17, 11, 55.00, '2024-06-04 14:01:37'),
(182, 18, 6, 60.00, '2024-06-04 14:01:37'),
(183, 20, 6, 24.00, '2024-06-04 14:01:37'),
(184, 51, 1, 120.00, '2024-06-05 08:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `sales_data`
--

CREATE TABLE `sales_data` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_income` int(11) NOT NULL,
  `total_orders` int(11) NOT NULL,
  `total_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_data`
--

INSERT INTO `sales_data` (`id`, `date`, `total_income`, `total_orders`, `total_items`) VALUES
(1, '2024-06-01', 500, 25, 35),
(2, '2024-06-02', 750, 50, 55),
(3, '2024-06-03', 1000, 75, 75),
(4, '2024-06-04', 1250, 100, 85);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `houseNo` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `verify_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `phone`, `location`, `role`, `Fname`, `houseNo`, `street`, `image`, `verify_token`) VALUES
(13, 'cojiqace.eviqeqe@jollyfree.com', 'Renzy', '$2y$10$epHKV/UDem7RzrYc7cj6VelERdR11eJJUFBfDkPkdANibMLxD1Sma', 1111, 'test1', 'user', 'Renz', 1111, 'test1', NULL, '');

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
-- Indexes for table `monthly_items`
--
ALTER TABLE `monthly_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rider_locations`
--
ALTER TABLE `rider_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sales_data`
--
ALTER TABLE `sales_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `deliveryboys`
--
ALTER TABLE `deliveryboys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `monthly_items`
--
ALTER TABLE `monthly_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rider_locations`
--
ALTER TABLE `rider_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `sales_data`
--
ALTER TABLE `sales_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
