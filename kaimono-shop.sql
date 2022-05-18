-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 03:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaimono-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'White Back Dress', 'A white back dress designed for your delightful outings on the summer time!', '339.00', '339.00', 1, 'back-dress.png', '2022-05-17 16:43:47'),
(2, 'Backless-Dress', 'A stylish dress colored black in order to show the magnificent sense of fashion!', '300.00', '349.00', 1, 'backless-dress.png', '2022-05-17 16:46:51'),
(3, 'Bag Wristlet', 'A bag wristlet that you can bring wherever you want, very flexible, very stylish, and very durable!', '269.00', '269.00', 1, 'bag-wristlet.png', '2022-05-17 16:51:05'),
(4, 'Baseball Cap', 'A cap to use not only on baseball games, but anywhere, anytime, anyhow you want to! Stylish and durable as well', '130.00', '150.00', 1, 'baseball-cap.png', '2022-05-17 16:51:05'),
(5, 'Beaded Bracelet', 'A beaded bracelet to give over someone special, or even yourself! Simple design, yet elegant', '200.00', '400.00', 1, 'beaded-bracelet.png', '2022-05-17 16:52:30'),
(6, 'Bow Tie', 'A bow tie that can be used in order to add style in your already stylish outfit. Made from 100% cotton!', '99.00', '99.00', 1, 'bow-tie.png', '2022-05-17 16:54:13'),
(7, 'Breasted Solid', 'An outfit to spice up things in your day! Use it as your OOTD or something else to have fun!', '130.00', '149.00', 1, 'breasted-solid.png', '2022-05-17 16:54:13'),
(8, 'Bucket Hat', 'A bucket hat with frog design to flex on your friends or other people when going outside!', '199.00', '200.00', 1, 'bucket-hat.png', '2022-05-17 16:56:56'),
(9, 'Buckle Belt', 'A buckle belt to add color and style to your plain old boring pants!', '59.00', '100.00', 1, 'buckle-belt.png', '2022-05-17 17:06:33'),
(10, 'Cami Dress BROWN', 'A cami dress that is designed for extreme fashion and bold posture and design. ', '149.00', '149.00', 1, 'cami-dress.png', '2022-05-17 17:09:27'),
(11, 'Cami Top WHITE', 'A cami top designed to be short for fashionistas who wants to show their extreme fashion to others', '139.00', '250.00', 1, 'cami-top.png', '2022-05-17 17:53:02'),
(12, 'Canvas Loafers', 'A footwear to use to be stylish when going outdoors, can be used casually or for... loafing!', '349.00', '349.00', 1, 'canvas-loafers.png', '2022-05-17 17:53:02'),
(13, 'Casual Sandals | ALL SIZES', 'A footwear to wear anytime, and anywhere you want to. Any event you want to, it FITS\r\nreally cool if you want to be stylish and classy among everyone you are around in casual situations!', '500.00', '560.00', 1, 'casual-sandals.png', '2022-05-17 18:13:17'),
(14, 'Charm Necklace (LIMITED STOCKS)', 'A handcrafted charm necklace firm and durable enough, as quality is assured for the betterment of the user', '399.00', '500.00', 1, 'charm-necklace.png', '2022-05-17 18:13:17'),
(15, 'Circle Bag', 'A circle bag that functions like a pouch that you can use anytime or anyhow you want to. A stylish, and soft one', '65.00', '65.00', 1, 'circle-bag.png', '2022-05-18 12:07:38'),
(16, 'Clutch Bag', 'A clutch bag for stylish preference in your outdoor goings!', '500.00', '390.00', 1, 'images/bags/clutch-bag.png', '2022-05-18 14:17:51'),
(17, 'Coin Purse', 'A black pure leather coin purse available for purchase! Get it while the stocks last!', '399.00', '299.00', 1, 'images/bags/coin-purse.png', '2022-05-18 14:31:40'),
(18, 'Combat Boots', 'Combat boots with legitimate leather used, really useful for extra physical activities where sturdy shoes are required.', '699.00', '699.00', 1, 'images/shoes/combat-boots.png', '2022-05-18 14:31:40'),
(19, 'Corduroy Shirt', 'A shirt befitting of classy style for outdoor goings', '249.00', '200.00', 1, 'images/tops/corduroy-shirt.png', '2022-05-18 14:31:40'),
(20, 'Crossbody Bag', 'A bag that you can use which is sturdy and durable, with quality and class.', '359.00', '300.00', 1, 'images/bag/crossbody-bag.png', '2022-05-18 14:31:40'),
(21, 'Cutout Top', 'Top for a classy style. COLORS AVAILABLE: BLACK', '250.00', '199.00', 1, 'images/tops/cutout-top.png', '2022-05-18 14:31:40'),
(22, 'Decor Necklace', 'Decor Necklace Available Now!', '150.00', '99.00', 1, 'images/accessories/decor-necklace.png', '2022-05-18 14:32:47'),
(23, 'Decor Ring', 'A decor ring to use as a decoration for different stuff, even your nails!', '120.00', '99.00', 1, 'images/accessories/decor-ring.png', '2022-05-18 14:35:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
