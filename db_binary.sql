-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2024 at 01:39 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binary_eagle`
--

-- --------------------------------------------------------

CREATE TABLE `main_content` (
  `main_content_id` int NOT NULL PRIMARY KEY,
  `main_content_title` varchar(40) NOT NULL,
  `main_content_content` text NOT NULL,
  `img_path` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user` (
  `user_id` int NOT NULL PRIMARY KEY,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_creation_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `verif_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_categorie` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user_categories` (
  `categorie_id` int NOT NULL PRIMARY KEY,
  `categorie_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- Dumping data for table `main_content`
--

INSERT INTO `main_content` (`main_content_id`, `main_content_title`, `main_content_content`, `img_path`) VALUES
(1, 'Binary Eagle', 'Bienvenue sur le site de Binary Eagle, une association Niçoise mais surtout une communauté de joueurs et joueuses passionné.es de jeux vidéos. Nous organisons des événements, des soirées gaming régulièrement. Rejoignez-nous sur Twitch et Discord pour ne rien rater de nos actualités.', 'boy.jpg'),
(2, 'Les Prochains Events', 'Retrouvez ici les prochains événements organisés par Binary Eagle. Que ce soit des soirées gaming, des tournois ou des streams, vous trouverez forcément votre bonheur. Rejoignez-nous sur Twitch et Discord pour ne rien rater de nos actualités.', 'man.jpg'),
(3, 'Les Events Passé', 'Vous trouverez ici les events déjà passé et je sais pas quoi dire d\'autre', 'past.jpg'),
(4, 'Le dev', 'Il était une fois, dans un monde lointain, un développeur qui avait pour mission de créer un site web pour une association.', 'bg.jpg');

-- --------------------------------------------------------



--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`categorie_id`, `categorie_name`) VALUES
(1, 'unverified'),
(2, 'verified'),
(3, 'banned'),
(4, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_content`
--
ALTER TABLE `main_content`
  ADD PRIMARY KEY (`main_content_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_categorie` (`user_categorie`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_content`
--
ALTER TABLE `main_content`
  MODIFY `main_content_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `categorie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_categorie`) REFERENCES `user_categories` (`categorie_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
