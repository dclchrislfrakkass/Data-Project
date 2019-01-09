-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 09 jan. 2019 à 21:30
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
  `NomClassification` varchar(2) NOT NULL,
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
  `id_ville` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `observer`
--

CREATE TABLE `observer` (
  `idRegion` int(6) NOT NULL,
  `NomClassification` varchar(6) NOT NULL,
  `idDepartement` varchar(6) NOT NULL,
  `id_ville` varchar(6) NOT NULL
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
  `NomEtude` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cas`
--
ALTER TABLE `cas`
  ADD PRIMARY KEY (`NomClassification`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idDepartement`);

--
-- Index pour la table `observer`
--
ALTER TABLE `observer`
  ADD PRIMARY KEY (`idRegion`,`NomClassification`,`idDepartement`,`id_ville`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepartement` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `observer`
--
ALTER TABLE `observer`
  MODIFY `idRegion` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(40) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
