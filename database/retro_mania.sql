-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 nov. 2022 à 13:19
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `retro_mania`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_username`, `password`) VALUES
(1, 'adminMel33', '$2y$10$eDAEcan8jU6EfF6oW.Ug6OjJsB14jt.kwaS9TYHdffvs/d7islZiq'),
(2, 'adminBardint78', '$2y$10$Ss5f6YL3lN4r6F9Tjc79furP0cnEVaZhUh5idQ6kAFzAWj9HxbTfi'),
(3, 'adminMarta_56', '$2y$10$6c.TLSsvgTtNWH2ul9zr9.vembzBcYzuKYaaoHTwU2usTcX35M87y'),
(4, 'adminHashi99', '$2y$10$7eyhfX5n8OwVAGypL5VmnuFkA91FDYgdLoS7l0puYmghDjy8a8dQC'),
(5, 'adminVal22', '$2y$10$GZXV7cLOih5KwAa.0bKQqOzG9P/ahsAF9KapNQcXWFTYA/GhvuAdq'),
(6, 'adminLana_douv', '$2y$10$dJPCEwVSFIS33xx/87jziucE8vgBCssl0dAN/Llh7O6F60FbOqUD.'),
(7, 'adminPao4589', '$2y$10$.11lKpljgz.RkbU8toqIDOLK9lCrEv6fgLwFFjSuL4TWoWLVnpG1m'),
(8, 'adminGrace42', '$2y$10$KKyGDF1n0ibRsZm8S1Y.puB57MYGix7ujq1Bbi.4.jcGspVcvv9.S'),
(9, 'adminKevl_Cla59', '$2y$10$SOCTOFoPUCAllCesciop0ez5ieWmxV0HsPKsPNztC3ZKMcTexVSEi');

-- --------------------------------------------------------

--
-- Structure de la table `collections`
--

DROP TABLE IF EXISTS `collections`;
CREATE TABLE IF NOT EXISTS `collections` (
  `collection_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_year` smallint NOT NULL,
  `admin_contributor_id` int NOT NULL,
  PRIMARY KEY (`collection_id`),
  KEY `admin_contributor_id` (`admin_contributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `collections`
--

INSERT INTO `collections` (`collection_id`, `name`, `creator`, `creation_year`, `admin_contributor_id`) VALUES
(1, 'The Funky Animal', 'Marta Hernandez', 2021, 3),
(2, 'The Japan Wave', 'Anthony Bardinter', 2022, 3),
(3, 'The Mystical Sunset', 'Anthony Bardinter', 2022, 2);

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employee_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int NOT NULL,
  `admin_contributor_id` int NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `admin_id` (`admin_id`),
  KEY `admin_contributor_id` (`admin_contributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`employee_id`, `full_name`, `phone_number`, `email_address`, `job`, `admin_id`, `admin_contributor_id`) VALUES
(1, 'Anthony Bardinter', '+13874496287', 'ath.bardinter@gmail.com', 'CEO', 2, 2),
(2, 'Marta Hernandez', '+14298817365', 'm.hernandez@gmail.com', 'Marketing Manager', 2, 2),
(3, 'Sasuki Hashimoto', '+12025550156', 's.hashimoto-pro@yahoo.com', 'Production Manager', 4, 3),
(4, 'John Valentin', '+18591247589', 'johnjohn.val@protonmail.com 	', 'Sales Manager', 5, 2),
(5, 'Lana Douvert', '+17027831408', 'douvert.lana@outlook.com', 'Production assistant 	', 6, 3),
(6, 'Paolo Minelli', '+12337891025', 'paomin18@gmail.com', 'Production assistant 	', 7, 2),
(7, 'Grace Herminter', '+12954928382', 'grace4739@yahoo.com', 'Salesman', 8, 3),
(8, 'Kevin Clarkson ', '+17539554971', 'kevin.clark.23@gmail.com', 'Salesman', 9, 3);

-- --------------------------------------------------------

--
-- Structure de la table `online_guestbook`
--

DROP TABLE IF EXISTS `online_guestbook`;
CREATE TABLE IF NOT EXISTS `online_guestbook` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `online_guestbook`
--

INSERT INTO `online_guestbook` (`comment_id`, `username`, `avatar`, `title`, `rating`, `comment`, `created_at`) VALUES
(1, 'UfoGurl78', '👽', 'Hello', '⭐⭐⭐⭐', 'Hi,\r\n\r\nI am a girl from LA.\r\nI found out about your website today, I think your website quite beautiful !\r\nI hope I will come to your shop in San Fransisco really soon, your caps catalog seems to be amazing 😉😉😉', '2022-05-10 12:32:14'),
(2, 'KingOfPhantoms', '👻', 'Nice website', '⭐⭐⭐⭐⭐', 'Helloooooooo\r\n\r\nI really luv your website 💗💗💗\r\nQuite cool 😉', '2022-06-04 17:05:42'),
(3, 'Crazy_hamster', '🐹', 'Great new cap collections', '⭐⭐⭐⭐', 'hi\r\n\r\nI went to your shop six months ago, the welcome was really friendly, and I bought two caps that I always wear (great quality).\r\nI just checked your new cap collections, I think I will come back to ur shop really soon hahaha 😊😊😊', '2022-06-28 21:52:33'),
(4, 'Lapinou', '🐰', 'Great website', '⭐⭐⭐⭐', 'I really love your website, the design is really nice !', '2022-07-27 21:51:34'),
(5, 'Baasta24', '👹', 'Funny crazy website', '⭐⭐⭐⭐', 'Nice job, well done !', '2022-09-10 19:16:58'),
(6, 'JapanFever', '🦁', 'Hello from Japan', '⭐⭐⭐⭐', 'Hi,\r\n\r\nI am a UX Designer from Tokyo, I just found our website today.\r\nI think the design of your website is quite amazing, I really love it, it\'s a great source of inspiration for me !\r\n\r\nGreets from Japan 😘', '2022-09-15 02:14:09'),
(7, 'trolling_tiger_77', '🐯', 'I don\'t like your website', '⭐⭐', 'I don\'t like your website at all, lots of fucking weird colors....', '2022-09-15 02:17:19'),
(8, 'Malgi68', '🐹', 'Great catalog', '⭐⭐⭐⭐', 'Hi,\r\nYour new catalog is quite cool !', '2022-09-15 09:54:08');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_id` int NOT NULL,
  `admin_contributor_id` int NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `admin_contributor_id` (`admin_contributor_id`),
  KEY `collection_id` (`collection_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `quantity`, `image`, `description`, `collection_id`, `admin_contributor_id`) VALUES
(1, 'The Robot Tiger Cap', '21.40', 37, 'robot_tiger_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex navy cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 1, 4),
(2, 'The Malicious Cat Cap', '19.80', 23, 'malicious_cat_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 1, 4),
(3, 'The Cyber Cat Cap', '21.20', 15, 'malicious_cat_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex navy cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 1, 6),
(4, 'The Hipster Flamingo Cap', '20.00', 29, 'japan_triangle_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 2, 6),
(5, 'The Reckless Panther Cap', '21.20', 15, 'reckless_panther_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 2, 7),
(6, 'The Japan Triangle Cap', '20.30', 31, 'japan_triangle_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 2, 4),
(7, 'The Double Wave Cap', '19.40', 9, 'double_wave_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex grey cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 2, 7),
(8, 'The Wavy Beach Cap', '21.60', 23, 'wavy_beach_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex white cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 2, 4),
(9, 'The Sunny Wave Cap', '20.10', 34, 'sunny_wave_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex grey cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 6),
(10, 'The Intense Moon Cap', '21.60', 12, 'intense_moon_cap.jpg', '⭐The Japan Wave Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 4),
(11, 'The Violet Moutain Cap', '19.90', 17, 'violet_mountain_cap.jpg', '⭐The Mystical Sunset Collection\r\n⭐Unisex grey cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 7),
(12, 'The Dreamy Planet Cap', '21.20', 35, 'dreamy_planet_cap.jpg', '⭐The Mystical Sunset Collection\r\n⭐Unisex navy cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 4),
(13, 'The Palmer Listener Cap', '21.30', 32, 'palmer_listener_cap.jpg', '⭐The Mystical Sunset Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 8.4 oz 285gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 7),
(14, 'The Loving Place Cap', '19.50', 8, 'loving_place_cap.jpg', '⭐The Mystical Sunset Collection\r\n⭐Unisex grey cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 7),
(15, 'The Endless City Cap', '21.30', 34, 'endless_city_cap.jpg', '⭐The Mystical Sunset Collection\r\n⭐Unisex black cap\r\n⭐High quality fabrics\r\n⭐100% cotton\r\n⭐Fabric weight 7 oz. / 240 gsm\r\n⭐One size fits all\r\n⭐Cold wash to preserve the print', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `winners`
--

DROP TABLE IF EXISTS `winners`;
CREATE TABLE IF NOT EXISTS `winners` (
  `winner_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_contributor_id` int NOT NULL,
  PRIMARY KEY (`winner_id`),
  KEY `admin_contributor_id` (`admin_contributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `winners`
--

INSERT INTO `winners` (`winner_id`, `full_name`, `date`, `product_name`, `admin_contributor_id`) VALUES
(1, 'Sean McDoom', '2022-02-11', 'The Robot Tiger Cap', 5),
(2, 'Carla Johnson', '2022-03-26', 'The Double Wave Cap', 8),
(3, 'Edith Martinez', '2022-04-06', 'The Malicious Cat Cap', 8),
(4, 'Simon Stanislaw', '2022-06-19', 'The Double Wave Cap', 5),
(5, 'Sarah Maloff', '2022-08-27', 'The Japan Triangle Cap 	', 9),
(6, 'Martin Duvalez', '2022-09-15', 'The Endless City Cap', 9);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`admin_contributor_id`) REFERENCES `admins` (`admin_id`);

--
-- Contraintes pour la table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`admin_contributor_id`) REFERENCES `admins` (`admin_id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`admin_contributor_id`) REFERENCES `admins` (`admin_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`collection_id`);

--
-- Contraintes pour la table `winners`
--
ALTER TABLE `winners`
  ADD CONSTRAINT `winners_ibfk_1` FOREIGN KEY (`admin_contributor_id`) REFERENCES `admins` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
