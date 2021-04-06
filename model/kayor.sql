-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 avr. 2021 à 16:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kayor`
--

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `idCommand` int(11) NOT NULL AUTO_INCREMENT,
  `nameCustomer` varchar(255) NOT NULL,
  `telCustomer` varchar(255) NOT NULL,
  `mailCustomer` varchar(255) NOT NULL,
  `nameStreet` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gombo` varchar(255) DEFAULT NULL,
  `piment` varchar(255) DEFAULT NULL,
  `ananas` varchar(255) DEFAULT NULL,
  `aubergine` varchar(255) DEFAULT NULL,
  `mangue` varchar(255) DEFAULT NULL,
  `détail` varchar(255) NOT NULL,
  `dateCommand` datetime NOT NULL,
  PRIMARY KEY (`idCommand`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`idCommand`, `nameCustomer`, `telCustomer`, `mailCustomer`, `nameStreet`, `postalCode`, `city`, `country`, `gombo`, `piment`, `ananas`, `aubergine`, `mangue`, `détail`, `dateCommand`) VALUES
(67, 'Larissa Zoba', '0699691995', 'somafleg@gmail.com', '2 rue des Moulins, Chez M. KIONGA', '77440', 'Lizy sur Ourcq', 'france', NULL, 'on', NULL, NULL, 'on', 'mangue et gombo', '2021-03-23 18:46:45'),
(66, 'jojo bizarre', '0674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'royaume-uni', NULL, 'on', NULL, 'on', NULL, 'aubergine pour 5kg le kilo', '2021-03-23 18:32:42'),
(120, 'robert', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'chine', NULL, 'on', NULL, NULL, 'on', 'mangue et piment', '2021-03-31 14:23:46'),
(62, 'jean', '0645121231', 'jojo@check.fr', '5 rue du lion', '75000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de Gombos pour un montant total de 20 euros et 1 kilo de mangues pour un montant total de 50 euros  ', '2021-03-18 14:52:20'),
(61, 'jean', '0645121231', 'jojo@check.fr', '5 rue du lion', '75000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de Gombos pour un montant total de 20 euros et 1 kilo de mangues pour un montant total de 50 euros  ', '2021-03-18 14:47:40'),
(59, 'sow', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de Gombos pour un montant total de 20 euros et 1 kilo de mangues pour un montant total de 50 euros', '2021-03-18 14:43:25'),
(60, 'robert', '0674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'royaume-uni', 'on', NULL, NULL, NULL, 'on', '2 kilos de Gombos pour un montant total de 20 euros et 1 kilo de mangues pour un montant total de 50 euros ', '2021-03-18 14:44:18'),
(63, 'sow', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', NULL, 'on', NULL, NULL, NULL, 'achat de piment', '2021-03-18 15:09:52'),
(55, 'sow', '0674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de gombos à 20 euros et 1 kilo de mangues à 50 euros', '2021-03-18 14:40:07'),
(56, 'sow', '0674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de gombos à 20 euros et 1 kilo de mangues à 50 euros', '2021-03-18 14:40:13'),
(57, 'sow', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de gombos pour un total de 20 euros et 1 kilo de mangues pour un montant de 50 euros.', '2021-03-18 14:41:58'),
(58, 'sow', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'france', 'on', NULL, NULL, NULL, 'on', '2 kilos de gombos pour un total de 20 euros et 1 kilo de mangues pour un montant de 50 euros.', '2021-03-18 14:42:13'),
(119, 'robert', '674590931', 'somafleg@gmail.com', '2 RUE DES MOULINS', '78000', 'paris', 'royaume-uni', NULL, NULL, NULL, NULL, 'on', 'efecegv', '2021-03-29 14:11:24');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `nameCustomer` varchar(255) NOT NULL,
  `mdpCustomer` varchar(255) NOT NULL,
  `mailCustomer` varchar(255) NOT NULL,
  PRIMARY KEY (`idCustomer`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`idCustomer`, `nameCustomer`, `mdpCustomer`, `mailCustomer`) VALUES
(2, 'jojo', '$2y$10$awdAD76yspZPop5vPwHQAuR.yWObBRHMp73x7VHZl2htmYoPFl6O.', 'somafleg@gmail.com'),
(3, 'brasco', '$2y$10$BuooygBaFNPbeVao3QoeIOUWJB6q6fD6BbuR3G8/zOg6K4vHXWF7i', 'somafleg@gmail.com'),
(4, 'bob', '$2y$10$cSX4tYSYwJ9m/xeCMiw6AeQFuKKGFBH2q8L0voNXVXoJLF6sYLU2S', 'kionga.eryk@gmail.com'),
(5, 'danny', '$2y$10$D3TljHVB2/UuXgo2DKMvVutHZwRG0RtOCCe3S0E0tFKG2rDh4rNfq', 'somafleg@gmail.com'),
(14, 'pope', '$2y$10$nr8tVejhUUwhvr/MA9RV.et85lKvuDdW53yEgWPQmwfdJN1/BXUSC', 'daneric022001@yahoo.fr'),
(7, 'massoumou', '$2y$10$c3CsU.8DoTYRqpyWarfcAenOcCIECBBDx6Pj42pE92f.GBJSz.t56', 'kionga.eryk@gmail.com'),
(8, 'DANIEL KIONGA', '$2y$10$Q.3pPt6EciSaFgbMBKwVzuDYmtKbSvqQjynxtwTPhsr93109KRngm', 'kionga.eryk@gmail.com'),
(9, 'jack rere', '$2y$10$r1jjVU2wWVZqh6N4ZSKtnuf77rvLLWfB0c1gWN2iLp0tUSO33VLVG', 'somafleg@gmail.com'),
(16, 'robert', '$2y$10$gHqickwOpWQb80SLwGHBB.gxFs1vSKZ6BE4GaRJdk9DHEmUNoz6fO', 'kionga.eryk@gmail.com'),
(15, 'Larissa Zoba', '$2y$10$ZJufvDtRnwjxc4N/kRXjju63ZL0bwJpQRpPa2ZpPi2axdos1h/.tq', 'somafleg@gmail.com'),
(17, 'sow', '$2y$10$wUrltDNF1sR0rn.qcnhp6uJkssRTeD8GtBwbyspoBjj28sGEBts/2', 'somafleg@gmail.com'),
(18, 'toto', '$2y$10$IRwrMlDeHSpk.tlERANdMO/CrA1OVJLZKRk9ElOjZxaK6KHNqzpTu', 'kionga.eryk@gmail.com'),
(19, 'jojo bizarre', '$2y$10$dWJ.fcmItUFjNY81NP1kxet6FG.zH3PgQDro0cjAorcCYHOHGDbJC', 'somafleg@gmail.com'),
(20, 'jean', '$2y$10$Qqb5T91jdDGD4UZalVlOAOmvcPIsGiPpT.tzRp6met3jqv8UMFlOW', 'jojo@check.fr'),
(21, 'kokotkt', '$2y$10$G6NHkdWpf4nFjtIuWD5OBeur6XlD1g0X/Szf3nxfJhHwHXa2l4CsS', 'kk@tkt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
