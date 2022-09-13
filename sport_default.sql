-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 août 2022 à 14:52
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sport_default`
--

-- --------------------------------------------------------

--
-- Structure de la table `api_clients`
--

CREATE TABLE `api_clients` (
  `client_id` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  `password` varchar(320) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `full_description` varchar(255) NOT NULL,
  `urll` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table `api_install_perm`
--

CREATE TABLE `api_install_perm` (
  `client_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `Salle_active` int(255) NOT NULL DEFAULT 1,
  `Lire` int(255) NOT NULL,
  `Ecrire` int(255) NOT NULL,
  `Ajouter` int(255) NOT NULL,
  `Ajouter_une_production` int(255) NOT NULL,
  `Lecture_des_paiements` int(255) NOT NULL,
  `Lecture_des_statistques` int(255) NOT NULL,
  `Abonnement` int(255) NOT NULL,
  `Lecture_des_horaires_de_paiements` int(255) NOT NULL,
  `Ecriture_des_paiements` int(255) NOT NULL,
  `Lecture_des_jours_de_paiements` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO `password` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ddee3826c565b4506be8acad3a521966');

-- --------------------------------------------------------

--
-- Structure de la table `permission_globale`
--

CREATE TABLE `permission_globale` (
  `client_id` int(110) NOT NULL,
  `Salle_active` int(255) NOT NULL DEFAULT 1,
  `Lire` int(255) NOT NULL,
  `Ecrire` int(255) NOT NULL,
  `Ajouter` int(255) NOT NULL,
  `Ajouter_une_production` int(255) NOT NULL,
  `Lecture_des_paiements` int(255) NOT NULL,
  `Lecture_des_statistques` int(255) NOT NULL,
  `Abonnement` int(255) NOT NULL,
  `Lecture_des_horaires_de_paiements` int(255) NOT NULL,
  `Ecriture_des_paiements` int(255) NOT NULL,
  `Lecture_des_jours_de_paiements` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table `salle_de_sport3`
--

CREATE TABLE `salle_de_sport3` (
  `client_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `Salle_active` int(11) NOT NULL DEFAULT 1,
  `Nom` varchar(255) NOT NULL,
  `branche` varchar(255) NOT NULL,
  `zones` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `api_clients`
--
ALTER TABLE `api_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `api_install_perm`
--
ALTER TABLE `api_install_perm`
  ADD PRIMARY KEY (`salle_id`);

--
-- Index pour la table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permission_globale`
--
ALTER TABLE `permission_globale`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `salle_de_sport3`
--
ALTER TABLE `salle_de_sport3`
  ADD PRIMARY KEY (`salle_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `api_clients`
--
ALTER TABLE `api_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `api_install_perm`
--
ALTER TABLE `api_install_perm`
  MODIFY `salle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `permission_globale`
--
ALTER TABLE `permission_globale`
  MODIFY `client_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `salle_de_sport3`
--
ALTER TABLE `salle_de_sport3`
  MODIFY `salle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
