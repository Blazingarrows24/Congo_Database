-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 08:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `congo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `CardNo` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Address`, `CardNo`, `Email`, `Password`) VALUES
(1, 'Patrick Starfish', '120 Conch Street', 123456789, 'underdarock@gmail.com', 'rock'),
(2, 'Ooga Croods', 'Canyon Cave #4, Pangaea', 371, 'caveboi@gmail.com', 'fire!!w0w'),
(12, 'Melissa McCarthy', '132 Mountain Loop, Beverly Hills, CA', 1843662604714792, 'mccarthyism@hotmail.com', '>>>octaviaSpence'),
(19, 'Ariana Grande', '1 Yuh Drive, Calabasas, CA', 1163957403871357, 'thankUnext@icloud.me', 'buwybyycib'),
(24, 'Old Man Jenkins', 'Shady Shoals, Bikini Bottom', 7402846351850844, 'Oldiesrule@hotmail.com', 'oldy1'),
(37, 'Minerva McGonogall', 'Hogwarts School, #84, Nowhere, United Kingdom', 157366305811644, 'kittyQueen@hogwarts.edu', 'i<3Albus'),
(45, 'Arya Stark', 'Winterfell', 1566111136764911, 'dragonsrkool@gmail.com', 'Nymer!a'),
(52, 'Legolas Elfio', '12 Enchanted Forest Road, Middle Earth', 591847739831734, 'pointedEars@gmail.com', 'd34th2dwarves'),
(87, 'Josh Hutcherson', '55 Market Alley, District 12, Panem', 4619615479387108, 'breadboi4789@hotmail.com', 'Katn1ss4ever'),
(91, 'Bella Swan', '44 Edgy Road, Forks, WA', 77134467720497714, 'bellaswan73@aol.com', 'hisL!ttle5pidermonke'),
(103, 'Edward Cullen', '99 Cullen Drive, Forks, WA', 6640173882739183, 'edward4blood@gmail.com', 'be11aPLZmarryM3'),
(111, 'Jacob Black', '78 Wolf Street, Reservation #2, WA', 1003836284724661, 'goodBoi99@gmail.com', 'bowW0wk!ng'),
(132, 'Gandalf Grey', '1 Enchanted Drive, Middle Earth', 1047183995713722, 'betterThanDumbledore@hotmail.com', 'U5hallNotP4ss'),
(188, 'Katara Water', 'Igloo 3, South Pole', 1600582849382746, 'healingHands338@basingse.edu', 'zutara4ever'),
(193, 'Toph Beifong', '24 Beifong Road, Earth Kingdom', 2147483647, 'metalBenderNumber1@beifong.me', 'groundP0und!'),
(201, 'Rubius Hagrid', 'Hut #1, Hogwarts School, Nowhere, United Kingdom', 7104882634701973, 'rulebreaker1@hogwarts.edu', 'Arag0g4ever'),
(218, 'Maria Cruz', '4 Ranch Avenue, New Iberia, LA', 2147483647, 'alto993@louisiana.edu', 'Peach<3'),
(228, 'McKenzie Lee', '1843 Congress Street #218, Lafayette, LA', 6401836048231647, 'mckenzieL33@louisiana.edu', 'g0llum<3'),
(239, 'John Snow', 'The North, Westeros', 2147483647, 'snowb4h0e@raven.net', 'muhQu33n'),
(250, 'Chewbacca', '401 M. Falcon, Space', 123123123, 'hansbestie@gmail.com', 'raaaargh');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `SSN` int(9) NOT NULL,
  `Wage` float NOT NULL,
  `WarehouseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Name`, `Position`, `DOB`, `SSN`, `Wage`, `WarehouseID`) VALUES
(1, 'Mr. Krabs', 'Supervisor', '1942-07-30', 123321123, 100000, 2),
(2, 'Eleanor Parkes', 'Packing', '1983-08-17', 184371928, 14, 2),
(3, 'Davood Gatreh-Samani', 'Stock', '1989-02-11', 482841038, 14, 3),
(4, 'Taylor Swift', 'Paper', '1989-12-13', 949813840, 19.89, 4),
(5, 'Corrine Massey', 'Inventory', '1991-07-18', 148948293, 15, 5),
(6, 'Walter Sparks', 'Shipping', '1988-09-14', 887473384, 14.5, 3),
(7, 'Isaiah Newman', 'Stock', '2000-10-30', 673978138, 12.5, 2),
(8, 'Maximus Darion', 'Centurion', '0013-10-28', 123456777, 12, 1),
(9, 'Natasha Romanoff', 'Supervisor', '1986-05-10', 918380467, 24.5, 1),
(18, 'Don Dickson', 'Supervisor', '1979-07-07', 138739847, 29.5, 4),
(20, 'Karen Plankton', 'Control', '1970-01-01', 101010010, 9, 3),
(26, 'Maureen Diaz', 'Supervisor', '1990-04-08', 168472693, 23.5, 5),
(31, 'Yolanda Richie', 'Packing', '1997-06-25', 569146293, 15, 3),
(49, 'Harrison Pettigrew', 'Logistics', '1987-01-06', 471957394, 20.5, 4),
(69, 'Virginia Maria', 'Stock', '1976-06-26', 460275398, 13, 4),
(72, 'Elon Musk', 'Sanitation', '1971-06-28', 763885617, 9, 1),
(83, 'Jeff Bezos', 'Sanitation', '1964-01-12', 740837293, 9, 4),
(90, 'Han Solo', 'Pilot', '1799-06-05', 813928319, 18, 5),
(96, 'Bill Gates', 'Sanitation', '1955-10-28', 686936599, 9, 2),
(98, 'Rue Paul', 'Logistics', '1966-09-16', 561385713, 18, 5),
(104, 'Elizabeth Windsor', 'Sanitation', '1926-04-21', 345819481, 9, 5),
(108, 'Ronnie Garrison', 'Supervisor', '1991-04-16', 174937193, 23, 3),
(113, 'Spongebob Squarepants', 'Manager', '1986-07-14', 123456789, 10, 2),
(131, 'Lyanna Stark', 'VP Logistics', '1978-02-13', 471038548, 24, 3),
(147, 'Addison Goodman', 'Fork Lift', '1984-02-07', 882648164, 19, 4),
(173, 'Ariana Whitemarsh', 'VP Shipping', '1993-06-25', 415773432, 22, 4),
(184, 'Yazmin Blackwell', 'Shipping', '1994-04-03', 2147483647, 14, 3),
(204, 'Rajan Aguilar', 'Packing', '1986-08-10', 918515384, 16, 4),
(385, 'Daenerys Targaryen', 'Queen', '1284-04-22', 327483413, 84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) DEFAULT 0,
  `WarehouseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Name`, `Price`, `Quantity`, `WarehouseID`) VALUES
(1, 'Ice Cream Maker', 39.99, 112, 2),
(2, 'Salad Tongs', 3.99, 366, 1),
(4, 'IKEA Deluxe Toilet', 89.98, 143, 3),
(7, 'Chum on a stick', 1.99, 300, 3),
(10, 'Literal Dragon', 999.99, 3, 1),
(14, 'Pokémon Snap', 59.99, 77, 3),
(18, 'Zelda: Breath of the Wild', 59.99, 104, 5),
(20, 'Kelp Soda', 3.5, 20, 2),
(26, 'Apple Air Tag', 29.99, 308, 2),
(43, 'Meow Mix', 6.99, 289, 4),
(64, 'Nintendo eShop Gift Card', 20, 203, 2),
(77, 'FunkoPOP Jeff Bezos', 299.99, 195, 1),
(89, 'Keurig', 99.99, 98, 3),
(132, 'IKEA Table Lamp', 12.99, 118, 3),
(138, 'Home COVID-19 Test Kit', 14.99, 569, 4),
(147, 'iPhone 11 Blue 64GB', 599.99, 461, 4),
(149, 'iPhone 12 Pro 64GB', 999.99, 518, 4),
(154, 'Tylenol PM Extra', 14.99, 145, 3),
(158, 'Apple Watch Series 4', 349.99, 133, 4),
(169, 'FunkoPOP Jon Snow', 19.99, 275, 1),
(179, 'Beats Studio', 199.99, 89, 1),
(195, 'Rolex Perpetual Cosmo', 179995, 35, 5),
(201, 'Crocs Classic Pink', 29.99, 204, 1),
(203, 'Doc Martens Leona', 149, 183, 1),
(207, 'Samsung 40\" 4K Smart TV', 1299, 76, 2),
(218, 'InstantPot Pressure Cooker', 99.99, 104, 1),
(247, 'IKEA Bedside Table', 69, 96, 3),
(258, 'PlayStation 5', 499, 154, 2);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`CustomerID`, `ProductID`, `Date`) VALUES
(2, 4, '2021-04-21'),
(24, 20, '2021-04-16'),
(1, 1, '2021-04-08'),
(1, 4, '2021-04-12'),
(45, 10, '2021-04-21'),
(250, 1, '2021-04-26'),
(250, 1, '2021-04-26'),
(1, 1, '2021-04-07'),
(201, 14, '2021-01-22'),
(103, 154, '2020-09-13'),
(188, 10, '2020-12-12'),
(111, 89, '2021-01-14'),
(201, 64, '2020-08-03'),
(52, 26, '2019-06-13'),
(12, 207, '2019-08-09'),
(87, 26, '2020-10-31'),
(193, 138, '2020-07-14'),
(103, 18, '2020-02-24'),
(45, 10, '2020-03-09'),
(45, 43, '2021-03-18'),
(37, 149, '2021-04-17'),
(218, 77, '2020-04-18'),
(218, 10, '2020-08-11'),
(218, 64, '2021-02-04'),
(91, 77, '2020-07-12'),
(19, 18, '2020-05-10'),
(188, 89, '2020-06-13'),
(37, 43, '2019-11-30'),
(37, 43, '2020-02-13'),
(37, 43, '2020-04-18'),
(37, 43, '2020-07-22'),
(37, 43, '2020-10-01'),
(37, 43, '2021-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Stars` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`CustomerID`, `ProductID`, `Stars`, `Date`) VALUES
(1, 4, 0, '2021-04-08'),
(2, 7, 5, '2021-04-23'),
(250, 1, 0, '2021-04-13'),
(1, 1, 0, '2021-04-26'),
(250, 1, 4, '2021-04-30'),
(103, 154, 2, '2020-09-13'),
(37, 149, 5, '2021-05-01'),
(37, 43, 5, '2020-05-10'),
(91, 77, 2, '2020-07-16'),
(87, 26, 3, '2020-11-03'),
(111, 89, 2, '2921-01-20'),
(45, 43, 4, '2021-03-18'),
(37, 43, 5, '2020-07-22'),
(1, 4, 4, '2021-04-16'),
(24, 20, 3, '2021-04-18'),
(188, 10, 3, '2020-12-18'),
(201, 64, 2, '2020-08-06'),
(218, 10, 4, '2020-08-11'),
(103, 154, 5, '2020-09-15'),
(218, 64, 1, '2021-02-07'),
(19, 18, 3, '2020-05-12'),
(12, 207, 4, '2019-08-11'),
(37, 149, 3, '2021-04-19'),
(1, 1, 4, '2021-04-08'),
(2, 4, 1, '2021-04-25'),
(52, 26, 4, '2019-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `WarehouseID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`WarehouseID`, `Address`, `Phone`) VALUES
(1, '999 Circle Circle, Atlanta, Georgia', '337-337-3337'),
(2, '124 Conch Street, Bikini Bottom, Ocean', '715-820-3420'),
(3, '1902 King\'s Road, Highgarden, Westeros', '666-696-0420'),
(4, '31555 US-90, Brookshire, TX', '666-612-7431'),
(5, '401 M. Falcon System, Milky Way', '999-127-1838');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `WarehouseID` (`WarehouseID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `WarehouseID` (`WarehouseID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`WarehouseID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`WarehouseID`) REFERENCES `warehouse` (`WarehouseID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`WarehouseID`) REFERENCES `warehouse` (`WarehouseID`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
