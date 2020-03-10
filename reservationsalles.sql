-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 10:01
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
-- Base de données :  `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(15, 'test', 'enregistrement', '2020-02-27 17:00:00', '2020-02-27 18:00:00', 13),
(14, 'test3', 'TEST3', '2020-02-26 12:00:00', '2020-02-26 13:00:00', 12),
(13, 'test2', 'test2', '2020-02-26 13:00:00', '2020-02-26 14:00:00', 12),
(12, 'paolo ', 'test', '2020-02-27 13:00:00', '2020-02-27 14:00:00', 12),
(11, 'salle studio', 'enregistrement', '2020-02-24 15:00:00', '2020-02-25 16:00:00', 10),
(10, 'test', 'test', '2020-02-26 09:00:00', '2020-02-26 10:00:00', 9);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(15, 'test2', '$2y$12$PMQdWhssp4pryMjs/CLBm.b7RaL3LvIupBNgyGxxrPKiqRz9Pe4Ka'),
(14, 'testt', '$2y$12$QtAfIjv4quxSh239ZiW3quCqnqQNE3uY298jamyzu1Fpp88hq1.CO'),
(13, 'paolo13', '$2y$12$/AyhrpVNO4IdAbdW4CA/Eup82MGGMozz7Y7PZ1dsNbyvTKKhD5qHS'),
(12, 'paolo12', '$2y$12$HBNzmKFlkELG3rAUNeSyOeWmY2JZ36w2koybmFgcWBmZ9Mdv3G1mq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
