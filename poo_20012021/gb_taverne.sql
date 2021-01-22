-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 jan. 2021 à 09:12
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gb_taverne`
--

-- --------------------------------------------------------

--
-- Structure de la table ` annonce`
--

CREATE TABLE ` annonce` (
  `id annonce` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `annonce_date` timestamp NULL DEFAULT NULL,
  `user_mail` varchar(255) DEFAULT NULL,
  `annonce_pdf` varchar(255) DEFAULT NULL,
  `annonce_tmp` varchar(3) DEFAULT NULL,
  `annonce_visible` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table ` annonce`
--

INSERT INTO ` annonce` (`id annonce`, `titre`, `description`, `photo`, `prix`, `annonce_date`, `user_mail`, `annonce_pdf`, `annonce_tmp`, `annonce_visible`) VALUES
(1, 'D&D', 'Donjons et Dragons (en anglais Dungeons & Dragons), souvent abrégé en D&D, DnD ou AD&D, est l\'un des tout premiers jeux de rôle sur table de genre médiéval-fantastique.\r\n\r\nLe jeu a été créé dans les années 1970 par les Américains Gary Gygax et Dave Arneson. Gygax a aussi fondé la première société d\'édition de jeux de rôle, Tactical Studies Rules (plus connue sous le sigle de TSR) pour diffuser ce jeu.', 'na', 15, '2021-01-21 08:28:26', 'jcmairot@gmail.com', 'na', 'non', 'oui'),
(2, 'D&D', 'Donjons et Dragons (en anglais Dungeons & Dragons), souvent abrégé en D&D, DnD ou AD&D, est l\'un des tout premiers jeux de rôle sur table de genre médiéval-fantastique.\r\n\r\nLe jeu a été créé dans les années 1970 par les Américains Gary Gygax et Dave Arneson. Gygax a aussi fondé la première société d\'édition de jeux de rôle, Tactical Studies Rules (plus connue sous le sigle de TSR) pour diffuser ce jeu.', 'na', 15, '2021-01-21 08:28:26', 'jcmairot@gmail.com', 'na', 'non', 'oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table ` annonce`
--
ALTER TABLE ` annonce`
  ADD PRIMARY KEY (`id annonce`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table ` annonce`
--
ALTER TABLE ` annonce`
  MODIFY `id annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
