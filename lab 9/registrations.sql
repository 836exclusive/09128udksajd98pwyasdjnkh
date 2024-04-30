-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2024 at 07:17 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iddo`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `competition_date` date NOT NULL,
  `competition_time` time NOT NULL,
  `previous_participation` enum('Да','Нет') NOT NULL,
  `registration_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `age` int DEFAULT NULL,
  `preparation_level` enum('Новичок','Средний','Опытный') NOT NULL,
  `sport_type` enum('Футбол','Волейбол','Плавание','Хоккей','Тенис') NOT NULL,
  `team_number` int DEFAULT NULL,
  `parental_consent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `surname`, `name`, `patronymic`, `competition_date`, `competition_time`, `previous_participation`, `registration_address`, `email`, `age`, `preparation_level`, `sport_type`, `team_number`, `parental_consent`) VALUES
(1, 'dasd', 'asd333', 'asd3333', '1111-11-11', '11:11:00', 'Да', 'wads', 'w@ww.ru', 1111, 'Новичок', 'Плавание', 2, 1),
(2, 'dasd', 'asd333', 'asd3333', '1111-11-11', '11:11:00', 'Да', 'wads', 'w@ww.ru', 1111, 'Новичок', 'Плавание', 2, 1),
(3, 'dasd', 'asd333', 'asd3333', '1111-11-11', '11:11:00', 'Да', 'wads', 'w@ww.ru', 1111, 'Новичок', 'Плавание', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
