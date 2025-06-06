-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 29 mai 2025 à 07:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nas`
--

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int NOT NULL,
  `date` datetime NOT NULL,
  `commentaire` text NOT NULL,
  `username` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `titre` char(70) NOT NULL,
  `description` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `demandeur` tinytext NOT NULL,
  `priorite` tinytext NOT NULL,
  `attribution` int NOT NULL,
  `observateur` int NOT NULL,
  `date` datetime NOT NULL,
  `uid` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`titre`, `description`, `id`, `demandeur`, `priorite`, `attribution`, `observateur`, `date`, `uid`) VALUES
('qsd', 'qsd', 17, 'joris-user', 'bas', 0, 0, '2025-03-28 10:23:59', 3),
('zerzer', 'zerzerzer', 21, 'joris-user', 'bas', 0, 0, '2025-05-28 16:00:51', 3),
('qsqsd', 'qsdqsd', 22, 'joris-user', 'haut', 0, 0, '2025-05-28 16:03:03', 3),
('qsd', 'qsdqsdqsd', 23, 'joris-user', 'bas', 0, 0, '2025-05-28 16:03:34', 3),
('sdvsdvsdvs', '<sgrgrgsrg', 24, 'joris-user', 'moyen', 0, 0, '2025-05-28 16:05:10', 3),
('qdqsd', 'qsdqds', 25, 'joris-user', 'bas', 0, 0, '2025-05-28 16:07:27', 3),
('sssssssss', 'sssssssssss', 26, 'joris-user', 'bas', 0, 0, '2025-05-28 16:07:37', 3),
('', '', 27, 'joris-user', '', 0, 0, '2025-05-28 16:30:00', 3),
('dfvdfv', 'fdvdfv', 28, 'joris-user', 'bas', 0, 0, '2025-05-28 16:30:06', 3),
('wxc', 'wxc', 19, 'joris-user', 'bas', 0, 0, '2025-03-28 10:51:46', 3),
('test', 'test', 20, 'joris-user', 'moyen', 0, 0, '2025-05-28 15:02:08', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `permission` int NOT NULL,
  `count_ticket` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `count_ticket`) VALUES
(1, 'joris', 'joris', 2, 0),
(2, 'matthieu', 'matthieu', 2, 0),
(3, 'joris-user', 'joris-user', 1, 0),
(4, 'matthieu-user', 'matthieu-user', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
