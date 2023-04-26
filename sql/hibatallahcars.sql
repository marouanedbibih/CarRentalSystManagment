-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 10:45 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hibatallahcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cars_information`
--

DROP TABLE IF EXISTS `cars_information`;
CREATE TABLE IF NOT EXISTS `cars_information` (
  `id_car` int NOT NULL AUTO_INCREMENT,
  `type_car` varchar(255) NOT NULL,
  `model_car` varchar(255) NOT NULL,
  `model_annee` varchar(255) NOT NULL,
  `config_cars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `km_cars` int NOT NULL,
  `price_car` int NOT NULL,
  `img_car_src` varchar(255) NOT NULL,
  PRIMARY KEY (`id_car`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars_information`
--

INSERT INTO `cars_information` (`id_car`, `type_car`, `model_car`, `model_annee`, `config_cars`, `km_cars`, `price_car`, `img_car_src`) VALUES
(1, 'Mercedes', 'GT 63', '2018', 'AUTO', 30, 250, './assets/db/Files-Images-Cars/car-rent-1.png'),
(2, 'BMW', 'M X5', '2015', 'MANLL', 100, 300, './assets/db/Files-Images-Cars/car-rent-2.png'),
(3, 'AUDI', 'R8', '2020', 'AUTO', 30, 2000, './assets/db/Files-Images-Cars/car-rent-3.png'),
(4, 'AUDI', 'R8', '2023', 'AUTO', 1, 3578, './assets/db/Files-Images-Cars/car-rent-6.png'),
(5, 'Mercedes', 'C63 AMG', '2020', 'AUTO', 30, 1000, './assets/db/Files-Images-Cars/car-rent-5.png'),
(10, 'Porshe', '911', '2020', 'MANLL', 27, 3089, './assets/db/Files-Images-Cars/porsche_PNG10624.png'),
(9, 'Mercedes', 'AMG GT63 S', '2020', 'AUTO', 0, 3000, './assets/db/Files-Images-Cars/2022-AMG-GT43-4DR-COUPE-CGT-DR.png'),
(11, 'Ferrari', '920', '2020', 'AUTO', 30, 500, './assets/db/Files-Images-Cars/24846-2-ferrari-transparent-image.png');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(1, 'Marouane', 'Dbibih', '1234567890', 'marouane.dbibih@example.com'),
(2, 'Jaafar', 'Elanssari', '1234567890', 'jaafar.elanssari@example.com'),
(3, 'Abdessamad', 'Dbibih', '1234567890', 'Abdessamad.dbibih@example.com'),
(20, 'hamza', 'oklm', '49023', 'hamza@gmail.com'),
(19, 'ayoub', 'boulfroh', '50349', 'ayoub@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `name`, `email`, `subject`, `message`) VALUES
(1, 'marouane', 'marouane@gmail.com', 'car', 'color red');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `pickup_location` varchar(50) DEFAULT NULL,
  `drop_location` varchar(50) DEFAULT NULL,
  `pickup_date` datetime DEFAULT NULL,
  `drop_date` datetime DEFAULT NULL,
  `configuration` varchar(50) DEFAULT NULL,
  `text_message` varchar(255) DEFAULT NULL,
  `id_client` int NOT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `fk_client_reservation` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `pickup_location`, `drop_location`, `pickup_date`, `drop_date`, `configuration`, `text_message`, `id_client`, `car_type`) VALUES
(1, 'Marrakech', 'Fes', '2023-03-15 10:00:00', '2023-03-20 10:00:00', 'AUTO', 'Je préfère une voiture rouge.', 1, NULL),
(2, 'Casablanca', 'Rabat', '2023-04-01 14:00:00', '2023-04-05 14:00:00', 'MANLL', NULL, 2, NULL),
(3, 'Fes', 'Agadir', '2023-05-10 08:00:00', '2023-05-15 08:00:00', 'AUTO', 'Je préfère un GPS intégré.', 1, NULL),
(18, 'Marrakech', 'Casblanca', '2023-03-04 17:00:00', '2023-03-11 17:00:00', 'AUTO', 'color red', 19, NULL),
(19, 'Marrakech', 'Casblanca', '2023-03-11 14:49:00', '2023-03-25 14:49:00', 'AUTO', 'color ', 20, 'Mercedes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
