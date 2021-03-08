-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 08 mars 2021 à 20:59
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP : 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kbwyoyxi_jsphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `calcul_log`
--

CREATE TABLE `calcul_log` (
  `id` int(11) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `imc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `calcul_log`
--

INSERT INTO `calcul_log` (`id`, `poids`, `taille`, `imc`) VALUES
(3, '12', '12', '0.083333333333333'),
(4, '50', '150', '0.06'),
(5, '50', '250', '0.1'),
(6, '25', '150', '0.24'),
(7, '12', '40', '0.27777777777778');

-- --------------------------------------------------------

--
-- Structure de la table `connexion_log`
--

CREATE TABLE `connexion_log` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion_log`
--

INSERT INTO `connexion_log` (`id`, `user_id`, `date`) VALUES
(1, '3', 'test'),
(2, '3', '08/03/2021'),
(3, '3', '08/03/2021');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(3, 'test', 'test@test.fr', 'test'),
(24, '', '', ''),
(25, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calcul_log`
--
ALTER TABLE `calcul_log`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `connexion_log`
--
ALTER TABLE `connexion_log`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calcul_log`
--
ALTER TABLE `calcul_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `connexion_log`
--
ALTER TABLE `connexion_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
