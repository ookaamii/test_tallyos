-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 30 juil. 2020 à 11:50
-- Version du serveur :  8.0.21-0ubuntu0.20.04.3
-- Version de PHP :  7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ruches`
--
CREATE DATABASE IF NOT EXISTS `ruches` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ruches`;

-- --------------------------------------------------------

--
-- Structure de la table `details_ruche`
--

CREATE TABLE `details_ruche` (
  `id` int NOT NULL,
  `id_ruche` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poids` decimal(10,0) NOT NULL,
  `temperature` int NOT NULL,
  `humidite` int NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `details_ruche`
--

INSERT INTO `details_ruche` (`id`, `id_ruche`, `nom`, `poids`, `temperature`, `humidite`, `date`) VALUES
(1, 1, 'Ruche A', '40', 14, 80, '2020-07-01 08:00:00'),
(2, 1, 'Ruche A', '46', 14, 81, '2020-07-01 08:30:00'),
(3, 3, 'Ruche B', '40', 15, 79, '2020-07-01 08:00:00'),
(4, 3, 'Ruche B', '42', 15, 78, '2020-07-01 08:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `ruches`
--

CREATE TABLE `ruches` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ruches`
--

INSERT INTO `ruches` (`id`, `nom`, `latitude`, `longitude`) VALUES
(1, 'Ruche A', '35.70902600', '139.73199200'),
(3, 'Ruche B', '46.81387800', '-71.20798100'),
(4, 'Ruche C', '-40.90055700', '174.88597100');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `details_ruche`
--
ALTER TABLE `details_ruche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruche` (`id_ruche`);

--
-- Index pour la table `ruches`
--
ALTER TABLE `ruches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `details_ruche`
--
ALTER TABLE `details_ruche`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ruches`
--
ALTER TABLE `ruches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `details_ruche`
--
ALTER TABLE `details_ruche`
  ADD CONSTRAINT `details_ruche_ibfk_1` FOREIGN KEY (`id_ruche`) REFERENCES `ruches` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
