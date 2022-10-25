-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 12:02 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin testsss');

-- --------------------------------------------------------

--
-- Table structure for table `food_appetizers`
--

CREATE TABLE `food_appetizers` (
  `id` int(30) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `images` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_appetizers`
--

INSERT INTO `food_appetizers` (`id`, `name`, `price`, `description`, `images`, `status`) VALUES
(1, 'Shark\'s Fin', 200, '10pcs (With RICE)', './images/appetizer1.jpg', 'ENABLE'),
(2, 'Crab Cake', 200, '12pcs (With Rice)', './images/appetizer2.jpg', 'ENABLE'),
(3, 'Crab Claw', 200, '12pcs (With Rice)', './images/appetizer3.jpg', 'ENABLE'),
(4, 'Scallop Cake', 200, '12pcs (With Rice)', './images/appetizer4.jpg', 'ENABLE'),
(5, 'Lobster Ball', 200, '12pcs (With Rice)', './images/appetizer5.jpg', 'ENABLE'),
(6, 'Gyoza', 200, '10pcs (With Rice)', './images/appetizer6.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `food_beverages`
--

CREATE TABLE `food_beverages` (
  `id` int(30) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `images` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_beverages`
--

INSERT INTO `food_beverages` (`id`, `name`, `price`, `description`, `images`, `status`) VALUES
(1, 'Coke, Royal, Sprite', 20, '20each', './images/drinks1.jpg', 'ENABLE'),
(2, 'Pineapple Juice', 80, '1pcs', './images/drinks2.jpg', 'ENABLE'),
(3, 'San Mig Apple', 80, '1pcs', './images/drinks4.png', 'ENABLE'),
(4, 'San Mig Pale Pilsen', 80, '1pcs', './images/drinks5.png', 'ENABLE'),
(5, 'Red Horse Beer', 80, '1pcs (500ml)', './images/drinks6.png', 'ENABLE'),
(6, 'Red Horse Beer', 480, 'Bucket', './images/drinks7.png', 'ENABLE'),
(8, 'San Mig Bucket', 380, 'Bucket', './images/drinks8.png', 'ENABLE');

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
(2, 'Samantha Miller', 'sam23@mail.com', '45bff2a14658fc9b21c6e5e9bf75186b', '0913245879', 'My Sample Addresss'),
(3, 'Clairy Blake', 'cblake@mail.com', '4744ddea876b11dcb1d169fadf494418', '09654789123', 'Sample Address 101'),
(4, 'jayr natividad', 'jayrnatividad26@gmail.com', '7cd8734e5a70def2b109d40fd2daa58f', '09453322111', '41 c santos st'),
(5, 'jayrmn', 'jayr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '091332457852', '50 c'),
(6, 'Vince', 'vincejesalva@gmail.com', 'fbe82b93c071bedda31afded400cca52', '09954587878', 'Pasig City'),
(7, 'test@test', 'test@test', 'c8d86ad5ed1add319e802f7f659df166', '989-9281-2312', 'test@test'),
(8, 'vince', 'joseph@gmail.com', '25f9e794323b453885f5181f1b624d0b', '041546465', 'pasig city');

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
(2, 'AUS Striploin', 271, 'With Rice', './images/menu2.jpg', 'ENABLE'),
(3, 'AUS T-Bone', 270, 'With Rice', './images/menu3.jpg', 'ENABLE'),
(4, 'Smoked Hungarian', 150, 'With Rice', './images/menu4.jpg', 'ENABLE'),
(5, 'Burger Steak', 180, 'With Rice', './images/menu5.jpg', 'ENABLE'),
(6, 'Beef Salpicao', 210, 'With Rice', './images/menu6.jpg', 'ENABLE'),
(7, 'Beef Pepper Rice', 180, 'With Rice', './images/menu7.jpg', 'ENABLE'),
(8, 'Wagyu Cubes', 180, 'With Rice', './images/menu8.jpg', 'ENABLE');

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
  `order_id` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_orders`
--

INSERT INTO `food_orders` (`id`, `item_id`, `name`, `price`, `quantity`, `order_date`, `order_id`, `status`, `user_id`) VALUES
(32, 3, 'AUS T-Bone', 270, 1, '2022-10-01', '24744', 'Preparing', '7'),
(33, 3, 'AUS T-Bone', 270, 1, '2022-10-01', '05009', 'On the Way', '7'),
(34, 7, 'Beef Pepper Rice', 180, 1, '2022-10-02', '92859', 'On the Way', '8'),
(35, 2, 'AUS Strirloin', 271, 1, '2022-10-02', '34423', 'Delivered', '8'),
(36, 4, 'Scallop Cake', 200, 1, '2022-10-02', '34423', 'Delivered', '8'),
(37, 1, 'Shark\'s Fin', 200, 1, '2022-10-02', '34423', 'Delivered', '8'),
(38, 8, 'San Mig Bucket', 380, 1, '2022-10-02', '34423', 'Delivered', '8'),
(39, 3, 'AUS T-Bone', 270, 13, '2022-10-04', '74327', 'Delivered', '5'),
(40, 2, 'AUS Strirloin', 271, 5, '2022-10-04', '04449', 'Canceled', '5'),
(41, 7, 'Beef Pepper Rice', 180, 6, '2022-10-04', '20202', 'Delivered', '5'),
(42, 2, 'Crab Cake', 200, 5, '2022-10-04', '20752', 'Preparing', '5'),
(43, 3, 'AUS T-Bone', 270, 1, '2022-10-04', '60833', 'Canceled', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_customer`
--
ALTER TABLE `food_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `food_orders`
--
ALTER TABLE `food_orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
