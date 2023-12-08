-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 déc. 2023 à 03:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nuit`
--

-- --------------------------------------------------------

--
-- Structure de la table `reset`
--

CREATE TABLE `reset` (
  `idreset` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `valid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reset`
--

INSERT INTO `reset` (`idreset`, `token`, `iduser`, `valid`) VALUES
(1, '556csFlKqf', 5, 0),
(2, 'bFc0dfZtPm', 2, 0),
(3, '9ge9LVLu9i', 2, 0),
(4, 'dL1iPOEvwH', 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(2, 'aaaa', 'bbbb', 'aa@aa.aa', 'azerty'),
(3, 'Ahmed', 'Hmila', 'ahmed.hmila@gmail.com', 'azerty'),
(4, 'Ahmed', 'Hmila', 'ahmed.hmila@gmail.com', ''),
(5, 'rh', 'sarra', 'sarra@gmail.com', 'saeea'),
(6, 'rhouma', 'sarra', 'rh@gmail.com', 'rhouma'),
(7, 'HMILA', 'Ahmed', 'ahmedhmilla1998@gmail.tn', 'azerty');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`idreset`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reset`
--
ALTER TABLE `reset`
  MODIFY `idreset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
