-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 mai 2023 à 12:04
-- Version du serveur : 5.7.40
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laia_crea`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_administrateur` int(11) NOT NULL AUTO_INCREMENT,
  `email_administrateur` varchar(50) NOT NULL,
  `mdp_administrateur` varchar(100) NOT NULL,
  PRIMARY KEY (`id_administrateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_administrateur`, `email_administrateur`, `mdp_administrateur`) VALUES
(1, 'adil@gmail.com', '$2y$12$DjrqjaiLyixd1qETXnA4julmDV3S..A/d3rDr9pTsTqNbhAta7Ye.');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Naissance'),
(2, 'Mariage'),
(3, 'Voyage'),
(4, 'Maison');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(50) NOT NULL,
  `description_produit` varchar(250) NOT NULL,
  `prix_produit` float NOT NULL,
  `image_produit` varchar(100) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_appartenir_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description_produit`, `prix_produit`, `image_produit`, `id_categorie`) VALUES
(1, 'Coffret Naissance', '<li>Body bÃ©bÃ©</li>\r\n<li>Brosse</li>\r\n<li>Peigne</li>\r\n<li>Doudou</li>', 25, 'baby_deco.jpg', 1),
(2, 'Coffret Mariage', '<li>Plateau Alliances</li>\r\n<li>Peignoir</li>\r\n<li>Pantoufles</li>\r\n<li>Coussins</li>', 39, 'lit_wedd.jpeg', 2),
(3, 'Coffret Voyage', '<li>ProtÃ¨ge passeport</li>\r\n<li>Pochette</li>\r\n<li>Masque de sommeil</li>', 25, 'passport_avion.jpeg', 3),
(4, 'Coffret Maison', '<li>Cadre famille</li>\r\n<li>Porte clÃ©s</li>\r\n<li>Bougie</li>', 19, '1-la-deco-campagne-chic-a-le-vent-en-poupe-maisons-du-monde.jpg', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_appartenir_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
