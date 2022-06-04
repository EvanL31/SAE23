-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 03 Juin 2022 à 17:06
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `SAE_23`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS `SAE23`;
CREATE DATABASE IF NOT EXISTS `SAE23`;
USE SAE23;
--
-- Structure de la table `ADMINISTRATION`
--

CREATE TABLE IF NOT EXISTS `ADMINISTRATION` (
  `LOGIN` varchar(15) NOT NULL,
  `PASSWD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `BATIMENT`
--

CREATE TABLE IF NOT EXISTS `BATIMENT` (
  `BAT_ID` varchar(15) NOT NULL,
  `BAT_NOM` varchar(15) NOT NULL,
  `GEST_NOM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `BATIMENT`
--

INSERT INTO `BATIMENT` (`BAT_ID`, `BAT_NOM`, `GEST_NOM`) VALUES
('1', 'RT', 'GEST_RT'),
('2', 'INFO', 'GEST_INFO');

-- --------------------------------------------------------

--
-- Structure de la table `CAPTEUR`
--

CREATE TABLE IF NOT EXISTS `CAPTEUR` (
  `CAPT_ID` int(5) NOT NULL,
  `CAPT_NOM` varchar(15) NOT NULL,
  `CAPT_TYPE` varchar(15) NOT NULL,
  `BAT_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `CAPTEUR`
--

INSERT INTO `CAPTEUR` (`CAPT_ID`, `CAPT_NOM`, `CAPT_TYPE`, `BAT_ID`) VALUES
(1, 'TE208', 'temperature', '1'),
(2, 'CE208', 'co2', '1');

-- --------------------------------------------------------

--
-- Structure de la table `GESTIONNAIRE`
--

CREATE TABLE IF NOT EXISTS `GESTIONNAIRE` (
  `GEST_NOM` varchar(15) NOT NULL,
  `LOGIN` varchar(15) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `GESTIONNAIRE`
--

INSERT INTO `GESTIONNAIRE` (`GEST_NOM`, `LOGIN`, `PASSWORD`) VALUES
('GEST_INFO', 'info', 'etud'),
('GEST_RT', 'rt', 'etud');

-- --------------------------------------------------------

--
-- Structure de la table `MESURE`
--

CREATE TABLE IF NOT EXISTS `MESURE` (
  `MES_ID` int(5) NOT NULL,
  `MES_VAL` varchar(30) NOT NULL,
  `MES_DATE` date NOT NULL,
  `CAPT_TYPE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ADMINISTRATION`
--
ALTER TABLE `ADMINISTRATION`
 ADD UNIQUE KEY `LOGIN` (`LOGIN`), ADD UNIQUE KEY `PASSWD` (`PASSWD`);

--
-- Index pour la table `BATIMENT`
--
ALTER TABLE `BATIMENT`
 ADD PRIMARY KEY (`BAT_ID`), ADD UNIQUE KEY `BAT_NOM` (`BAT_NOM`), ADD UNIQUE KEY `ADMIN_NOM` (`GEST_NOM`);

--
-- Index pour la table `CAPTEUR`
--
ALTER TABLE `CAPTEUR`
 ADD PRIMARY KEY (`CAPT_ID`), ADD UNIQUE KEY `CAPT_NOM` (`CAPT_NOM`), ADD UNIQUE KEY `CAPT_TYPE` (`CAPT_TYPE`), ADD KEY `CAPTEUR_ibfk_1` (`BAT_ID`);

--
-- Index pour la table `GESTIONNAIRE`
--
ALTER TABLE `GESTIONNAIRE`
 ADD PRIMARY KEY (`GEST_NOM`);

--
-- Index pour la table `MESURE`
--
ALTER TABLE `MESURE`
 ADD PRIMARY KEY (`MES_ID`), ADD UNIQUE KEY `MES_VAL` (`MES_VAL`), ADD KEY `MESURE_ibfk_1` (`CAPT_TYPE`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CAPTEUR`
--
ALTER TABLE `CAPTEUR`
ADD CONSTRAINT `CAPTEUR_ibfk_1` FOREIGN KEY (`BAT_ID`) REFERENCES `BATIMENT` (`BAT_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `GESTIONNAIRE`
--
ALTER TABLE `GESTIONNAIRE`
ADD CONSTRAINT `GESTIONNAIRE_ibfk_1` FOREIGN KEY (`GEST_NOM`) REFERENCES `BATIMENT` (`GEST_NOM`) ON DELETE CASCADE;

--
-- Contraintes pour la table `MESURE`
--
ALTER TABLE `MESURE`
ADD CONSTRAINT `MESURE_ibfk_1` FOREIGN KEY (`CAPT_TYPE`) REFERENCES `CAPTEUR` (`CAPT_TYPE`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
