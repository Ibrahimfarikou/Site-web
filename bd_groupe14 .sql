-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 juin 2022 à 18:56
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_groupe14`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numChambre` varchar(10) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nomBloc` varchar(10) NOT NULL,
  `batiment` varchar(1) NOT NULL,
  `etat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numChambre`, `level`, `nomBloc`, `batiment`, `etat`) VALUES
('A0X01', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X02', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X03', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X04', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X05', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X06', 'Rez de chaussée', 'Bloc 72', 'A', ''),
('A0X07', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X08', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X09', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X10', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X11', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X12', 'Level 72 1er', 'Bloc 72', 'A', ''),
('A0X13', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X14', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X15', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X16', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X17', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X18', 'Level 72 2eme', 'Bloc 72', 'A', ''),
('A0X19', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X20', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X21', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X22', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X23', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X24', 'Level 48 1er', 'Bloc 48', 'A', ''),
('A0X25', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('A0X26', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('A0X27', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('A0X28', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('A0X29', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('A0X30', 'Level 48 2eme', 'Bloc 48', 'A', ''),
('B0X01', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X02', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X03', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X04', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X05', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X06', 'Rez de chaussée', 'Bloc 72', 'B', ''),
('B0X07', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X08', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X09', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X10', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X11', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X12', 'Level 72 1er', 'Bloc 72', 'B', ''),
('B0X13', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X14', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X15', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X16', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X17', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X18', 'Level 72 2eme', 'Bloc 72', 'B', ''),
('B0X19', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X20', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X21', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X22', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X23', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X24', 'Level 48 1er', 'Bloc 48', 'B', ''),
('B0X25', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('B0X26', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('B0X27', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('B0X28', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('B0X29', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('B0X30', 'Level 48 2eme', 'Bloc 48', 'B', ''),
('C0X01', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X02', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X03', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X04', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X05', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X06', 'Rez de chaussée', 'Bloc 72', 'C', ''),
('C0X07', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X08', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X09', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X10', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X11', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X12', 'Level 72 1er', 'Bloc 72', 'C', ''),
('C0X13', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X14', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X15', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X16', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X17', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X18', 'Level 72 2eme', 'Bloc 72', 'C', ''),
('C0X19', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X20', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X21', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X22', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X23', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X24', 'Level 48 1er', 'Bloc 48', 'C', ''),
('C0X25', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('C0X26', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('C0X27', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('C0X28', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('C0X29', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('C0X30', 'Level 48 2eme', 'Bloc 48', 'C', ''),
('D0X01', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X02', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X03', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X04', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X05', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X06', 'Rez de chaussée', 'Bloc 72', 'D', ''),
('D0X07', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X08', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X09', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X10', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X11', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X12', 'Level 72 1er', 'Bloc 72', 'D', ''),
('D0X13', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X14', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X15', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X16', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X17', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X18', 'Level 72 2eme', 'Bloc 72', 'D', ''),
('D0X19', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X20', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X21', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X22', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X23', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X24', 'Level 48 1er', 'Bloc 48', 'D', ''),
('D0X25', 'Level 48 2eme', 'Bloc 48', 'D', ''),
('D0X26', 'Level 48 2eme', 'Bloc 48', 'D', ''),
('D0X27', 'Level 48 2eme', 'Bloc 48', 'D', ''),
('D0X28', 'Level 48 2eme', 'Bloc 48', 'D', ''),
('D0X29', 'Level 48 2eme', 'Bloc 48', 'D', ''),
('D0X30', 'Level 48 2eme', 'Bloc 48', 'D', '');

-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE `locataire` (
  `ID` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateborn` date NOT NULL,
  `placeborn` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `numeroCNI` varchar(29) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  `profession` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `ID` int(5) NOT NULL,
  `id_client` int(5) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `nbrAdult` int(1) NOT NULL,
  `nbrEnfant` int(1) NOT NULL,
  `dateEntree` date NOT NULL,
  `dureeSejour` varchar(20) NOT NULL,
  `chambre` varchar(50) NOT NULL,
  `batiment` varchar(2) NOT NULL,
  `modePaiement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `locations`
--

INSERT INTO `locations` (`ID`, `id_client`, `nom_client`, `prenom_client`, `nbrAdult`, `nbrEnfant`, `dateEntree`, `dureeSejour`, `chambre`, `batiment`, `modePaiement`) VALUES
(1, 2, '', '', 1, 1, '2111-01-01', '2', 'A0X01', 'A', 'Orange Money');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(5) NOT NULL,
  `id_client` int(5) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `nbrAdult` int(1) NOT NULL,
  `nbrEnfant` int(1) NOT NULL,
  `dateEntree` date NOT NULL,
  `dureeSejour` varchar(20) NOT NULL,
  `chambre` varchar(50) NOT NULL,
  `batiment` varchar(1) NOT NULL,
  `modePaiement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID`, `id_client`, `nom_client`, `prenom_client`, `nbrAdult`, `nbrEnfant`, `dateEntree`, `dureeSejour`, `chambre`, `batiment`, `modePaiement`) VALUES
(1, 1, '', '', 1, 1, '2001-01-01', '2', 'A0X01', 'A', 'Orange Money');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `username`, `email`, `password`) VALUES
(1, 'root', 'root@gmail.com', 'root'),
(2, 'GROUPE14', 'groupe14@gmail.com', 'GROUPE14'),
(3, 'groupe14', 'groupe14@gmail.com', 'groupe14'),
(4, 'ROOT', 'root@gmail.com', 'ROOT'),
(5, 'GROUPE14', 'groupe14@gmail.com', 'groupe14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numChambre`);

--
-- Index pour la table `locataire`
--
ALTER TABLE `locataire`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `locataire`
--
ALTER TABLE `locataire`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
