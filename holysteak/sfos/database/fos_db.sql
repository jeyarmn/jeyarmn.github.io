-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 04:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_customer`
--

CREATE TABLE `food_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_customer`
--

INSERT INTO `food_customer` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'Mark Cooper', 'mcooper@mail.com', '202cb962ac59075b964b07152d234b70', '1234567890', 'A - 1111 Street road, Newyork USA.'),
(2, 'Samantha Miller', 'sam23@mail.com', '45bff2a14658fc9b21c6e5e9bf75186b', '0913245879', 'My Sample Address'),
(3, 'Clairy Blake', 'cblake@mail.com', '4744ddea876b11dcb1d169fadf494418', '09654789123', 'Sample Address 101'),
(4, 'jayr natividad', 'jayrnatividad26@gmail.com', '7cd8734e5a70def2b109d40fd2daa58f', '09453322111', '41 c santos st'),
(5, 'jayrmn', 'jayr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '091332457852', '50 c'),
(6, 'Vince', 'vincejesalva@gmail.com', 'fbe82b93c071bedda31afded400cca52', '09954587878', 'Pasig City');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `price`, `description`, `images`, `status`) VALUES
(1, 'Australian Beef', 180, 'With Rice and Drink', './images/menu1.jpg', 'ENABLE'),
(2, 'AUS Strirloin', 270, 'With Rice', './images/menu2.jpg', 'ENABLE'),
(3, 'AUS T-Bone', 270, 'With Rice', './images/menu3.jpg', 'ENABLE'),
(4, 'Smoked Hungarian', 150, 'With Rice', './images/menu4.jpg', 'ENABLE'),
(5, 'Burger Steak', 180, 'With Rice', './images/menu5.jpg', 'ENABLE'),
(6, 'Beef Salpicao', 210, 'With Rice', './images/menu6.jpg', 'ENABLE'),
(7, 'Beef Pepper Rice', 180, 'With Rice', './images/menu7.jpg', 'ENABLE'),
(8, 'Wagyu Cubes', 180, 'With Rice', './images/menu8.jpg', 'ENABLE'),
(9, 'Shark\'s Fin', 200, '10pcs (With RICE)', './images/appetizer1.jpg', 'ENABLE'),
(10, 'Crab Cake', 200, '12pcs (With Rice)', './images/appetizer2.jpg', 'ENABLE'),
(11, 'Crab Claw', 200, '12pcs (With Rice)', './images/appetizer3.jpg', 'ENABLE'),
(12, 'Scallop Cake', 200, '12pcs (With Rice)', './images/appetizer4.jpg', 'ENABLE'),
(13, 'Lobster Ball', 200, '12pcs (With Rice)', './images/appetizer5.jpg', 'ENABLE'),
(14, 'Gyoza', 200, '10pcs (With Rice)', './images/appetizer6.jpg', 'ENABLE'),
(15, 'Coke, Royal, Sprite', 20, '20each', './images/drinks1.jpg', 'ENABLE'),
(16, 'Pineapple Juice', 80, '1pcs', './images/drinks2.jpg', 'ENABLE'),
(17, 'San Mig Apple', 80, '1pcs', './images/drinks4.png', 'ENABLE'),
(18, 'San Mig Pale Pilsen', 80, '1pcs', './images/drinks5.png', 'ENABLE'),
(19, 'Red Horse Beer', 80, '1pcs (500ml)', './images/drinks6.png', 'ENABLE'),
(20, 'Red Horse Beer', 480, 'Bucket', './images/drinks7.png', 'ENABLE'),
(21, 'San Mig Bucket', 360, 'Bucket', './images/drinks8.png', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `food_orders`
--

CREATE TABLE `food_orders` (
  `id` int(30) NOT NULL,
  `item_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `order_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_customer`
--
ALTER TABLE `food_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_orders`
--
ALTER TABLE `food_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_customer`
--
ALTER TABLE `food_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `food_orders`
--
ALTER TABLE `food_orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_orders`
--
ALTER TABLE `food_orders`
  ADD CONSTRAINT `item_id_fk` FOREIGN KEY (`item_id`) REFERENCES `food_items` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
