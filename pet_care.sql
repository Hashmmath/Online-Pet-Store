-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 08:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`quantity`, `price`, `image`, `name`, `id`) VALUES
('2', '100', 'IMG-63f89ccecb6005.50207130.jpg', 'cho cho', 4),
('1', '150', 'IMG-63f89d6a7f3326.33824648.jpg', 'Snoopy', 5),
('1', '150', '1684613326.jpeg', 'Pedigree Dog Food', 6);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `mailid` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`mailid`, `password`, `name`, `mobile`, `id`) VALUES
('Taathvika123@gmail.com', 'Taathvika123', 'Taathvika', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dog_details`
--

CREATE TABLE `dog_details` (
  `id` int(100) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `animal` varchar(100) NOT NULL,
  `pet_details` varchar(225) NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `life_span` text NOT NULL,
  `img_id` int(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `cost` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dog_details`
--

INSERT INTO `dog_details` (`id`, `pet_name`, `animal`, `pet_details`, `height`, `weight`, `life_span`, `img_id`, `breed`, `cost`) VALUES
(1, 'cho cho', 'Dog', 'The Pomeranian (often known as a Pom) is a breed of dog of the Spitz type that is named for the Pomerania region in north-west Poland and north-east Germany in Central Europe. Classed as a toy dog breed because of its small s', '7 to 12 inches (18 to 30 cm)', '3 to 7 pounds (1.4 to 3.2 kg)', '12 to 16 years', 1, 'POMERIAN', 100),
(2, 'Snoopy', 'Dog', 'The Golden Retriever is a Scottish breed of retriever dog of medium size. It is characterised by a gentle and affectionate nature and a striking golden coat. It is commonly kept as a pet and is among the most frequently regis', '51–56 cm (20–22 in)', '25–34 kg (55–75 lb)', '12–13 years', 2, 'GOLDEN RETRIVER ', 150),
(3, 'Snoopy', 'Dog', 'The Golden Retriever is a Scottish breed of retriever dog of medium size. It is characterised by a gentle and affectionate nature and a striking golden coat. It is commonly kept as a pet and is among the most frequently regis', '51–56 cm (20–22 in)', '25–34 kg (55–75 lb)', '12–13 years', 3, 'GOLDEN RETRIVER ', 200),
(4, 'Dumpling', 'Dog', 'The Poodle, called the Pudel in German and the Caniche in French, is a breed of water dog. The breed is divided into four varieties based on size, the Standard Poodle, Medium Poodle, Miniature Poodle and Toy Poodle, although ', '28–35 cm (11–14 in)', '12–14 kg (26–31 lb)', '12-15 years', 4, 'POODLE', 250),
(5, 'Jazz', 'Dog', 'The beagle is a breed of small scent hound, similar in appearance to the much larger foxhound. The beagle was developed primarily for hunting hare, known as beagling. Possessing a great sense of smell and superior tracking in', '13–16 in (33–41 cm)', '22–25 lb (10.0–11.3 kg)', '12–15 years', 5, 'BEAGEL', 300),
(6, 'Maxi', 'Dog', 'The Labrador Retriever or simply Labrador is a British breed of retriever gun dog. It was developed in the United Kingdom from fishing dogs imported from the colony of Newfoundland (now a province of Canada), and was named af', '54–56 cm (21.5–22 in)', '25–32 kg (55–70 lb)', '10–12 years', 6, 'LABRADOR RETRIEVER', 350),
(7, 'Buddy', 'Dog', 'A Labradoodle is a crossbreed dog created by crossing a Labrador Retriever and a Standard, Miniature, or Toy Poodle. The term dates back to at least 1955 but was unpopular at the time. Labradoodles are considered a good choic', '54–56 cm (21.5–22 in)', '25–32 kg (55–70 lb)', '10-12 years', 7, 'LABRADOODLE', 400),
(8, 'Happy', 'Dog', 'The Golden Retriever is a Scottish breed of retriever dog of medium size. It is characterised by a gentle and affectionate nature and a striking golden coat. It is commonly kept as a pet and is among the most frequently regis', '56–61 cm (22–24 in)', '25–34 kg (55–75 lb)', '12–13 years', 8, 'GOLDEN RETRIEVER', 450),
(9, 'Tom', 'Cat', 'The Persian cat , also known as the Persian longhair, is a long-haired breed of cat characterized by a round face and short muzzle. The first documented ancestors of Persian cats were imported into Italy from Persia around 16', '10-15 inches tall', '12 pounds', '12 – 17 years ', 9, 'PERSIAN CAT', 500),
(10, 'Jerry', 'Cat', 'The Bombay cat is a type of short-haired cat developed by breeding sable Burmese and black American Shorthair cats, to produce a cat of mostly Burmese type, but with a sleek, panther-like black coat. Bombay is the name given ', '10-15 inches tall', '12 pounds', '12 – 17 years ', 10, 'BOMBAY CAT', 550);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `pets` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `subscription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `number`, `address`, `pets`, `email`, `password`, `subscription`) VALUES
(1, 'Hashmmath', '741236985', 'Vijayawada, 521225', '2', 'hashmmath123@gmail.com', 'Hashmmath#25', 'Gold'),
(4, 'Sree Nidhi', '7856392145', 'Vijayawada, 521001', '5', 'sree123@gmail.com', 'Nidhi123', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `cardnumber` text NOT NULL,
  `expmonth` text NOT NULL,
  `expyear` text NOT NULL,
  `cvv` text NOT NULL,
  `cost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `company` text NOT NULL,
  `cost` int(100) NOT NULL,
  `pet` text NOT NULL,
  `supplier` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `ref_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `company`, `cost`, `pet`, `supplier`, `quantity`, `product_desc`, `ref_id`) VALUES
(1, 'Pedigree Dog Food', 'Pedigree', 150, 'Dog', 'ABC Enterprise', 15, 'Pedigree dog food is made with Meat and Meat by-products, Chicken and Chicken by-products, Vegetables and Vegetable by-products, Vegetable oils, Milk powder, Iodised salt, Essential Vitamins and Minerals, Cereals and Cereal by-products, Permitted Preservatives, Antioxidants and Flavors, No beef or pork.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_upload`
--

CREATE TABLE `product_upload` (
  `id` int(100) NOT NULL,
  `img_url` text NOT NULL,
  `product_name` text NOT NULL,
  `company_name` text NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_upload`
--

INSERT INTO `product_upload` (`id`, `img_url`, `product_name`, `company_name`, `price`) VALUES
(1, '1684613326.jpeg', 'Pedigree Dog Food', 'Pedigree', 150);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `pets` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `products` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `number`, `address`, `pets`, `email`, `password`, `products`) VALUES
(1, 'Sree Nidhi', '7856392145', 'Vijayawada, 521001', '5', 'sree123@gmail.com', 'Nidhi123', 10);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(50) NOT NULL,
  `img_url` text NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `price` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `img_url`, `pet_name`, `owner_name`, `mobile_no`, `price`) VALUES
(1, 'IMG-63f89ccecb6005.50207130.jpg', 'cho cho', 'Cheritha', '987456123', 100),
(2, 'IMG-63f89d6a7f3326.33824648.jpg', 'Snoopy', 'Satish Kumar', '987456123', 150),
(3, 'IMG-63f9a834ccd399.15194392.jpg', 'Snoopy', 'Satish Kumar', '987456123', 200),
(4, 'IMG-63f9a86bcff446.66322440.jpeg', 'Dumpling', 'Ram Krishna', '987456123', 250),
(5, 'IMG-63f9a87833d940.46919302.jpeg', 'Jazz', 'Harshitha', '987456123', 300),
(6, 'IMG-63f9a888465d80.31108071.jpeg', ' Maxi', 'kishore', '987456123', 350),
(7, 'IMG-63f9abc6c30e89.79852622.jpeg', 'Camila', 'Ramya Kumari', '987456123', 400),
(8, 'IMG-63f9f279a2f3e2.76290398.jpeg', 'Happy', 'Hashmmath', '987654321', 450),
(9, '1678522422.jpg', 'Tom', 'Oliver', '987654321', 500),
(10, '1678525449.jpg', 'Jerry', 'Chethana Sri', '987654321', 550);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_upload`
--
ALTER TABLE `product_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_upload`
--
ALTER TABLE `product_upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
