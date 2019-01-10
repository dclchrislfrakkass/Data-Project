-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 10 jan. 2019 à 18:30
-- Version du serveur :  5.5.57-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dcl.dartagnan`
--

-- --------------------------------------------------------

--
-- Structure de la table `cas`
--

CREATE TABLE `cas` (
  `id_cas` int(7) NOT NULL DEFAULT '0',
  `NumEtude` varchar(15) DEFAULT NULL,
  `NomClassification` varchar(6) NOT NULL,
  `Longitude` varchar(9) DEFAULT NULL,
  `Latitude` varchar(9) DEFAULT NULL,
  `DateObservationEtude` varchar(10) DEFAULT NULL,
  `ResumeWeb` varchar(252) DEFAULT NULL,
  `Doc_Associe` varchar(90) DEFAULT NULL,
  `ResumeLong` varchar(3874) DEFAULT NULL,
  `DonneeTable2_doc` varchar(1784) DEFAULT NULL,
  `DateModification` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepartement` int(3) NOT NULL,
  `DepartementEtude` varchar(3) DEFAULT NULL,
  `NomduDepartement` varchar(24) DEFAULT NULL,
  `id_ville` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `observer`
--

CREATE TABLE `observer` (
  `id_cas` int(7) NOT NULL,
  `idRegion` int(6) NOT NULL,
  `NumEtude` varchar(15) NOT NULL,
  `idDepartement` int(3) NOT NULL,
  `id_ville` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idRegion` int(6) NOT NULL,
  `RegionEtude` varchar(26) DEFAULT NULL,
  `idDepartement` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(40) NOT NULL,
  `NumEtude` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cas`
--
ALTER TABLE `cas`
  ADD PRIMARY KEY (`id_cas`),
  ADD KEY `NumEtude` (`NumEtude`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idDepartement`);

--
-- Index pour la table `observer`
--
ALTER TABLE `observer`
  ADD PRIMARY KEY (`idRegion`,`NumEtude`,`idDepartement`,`id_ville`),
  ADD KEY `idDepartement` (`idDepartement`),
  ADD KEY `id_ville` (`id_ville`),
  ADD KEY `id_cas` (`id_cas`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idRegion`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`idDepartement`) REFERENCES `region` (`idRegion`);

--
-- Contraintes pour la table `observer`
--
ALTER TABLE `observer`
  ADD CONSTRAINT `observer_ibfk_3` FOREIGN KEY (`id_cas`) REFERENCES `cas` (`id_cas`),
  ADD CONSTRAINT `observer_ibfk_1` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`),
  ADD CONSTRAINT `observer_ibfk_2` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`idRegion`) REFERENCES `observer` (`idRegion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
