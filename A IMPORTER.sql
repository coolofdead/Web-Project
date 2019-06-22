-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 22 juin 2019 à 00:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `abilities`
--

DROP TABLE IF EXISTS `abilities`;
CREATE TABLE IF NOT EXISTS `abilities` (
  `icon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `front_color` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_color` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abilities`
--

INSERT INTO `abilities` (`icon`, `name`, `experience`, `percentage`, `front_color`, `back_color`) VALUES
('Images/html.png', 'HTML', 2, 90, '#f8ab1b', 'rgba(228, 154, 18, 0.39)'),
('Images/css.png', 'CSS', 2, 80, '#3d98ff', 'rgba(60, 119, 247, 0.39)'),
('Images/javascript.png', 'JavaScript', 1, 80, '#f1e42a', 'rgba(238, 216, 16, 0.39)'),
('Images/Csharp.png', 'C#', 2, 90, '#da39a9', 'rgba(201, 10, 185, 0.39)'),
('Images/php.png', 'PhP', 1, 70, '#b674e2', 'rgba(82, 40, 179, 0.39)');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` char(255) COLLATE utf8mb4_bin NOT NULL,
  `password` char(255) COLLATE utf8mb4_bin NOT NULL,
  `acces` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`, `acces`) VALUES
('thomas.giovannoni@hotmail.fr', 'password', 1),
('user@portfolio.fr', 'user', 0),
('thomas.giovannoni@hotmail.fr', 'password', 1),
('user@portfolio.fr', 'user', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_bin NOT NULL,
  `mail` char(255) COLLATE utf8mb4_bin NOT NULL,
  `message` varchar(8000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `interests` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`name`, `lastname`, `job`, `birthday`, `city`, `study`, `phone`, `age`, `interests`, `degree`, `mail`, `adress`) VALUES
('Thomas', 'GIOVANNONI', 'Web Dev', '1998/11/23', 'LYON', 'YNOV', '0619493115', 20, 'Drawing, Reading, WoW', 'Bachelor Info', 'thomas.giovannoni@ynov.com', '14 rue de la république');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
