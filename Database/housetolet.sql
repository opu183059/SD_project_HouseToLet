-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 09:19 AM
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
-- Database: `housetolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `housedetails`
--

CREATE TABLE `housedetails` (
  `serial number` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `imagelink` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `hdetails` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housedetails`
--

INSERT INTO `housedetails` (`serial number`, `area`, `imagelink`, `hname`, `hdetails`, `rent`, `member`, `location`) VALUES
(1, 'bakolia', 'Pages/housepicture/HousePicture (1)/h1.1.jpeg', 'Majids coloni', '2 Bedroom + 1 Bathroom + 1 kitchen', '8000', '3', 'Pages/house1.php'),
(2, 'iiuc', 'Pages/housepicture/HousePicture (2)/h2.1.jpeg', 'Rofiq house', '3 Bedroom + 1 Bathroom + 1 kitchen', '9200', '5', 'Pages/house2.php'),
(3, 'chowkbazar', 'Pages/housepicture/HousePicture (3)/h3.1.jpeg', 'Jaman house', '2 Bedroom + 2 Bathroom + 1 kitchen', '12000', '5', 'Pages/house3.php'),
(4, 'iiuc', 'Pages/housepicture/HousePicture (4)/h4.1.jpeg', 'Opu\'s House', '2 bedroom + 1 bathroom + 1 kitchen', '5100', '3', 'Pages/house4.php'),
(5, 'iiuc', 'Pages/housepicture/HousePicture (5)/h5.1.jpg', 'kamal coloni', '2 bedroom + 2 bathroom + 1 kitchen', '10000', '5', 'Pages/house5.php'),
(6, 'bakolia', 'Pages/housepicture/HousePicture (6)/h6.1.png', 'opus coloni', '1 Bedroom + 1 Bathroom + 1 kitchen', '8500', '3', 'Pages/house6.php'),
(7, 'iiuc', 'Pages/housepicture/HousePicture (7)/h7.1.jpg', 'Mehraz house', '2 bedroom + 2 bathroom + 1 kitchen', '12000', '6', 'Pages/house7.php'),
(8, 'caktai', 'Pages/housepicture/HousePicture (8)/h8.1.jpg', 'Altap house', '3 bedroom + 2 bathroom + 1 kitchen', '16000', '6', 'Pages/house8.php'),
(9, 'GEC', 'Pages/housepicture/HousePicture (9)/h9.1.jpg', 'Altap house', '3 bedroom + 2 bathroom + 1 kitchen', '16000', '6', 'Pages/house9.php'),
(10, 'chowkbazar', 'Pages/housepicture/HousePicture (10)/h10.1.jpg', 'Rased vaban', '3 Bedroom + 1 Bathroom + 1 kitchen', '12500', '4', 'Pages/house10.php'),
(11, 'Agrabad', 'Pages/housepicture/HousePicture (11)/h11.1.jpg', 'Mitu vaban', '3 Bedroom + 1 Bathroom + 1 kitchen', '12500', '4', 'Pages/house11.php');

-- --------------------------------------------------------

--
-- Table structure for table `houseowner`
--

CREATE TABLE `houseowner` (
  `serial number` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `transactionId` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houseowner`
--

INSERT INTO `houseowner` (`serial number`, `firstName`, `lastName`, `email`, `transactionId`, `password`, `date`) VALUES
(1, 'kamal', 'uddin', 'mu@yahoo.com', 'TGFRF45LJK', '$2y$10$3hnJlj/W79elpdBtM1PcSOpvj4JiavWkVkaB79fh7a04tL1/EGa2m', '2022-06-30'),
(2, 'admin', '45845745', 'admin@gmail.com', 'TGFRF45LJK', '$2y$10$ecOrmQv8nK77FGMYYMNZ/OvyVpKL4l/fSLm33aSMNtwbKpYOn8reS', '2022-06-30'),
(3, 'asif', '564646', 'asif@gmail.com', 'GT48TE1GH', '$2y$10$geOmyWhOO0OuTdi37bbi/./6AWKUeEj4vOi2q9k5UaCKRTScERTGq', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `serial number` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `transactionId` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`serial number`, `firstName`, `lastName`, `email`, `transactionId`, `password`, `date`) VALUES
(1, 'admin', '01521214545', 'admin@gmail.com', 'TGFRF45LJK', '$2y$10$9Vh5XbR0AukFGwIWOCOa9.y1fia.HtwPPJarqXx8Hdl0n4PWzQBsi', '2022-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `housedetails`
--
ALTER TABLE `housedetails`
  ADD PRIMARY KEY (`serial number`);

--
-- Indexes for table `houseowner`
--
ALTER TABLE `houseowner`
  ADD PRIMARY KEY (`serial number`),
  ADD UNIQUE KEY `firstName` (`firstName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`serial number`),
  ADD UNIQUE KEY `firstName` (`firstName`),
  ADD UNIQUE KEY `firstName_2` (`firstName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housedetails`
--
ALTER TABLE `housedetails`
  MODIFY `serial number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `houseowner`
--
ALTER TABLE `houseowner`
  MODIFY `serial number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `serial number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
