-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 31 Octobre 2017 à 09:34
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `vehicles`
--

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `wheelsNb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicle`
--

INSERT INTO `vehicle` (`id`, `type`, `color`, `price`, `wheelsNb`) VALUES
(23, 'truck', 'Bleu', 15000, 6),
(25, 'moto', 'Jaune', 12000, 2),
(26, 'car', 'Rose', 7000, 4),
(27, 'car', 'Rose', 7000, 4),
(28, 'car', 'Rose', 7000, 4),
(29, 'moto', 'Violette', 4000, 2),
(30, 'moto', 'Jaune', 19000, 2),
(31, 'moto', 'Blanche', 4, 2),
(32, 'moto', 'Rose', 20000, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;